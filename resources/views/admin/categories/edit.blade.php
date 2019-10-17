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
                    <a href="{{ route('categories') }}">All Categories</a>
                </li>

                <li>
                    <a href="" class="active">Edit Category</a>
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

            <form class="form-horizontal" action="{{ route('category.update', ['slug' => $category->slug]) }}" method="post">
                @csrf
                <div class="form-group">
                    <label class="col-md-2 control-label">Category Name</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="Category name here..." name="name" value="{{ $category->name }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label"></label>
                    <div class="col-md-8">
                        <input type="submit" class="btn btn-primary" value="update">
                    </div>
                </div> 
            </form>

        </div>
    </div>
</div>
<!-- end row -->
@endsection
