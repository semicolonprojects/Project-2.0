<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BarangPendukung;
use App\Models\Channel;
use App\Models\Customer;
use App\Models\Cuti;
use App\Models\DataSupplier;
use App\Models\Izin;
use App\Models\Keluar;
use App\Models\Masuk;
use App\Models\ProdukCurah;
use App\Models\ProdukJadi;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'username' => 'Andoni Pridatama',
            'role' => 'superadmin',
            'password' => bcrypt('123456')
        ]);

        User::factory()->create([
            'username' => 'Surya Indra Permana',
            'role' => 'superadmin',
            'password' => bcrypt('123456')
        ]);

        User::factory()->create([
            'username' => 'Andru Bismantha Adwaya',
            'role' => 'marketing',
            'password' => bcrypt('123456')
        ]);

        User::factory()->create([
            'username' => 'Nerika Kurniawati',
            'role' => 'marketing',
            'password' => bcrypt('123456')
        ]);

        User::factory()->create([
            'username' => 'Nur Laili Azizah',
            'role' => 'marketing',
            'password' => bcrypt('123456')
        ]);

        User::factory()->create([
            'username' => 'Haidir Adli Radian',
            'role' => 'curah',
            'password' => bcrypt('123456')
        ]);

        User::factory()->create([
            'username' => 'Deni Setiawan',
            'role' => 'curah',
            'password' => bcrypt('123456')
        ]);

        User::factory()->create([
            'username' => 'Ayu Hariaz',
            'role' => 'finance',
            'password' => bcrypt('123456')
        ]);

        User::factory()->create([
            'username' => 'Mentary Puji Ayu',
            'role' => 'finance',
            'password' => bcrypt('123456')
        ]);

        User::factory()->create([
            'username' => 'Muhammad Raey Rendra',
            'role' => 'logistikrendra',
            'password' => bcrypt('123456')
        ]);

        ProdukJadi::factory()->create(
            [
                'kode_barang' => '1',
                'nama_barang' => 'MULTIFLORA',
                'size' => '1000',
                'stock' => 2925,
                'harga_ecer' => 95000,
                'harga_rs' => 88000,
                'harga_mkl' => 80000,
                'harga_ds' => 75000,
                'kategori' => '1 KG'
            ]
        );

        ProdukCurah::factory()->create([
            'kode_barang' => '1',
            'nama_barang' => 'MULTIFLORA CURAH',
            'size' => '1000',
            'stock' => 2925,
            'harga' => 95000,
            'kategori' => '1 KG'
        ]);

        BarangPendukung::factory()->create([
            'kode_barang' => '1000',
            'nama_barang' => 'JERIGEN 1KG',
            'kategori' => 'Jerigen',
            'size' => 'PCS',
            'stock' => 800,
            'price' => 3700,
        ]);

        DataSupplier::factory()->create([
            'supplier_name' => 'Andi Peci',
            'supplier_type' => 'Madu',
            'phone' => '+628112345678',
            'email' => 'andipeci@email.com',
            'entry_price' => '7000000',
            'ukuran_kulak' => '1000',
            'address' => 'Jl Sindanglaya II, Dki Jakarta, 10311',
        ]);

        Channel::factory()->create([
            'nama_channel' => 'Tokopedia',
            'kode_channel' => 'TKP',
            'target_bulanan' => 5000000,
        ]);

        // Customer::factory()->create([
        //     'customer_id' => '14045',
        //     'nama_lengkap' => 'Adi',
        //     'alamat' => 'Malang',
        //     'no_telepon' => '081234567890',
        //     'email' => 'adi@email.com',
        //     'tempat' => 'Malang',
        //     'tanggal_lahir' => '2023-05-08'
        // ]);
    }
}
