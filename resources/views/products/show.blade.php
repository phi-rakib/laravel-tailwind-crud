@extends('layouts.app')

@section('title', 'Product Details')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-4">Product Details</h1>
    <div class="mb-4">
        <label class="block text-gray-700">Name:</label>
        <p class="text-lg">{{ $product->name }}</p>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700">Price:</label>
        <p class="text-lg">{{ $product->price }}</p>
    </div>
    <a href="{{ route('products.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">Back to Products</a>
</div>
@endsection
