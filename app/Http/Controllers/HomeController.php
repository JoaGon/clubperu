<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use Mail;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        return view('home');
    }

    /*public function sendEmail(Request $req)
    {
       // dd($req->all());
        $data = array
                (
                'email'     =>  $req->input('email'),
                'messages'      =>  "hola",
                'subject'       =>  "hola",
                );
        Mail::send('emailTemplate', $data, function ($message) use ($data) {
            $message->subject("hola");
            $message->to("joanellygonzalez@gmail.com");
        });
         return redirect("/");
    }*/
}