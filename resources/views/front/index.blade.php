@extends('layouts.front')

@section('content')

@include('includes.slider')

<div class="header-spacer"></div>


<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <article class="hentry post post-standard has-post-thumbnail sticky">

                    <div class="post-thumb">
                        <img src="{{ asset('uploads/events/'. $first_event->cover_image) }}" alt="seo">
                        <div class="overlay"></div>
                        <a href="{{ asset('uploads/events/'. $first_event->cover_image) }}" class="link-image js-zoom-image">
                            <i class="seoicon-zoom"></i>
                        </a>
                        <a href="{{ route('event.detail', ['slug' => $first_event->slug]) }}" class="link-post">
                            <i class="seoicon-link-bold"></i>
                        </a>
                    </div>

                    <div class="post__content">

                        <div class="post__content-info">

                                <h2 class="post__title entry-title ">
                                    <a href="{{ route('event.detail', ['slug' => $first_event->slug]) }}">{{ $first_event->name }}</a>
                                </h2>

                                <div class="post-additional-info">

                                    <span class="post__date">

                                        <i class="seoicon-clock"></i>

                                        <time class="published" datetime="2016-04-17 12:00:00">
                                            {{ $first_event->event_date->toFormattedDateString() }}
                                        </time>

                                    </span>

                                    <span class="category">
                                        <i class="seoicon-tags"></i>
                                        <a href="#">{{ $first_event->category->name}}</a>
                                    </span>

                                    <!-- <span class="post__comments">
                                        <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                        6
                                    </span> -->

                                </div>
                        </div>
                    </div>

            </article>
        </div>
        <div class="col-lg-2"></div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <article class="hentry post post-standard has-post-thumbnail sticky">

                    <div class="post-thumb">
                        <img src="{{ asset('uploads/events/'. $second_event->cover_image) }}" alt="seo">
                        <div class="overlay"></div>
                        <a href="{{ asset('uploads/events/'. $second_event->cover_image) }}" class="link-image js-zoom-image">
                            <i class="seoicon-zoom"></i>
                        </a>
                        <a href="{{ route('event.detail', ['slug' => $second_event->slug]) }}" class="link-post">
                            <i class="seoicon-link-bold"></i>
                        </a>
                    </div>

                    <div class="post__content">

                        <div class="post__content-info">

                                <h2 class="post__title entry-title ">
                                    <a href="{{ route('event.detail', ['slug' => $second_event->slug]) }}">{{ $second_event->name }}</a>
                                </h2>

                                <div class="post-additional-info">

                                    <span class="post__date">

                                        <i class="seoicon-clock"></i>

                                        <time class="published" datetime="">
                                            {{ $second_event->event_date->toFormattedDateString() }}
                                        </time>

                                    </span>

                                    <span class="category">
                                        <i class="seoicon-tags"></i>
                                        <a href="#">{{ $second_event->category->name }}</a>
                                    </span>

                                    <!-- <span class="post__comments">
                                        <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                        6
                                    </span> -->

                                </div>
                        </div>
                    </div>

            </article>
        </div>
        <div class="col-lg-6">
            <article class="hentry post post-standard has-post-thumbnail sticky">

                    <div class="post-thumb">
                        <img src="{{ asset('uploads/events/'. $third_event->cover_image) }}" alt="seo">
                        <div class="overlay"></div>
                        <a href="{{ asset('uploads/events/'. $third_event->cover_image) }}" class="link-image js-zoom-image">
                            <i class="seoicon-zoom"></i>
                        </a>
                        <a href="{{ route('event.detail', ['slug' => $third_event->slug]) }}" class="link-post">
                            <i class="seoicon-link-bold"></i>
                        </a>
                    </div>

                    <div class="post__content">

                        <div class="post__content-info">

                                <h2 class="post__title entry-title ">
                                    <a href="{{ route('event.detail', ['slug' => $third_event->slug]) }}">{{ $third_event->name }}</a>
                                </h2>

                                <div class="post-additional-info">

                                    <span class="post__date">

                                        <i class="seoicon-clock"></i>

                                        <time class="published" datetime="">
                                            {{ $third_event->event_date->toFormattedDateString() }}
                                        </time>

                                    </span>

                                    <span class="category">
                                        <i class="seoicon-tags"></i>
                                        <a href="#">{{ $third_event->category->name}}</a>
                                    </span>

                                    <!-- <span class="post__comments">
                                        <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                        6
                                    </span> -->

                                </div>
                        </div>
                    </div>

            </article>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row medium-padding120 bg-border-color">
        <div class="container">
        	@foreach($categories as $category) 
	        	@if($category->events->count())
		        	<div class="padded-50"></div>
		            <div class="col-lg-12"> 
		                <div class="offers">
		                    <div class="row">
		                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
		                            <div class="heading">
		                                <h4 class="h1 heading-title">{{ $category->name }}</h4>
		                                <div class="heading-line">
		                                    <span class="short-line"></span>
		                                    <span class="long-line"></span>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="row">
		                        <div class="case-item-wrap">
		                        	@foreach($category->events()->orderBy('created_at', 'desc')->take(6)->get() as $event)
		                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		                                <div class="case-item">
		                                    <div class="case-item__thumb">
		                                        <img src="{{ asset('uploads/events/'.$event->cover_image) }}" alt="our case">
		                                    </div>
		                                    <h6 class="case-item__title" style="text-align: center;"><a href="{{ route('event.detail', ['slug' => $event->slug]) }}">{{ $event->name }}</a></h6>
                                            <div class="product-details-info-price" style="color: orange;">Fee: &#8358;{{ number_format($event->price_regular, 2) }}</div>
		                                </div>
		                                <div class="post-additional-info">

		                                    <span class="post__date">

		                                        <i class="seoicon-clock"></i>
		                                        <time class="published" datetime="">
		                                            {{ $event->event_date->toFormattedDateString() }}
		                                        </time>
		                                    </span>

		                                </div>
		                            </div>
		                            @endforeach
		                        </div>
		                    </div>
		                </div>
		                <div class="padded-50"></div>
		            </div>
	            @endif
            @endforeach
        </div>
    </div>
</div>

@endsection