@extends('layouts.master')
@section('content')
@include('includes.header')
<div class="new_arrivals">
    <div class="container">
        <div class="row">
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
                        <a href="{{ route('users.follow', $user->id) }}">Following</a>
                    @else 
                        <a href="{{ route('users.follow', $user->id) }}">Follow</a>
                    @endif
                @endif
            </div>
        </div>
    </div>
</div>
<div class="product-easy">
    <div class="container">
        <div class="sap_tabs">
            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                <ul class="resp-tabs-list">
                    <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Latest Designs</span></li>
                    <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Special Offers</span></li>
                    <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Collections</span></li>
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
                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                        <div class="col-md-3 product-video">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="">
                                    <img src="http://img.youtube.com/vi/AnFVQ9QctYI/0.jpg" alt="" class="pro-image-front">
                                    <img src="http://img.youtube.com/vi/AnFVQ9QctYI/0.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="video-info ">
                                    <h4><a href="single.html">Wedges</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$45.99</span>
                                        <del>$69.71</del>
                                    </div>
                                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-video">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="images/w2.png" alt="" class="pro-image-front">
                                    <img src="images/w2.png" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="video-info ">
                                    <h4><a href="single.html">Sandals</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$45.99</span>
                                        <del>$69.71</del>
                                    </div>
                                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-video">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="images/mw1.png" alt="" class="pro-image-front">
                                    <img src="images/mw1.png" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="video-info ">
                                    <h4><a href="single.html">Casual Shoes</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$45.99</span>
                                        <del>$69.71</del>
                                    </div>
                                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-video">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="images/mw3.png" alt="" class="pro-image-front">
                                    <img src="images/mw3.png" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="video-info ">
                                    <h4><a href="single.html">Sport Shoes</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$45.99</span>
                                        <del>$69.71</del>
                                    </div>
                                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-video yes-marg">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="images/ep2.png" alt="" class="pro-image-front">
                                    <img src="images/ep2.png" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="video-info ">
                                    <h4><a href="single.html">Watches</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$45.99</span>
                                        <del>$69.71</del>
                                    </div>
                                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-video yes-marg">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="images/ep3.png" alt="" class="pro-image-front">
                                    <img src="images/ep3.png" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="video-info ">
                                    <h4><a href="single.html">Watches</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$45.99</span>
                                        <del>$69.71</del>
                                    </div>
                                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                        <div class="col-md-3 product-video">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="images/g1.png" alt="" class="pro-image-front">
                                    <img src="images/g1.png" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="video-info ">
                                    <h4><a href="single.html">Dresses</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$45.99</span>
                                        <del>$69.71</del>
                                    </div>
                                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-video">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="images/g2.png" alt="" class="pro-image-front">
                                    <img src="images/g2.png" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="video-info ">
                                    <h4><a href="single.html"> Shirts</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$45.99</span>
                                        <del>$69.71</del>
                                    </div>
                                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-video">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="images/g3.png" alt="" class="pro-image-front">
                                    <img src="images/g3.png" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="video-info ">
                                    <h4><a href="single.html">Shirts</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$45.99</span>
                                        <del>$69.71</del>
                                    </div>
                                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-video">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="images/mw2.png" alt="" class="pro-image-front">
                                    <img src="images/mw2.png" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="video-info ">
                                    <h4><a href="single.html">T shirts</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$45.99</span>
                                        <del>$69.71</del>
                                    </div>
                                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-video yes-marg">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="images/w4.png" alt="" class="pro-image-front">
                                    <img src="images/w4.png" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="video-info ">
                                    <h4><a href="single.html">Air Tshirt Black Domyos</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$45.99</span>
                                        <del>$69.71</del>
                                    </div>
                                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-video yes-marg">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="images/w3.png" alt="" class="pro-image-front">
                                    <img src="images/w3.png" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="video-info ">
                                    <h4><a href="single.html">Hand Bags</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$45.99</span>
                                        <del>$69.71</del>
                                    </div>
                                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                </div>
                            </div>
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
