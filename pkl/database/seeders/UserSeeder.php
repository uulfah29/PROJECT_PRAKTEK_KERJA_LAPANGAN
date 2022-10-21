<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Herman Ariadi',
            'level' => 'admin',
            'email' => 'hermanariadi@gmail.com',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60),
        ]);
    }
}
