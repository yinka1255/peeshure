<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title Of Site -->
	<title>Peeshure | Licence</title>
	<meta name="description" content="Peeshure licence can be found here." />
	<meta name="keywords" content="terms, conditions" />
	<meta name="author" content="crenoveative">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	@include('includes/main-css');
	<link href="{{asset('public/main/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/main/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/main/css/component.css')}}" rel="stylesheet">
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style>
		ul.check li:before {
			content: '✓ ';
		}
		ul.cancel li:before {
			content: '✕ ';
		}
	</style>
	
</head>

<body>

	<!-- BEGIN # MODAL LOGIN -->
	<div class="modal fade modal-login modal-border-transparent" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
		
			<div class="modal-dialog">
			
				<div class="modal-content">
					
					<button type="button" class="btn btn-close close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
					
					<div class="clear"></div>
					
					<!-- Begin # DIV Form -->
					<div id="modal-login-form-wrapper">
						
						<!-- Begin # Login Form -->
						<form id="login-form" method="post" action="{{url('login')}}">
						
							<div class="modal-body pb-5">
						
								<h4>Sign-in</h4>
							
								<button class="btn btn-facebook btn-block">Sign-in with Facebook</button>
								
								<div class="modal-seperator">
									<span>or</span>
								</div>
								
								<div class="form-group"> 
									<input id="login_username" class="form-control" name="email" placeholder="Email" type="email"> 
								</div>
								<div class="form-group"> 
									<input id="login_password" class="form-control" name="password" placeholder="password" type="password"> 
								</div>
				
								<div class="form-group mt-10 mb-10">
									<div class="row gap-5">
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="checkbox-block fa-checkbox"> 
												<input id="remember_me_checkbox" name="remember_me_checkbox" class="checkbox" value="First Choice" type="checkbox"> 
												<label class="" for="remember_me_checkbox">remember</label>
											</div>
										</div>
										<div class="col-xs-6 col-sm-6 col-md-6 text-right mt-5"> 
											<button id="login_lost_btn" type="button" class="btn btn-link">forgot pass?</button>
										</div>
									</div>
								</div>
							
							</div>
							
							<div class="modal-footer">
							
								<div class="row gap-10">
									<div class="col-xs-6 col-sm-6 mb-10">
										<button type="submit" class="btn btn-primary btn-sm btn-block">Sign-in</button>
									</div>
									<div class="col-xs-6 col-sm-6 mb-10">
										<button type="button" class="btn btn-main btn-sm btn-block btn-inverse" data-dismiss="modal" aria-label="Close">Cancel</button>
									</div>
								</div>
								<div class="text-left">
									No account? 
									<button id="login_register_btn" type="button" class="btn btn-link">Register</button>
								</div>
								
							</div>
						
						</form>
						<!-- End # Login Form -->
									
						<!-- Begin | Lost Password Form -->
						<form id="lost-form" style="display:none;"  method="post" action="{{url('forgot_password')}}">
							<div class="modal-body pb-5">
							
								<h4>Forgot password</h4>
	
								<div class="form-group"> 
									<input id="lost_email" class="form-control" name="email" type="email" placeholder="Enter Your Email">
								</div>
								
								<div class="text-center mt-10 mb-10">
									<button id="lost_login_btn" type="button" class="btn btn-link">Sign-in</button> or 
									<button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
								</div>
								
							</div>
							
							<div class="modal-footer mt-10">
								
								<div class="row gap-10">
									<div class="col-xs-6 col-sm-6">
										<button type="submit" class="btn btn-primary btn-sm btn-block">Submit</button>
									</div>
									<div class="col-xs-6 col-sm-6">
										<button type="button" class="btn btn-main btn-sm btn-inverse btn-block" data-dismiss="modal" aria-label="Close">Cancel</button>
									</div>
								</div>
								
							</div>
							
						</form>
						<!-- End | Lost Password Form -->
									
						<!-- Begin | Register Form -->
						<form id="register-form" style="display:none;"  method="post" action="{{url('register')}}">
						
							<div class="modal-body pb-5">
	
								<h4>Register</h4>
								
								<button class="btn btn-facebook btn-block">Register with Facebook</button>
								
								<div class="modal-seperator">
									<span>or</span>
								</div>
								
								<div class="form-group"> 
									<input id="register_username" class="form-control" type="text" name="name" placeholder="Name"> 
								</div>
								
								<div class="form-group"> 
									<input id="register_email" class="form-control" type="email" name="email" placeholder="Email">
								</div>
								
								<div class="form-group"> 
									<input id="register_password" class="form-control" type="password" name="password" placeholder="Password">
								</div>
								
								<div class="form-group"> 
									<input id="register_password_confirm" class="form-control" type="password" name="confirm_password" placeholder="Confirm Password">
								</div>
								
								<div class="clear mb-10"></div>
	
							</div>
								
							<div class="modal-footer mt-10">
							
								<div class="row gap-10">
									<div class="col-xs-6 col-sm-6 mb-10">
										<button type="submit" class="btn btn-primary btn-sm btn-block">Register</button>
									</div>
									<div class="col-xs-6 col-sm-6 mb-10">
										<button type="button" class="btn btn-main btn-sm btn-inverse btn-block" data-dismiss="modal" aria-label="Close">Cancel</button>
									</div>
								</div>
								
								<div class="text-left">
										Already have account? <button id="register_login_btn" type="button" class="btn btn-link">Sign-in</button>
								</div>
								
							</div>
								
						</form>
						<!-- End | Register Form -->
									
					</div>
					<!-- End # DIV Form -->
									
				</div>
			</div>
		
		</div>
		<!-- END # MODAL LOGIN -->
	

	<!-- start Container Wrapper -->
	<div class="wrapper container-wrapper">

		<!-- start Header -->
		<header id="header">
	  
			<!-- start Navbar (Menu) -->
			<nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">
				
					<div class="container">
							
						<div class="navbar-header">
							<a class="navbar-brand" href="{{url('/')}}">
								<div class="col-md-4">
									<img src="{{asset("public/main/images/logo-icon.png")}}" width="30px" height="auto" />
								</div>
								<div class="col-md-8">
								Peeshure
								</div>
							</a>
						</div>
							
						<div id="navbar" class="collapse navbar-collapse navbar-arrow pull-left">
						
							<ul class="nav navbar-nav" id="responsive-menu">
								<li>
									<a href="{{url('/')}}">Home</a>
								</li>
								
								<li><a href="{{url('licence')}}">Licence & Agreement</a></li>
										
								<li><a href="{{url('contact')}}">Contact Us</a></li>
								<li >
									<a href="{{url('explore')}}" class="btn">Explore Now</a>
								</li>
							</ul>
						
						</div><!--/.nav-collapse -->
					
						<div class="pull-right">
							<div class="navbar-mini">
								<ul class="clearfix">
									
									
									
									<li class="user-action">
										<a data-toggle="modal" href="#loginModal" class="btn">Sign up/in</a>
									</li>
								</ul>
							</div>
							
						</div>
					
					</div>
					
					<div id="slicknav-mobile"></div>
					
				</nav>
				<!-- end Navbar (Menu) -->

		</header>
		<!-- end Header -->
		
		<!-- start Main Wrapper -->
		<div class="main-wrapper">
		
			<div class="image-bg-wrapper about-us-page-title" style="background-image:url({{('public/main/images/licence.jpg')}});">
			
				<div class="container">
				
					<div class="row">

						<div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
							
							<div class="section-title">
							
								<h2 class="text-white">Licence</h2>
								
								<p class="text-white">Read our Licence statement carefully</p>
								
							</div>
							
						</div>
						
					</div>
					
				</div>
						
			</div>
			
			<section class="section pb-60">
			
				<div class="container">
					
					<div class="row">
					
						<div class="col-sm-12 col-md-12">
							<h3>Licence</h3>
							<p style="text-align: justify;">Our license empowers creators and protects our community. We want to keep it as simple as possible. Here is an overview of what Peeshure content can and can't be used for.</p>
								<b>What is allowed?</b>
								<ul class="check">
									<li>All content on Peeshure can be used for free for commercial and noncommercial use across print and digital, except in the cases mentioned in "What is not allowed".</li>
									<li>Attribution is not required. Giving credit to the contributor or Peeshure is not necessary but is always   appreciated by our community.</li>
									<li>You can make modifications to content from Peeshure.</li>
								</ul>	
								<b>What is not allowed?</b>
								<p>This section only applies to image users and not to the appropriate image authors.</p>
								<ul class="cancel">
									<li>Don't redistribute or sell someone else's Peeshure images on other stock or wallpaper platforms.</li>
									<li>Don't sell unaltered copies of an image. e.g. sell an exact copy of a stock photo as a poster, print or on a physical product.</li>
									<li>Don't portray identifiable people in a bad light or in a way that is offensive.</li>
									<li>Don't use images with identifiable brands to create a misleading association with a product or service.</li>
									
						</div>
					
					</div>

				</div>
			
			</section>

			<div class="footer-wrapper scrollspy-footer">
				
				<footer class="main-footer">
				
					<div class="container">
					
						<div class="row">
							<div class="col-md-3">
								<img src="{{asset("public/main/images/logo.png")}}" width="150px" height="auto" />
							</div>
							<div class="col-md-3">
							
								<ul class="menu-footer">
									<li><a href="{{url('/')}}">Home</a></li>
									<li><a href="{{url('terms')}}">Terms &amp; Conditions</a></li>
									<li><a href="{{url('licence')}}">License</a></li>
									<li><a href="{{url('privacy')}}">Privacy</a></li>
								</ul>
								
							</div>
							
							<div class="col-md-6">
							
								
								<div class="row">
								
									<div class="col-xs-12 col-sm-12 col-md-5">
										<ul class="menu-footer">
											
											<li><a href="{{url('faqs')}}">FAQs</a></li>
											<li><a href="{{url('contact')}}">Contact</a></li>
											<li><a href="{{url('quality')}}">Qulity Guidelines</a></li>
										</ul>
									</div>
									
									<div class="col-xs-12 col-sm-12 col-md-7 mt-30-sm">
										<h4 class="footer-title">Subscribe For Special Update</h4>
										<form class="newsletter-footer">
										
											<div class="input-group">
							
												<input type="text" class="form-control" placeholder="Email Address" >
												
												<div class="input-group-btn">
													<button class="btn btn-primary">Submit</button>
												</div>
												
											</div><!-- /input-group -->
										</form>
									</div>
								
								</div>
							
							</div>
	
						</div>
					</div>
					
				</footer>
				
				<footer class="secondary-footer">
				
					<div class="container">
					
						<div class="row">
						
							<div class="col-sm-6">
								<p class="copy-right">&#169; Copyright 2015 PEESHURE</p>
							</div>
							
							<div class="col-sm-6">
								<ul class="secondary-footer-menu clearfix">
									<li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus "></i></a></li>
								</ul>
							</div>
							
						</div>
					
					</div>
					
				</footer>
				
			</div>
		<!-- end Main Wrapper -->
		
	</div> <!-- / .wrapper -->
	<!-- end Container Wrapper -->
	 
 
 <!-- start Back To Top -->
<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>
<!-- end Back To Top -->
@include('includes.main-js');

	<script>
		function sort(){
			window.open("get_products?type="+$("#filter_image_type").val()+"&category="+$("#filter_image_category").val()+"&orientation="+$("#filter_image_orientation").val(),"_self");
		}
	</script>
</body>


</html>