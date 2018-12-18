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
                <form action="{{route('admin.user.delete',$user->id)}}" method="post">
                        <input type="hidden" name="_method" value="PATCH" />
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                        @if($user->type == 0)
                            <input type="submit" class="btn" sty value="Give admin privilege" />
                        @elseif($user->type == 2)
                            <input type="submit" class="btn btn-admin" value="Admin" />      
                        @endif
                    </form>
                </td>
                <td>
                    <form action="{{route('admin.user.delete',$user->id)}}" method="post">
                        <input type="hidden" name="_method" value="DELETE" />
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                    
                        <input type="submit" class="btn btn-danger" value="delete" onclick="return confirm('Are you sure?')" />
                    </form>
                
                </td>
                </tr>
            @endforeach 
            </tbody>
        </table>
    </div>
    @include('includes.footer')
@endsection