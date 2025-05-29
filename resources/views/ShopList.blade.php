@extends('layouts.BasicLayout')

@if (sizeof($shops) > 0)

  @section('content')
    <section class="text-gray-400 bg-gray-900 body-font overflow-hidden w-full">
      <div class="container px-5 py-24 mx-auto">
        <div class="-my-8 divide-y-2 divide-gray-800 flex flex-col justify-center items-center">
          @each('components.ListItem', $shops, 'shop')
        </div>
      </div>
    </section>
  @endsection

@else

  @section('content')
    <section class="text-gray-400 bg-gray-900 body-font overflow-hidden w-full flex justify-center items-center">
      <h2 class="text-3xl mt-64">Nothing to show here!</h2>
    </section>
  @endsection

@endif