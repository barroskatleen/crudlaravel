<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Support\Facades\Input;

class AlunoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * mostra todos os alunos
     */
    public function index()
    {
        $alunos = Aluno::orderBy('created_at', 'desc')->paginate(10);
        return view('alunos.index')->with('alunos', $alunos);
    }

    public function export()
    {
        $alunos = Aluno::orderBy('created_at', 'desc')->paginate(10);
        return \PDF::loadView('alunos.pdf', compact('alunos'))->download('relatorio.pdf');
    }

    /**
     * Mostrar o formulário para criar um novo recurso. 
     */
    public function create()
    {
        return view('alunos.create');
    }


    public function validation()
    {
        if(!Input::get('id_aluno') ||!Input::get('name')  ||!Input::get('data_nascimento')  ||!Input::get('logradouro')  ||!Input::get('numero') ||!Input::get('bairro')  ||!Input::get('cidade')  ||!Input::get('estado')  ||!Input::get('cep')){
            return false;
        }
        
        return true;
    }

    /**
     * Guarda as informações dos alunos.
     */
    public function store()
    {
        if($this->validation()){
            $aluno = new Aluno;
            $aluno->id_aluno = Input::get('id_aluno');
            $aluno->name = Input::get('name');
            $aluno->data_nascimento = Input::get('data_nascimento');
            $aluno->logradouro = Input::get('logradouro');
            $aluno->numero = Input::get('numero');
            $aluno->bairro = Input::get('bairro');
            $aluno->cidade = Input::get('cidade');
            $aluno->estado = Input::get('estado');
            $aluno->cep = Input::get('cep');
            $aluno->save();
            return redirect()->route('alunos.index')->with('message', 'Aluno cadastrado com sucesso');
        } else {
            return redirect()->route('alunos.create')->with('message', 'Existem erros no formulário');
        }
    }

    /**
     * Exibir a informação do aluno.
     */
    public function show($id)
    {
        //get the aluno

        $aluno = Aluno::find($id);

        // show the view and pass the aluno to it
        return view('alunos.show')->with('aluno', $aluno);
    }

    /**
     * Editar o formulário.
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.edit',compact('aluno'));
    }

    /**
     * Atualizar cadastro.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->id_aluno = Input::get('id_aluno');
        $aluno->name = Input::get('name');
        $aluno->data_nascimento = Input::get('data_nascimento');
        $aluno->logradouro = Input::get('logradouro');
        $aluno->numero = Input::get('numero');
        $aluno->bairro = Input::get('bairro');
        $aluno->cidade = Input::get('cidade');
        $aluno->estado = Input::get('estado');
        $aluno->cep = Input::get('cep');

        if($this->validation()){
            $aluno->save();
            return redirect()->route('alunos.index')->with('message', 'Aluno alterar com sucesso');
        } else {
            return view('alunos.edit',compact('aluno'))->with('message', 'Existem erros no formulário');
        }
}
    /**
     * Excluir cadastro.
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();
        return redirect()->route('alunos.index')->with('alert-sucess','Aluno excluído!');
    }
}
