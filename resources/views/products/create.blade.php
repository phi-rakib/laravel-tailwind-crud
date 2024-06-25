@extends('layouts.app')

@section('title', 'Add New Product')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-4">Add New Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name:</label>
            <input type="text" name="name" id="name" class="w-full p-2 border border-gray-300 rounded-md">
        </div>
        <div class="mb-4">
            <label for="price" class="block text-gray-700">Price:</label>
            <input type="text" name="price" id="price" class="w-full p-2 border border-gray-300 rounded-md">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Add Product</button>
    </form>
</div>
@endsection
