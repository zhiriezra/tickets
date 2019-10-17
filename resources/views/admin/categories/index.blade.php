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
                    <a href="">Categories</a>
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
                    <th>Name</th>
                    <th>Date Created</th>
                    <th></th>
                </thead>
                <tbody>
                    @php
                        $count = 1;
                    @endphp

                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $count++ }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->created_at->toFormattedDateString() }}</td>
                        <td>
                            <a href="{{ route('category.edit', ['slug' => $category->slug]) }}" class="btn btn-primary btn-xs">Edit</a>
                            <a href="{{ route('category.remove', ['slug' => $category->slug]) }}" class="btn btn-danger  btn-xs">Remove</a>
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
