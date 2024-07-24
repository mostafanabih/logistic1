<!-- Header Start -->
<header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="/"><img src="{{asset('assets/images/logo.svg')}}" alt="" style="
                        width: 120px;
                    "></a>
                    <!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item "><a class="nav-link" href="{{route('index')}}">الصحة الرئيسية</a>

                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{route('about')}}">حول </a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('services')}}">الخدمات</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('posts')}}">المدونة</a></li>

                            <li class="nav-item"><a class="nav-link" href="{{route('contacts')}}">اتصل بنا</a></li>
                        </ul>
                    </div>
                    <!-- Main Menu End -->

                    <!--Get Contact Us Start-->
                    <div class="header-contact-us">
                        <a href="#"><img src="{{asset('assets/images/icon-phone.svg')}}" alt=""><h3>توصل معنا الان <span>0553383310</span></h3></a>
                    </div>
                    <!--Get Contact Us End-->

                    <div class="navbar-toggle"></div>
                </div>
            </nav>

            <div class="responsive-menu"></div>
        </div>
    </header>
    <!-- Header End -->
