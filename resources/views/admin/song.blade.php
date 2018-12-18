@extends('layouts.master')
@section('content')
    @include('includes.top-nav')

    <div class="container custom-page">
        <table class="table-user table" style="margin: 70px;">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($songs as $song)
                <tr>
                <td>{{ $song->name }}</td>
                <td>
                    <form action="song/{{$song->id}}" method="post">
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