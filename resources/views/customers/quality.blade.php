<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title Of Site -->
	<title>Photomace | Quality Guidelines</title>
	<meta name="description" content="Photomace quality guidelines can be found here." />
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

	

	<!-- start Container Wrapper -->
	<div class="wrapper container-wrapper">

		<!-- start Header -->
		@include('customers/includes/header');
		<!-- end Header -->
		
		<!-- start Main Wrapper -->
		<div class="main-wrapper">
		
			<div class="image-bg-wrapper about-us-page-title" style="background-image:url({{('public/main/images/about-us-image-bg.jpg')}});">
			
				<div class="container">
				
					<div class="row">

						<div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
							
							<div class="section-title">
							
								<h2 class="text-white">Quality Guidelines</h2>
								
								<p class="text-white">Read our Quality Guidelines carefully</p>
								
							</div>
							
						</div>
						
					</div>
					
				</div>
						
			</div>
			
			<section class="section pb-60">
			
				<div class="container">
					
					<div class="row">
					
						<div class="col-sm-12 col-md-12">
							<h3>Quality Guidelines</h3>
							<p style="text-align: justify;">Our quality standards are aimed at providing useful imagery that designers may confidently use in their projects. Learn about common quality issues and try to avoid them.
									Our content editors review each file to check for basic technical and quality requirements. Please review the requirements below before uploading your files to Photomace.
									
							</p>
							<b>Technical Requirements</b>
							<p>Images on Photomace must have at least 2,500 pixels on their longer side. A higher resolution is always the better choice. Please refrain from upscaling too small images, because of unavoidable blurring.

									</p>
							<b>Copyright</b>
							<p>You may only upload images to Photomace that you have entirely created on your own. For derivative works (e.g. remixes / composings), you may use images from Photomace, but no other sources are allowed. Particularly, do not copy images from "wallpaper sites" that claim to offer free images. Such images are well protected by copyrights. Also, if you have purchased images from a commercial stock site, you may have permission to use them in your own project, but it is prohibited to redistribute them as your own work. Also, do not copy images from other users on Photomace and upload them to your own account.

								</p>
							<b>Derivative Works of Photomace Images
								</b>
							<p>If you use an image from Photomace for your own work, we kindly request that you ask the original author for permission before uploading derivative works and isolations/cut-outs into your own account. This is legally not required, but it is polite and fair. Please respect the original author's decision. Photomace offers over a million images to choose from, so there are plenty of alternative resources available. If you publish such a work, please give credit to the original author in the first comment. The image author will be happy to see this and it is an interesting information for users.</p>
							<b>Visual Requirements</b>
							<p>Any image on Photomace must have a well defined subject, clear focus, and compelling colors. Unintentional blurriness, extreme angles or crookedness, chromatic aberration, JPEG compression artifacts, and image noise must be avoided - just like any kind of embedded text, particularly time stamps, signatures and logos.
								</p>
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