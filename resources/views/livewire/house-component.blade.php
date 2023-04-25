<?php
    //  dd($houses[0]->images);
 $images = explode('|', $houses[0]->images);


?>
<div>
    <div class="ms-3 mt-5">

        <div class="sort d-flex">
            {{-- <div class="sort-result">
                <h2>We found <span>{{ $houses->total()}}</span> items for you!</h2>
            </div> --}}
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
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle ms-5" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                       Sorty by Price
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="{{ $orderBy == 'Default Sorting' ? 'active' : '' }}" href="#"
                                wire:click.prevent="changeOrderBy('Default Sorting')">Default Sorting</a></li>

                        <li><a class="{{ $orderBy == 'Price: Low to High' ? 'active' : '' }}"
                                href="#"wire:click.prevent="changeOrderBy('Price: Low to High')">Price: Low to
                                High</a></li>

                        <li><a class="{{ $orderBy == 'Price: High to Low' ? 'active' : '' }}"
                                href="#"wire:click.prevent="changeOrderBy('Price: High to Low')">Price: High to
                                Low</a></li>


                        <li><a class="{{ $orderBy == 'Sort: by Newest' ? 'active' : '' }}"
                                href="#"wire:click.prevent="changeOrderBy('Sort: by Newest')">Sort: by Newest</a>
                        </li>

                    </ul>
                </div>

                <div class="category">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle ms-3" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                           Sorty Category
                        </button>
                        <ul class="dropdown-menu">
                            @foreach ($categories as $category)
                            <li><a href="{{route('house.category',['slug'=>$category->slug])}}" class="p-2">{{$category->name}}</a> </li>

                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach ($houses as $house)
        <div class=" border border-primary mt-5 d-flex">
            {{-- <img src="{{ asset('componets/images/img-1.jpg') }}" alt="" class="res-img"> --}}

            {{-- @foreach ( array_slice($images,0,count($images)-1 ) as $image)

            <img style="width: 15rem" src="{{asset('images/houses/'.$houses[0]->path.'/'.$image)}}"/>

            @endforeach --}}

            <img style="width: 20rem" src="{{asset('images/houses/'.$houses[0]->path.'/'.$images[0])}}"/>
            <div class="content-box  col-4">

                <a href="{{url('/house', ['id' => $house->id])}}" class="aName">{{ $house->name }}</a>
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
            <div class="status ">
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

         {{-- {{dd(livewireScripts)}} --}}
    </div>
</div>
