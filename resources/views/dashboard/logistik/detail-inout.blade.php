@extends('dashboard.layout.main')
@section('mainContent')

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Kode Barang
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Barang
                </th>
                <th scope="col" class="px-6 py-3">
                    Approved By
                </th>
                <th scope="col" class="px-6 py-3">
                    Barang Masuk
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal Masuk
                </th>
                <th scope="col" class="px-6 py-3">
                    Barang Keluar
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal Keluar
                </th>
                <th scope="col" class="px-6 py-3">
                    Note
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produkB as $produk)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $produk->kode_barang }}
                </th>
                <td class="px-6 py-4">
                    {{ $produk->produkJadi->nama_barang }}
                </td>
                <td class="px-6 py-4">
                    {{ $produk->user->username }}
                </td>
                <td class="px-6 py-4">
                    {{ $produk->barang_masuk }}
                </td>
                <td class="px-6 py-4">
                    {{ $produk->date_in }}
                </td>
                <td class="px-6 py-4">
                    {{ $produk->barang_keluar }}
                </td>
                <td class="px-6 py-4">
                    {{ $produk->date_out }}
                </td>
                <td class="px-6 py-4">
                    {{ $produk->keterangan }}
                </td>
                <td class="px-6 py-4">
                    <button id="defaultModalButtonEdit{{ $produk->id }}"
                        data-modal-toggle="defaultModalEdit{{ $produk->id }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 20h9"></path>
                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                        </svg>
                    </button>
                    <form action="{{ route('in_out.destroy', ['in_out' => $produk->id]) }}" method="post"
                        class='inline'>
                        <button onclick="return confirm('Are you sure?')">
                            @csrf
                            @method('delete')
                            <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M20 5H9l-7 7 7 7h11a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2Z"></path>
                                <line x1="18" y1="9" x2="12" y2="15"></line>
                                <line x1="12" y1="9" x2="18" y2="15"></line>
                            </svg>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@foreach ($produkB as $modal)
<!-- Edit modal -->
<div id="defaultModalEdit{{ $modal->id }}" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Edit In Out
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="defaultModalEdit{{ $modal->id }}">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="{{ route('in_out.update', ['in_out'=>$modal->id]) }}" method="POST">
                @csrf
                @method('put')
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Barang</label>
                        <input type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ $modal->produkJadi->nama_barang }}">
                        <input name="kode_barang" value="{{ $modal->kode_barang }}" hidden>
                    </div>
                    <div>
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Approved
                            By</label>
                        <input type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ $modal->user->username }}">
                    </div>
                    <input name="user_id" value="{{ $modal->user_id }}" hidden>
                    <div>
                        <label for="barang_masuk"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Barang Masuk</label>
                        <input type="number" name="barang_masuk" id="barang_masuk"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ $modal->barang_masuk }}">
                    </div>
                    <div>
                        <label for="date_in"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Masuk</label>
                        <input type="date" name="date_in" id="date_in"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ $modal->date_in }}">
                    </div>
                    <div>
                        <label for="barang_keluar"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Barang Keluar</label>
                        <input type="number" name="barang_keluar" id="barang_keluar"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ $modal->barang_keluar }}">
                    </div>
                    <div>
                        <label for="date_out"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Keluar</label>
                        <input type="date" name="date_out" id="date_out"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ $modal->date_out }}">
                    </div>
                </div>
                <button type="submit"
                    class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Edit product
                </button>
            </form>
        </div>
    </div>
</div>
@endforeach

@endsection