<?php

namespace Sanleo\Http\Controllers;

use Illuminate\Http\Request;
use Sanleo\Curso;
use Sanleo\Alumno;
use Sanleo\User;
use Sanleo\Informe;

class InformeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $informes = Informe::orderBy('periodo','DESC')->paginate();;
        return view('informes.index', compact('informes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('informes.create', compact('informes'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $informe = new Informe;
        $informe->name  = $request->name;
        $informe->save();
        return redirect()->route('informes.index')->with('info', 'Informe agregado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $informes = Informe::find($id);
        return view('informes.show', compact('informes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $informes = Informe::find($id);
        return view('informes.edit', compact('informes'));
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
        $informe = Informe::find($id);

        $informe->name  = $request->name;
        $informe->save();
        return redirect()->route('informes.index')->with('message_edit', 'Informe editado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $informe = Informe::find($id);
        $informe->delete();
        return back()->with('message', 'Informe eliminado exitosamente');
    }
}
