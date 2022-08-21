<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\productos;
use App\Models\ventas;
use Barryvdh\DomPDF\Facade\Pdf;
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
            'tipo' => $request->input('tipo'),
            'fn' => $request->input('fn'),
            'foto' => $request->input('foto'),
           
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
            'tipo' => $request->input('tipo'),
            'terminos' => $request->input('terminos'),

        ));

       

      
        return redirect()->to('dash_usuarios');
    }

    public function lista(){
        $usuarios = User::all();

        return view('cards')
        ->with(['usuarios'=>$usuarios]);
    }

    public function registrar_productos (Request $request){
        $producto = productos::create(array(
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'img' => $request->input('img'),
            'precio' => $request->input('precio')

        ));
        return redirect()->to('/dash_productos');
    }
    public function lista_productos(){
        $productos = productos::all();

        return view('productos')
        ->with(['productos'=>$productos]);
    }

    public function editar(User $id){
        $usu = User::find($id);
           
    
        return view('editar')
        ->with(['usu'=>$id]);
    }

    public function editar_producto(productos $id){
        $serv = productos::find($id);
           
    
        return view('editar_producto')
        ->with(['serv'=>$id]);
    }

    public function salvar_producto(productos $id, Request $request){
       

        $ser = productos::find($id->id);
           $ser->nombre = $request->nombre;
            $ser->descripcion = $request->descripcion;
            $ser->img = $request->img;
            $ser->precio = $request->precio;
       $ser->save();

       return redirect()->to('dash_productos');
       
   }

   public function borrar_producto(productos $id){
    $id->delete();
    return redirect()->to('dash_productos');
}


    public function salvar(User $id, Request $request){
       

         $con = User::find($id->id);
            $con->nombre = $request->nombre;
            $con->fn = $request->fn;
            $con->email = $request->email;
            $con->password = $request->password;
            $con->tipo = $request->tipo;
            $con->foto = $request->foto;
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
        $productos = productos::all();    
        return view('ventas')
        ->with(['usuarios' => $usuarios])
        ->with(['productos' => $productos])
        ->with(['ventas'=>$ventas]);
    }

    public function dash(){
        $ventas = ventas::all();
        $usuarios = User::all(); 
        $productos = productos::all();    
        return view('dash')
        ->with(['usuarios' => $usuarios])
        ->with(['productos' => $productos])
        ->with(['ventas'  =>  $ventas]);
    }

    public function registrar_venta(Request $request){

        //dd($request->all());
        $usuarios = User::all();
        $venta = ventas::all();
        $ventas = ventas::create(array(
            'id_user' => $request->input('id_user'),
            'id_producto' => $request->input('id_producto'),
            'cantidad' => $request->input('cantidad'),
            'descripcion' => $request->input('descripcion'),
            'total' => $request->input('total'),
        ));

        return redirect()->route('ventas')
         ->with(['usuarios' => $usuarios])
         ->with(['venta' => $venta]);
        
    }

    public function borrar_venta(ventas $id){
        $id->delete();
        return redirect()->to('dash_ventas');
    }

    public function ventas2a(Request $request){
        $id_user = $request->get('id_user');
        
        $organizaciones = organizaciones::where('id_user',$id_user)->get();
        
        return view("ventas2a")
        ->with(['organizaciones' => $organizaciones]);
    }

    public function imprimir(){
        $usuarios = \DB::table('users')
        ->select('users.*')
        ->orderBy('id','ASC')
        ->get();
        
        $data = compact('usuarios');
    $pdf = Pdf::loadView('pdf.reporteusuarios', $data);

    return $pdf->stream();

       
    }

    public function datos2a(Request $request){
        $id = $request->get('id_producto');
        $producto = productos::find($id);

        return view("ventas2a")
        ->with(['producto' => $producto]);
        
        
    }
}
