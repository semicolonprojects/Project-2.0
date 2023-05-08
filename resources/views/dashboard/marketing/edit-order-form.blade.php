@extends('dashboard.layout.main')

@section('mainContent')

<div class="ml-5 mt-16 px-20">
    <form action="{{ route('order.update', $order->order_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User ID</label>
            <input type="text" name="user_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ $order->user_id}}">
        </div>
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Order ID</label>
            <input type="text" name="order_id" id="order_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required value="{{ $order->order_id }}">
        </div>
        <div class="mb-6">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Customer</label>
            <select id="countries"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="customer_id">
                @foreach($customer as $customer)
                <option value="{{ $customer->id }}" {{ $order->customer_id == $customer->id ? 'selected' : ''}}>
                    {{ $customer->nama_lengkap }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="mb-6">
            {{-- <label for="produk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                Produk</label>
            <select id="produk" name="kode_barang[]" multiple
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @foreach($produk as $item)
                <option value="{{ $item->id }}" {{ in_array($item->id, $order->produk()->pluck('id')->toArray()) ?
                    'selected' : '' }}>{{ $item->nama_barang }}</option>
                @endforeach
            </select>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($produk as $key => $value)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $value->nama_barang }}</td>
                        <td>
                            <a href="{{ route('order.edit', $value->id) }}"
                                class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Edit</a>
                            <form action="{{ route('order.destroy', $value->id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 hover:bg-red-700 text-black font-bold py-2 px-4 rounded">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table> --}}

        </div>

        <div class="mb-6">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                Produk</label>
            <select id="countries"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="kode_barang[]">
                {{-- <option>Pilih Produk</option>
                @foreach($produk as $produk)
                <option value="{{ $produk->id }}">{{ $produk->nama_barang }}</option>
                @endforeach --}}
                @foreach ($produk as $produk)
                @if (old('id', $produk->id) === $order-> kode_barang)
                <option value="{{ $produk -> id }}" selected>{{ $produk->nama_barang}}</option>
                @else
                <option value="{{ $produk -> id }}">{{ $produk->nama_barang }}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah
                Pesanan</label>
            <input type="text" name="total_order[]" id="total_order"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required value="{{ $order->total_order }}">
        </div>
        <div id="produk-baru"></div><br>
        <div>
            <button type="button" id="add-order-button"
                class="text-blue inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                        clip-rule="evenodd"></path>
                </svg>
                Add New Order
            </button>
        </div>
        <div class="mb-6">
            <label for="diskon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diskon</label>
            <input type="number" step="0.01" min="0" id="diskon"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="diskon" value="{{$order->diskon}}" placeholder="Masukkan Diskon">
        </div>
        <div class="mb-6">
            <label for="pesanan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status
                Pembayaran</label>
            <select id="pesanan"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="status_pembayaran">
                <option {{ $order->status_pembayaran ? 'selected' : '' }}>{{ $order->status_pembayaran }}</option>
                <option value="Paid">Paid</option>
                <option value="Setengah Dibayar">Setengah Dibayar</option>
                <option value="Belum Dibayar">Belum Dibayar</option>
            </select>
        </div>
        <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe
                Pesanan</label>
            <select id="pesanan"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="tipe_pesanan">
                <option {{ $order->tipe_pesanan ? 'selected' : '' }}>{{ $order->tipe_pesanan }}</option>
                <option value="Distributor">Distributor</option>
                <option value="Maklon">Maklon</option>
                <option value="Reseller">Reseller</option>
            </select>
        </div>
        <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total
                Pembelian</label>
            <input type="number" name="total_pembelian"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required value="{{ $order->total_pembelian }}">
        </div>
        <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ongkir</label>
            <input type="number" name="ongkir"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required value="{{ $order->ongkir }}">
        </div>
        <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status
                Pesanan</label>
            <select id="countries"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="status_barang">
                <option {{ $order->status_barang ? 'selected' : '' }}>{{ $order->status_barang }}</option>
                <option value="Belum Dikirim">Belum Dikirim</option>
                <option value="Sedang Dikirim">Sedang Dikirim</option>
                <option value="Sudah Sampai">Sudah Sampai</option>
            </select>
        </div>
        <div class="mb-6">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Note</label>
            <textarea id="message" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Tulis Note Disini ... " name="note">{{ $order->note }}</textarea>

        </div>
        <button type="submit"
            class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
    </form>
</div>

<script>
    $(document).ready(function() {
      // Handler untuk button "Add New Order"
      $('#add-order-button').click(function() {
        // Tambahkan input pilih produk
        $('#order-container').append('<div class="mb-6"><label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Produk</label><select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="kode_barang[]"><option selected>Pilih Produk</option>@foreach($produkJs as $produk)<option value="{{ $produk->id }}">{{ $produk->nama_barang }}</option>@endforeach</select></div>');
    
        // Tambahkan input jumlah pesanan
        $('#order-container').append('<div class="mb-6"><label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Pesanan</label><input type="text" name="total_order[]" id="total_order" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required></div>');
      });
    });
</script>



@endsection