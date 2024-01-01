<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use Mail;
use File;

class UsersController extends Controller
{

    public function UpdateUserView(){
        return view('admin/pages/user-edit');
    }


    public function UpdateUser(Request $request) {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'mobile' => 'required|numeric|digits_between:10,12',
            'photo'=> 'mimes:jpeg,png,jpg|between:1,100'
        ]);
        if ($request->photo == '') {
                $updates = DB::table('kft_admins')
                            ->where('id', $request->id)
                            ->update([
                                'name' =>$request->name,
                                'mobile' =>$request->mobile
                            ]);

                if ($updates == true) {
                    return redirect('admin/user-profile')->with('success', 'Congratulations!, Your are successfully updated');
                }
                else{
                    return redirect('admin/user-profile')->with('wrong', 'Sorry!, Something Wrong');
                }
        } else {

            $filename = time().$request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->move('admin/assets/images/avatar/', $filename);

                $updates = DB::table('kft_admins')
                ->where('id', $request->id)
                ->update([
                    'name' =>$request->name,
                    'mobile' =>$request->mobile,
                    'profile_image'=> $filename
                ]);

                if ($updates == true) {
                    return redirect('admin/user-profile')->with('success', 'Congratulations!, Your are successfully updated');
                }
                else{
                    return redirect('admin/user-profile')->with('wrong', 'Sorry!, Something Wrong');
                }
        }
    }

    public function UpdatePassword(Request $request, $user_id) {

        $request->validate([
            'password' => ['required', Rules\Password::defaults()]
        ]);
        $updates = DB::table('kft_admins')
                        ->where('id', $user_id)
                        ->update([
                            'password' =>Hash::make($request->password)
                        ]);
        if ($updates == true) {
            return redirect('admin/user-profile')->with('success', 'Congratulations!, Your are successfully change your password');
        }
        else{
            return redirect('admin/user-profile')->with('wrong', 'Sorry!, Something Wrong');
        }
    }

    public function AllUserView(){

        $AllUser = DB::table('kft_admins')->paginate('10');

        return view('admin/pages/user-list', ['AllUsers' => $AllUser], ['n'=> 1]);
    }
}
