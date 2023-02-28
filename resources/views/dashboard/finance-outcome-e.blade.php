@extends('dashboard.layout.main')

@section('mainContent')

{{-- Tabel Gaji --}}
<div class="mt-20 ml-40">
    <table
        class="w-[1100px] table-auto text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400 bg-[#EEEE]">
        <tr>
            <th class="px-10 py-5">Sedekah</th>
        </tr>
        <tr class="bg-white border">
            <th class="px-10 py-5">Tempat</th>
            <th class="px-10 py-5">Nominal</th>
        </tr>
        <tr>
            <td class="px-10 ">Panti Asuhan</td>
            <td class="px-6 py-5">IDR 1.000.000</td>

        </tr>

    </table>
</div>

<div class="mt-20 ml-40">
    <table
        class="w-[1100px] table-auto text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400 bg-[#EEEE]">
        <tr>
            <th class="px-10 py-5">Sponsorship</th>
        </tr>
        <tr class="bg-white border">
            <th class="px-10 py-5">Vendor</th>
            <th class="px-10 py-5">Nominal</th>
        </tr>
        <tr>
            <td class="px-10 ">Panti Asuhan</td>
            <td class="px-6 py-5">IDR 1.000.000</td>

        </tr>

    </table>
</div>

<div class="mt-20 ml-40">
    <table
        class="w-[1100px] table-auto text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400 bg-[#EEEE]">
        <tr>
            <th class="px-10 py-5">Event</th>
        </tr>
        <tr class="bg-white border">
            <th class="px-10 py-5">Nama</th>
            <th class="px-10 py-5">Tempat</th>
            <th class="px-10 py-5">Tanggal</th>
            <th class="px-10 py-5">Nominal</th>
        </tr>
        <tr>
            <td class="px-10 ">Konser Malang</td>
            <td class="px-10 ">Lapangan Ijen</td>
            <td class="px-6 py-5">14 September 2023</td>
            <td class="px-6 py-5">IDR 5.000.000</td>

        </tr>

    </table>
</div>

<div class="mt-20 ml-40">
    <table
        class="w-[1100px] table-auto text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400 bg-[#EEEE]">
        <tr>
            <th class="px-10 py-5">Tak Terduga</th>
        </tr>
        <tr class="bg-white border">
            <th class="px-10 py-5">Nama</th>
            <th class="px-10 py-5">Nominal</th>
        </tr>
        <tr>
            <td class="px-10 ">Bayar Kosan</td>
            <td class="px-6 py-5">IDR 5.000.000</td>

        </tr>

    </table>
</div>

<div class="mt-20 ml-40">
    <table
        class="w-[1100px] table-auto text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400 bg-[#EEEE]">
        <tr>
            <th class="px-10 py-5">Kulak Food & Beverage</th>
        </tr>
        <tr class="bg-white border">
            <th class="px-10 py-5">Nama</th>
            <th class="px-10 py-5">Jenis</th>
            <th class="px-10 py-5">PCS</th>
            <th class="px-10 py-5">Nominal</th>
        </tr>
        <tr>
            <td class="px-10 ">Pecel</td>
            <td class="px-10 ">Makanan</td>
            <td class="px-10 ">100 pcs</td>
            <td class="px-6 py-5">IDR 5.000.000</td>

        </tr>

    </table>
</div>


@endsection