<main>
    <div>
        <div class="nav-background">
            <nav class="nav">
                <!--Brand-->
                <div class="logo">
                    <a href="{{ url('/') }}">Quick House</a>
                </div>
                <div id="menu">
                    <!--Toggle button-->
                    <button id="btn-menumobile" aria-label="Abrir Menu" aria-haspopup="true" aria-controls="list"
                        aria-expanded="false">
                        <span id="hamburger"></span>
                    </button>
                    <!--Item List-->
                    <ul id="list">

                        {{-- <li><a href="#">{{__("message.home")}}</a></li> --}}
                        {{-- <li><a href="#">Services</a></li> --}}
                        <li><a href="#">{{ __('message.contact') }}</a></li>
                        {{-- <li><a href="#">Info</a></li> --}}
                        {{-- <li><a href="#">{{__("message.subscribe")}}</a></li> --}}

                        @if (!Auth::check())
                            {{-- Login and register starts --}}
                            <li><a href="registration">Regist</a></li>

                            <li><a href="login">Login</a></li>
                        @endif

                        {{-- language switcher starts --}}


                        <li class="nav-item dropdown">
                            <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">

                                <span
                                    class="fi fi-{{ Config::get('languages')[App::getLocale()]['flag-icon'] }} fis"></span>
                                {{ Config::get('languages')[App::getLocale()]['display'] }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                @foreach (Config::get('languages') as $lang => $language)
                                    @if ($lang != App::getLocale())
                                        <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span
                                                class="fi fi-{{ $language['flag-icon'] }} fis"></span>
                                            {{ $language['display'] }}</a>
                                    @endif
                                @endforeach
                            </div>
                        </li>

                        {{-- language switcher ends --}}

                        @if (Auth::check())
                            <li><a href="logout">LogOut</a></li>
                            {{-- Login and register ends --}}
                        @endif



                    </ul>
                </div>
            </nav>

            <div class="nav-title-begin">
                <h1 class="rellax" data-rellax-speed="5">{{ __('message.welcome') }}</h1>
                <p class="rellax" data-rellax-speed="3">{{ __('message.slogan') }}</p>
                <div>
                    <button type="button" class="nav-button-begin rellax" data-rellax-speed="2"><span></span>
                        {{ __('message.contact') }}</button>
                </div>
            </div>
        </div>
    </div>

    <div class="slide_catg">

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">Slide 1</div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 4</div>
                <div class="swiper-slide">Slide 5</div>
                <div class="swiper-slide">Slide 6</div>
                <div class="swiper-slide">Slide 7</div>
                <div class="swiper-slide">Slide 8</div>
                <div class="swiper-slide">Slide 9</div>
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>
</main>
