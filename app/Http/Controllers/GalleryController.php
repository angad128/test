<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Redirect;


class GalleryController extends Controller
{
    public function getGallery()
    {
        if (Session::get('username')) {
            $result = DB::table('gallery')
                    ->paginate(12);
            return view('backend/gallery/view')->with('data',$result);
        }
        else {
            Session::put('exception', 'To access Dashboard,Please Login First.');
            return Redirect::to('/');
        }
    	
    }

    public function getUploadGallery(){
        if (Session::get('username')) {
            return view('backend/gallery/create');
        }
        else {
            Session::put('exception', 'To access Dashboard,Please Login First.');
            return Redirect::to('/');
        }
        
    }


    public function uploadOnGallery(Request $request){
        if (Session::get('username')) {
           if ($request->hasFile('img')) {
            $ext = $request->img->getClientOriginalExtension();
            $randFileName = rand(100,100000);
            $imageName = $randFileName.'.'.$ext;
            $imagePath = public_path('upload/gallery/');
            $uploaded = $request->img->move( $imagePath ,$imageName);
            }
            $this->validate($request,[
                'filename' => 'required',
                'filedesc' => 'required',
            ]);

            $data = array();
            $data['filename'] = $request->filename;
            $data['filedesc'] = $request->filedesc;
            $data['img'] = $imageName;
            $data['created_at'] = now();


            $result = DB::table('gallery')->insert($data);
            if ($result) {
                return Redirect::to('/gallery/view')->with('success',"News Sucessfully Published.");
            }
            else {
                return Redirect::to('/gallery/view')->with('error','Fill all the forms correctly.');  
            }
        }
        else {
            return back()->with('error','To access Dashboard,Please Login First.');
        }
    }



    public function destroy(Request $request)
    {        
        if (Session::get('username')) {
            $deleted = DB::table('gallery')->where('id',$request->id)->delete();
            if ($deleted) {
                return Redirect::to('/gallery/view')->with('success','Gallery is sucessfully deleted!');
            }
            return Redirect::to('/gallery/view')->with('error','Gallery cannot be sucessfully deleted!');
        }
        else {
            return back()->with('error','To access Dashboard,Please Login First.');
        }
    }

}
