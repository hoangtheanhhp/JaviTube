@extends('layouts.master')
@section('content')
    @include('includes.top-nav')
    @foreach ($users as $user)
    <ul>
        <li>User: {{ $user->name }}</li>
        <li><form action="users/{{$user->id}}" method="post">
            <input type="hidden" name="_method" value="PATCH" />
                {{ csrf_field() }}
                 {{ method_field('PATCH') }}
          
             <input type="submit" class="btn btn-danger" value="Give admin privilege" />
        </form></li>
        <li><form action="users/{{$user->id}}" method="post">
            <input type="hidden" name="_method" value="DELETE" />
                {{ csrf_field() }}
                 {{ method_field('DELETE') }}
          
             <input type="submit" class="btn btn-danger" value="delete" />
        </form></li>
    </ul>
    @endforeach
    @include('includes.footer')
@endsection