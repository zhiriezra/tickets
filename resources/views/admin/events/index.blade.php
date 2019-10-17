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
                    <a href="">Active Events</a>
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

            <table class="table table-bordered" id="datatable-buttons">
                <thead>
                    <th>#</th>
                    <th></th>
                    <th>Name</th>
                    <th>Event Owner</th>
                    <th>Regular</th>
                    <th>VIP</th>
                    <th>VVIP</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Date Created</th>
                    <th></th>
                </thead>
                <tbody>
                    @php
                        $count = 1;
                    @endphp

                    @foreach($events as $event)
                    <tr>
                        <td>{{ $count++ }}</td>
                        <td>
                            <img src="{{ asset('uploads/events/'. $event->cover_image)}}" width="50" height="20">
                        </td>
                        <td title="{{ $event->venue}}">{{ $event->name }}</td>
                        <td>{{ $event->category->name }}</td>
                        <td>&#8358;{{ number_format($event->price_regular, 2) }}</td>
                        <td>&#8358;{{ number_format($event->price_vip, 2) }}</td>
                        <td>&#8358;{{ number_format($event->price_vvip, 2) }}</td>
                        <td>{{ $event->description }}</td>
                        <td>
                            @if($event->active)
                                <span class="text-success">Active</span>
                            @else
                                <span class="text-danger">Inactive</span>
                            @endif
                        </td>
                        <td>{{ $event->created_at->toFormattedDateString() }}</td>
                        <td>
                            <a href="{{ route('event.edit', ['slug' => $event->slug]) }}" class="btn btn-primary btn-xs">Edit</a>
                            <a href="{{ route('category.remove', ['slug' => $event->slug]) }}" class="btn btn-danger  btn-xs">Remove</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>
<!-- end row -->
@endsection
