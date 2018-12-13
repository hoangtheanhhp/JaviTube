@extends('layouts.master')
@section('content')
@include('includes.header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
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
    <div>
    <button class="button button-like" id="like">
      <i class="fa fa-heart"></i>
      <span>Like</span>
    </button>
    <button class="button button-like liked" id="unlike">
      <i class="fa fa-heart"></i>
      <span>Unlike</span>
    </button>
      <h1>
        <div id="liked_number">
          {{\DB::table('like')->where('song_id',$song->id)->count()}} liked!!!
        </div>
        
      </h1>
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
</div>
      <script>
        $(document).ready(function(){
          $("#like").click(function(){
            $.get("{{route('songs.like',$song->id)}}",function(data, status){
              $("#like").hide();
              $("#unlike").show();
              like_num();
            });
          });
          $("#unlike").click(function(){
            $.get("{{route('songs.unlike',$song->id)}}",function(data, status){
              $("#unlike").hide();
              $("#like").show();
              like_num();
            });
          });
          like_num();
          $.get("{{route('songs.liked',$song->id)}}",function(data,status){
            if (data == true){
              $("#unlike").hide();
              $("#like").show();
            } else{
              $("#unlike").hide();
              $("#like").show();
            }
          });
        });
        function like_num() {
          $.get("{{route('songs.like_num',$song->id)}}",function(data,status){
            $("#liked_number").text(data+" liked!!!")
          })
        }


      </script>
      @include('modal.sign-in')
      @include('includes.footer')
      @endsection
