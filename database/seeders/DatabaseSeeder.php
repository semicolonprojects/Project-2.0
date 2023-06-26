<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Channel;
use App\Models\DataSupplier;
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

        $this->call(BarangPendukungSeeder::class);

        $this->call(ProdukCurahSeeder::class);

        $this->call(ProdukJadiSeeder::class);

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

        User::factory()->create([
            'username' => 'Muhammad Wahyudi',
            'role' => 'logistik',
            'password' => bcrypt('123456')
        ]);

        User::factory()->create([
            'username' => 'Nurul Istiqomah',
            'role' => 'logistik',
            'password' => bcrypt('123456')
        ]);

        User::factory()->create([
            'username' => 'Muhammad Ibnu Firmansyah',
            'role' => 'logistik',
            'password' => bcrypt('123456')
        ]);

        User::factory()->create([
            'username' => 'Dita',
            'role' => 'logistik',
            'password' => bcrypt('123456')
        ]);

        User::factory()->create([
            'username' => 'Satria',
            'role' => 'logistik',
            'password' => bcrypt('123456')
        ]);

        User::factory()->create([
            'username' => 'Rizkyono',
            'role' => 'logistik',
            'password' => bcrypt('123456')
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
