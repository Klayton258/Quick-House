@extends('layouts.layout_main')
@section('content')
    <main>
        <div>
            <div class="nav-background">
            <nav class="nav">
                <!--Brand-->
                <div class="logo">
                    <a href="{{url('/')}}">Quick House</a>
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
                        <li><a href="#">Regist</a></li>
                    </ul>
                </div>
            </nav>


                <div class="nav-title-begin">
                    <h1 class="rellax" data-rellax-speed="5">FIND YOUR HOUSE</h1>
                    <p class="rellax" data-rellax-speed="3">The right place for you and your family</p>
                    <div>
                        <button type="button" class="nav-button-begin rellax" data-rellax-speed="2"><span></span>contact</button>
                    </div>
                </div>
            </div>
        </div>
{{--<div class="selection-nav mt-2">--}}
{{--        <ul id="autoWidth" class="cs-hidden ms-lg-2 ms-sm-2 me-sm-2">--}}
{{--            <li class="item-a">--}}
{{--                <div class="btn select-item ms-2">casa T1</div>--}}
{{--            </li>--}}
{{--            <li class="item-b">--}}
{{--                <div class="btn select-item ms-2">casa T6</div>--}}
{{--            </li>--}}
{{--            <li class="item-c">--}}
{{--                <div class="btn select-item ms-2">casa T7</div>--}}
{{--            </li>--}}
{{--            <li class="item-d">--}}
{{--                <div class="btn select-item ms-2">casa T2</div>--}}
{{--            </li>--}}
{{--            <li class="item-e">--}}
{{--                <div class="btn select-item ms-2">casa T5</div>--}}
{{--            </li>--}}
{{--            <li class="item-f">--}}
{{--                <div class="btn select-item ms-2">casa T1</div>--}}
{{--            </li>--}}
{{--            <li class="item-g">--}}
{{--                <div class="btn select-item ms-2">casa T3</div>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--</div>--}}


{{--================================--}}
{{--  cards slide Beggin--}}
{{--================================--}}
        <ul id="autoWidth" class="cs-hidden mt-5 ms-lg-2 ms-sm-2 me-sm-2">
            <li class="item-a" alt="1">
                <a href="{{url('/house')}}">
                <div class="card card-slide">
                  <img src="{{asset('componets/images/navbar.jpg')}}" class="card-img-top card-image">
{{--                   <div class="hover-btn">--}}
                       <div class="card-textt">
                           Casa Tipo: 1 <br>
                           Garagem: 2 carros <br>
                           Bairro:  Kumbeza, Rua da... <br>
{{--                       <div class="btn card-btn">view</div>--}}
{{--                       </div>--}}
                   </div>
                </div>
              </a>
            </li>
            <li class="item-b">
                <div class="card card-slide">
                    <img src="{{asset('componets/images/navbar.jpg')}}" class="card-img-top card-image" alt="...">

                </div>
            </li>
            <li class="item-c">
                <div class="card card-slide">
                    <img src="{{asset('componets/images/navbar.jpg')}}" class="card-img-top card-image" alt="...">

                </div>
            </li>
            <li class="item-d">
                <div class="card card-slide">
                    <img src="{{asset('componets/images/navbar.jpg')}}" class="card-img-top card-image" alt="...">

                </div>
            </li>
            <li class="item-e">
                <div class="card card-slide">
                    <img src="{{asset('componets/images/navbar.jpg')}}" class="card-img-top card-image" alt="...">

                </div>
            </li>
            <li class="item-f">
                <div class="card card-slide">
                    <img src="{{asset('componets/images/navbar.jpg')}}" class="card-img-top card-image" alt="...">

                </div>
            </li>
            <li class="item-g">
                <div class="card card-slide">
                    <img src="{{asset('componets/images/navbar.jpg')}}" class="card-img-top card-image" alt="...">

                </div>
            </li>
       </ul>
{{--================================--}}
{{--  cards slide Beggin--}}
{{--================================--}}

{{--================================--}}
{{--  cards content --}}
{{--================================--}}
<div class="containe justify-content-between">
    <div class="row">
        <div class="col-lg-3 col-sm-12 col-md-3 mb-4">
            <a href="{{url('/house')}}">
            <div class="card">
                <img src="{{asset('componets/images/navbar.jpg')}}" class="card-img-top" alt="...">
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
            <div class="card">
                <img src="{{asset('componets/images/navbar.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Casa T3</h5>
                    <div class="row">
                        <p class="card-text col text-start mb-0">50.000 mzn</p>
                        <p class="card-type col text-end">Rent</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12 col-md-3 mb-4">
            <div class="card">
                <img src="{{asset('componets/images/navbar.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Casa T6</h5>
                    <div class="row">
                        <p class="card-text col text-start mb-0">4.000.000 mzn</p>
                        <p class="card-type col text-end">Sell</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12 col-md-3 mb-4">
            <div class="card">
                <img src="{{asset('componets/images/navbar.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Casa T2</h5>
                    <div class="row">
                        <p class="card-text col text-start mb-0">19.000 mzn</p>
                        <p class="card-type col text-end">Project</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12 col-md-3 mb-4">
            <div class="card">
                <img src="{{asset('componets/images/navbar.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Casa T3</h5>
                    <div class="row">
                        <p class="card-text col text-start mb-0">50.000 mzn</p>
                        <p class="card-type col text-end">Rent</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12 col-md-3 mb-4">
            <div class="card">
                <img src="{{asset('componets/images/navbar.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Casa T6</h5>
                    <div class="row">
                        <p class="card-text col text-start mb-0">4.000.000 mzn</p>
                        <p class="card-type col text-end">Sell</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12 col-md-3 mb-4">
            <div class="card">
                <img src="{{asset('componets/images/navbar.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Casa T6</h5>
                    <div class="row">
                        <p class="card-text col text-start mb-0">4.000.000 mzn</p>
                        <p class="card-type col text-end">Sell</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12 col-md-3 mb-4">
            <div class="card">
                <img src="{{asset('componets/images/navbar.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Casa T2</h5>
                    <div class="row">
                        <p class="card-text col text-start mb-0">19.000 mzn</p>
                        <p class="card-type col text-end">Project</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--================================--}}
{{--  Cards content End--}}
{{--================================--}}

        <div class="banner">
        </div>
    </main>
@endsection
