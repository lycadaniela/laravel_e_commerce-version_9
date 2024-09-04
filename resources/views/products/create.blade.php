@extends('layout')

@section('content')
    <h1>Create Product</h1>
    <form action="{{ route('store_product') }}" method="POST">
        @csrf
        {{-- <form action="/product/store" method="POST"> --}}
        <div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" id="name" placeholder="name">
                <label for="name">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="image" id="image" placeholder="image">
                <label for="image">Image</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="description" id="description" placeholder="description">
                <label for="description">Description</label>
            </div>
            <button type="submit" class="btn btn-success">Create Product</button>
        </div>
    </form>
@endsection
