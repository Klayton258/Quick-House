<?php
 $images = explode('|', $house[0]->images);
?>

@extends('layouts/layout_main')
@section('content')
    <main>
        <nav class="nav mb-5" style="background-color: var(--teal); padding-bottom: 0px; padding-top: 0px ">
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
                    <li><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="@getbootstrap">Subscribe</a></li>
                </ul>
            </div>
        </nav>

        {{-- <section id='banner' class="mb-5">
            <div id="bg_house_banner">
                <img src="{{asset('images/houses/'.$house[0]->path.'/'.$images[0])}}"/>
            </div>
        </section> --}}

        <section>
            <div class="row justify-content-between row-house mt-5">
{{--                -----------------------------------------------------}}
{{--                            HOUSE IMAGES--}}
{{--                -----------------------------------------------------}}
                <div class="house-box-container">
                    <div class="house-images">
                        <div class="box-house-image">
                            <ul id="imageGallery">
                                @foreach ( array_slice($images,0,count($images)-1 ) as $image)
                                <li data-thumb="{{asset('images/houses/'.$house[0]->path.'/'.$image)}}" data-src="{{asset('images/houses/'.$house[0]->path.'/'.$image)}}">
                                    <img src="{{asset('images/houses/'.$house[0]->path.'/'.$image)}}"/>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="house-price col-lg-5 col-md-8 ">
                            <a class="house-price-link" href="" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">
                                <div class="house-price-0 row">
                                    <div class="house-price-1">
                                        ${{
                                            number_format($house[0]->price, 2);
                                        }}
                                    </div>
                                    <div class="house-price-2">Visit</div>
                                </div>
                                <span style="padding-top: 9px; display:flex; font-size: 12px; justify-content: center; font-weight: 500">click here to request a visit</span>
                            </div>
                        </a>
                    </div>

                {{--                -----------------------------------------------------}}
                {{--                            HOUSE IMAGES--}}
                {{--                -----------------------------------------------------}}

                {{--                -----------------------------------------------------}}
                {{--                            HOUSE DESCRIPTION--}}
                {{--                -----------------------------------------------------}}

                    <div class="house-description col-lg-3">
                        <div class="house-type row">
                            <div class="house-type-1">Rent {{$house[0]->type_id}}</div>
                            <div class="house-type-2">{{$house[0]->name}}</div>
                        </div>
                        <div class="house-type-3 row justify-content-between">
                            <div class="house-rooms">
                                <div class="rooms">{{$house[0]->rooms}}</div>
                                <div class="rooms-title">Rooms</div>
                            </div>
                            <div class="house-rooms">
                                <div class="rooms">{{$house[0]->suit}}</div>
                                <div class="rooms-title">Suit</div>
                            </div>
                        </div>
                        <div class="house-type-3 row justify-content-between">
                            <div class="house-rooms">
                                <div class="rooms">{{$house[0]->kitchen}}</div>
                                <div class="rooms-title">Kitchen</div>
                            </div>
                            <div class="house-rooms">
                                <div class="rooms">{{$house[0]->wc}}</div>
                                <div class="rooms-title">WC</div>
                            </div>
                        </div>
                        <div class="house-type-3 row justify-content-between">
                            <div class="house-rooms">
                                <div class="rooms">{{$house[0]->living_room}}</div>
                                <div class="rooms-title">Living room</div>
                            </div>
                            <div class="house-rooms">
                                <div class="rooms">{{$house[0]->garage}}</div>
                                <div class="rooms-title">Garage</div>
                            </div>
                        </div>
                        <div class="house-type-4 row">
                            <div class="house-type-5">Loc</div>
                            <div class="house-type-6"> {{$house[0]->location}}</div>
                        </div>
                        <div class="house-textarea">
                            <p class="house-text-description">Description</p>
                            <textarea class="form-control" rows="9" cols="50" disabled>{{$house[0]->description}}</textarea>
                        </div>
                    </div>
                </div>
                {{--                -----------------------------------------------------}}
                {{--                            HOUSE DESCRIPTION--}}
                {{--                -----------------------------------------------------}}
            </div>
        </section>

        <section class="house-sugestions">
            <div class="sugetions-text">Sugetions</div>
            <div class="row sugetions-row">
                <ul id="autoWidth" class="cs-hidden mt-5 ms-lg-2 ms-sm-2 me-sm-2">
                    <li class="item-a" alt="1">
                        <a href="{{url('/house')}}">
                            <div class="card card-slide">
                                <img src="{{asset('componets/images/navbar.jpg')}}" class="card-img-top card-image">
                                <div class="card-textt">
                                    Casa Tipo: 1 <br>
                                    Garagem: 2 carros <br>
                                    Bairro:  Kumbeza, Rua da... <br>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="item-b">
                        <a href="{{url('/house')}}">
                        <div class="card card-slide">
                            <img src="{{asset('componets/images/navbar.jpg')}}" class="card-img-top card-image" alt="...">

                        </div>
                        </a>
                    </li>
                    <li class="item-c">
                        <a href="{{url('/house')}}">
                        <div class="card card-slide">
                            <img src="{{asset('componets/images/navbar.jpg')}}" class="card-img-top card-image" alt="...">
                        </div>
                        </a>
                    </li>
                    <li class="item-d">
                        <a href="{{url('/house')}}">
                        <div class="card card-slide">
                            <img src="{{asset('componets/images/navbar.jpg')}}" class="card-img-top card-image" alt="...">
                        </div>
                        </a>
                    </li>
                    <li class="item-e">
                        <a href="{{url('/house')}}">
                        <div class="card card-slide">
                            <img src="{{asset('componets/images/navbar.jpg')}}" class="card-img-top card-image" alt="...">
                        </div>
                        </a>
                    </li>
                </ul>
            </div>
        </section>



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Request Visit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ url('/house') }}">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name Complete:</label>
            <input type="text" class="form-control" name="name" id="name" required>
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="email" class="form-control" name="email" id="email" required>
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Contact:</label>
            <input type="tel" class="form-control" name="contact" id="contact" required>
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Visit Date:</label>
            <input type="datetime-local" id="timesbtn" data-visits="{{$house[0]->visit_times}}" class="form-control" name="visitdate" required placeholder="select date">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel</button>
            <button type="submit" class="btn btn-primary">send</button>
        </div>
    </form>
    </div>
  </div>
</div>



<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog">
      <div class="modal-content" style="background-color: #8b8b8b">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Subscribe</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Name Complete:</label>
              <input type="text" class="form-control" name="subscibername" id="name" required>
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Email:</label>
              <input type="email" class="form-control" name="subsciberemail" id="email" required>
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Contact:</label>
              <input type="tel" class="form-control" name="subscibercontact" id="contact" required>
            </div>
            <div class="row">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Femenine
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  Male
                </label>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel</button>
          <button type="button" class="btn btn-primary">subscribe</button>
        </div>
      </div>
    </div>
  </div>

</main>

@endsection
