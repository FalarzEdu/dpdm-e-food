<div class="py-8 flex border-t-2 border-gray-800 flex-wrap md:flex-nowrap">
  <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col mr-8">
    <!-- <span class="font-semibold title-font text-white">CATEGORY</span>
    <span class="mt-1 text-gray-500 text-sm">12 Jun 2019</span> -->
    <img alt="ecommerce" class="object-cover object-center w-full h-full block rounded-sm" src="{{ asset("storage/attachments/" . $shop->image) }}">
  </div>
  <div class="md:flex-grow">
    <h2 class="text-2xl font-medium text-white title-font mb-2">{{ $shop->name }}</h2>
    <p class="leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean auctor elit vitae ligula suscipit fermentum. Donec in vehicula lacus. Lorem ipsum dolor sit amet, consectetur.</p>
    <a class="text-indigo-400 inline-flex items-center mt-4">Learn More
      <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path d="M5 12h14"></path>
        <path d="M12 5l7 7-7 7"></path>
      </svg>
    </a>
  </div>
</div>