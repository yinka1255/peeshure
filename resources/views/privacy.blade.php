<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title Of Site -->
	<title>Peeshure | Privacy policy</title>
	<meta name="description" content="Peeshure privacy policy can be found here." />
	<meta name="keywords" content="terms, conditions" />
	<meta name="author" content="crenoveative">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	@include('includes/main-css')
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
							
								<a href="{{url('redirect')}}" class="btn btn-gplus btn-block">Sign-in with Google</a>
								
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
											<button id="login_lost_btn" type="button" class="btn btn-link">forgot password?</button>
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
									<input id="register_username" class="form-control" type="text" name="name" placeholder="Userame"> 
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
								<li >
									<a href="{{url('submit')}}" class="btn">Submit a photo</a>
								</li>
								@if (Auth::check())
								<li >
									<a href="{{url('profile')}}" class="btn">Profile</a>
								</li>
								@endif
							</ul>
						
						</div><!--/.nav-collapse -->
					
						<div class="pull-right">
							<div class="navbar-mini">
								<ul class="clearfix">
									
									
									
									<li class="user-action">
										@if(Auth::check()) <a  href="{{url('logout')}}" class="btn">Sign out</a> @else <a data-toggle="modal" href="#loginModal" class="btn">Sign up/in</a> @endif
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
		
			<div class="image-bg-wrapper about-us-page-title" style="background-image:url({{('public/main/images/privacy.jpg')}});">
			
				<div class="container">
				
					<div class="row">

						<div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
							
							<div class="section-title">
							
								<h2 class="text-white">Privacy policy</h2>
								
								<p class="text-white">Read our privacy policy carefully</p>
								
							</div>
							
						</div>
						
					</div>
					
				</div>
						
			</div>
			
			<section class="section pb-60">
			
				<div class="container">
					
					<div class="row">
					
						<div class="col-sm-12 col-md-12">
							<h3>Privacy</h3>
							<p style="text-align: justify;">The following information is to help you understand how we collect, use, disseminate and safeguard the data you provide while accessing and using Peeshure.
							</p>
							<b>Personal information?</b>
							<p>You may provide certain personal information, such as your first and last name, the country you live in, PayPal (or any other available payment platform) address, and email address, which will be displayed on your public profile page on Peeshure.
									Whenever you visit a page, our servers automatically record certain information that your web browser sends. This may include information such as your IP address, browser type and language, pages viewed, the date and time. This data is used for ensuring the stability of our provided services and is deleted automatically after seven days.
									We respect and are committed to protecting your privacy. We do not sell or otherwise provide personal information to other companies for the marketing of their own products or services. We will retain your personal information for as long as your account is active or as needed to provide you services or as necessary to comply with our legal obligations, resolve disputes, and enforce our agreements.
									We reserve the right to disclose your personal information as required by law (e.g., to comply with a subpoena, warrant, or court order) and when we believe that disclosure is necessary to protect our rights, avoid litigation, protect your safety or the safety of others, investigate fraud, and/or respond to a government request. We may also disclose information about you if we determine that such disclosure should be made for reasons of national security, law enforcement, or other issues of public importance.
									</p>
							<b>Cookies</b>
							<p>A cookie is a small file containing a string of characters that is sent to your computer when you visit a website. When you visit the website again, the cookie allows that site to recognize your browser. Cookies are used on Peeshure to store visitor preferences and other technical information required for the functionality of the Website. No personal information is stored in these cookies. You can reset your browser to refuse all cookies or to indicate when a cookie is being sent. However, some website features or services may not function properly without cookies.
								</p>
							<b>Persons under 16</b>
							<p>Peeshure is not marketed toward persons under the age of 16. If we discover that personal information was inadvertently collected about individuals under the age 16, we will promptly delete such information.</p>
							<b>Google Analytics</b>
							<p>This website uses Google Analytics, a web analytics service provided by Google, Inc. (Google). Google Analytics uses "cookies", which are text files placed on your computer, to help the website analyze how users use the site. The information generated by the cookie about your use of the website (including your IP address) will be transmitted to and stored by Google on servers in the United States. In case of activation of the IP anonymization, Google will truncate/anonymize the last octet of the IP address for Member States of the European Union as well as for other parties to the Agreement on the European Economic Area. Only in exceptional cases, the full IP address is sent to and shortened by Google servers in the USA. On behalf of the website provider Google will use this information for the purpose of evaluating your use of the website, compiling reports on website activity for website operators and providing other services relating to website activity and internet usage to the website provider. Google will not associate your IP address with any other data held by Google. You may refuse the use of cookies by selecting the appropriate settings on your browser. However, please note that if you do this, you may not be able to use the full functionality of this website. Furthermore you can prevent Google's collection and use of data (cookies and IP address) by downloading and installing the browser plug-in available under <a href"https://tools.google.com/dlpage/gaoptout" >here</a>.</p>
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
								<p class="copy-right">&#169; Copyright 2019 PEESHURE</p>
							</div>
							
							<div class="col-sm-6">
								<ul class="secondary-footer-menu clearfix">
									<li><a href="https://www.facebook.com/peeshure/"><i class="fa fa-facebook-official"></i></a></li>
									<li><a href="https://twitter.com/peeshure/"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://www.instagram.com/peeshure/"><i class="fa fa-instagram "></i></a></li>
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