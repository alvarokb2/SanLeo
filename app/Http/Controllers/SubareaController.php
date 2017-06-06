<?php

namespace Sanleo\Http\Controllers;

use Illuminate\Http\Request;
use Sanleo\Curso;
use Sanleo\Alumno;
use Sanleo\User;
use Sanleo\Informe;
use Sanleo\Area;
use Sanleo\Subarea;

class SubareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subareas = Subarea::orderBy('name','DESC')->paginate();;
        return view('subareas.index', compact('subareas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subareas.create', compact('subareas'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subarea = new Subarea;
        $subarea->name  = $request->name;
        $subarea->observacion  = $request->observacion;
        $subarea->id_area = $request->id_area;

        $subarea->save();
        return redirect()->route('subareas.index')->with('info', 'Sub area agregada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subarea = Subarea::find($id);
        return view('subareas.show', compact('subareas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subareas = Subarea::find($id);
        return view('subareas.edit', compact('subareas'));
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
        $subarea = Subarea::find($id);

        $subarea->name  = $request->name;
        $subarea->observacion  = $request->obervacion;
        $subarea->id_area = $request->id_area;
        $subarea->save();
        return redirect()->route('subareas.index')->with('message_edit', 'Sub area editada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subarea = Subarea::find($id);
        $subarea->delete();
        return back()->with('message', 'Sub area eliminada exitosamente');
    }
}
