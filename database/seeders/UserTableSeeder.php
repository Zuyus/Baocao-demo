<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'admin@gmail.com',
            'image' =>  'profile.png',
            'is_admin'=>1,
            'password' => Hash::make('123456'),
        ]);
        User::create([
            'name' => 'William Smith',
            'email' => 'user1@gmail.com',
            'is_admin'=>0,
            'password' => Hash::make('123456'),
        ]);
    }
}
