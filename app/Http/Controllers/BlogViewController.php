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
                ->orderBy('created_at', 'DESC')
                ->take($limit)
                ->paginate(10);
               // return $data;
        return $data;
    }

    function KftBlogView(){
        $datas = $this->KftBlogViewAll(1000);
        return view('pages/blog', ['collection'=>$datas]);
    }

    function KftBlogDetailsView($id, $slug){

         $data = DB::table('kft_allposts')
                 ->join('kft_admins', 'kft_allposts.user_id', '=', 'kft_admins.id')
                 ->where('kft_allposts.id', '=', $id)->where('kft_allposts.slug', '=', $slug)
                 ->select('kft_allposts.*', 'kft_admins.name as user_name')
                 ->get();

         $AllData = $this->KftBlogViewAll(3);
        return view('pages/blog-details', ['collection'=>$data], ['RecentData'=>$AllData]);

    }
}
