<div>

    <div class="searchContent">
       <form action="">
        <div class="row  align-items-center searchBox">
            <div class="col-3">
                <label for="">Rooms</label>
                <select class="form-select form-select-lg px-2" aria-label="Default select example" wire:model="selectedRooms">

                  <option value="All" selected>All</option>
                @foreach ($rooms as $room)
                   <option value=" {{ $room}}">
                       {{ $room}}
                   </option>
                @endforeach
                  </select>
            </div>
            <div class="col-3">
                <label for="">Price</label>
                <select class="form-select form-select-lg  px-2" aria-label="Default select example" wire:model="orderBy">
                    <option value="Default Sorting" selected>Default Sorting</option>
                    <option value="Low to High">Low to High</option>
                    <option value="High to Low"> High to Low</option>
                  </select>
            </div>
            <div class="col-3">
                <label for="">Type</label>
                <select class="form-select form-select-lg  px-2" aria-label="Default select example" wire:model="selectedTypes">
                    <option selected value="All">All</option>
                @foreach ($types as $typeId => $typeName)
                    <option value="{{ $typeId}}">
                        {{$typeName}}
                    </option>
                 @endforeach
                  </select>
            </div>
            <div class="col-3 mt-4">
                <button class="btn btn-primary btn-sm px-5 py-2">Search</button>
            </div>
        </div>
       </form>
    </div>




{{--list house   --}}

<div class="site-section site-section-sm">
    <div class="container">
        <div class="notFound">
            @if($houses->isEmpty())
                <p>No houses found.</p>
            @else
        </div>
        @foreach ($houses as $house)
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="property-entry horizontal d-lg-flex">

                    <a href="{{ url('/house', ['id' => $house->id]) }}" class="property-thumbnail h-100">
                        <div class="offer-type-wrap">
                            <span class="offer-type bg-success">{{$house->type->type_name}}</span>
                            {{-- <span class="offer-type bg-success">Rent</span> --}}
                        </div>
                        <?php $cover = explode('|', $house->images, -1); ?>
                        {{-- <img src="{{ asset('componets/images/img-2.jpeg') }}" alt="Image" class="img-"> --}}
                        <img src="{{ asset('images/houses/' . $house->path . '/' . $cover[0]) }}" />
                    </a>

                    <div class="px-4 py-3 property-body">

                        <h2 class="property-title"><a href="{{ url('/house', ['id' => $house->id]) }}">{{$house->name}}</a></h2>
                        <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span>
                            {{$house->location}}
                        </span>
                        {{-- <div class="">
                            <span class="text-lg">Type: </span>
                            <span class="text-danger fw-bold">{{$house->type_name}}</span>
                        </div> --}}
                        <strong class="property-price text-primary mb-3 d-block text-success">
                            {{number_format($house->price, 2, ',' , '.') . ' MZN'}}
                        </strong>

                        <div>
                            <span class="fw-bold">Description</span>
                            <p>{{$house->description}}</p>
                        </div>
                        <ul class="property-specs-wrap mb-3 mb-lg-0">
                            <li>
                                <span class="property-specs">Rooms</span>
                                <span class="property-specs-number">{{$house->rooms}}
                                    {{-- <sup>+</sup> --}}
                                </span>

                            </li>
                            <li>
                                <span class="property-specs">WC</span>
                                <span class="property-specs-number">{{$house->wc}}</span>

                            </li>
                            {{-- <li>
                                <span class="property-specs">Type</span>
                                <span class="property-specs-number">{{$house->type_name}}</span>

                            </li> --}}
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        @endforeach


        <div class="row mt-5">
            <div class="col-md-12 text-center">
                {{-- <div class="site-pagination">
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <span>...</span>
                    <a href="#">10</a>
                </div> --}}
                {{ $houses->links() }}
            </div>
            @endif
        </div>

    </div>
</div>
</div>


