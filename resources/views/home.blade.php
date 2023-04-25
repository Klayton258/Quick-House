@extends('layouts.layout_main')
@section('content')
    <main>
        @include('layouts.main_layout')

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
                    <h1 class="mt-5 mb-4">{{ __('message.text_besthome') }}</h1>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est sed quis similique libero perferendis illum
                    expedita consequuntur veniam totam aliquam tempora optio ea veritatis aperiam accusantium, deserunt
                    tenetur mollitia praesentium?
                </div>
            </div>

            <div class="marginTotop">
            </div>


            @if (0 < sizeof($outdoors))
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
                        @foreach ($houses as $house)
                        <img src="{{asset('componets/images/img-1.jpg') }}" class="swiper-slide">
                        @endforeach

                        {{-- <img src="images/gallery-img-2.webp" class="swiper-slide" alt="">
                        <img src="images/gallery-img-3.webp" class="swiper-slide" alt="">
                        <img src="images/gallery-img-4.webp" class="swiper-slide" alt="">
                        <img src="images/gallery-img-5.webp" class="swiper-slide" alt="">
                        <img src="roimages/gallery-img-6.webp" class="swiper-slide" alt=""> --}}
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </section>

            {{-- search content starts --}}
            <section class="box_container">
                <aside class="search_box">
                    <h2 class="title_form">Search </h2>
                    <div class="form_search">

                        @livewire('header-search-component')

                        <form action="">

                            <div class="mb-3">
                                <select class="form-select form-select-lg" aria-label="Default select example">
                                    <option selected>Region</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            {{-- <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div> --}}

                            <div class="wrapper">
                                <div class="title_form">
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
                                    <input type="range" class="range-min" min="0" max="10000"
                                        value="2500" step="100">
                                    <input type="range" class="range-max" min="0" max="10000"
                                        value="7500" step="100">
                                </div>
                            </div>


                            <h2>Filter:</h2>
                            <div class="form-controll form-select-lg">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Default radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2" checked>
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
                            <h2> Maputo : <span class="totalLocation ">{{ $houses->total() }} </span>Houses</h2>
                            {{-- <div class="mapLocation">
                                <a href="#" class="map_link">
                                    <img src="{{ asset('componets/images/Maps.png') }}">
                                    <p>See in Map</p>
                                </a>
                            </div> --}}
                        </div>
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
      @livewire('footer-component')
    </main>
@endsection
