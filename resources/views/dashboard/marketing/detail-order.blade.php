@extends('dashboard.layout.main')

@section('mainContent')
<div class="mt-20 ml-10">
    <table
        class="w-[1100px] table-auto text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400 bg-[#EEEE]">
        <tr>
            <th class="px-10 py-5">{{ $order_id->order_id }}</th>
        </tr>
        <tr class="bg-white border">
            <th class="px-10 py-5">Nama Customer</th>
            <th class="px-10 py-5">Nama Barang</th>
            <th class="px-10 py-5">Total Order</th>
            <th class="px-10 py-5">Total Pembelian</th>
            <th class="px-10 py-5">Tipe Pesanan</th>
            <th class="px-10 py-5">Tipe Pembayaran</th>
            <th class="px-10 py-5">Status Pembayaran</th>
            @if ($order_id->status_pembayaran == 'Termin')
            <th class="px-10 py-5">Tenggat Termin</th>
            @endif
            <th class="px-10 py-5">Status Barang</th>
            <th class="px-10 py-5">Ongkir</th>
            <th class="px-10 py-5">Action</th>
        </tr>
        @foreach ($orders as $produk)
        <tr>
            <td class="px-10 ">{{ $produk->customer->nama_lengkap }}</td>
            <td class="px-6">{{ $produk->produk->nama_barang }}</td>
            <td class="px-6">{{ $produk->total_order }}</td>
            <td class="px-6">{{ 'Rp ' . number_format($produk->total_pembelian, 0, ',', '.') }}</td>
            <td class="px-6">{{ $produk->channel->nama_channel }}</td>
            <td class="px-6">{{ $produk->tipe_pembayaran }}</td>
            <td class="px-6">{{ $produk->status_pembayaran }}</td>
            @if ($produk->status_pembayaran == 'Termin')
            <td>{{ $produk->tenggat_order }}</td>
            @endif
            <td class="px-6">{{ $produk->status_barang }}</td>
            <td class="px-6">{{ 'Rp ' . number_format($produk->ongkir, 0, ',', '.') }}</td>
            <td class="px-6"><button id="defaultModalButtonEdit{{ $produk->id }}"
                    data-modal-toggle="defaultModalEdit{{ $produk->id }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 20h9"></path>
                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                    </svg>
                </button>
                <form action="{{ route('order.destroy', ['order' => $produk->id]) }}" method="post" class='inline'>
                    <button onclick="return confirm('Are you sure?')">
                        @csrf
                        @method('delete')
                        <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 5H9l-7 7 7 7h11a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2Z"></path>
                            <line x1="18" y1="9" x2="12" y2="15"></line>
                            <line x1="12" y1="9" x2="18" y2="15"></line>
                        </svg>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
        <tr class="border">
            <td colspan="6" class="px-5 py-5">Diskon</td>
            <td colspan="6" class="font-bold pl-[270px] py-5 text-[#2E2E2E] ">{{ number_format($order_id->diskon, 2) }}%
            </td>
        </tr>
        <tr class="border">
            <td colspan="6" class="px-5 py-5">Closed By</td>
            <td colspan="6" class="font-bold pl-[270px] py-5 text-[#2E2E2E] ">{{ $order_id->user->username }}</td>
        </tr>
        <tr class="border">
            <td colspan="6" class="px-5 py-5">Note</td>
            <td colspan="6" class="font-bold pl-[270px] py-5 text-[#2E2E2E] ">{{ $order_id->note }}</td>
        </tr>
    </table>
</div>

@foreach ($orders as $modal)
<!-- Edit modal -->
<div id="defaultModalEdit{{ $modal->id }}" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Edit Order {{ $order_id->order_id }}
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
            <form action="{{ route('order.update', ['order'=>$modal->id]) }}" method="POST">
                @csrf
                @method('put')
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Barang</label>
                        <input type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ $modal->produk->nama_barang }}">
                        <input name="kode_barang" value="{{ $modal->kode_barang }}" hidden>
                    </div>
                    <div>
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total
                            Order</label>
                        <input type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ $modal->total_order}}" name="total_order">
                    </div>
                    <div>
                        <label for="total_pembelian"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Pembelian</label>
                        <input type="number" name="total_pembelian" id="total_pembelian"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ $modal->total_pembelian }}">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe
                            Pesanan</label>
                        <select
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="tipe_pesanan">
                            <option selected>{{ $modal->tipe_pesanan }}</option>
                            <option value="Distributor">Distributor</option>
                            <option value="Maklon">Maklon</option>
                            <option value="Reseller">Reseller</option>
                        </select>
                    </div>
                    <div>
                        <label for="pesanan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status
                            Pembayaran</label>
                        <select id="pesanan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="status_pembayaran" onchange="showTerminFields(this)">
                            <option selected>{{ $modal->status_pembayaran }}</option>
                            <option value="Paid">Dibayar</option>
                            <option value="Setengah Dibayar">Setengah Dibayar</option>
                            <option value="Belum Dibayar">Belum Dibayar</option>
                            <option value="Termin">Termin</option>
                        </select>
                    </div>
                    <div id="terminFields" style="display: none;">
                        <label for="total_termin"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total
                            Termin</label>
                        <input id="total_termin" type="number" name="total_termin" value="{{ $modal->total_termin }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                        <label for="tenggat_order"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tenggat
                            Order</label>
                        <input id="tenggat_order" type="date" name="tenggat_order" value="{{ $modal->tenggat_order }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div>
                        <label for="pesanan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe
                            Pembayaran</label>
                        <select id="pesanan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="tipe_pembayaran">
                            <option selected>{{ $modal->tipe_pembayaran }}</option>
                            <option value="BRI">BRI</option>
                            <option value="BCA">BCA</option>
                            <option value="Mandiri">Mandiri</option>
                            <option value="Cash">Cash</option>
                        </select>
                    </div>
                    <div>
                        <label for="password" id='pesanan'
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status
                            Pesanan</label>
                        <select
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="status_barang">
                            <option selected>{{ $modal->status_barang }}</option>
                            <option value="Belum Dikirim">Belum Dikirim</option>
                            <option value="Sedang Dikirim">Sedang Dikirim</option>
                            <option value="Sudah Sampai">Sudah Sampai</option>
                        </select>
                    </div>
                    <div>
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diskon</label>
                        <input type="number" name="diskon" step="0.01" min="0"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ $modal->diskon }}">
                    </div>
                    <div>
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ongkir</label>
                        <input type="number" name="ongkir"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required value="{{ $modal->ongkir }}">
                        <input hidden name="created" value="{{ $modal->created_at }}">
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

<script>
    function showTerminFields(selectElement) {
        var terminFields = document.getElementById("terminFields");
        if (selectElement.value === "Termin") {
            terminFields.style.display = "block";
        } else {
            terminFields.style.display = "none";
        }
    }
</script>
@endforeach
@endsection