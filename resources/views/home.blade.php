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
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Info</a></li>
                            <li><a href="#">Subscribe</a></li>
                        </ul>
                    </div>
                </nav>


                <div class="nav-title-begin">
                    <h1 class="rellax" data-rellax-speed="5">FIND YOUR HOUSE</h1>
                    <p class="rellax" data-rellax-speed="3">The right place for you and your family</p>
                    <div>
                        <button type="button" class="nav-button-begin rellax"
                            data-rellax-speed="2"><span></span>contact</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="selection-nav mt-2">
        <ul id="autoWidth" class="cs-hidden ms-lg-2 ms-sm-2 me-sm-2">
        <li class="item-a">
        <div class="btn select-item ms-2">casa T1</div>
        </li>
        <li class="item-b">
        <div class="btn select-item ms-2">casa T6</div>
        </li>
        <li class="item-c">
        <div class="btn select-item ms-2">casa T7</div>
        </li>
        <li class="item-d">
        <div class="btn select-item ms-2">casa T2</div>
        </li>
        <li class="item-e">
        <div class="btn select-item ms-2">casa T5</div>
        </li>
        <li class="item-f">
        <div class="btn select-item ms-2">casa T1</div>
        </li>
        <li class="item-g">
        <div class="btn select-item ms-2">casa T3</div>
        </li>
         </ul>
         </div> --}}


        {{-- ================================ --}}
        {{-- cards slide Beggin --}}
        {{-- ================================ --}}
        <ul id="autoWidth" class="cs-hidden mt-5 ms-lg-2 ms-sm-2 me-sm-2">
            <li class="item-a" alt="1">
                <a href="{{ url('/house') }}">
                    <div class="card card-slide">
                        <img src="{{ asset('componets/images/navbar.jpg') }}" class="card-img-top card-image">
                        {{-- <div class="hover-btn"> --}}
                        <div class="card-textt">
                            Casa Tipo: 1 <br>
                            Garagem: 2 carros <br>
                            Bairro: Kumbeza, Rua da... <br>
                            {{-- <div class="btn card-btn">view</div> --}}
                            {{-- </div> --}}
                        </div>
                    </div>
                </a>
            </li>

            <li class="item-b">
                <div class="card card-slide">
                    <img src="{{ asset('componets/images/navbar.jpg') }}" class="card-img-top card-image" alt="...">

                </div>
            </li>
            <li class="item-c">
                <div class="card card-slide">
                    <img src="{{ asset('componets/images/navbar.jpg') }}" class="card-img-top card-image" alt="...">

                </div>
            </li>
            <li class="item-d">
                <div class="card card-slide">
                    <img src="{{ asset('componets/images/navbar.jpg') }}" class="card-img-top card-image" alt="...">

                </div>
            </li>
            <li class="item-e">
                <div class="card card-slide">
                    <img src="{{ asset('componets/images/navbar.jpg') }}" class="card-img-top card-image" alt="...">

                </div>
            </li>
            <li class="item-f">
                <div class="card card-slide">
                    <img src="{{ asset('componets/images/navbar.jpg') }}" class="card-img-top card-image" alt="...">

                </div>
            </li>
            <li class="item-g">
                <div class="card card-slide">
                    <img src="{{ asset('componets/images/navbar.jpg') }}" class="card-img-top card-image" alt="...">

                </div>
            </li>
        </ul>
        {{-- ================================ --}}
        {{-- cards slide Beggin --}}
        {{-- ================================ --}}


        <div class="container mt-5 conthome">
            <div class="row rowcontenthome">
                <div class="col imageshome">
                    <img class="imghome1" src="{{ asset('componets/images/img-4.jpg') }}">
                    <img class="imghome2" src="{{ asset('componets/images/img-4.jpg') }}">
                </div>

                <div class="col descriphome">
                    <h1 class="mt-5 mb-4">Best Home For You</h1>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est sed quis similique libero perferendis illum
                    expedita consequuntur veniam totam aliquam tempora optio ea veritatis aperiam accusantium, deserunt
                    tenetur mollitia praesentium?
                </div>
            </div>

            <div class="marginTotop">
            </div>



            <div class="carrouselhome">
                <div class="newhomestitle"> <h4>TOP NEW</h4></div>
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
                        <div class="carousel-item active">
                            <img src="{{ asset('componets/images/img-3.jpeg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('componets/images/img-2.jpeg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('componets/images/img-6.jpg') }}" class="d-block w-100" alt="...">
                        </div>
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

            {{-- ================================ --}}
            {{-- cards content --}}
            {{-- ================================ --}}
            <div class="containe justify-content-between">
                <div class="titlehoses"><h5 style="text-decoration: underline">Houses</h5></div>
                <div class="row">
                    <div class="col-lg-3 col-sm-12 col-md-3 mb-4">
                        <a href="{{ url('/house') }}">
                            <div class="card">
                                <img src="{{ asset('componets/images/navbar.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Casa T2</h5>
                                    <div class="row">
                                        <p class="card-text col text-start mb-0">19.000 mzn</p>
                                        <p class="card-type col text-end">Project</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-3 mb-4">
                        <a href="{{ url('/house') }}">
                        <div class="card">
                            <img src="{{ asset('componets/images/navbar.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Casa T3</h5>
                                <div class="row">
                                    <p class="card-text col text-start mb-0">50.000 mzn</p>
                                    <p class="card-type col text-end">Rent</p>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-3 mb-4">
                        <a href="{{ url('/house') }}">
                        <div class="card">
                            <img src="{{ asset('componets/images/navbar.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Casa T6</h5>
                                <div class="row">
                                    <p class="card-text col text-start mb-0">4.000.000 mzn</p>
                                    <p class="card-type col text-end">Sell</p>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-3 mb-4">
                        <a href="{{ url('/house') }}">
                        <div class="card">
                            <img src="{{ asset('componets/images/navbar.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Casa T2</h5>
                                <div class="row">
                                    <p class="card-text col text-start mb-0">19.000 mzn</p>
                                    <p class="card-type col text-end">Project</p>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-3 mb-4">
                        <a href="{{ url('/house') }}">
                        <div class="card">
                            <img src="{{ asset('componets/images/navbar.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Casa T3</h5>
                                <div class="row">
                                    <p class="card-text col text-start mb-0">50.000 mzn</p>
                                    <p class="card-type col text-end">Rent</p>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-3 mb-4">
                        <a href="{{ url('/house') }}">
                        <div class="card">
                            <img src="{{ asset('componets/images/navbar.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Casa T6</h5>
                                <div class="row">
                                    <p class="card-text col text-start mb-0">4.000.000 mzn</p>
                                    <p class="card-type col text-end">Sell</p>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-3 mb-4">
                        <a href="{{ url('/house') }}">
                        <div class="card">
                            <img src="{{ asset('componets/images/navbar.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Casa T6</h5>
                                <div class="row">
                                    <p class="card-text col text-start mb-0">4.000.000 mzn</p>
                                    <p class="card-type col text-end">Sell</p>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-3 mb-4">
                        <a href="{{ url('/house') }}">
                        <div class="card">
                            <img src="{{ asset('componets/images/navbar.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Casa T2</h5>
                                <div class="row">
                                    <p class="card-text col text-start mb-0">19.000 mzn</p>
                                    <p class="card-type col text-end">Project</p>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
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
                        <h3 class="text-light">Subscribe</h3>
                    </div>
                    <div class="col">
                        <h3 class="text-light">HERE 2</h3>
                    </div>
                    <div class="col">
                        <h3 class="text-light">HERE 3</h3>
                    </div>
                    <div class="col">
                        <h3 class="text-light">HERE 4</h3>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
