@extends('dashboard.layout.main')
@section('mainContent')

<section class="bg-white shadow-[4px_8px_8px_rgba(0,0,0,0.5)] w-[70%] rounded-[22px] ml-52 mt-10">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-8">
        <h2 class="mb-10 text-4xl font-bold text-gray-900 dark:text-white">Form Edit {{ $produk->nama_barang }}</h2>
        <form class="space-y-6" action="{{ route('stock.update', ['stock' => $produk->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="grid grid-flow-row gap-2">
                <div class="grid grid-flow-col gap-3">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                            ID</label>
                        <input type="text" name="kode_barang"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            value="{{ $produk->kode_barang }}" required>
                    </div>
                    <div>
                        <label class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                            Name</label>
                        <input type="text" name="nama_barang"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            value="{{ $produk->nama_barang }}" required>
                    </div>
                </div>
                <div class="grid grid-flow-col gap-3">
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Size</label>
                        <input type="text" name="size"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            value="{{ $produk->size }}" required>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                        <input type="text" name="kategori"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            value="{{ $produk->kategori }}" required>
                    </div>
                </div>
            </div>
            <div class="grid grid-flow-col gap-3">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ammount</label>
                    <input type="number" name="stock"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        value="{{ $produk->stock }}" required>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Min.
                        Ammount</label>
                    <input type="number" name="min_ammount"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500  focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        value="{{ $produk->min_ammount }}">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock
                        Akhir</label>
                    <input type="number" name="stock_akhir"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        value="{{ $produk->stock_akhir }}">
                </div>
            </div>
            <div class="grid grid-flow-col gap-3">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Harga
                        Ecer</label>
                    <input type="number" name="harga_ecer"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        value="{{ $produk->harga_ecer }}">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Harga Reseller</label>
                    <input type="number" name="harga_rs"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        value="{{ $produk->harga_rs }}">
                </div>
            </div>
            <div class="grid grid-flow-col gap-3">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Harga Maklon</label>
                    <input type="number" name="harga_mkl"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        value="{{ $produk->harga_mkl }}">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Harga Distributor</label>
                    <input type="number" name="harga_ds"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        value="{{ $produk->harga_ds }}">
                </div>
            </div>
            <div class="mt-2">
                <button type="submit"
                    class="w-max text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </form>
    </div>
</section>

@endsection