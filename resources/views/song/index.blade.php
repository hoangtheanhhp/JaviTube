@extends('layouts.master')
@section('content')
@include('includes.header')
<div class="container">
    <div class="col-md-6">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $song->youtube_id }}?rel=0&autoplay=1&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    <div>
        @if (Auth::user()->liked($song->id))
        <a href="{{$song->id}}/unlike">unlike</a>
        @else
        <a href="{{$song->id}}/like">like</a>
        @endif
        <h1>
            {{\DB::table('like')->where('song_id',$song->id)->count()}} liked!!!
        </h1>
    </div>
    <div class="col-md-6">
        <ul class="nav nav-tabs">
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Lyric
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#originalLyric">Bản gốc</a></li>
                <li><a href="#romajiLyric">Phiên âm</a></li>
              </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Lời dịch
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Submenu 1-2</a></li>
              <li><a href="#">Submenu 1-3</a></li>
            </ul>
          </li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="originalLyric">{{ $song->original_lyric }}</div>
            <div role="tabpanel" class="tab-pane fade" id="romajiLyric">{{ $song->romaji_lyric }}</div>
            <div role="tabpanel" class="tab-pane fade" id="Events"></div>
        </div>
    </div>
</div>
@include('includes.footer')
@endsection
