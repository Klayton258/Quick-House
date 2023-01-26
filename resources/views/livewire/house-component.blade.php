<div>
    <div class="ms-3 mt-5">

        <div class="sort d-flex">
            <div class="sort-result">
                <h2>We found <span>{{$houses->total()}}</span> items for you!</h2>
            </div>
            <div class="sortBy ms-5 d-flex">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bi bi-border-all"></i> Show
                    </button>
                    <ul class="dropdown-menu" id="selectDate">
                        <li><a class="{{ $pageSize == 2 ? 'active' : '' }}" href="#"
                            wire:click.prevent="changePagesize(2)">Show resulhts 2 item</a></li>
                        <li><a class="{{ $pageSize == 6 ? 'active' : '' }}" href="#"
                                wire:click.prevent="changePagesize(6)">Show resulhts 6 item</a></li>
                        <li><a href="#" class="{{ $pageSize == 9 ? 'active' : '' }}"
                                wire:click.prevent="changePagesize(9)">Show resulhts 9 item</a></li>
                        <li><a href="#" class="{{ $pageSize == 18 ? 'active' : '' }}"
                                wire:click.prevent="changePagesize(18)">Show resulhts 18 item</a></li>
                        <li><a href="#" class="{{ $pageSize == 32 ? 'active' : '' }}"
                                wire:click.prevent="changePagesize(32)">Show resulhts 32 item</a></li>
                    </ul>
                </div>
                <br>
                <select class="form-select ms-5 active" aria-label="Default select example">
                    <option selected disabled>Sorty By:</option>
                    <option>1</option>
                    <option class="opt active">2</option>
                    <option>
                        <ul>
                            <li><a href="google.com">google</a></li>
                        </ul>
                    </option>
                    <option>3</option>
                    {{-- @foreach ($categories as $category)
                    <option value="{{route('house.category',['slug'=>$category->slug])}}" >
                        <ul>
                            <li><a href="{{route('house.category',['slug'=>$category->slug])}}">{{$category->name}}</a></li>
                        </ul>
                    </option>
                    @endforeach --}}
                </select>
                {{-- @foreach ($categories as $category)
                <a href="{{url('/house-category/{slug}')}}">{{$category->name}}</a>
                @endforeach --}}
                {{-- <select class="form-select ms-5" aria-label="Default select example">
                    <option selected disabled>Sorty By:</option>
                    <option value=""><ul><li><a class="{{$orderBy =='Default Sorting' ? 'active' : ''}}" href="#" wire:click.prevent="changeOrderBy('Default Sorting')">Default Sorting</a></li></ul></option>
                    <option value=""><ul> <li><a class="{{$orderBy =='Price: Low to High' ? 'active' : ''}}" href="#"wire:click.prevent="changeOrderBy('Price: Low to High')">Price: Low to High</a></li></ul></option>
                    <option value=""><ul> <li><a class="{{$orderBy =='Price: High to Low' ? 'active' : ''}}" href="#"wire:click.prevent="changeOrderBy('Price: High to Low')">Price: High to Low</a></li></ul></option>
                    <option value=""><ul> <li><a class="{{$orderBy =='Sort: by Newest' ? 'active' : ''}}" href="#"wire:click.prevent="changeOrderBy('Sort: by Newest')">Sort: by Newest</a></li></ul></option>
                </select> --}}
            </div>
        </div>
    </div>
    @foreach ($houses as $house)
        <div class=" border border-primary mt-5 d-flex" style="height: 20rem">
            <img src="{{ asset('componets/images/img-1.jpg') }}" alt="" class="res-img">
            <div class="content-box  col-4">
                <a href="#" class="aName">{{ $house->name }}</a>
                <span>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </span>
                <a href="#" class="map">Maputo see in Map</a>
                <div class="description">
                    <p>{{ $house->description }}</p>
                </div>
                <div class="description">
                    <p>AVALIABLE</p>
                </div>
            </div>
            <div class="status col-3">
                <div>
                    <p>For Rent</p>
                </div>
                <div class="price">
                    <p>Price: <span>{{ $house->price }}</span></p>
                </div>
            </div>
        </div>
    @endforeach
    <div>
        {{ $houses->links() }}
    </div>
</div>
