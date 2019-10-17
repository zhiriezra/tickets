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
                    <a href="">Add Events</a>
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

            <form class="form-horizontal" action="{{ route('event.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Event Category</label>
                        <div class="col-md-8">
                            <select class="form-control" name="category">
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
                            <input type="text" class="form-control" placeholder="Event name here..." name="name">

                            @if ($errors->has('name'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Regular Price</label>
                        <div class="col-md-8">
                            <input type="number" class="form-control" placeholder="2,000" name="price_regular">
                            @if ($errors->has('price_regular'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('price_regular') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">VIP Price</label>
                        <div class="col-md-8">
                            <input type="number" class="form-control" placeholder="5,000" name="price_vip">
                            @if ($errors->has('price_vip'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('price_vip') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">VVIP Price</label>
                        <div class="col-md-8">
                            <input type="number" class="form-control" placeholder="7,000" name="price_vvip">
                            @if ($errors->has('price_vvip'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('price_vvip') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Event Date</label>
                        <div class="col-md-8">
                            <input type="date" class="form-control" placeholder="7,000" name="event_date">
                            @if ($errors->has('event_date'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('event_date') }}</strong>
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
                            <textarea class="form-control" name="venue"></textarea>
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
                            <textarea class="form-control" name="description"></textarea>
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
                            <input type="file" class="form-control" placeholder="Event name here..." name="cover_image">
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
