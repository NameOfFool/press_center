<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'second_name'=>"Тихонов",
            'name' => 'Иван ',
            'email' => 'ivan-pauk2002@mail.ru',
            'admin' => 1,
            'photo' => '1.png',
            'password' => Hash::make('12345678'),
        ]);
    }
}
