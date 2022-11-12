@extends('layouts/layout_main')
@section('content')
<section class="mb-55">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3" >
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-5 col-xl-5">
          <div class="card" style="border-radius: 15px;">
            <div class=" p-4">
              <h2 class="text-uppercase text-center mb-4 ">Sign Up</h2>

              <form action="{{route('registration.user')}}" method="post">
                @if (Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if (Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                @csrf
                <div class="form-outline mb-4">
                  <input type="text" class="form-control form-control-lg" placeholder="Name" name="name" value="{{old('name')}}" />
                  <span class="text-danger ">@error('name') {{$message}} @enderror</span>
                </div>

                <div class="form-outline mb-4">
                    <input type="text" class="form-control form-control-lg" placeholder="Username" name="user_name" value="{{old('user_name')}}"/>
                    <span class="text-danger ">@error('user_name') {{$message}} @enderror</span>
                  </div>

                <div class="form-outline mb-4">
                  <input type="tel" class="form-control form-control-lgn phone" id="phone" name="phone" value="{{old('phone')}}"  />
                  {{-- <span class="text-danger ">@error('phone') {{$message}} @enderror</span> --}}

                    <span id="error-msg" class="hide"></span>
                </div>

                <div class="form-outline mb-4">
                  <select name="gender" class="form-control form-control-lg" value="{{old('gender')}}">
                    <option value="">Gender</option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                  </select>
                  <span class="text-danger ">@error('gender') {{$message}} @enderror</span>
                </div>

                <div class="form-outline mb-4">
                  <input type="date" class="form-control form-control-lg" placeholder="Birth date" name="birth_date" value="{{old('birth_date')}}"/>
                  <span class="text-danger ">@error('birth_date') {{$message}} @enderror</span>
                </div>

                <div class="form-outline mb-4">
                    <input type="text" class="form-control form-control-lg" placeholder="Email" name="email" value="{{old('email')}}"/>
                    <span class="text-danger ">@error('email') {{$message}} @enderror</span>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" class="form-control form-control-lg" placeholder="Password" name="password" value="{{old('password')}}"/>
                    <span class="text-danger ">@error('password') {{$message}} @enderror</span>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" class="form-control form-control-lg" placeholder="Confirm Password" name="confirm_password" />
                    <span class="text-danger ">@error('confirm_password') {{$message}} @enderror</span>
                  </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg"  />
                  <label class="form-check-label" for="form2Example3g" >
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center  mt-5 mb-0">Have already an account? <a href="login"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
