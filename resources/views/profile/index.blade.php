@extends('layouts.master')
@section('content')
@include('includes.header')
<div class="new_arrivals">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3><span>{{ Auth::user()->name }}</span></h3>
                <p>Follow</p>
                <p>Following</p>
            </div>
            <div class="col-md-6">
                <img class="img-circle" src="" alt="">
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
                            <div class="col-md-3 product-men">
                                <div class="video post">
                                    <a href="#" data-toggle="modal" data-target="#modalPostVideo">
                                        <img src="{{ asset('/images/plus.png') }}">
                                    </a>
                                </div>
                            </div>
                            @foreach($myPosts as $song)
                                <div class="col-md-3 product-men">
                                <div class="video">
                                    <div class="video-image">
                                        <img src="http://img.youtube.com/vi/AnFVQ9QctYI/0.jpg" alt="{{ $song->name }}">
                                        <img class="ic-play" src="{{ asset("images/ic_play.png") }}">
                                        <span class="product-new-top">New</span>
                                    </div>
                                    <div class="video-info ">
                                        <h4><a href="https://www.youtube.com/watch?v={{ $song->code }}">{{ $song->name }}</a></h4>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                        <div class="col-md-3 product-men">
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
                        <div class="col-md-3 product-men">
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
                        <div class="col-md-3 product-men">
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
                        <div class="col-md-3 product-men">
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
                        <div class="col-md-3 product-men yes-marg">
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
                        <div class="col-md-3 product-men yes-marg">
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
                        <div class="col-md-3 product-men">
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
                        <div class="col-md-3 product-men">
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
                        <div class="col-md-3 product-men">
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
                        <div class="col-md-3 product-men">
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
                        <div class="col-md-3 product-men yes-marg">
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
                        <div class="col-md-3 product-men yes-marg">
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
@include('modal.post-video')
@include('includes.footer')
@endsection
