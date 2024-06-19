<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('subtítulo');
            $table->string('autor');
            $table->string('edição');
            $table->string('editora');
            $table->string('ano_de_publicação');
            $table->text('descricao')->nullable();
            $table->timestamps();
        });
    }
    
};