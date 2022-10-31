@extends('admin.layout.admin_layout')
@section('content')

@include('admin.layout.sidebar')
<!-- Sign Up Start -->


<div class="content">
    @include('admin.layout.navbar')
    <div class="container-fluid pt-4 px-4 mb-5">
        <div class="col-12 d-flex justify-content-center">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">

                    <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Houses</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">#Code</th>
                                    <th scope="col">House Type</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Rooms</th>
                                    <th scope="col">Suits</th>
                                    <th scope="col">Kitchen</th>
                                    <th scope="col">Living Rooms</th>
                                    <th scope="col">WC's</th>
                                    <th scope="col">Garage lot</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($houses as $house)

                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>{{$house->id}}</td>
                                    <td>{{$house->name}}</td>
                                    <td>{{$house->price}}</td>
                                    <td>${{$house->rooms}}</td>
                                    <td>{{$house->suit}}</td>
                                    <td>{{$house->kitchen}}</td>
                                    <td>{{$house->living_room}}</td>
                                    <td>{{$house->wc}}</td>
                                    <td>{{$house->garage}}</td>
                                    <td>{{$house->location}}</td>
                                    <td><a href="{{ route('viewHouse', ['id'=>$house->id]) }}" class="btn btn-primary">View</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
