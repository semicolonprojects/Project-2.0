@extends('dashboard.layout.main')

@section('mainContent')

<div class="ml-16 mt-10">
    <div class="grid grid-flow-col gap-7 py-10">
        <div class="ml-10 grid grid-flow-row">
            <h1 class="font-bold text-4xl text-black">Income</h1>
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
                Add New Income
            </button>
        </div>
    </div>
    <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-10">
        <!--Card 1-->
        <div class="bg-white border-[1px] border-[#686868cf] shadow-[0px_8px_8px_rgba(0,0,0,0.5)] rounded-[13px] px-5 py-5">
            <p class="font-bold text-2xl text-black">Online</p>
            <div class="grid grid-flow-col py-10 gap-10">
                <div class="grid grid-flow-row gap-5">
                    <p class="font-semibold text-xl text-gray-500">Shope</p>
                    <p class="font-semibold text-xl text-gray-500">Tokopedia</p>
                    <p class="font-semibold text-xl text-gray-500">Lazada</p>
                    <p class="font-semibold text-xl text-gray-500">Bukalapak</p>
                    <p class="font-semibold text-xl text-gray-500">Tiktok</p>
                    <p class="font-semibold text-xl text-gray-500">Pettycash</p>
                </div>
                <div class="grid grid-flow-row gap-5">
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
        <div class="bg-white border-[1px] border-[#686868cf] shadow-[0px_8px_8px_rgba(0,0,0,0.5)] rounded-[13px] px-5 py-5">
            <p class="font-bold text-2xl text-black">Offline</p>
            <div class="grid grid-flow-col py-10 gap-10">
                <div class="grid grid-flow-row gap-5">
                    <p class="font-semibold text-xl text-gray-500">Distributor</p>
                    <p class="font-semibold text-xl text-gray-500">Maklon</p>
                    <p class="font-semibold text-xl text-gray-500">Curah</p>
                    <p class="font-semibold text-xl text-gray-500">Reseller</p>
                    <p class="font-semibold text-xl text-gray-500">Eceran</p>
                    <p class="font-semibold text-xl text-gray-500">Karyawan</p>
                </div>
                <div class="grid grid-flow-row gap-5">
                    <p class="font-normal text-xl text-black">IDR xxx.xxx</p>
                    <p class="font-normal text-xl text-black">IDR xxx.xxx</p>
                    <p class="font-normal text-xl text-black">IDR xxx.xxx</p>
                    <p class="font-normal text-xl text-black">IDR xxx.xxx</p>
                    <p class="font-normal text-xl text-black">IDR xxx.xxx</p>
                    <p class="font-normal text-xl text-black">IDR xxx.xxx</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection