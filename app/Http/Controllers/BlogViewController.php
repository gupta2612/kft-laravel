<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogViewController extends Controller
{

    function KftBlogViewAll($limit){
        $data = DB::table('kft_allposts')
                ->join('kft_admins', 'kft_allposts.user_id', '=', 'kft_admins.id')
                ->select('kft_allposts.*', 'kft_admins.name as user_name')
                ->where('kft_allposts.status', '=', 1)
                ->orderBy('created_at', 'DESC')
                ->paginate(10);
               // return $data;
        return $data;
        
    }

    function KftBlogView(){
        $datas = $this->KftBlogViewAll(1000);

        $cate = DB::table('kft_categories')->paginate(10);

        return view('pages/blog', ['collection'=>$datas], ['cate_data'=>$cate]);
    }

    function CategoriesView($id){
        $data = DB::table('kft_allposts')
                ->join('kft_categories', 'kft_allposts.categories', '=', 'kft_categories.id')
                ->join('kft_admins', 'kft_allposts.user_id', '=', 'kft_admins.id')
                ->select('kft_allposts.*', 'kft_admins.name as user_name', 'kft_categories.id as categories_id', 'kft_categories.name as categories_name')
                ->where('kft_allposts.status', '=', 1)
                ->where('kft_categories.id', '=', $id)
                ->orderBy('created_at', 'DESC')
                ->paginate(10);
        
            $cate = DB::table('kft_categories')
                        ->take(10)
                        ->get();

        return view('pages/blog', ['collection'=>$data], ['cate_data'=>$cate]);
    }

    function KftBlogDetailsView($id, $slug){

         $data = DB::table('kft_allposts')
                 ->join('kft_admins', 'kft_allposts.user_id', '=', 'kft_admins.id')
                 ->join('kft_categories', 'kft_allposts.categories', '=', 'kft_categories.id')
                 ->where('kft_allposts.id', '=', $id)
                 ->where('kft_allposts.slug', '=', $slug)
                 ->where('kft_allposts.status', '=', 1)
                 ->select('kft_allposts.*', 'kft_admins.name as user_name', 'kft_categories.name as categories_name')
                 ->get();

          $AllData = DB::table('kft_allposts')
                ->where('kft_allposts.status', '=', 1)
                ->orderBy('created_at', 'DESC')
                ->take(3)
                ->get();
        return view('pages/blog-details', ['collection'=>$data], ['RecentData'=>$AllData]);

    }
}
