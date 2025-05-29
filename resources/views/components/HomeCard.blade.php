
<div class="lg:w-1/4 md:w-1/2 p-4 w-full">
    <a href="{{ route('shops-list', ["category_id" => $category->id]) }}" class="block relative h-48 rounded overflow-hidden">
    <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset("storage/attachments/" . $category->image) }}">
    </a>
    <div class="mt-4">  
    <h2 class="text-white title-font text-lg font-medium">{{ $category->name }}</h2>
    <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $category->description }}</h3>
    </div>
</div>