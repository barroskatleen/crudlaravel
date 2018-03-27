<?php

namespace App\Http\Controllers;

use App\Professor;
use Illuminate\Support\Facades\Input;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professores = Professor::orderBy('created_at', 'desc')->paginate(10);
        return view('professores.index')->with('professores', $professores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('professores.create');
    }


    public function validation()
    {
        if(!Input::get('id_professor') || !Input::get('name')  || !Input::get('data_nascimento')){
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
            $professor = new Professor;
            $professor->id_professor = Input::get('id_professor');
            $professor->name = Input::get('name');
            $professor->data_nascimento = Input::get('data_nascimento');
            $professor->save();
            return redirect()->route('professores.index')->with('message', 'Professor cadastrado com sucesso');
        } else {
            return redirect()->route('professores.create')->with('message', 'Existem erros no formulário');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $professor = Professor::find($id);
        //Show the form for editing the specified resource.
        return view('professores.show')->with('professor', $professor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $professor = Professor::findOrFail($id);
        return view('professores.edit',compact('professor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $professor = Professor::findOrFail($id);
        $professor->id_professor = Input::get('id_professor');
        $professor->name = Input::get('name');
        $professor->data_nascimento = Input::get('data_nascimento');
        
        if($this->validation()){
            $professor->save();
            return redirect()->route('professores.index')->with('message', 'Professor alterado com sucesso');
        } else {
            return view('professores.edit',compact('professor'))->with('message', 'Existem erros no formulário');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $professor = Professor::findOrFail($id);
        $professor->delete();
        return redirect()->route('professores.index')->with('alert-sucess','Professor excluído!');
    }
}
