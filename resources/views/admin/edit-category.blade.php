@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>Edit Category</h1>
    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="category_name">Category Name</label>
            <input type="text" name="category_name" id="category_name" class="form-control" value="{{ $category->category_name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection