@extends('backend.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
        <div class="card-header">Add Product</div>
        <div class="card-body">
            <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
            
                @csrf

                @include('backend.partials.messages')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" id="price">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" class="form-control" name="quantity" id="quantity">
                </div>
                <div class="form-group">
                    <label for="quantity">Select Category</label>
                    <select class="form-control" name="category_id">
                        <option value="">Please select a category for the product</option>
                        @foreach(App\Models\Category::orderBy('name', 'asc')->where('parent_id', NULL)->get() as $parent)
                            <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                            @foreach(App\Models\Category::orderBy('name', 'asc')->where('parent_id', $parent->id)->get() as $child)
                                <option value="{{ $child->id }}"> ------> {{ $child->name }}</option>
                            @endforeach
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="quantity">Select Brand</label>
                    <select class="form-control" name="brand_id">
                        <option value="">Please select a Brand for the product</option>
                        @foreach(App\Models\Brand::orderBy('name', 'asc')->get() as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="product_image">Product Image</label>
                    <div class="row">
                        <div class="col-md-4">
                            <input type="file" class="form-control" name="product_image[]" id="product_image">
                        </div>
                        <div class="col-md-4">
                            <input type="file" class="form-control" name="product_image[]" id="product_image">
                        </div>
                        <div class="col-md-4">
                            <input type="file" class="form-control" name="product_image[]" id="product_image">
                        </div>
                        <div class="col-md-4">
                            <input type="file" class="form-control" name="product_image[]" id="product_image">
                        </div>
                        <div class="col-md-4">
                            <input type="file" class="form-control" name="product_image[]" id="product_image">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add Product</button>
            </form>
        </div>
    </div>

  </div>
</div>
<!-- main-panel ends -->

@endsection