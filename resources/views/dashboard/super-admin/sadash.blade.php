@extends('dashboard.layout.main')

@section('mainContent')

{{-- Overview --}}
<div
    class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-9 mx-auto mt-10 pb-10 max-w-screen-lg">
    <div class="py-2 rounded-xl border border-gray-400/70 bg-gray-200/0 shadow-md shadow-gray-400 w-52 h-40 mx-auto">
        <h3 class="absolute ml-3 text-xl font-bold text-black">Marketing</h3>
        <p class="absolute mt-10 ml-3 text-md font-semibold text-gray-900/70">Target</p>
        <p class="absolute mt-16 ml-3 text-xl font-extrabold text-gray-900/70">{{ 'Rp ' . number_format($totalTercapai,
            2, ',', '.') }}</p>
        <div class="inline-flex absolute stroke-gray-900 w-5 h-5 ml-44 mt-1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
        </div>
        <div class="inline-block top-0 rounded bg-green-200 text-green-600 w-16 h-4 mt-28 ml-32">
            <p class="text-center ml-1 text-xs font-medium">+ 67,81 %</p>
        </div>
    </div>

    <div class="py-2 rounded-xl border border-gray-400/70 bg-gray-200/0 shadow-md shadow-gray-400 w-52 h-40 mx-auto">
        <h3 class="absolute ml-3 text-xl font-bold text-black">Finance</h3>
        <p class="absolute mt-16 ml-3 text-xl font-extrabold text-gray-900/70">{{ 'Rp. ' . number_format($totalRevenue,
            0, ',', '.') }}</p>
        <div class="inline-flex absolute stroke-gray-900 w-5 h-5 ml-44 mt-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                <polyline points="16 7 22 7 22 13"></polyline>
            </svg>
        </div>
        <div class="inline-block top-0 rounded bg-green-200 text-green-600 w-16 h-4 mt-28 ml-32">
            <p class="text-center ml-1 text-xs font-medium">+ 67,81 %</p>
        </div>
    </div>

    <div class="py-2 rounded-xl border border-gray-400/70 bg-gray-200/0 shadow-md shadow-gray-400 w-52 h-40 mx-auto">
        <h3 class="absolute ml-3 text-xl font-bold text-black">Logistik</h3>
        <p class="absolute mt-16 ml-3 text-xl font-extrabold text-gray-900/70">{{ $logistik }}</p>
        <div class="inline-flex absolute stroke-gray-900 w-5 h-5 ml-44 mt-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path
                    d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                </path>
                <polyline points="3.29 7 12 12 20.71 7"></polyline>
                <line x1="12" y1="22" x2="12" y2="12"></line>
            </svg>
        </div>
        <div class="inline-block top-0 rounded bg-red-200 text-red-600 w-16 h-4 mt-28 ml-32">
            <p class="text-center ml-1 text-xs font-medium">- 7,81 %</p>
        </div>
    </div>
</div>



{{-- Order Stats --}}
<div class="ml-10 mt-14 md:ml-32 grid grid-flow-col gap-x-2 gap-y-4 md:gap-x-0 md:gap-y-0 md:flex md:items-center">
    <h5 class="mb-2 ml-5 text-2xl font-bold tracking-tight text-gray-900">Order Stats</h5>
</div>
<div
    class="inline-block p-6 bg-white border border-gray-200 rounded-xl ml-4 md:ml-36 mt-4 md:mt-0 hover:bg-gray-100 shadow-2xl w-full md:w-[1070px] h-[600px]">
    <div class="grid grid-flow-col justify-end mb-8 mr-1 gap-2">
        <button class="text-gray-600 text-sm font-medium hover:text-gray-900 grid grid-flow-col gap-2" id="sortBy"
            data-dropdown-toggle="sortBytrigger">
            Sort by
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="w-4 h-4 inline-block mt-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </button>
    </div>
    <div id="chart-container">
        <div id="{!! $saleThisMonth->container() !!}"></div>
    </div>
</div>


{{-- Top Products --}}
<div class="mt-14 ml-4 md:ml-[169px]">
    <div
        class="inline-block p-6 bg-white border border-gray-200 rounded-xl hover:bg-gray-100 shadow-2xl w-full md:w-[1024px] h-[700px]">
        <div class="flex justify-between items-center mb-6 md:mb-0">
            <h5 class="text-2xl font-bold tracking-tight text-gray-900">Top Products</h5>
            <div class="flex items-center">
                <button class="text-gray-600 text-sm font-medium hover:text-gray-900" id="topProducts"
                    data-dropdown-toggle="topProductsTrigger">
                    Sort By
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-4 h-4 inline-block ml-1 -mt-0.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-2 gap-y-4 py-10">
            @foreach ($topProducts as $product)
            <div class="grid grid-flow-row gap-3">
                <p class="text-[32px] text-black ml-9">{{ $loop->iteration }}</p>
                <div class="flex flex-wrap">
                    <div
                        class="bg-bgTopProducs rounded-full shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] h-[94px] w-[93px]">
                        <img class="mt-3 w-52 h-20" src="Assets\images\pure-honey-1-removebg-preview.png" />
                    </div>
                </div>
                <p class="text-base text-black">{{ $product->nama_barang }}</p>
                <p class="px-5 text-base text-black">{{ $product->size }}</p>
                <p class="px-5 text-base text-black">{{ $product->total_order }} PCS</p>
            </div>
            @endforeach
        </div>
    </div>
</div>


{{-- Table Stok Produk --}}
<div
    class="max-w-5xl bg-white border border-black rounded-lg shadow-[0px_8px_8px_rgba(0,0,0,0.5)] mt-28 mb-10 ml-4 md:ml-[169px]">
    <a href="#">
        <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
    </a>
    <div class="mx-4 md:mx-10 my-5">
        <h5 class="text-2xl font-black tracking-tight text-stockProductText text-center md:text-left">Stok Produk</h5>


        <div class="relative overflow-x-auto py-10">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-sm text-[#464D51] uppercase">
                    <tr>
                        <th scope="col" class="px-3 py-3">
                            Produk
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Kode Barang
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Ammount
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Min. Ammount
                        </th>
                        <th scope="col" class="px-3 py-3">
                            HPP
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Price Ecer
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Price Maklon
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Price Distributor
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Asset
                        </th>
                    </tr>
                </thead>
                <tbody class="self-center">
                    @foreach ($hppPaginate as $hppPaginates)
                    <tr class="">
                        <th scope="row" class="px-3 py-4 font-light text-[#464D51]">
                            {{$hppPaginates->nama_barang}}
                        </th>
                        <th scope="row" class="px-3 py-4 font-light text-[#464D51]">
                            {{$hppPaginates->kode_barang}}
                        </th>
                        <td class="px-3 py-4">
                            {{ $hppPaginates->stock }}
                        </td>
                        <td class="px-3 py-4">
                            {{ $hppPaginates->min_ammount }}
                        </td>
                        <td class="px-3 py-4">
                            {{ 'Rp ' . number_format($hppPaginates->total_hpp, 0, ',', '.') }}
                        </td>
                        <td class="px-3 py-4">
                            {{ 'Rp ' . number_format($hppPaginates->harga_ecer, 0, ',', '.') }}
                        </td>
                        <td class="px-3 py-4">
                            {{ 'Rp ' . number_format($hppPaginates->harga_mkl, 0, ',', '.') }}
                        </td>
                        <td class="px-3 py-4">
                            {{ 'Rp ' . number_format($hppPaginates->harga_ds, 0, ',', '.') }}
                        </td>
                        <td class="px-3 py-4">
                            {{ 'Rp ' . number_format(($hppPaginates->total_hpp * $hppPaginates->stock), 0, ',', '.') }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>


    <!-- Pagination -->
    <div class="flex justify-center py-5">
        {{ $hppPaginate->links() }}
    </div>
</div>

{{-- Table Low Stok --}}
<div
    class="max-w-5xl bg-white border border-black rounded-lg shadow-[0px_8px_8px_rgba(0,0,0,0.5)] mt-28 mb-10 ml-4 md:ml-[169px]">
    <a href="#">
        <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
    </a>
    <div class="mx-4 md:mx-10 my-5">
        <h5 class="text-2xl font-black tracking-tight text-stockProductText text-center md:text-left">Low Stock</h5>

        <div class="relative overflow-x-auto py-10">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-sm text-[#464D51] uppercase">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Produk
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kode Barang
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ammount
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Min. Ammount
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga Ecer
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga Maklon
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga Reseller
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga Distributor
                        </th>
                    </tr>
                </thead>
                <tbody class="self-center">
                    @foreach ($lowStocksPaginate as $lowStocksPaginates)
                    <tr class="self-center">
                        <th scope="row" class="px-6 py-4 font-light text-[#464D51]">
                            {{ $lowStocksPaginates->nama_barang }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-light text-[#464D51]">
                            {{ $lowStocksPaginates->kode_barang }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $lowStocksPaginates->stock }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $lowStocksPaginates->min_ammount }}
                        </td>
                        <td class="px-6 py-4">
                            {{ 'Rp ' . number_format($lowStocksPaginates->harga_ecer, 0, ',', '.') }}
                        </td>
                        <td class="px-6 py-4">
                            {{ 'Rp ' . number_format($lowStocksPaginates->harga_rs, 0, ',', '.') }}
                        </td>
                        <td class="px-6 py-4">
                            {{ 'Rp ' . number_format($lowStocksPaginates->harga_mkl, 0, ',', '.') }}
                        </td>
                        <td class="px-6 py-4">
                            {{ 'Rp ' . number_format($lowStocksPaginates->harga_ds, 0, ',', '.') }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    <div class="flex justify-center py-5">
        {{ $lowStocksPaginate->links() }}
    </div>
</div>

{{-- Top Customers --}}
<div class="ml-[123px] px-12 mt-10 p-10">
    <div class=" max-w-5xl h-[480px] p-6 bg-white border border-gray-200 rounded-xl  hover:bg-gray-100 shadow-2xl">
        <h5 class="inline-flex absolute mb-2 text-2xl font-bold tracking-tight  text-gray-900 ">Top Customers</h5>
        <div class="inline-flex ml-[900px]">
            <p class="font-normal text-xl text-black/60">Daily</p>
            <button id="topCustomers" data-dropdown-toggle="topCustomersTrigger">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
        </div>
        <div class=" mt-14 ml-24 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-9">
            @foreach ($topCust as $top)
            <div
                class="py-2 inline-flex rounded-xl border border-gray-400/70 bg-gray-200/0 shadow-md shadow-gray-400 w-60 h-72">
                <h3 class="absolute mt-4 ml-28 text-3xl font-bold text-black">{{ $loop->iteration }}</h3>
                <p class="absolute mt-20 ml-24 text-2xl font-extrabold text-gray-900">{{ $top['nama_lengkap'] }}</p>
                <div class="inline-flex absolute stroke-gray-900 w-5 h-5  ml-[200px] mt-0">
                    <a href="{{ route('topcust', ['id' => $top['customer_id']]) }}">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>
                        </button>
                    </a>
                </div>
                <div class="mt-[120px] py-2 inline-flex absolute">
                    <p class="self-center text-md text-black font-semibold ml-3 ">Total Orders</p>
                    <p class="place-self-center text-md text-black font-normal ml-10 ">{{ $top['total_pembelian'] }}</p>
                </div>
                <div class="mt-[155px] py-2 inline-flex absolute">
                    <p class="self-center text-md text-black font-semibold ml-3 ">Revenue</p>
                    <p class="place-self-center text-md text-black font-normal ml-9 ">{{ 'Rp ' .
                        number_format($top['revenue'], 0, ',', '.') }}</p>
                </div>
                @foreach ($top['favorite_products'] as $fav)
                <div class="inline-flex mt-56 ml-2">
                    <div class="bg-bgTopProducs ml-8 rounded-full shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] h-8 w-8">
                        <img src="Assets\images\pure-honey-1-removebg-preview.png" />
                    </div>
                    <div class="mt-8 inline-flex absolute ml-3">
                        <p class="text-xs">{{ $fav }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>


<!-- Back to top button -->
<button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
    class="p-3 bg-background text-black font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-gradient-to-bl from-yellow-200 to-bg-yellow-300 focus:ring-yellow-400 focus:shadow-lg focus:outline-none transition duration-150 ease-in-out hidden bottom-5 right-5 fixed"
    id="btn-back-to-top">
    <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-4 h-4" role="img"
        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
        <path fill="currentColor"
            d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z">
        </path>
    </svg>
</button>

<!-- Order Stats Dropdown Menu -->
<div id="topProductsTrigger" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="topProducts">
        <li>
            <a href="{{ route('superadmin.sort-channels', ['topProducts' => 'Daily']) }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 @if(request('topProducts') == 'Daily') bg-gray-100 dark:bg-gray-600 @endif"">Daily</a>
        </li>
        <li>
            <a href=" {{ route('superadmin.sort-channels', ['topProducts'=> 'Monthly']) }}" class="block px-4 py-2
                hover:bg-gray-100 dark:hover:bg-gray-600 @if(request('topProducts') == 'Monthly') bg-gray-100
                dark:bg-gray-600 @endif">Monthly</a>
        </li>
        <li>
            <a href="{{ route('superadmin.sort-channels', ['topProducts' => 'Yearly']) }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600  @if(request('topProducts') == 'Yearly') bg-gray-100 dark:bg-gray-600 @endif">Yearly</a>
        </li>
        <li>
    </ul>
</div>

<div id="topCustomersTrigger" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="topCustomers">
        <li>
            <a href="{{ route('superadmin.sort-channels', ['topCustomers' => 'Daily']) }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 @if(request('topCustomers') == 'Daily') bg-gray-100 dark:bg-gray-600 @endif"">Daily</a>
        </li>
        <li>
            <a href=" {{ route('superadmin.sort-channels', ['topCustomers'=> 'Monthly']) }}" class="block px-4 py-2
                hover:bg-gray-100 dark:hover:bg-gray-600 @if(request('topCustomers') == 'Monthly') bg-gray-100
                dark:bg-gray-600 @endif">Monthly</a>
        </li>
        <li>
            <a href="{{ route('superadmin.sort-channels', ['topCustomers' => 'Yearly']) }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600  @if(request('topCustomers') == 'Yearly') bg-gray-100 dark:bg-gray-600 @endif">Yearly</a>
        </li>
        <li>
    </ul>
</div>


<div id="sortBytrigger" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-32">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="sortBy">
        <li>
            <a href="{{ route('superadmin.sort-channels', ['sortBy' => 'highest']) }}" data-sort-by="highest"
                class="sort-button block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 @if(request('sortBy') == 'highest') bg-gray-100 dark:bg-gray-600 @endif">
                <button type="submit" name="sortBy" value="highest">Highest</button>
            </a>
        </li>
        <li>
            <a href="{{ route('superadmin.sort-channels', ['sortBy' => 'lowest']) }}" data-sort-by="lowest"
                class="sort-button block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 @if(request('sortBy') == 'lowest') bg-gray-100 dark:bg-gray-600 @endif">
                <button type="submit" name="sortBy" value="lowest">Lowest</button>
            </a>
        </li>
    </ul>
</div>




<script src="{{ $saleThisMonth->cdn() }}"></script>

{{ $saleThisMonth->script() }}
@endsection