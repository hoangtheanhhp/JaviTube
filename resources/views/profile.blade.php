@extends('layouts.master')
@section('content')
    @include('includes.nav-bar')
    <div class="clearfix"></div>
    <div class="container_fullwidth">
        <div class="container">
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="productgird.html">men</a></li>
                    <li><a href="productlitst.html">women</a></li>
                    <li><a href="productgird.html">gift</a></li>
                    <li><a href="productgird.html">kids</a></li>
                    <li><a href="productgird.html">blog</a></li>
                    <li><a href="productgird.html">jewelry</a></li>
                    <li><a href="contact.html">contact us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    @include('includes.footer')
@endsection
