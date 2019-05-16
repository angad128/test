<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Redirect;

class LegislationController extends Controller
{
    public function getLegislation()
    {
        if (Session::get('username')) {
            $result = DB::table('legislations')->paginate(5);
            return view('backend/legislation/view')->with('data',$result);
        }
        else {
            Session::put('exception', 'To access Dashboard,Please Login First.');
            return Redirect::to('/');
        }
    	
    }

    public function createLegislation(){
        if (Session::get('username')) {
            return view('backend/legislation/create');
        }
        else {
            return back()->with('error','To access Dashboard,Please Login First.');
        }
    }

    public function postLegislation(Request $request){
        if (Session::get('username')) {
            $this->validate($request,[
                'filename' => 'required',
                'body' => 'required',
            ]);

            $data = array();
            $data['filename'] = $request->filename;
            $data['body'] = $request->body;
            $data['created_at'] = now();
            $result = DB::table('legislations')->insert($data);
            if ($result) {
                Session::put('success','Successfully Published!');
                return Redirect::to('/legislations/view');
            }
            else {
                Session::put('exception','Failed to publish!');
                return Redirect::to('/legislations/create');  
            }
        }
        else {
             return Redirect::to('/')->with('error','To access Dashboard,Please Login First.');
        }
    }

    public function editLegislation($id){
        if (Session::get('username')) {
            $result = DB::table('legislations')
                    ->where('id',$id)
                    ->first();
            return view('backend/legislation/edit')->with('data',$result);
        }
        else {
             return back()->with('error','To access Dashboard,Please Login First.');
        }
    }


    public function  updateLegislation(Request $request){
        if (Session::get('username')) {
            if (empty($request->filename)) {
                $filename= DB::table('legislations')->select('filename')->where('id',$request->id)->get(); 
            }
            if (empty($request->body)) {
                $body= DB::table('legislations')->select('body')->where('id',$request->id)->get(); 
            }

            $this->validate($request,[
                'filename' => 'required',
                'body' => 'required',
            ]);

            $data = array();
            $data['filename'] = $request->filename;
            $data['body'] = $request->body;
            $data['updated_at'] = now();


            $result = DB::table('legislations')->where('id',$request->id)->update($data);
            if ($result) {
                return Redirect::to('/legislations/view')->with('success','Successfully Updated!');
            }
            else {
                return Redirect::to('/legislations/view')->with('error','Failed to Update Legislation!');  
            }
        }
        else {
            return back()->with('error','To access Dashboard,Please Login First.');
        }
    }


    public function destroy(Request $request)
    {        
        if (Session::get('username')) {
            $deleted = DB::table('legislations')->where('id',$request->id)->delete();
            if ($deleted) {
                return Redirect::to('/legislations/view')->with('success','Legislation is sucessfully deleted!');
            }
            return Redirect::to('/legislations/view')->with('error','Legislation cannot be sucessfully deleted!');
        }
        else {
            return back()->with('error','To access Dashboard,Please Login First.');
        }
    }

}
