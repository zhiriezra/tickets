@extends('layouts.front')

@section('content')


<!-- Stunning Header -->

<div class="stunning-header stunning-header-bg-lightviolet">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title">{{ $event->name }}</h1>
    </div>
</div>

<!-- End Stunning Header -->

<!-- Post Details -->


<div class="container">
    <div class="row medium-padding120">
        <div class="product-details">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="product-details-thumb">
                    <div class="swiper-container" data-effect="fade">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="product-details-img-wrap swiper-slide">
                                <img src="{{ asset('uploads/events/'. $event->cover_image) }}" alt="product" data-swiper-parallax="-10">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <form action="{{ route('event.order', ['slug' => $event->slug]) }}" method="post">
                    @csrf

                    <div class="">
                        <label>Ticket category:</label><br>
                        <select name="category">
                            <option>-- Select Category --</option>
                            <option value="{{ $event->price_regular }}">&#8358;{{ number_format($event->price_regular, 2) }}</option>
                            <option value="{{ $event->price_vip }} ">&#8358;{{ number_format($event->price_vip, 2) }}</option>
                            <option value="{{ $event->price_vvip }}">&#8358;{{ number_format($event->price_vvip, 2) }}</option>
                        </select>
                        
                    </div>
                    <div class="">
                        <label>Email Address:</label><br>
                        <input type="text" name="email" placeholder="Valid email address." class="email input-standard-grey">
                    </div>

                    <button type="submit" class="btn btn-medium btn--primary">
                        <span class="text">Purchase</span>
                        <i class="seoicon-commerce"></i>
                        <span class="semicircle"></span>
                    </button>
                </form>
            </div>


            <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12 col-xs-offset-0">
                <div class="product-details-info">
                    <div class="product-details-info-price">&#8358;{{ number_format($event->price_vip, 2) }} - VIP</div>
                    <div class="product-details-info-price">&#8358;{{ number_format($event->price_regular, 2) }} - Regular</div>
                    <div class="product-details-info-price">&#8358;{{ number_format($event->price_vvip, 2) }} - VVIP</div>
                    <h3 class="product-details-info-title">{{ $event->name }}</h3>
                    <span>

                    	<i class="seoicon-clock"></i>

                        <time class="published" datetime="">
                            {{ $event->event_date->toFormattedDateString() }}
                        </time>
                    </span>
                    <span class="category">
                        <i class="seoicon-tags"></i>
                        <span href="#">{{ $event->category->name}}</span>
                    </span>
                    <hr>
                    <p class="product-details-info-text" style="text-align: justify;">
                    	{{ $event->description }}
                    </p>

                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection