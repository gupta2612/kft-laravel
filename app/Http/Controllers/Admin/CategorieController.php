<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kft_categorie;
use Illuminate\Support\Str;
use Auth;


class CategorieController extends Controller
{
    function CategorieViewAll(){
        $data = DB::table('Kft_categories')
                ->OrderBy('created_at', 'ASC')
                ->paginate(5);
        return $data;
    }

    function CategorieView(){
        $data = $this->CategorieViewAll();
        return view('admin/pages/categories', ['collection'=>$data], ['no'=>1]);
    }

    function CategorieStore(Request $request){

        $request->validate([
            'nameCategories'=> 'required',
            'addSlug'=> 'required'
        ]);

        $data =Kft_categorie::create([
            'name'=>$request->nameCategories,
            'slug'=>Str::slug($request->addSlug),
            'description'=>trim($request->description)
        ]);

        if ($data == true) {
            return redirect('admin/categories')->with('success', 'Congratulations!, You are successfully create categories');
        } else {
            return redirect('admin/categories')->with('wrong', 'Sorry!, Something Wrong');
        }

    }

    function CategorieStoreDelete($id){
        $data = Kft_categorie::find($id);
        $data->delete();
        if ($data == true) {
            return redirect('admin/categories')->with('success', 'Congratulations!, You are successfully delete your categories');
        } else {
            return redirect('admin/categories')->with('wrong', 'Sorry!, Something Wrong');
        }

    }
}
