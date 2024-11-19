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
            $table->string('nome_completo');
            $table->string('nome_do_pai');
            $table->string('nome_da_mae');
            $table->date('data_de_nascimento');
            $table->string('num_doc_identificacao');
            $table->date('data_de_expiracao_documento');
            $table->string('telefone1');
            $table->string('telefone2');
            $table->string('email');
            $table->string('endereco');
            $table->string('nacionalidae');
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
