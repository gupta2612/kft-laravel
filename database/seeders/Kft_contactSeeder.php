<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kft_contact;
use Illuminate\Support\Facades\File;

class Kft_contactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        //** Json file save data */

        $json = File::get('database/json/contacts.json');
        $contactData = collect(json_decode($json));

        $contactData->each(function($rowdatas){
                Kft_contact::create([
                            'name' => $rowdatas->name,
                            'email' => $rowdatas->email,
                            'subject' => $rowdatas->subject,
                            'description' => $rowdatas->description
                ]);
            });





        //** multidimensional array seeder data save */

        // $rowdata = collect(
        //     [
        //         [
        //             "name" =>  "Lacy James",
        //             "email" =>  "turpis.nulla.aliquet@aol.net",
        //             "subject" =>  "Nunc mauris. Morbi non sapien molestie orci tincidunt adipiscing. Mauris",
        //             "description" =>  11
        //         ],
        //         [
        //             "name" =>  "Keiko Tanner",
        //             "email" =>  "aliquam.ultrices@outlook.edu",
        //             "subject" =>  "tincidunt. Donec vitae erat vel pede blandit congue. In scelerisque",
        //             "description" =>  3
        //         ],
        //         [
        //             "name" =>  "Garrison Strong",
        //             "email" =>  "elementum.purus.accumsan@aol.edu",
        //             "subject" =>  "blandit. Nam nulla magna, malesuada vel, convallis in, cursus et,",
        //             "description" =>  1
        //         ],
        //         [
        //             "name" =>  "Asher Morgan",
        //             "email" =>  "pede@icloud.net",
        //             "subject" =>  "Nulla aliquet. Proin velit. Sed malesuada augue ut lacus. Nulla",
        //             "description" =>  5
        //         ],
        //         [
        //             "name" =>  "Odessa Tyson",
        //             "email" =>  "nisi.nibh@google.couk",
        //             "subject" =>  "Proin non massa non ante bibendum ullamcorper. Duis cursus, diam",
        //             "description" =>  9
        //         ],
        //         [
        //             "name" =>  "Carol Castillo",
        //             "email" =>  "nunc.est@yahoo.org",
        //             "subject" =>  "amet, consectetuer adipiscing elit. Aliquam auctor, velit eget laoreet posuere,",
        //             "description" =>  15
        //         ],
        //         [
        //             "name" =>  "Amos Ayers",
        //             "email" =>  "magna@aol.edu",
        //             "subject" =>  "id nunc interdum feugiat. Sed nec metus facilisis lorem tristique",
        //             "description" =>  19
        //         ],
        //         [
        //             "name" =>  "Jenna Acosta",
        //             "email" =>  "libero.morbi@icloud.edu",
        //             "subject" =>  "ac, feugiat non, lobortis quis, pede. Suspendisse dui. Fusce diam",
        //             "description" =>  5
        //         ],
        //         [
        //             "name" =>  "Hamilton Cohen",
        //             "email" =>  "ultricies@aol.org",
        //             "subject" =>  "Suspendisse tristique neque venenatis lacus. Etiam bibendum fermentum metus. Aenean",
        //             "description" =>  17
        //         ],
        //         [
        //             "name" =>  "Lois Morales",
        //             "email" =>  "magna@google.couk",
        //             "subject" =>  "sagittis felis. Donec tempor, est ac mattis semper, dui lectus",
        //             "description" =>  9
        //         ]
        //     ]);

        //     $rowdata->each(function($rowdatas){
        //         Kft_contact::insert($rowdatas);
        //     });


    }
}
