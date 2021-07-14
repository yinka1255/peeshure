<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title Of Site -->
	<title>Peeshure | Home - Your number 1 Free Stock Photo Site</title>
	<meta name="description" content="Peeshure is a website where you can download Stock Photos Online absolutely free. No sign ups, No login, No bullshit... Instant download of over 1 million high quality stock photos" />
	<meta name="keywords" content="microstock, photo, stockphoto, photography, footage, vector, free photo, free image, photostock" />
	<meta name="author" content="crenoveative">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
    @include('customers/includes/main-css')
	
	<meta name="google-site-verification" content="g0C8MB7UUYWdF7psXNjvhKsq4u6jcDSypdViS_MCjOo" />
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
</head>

<body>

	

	<!-- start Container Wrapper -->
	<div class="wrapper container-wrapper">

		<!-- start Header -->
		@include('customers/includes/header');
		
		<!-- end Header -->
		
		<!-- start Main Wrapper -->
		<div class="main-wrapper">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
				  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
				  <div class="item active">
					<img class="d-block w-100" src="{{asset("public/main/images/hero-header/01.jpg")}}" alt="First slide">
					<div class="carousel-caption d-none d-md-block">
						<h1>High Quality Stock Images</h1>
						<p>Find everything you need for your creative projects. Download free instantly...</p>
					</div>
				  </div>
				  <div class="item">
					<img class="d-block w-100" src="{{asset("public/main/images/hero-header/01.jpg")}}" alt="Second slide">
					<div class="carousel-caption d-none d-md-block">
						<h1>High Quality Stock Images</h1>
						<p>Find everything you need for your creative projects. Download free instantly...</p>
					</div>
				  </div>
				  <div class="item">
					<img class="d-block w-100" src="{{asset("public/main/images/hero-header/01.jpg")}}" alt="Third slide">
					<div class="carousel-caption d-none d-md-block">
						<h1>High Quality Stock Images</h1>
						<p>Find everything you need for your creative projects. Download free instantly...</p>
					</div>
				  </div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				  <span class="carousel-control-next-icon" aria-hidden="true"></span>
				  <span class="sr-only">Next</span>
				</a>
			  </div>
			<!-- start hero-header 
			<div class="hero" style="background-image:url('{{asset("public/main/images/hero-header/01.jpg")}}');">
				<div class="container">
					<div class="row gap-0">
					
						<div class="col-md-10 col-md-offset-1">
						  <div class="section-title-special">
								<h1>Stunning free images & royalty free stock</h1>
								<p class="p-title">Find everything you need for your creative projects. Download free instantly.</p>
							</div>
						</div>
						
						<div class="col-md-8 col-md-offset-2">
							<div class="input-group-search-form-wrapper size-lg">
								<form method="post" action="{{url('searched_products')}}" >
									<div class="input-group bg-change-focus-addclass">
										<input type="text" name="keyword" class="form-control"placeholder="Search images eg Nature, Lagos, Business"  >
										<div class="input-group-btn">
											<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
										</div>
									</div>
									
								</form>
							</div>

						</div>
						
					</div>

				</div>
				
			</div>
			<!-- end hero-header -->
		
			<div class="content-wrapper">
			
				<div class="section pb-50">
				
					<div class="container">
					
						<div class="row gap-">
							<div class="col-md-10 col-md-offset-1">
							
								<div class="section-title-special mb-30">
									<h2>Over Millions Photos, Vectors &amp; Footages</h2>
									<p>High quality royalty-free stockphotos at flexible pricing.<br/>Download instantly for your creative products!</p>
								</div>
						
							</div>
						</div>
						<div class="row gap-0 mb-50">
							<div class="col-md-8 col-md-offset-2">
						
								<p class="text-center">You can use our stock content for publications, TV commercials, goods packaging or smartphone applications. Because it's Royalty Free, once you purchase it you can use it for anything you need. </p>
							
							</div>
						</div>
						
						<div class="row gap-20 mb-70">
							<div class="flex-images flex-image category-item-wrapper">
								@foreach ($categories as $category)
								<div class="item category-image-bg" data-w="{{$category->width}}" data-h="{{$category->height}}">
									<a href="{{url('products/'.$category->id.'/'.$category->name)}}">
										<img src="{{url($category->image)}}" alt="{{$category->name}} ">
										<a href="{{url('products/'.$category->id.'/'.$category->name)}}">
											<span class="text">
												{{$category->name}}
											</span>
										</a>
									</a>
									
								</div>
								@endforeach	
							</div>
							<div class="text-center mt-20">
								<a href="{{url('explore')}}" class="btn btn-primary btn-lg">Explore Now</a>
							</div>
						</div>

						<div class="row gap-0">
							<div class="col-md-10 col-md-offset-1">
								<div class="section-title-special mb-30">
									<h2>Stock Photos Search Categories</h2>
									<p>You can search through our stock from popular categories such as <br/>People, Nature, Landscape or Business</p>
								</div>
							</div>
						</div>
						
						<ul class="home-category-list clearfix mt-10">
							@foreach ($categories as $category)
							<li><a href="#">{{$category->name}}</a></li>
							@endforeach
						</ul>

						<div class="clear mb-50"></div>
						
						
					</div>
					
				</div>
				
			</div>

			<div class="image-bg-wrapper counting-wrapper" style="background: #FFBF00;">
			
				<div class="container mt-10">
				
					<div class="row">
						
						<div class="col-sm-6 col-md-3">
						
							<div class="counting-item">
							
								<div class="counting-number h1"><span class="counter" data-decimal-delimiter="," data-thousand-delimiter="," data-value="135254" ></span></div>
								
								Photos
								
							</div>
						
						</div>
						
						<div class="col-sm-6 col-md-3">
						
							<div class="counting-item">
							
								<div class="counting-number h1"><span class="counter" data-decimal-delimiter="," data-thousand-delimiter="," data-value="84751" ></span></div>
								
								Footages
								
							</div>
						
						</div>

						<div class="col-sm-6 col-md-3">
						
							<div class="counting-item">
							
								<div class="counting-number h1"><span class="counter" data-decimal-delimiter="," data-thousand-delimiter="," data-value="98547" ></span></div>
								
								Vectors
								
							</div>
						
						</div>
						
						<div class="col-sm-6 col-md-3">
						
							<div class="counting-item">
							
								<div class="counting-number h1"><span class="counter" data-decimal-delimiter="," data-thousand-delimiter="," data-value="6824" ></span></div>
								
								Authors
								
							</div>
						
						</div>
						
					</div>
				
					
				</div>
				
			</div>
			
			<div class="image-bg-wrapper overlay-white process-wrapper" style="background: #FFBF00;" >
			
				<div class="container">
				
					<div class="row gap-0">
						<div class="col-md-10 col-md-offset-1">
							<div class="section-title-special">
								<h2 class="text-primary">How it works</h2>
							</div>
						</div>
					</div>
					
					<div class="GridLex-gap-30">
					
						<div class="GridLex-grid-noGutter-equalHeight">
									
							<div class="GridLex-col-4_sm-4_xs-12">
							
								<div class="process-item clearfix">
										
									<div class="number">
										<span class="text-primary">0</span>1
									</div>
									
									<div class="content">
										<h3 class="text-main font700">Sign Up</h3>
										<p>Property men the smallest graceful insisted smallness expenses as material</p>
									</div>
									
								</div>
							
							</div>
							
							<div class="GridLex-col-4_sm-4_xs-12">
							
								<div class="process-item clearfix">
										
									<div class="number">
										<span class="text-primary">0</span>2
									</div>
									
									<div class="content">
										<h3 class="text-main font700">Search Photos</h3>
										<p>Ecstatic elegance disposed smallness rent been part breeding insisted</p>
									</div>
									
								</div>
								
							</div>
							
							<div class="GridLex-col-4_sm-4_xs-12">
							
								<div class="process-item clearfix">
										
										<div class="number">
										<span class="text-primary">0</span>3
									</div>
										
										<div class="content">
											<h3 class="text-main font700">Get Yours</h3>
											<p>Property men the smallest graceful insisted smallness building to in</p>
										</div>
										
									</div>
									
							</div>
							
						</div>
						
					</div>
				
				</div>
				
			</div>
			
			<div class="section pt-70 pb-80">
			
				<div class="container">
				
					<div class="user-action-wrapper">
			
						<div class="GridLex-gap-30">
						
							<div class="GridLex-grid-noGutter-equalHeight">
										
								<div class="GridLex-col-6_sm-6_xs-12">
								
									<div class="user-action-item clearfix">
									
										<div class="icon">
											<i class="pe-7s-cash"></i>
										</div>
										
										<div class="content">
										
											<h4 class="text-uppercase mb-20">Looking Photos to Buy</h4>
											<p class="mb-25">It allowance prevailed enjoyment in it. Calling observe for who pressed raising his. Can connection instrument astonished unaffected his motionless preference.</p>
											
											<a data-toggle="modal" href="#loginModal"class="btn btn-primary">Sign Up For Free</a>
											
										</div>
									
									</div>
									
								</div>
										
								<div class="GridLex-col-6_sm-6_xs-12">
								
									<div class="user-action-item clearfix">
									
										<div class="icon">
											<i class="pe-7s-camera"></i>
										</div>
										
										<div class="content">
										
											<h4 class="text-uppercase mb-20">Are You Photograpper?</h4>
											<p class="mb-25">It allowance prevailed enjoyment in it. Calling observe for who pressed raising his. Can connection instrument astonished unaffected his motionless preference.</p>
											
											<a href="javascript:void(0)" onclick="alert('Coming soon')" class="btn btn-primary">Upload your photos</a>
											
										</div>
									
									</div>
									
								</div>
								
							</div>
							
						</div>
						
					</div>
				
				</div>
				
			</div>

		</div>
		<!-- end Main Wrapper -->
		
		@include('customers/includes/footer');
		
 </div> <!-- / .wrapper -->
	<!-- end Container Wrapper -->
 
 
 <!-- start Back To Top -->
<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>
<!-- end Back To Top -->


@include('customers/includes/main-js');

</body>


</html>