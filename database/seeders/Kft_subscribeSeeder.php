<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kft_subscribe;
use Illuminate\Support\Facades\File;

class Kft_subscribeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //** Json file save data */
        $json = File::get('database/json/subscribe.json');
        $subscribeData = collect(json_decode($json));

        $subscribeData->each(function($rowdatas){
            Kft_subscribe::create([
                            'email' => $rowdatas->email
                ]);
            });
    }
}
