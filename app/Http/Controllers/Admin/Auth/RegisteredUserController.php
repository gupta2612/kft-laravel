<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Kft_admin;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Mail\RegisteredNotification;
use Mail;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin/auth/auth-register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:Kft_admins'],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $user = Kft_admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($user == true) {
            $content = [
               'subject' => 'Registration Confirmation and Login Information',
                'name' =>$request->name,
                'username' =>$request->email,
                'password' =>$request->password,
            ];
            Mail::to($request->email)->send(new RegisteredNotification($content));
            return redirect('/admin/login')->with('success', 'Congratulations!, Your are successfully registered');
        } else {
            return redirect('/admin/register')->with('wrong', 'Sorry!, Something Wrong');
        }



    }
}
