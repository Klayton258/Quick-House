@extends('admin.layout.admin_layout')
@section('content')
@include('admin.layout.sidebar')


<!-- Content Start -->
<div class="content">
    @include('admin.layout.navbar')
            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Contracts</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Resposable Name</th>
                                        <th scope="col">Student Name</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Contract</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clients as $contract)
                                    @if ($contract->contract != null)

                                    <tr>
                                        <th scope="row">{{$contract->id}}</th>
                                        <td>{{$contract->responsable}}</td>
                                        <td>{{$contract->student}}</td>
                                        <td>{{$contract->number}}</td>
                                        <td><a class="btn btn-sm btn-primary" href="{{ route('downContract', ['id'=>$contract->contract]) }}">Download</a></td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Unpayed invoices</h6>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Responsable Name</th>
                                        <th scope="col">Student Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Payment State</th>
                                        <th scope="col">Send Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($unpayed as $unpay)

                                    <tr>
                                        <th scope="row">{{$unpay->id}}</th>
                                        <td>{{$unpay->responsable}}</td>
                                        <td>{{$unpay->email}}</td>
                                        <td>{{$unpay->number}}</td>
                                        <td>{{$unpay->state}}</td>
                                        <td><a class="btn btn-sm btn-primary" href="{{ route('resendEmail', ['id'=>$unpay->id]) }}">Send</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Clients</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Responsable Name</th>
                                            <th scope="col">Student Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Residence</th>
                                            <th scope="col">Contract</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clients as $client)

                                        <tr>
                                            <th scope="row">{{$client->id}}</th>
                                            <td>{{$client->responsable}}</td>
                                            <td>{{$client->student}}</td>
                                            <td>{{$client->email}}</td>
                                            <td>{{$client->number}}</td>
                                            <td>{{$client->residence}}</td>
                                            <td>{{$client->contract}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->
</div>

@include('layout.footer')
@endsection
