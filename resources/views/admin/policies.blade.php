<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="Yinka Adeniran">

	<title>SIB Admin Panel | Policies</title>

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
	
	<style>
		.logo_image{
			width: 60px !important;
			height: 60px;
		}
		.view-modal-header{
			margin-top: 25px;
			/*margin-bottom: 15px;*/
			text-align: center;
			width: 100%;
			border: none !important;
		}
		.modalIcon{
			width: 200px;
			height: auto;
		}
		#viewDesc{
			text-align: justify;
		}
	</style>
</head>

<body>
<div class="main-menu">
	<header class="header">
		<a href="{{url('/admin/index')}}" class="logo" ><img class="logo_image" src="{{asset('public/main/images/icons/ic-logo-01.png')}}" /></a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
	</header>
	<!-- /.header -->
	<div class="content">

		<div class="navigation">
			<h5 class="title">Navigation</h5>
			<!-- /.title -->
			<ul class="menu js__accordion">
				<li>
					<a class="waves-effect" href="{{url('admin/index')}}"><i class="menu-icon ti-dashboard"></i><span>Dashboard</span></a>
				</li>
				<li class="current">
					<a class="waves-effect" href="{{url('admin/policies')}}"><i class="menu-icon ti-file"></i><span>Insurance Policies</span></a>
				</li>
				<li>
					<a class="waves-effect" href="{{url('admin/requests')}}"><i class="menu-icon ti-shopping-cart"></i><span>Manage Requests</span></a>
				</li>
				<li>
					<a class="waves-effect" href="{{url('admin/claims')}}"><i class="menu-icon ti-credit-card"></i><span>Manage Claims</span></a>
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
		<h1 class="page-title">Policies</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
		<div class="ico-item">
			<i class="ti-user"></i> {{$loggedInUser->name}}
			<ul class="sub-ico-item">
				<li><a href="{{url('profile')}}">Settings</a></li>
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
					<a data-toggle="modal" data-target="#newModal" class="dropdown-icon glyphicon glyphicon-pencil"> Create new policy</a>
					
					<!-- /.sub-menu -->
				</div>
				<!-- /.dropdown js__dropdown -->
				<table id="example" class="table table-striped table-bordered display" style="width:100%">
					<thead>
						<tr>
							<th>S/N</th>
							<th>Image</th>
							<th>Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($policies as $key=>$policy)
						<tr>
							<td>{{$key + 1}}</td>
							<td><img src="{{asset('public/policies/'.$policy->image)}}" width="50px" height="50px" /></td>
							<td>{{$policy->name}}</td>
							<td>
								<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#viewModal" onclick='handleView("{{$policy->name}}", "{{$policy->image}}", "{{$policy->description}}")'><i class="fa fa-info-circle"></i></button>
								<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#editModal" onclick='handleEdit("{{$policy->id}}", "{{$policy->name}}", "{{$policy->image}}", "{{$policy->description}}")'><i class="fa fa-edit"></i></button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		<!-- /.row small-spacing -->

		
		
		<footer class="footer" style="margin-top: 100px;">
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
	<script>
		$( document ).ready(function() {
			$("#newTextarea").jqte();
		});
		function handleView(name, image, desc){
			$("#viewImage").attr("src","../public/policies/"+image);
			$("#viewName").html(name);
			$("#viewDesc").html(desc);
		}

		function handleEdit(id, name, image, desc){
			$("#editTextarea").jqte();
			//$("#viewImage").attr("src","../public/policies/"+image);
			$("#editId").val(id);
			$("#editName").val(name);
			$("#editTextarea").jqteVal(desc);
		}

	</script>
</body>
</html>
<!-- Modal -->
<div id="viewModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
	
		<!-- Modal content-->
		<div class="modal-content">
		<div class="view-modal-header">
			<img id="viewImage" src="" class="modalIcon" />
		</div>
		<div class="modal-body">
			<p><b id="viewName"></b></p>
			<p id="viewDesc"></p>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
		</div>
	
	</div>
</div>

<!-- Modal -->
<div id="editModal" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
		
			<!-- Modal content-->
			<div class="modal-content">
			<div class="modal-header">
				<h3><i class="fa fa-edit" > </i> Edit</h3>
			</div>
			<div class="modal-body">
				<form action="{{url('admin/edit_policy')}}" method="post" class="">
					<div class="inside">
						<!-- /.frm-title -->
						<input type="hidden" id="editId" name="id" />
						<div class="form-group">
							<label>Name</label>
							<input type="text" placeholder="Name" id="editName" name="name" class="form-control"></div>
						<!-- /.frm-input -->
						<label>Description</label>
						<textarea id="editTextarea" name="description" id="editDesc">
							
						</textarea>
						
						<button type="submit" class="frm-submit">Update<i class="fa fa-arrow-circle-right"></i></button>
					</div>
					<!-- .inside -->
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
			</div>
		
		</div>
	</div>

<div id="newModal" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
	
		<!-- Modal content-->
		<div class="modal-content">
		<div class="modal-header">
			<h3><i class="fa fa-edit" > </i> Create new policy</h3>
		</div>
		<div class="modal-body">
			<form action="{{url('admin/new_policy')}}" method="post" class="">
				<div class="inside">
					<!-- /.frm-title -->
					<div class="form-group">
						<label>Name</label>
						<input type="text" placeholder="Name" name="name" class="form-control">
					</div>
					<div class="form-group">
						<label>Picture</label>
						<input type="file" name="photo" class="form-control">
					</div>
					<!-- /.frm-input -->
					<label>Description</label>
					<textarea id="newTextarea" name="description" id="editDesc">
						
					</textarea>
					
					<button type="submit" class="frm-submit">Update<i class="fa fa-arrow-circle-right"></i></button>
				</div>
				<!-- .inside -->
			</form>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
		</div>
	
	</div>
</div>