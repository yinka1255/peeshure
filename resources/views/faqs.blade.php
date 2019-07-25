<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title Of Site -->
	<title>Peeshure | Frequently asked questions (FAQs)</title>
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
		
			<div class="image-bg-wrapper about-us-page-title" style="background-image:url({{('public/main/images/faq.jpg')}});">
			
				<div class="container">
				
					<div class="row">

						<div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
							
							<div class="section-title">
							
								<h2 class="text-white">Frequently asked questions</h2>
								
								<p class="text-white">Read our Frequently asked questions carefully</p>
								
							</div>
							
						</div>
						
					</div>
					
				</div>
						
			</div>
			
			<div class="content-wrapper pt-50 pb-50">
			
				<div class="container">
				
					<div class="row">
				
						<div class="col-xs-12 col-md-3 mb-30-sm">
						
							<div class="scrollspy-sidebar">
							
								<ul class="scrollspy-sidenav">
									<li>
										<ul class="nav faq-nav">
											<li><a href="#faq-section-0" class="anchor">What is Peeshure?</a></li>
											<li><a href="#faq-section-1" class="anchor">Can I use your images?</a></li>
											<li><a href="#faq-section-2" class="anchor">May Peeshure images be used on Facebook and other social platforms?</a></li>
											<li><a href="#faq-section-3" class="anchor">NO HOTLINKING - what does that mean?</a></li>
											<li><a href="#faq-section-4" class="anchor">Why was my image not accepted?</a></li>
											<li><a href="#faq-section-5" class="anchor">My image was accepted, but it doesn't show on my profile. Why?</a></li>
											<li><a href="#faq-section-6" class="anchor">Can I make a donation without PayPal?</a></li>
											<li><a href="#faq-section-7" class="anchor">How do I delete my account?</a></li>
										</ul>
									</li>

								</ul>
								
							</div>
							
						</div>
						
						<div class="col-xs-12 col-md-9">

							<div class="faq-wrapper">

								<div id="faq-section-0" class="faq-section">
									<div class="panel-group bootstarp-accordion" id="faq-accordion" role="tablist" aria-multiselectable="true">
										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a role="button" data-toggle="collapse" data-parent="#faq-accordion" href="#faq-accordion-one-1" aria-expanded="true" aria-controls="faq-accordion-one-1"> What is Peeshure?</a>
												</h4>
											</div>
											<div id="faq-accordion-one-1" class="panel-collapse collapse in" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>Peeshure is a vibrant community of creatives, sharing copyright free images. All contents are released under the Peeshure License, which makes them safe to use without asking for permission or giving credit to the artist - even for commercial purposes.
															</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div id="faq-section-1" class="faq-section">
									<div class="panel-group bootstarp-accordion" id="faq-accordion" role="tablist" aria-multiselectable="true">
										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a role="button" data-toggle="collapse" data-parent="#faq-accordion" href="#faq-accordion-one-1" aria-expanded="true" aria-controls="faq-accordion-one-1"> Can I use your images</a>
												</h4>
											</div>
											<div id="faq-accordion-one-1" class="panel-collapse collapse in" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>You can copy, modify, distribute, and use the images, even for commercial purposes, all without asking for permission or giving credits to the artist. However, depicted content may still be protected by trademarks, publicity or privacy rights. Read our License to learn more. </p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="faq-section-2" class="faq-section">
									<div class="panel-group bootstarp-accordion" id="faq-accordion" role="tablist" aria-multiselectable="true">
										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a role="button" data-toggle="collapse" data-parent="#faq-accordion" href="#faq-accordion-one-1" aria-expanded="true" aria-controls="faq-accordion-one-1">May Peeshure images be used on Facebook and other social platforms?</a>
												</h4>
											</div>
											<div id="faq-accordion-one-1" class="panel-collapse collapse in" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>Yes, you may use Peeshure images on social media platforms. </p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="faq-section-3" class="faq-section">
									<div class="panel-group bootstarp-accordion" id="faq-accordion" role="tablist" aria-multiselectable="true">
										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a role="button" data-toggle="collapse" data-parent="#faq-accordion" href="#faq-accordion-one-1" aria-expanded="true" aria-controls="faq-accordion-one-1">NO HOTLINKING - what does that mean?</a>
												</h4>
											</div>
											<div id="faq-accordion-one-1" class="panel-collapse collapse in" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>If you want to show Peeshure images on your website, please upload them to your server. Peeshure image URLs don't work on external sites.
															</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="faq-section-4" class="faq-section">
									<div class="panel-group bootstarp-accordion" id="faq-accordion" role="tablist" aria-multiselectable="true">
										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a role="button" data-toggle="collapse" data-parent="#faq-accordion" href="#faq-accordion-one-1" aria-expanded="true" aria-controls="faq-accordion-one-1">Why was my image not accepted?</a>
												</h4>
											</div>
											<div id="faq-accordion-one-1" class="panel-collapse collapse in" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>Images are declined if they are not in agreement with our <a href="{{url('quality')}}">Quality Guidelines</a>. 
															</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="faq-section-5" class="faq-section">
									<div class="panel-group bootstarp-accordion" id="faq-accordion" role="tablist" aria-multiselectable="true">
										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a role="button" data-toggle="collapse" data-parent="#faq-accordion" href="#faq-accordion-one-1" aria-expanded="true" aria-controls="faq-accordion-one-1">My image was accepted, but it doesn't show on my profile. Why?															</a>
												</h4>
											</div>
											<div id="faq-accordion-one-1" class="panel-collapse collapse in" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>It usually takes a few minutes for new images to show up in your profile. In rare cases, it may take a few days. If many images are missing, we're likely running an update and all will be back to normal within an hour.
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="faq-section-6" class="faq-section">
									<div class="panel-group bootstarp-accordion" id="faq-accordion" role="tablist" aria-multiselectable="true">
										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a role="button" data-toggle="collapse" data-parent="#faq-accordion" href="#faq-accordion-one-1" aria-expanded="true" aria-controls="faq-accordion-one-1">Can I make a donation without PayPal?														</a>
												</h4>
											</div>
											<div id="faq-accordion-one-1" class="panel-collapse collapse in" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>Image authors can only receive donations through PayPal. If you would like to support Peeshure, please contact us through support@peeshure.com. 
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="faq-section-7" class="faq-section">
									<div class="panel-group bootstarp-accordion" id="faq-accordion" role="tablist" aria-multiselectable="true">
										<div class="panel">
											<div class="panel-heading" role="tab">
												<h4 class="panel-title">
													<a role="button" data-toggle="collapse" data-parent="#faq-accordion" href="#faq-accordion-one-1" aria-expanded="true" aria-controls="faq-accordion-one-1">How do I delete my account?														</a>
												</h4>
											</div>
											<div id="faq-accordion-one-1" class="panel-collapse collapse in" role="tabpanel">
												<div class="panel-body">
													<div class="faq-thread">
														<p>A link for this purpose is given on the setting page of your account.
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

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
		!function ($) {
		
		  $(function(){
		
			var $window = $(window)
			var $body   = $(document.body)
		
			var navHeight = $('.navbar').outerHeight(true) + 50
		
			$body.scrollspy({
			  target: '.scrollspy-sidebar',
			  offset: navHeight
			})
		
			$window.on('load', function () {
			  $body.scrollspy('refresh')
			})
		
			$('.scrollspy-container [href=#]').click(function (e) {
			  e.preventDefault()
			})
		
			// back to top
			setTimeout(function () {
			  var $sideBar = $('.scrollspy-sidebar')
		
			  $sideBar.affix({
				offset: {
				  top: function () {
					var offsetTop      = $sideBar.offset().top
					var sideBarMargin  = parseInt($sideBar.children(0).css('margin-top'), 10)
					var navOuterHeight = $('.scrollspy-nav').height()
		
					return (this.top = offsetTop - navOuterHeight - sideBarMargin)
				  }
				, bottom: function () {
					return (this.bottom = $('.scrollspy-footer').outerHeight(true))
				  }
				}
			  })
			}, 100)
				
		  })
		
		}(window.jQuery)
		
		</script>
</body>


</html>