@extends('dashboard.layout.main')

@section('mainContent')

<div class="mt-3 ml-1 px-20">
  <h5 class="text-5xl font-bold p-5">Data Rekap Absensi</h5>
<div class="ml-5 mb-4 border-b border-gray-200 dark:border-gray-700">
  <ul class="flex flex-row -mb-px text-sm font-medium text-center " id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
      <li class="mr-2" role="presentation">
          <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Masuk</button>
      </li>
      <li class="mr-2" role="presentation">
          <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Keluar</button>
      </li>
      <li class="mr-2" role="presentation">
          <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Ijin</button>
      </li>
      <li role="presentation">
          <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Cuti</button>
      </li>
  </ul>
</div>
<div id="myTabContent">
  <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <table class="w-[1100px] table-auto text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400 bg-[#EEEE]">
        <tr>
            <th class="px-10 py-5">Rekap Absensi Masuk</th>
        </tr>
        <tr class="bg-white border">
          <th class="px-10 py-5">Nama Karyawan</th>
          <th class="px-10 py-5">Longitude</th>
          <th class="px-10 py-5">Latitude</th>
          <th class="px-10 py-5">Waktu Masuk</th>
        </tr>
        {{-- @csrf
        @foreach ($masuks as $masuk) --}}
        <tr>
          <td class="px-10 py-5">PBB</td>
          <td class="px-10 py-5">Madu</td>
          <td class="px-6">IDR 1.000.000</td>
          <td class="px-6">IDR 1.000.000</td>
          </tr>
        <tr>
          <td class="px-10 py-5">PBB</td>
          <td class="px-10 py-5">Logistik</td>
          <td class="px-6">IDR 1.000.000</td>
          <td class="px-6">IDR 1.000.000</td>
        </tr>
        {{-- @endforeach --}}
    </table>
  </div>
  <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
    <table class="w-[1100px] table-auto text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400 bg-[#EEEE]">
        <tr>
            <th class="px-10 py-5">Rekap Absensi Keluar</th>
        </tr>
        <tr class="bg-white border">
          <th class="px-10 py-5">Nama Karyawan</th>
          <th class="px-10 py-5">Longitude</th>
          <th class="px-10 py-5">Latitude</th>
          <th class="px-10 py-5">Waktu Masuk</th>
        </tr>
        {{-- @csrf
        @foreach ($masuks as $masuk) --}}
        <tr>
          <td class="px-10 py-5">PBB</td>
          <td class="px-10 py-5">Madu</td>
          <td class="px-6">IDR 1.000.000</td>
          <td class="px-6">IDR 1.000.000</td>
          </tr>
        <tr>
          <td class="px-10 py-5">PBB</td>
          <td class="px-10 py-5">Logistik</td>
          <td class="px-6">IDR 1.000.000</td>
          <td class="px-6">IDR 1.000.000</td>
        </tr>
        {{-- @endforeach --}}
    </table>
  </div>
  <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
    <table class="w-[1100px] table-auto text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400 bg-[#EEEE]">
        <tr>
            <th class="px-10 py-5">Rekap Ijin Karyawan</th>
        </tr>
        <tr class="bg-white border">
          <th class="px-10 py-5">Nama Karyawan</th>
          <th class="px-10 py-5">Longitude</th>
          <th class="px-10 py-5">Latitude</th>
          <th class="px-10 py-5">Waktu Masuk</th>
        </tr>
        {{-- @csrf
        @foreach ($masuks as $masuk) --}}
        <tr>
          <td class="px-10 py-5">PBB</td>
          <td class="px-10 py-5">Madu</td>
          <td class="px-6">IDR 1.000.000</td>
          <td class="px-6">IDR 1.000.000</td>
          </tr>
        <tr>
          <td class="px-10 py-5">PBB</td>
          <td class="px-10 py-5">Logistik</td>
          <td class="px-6">IDR 1.000.000</td>
          <td class="px-6">IDR 1.000.000</td>
        </tr>
        {{-- @endforeach --}}
    </table>
  </div>
  <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
    <table class="w-[1100px] table-auto text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400 bg-[#EEEE]">
        <tr>
            <th class="px-10 py-5">Rekap Cuti Karyawan</th>
        </tr>
        <tr class="bg-white border">
          <th class="px-10 py-5">Nama Karyawan</th>
          <th class="px-10 py-5">Longitude</th>
          <th class="px-10 py-5">Latitude</th>
          <th class="px-10 py-5">Waktu Masuk</th>
        </tr>
        {{-- @csrf
        @foreach ($masuks as $masuk) --}}
        <tr>
          <td class="px-10 py-5">PBB</td>
          <td class="px-10 py-5">Madu</td>
          <td class="px-6">IDR 1.000.000</td>
          <td class="px-6">IDR 1.000.000</td>
          </tr>
        <tr>
          <td class="px-10 py-5">PBB</td>
          <td class="px-10 py-5">Logistik</td>
          <td class="px-6">IDR 1.000.000</td>
          <td class="px-6">IDR 1.000.000</td>
        </tr>
        {{-- @endforeach --}}
    </table>
  </div>
</div>
</div>

@endsection