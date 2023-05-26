<div>
    <div class="site-section site-section-sm">
        <div class="container">

            @foreach ($House as $house)
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="property-entry horizontal d-lg-flex">

                        <a href="{{ url('/house', ['id' => $house->id]) }}" class="property-thumbnail h-100">
                            <div class="offer-type-wrap">
                                <span class="offer-type bg-success">{{$house->type_name}}</span>
                                {{-- <span class="offer-type bg-success">Rent</span> --}}
                            </div>
                            <?php $cover = explode('|', $house->images, -1); ?>
                            {{-- <img src="{{ asset('componets/images/img-2.jpeg') }}" alt="Image" class="img-"> --}}
                            <img src="{{ asset('images/houses/' . $house->path . '/' . $cover[0]) }}" />
                        </a>

                        <div class="px-4 py-3 property-body">
                            <a href="{{ url('/house', ['id' => $house->id]) }}" class=""> </a>

                            <h2 class="property-title"><a href="#">{{$house->name}}</a></h2>
                            <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span>
                                {{$house->location}}
                            </span>
                            {{-- <div class="">
                                <span class="text-lg">Type: </span>
                                <span class="text-danger fw-bold">{{$house->type_name}}</span>
                            </div> --}}
                            <strong class="property-price text-primary mb-3 d-block text-success">
                                <script>
                                    document.write(currencyFormat({{ $house->price }}));
                                </script>
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


            {{-- {{var_dump($house)}} --}}



            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <div class="site-pagination">
                        {{-- <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <span>...</span>
                        <a href="#">10</a> --}}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
