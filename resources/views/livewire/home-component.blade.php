<div class="site-section site-section-sm bg-light">
    <div class="container">

      <div class="row mb-5">
        @foreach ($houses as $house)
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="property-entry h-100">
            <a href="property-details.html" class="property-thumbnail">
              <div class="offer-type-wrap">
                <span class="offer-type bg-danger">Sale</span>
                <span class="offer-type bg-success">Rent</span>
              </div>
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
            </a>
            <div class="p-4 property-body">
              <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
              {{-- <h2 class="property-title"><a href="property-details.html">625 S. Berendo St</a></h2> --}}
              <h2 class="property-title"><a href="property-details.html">{{$house->locations->city}}</a></h2>
              <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 625 S. Berendo St Unit 607 Los Angeles, CA 90005</span>
              <strong class="property-price text-primary mb-3 d-block text-success">${{$house->sale_price}}</strong>
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
