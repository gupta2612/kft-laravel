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
                ->join('kft_admins', 'kft_allposts.user_id', '=', 'kft_admins.id')
                ->select('kft_allposts.*', 'kft_admins.name as user_name')
                ->OrderBy('created_at', $order)
                ->paginate(10);
        return $data;
    }
    function BlogView(){
        $data = $this->BlogViewData('DESC');
        return view('admin/pages/all-post', ['collection'=>$data]);
    }
    function BlogViewDESC(){
        $data = $this->BlogViewData('DESC');
        return view('admin/pages/all-post', ['collection'=>$data]);
    }
    function BlogViewASC(){
        $data = $this->BlogViewData('ASC');
        return view('admin/pages/all-post', ['collection'=>$data]);
    }

    function BlogEditUpdate($id){
        $data = DB::table('kft_allposts')
                 ->where('id', '=', $id)
                 ->get();
        return view('admin/pages/edit-post', ['collection'=>$data]);
    }


    function MediaView(){
        $data = $this->BlogViewData('DESC');
        return view('admin/pages/media', ['collection'=>$data]);
    }
}
