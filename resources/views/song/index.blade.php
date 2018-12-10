@extends('layouts.master')
@section('content')
@include('includes.header')
<div class="container">
    <div class="col-md-6">
      <div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $song->youtube_id }}?rel=0&autoplay=1&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
        <div>
          @if (Auth::check())
            @if (Auth::user()->liked($song->id))
            <a href="{{route('songs.unlike',$song->id)}}">unlike</a>
            @else
            <a href="{{route('songs.like',$song->id)}}">like</a>
            @endif
          @else
          <a href="#" data-toggle="modal" data-target="#myModal4"><span>Like</span></a> 
          @endif

          <span>{{ $song->be_liked->count() }} likes</span>
    </div>
    </div>
    <div class="col-md-6">
        <ul class="nav nav-tabs">
            <li><a href="#originalLyric">Original</a></li>
            <li><a href="#translation">Translation</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="originalLyric"><p class="lyric">{{ $song->original_lyric }}</pre></div>
            <div role="tabpanel" class="tab-pane fade" id="romajiLyric"><pre>{{ $song->vietnam_lyric }}</pre></div>
            <div role="tabpanel" class="tab-pane fade" id="Events"></div>
        </div>
    </div>
</div>
@include('modal.sign-in')
@include('includes.footer')
@endsection
