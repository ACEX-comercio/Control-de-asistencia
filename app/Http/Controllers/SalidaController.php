<?php

namespace App\Http\Controllers;
use App\Salida;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class SalidaController extends Controller
{
    //
    public function index(Request $request)
    {
        //$usuarireturn view('adminmain',['usuarios'=>$usuarios]);
        //$usuarios = usuario::paginate(4);
        //return view('usuario/usuario')->withUsers($usuarios);
        $salidas = DB::table('salidas')
        ->join('users','id_usuario','=','users.id')
        ->get();
        //dd($llegada);
        return view('salidamain',compact('salidas'));
    }
    public function store(Request $request)
    {
        $dt = Carbon::now();

        $salida = new Salida();
        $salida -> id_usuario = $request -> idusu;
        $salida -> fecha = $dt->toDateString();
        $salida -> hora = $dt->toTimeString();
        $salida->save();
        return redirect('/asistencia');
    }
}
