<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(['email'=>'user@user.com'],[
            'name'=>'user',
            'password' =>bcrypt('1234567')
        ]);
        User::updateOrCreate(['email'=>'abdo@user.com'],[
            'name'=>'abdo',
            'password' =>bcrypt('12345678')
        ]);
    }
}
