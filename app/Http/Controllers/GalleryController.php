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
                    ->get();
            return view('backend/gallery/view')->with('data',$result);
        }
        else {
            return Redirect::to('/')->with('exception', 'To access Dashboard,Please Login First.');
        }
    	
    }

    public function getUploadGallery(){
        if (Session::get('username')) {
            return view('backend/gallery/create');
        }
        else {
            return Redirect::to('/')->with('exception', 'To access Dashboard,Please Login First.');
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
            ]);

            $data = array();
            $data['filename'] = $request->filename;
            $data['img'] = $imageName;
            $data['created_at'] = now();


            $result = DB::table('gallery')->insert($data);
            if ($result) {
                return Redirect::to('/gallery/view')->with('success',"Sucessfully Published on Gallery.");
            }
            else {
                return Redirect::to('/gallery/view')->with('error','Please first fill all the forms correctly.');  
            }
        }
        else {
            return back()->with('error','To access Dashboard,Please Login First.');
        }
    }


     public function editgallery($id){
        if (Session::get('username')) {
            $result = DB::table('gallery')
                    ->where('id',$id)
                    ->first();

            return view('backend/gallery/edit')->with('data',$result);
        }
        else {
            return back()->with('error','To access Dashboard,Please Login First.');
        }
    }


    public function  updategallery(Request $request){
        if (Session::get('username')) {
            if (empty($request->filename)) {
                $filename= DB::table('gallery')->select('filename')->where('id',$request->id)->get(); 
            }
            if ($request->hasFile('img')) {
                $ext = $request->img->getClientOriginalExtension();
                $randFileName = rand(100,100000);
                $imageName = $randFileName.'.'.$ext;
                $imagePath = public_path('upload/gallery/');
                $uploaded = $request->img->move( $imagePath ,$imageName);
            }else{
                $image = DB::table('gallery')->select('img')->where('id',$request->id)->get(); 
                foreach ($image as $key) {
                    foreach ($key as $value) {
                        $imageName = $value;
                    }
                }
            }
            $this->validate($request,[
                'filename' => 'required',
            ]);

            $data = array();
            $data['filename'] = $request->filename;
            $data['img'] = $imageName;
            $data['updated_at'] = now();


            $result = DB::table('gallery')->where('id',$request->id)->update($data);
            if ($result) {
                return Redirect::to('/gallery/view')->with('success','Successfully Updated!');
            }
            else {
                return Redirect::to('/gallery/view')->with('error','Failed to Update gallery!');  
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
