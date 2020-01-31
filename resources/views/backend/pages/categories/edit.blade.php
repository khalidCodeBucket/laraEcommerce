@extends('backend.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
        <div class="card-header">Edit Category</div>
        <div class="card-body">
            <form action="{{ route('admin.category.update', $category->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                @include('backend.partials.messages')

                <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $category->name }}" id="name" placeholder="Enter Category Name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control">{!! $category->description !!}</textarea>
                </div>
                <div class="form-group">
                    <label for="price">Parent Category</label>
                    <select class="form-control" name="parent_id" id="">
                        <option value="">Please select a Primary category</option>
                        @foreach($main_categories as $cat)
                            <option value="{{ $cat->id }}" {{ $cat->id == $category->parent_id ? 'selected' : '' }}>{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="category_image">Category Old Image</label>
                    <img src="{!! asset('images/categories/'.$category->image) !!}" width="100">
                    <br><br>
                    <label for="category_image">Category New Image (Optional)</label>
                    <input type="file" class="form-control" name="image" id="image">

                </div>
                <button type="submit" class="btn btn-primary">Update Category</button>
            </form>
        </div>
    </div>

  </div>
</div>
<!-- main-panel ends -->

@endsection