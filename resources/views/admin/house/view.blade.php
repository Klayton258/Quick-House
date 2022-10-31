@extends('admin.layout.admin_layout')
@section('content')

@include('admin.layout.sidebar')
<!-- Sign Up Start -->
@php
     $images = explode('|', $house->images);
@endphp

<div class="content">
    @include('admin.layout.navbar')
    <div class="container-fluid pt-4 px-4 mb-5">
        <div class="col-12 d-flex justify-content-center">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">

                    <div class="row">
                        @foreach ( array_slice($images,0,count($images)-1 ) as $image)
                        <div class="col-lg-3 col-sm-12 col-xl-3 mb-2  d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/houses/'.$house->path.'/'.$image) }}" width="80%" height="80%" alt="">
                        </div>
                        @endforeach
                    </div>
                    <form method="POST" action="{{ route('newhouse') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">House Type</label>
                            <div class="col-10">
                                <select class="form-select col-sm-10 mb-3" aria-label="Default select example" name="type_id">
                                    <option selected>Select the house type</option>
                                    @foreach ($types as $type)
                                        <option value="{{$type->id}}">{{$type->type_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Images</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="images[]" accept="image/png, image/jpg, image/jpeg" multiple>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" value="{{$house->name}}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Suits</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="suit" value="{{$house->suit}}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Rooms</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="rooms" value="{{$house->rooms}}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Linving Rooms</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="linving_room" value="{{$house->living_room}}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Kitchens</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="kitchen" value="{{$house->kitchen}}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">WCs</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="wc" value="{{$house->wc}}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Garage</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="garage" value="{{$house->garage}}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Location</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="location" value="{{$house->location}}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea cols="12" rows="5" type="text" class="form-control" name="description" required>{{$house->description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="price" value="{{$house->price}}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Visit times</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="example: 2022-01-20|2022-11-25|2022-09-12|2022-02-30" class="form-control" name="visit_times" value="{{$house->visit_times}}" required>
                            </div>
                        </div>
                        {{-- <div class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Promotion</legend>
                            <div class="col-sm-10">
                                <div class="form-check promotionCheck">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1" onchange="promotionFunction()">
                                    <label class="form-check-label" for="gridCheck1">
                                        Check if is in Promotion
                                    </label>
                                </div>
                            </div>
                        </div> --}}
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Promotion Price</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="promotion_price" value="{{$house->promotion_price}}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Pass in Outdoor</legend>
                            <div class="col-sm-4 col-xl-10">
                                <div class="form-check">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" name="outdoor_id" type="checkbox" role="switch"
                                            id="flexSwitchCheckChecked" checked>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary col-6 mt-3">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
