<div>
    <div class="sort d-flex">
        <div class="sort-result">
            <h2>We found <span>16 </span> items for you!</h2>
        </div>
        <div class="sortBy ms-5 d-flex">
            <select class="form-select ms-5" aria-label="Default select example">
                <option selected>cd</option>
                <option selected>Shdd</option>
                <option selected>Shod</option>
            </select>

            <br>
            <select class="form-select ms-5" aria-label="Default select example">
                <option selected disabled>Sorty By:</option>
                @foreach ($categories as $category)
                <option value="{{route('house.category',['slug'=>$category->slug])}}" >
                    <ul>
                        <li><a href="{{route('house.category',['slug'=>$category->slug])}}">{{$category->name}}</a></li>
                    </ul>
                </option>

                @endforeach


            </select>@foreach ($categories as $category)
            <a href="{{url('/house-category/{slug}')}}">{{$category->name}}</a>
            @endforeach

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
