<!DOCTYPE html>
<html lang="en">

<head>
    <!--
    Basic Page Needs
    ==================================================
    -->
    <meta charset="UTF-8">
    <title>Shephered Insurance Brokers Nigeria | Home</title>
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
                                <p>8th floor, 379 Hudson St</p>
                                <p>New York, NY 10018</p>
                            </div>
                        </div>
                        <div class="icon-box icon-box-1">
                            <div class="icon">
                                <i class="icon_clock"></i>
                            </div>
                            <div class="content">
                                <p>09:30 am – 06:00 pm</p>
                                <p>Every Day</p>
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
    <section>
        <!-- START REVOLUTION SLIDER 5.0-->
        <div class="slider-1">
            <div class="rev_slider" id="js-slider" style="display:none;">
                <ul>
                    <li class="item-1" data-transition="fade">
                        <!-- MAIN IMAGE-->
                        <img class="rev-slidebg" src="{{asset('public/main/images/carousel-01.jpg')}}" alt="#" />
                        <h3 class="tp-caption tp-resizeme caption-1" data-frames="[{&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:900,&quot;ease&quot;:&quot;Power4.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;to&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power2.easeIn&quot;}]"
                        data-x="['center']" data-hoffset="['0', '0', '0', '0']" data-y="['middle']" data-voffset="['-100']" data-width="['770', '770', '770', '480']">Experience. Expertise</h3>
                        <div class="tp-caption tp-resizeme caption-2" data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                        data-x="['center']" data-hoffset="['0', '0', '0', '0']" data-y="['center']" data-voffset="['0', '0', '0', '40']" data-width="['770', '770', '770', '480']">Comprehensive Insurance brokerage and financial services that are tailored to meet your individual needs.</div>
                        <div class="tp-caption tp-resizeme caption-3" data-frames="[{&quot;delay&quot;:2000,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                        data-responsive="on" data-x="['center']" data-hoffset="['0', '0', '0', '0']" data-y="['center']" data-voffset="['100', '100', '100', '140']" data-width="['770', '770', '770', '480']">
                            <a class="au-btn au-btn-primary m-r-5" href="{{url('services')}}">Our Services</a>
                            <a class="au-btn au-btn-white m-l-5" href="{{url('contact')}}">Request Consultation</a>
                        </div>
					</li>
					<li class="item-1" data-transition="fade">
                        <!-- MAIN IMAGE-->
                        <img class="rev-slidebg" src="{{asset('public/main/images/carousel-02.jpg')}}" alt="#" />
                        <h3 class="tp-caption tp-resizeme caption-1" data-frames="[{&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:900,&quot;ease&quot;:&quot;Power4.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;to&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power2.easeIn&quot;}]"
                        data-x="['center']" data-hoffset="['0', '0', '0', '0']" data-y="['middle']" data-voffset="['-100']" data-width="['770', '770', '770', '480']">RISK & ASSET MANAGEMENT</h3>
                        <div class="tp-caption tp-resizeme caption-2" data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                        data-x="['center']" data-hoffset="['0', '0', '0', '0']" data-y="['center']" data-voffset="['0', '0', '0', '40']" data-width="['770', '770', '770', '480']">We Conduct risk management analysis and provide tailor-made policies that will provide the adequate cover.</div>
                        <div class="tp-caption tp-resizeme caption-3" data-frames="[{&quot;delay&quot;:2000,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                        data-responsive="on" data-x="['center']" data-hoffset="['0', '0', '0', '0']" data-y="['center']" data-voffset="['100', '100', '100', '140']" data-width="['770', '770', '770', '480']">
                            <a class="au-btn au-btn-primary m-r-5" href="{{url('services')}}">Our Services</a>
                            <a class="au-btn au-btn-white m-l-5" href="{{url('contact')}}">Request Consultation</a>
                        </div>
                    </li>
                    <li class="item-1" data-transition="fade">
                        <!-- MAIN IMAGE-->
                        <img class="rev-slidebg" src="{{asset('public/main/images/carousel-03.jpg')}}" alt="#" />
                        <h3 class="tp-caption tp-resizeme caption-1" data-frames="[{&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:900,&quot;ease&quot;:&quot;Power4.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;to&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power2.easeIn&quot;}]"
                        data-x="['center']" data-hoffset="['0', '0', '0', '0']" data-y="['middle']" data-voffset="['-100']" data-width="['770', '770', '770', '480']">CONSULTING SERVICES</h3>
                        <div class="tp-caption tp-resizeme caption-2" data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                        data-x="['center']" data-hoffset="['0', '0', '0', '0']" data-y="['center']" data-voffset="['0', '0', '0', '60']" data-width="['870', '870', '770', '480']">We help financial institutions, from banking and insurance to wealth management and securities distribution, manage risks and serve customers.</div>
                        <div class="tp-caption tp-resizeme caption-3" data-frames="[{&quot;delay&quot;:2000,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                        data-responsive="on" data-x="['center']" data-hoffset="['0', '0', '0', '0']" data-y="['center']" data-voffset="['100', '100', '100', '200']" data-width="['770', '770', '770', '480']">
                            <a class="au-btn au-btn-white m-l-5" href="{{url('contact')}}">Request Consultation</a>
                        </div>
					</li>
				</ul>
            </div>
        </div>
    </section>
    <!-- section / start-->
    <div class="section bg-white p-t-70 p-b-40">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="icon-box icon-box-2">
                        <div class="icon">
                            <i class="fa fa-line-chart"></i>
                        </div>
                        <div class="title">
                            <h3>Advanced Analytics</h3>
                        </div>
                        <div class="content">
                            <p>Quisque pulvinar libero dolor, quis bibendum eros euismod sit amet. Proin dapibus id diam at</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="icon-box icon-box-2">
                        <div class="icon">
                            <i class="fa fa-rocket"></i>
                        </div>
                        <div class="title">
                            <h3>Thought Leadership</h3>
                        </div>
                        <div class="content">
                            <p>Pellentesque non diam euismod metus vehicula varius. Donec et velit placerat arcu lobortis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="icon-box icon-box-2">
                        <div class="icon">
                            <i class="fa fa-black-tie"></i>
                        </div>
                        <div class="title">
                            <h3>Growth Strategy</h3>
                        </div>
                        <div class="content">
                            <p>Gravida at convallis a, tempor sed magna. Pellentesque non diam euismod metus vehicula</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="icon-box icon-box-2">
                        <div class="icon">
                            <i class="fa fa-money"></i>
                        </div>
                        <div class="title">
                            <h3>Savings Time &amp; Money</h3>
                        </div>
                        <div class="content">
                            <p>Pellentesque non diam euismod metus vehicula varius. Donec et velit placerat fermentum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section / end-->
    <!-- Our Services / start-->
    {{--
    <section class="section bg-primary p-t-70 p-b-40">
        <div class="container">
            <div class="relative">
                <div class="heading-section heading-section-1 light">
                    <h3>Our Services</h3>
                </div>
                <div class="owl-carousel nav-style-1" data-carousel-margin="45" data-carousel-nav="true" data-carousel-loop="true">
                    <div class="image-card image-card-1 light">
                        <div class="image">
                            <a href="blog-single.html">
                                <img src="{{asset('public/main/images/services-01.jpg')}}" alt="Corporate Finance" />
                            </a>
                        </div>
                        <h3 class="title">
                            <a href="blog-single.html">Insurance Brokerage</a>
                        </h3>
                        <div class="content">
                            <p>Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed ornare ligula eget tortor tempor, quis porta tellus dictum.</p>
                        </div>
                        <div class="link">
                            <a href="blog-single.html">
                                <i class="fa fa-caret-right"></i>
                                <span>Learn More</span>
                            </a>
                        </div>
                    </div>
                    <div class="image-card image-card-1 light">
                        <div class="image">
                            <a href="blog-single.html">
                                <img src="{{asset('public/main/images/services-02.jpg')}}" alt="Information Technology" />
                            </a>
                        </div>
                        <h3 class="title">
                            <a href="blog-single.html">Risk Management</a>
                        </h3>
                        <div class="content">
                            <p>Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed ornare ligula eget tortor tempor, quis porta tellus dictum.</p>
                        </div>
                        <div class="link">
                            <a href="blog-single.html">
                                <i class="fa fa-caret-right"></i>
                                <span>Learn More</span>
                            </a>
                        </div>
                    </div>
                    <div class="image-card image-card-1 light">
                        <div class="image">
                            <a href="blog-single.html">
                                <img src="{{asset('public/main/images/services-03.jpg')}}" alt="Insurance Consulting" />
                            </a>
                        </div>
                        <h3 class="title">
                            <a href="blog-single.html">Insurance Consulting</a>
                        </h3>
                        <div class="content">
                            <p>Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed ornare ligula eget tortor tempor, quis porta tellus dictum.</p>
                        </div>
                        <div class="link">
                            <a href="blog-single.html">
                                <i class="fa fa-caret-right"></i>
                                <span>Learn More</span>
                            </a>
                        </div>
					</div>
					
                    </div>
                </div>
            </div>
        </div>
    </section>
    --}}
    <!-- Our Services / end-->
    <!-- Why Choose Us / start-->
    <section class="section why-choose-us-section-1 bg-cover p-t-90 p-b-75 bg-cover js-waypoint" style="background: url(&quot;images/why-choose-us-01.jpg&quot;) center center no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-md-6"><img width="100%" src="{{asset('public/main/images/why.jpg')}}" class="why" /></div>
                <div class="col-md-6">
                    <div class="heading-section heading-section-1 dark">
                        <h3>Why Choose Us</h3>
                    </div>
                    <p class="text-block m-b-25">Our team of professionals conduct risk identification programmes and also assets and liability evaluation on individuals or entire organisations. Identified risks are evaluated to determine the extent and to quantify the exposures. The outcome of these exercises guide the recommendation made on measures that can be taken to accommodate, mitigate, control or transfer these risks and design tailor-made policies that will provide the adequate cover</p>
                    <div class="progress-box progress-box-1 m-b-25">
                        <p class="progress-label">VALUE FOR MONEY</p>
                        <div class="au-progress au-progress-1">
                            <div class="au-progress-bar" role="progressbar" data-transitiongoal="99">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-box progress-box-1 m-b-25">
                        <p class="progress-label">RISK</p>
                        <div class="au-progress au-progress-1">
                            <div class="au-progress-bar" role="progressbar" data-transitiongoal="98">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-box progress-box-1">
                        <p class="progress-label">CLAIMS</p>
                        <div class="au-progress au-progress-1">
                            <div class="au-progress-bar" role="progressbar" data-transitiongoal="100">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose Us / end-->
    <!-- Our Projects / start-->
    <section class="section bg-white p-t-60 p-b-50">
        <div class="container">
            <div class="relative">
                <div class="heading-section heading-section-1 dark">
                    <h3>Our Products</h3>
                </div>
                <div class="owl-carousel dark nav-style-1" data-carousel-margin="7" data-carousel-nav="true" data-carousel-loop="true" data-carousel-items="4">
                    @foreach ($policies as $policy)
                    <div class="image-card image-card-3">
                        <div class="image">
                            <img src="{{asset('public/policies/'.$policy->image)}}" alt="{{$policy->name}}" />
                        </div>
                        <h3 class="title">
                            <a href="{{url('policies/buy/'.$policy->id)}}">
                                <span>{{$policy->name}}</span>
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </h3>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Our Projects / end-->
    
    <!-- section / start-->
    <div class="section bg-parallax p-t-100 p-b-70 bg-cover" style="background: url(&quot;{{asset('public/main/images/statistic-01.jpg')}}&quot;) center center no-repeat;" data-paroller-type="background" data-paroller-factor="-0.3" data-paroller-direction="vertical">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="number-box light">
                        <span class="number counterUp">1,325</span>
                        <span class="title">Cases completed</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="number-box light">
                        <span class="number counterUp">25</span>
                        <span class="title">Consultants</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="number-box light">
                        <span class="number counterUp">2</span>
                        <span class="title">Awards</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="number-box light">
                        <span class="number">
                            <span class="counterUp">100</span>
                            <span class="sub">%</span>
                        </span>
                        <span class="title">Satisfied clients</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section / end-->
    <!-- section / start-->
    {{--
    <div class="section bg-black p-t-80 p-b-80">
        <div class="container">
            <p class="text-block text-grey text-med m-b-45 text-center p-l-100 p-r-100">Would you like to have an audience with once of our consultants?</p>
            <div class="au-form-group">
                <div class="au-form-col-3 p-r-5">
                    <div class="au-select">
                        <input class="au-input" type="question" placeholder="Your question *">
                    </div>
                </div>
                <div class="au-form-col-3 p-r-5">
                    <input class="au-input" type="text" placeholder="Your Name: *">
                </div>
                <div class="au-form-col-3 p-r-5">
                    <input class="au-input" type="text" placeholder="Phone Number: *">
                </div>
                <div class="au-form-col-3">
                    <input class="au-input-submit au-btn au-btn-primary au-btn-large btn-block" type="submit" value="Submit">
                </div>
            </div>
        </div>
    </div>
    --}}
    <!-- section / end-->
    <!-- Latest News / start-->
    <section class="section p-t-70 p-b-30 bg-white">
        <div class="container">
            <div class="relative">
                <div class="heading-section heading-section-1 dark">
                    <h3>Latest News</h3>
                </div>
                <div class="owl-carousel dark nav-style-1" data-carousel-margin="45" data-carousel-nav="true" data-carousel-loop="true">
                    <div class="image-card image-card-4">
                        <div class="image">
                            <a href="blog-single.html">
                                <img src="{{asset('public/main/images/blog-01.jpg')}}" alt="Improve margins and reposition quickly" />
                            </a>
                        </div>
                        <div class="date">
                            <span>July 22, 2018</span>
                        </div>
                        <h3 class="title">
                            <a href="blog-single.html">Improve margins and reposition quickly</a>
                        </h3>
                        <div class="content">
                            <p>Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed ornare ligula eget tortor tempor, quis porta tellus dictum.</p>
                        </div>
                        <div class="link">
                            <a href="blog-single.html">Continue reading</a>
                        </div>
                    </div>
                    <div class="image-card image-card-4">
                        <div class="image">
                            <a href="blog-single.html">
                                <img src="{{asset('public/main/images/blog-02.jpg')}}" alt="Delight customers and operate faster" />
                            </a>
                        </div>
                        <div class="date">
                            <span>July 18, 2018</span>
                        </div>
                        <h3 class="title">
                            <a href="blog-single.html">Delight customers and operate faster</a>
                        </h3>
                        <div class="content">
                            <p>Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed ornare ligula eget tortor tempor, quis porta tellus dictum.</p>
                        </div>
                        <div class="link">
                            <a href="blog-single.html">Continue reading</a>
                        </div>
                    </div>
                    <div class="image-card image-card-4">
                        <div class="image">
                            <a href="blog-single.html">
                                <img src="{{asset('public/main/images/blog-03.jpg')}}" alt="Strategy experience and analytical" />
                            </a>
                        </div>
                        <div class="date">
                            <span>July 12, 2018</span>
                        </div>
                        <h3 class="title">
                            <a href="blog-single.html">Strategy experience and analytical</a>
                        </h3>
                        <div class="content">
                            <p>Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed ornare ligula eget tortor tempor, quis porta tellus dictum.</p>
                        </div>
                        <div class="link">
                            <a href="blog-single.html">Continue reading</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section / start-->
    <div class="section bg-parallax p-t-120 p-b-120" style="background: url(&quot;{{asset('public/main/images/banner-01.jpg')}}&quot;) no-repeat;" data-paroller-type="background" data-paroller-factor="-0.3" data-paroller-direction="vertical">
        <div class="bg-overlay"></div>
        <div class="container">
            <p class="text-block text-white text-center p-l-100 p-r-100 relative text-lead">We are experts in insurance services and solutions</p>
        </div>
    </div>
    <!-- section / end-->
    <!-- Our Partner / start-->
    <section class="section bg-grey-light p-t-70 p-b-70">
        <div class="container">
            <div class="relative">
                <div class="p-b-15">
                    <div class="heading-section heading-section-1 dark">
                        <h3>Our Partners</h3>
                    </div>
                </div>
                <div class="owl-carousel dark nav-style-1" data-carousel-margin="30" data-carousel-nav="true" data-carousel-loop="true" data-carousel-items="5" data-carousel-autoplay="true">
                    <div class="icon-box icon-box-3">
                        <div class="icon">
                            <a href="about-partnerships.html">
                                <img src="{{asset('public/main/images/partner-01.png')}}" alt="our partner" />
                            </a>
                        </div>
                    </div>
                    <div class="icon-box icon-box-3">
                        <div class="icon">
                            <a href="about-partnerships.html">
                                <img src="{{asset('public/main/images/partner-02.png')}}" alt="our partner" />
                            </a>
                        </div>
                    </div>
                    <div class="icon-box icon-box-3">
                        <div class="icon">
                            <a href="about-partnerships.html">
                                <img src="{{asset('public/main/images/partner-03.png')}}" alt="our partner" />
                            </a>
                        </div>
                    </div>
                    <div class="icon-box icon-box-3">
                        <div class="icon">
                            <a href="about-partnerships.html">
                                <img src="{{asset('public/main/images/partner-04.png')}}" alt="our partner" />
                            </a>
                        </div>
                    </div>
                    <div class="icon-box icon-box-3">
                        <div class="icon">
                            <a href="about-partnerships.html">
                                <img src="{{asset('public/main/images/partner-05.png')}}" alt="our partner" />
                            </a>
                        </div>
                    </div>
                    <div class="icon-box icon-box-3">
                        <div class="icon">
                            <a href="about-partnerships.html">
                                <img src="{{asset('public/main/images/partner-06.png')}}" alt="our partner" />
                            </a>
                        </div>
                    </div>
                    <div class="icon-box icon-box-3">
                        <div class="icon">
                            <a href="about-partnerships.html">
                                <img src="{{asset('public/main/images/partner-07.png')}}" alt="our partner" />
                            </a>
                        </div>
                    </div>
                    <div class="icon-box icon-box-3">
                        <div class="icon">
                            <a href="about-partnerships.html">
                                <img src="{{asset('public/main/images/partner-08.png')}}" alt="our partner" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Partner / end-->
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
    <script src="{{asset('public/main/vendor/jquery/dist/jquery.min.js')}}"></script>
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
    <script src="{{asset('public/main/vendor/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('public/main/vendor/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <!--
    | (Load Extensions only on Local File Systems !
    | The following part can be removed on Server for On Demand Loading)
    -->
    <script type="text/javascript" src="{{asset('public/main/vendor/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/main/vendor/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/main/vendor/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/main/vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/main/vendor/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/main/vendor/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/main/vendor/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/main/vendor/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('public/main/js/revo-slider-custom.js')}}"></script>
    <!--
    End Document
    ==================================================
    -->
</body>

</html>