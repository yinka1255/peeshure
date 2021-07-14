<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title Of Site -->
	<title>Photomace | Licence</title>
	<meta name="description" content="Photomace licence can be found here." />
	<meta name="keywords" content="terms, conditions" />
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

	@include('customers/includes/header');
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
							<p style="text-align: justify;">Our license empowers creators and protects our community. We want to keep it as simple as possible. Here is an overview of what Photomace content can and can't be used for.</p>
								<b>What is allowed?</b>
								<ul class="check">
									<li>All content on Photomace can be used for free for commercial and noncommercial use across print and digital, except in the cases mentioned in "What is not allowed".</li>
									<li>Attribution is not required. Giving credit to the contributor or Photomace is not necessary but is always   appreciated by our community.</li>
									<li>You can make modifications to content from Photomace.</li>
								</ul>	
								<b>What is not allowed?</b>
								<p>This section only applies to image users and not to the appropriate image authors.</p>
								<ul class="cancel">
									<li>Don't redistribute or sell someone else's Photomace images on other stock or wallpaper platforms.</li>
									<li>Don't sell unaltered copies of an image. e.g. sell an exact copy of a stock photo as a poster, print or on a physical product.</li>
									<li>Don't portray identifiable people in a bad light or in a way that is offensive.</li>
									<li>Don't use images with identifiable brands to create a misleading association with a product or service.</li>
									
						</div>
					
					</div>

				</div>
			
			</section>

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