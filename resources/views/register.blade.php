<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Home</title>
	<link rel="stylesheet" href="{{asset('public/admin/styles/style.min.css')}}">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="{{asset('public/admin/plugin/waves/waves.min.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">

</head>

<body>
	<script src="{{asset('public/admin/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
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
	<!-- page load-->
	<div class="page-loader">
		<div class="loader"></div>
	</div>
<div id="single-wrapper">
	<form action="{{url('register_client')}}" method="post" class="frm-single">
		<div class="inside">
			<div class="title"><strong>Ninja</strong>Clients</div>
			<!-- /.title -->
			<div class="frm-title">Register</div>
			<!-- /.frm-input -->
			<div class="frm-input"><input type="text" name="name" placeholder="Name" class="frm-inp"><i class="fa fa-user frm-ico"></i></div>
			<!-- /.frm-input -->
			<div class="frm-input"><input type="text" name="phone" placeholder="Phone" class="frm-inp"><i class="fa fa-user frm-ico"></i></div>
			<!-- /.frm-title -->
			<div class="frm-input"><input type="email" name="email" placeholder="Email" class="frm-inp"><i class="fa fa-envelope frm-ico"></i></div>
			<!-- /.frm-input -->
			<div class="frm-input"><input type="password" name="password" placeholder="Password" class="frm-inp"><i class="fa fa-lock frm-ico"></i></div>
			<!-- /.frm-input -->
			<div class="clearfix margin-bottom-20">
				<div class="checkbox primary"><input type="checkbox" id="accept"><label for="accept">I accept Terms and Conditions</label></div>
				<!-- /.checkbox -->
			</div>
			<!-- /.clearfix -->
			<button type="submit" class="frm-submit">Register<i class="fa fa-arrow-circle-right"></i></button>
			
			<!-- /.row -->
			<a href="{{url('login')}}" class="a-link"><i class="fa fa-sign-in"></i>Already have account? Login.</a>
			<div class="frm-footer">NinjaAdmin © 2016.</div>
			<!-- /.footer -->
		</div>
		<!-- .inside -->
	</form>
	<!-- /.frm-single -->
</div><!--/#single-wrapper -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="{{asset('public/admin/scripts/jquery.min.js')}}"></script>
	<script src="{{asset('public/admin/scripts/modernizr.min.js')}}"></script>
	<script src="{{asset('public/admin/plugin/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/admin/plugin/nprogress/nprogress.js')}}"></script>
	<script src="{{asset('public/admin/plugin/waves/waves.min.js')}}"></script>

	<script src="{{asset('public/admin/scripts/main.min.js')}}"></script>
</body>
</html>