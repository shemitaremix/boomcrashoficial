<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Israel Shema',
            'email' => 'rodriguezisrael1406@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::factory(5)->create();
    }
}
