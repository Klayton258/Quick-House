@extends('layouts.layout_main')
@section('content')
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

        {{-- ================================ --}}
        {{-- cards slide Beggin --}}
        {{-- ================================ --}}
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

        <div class="container mt-5 conthome">
            <div class="row rowcontenthome">
                <div class="col imageshome">
                    <img class="imghome1" src="{{ asset('componets/images/img-4.jpg') }}">
                    <img class="imghome2" src="{{ asset('componets/images/img-4.jpg') }}">
                </div>

                <div class="col descriphome">
                    <h1 class="mt-5 mb-4">{{ __('message.text_besthome') }}</h1>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est sed quis similique libero perferendis illum
                    expedita consequuntur veniam totam aliquam tempora optio ea veritatis aperiam accusantium, deserunt
                    tenetur mollitia praesentium?
                </div>
            </div>

            <div class="marginTotop">
            </div>


            @if (sizeOf($outdoors) > 0)
                <div class="carrouselhome">
                    <div class="newhomestitle">
                        <h4>TOP NEW</h4>
                    </div>
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            @php  $activo = 2; @endphp
                            @foreach ($outdoors as $outdoor)
                                @if ($activo == 2)
                                    @php $image = explode('|',$outdoor->images); @endphp
                                    <div class="carousel-item active">
                                        <img src="{{ asset('images/houses/' . $outdoor->path . '/' . $image[0]) }}"
                                            class="d-block w-100" alt="...">
                                    </div>
                                    @php $activo = 1; @endphp
                                @else
                                    @php $image = explode('|',$outdoor->images); @endphp
                                    <div class="carousel-item">
                                        <img src="{{ asset('images/houses/' . $outdoor->path . '/' . $image[0]) }}"
                                            class="d-block w-100" alt="...">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            @endif
            {{-- gallery --}}
            <section class="gallery" id="gallery">

                <div class="swiper gallery-slider">
                    <div class="swiper-wrapper">
                        <img src="" class="swiper-slide">
                        <img src="images/gallery-img-2.webp" class="swiper-slide" alt="">
                        <img src="images/gallery-img-3.webp" class="swiper-slide" alt="">
                        <img src="images/gallery-img-4.webp" class="swiper-slide" alt="">
                        <img src="images/gallery-img-5.webp" class="swiper-slide" alt="">
                        <img src="images/gallery-img-6.webp" class="swiper-slide" alt="">
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </section>

            {{-- search content starts --}}
            <section class="box_container">
                <aside class="search_box">
                    <h2 class="title_form">Lorem </h2>
                    <div class="form_search">

                        <form action="">

                            <div class="input-group rounded mb-3">
                                <input type="search" class="form-control rounded" placeholder="Search"
                                    aria-label="Search" aria-describedby="search-addon" />
                                <span class="input-group-text border-0" id="search-addon">
                                    <i class="bi bi-search"></i>
                                </span>
                            </div>

                            <div class="mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Region</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>

                              <div class="wrapper">
                                <div class="title_form" >
                                  <h2>Price Range</h2>
                                  <p>Use slider or enter min and max price</p>
                                </div>
                                <div class="price-input">
                                  <div class="field">
                                    <span>Min</span>
                                    <input type="number" class="input-min" value="2500">
                                  </div>
                                  <div class="separator">-</div>
                                  <div class="field">
                                    <span>Max</span>
                                    <input type="number" class="input-max" value="7500">
                                  </div>
                                </div>
                                <div class="slider">
                                  <div class="progress"></div>
                                </div>
                                <div class="range-input">
                                  <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                                  <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
                                </div>
                              </div>


                              <h2>Filter:</h2>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                    Default radio
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                  <label class="form-check-label" for="flexRadioDefault2">
                                    Default checked radio
                                  </label>
                                </div>
                        </form>
                    </div>
                </aside>

                <div class="col-8 ms-3">
                    <div class="box-location">
                        <div class="locationCity d-flex align-items-center">
                            <h2> Maputo : <span class="totalLocation ">{{$houses->total()}} </span>Houses</h2>
                            <div class="mapLocation">
                                <a href="#" class="map_link">
                                    <img src="{{asset('componets/images/Maps.png')}}">
                                    <p>See in Map</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="ms-3 mt-5">
                           @livewire('sort-by-component')
                    </div>
                    @livewire('house-component')
                </div>

            </section>
            {{-- search content ends --}}

            {{-- ================================ --}}
            {{-- cards content --}}
            {{-- ================================ --}}
            <div class="containe justify-content-between">
                <div class="titlehoses">
                    <h5 style="text-decoration: underline">{{ __('message.houses') }}</h5>
                </div>
                <div class="row">
                    @foreach ($houses as $house)
                        <?php $cover = explode('|', $house->images, -1); ?>
                        <div class="col-lg-3 col-sm-12 col-md-3 mb-4">
                            <a href="{{ url('/house', ['id' => $house->id]) }}">
                                <div class="card">
                                    <img src="{{ asset('images/houses/' . $house->path . '/' . $cover[0]) }}"
                                        class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $house->name }}</h5>
                                        <div class="row">
                                            <p class="card-text col text-start mb-0">{{ $house->price }} mzn</p>
                                            <p class="card-type col text-end">Project</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- ================================ --}}
            {{-- Cards content End --}}
            {{-- ================================ --}}
        </div>
        <div class="banner mt-5">
            <div class="container">
                <div class="row pt-5">
                    <div class="col">
                        <h3 class="text-light">{{ __('message.subscribe') }}</h3>


                    </div>
                    <div class="col">
                        <h3 class="text-light">Contactos</h3>
                    </div>
                    <div class="col">
                        <h3 class="text-light">Localizacao</h3>
                    </div>
                    {{-- <div class="col">
                        <h3 class="text-light">hhhhhh</h3>
                    </div> --}}
                </div>
            </div>
        </div>
    </main>
@endsection