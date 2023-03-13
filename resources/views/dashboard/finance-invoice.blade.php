@extends('dashboard.layout.main')
@section('mainContent')
{{-- Template Invoice --}}
<div class="ml-14 mt-10 p-10">
  <div class="inline-block p-6 bg-white border border-gray-200 rounded-xl  hover:bg-gray-100 shadow-2xl w-[1153px] h-[791px]">
      <div class="grid grid-flow-col">
        <h1 class="ml-44 mb-2 text-2xl font-semibold tracking-tight text-gray-900">INVOICE NUMBER :</h1>
        <h2 class="mr-48 mb-2 text-2xl font-bold tracking-tight text-gray-900">INV/TGL/URUTAN/TIPEPEMBELI/BULAN/TAHUN</h2>
      </div>
      <div class="ml-[314px]">
        <p class="text-sm font-semibold tracking-tight text-gray-900">Order Approved By : Hengki Kurniawan (31 February 2023)</p>
      </div>
      <div class="border-gray-400 border-b-[1px] py-10"></div>
      <div class="mt-6 ml-0">
        <table class="w-[1110px] table-auto text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400 bg-[#EEEE]">
                                  <tr>
                                      <th class="px-10 py-5">Order ID</th>
                                      <th class="px-10 py-5">Detail</th>
                                      <th class="px-10 py-5">Size</th>
                                      <th class="py-5">Total Order</th>
                                      <th class="px-5 py-5">Entry Price</th>
                                      <th class="px-6 py-5">Price</th>
                                      <th class="px-7 py-5">Diskon</th>
                                      <th class="px-5 py-5">Total Price</th>
                                      <th class="px-20 py-5">Shipping Cost</th>
                                  </tr>
                                  <tr class="bg-white">
                                    <td class="bg-[#EEEE] px-5" rowspan="3">#SRMK14045</td>    
                                      <td class="px-5 py-5">Madu Durian</td>
                                      <td class="px-10 py-5">1 KG</td>
                                      <td class="px-5">200</td>
                                      <td class="px-3">IDR 1.000.000</td>
                                      <td>IDR 1.000.000</td>
                                      <td class="px-9">29%</td>
                                      <td class="px-3">IDR 1.000.000</td>
                                      <td class="bg-[#EEEE] px-[90px]" rowspan="3">IDR 700.000</td>
                                  </tr>
                                  <tr>
                                    <td class="px-5 py-5">Madu Durian</td>
                                    <td class="px-10">1 KG</td>
                                    <td class="px-5">200</td>
                                    <td class="px-3">IDR 1.000.000</td>
                                    <td>IDR 1.000.000</td>
                                    <td class="px-9">29%</td>
                                    <td class="px-3">IDR 1.000.000</td>
                                    </tr>
                                  <tr class="bg-white">
                                    <td class="px-5 py-5">Madu Durian</td>
                                    <td class="px-10">1 KG</td>
                                    <td class="px-5">200</td>
                                    <td class="px-3">IDR 1.000.000</td>
                                    <td>IDR 1.000.000</td>
                                    <td class="px-9">29%</td>
                                    <td class="px-3">IDR 1.000.000</td>
                                    </tr>
                                  <tr class="border">
                                      <td colspan="6" class="px-5 py-5">Type Pembeli</td>
                                      <td colspan="6" class="font-bold px-4 py-5 text-[#2E2E2E] ">Reseller</td>
                                  </tr>
                                  <tr class="border">
                                    <td colspan="6" class="px-5 py-5">Tanggal Pembayaran</td>
                                    <td colspan="6" class="font-bold px-1 py-5 text-[#2E2E2E] ">27 May 2023</td>
                                </tr>
                                <tr class="border">
                                  <td colspan="6" class="px-5 py-5">Channel Pembayaran</td>
                                  <td colspan="6" class="font-bold px-7 py-5 text-[#2E2E2E] ">BRI</td>
                              </tr>
                              <tr class="border">
                                <td colspan="6" class="px-5 py-5">Termin Pembayaran</td>
                                <td colspan="6" class="font-bold px-1 py-5 text-[#2E2E2E] ">27 May 2023</td>
                              </tr>
                              <tr class="border">
                                <td colspan="6" class="px-5 py-5">Total Order Price</td>
                                <td colspan="6" class="font-bold pl-[270px] py-5 text-[#2E2E2E] ">IDR. 500.000</td>
                              </tr>
                              <tr class="border">
                                <td colspan="6" class="px-5 py-5">Commision Fee</td>
                                <td colspan="6" class="font-bold pl-[270px] py-5 text-[#2E2E2E] ">IDR. 500.000</td>
                                
                              </tr>
                              <tr class="border">
                                <td colspan="6" class="px-5 py-5">Revenue</td>
                                <td colspan="6" class="font-bold pl-[270px] py-5 text-[#2E2E2E] ">IDR. 500.000 <div class="inline-block top-0 rounded bg-green-200 text-green-600 w-16 h-4">
                                  <p class="text-center ml-1 text-xs font-medium">+ 67,81 % </p>
                              </div></td>
                              </tr>
                              </table>
      </div>
    </div>
  </div>
@endsection