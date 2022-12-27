<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        User::create([
            'name' => 'Admin',
            'email'=>'jcatagnaa@est.ups.edu.ec',
            'password'=>Hash::make('admin'),
            'fullacces'=>'yes',
            'avatar' => 'https://picsum.photos/300/300',
        ]);

        User::create([
            'name' => 'User',
            'email'=>'bacoth@gmail.com',
            'password'=>Hash::make('user'),
            'fullacces'=>'yes',
            'avatar' => 'https://picsum.photos/300/300',
        ]);
    }
}
