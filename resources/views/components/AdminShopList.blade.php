

<tr class="text-gray-700 dark:text-gray-400">
    <td class="px-4 py-3">
      <div class="flex items-center text-sm">
          <!-- Avatar with inset shadow -->
          <div
          class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
          >
          <img
              class="object-cover w-full h-full rounded-full"
              src="{{ asset("storage/attachments/" . $shop->image) }}"
              alt=""
              loading="lazy"
          />
          <div
              class="absolute inset-0 rounded-full shadow-inner"
              aria-hidden="true"
          ></div>
          </div>
          <div>
          <p class="font-semibold">{{ $shop->name }}</p>
          <!-- <p class="text-xs text-gray-600 dark:text-gray-400">
              10x Developer
          </p> -->
          </div>
      </div>
      </td>
      <td class="px-4 py-3 text-sm">
        R${{ number_format(rand() % 1000 + 1000, 2, ',', '.') }}
      </td>
      <td class="px-4 py-3 text-xs">
      <a href="{{ route('switchStatus', ['id' => $shop->id]) }}">
        @if ($shop->status == 'active')
          <span
              class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
          >
              {{ $shop->status }}
          </span>
        @else 
          <span
              class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-100"
          >
              {{ $shop->status }}
          </span>
        @endif
      </a>
      </td>
      <td class="px-4 py-3 text-sm">
      {{ $shop->updated_at->format('d/m/Y') }}
    </td>
</tr>
