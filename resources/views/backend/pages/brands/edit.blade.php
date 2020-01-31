@extends('backend.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
        <div class="card-header">Edit Brand</div>
        <div class="card-body">
            <form action="{{ route('admin.brand.update', $brand->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                @include('backend.partials.messages')

                <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $brand->name }}" id="name" placeholder="Enter Brand Name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control">{!! $brand->description !!}</textarea>
                </div>
                <div class="form-group">
                    <label for="brand_image">Brand Old Image</label>
                    <img src="{!! asset('images/brands/'.$brand->image) !!}" width="100">
                    <br><br>
                    <label for="brand_image">Brand New Image (Optional)</label>
                    <input type="file" class="form-control" name="image" id="image">

                </div>
                <button type="submit" class="btn btn-primary">Update Brand</button>
            </form>
        </div>
    </div>

  </div>
</div>
<!-- main-panel ends -->

@endsection