@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="page-title-box">
            <h4 class="page-title">Dashboard</h4>
            <ol class="breadcrumb p-0 m-0">
                <li>
                    <a href="">Dashboard</a>
                </li>

                <li>
                    <a href="">Edit Event</a>
                </li>
            </ol>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <img src="{{asset('uploads/events/'.$event->cover_image) }}" height="100" width="100">
            <form class="form-horizontal" action="{{ route('event.update', ['slug' => $event->slug]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Event Category</label>
                        <div class="col-md-8">
                            <select class="form-control" name="category">
                                <option value="{{ $event->category->id}}">{{ $event->category->name }}</option>
                                <option>--select category--</option>
                                @foreach($eventCategories as $category)
                                <option value="{{ $category->id}}">{{ $category->name }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('category'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('category') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Event Name</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" value="{{ $event->name }}" name="name">

                            @if ($errors->has('name'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Regular Price (&#8358;)</label>
                        <div class="col-md-8">
                            <input type="number" class="form-control" value="{{ $event->price_regular }}" name="price_regular">
                            @if ($errors->has('price_regular'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('price_regular') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">VIP Price (&#8358;)</label>
                        <div class="col-md-8">
                            <input type="number" class="form-control" value="{{ $event->price_vip }}" name="price_vip">
                            @if ($errors->has('price_vip'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('price_vip') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">VVIP Price (&#8358;)</label>
                        <div class="col-md-8">
                            <input type="number" class="form-control" value="{{ $event->price_vvip }}" name="price_vvip">
                            @if ($errors->has('price_vvip'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('price_vvip') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-8">
                            <input type="submit" class="btn btn-primary" value="submit">
                        </div>
                    </div> 

                </div>

                <div class="col-sm-6">

                    <div class="form-group">
                        <label class="col-md-4 control-label">Event Owner</label>
                        <div class="col-md-8">
                            <select class="form-control" name="eventOwner">
                                <option value="{{ $event->user->id}}">{{ $event->user->name }}</option>
                                <option>--select owner--</option>
                                @foreach($eventOwners as $owner)
                                <option value="{{ $owner->id}}">{{ $owner->name }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('eventOwner'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('eventOwner') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Event Venue</label>
                        <div class="col-md-8">
                            <textarea class="form-control" name="venue">{{ $event->venue }}</textarea>
                            @if ($errors->has('venue'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('venue') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Event Description</label>
                        <div class="col-md-8">
                            <textarea class="form-control" name="description">{{ $event->description }}</textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Cover Image</label>
                        <div class="col-md-8">
                            <input type="file" class="form-control" name="cover_image">
                            @if ($errors->has('cover_image'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('cover_image') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>
<!-- end row -->
@endsection
