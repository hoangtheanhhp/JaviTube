@extends('layouts.master')
@section('content')
@include('includes.header')
<div class="container">
   <div class="sap_tabs">
            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                <ul class="resp-tabs-list">
                    <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Song</span></li>
                    <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Singer</span></li>
                    <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>User</span></li>
                </ul>
                <div class="resp-tabs-container">
                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                        <div class="row">
                            @foreach($songs as $song)
                                <div class="col-md-3 product-video">
                                <div class="video">
                                    <div class="video-image">
                                        <a href="{{ route('songs.show', $song->id) }}">
                                            <img src="http://img.youtube.com/vi/{{ $song->youtube_id }}/hqdefault.jpg" alt="{{ $song->name }}">
                                            <img class="ic-play" src="{{ asset("images/ic_play.png") }}">
                                            <span class="product-new-top">{{ $song->created_at->diffForHumans() }}</span>
                                        </a>
                                    </div>
                                    <div class="video-info">
                                        <div class="row">
                                            <div class="col-md-10">
                                            <h4><a href="https://www.youtube.com/watch?v={{ $song->youtube_id }}?t=0">{{ $song->name }}</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                            <div class="row">
                                @foreach($singers as $singer)
                                  <div class="col-md-2">
                                    <div class="thumbnail">
                                      <a href="{{ asset('storage/avatar/'. $singer->avatar) }}">
                                        <img src="{{ asset('storage/avatar/'. $singer->avatar) }}" alt="{{ $singer->name }}" style="height: 160px">
                                        <div class="caption">
                                            <h2>{{ $singer->name }}</h2>
                                            {{-- <p>{{ $singer->description }}</p> --}}
                                        </div>
                                      </a>
                                    </div>
                                  </div>                    
                                @endforeach
                            </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                        <div class="row">
                                @foreach($users as $user)
                                  <div class="col-md-2">
                                    <div class="thumbnail">
                                      <a href="{{ asset('storage/avatar/'. $user->avatar) }}">
                                        <img src="{{ asset('storage/avatar/'. $user->avatar) }}" alt="{{ $user->name }}" style="height: 160px">
                                        <div class="caption">
                                            <h4>{{ $user->name }}</h4>
                                            {{-- <p>{{ $singer->description }}</p> --}}
                                        </div>
                                      </a>
                                    </div>
                                  </div>                    
                                @endforeach
                            </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
</div>
@include('includes.footer')
@endsection
