@extends('layouts/layout_main')
@section('content')
    {{-- <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
    </symbol>
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </symbol>
  </svg> --}}


    <section class="mb-55 login_section">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3 ">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-5 col-xl-5">
                        <div class="card" style="border-radius: 15px;">
                            {{-- @if ($errors->any())
                            <div class="alert alert-danger  d-flex align-items-center alert-dismissible fade show" role="alert">
                                  <ul style="list-style-type: none;">
                                    @foreach ($errors->all() as $error)
                                      <li class="d-flex align-items-center mb-1">
                                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                          <div>
                                              {{ $error }}
                                          </div>
                                      </li>
                                    @endforeach
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                  </ul>
                            </div>
                            @endif --}}
                            <div class=" p-4">
                                <h2 class="text-uppercase text-center mb-4 ">Login!</h2>

                                <form action="{{ route('login.user') }}" method="post">
                                    @if (Session::has('success'))
                                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                                    @endif
                                    @if (Session::has('fail'))
                                        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                                    @endif
                                    @csrf
                                    <div class="form-outline mb-4">
                                        <input type="text" class="form-control form-control-lg"
                                            placeholder="Email or Username" name="email" value="{{ old('email') }}" />
                                        <span class="text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" class="form-control form-control-lg" placeholder="Password"
                                            name="password" />
                                        <span class="text-danger">
                                            @error('password')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Login</button>

                                    </div>

                                    <p class="text-center  mt-5 mb-0">You don't have an account? <a href="registration"
                                            class="fw-bold text-body"><u>Sign up here</u></a></p>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
