<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
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
        \App\Models\User::factory()->create([
            'name' => 'Иван Тихонов',
            'email' => 'ivan-pauk2002@mail.ru',
            'admin' => 1,
            'photo' => '1.png',
            'password' => Hash::make('12345678'),
        ]);
        \App\Models\Category::factory()->create([
            'name'=>'Деятельность'
        ]);
    }
}
