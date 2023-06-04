@extends('dashboard.layout.main')

@section('mainContent')



<div class="ml-16 mt-10">
  <div class="grid grid-flow-col gap-7 py-10">
    <div class="ml-2 grid grid-flow-row">
        <h1 class="font-bold text-4xl text-black">Produk Bahan Baku (Madu)</h1>
    </div>
    <div class="grid-flow-row sm:ml-[320px] lg:ml-[350px] xl:ml-[450px] 2xl:ml-[918px]">
        <a href="{{ route('maduKulak.create') }}">
            <button type="button"
             class="text-white bg-[#22DB66] font-medium rounded-[22px] text-[13px] px-5 py-2.5 inline-flex items-center">
                <div class="px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </div>
                Add New Madu
            </button>
        </a>
    </div>
  </div>
  {{-- Tabel Barang Madu --}}
  <div
    class="w-[1200px] h-[420px] rounded-[13px] overflow-hidden bg-white border border-[#686868CF] shadow-[0px_8px_8px_rgba(0,0,0,0.5)]">
  <div class="mt-2 ml-2 relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-4 py-3">
                    Nama Produk
                </th>
                <th scope="col" class="px-6 py-3">
                    Size Produk
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga Madu Per Gram
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga Total
                </th>
              <th scope="col" class="px-6 py-3">
                    Tanggal Dibuat
            </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($madukulak as $maduKulaks)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $maduKulaks->nama_madu }}
                </th>
                <td class="px-6 py-4">
                    {{ $maduKulaks->size }}
                </td>
                <td class="px-6 py-4">
                    {{ 'Rp ' . number_format ($maduKulaks->harga_per_gram)}}
                </td>
                <td class="px-6 py-4">
                    {{ 'Rp ' . number_format ($maduKulaks->harga_total)}}
                </td>
                <td class="px-6 py-4">
                    {{ date('d M Y', strtotime($maduKulaks->created_at)) }}
                </td>
                <td class="px-8">
                    <form class="" action="{{ route('maduKulak.destroy', ['maduKulak' => $maduKulaks->id]) }}"
                        method="POST">
                        @csrf
                        @method('delete')
                        <button onclick="return confirm('Are you sure?')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M20 5H9l-7 7 7 7h11a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2Z"></path>
                            <line x1="18" y1="9" x2="12" y2="15"></line>
                            <line x1="12" y1="9" x2="18" y2="15"></line>
                        </svg>                
                    </button>
                </form>
            </td>
            @endforeach
            </tr>
        </tbody>
    </table>
</div>
  </div>
</div>


@vite(['resources/css/app.css','resources/js/app.js'])
@endsection