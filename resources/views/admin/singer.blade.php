@extends('layouts.master')
@section('content')
    @include('includes.top-nav')
    <form action="{{ route('admin.singers.store') }}" method="post">
        @csrf
        name:<br><input type="text" name="name"><br>
        {{-- avatar:<br><input type="text" name="avatar"><br> --}}
        birthday<br><input type="date" name="birthday"><br>
        description:<br><input type="text" name="description"><br>
        <input type="submit" value="Submit">
    </form> 
    @foreach ($singers as $singer)
    <ul>
        <li>singer: {{ $singer->name }}</li>
        <form action="singer/{{ $singer->id }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <button class="btn btn-danger" type="submit">Delete singer</button>
        </form> 
            
    </ul>
    @endforeach
    @include('includes.footer')
@endsection