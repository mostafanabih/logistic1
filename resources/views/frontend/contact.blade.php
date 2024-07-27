@extends('frontend.site.app')

@section('content')
    <!-- Page header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header box Start -->
                    <div class="page-header-box">
                        <h2 class="">{{trans('main.contacts')}}</h2>
                        <nav class="wow fadeInUp" data-wow-delay="0.25s">
                            <ol class="breadcrumb">
                                <li><a href="#">{{trans('main.home')}}</a></li>
                                <li>{{trans('main.contacts')}}</li>
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
                        <h2 class="">{{trans('main.Send_us_a_message')}}</h2>
                        <div class="get-quote-content">
                            <p class="wow fadeInUp" data-wow-delay="0.5s"></p>
                        </div>
                        <div class="get-quote-form wow fadeInUp" data-wow-delay="0.75s">
                            <form action="{{ route('contact_us') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-12 mb-3">
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="{{trans('main.name')}}" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-3">
                                        <input type="text" class="form-control" name="phone" id="phone"
                                            placeholder="{{trans('main.phone')}}" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>


                                    <div class="form-group  col-md-12 mb-3">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="{{trans('main.email')}}" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-3">
                                        <textarea class="form-control" id="msg" name="message" rows="3" placeholder="{{trans('main.message')}}" required=""></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn-default">{{trans('main.send')}}</button>
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
                        <h2 class="">{{trans('main.contacts')}} </h2>
                        <!-- Contact Us Info Start -->
                        <div class="contact-us-info">
                            <div class="footer-info-box wow fadeInUp" data-wow-delay="0.25s">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-mail.svg') }}" alt="">
                                </div>

                                <p>info@cotamayozalnajah.com</p>
                            </div>

                            <div class="footer-info-box wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-location.svg') }}" alt="">
                                </div>

                                <p>{{trans('main.address')}}</p>
                            </div>

                            <div class="footer-info-box wow fadeInUp" data-wow-delay="0.75s">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-call.svg') }}" alt="">
                                </div>

                                <p>0553383310</p>
                            </div>
                        </div>
                        <!-- Contact Us Info End -->

                        <!-- Contact Us Footer Start -->
                        <div class="contact-us-footer wow fadeInUp" data-wow-delay="1s">
                            <div class="topbar-social-links contact-details">
                                <ul>
                                    <li><a href="https://www.facebook.com/profile.php?id=61558719242354"><i
                                                class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="https://x.com/shrkttmyzalnjah"><i class="fa-brands fa-twitter"></i></a>
                                    </li>
                                    <li><a href="https://www.instagram.com/shrkttmyzlnjaht.m.n?igsh=NWk1ZmxtNmNka3lm"><i
                                                class="fa-brands fa-instagram"></i></a></li>
                                    <li><a
                                            href="https://www.snapchat.com/add/shrkttmyzlnjah?share_id=c7GVADFJZxM&locale=ar-SA
"><i
                                                class="fa-brands fa-snapchat"></i></a></li>

                                </ul>
                            </div>
                            <!--Get Contact Us Start-->
                            <div class="header-contact-us">
                                <a href="#"><img src="{{ asset('assets/images/icon-phone.svg') }}" alt="">
                                    <h3>{{trans('main.contacts')}} <span>0553383310</span></h3>
                                </a>
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
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14516.019250769436!2d46.5941501!3d24.5544958!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f111aede8f4ed%3A0xbb9d460e166cc220!2z2LTYsdmD2Kkg2KrZhdmK2LIg2KfZhNmG2KzYp9itINin2YTZhNmI2KzYs9iq2YrYqQ!5e0!3m2!1sen!2ssa!4v1721498698175!5m2!1sen!2ssa"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map Iframe End -->
@endsection
