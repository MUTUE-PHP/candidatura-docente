<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\Models\estado_civil;
use App\Models\nacionalidade;
use App\Models\tipo_documento;
use App\Models\genero;
use App\Models\Pessoa;
use App\Models\curso;
use App\Models\mgd_tb_formacao_academica;
use App\Models\mgd_tb_outras_experiencia_profissional;
use App\Models\mgd_tb_experiencia_como_docente;
use App\Models\nivel_academico;
use App\Models\mgd_tb_documentos_candidatura_docente;
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

        $data['nacionalidade'] = nacionalidade::get();
        $data['tipo_documentos'] = tipo_documento::get();
        $data['generos'] = genero::get();
        $data['estado_civil'] = estado_civil::get();
        $data['cursos'] = curso::get();
        $data['nivel_academico'] = nivel_academico::get();


     //   return Inertia::render('dados_pessoais',$data);
        return response()->json(['data'=>$data]);

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
      //  $collect_pessoa = collect($request);

      try {
             //-----------------inserindo dados na tabela pessoa na base de dados ----------------
            $pessoa = Pessoa::create([
                'nome_completo' =>$request->nome_completo,
                'nome_do_pai' =>$request->nome_do_pai,
                'nome_da_mae' =>$request->nome_da_mae,
                'data_de_nascimento' =>$request->data_de_nascimento,
                'num_doc_identificacao' =>$request->num_doc_identificacao,
                'data_de_expiracao_documento' =>$request->data_de_expiracao_documento,
                'telefone1' =>$request->telefone1,
                'telefone2' =>$request->telefone2,
                'email' =>$request->email,
                'endereco' =>$request->endereco,
                'nacionalidade' =>$request->nacionalidade,
                'tipo_documentacao' =>$request->tipo_documentacao,
                'genero' =>$request->genero,
                'estado_civil' =>$request->estado_civil,
                'updated_at' =>$request->updated_at,
                'created_at' =>$request->created_at,

            ]);

             //-----------------inserindo dados na tabela formação academica  na base de dados----------------
            $mgd_tb_formacao_academica = mgd_tb_formacao_academica::create([
                'instituicao_formacao_academica' =>$request->instituicao_formacao_academica,
                'fk_curso' =>$request->fk_curso,
                'fk_nivel_academico' =>$request->fk_nivel_academico,
                'data_conclusao' =>$request->data_conclusao,

            ]);

            //-----------------inserindo dados na tabela Outras experiencias profissionais  na base de dados----------------
            $mgd_tb_outras_experiencia_profissional = mgd_tb_outras_experiencia_profissional::create([
                'curso_experiencia' =>$request->curso_experiencia,
                'disciplina_experiencia' =>$request->disciplina_experiencia,
                'instituicao_experiencia' =>$request->instituicao_experiencia,
                'ano_inicio_exp' =>$request->ano_inicio_exp,
                'ano_fim_exp' =>$request->ano_fim_exp,

            ]);

            //-----------------inserindo dados na tabela Outras experiencias como docente  na base de dados----------------
            $mgd_tb_experiencia_como_docente = mgd_tb_experiencia_como_docente::create([
                'titulo' =>$request->titulo,
                'curso' =>$request->curso,
                'instituicao' =>$request->instituicao,
                'disciplina' =>$request->disciplina,
                'ano_inicio' =>$request->ano_inicio,
                'ano_fim' =>$request->ano_fim,

            ]);

            //-----------------inserindo dados na tabeladocumentos na base de dados----------------
            $mgd_tb_documentos_candidatura_docente =mgd_tb_documentos_candidatura_docente ::create([
                ''


            ]);




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
