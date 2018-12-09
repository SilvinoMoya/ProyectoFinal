<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\projects;
use Auth;

class ProjectsController extends Controller
{
    //
    public function show($id)
    {
        
    }

    public function create()
    {
        return view('projects.create');
    }

    public function vistaProyectos()
    {
        $projects=projects::all();
        return view('projects.vista_proyectos',compact('projects'));
    }

    public function store()
    {
        $project = new projects();
        $project->nombre=request('txtNombre');
        $project->categoria=request('select_categoria');
        $project->tipo_proyecto=request('select_que_necesitas');
        $project->tipo_pago=request('select_pago');
        $project->pago=request('txtPago');
        $project->descripcion=request('txtDescripcion');
        $project->id_usuario=Auth::user()->id;
        $project->save();
        return  redirect('/projects/vistaProyectos');
    }


    public function edit($id)
    {
        $project = projects::find($id);
        return view('projects.editarProject', compact('project'));
    }

    public function vistaProyectosEmpresas()
    {
        $projects=projects::all();
        return view('projects.vistaProyectosEmpresas',compact('projects'));
    }
    
    public function update($id)
    {
        $project=projects::find($id);
        $project->nombre=request('txtNombre');
        $project->categoria=request('select_categoria');
        $project->tipo_proyecto=request('select_que_necesitas');
        $project->tipo_pago=request('select_pago');
        $project->pago=request('txtPago');
        $project->descripcion=request('txtDescripcion');
        $project->status=request('status');
        $project->save();
        return redirect('/projects/vistaProyectos');
    }

    public function destroy($id)
    {
        Project::find($id)->delete();
        return redirect('/projects');
    }
}
