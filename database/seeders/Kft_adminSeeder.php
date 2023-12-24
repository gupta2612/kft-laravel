<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kft_admin;

class Kft_adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kft_admin::create([
            'name' => 'Manish',
            'email' => 'manishgupt@gmail.com',
            'password' => \bcrypt('Golu@2612'),
            'type' => '0'
        ]);
    }
}
