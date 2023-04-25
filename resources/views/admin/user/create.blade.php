@extends('admin.layout.admin_layout')
@section('content')

@include('admin.layout.sidebar')
<!-- Sign Up Start -->

<div class="content">
    @include('admin.layout.navbar')
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-6">
                <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="#" class="">
                            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>BackOffice</h3>
                        </a>
                        <h3>Create Account</h3>
                    </div>
                    <form action="{{ route('createUser') }}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="user_name" id="floatingText" placeholder="jhondoe" required>
                            <label for="floatingText">Name Complete</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" name="birthday" id="floatingText" placeholder="jhondoe" required>
                            <label for="floatingText">BirthDay</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" required>
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="phone" id="floatingText" placeholder="+258 8XX XXX XXX" required>
                            <label for="floatingText">Phone</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="username" id="floatingText" placeholder="jdoe" required>
                            <label for="floatingText">Username</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                        </div>

                        <div class="form-floating mb-4">
                            <select class="form-select col-sm-10 mb-3" aria-label="Default select example" name="role">
                                    @for ($i=0; $i < sizeOf($roles); $i++)
                                    {{-- {{dd($roles)}} --}}
                                    <option value="{{$roles[$i]}}">{{$roles[$i]}}</option>
                                    @endfor
                            </select>
                            <label for="floatingPassword">Role</label>
                        </div>
                        {{-- <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <a href="">Forgot Password</a>
                        </div> --}}
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Create</button>
                        {{-- <p class="text-center mb-0">Already have an Account? <a href="">Sign In</a></p> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sign Up End -->


@endsection
