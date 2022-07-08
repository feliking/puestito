<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ env('APP.ENV') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="/img/favicon.ico">
    <!-- CSS
		============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{ asset('css/plugins/slick.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/plugins/cssanimation.min.css') }}">
    <!-- IonRange slider CSS -->
    <link rel="stylesheet" href="{{ asset('css/plugins/ion.rangeSlider.min.css') }}">
    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from above) -->
    <!--
			<link rel="stylesheet" href="/css/vendor.min.css">
			<link rel="stylesheet" href="/css/plugins/plugins.min.css">
			-->
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!--====================  preloader area ====================-->
    <div class="preloader-activate preloader-active">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="img-loader"></div>
            </div>
        </div>
    </div>
    <!--====================  End of preloader area  ====================-->
    <div class="body-wrapper space-pt--70 space-pb--120">
        <!--====================  header area ====================-->
        <header>
            <div class="header-wrapper border-bottom">
                <div class="container space-y--15">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <!-- header logo -->
                            <div class="header-logo">
                                <a href="/">
                                    <img src="{{ asset($params[1]->value) }}" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-right">
                            <div class="header-search">
                                <h4>{{ $params[0]->value }}</h4>
                            </div>
                        </div>
                        {{-- <div class="col-auto">
                            <!-- header menu trigger -->
                            <button class="header-menu-trigger" id="header-menu-trigger">
                                <img src="{{asset('img/icons/menu.svg')}}" class="injectable" alt="">
                            </button>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!-- search keywords -->
            <div class="search-keyword-area space-xy--15 bg-color--grey2" id="search-keyword-box">
                <div class="search-keyword-header space-mb--20">
                    <h4 class="search-keyword-header__title">Hot Keywords</h4>
                </div>
                <ul class="search-keywords">
                    <li><a href="search.html">Shoes</a></li>
                    <li><a href="search.html">Fashion Bag</a></li>
                    <li><a href="search.html">Light Bag</a></li>
                    <li><a href="search.html">Parts</a></li>
                    <li><a href="search.html">Sport Shoes</a></li>
                    <li><a href="search.html">Travel Bag</a></li>
                </ul>
            </div>
        </header>
        <!--====================  End of header area  ====================-->
        <!--====================  mobile menu overlay ====================-->
        <div class="offcanvas-menu" id="offcanvas-menu">
            <div class="profile-card text-center">
                <div class="profile-card__image space-mb--10">
                    <img src="/img/profile.jpg" class="img-fluid" alt="">
                </div>
                <div class="profile-card__content">
                    <p class="name">Don Normane <span class="id">ID MD 4350</span></p>
                </div>
            </div>
            <div class="offcanvas-navigation-wrapper space-mt--40">
                <ul class="offcanvas-navigation">
                    <li><span class="icon"><img src="/img/icons/profile.svg" class="injectable" alt=""></span><a href="login.html">Login / Sign up</a></li>
                    <li><span class="icon"><img src="/img/icons/profile-two.svg" class="injectable" alt=""></span><a href="profile.html">My Profile</a></li>
                    <li><span class="icon"><img src="/img/icons/notification.svg" class="injectable" alt=""></span><a href="notification.html">Notification</a></li>
                    <li><span class="icon"><img src="/img/icons/product.svg" class="injectable" alt=""></span><a href="shop.html">All products</a></li>
                    <li><span class="icon"><img src="/img/icons/cart-two.svg" class="injectable" alt=""></span><a href="order.html">My Order</a></li>
                    <li><span class="icon"><img src="/img/icons/cart-three.svg" class="injectable" alt=""></span><a href="cart.html">Cart</a></li>
                    <li><span class="icon"><img src="/img/icons/wishlist.svg" class="injectable" alt=""></span><a href="wishlist.html">Wishlist</a></li>
                    <li><span class="icon"><img src="/img/icons/gear-two.svg" class="injectable" alt=""></span><a href="edit-profile.html">Settings</a></li>
                    <li><span class="icon"><img src="/img/icons/profile.svg" class="injectable" alt=""></span><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <!--====================  End of mobile menu overlay  ====================-->
        @yield('content')
        <!--====================  footer area ====================-->
        {{-- <footer>
            <div class="footer-nav-wrapper">
                <a href="index.html" class="footer-nav-single">
                    <div class="menu-wrapper">
                        <img src="{{asset('img/icons/home.svg')}}" class="injectable" alt="">
                        <span>Inicio</span>
                    </div>
                </a>
                <a href="chat.html" class="footer-nav-single">
                    <div class="menu-wrapper">
                        <img src="{{asset('img/icons/chat.svg')}}" class="injectable" alt="">
                        <span>Chat</span>
                    </div>
                </a>
                <a href="cart.html" class="footer-nav-single">
                    <div class="menu-wrapper">
                        <img src="{{asset('img/icons/cart.svg')}}" class="injectable" alt="">
                        <span>Carrito</span>
                    </div>
                </a>
                <a href="profile.html" class="footer-nav-single">
                    <div class="menu-wrapper">
                        <img src="{{asset('img/icons/profile.svg')}}" class="injectable" alt="">
                        <span>Perfil</span>
                    </div>
                </a>
            </div>
        </footer> --}}
        <!--====================  End of footer area  ====================-->
    </div>
    <!-- JS
    ============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('js/modernizr-2.8.3.min.js') }}"></script>
    <!-- jQuery JS -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- IonRanger JS -->
    <script src="{{ asset('js/plugins/ion.rangeSlider.min.js') }}"></script>
    <!-- SVG inject JS -->
    <script src="{{ asset('js/plugins/svg-inject.min.js') }}"></script>
    <!-- Slick slider JS -->
    <script src="{{ asset('js/plugins/slick.min.js') }}"></script>
    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from above) -->
    <!--
  <script src="/js/plugins/plugins.min.js"></script>
-->
    <!-- Main JS -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
