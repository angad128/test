<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Redirect;

class MemberController extends Controller
{
    public function getMember()
    {
        if (Session::get('username')) {
            $result = DB::table('members')
                    ->paginate(4);
            return view('backend/member/view')->with('data',$result);
        }
        else {
            return Redirect::to('/')->with('exception', 'To access Dashboard,Please Login First.');
        }
    	
    }

    public function createMember(){
        if (Session::get('username')) {
            return view('backend/member/create');
        }
        else {
            return back()->with('error','To access Dashboard,Please Login First.');
        }
    }

    public function postMember(Request $request){
        if (Session::get('username')) {
            if ($request->hasFile('img')) {
                $ext = $request->img->getClientOriginalExtension();
                $randFileName = rand(100,100000);
                $imageName = $randFileName.'.'.$ext;
                $imagePath = public_path('upload/member/');
                $uploaded = $request->img->move( $imagePath ,$imageName);
            }
            $this->validate($request,[
                'name' => 'required',
                'title' => 'required',
            ]);

            $data = array();
            $data['name'] = $request->name;
            $data['title'] = $request->title;
            $data['img'] = $imageName;
            $data['created_at'] = now();
            $result = DB::table('members')->insert($data);
            if ($result) {
                return Redirect::to('/members/view')->with('success','Successfully Published!');
            }
            else {
                return Redirect::to('/members/create')->with('exception','Failed to publish!');  
            }
        }
        else {
             return Redirect::to('/')->with('error','To access Dashboard,Please Login First.');
        }
    }

    public function editMember($id){
        if (Session::get('username')) {
            $result = DB::table('members')
                    ->where('id',$id)
                    ->first();
            return view('backend/member/edit')->with('data',$result);
        }
        else {
             return back()->with('error','To access Dashboard,Please Login First.');
        }
    }


    public function  updateMember(Request $request){
        if (Session::get('username')) {
            if (empty($request->name)) {
                $name= DB::table('members')->select('name')->where('id',$request->id)->get(); 
            }
            if (empty($request->title)) {
                $title= DB::table('members')->select('title')->where('id',$request->id)->get(); 
            }
            if ($request->hasFile('img')) {
                $ext = $request->img->getClientOriginalExtension();
                $randFileName = rand(100,100000);
                $imageName = $randFileName.'.'.$ext;
                $imagePath = public_path('upload/member/');
                $uploaded = $request->img->move( $imagePath ,$imageName);
            }else{
                $image = DB::table('members')->select('img')->where('id',$request->id)->get(); 
                foreach ($image as $key) {
                    foreach ($key as $value) {
                        $imageName = $value;
                    }
                }
            }
            $this->validate($request,[
                'name' => 'required',
                'title' => 'required',
            ]);

            $data = array();
            $data['name'] = $request->name;
            $data['title'] = $request->title;
            $data['img'] = $imageName;
            $data['updated_at'] = now();


            $result = DB::table('members')->where('id',$request->id)->update($data);
            if ($result) {
                return Redirect::to('/members/view')->with('success','Successfully Updated!');
            }
            else {
                return Redirect::to('/members/view')->with('error','Failed to Update news!');  
            }
        }
        else {
            return back()->with('error','To access Dashboard,Please Login First.');
        }
    }


    public function destroy(Request $request)
    {        
        if (Session::get('username')) {
            $deleted = DB::table('members')->where('id',$request->id)->delete();
            if ($deleted) {
                return Redirect::to('/members/view')->with('success','Member is sucessfully deleted!');
            }
            return Redirect::to('/members/view')->with('error','Member cannot be sucessfully deleted!');
        }
        else {
            return back()->with('error','To access Dashboard,Please Login First.');
        }
    }

}
