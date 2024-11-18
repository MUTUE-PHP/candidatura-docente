<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;


    protected $fillable = [

        'nome_completo',
        'nome_do_pai',
        'nome_da_mae',
        'data_de_nascimento',
        'num_doc_identificacao',
        'data_de_expiracao_documento',
        'telefone1',
        'telefone2',
        'email',
        'endereco',
        'nacionalidade',
        'tipo_documentacao',
        'genero',
        'estado_civil'

    ];
}
