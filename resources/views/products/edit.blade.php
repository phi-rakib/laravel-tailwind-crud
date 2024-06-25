@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-4">Edit Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name:</label>
            <input type="text" name="name" id="name" value="{{ $product->name }}" class="w-full p-2 border border-gray-300 rounded-md">
        </div>
        <div class="mb-4">
            <label for="price" class="block text-gray-700">Price:</label>
            <input type="text" name="price" id="price" value="{{ $product->price }}" class="w-full p-2 border border-gray-300 rounded-md">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Update Product</button>
    </form>
</div>
@endsection
