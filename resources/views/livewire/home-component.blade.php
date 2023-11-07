<div>
    <div class="col-md">
        <div class="view-options bg-white py-3 px-3 d-md-flex align-items-center">
        <div class="mr-auto">
            {{-- <a href="index.html" class="icon-view view-module active"><span class="icon-view_module"></span></a>
            <a href="view-list.html" class="icon-view view-list"><span class="icon-view_list"></span></a> --}}

        </div>
        <div class="ml-auto d-flex align-items-center">
            <div>
            <a href="#" class="view-list px-3 border-right active"  wire:click.prevent="filterByType('All')">All</a>
            @foreach ($types as $type)
            <a href="#" class="view-list px-3 border-right " wire:click.prevent="filterByType({{ $type->id }})">{{$type->name}}</a>
            @endforeach
            </div>
            <div class="select-wrap">
            <span class="icon icon-arrow_drop_down"></span>
            <select class="form-control form-control-sm d-block rounded-0 pr-5" wire:model='orderBy' wire:change="changeOrderBy($event.target.value)">
                <option  selected>Sort by</option>
                <option value="Price Ascending">Price Ascending</option>
                <option value="Price Descending">Price Descending</option>
            </select>
            </div>
        </div>
        </div>
    </div>

    <div class="site-section site-section-sm bg-light">
        <div class="container">

          <div class="row mb-5">
            @foreach ($houses as $house)
            {{-- {{dd( $house->type_id);}} --}}
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="property-entry h-100">
                <a href="/details" class="property-thumbnail">
                  <div class="offer-type-wrap">
                  @foreach ($house->types as $type)
                  @if ($type->name =="Rent")
                    <span class="offer-type bg-success">{{ $type->name }}</span>
                    @elseif ($type->name =="Sale")
                      <span class="offer-type bg-danger">{{ $type->name }}</span>
                  @endif
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
          {{$houses->links('pagination')}}
        </div>
      </div>
</div>
