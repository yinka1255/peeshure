<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="Yinka Adeniran">

	<title>Peeshure Admin Panel | Home</title>

	<!-- Main Styles -->
	<link rel="stylesheet" href="{{asset('public/admin/styles/style.min.css')}}">
	
	<!-- Themify Icon -->
	<link rel="stylesheet" href="{{asset('public/admin/fonts/themify-icons/themify-icons.css')}}">

	<!-- mCustomScrollbar -->
	<link rel="stylesheet" href="{{asset('public/admin/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css')}}">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="{{asset('public/admin/plugin/waves/waves.min.css')}}">

	<!-- Sweet Alert -->
	<link rel="stylesheet" href="{{asset('public/admin/plugin/sweet-alert/sweetalert.css')}}">
	
	<!-- Percent Circle -->
	<link rel="stylesheet" href="{{asset('public/admin/plugin/percircle/css/percircle.css')}}">

	<!-- Chartist Chart -->
	<link rel="stylesheet" href="{{asset('public/admin/plugin/chart/chartist/chartist.min.css')}}">

	<!-- FullCalendar -->
	<link rel="stylesheet" href="{{asset('public/admin/plugin/fullcalendar/fullcalendar.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/plugin/fullcalendar/fullcalendar.print.css')}}" media='print'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
	<style>
		.logo_image{
			width: 60px !important;
			height: 60px;
		}
	</style>
</head>

<body>
		<script src="{{asset('public/main/vendor/jquery/dist/jquery.min.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
		<script>
			function getSuccess(data){
				$.confirm({
						title: 'Success',
						content: data,
						type: 'green',
						typeAnimated: true,
						buttons: {
								Ok: function () {
								}
						}
				});
			}
	
		function getError(data){
				$.confirm({
						title: 'Error!',
						content: data,
						type: 'red',
						typeAnimated: true,
						buttons: {
								Ok: function () {
								}
						}
				});
			}
		</script>
<div class="main-menu">
	@if(Session::has('error'))
	<script>
		getError("{{Session::get('error')}}");
	</script>
	@endif	
	@if(Session::has('success'))
	<script>
		getSuccess("{{Session::get('success')}}");
	</script>
	@endif	
	<header class="header">
		<a href="{{url('/admin/index')}}" class="logo" ><img class="logo_image" src="{{asset('public/main/images/logo.png')}}" /></a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
	</header>
	<!-- /.header -->
	<div class="content">

		<div class="navigation">
			<h5 class="title">Navigation</h5>
			<!-- /.title -->
			<ul class="menu js__accordion">
				<li class="current">
					<a class="waves-effect" href="{{url('admin/index')}}"><i class="menu-icon ti-dashboard"></i><span>Dashboard</span></a>
				</li>
				<li>
					<a class="waves-effect" href="{{url('admin/categories')}}"><i class="menu-icon ti-list"></i><span>Categories</span></a>
				</li>
				<li>
					<a class="waves-effect" href="{{url('admin/products')}}"><i class="menu-icon ti-image"></i><span>Products</span></a>
				</li>
				
			</ul>
			<!-- /.menu js__accordion -->
		</div>
		<!-- /.navigation -->
	</div>
	<!-- /.content -->
</div>
<!-- /.main-menu -->

<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">Home</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
		<div class="ico-item">
			<i class="ti-user"></i> {{$loggedInUser->name}}
			<ul class="sub-ico-item">
				<li><a href="{{url('admin/profile')}}">Settings</a></li>
				<li><a class="" href="{{url('logout')}}">Log Out</a></li>
			</ul>
			<!-- /.sub-ico-item -->
		</div>
	</div>
	<!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->


<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-lg-3 col-xs-12">
				<div class="box-content">
					<div class="statistics-box with-icon">
						<i class="ico ti-apple text-inverse"></i>
						<h2 class="counter text-inverse">15</h2>
						<p class="text">POLICIES</p>
					</div>
					<!-- .statistics-box .with-icon -->
				</div>
				<!-- /.box-content -->

				<div class="box-content">
					<div class="statistics-box with-icon">
						<i class="ico ti-android text-success"></i>
						<h2 class="counter text-success">3562</h2>
						<p class="text">SALES</p>
					</div>
					<!-- .statistics-box .with-icon -->
				</div>
				<!-- /.box-content -->

				<div class="box-content">
					<div class="statistics-box with-icon">
						<i class="ico ti-user text-primary"></i>
						<h2 class="counter text-primary">283</h2>
						<p class="text">CLIENTS</p>
					</div>
					<!-- .statistics-box .with-icon -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-xs-12 -->
			<div class="col-lg-9 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Statistics</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<div id="svg-animation-chartist-chart" class="chartist-chart" style="height: 314px"></div>
					<!-- /#svg-animation-chartist-chart.chartist-chart -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-9 col-xs-12 -->
		</div>
		<!-- /.row small-spacing -->

		
		
		<footer class="footer" style="margin-top: 100px;">
			<ul class="list-inline">
				<li>2019 © SIB NIGERIA.</li>
				<li><a href="{{url('privacy')}}">Privacy</a></li>
				<li><a href="#">Terms</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</footer>
	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
	<!-- HTML5 shim and Respond.js')}} for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="{{asset('public/admin/script/html5shiv.min.js')}}"></script>
		<script src="{{asset('public/admin/script/respond.min.js')}}"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="{{asset('public/admin/scripts/jquery.min.js')}}"></script>
	<script src="{{asset('public/admin/scripts/modernizr.min.js')}}"></script>
	<script src="{{asset('public/admin/plugin/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/admin/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
	<script src="{{asset('public/admin/plugin/nprogress/nprogress.js')}}"></script>
	<script src="{{asset('public/admin/plugin/sweet-alert/sweetalert.min.js')}}"></script>
	<script src="{{asset('public/admin/plugin/waves/waves.min.js')}}"></script>
	<!-- Sparkline Chart -->
	<script src="{{asset('public/admin/plugin/chart/sparkline/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('public/admin/scripts/chart.sparkline.init.min.js')}}"></script>

	<!-- Percent Circle -->
	<script src="{{asset('public/admin/plugin/percircle/js/percircle.js')}}"></script>

	<!-- Google Chart -->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js')}}"></script>

	<!-- Chartist Chart -->
	<script src="{{asset('public/admin/plugin/chart/chartist/chartist.min.js')}}"></script>
	<script src="{{asset('public/admin/scripts/jquery.chartist.init.min.js')}}"></script>

	<!-- FullCalendar -->
	<script src="{{asset('public/admin/plugin/moment/moment.js')}}"></script>
	<script src="{{asset('public/admin/plugin/fullcalendar/fullcalendar.min.js')}}"></script>
	<script src="{{asset('public/admin/scripts/fullcalendar.init.js')}}"></script>

	<script src="{{asset('public/admin/scripts/main.min.js')}}"></script>
</body>
</html>