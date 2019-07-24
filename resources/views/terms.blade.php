<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title Of Site -->
	<title>Peeshure | Terms and conditions</title>
	<meta name="description" content="Peeshure terms and conditions can be found here." />
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
		
			<div class="image-bg-wrapper about-us-page-title" style="background-image:url({{('public/main/images/about-us-image-bg.jpg')}});">
			
				<div class="container">
				
					<div class="row">

						<div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
							
							<div class="section-title">
							
								<h2 class="text-white">Terms & Conditions</h2>
								
								<p class="text-white">Read our terms and conditions carefully</p>
								
							</div>
							
						</div>
						
					</div>
					
				</div>
						
			</div>
			
			<section class="section pb-60">
			
				<div class="container">
					
					<div class="row">
					
						<div class="col-sm-12 col-md-12">
							<h3>Our Background</h3>
							<p style="text-align: justify;">The following is a legal agreement between you ("you" or "User/s") and the owners and operators ("we", "us", or "Peeshure") of the site at peeshure.com (the "Website") and all related websites, software, mobile apps, and other services that we provide (together, the "Service"). Your use of the Service, and our provision of the Service to you, constitutes an agreement by you and Peeshure to be bound by the terms and conditions in these Terms of Service ("Terms").</p>
							<p style="text-align: justify;">"Content" shall refer collectively to all Images available under the Peeshure License. 
								We reserve the right, at our sole discretion, to change or modify portions of these Terms at any time. If we do this, we will post the changes on this page and will indicate at the top of this page the date these Terms were last revised. Any such changes will become effective immediately. Your continued use of the Service after the date any such changes become effective constitutes your acceptance of the new Terms.</p>
							<b>Requirements and Registration</b>
							<p style="text-align: justify;">You may use the Service only if you can form a binding contract with Peeshure, and only in compliance with these Terms and all applicable laws, rules, and regulations. The Service is not available to any Users previously removed from the Service by Peeshure. You may be required to register with us in order to access and use certain features of the Service. If you choose to register for the Service, you agree to provide and maintain true, accurate, and current information as prompted by the Service's registration form. Registration data and certain other information about you are governed by our Privacy Policy. If you are under 16 years old, you may use the Service only with the approval of your parent, guardian, or teacher.</p>
								<b>Use of the Service</b>
								<p style="text-align: justify;">In connection with your use of the Service you will not engage in or use any data mining, robots, scraping or similar data gathering or extraction methods. The technology and software underlying the Service or distributed in connection therewith is the property of Peeshure and our licensors, affiliates and partners and you are granted no license in respect of that Software. You agree not to copy, modify, create a derivative work from, reverse engineer, reverse assemble or otherwise attempt to discover any source code, sell, assign, sublicense, or otherwise transfer any right in such technology or software. Any rights not expressly granted herein are reserved by Peeshure.
								Large scale or systematic copying of Content, including using any of the methods referred to above, is prohibited except as expressly authorized by Peeshure. This applies to all Content, including Content made available as part of the public domain. The Service is protected by copyright as a collective work and/or compilation, pursuant to copyright laws, international conventions, and other intellectual property laws.</p>
								 
								<b>License for Images – Peeshure License</b>
								<p style="text-align: justify;">Images on Peeshure are made available under the Peeshure License on the following terms. Under the Peeshure License you are granted an irrevocable, worldwide, non-exclusive and royalty free right to use, download, copy, modify or adapt the Images for commercial or non-commercial purposes. Attribution of the photographer or Peeshure is not required but is always appreciated.</p>
								<b>The Peeshure License does not allow:</b>
								<p style="text-align: justify;">sale or distribution of Images as digital stock photos or as digital wallpapers; sale or distribution of Images e.g. as a posters, digital prints or physical products, without adding any additional elements or otherwise adding value;</li>
								depiction of identifiable persons in an offensive, pornographic, obscene, immoral, defamatory or libelous way; or
								any suggestion that there is an endorsement of products and services by depicted persons, brands, and organisations, unless permission was granted.</p>
								<p style="text-align: justify;">Please be aware that while all Images on Peeshure are free to use for commercial and non-commercial purposes, depicted items in the Images or Videos, such as identifiable people, logos, brands, etc. may be subject to additional copyrights, property rights, privacy rights, trademarks etc. and may require the consent of a third party or the license of these rights - particularly for commercial applications. Peeshure does not represent or warrant that such consents or licenses have been obtained, and expressly disclaims any liability in this respect.</p>
								<b>Uploading Content</b>
								<p style="text-align: justify;">By uploading Images to the Website, you grant Peeshure and its users an irrevocable, worldwide, non-exclusive and royalty free right to use, download, copy, modify or adapt the Images for almost any purpose, both commercial and non-commercial. For the avoidance of doubt, this includes the right of Peeshure to distribute the Images under the Peeshure License or any other license offered by Peeshure from time to time.
								You are solely responsible for the Content you upload. You warrant that:
								you own all proprietary rights in the Content you upload to the Website and that the Content does not infringe the copyright, property right, trademark or other applicable rights of any third parties; and
								you have obtained a non-exclusive, perpetual, irrevocable, worldwide, and royalty-free Model and/or Property Release, and/or any other permission necessary concerning the use of this work for any purpose, without any conditions, unless such conditions are required by law.
								You accept that even though we do our best to prevent it from happening, Peeshure cannot be held responsible for the acts or omissions of its users, including any misuse or abuse of any Content you upload.
								We also reserve the right to remove any Content at any time and for any reason, including if we believe it's defective, of poor quality, or in violation of these Terms.</p>
								<b>Termination</b>
								<p style="text-align: justify;">We may terminate or suspend your account immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms. Upon termination, your right to use the Website will immediately cease.</p>
								<b>Indemnification for breach of Terms</b>
								<p style="text-align: justify;">You agree to indemnify and hold harmless Peeshure from and against any and all loss, expenses, damages, and costs, including without limitation reasonable attorneys fees, resulting, whether directly or indirectly, from your violation of the Terms. You also agree to indemnify and hold harmless Peeshure from and against any and all claims brought by third parties arising out of your use of the Website.</p>
								<b>Warranty and liability</b>
								<p style="text-align: justify;">THE WEBSITE AND ITS CONTENT ARE PROVIDED "AS IS". WE OFFER NO WARRANTY, EXPLICIT OR IMPLIED, REGARDING ANY CONTENT, THE WEBSITE, THE ACCURACY OF ANY INFORMATION, OR ANY RIGHTS OR LICENSES UNDER THIS AGREEMENT INCLUDING, WITHOUT LIMITATION, ANY IMPLIED WARRANTIES OF MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE. PEESHURE DOES NOT REPRESENT OR WARRANT THAT THE WEBSITE OR ITS CONTENT WILL MEET YOUR REQUIREMENTS OR THAT THEIR USE WILL BE UNINTERRUPTED OR ERROR FREE.
								PEESHURE SHALL NOT BE LIABLE TO YOU OR TO ANY OTHER PERSON OR ENTITY FOR ANY GENERAL, PUNITIVE, SPECIAL, INDIRECT, CONSEQUENTIAL OR INCIDENTAL DAMAGES, OR LOST PROFITS OR ANY OTHER DAMAGES, COSTS OR LOSSES ARISING OUT OF YOUR USE OF THE WEBSITE OR ITS CONTENT.</p>
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