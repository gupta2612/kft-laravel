<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Kft_allpost;
use File;
use Auth;

class AllPostController extends Controller
{
    function create(){
        $data = DB::table('Kft_categories')
                ->select('id', 'name')
                ->OrderBy('created_at', 'ASC')
                ->get();
        return \view('admin/pages/post-add', ['collection'=>$data]);
    }

    function store(Request $request){

        $request->validate([
            'addTitle'=> 'required',
            'post'=> 'required',
            'addTags'=> 'required',
            'addSlug'=> 'required',
            'categories'=> 'required',
            'addDate'=> 'required',
            'photo'=> 'required|mimes:jpeg,png,jpg|between:10,600'
        ]);
        $data = Kft_allpost::create([
            'user_id'=>$request->user_id,
            'title'=>$request->addTitle,
            'content'=>$request->post,
            'tags'=>$request->addTags,
            'slug'=>Str::slug($request->addSlug),
            $filename = time().$request->file('photo')->getClientOriginalName(),
            $path = $request->file('photo')->move('assets/images/background/', $filename),
            'image'=> $filename,
            'categories'=>$request->categories,
            'date'=>$request->addDate,
            'status'=>$request->status
        ]);
        if ($data == true) {
            return redirect('/admin/all-post')->with('success', 'Congratulations!, Your are successfully create post');
        } else {
            return redirect('/admin/post-add')->with('wrong', 'Sorry!, Something Wrong');
        }
    }

    function BlogViewUpdate(Request $request){
        $request->validate([
            'addTitle'=> 'required',
            'post'=> 'required',
            'addTags'=> 'required',
            'addSlug'=> 'required',
            'addDate'=> 'required',
            'status'=> 'required',
        ]);
        $data = Kft_allpost::where('id', $request->id)
                            ->update([
                                'title'=>$request->addTitle,
                                'content'=>$request->post,
                                'tags'=>$request->addTags,
                                'slug'=>Str::slug($request->addSlug),
                                'date'=>$request->addDate,
                                'status'=>$request->status
                                    ]);
        if ($data == true) {
            return redirect('/admin/all-post')->with('success', 'Congratulations!, You are successfully update your post');
        } else {
            return redirect('/admin/all-post')->with('wrong', 'Sorry!, Something Wrong');
        }
    }

    function DeleteStore($id){
        $data = Kft_allpost::find($id);
        $data->delete();
        if ($data == true) {
            return redirect('/admin/all-post')->with('success', 'Congratulations!, Your are successfully delete your post');
        } else {
            return redirect('/admin/all-post')->with('wrong', 'Sorry!, Something Wrong');
        }
    }
}
