<div class="site-section site-section-sm pb-0">
    <div class="container">
      <div class="row">
        <form class="form-search col-md-12" style="margin-top: -100px;">
          <div class="row  align-items-end">
            <div class="col-md-4">
              <label for="list-types">Listing Types</label>
              <div class="select-wrap">
                <span class="icon icon-arrow_drop_down"></span>
                <select name="list-types" id="list-types" class="form-control d-block rounded-0">
                 <option value="all">All</option>
                  @foreach ($houseTypes as $houseType)
                  <option value="{{$houseType->id}}">{{$houseType->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <label for="offer-types">Offer Type</label>
              <div class="select-wrap">
                <span class="icon icon-arrow_drop_down"></span>
                <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                    <option value="all">All</option>
                    @foreach ($types as $type)
                    <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <label for="select-city">Select City</label>
              <div class="select-wrap">
                <span class="icon icon-arrow_drop_down"></span>
                <select name="select-city" id="select-city" class="form-control d-block rounded-0">
                    <option value="all">All</option>
                    @foreach ($locations as $location)
                    <option value="{{$location->id}}">{{$location->city}}</option>
                    @endforeach
                </select>
              </div>
            </div>
            {{-- <div class="col-md-3">
              <input type="submit" class="btn btn-success text-white btn-block rounded-0" value="Search">
            </div> --}}
          </div>
        </form>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="view-options bg-white py-3 px-3 d-md-flex align-items-center">
            <div class="mr-auto">
              {{-- <a href="index.html" class="icon-view view-module active"><span class="icon-view_module"></span></a>
              <a href="view-list.html" class="icon-view view-list"><span class="icon-view_list"></span></a> --}}

            </div>
            <div class="ml-auto d-flex align-items-center">
              <div>
                <a href="#" class="view-list px-3 border-right active">All</a>
                <a href="#" class="view-list px-3 border-right">Rent</a>
                <a href="#" class="view-list px-3">Sale</a>
              </div>


              <div class="select-wrap">
                <span class="icon icon-arrow_drop_down"></span>
                <select class="form-control form-control-sm d-block rounded-0">
                  <option value="">Sort by</option>
                  <option value="">Price Ascending</option>
                  <option value="">Price Descending</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
