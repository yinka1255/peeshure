<!-- JS -->
<script type="text/javascript" src="{{asset('public/main/js/jquery-1.11.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/main/js/jquery-migrate-1.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/main/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/main/js/jquery.waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/main/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('public/main/js/SmoothScroll.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/main/js/jquery.slicknav.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/main/js/jquery.placeholder.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/main/js/spin.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/main/js/jquery.introLoader.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/main/js/select2.full.js')}}"></script>
<script type="text/javascript" src="{{asset('public/main/js/jquery.responsivegrid.js')}}"></script>
<script type="text/javascript" src="{{asset('public/main/js/readmore.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/main/js/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/main/js/bootstrap-select.js')}}"></script>
<script type="text/javascript" src="{{asset('public/main/js/bootstrap-filestyle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/main/js/jquery.flex-images.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/main/js/jquery.countimator.js')}}"></script>
<script type="text/javascript" src="{{asset('public/main/js/jquery.countimator.wheel.js')}}"></script>
<script type="text/javascript" src="{{asset('public/main/js/jquery.simpletip-1.0.js')}}"></script>
<script type="text/javascript" src="{{asset('public/main/js/customs.js')}}"></script>
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