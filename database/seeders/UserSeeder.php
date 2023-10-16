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
     */
    public function run(): void
    {
       User::factory(20)->create();
       User::create([
        'name'=>'Mariana Ulfa',
        'email'=>'mariana@gmail.com',
        'email_verified_at'=>now(),
        'role' =>'admin',
        'phone' => '62895415019581',
        'bio' => 'orang biasa',
        'password'=>Hash::make('123456'),
       ]);

       User::create([
        'name'=>'Super Admin',
        'email'=>'superadmin@gmail.com',
        'email_verified_at'=>now(),
        'role' =>'superadmin',
        'phone' => '62895050505050',
        'bio' => 'laravel',
        'password'=>Hash::make('123456'),
       ]);
    }
}
