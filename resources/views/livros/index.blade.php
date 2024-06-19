<!DOCTYPE html>
<html>
<head>
    <title>Lista de Livros</title>
</head>
<body>
    <h1>Lista de Livros</h1>
    <a href="{{ route('livros.create') }}">Adicionar Novo Livro</a>
    <ul>
        @foreach($livros as $livro)
            <li>{{ $livro->titulo }} - {{ $livro->autor }}</li>
        @endforeach
    </ul>
</body>
</html>
