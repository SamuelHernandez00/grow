<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\servicios;
use App\Models\ventas;
use App\Models\organizaciones;

class sitio extends Controller
{
    //
    public function registrar (Request $request){
        $user = User::create(array(
            'nombre' => $request->input('nombre'),
            'telefono' => $request->input('telefono'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'fn' => $request->input('fn'),
            'foto' => $request->input('foto'),
            'numerodecuenta' => $request->input('numerodecuenta'),
            'formadepago' => $request->input('formadepago'),
            'rfc' =>$request->input('rfc'),
            'terminos' => $request->input('terminos'),

        ));

       

      
        return redirect()->to('/user');
    }
    public function registrar_usuarios(Request $request){
        $usuarios = User::create(array(
            'nombre' => $request->input('nombre'),
            'telefono' => $request->input('telefono'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'fn' => $request->input('fn'),
            'foto' => $request->input('foto'),
            'numerodecuenta' => $request->input('numerodecuenta'),
            'formadepago' => $request->input('formadepago'),
            'rfc' =>$request->input('rfc'),
            'terminos' => $request->input('terminos'),

        ));

       

      
        return redirect()->to('dash_usuarios');
    }

    public function lista(){
        $usuarios = User::all();

        return view('cards')
        ->with(['usuarios'=>$usuarios]);
    }

    public function registrar_servicios (Request $request){
        $servicio = servicios::create(array(
            'nombre' => $request->input('nombre'),
            'tipo_servicio' => $request->input('tipo_servicio'),
            'descripcion' => $request->input('descripcion'),
            'Imagen' => $request->input('Imagen'),
            'costo' => $request->input('costo')

        ));
        return redirect()->to('/dash_Servicios');
    }
    public function lista_servicios(){
        $servicios = servicios::all();

        return view('servicios')
        ->with(['servicios'=>$servicios]);
    }

    public function editar(User $id){
        $usu = User::find($id);
           
    
        return view('editar')
        ->with(['usu'=>$id]);
    }

    public function editar_servicio(servicios $id){
        $serv = servicios::find($id);
           
    
        return view('editar_servicio')
        ->with(['serv'=>$id]);
    }

    public function salvar_servicio(servicios $id, Request $request){
       

        $ser = servicios::find($id->id);
           $ser->nombre = $request->nombre;
            $ser->tipo_servicio = $request->tipo_servicio;
            $ser->descripcion = $request->descripcion;
            $ser->Imagen = $request->Imagen;
            $ser->costo = $request->costo;
       $ser->save();

       return redirect()->to('dash_Servicios');
       
   }

   public function borrar_servicio(servicios $id){
    $id->delete();
    return redirect()->to('dash_Servicios');
}


    public function salvar(User $id, Request $request){
       

         $con = User::find($id->id);
            $con->nombre = $request->nombre;
            $con->fn = $request->fn;
            $con->email = $request->email;
            $con->password = $request->password;
            $con->tipo = $request->tipo;
            $con->numerodecuenta = $request->numerodecuenta;
            $con->foto = $request->foto;
            $con->formadepago = $request->formadepago;
        $con->save();

        return redirect()->to('dash_usuarios');
        
    }

    public function borrar(User $id){
        $id->delete();
        return redirect()->to('dash_usuarios');
    }
    
    public function consulta_ventas(Request $resquest){
        $id_usuario = $request->get('id_usuario');
        
        $organizaciones = organizaciones::where('id_usuario',$id_usuario)->get();
        
        return view("datosv2")
        ->with(['organizaciones' => $organizaciones]);
    }

    public function lista_ventas(){

        $ventas = ventas::all();
        $usuarios = User::all();    
        return view('ventas')
        ->with(['usuarios' => $usuarios])
        ->with(['ventas'=>$ventas]);
    }

    public function registrar_venta(Request $request){

        //dd($request->all());
        $usuarios = User::all();
        $venta = ventas::all();
        $ventas = ventas::create(array(
            'id_user' => $request->input('id_user'),
            'id_organizacion' => $request->input('id_organizacion'),
            'nombre' => $request->input('nombre'),
            'duracion' => $request->input('duracion'),
            'descripcion' => $request->input('descripcion'),
            'estado' => $request->input('estado'),
            'supervision' => $request->input('supervision'),
            'Fecha_inicio' => $request->input('fecha_inicio'),
            'Fecha_culminacion' => $request->input('fecha_culminacion'),
            'Costo_Final' => $request->input('costo_final'),
        ));

        return redirect()->route('ventas')
         ->with(['usuarios' => $usuarios])
         ->with(['venta' => $venta]);
        
    }

    public function ventas2a(Request $request){
        $id_user = $request->get('id_user');
        
        $organizaciones = organizaciones::where('id_user',$id_user)->get();
        
        return view("ventas2a")
        ->with(['organizaciones' => $organizaciones]);
    }
}
