@extends('layouts.BasicLayout')

@section('content')
<body class="z-100">
    <div
        class="flex h-screen bg-gray-50 dark:bg-gray-900"
        :class="{ 'overflow-hidden': isSideMenuOpen }"
    >
        <!-- Desktop sidebar
        <aside
        class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0"
        >
        <div class="py-4 text-gray-500 dark:text-gray-400">
            <a
            class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
            href="#"
            >
            Windmill
            </a>
            <ul class="mt-6">
                <li class="relative px-6 py-3">
                    <span
                    class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"
                    ></span>
                    <a
                    class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                    href="index.html"
                    >
                    <svg
                        class="w-5 h-5"
                        aria-hidden="true"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                        ></path>
                    </svg>
                    <span class="ml-4">Dashboard</span>
                    </a>
                </li>
            </ul>
        </div>
        </aside> -->
        
        <div class="flex flex-col flex-1 w-full">

        <main class="">
            <div class="container px-6 mx-auto grid">
            <h2
                class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
                Dashboard
            </h2>
            <!-- Cards -->
            <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                <!-- Card -->
                <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                >
                <div
                    class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
                >
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                    ></path>
                    </svg>
                </div>
                <div>
                    <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                    >
                    Total Shops
                    </p>
                    <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                    >
                    {{ $totalShops }}
                    </p>
                </div>
                </div>
                <!-- Card -->
                <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                >
                <div
                    class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500"
                >
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        fill-rule="evenodd"
                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                        clip-rule="evenodd"
                    ></path>
                    </svg>
                </div>
                <div>
                    <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                    >
                    Total Revenue
                    </p>
                    <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                    >
                    $ 46,760.89
                    </p>
                </div>
                </div>
                <!-- Card -->
                <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                >
                <div
                    class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500"
                >
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"
                    ></path>
                    </svg>
                </div>
                <div>
                    <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                    >
                    New sales
                    </p>
                    <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                    >
                    376
                    </p>
                </div>
                </div>
                <!-- Card -->
                <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                >
                <div
                    class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500"
                >
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        fill-rule="evenodd"
                        d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                        clip-rule="evenodd"
                    ></path>
                    </svg>
                </div>
                <div>
                    <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                    >
                    Pending contacts
                    </p>
                    <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                    >
                    35
                    </p>
                </div>
                </div>
            </div>

            <!-- New Table -->
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                        <th class="px-4 py-3">Shop</th>
                        <th class="px-4 py-3">Profit</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Last time online</th>
                    </tr>
                    </thead>
                    <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                    >

                    @each('components.AdminShopList', $shops, 'shop')

                    </tbody>
                </table>
                </div>
                <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
                >
                <span class="flex items-center col-span-3">
                    Showing 21-30 of 100
                </span>
                <span class="col-span-2"></span>
                <!-- Pagination -->
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                    <nav aria-label="Table navigation">
                    <ul class="inline-flex items-center">
                        <li>
                        <button
                            class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                            aria-label="Previous"
                        >
                            <svg
                            aria-hidden="true"
                            class="w-4 h-4 fill-current"
                            viewBox="0 0 20 20"
                            >
                            <path
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd"
                                fill-rule="evenodd"
                            ></path>
                            </svg>
                        </button>
                        </li>
                        <li>
                        <button
                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                            1
                        </button>
                        </li>
                        <li>
                        <button
                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                            2
                        </button>
                        </li>
                        <li>
                        <button
                            class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                            3
                        </button>
                        </li>
                        <li>
                        <button
                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                            4
                        </button>
                        </li>
                        <li>
                        <span class="px-3 py-1">...</span>
                        </li>
                        <li>
                        <button
                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                            8
                        </button>
                        </li>
                        <li>
                        <button
                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                            9
                        </button>
                        </li>
                        <li>
                        <button
                            class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                            aria-label="Next"
                        >
                            <svg
                            class="w-4 h-4 fill-current"
                            aria-hidden="true"
                            viewBox="0 0 20 20"
                            >
                            <path
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"
                                fill-rule="evenodd"
                            ></path>
                            </svg>
                        </button>
                        </li>
                    </ul>
                    </nav>
                </span>
                </div>
            </div>
            <div class="w-full flex justify-end ">
            <a href="{{ route('newShop') }}" class="px-4 py-2 bg-gray-700 text-gray-100 mt-4 rounded-lg w-fit">New Shop</a>
            </div> 
        </main>
        </div>
    </div>
</body>
@endsection