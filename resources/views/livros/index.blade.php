<!DOCTYPE html>
<html>
<head>
    <title>Lista de Livros</title>
    <link rel="stylesheet" href="lista.css">
</head>
<body> <center>
    <h1>Lista de Livros</h1>
    <button><a href="{{ route('livros.create') }}">Adicionar Novo Livro</a></button>
    <ul>
        @foreach($livros as $livro)
            <li>Livro: {{ $livro->titulo }} <br>
                Subtítulo: {{ $livro->subtítulo }} <br>
                Autor: {{ $livro->autor}} <br> 
                Edição: {{$livro->edição}} <br>
                Editora: {{$livro->editora}} <br>
                Ano de Publicação: {{$livro->ano_de_publicação}} <br> <br>
                
                <button>
                    <a href="/deletar/{{ $livro->id }}">Deletar Livro</a>
                </button>
                <button>
                    <a href="/editar/{{ $livro->id }}">Editar Livro</a>
                </button>
            </li>
            
        @endforeach
     </ul> </center>
</body>
</html>
