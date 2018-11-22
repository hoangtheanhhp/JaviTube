@extends('layouts.master')
@section('content')
    @include('includes.top-nav')
    @foreach ($users as $user)
    <ul>
        <li>User: {{ $user->name }}</li>
        <li><a href="user_to_admin/{{ $user->id }}">Give admin privilege</a></li>
        <li><a href="user/delete/{{ $user->id }}">Delete User</a></li>
    </ul>
    @endforeach
    @include('includes.footer')
@endsection