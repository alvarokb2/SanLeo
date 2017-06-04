<?php

namespace Sanleo\Http\Controllers;

use Illuminate\Http\Request;
use Sanleo\Curso;
use Sanleo\User;
use Sanleo\Alumno;
use Sanleo\Http\Requests\AlumnoRequest;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::orderBy('id','DESC')->paginate();;
        return view('alumnos.index', compact('alumnos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.create', compact('alumnos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlumnoRequest $request)
    {
        $alumno = new Alumno;
        $alumno->name  = $request->name;
        $alumno->edad  = $request->edad;
        $alumno->fecha_nacimiento  = $request->fecha_nacimiento;
        $alumno->id_curso  = $request->id_curso;
        $alumno->id_apoderado = $request->id_apoderado;
        $alumno->save();
        return redirect()->route('alumnos.index')->with('info', 'Alumno agregado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumnos = Alumno::find($id);
        return view('alumnos.show', compact('alumnos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumnos = Alumno::find($id);
        return view('alumnos.edit', compact('alumnos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AlumnoRequest $request, $id)
    {
        $alumno = Alumno::find($id);

        $alumno->name  = $request->name;
        $alumno->edad  = $request->edad;
        $alumno->fecha_nacimiento  = $request->fecha_nacimiento;
        $alumno->id_curso  = $request->id_curso;
        $alumno->id_apoderado = $request->id_apoderado;
        $alumno->save();
        return redirect()->route('alumnos.index')->with('message_edit', 'Alumno editado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        $alumno->delete();
        return back()->with('message', 'Alumno eliminado exitosamente');
    }
}