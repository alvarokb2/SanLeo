<?php

namespace Sanleo\Http\Controllers;

use Illuminate\Http\Request;
use Sanleo\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //permite acceso al modulo solo a usuarios autenticados con rol de admin
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    //listado de usuarios
    public function index(){
        $usuarios = User::all();
        return view('admin.usuarios.usuarios')->with('usuarios', $usuarios);
    }

    //buscar usuario en la BBDD
    public function buscar_usuario(Request $request){
        $all = User::where('name', 'like','%'.$request->busqueda.'%')
            ->get();
        return view('admin.usuarios.usuarios')
            ->with('usuarios', $all);
    }

    //direcciona al form editar_usuario
    public function editar_usuario($id){
        $user = User::where('id', $id)->get();
        return view('admin.usuarios.editar')->with('user', $user);
    }

    //direcciona al form nuevo_usuario
    public function nuevo_usuario(){
        return view('admin.usuarios.nuevo');
    }


    //
    public function guardar_usuario(Request $request){
        $pass = preg_split('@',$request->email, 1);
        return $pass;
    }


    /*
     * Metodos de Informes
     */
    public function informes(){
        return view('admin.informes.informes');
    }
}
