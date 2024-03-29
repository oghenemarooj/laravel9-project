@php
    use App\Models\User;
    use App\Models\Cart;
    use Illuminate\Support\Facades\Auth;
    if (Auth::check()) {
        $totalPrice = 0;
        $user = Auth::user();
        $carts = cart::where('phone', '=',  $user->phone)->get();
        $count = Cart::where('phone', $user->phone)->count();
    }else {
        $count = null;
    }

@endphp
<!doctype html>
<html class="no-js" lang="">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ganic - Organic Food & Grocery Market Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="/eco_assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="/eco_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/eco_assets/css/animate.min.css">
    <link rel="stylesheet" href="/eco_assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/eco_assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/eco_assets/css/jquery-ui.css">
    <link rel="stylesheet" href="/eco_assets/css/flaticon.css">
    <link rel="stylesheet" href="/eco_assets/css/aos.css">
    <link rel="stylesheet" href="/eco_assets/css/slick.css">
    <link rel="stylesheet" href="/eco_assets/css/default.css">
    <link rel="stylesheet" href="/eco_assets/css/style.css">
    <link rel="stylesheet" href="/eco_assets/css/responsive.css">
</head>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div class="loader">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <header class="header-style-two">

        <!-- header-message -->
        <div class="header-message-wrap">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-notify-message">
                            <p>place your complaints (if any) within 24hrs of receiving your delivery</p>
                            <span class="message-remove">X</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-message-end -->

        <!-- header-top-start -->
        <div class="header-top-wrap">
            <div class="container custom-container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="header-top-left">
                            <ul>
                                <li class="header-top-lang">
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">English</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                            <a class="dropdown-item" href="index.html">Spanish</a>
                                            <a class="dropdown-item" href="index.html">Chinese</a>
                                            <a class="dropdown-item" href="index.html">Hindi</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="header-top-currency">
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton3"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD - US
                                            Dollar</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                            <a class="dropdown-item" href="index.html">INR - IN Rupe</a>
                                            <a class="dropdown-item" href="index.html">BDT - BD Taka</a>
                                            <a class="dropdown-item" href="index.html">SAR - SA Riyal</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="header-work-time">
                                    Working time: <span> Mon - Sat : 8:00 - 21:0</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="header-top-right">
                            <ul>
                                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">register</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                <li><a href="contact.html">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-top-end -->

        <!-- header-search-area -->
        <div class="header-search-area">
            <div class="container custom-container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-3 d-none d-lg-block">
                        <div class="logo">
                            <a href="index.html"><img src="/eco_assets/img/logo/logo.png" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-9">
                        <div class="d-block d-sm-flex align-items-center justify-content-end">
                            <div class="header-search-wrap">
                                <form action="#">
                                    <select class="custom-select">
                                        <option selected="">All Categories</option>
                                        <option>-- Grocery & Frozen</option>
                                        <option>-- Fresh Fruits</option>
                                        <option>-- Fresh Fish</option>
                                        <option>-- Fresh Nuts</option>
                                        <option>-- Fresh Meats</option>
                                        <option>-- Bread & Bakery</option>
                                        <option>-- Vegetable</option>
                                        <option>-- Kids Food</option>
                                        <option>-- Dried Fruits</option>
                                        <option>-- Others Food</option>
                                    </select>
                                    <input type="text" placeholder="Search Product...">
                                    <button><i class="flaticon-loupe-1"></i></button>
                                </form>
                            </div>
                            <div class="header-action">
                                <ul>

                                    <li class="header-user"><a href="{{ route('dashboard') }}"><i
                                                class="flaticon-user"></i></a></li>
                                    <li class="header-wishlist">
                                        <a href="#"><i class="flaticon-heart-shape-outline"></i></a>
                                        <span class="item-count">0</span>
                                    </li>
                                    <li class="header-wishlist">
                                        @if (Route::has('login'))
                                            @auth
                                            @else
                                                <ul>

                                                    <li><a href="{{ route('login') }}">Login</a></li>
                                                    @if (Route::has('register'))
                                                        <li><a href="{{ route('register') }}">register</a></li>
                                                    @endif


                                                </ul>

                                            @endauth


                                        @endif
                                    </li>

                                    <li class="header-cart-action">
                                        <div class="header-cart-wrap">


                                            @if (Auth::check())
                                                <a href="{{url('showcart')}}"><i class="flaticon-shopping-basket"></i></a>
                                                <span class="item-count">{{$count}}</span>
                                                <ul class="minicart">
                                                    @foreach ($carts as $cart)


                                                    <li class="d-flex align-items-start">
                                                        <div class="cart-img">
                                                            <a href="shop-details.html"><img
                                                                    src="/storage/images/{{ $cart->image }}"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="cart-content">
                                                            <h4><a href="shop-details.html">{{$cart->product_title}}</a>
                                                            </h4>
                                                            <div class="cart-price">
                                                                <span class="new">${{number_format($cart->price*$cart->quantity,2)}}</span>
                                                                <span><del></del></span>
                                                                @php
                                                                    $totalPrice += $cart->price*$cart->quantity
                                                                @endphp
                                                            </div>
                                                        </div>
                                                        <div class="del-icon">
                                                            <a href="{{url('delete',$cart->id)}}"><i class="far fa-trash-alt"></i></a>
                                                        </div>
                                                    </li>

                                                    @endforeach

                                                    <li>
                                                        <div class="total-price">
                                                            <span class="f-left">Total:</span>
                                                            <span class="f-right">${{number_format($totalPrice,2)}}</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkout-link">
                                                            <a href="{{route('showcart.products')}}">Show Cart</a>
                                                            <a class="black-color" href="checkout.html">Checkout</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            @else
                                                 {{-- <span class="item-count">0</span> --}}
                                            @endif




                                        </div>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-search-area-end -->

        <div id="sticky-header" class="menu-area">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                        <div class="menu-wrap">
                            <nav class="menu-nav">
                                <div class="logo d-block d-lg-none">
                                    <a href="index.html"><img src="/eco_assets/img/logo/logo.png" alt=""></a>
                                </div>
                                <div class="navbar-wrap main-menu d-none d-lg-flex">
                                    <ul class="navigation">
                                        <li class="active menu-item-has-children"><a href="#">Home</a>
                                            <ul class="submenu">
                                                <li><a href="index.html">Home Page One</a></li>
                                                <li class="active"><a href="index-2.html">Home Page Two</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('about.us') }}">About Us</a></li>
                                        <li><a href="shop.html">Fruits & Vegetables</a></li>
                                        <li><a href="shop-right-sidebar.html">Grocery & Staples</a></li>
                                        <li class="menu-item-has-children"><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="shop-details.html">Shop Details</a></li>
                                                <li><a href="cart.html">cart Page</a></li>
                                                <li><a href="checkout.html">Checkout page</a></li>
                                                <li><a href="blog.html">Our Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="terms-conditios.html">Terms Conditions</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('contact') }}">contacts</a></li>
                                    </ul>
                                </div>
                                <div class="header-delivery-message d-none d-md-block">
                                    <p>free delivery on Orders <span>$25+</span></p>
                                </div>
                            </nav>
                        </div>
                        <!-- Mobile Menu  -->
                        <div class="mobile-menu">
                            <nav class="menu-box">
                                <div class="close-btn"><i class="fas fa-times"></i></div>
                                <div class="nav-logo"><a href="index.html"><img src="/eco_assets/img/logo/logo.png"
                                            alt="" title=""></a>
                                </div>
                                <div class="menu-outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                </div>
                                <div class="social-links">
                                    <ul class="clearfix">
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-backdrop"></div>
                        <!-- End Mobile Menu -->
                    </div>
                </div>
            </div>
        </div>

        @if (session()->has('message'))
            <div class="alert alert-success">

                <button type="button" class="close" data-dismiss="alert">X</button>

                {{ session()->get('message') }}

            </div>
        @endif
    </header>
    <!-- header-area-end -->


    <!-- main-area -->
    {{ $slot }}
    <!-- main-area-end -->


    <!-- footer-area -->
    <footer>
        <div class="footer-area gray-bg pt-80 pb-30">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget mb-50">
                            <div class="footer-logo mb-25">
                                <a href="index.html"><img src="/eco_assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <div class="footer-contact-list">
                                <ul>
                                    <li>
                                        <div class="icon"><i class="flaticon-place"></i></div>
                                        <p>PO Box W75 Street West New Queens, TX 16819</p>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="flaticon-telephone-1"></i></div>
                                        <h5 class="number"><a href="tel:12027993245">+120 279 932 45</a></h5>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="flaticon-mail"></i></div>
                                        <p><a
                                                href="https://themebeyond.com/cdn-cgi/l/email-protection#8efdfbfefee1fcfacef8ebe9ebe0a0ede1e3"><span
                                                    class="__cf_email__"
                                                    data-cfemail="c5b6b0b5b5aab7b185b3a0a2a0abeba6aaa8">[email&#160;protected]</span></a>
                                        </p>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="flaticon-wall-clock"></i></div>
                                        <p>Week 7 days from 7:00 to 20:00</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-widget mb-50">
                            <div class="fw-title">
                                <h5 class="title">Customer Service</h5>
                            </div>
                            <div class="fw-link">
                                <ul>
                                    <li><a href="shop.html">Secure Shopping</a></li>
                                    <li><a href="cart.html">Order Status</a></li>
                                    <li><a href="shop.html">International Shipping</a></li>
                                    <li><a href="checkout.html">Payment Method</a></li>
                                    <li><a href="blog.html">Our Blog</a></li>
                                    <li><a href="terms-conditios.html">Orders and Returns</a></li>
                                    <li><a href="checkout.html">Track Your Orders</a></li>
                                    <li><a href="index.html">Footer Links</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-widget mb-50">
                            <div class="fw-title">
                                <h5 class="title">Useful Links</h5>
                            </div>
                            <div class="fw-link">
                                <ul>
                                    <li><a href="checkout.html">Delivery</a></li>
                                    <li><a href="terms-conditios.html">Legal Notice</a></li>
                                    <li><a href="about-us.html">About us</a></li>
                                    <li><a href="contact.html">Sitemap</a></li>
                                    <li><a href="checkout.html">Track Your Orders</a></li>
                                    <li><a href="index.html">Footer Links</a></li>
                                    <li><a href="terms-conditios.html">Orders and Returns</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="footer-widget footer-box-widget mb-50">
                            <div class="f-download-wrap">
                                <div class="fw-title">
                                    <h5 class="title">Download App</h5>
                                </div>
                                <div class="download-btns">
                                    <a href="index.html"><img src="/eco_assets/img/icon/g_play.png"
                                            alt=""></a>
                                    <a href="index.html"><img src="/eco_assets/img/icon/app_store.png"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="f-newsletter">
                                <div class="fw-title">
                                    <h5 class="title">Newsletter</h5>
                                </div>
                                <form action="#">
                                    <input type="email" placeholder="Email Address">
                                    <button><i class="flaticon-send"></i></button>
                                </form>
                                <p>Do Not Show Your Mail</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2021 Ganic All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-accepted text-center text-md-right">
                            <img src="/eco_assets/img/images/payment_card.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->





    <!-- JS here -->
    <script data-cfasync="false"
        src="https://themebeyond.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="/eco_assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="/eco_assets/js/bootstrap.min.js"></script>
    <script src="/eco_assets/js/isotope.pkgd.min.js"></script>
    <script src="/eco_assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/eco_assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/eco_assets/js/jquery.countdown.min.js"></script>
    <script src="/eco_assets/js/jquery-ui.min.js"></script>
    <script src="/eco_assets/js/slick.min.js"></script>
    <script src="/eco_assets/js/ajax-form.js"></script>
    <script src="/eco_assets/js/wow.min.js"></script>
    <script src="/eco_assets/js/aos.js"></script>
    <script src="/eco_assets/js/plugins.js"></script>
    <script src="/eco_assets/js/main.js"></script>
</body>

<!-- Mirrored from themebeyond.com/pre/ganic-prev/ganic-live/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Feb 2022 22:24:00 GMT -->

</html>
