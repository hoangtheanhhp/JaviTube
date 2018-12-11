@extends('layouts.master')
@section('content')
    @include('includes.header')
    @include('includes.top-nav')
    <div class="product-easy">
	<div class="container">
            <div class="row">
                    <div class="col-md-6">
                        <h3><span>{{ $singer->name }}</span></h3>
                        <h5><span>{{ $singer->like->count() }}<span> Like</h5>
                                @if ($singer->isLike())                                 
                                <a href="{{ route('singer.unlike', $singer->id) }}">Unlike</a>
                                @else 
                                <a href="{{ route('singer.like', $singer->id) }}">Like</a>
                                @endif
                            </div>
                            <div class="col-md-6">
                                {{-- <img class="img-thumbnail" width="100px" src="{{ asset('storage/avatar/'.$user->avatar) }}" alt=""> --}}
                            </div>
                        </div>
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
                                <div class="col-md-2">
                                    <div class="dropdown">
                                    <a class="dropdown-toggle" type="button" data-toggle="dropdown">&#8942;
                                      </a>
                                    <ul class="dropdown-menu">
										<li><a href="/users/{{$song->user->id}}">Post by {{$song->user->name}}</a></li>
                                    </ul>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
		@endforeach
		<div class="clearfix"></div>
			
	</div>
</div>
    @include('includes.footer')
    @include('modal.sign-in')
    @include('modal.sign-up')
@endsection
