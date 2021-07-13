<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title Of Site -->
	<title>Peeshure | Submit photo</title>
	<meta name="description" content="Peeshure - Submit your photo." />
	<meta name="keywords" content="contact" />
	<meta name="author" content="crenoveative">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	@include('customers/includes/main-css')
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
		
		<!-- start Main Wrapper -->
		<div class="main-wrapper">
		
			<div class="content-wrapper pt-50 pb-60" style="margin-top: 40px;">
		
					<div class="container">
	
						<div class="row">
	
							<div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
								
								<div class="section-title">
								
									<h2>Submit your photo</h2>
									
									<p>Its absolutely free</p>
									
								</div>
								
							</div>
						
						</div>
						
						<form id="contact-form" method="post" enctype="multipart/form-data" action="{{url('submit_photo')}}">
						
							<div class="row">
	
								<div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
								
									<div class="messages"></div>
									
									<div class="controls">
									
										<div class="row">
						
											<div class="col-xs-12 col-sm-6">
												<div class="form-group">
													<label for="form_name">Name <span class="font10 text-danger">*</span></label>
													<input id="form_name" type="text" name="name" class="form-control" placeholder="" required="required" data-error="Firstname is required.">
													<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6">
												<div class="form-group">
													<label>Type</label>
													<select name="type" id="type" required  class="form-control" >
														<option>Photo</option>
														<option>Illustration</option>
														<option>Vector</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 col-sm-6">
												<div class="form-group">
													<label>Orientation</label>
													<select name="orientation" id="orientation" class="form-control" >
														<option>Landscape</option>
														<option>Portrait</option>
													</select>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6">
												<div class="form-group">
													<label>Category</label>
													<select name="category_id" id="category" required class="form-control" >
														@foreach ($categories as $category)
															<option value="{{$category->id}}">{{$category->name}}</option>	
														@endforeach
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 col-sm-6">
												<div class="form-group">
													<label>Image</label>
													<input type="file" name="image"  required  class="form-control" />
												</div>
											</div>
											<div class="col-xs-12 col-sm-6">
												<div class="form-group">
													<label>Tags</label>
													<input style="width: 100%;" type="text" data-role="tagsinput" name="tags" id="tag" required class="form-control" />
												</div>
											</div>
											
											<div class="col-xs-12 col-sm-12 text-center">
												<input type="submit" class="btn btn-primary btn-send mt-10" value="Upload now">
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
<script src="{{asset('public/main/bootstrap/bootstrap-tagsinput-latest/src/bootstrap-tagsinput.js')}}"></script>

</html>