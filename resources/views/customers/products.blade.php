<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title Of Site -->
	<title>Peeshure | Explore - Your number 1 Free Stock Photo Site</title>
	<meta name="description" content="Peeshure is a website where you can download Stock Photos Online absolutely free. No sign ups, No login, No bullshit... Instant download of over 1 million high quality stock photos" />
	<meta name="keywords" content="microstock, photo, stockphoto, photography, footage, vector, free photo, free image, photostock" />
	<meta name="author" content="crenoveative">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	@include('customers/includes/main-css')
	
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

			<div class="breadcrumb-wrapper breadcrumb-form">
			
				<div class="container">

					<div class="row">
					
						<div class="col-xs-12 col-sm-6 col-md-6 mb-20-sm">
							<div class="input-group-search-form-wrapper">
								<form method="post" action="{{url('searched_products')}}" >
									<div class="input-group bg-change-focus-addclass">
										<input type="text" name="keyword" class="form-control"placeholder="Search images eg Nature, Lagos, Business"  >
										<div class="input-group-btn">
											<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
										</div>
									</div><!-- /input-group -->
								</form>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="row">
								{{--
								<div class="col-md-6">
									<div class="form-group">
										<select id="filter_image_type" class="selectpicker show-tick form-control" title="Image Type" data-selected-text-format="count > 3" data-done-button="true" data-done-button-text="OK" multiple>
											<option value="0">Photo</option>
											<option value="1">Illustration</option>
											<option value="2">Vector</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<select id="filter_image_orientation" class="selectpicker show-tick form-control" title="Category" data-selected-text-format="count > 3" data-done-button="true" data-done-button-text="OK" multiple>
											@foreach($categories as $category)
											<option value="{{$category->id}}">{{$category->name}}</option>
											@endforeach
										</select>
									</div>
								</div>
								--}}
							</div>
							
						</div>
						<div class="col-xs-12 col-sm-12 col-md-2">
							<div class="text-right">
								<span class="btn btn-toggle btn-refine collapsed" data-toggle="collapse" data-target="#refine-result">Refine Result</span>
							</div>
						</div>
						
					</div>

				</div>

			</div>
			
			<div class="filter-wrapper">
			
				<div id="refine-result" class="collapse"> 
				
					<div class="container">
					
						<div class="collapse-inner clearfix">
						
							<div class="row gap-15">
								<div class="col-xss-12 col-xs-6 col-sm-4 col-md-2">
									<div class="form-group">
										<select id="filter_image_type" class="selectpicker show-tick form-control" title="Image Type" data-selected-text-format="count > 3" data-done-button="true" data-done-button-text="OK">
											<option value="" selected disabled>Image type</option>
											<option>Photo</option>
											<option>Illustration</option>
											<option>Vector</option>
										</select>
									</div>
								</div>
								<div class="col-xss-12 col-xs-6 col-sm-4 col-md-2">
									<div class="form-group">
										<select id="filter_image_category" class="selectpicker show-tick form-control" title="Category" data-selected-text-format="count > 3" data-done-button="true" data-done-button-text="OK">
											<option value="" selected disabled>Category</option>
											@foreach($categories as $category)
											<option value="{{$category->id}}">{{$category->name}}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-xss-12 col-xs-6 col-sm-4 col-md-2">
								
									<div class="form-group">
										<select id="filter_image_orientation" class="selectpicker show-tick form-control" title="Image Orientation" data-selected-text-format="count > 3" data-done-button="true" data-done-button-text="OK">
											<option value="" selected disabled>Image Orientation</option>
											<option>Portrait</option>
											<option>Landscape</option>
										</select>
									</div>
									
								</div>
								
								<div class="col-xss-12 col-xs-6 col-sm-4 col-md-1">
									<div>
										<button style="margin-top: 5px;" class="btn btn-primary" onclick="sort()">Sort</span>
									</div>
								</div>

							</div>
							
						</div>
					</div>
				</div>
					
			</div>
			<div class="content-wrapper">
			
				<div class="container">

					<div class="section-sm">
					
						<div class="section-title mb-30">
							<h3 class="uppercase"> <span class="font600">Illustrations,</span> Photos &amp; Vectors</h3>
						</div>
						
						<div class="filter-sm-wrapper">
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-4 mb-10">
									<div class="result-count">{{count($products)}} items</div>
								</div>
								<div class="col-xs-12 col-sm-5 col-md-4 mb-10">
									<ul class="filter-paging">
										<li class="paging-nav">{{ $products->links() }}</li>
									</ul>	
								</div>
								<div class="col-xs-12 col-sm-4 col-md-4 mb-10">
									
								</div>
							</div>
						</div>
					
						<div class="flex-images flex-image category-item-wrapper">
							@foreach ($products as $product)
							<div class="item" data-w="{{$product->width}}" data-h="{{$product->height}}">
								<a href="{{url('details/'.$product->id)}}">
									<img src="{{asset('public/images/products/'.$product->image)}}" alt="{{$product->name}} - {{$product->category}} - {{$product->tags}}">
								</a>
								<div class="category-item-caption">
									<div class="row gap-0">
										
										<div class="col-md-12">
											<a href="{{url('details/'.$product->id)}}" data-toggle="tooltip" data-placement="top" title="Preview"><i class="fa fa-download"></i> {{$product->name}}</a>
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</div>

						<div class="filter-sm-wrapper mt-20">
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-4 mb-10">
									<div class="result-count">{{count($products)}} items</div>
								</div>
								<div class="col-xs-12 col-sm-5 col-md-4 mb-10">
									<ul class="filter-paging">
										<li class="paging-nav">{{ $products->links() }}</li>
									</ul>	
								</div>
								<div class="col-xs-12 col-sm-4 col-md-4 mb-10">
									
								</div>
							</div>
						</div>

					</div>
					
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