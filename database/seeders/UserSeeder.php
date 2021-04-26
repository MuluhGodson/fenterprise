<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seed
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Fedjio Augustine',
            'email' => 'fad@gmail.com',
            'password' => Hash::make('12345678'),
            'tel' => '+237681108107',
            'created_by' => 'SEEDER'
        ]);
    }
}