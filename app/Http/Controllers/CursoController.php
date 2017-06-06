<?php

namespace Sanleo\Http\Controllers;

use Illuminate\Http\Request;

use Sanleo\Curso;
use Sanleo\User;
use Sanleo\Http\Requests\CursoRequest;
use Sanleo\CursoUser;
use Illuminate\Support\Facades\Auth;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::orderBy('id','ASC')->paginate();;

        return view('cursos.index', compact('cursos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create', compact('cursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CursoRequest $request)
    {
        $curso = Curso::create([
            'name' => $request->name
        ]);
        $curso->save();
        $cursouser = CursoUser::create([
            'id_curso' => $curso->id,
            'id_user' => Auth::user()->id,
        ]);
        $cursouser->save();
        return redirect()->route('cursos.index')->with('info', 'Curso agregado exitosamente');
  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cursos = Curso::find($id);
        return view('cursos.show', compact('cursos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cursos = Curso::find($id);
        return view('cursos.edit', compact('cursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CursoRequest $request, $id)
    {
        $curso = Curso::find($id);

        $curso->name  = $request->name;
        $curso->save();
        return redirect()->route('cursos.index')->with('message_edit', 'Curso editado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curso = Curso::find($id);
        $curso->delete();
        return back()->with('message', 'Curso eliminado exitosamente');
    }
}
