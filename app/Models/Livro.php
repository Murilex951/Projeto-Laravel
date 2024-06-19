<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'titulo', 'subtítulo', 'autor', 'edição', 'editora', 'ano_de_publicação', 'descrição'];
}
