<?php
session_start();
if (!isset($_SESSION['email'])) {
	header('location:index.php');
} else {
	if ($_SESSION['type'] != "supervisor" && $_SESSION['type'] != "admin") {
		header('location:404.php');
	}
}
?>

<!DOCTYPE html>
<html lang="en">


<head>
	<!-- Title -->
	<title></title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="index, follow">

	<meta name="keywords" content="	admin dashboard, admin template, administration, analytics, bootstrap, bootstrap admin, coupon, deal, modern, responsive admin dashboard, ticket, ticket dashboard, ticket system, admin panel,	Ticketing admin, Dashboard template, Bootstrap HTML, Ticket management, Event ticketing, Responsive design, User-friendly interface, Efficiency, Streamlining operations, Event management, Ticket sales, Customizable template, Stylish design, Modern dashboard">
	<meta name="description" content="Discover Zimys, the ultimate solution for ticketing administration. Our Bootstrap HTML Template empowers you to streamline ticketing tasks, enhancing operational efficiency with style and ease. Simplify your processes and elevate your ticketing management experience today.">

	<meta property="og:title" content="Zimys - Ticketing Admin Dashboard Bootstrap HTML Template | DexignZone">
	<meta property="og:description" content="Discover Zimys, the ultimate solution for ticketing administration. Our Bootstrap HTML Template empowers you to streamline ticketing tasks, enhancing operational efficiency with style and ease. Simplify your processes and elevate your ticketing management experience today.">
	<meta property="og:image" content="page-error-404.html">
	<meta name="format-detection" content="telephone=no">

	<meta name="twitter:title" content="Zimys - Ticketing Admin Dashboard Bootstrap HTML Template | DexignZone">
	<meta name="twitter:description" content="Discover Zimys, the ultimate solution for ticketing administration. Our Bootstrap HTML Template empowers you to streamline ticketing tasks, enhancing operational efficiency with style and ease. Simplify your processes and elevate your ticketing management experience today.">
	<meta name="twitter:image" content="page-error-404.html">
	<meta name="twitter:card" content="summary_large_image">

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
	<link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<link class="main-css" href="assets/css/style.css" rel="stylesheet">

</head>

<body onload="update_type();setUpdate()">

	<div id="preloader">
		<div class="sk-three-bounce">
			<div class="sk-child sk-bounce1"></div>
			<div class="sk-child sk-bounce2"></div>
			<div class="sk-child sk-bounce3"></div>
		</div>
	</div>
	<div id="main-wrapper">
		<div class="nav-header">
			<div class="brand-logo">
				<img src="assets/images/logo.png" alt="Logo" class="brand-logo">
			</div>
			<div class="nav-control">
				<div class="hamburger">
					<span class="line"></span><span class="line"></span><span class="line"></span>
				</div>
			</div>
		</div>

		<div class="header">
			<div class="header-content">
				<nav class="navbar navbar-expand">
					<div class="collapse navbar-collapse justify-content-between">
						<div class="header-left">
							<div class="dashboard_bar">
								Liste Des Comptes
							</div>
						</div>

						<ul class="navbar-nav header-right">
							<li class="nav-item dropdown notification_dropdown">
								<div class="input-group search-area">
									<input type="text" class="form-control" placeholder="Search here...">
									<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
								</div>
							</li>
							<li class="nav-item dropdown notification_dropdown">
								<a class="nav-link bell  primary dz-theme-mode" href="javascript:void(0);">
									<i id="icon-light" class="fas fa-sun"></i>
									<i id="icon-dark" class="fas fa-moon"></i>

								</a>
							</li>

							<li class="nav-item dropdown header-profile">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<img src="assets/images/profile/<?php echo $_SESSION['gender'] ?>.png" width="20" alt="">
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="app-profile.html" class="dropdown-item ai-icon">
										<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
											<circle cx="12" cy="7" r="4"></circle>
										</svg>
										<span class="ms-2">Profile </span>
									</a>

									<a href="deconnexion.php" class="dropdown-item ai-icon">
										<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
											<polyline points="16 17 21 12 16 7"></polyline>
											<line x1="21" y1="12" x2="9" y2="12"></line>
										</svg>
										<span class="ms-2">Logout </span>
									</a>
								</div>
							</li>

						</ul>
					</div>
				</nav>
			</div>
		</div>

		<div class="deznav">
			<div class="deznav-scroll">
				<ul class="metismenu" id="menu">
					<li><a class="has-arrow ai-icon" href="dashboard.php" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="dashboard.php">Dashboard</a></li>
							<li><a href="analytics.html">Analytics</a></li>
						</ul>
					</li>
					<li>
						<a class="has-arrow ai-icon" href="gestComptesSA.php" aria-expanded="false">
							<i class="flaticon-381-diploma"></i>
							<span class="nav-text">Comptes </span>
						</a>
						<ul aria-expanded="false">
							<li><a href="gestComptesSA">Gestion Des Comptes</a></li>
							<?php if ($_SESSION['type'] == "supervisor") {
								echo "<li><a href='ajoutCompte.php'>Ajouter Un Compte</a></li>";
							}

							?>
						</ul>


					</li>
					<li><a class="has-arrow ai-icon" href="tickets.php" aria-expanded="false">
							<i class="flaticon-381-add-1"></i>
							<span class="nav-text">Tickets </span>
						</a>

					</li>

				</ul>
				</li>


			</div>
		</div>


		<div class="content-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header flex-wrap">
								<h4 class="card-title">LES COMPTES</h4>
								<?php if ($_SESSION['type'] == "supervisor") {
									echo "<a id='add' href='ajoutCompte.php' class='btn btn-primary me-3 mt-2 mt-sm-0'><i class='feather feather-user-plus'></i> Ajouter Compte</a>";
								}

								?>

							</div>
							<div class="card-body">
								<div class="table-responsive ticket-table ">
									<table id="example" class="display dataTablesCard table-responsive-xl" style="min-width: 845px" onfocus="setUpdate()">
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="exampleModalLabel">Event Title</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-xl-12">
								<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Event Name</label>
									<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="The Story Of Danau Toba">
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="assets/js/update_type.js"></script>
	<script>
		function update_table() {
			const xhttp = new XMLHttpRequest();

			xhttp.onreadystatechange = function() {
				if (this.readyState === 4 && this.status === 200) {
					document.getElementById("example").innerHTML = this.responseText;
					console.log("table updated");
				} else if (this.readyState === 4 && this.status !== 200) {
					console.error("Error occurred: " + this.status);
				}
			};

			xhttp.open("GET", "controller/compte/getComptes.php", true);
			xhttp.send();
		}
		update_table();

		function setUpdate() {
			setInterval(update_table, 30000);
		}
	</script>
	<script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

	<script src="vendor/bootstrap-datetimepicker/js/moment.js"></script>
	<script src="vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>

	<!-- Datatable -->
	<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/plugins-init/datatables.init.js"></script>

	<script src="assets/js/custom.min.js"></script>
	<script src="assets/js/deznav-init.js"></script>

</body>

</html>