<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class SessionController extends Controller
{
    //
        public function store(){

            return view('iniciosesion');
        }


        public function valida(Request $request){

            $this->validate($request,[
                'email' => 'email|required|email',
                'password' => 'password|required|min:5|alpha_num',
            ]);

            $email = $request->input('email');
            $pass = $request->input('pass');


            //Consulta
           
                return redirect()->to('dash');
           
            
        }
   
}
