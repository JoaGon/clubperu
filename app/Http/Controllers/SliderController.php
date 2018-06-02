<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\Slide;
use DB;
use Auth;


class SliderController extends Controller
{
 	public function __construct(){
       // $this->middleware('auth');
    }

    public function index(){

   	$slides = DB::table("header_pictures")
        	  ->get();        
    return response()->json(['slides'=>$slides]);
    }

 	public function new_slide(){

      //$slides = DB::table('slides')->get();
       return view('cms.new_slide');
    }

    public function slides(){

      	$slides = DB::table('header_pictures')->get();
       	return view('cms.slide', ['slides'=>$slides]);
    }

    public function new_slide_create(Requestsest $req){


    	//dd('aca',  $_FILES['image']);
	 	   $file = $_FILES['image'];
        $dir_upload = 'img/slider/';
        $new_name = time() . '-' .$file['name'];
        $copied = copy($file['tmp_name'], $dir_upload . $new_name);
        $dir_upload = 'img/slider/';

        DB::table('header_pictures')->insert(
            [
	            'picture' => $dir_upload. $new_name,
	            'activity_id'=> $req->input("name")
            ]
        );

        $slides = DB::table('header_pictures')->get();
        return view('cms.slide', ['slides'=>$slides]);
    }

    public function edit(Request $request){

        $slides = DB::table('header_pictures')
                  ->where('id_header_pictures',$request->id)->get();
        return (['slides'=>$slides]);
        
    }

    public function update(Request $request){

        $req = $request->all();
      //  
        if( isset( $_FILES["image"] ) && !empty( $_FILES["image"]["name"] ) ){
         // dd($req);
          $file = $_FILES['image'];
          $dir_upload = 'img/slider/';
          $new_name = time() . '-' .$file['name'];
          $copied = copy($file['tmp_name'], $dir_upload . $new_name);
          $dir_upload = 'img/slider/';

          $slides = DB::table('header_pictures')
                  ->where('id_header_pictures',$req['id_edit'])
                  ->update([
                    'picture'=> $dir_upload. $new_name,
                    'activity_id'=> $req['name']
                    ]);
        }else{
          $slides = DB::table('header_pictures')
                  ->where('id_header_pictures',$req['id_edit'])
                  ->update([
                    'activity_id'=> $req['name']
                    ]);
        } 
        
        $slides = DB::table('header_pictures')->get();
        return view('cms.slide', ['slides'=>$slides]);
    }

    public function delete(Request $request){

        DB::table('header_pictures')
                  ->where('id_header_pictures',$request->id)->delete();

        $slides = DB::table('header_pictures')->get();

        return (['slides'=>$slides]);
        
    }

}
