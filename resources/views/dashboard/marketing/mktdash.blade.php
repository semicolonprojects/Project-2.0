@extends('dashboard.layout.main')

@section('mainContent')

{{-- Overview --}}
<div
    class="w-full md:w-[1024px] rounded-[13px] overflow-hidden mx-auto md:ml-40 mt-10 bg-white border border-[#686868CF] shadow-[0px_8px_8px_rgba(0,0,0,0.5)]">
    <div class="px-6 py-4 md:px-10 md:py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
            <div class="font-bold text-2xl">Marketing Division Overview</div>
            <div class="flex items-center justify-end md:justify-end">
                <p class="font-normal text-xl text-black/60">Sort By</p>
                <button id="marketingOverview" data-dropdown-toggle="marketingOverviewTrigger">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
            </div>
        </div>
        @foreach ($overview as $overviews)
        <div class="py-4">
            <p class="text-black/75 text-xl">This Month</p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <p class="text-[#4E504F] text-[32px]">{{ 'Rp. ' . number_format($overviews->total_pembelian, 2, ',',
                    '.') }}</p>
                <div class="rounded bg-[#22DB6636] text-[#25D466F7] w-24 h-6 mt-4 md:ml-56">
                    <p class="text-center ml-1 text-[17px] font-medium">+ 4,20 %</p>
                </div>
            </div>
        </div>
        @endforeach
        @foreach ($overview as $overviews2)
        <div class="py-4">
            <div class="grid grid-cols-2 md:grid-cols-2 divide-x divide-black">
                <div class="grid grid-rows-2 md:grid-rows-1 divide-y divide-black">
                    <div class="px-4 py-4 md:px-7 md:py-3">
                        <p class="text-[#000000B8] text-xl font-custom">Orders</p>
                        <p class="text-black text-xl">{{ $overviews2->total_order }}</p>
                    </div>
                    <div class="px-4 py-4 md:px-7 md:py-[3.35rem]">
                        <p class="text-[#000000B8] text-xl font-custom">Average sales success rate</p>
                        <p class="text-black text-xl">{{ $overviews2->persentase_dibayar }}</p>
                    </div>
                </div>
                <div class="grid grid-rows-2 md:grid-rows-1 divide-y divide-black">
                    <div class="px-4 py-4 md:px-7 md:py-7">
                        <p class="text-[#000000B8] text-xl font-custom">Sales</p>
                        <p class="text-black text-xl">{{ $overviews2->total_dibayar }}</p>
                    </div>
                    <div class="px-4 py-4 md:px-7 md:py-[3.35rem]">
                        <p class="text-[#000000B8] text-xl font-custom">Customers</p>
                        <p class="text-black text-xl">{{ $overviews2->total_customer }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div id="marketingOverviewTrigger" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="marketingOverview">
        <li>
            <a href="{{ route('marketing.sort', ['marketingOverview' => 'Daily']) }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 @if(request('marketingOverview') == 'Daily') bg-gray-100 dark:bg-gray-600 @endif"">Daily</a>
        </li>
        <li>
            <a href=" {{ route('marketing.sort', ['marketingOverview'=> 'Monthly']) }}" class="block px-4 py-2
                hover:bg-gray-100 dark:hover:bg-gray-600 @if(request('marketingOverview') == 'Monthly') bg-gray-100
                dark:bg-gray-600 @endif">Monthly</a>
        </li>
        <li>
            <a href="{{ route('marketing.sort', ['marketingOverview' => 'Yearly']) }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600  @if(request('marketingOverview') == 'Yearly') bg-gray-100 dark:bg-gray-600 @endif">Yearly</a>
        </li>
        <li>
    </ul>
</div>


{{-- Order Stats --}}

<div
    class="inline-block p-6 bg-white border border-gray-200 rounded-xl ml-1 md:ml-36 mt-7 md:mt-10 hover:bg-gray-100 shadow-2xl w-full md:w-[1070px] h-[600px]">
    <div class="grid grid-flow-col justify-between mb-8">
        <div class="flex items-center">
            <h5 class="mb-2 ml-5 text-2xl font-bold tracking-tight text-gray-900">Order Stats</h5>
        </div>
        <button class="text-gray-600 text-sm font-medium hover:text-gray-900 grid mt-2 grid-flow-col gap-2"
            id="orderStats" data-dropdown-toggle="orderStatstrigger">
            Sort by
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="w-4 h-4 inline-block mt-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </button>
    </div>
    <div class="overflow-x-auto" id="{!! $saleThisMonth->container() !!}"></div>
</div>

<div id="orderStatstrigger" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="orderStats">
        <li>
            <a href="{{ route('marketing.sort', ['orderStats' => 'highest']) }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 @if(request('orderStats') == 'highest') bg-gray-100 dark:bg-gray-600 @endif"">Highest</a>
        </li>
        <li>
            <a href=" {{ route('marketing.sort', ['orderStats'=> 'lowest']) }}" class="block px-4 py-2
                hover:bg-gray-100 dark:hover:bg-gray-600 @if(request('orderStats') == 'lowest') bg-gray-100
                dark:bg-gray-600 @endif">Lowest</a>
        </li>
    </ul>
</div>


{{-- Top Products --}}
<div class="mt-14 ml-1 md:ml-[169px]">
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

<div id="topProductsTrigger" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="topProducts">
        <li>
            <a href="{{ route('marketing.sort', ['topProducts' => 'Daily']) }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 @if(request('topProducts') == 'Daily') bg-gray-100 dark:bg-gray-600 @endif"">Daily</a>
        </li>
        <li>
            <a href=" {{ route('marketing.sort', ['topProducts'=> 'Monthly']) }}" class="block px-4 py-2
                hover:bg-gray-100 dark:hover:bg-gray-600 @if(request('topProducts') == 'Monthly') bg-gray-100
                dark:bg-gray-600 @endif">Monthly</a>
        </li>
        <li>
            <a href="{{ route('marketing.sort', ['topProducts' => 'Yearly']) }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600  @if(request('topProducts') == 'Yearly') bg-gray-100 dark:bg-gray-600 @endif">Yearly</a>
        </li>
        <li>
    </ul>
</div>

{{-- Summary Orders & Targets --}}
<div class="mt-14 ml-4 md:ml-40">
    <div
        class="inline-block p-6 bg-white border border-gray-200 rounded-xl hover:bg-gray-100 shadow-2xl w-full md:w-[1024px] md:h-[980px]">
        <div class="inline-flex absolute">
            <h5 class="text-2xl font-bold tracking-tight text-gray-900 ">Summary Order & Target </h5>
        </div>
        <div class="inline-flex absolute ml-[920px]">
            <button id="target" data-dropdown-toggle="targetTrigger">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
            </button>
        </div>
        <div class="grid grid-flow-col grid-rows-4 md:grid-rows-none gap-7 ">
            <div class="grid grid-flow-row  gap-7 ">
                <div
                    class="inline-flex mt-20 ml-0.5 md:ml-10 bg-white border-2 border-gray-200 rounded-2xl shadow-xl w-[70%] md:w-[390px] md:h-[200px]">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 ml-5 mt-3">Total Target</h5>
                    <div class="inline-flex absolute mr-auto mt-16 md:mt-32 md:mr-16">
                        @forelse ($targetKaryawan as $targetKaryawans)
                        <h5 class="text-3xl font-bold tracking-tight text-gray-900 ml-3 mt-3">Rp {{
                            number_format(($targetKaryawans->target)) }}</h5>
                        <p class="text-sm ml-5 mt-[27px] text-gray-700/75">Deadline : {{
                            $targetKaryawans->deadline_target }}</p>
                        @empty
                        <h5 class="text-3xl font-bold tracking-tight text-gray-900 ml-3 mt-3">Rp. 0,00</h5>
                        <p class="text-sm ml-5 mt-[27px] text-gray-700/75">Deadline : </p>
                        @endforelse ($targetKaryawan as $targetKaryawans)
                    </div>
                    <div
                        class="inline-flex absolute ml-[230px] md:ml-80 mt-3 bg-[#22DB6636] text-[#25D466F7] rounded-xl  w-[50px] h-[50px]">
                        <div class="py-2 px-2">
                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <circle cx="8" cy="21" r="1" />
                                    <circle cx="19" cy="21" r="1" />
                                    <path
                                        d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12" />
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div
                    class="inline-flex ml-0.5 md:ml-10 bg-white border-2 border-gray-200 rounded-2xl shadow-xl w-[70%] md:w-[390px] md:h-[200px]">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 ml-5 mt-3">GAP Ke Target</h5>
                    <div class="inline-flex absolute mt-16 mr-auto md:mt-32 md:mr-16">
                        @forelse ($targetKaryawan as $targetKaryawans3)
                        @if ($targetKaryawans3->total_tercapai != 0)
                        <h5 class="text-3xl font-bold tracking-tight text-gray-900 ml-3 mt-3">Rp {{
                            number_format(($targetKaryawans3->target)/($targetKaryawans3->total_tercapai)) }}</h5>
                        @else
                        <h5 class="text-3xl font-bold tracking-tight text-gray-900 ml-3 mt-3">Rp {{
                            number_format($targetKaryawans3->target) }}</h5>
                        @endif
                        <p class="text-sm ml-5 mt-[27px] text-gray-700/75">Deadline : {{
                            $targetKaryawans->deadline_target }}</p>
                        @empty
                        <h5 class="text-3xl font-bold tracking-tight text-gray-900 ml-3 mt-3">Rp. 0,00</h5>
                        <p class="text-sm ml-5 mt-[27px] text-gray-700/75">Deadline : </p>
                        @endforelse ($targetKaryawan as $targetKaryawans)
                    </div>
                    <div
                        class="inline-flex absolute ml-[230px] md:ml-80 mt-3 bg-[#22DB6636] text-[#25D466F7] rounded-xl  w-[50px] h-[50px]">
                        <div class="py-2 px-2">
                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <path d="m9 11l3 3L22 4" />
                                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-flow-row gap-7">

                <div
                    class="inline-flex mt-auto md:mt-20 ml-0.5 md:ml-10 bg-white border-2 border-gray-200 rounded-2xl shadow-xl w-[70%] md:w-[390px] md:h-[200px]">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 ml-5 mt-3">Daily Target</h5>
                    <div class="inline-flex absolute mt-16 mr-auto md:mt-32 md:mr-16">
                        @forelse($targetKaryawan as $targetKaryawans)
                        <h5 class="text-3xl font-bold tracking-tight text-gray-900 ml-3 mt-3">Rp {{
                            number_format(($targetKaryawans->target/30)) }}</h5>
                        <p class="text-sm ml-5 mt-[27px] text-gray-700/75">Today : {{
                            now("Asia/Bangkok")->toDateString() }}</p>
                        @empty
                        <h5 class="text-3xl font-bold tracking-tight text-gray-900 ml-3 mt-3">Rp. 0,00</h5>
                        <p class="text-sm ml-5 mt-[27px] text-gray-700/75">Today : {{
                            now("Asia/Bangkok")->toDateString() }}</p>
                        @endforelse ($targetKaryawan as $targetKaryawan)
                    </div>
                    <div
                        class="inline-flex absolute ml-[230px] md:ml-80 mt-3 bg-[#22DB6636] text-[#25D466F7] rounded-xl  w-[50px] h-[50px]">
                        <div class="py-2 px-2">
                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <path d="M3 3v18h18" />
                                    <path d="m19 9l-5 5l-4-4l-3 3" />
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div
                    class="inline-flex ml-10 bg-white border-2 border-gray-200 rounded-2xl shadow-xl w-[70%] md:w-[390px] md:h-[200px]">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 ml-5 mt-3">Total Tercapai</h5>
                    <div class="inline-flex absolute mt-32 mr-16">
                        @forelse($targetKaryawan as $targetKaryawans2)
                        <h5 class="text-3xl font-bold tracking-tight text-gray-900 ml-3 mt-3"> Rp {{
                            number_format($targetKaryawans2->total_tercapai) }}</h5>
                        <p class="text-sm ml-5 mt-[27px] text-gray-700/75">Today : {{
                            now("Asia/Bangkok")->toDateString() }}</p>
                        @empty
                        <h5 class="text-3xl font-bold tracking-tight text-gray-900 ml-3 mt-3">Rp. 0,00</h5>
                        <p class="text-sm ml-5 mt-[27px] text-gray-700/75">Today : {{
                            now("Asia/Bangkok")->toDateString() }}</p>
                        @endforelse ($targetKaryawan as $targetKaryawans2)
                    </div>
                    <div
                        class="inline-flex absolute ml-80 mt-3 bg-[#22DB6636] text-[#25D466F7] rounded-xl  w-[50px] h-[50px]">
                        <div class="py-2 px-2">
                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                <g fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                    <path
                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-7 border-b-[1px] border-black "></div>
        <div class="grid grid-flow-col grid-rows-2 md:grid-rows-none gap-7">
            <div class="inline-flex absolute mt-3 ">
                <h5 class="text-2xl font-bold tracking-tight text-gray-900 ml-4 ">Daily Order Stats</h5>
                <div class="mt-20 mr-16 absolute">
                    <div>
                        <div id="{!! $dailyOrderStats->container() !!}" width=" 350px" height="200px"></div>
                    </div>
                </div>
            </div>

            <div class="inline-flex absolute mt-3 ml-[495px]">
                <h5 class="absolute text-2xl font-bold tracking-tight text-gray-900">Daily Target Stats</h5>
                <div class="mt-3 mb-7 w-96">
                    <div class='py-10' id="{!! $dailyTargetStats->container() !!}" width="280px">
                    </div>
                </div>
            </div>
            <div class="py-48 mr-[503px] border-r-[1px] border-black"></div>
        </div>
    </div>
    <div id="targetTrigger" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="topProducts">
            @if (count($targetKaryawan) != null)
            @foreach ($targetKaryawan as $targetKaryawans4)
            <li>
                <a href="{{ route('targetKaryawan.edit', ['targetKaryawan' => $targetKaryawans4->id]) }}"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">Edit Target</a>
            </li>
            <li>
                <form class=""
                    action="{{ route('targetKaryawan.destroy', ['targetKaryawan' => $targetKaryawans4->id]) }}"
                    method="POST">
                    <button onclick="return confirm('Are you sure?')"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">Hapus Target
                        @csrf
                        @method('delete')
                    </button>
            </li>
            </form>
            @endforeach
            @else
            <li>
                <a href="{{ route('targetKaryawan.create') }}"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">Tambahkan Target</a>
            </li>
            @endif
        </ul>
    </div>
</div>



{{-- Top Customers --}}
<div
    class=" max-w-5xl md:ml-40 h-[480px] p-6 bg-white border border-gray-200 rounded-xl  hover:bg-gray-100 shadow-2xl mt-10">
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
                    <button id="orderStats" data-dropdown-toggle="orderStatsTrigger">
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
                <p class="place-self-center text-md text-black font-normal ml-10 ">{{ $top['total_pembelian'] }}
                </p>
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

<div id="topCustomersTrigger" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="topCustomers">
        <li>
            <a href="{{ route('marketing.sort', ['topCustomers' => 'Daily']) }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 @if(request('topCustomers') == 'Daily') bg-gray-100 dark:bg-gray-600 @endif"">Daily</a>
        </li>
        <li>
            <a href=" {{ route('marketing.sort', ['topCustomers'=> 'Monthly']) }}" class="block px-4 py-2
                hover:bg-gray-100 dark:hover:bg-gray-600 @if(request('topCustomers') == 'Monthly') bg-gray-100
                dark:bg-gray-600 @endif">Monthly</a>
        </li>
        <li>
            <a href="{{ route('marketing.sort', ['topCustomers' => 'Yearly']) }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600  @if(request('topCustomers') == 'Yearly') bg-gray-100 dark:bg-gray-600 @endif">Yearly</a>
        </li>
        <li>
    </ul>
</div>





<script src="{{ $orderStats->cdn() }}"></script>

{{ $orderStats->script() }}
{{ $userActivity->script() }}
{{ $dailyOrderStats->script() }}
{{ $dailyTargetStats->script() }}
{{ $saleThisMonth->script() }}

@vite(['resources/css/app.css','resources/js/app.js'])

@endsection