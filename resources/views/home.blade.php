@extends('layouts.BasicLayout')

@section('content')
    <section class="text-gray-400 bg-gray-900 body-font w-full h-fit">
        <div class="container px-5 py-24 mx-auto">
            <h2 class="mb-6 text-xl">Categories</h2>
            <div class="flex flex-wrap -m-4">
                @each('components.HomeCard', $foodCategories, 'category')
            </div>
        </div>
    </section>
@endsection