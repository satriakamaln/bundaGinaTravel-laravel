<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'),
            'role' => '1'
        ]);

        DB::table('travel')->insert([
            'nama' => 'Admin',
            'tanggal' => '2023-01-17',
            'jumlah' => '5 Orang',
            'harga' => '999'
        ]);
    }
}
