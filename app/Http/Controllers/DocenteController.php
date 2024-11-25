<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\Models\estado_civil;
use App\Models\nacionalidade;
use App\Models\tipo_documento;
use App\Models\genero;
use App\Models\Pessoa;
use App\Models\curso;
use App\Models\naturalidade;
//use App\Models\mgd_tb_docente;
use App\Models\mgd_tb_candidatura;
use App\Models\mgd_tb_formacao_academica;
use App\Models\mgd_tb_outras_experiencia_profissional;
use App\Models\mgd_tb_experiencia_como_docente;
use App\Models\tb_grau_academico;
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
        $data['nacionalidades'] = naturalidade::get();
        $data['tb_grau_academico'] = tb_grau_academico::get();


        //   return Inertia::render('dados_pessoais',$data);
        return response()->json(['data' => $data]);
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

    // EXEMPLO DE CASO DE SUCESSO
    // return response()->json([
    //     'dados' => $request->all()
    // ]);

     try {
        //code...
        $request->validate([
            'data_de_expiracao_documento' => 'required',
            'data_de_nascimento' => 'required',
            'email' => 'required',
            'endereco' => 'required',
            'nome_completo' => 'required',
            'num_doc_identificacao' => 'required',
            'telefone1' => 'required',
            'telefone2' => 'required',
            'fk_estado_civil' => 'required',
            'fk_genero' => 'required',
            'fk_nacionalidade' => 'required',
            'fk_tipo_documento_identificacao' => 'required',
        ]);

        $pessoa = Pessoa::create([
            'data_de_expiracao_documento' => $request->data_de_expiracao_documento,
            'data_de_nascimento' => $request->data_de_nascimento,
            'email' => $request->email,
            'endereco' => $request->endereco,
            'nome_completo' => $request->nome_completo,
            'num_doc_identificacao' => $request->num_doc_identificacao,
            'telefone1' => $request->telefone1,
            'telefone2' => $request->telefone2,
            'fk_estado_civil' => $request->fk_estado_civil,
            'fk_genero' => $request->fk_genero,
            'fk_nacionalidade' => $request->fk_nacionalidade,
            'fk_tipo_documento_identificacao' => $request->fk_tipo_documento_identificacao,

        ]);

        return response()->json([
            'pessoa' => $pessoa,
            'message' => 'Candidato cadastrado com sucesso.',200
        ]);


     } catch (\Throwable $th) {
        //throw $th;
        return response()->json([
            'message' => $th
        ]);
     }

    //  FIM DO EXEMPLO


        try {


            //-----------Instanccia das tabelas----------------
            $pessoa = new Pessoa;
        //    $tab_docente = new mgd_tb_docente;
            $tab_formacao_academica = new mgd_tb_formacao_academica;
            $tab_exp_docente = new mgd_tb_experiencia_como_docente;
            $tab_outras_exp = new mgd_tb_outras_experiencia_profissional;
            $tab_doc_cand_docent = new mgd_tb_documentos_candidatura_docente;

       /*     $verificacao_bi = Pessoa::where('num_doc_identificacao', $request->num_doc_identificacao)->count();
            if($verificacao_bi > 0)
                return response()->json("Esse numero de identificacao ja esta registado, insere um novo numero de identificacao");
          else
            { */
                //----------------Validação dos dados
                $request->validate([

                    'dados.*.instituicao_formacao_academica' => 'required|string|max:255',
                    'dados.*.fk_curso' => 'required|integer|exists:mgd_tb_curso,id', // Exemplo para validação com chave estrangeira
                    'dados.*.fk_grau_academico' => 'required|integer|exists:mgd_tb_grau_academico,id',
                    'dados.*.fk_area_formacao' => 'required|integer|exists:mgd_tb_area_formacao,id',
                    'dados.*.data_conclusao' => 'required|date',
                    'dados.*.fk_tb_candidatura' => 'required|integer|exists:mgd_tb_candidatura,id',
                ]);

                // Recebe o array de dados
                $dados_formacao_academica = $request->input('dados'); // Array de informações do formulário formação academica
/*

                //------------------- Dados Pessoais -----------------------
                $pessoa->nome_completo = $request->nome_completo;
                $pessoa->nome_do_pai = $request->nome_do_pai;
                $pessoa->nome_da_mae = $request->nome_da_mae;
                $pessoa->data_de_nascimento = $request->data_de_nascimento;

                $pessoa->num_doc_identificacao = $request->num_doc_identificacao;
                $pessoa->data_de_expiracao_documento = $request->data_de_expiracao_documento;
                $pessoa->telefone1 = $request->telefone1;
                $pessoa->telefone2 = $request->telefone2;
                $pessoa->email = $request->email;
                $pessoa->endereco = $request->endereco;
                $pessoa->fk_nacionalidade = $request->fk_nacionalidade;
                $pessoa->fk_tipo_documento_identificacao = $request->fk_tipo_documento_identificacao;
                $pessoa->fk_genero = $request->fk_genero;
                $pessoa->fk_estado_civil = $request->fk_estado_civil ;
                $pessoa->fk_naturalidade = $request->fk_naturalidade;
                $pessoa->save();

                 //------------------- Formação academica -----------------------

                $tab_formacao_academica ->instituicao_formacao_academica =$request ->instituicao_formacao_academica;
                $tab_formacao_academica ->fk_curso = $request -> fk_curso;
                $tab_formacao_academica ->fk_grau_academico = $request ->fk_grau_academico;
                $tab_formacao_academica ->fk_area_formacao = $request ->fk_area_formacao;
                $tab_formacao_academica ->data_conclusao = $request ->data_conclusao;
                $tab_formacao_academica ->fk_tb_candidatura = $request->fk_tb_candidatura;
                $tab_formacao_academica->save();
*/
                //---------- Salva cada conjunto de informações --------------------
                foreach ($dados_formacao_academica as $dado) {

                    $tab_formacao_academica->instituicao_formacao_academica = $dado['instituicao_formacao_academica'];
                    $tab_formacao_academica->fk_curso = $dado['fk_curso'];
                    $tab_formacao_academica->fk_grau_academico = $dado['fk_grau_academico'];
                    $tab_formacao_academica->fk_area_formacao = $dado['fk_area_formacao'];
                    $tab_formacao_academica->data_conclusao = $dado['data_conclusao'];
                    $tab_formacao_academica->fk_tb_candidatura = $dado['fk_tb_candidatura'];
                    $tab_formacao_academica->save();
                }

/*
                //------------------- Experiência Profissional docente -----------------------
                $tab_exp_docente -> curso = $request ->curso;
                $tab_exp_docente -> instituicao = $request ->instituicao;
                $tab_exp_docente -> disciplina = $request ->disciplina;
                $tab_exp_docente -> ano_inicio = $request ->ano_inicio;
                $tab_exp_docente -> ano_fim = $request ->ano_fim;
                $tab_exp_docente->save();

                //------------------- Outras Experiência Profissional  -----------------------
                $tab_outras_exp -> instituicao_experiencia = $request ->instituicao_experiencia;
                $tab_outras_exp -> area = $request ->area;
                $tab_outras_exp -> funcao = $request ->funcao;
                $tab_outras_exp -> ano_inicio_exp = $request ->ano_inicio_exp;
                $tab_outras_exp -> ano_fim_exp = $request ->ano_fim_exp;
                $tab_outras_exp->save();

                //------------------- Outras Experiência Profissional  -----------------------
                $tab_doc_cand_docent -> nome_arquivo = $request ->nome_arquivo;
                $tab_doc_cand_docent -> fk_candidato = $request ->fk_candidato;
                $tab_doc_cand_docent -> fk_tipo_documento = $request ->fk_tipo_documento;
                $tab_doc_cand_docent->save();
*/
        //    }

        } catch (\Throwable $th) {
            dd($th->getMessage());
        }

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $candidaturas = mgd_tb_candidatura::findOrFail($id);
        return response()->json($candidaturas);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $pessoa = Pessoa::findOrFail($id);

        return response()->json($pessoa);
        // adicona aqui a rota para a page de edita
        //return view('docente.edit',[ ])


    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {

    /*
        $pessoa = Pessoa::findOrFail($request->id)->where('id', $id)->update($request ->all());
        $formacao_academica = mgd_tb_formacao_academica::findOrFail($request->id)->where('id', $id)->update($request ->all());

        return response()->json($formacao_academica,$pessoa); */

        try {
            // Atualizar na tabela Pessoa
            $pessoa = Pessoa::findOrFail($request->id);
            $pessoa->update($request); // Substitua pelos campos relevantes

            // Atualizar na tabela mgd_tb_formacao_academica
       //     $formacao_academica = mgd_tb_formacao_academica::findOrFail($request->id_formacao);
        //    $formacao_academica->update($request); // Substitua pelos campos relevantes

            // Retornar a resposta JSON
            return response()->json([
                'success' => true,
                'pessoa' => $pessoa
            //    'formacao_academica' => $formacao_academica
            ]);

        } catch (\Exception $e) {

            // Em caso de erro, retornar mensagem
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $pessoa = Pessoa::findOrFail($id)->delete();
        return response()->json($pessoa);


    }
}
