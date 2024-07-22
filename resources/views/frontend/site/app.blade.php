<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken">
    <!-- Page Title -->
    <title>شركة تميز النجاح </title>
	@include('frontend.site.partials.styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
<style>
*{
    font-family: "Cairo", sans-serif;

}
</style>
</head>

<body class="tt-magic-cursor">

    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="images/loader.svg" alt=""></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Magic Cursor Start -->
    <div id="magic-cursor">
        <div id="ball"></div>
    </div>
    <!-- Magic Cursor End -->

    <!-- Topbar Section Start -->
    <div class="topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-8">
                    <!-- Topbar Contact Information Start -->
                    <div class="topbar-contact-info">
                        <ul>
                            <li><a href="#"><i class="fa-solid fa-location-dot"></i> المملكة العربيه السعوديه الرياض </a></li>
                            <li><a href="#"><i class="fa-solid fa-at"></i> info@cotamayozalnajah.com</a></li>
                        </ul>
                    </div>
                    <!-- Topbar Contact Information End -->
                </div>

                <div class="col-lg-3 col-md-4">
                    <!-- Topbar Social Links Start -->
                    <div class="topbar-social-links">
                        <ul>
                            <li><a href="https://www.facebook.com/profile.php?id=61558719242354"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="https://x.com/shrkttmyzalnjah"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/shrkttmyzlnjaht.m.n?igsh=NWk1ZmxtNmNka3lm"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- Topbar Social Links End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar Section End -->

      @include('frontend.site.partials.header')

      @yield('content')


     @include('frontend.site.partials.footer')


     @include('frontend.site.partials.scripts')
	 </body>
	 </html>
