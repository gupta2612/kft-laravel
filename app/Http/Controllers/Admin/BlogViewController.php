<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kft_allpost;

class BlogViewController extends Controller
{
    function BlogViewData($order){
        $data = DB::table('kft_allposts')
                ->select('kft_allposts.*', 'kft_admins.name as user_name', 'kft_categories.name as categories_name')
                ->join('kft_admins', 'kft_allposts.user_id', '=', 'kft_admins.id')
                ->join('kft_categories', 'kft_allposts.categories', '=', 'kft_categories.id')
                ->OrderBy('created_at', $order)
                ->paginate(10);
        return $data;
    }
    function BlogView(){
        $data = $this->BlogViewData('DESC');
        return view('admin/pages/all-post', ['collection'=>$data], ['no'=>1]);
    }
    function BlogViewDESC(){
        $data = $this->BlogViewData('DESC');
        return view('admin/pages/all-post', ['collection'=>$data], ['no'=>1]);
    }
    function BlogViewASC(){
        $data = $this->BlogViewData('ASC');
        return view('admin/pages/all-post', ['collection'=>$data], ['no'=>1]);
    }

    function BlogEditUpdate($id){
        $data = DB::table('kft_allposts')
                 ->where('id', '=', $id)
                 ->get();
        return view('admin/pages/edit-post', ['collection'=>$data]);
    }

    function UserByView($id){
        $data = DB::table('kft_allposts')
            ->select('kft_allposts.*', 'kft_admins.name as user_name', 'kft_categories.name as categories_name')
            ->where('kft_allposts.user_id', '=', $id)
            ->join('kft_admins', 'kft_allposts.user_id', '=', 'kft_admins.id')
            ->join('kft_categories', 'kft_allposts.categories', '=', 'kft_categories.id')
            ->OrderBy('created_at', 'DESC')
            ->paginate(10);
        return view('admin/pages/all-post', ['collection'=>$data], ['no'=>1]);
    }
    
    function MediaView(){
        $data = $this->BlogViewData('DESC');
        return view('admin/pages/media', ['collection'=>$data]);
    }
}
