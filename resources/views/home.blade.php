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
                            <li><a href="#">{{__("message.contact")}}</a></li>
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
                    <h1 class="rellax" data-rellax-speed="5">{{__('message.welcome')}}</h1>
                    <p class="rellax" data-rellax-speed="3">{{__('message.slogan')}}</p>
                    <div>
                        <button type="button" class="nav-button-begin rellax"
                            data-rellax-speed="2"><span></span> {{__('message.contact')}}</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- ================================ --}}
        {{-- cards slide Beggin --}}
        {{-- ================================ --}}
        <ul id="autoWidth" class="cs-hidden mt-5 ms-lg-2 ms-sm-2 me-sm-2">
            @foreach ($houses as $house)
                <?php $image = explode('|', $house->images); ?>
                <li class="item-a" alt="1">
                    <a href="{{ url('/house', ['id' => $house->id]) }}">
                        <div class="card card-slide">
                            <img src="{{ asset('images/houses/' . $house->path . '/' . $image[0]) }}"
                                class="card-img-top card-image">
                            {{-- <div class="hover-btn"> --}}
                            <div class="card-textt">
                                {{ $house->name }} <br>
                                Garagem: {{ $house->garage }} carros <br>
                                Bairro: {{ $house->location }} <br>
                                {{-- <div class="btn card-btn">view</div> --}}
                                {{-- </div> --}}
                            </div>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>

        <div class="container mt-5 conthome">
            <div class="row rowcontenthome">
                <div class="col imageshome">
                    <img class="imghome1" src="{{ asset('componets/images/img-4.jpg') }}">
                    <img class="imghome2" src="{{ asset('componets/images/img-4.jpg') }}">
                </div>

                <div class="col descriphome">
                    <h1 class="mt-5 mb-4">{{__("message.text_besthome")}}</h1>
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
                {{-- List houses  --}}
                <div>
                    @livewire('search-component')
                </div>

                @livewire('list-houses-component')
                {{-- end List houses  --}}
            {{-- ================================ --}}
            {{-- cards content --}}
            {{-- ================================ --}}
            <div class="containe justify-content-between">
                <div class="titlehoses">
                    <h5 style="text-decoration: underline">{{__("message.houses")}}</h5>
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
                                            <p class="card-text col text-start mb-0">
                                                {{-- {{ $house->price }} mzn --}}

                                                <script>
                                                    document.write(currencyFormat({{ $house->price }}));
                                                </script>
                                            </p>
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
                        <h3 class="text-light">{{__("message.subscribe")}}</h3>


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
