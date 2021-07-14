<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title Of Site -->
	<title>Photomace | Profile</title>
	<meta name="description" content="Photomace - Profile." />
	<meta name="keywords" content="contact" />
	<meta name="author" content="crenoveative">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	@include('customers/includes/main-css');
	<link href="{{asset('public/main/bootstrap/bootstrap-tagsinput-latest/src/bootstrap-tagsinput.css')}}" rel="stylesheet">
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style>
		.bootstrap-tagsinput input{
			width: 100% !important;
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
								
									<h2>Profile</h2>
									
									<p></p>
									
								</div>
								
							</div>
						
						</div>
						
						<form id="contact-form" method="post" enctype="multipart/form-data" action="{{url('update_profile')}}">
						
							<div class="row">
	
								<div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
								
									<div class="messages"></div>
									
									<div class="controls">
									
										<div class="row">
						
											<div class="col-xs-12">
												<div class="form-group">
													<label for="form_name">Username </label>
													<input id="form_name" type="text" name="name" value="{{Auth::user()->name}}" class="form-control" placeholder="" required="required" data-error="Username is required.">
													<div class="help-block with-errors"></div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12">
												<div class="form-group">
													<label>Email</label>
													<input id="form_email" type="email" name="email" value="{{Auth::user()->email}}" class="form-control" placeholder="" required="required" data-error="Email is required.">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12">
												<div class="form-group">
													<label>Password<span style="font-size: 10px;">(Leave this field blank if you don't want to change your password)</label>
													<input style="width: 100%;" type="password" name="password" class="form-control" />
												</div>
											</div>
										</div>
										<div class="row">	
											<div class="col-xs-12 col-sm-12 text-center">
												<input type="submit" class="btn btn-primary btn-send mt-10" value="Update">
											</div>
											
											<div class="col-md-12 text-center">
												
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
<script src="{{asset('public/main/bootstrap/bootstrap-tagsinput-latest/src/bootstrap-tagsinput.js')}}"></script>

</html>