@extends('dashboard.layout.main')

@section('mainContent')

<div class="ml-28 mt-10">
    <div class="py-5 sm:ml-[422px] md: lg:ml-[670px] xl:ml-[928px] 2xl:ml-[928px]">
        <button type="button"
            class="text-white bg-[#22DB66] font-medium rounded-[22px] text-[13px] px-3 py-2.5 inline-flex items-center">
            <div class="px-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </div>
            Add New Outcome
        </button>
    </div>
    <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-10">
        <!--Card 1-->
        <div class="bg-white border-[1px] border-[#686868cf] shadow-[0px_8px_8px_rgba(0,0,0,0.5)] rounded-[13px] px-5">
            <p class="font-bold text-2xl text-black">Online</p>
            <div class="grid grid-flow-col py-10">
                <div class="">
                    <p class="font-semibold text-[32px] text-gray-500">Shope</p>
                    <p class="font-semibold text-[32px] text-gray-500">Tokopedia</p>
                    <p class="font-semibold text-[32px] text-gray-500">Lazada</p>
                    <p class="font-semibold text-[32px] text-gray-500">Bukalapak</p>
                    <p class="font-semibold text-[32px] text-gray-500">Tiktok</p>
                    <p class="font-semibold text-[32px] text-gray-500">Pettycash</p>
                </div>
                <div class="">
                    <p class="font-normal text-[32px] text-black">IDR xxx.xxx</p>
                    <p class="font-normal text-[32px] text-black">IDR xxx.xxx</p>
                    <p class="font-normal text-[32px] text-black">IDR xxx.xxx</p>
                    <p class="font-normal text-[32px] text-black">IDR xxx.xxx</p>
                    <p class="font-normal text-[32px] text-black">IDR xxx.xxx</p>
                    <p class="font-normal text-[32px] text-black">IDR xxx.xxx</p>
                </div>
            </div>
        </div>
        <!--Card 2-->
        <div class="bg-white border-[1px] border-[#686868cf] shadow-[0px_8px_8px_rgba(0,0,0,0.5)] rounded-[13px] px-5">
            <p class="font-bold text-2xl text-black">Offline</p>
            <div class="grid grid-flow-col py-10">
                <div class="">
                    <p class="font-semibold text-[32px] text-gray-500">Distributor</p>
                    <p class="font-semibold text-[32px] text-gray-500">Maklon</p>
                    <p class="font-semibold text-[32px] text-gray-500">Curah</p>
                    <p class="font-semibold text-[32px] text-gray-500">Reseller</p>
                    <p class="font-semibold text-[32px] text-gray-500">Eceran</p>
                    <p class="font-semibold text-[32px] text-gray-500">Karyawan</p>
                </div>
                <div class="">
                    <p class="font-normal text-[32px] text-black">IDR xxx.xxx</p>
                    <p class="font-normal text-[32px] text-black">IDR xxx.xxx</p>
                    <p class="font-normal text-[32px] text-black">IDR xxx.xxx</p>
                    <p class="font-normal text-[32px] text-black">IDR xxx.xxx</p>
                    <p class="font-normal text-[32px] text-black">IDR xxx.xxx</p>
                    <p class="font-normal text-[32px] text-black">IDR xxx.xxx</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection