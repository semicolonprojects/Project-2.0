@extends('dashboard.layout.main')

@section('mainContent')

{{-- Overview --}}
<div
    class="w-[1024px] rounded-[13px] overflow-hidden ml-40 mt-10 bg-white border border-[#686868CF] shadow-[0px_8px_8px_rgba(0,0,0,0.5)]">
    <div class="px-6 py-4">
        <div class="grid grid-flow-col gap-[480px]">
            <div class="font-bold text-2xl">Marketing Curah Division Overview</div>
            <div class="inline-flex">
                <p class="font-normal text-xl text-black/60">Sort By</p>
                <button id="marketingOverview" data-dropdown-toggle="marketingOverviewTrigger">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    @foreach ($overview as $overviews)
    <div class="px-10 py-8">
        <p class="text-black/75 text-xl">This Month</p>
        <div class="grid grid-flow-col gap-0">
            <p class="text-[#4E504F] text-[32px]">{{ 'Rp. ' . number_format($overviews->total_pembelian, 2, ',',
                '.') }}</p>
            <div class="absolute rounded bg-[#22DB6636] text-[#25D466F7] w-24 h-6 mt-4 ml-56">
                <p class="text-center ml-1 text-[17px] font-medium">+ 4,20 % </p>
            </div>
        </div>
    </div>
    @endforeach
    @foreach ($overview as $overviews2)
    <div class="px-10 py-8">
        <div class="grid grid-flow-col divide-x divide-black ">
            <div class="grid grid-flow-row divide-y divide-black">
                <div class="px-7 py-7">
                    <p class="text-[#000000B8] text-xl font-custom">Orders</p>
                    <p class="text-black text-xl">{{ $overviews2->total_order }}</p>
                </div>
                <div class="px-7 py-10">
                    <p class="text-[#000000B8] text-xl font-custom">Average sales success rate</p>
                    <p class="text-black text-xl">{{ $overviews2->persentase_dibayar }}</p>
                </div>
            </div>
            <div class="grid grid-flow-row divide-y divide-black">
                <div class="px-7 py-7">
                    <p class="text-[#000000B8] text-xl font-custom">Sales</p>
                    <p class="text-black text-xl">{{ $overviews2->total_dibayar }}</p>
                </div>
                <div class="px-7 py-10">
                    <p class="text-[#000000B8] text-xl font-custom">Customers</p>
                    <p class="text-black text-xl">{{ $overviews2->total_customer }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div id="marketingOverviewTrigger" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="marketingOverview">
        <li>
            <a href="{{ route('marekting_curah.sort', ['marketingOverview' => 'Daily']) }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 @if(request('marketingOverview') == 'Daily') bg-gray-100 dark:bg-gray-600 @endif"">Daily</a>
        </li>
        <li>
            <a href=" {{ route('marekting_curah.sort', ['marketingOverview'=> 'Monthly']) }}" class="block px-4 py-2
                hover:bg-gray-100 dark:hover:bg-gray-600 @if(request('marketingOverview') == 'Monthly') bg-gray-100
                dark:bg-gray-600 @endif">Monthly</a>
        </li>
        <li>
            <a href="{{ route('marekting_curah.sort', ['marketingOverview' => 'Yearly']) }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600  @if(request('marketingOverview') == 'Yearly') bg-gray-100 dark:bg-gray-600 @endif">Yearly</a>
        </li>
        <li>
    </ul>
</div>

{{-- Summary Orders & Targets --}}
<div class="mt-14 ml-40">
    <div
        class="inline-block p-6 bg-white border border-gray-200 rounded-xl  hover:bg-gray-100 shadow-2xl w-[1024px] h-[980px]">
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
        <div class="grid grid-flow-col gap-7 ">
            <div class="grid grid-flow-row gap-7 ">
                <div
                    class="inline-flex mt-20 ml-10 bg-white border-2 border-gray-200 rounded-2xl shadow-xl w-[390px] h-[200px]">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 ml-5 mt-3">Total Target</h5>
                    <div class="inline-flex absolute mt-32 mr-16">
                        @forelse ($targetKaryawanCurah as $targetKaryawanCurahs)
                        <h5 class="text-3xl font-bold tracking-tight text-gray-900 ml-3 mt-3">Rp {{
                            number_format(($targetKaryawanCurahs->target)) }}</h5>
                        <p class="text-sm ml-5 mt-[27px] text-gray-700/75">Deadline : {{
                            $targetKaryawanCurahs->deadline_target }}</p>
                        @empty
                        <h5 class="text-3xl font-bold tracking-tight text-gray-900 ml-3 mt-3">Rp. 0,00</h5>
                        <p class="text-sm ml-5 mt-[27px] text-gray-700/75">Deadline : </p>
                        @endforelse ($targetKaryawanCurah as $targetKaryawanCurahs)
                    </div>
                    <div
                        class="inline-flex absolute ml-80 mt-3 bg-[#22DB6636] text-[#25D466F7] rounded-xl  w-[50px] h-[50px]">
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
                    class="inline-flex ml-10 bg-white border-2 border-gray-200 rounded-2xl shadow-xl w-[390px] h-[200px]">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 ml-5 mt-3">GAP Ke Target</h5>
                    <div class="inline-flex absolute mt-32 mr-16">
                        @forelse ($targetKaryawanCurah as $targetKaryawanCurahs3)
                        @if ($targetKaryawanCurahs3->total_tercapai != 0)
                        <h5 class="text-3xl font-bold tracking-tight text-gray-900 ml-3 mt-3">Rp {{
                            number_format(($targetKaryawanCurahs3->target)/($targetKaryawanCurahs3->total_tercapai)) }}
                        </h5>
                        @else
                        <h5 class="text-3xl font-bold tracking-tight text-gray-900 ml-3 mt-3">Rp {{
                            number_format($targetKaryawanCurahs3->target) }}</h5>
                        @endif
                        <p class="text-sm ml-5 mt-[27px] text-gray-700/75">Deadline : {{
                            $targetKaryawanCurahs3->deadline_target }}</p>
                        @empty
                        <h5 class="text-3xl font-bold tracking-tight text-gray-900 ml-3 mt-3">Rp. 0,00</h5>
                        <p class="text-sm ml-5 mt-[27px] text-gray-700/75">Deadline : </p>
                        @endforelse ($targetKaryawanCurah as $targetKaryawanCurahs)
                    </div>
                    <div
                        class="inline-flex absolute ml-80 mt-3 bg-[#22DB6636] text-[#25D466F7] rounded-xl  w-[50px] h-[50px]">
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
                    class="inline-flex mt-20 ml-10 bg-white border-2 border-gray-200 rounded-2xl shadow-xl w-[390px] h-[200px]">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 ml-5 mt-3">Daily Target</h5>
                    <div class="inline-flex absolute mt-32 mr-16">
                        @forelse($targetKaryawanCurah as $targetKaryawanCurahs1)
                        <h5 class="text-3xl font-bold tracking-tight text-gray-900 ml-3 mt-3">Rp {{
                            number_format(($targetKaryawanCurahs1->target/30)) }}</h5>
                        <p class="text-sm ml-5 mt-[27px] text-gray-700/75">Today : {{
                            now("Asia/Bangkok")->toDateString() }}</p>
                        @empty
                        <h5 class="text-3xl font-bold tracking-tight text-gray-900 ml-3 mt-3">Rp. 0,00</h5>
                        <p class="text-sm ml-5 mt-[27px] text-gray-700/75">Today : {{
                            now("Asia/Bangkok")->toDateString() }}</p>
                        @endforelse ($targetKaryawan as $targetKaryawan)
                    </div>
                    <div
                        class="inline-flex absolute ml-80 mt-3 bg-[#22DB6636] text-[#25D466F7] rounded-xl  w-[50px] h-[50px]">
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
                    class="inline-flex ml-10 bg-white border-2 border-gray-200 rounded-2xl shadow-xl w-[390px] h-[200px]">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 ml-5 mt-3">Total Tercapai</h5>
                    <div class="inline-flex absolute mt-32 mr-16">
                        @forelse($targetKaryawanCurah as $targetKaryawanCurahs2)
                        <h5 class="text-3xl font-bold tracking-tight text-gray-900 ml-3 mt-3"> Rp {{
                            number_format($targetKaryawanCurahs2->total_tercapai) }}</h5>
                        <p class="text-sm ml-5 mt-[27px] text-gray-700/75">Today : {{
                            now("Asia/Bangkok")->toDateString() }}</p>
                        @empty
                        <h5 class="text-3xl font-bold tracking-tight text-gray-900 ml-3 mt-3">Rp. 0,00</h5>
                        <p class="text-sm ml-5 mt-[27px] text-gray-700/75">Today : {{
                            now("Asia/Bangkok")->toDateString() }}</p>
                        @endforelse ($targetKaryawanCurah as $targetKaryawans2)
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
        <div class="grid grid-flow-col gap-7">
            <div class="inline-flex absolute mt-3 ">
                <h5 class="text-2xl font-bold tracking-tight text-gray-900 ml-4 ">Daily Order Stats</h5>
                <div class="mt-20 mr-16 absolute">
                    <div>
                        <div id="{!! $lineChartCurah->container() !!}" width=" 350px" height="200px"></div>
                    </div>
                </div>
            </div>

            <div class="inline-flex absolute mt-3 ml-[495px]">
                <h5 class="absolute text-2xl font-bold tracking-tight text-gray-900">Daily Target Stats</h5>
                <div class="mt-3 mb-7 w-96">
                    <div class='py-10' id="{!! $orderStats->container() !!}" width="280px">
                    </div>
                </div>
            </div>
            <div class="py-48 mr-[503px] border-r-[1px] border-black"></div>
        </div>
    </div>
    <div id="targetTrigger" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="topProducts">
            @if (count($targetKaryawanCurah)!= null)
            @foreach ($targetKaryawanCurah as $targetKaryawanCurahs4)
            <li>
                <a href="{{ route('targetKaryawanC.edit', ['targetKaryawanC' => $targetKaryawanCurahs4->id]) }}"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">Edit Target</a>
            </li>
            <li>
                <form class=""
                    action="{{ route('targetKaryawanC.destroy', ['targetKaryawanC' => $targetKaryawanCurahs4->id]) }}"
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
                <a href="{{ route('targetKaryawanC.create') }}"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">Tambahkan Target</a>
            </li>

            @endif
        </ul>
    </div>
</div>


<script src="{{ $lineChartCurah->cdn() }}"></script>

{{ $lineChartCurah->script() }}
{{ $orderStats->script() }}
@endsection