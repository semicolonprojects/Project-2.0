@extends('dashboard.layout.main')
@section('mainContent')

<div class="ml-16 mt-10">
    <div class="grid grid-flow-col gap-7 py-10">
        <div class="ml-10 grid grid-flow-row">
            <h1 class="font-bold text-4xl text-black">Outcome</h1>
        </div>
        <div class="grid-flow-row sm:ml-[322px] lg:ml-[670px] xl:ml-[750px] 2xl:ml-[928px]">
            <button type="button"
                class="text-white bg-[#22DB66] font-medium rounded-[22px] text-[13px] px-5 py-2.5 inline-flex items-center">
                <div class="px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </div>
                Add New Outcome
            </button>
        </div>
    </div>
    <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-10">
        <!--Card 1-->
        <div class="bg-white border-[1px] border-[#686868cf] shadow-[0px_8px_8px_rgba(0,0,0,0.5)] rounded-[13px] px-5">
            <div class="grid grid-flow-col gap-[22rem]">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 py-5">Internal</h5>
                <div class="mt-5">
                    <button id="outcomeInternal" data-dropdown-toggle="outcomeInternalTrigger" data-dropdown-placement="left" data-dropdown-offset-skidding="30" data-dropdown-offset-distance="-30"  >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="outcomeInternalTrigger" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownBottomButton">
                  <li>
                    <a href="\finance\outcome-i" class="block px-4 py-2 hover:bg-gray-100 font-bold dark:hover:bg-gray-600 dark:hover:text-white">Detail</a>
                  </li>
                </ul>
            </div>
            <div class="grid grid-flow-col py-10 gap-[7.75rem]">
                <div class="grid grid-flow-row gap-5">
                    <p class="font-semibold text-xl text-gray-500">Gaji</p>
                    <p class="font-semibold text-xl text-gray-500">Sewa Toko</p>
                    <p class="font-semibold text-xl text-gray-500">Kulak</p>
                    <p class="font-semibold text-xl text-gray-500">Logistik</p>
                    <p class="font-semibold text-xl text-gray-500">Marketing</p>
                    <p class="font-semibold text-xl text-gray-500">Pajak</p>
                    <p class="font-semibold text-xl text-gray-500">Ongkir Bisnis</p>
                    <p class="font-semibold text-xl text-gray-500">Wifi</p>
                    <p class="font-semibold text-xl text-gray-500">Kas Toko</p>
                    <p class="font-semibold text-xl text-gray-500">Reward</p>
                </div>
                <div class="grid grid-flow-row gap-5">
                    <p class="font-normal text-xl text-black">IDR xxx.xxx</p>
                    <p class="font-normal text-xl text-black">IDR xxx.xxx</p>
                    <p class="font-normal text-xl text-black">IDR xxx.xxx</p>
                    <p class="font-normal text-xl text-black">IDR xxx.xxx</p>
                    <p class="font-normal text-xl text-black">IDR xxx.xxx</p>
                    <p class="font-normal text-xl text-black">IDR xxx.xxx</p>
                    <p class="font-normal text-xl text-black">IDR xxx.xxx</p>
                    <p class="font-normal text-xl text-black">IDR xxx.xxx</p>
                    <p class="font-normal text-xl text-black">IDR xxx.xxx</p>
                    <p class="font-normal text-xl text-black">IDR xxx.xxx</p>
                </div>
            </div>
        </div>
        <!--Card 2-->
        <div class="bg-white border-[1px] border-[#686868cf] shadow-[0px_8px_8px_rgba(0,0,0,0.5)] rounded-[13px] px-5">
            <div class="grid grid-flow-col gap-[22rem]">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 py-5">External</h5>
                <div class="mt-5">
                    <button id="outcomeExternal" data-dropdown-toggle="outcomeExternalTrigger" data-dropdown-placement="left" data-dropdown-offset-skidding="30" data-dropdown-offset-distance="-30"  >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="outcomeExternalTrigger" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownBottomButton">
                  <li>
                    <a href="\finance\outcome-e" class="block px-4 py-2 hover:bg-gray-100 font-bold dark:hover:bg-gray-600 dark:hover:text-white">Detail</a>
                  </li>
                </ul>
            </div>
            <div class="grid grid-flow-col py-10 gap-20">
                <div class="grid grid-flow-row gap-5">
                    <p class="font-semibold text-xl text-gray-500">Sedekah</p>
                    <p class="font-semibold text-xl text-gray-500">Sponsorship</p>
                    <p class="font-semibold text-xl text-gray-500">Event</p>
                    <p class="font-semibold text-xl text-gray-500">Tak Terduga</p>
                    <p class="font-semibold text-xl text-gray-500">Kulak Food And Beverage</p>
                </div>
                <div class="">
                    <p class="font-normal text-xl text-black">IDR xxx.xxx</p>
                    <p class="font-normal text-xl text-black mt-5">IDR xxx.xxx</p>
                    <p class="font-normal text-xl text-black mt-5">IDR xxx.xxx</p>
                    <p class="font-normal text-xl text-black mt-5">IDR xxx.xxx</p>
                    <p class="font-normal text-xl text-black mt-5">IDR xxx.xxx</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection