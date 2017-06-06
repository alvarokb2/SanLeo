<?php

namespace Sanleo\Http\Controllers;

use Illuminate\Http\Request;
use Sanleo\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin')->except('show');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuarios = User::all();
        return view('admin.usuarios.usuarios')->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.usuarios.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $exist = User::where('email', $request->email)->get();
        if($exist->count() > 0){
            Session::flash('errors', 'El email ya se encuentra registrado');
            return Redirect::route('users.create');
        }
        else{

            $pos = strpos($request->email, '@');
            $pass = substr($request->email, 0, $pos);
            $rol = $request->rol;

            $user = User::create([
                    'name'  => $request->name,
                'email' => $request->email,
                'password' => bcrypt($pass),
                'rol'   => $rol,
            ]);
            return Redirect::route('users.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::where('id', $id)->get();
        //echo $user;
        return view('admin.usuarios.editar')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->rol = $request->rol;
        $user->save();
        return Redirect::route('users.index');
        //return 'UPDATE USER';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::findOrFail($id);
        $user->delete();
        return Redirect::route('users.index');
    }

    public function search(Request $request){
        $all = User::where('name', 'like','%'.$request->busqueda.'%')
            ->get();
        return view('admin.usuarios.usuarios')
            ->with('usuarios', $all);
    }

}
