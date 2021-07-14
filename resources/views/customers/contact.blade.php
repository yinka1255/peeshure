<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title Of Site -->
	<title>Photomace | Contact</title>
	<meta name="description" content="Photomace contact can be found here." />
	<meta name="keywords" content="contact" />
	<meta name="author" content="crenoveative">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	@include('customers/includes/main-css')
	
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

	
	

	<!-- start Container Wrapper -->
	<div class="wrapper container-wrapper">

		<!-- start Header -->
		@include('customers/includes/header');
		<!-- end Header -->
		
		<!-- start Main Wrapper -->
		<div class="main-wrapper">
		
			<div class="content-wrapper pt-50 pb-60" style="margin-top: 40px;">
		
					<div class="container">
	
						<div class="row">
	
							<div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
								
								<div class="section-title">
								
									<h2>Contact us for help</h2>
									
									<p>support@Photomace.com, +234 802 922 6260</p>
									
								</div>
								
							</div>
						
						</div>
						
						<form id="contact-form" method="post" action="{{url('contact_new')}}">
						
							<div class="row">
	
								<div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
								
									<div class="messages"></div>
									
									<div class="controls">
									
										<div class="row">
						
											<div class="col-xs-12 col-sm-6">
												<div class="form-group">
													<label for="form_name">Your Name <span class="font10 text-danger">*</span></label>
													<input id="form_name" type="text" name="name" class="form-control" placeholder="" required="required" data-error="Firstname is required.">
													<div class="help-block with-errors"></div>
												</div>
											</div>
											
											<div class="col-xs-12 col-sm-6">
												<div class="form-group">
													<label for="form_email">Your Email <span class="font10 text-danger">*</span></label>
													<input id="form_email" type="email" name="email" class="form-control"  required="required" data-error="Valid email is required.">
													<div class="help-block with-errors"></div>
												</div>
											</div>
											
											<div class="col-xs-12 col-sm-12">
												<div class="form-group">
													<label>Subject</label>
													<input id="form_lastname" type="text" name="title" class="form-control" required="required" data-error="Subject is required.">
													<div class="help-block with-errors"></div>
												</div>
											</div>
											
											<div class="col-xs-12 col-sm-12">
												<div class="form-group">
													<label for="form_message">Message <span class="font10 text-danger">*</span></label>
													<textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
													<div class="help-block with-errors"></div>
												</div>
											</div>
											
											<div class="col-xs-12 col-sm-12 text-center">
												<input type="submit" class="btn btn-primary btn-send mt-10" value="Send message">
											</div>
											
											<div class="col-md-12 text-center">
													<p class="text-muted font12 mt-20" style="line-height: 1.2;"><span class="font12 text-danger">*</span> These fields are required.</p>
											</div>
											
										</div>
							
									</div>
									
								</div>
							
							</div>
							
						</form>
					
					</div>
					
				</div>

				@include('customers/includes/footer');
		<!-- end Main Wrapper -->
		
	</div> <!-- / .wrapper -->
	<!-- end Container Wrapper -->
	 
 
 <!-- start Back To Top -->
<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>
<!-- end Back To Top -->
@include('customers/includes/main-js');

	<script>
		function sort(){
			window.open("get_products?type="+$("#filter_image_type").val()+"&category="+$("#filter_image_category").val()+"&orientation="+$("#filter_image_orientation").val(),"_self");
		}
	</script>
</body>


</html>