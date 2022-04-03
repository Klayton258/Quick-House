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
                {{-- <li><a href="#">Regist</a></li> --}}
            </ul>
        </div>
    </nav>

    <h1>SIGIN</h1>

</main>

@endsection
