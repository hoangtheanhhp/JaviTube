@extends('layouts.master')
@section('content')
    @include('includes.top-nav')
    <div class="container custom-page">
        <table class="table-user table" style="margin: 70px;">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                <td>{{ $user->name }}</td>
                <td>
                    <form action="users/{{$user->id}}" method="post">
                        <input type="hidden" name="_method" value="PATCH" />
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                    
                        <input type="submit" class="btn btn-privilege" value="Give admin privilege" />
                    </form>
                </td>
                <td>
                    <form action="users/{{$user->id}}" method="post">
                        <input type="hidden" name="_method" value="DELETE" />
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                    
                        <input type="submit" class="btn btn-danger" value="delete" />
                    </form>
                
                </td>
                </tr>
            @endforeach 
            </tbody>
        </table>
    </div>
    @include('includes.footer')
@endsection