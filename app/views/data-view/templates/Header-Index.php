<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?= BASEURL; ?>/image/favicon-image-removebg-preview (1).png" type="image/ico" />

	<title><?= $data['judul']; ?></title>

	<!-- Bootstrap --><? ?>
	<link href="<?= BASEURL; ?>/data-view/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="<?= BASEURL; ?>/data-view/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="<?= BASEURL; ?>/data-view/vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- iCheck -->
	<link href="<?= BASEURL; ?>/data-view/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

	<!-- bootstrap-progressbar -->
	<link href="<?= BASEURL; ?>/data-view/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
	<!-- JQVMap -->
	<link href="<?= BASEURL; ?>/data-view/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
	<!-- bootstrap-daterangepicker -->
	<link href="<?= BASEURL; ?>/data-view/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="<?= BASEURL; ?>/data-view/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view" >
					<div class="navbar nav_title" style="border: 0;">
						<a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
					</div>
					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile clearfix">
						<div class="profile_pic">
							<img src="images/img.jpg" alt="..." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Welcome,</span>
							<h2>John Doe</h2>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<br />

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>General</h3>
							<ul class="nav side-menu">
								<li><a href="<?=BASEURL; ?>/User"><i class="fa fa-home"></i> PENGGUNA <span class=""></span></a></li>
								<li><a href="<?=BASEURL; ?>/Pembimbing"><i class="fa fa-edit"></i> GURU PEMBIMBING <span class=""></span></a></li>
								<li><a href="<?=BASEURL; ?>/KepalaSekolah"><i class="fa fa-desktop"></i> KEPALA SEKOLAH <span class=""></span></a></li>
								<li><a href="<?=BASEURL; ?>/Siswa"><i class="fa fa-table"></i> SISWA <span class=""></span></a></li>
								<li><a href="<?=BASEURL; ?>/Ekstrakurikuler"><i class="fa fa-bar-chart-o"></i> EKSTRAKURIKULER <span class=""></span></a></li>
								<li><a href="<?=BASEURL; ?>/Prestasi"><i class="fa fa-clone"></i> PRESTASI <span class=""></span></a></li>
							</ul>
						</div>
						<div class="menu_section">
							<h3>Live On</h3>
							<ul class="nav side-menu">
								<li><a href="<?=BASEURL; ?>/Laporan"><i class="fa fa-bug"></i> LAPORAN <span class=""></span></a></li>
							</ul>
						</div>
					</div>
					<!-- /sidebar menu -->

					<!-- /menu footer buttons -->
					<div class="sidebar-footer hidden-small">
						<a data-toggle="tooltip" data-placement="top" title="Settings">
							<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="FullScreen">
							<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="Lock">
							<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="Logout" href="<?=BASEURL; ?>/login/LogOut">
							<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
						</a>
					</div>
					<!-- /menu footer buttons -->
				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<div class="nav toggle">
						<a id="menu_toggle"><i class="fa fa-bars"></i></a>
					</div>
					<nav class="nav navbar-nav">
						<ul class=" navbar-right">
							<li class="nav-item dropdown open" style="padding-left: 15px;">
								<a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
									<img src="images/img.jpg" alt="">John Doe
								</a>
								<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item"  href="javascript:;"> Profile</a>
									<a class="dropdown-item"  href="javascript:;">
										<span class="badge bg-red pull-right">50%</span>
										<span>Settings</span>
									</a>
									<a class="dropdown-item"  href="javascript:;">Help</a>
									<a class="dropdown-item"  href="<?=BASEURL; ?>/login/LogOut"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
								</div>
							</li>

							<li role="presentation" class="nav-item dropdown open">
								<a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
									<i class="fa fa-envelope-o"></i>
									<span class="badge bg-green">6</span>
								</a>
								<ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
									<li class="nav-item">
										<a class="dropdown-item">
											<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
											<span>
												<span>John Smith</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="dropdown-item">
											<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
											<span>
												<span>John Smith</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="dropdown-item">
											<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
											<span>
												<span>John Smith</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="dropdown-item">
											<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
											<span>
												<span>John Smith</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li class="nav-item">
										<div class="text-center">
											<a class="dropdown-item">
												<strong>See All Alerts</strong>
												<i class="fa fa-angle-right"></i>
											</a>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- /top navigation -->

			<!-- page content -->
			<div class="right_col" role="main">
				<!-- top tiles -->
				<div class="row" style="display: inline-block;" >
					<div class="tile_count">
						<div class="col-md-2 col-sm-4  tile_stats_count">
							<span class="count_top"><i class="fa fa-user"></i> Total Users</span>
							<div class="count">2500</div>
							
							<!-- INI UNTUK MENGHITUNG JUMLAH BANYAKNYA USER -->
							<!-- <div class="count"><//?= $data['jumlah_pengguna']; ?></div> -->
							
						</div>
						<div class="col-md-2 col-sm-4  tile_stats_count">
							<span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
							<div class="count">123.50</div>
							<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
						</div>
						<div class="col-md-2 col-sm-4  tile_stats_count">
							<span class="count_top"><i class="fa fa-user"></i> Total Males</span>
							<div class="count green">2,500</div>
							<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
						</div>
						<div class="col-md-2 col-sm-4  tile_stats_count">
							<span class="count_top"><i class="fa fa-user"></i> Total Females</span>
							<div class="count">4,567</div>
							<span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
						</div>
						<div class="col-md-2 col-sm-4  tile_stats_count">
							<span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
							<div class="count">2,315</div>
							<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
						</div>
						<div class="col-md-2 col-sm-4  tile_stats_count">
							<span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
							<div class="count">7,325</div>
							<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
						</div>
					</div>
				</div>
				<!-- /top tiles -->      
				<br />