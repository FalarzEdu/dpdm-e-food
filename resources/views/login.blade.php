@extends("layouts.BasicLayout")

@section('content')

  @if ($errors->any())
    @include('components.ErrorMessage', ['errors' => $errors])
  @endif
  <div class="bg-gray-900 w-full h-full flex items-center justify-center mt-64">
    <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-96">
      <h2 class="text-white text-2xl mb-6 text-center">Admin Login</h2>
      <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-4">
          <label for="email" class="block text-white mb-2">Email</label>
          <input type="email" name="email" id="email" class="w-full p-2 bg-gray-700 text-white rounded" required>
        </div>
        <div class="mb-4">
          <label for="password" class="block text-white mb-2">Password</label>
          <input type="password" name="password" id="password" class="w-full p-2 bg-gray-700 text-white rounded" required>
        </div>
        <button type="submit" class="w-full bg-indigo-500 hover:bg-indigo-600 text-white py-2 rounded">Login</button>
      </form>
    </div>
  </div>

@endsection