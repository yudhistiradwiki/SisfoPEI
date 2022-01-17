<?php

namespace Database\Seeders;

use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        User::create([
            'username' => 'yudhistiradwiki',
            'id_session' => '',
            'level' => 'user',
            'blokir' => 'N',
            'name' => 'Muhammad Dwiki Yudhistira',
            'email' => 'dadas@gmail.com',
            'photo' => '',
            'password' => Hash::make('1')
        ]);
    }
}
