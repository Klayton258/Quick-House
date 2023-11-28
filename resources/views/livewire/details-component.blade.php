<div>
    <div class="site-section site-section-sm" style="padding-top: 7em !important">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div>
                        <div class="slide-one-item home-slider owl-carousel">
                            @foreach (json_decode($house->images) as $image)
                                <img src="{{ Voyager::image( $image, 'small') }}" alt="Image" class="img-fluid">
                            @endforeach
                        </div>
                    </div>
                    <div class="bg-white property-body border-bottom border-left border-right">
                        <h2 class="property-title">{{$house->name}}</h2>
                        <div class="row mb-5">
                            <div class="col-md-6">
                                 @if ($house->sale_price !=null)
                                 <p></p>
                                    <span class="h5 mb-2 text-black">Sale Price:</span> <strong class="property-price">${{ number_format($house->sale_price, 2) }}</strong>
                                 </p>
                                 @endif
                                 @if ($house->rent_price !=null)
                                 <p>
                                    <span class="h5 mb-2 text-black ">Rent Price:</span>  <strong class="property-price">${{ number_format($house->rent_price, 2) }}</strong>
                                 </p>
                                 @endif
                            </div>
                            <div class="col-md-6">
                                <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                                    <li>
                                        <span class="property-specs">Beds</span>
                                        <span class="property-specs-number">{{$house->wc}} <sup>+</sup></span>

                                    </li>
                                    <li>
                                        <span class="property-specs">Baths</span>
                                        <span class="property-specs-number">{{$house->rooms}}</span>

                                    </li>
                                    {{-- <li>
                                        <span class="property-specs">SQ FT</span>
                                        <span class="property-specs-number">7,000</span>

                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                                <span class="d-inline-block text-black mb-0 caption-text">Home Type</span>
                                @foreach ($house->types as $type)
                                @if ($type->name =="Rent")
                                <strong class="d-block text-success">{{ $type->name }}</strong>
                                  @elseif ($type->name =="Sale")
                                  <strong class="d-block  text-danger">{{ $type->name }}</strong>
                                  @elseif ($type->name =="Project")
                                  <strong class="d-block  text-primary">{{ $type->name }}</strong>
                                @endif
                                @endforeach
                            </div>
                            <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                                <span class="d-inline-block text-black mb-0 caption-text">Year Built</span>
                                <strong class="d-block">2018</strong>
                            </div>
                            <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                                <span class="d-inline-block text-black mb-0 caption-text">Price/Sqft</span>
                                <strong class="d-block">$520</strong>
                            </div>
                        </div>
                        <h2 class="h4 text-black">More Info</h2>
                            {{$house->description}}
                        <div class="row no-gutters mt-5">
                            <div class="col-12">
                                <h2 class="h4 text-black mb-3">Gallery</h2>
                            </div>
                            @foreach (json_decode($house->images) as $image)
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <a href="{{ Voyager::image($image) }}" class="image-popup gal-item">
                                        <img src="{{ Voyager::image($image, 'small') }}" alt="Image" class="img-fluid">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">

                    <div class="bg-white widget border rounded">

                        <h3 class="h4 text-black widget-title mb-3">Contact Agent</h3>
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get("message")}}
                        </div>
                        @endif
                        @if (Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{Session::get("error")}}
                        </div>
                        @endif
                        <form action="" class="form-contact-agent" wire:submit.prevent='storeMessage'>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" class="form-control" wire:model='name'>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control" wire:model='email'>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" class="form-control" wire:model='phone'>
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control" placeholder="Leave a message here" wire:model='message' style="height: 100px"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" id="phone" class="btn btn-primary" value="Send Message">
                            </div>
                        </form>
                    </div>

                    {{-- <div class="bg-white widget border rounded">
                        <h3 class="h4 text-black widget-title mb-3">Paragraph</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit qui explicabo, libero nam,
                            saepe eligendi. Molestias maiores illum error rerum. Exercitationem ullam saepe, minus,
                            reiciendis ducimus quis. Illo, quisquam, veritatis.</p>
                    </div> --}}

                </div>

            </div>
        </div>
    </div>

    <div class="site-section site-section-sm bg-light">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="site-section-title mb-5">
                        <h2>Related Properties</h2>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                @foreach ($relatedHouses as $relatedHouse)
                {{-- {{dd( $house->type_id);}} --}}
                <div class="col-md-6 col-lg-4 mb-4">
                  <div class="property-entry h-100">
                    <a href="{{route('house.details',['id'=>Crypt::encrypt($relatedHouse->id)])}}" class="property-thumbnail">
                      <div class="offer-type-wrap">
                      @foreach ($relatedHouse->types as $type)
                      @if ($type->name =="Rent")
                        <span class="offer-type bg-success">{{ $type->name }}</span>
                        @elseif ($type->name =="Sale")
                          <span class="offer-type bg-danger">{{ $type->name }}</span>
                          @elseif ($type->name =="Project")
                          <span class="offer-type bg-primary">{{ $type->name }}</span>
                      @endif
                      @endforeach
                      </div>
                      <img src="{{ Voyager::image( $relatedHouse->getThumbnail(json_decode($relatedHouse->images)[2], 'small') ) }}" alt="Image" class="img-fluid">
                    </a>
                    <div class="p-4 property-body">
                      {{-- <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a> --}}

                      {{-- <h2 class="property-title"><a href="property-details.html"></a></h2> --}}

                      <h2 class="property-title"><a href="/details">{{$relatedHouse->name}}</a></h2>
                      <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span>{{ $relatedHouse->short_description }}</span>
                      @if ($relatedHouse->sale_price !=null)
                      <strong class="property-price mb-3 d-block">${{ number_format($relatedHouse->sale_price, 2) }}</strong>
                      @else
                      <strong class="property-price mb-3 d-block">${{ number_format($relatedHouse->rent_price, 2) }}</strong>
                      @endif
                      <ul class="property-specs-wrap mb-3 mb-lg-0">
                        <li>
                          <span class="property-specs">Beds</span>
                          <span class="property-specs-number">{{$relatedHouse->rooms}} <sup>+</sup></span>

                        </li>
                        <li>
                          <span class="property-specs">Baths</span>
                          <span class="property-specs-number">{{$relatedHouse->wc}}</span>

                        </li>
                        <li>
                          <span class="property-specs">SQ FT</span>
                          <span class="property-specs-number">7,000</span>

                        </li>
                      </ul>

                    </div>
                  </div>
                </div>
                @endforeach
            </div>

        </div>


    </div>
</div>
