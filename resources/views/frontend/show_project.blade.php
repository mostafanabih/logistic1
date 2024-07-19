@extends('frontend.site.app')

@section('content')
     <!-- Start inner Page hero-->
     <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
      <div class="overlay-photo-image-bg parallax" data-bg-img="assets/images/hero/inner-page-hero.jpg" data-bg-opacity="1"></div>
      <div class="overlay-color" data-bg-opacity=".75"></div>
      <div class="container">
        <div class="hero-text-area centerd">
          <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">تفاصيل المشروع</h1>
          <nav aria-label="breadcrumb ">
            <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{route('index')}}"><i class="bi bi-house icon "></i>home</a></li>
              <li class="breadcrumb-item active">تفاصيل المشروع</li>
            </ul>
          </nav>
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->
    <!-- Start Project Details Area-->
    <section class="portfolio-single mega-section">
      <div class="container">
        <div class="featured-area">
          <div class="row">
            <div class="col-12  mx-auto">
              <div class="project-featured-img"><img class="featured-img " loading="lazy" src="{{ asset('storage/' . $info->images[0]) }}" alt="featuerd image"></div>
            </div>
          </div>
        </div>
        <div class="main-area">
          <div class="row">
            <div class="col-12 col-lg-9  ">
              <h5 class="sub-heading ">تفاصيل المشروع</h5>
              <p class="project-text">
                 {{$info->description}}
              </p>
              
              <div class="project-video mega-section ">
                <div class="overlay-photo-image-bg" data-bg-img="{{ asset('storage/' . $info->images[0]) }}" data-bg-opacity="1"></div>
                <div class="overlay-color " data-bg-opacity=".25"></div>
                <div class="video-wrapper">
                  <div class="play-btn-col-dir"><a class="video-link" href="{{$info->video_link}}" role="button" title="play" data-fancybox="data-fancybox">
                      <div class="play-video-btn">
                        <div class="play-btn"> <i class="fas fa-play icon"></i></div>
                      </div></a></div>
                </div>
              </div>
              <h5 class="sub-heading ">ملخص المشروع</h5>
              <p class="project-text">
                {{$info->summary}}
              </p>
              
              
              <h5 class="sub-heading ">نتائج المشروع </h5>
              <p class="project-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Ullam unde, alias deserunt nemo perspiciatis cum delectus
                deleniti repudiandae aliquam exercitationem veniam ipsam deleniti repudiandae aliqua
                
              </p>
              <div class="portfolio  portfolio-slider">
                <!--Swiper-->
                <div class="swiper-container wow fadeIn" data-wow-delay=".5s">
                  <div class="swiper-wrapper ">
                    @foreach($info->images as $image)
                    <div class="swiper-slide">
                      <div class="item   "><a class="portfolio-img-link" href="{{asset("storage/$image")}}" data-fancybox=".show-in-fancybox"><img class="portfolio-img   img-fluid " loading="lazy" src="{{asset("storage/$image")}}" alt="portfolio item photo"></a>
                        <div class="item-info ">
                          <h3 class="item-title">{{$info->type}}</h3><i class="bi bi-eye icon "></i>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                  <div class="swiper-button-prev">
                    <div class="left-arrow"><i class="bi bi-chevron-left icon "></i>
                    </div>
                  </div>
                  <div class="swiper-button-next">
                    <div class="right-arrow"><i class="bi bi-chevron-right icon "></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-3  ">
              <div class="info-area">
                <div class="project-info">
                  <div class="row">
                    <div class="col-6 col-lg-12">
                      <div class="info">
                        <h5 class="title"> العميل</h5>
                        <p class="detail">{{$info->client}}</p><i class="fas fa-address-card icon"></i>
                      </div>
                    </div>
                    <div class="col-6 col-lg-12">
                      <div class="info">
                        <h5 class="title">القسم</h5>
                        <p class="detail">{{$info->type}}</p><i class="fas fa-tasks icon"></i>
                      </div>
                    </div>
                    <div class="col-6 col-lg-12">
                      <div class="info">
                        <h5 class="title">التاريخ</h5>
                        <p class="detail">{{ $info->created_at->format('d M Y') }}</p><i class="fas fa-calendar-alt icon"></i>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End  Project Details Area-->
    <!-- Start  take-action Section-->
    <section class="take-action elf-section has-dark-bg" id="take-action">
      <div class="overlay-photo-image-bg  " data-bg-img="assets/images/sections-bg-images/2.jpg" data-bg-opacity=".25"> </div>
      <div class="cta-wrapper">
        <div class="container">
          <div class="sec-heading  centered mb-0 ">
            <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">تواصل معنا</span>
              <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">تواصل معنا</h2>
              <p class="subtitle   wow fadeInUp " data-wow-delay=".6s">أرسل إلينا رسالتك وسنعاود الإتصال بك لتقديم الخدمة المناسبة

               </p>
            </div>
          </div>
          <!--Start .see-more-area-->
          <div class=" see-more-area wow fadeInUp" data-wow-delay="0.8s"><a class=" btn-solid cta-link" href="contact-us.html">تواصل معنا</a></div>
          <!--End Of .see-more-area        -->
        </div>
      </div>
    </section>
    <!-- End  take-action Section-->

    @endsection