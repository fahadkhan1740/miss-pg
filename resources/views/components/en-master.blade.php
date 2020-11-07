<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Miss Platinum</title>
    <!-- favicon -->
    <link rel=icon href="{{ asset('img/favicon.png') }}" sizes="20x20" type="image/png">

    <link rel="stylesheet" href="{{ mix('en/css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('en/css/style.css') }}">
</head>
<body>

<!-- preloader area start -->
{{--<div class="preloader" id="preloader">--}}
{{--    <div class="preloader-inner">--}}
{{--        <div class="spinner">--}}
{{--            <div class="dot1"></div>--}}
{{--            <div class="dot2"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- preloader area end -->

<!-- navbar start -->
<div class="zarxio-navbar">
    <nav class="navbar navbar-area navbar-expand-lg nav-style-01">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#billatrail_main_menu"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="bar1"></span>
                    <span class="bar2"></span>
                    <span class="bar3"></span>
                </button>
            </div>
            <div class="logo">
                <a href="index.html"> <img src="{{ asset('img/logo.png') }}" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="billatrail_main_menu">
                <ul class="navbar-nav menu-open">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about', ['locale' => 'en']) }}">About</a></li>
                    <li><a href="{{ route('classes', ['locale' => 'en']) }}">Classes</a></li>
                    <li><a href="{{ route('eventNews', ['locale' => 'en']) }}">Event & News</a></li>
                    <li><a href="{{ route('beMember', ['locale' => 'en']) }}">Be a Member</a></li>
                    <li><a href="{{ route('contact', ['locale' => 'en']) }}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- navbar end -->

{{ $slot }}

<footer class="footer-area footer-style-1 black-bg padding-top-160">
    <div class="footer-top padding-top-30 padding-bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xl-4 col-md-6">
                    <div class="footer-widget widget">
                        <a href="index.html" class="footer-logo">
                            <img src="{{ asset('img/footer-logo.png') }}" alt="footer logo">
                        </a>
                        <ul class="contact_info_list">
                            <li class="single-info-item">
                                <div class="icon">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <div class="details">
                                    1900-45-20
                                </div>
                            </li>
                            <li class="single-info-item">
                                <div class="icon">
                                    <i class="flaticon-placeholder"></i>
                                </div>
                                <div class="details">
                                    152/02 William Streat, NYE
                                </div>
                            </li>
                            <li class="single-info-item">
                                <div class="icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="details">
                                    Zarxiofitness@info.com
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="footer-widget widget">
                        <h4 class="widget-title">Recent Post</h4>
                        <ul class="recent_post_item">
                            <li class="single-recent-post-item">
                                <div class="thumb">
                                    <img src="{{ asset('img/post/1.png') }}" alt="">
                                </div>
                                <div class="content">
                                    <p class="title">New gym center</p>
                                    <p class="desc">There are many variations of passages</p>
                                </div>
                            </li>
                            <li class="single-recent-post-item">
                                <div class="thumb">
                                    <img src="{{ asset('img/post/2.png') }}" alt="">
                                </div>
                                <div class="content">
                                    <p class="title">Improve fitness</p>
                                    <p class="desc">There are many variations of passages</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4 col-md-12 offset-xl-1">
                    <div class="footer-widget widget">
                        <h4 class="widget-title">Stay in Touch</h4>
                        <p class="description">Praesent a diam at velit finibus vehicula sit amet eu dui. Vestibulum rutrum dignissim arcu, vitae convallis</p>
                        <div class="subscribe-form">
                            <div class="input-group margin-top-30">
                                <input type="text" class="form-control" placeholder="Enter your email address">
                                <span class="input-group-btn">
                                        <button class="btn btn-default submit-btn" type="button">Subscribe</button>
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-area-inner copyright-sm margin-top-30">
                        © Zarxio 2019 All rights reserved. Powered with <i class="fa fa-heart"></i>  by <a href="https://codingeek.net/" target="_blank">Codingeek</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
</div>
<!-- back to top area end -->

<script src="{{ mix('en/js/all.js') }}"></script>
<script src="{{ mix('en/js/script.js') }}"></script>
</body>
</html>
