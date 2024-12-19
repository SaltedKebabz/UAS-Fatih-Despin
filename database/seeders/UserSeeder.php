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
        User::create([
            'name' => 'Admin',
            'email' => 'Admin@Admin.com',
            'biografi' => 'lorem ipsum',
            'alamat' => 'Test',
            'no_telpon' => 123456789,
            'ProfilePic' => 'null',
            'password'=> bcrypt('1234')
        ]);
    }
}
