@extends('layouts.master')
@section('content')
    @include('includes.top-nav')
    @foreach ($songs as $song)
    <ul>
        <li>song: {{ $song->name }}</li>
        <li><form action="song/{{$song->id}}" method="post">
            <input type="hidden" name="_method" value="DELETE" />
                {{ csrf_field() }}
                 {{ method_field('DELETE') }}
          
             <input type="submit" class="btn btn-danger" value="delete" />
            </form></li>
        <li><form action="song/{{$song->id}}" method="post">
                <input type="hidden" name="_method" value="DELETE" />
                    {{ csrf_field() }}
                     {{ method_field('DELETE') }}
              
                 <input type="submit" class="btn btn-danger" value="delete" />
                </form></li>
    </ul>
    @endforeach
    @include('includes.footer')
@endsection