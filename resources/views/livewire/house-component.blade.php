{{-- <div class="col-6 border border-danger ms-3 mt-5">
    {{__('message.text_besthome')}}
</div> --}}
@foreach ( $houses as $house )

<div class=" border border-primary mt-5 d-flex" style="height: 20rem">

    <img src="{{asset('componets/images/img-1.jpg')}}" alt="" class="res-img">
    <div class="content-box  col-4">
        <a href="#" class="aName">{{$house->name}}</a>
        <span>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
        </span>
        <a href="#" class="map">Maputo see in Map</a>
        <div class="description">
            <p>{{$house->description}}</p>
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
            <p>Price: <span>{{$house->price}}</span></p>
        </div>
    </div>

</div>

@endforeach
<div>
    {{$houses->links()}}
</div>
