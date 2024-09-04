@extends('layout')

@section('content')
    <h1>Edit Product</h1>
    <form action="{{ route('update_product', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" id="name" placeholder="name" value="{{ old('name', $product->name) }}">
                <label for="name">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="image" id="image" placeholder="image" value="{{ old('image', $product->image) }}">
                <label for="image">Image</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="description" id="description" placeholder="description" value="{{ old('description', $product->description) }}">
                <label for="description">Description</label>
            </div>
            <button type="submit" class="btn btn-success">Edit Product</button>
        </div>
    </form>
@endsection
