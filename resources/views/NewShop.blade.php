@extends('layouts.BasicLayout')

@if ($errors->any())
  @include('components.ErrorMessage', ['errors' => $errors])
@endif

@section('content')
<div class="max-w-md mx-auto mt-10 bg-gray-800 p-8 rounded shadow text-white">
  <h2 class="text-2xl font-semibold mb-6 text-white">Register New Shop</h2>
  <form action="{{ route('storeShop') }}" method="POST" class="space-y-5" enctype="multipart/form-data">
    @csrf
    <div>
      <label for="name" class="block text-white mb-1">Shop Name</label>
      <input type="text" name="name" id="name" required
        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
        placeholder="Enter shop name">
    </div>
    <div>
      <label for="category" class="block text-white mb-1">Category</label>
      <select name="food_category_id" id="food_category_id" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        @foreach ($categories as $category)
          <option class="text-black" value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
    </div>
    <div>
      <label for="image" class="block text-white mb-1">Logo</label>
      <input type="file" name="image" id="image" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
    </div>
    <button type="submit"
      class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">Register Shop</button>
  </form>
</div>
@endsection