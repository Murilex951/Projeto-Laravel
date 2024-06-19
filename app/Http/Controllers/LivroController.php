<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index()
    {
        $livros = Livro::all();
        return view('livros.index', compact('livros'));
    }

    public function create()
    {
        return view('livros.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'subtítulo'=> 'required',
            'autor' => 'required',
            'edição' => 'required',
            'editora' => 'required',
            'ano_de_publicação' => 'required',
            'descricao' => 'required'
        ]);

        Livro::create($request->all());

        return redirect()->route('livros.index')->with('success', 'Livro criado com sucesso.');
    }

    
}
