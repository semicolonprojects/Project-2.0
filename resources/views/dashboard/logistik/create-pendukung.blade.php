@extends('dashboard.layout.main')
@section('mainContent')

<section class="bg-white shadow-[4px_8px_8px_rgba(0,0,0,0.5)] w-[70%] rounded-[22px] ml-52 mt-10">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-8">
        <h2 class="mb-10 text-4xl font-bold text-gray-900 dark:text-white">Form Produk Pendukung Baru</h2>
        <form action="{{ route('barang_pendukung.store') }}" method="post">
            @csrf
            <div class="grid grid-flow-row gap-5">
                <div class="">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode
                        Barang</label>
                    <input type="text" name="kode_barang" id="kode_barang"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-background focus:border-background block w-full p-2.5 "
                        placeholder="Type The Product ID" required="">
                </div>
                <div class="">
                    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Barang</label>
                    <input type="text" name="nama_barang" id="nama_barang"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-background focus:border-background block w-full p-2.5 "
                        placeholder="Ex: Multiflora" required="">
                </div>
                <div class="grid grid-flow-col gap-5">
                    <div class="w-full">
                        <label for="brand"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock</label>
                        <input type="number" name="stock" id="stock"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-background focus:border-background block w-full p-2.5 "
                            placeholder="Ex: 1" required="">
                    </div>
                    <div class="w-full">
                        <label for="price"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Size</label>
                        <input type="text" name="size" id="disabled-input" aria-label="disabled input"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-background focus:border-background block w-full p-2.5 "
                            required="">
                    </div>
                    <div class="w-full">
                        <label for="price"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                        <input type="text" name="kategori" id="disabled-input" aria-label="disabled input"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-background focus:border-background block w-full p-2.5 "
                            required="">
                    </div>
                </div>
                <div class="grid grid-flow-col gap-5">
                    <div>
                        <label for="price"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock</label>
                        <input type="stock" name="stock"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-background focus:border-background block w-full p-2.5 "
                            placeholder="Ex: 10" required="">
                    </div>
                    <div>
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Min
                            Ammount</label>
                        <input type="number" name="min_ammount" id="min_ammount"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-background focus:border-background block w-full p-2.5 "
                            placeholder="Ex: 10">
                    </div>
                    <div>
                        <label for="item-weight"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock
                            Akhir</label>
                        <input type="number" name="stock_akhir" id="stock_akhir"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-background focus:border-background block w-full p-2.5 "
                            placeholder="Ex: 12">
                    </div>
                </div>
                <div>
                    <label for="item-weight"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                    <input type="number" name="price" id="price"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-background focus:border-background block w-full p-2.5 "
                        placeholder="Ex: 5000" required="">
                </div>
            </div>
            <button type="submit"
                class="inline-flex items-center px-5 py-2.5 mt-9 sm:mt-8 text-sm font-medium text-center text-white bg-[#22DB66] rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                Tambahkan Produk Curah
            </button>
        </form>
    </div>
</section>

@endsection