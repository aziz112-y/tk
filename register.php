<?php
session_start();
if (isset($_SESSION["email"])) {
    header("location:dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>S'inscrire</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="index, follow">

    <meta name="keywords" content="	admin dashboard, admin template, administration, analytics, bootstrap, bootstrap admin, coupon, deal, modern, responsive admin dashboard, ticket, ticket dashboard, ticket system, admin panel,	Ticketing admin, Dashboard template, Bootstrap HTML, Ticket management, Event ticketing, Responsive design, User-friendly interface, Efficiency, Streamlining operations, Event management, Ticket sales, Customizable template, Stylish design, Modern dashboard">
    <meta name="description" content="Discover Tixia, the ultimate solution for ticketing administration. Our Bootstrap HTML Template empowers you to streamline ticketing tasks, enhancing operational efficiency with style and ease. Simplify your processes and elevate your ticketing management experience today.">

    <meta property="og:title" content="Tixia - Ticketing Admin Dashboard Bootstrap HTML Template | DexignZone">
    <meta property="og:description" content="Discover Tixia, the ultimate solution for ticketing administration. Our Bootstrap HTML Template empowers you to streamline ticketing tasks, enhancing operational efficiency with style and ease. Simplify your processes and elevate your ticketing management experience today.">
    <meta property="og:image" content="page-error-404.html">
    <meta name="format-detection" content="telephone=no">

    <meta name="twitter:title" content="Tixia - Ticketing Admin Dashboard Bootstrap HTML Template | DexignZone">
    <meta name="twitter:description" content="Discover Tixia, the ultimate solution for ticketing administration. Our Bootstrap HTML Template empowers you to streamline ticketing tasks, enhancing operational efficiency with style and ease. Simplify your processes and elevate your ticketing management experience today.">
    <meta name="twitter:image" content="page-error-404.html">
    <meta name="twitter:card" content="summary_large_image">

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link class="main-css" href="assets/css/style.css" rel="stylesheet">

</head>

<body>


    <div class="fix-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <div class="card mb-0 h-auto">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <a href="index.html"><img class="logo-auth" src="assets/images/logo-full.png" alt=""></a>
                            </div>
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-5">Créer un compte !</h1>
                            </div>
                            <form class="user" id="registerForm" method="post" action="controller/compte/register.php">
                                <?php
                                if (isset($_SESSION["error"]) && isset($_SESSION["error-type"])) {
                                    echo '<div class="card shadow mb-4">
                                    <div class="card-body ' . $_SESSION["error-type"] . '" id="card">
                                        ' . $_SESSION["error"] . '
                                    </div>
                                </div>';
                                    unset($_SESSION["error"]);
                                    unset($_SESSION["error-type"]);
                                }
                                ?>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label class="form-label" for="exampleFirstName">Prenom</label>
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Prenom" name="prenom">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="exampleLastName">Nom</label>
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Nom" name="nom">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <div class="position-relative">
                                            <input class="form-check-input" value="male" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Male
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="position-relative">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" value="female" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <label class="form-label" for="exampleInputEmail">Adresse mail</label>
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="hello@exemple.com" name="email">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="form-label" for="exampleInputTel">Num Telephone</label>
                                    <input type="tel" class="form-control form-control-user" id="exampleInputTel" placeholder="Numero de Telephone" name="tel">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="form-label" for="exampleInputTel">Mot de passe</label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="mdp">
                                        <span id="eye" class="show-pass eye">
                                            <i class="fa fa-eye-slash"></i>
                                            <i class="fa fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="form-label" for="exampleInputTel">Confirmer le mot de passe</label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" name="cmdp">
                                        <span id="eye2" class="show-pass eye">
                                            <i class="fa fa-eye-slash"></i>
                                            <i class="fa fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <label class="form-label" for="exampleInputNomS">Num telephone de l'entreprise</label>
                                    <input type="tel" class="form-control form-control-user" id="exampleInputNumS" placeholder="Numéro de téléphone de l'entreprise ou bien Center" name="nums">

                                </div>
                                <div class="form-group">

                                    <label class="form-label" for="exampleInputNomS">Nom de l'entreprise</label>
                                    <input type="text" class="form-control form-control-user" id="exampleInputNomS" placeholder="nom de la société" name="noms">

                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="exampleTextArea">Adresse de l'entreprise
                                    </label>
                                    <input type="text" name="adresse" class="form-control form-control-user" id="exampleTextArea" placeholder="Adresse de la Societe">

                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block" name="btn">
                                    S'inscrire
                                </button>

                            </form>
                            <hr>
                            <div class="text-center">
                                <a href="forgot-password.php">Mot de passe oublié?</a>
                            </div>
                            <div class="text-center">
                                <a href="login.php">Vous avez déjà un compte ? Login !</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="assets/js/custom.min.js"></script>
    <script src="assets/js/deznav-init.js"></script>
    <script>
        $(document).ready(function() {
            var eyeElement = $("#eye");
            var eyeElement2 = $("#eye2");
            var passwordInput = $("#exampleInputPassword");
            var passwordInput2 = $("#exampleRepeatPassword");
            eyeElement.click(function() {
                if (eyeElement.hasClass("show-pass") && eyeElement.hasClass("eye") && eyeElement.hasClass("active")) {
                    passwordInput.attr("type", "text");
                } else {
                    passwordInput.attr("type", "password");
                }
            });
            eyeElement2.click(function() {
                if (eyeElement2.hasClass("show-pass") && eyeElement2.hasClass("eye") && eyeElement2.hasClass("active")) {
                    passwordInput2.attr("type", "text");
                } else {
                    passwordInput2.attr("type", "password");
                }
            });
        });
    </script>
</body>

</html>