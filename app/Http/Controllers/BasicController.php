<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BasicController extends Controller
{
    public function home(){
        $news_data =  DB::table('news')
                 ->orderBy('created_at', 'desc')
                 ->get();
        $legislations_data = DB::table('legislations')->paginate(5);
        return view('pages/index')->with(compact('news_data', 'legislations_data'));
    }

    public function about(){
    	return view('pages/about');
    }

    public function contact(){
    	return view('pages/contact');
    }

    public function gallery(){
        $result = DB::table('gallery')
                    ->paginate(12);
    	return view('pages/gallery')->with('gallery_data',$result);
    }

}
