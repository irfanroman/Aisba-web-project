<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        'name' => 'AISBA Admin 1',
        'email' => 'admin2@gmail.com',
            'password' => Hash::make('*au#;}a-isba315'),
            'roles' => 'ADMIN'
        ]);
        DB::table('users')->insert([
        'name' => 'AISBA Admin 2',
        'email' => 'admin3@gmail.com',
            'password' => Hash::make('admin@conte#ntAisba477'),
            'roles' => 'ADMIN'
        ]);
    }
}
