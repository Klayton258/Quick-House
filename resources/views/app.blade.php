@extends('layout')
@section('title', 'Home')
@section('content')
@include('components.nav')

    <div class="slide-one-item home-slider owl-carousel">
        <div class="site-blocks-cover overlay" style="background-image: url({{ asset('images/hero_bg_1.jpg') }});"
            data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-10">
                        <span class="d-inline-block bg-success text-white px-3 mb-3 property-offer-type rounded">For
                            Rent</span>
                        <h1 class="mb-2">871 Crenshaw Blvd</h1>
                        <p class="mb-5"><strong class="h2 text-success font-weight-bold primary-color">$2,250,500</strong></p>
                        <a href="/details" class="nav-button-begin py-3 px-5 rellax"
                            data-rellax-speed="2"><span></span> See Details</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-10">
                        <span class="d-inline-block bg-danger text-white px-3 mb-3 property-offer-type rounded">For
                            Sale</span>
                        <h1 class="mb-2">625 S. Berendo St</h1>
                        <p class="mb-5"><strong class="h2 text-success font-weight-bold primary-color">$1,000,500</strong></p>
                        <a href="/details" class="nav-button-begin py-3 px-5 rellax"
                            data-rellax-speed="2"><span></span> See Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @livewire('header-search-component')
    @livewire('home-component')

   @include('components.footer')

    </div>

@endsection
