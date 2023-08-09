<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'ardanayatra',
            'password' => Hash::make('Ardanayatra'),
            'nama_lengkap' => 'I Made Ardana Yatra',
            'address' => 'Karangasem',
            'email' => 'ardanayatra@gmail.com'
        ]);
    }
}
