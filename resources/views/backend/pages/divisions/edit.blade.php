@extends('backend.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
        <div class="card-header">Edit Division</div>
        <div class="card-body">
            <form action="{{ route('admin.division.update', $division->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                @include('backend.partials.messages')

                <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $division->name }}" id="name" placeholder="Enter Division Name">
                </div>
                <div class="form-group">
                    <label for="priority">Priority</label>
                    <input type="text" class="form-control" name="priority" value="{{ $division->priority }}" id="priority" placeholder="Enter Division Priority">
                </div>
                <button type="submit" class="btn btn-primary">Update Brand</button>
            </form>
        </div>
    </div>

  </div>
</div>
<!-- main-panel ends -->

@endsection