<?php

namespace App\Http\Controllers;

use App\Curso;
use Illuminate\Support\Facades\Input;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::orderBy('created_at', 'desc')->paginate(10);
        return view('cursos.index')->with('cursos', $cursos);
    }

    public function export()
    {
        $cursos = Curso::orderBy('created_at', 'desc')->paginate(10);
        return \PDF::loadView('cursos.pdf', compact('cursos'))->download('relatorio.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }


    
    public function validation()
    {
        if(!Input::get('id_curso') ||!Input::get('name')){
            return false;
        }
        return true;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        if($this->validation()){
            $curso = new Curso;
            $curso->id_curso = Input::get('id_curso');
            $curso->name = Input::get('nome');
            $curso->save();
            return redirect()->route('cursos.index')->with('message', 'Curso cadastrado com sucesso');
        } else {
            return redirect()->route('cursos.create')->with('message', 'Existem erros no formulário');
        }
    }


    /**
     * Display the specified resource.
     *
     */
    public function show($id)
    {
        $curso = Curso::find($id);
        //Show the form for editing the specified resource.
        return view('cursos.show')->with('curso', $curso);
    }
    /**
     
     */
    public function edit($id)
    {
        $curso = Curso::findOrFail($id);
        return view('cursos.edit',compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $curso = Curso::findOrFail($id);

        if($this->validation()){
           $curso->id_curso = Input::get('id_curso');
           $curso->name = Input::get('name');
           $curso->save();
           return redirect()->route('cursos.index')->with('message', 'Curso alterado com sucesso');
        } else {
           return view('cursos.edit', compact('curso'))->with('message', 'Existem erros no formulário');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();
        return redirect()->route('cursos.index')->with('alert-sucess','Curso excluído!');
    }
}
