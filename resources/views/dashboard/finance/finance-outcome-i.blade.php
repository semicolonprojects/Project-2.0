@extends('dashboard.layout.main')

@section('mainContent')

{{-- Tabel Gaji --}}
<div class="mt-20 ml-28">
  <table class="w-[1100px] table-auto text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400 bg-[#EEEE]">
                            <tr>
                                <th class="px-10 py-5">Gaji</th>
                            </tr>
                            <tr class="bg-white border">
                              <th class="px-10 py-5">Nama Personal</th>
                              <th class="px-10 py-5">Divisi</th>
                              <th class="px-10 py-5">Nominal</th>
                            </tr>
                            <tr>
                              <td class="px-10 ">#SRMK14045</td>
                              <td class="px-6 py-5">Marketing</td>
                              <td class="px-6">IDR 1.000.000</td>
          
                              </tr>
                            <tr>
                              <td class="px-10">#SRMK14045</td>
                              <td class="px-8 py-5">Logistik</td>
                              <td class="px-6">IDR 1.000.000</td>
                              </tr>
                        
                        </table>
</div>

{{-- Tabel Sewa Toko --}}
<div class="mt-20 ml-28">
  <table class="w-[1100px] table-auto text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400 bg-[#EEEE]">
                            <tr>
                                <th class="px-10 py-5">Sewa Toko</th>
                            </tr>
                            <tr class="bg-white border">
                              <th class="px-10 py-5">Bulan & Tahun</th>
                              <th class="px-10 py-5">Nominal</th>
                            </tr>
                            <tr>
                              <td class="px-10 py-5">Marketing</td>
                              <td class="px-6">IDR 1.000.000</td>
          
                              </tr>
                            <tr>
                              <td class="px-10 py-5">Logistik</td>
                              <td class="px-6">IDR 1.000.000</td>
                              </tr>
                        
                        </table>
</div>

{{-- Tabel Kulak --}}
<div class="mt-20 ml-28">
  <table class="w-[1100px] table-auto text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400 bg-[#EEEE]">
                            <tr>
                                <th class="px-10 py-5">Kulak</th>
                            </tr>
                            <tr class="bg-white border">
                              <th class="px-10 py-5">Tipe Barang</th>
                              <th class="px-10 py-5">Nominal</th>
                            </tr>
                            <tr>
                              <td class="px-10 py-5">Madu</td>
                              <td class="px-6">IDR 1.000.000</td>
          
                              </tr>
                            <tr>
                              <td class="px-10 py-5">Logistik</td>
                              <td class="px-6">IDR 1.000.000</td>
                              </tr>
                        
                        </table>
</div>

{{-- Tabel Logistik --}}
<div class="mt-20 ml-28">
  <table class="w-[1100px] table-auto text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400 bg-[#EEEE]">
                            <tr>
                                <th class="px-10 py-5">Logistik</th>
                            </tr>
                            <tr class="bg-white border">
                              <th class="px-10 py-5">Tipe Barang</th>
                              <th class="px-10 py-5">Nominal</th>
                            </tr>
                            <tr>
                              <td class="px-10 py-5">Madu</td>
                              <td class="px-6">IDR 1.000.000</td>
          
                              </tr>
                            <tr>
                              <td class="px-10 py-5">Logistik</td>
                              <td class="px-6">IDR 1.000.000</td>
                              </tr>
                        
                        </table>
</div>

{{-- Tabel Marketing --}}
<div class="mt-20 ml-28">
  <table class="w-[1100px] table-auto text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400 bg-[#EEEE]">
                            <tr>
                                <th class="px-10 py-5">Marketing</th>
                            </tr>
                            <tr class="bg-white border">
                              <th class="px-10 py-5">Tipe Barang</th>
                              <th class="px-10 py-5">Nominal</th>
                            </tr>
                            <tr>
                              <td class="px-10 py-5">Madu</td>
                              <td class="px-6">IDR 1.000.000</td>
          
                              </tr>
                            <tr>
                              <td class="px-10 py-5">Logistik</td>
                              <td class="px-6">IDR 1.000.000</td>
                              </tr>
                        
                        </table>
</div>

{{-- Tabel Pajak --}}
<div class="mt-20 ml-28">
  <table class="w-[1100px] table-auto text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400 bg-[#EEEE]">
                            <tr>
                                <th class="px-10 py-5">Pajak</th>
                            </tr>
                            <tr class="bg-white border">
                              <th class="px-10 py-5">Tipe Pajak</th>
                              <th class="px-10 py-5">Tahun</th>
                              <th class="px-10 py-5">Nominal</th>
                            </tr>
                            <tr>
                              <td class="px-10 py-5">PBB</td>
                              <td class="px-10 py-5">Madu</td>
                              <td class="px-6">IDR 1.000.000</td>
                              </tr>
                            <tr>
                              <td class="px-10 py-5">PBB</td>
                              <td class="px-10 py-5">Logistik</td>
                              <td class="px-6">IDR 1.000.000</td>
                            </tr>
                        
                        </table>
</div>

{{-- Tabel Ongkir Bisnis --}}
<div class="mt-20 ml-28">
  <table class="w-[1100px] table-auto text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400 bg-[#EEEE]">
                            <tr>
                                <th class="px-10 py-5">Ongkir Bisnis</th>
                            </tr>
                            <tr class="bg-white border">
                              <th class="px-10 py-5">Tipe</th>
                              <th class="px-10 py-5">Nominal</th>
                            </tr>
                            <tr>
                              <td class="px-10 py-5">Shopee</td>
                              <td class="px-6">IDR 1.000.000</td>
                              </tr>
                            <tr>
                              <td class="px-10 py-5">Tokped</td>
                              <td class="px-6">IDR 1.000.000</td>
                            </tr>
                        
                        </table>
</div>

{{-- Tabel Wifi --}}
<div class="mt-20 ml-28">
  <table class="w-[1100px] table-auto text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400 bg-[#EEEE]">
                            <tr>
                                <th class="px-10 py-5">Wifi</th>
                            </tr>
                            <tr class="bg-white border">
                              <th class="px-10 py-5">Bulan & Tahun</th>
                              <th class="px-10 py-5">Nominal</th>
                            </tr>
                            <tr>
                              <td class="px-10 py-5">Madu</td>
                              <td class="px-6">IDR 1.000.000</td>
                              </tr>
                            <tr>
                              <td class="px-10 py-5">Logistik</td>
                              <td class="px-6">IDR 1.000.000</td>
                            </tr>
                        
                        </table>
</div>

{{-- Tabel Kas Toko --}}
<div class="mt-20 ml-28">
  <table class="w-[1100px] table-auto text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400 bg-[#EEEE]">
                            <tr>
                                <th class="px-10 py-5">Kas Toko</th>
                            </tr>
                            <tr class="bg-white border">
                              <th class="px-10 py-5">Bulan & Tahun</th>
                              <th class="px-10 py-5">Nominal</th>
                            </tr>
                            <tr>
                              <td class="px-10 py-5">PBB</td>
                              <td class="px-10 py-5">Madu</td>
                              <td class="px-6">IDR 1.000.000</td>
                              </tr>
                            <tr>
                              <td class="px-10 py-5">PBB</td>
                              <td class="px-10 py-5">Logistik</td>
                              <td class="px-6">IDR 1.000.000</td>
                            </tr>
                        
                        </table>
</div>

{{-- Tabel Reward --}}
<div class="mt-20 ml-28">
  <table class="w-[1100px] table-auto text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400 bg-[#EEEE]">
                            <tr>
                                <th class="px-10 py-5">Reward</th>
                            </tr>
                            <tr class="bg-white border">
                              <th class="px-10 py-5">Tipe Reward</th>
                              <th class="px-10 py-5">Nominal</th>
                            </tr>
                            <tr>
                              <td class="px-10 py-5">PBB</td>
                              <td class="px-10 py-5">Madu</td>
                              <td class="px-6">IDR 1.000.000</td>
                              </tr>
                            <tr>
                              <td class="px-10 py-5">PBB</td>
                              <td class="px-10 py-5">Logistik</td>
                              <td class="px-6">IDR 1.000.000</td>
                            </tr>
                        
                        </table>
</div>
@endsection