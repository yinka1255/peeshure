<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade modal-login modal-border-transparent" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
		
    <div class="modal-dialog">
    
        <div class="modal-content">
            
            <button type="button" class="btn btn-close close" data-dismiss="modal" aria-label="Close">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
            </button>
            
            <div class="clear"></div>
            
            <!-- Begin # DIV Form -->
            <div id="modal-login-form-wrapper">
                
                <!-- Begin # Login Form -->
                <form id="login-form" method="post" action="{{url('login')}}">
                
                    <div class="modal-body pb-5">
                
                        <h4>Sign-in</h4>
                    
                        <a href="{{url('redirect')}}" class="btn btn-gplus btn-block">Sign-in with Google</a>
                        
                        <div class="modal-seperator">
                            <span>or</span>
                        </div>
                        
                        <div class="form-group"> 
                            <input id="login_username" class="form-control" name="email" placeholder="Email" type="email"> 
                        </div>
                        <div class="form-group"> 
                            <input id="login_password" class="form-control" name="password" placeholder="password" type="password"> 
                        </div>
        
                        <div class="form-group mt-10 mb-10">
                            <div class="row gap-5">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="checkbox-block fa-checkbox"> 
                                        <input id="remember_me_checkbox" name="remember_me_checkbox" class="checkbox" value="First Choice" type="checkbox"> 
                                        <label class="" for="remember_me_checkbox">remember</label>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 text-right mt-5"> 
                                    <button id="login_lost_btn" type="button" class="btn btn-link">forgot password?</button>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    
                    <div class="modal-footer">
                    
                        <div class="row gap-10">
                            <div class="col-xs-6 col-sm-6 mb-10">
                                <button type="submit" class="btn btn-primary btn-sm btn-block">Sign-in</button>
                            </div>
                            <div class="col-xs-6 col-sm-6 mb-10">
                                <button type="button" class="btn btn-main btn-sm btn-block btn-inverse" data-dismiss="modal" aria-label="Close">Cancel</button>
                            </div>
                        </div>
                        <div class="text-left">
                            No account? 
                            <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                        </div>
                        
                    </div>
                
                </form>
                <!-- End # Login Form -->
                            
                <!-- Begin | Lost Password Form -->
                <form id="lost-form" style="display:none;"  method="post" action="{{url('forgot_password')}}">
                    <div class="modal-body pb-5">
                    
                        <h4>Forgot password</h4>

                        <div class="form-group"> 
                            <input id="lost_email" class="form-control" name="email" type="email" placeholder="Enter Your Email">
                        </div>
                        
                        <div class="text-center mt-10 mb-10">
                            <button id="lost_login_btn" type="button" class="btn btn-link">Sign-in</button> or 
                            <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                        </div>
                        
                    </div>
                    
                    <div class="modal-footer mt-10">
                        
                        <div class="row gap-10">
                            <div class="col-xs-6 col-sm-6">
                                <button type="submit" class="btn btn-primary btn-sm btn-block">Submit</button>
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <button type="button" class="btn btn-main btn-sm btn-inverse btn-block" data-dismiss="modal" aria-label="Close">Cancel</button>
                            </div>
                        </div>
                        
                    </div>
                    
                </form>
                <!-- End | Lost Password Form -->
                            
                <!-- Begin | Register Form -->
                <form id="register-form" style="display:none;"  method="post" action="{{url('register')}}">
                
                    <div class="modal-body pb-5">

                        <h4>Register</h4>
                        
                        <button class="btn btn-facebook btn-block">Register with Facebook</button>
                        
                        <div class="modal-seperator">
                            <span>or</span>
                        </div>
                        
                        <div class="form-group"> 
                            <input id="register_username" class="form-control" type="text" name="name" placeholder="Userame"> 
                        </div>
                        
                        <div class="form-group"> 
                            <input id="register_email" class="form-control" type="email" name="email" placeholder="Email">
                        </div>
                        
                        <div class="form-group"> 
                            <input id="register_password" class="form-control" type="password" name="password" placeholder="Password">
                        </div>
                        
                        <div class="form-group"> 
                            <input id="register_password_confirm" class="form-control" type="password" name="confirm_password" placeholder="Confirm Password">
                        </div>
                        
                        <div class="clear mb-10"></div>

                    </div>
                        
                    <div class="modal-footer mt-10">
                    
                        <div class="row gap-10">
                            <div class="col-xs-6 col-sm-6 mb-10">
                                <button type="submit" class="btn btn-primary btn-sm btn-block">Register</button>
                            </div>
                            <div class="col-xs-6 col-sm-6 mb-10">
                                <button type="button" class="btn btn-main btn-sm btn-inverse btn-block" data-dismiss="modal" aria-label="Close">Cancel</button>
                            </div>
                        </div>
                        
                        <div class="text-left">
                                Already have account? <button id="register_login_btn" type="button" class="btn btn-link">Sign-in</button>
                        </div>
                        
                    </div>
                        
                </form>
                <!-- End | Register Form -->
                            
            </div>
            <!-- End # DIV Form -->
                            
        </div>
    </div>

</div>
<!-- END # MODAL LOGIN -->

<header id="header">
	  
    <!-- start Navbar (Menu) -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">
        
        <div class="container">
                
            <div class="navbar-header">
                <a class="navbar-brand" href="{{url('/')}}">
                            <img src="{{asset("public/main/images/logo-icon.png")}}" width="40px" height="auto" />
                    
                </a>
            </div>
                
            <div id="navbar" class="collapse navbar-collapse navbar-arrow pull-left">
            
                <ul class="nav navbar-nav" id="responsive-menu">
                    <li>
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    
                    <li >
                        <a href="{{url('explore')}}" class="btn">Explore Now</a>
                    </li>
                    <li><a href="{{url('licence')}}">Licence & Agreement</a></li>
                    <li><a href="{{url('faqs')}}">FAQs</a></li>
                    <li><a href="{{url('faqs')}}">Quality Guidelines</a></li>
                            
                    <li><a href="{{url('contact')}}">Contact Us</a></li>
                    
                    <li >
                        <a href="{{url('submit')}}"  class="btn">Submit a photo</a>
                    </li>
                    @if (Auth::check())
                    <li >
                        <a href="{{url('profile')}}" class="btn">Profile</a>
                    </li>
                    @endif
                </ul>
            
            </div><!--/.nav-collapse -->
        
            <div class="pull-right">
                <div class="navbar-mini">
                    <ul class="clearfix">
                        <li class="dropdown visible-xs">
                            <a id="currncy-language-dropdown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-cog"></i>
                            </a>
                        </li>
                        
                        
                        <li class="user-action">
                            @if(Auth::check()) <a  href="{{url('logout')}}" class="btn">Sign out</a> @else <a data-toggle="modal" href="#loginModal" class="btn">Sign up/in</a> @endif
                        </li>
                    </ul>
                </div>
                
            </div>
        
        </div>
        
        <div id="slicknav-mobile"></div>
        
    </nav>
    <!-- end Navbar (Menu) -->

</header>