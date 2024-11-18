<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->nome_completo();
            $table->nome_do_pai();
            $table->nome_da_mae();
            $table->data_de_nascimento();
            $table->num_doc_identificacao();
            $table->data_de_expiracao_documento();
            $table->telefone1();
            $table->telefone2();
            $table->email();
            $table->endereco();
            $table->nacionalidae();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }
};
