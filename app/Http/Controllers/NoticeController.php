<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Redirect;

class NoticeController extends Controller
{
    public function viewNotice()
    {
        if (Session::get('username')) {
            $result = DB::table('notices')->get();
            return view('backend/notice/view')->with('data',$result);
        }
        else {
            return Redirect::to('/')->with('error', 'To access Dashboard,Please Login First.');
        }
    	
    }

    public function createNotice(){
        if (Session::get('username')) {
            return view('backend/notice/create');
        }
        else {
            return back()->with('error','To access Dashboard,Please Login First.');
        }
    }

    public function postNotice(Request $request){
        if (Session::get('username')) {
            $this->validate($request,[
                'title' => 'required',
                'body' => 'required',
            ]);
            DB::table('notices')->delete();
            $data = array();
            $data['title'] = $request->title;
            $data['body'] = $request->body;
            $data['created_at'] = now();
            $result = DB::table('notices')->insert($data);
            if ($result) {
                return Redirect::to('/notice/view')->with('success','Successfully Published!');
            }
            else {
                return Redirect::to('/notice/create')->with('exception','Failed to publish!');  
            }
        }
        else {
             return Redirect::to('/')->with('error','To access Dashboard,Please Login First.');
        }
    }

    public function editNotice($id){
        if (Session::get('username')) {
            $result = DB::table('notices')
                    ->where('id',$id)
                    ->first();
            return view('backend/notice/edit')->with('data',$result);
        }
        else {
             return back()->with('error','To access Dashboard,Please Login First.');
        }
    }


    public function  updateNotice(Request $request){
        if (Session::get('username')) {
            if (empty($request->title)) {
                $title= DB::table('notices')->select('title')->where('id',$request->id)->get(); 
            }
            if (empty($request->body)) {
                $body= DB::table('notices')->select('body')->where('id',$request->id)->get(); 
            }

            $this->validate($request,[
                'title' => 'required',
                'body' => 'required',
            ]);

            $data = array();
            $data['title'] = $request->title;
            $data['body'] = $request->body;
            $data['updated_at'] = now();


            $result = DB::table('notices')->where('id',$request->id)->update($data);
            if ($result) {
                return Redirect::to('/notice/view')->with('success','Successfully Updated!');
            }
            else {
                return Redirect::to('/notice/view')->with('error','Failed to Update Notice!');  
            }
        }
        else {
            return back()->with('error','To access Dashboard,Please Login First.');
        }
    }


    public function destroy(Request $request)
    {        
        if (Session::get('username')) {
            $deleted = DB::table('notices')->where('id',$request->id)->delete();
            if ($deleted) {
                return Redirect::to('/notice/view')->with('success','Notice is sucessfully deleted!');
            }
            return Redirect::to('/notice/view')->with('error','Notice cannot be sucessfully deleted!');
        }
        else {
            return back()->with('error','To access Dashboard,Please Login First.');
        }
    }

}
