@extends('layouts.master')
@section('content')
    @include('includes.header')
    @include('includes.top-nav')
    <div class="product-easy">
	<div class="container">
		{{-- <div class="sap_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Latest Designs</span></li> 
					<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Special Offers</span></li> 
					<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Collections</span></li> 
				</ul>				  	 
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0"> --}}
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
                                            @if ($song->user->isOwn())
                                                <div class="col-md-2">
                                                    <div class="dropdown">
                                                    <a class="dropdown-toggle" type="button" data-toggle="dropdown">&#8942;
                                                      </a>
                                                    <ul class="dropdown-menu">
														<li><a href="/users/{{$song->user->id}}">Post by {{$song->user->name}}</a></li>
                                                        {{-- <li><a href="/singers/{{$song->singer()->first()->id}}">Singer: {{$song->singer()->first()->id}}</a></li> --}}
                                                    </ul>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
						@endforeach
						<div class="clearfix"></div>
						
					{{-- </div>
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
						<div class="col-md-3 product-video">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/w1.png" alt="" class="pro-image-front">
									<img src="images/w1.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Wedges</a></h4>
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
								<div class="item-info-product ">
									<h4><a href="single.html">Dresses</a></h4>
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
		</div> --}}
	</div>
</div>
    @include('includes.footer')
    @include('modal.sign-in')
    @include('modal.sign-up')
@endsection
