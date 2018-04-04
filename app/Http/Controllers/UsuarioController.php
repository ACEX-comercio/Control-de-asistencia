<?php

namespace App\Http\Controllers;

use App\usuario;
use Illuminate\Http\Request;
use Hash;
use DB;
class UsuarioController extends Controller
{
    //
    public function index(Request $request)
    {
        $usuarios = usuario::paginate(10);
        return view('adminmain',['usuarios'=>$usuarios]);
        //$usuarios = usuario::paginate(4);
        //return view('usuario/usuario')->withUsers($usuarios);
    }
    //funcion que relisa la insercion de datos
    public function store(Request $request)
    {
        $usuario = new usuario();
        $usuario -> nombre = $request -> nombre;
        $usuario -> apellido = $request -> apellido;
        $usuario -> username = $request -> nick;
        $usuario -> email = $request -> email;
        $usuario -> password = Hash::make($request -> contra);
        $usuario -> tipo_usuario = $request -> tipo;
        $usuario->save();
        return redirect('/admin');
    }
}
