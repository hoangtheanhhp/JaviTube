@extends('layouts.master')
@section('content')
@include('includes.header')
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $song->youtube_id }}?rel=0&autoplay=1&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
      <div id="liked_number">
          {{ $song->be_liked->count() }} likes
        </div>
<<<<<<< HEAD
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
=======
      </div>
>>>>>>> 39e94527e77e04c29c07ff664a1ea4dab369538f
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
<<<<<<< HEAD
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
=======
    </div>
    <div class="col-md-3 like-padding">
      <button class="button button-like" id="like">
        <i class="fa fa-heart"></i>
        <span>Like</span>
      </button>
      <button class="button button-like liked" id="unlike">
        <i class="fa fa-heart"></i>
        <span>Unlike</span>
      </button>
    </div>
    <div class="col-md-3">
        <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#modalReportForm">Report</a>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-6">
      <div class="media">
        <div class="media-left media-top">
          <img src="{{ asset('/storage/avatar/'. $song->singer->avatar) }}" class="media-object" style="width:60px">
        </div>
        <div class="media-body">
          <h4 class="media-heading">{{ $song->singer->name }}</h4>
          <p>{{ $song->singer->description }}</p>
        </div>
>>>>>>> 39e94527e77e04c29c07ff664a1ea4dab369538f
      </div>
    </div>
  </div>
  
  
  @include('modal.report-form')
  @include('includes.footer')
  @section('script')
  @if (Auth::check())
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
        $("#liked_number").text(data+" likes")
      });
    }
  </script> 
  @else
  <script> 
    $("#unlike").hide();
    $("#like").hide();
  </script> 
  @endif
  @endsection