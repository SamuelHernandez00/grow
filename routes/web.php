<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\sitio;
use App\Http\Controllers\login;
use App\Http\Controllers\ControladorCarrito;
use App\Http\Controllers\ControladorCart;
use App\Http\Controllers\SessionController;

use JeroenNoten\LaravelAdminLte\Http\Controllers\DarkModeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('index');
});
Route::get('/user', function () {
    return view('user');
}) ;


Route::name('registrar')
    ->post('/registrar',[sitio::class,'registrar'
])->middleware('guest');



Route::get('/login', function(){
    return view('iniciosesion');
})->name('login');
    

Route::post('/login', [login::class, 'login']);




    Route::get('dash', function () {
        return view('dash');
    });

Route::name('usuarios')
    ->get('dash_usuarios/',
    [sitio::class, 'lista'
]);

Route::name('registrar_usuarios')
    ->post('/registrar_usaurios',[sitio::class,'registrar_usuarios'
]);

Route::name('registrar_venta')->post('registrar_venta/',[sitio::class, 'registrar_venta']);
Route::name('ventas2a')->get('/ventas2a',[sitio::class, 'ventas2a']);

Route::name('registrar_productos')
    ->post('/registrar_producto',[sitio::class,'registrar_productos'
]);

Route::name('productos')
    ->get('dash_productos/',
    [sitio::class, 'lista_productos'
]);

Route::name('ventas')
    ->get('dash_ventas/',
    [sitio::class, 'lista_ventas'
]);

Route::name('borrar1')->delete('/borrar/{id}',[sitio::class, 'borrar']);
Route::name('editar')->get('usuario_editar/{id}',[sitio::class, 'editar']);
Route::name('salvar')->put('usuario_salvar/{id}',[sitio::class, 'salvar']);

Route::name('borrar_producto')->delete('/borrar_producto/{id}',[sitio::class, 'borrar_producto']);
Route::name('editar_producto')->get('producto_editar/{id}',[sitio::class, 'editar_producto']);
Route::name('salvar_producto')->put('producto_editar/{id}',[sitio::class, 'salvar_producto']);

