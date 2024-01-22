
<!DOCTYPE html>
<html lang="en">


 from Zimys.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Jan 2024 22:21:16 GMT -->
<head>
   <!-- Title -->
	<title>Zimys - Ticketing Admin Dashboard Bootstrap HTML Template | DexignZone</title>
 
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
	<link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
   <link class="main-css" href="css/style.css" rel="stylesheet">

</head>
<body>
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
										<span class="ms-2">Profile</span>
									</a>

									<a href="deconnexion.php" class="dropdown-item ai-icon">
										<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
											<polyline points="16 17 21 12 16 7"></polyline>
											<line x1="21" y1="12" x2="9" y2="12"></line>
										</svg>
										<span class="ms-2">Logout</span>
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
					<li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="dashboard.php">Dashboard</a></li>
							<li><a href="analytics.php">Analytics</a></li>
						</ul>
					</li>
					<li>
						<a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
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


		<div class="event-sidebar dz-scroll active" id="eventSidebar">
			<div class="card shadow-none rounded-0 bg-transparent h-auto mb-0">
				<div class="card-body text-center event-calender pb-2">
					<input type='text' class="form-control d-none" id='datetimepicker1'>
				</div>
			</div>
			<div class="card shadow-none rounded-0 bg-transparent h-auto">
				<div class="card-header border-0 pb-0">
					<h4 class="text-black">Upcoming Events</h4>
				</div>
				<div class="card-body">
					<div class="media mb-5 align-items-center event-list">
						<div class="p-3 text-center rounded me-3 date-bx bgl-primary">
							<h2 class="mb-0 text-black">3</h2>
							<h5 class="mb-1 text-black">Wed</h5>
						</div>
						<div class="media-body px-0">
							<h6 class="mt-0 mb-3 fs-14"><a class="text-black" href="events.html">Live Concert Choir Charity Event 2020</a></h6>
							<ul class="fs-14 list-inline mb-2 d-flex justify-content-between">
								<li>Ticket Sold</li>
								<li>561/650</li>
							</ul>
							<div class="progress mb-0" style="height:4px; width:100%;">
								<div class="progress-bar bg-warning progress-animated" style="width:85%; height:100%;" role="progressbar">
									<span class="sr-only">60% Complete</span>
								</div>
							</div>
						</div>
					</div>
					<div class="media mb-5 align-items-center event-list">
						<div class="p-3 text-center rounded me-3 date-bx bgl-primary">
							<h2 class="mb-0 text-black">16</h2>
							<h5 class="mb-1 text-black">Tue</h5>
						</div>
						<div class="media-body px-0">
							<h6 class="mt-0 mb-3 fs-14"><a class="text-black" href="events.html">Beautiful Fireworks Show In The New Year Night</a></h6>
							<ul class="fs-14 list-inline mb-2 d-flex justify-content-between">
								<li>Ticket Sold</li>
								<li>431/650</li>
							</ul>
							<div class="progress mb-0" style="height:4px; width:100%;">
								<div class="progress-bar bg-warning progress-animated" style="width:50%; height:100%;" role="progressbar">
									<span class="sr-only">60% Complete</span>
								</div>
							</div>
						</div>
					</div>
					<div class="media mb-0 align-items-center event-list">
						<div class="p-3 text-center rounded me-3 date-bx bgl-success">
							<h2 class="mb-0 text-black">28</h2>
							<h5 class="mb-1 text-black">Fri</h5>
						</div>
						<div class="media-body px-0">
							<h6 class="mt-0 mb-3 fs-14"><a class="text-black" href="events.html">The Story Of Danau Toba (Musical Drama)</a></h6>
							<ul class="fs-14 list-inline mb-2 d-flex justify-content-between">
								<li>Ticket Sold</li>
								<li>650/650</li>
							</ul>
							<div class="progress mb-0" style="height:4px; width:100%;">
								<div class="progress-bar bg-success progress-animated" style="width:100%; height:100%;" role="progressbar">
									<span class="sr-only">60% Complete</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer justify-content-between border-0 d-flex fs-14">
					<span>5 events more</span>
					<a href="events.html" class="text-primary">View more <i class="las la-long-arrow-alt-right scale5 ms-2"></i></a>
				</div>
			</div>
			<div class="card shadow-none rounded-0 bg-transparent h-auto mb-0">
				<div class="card-body text-center event-calender">
					<a href="javascript:void(0);" class="btn btn-primary btn-rounded btn shadow" data-bs-toggle="modal" data-bs-target="#exampleModal">
						+ New Event
					</a>
				</div>
			</div>
		</div>
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body rightside-event">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div id="user-activity" class="card">
							<div class="card-header border-0 pb-0 d-sm-flex d-block">
								<div>
									<h4 class="card-title mb-1">Nombres des réclamations</h4>
								</div>
								<div class="card-action card-tabs mt-3 mt-sm-0">
									<ul class="nav nav-tabs" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-bs-toggle="tab" href="#user" role="tab" aria-selected="true">
												Monthly
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-bs-toggle="tab" href="#user" role="tab" aria-selected="false">
												Weekly
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-bs-toggle="tab" href="#user" role="tab" aria-selected="false">
												Today
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="card-body">
								<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade active show" id="user" role="tabpanel"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
										<canvas id="activityLine" class="chartjs chartjs-render-monitor" height="350" style="display: block; width: 1041px; height: 350px;" width="1041"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-xxxl-12 col-lg-6">
						<div class="card">
							<div class="card-header border-0 pb-3 d-sm-flex d-block ">
								<h4 class="card-title">Derniers réclamations</h4>
								<div class="d-flex mt-3 mt-sm-0">
									<select class="default-select form-control form-control-sm me-3 style-1" aria-label="Default select example">
										<option selected>Weekly</option>
										<option value="1">Daily</option>
										<option value="2">Monthly</option>
									</select>
									<select class="default-select form-control form-control-sm style-1" aria-label="Default select example">
										<option value="1">2022</option>
										<option value="2">2023</option>
										<option selected>2024</option>
									</select>
								</div>
							</div>
							<div class="card-body">
								<div class="row mx-0 align-items-center">
									<div class="col-sm-8 col-md-7 col-xxl-7 px-0 text-center mb-3 mb-sm-0">
										<div id="chart" class="d-inline-block"></div>
									</div>
									<div class="col-sm-4 col-md-5 col-xxl-5 px-0">
										<div class="chart-deta">
											<div class="col px-0">
												<span class="bg-warning"></span>	
												<div class="mx-3">
													<p class="fs-14">Ticket Left</p>
													<h3>21,512</h3>
												</div>
											</div>
											<div class="col px-0">
												<span class="bg-primary"></span>	
												<div class="mx-3">
													<p class="fs-14">Ticket Sold</p>
													<h3>456,72</h3>
												</div>
											</div>
											<div class="col px-0">
												<span class="bg-success"></span>	
												<div class="mx-3">
													<p class="fs-14">Event Held</p>
													<h3>235</h3>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-xxxl-12 col-lg-6">
						<div class="card widget-media">
							<div class="card-header border-0 pb-0 ">
								<h4 class="text-black">Derniers réclamations</h4>
								<div class="dropdown ms-auto text-end">
									<div class="btn-link" data-bs-toggle="dropdown">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
									</div>
									<div class="dropdown-menu dropdown-menu-end">
										<a class="dropdown-item" href="javascript:void(0);">Show more</a>
									</div>
								</div>
							</div>
							<div class="card-body timeline pb-2 dz-scroll height370  loadmore-content" id="RecentActivityContent">
								<div class="timeline-panel align-items-end">
									<div class="media me-3">
									<?php
									if($gender="male"){
										echo"<img class='rounded-circle' alt='image' width='50' src='assets/images/profile/male.png'>";
									}else{
										echo"<img class='rounded-circle' alt='image' width='50' src='assets/images/profile/female.png'>";
									}
									echo"</div>
									<div class='media-body'>
										<h5 class='mb-1'><a class='text-black' href=''>$prenom $nom </a></h5>
										<p class='d-block mb-0 text-primary'><i class='las la-ticket-alt me-2 scale5 ms-1'></i>Height Performance conert 2020</p>
									</div>
										<p class='mb-0 fs-14'>2m ago</p>
									</div>";
									?>

							</div>
							<div class="card-footer border-0 pt-0 text-center">
								<a href="javascript:void(0);" class="btn-link dz-load-more btn" id="RecentActivity" rel="ajax/recentactivity.html">View more<i class="fa fa-angle-down ms-2 scale-2"></i></a>
							</div>
						</div>
					</div>
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body">
								<div class="row mx-0">
									<div class="col-sm-12 col-lg-4 px-0">
										<h2 class="fs-40 text-black font-w600">862,441 <small class="fs-18 ms-2 font-w600 mb-1">pcs</small></h2>
										<p class="font-w100 fs-20 text-black">Ticket Sold Today</p>
										<div class="justify-content-between border-0 d-flex fs-14 align-items-end">
											<a href="analytics.html" class="text-primary">View more <i class="las la-long-arrow-alt-right scale5 ms-2"></i></a>
											<div class="text-end">
												<span class="peity-primary" data-style="width:100%;">0,2,1,4</span>
												<h3 class="mt-2 mb-1">+4%</h3>
												<span>than last day</span>
											</div>
										</div>
									</div>
									<div class="col-sm-12 col-lg-8 px-0">
										<canvas id="ticketSold" height="200"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

		

      

        <!--**********************************
            Footer start
        ***********************************-->

        <!--**********************************
            Footer end
        ***********************************-->
		
		<!-- modal box strat -->
		<!-- Modal -->
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

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/chart-js/chart.bundle.min.js"></script>
	<script src="vendor/bootstrap-datetimepicker/js/moment.js"></script>
	<script src="vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>
	<!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>	
	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-1.js"></script>
	
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>


	
</body>

 from Zimys.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Jan 2024 22:21:43 GMT -->
</html>