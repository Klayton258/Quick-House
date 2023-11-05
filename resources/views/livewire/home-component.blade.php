<div class="site-section site-section-sm bg-light">
    <div class="container">

      <div class="row mb-5">
        @foreach ($houses as $house)
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="property-entry h-100">
            <a href="/details" class="property-thumbnail">
              <div class="offer-type-wrap">
              @foreach ($house->types as $type)
                <span class="offer-type bg-danger">{{ $type->name }}</span>
              @endforeach
              </div>
              <img src="{{ Voyager::image( $house->getThumbnail(json_decode($house->images)[2], 'small') ) }}" alt="Image" class="img-fluid">
            </a>
            <div class="p-4 property-body">
              {{-- <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a> --}}

              {{-- <h2 class="property-title"><a href="property-details.html"></a></h2> --}}

              <h2 class="property-title"><a href="/details">{{$house->name}}</a></h2>
              <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span>{{ $house->short_description }}</span>
              <strong class="property-price mb-3 d-block">${{ number_format($house->sale_price, 2) }}</strong>
              <ul class="property-specs-wrap mb-3 mb-lg-0">
                <li>
                  <span class="property-specs">Beds</span>
                  <span class="property-specs-number">{{$house->rooms}} <sup>+</sup></span>

                </li>
                <li>
                  <span class="property-specs">Baths</span>
                  <span class="property-specs-number">{{$house->wc}}</span>

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
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="site-pagination">
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <span>...</span>
            <a href="#">10</a>
          </div>
        </div>
      </div>

    </div>
  </div>
