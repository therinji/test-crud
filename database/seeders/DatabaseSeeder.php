<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Karyawan;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Karyawan::create([
            'nama' => 'Rindho Aji',
            'tanggal_lahir' => '2000-04-27',
            'gaji' => '2500000',
            'status' => 1
        ]);

        Karyawan::create([
            'nama' => 'Mohammad Agung Rahmawan',
            'tanggal_lahir' => '2000-04-14',
            'gaji' => '2100000',
            'status' => 1
        ]);

        Karyawan::create([
            'nama' => 'Zaini Suciadi',
            'tanggal_lahir' => '2001-01-18',
            'gaji' => '4000000',
            'status' => 1
        ]);
    }
}
