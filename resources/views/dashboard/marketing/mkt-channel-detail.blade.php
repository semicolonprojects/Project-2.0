@extends('dashboard.layout.main')

@section('mainContent')

{{-- Overview --}}
<div
    class="w-[1024px] rounded-[13px] overflow-hidden ml-40 mt-10 bg-white border border-[#686868CF] shadow-[0px_8px_8px_rgba(0,0,0,0.5)]">
    <div class="px-6 py-4">
        <div class="grid grid-flow-col gap-[580px]">
            <div class="font-bold text-2xl"> {{ $channel->nama_channel }}</div>
            <div class="inline-flex">
                <p class="font-normal text-xl text-black/60">Daily</p>
                <button id="topProducts" data-dropdown-toggle="topProductsTrigger">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="px-10 py-8">
        <div class="grid grid-flow-col gap-48">
            <div>
                <p class="text-black/75 text-xl">Target</p>
                <div class="grid grid-flow-col gap-0">
                    <p class="text-[#4E504F] text-[32px]">Rp {{ number_format($channel->target_bulanan, 2, ',', '.') }}
                    </p>
                </div>
            </div>
            <div>
                <p class="text-black/75 text-xl">Total Tercapai</p>
                <div class="grid grid-flow-col gap-0">
                    <p class="text-[#4E504F] text-[32px]"> Rp {{ number_format($channel->total_tercapai, 2, ',', '.')
                        }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="px-10 py-8">
        <div class="grid grid-flow-col divide-x divide-black ">
            <div class="grid grid-flow-row divide-y divide-black">
                <div class="px-7 py-7">
                    <p class="text-[#000000B8] text-xl font-custom">Orders</p>
                    <p class="text-black text-xl">5000</p>
                </div>
                <div class="px-7 py-10">
                    <p class="text-[#000000B8] text-xl font-custom">Percentage</p>
                    <p class="text-black text-xl">{{ number_format($channel->total_tercapai / $channel->target_bulanan
                        * 100, 2, ',', '.') }}%</p>
                </div>
            </div>
            <div class="grid grid-flow-row divide-y divide-black">
                <div class="px-7 py-7">
                    <p class="text-[#000000B8] text-xl font-custom">Sales</p>
                    <p class="text-black text-xl">20.000</p>
                </div>
                <div class="px-7 py-10">
                    <p class="text-[#000000B8] text-xl font-custom">Customers</p>
                    <p class="text-black text-xl">1.000</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection