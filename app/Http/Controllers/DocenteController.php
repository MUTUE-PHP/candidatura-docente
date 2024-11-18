<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\Models\estado_civil;
use App\Models\nacionalidade;
use App\Models\tipo_documento;
use App\Models\genero;
use App\Models\Pessoa;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $data['dados_nacionalidade'] = nacionalidade::get();
        $data['tipo_documentos'] = tipo_documento::get();
        $data['genero'] = genero::get();
        $data['estado_civil'] = estado_civil::get();
        return Inertia::render('dados_pessoais',$data);

    }

    /**
     * Show the form for creating a new resource.
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
        $collect_pessoa = collect($request);
        try {
            $pessoa = Pessoa::create($collect_pessoa->except('id')->toArray());

            //code...
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }
        //Criar a pessoa com todos os dados colecionados


    }

    /**
     * Display the specified resource.
     */
    public function show(Docente $docente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Docente $docente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Docente $docente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Docente $docente)
    {
        //
    }
}
