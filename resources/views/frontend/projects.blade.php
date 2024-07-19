@extends('frontend.site.app')

@section('content')
   <!-- Start inner Page hero-->
   <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
      <div class="overlay-photo-image-bg parallax" data-bg-img="assets/images/hero/inner-page-hero.jpg" data-bg-opacity="1"></div>
      <div class="overlay-color" data-bg-opacity=".75"></div>
      <div class="container">
        <div class="hero-text-area centerd">
          <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">المشاريع</h1>
          <nav aria-label="breadcrumb ">
            <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="#0"><i class="bi bi-house icon "></i>الرئيسيه</a></li>
              <li class="breadcrumb-item active">المشاريع</li>
            </ul>
          </nav>
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->
    <!-- Start  portfolio Section-->
    <section class="portfolio mega-section   " id="portfolio">
      <div class="container">
        <div class="sec-heading  ">
          <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">المشاريع</span>
            <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">معرض <span class='hollow-text'>الأعمال</span></h2>
          </div>
        </div>
        <div class="portfolio-wrapper  ">
          <!--a menu of links to show the photos users needs   -->
          <ul class="portfolio-btn-list wow fadeInUp" data-wow-delay=".2s">
            <li class="portfolio-btn active " data-filter="*">الكل</li>
            <li class="portfolio-btn        " data-filter=".mobile">مواقع الكترونيه</li>
            <li class="portfolio-btn        " data-filter=".web">  حملات اعلانيه</li>
            <li class="portfolio-btn        " data-filter=".data"> اداره حسابات</li>
          </ul>
          <div class="portfolio-group wow fadeIn" data-wow-delay=".4s">
            <div class="row ">
            @foreach($web_projects as $project)
              <div class="col-12  col-md-6  col-lg-4  portfolio-item mobile ">
                <div class="item   "><a class="portfolio-img-link" href="{{route('show_project',$project->id)}}"><img class="portfolio-img   img-fluid " loading="lazy" src="{{ asset('storage/' . $project->images[0]) }}" alt="portfolio item photo"></a>
                  <div class="item-info ">
                    <h3 class="item-title">{{$project->type}}</h3><i class="bi bi-arrow-left icon "></i>
                  </div>
                </div>
              </div>
              @endforeach
              @foreach($social_projects as $project)
              <div class="col-12  col-md-6  col-lg-4  portfolio-item web  ">
                <div class="item   "><a class="portfolio-img-link" href="{{route('show_project',$project->id)}}"><img class="portfolio-img   img-fluid " loading="lazy" src="{{ asset('storage/' . $project->images[0]) }}" alt="portfolio item photo"></a>
                  <div class="item-info ">
                    <h3 class="item-title">{{$project->type}}</h3><i class="bi bi-arrow-left icon "></i>
                  </div>
                </div>
              </div>
              @endforeach
              @foreach($account_projects as $project)
              <div class="col-12  col-md-6  col-lg-4  portfolio-item data ">
                <div class="item   "><a class="portfolio-img-link" href="{{route('show_project',$project->id)}}"><img class="portfolio-img   img-fluid " loading="lazy" src="{{ asset('storage/' . $project->images[0]) }}" alt="portfolio item photo"></a>
                  <div class="item-info ">
                    <h3 class="item-title">{{$project->type}}</h3><i class="bi bi-arrow-left icon "></i>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End  portfolio Section-->
    
    <!-- Start  our-clients Section-->
    <section class="our-clients  bg-main elf-section" id="our-clients">
      <div class="container-fluid">
        <div class="sec-heading d-none ">
          <h4 class="title ">our great clients</h4>
        </div>
        <div class=" clients-logos ">
          <!--Swiper-->
          <div class="swiper-container">
            <div class="swiper-wrapper clients-logo-wrapper wow fadeIn " data-wow-delay=".02s">
              <!-- every client logo is located inside div  with clss name "swiper-slide ".
              if you want to add more logos please keep the strcture of the swiper-slide as showen below
              
              
              -->
              @foreach($clients as $client)
              <div class="swiper-slide">
                <div class="client-logo  "><a href="#0"><img class="img-fluid logo " loading="lazy" src="{{$client->logo}}" alt=" "></a></div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End  our-clients Section-->
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