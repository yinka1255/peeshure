<!DOCTYPE html>
<html lang="en">
	<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
    <meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
    <meta name="author" content="Yinka Adeniran" />
		<meta name="robots" content="index, follow" />
		<title>CashLuck | Redeem</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="{{asset('public/customer/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('public/customer/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('public/customer/css/ionicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/customer/css/font-awesome.min.css')}}" />
    <link href="{{asset('public/customer/css/emoji.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
    
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
    <style>
        .profile-card {
          padding: 10px 10px !important;
          text-align: left !important;
        }
        .active{
        color: #7ccc0f !important;
        /*padding-left: 5px;*/
      }
      </style>  
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
    <!-- Header
    ================================================= -->
		<header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}" style="padding: 0 !important;"><img src="{{asset('public/images/logo.png')}}" style="height: 50px;" alt="logo" /></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
              <li class="dropdown">
                <a href="{{url('customer/dashboard')}}">Home </a>
              </li>
              <li class="dropdown">
                <a class="active" href="{{url('customer/redeem')}}">Redeem </a>
              </li>
              <li class="dropdown">
                <a href="{{url('customer/cashout')}}">Cashout </a>
              </li>
              <li class="dropdown">
                <a href="{{url('customer/raffles')}}">Raffle Draw</a>
              </li>
              <li class="dropdown">
                <a href="{{url('logout')}}">Logout </a>
              </li>
            </ul>
            
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->

    <div id="page-contents">
    	<div class="container">
    		<div class="row">

          <!-- Newsfeed Common Side Bar Left
          ================================================= -->
    			<div class="col-md-3 static" id="chat-block">
            <div class="profile-card">
              @if($loggedInUser->image == null)
            	  <img src="{{asset('public/images/users/no-image.png')}}" alt="user" class="profile-photo" />
              @else
                <img src="{{asset('public/images/users/'.$loggedInUser->image)}}" alt="user" class="profile-photo" />
              @endif
                <h5><a href="{{url('customer/profile')}}" class="text-white">{{$loggedInUser->name}}</a></h5>
                <a href="#" class="text-white">Paid: ₦{{$redeemed}} </a><br/>
                <a href="#" class="text-green" style="color: #7ccc0f;">Unredeemed: ₦{{$unredeemed}} </a>
            </div><!--profile card ends-->
            <ul class="nav-news-feed">
              <li><i class="icon ion-ios-paper"></i><div><a href="{{url('customer/dashboard')}}">My Newsfeed</a></div></li>
              <li><i class="icon ion-card"></i><div><a class="active"  href="{{url('customer/redeem')}}">Redeem</a></div></li>
              <li><i class="icon ion-cash"></i><div><a href="{{url('customer/cashout')}}">Cashout</a></div></li>
              <li><i class="icon ion-cash"></i><div><a href="{{url('customer/raffles')}}">Raffle Draw</a></div></li>
              <li><i class="icon ion-power" style="color:brown;"></i><div><a href="{{url('logout')}}">Logout</a></div></li>
            </ul><!--news-feed links ends-->
            
          </div>
          
    			<div class="col-md-7">

            <!-- Post Content
            ================================================= -->
          <div class="friend-list">
              <div class="row">
                @foreach($cards as $card)
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="{{asset('public/images/cards/'.$card->image)}}" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="{{asset('public/images/cards/'.$card->image)}}" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" data-toggle="modal" data-target="#redeem" class="pull-right text-green" onclick="getData({{$card}})">Redeem</a>
                          <h5><a href="timeline.html" class="profile-link">{{$card->unit}} units</a></h5>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>    
          </div>

          <!-- Newsfeed Common Side Bar Right
          ================================================= -->
    			<div class="col-md-2 static">
            
          </div>
    		</div>
    	</div>
    </div>

    <div class="modal fade" id="redeem" tabindex="-1" role="dialog" aria-labelledby="redeem"
      aria-hidden="true" animate="animate" modal-animation="true">
          <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">
                        Redeem   
                      </h4>
                    </div>
                    <div class="modal-body modal-body-sub">
                        <form class="form-group" method="post" action="{{url('customer/process_redemption')}}">    
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Unit</label>
                                        <input type="number" id="unit" name="unit" placeholder="Unit" class="form-control" readonly/>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Pin</label>
                                        <input type="number" name="pin" placeholder="Enter pin here..." class="form-control" required/>
                                    </div>
                                    <input type="hidden" name="id" id="id"/>
                                </div>
                                <input type="submit" name="submit" class="action-button btn-success" style="margin-left: 20px;" value="Redeem" />
                            </div>    
                        </form>    
                    </div>  
                    
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default d-none d-lg-block m-l-15 pull-right" data-dismiss="modal" aria-hidden="true">Close</button>
                    </div>
              </div>
          </div>      
        </div>   

    <!-- Footer
    ================================================= -->
    <footer id="footer" style="margin-top: 20px;">
      <div class="container">
      	
      </div>
      <div class="copyright">
        <p>Powered by Oprisoft. All rights reserved</p>
      </div>
		</footer>
    
    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>
    
    <!-- Scripts
    ================================================= -->
    <script src="{{asset('public/customer/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('public/customer/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/customer/js/jquery.sticky-kit.min.js')}}"></script>
    <script src="{{asset('public/customer/js/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('public/customer/js/script.js')}}"></script>
    <script>
      function getData(card){
        $("#unit").val(card.unit);
        $("#id").val(card.id);
      }
    </script>  
  </body>
</html>
