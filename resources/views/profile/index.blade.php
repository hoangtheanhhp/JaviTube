@extends('layouts.master')
@section('content')
@include('includes.header')
<div class="new_arrivals">
    <div class="container">
        <div class="row">
<<<<<<< HEAD
            <div class="col-md-5">
                <img class="img-thumbnail" width="200px" src="{{ asset('storage/avatar/'.$user->avatar) }}" alt="thay đổi ảnh đại diện">
            </div>
            <div class="col-md-7"> 
                <h3>{{ $user->name }}</h3>
                <ul class="k9GMp "><!-- 
                    <li class="Y8-fY "><span class="-nal3 "><span class="g47SY ">8</span> posts</span></li> -->
                    <li class="Y8-fYa "><a class="-nal3 "><span class="g47SY " title="">{{ $user->followed->count() }}</span> followers</a></li>
                    <li class="Y8-fYb "><a class="-nal3 "><span class="g47SY ">{{ $user->following->count() }}</span> following</a></li>
                </ul>
                @if ($user->isOwn())
                    <a class= "aprofile" href="#" data-toggle="modal" data-target="#updateProfile">
                        <span>Update profile</span>
                    </a>
                    <a class= "aprofile" href="#" data-toggle="modal" data-target="#changePassword">
                        <span>Change Password</span>
                    </a>
                @else
                    @if ($user->isFollowing()) 
=======
            <div class="col-md-6">
                <h3><span>{{ $user->name }}</span></h3>
                <h5><span>{{ $user->followed->count() }}<span> Follow</h5>
                    <h5><span>{{ $user->following->count() }}<span> Followers</h5>
                        @if ($user->isOwn())
                        <a href="#" data-toggle="modal" data-target="#updateProfile">
                            <span>Update profile</span>
                        </a>
                        <a href="#" data-toggle="modal" data-target="#changePassword">
                            <span>Change Password</span>
                        </a>
                        @else
                        @if ($user->isFollowing()) 
>>>>>>> 5b943c917153a4d7eac2c65954ddc154c5c406c8
                        <a href="{{ route('users.follow', $user->id) }}">Following</a>
                        @else 
                        <a href="{{ route('users.follow', $user->id) }}">Follow</a>
<<<<<<< HEAD
                    @endif
                @endif
=======
                        @endif
                        @endif
                    </div>
                    <div class="col-md-6">
                        <img class="img-thumbnail" width="100px" src="{{ asset('storage/avatar/'.$user->avatar) }}" alt="">
                    </div>
                </div>
>>>>>>> 5b943c917153a4d7eac2c65954ddc154c5c406c8
            </div>
        </div>
        <div class="product-easy">
            <div class="container">
                <div class="sap_tabs">
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list">
                            <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>User Post</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>User follow</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>User Like</span></li>
                        </ul>
                        <div class="resp-tabs-container">
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                <div class="row">
                                    <div class="col-md-3 product-video">
                                        <div class="video post">
                                            <a href="#" data-toggle="modal" data-target="#modalPostVideo">
                                                <img src="{{ asset('/images/plus.png') }}">
                                            </a>
                                        </div>
                                    </div>
                                    @foreach($myPosts as $song)
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
                                                    @if ($song->user->isOwn())
                                                    <div class="col-md-2">
                                                        <div class="dropdown">
                                                            <a class="dropdown-toggle" type="button" data-toggle="dropdown">&#8942;
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Edit</a></li>
                                                                <li><a href="#">Remove</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                <div class="row">
                                    <div class="col-md-3 product-video">
                                        <div class="video post">
                                            <a href="#" data-toggle="modal" data-target="#modalPostVideo">
                                                <img src="{{ asset('/images/plus.png') }}">
                                            </a>
                                        </div>
                                    </div>
                                    @foreach($folPosts as $song)
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
                                                    @if ($song->user->isOwn())
                                                    <div class="col-md-2">
                                                        <div class="dropdown">
                                                            <a class="dropdown-toggle" type="button" data-toggle="dropdown">&#8942;
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Edit</a></li>
                                                                <li><a href="#">Remove</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                <div class="row">
                                    <div class="col-md-3 product-video">
                                        <div class="video post">
                                            <a href="#" data-toggle="modal" data-target="#modalPostVideo">
                                                <img src="{{ asset('/images/plus.png') }}">
                                            </a>
                                        </div>
                                    </div>
                                    @foreach($singerPosts as $song)
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
                                                    @if ($song->user->isOwn())
                                                    <div class="col-md-2">
                                                        <div class="dropdown">
                                                            <a class="dropdown-toggle" type="button" data-toggle="dropdown">&#8942;
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Edit</a></li>
                                                                <li><a href="#">Remove</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
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
        </div>
        @include('modal.user-update')
        @include('modal.post-video')
        @include('modal.change-password')
        @include('includes.footer')
        @endsection
        
        @section('script')
        @parent
        <script>
            $(document).ready(function() {     
                
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $('.action-follow').click(function(){    
                    var user_id = $(this).data('id');
                    var cObj = $(this);
                    var c = $(this).parent("div").find(".tl-follower").text();
                    
                    
                    $.ajax({
                        type:'POST',
                        url:'/ajaxRequest',
                        data:{user_id:user_id},
                        success:function(data){
                            console.log(data.success);
                            if(jQuery.isEmptyObject(data.success.attached)){
                                cObj.find("strong").text("Follow");
                                cObj.parent("div").find(".tl-follower").text(parseInt(c)-1);
                            }else{
                                cObj.find("strong").text("UnFollow");
                                cObj.parent("div").find(".tl-follower").text(parseInt(c)+1);
                            }
                        }
                    });
                });      
                
            }); 
        </script>
        @endsection
        