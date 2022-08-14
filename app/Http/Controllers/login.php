<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class login extends Controller
{
   
    public function login(Request $request){
        $Email = $request->input('email');
         $Password = $request->input('password');
    
            $consulta = User::where('email', '=', $Email)
            ->where('password', '=', $Password)
         ->get();
    
             if(count($consulta)==0){
                return view('dash');
        }
             else{
                return redirect()->to('/login');
         }
    }

    public function logout(Request $request)
    {
        // Destrulle las session
        $request->session()->forget('session_id');
        $request->session()->forget('session_name');
        $request->session()->forget('session_tipo');
        return redirect()->to('/');
    }
}