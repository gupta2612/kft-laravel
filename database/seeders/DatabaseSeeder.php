<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kft_contact;
use App\Models\Kft_subscribe;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //** Factory Data Save */
        Kft_contact::factory()->count(10)->create();
        Kft_subscribe::factory()->count(10)->create();


        //** Seeder Data Save */
            // $this->call([
            //     Kft_contactSeeder::class,
            //     Kft_subscribeSeeder::class
            // ]);
    }
}
