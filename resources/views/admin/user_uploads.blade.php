<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="Yinka Adeniran">

	<title>Peeshure Admin Panel | User uploads</title>

	<!-- Main Styles -->
	<link rel="stylesheet" href="{{asset('public/admin/styles/style.min.css')}}">
	
	<!-- Themify Icon -->
	<link rel="stylesheet" href="{{asset('public/admin/fonts/themify-icons/themify-icons.css')}}">

	<!-- mCustomScrollbar -->
	<link rel="stylesheet" href="{{asset('public/admin/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css')}}">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="{{asset('public/admin/plugin/waves/waves.min.css')}}">

	<!-- Sweet Alert -->
	<link rel="stylesheet" href="{{asset('public/admin/plugin/sweet-alert/sweetalert.css')}}">
	
	<!-- Percent Circle -->
	<link rel="stylesheet" href="{{asset('public/admin/plugin/percircle/css/percircle.css')}}">

	<!-- Chartist Chart -->
	<link rel="stylesheet" href="{{asset('public/admin/plugin/chart/chartist/chartist.min.css')}}">

	<!-- FullCalendar -->
	<link rel="stylesheet" href="{{asset('public/admin/plugin/fullcalendar/fullcalendar.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/plugin/fullcalendar/fullcalendar.print.css')}}" media='print'>
	<!-- TinyMCE -->
	<link rel="stylesheet" href="{{asset('public/admin/jquery-w.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
	<link href="{{asset('public/main/bootstrap/bootstrap-tagsinput-latest/src/bootstrap-tagsinput.js')}}" rel="stylesheet">
	
	<style>
		.logo_image{
			width: 60px !important;
			height: 60px;
		}
		
	</style>
</head>

<body>
		<script src="{{asset('public/admin/scripts/jquery.min.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
		<script>
			function getSuccess(data){
				$.confirm({
						title: 'Success',
						content: data,
						type: 'green',
						typeAnimated: true,
						buttons: {
								Ok: function () {
								}
						}
				});
			}
	
		function getError(data){
				$.confirm({
						title: 'Error!',
						content: data,
						type: 'red',
						typeAnimated: true,
						buttons: {
								Ok: function () {
								}
						}
				});
			}
		</script>
<div class="main-menu">
	@if(Session::has('error'))
	<script>
		getError("{{Session::get('error')}}");
	</script>
	@endif	
	@if(Session::has('success'))
	<script>
		getSuccess("{{Session::get('success')}}");
	</script>
	@endif	
	<header class="header">
		<a href="{{url('/admin/index')}}" class="logo" ><img class="logo_image" src="{{asset('public/main/images/logo.png')}}" /></a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
	</header>
	<!-- /.header -->
	<div class="content">

		<div class="navigation">
			<h5 class="title"></h5>
			<!-- /.title -->
			<ul class="menu js__accordion">
				<li>
					<a class="waves-effect" href="{{url('admin/index')}}"><i class="menu-icon ti-dashboard"></i><span>Dashboard</span></a>
				</li>
				<li>
					<a class="waves-effect" href="{{url('admin/categories')}}"><i class="menu-icon ti-list"></i><span>Categories</span></a>
				</li>
				<li>
					<a class="waves-effect" href="{{url('admin/products')}}"><i class="menu-icon ti-image"></i><span>Products</span></a>
				</li>
				<li class="current">
						<a class="waves-effect" href="{{url('admin/user_uploads')}}"><i class="menu-icon ti-user"></i><span>User Uploads</span></a>
					</li>
			</ul>
			<!-- /.menu js__accordion -->
		</div>
		<!-- /.navigation -->
	</div>
	<!-- /.content -->
</div>
<!-- /.main-menu -->

<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">Products</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
		<div class="ico-item">
			<i class="ti-user"></i> {{$loggedInUser->name}}
			<ul class="sub-ico-item">
				<li><a href="{{url('admin/profile')}}">Settings</a></li>
				<li><a class="" href="{{url('logout')}}">Log Out</a></li>
			</ul>
			<!-- /.sub-ico-item -->
		</div>
	</div>
	<!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->


<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="box-content">
				<h4 class="box-title">Default</h4>
				<!-- /.box-title -->
				<div class="dropdown js__drop_down">
					<a data-toggle="modal" data-target="#newModal" class="dropdown-icon glyphicon glyphicon-pencil"> Create new product</a>
					
					<!-- /.sub-menu -->
				</div>
				<!-- /.dropdown js__dropdown -->
				<table id="example" class="table table-striped table-bordered display" style="width:100%;">
					<thead>
						<tr>
							<th>S/N</th>
							<th>Image</th>
							<th>Name</th>
							<th>Type</th>
							<th>Category</th>
							<th>Status</th>
							<th>Created</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($products as $key=>$product)
						<tr>
							<td>{{$key + 1}}</td>
							<td><a  data-toggle="modal" data-target="#editModal" href="javascript:void(0)" onclick='openImage("{{$product->image}}")'> <img src="{{asset('public/images/products/'.$product->image)}}" width="50px" height="auto"  /></a> </td>
							<td>{{$product->name}}</td>
							<td>{{$product->type}}</td>
							<td>{{$product->category_name}}</td>
							@if($product->status == 1)
							<td><span style="background: green; padding: 5px; border-radius: 5px;">Approved</span></td>
							@elseif($product->status == 2)
							<td><span style="background: yellow; padding: 5px; border-radius: 5px;">Pending</span></td>
							@elseif($product->status == 3)
							<td><span style="background: brown; padding: 5px; border-radius: 5px;">Rejected</span></td>
							@endif
							<td>{{$product->created_at}}</td>
							
							<td>
								@if($product->status == 2)
								<a href="{{url('approve/'.$product->id)}}" class="btn btn-primary">Approve</a>
								<a href="{{url('disapprove/'.$product->id)}}" class="btn btn-danger">Disapprove</a>
								@endif
							</td>

						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		<!-- /.row small-spacing -->

		
		
		<footer class="footer" style="margin-top: 200px;">
			<ul class="list-inline">
				<li>2019 © SIB NIGERIA.</li>
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Terms</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</footer>
	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
	<!-- HTML5 shim and Respond.js')}} for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="{{asset('public/admin/script/html5shiv.min.js')}}"></script>
		<script src="{{asset('public/admin/script/respond.min.js')}}"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="{{asset('public/admin/scripts/jquery.min.js')}}"></script>
	<script src="{{asset('public/admin/scripts/modernizr.min.js')}}"></script>
	<script src="{{asset('public/admin/plugin/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/admin/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
	<script src="{{asset('public/admin/plugin/nprogress/nprogress.js')}}"></script>
	<script src="{{asset('public/admin/plugin/sweet-alert/sweetalert.min.js')}}"></script>
	<script src="{{asset('public/admin/plugin/waves/waves.min.js')}}"></script>
	<!-- Sparkline Chart -->
	<script src="{{asset('public/admin/plugin/chart/sparkline/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('public/admin/scripts/chart.sparkline.init.min.js')}}"></script>

	<!-- Percent Circle -->
	<script src="{{asset('public/admin/plugin/percircle/js/percircle.js')}}"></script>


	<!-- Chartist Chart -->
	<script src="{{asset('public/admin/plugin/chart/chartist/chartist.min.js')}}"></script>
	<script src="{{asset('public/admin/scripts/jquery.chartist.init.min.js')}}"></script>

	<!-- FullCalendar -->
	<script src="{{asset('public/admin/plugin/moment/moment.js')}}"></script>
	<script src="{{asset('public/admin/plugin/fullcalendar/fullcalendar.min.js')}}"></script>
	<script src="{{asset('public/admin/scripts/fullcalendar.init.js')}}"></script>

	<script src="{{asset('public/admin/scripts/main.min.js')}}"></script>
	<script src="{{asset('public/admin/jquery-w.min.js')}}"></script>
	<script src="{{asset('public/main/bootstrap/bootstrap-tagsinput-latest/src/bootstrap-tagsinput.js')}}"></script>
	

	<script>
		$(document).ready(function(){
			$('#tags').tagsinput({
				inputClass: 'form-control'
			});
			$('#edit_tags').tagsinput({
				focusClass: 'form-control'
				
			});
		})
		
		function openImage(image){
			$("#image").attr("src","../public/images/products/"+image);
		}

	</script>
</body>

<!-- Modal -->
<div id="editModal" class="modal fade" role="dialog">
	<div class="modal-dialog modal-md" style="margin-top: 60px;">
	
		<!-- Modal content-->
		<div class="modal-content" style="padding-bottom: 20px;">
			<div class="modal-body">
				<div style="width: 100%;margin: 0 auto;text-align:center;">
					<img style="height:auto;width: 100%;text-align: center;padding: 20px" id="image" />
				</div>
				</form>
			</div>
		</div>
	
	</div>
</div>

<div id="newModal" class="modal fade" role="dialog">
	<div class="modal-dialog modal-md" style="margin-top: 60px;">
	
		<!-- Modal content-->
		<div class="modal-content" style="padding-bottom: 20px;">
		
			<div class="modal-header">
				<h4>New Category</h4>
			</div>
			<div class="modal-body">
				<form action="{{url('admin/new_product')}}" enctype="multipart/form-data" method="post" class="">
					<br/>
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" id="name" required class="form-control" />
					</div>
					<div class="form-group">
						<label>Type</label>
						<select name="type" id="type" required  class="form-control" >
							<option>Photo</option>
							<option>Illustration</option>
							<option>Vector</option>
						</select>
					</div>
					<div class="form-group">
						<label>Orientation</label>
						<select name="orientation" id="orientation" class="form-control" >
							<option>Landscape</option>
							<option>Portrait</option>
						</select>
					</div>
					<div class="form-group">
						<label>Category</label>
						<select name="category_id" id="category" required class="form-control" >
							@foreach ($categories as $category)
								<option value="{{$category->id}}">{{$category->name}}</option>	
							@endforeach
						</select>
					</div>
					
					<div class="form-group">
						<label>Image</label>
						<input type="file" name="image"  required  class="form-control" />
					</div>
					<div class="form-group">
						<label>Tags</label>
						<input type="text" data-role="tagsinput" name="tags" id="tag" required class="form-control" />
					</div>
					<button type="submit" class="frm-submit btn btn-primary pull-right">Create<i class="fa fa-arrow-circle-right"></i></button>
						<br/>
						<br/>
				</form>
			</div>
		</div>
	
	</div>
</div>

</html>
