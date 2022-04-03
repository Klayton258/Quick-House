@extends('layouts/layout_main')
@section('content')

    <main>
        <nav class="nav" style="background-color: var(--teal); padding-bottom: 0px; padding-top: 0px ">
            <!--Brand-->
            <div class="logo">
                <a href="{{url('/')}}">Quick House</a>
            </div>
            <div id="menu">
                <!--Toggle button-->
                <button id="btn-menumobile" aria-label="Abrir Menu" aria-haspopup="true" aria-controls="list"
                        aria-expanded="false">
                    <span id="hamburger"></span>
                </button>
                <!--Item List-->
                <ul id="list">
                    <li><a href="#">Regist</a></li>
                </ul>
            </div>
        </nav>

        <div class="flex-container">
            <div class="container container-sm container-md">
                <h1>Request Visit</h1>

                <p>Fill the form with your real data, after all you will receive email response! Thanks</p>

                <form action="{{ url('/home')}}" method="post">
                    <div class="label">Name Complete</div>
                    <input type="text" name="name" class="form-control">

                    <div class="label">email</div>
                    <input type="text" name="email" class="form-control">

                    <div class="label">contact</div>
                    <input type="text" name="contact" class="form-control">

                    <div class="label">Visit Date</div>
                    <input type="date" name="date" class="form-control">
                    <div class="btn btn-primary mt-3">request</div>
                </form>

            </div>

        </div>


    </main>







@endsection
