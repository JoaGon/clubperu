<?php


namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\Slide;
use DB;
use Auth;


class ProductController extends Controller
{
    public function merchandising(Request $req){

		 $sports = DB::table("sport")
              ->get(); 

       return view('cms.sport.all_sports', ['sports'=>$sports]);
    }

}
