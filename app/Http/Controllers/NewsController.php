<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Redirect;

class NewsController extends Controller
{   
    public function viewNewsById($id){
        $result = DB::table('news')->where('id',$id)->get();
        return view('pages/news_view')->with('data',$result);
    }
    
    public function viewNews(){        
        if (Session::get('username')) {
            $result = DB::table('news')
                    ->paginate(5);
            return view('backend/news/view')->with('data',$result);
        }
        else {
            return back()->with('error','To access Dashboard,Please Login First.');
        }
    }

    public function createNews(){
        if (Session::get('username')) {
            return view('backend/news/create');
        }
        else {

            return back()->with('error','To access Dashboard,Please Login First.');
        }
    }

    public function postNews(Request $request){
        if (Session::get('username')) {
           if ($request->hasFile('img')) {
            $ext = $request->img->getClientOriginalExtension();
            $randFileName = rand(100,100000);
            $imageName = $randFileName.'.'.$ext;
            $imagePath = public_path('upload/news/');
            $uploaded = $request->img->move( $imagePath ,$imageName);
            }
            $this->validate($request,[
                'title' => 'required',
                'body' => 'required',
            ]);

            $data = array();
            $data['title'] = $request->title;
            $data['body'] = $request->body;
            $data['img'] = $imageName;
            $data['created_at'] = now();


            $result = DB::table('news')->insert($data);
            if ($result) {
                return Redirect::to('/news/view')->with('success',"News Sucessfully Published.");
            }
            else {
                return Redirect::to('/news/view')->with('error','Fill all the forms correctly.');  
            }
        }
        else {
            return back()->with('error','To access Dashboard,Please Login First.');
        }
    }

    public function editNews($id){
        if (Session::get('username')) {
            $result = DB::table('news')
                    ->where('id',$id)
                    ->first();

            return view('backend/news/edit')->with('data',$result);
        }
        else {
            return back()->with('error','To access Dashboard,Please Login First.');
        }
    }


    public function  updateNews(Request $request){
        if (Session::get('username')) {
            if (empty($request->title)) {
                $title= DB::table('news')->select('title')->where('id',$request->id)->get(); 
            }
            if (empty($request->body)) {
                $body= DB::table('news')->select('body')->where('id',$request->id)->get(); 
            }
            if ($request->hasFile('img')) {
                $ext = $request->img->getClientOriginalExtension();
                $randFileName = rand(100,100000);
                $imageName = $randFileName.'.'.$ext;
                $imagePath = public_path('upload/news/');
                $uploaded = $request->img->move( $imagePath ,$imageName);
            }else{
                $image = DB::table('news')->select('img')->where('id',$request->id)->get(); 
                foreach ($image as $key) {
                    foreach ($key as $value) {
                        $imageName = $value;
                    }
                }
            }
            $this->validate($request,[
                'title' => 'required',
                'body' => 'required',
            ]);

            $data = array();
            $data['title'] = $request->title;
            $data['body'] = $request->body;
            $data['img'] = $imageName;
            $data['updated_at'] = now();


            $result = DB::table('news')->where('id',$request->id)->update($data);
            if ($result) {
                return Redirect::to('/news/view')->with('success','Successfully Updated!');
            }
            else {
                return Redirect::to('/news/view')->with('error','Failed to Update news!');  
            }
        }
        else {
            return back()->with('error','To access Dashboard,Please Login First.');
        }
    }



    public function destroy(Request $request)
    {        
        if (Session::get('username')) {
            $deleted = DB::table('news')->where('id',$request->id)->delete();
            if ($deleted) {
                return Redirect::to('/news/view')->with('success','News is sucessfully deleted!');
            }
            return Redirect::to('/news/view')->with('error','News cannot be sucessfully deleted!');
        }
        else {
            return back()->with('error','To access Dashboard,Please Login First.');
        }
    }
    
}
