@extends('dashboard.layout.main')

@section('mainContent')

{{-- Best Seller Chart --}}
<div class="ml-40 mt-10 2xl:ml-[450px]">
    <div
        class="w-[396px] sm:w-[600px] md:w-[600px] lg:w-[824px] xl:w-[1024px] 2xl:w-[1024px] bg-[#FFFFFF] shadow-[0px_8px_8px_rgba(0,0,0,0.5)] rounded-[20px] px-16">
        <h5 class="text-5xl text-black font-[700] text-center p-5">Best sellers</h5>
        <div
            class="grid grid-flow-col py-10 gap-[44px] sm:gap-[228px] md:gap-[228px] lg:gap-[434px] xl:gap-[646px] 2xl:gap-[646px] ">
            <div class="grid grid-flow-row gap-0 mt-3">
                <p class="text-black/70 text-[24px]">Sale This Month</p>
                <p class="text-[#4E504F] text-[32px]">2,069</p>
            </div>
            <div class="grid grid-flow-col">
                <p class="font-normal text-xl text-black/60 py-10">Daily</p>
                <button id="topProducts" data-dropdown-toggle="topProductsTrigger">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="py-10">
            <div id="{!! $bestSeller->container() !!}"></div>
        </div>
    </div>
</div>

{{-- data-dropdown-toggle --}}
<div id="topProductsTrigger" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="topProducts">
        <li>
            <a href="{{ route('logistik.sort', ['topProducts' => 'Daily']) }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 @if(request('topProducts') == 'Daily') bg-gray-100 dark:bg-gray-600 @endif"">Daily</a>
        </li>
        <li>
            <a href=" {{ route('logistik.sort', ['topProducts'=> 'Monthly']) }}" class="block px-4 py-2
                hover:bg-gray-100 dark:hover:bg-gray-600 @if(request('topProducts') == 'Monthly') bg-gray-100
                dark:bg-gray-600 @endif">Monthly</a>
        </li>
        <li>
            <a href="{{ route('logistik.sort', ['topProducts' => 'Yearly']) }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600  @if(request('topProducts') == 'Yearly') bg-gray-100 dark:bg-gray-600 @endif">Yearly</a>
        </li>
        <li>
    </ul>
</div>

{{-- STOCK & LOW STOCK --}}
<div
    class="w-[1224px] h-auto rounded-[13px] overflow-hidden ml-16 2xl:ml-[350px] mt-28 bg-white border border-[#686868CF] shadow-[0px_8px_8px_rgba(0,0,0,0.5)]">
    <div class="absolute ml-4 mt-4">
        <div class="grid grid-flow-col gap-[940px]">
            <h5 class="text-3xl font-bold tracking-tight text-gray-900 ">Stock</h5>
            <div class="grid grid-flow-row mt-1">
                <button type="button" data-modal-target="authentication-modal-stock"
                    data-modal-toggle="authentication-modal-stock"
                    class="text-white bg-[#22DB66] font-medium rounded-[22px] text-[13px] px-5 py-2.5 inline-flex items-center">
                    <div class="px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </div>
                    Add New Stock
                </button>
            </div>

        </div>
    </div>

    <div class="grid grid-flow-row mt-12">
        <div>
            <button type="button"
                class="min-w-fit text-green-600/80 border border-green-500 bg-white hover:bg-green-300/80 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5 ml-4">
                <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="19" x2="12" y2="5"></line>
                    <polyline points="5 12 12 5 19 12">
                    </polyline>
                </svg>
                <p class="mr-3">Import</p>
            </button>
        </div>
        <div class="absolute mt-12">
            <button type="button"
                class="text-blue-700/80 border border-blue-500 bg-white hover:bg-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5 ml-4">
                <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <polyline points="19 12 12 19 5 12">
                    </polyline>
                </svg>
                <p class="mr-3.5">Export</p>
            </button>
        </div>
    </div>
    {{-- table --}}
    <div class="py-20">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 bg-white dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 font-thin">
                        PRODUCT NUMBER
                    </th>
                    <th scope="col" class="px-6 py-3 font-thin">
                        PRODUCT NAME
                    </th>
                    <th scope="col" class="px-6 py-3 font-thin">
                        SATUAN
                    </th>
                    <th scope="col" class="px-6 py-3 font-thin">
                        AMOUNT
                    </th>
                    <th scope="col" class="px-6 py-3 font-thin">
                        MIN. AMOUNT
                    </th>
                    <th scope="col" class="px-6 py-3 p-7 font-thin">
                        STOCK AKHIR
                    </th>
                    <th scope="col" class="px-6 py-3 font-thin">
                        ECER
                    </th>
                    <th scope="col" class="px-6 py-3 font-thin">
                        RESELLER
                    </th>
                    <th scope="col" class="px-6 py-3 font-thin">
                        DISTRIBUTOR
                    </th>
                    <th scope="col" class="px-6 py-3 font-thin">
                        MAKLON
                    </th>
                    <th scope="col" class="px-6 py-3 font-thin">
                        ACTION
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($stokPaginate as $stokPaginates)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $stokPaginates->kode_barang }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $stokPaginates->nama_barang }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $stokPaginates->size }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$stokPaginates->stock}}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $stokPaginates->min_ammount }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $stokPaginates->stock_akhir }}
                    </th>
                    <td class="px-6 py-4">
                        {{ "Rp " . number_format($stokPaginates->harga_ecer ,2,',','.') }}
                    </td>
                    <td class="px-6 py-4">
                        {{ "Rp " . number_format($stokPaginates->harga_rs ,2,',','.') }}
                    </td>
                    <td class="px-6 py-4">
                        {{ "Rp " . number_format($stokPaginates->harga_mkl ,2,',','.') }}
                    </td>
                    <td class="px-6 py-4">
                        {{ "Rp " . number_format($stokPaginates->harga_ds ,2,',','.') }}
                    </td>
                    <td>
                        <button data-modal-target="authentication-modal-dstock-{{ $stokPaginates->id }}"
                            data-modal-toggle="authentication-modal-dstock-{{ $stokPaginates->id }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                            <a href="{{ route('stock.edit', ['stock'=>$stokPaginates->id]) }}">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M12 20h9"></path>
                                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                    </svg>
                                </button>
                            </a>
                            <form action="{{ route('stock.destroy', ['stock' => $stokPaginates->id]) }}" method="post"
                                class='inline'>
                                <button onclick="return confirm('Are you sure?')">
                                    @csrf
                                    @method('delete')
                                    <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M20 5H9l-7 7 7 7h11a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2Z"></path>
                                        <line x1="18" y1="9" x2="12" y2="15"></line>
                                        <line x1="12" y1="9" x2="18" y2="15"></line>
                                    </svg>
                                </button>
                            </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

        {{-- pagination --}}

        <div class="flex justify-center my-auto p-5">
            {{$stokPaginate->links()}}
        </div>
    </div>
</div>

{{-- low stock --}}

<div
    class="w-[1224px] h-auto rounded-[13px] overflow-hidden ml-16 mt-12 2xl:ml-[350px] bg-white border border-[#686868CF] shadow-[0px_8px_8px_rgba(0,0,0,0.5)]">
    <div class="absolute ml-4 mt-4">
        <div class="grid grid-flow-col gap-[810px]">
            <h5 class="text-3xl font-bold tracking-tight text-gray-900 ">Low Stock</h5>
        </div>
    </div>


    <div class="grid grid-flow-row mt-12">
        <div>
            <button type="button"
                class="min-w-fit text-green-600/80 border border-green-500 bg-white hover:bg-green-300/80 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5 ml-4">
                <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="19" x2="12" y2="5"></line>
                    <polyline points="5 12 12 5 19 12">
                    </polyline>
                </svg>
                <p class="mr-3">Import</p>
            </button>
        </div>
        <div class="absolute mt-12">
            <button type="button"
                class="text-blue-700/80 border border-blue-500 bg-white hover:bg-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5 ml-4">
                <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <polyline points="19 12 12 19 5 12">
                    </polyline>
                </svg>
                <p class="mr-3.5">Export</p>
            </button>
        </div>
    </div>

    {{-- table --}}

    <div class=" py-20">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 bg-white dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 font-thin">
                        PRODUCT NUMBER
                    </th>
                    <th scope="col" class="px-6 py-3 font-thin">
                        PRODUCT NAME
                    </th>
                    <th scope="col" class="px-6 py-3 font-thin">
                        SATUAN
                    </th>
                    <th scope="col" class="px-6 py-3 font-thin">
                        AMOUNT
                    </th>
                    <th scope="col" class="px-6 py-3 font-thin">
                        MIN. AMOUNT
                    </th>
                    <th scope="col" class="px-6 py-3 p-7 font-thin">
                        STOCK AKHIR
                    </th>
                    <th scope="col" class="px-6 py-3 font-thin">
                        ECER
                    </th>
                    <th scope="col" class="px-6 py-3 font-thin">
                        RESELLER
                    </th>
                    <th scope="col" class="px-6 py-3 font-thin">
                        DISTRIBUTOR
                    </th>
                    <th scope="col" class="px-6 py-3 font-thin">
                        MAKLON
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($lowStocksPaginate as $lowStocksPaginates)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $lowStocksPaginates->kode_barang }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $lowStocksPaginates->nama_barang }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $lowStocksPaginates->size }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$lowStocksPaginates->stock}}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $lowStocksPaginates->min_ammount }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $lowStocksPaginates->stock_akhir }}
                    </th>
                    <td class="px-6 py-4">
                        {{ "Rp " . number_format($lowStocksPaginates->harga_ecer ,2,',','.') }}
                    </td>
                    <td class="px-6 py-4">
                        {{ "Rp " . number_format($lowStocksPaginates->harga_rs ,2,',','.') }}
                    </td>
                    <td class="px-6 py-4">
                        {{ "Rp " . number_format($lowStocksPaginates->harga_mkl ,2,',','.') }}
                    </td>
                    <td class="px-6 py-4">
                        {{ "Rp " . number_format($lowStocksPaginates->harga_ds ,2,',','.') }}
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        {{-- pagination --}}

        <div class="flex justify-center my-auto p-5">
            {{$lowStocksPaginate->links()}}
        </div>
    </div>
</div>
</div>


{{-- In & Out Products --}}
<div
    class="w-[1024px] h-auto rounded-[13px] overflow-hidden ml-40 2xl:ml-[450px] mt-20 bg-white border border-[#686868CF] shadow-[0px_8px_8px_rgba(0,0,0,0.5)]">
    <div class="absolute ml-4 mt-4">
        <div class="grid grid-flow-col gap-[650px]">
            <h5 class="text-3xl font-bold tracking-tight text-gray-900 ">In & Out Products</h5>
            <div>
                <button id="innout" data-dropdown-toggle="innoutTrigger">
                    <div class="inline-flex">
                        <p class="font-normal text-xl text-black/60">Sort By</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.5"
                            stroke="currentColor" class="w-5 h-5 ml-2 mt-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </div>
                </button>
            </div>
        </div>
    </div>
    <div class="grid grid-flow-row mt-12">
        <div>
            <button type="button"
                class="min-w-fit text-green-600/80 border border-green-500 bg-white hover:bg-green-300/80 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5 ml-4">
                <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="19" x2="12" y2="5"></line>
                    <polyline points="5 12 12 5 19 12">
                    </polyline>
                </svg>
                <p class="mr-3">Import</p>
            </button>
        </div>
        <div class="absolute mt-12">
            <button type="button"
                class="text-blue-700/80 border border-blue-500 bg-white hover:bg-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5 ml-4">
                <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <polyline points="19 12 12 19 5 12">
                    </polyline>
                </svg>
                <p class="mr-3.5">Export</p>
            </button>
        </div>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-16">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="p-4">
                        <div class="flex items-center">
                            <input id="checkbox-all" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all" class="sr-only">checkbox</label>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kode Barang
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Produk
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Size
                    </th>
                    <th scope="col" class="px-6 py-3">
                        In
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Out
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Approved By
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date In
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date Out
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($inoutPaginate as $inoutPaginates)
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-1" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-1" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $inoutPaginates->kode_barang }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $inoutPaginates->produkJadi->nama_barang }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $inoutPaginates->produkJadi->size }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $inoutPaginates->barang_masuk }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $inoutPaginates->barang_keluar }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $inoutPaginates->user->username }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $inoutPaginates->date_in ? $inoutPaginates->date_in : NULL }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $inoutPaginates->date_out ? $inoutPaginates->date_out : NULL }}
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <div class="flex justify-center my-auto p-5">
        {{$inoutPaginate->links()}}
    </div>
</div>
</div>



{{-- STOCK CURAH --}}
<div
    class="w-[1024px] h-auto rounded-[13px] overflow-hidden 2xl:ml-[450px] ml-40 mt-16 bg-white border border-[#686868CF] shadow-[0px_8px_8px_rgba(0,0,0,0.5)]">
    <div class="absolute ml-4 mt-4">
        <div class="grid grid-flow-col gap-[600px]">
            <div class="grid-flow-row">
                <h5 class="text-3xl font-bold tracking-tight  text-gray-900 ">Stock Curah</h5>
            </div>
            <div class="flex md:order-2">
                <form class="flex items-center">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div>
                            <button class="absolute inset-y-0 right-0 flex items-center pr-3 type=" submit"
                                class="p-2.5 ml-3 text-sm font-medium text-white bg-blue-700 rounded-[22px] border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                                <svg class="w-5 h-5 text-yellow-300" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                <span class="sr-only">Search Anything</span>
                            </button>
                        </div>
                        <input type="text" id="search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full pl-10 p-2.5  "
                            placeholder="Search">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="grid grid-flow-row mt-16">
        <div class="grid-flow-row ml-3">
            <a href="{{ route('curah.create') }}">
                <button type="button"
                    class="text-white bg-[#22DB66] font-medium rounded-[20px] text-[13px] px-3 py-2.5 inline-flex items-center">
                    <div class="px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </div>
                    Add New Stock Curah
                </button>
            </a>
        </div>
        <div class="grid-flow-row">
            <button type="button"
                class="min-w-fit text-green-600/80 border border-green-500 bg-white hover:bg-green-300/80 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5 ml-4">
                <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="19" x2="12" y2="5"></line>
                    <polyline points="5 12 12 5 19 12">
                    </polyline>
                </svg>
                <p class="mr-3">Import</p>
            </button>
        </div>
        <div class="absolute mt-24">
            <button type="button"
                class="text-blue-700/80 border border-blue-500 bg-white hover:bg-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5 ml-4">
                <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <polyline points="19 12 12 19 5 12">
                    </polyline>
                </svg>
                <p class="mr-3.5">Export</p>
            </button>
        </div>
    </div>

    {{-- table --}}

    <div class=" py-20">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 bg-white dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 font-thin">
                        PRODUCT NUMBER
                    </th>
                    <th scope="col" class="px-6 py-3 font-thin">
                        PRODUCT NAME
                    </th>
                    <th scope="col" class="px-6 py-3 font-thin">
                        SATUAN
                    </th>
                    <th scope="col" class="px-6 py-3 font-thin">
                        AMOUNT
                    </th>
                    <th scope="col" class="px-6 py-3 font-thin">
                        MIN. AMOUNT
                    </th>
                    <th scope="col" class="px-6 py-3 p-7 font-thin">
                        STOCK AKHIR
                    </th>
                    <th scope="col" class="px-6 py-3 font-thin">
                        PRICE
                    </th>
                    <th scope="col" class="px-6 py-3 font-thin">
                        ACTION
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach($produkCurahPaginate as $produkCurahPaginates)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $produkCurahPaginates->kode_barang }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $produkCurahPaginates->nama_barang }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $produkCurahPaginates->size }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $produkCurahPaginates->stock }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $produkCurahPaginates->min_ammount }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $produkCurahPaginates->stock_akhir }}
                    </th>
                    <td class="px-6 py-4">
                        {{ "Rp " . number_format($produkCurahPaginates->harga ,2,',','.') }}
                    </td>
                    <td>
                        <a href="{{ route('curah.edit', ['curah' => $produkCurahPaginates->id ]) }}">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M12 20h9"></path>
                                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                </svg>
                            </button>
                        </a>
                        <form action="{{ route('curah.destroy', ['curah' => $produkCurahPaginates->id]) }}"
                            method="post" class='inline'>
                            <button onclick="return confirm('Are you sure?')">
                                @csrf
                                @method('delete')
                                <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M20 5H9l-7 7 7 7h11a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2Z"></path>
                                    <line x1="18" y1="9" x2="12" y2="15"></line>
                                    <line x1="12" y1="9" x2="18" y2="15"></line>
                                </svg>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{-- pagination --}}

        <div class="flex justify-center my-auto p-5">
            {{$produkCurahPaginate->links()}}
        </div>
    </div>
</div>
</div>



{{-- data-dropdown-toggle --}}

<div id="orderStatsTrigger" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="topProducts">
        <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">Daily</a>
        </li>
        <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">Monthly</a>
        </li>
        <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">Yearly</a>
        </li>
        <li>
    </ul>
</div>

{{-- Stock Barang Pendukung --}}
<div class="pb-10">
    <div
        class="w-[1024px] h-auto rounded-[13px] overflow-hidden 2xl:ml-[450px] ml-40 mt-16 bg-white border border-[#686868CF] shadow-[0px_8px_8px_rgba(0,0,0,0.5)]">
        <div class="absolute mt-3 ml-5">
            <div class="grid grid-flow-col gap-[420px]">
                <div class=" ">
                    <h5 class="text-3xl font-bold tracking-tight text-gray-900 ">Stock Barang Pendukung</h5>
                </div>
                <div class="flex md:order-2">
                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div>
                                <button class="absolute inset-y-0 right-0 flex items-center pr-3 type=" submit"
                                    class="p-2.5 ml-3 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                                    <svg class="w-5 h-5 text-yellow-300" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                    <span class="sr-only">Search Anything</span>
                                </button>
                            </div>
                            <input type="text" id="simple-search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full pl-10 p-2.5  "
                                placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="grid grid-flow-row mt-16">
            <div class="grid-flow-row ml-3">
                <div>
                    <a href="{{ route('barang_pendukung.create') }}">
                        <button
                            class="text-white bg-[#22DB66] font-medium rounded-[20px] text-[13px] px-3 py-2.5 inline-flex items-center">
                            <div class="px-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                </svg>
                            </div>
                            Add Barang Pendukung
                        </button>
                    </a>
                </div>
            </div>
            <div class="">
                <button type="button"
                    class="min-w-fit text-green-600/80 border border-green-500 bg-white hover:bg-green-300/80 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5 ml-4">
                    <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <line x1="12" y1="19" x2="12" y2="5"></line>
                        <polyline points="5 12 12 5 19 12">
                        </polyline>
                    </svg>
                    <p class="mr-3">Import</p>
                </button>
            </div>
            <div class="absolute mt-24">
                <button type="button"
                    class="text-blue-700/80 border border-blue-500 bg-white hover:bg-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5 ml-4">
                    <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <polyline points="19 12 12 19 5 12">
                        </polyline>
                    </svg>
                    <p class="mr-3.5">Export</p>
                </button>
            </div>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-16">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 font-thin">
                            PRODUCT NUMBER
                        </th>
                        <th scope="col" class="px-6 py-3 font-thin">
                            PRODUCT NAME
                        </th>
                        <th scope="col" class="px-6 py-3 font-thin">
                            SATUAN
                        </th>
                        <th scope="col" class="px-6 py-3 font-thin">
                            AMOUNT
                        </th>
                        <th scope="col" class="px-6 py-3 p-7 font-thin">
                            STOCK AKHIR
                        </th>
                        <th scope="col" class="px-6 py-3 font-thin">
                            PRICE
                        </th>
                        <th scope="col" class="px-6 py-3 font-thin">
                            ACTION
                        </th>
                    </tr>
                </thead>
                @foreach($barangPendukungPaginate as $barangPendukungPaginates)
                <tbody>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $barangPendukungPaginates->kode_barang }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $barangPendukungPaginates->nama_barang }}
                        </td>
                        <td class="px-6 py-4">
                            {{$barangPendukungPaginates->size}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $barangPendukungPaginates->stock }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $barangPendukungPaginates->stock }}
                        </td>
                        <td class="px-6 py-4">
                            {{ "Rp " . number_format($barangPendukungPaginates->price ,2,',','.') }}
                        </td>
                        <td class="px-6 py-4">
                            <a
                                href="{{ route('barang_pendukung.edit', ['barang_pendukung' => $barangPendukungPaginates->id ]) }}">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M12 20h9"></path>
                                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                    </svg>
                                </button>
                            </a>
                            <form
                                action="{{ route('barang_pendukung.destroy', ['barang_pendukung' => $barangPendukungPaginates->id]) }}"
                                method="post" class='inline'>
                                <button onclick="return confirm('Are you sure?')">
                                    @csrf
                                    @method('delete')
                                    <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M20 5H9l-7 7 7 7h11a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2Z"></path>
                                        <line x1="18" y1="9" x2="12" y2="15"></line>
                                        <line x1="12" y1="9" x2="18" y2="15"></line>
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
        <div class="flex justify-center my-auto p-5">
            {{$barangPendukungPaginate->links()}}
        </div>
    </div>
</div>

<!-- Dropdown menu -->
<div id="innoutTrigger" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
    <ul class="py-2 text-sm text-gray-700 " aria-labelledby="innout">
        <li>
            <a href="{{ route('logistik.sort', ['inout' => 'Monthly']) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 @if(request('inout') == 'Monthly') bg-gray-100
                dark:bg-gray-600 @endif">Monthly</a>
        </li>
        <li>
            <a href="{{ route('logistik.sort', ['inout' => 'Yearly']) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600  @if(request('inout') == 'Yearly') bg-gray-100
                dark:bg-gray-600 @endif">Yearly</a>
        </li>
        <li>
    </ul>
</div>

<!-- Stock Modal -->
<div id="authentication-modal-stock" tabindex="-1" aria-hidden="true"
    class="fixed z-50 hidden w-full my-[53px] overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative  w-full h-full max-w-md md:h-auto">
        <!-- Modal content -->
        <div class="relative  bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                data-modal-hide="authentication-modal-stock">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-3 lg:px-8">
                <form class="space-y-6" action="{{ route('stock.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-flow-row gap-2">
                        <div class="grid grid-flow-col gap-3">
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                    ID</label>
                                <input type="text" name="kode_barang"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required>
                            </div>
                            <div>
                                <label class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                    Name</label>
                                <input type="text" name="nama_barang"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required>
                            </div>
                        </div>
                        <div class="grid grid-flow-col gap-3">
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Size</label>
                                <input type="text" name="size"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="brand"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                                <select id="size"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    name="kategori">
                                    <option selected>Pilih Kategori Produk</option>
                                    <option value="1kg">1 KG</option>
                                    <option value="500ml">500 ML</option>
                                    <option value="325ml">325 ML</option>
                                    <option value="125ml">125 ML</option>
                                    <option value="70gr">70 GR</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-flow-col gap-3">
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ammount</label>
                            <input type="number" name="stock"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Min.
                                Ammount</label>
                            <input type="number" name="min_ammount"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock
                                Akhir</label>
                            <input type="number" name="stock_akhir"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                        </div>
                    </div>
                    <div class="grid grid-flow-col gap-3">
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Harga
                                Ecer</label>
                            <input type="number" name="harga_ecer"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Harga Reseller</label>
                            <input type="number" name="harga_rs"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                        </div>
                    </div>
                    <div class="grid grid-flow-col gap-3">
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Harga Maklon</label>
                            <input type="number" name="harga_mkl"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Harga Distributor</label>
                            <input type="number" name="harga_ds"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit"
                            class="w-max text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Stock Detail Modal -->
@foreach($stok2 as $stok)
<div id="authentication-modal-dstock-{{ $stok->id }}" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-md md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between ml-3 p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                    {{$stok->nama_barang}} Detail
                </h3>
            </div>
            <!-- Modal body -->
            <div class="ml-2 p-6 space-y-10 ">
                <ul>
                    <li> Kode Barang : {{ $stok->nama_barang }}</li>
                    <li>Nama Barang : {{ $stok->size }}</li>
                    <li>Size : {{ $stok->size }}</li>
                    <li>Stok : {{ $stok->stock }}</li>
                    <li>Min Ammount : {{ $stok->min_ammount }}</li>
                    <li>Stok Akhir : {{ $stok->stock_akhir }}</li>
                    <li>Harga Ecer : {{ $stok->harga_ecer }}</li>
                    <li>Harga Distributor : {{ $stok->harga_ds }}</li>
                    <li>Harga Maklon : {{ $stok->mkl }}</li>
                    <li>Harga Reseller : {{ $stok->rs }}</li>
                    <li>Tanggal Barang Masuk : {{ date('d-m-Y', strtotime($stok->created_at)) }}</li>
                    <li>Tanggal Barang Update : {{ date('d-m-Y', strtotime($stok->updated_at)) }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endforeach

<script src="{{ $bestSeller->cdn() }}"></script>

{{ $bestSeller->script() }}
@endsection