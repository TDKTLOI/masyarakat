<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Petugas::create([
            'nama_petugas' => 'admin',
            'username' => 'admin',
            'password' => Hash::make('12345'),
            'telp' => '089529784795',
            'level' => 'admin',
        ]);
    }
}
