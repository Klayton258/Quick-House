@extends('layouts/layout_main')
@section('content')
    <main>
        <nav class="nav" style="background-color: var(--teal); padding-bottom: 0px; padding-top: 0px ">
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

        <section>
            <div class="row justify-content-between row-house">
{{--                -----------------------------------------------------}}
{{--                            HOUSE IMAGES--}}
{{--                -----------------------------------------------------}}
                <div class="house-images col-lg-7 col-md-12 col-sm-12">
                    <ul id="imageGallery">
                        <li data-thumb="{{asset('componets/images/img-4.jpg')}}" data-src="{{asset('componets/images/img-4.jpg')}}">
                            <img src="{{asset('componets/images/img-4.jpg')}}"/>
                        </li>
                        <li data-thumb="{{asset('componets/images/img-4.jpg')}}" data-src="{{asset('componets/images/img-6.jpg')}}">
                            <img src="{{asset('componets/images/img-4.jpg')}}" />
                        </li>
                        <li data-thumb="{{asset('componets/images/img-4.jpg')}}" data-src="{{asset('componets/images/img-5.jpg')}}">
                            <img src="{{asset('componets/images/img-4.jpg')}}" />
                        </li>
                        <li data-thumb="{{asset('componets/images/img-4.jpg')}}" data-src="{{asset('componets/images/img-3.jpeg')}}">
                            <img src="{{asset('componets/images/img-4.jpg')}}" />
                        </li>
                        <li data-thumb="{{asset('componets/images/img-4.jpg')}}" data-src="{{asset('componets/images/img-3.jpeg')}}">
                            <img src="{{asset('componets/images/img-4.jpg')}}" />
                        <li data-thumb="{{asset('componets/images/img-4.jpg')}}" data-src="{{asset('componets/images/img-3.jpeg')}}">
                            <img src="{{asset('componets/images/img-4.jpg')}}" />
                        </li>
                    </ul>

                    <div class="house-price col-lg-7 col-md-12 col-sm-12">
                        <a class="house-price-link" href="" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">
                            <div class="house-price-0 row">
                                <div class="house-price-1">100.000 Mzn</div>
                                <div class="house-price-2">Visit</div>
                            </div>
                            <span style="padding-top: 9px; display:flex; font-size: 11px; justify-content: center">click here to request a visit</span>
                        </div>
                    </a>
                </div>
                {{--                -----------------------------------------------------}}
                {{--                            HOUSE IMAGES--}}
                {{--                -----------------------------------------------------}}

                {{--                -----------------------------------------------------}}
                {{--                            HOUSE DESCRIPTION--}}
                {{--                -----------------------------------------------------}}
                <div class="house-description col-lg-5 col-md-12 col-sm-12 p-5">
                    <div class="house-type row">
                        <div class="house-type-1">Rent</div>
                        <div class="house-type-2"> House Type 5</div>
                    </div>

                    <div class="house-type-3 row justify-content-between">
                        <div class="house-rooms">
                            <div class="rooms">5</div>
                            <div class="rooms-title">Rooms</div>
                        </div>
                        <div class="house-rooms">
                            <div class="rooms">1</div>
                            <div class="rooms-title">Suit</div>
                        </div>
                    </div>
                    <div class="house-type-3 row justify-content-between">
                        <div class="house-rooms">
                            <div class="rooms">1</div>
                            <div class="rooms-title">Cozinha</div>
                        </div>
                        <div class="house-rooms">
                            <div class="rooms">2</div>
                            <div class="rooms-title">WC</div>
                        </div>
                    </div>
                    <div class="house-type-3 row justify-content-between">
                        <div class="house-rooms">
                            <div class="rooms">1</div>
                            <div class="rooms-title">Living room</div>
                        </div>
                        <div class="house-rooms">
                            <div class="rooms">2</div>
                            <div class="rooms-title">Garage</div>
                        </div>
                    </div>
                    <div class="house-type-4 row">
                        <div class="house-type-5">Loc</div>
                        <div class="house-type-6"> Bairro central B Av.Agostinho neto com a Resistencia</div>
                    </div>

                    <div class="house-textarea">
                        <p class="house-text-description">Description</p>
                        <textarea class="form-control" rows="9" cols="50" disabled>House in perfect conditions, visits can be marked above</textarea>
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
            <input type="datetime-local" class="form-control" name="visitdate" id="visitdate" required placeholder="select date">
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
