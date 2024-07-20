@extends('frontend.site.app')

@section('content')
  
    <!-- Page header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header box Start -->
                    <div class="page-header-box">
                        <h2 class="">اتصل بنا</h2>
                        <nav class="wow fadeInUp" data-wow-delay="0.25s">
                            <ol class="breadcrumb">
                                <li><a href="#">الرئيسيه</a></li>
                                <li>اتصل بنا</li>
                            </ol>
                        </nav>                                
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Get In Touch Section Start -->
    <div class="get-in-touch">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <!-- Get Quote Start -->
                    <div class="get-quote">
                        <h2 class="text-anime-style-3">Drop us a line</h2>
                        <div class="get-quote-content">
                            <p class="wow fadeInUp" data-wow-delay="0.5s">Please fill out the form below to get in touch with us. We'll get back to you as soon as possible.</p>
                        </div>
                        <div class="get-quote-form wow fadeInUp" data-wow-delay="0.75s">
                            <form id="contactForm" action="#" method="post" data-toggle="validator">
                                <div class="row">
                                    <div class="form-group col-md-12 mb-3">
                                        <input type="text" class="form-control" id="name" placeholder="Enter Your Full Name" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group  col-md-12 mb-3">
                                        <input type="email" class="form-control" id="email" placeholder="Enter Your Email" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-3">
                                        <textarea name="msg" class="form-control" id="msg" rows="3" placeholder="Write Your Message" required=""></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn-default">Submit</button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Get Quote End -->
                </div>

                <div class="col-lg-5 col-md-6">
                    <div class="contact-us">
                        <h2 class="text-anime-style-3">Quick links</h2>
                        <!-- Contact Us Info Start -->
                        <div class="contact-us-info">
                            <div class="footer-info-box wow fadeInUp" data-wow-delay="0.25s">
                                <div class="icon-box">
                                    <img src="{{asset('assets/images/icon-mail.svg')}}" alt="">
                                </div>

                                <p>Help@gmail.com</p>
                            </div>

                            <div class="footer-info-box wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <img src="{{asset('assets/images/icon-location.svg')}}" alt="">
                                </div>

                                <p>121 King Street, Melbourne</p>
                            </div>

                            <div class="footer-info-box wow fadeInUp" data-wow-delay="0.75s">
                                <div class="icon-box">
                                    <img src="{{asset('assets/images/icon-call.svg')}}" alt="">
                                </div>

                                <p>808 707 6060</p>
                            </div>
                        </div>
                        <!-- Contact Us Info End -->

                        <!-- Contact Us Footer Start -->
                        <div class="contact-us-footer wow fadeInUp" data-wow-delay="1s">
                            <div class="topbar-social-links contact-details">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!--Get Contact Us Start-->
                            <div class="header-contact-us">
                                <a href="#"><img src="{{asset('assets/images/icon-phone.svg')}}" alt=""><h3>Call Anytime <span>808 707 6060</span></h3></a>
                            </div>                           
                            <!--Get Contact Us End--> 
                        </div>
                        <!-- Contact Us Footer End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Section End -->

    <!-- Google Map Iframe Start -->
    <div class="google-map">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="google-map-iframe">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.5464675033077!2d-0.12209412310046139!3d51.503189711010585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2slastminute.com%20London%20Eye!5e0!3m2!1sen!2sin!4v1706532987654!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map Iframe End -->


    @endsection