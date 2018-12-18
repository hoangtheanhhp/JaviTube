@extends('layouts.master')
@section('content')
@include('includes.header')
<div class="container">
    <div class="row">
      <div class="col-md-6">
        <div>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $song->youtube_id }}?rel=0&autoplay=1&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
<<<<<<< Updated upstream
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
      </div></div>
      <div class="col-md-6">
         <div class="horizontal-tab">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab" aria-expanded="false">Original</a></li>
                <li class=""><a href="#tab2" data-toggle="tab" aria-expanded="false">Translate</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade in active" id="tab1">
                  <div class="row">
                    <div class="col-md-12">
                      <pre class="lyric">{{ $song->original_lyric }}</pre>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab2">
                  <div class="row">
                    <div class="col-md-12 lyric">
                      <pre class="lyric">{{ $song->vietnam_lyric }}</pre>
                    </div>
                  </div>
                </div>
                </div>
              </div>
          </div>
      </div>
=======
    <div class="col-md-12 like-padding">
>>>>>>> Stashed changes
      <div class="col-md-6 like-padding">
        <button class="button button-like" id="like">
          <i class="fa fa-heart"></i>
          <span>Like</span>
        </button>
        <button class="button button-like liked" id="unlike">
          <i class="fa fa-heart"></i>
          <span>Unlike</span>
        </button>
      </div>
 </div>


@include('modal.sign-in')
@include('includes.footer')
@section('script')
    <script type="text/javascript">
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
          });
        }
    </script>
@endsection