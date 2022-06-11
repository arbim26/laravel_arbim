<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' =>'Arya Bima',
            'email' =>'arya@gmail.com',
            'password' =>bcrypt('12345'),
            'remember_token' =>Str::random('60'),
        ]);
    }
}
