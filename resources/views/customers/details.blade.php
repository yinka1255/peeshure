<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title Of Site -->
	<title>Photomace | {{$product->name}} (Image) details, download </title>
	<meta name="description" content="Photomace is a website where you can download Stock Photos Online absolutely free. No sign ups, No login, No bullshit... Instant download of over 1 million high quality stock photos" />
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
						
						
					</div>

				</div>

			</div>
			<div class="content-wrapper">
			
				<div class="detail-wrapper">
			
					<div class="container">

						<div class="section-sm">
						
							<div class="row">
								
								<div class="col-xs-12 col-sm-12 col-md-3">
								
									<div class="row gap-20">
										
										<div class="col-xs-12 col-sm-6 col-md-12 mb-30-sm">
										
											<h3 class="detail-title">{{$product->name}}</h3>
											<p class="detail-meta">Stock ID: #{{str_pad($product->id, 8, '0', STR_PAD_LEFT)}} </p>
											<p class="detail-meta">Uploaded date: {{$product->created_at->format('l j F Y')}} </p>
											
											
										</div>
										
										<div class="col-xs-12 col-sm-6 col-md-12 mb-30-sm">
										
											<div class="detail-person clearfix">
												<div class="image">
													<img src="{{asset("public/main/images/logo-icon.png")}}" alt="Images" class="img-circle" />
												</div>
												<div class="content">
													Photo by:
													<a href="#" class="block">Photomace</a>
												</div>
											</div>
											
											<div class="detail-sm-section">
												<h4>Keywords:</h4>
												{{$product->tags}}
											</div>
											
										</div>
										
									</div>

								</div>
								
								<div class="col-xs-12 col-sm-12 col-md-9">
								
									<div class="row">
										
										<div class="col-xs-12 col-sm-6 col-md-7 mb-30-sm">
											<div class="detail-image">
												<img src="{{url($product->image)}}" alt="{{$product->name}} - {{$product->category}} - {{$product->tags}}"  />
												{{--
												<div class="mt-15">
													<a href="#" class="mr-15"><i class="fa fa-star"></i> Save to my box</a>
													<a href="#" class="mr-15"><i class="fa fa-download"></i> Download preview</a>
													<a href="#"><i class="fa fa-search"></i> Find Similar</a>
												</div>
												--}}
												{{--
												<div class="social-share clearfix">
													<a href="#" class="social-facebook">
														<span class="block">
															<i class="fa fa-facebook-official"></i> 253
														</span>
														share on facebook
													</a>
													<a href="#" class="social-twitter">
														<span class="block">
															<i class="fa fa-twitter"></i> 253
														</span>
														share on twitter
													</a>
													<a href="#" class="social-pinterest">
														<span class="block">
															<i class="fa fa-pinterest-p"></i> 253
														</span>
														share on pinterest
													</a>
												</div>
												--}}
											</div>
										</div>
									
										<div class="col-xs-12 col-sm-6 col-md-5">
										
											<div class="detail-tab">
												<div class="tab-content">
													<div >	
														
														<p class="mb-10">Download a single image based on size</p>
														<form method="post" action="{{url('download')}}" >
															<input type="hidden" name="id" value="{{$product->id}}" />
															<div class="detail-radio-wrapper mb-30">
																<div class="radio-block">
																	<input id="radio_size-1" name="size" type="radio" class="radio" value="100" checked />
																	<label class="" for="radio_size-1">
																		<span class="detail-price-sm">
																			<span class="block uppercase">High</span>
																			{{$product->width}} x {{$product->height}} px @ 72 Dpi image
																			<span class="price">Free</span>
																		</span>
																	</label>
																</div>
																<div class="radio-block">
																	<input id="radio_size-2" name="size" type="radio" class="radio" value="75" />
																	<label class="" for="radio_size-2">
																		<span class="detail-price-sm">
																			<span class="block uppercase">Meidum</span>
																			{{$product->width * 0.75}} x {{round($product->height * 0.75)}} px  @ 72 Dpi image
																			<span class="price">Free</span>
																		</span>
																	</label>
																</div>
																<div class="radio-block">
																	<input id="radio_size-3" name="size" type="radio" class="radio" value="50" />
																	<label class="" for="radio_size-3">
																		<span class="detail-price-sm">
																			<span class="block uppercase">Small</span>
																			{{$product->width * 0.50}} x {{round($product->height * 0.50)}} px @ 72 Dpi image
																			<span class="price">Free</span>
																		</span>
																	</label>
																</div>
															</div>
															<button type="submit" class="btn btn-primary btn-lg btn-block"><i class="fa fa-download"></i> Download this photo</button>
														</form>
														<p class="mb-0 mt-15">Includes our <a href="{{url('licence')}}">our standard license</a></p>
														
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
				
				<div class="container">
				
					<div class="section-sm">
					
						<div class="section-title mb-10">
							<h4 class="text-left">Similar Photos</h4>
						</div>
						
						<div class="flex-images flex-image-detail category-item-wrapper">
							
							@foreach ($similar_products as $similar_product)
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

						<div class="clear mb-10"></div>
						
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
<script type="text/javascript" src="{{asset('public/main/js/jquery.slicknav.min.js')}}"></script>
	<script>
		function sort(){
			window.open("get_products?type="+$("#filter_image_type").val()+"&category="+$("#filter_image_category").val()+"&orientation="+$("#filter_image_orientation").val(),"_self");
		}
	</script>
</body>


</html>