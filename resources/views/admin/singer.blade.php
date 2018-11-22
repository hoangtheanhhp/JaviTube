@extends('layouts.master')
@section('content')
    @include('includes.top-nav')
    <form action="singer/add" method="post">
        @csrf
        name:<br><input type="text" name="name"><br>
        avatar:<br><input type="text" name="avatar"><br>
        birthday<br><input type="date" name="birthday"><br>
        description:<br><input type="text" name="description"><br>
        <input type="submit" value="Submit">
    </form> 
    @foreach ($singers as $singer)
    <ul>
        <li>singer: {{ $singer->name }}</li>
        <li><a href="singer/delete/{{ $singer->id }}">Delete singer</a></li>
    </ul>
    @endforeach
    @include('includes.footer')
@endsection