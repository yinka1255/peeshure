<!DOCTYPE html>
<html lang="en">

<head>
     <!--
    Basic Page Needs
    ==================================================
    -->
    <meta charset="UTF-8">
    <title>Shephered Insurance Brokers Nigeria | Products</title>
    <meta name="description" content="Description comming soon">
    <meta name="author" content="Yinka Adeniran">
    <meta name="keywords" content="Insurance brokers, Lagos, Nigeria">
    <!--
    Mobile Specific Metas
    ==================================================
    -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--
    CSS
    ==================================================
    -->
    <link href="{{asset('public/main/fonts/fonts.css')}}" rel="stylesheet">
    <link href="{{asset('public/main/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/main/vendor/elegant-icons/style.css')}}" rel="stylesheet">
    <link href="{{asset('public/main/vendor/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/main/vendor/owl.carousel/dist/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/main/vendor/css-hamburgers/dist/hamburgers.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/main/vendor/chosen/chosen.css')}}" rel="stylesheet">
    <link href="{{asset('public/main/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/main/vendor/plyr/plyr.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/main/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('public/main/vendor/revolution/css/layers.css')}}" rel="stylesheet">
    <link href="{{asset('public/main/vendor/revolution/css/navigation.css')}}" rel="stylesheet">
    <link href="{{asset('public/main/vendor/revolution/css/settings.css')}}" rel="stylesheet">
    <link href="{{asset('public/main/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/main/css/switcher.css')}}" rel="stylesheet">
    <link href="{{asset('public/main/css/colors/primary.css')}}" rel="stylesheet" id="colors">
    <link href="{{asset('public/main/css/retina.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
    <!--
    Favicons
    ==================================================
    -->
    <link rel="shortcut icon" href="favicon.png')}}">
    <link rel="apple-touch-icon" href="apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png')}}">
    <script src="{{asset('public/main/js/modernizr-custom.js')}}"></script>
</head>

<body>
    <script src="{{asset('public/main/vendor/jquery/dist/jquery.min.js')}}"></script>
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
    <header>
        <!-- header / start-->
        <div class="hidden-tablet-landscape-up">
            <div class="header header-mobile-1">
                <div class="top-header">
                    <div class="container-fluid">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{asset('public/main/images/icons/ic-logo-01.png')}}" alt="Consulting" />
                            </a>
                        </div>
                        <div class="search-widget search-widget-1">
                            <div class="icon-search">
                                <i class="icon_search"></i>
                            </div>
                            <input class="animated" type="text" placeholder="Search" />
                        </div>
                        <button class="hamburger hamburger--spin hidden-tablet-landscape-up" id="toggle-icon">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="au-navbar-mobile navbar-mobile-1">
                    <ul class="au-navbar-menu">
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{url('about')}}">Who we are</a>
                        </li>
                        <li>
                            <a href="{{url('services')}}">Services</a>
                        </li>
                        <li>
                            <a href="{{url('products')}}">Products</a>
                        </li>
                        <li>
                            <a href="{{url('contact')}}">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="container-fluid">
                    <div class="contact-widget contact-widget-1">
                        <div class="icon-box icon-box-1">
                            <div class="icon">
                                <i class="icon_phone"></i>
                            </div>
                            <div class="content">
                                <p>1-800-123-6889</p>
                                <p>info@sibnigeria.com</p>
                            </div>
                        </div>
                        <div class="icon-box icon-box-1">
                            <div class="icon">
                                <i class="icon_pin"></i>
                            </div>
                            <div class="content">
                                <p>TGAC Southern View Estate</p>
                                <p>Lekki, Lagos, Nigeria</p>
                            </div>
                        </div>
                        
                        <a class="hidden-tablet-landscape au-btn au-btn-primary" href="#">Get A Quote</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden-tablet-landscape">
            <div class="header header-1">
                <div class="container">
                    <div class="block-left">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{asset('public/main/images/icons/ic-logo-01.png')}}" alt="Consulting" />
                            </a>
                        </div>
                    </div>
                    <div class="block-right">
                        <div class="contact-widget contact-widget-1">
                            <div class="icon-box icon-box-1">
                                <div class="icon">
                                    <i class="icon_phone"></i>
                                </div>
                                <div class="content">
                                    <p>1-800-123-6889</p>
                                    <p>info@sibnigeria.com</p>
                                </div>
                            </div>
                            <div class="icon-box icon-box-1">
                                <div class="icon">
                                    <i class="icon_pin"></i>
                                </div>
                                <div class="content">
                                    <p>TGAC Southern View Estate</p>
                                    <p>Lekki, Lagos, Nigeria</p>
                                </div>
                            </div>
                            <div class="icon-box icon-box-1">
                                <div class="icon">
                                    <i class="icon_clock"></i>
                                </div>
                                <div class="content">
                                    <p>08:00 am – 06:00 pm</p>
                                    <p>Every Day</p>
                                </div>
                            </div>
                            <a class="hidden-tablet-landscape au-btn au-btn-primary" href="#">Get A Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-navbar-1 bg-grey hidden-tablet-landscape" id="js-navbar-fixed">
            <div class="container">
                <div class="block-left">
                    <div class="logo-mobile">
                        <a href="index.html">
                            <img height="60px" style="width: 60px;" src="{{asset('public/main/images/icons/ic-logo-01.png')}}" alt="Consulting">
                        </a>
                    </div>
                    <nav>
                        <div class="au-navbar navbar-1">
                            <ul class="au-navbar-menu">
                                <li>
									<a href="{{url('/')}}">Home</a>
								</li>
								<li>
									<a href="{{url('about')}}">Who we are</a>
								</li>
								<li>
									<a href="{{url('services')}}">Services</a>
								</li>
								<li>
									<a href="{{url('products')}}">Products</a>
								</li>
								<li>
									<a href="{{url('contact')}}">Contact Us</a>
								</li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="block-right">
                    <div class="search-widget search-widget-1">
                        <div class="icon-search">
                            <i class="icon_search"></i>
                        </div>
                        <input class="animated" type="text" placeholder="Search" />
                    </div>
                </div>
            </div>
        </div>
        <!-- header / end-->
    </header>
    <!-- heading page / start-->
    <div class="heading-page heading-page-1 bg-cover" style="background: url({{asset('public/main/images/heading-page-01.jpg')}}) center center no-repeat;">
        <div class="container">
            <ul class="breadcrumbs">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="#">Products</a>
                </li>
            </ul>
            <h3 class="title">Products</h3>
        </div>
    </div>
    <!-- heading page / end-->
    <!-- Image card / start-->
    <div class="section bg-white p-t-70 p-b-40">
        <div class="container">
            <div class="row isotope-grid">
                @foreach ($policies as $policy)
                <div class="Retirement col-md-3 col-sm-6 col-xs-12 isotope-item">
                    <div class="image-card image-card-8">
                        <div class="image">
                            <a href="portfolio-single.html">
                                <img src="{{asset('public/policies/'.$policy->image)}}" alt="{{$policy->name}}" />
                            </a>
                        </div>
                        <div class="content">
                            <h3 class="title">
                                <a href="{{url('policies/buy/'.$policy->id)}}">{{$policy->name}}</a>
                            </h3>
                            <a href="{{url('policies/buy/'.$policy->id)}}"><span class="subject">Apply/Learn more</span></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Image card / end-->
    <!-- call to action / start-->
    <div class="section bg-primary p-t-25 p-b-25 cta-section-1 cta-section-2">
        <div class="container">
            <div class="block-left">
                <p class="text-block text-med">Looking for a first-class Insurance broker?</p>
            </div>
            <div class="block-right">
                <a class="au-btn au-btn-border au-btn-border-light" href="#">Get A Free Quote</a>
            </div>
        </div>
    </div>
    <footer id="footer">
        <!-- Footer / start-->
        <div class="footer footer-1 bg-black">
            <div class="top-footer p-t-50 p-b-50">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="footer-block-1">
                                <div class="logo">
                                    <img src="{{asset('public/main/images/icons/ic-logo-01.png')}}" alt="Consulting" />
                                </div>
                                <div class="quick-link">
                                    <div class="row">
                                        <div class="col-md-11">
                                            <ul>
                                                <li>
                                                   <p>We conduct risk identification programmes individuals or entire organisations. Identified risks are evaluated to determine the extent and to quantify the exposures. The outcome of these exercises guide the recommendation made on measures that can be taken to accommodate, mitigate, control or transfer these risks.</p>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-block-2" style="padding-top: 80px;">
                                <div class="title">
                                    <h3>Contact us</h3>
                                </div>
                                <div class="contact-list">
                                    <ul>
                                        <li>Address: TGAC Southern View Estate  Lekki, Lagos, Nigeria</li>
                                        <li>Phone: (+1) 96 716 6879</li>
                                        <li>Email: info@sibnigeria.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-block-3" style="padding-top: 80px;">
                                <div class="title">
                                    <h3>Follow us</h3>
                                </div>
                                <div class="social-list">
                                    <ul class="horizontal-list">
                                        <li class="social-item-2 social-item-1">
                                            <a class="fa fa-facebook"></a>
                                        </li>
                                        <li class="social-item-2 social-item-1">
                                            <a class="fa fa-twitter"></a>
                                        </li>
                                        <li class="social-item-2 social-item-1">
                                            <a class="fa fa-google-plus"></a>
                                        </li>
                                        <li class="social-item-2 social-item-1">
                                            <a class="fa fa-linkedin"></a>
                                        </li>
                                        <li class="social-item-2 social-item-1">
                                            <a class="fa fa-instagram"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bot-footer">
                <div class="container">
                    <div class="block-inner p-t-35 p-b-60">
                        <div class="block-left">
                            <span>© 2019 SIB Nigeria. All rights reserved.</span>
                        </div>
                        <div class="block-right">
                            <div class="quick-link">
                                <ul>
                                    <li>
                                        <a href="{{url('about')}}">About</a>
                                    </li>
                                    <li>
                                        <a href="{{url('contact')}}">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="{{url('terms')}}">Term & Conditions</a>
                                    </li>
                                    <li>
                                        <a href="{{url('privacy')}}">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="{{url('site_map')}}">Sites Map</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer / end-->
    </footer>
    <div id="up-to-top">
        <i class="fa fa-angle-up"></i>
    </div>
    <!--
    Javascripts
    ==================================================
    -->
    
    <script src="{{asset('public/main/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/main/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <script src="{{asset('public/main/vendor/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/main/vendor/headroom/headroom.min.js')}}"></script>
    <script src="{{asset('public/main/vendor/matchHeight/dist/jquery.matchHeight-min.js')}}"></script>
    <script src="{{asset('public/main/vendor/SmoothScroll/SmoothScroll.js')}}"></script>
    <script src="{{asset('public/main/vendor/isotope/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('public/main/vendor/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('public/main/vendor/plyr/plyr.min.js')}}"></script>
    <script src="{{asset('public/main/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('public/main/vendor/jquery-accordion/js/jquery.accordion.js')}}"></script>
    <script src="{{asset('public/main/vendor/chosen/chosen.jquery.js')}}"></script>
    <script src="{{asset('public/main/vendor/waypoints/lib/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('public/main/vendor/jquery.counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('public/main/vendor/paroller.js/jquery.paroller.min.js')}}"></script>
    <script src="{{asset('public/main/vendor/retinajs/dist/retina.min.js')}}"></script>
    <script src="{{asset('public/main/js/owl-custom.js')}}"></script>
    <script src="{{asset('public/main/js/main.js')}}"></script>
    <script src="{{asset('public/main/js/switcher-custom.js')}}"></script>
    
    <!--
    End Document
    ==================================================
    -->
</body>

</html>