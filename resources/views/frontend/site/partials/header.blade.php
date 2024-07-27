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
                            <li class="nav-item "><a class="nav-link" href="{{route('index')}}"> {{trans('main.home')}} </a>

                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{route('about')}}"> {{trans('main.about')}}</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('services')}}"> {{trans('main.services')}}</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('posts')}}"> {{trans('main.posts')}}</a></li>

                            <li class="nav-item"><a class="nav-link" href="{{route('contacts')}}">  {{trans('main.contacts')}}</a></li>
                            
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
            </a>
        </li>
    @endforeach

                        </ul>
                    </div>
                    <!-- Main Menu End -->

                    <!--Get Contact Us Start-->
                    <div class="header-contact-us">
                        <a href="#"><img src="{{asset('assets/images/icon-phone.svg')}}" alt=""><h3>{{trans('main.contact_us_now')}}<span>0553383310</span></h3></a>
                    </div>
                    <!--Get Contact Us End-->

                    <div class="navbar-toggle"></div>
                </div>
            </nav>

            <div class="responsive-menu"></div>
        </div>
    </header>
    <!-- Header End -->
