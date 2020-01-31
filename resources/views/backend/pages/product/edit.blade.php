@extends('backend.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
        <div class="card-header">Edit Product</div>
        <div class="card-body">
            <form action="{{ route('admin.product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                
                @csrf
                @include('backend.partials.messages')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" value="{{ $product->title }}" id="title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $product->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" value="{{ $product->price }}" id="price">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" class="form-control" name="quantity" value="{{ $product->quantity }}" id="quantity">
                </div>
                <div class="form-group">
                    <label for="quantity">Select Category</label>
                    <select class="form-control" name="category_id">
                        <option value="">Please select a category for the product</option>
                        @foreach(App\Models\Category::orderBy('name', 'asc')->where('parent_id', NULL)->get() as $parent)
                            <option value="{{ $parent->id }}" {{ $parent->id == $product->category->id ? 'selected' : '' }}>{{ $parent->name }}</option>
                            @foreach(App\Models\Category::orderBy('name', 'asc')->where('parent_id', $parent->id)->get() as $child)
                                <option value="{{ $child->id }}" {{ $child->id == $product->category->id ? 'selected' : '' }}> ------> {{ $child->name }}</option>
                            @endforeach
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="quantity">Select Brand</label>
                    <select class="form-control" name="brand_id">
                        <option value="">Please select a Brand for the product</option>
                        @foreach(App\Models\Brand::orderBy('name', 'asc')->get() as $br)
                            <option value="{{ $br->id }}" {{ $br->id == $product->brand->id ? 'selected' : '' }}>{{ $br->name }}</option>
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
                <button type="submit" class="btn btn-primary">Update Product</button>
            </form>
        </div>
    </div>

  </div>
</div>
<!-- main-panel ends -->

@endsection