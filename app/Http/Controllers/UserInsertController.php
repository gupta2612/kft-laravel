<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Kft_subscribe;
use App\Models\Kft_contact;

class UserInsertController extends Controller
{
    public function DataSubscribe(Request $req)
    {
        $data = $req->validate([
            "email"=>"required | email"
        ]);
        Kft_subscribe::insert([
            'email' => $req->email,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return redirect('/');
    }

    public function DataContact(Request $req)
    {
         $req->validate([
            'name'=> 'required',
            'email'=> 'required | email',
            'subject'=> 'required',
            'description'=> 'required'
        ]);
        $data = kft_contact::insert([
                'name' => $req->name,
                'email' => $req->email,
                'subject' => $req->subject,
                'description' => $req->description,
                'created_at' => now(),
                'updated_at' => now()
        ]);
        if ($data == true) {
            return redirect('/');
        } else {
            return redirect('/contact');
        }

    }
}
