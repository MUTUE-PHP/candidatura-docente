<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    /**
     * Exibindo dados da tabela
     */
    public function index()
    {
        //
        $data['dados_pessoa'] = Pessoa::all();
        return inertia('teste_pessoa', $data);
    }

    /**
     * Adicionando dados na tabela pessoa
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // $pessoa = new Pessoa ;

       $name = $request->nome_completo;

        return response()->json(['Nome Enviado'=>$name],200);

    }

    /**
     * Display the specified resource.
     */
    public function show(Pessoa $pessoa)
    {
        //
    }

    /**
     * Editar dados da tabela pessoa .
     */
    public function edit(Pessoa $pessoa)
    {
        //
    }

    /**
     * Actualizando dados da tabela Pessoa.
     */
    public function update(Request $request, Pessoa $pessoa)
    {
        //
    }

    /**
     * Apagar dados da tabela n atabela pessoa
     */
    public function destroy(Pessoa $pessoa)
    {
        //
    }
}
