@extends('layouts.master')
@section('content')
    @include('includes.top-nav')
    <div class="container">

        <form class="singer-form" action="{{ route('admin.singers.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group"  >
                <label >Avatar</label>
                <input class="form-control" type="file" name="avatar">
            </div>            
            <div class="form-group"  >
                <label >Name</label>
                <input class="form-control" type="text" name="name" placeholder="name">
            </div>
            <div class="form-group">
                <label >Birthday</label>
                <input class="form-control" type="date" name="birthday" placeholder="birthday">
            </div>
            <div class="form-group">
                <label >Description</label>
                <input class="form-control" type="text" name="description" placeholder="description">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


        <table class="table-user table" style="margin: 40px;">
            <thead>
                <tr>
                <th scope="col">Avatar</th>
                <th scope="col">Name</th>
                <th scope="col">Birthday</th>
                <th scope="col">Description</th>
                <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($singers as $singer)
                <tr>
                    <td><img width="80px" src="{{ asset('storage/avatar/'.$singer->avatar) }}"></td>
                <td>{{ $singer->name }}</td>
                <td>{{ $singer->birthday }}</td>
                <td>
                    <p>{{$singer->description}}</p>
                </td>
                <td>
                <form action="{{route('admin.singers.destroy', $singer->id )}}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                
                </td>
                </tr>
            @endforeach 
            </tbody>
        </table>
    </div>
    @include('includes.footer')
@endsection