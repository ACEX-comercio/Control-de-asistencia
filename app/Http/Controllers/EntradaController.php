<?php

namespace App\Http\Controllers;
use App\Entrada;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class EntradaController extends Controller
{
    //
    public function index(Request $request)
    {
        //$usuarireturn view('adminmain',['usuarios'=>$usuarios]);
        //$usuarios = usuario::paginate(4);
        //return view('usuario/usuario')->withUsers($usuarios);
        $llegadas = DB::table('entradas')
        ->join('users','id_usuario','=','users.id')
        ->get();
        //dd($llegada);
        return view('llegadamain',compact('llegadas'));
    }
    public function store(Request $request)
    {
        $dt = Carbon::now();

        $entrada = new Entrada();
        $entrada -> id_usuario = $request -> idusu;
        $entrada -> fecha = $dt->toDateString();
        $entrada -> hora = $dt->toTimeString();
        $entrada->save();
        return redirect('/asistencia');
    }
}
