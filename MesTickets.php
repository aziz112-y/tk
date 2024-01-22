<?php
session_start();

if ($_SESSION["email"] == null) {
  header("location:login.php");
} else {
  $type = $_SESSION["type"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link rel="stylesheet" href="../../assets/css/mestickets.css">
</head>

<body style="background: #F0F0F0;" onload="table()">
  <nav class="nav">
    <img class="logo" src="../../assets/image/test.png" />
    <ul class="nav-list">
      <?php
      if ($type == "client") {
        echo '<li class="list">
        <a href="NouveauTicket.php"><img src="/assets/image\plus.png" /><span>Nouveau Ticket</span></a>
        </li>';
      } else {
        echo '<li class="list">
        <a href="apercu.php"><img src="/assets/image\1.png" /><span>Aperçu</span></a>
        </li>';
      }
      ?>
      <li class="list active">
        <a href="MesTickets.php"><img src="/assets\image/ticketicon.png" /><span>
            <?php
            if ($type == "client") {
              echo "Mes Tickets";
            } else {
              echo "Tickets";
            }
            ?>
          </span></a>
      </li>
      <li class="list">
        <a href="DashboardClient.php"><img src="../../assets/image\moncompteicon.png" /><span>Mon COMPTE</span></a>
      </li>
      <li class="list">
        <a href="deconnexion.php"><img src="../../assets/image\deconnexionicon.png" /><span>Déconnexion</span></a>
      </li>
    </ul>
  </nav>
  <div class="container">
    <h2>Mes Tickets</h2>
    <a class="img-icon" href="../Client/NouveauTicket.php">
      <img class="icon1" src="../../assets/image\ticketicon.png" />
      <img class="icon2" src="../../assets\image/plus.png" />
    </a>
    <h3>Nous sommes là pour vous aider !</h3>
    <h3>Pour soumettre un autre ticket </h3>
    <h3> reviendrons vers vous bientôt.</h3>
    <div class="search-bar">
      <input type="text" placeholder="Recherche..." />
      <button><i class="fas fa-search"></i></button>
    </div>
    <div id="container">
            
    </div>
  </div>
  <script>
    function table() {
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function() {
        document.getElementById("container").innerHTML = this.responseText;
      }
      xhttp.open("GET", "controller/ticket/gettickets.php");
      xhttp.send();

    }
    setInterval(table, 6000);
  </script>
</body>

</html>