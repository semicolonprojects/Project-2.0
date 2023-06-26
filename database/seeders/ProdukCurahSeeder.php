<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukCurahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'kode_barang' => '1',
                'nama_barang' => 'MULTIFLORA',
                'size' => 'CURAH',
                'stock' => 3921,
                'kategori' => 'CURAH',
                'stock_akhir' => 711,
                'harga' => 27000
            ],

            [
                'kode_barang' => '2',
                'nama_barang' => 'RANDU',
                'size' => 'CURAH',
                'stock' => 537,
                'kategori' => 'CURAH',
                'stock_akhir' => 190,
                'harga' => 45000,
            ],

            [
                'kode_barang' => '3',
                'nama_barang' => 'KOPI',
                'size' => 'CURAH',
                'stock' => 85,
                'kategori' => 'CURAH',
                'stock_akhir' => 44,
                'harga' => 50000,
            ],



            [
                'kode_barang' => '4',
                'nama_barang' => 'DURIAN',
                'size' => 'CURAH',
                'stock' => 96,
                'kategori' => 'CURAH',
                'stock_akhir' => 28,
                'harga' => 55000,
            ],



            [
                'kode_barang' => '5',
                'nama_barang' => 'KELENGKENG',
                'size' => 'CURAH',
                'stock' => 375,
                'kategori' => 'CURAH',
                'stock_akhir' => 187,
                'harga' => 60000,
            ],



            [
                'kode_barang' => '6',
                'nama_barang' => 'KALIANDRA',
                'size' => 'CURAH',
                'stock' => 265,
                'kategori' => 'CURAH',
                'stock_akhir' => 50,
                'harga' => 49000,
            ],

            [
                'kode_barang' => '7',
                'nama_barang' => 'RAMBUTAN',
                'size' => 'CURAH',
                'stock' => 124,
                'kategori' => 'CURAH',
                'stock_akhir' => 72,
                'harga' => 50000,
            ],

            [
                'kode_barang' => '8',
                'nama_barang' => 'MANGGA',
                'size' => 'CURAH',
                'stock' => 128,
                'kategori' => 'CURAH',
                'stock_akhir' => 37,
                'harga' => 50000,
            ],

            [
                'kode_barang' => '9',
                'nama_barang' => 'KARET',
                'size' => 'CURAH',
                'stock' => 65,
                'kategori' => 'CURAH',
                'stock_akhir' => 27,
                'harga' => 45000,
            ],

            [
                'kode_barang' => '10',
                'nama_barang' => 'SONOKELING',
                'size' => 'CURAH',
                'stock' => 126,
                'kategori' => 'CURAH',
                'stock_akhir' => 61,
                'harga' => 30000,
            ],

            [
                'kode_barang' => '11',
                'nama_barang' => 'HUTAN LIAR',
                'size' => 'CURAH',
                'stock' => 931,
                'kategori' => 'CURAH',
                'stock_akhir' => 96,
                'harga' => 30000,
            ],

            [
                'kode_barang' => '12',
                'nama_barang' => 'HUTAN GUNG',
                'size' => 'CURAH',
                'stock' => 69,
                'kategori' => 'CURAH',
                'stock_akhir' => 42,
                'harga' => 60000,
            ],

            [
                'kode_barang' => '13',
                'nama_barang' => 'HUTAN JAMBI',
                'size' => 'CURAH',
                'stock' => 51,
                'kategori' => 'CURAH',
                'stock_akhir' => 31,
                'harga' => 55000,
            ],

            [
                'kode_barang' => '14',
                'nama_barang' => 'HUTAN SUMATERA',
                'size' => 'CURAH',
                'stock' => 124,
                'kategori' => 'CURAH',
                'stock_akhir' => 25,
                'harga' => 55000,
            ],

            [
                'kode_barang' => '15',
                'nama_barang' => 'HUTAN RIAU',
                'size' => 'CURAH',
                'stock' => 44,
                'kategori' => 'CURAH',
                'stock_akhir' => 22,
                'harga' => 60000,
            ],

            [
                'kode_barang' => '16',
                'nama_barang' => 'HUTAN BANGKA',
                'size' => 'CURAH',
                'stock' => 46,
                'kategori' => 'CURAH',
                'stock_akhir' => 21,
                'harga' => 55000,
            ],

            [
                'kode_barang' => '17',
                'nama_barang' => 'HUTAN FLORES',
                'size' => 'CURAH',
                'stock' => 63,
                'kategori' => 'CURAH',
                'stock_akhir' => 28,
                'harga' => 78000,
            ],

            [
                'kode_barang' => '18',
                'nama_barang' => 'HUTAN SUMBAWA',
                'size' => 'CURAH',
                'stock' => 66,
                'kategori' => 'CURAH',
                'stock_akhir' => 15,
                'harga' => 80000,
            ],

            [
                'kode_barang' => '19',
                'nama_barang' => 'HUTAN AKASIA',
                'size' => 'CURAH',
                'stock' => 0,
                'kategori' => 'CURAH',
                'stock_akhir' => 0,
                'harga' => 30000,
            ],

            [
                'kode_barang' => '20',
                'nama_barang' => 'KLANCENG LEAVICEPS',
                'size' => 'CURAH',
                'stock' => 111,
                'kategori' => 'CURAH',
                'stock_akhir' => 0,
                'harga' => 130000
            ],



            [
                'kode_barang' => '21',
                'nama_barang' => 'KLANCENG BIROI',
                'size' => 'CURAH',
                'stock' => 42,
                'kategori' => 'CURAH',
                'stock_akhir' => 18,
                'harga' => 105000,
            ],



            [
                'kode_barang' => '22',
                'nama_barang' => 'KLANCENG ITAMA',
                'size' => 'CURAH',
                'stock' => 50,
                'kategori' => 'CURAH',
                'stock_akhir' => 20,
                'harga' => 105000,
            ],



            [
                'kode_barang' => '23',
                'nama_barang' => 'KLANCENG BAMBU',
                'size' => 'CURAH',
                'stock' => 35,
                'kategori' => 'CURAH',
                'stock_akhir' => 0,
                'harga' => 101000,
            ],



            [
                'kode_barang' => '24',
                'nama_barang' => 'KLANCENG MAUNI',
                'size' => 'CURAH',
                'stock' => 44,
                'kategori' => 'CURAH',
                'stock_akhir' => 30,
                'harga' => 99000,
            ],


            [
                'kode_barang' => '25',
                'nama_barang' => 'PAHIT MAHONI',
                'size' => 'CURAH',
                'stock' => 356,
                'kategori' => 'CURAH',
                'stock_akhir' => 215,
                'harga' => '25000.00',
            ],



            [
                'kode_barang' => '26',
                'nama_barang' => 'PAHIT JAMBI',
                'size' => 'CURAH',
                'stock' => 93,
                'kategori' => 'CURAH',
                'stock_akhir' => 48,
                'harga' => '55000.00',
            ],



            [
                'kode_barang' => '27',
                'nama_barang' => 'YAMAN JABU',
                'size' => 'CURAH',
                'stock' => 6,
                'kategori' => 'CURAH',
                'stock_akhir' => 6,
                'harga' => '222000.00',
            ],



            [
                'kode_barang' => '28',
                'nama_barang' => 'YAMAN HALAYA',
                'size' => 'CURAH',
                'stock' => 2,
                'kategori' => 'CURAH',
                'stock_akhir' => 2,
                'harga' => 222000
            ],



            [
                'kode_barang' => 'MP1',
                'nama_barang' => 'MULTIFLORA',
                'size' => 'CURAH',
                'stock' => 4834,
                'kategori' => 'CURAH',
                'stock_akhir' => 30,
                'harga' => 27000
            ],



            [
                'kode_barang' => 'MP2',
                'nama_barang' => 'RANDU',
                'size' => 'CURAH',
                'stock' => 0,
                'kategori' => 'CURAH',
                'stock_akhir' => 34,
                'harga' => 45000
            ],



            [
                'kode_barang' => 'MP3',
                'nama_barang' => 'KALIANDRA',
                'size' => 'CURAH',
                'stock' => 0,
                'kategori' => 'CURAH',
                'stock_akhir' => 0,
                'harga' => 49000,
            ],



            [
                'kode_barang' => 'MP4',
                'nama_barang' => 'KLANCENG',
                'size' => 'CURAH',
                'stock' => 0,
                'kategori' => 'CURAH',
                'stock_akhir' => 0,
                'harga' => 0
            ],

            [
                'kode_barang' => 'MP5',
                'nama_barang' => 'KOPI',
                'size' => 'CURAH',
                'stock' => 0,
                'kategori' => 'CURAH',
                'stock_akhir' => 7,
                'harga' => 50000
            ],

            [
                'kode_barang' => 'MP6',
                'nama_barang' => 'DORSATA',
                'size' => 'CURAH',
                'stock' => 0,
                'kategori' => 'CURAH',
                'stock_akhir' => 27,
                'harga' => 0
            ],

            [
                'kode_barang' => 'MP7',
                'nama_barang' => 'KELENGKENG',
                'size' => 'CURAH',
                'stock' => 0,
                'kategori' => 'CURAH',
                'stock_akhir' => 11,
                'harga' => 60000
            ],

            [
                'kode_barang' => '29',
                'nama_barang' => 'BASE HONEY',
                'size' => 'CURAH',
                'stock' => 0,
                'kategori' => 'CURAH',
                'stock_akhir' => 14,
                'harga' => 0
            ],
        ];

        DB::table('produk_curahs')->insert($data);
    }
}
