<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\Slide;
use DB;
use Auth;


class SportController extends Controller
{
	public function sports(Request $req){

		 $sports = DB::table("sport")
              ->get(); 

       return view('cms.sport.all_sports', ['sports'=>$sports]);
    }

     public function new_sport(Request $req){

    	//dd('aca',  $_FILES['image']);
 	    $file = $_FILES['image'];
        $dir_upload = 'img/sport/';
        $new_name = time() . '-' .$file['name'];
        $copied = copy($file['tmp_name'], $dir_upload . $new_name);

        $file_cabecera = $_FILES['image_cabecera'];
        $dir_upload_cabecera = 'img/sport/';
        $new_name_cabecera = time() . '-' .$file_cabecera['name'];
        $copied = copy($file_cabecera['tmp_name'], $dir_upload_cabecera . $new_name_cabecera);

       // dd( $dir_upload.$new_name);
        DB::table('sport')->insert(
            [
            	'name_sport' => $req->input('name'),
	            'picture' => $dir_upload.$new_name,
                'picture_header' => $dir_upload_cabecera.$new_name_cabecera,

            ]
        );

          return redirect('/sports');
    }

    public function beneficio(Request $req)
    {
       
        $sport = DB::table('sport')
        ->where('name_sport', 'handball')
        ->pluck('id_sport');

        $beneficio = DB::table('sport_description')
        ->where('sport_id',$sport[0])
        ->get();
       return view('cms.handball.beneficio', ['handball'=>$beneficio]);


    }

    public function beneficioCreate(Request $req)
    {   
        $time   = time();
        // dd( date("Y-m-d H:i:s", $time));
        $hoy = date("Y-m-d H:i:s", $time);

        $handball = DB::table('sport')
            ->where('name_sport', 'handball')
            ->pluck('id_sport');

        DB::table('sport_description')->insert(
            [
                'sport_id' => $handball[0],
                'beneficio' => $req->input('beneficio'),
                'created_at' => $hoy
            ]
        );

        return redirect('/new_beneficio');
    }


    public function activity(Request $req)
    {
       
        $sport = DB::table('sport')
        ->where('name_sport', 'handball')
        ->pluck('id_sport');

        $activity = DB::table('sport_activity')
        ->where('sport_id',$sport[0])
        ->get();

        return view('cms.handball.actividad', ['handball'=>$activity]);


    }

    public function activityCreate(Request $req)
    {
        $time   = time();
        // dd( date("Y-m-d H:i:s", $time));
        $hoy = date("Y-m-d H:i:s", $time);

        //dd('aca',  $_FILES['image']);
        $file = $_FILES['image'];
        $dir_upload = 'img/sport/';
        $new_name = time() . '-' .$file['name'];
        $copied = copy($file['tmp_name'], $dir_upload . $new_name);


        $handball = DB::table('sport')
            ->where('name_sport', 'handball')
            ->pluck('id_sport');

        DB::table('sport_activity')->insert(
            [
                'sport_id' => $handball[0],
                'name' => $req->input('name'),
                'description' => $req->input('description'),
                'date' => $req->input('date'),
                'picture' => $dir_upload.$new_name,
                'created_at' => $hoy
            ]
        );

         return redirect('/new_activity');

    }

        public function manager(Request $req)
    {
       
        $sport = DB::table('sport')
        ->where('name_sport', 'handball')
        ->pluck('id_sport');

        $activity = DB::table('sport_manager')
        ->join('users','users.id', '=', 'sport_manager.users_id')
        ->where('sport_id',$sport[0])
        ->get();

        //dd($activity);

        return view('cms.handball.manager', ['handball'=>$activity]);


    }

    public function managerCreate(Request $req)
    {
        $time   = time();
        // dd( date("Y-m-d H:i:s", $time));
        $hoy = date("Y-m-d H:i:s", $time);

        //dd('aca',  $_FILES['image']);
        $file = $_FILES['image'];
        $dir_upload = 'img/sport/';
        $new_name = time() . '-' .$file['name'];
        $copied = copy($file['tmp_name'], $dir_upload . $new_name);


        $handball = DB::table('sport')
            ->where('name_sport', 'handball')
            ->pluck('id_sport');

        $rol = DB::table('roles')
            ->where('rol', 'manager')
            ->pluck('id_roles');

        $user = DB::table('users')->insertGetId(
            [
                'name' => $req->input('name'),
                'lastname' => $req->input('lastname'),
                'email' => $req->input('email'),
                'phone_number' => $req->input('phone'),
                'position' => $req->input('position'),
                'picture' => $dir_upload.$new_name,
                'created_at' => $hoy,
                'updated_at' => $hoy,
                'rol_id' => $rol[0]
            ]
        );

        $manager =  DB::table('sport_manager')->insert([
                'sport_id' => $handball[0],
                'users_id' => $user,

            ]);

         return redirect('/new_manager');

    }

    public function galeria(Request $req)
    {
       
        $sport = DB::table('sport')
        ->where('name_sport', 'handball')
        ->pluck('id_sport');

        $activity = DB::table('sport_manager')
        ->join('users','users.id', '=', 'sport_manager.users_id')
        ->where('sport_id',$sport[0])
        ->get();

        //dd($activity);

        return view('cms.handball.galeria');


    }

    public function Handball()
    {
        $sport = DB::table('sport')
                    ->where('name_sport', 'handball')
                    ->pluck('id_sport');
    
        $beneficio = DB::table('sport_description')
                    ->where('sport_id',$sport[0])
                    ->get();
    
        $activity = DB::table('sport_activity')
                    ->where('sport_id',$sport[0])
                    ->get();

        $managers = DB::table('sport_manager')
                    ->join('users','users.id', '=', 'sport_manager.users_id')
                    ->where('sport_id',$sport[0])
                    ->get();

        $info_sport = DB::table('sport')
                    ->where('name_sport', 'handball')
                    ->get();

        return view('handball',['beneficio'=>$beneficio,'activity'=>$activity, 'managers'=>$managers, 'info_sport'=>$info_sport]);
    }


    public function Ajedrez()
    {
        $sport = DB::table('sport')
                    ->where('name_sport', 'ajedrez')
                    ->pluck('id_sport');
    
        $beneficio = DB::table('sport_description')
                    ->where('sport_id',$sport[0])
                    ->get();
    
        $activity = DB::table('sport_activity')
                    ->where('sport_id',$sport[0])
                    ->get();

        $managers = DB::table('sport_manager')
                    ->join('users','users.id', '=', 'sport_manager.users_id')
                    ->where('sport_id',$sport[0])
                    ->get();

        $info_sport = DB::table('sport')
                    ->where('name_sport', 'ajedrez')
                    ->get();

        return view('ajedrez',['beneficio'=>$beneficio,'activity'=>$activity, 'managers'=>$managers, 'info_sport'=>$info_sport]);
    }

    public function beneficioAjedrez(Request $req)
    {
       
        $sport = DB::table('sport')
        ->where('name_sport', 'ajedrez')
        ->pluck('id_sport');

        $beneficio = DB::table('sport_description')
        ->where('sport_id',$sport[0])
        ->get();
       return view('cms.ajedrez.beneficio', ['ajedrez'=>$beneficio]);


    }

    public function beneficioCreateAjedrez(Request $req)
    {   
        $time   = time();
        // dd( date("Y-m-d H:i:s", $time));
        $hoy = date("Y-m-d H:i:s", $time);

        $ajedrez = DB::table('sport')
            ->where('name_sport', 'ajedrez')
            ->pluck('id_sport');

        DB::table('sport_description')->insert(
            [
                'sport_id' => $ajedrez[0],
                'beneficio' => $req->input('beneficio'),
                'created_at' => $hoy
            ]
        );

        return redirect('/new_beneficio_ajedrez');
    }


    public function activityAjedrez(Request $req)
    {
       
        $sport = DB::table('sport')
        ->where('name_sport', 'ajedrez')
        ->pluck('id_sport');

        $activity = DB::table('sport_activity')
        ->where('sport_id',$sport[0])
        ->get();

        return view('cms.ajedrez.actividad', ['ajedrez'=>$activity]);


    }

    public function activityCreateAjedrez(Request $req)
    {
        $time   = time();
        // dd( date("Y-m-d H:i:s", $time));
        $hoy = date("Y-m-d H:i:s", $time);

        //dd('aca',  $_FILES['image']);
        $file = $_FILES['image'];
        $dir_upload = 'img/sport/';
        $new_name = time() . '-' .$file['name'];
        $copied = copy($file['tmp_name'], $dir_upload . $new_name);


        $ajedrez = DB::table('sport')
            ->where('name_sport', 'ajedrez')
            ->pluck('id_sport');

        DB::table('sport_activity')->insert(
            [
                'sport_id' => $ajedrez[0],
                'name' => $req->input('name'),
                'description' => $req->input('description'),
                'date' => $req->input('date'),
                'picture' => $dir_upload.$new_name,
                'created_at' => $hoy
            ]
        );

         return redirect('/new_activity_ajedrez');

    }

        public function managerAjedrez(Request $req)
    {
       
        $sport = DB::table('sport')
        ->where('name_sport', 'ajedrez')
        ->pluck('id_sport');

        $activity = DB::table('sport_manager')
        ->join('users','users.id', '=', 'sport_manager.users_id')
        ->where('sport_id',$sport[0])
        ->get();

        //dd($activity);

        return view('cms.ajedrez.manager', ['ajedrez'=>$activity]);


    }

    public function managerCreateAjedrez(Request $req)
    {
        $time   = time();
        // dd( date("Y-m-d H:i:s", $time));
        $hoy = date("Y-m-d H:i:s", $time);

        //dd('aca',  $_FILES['image']);
        $file = $_FILES['image'];
        $dir_upload = 'img/sport/';
        $new_name = time() . '-' .$file['name'];
        $copied = copy($file['tmp_name'], $dir_upload . $new_name);


        $ajedrez = DB::table('sport')
            ->where('name_sport', 'ajedrez')
            ->pluck('id_sport');

        $rol = DB::table('roles')
            ->where('rol', 'manager')
            ->pluck('id_roles');

        $user = DB::table('users')->insertGetId(
            [
                'name' => $req->input('name'),
                'lastname' => $req->input('lastname'),
                'email' => $req->input('email'),
                'phone_number' => $req->input('phone'),
                'position' => $req->input('position'),
                'picture' => $dir_upload.$new_name,
                'created_at' => $hoy,
                'updated_at' => $hoy,
                'rol_id' => $rol[0]
            ]
        );

        $manager =  DB::table('sport_manager')->insert([
                'sport_id' => $ajedrez[0],
                'users_id' => $user,

            ]);

         return redirect('/new_manager_ajedrez');

    }


}
