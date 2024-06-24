<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Livro</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    <h1>Adicionar Novo Livro</h1>
    <form action="/editar/{{ $livro->id }}" method="POST">
        @csrf
        <div class="flex-container">
            <label for="titulo">Título:</label> 
            <input type="text" value="{{ $livro->titulo }}" name="titulo" id="titulo" required>          

            <label for="autor">Autor:</label>
            <input type="text" value="{{ $livro->autor }}" name="autor" id="autor" required>

            <label for="ano_de_publicacao">Ano de Publicação:</label>
            <input type="number" value="{{ $livro->ano_de_publicação }}" name="ano_de_publicação" id="ano_de_publicação" required>

            <label for="subtítulo">Subtítulo</label>
            <input type="text" value="{{ $livro->subtítulo }}" name="subtítulo" id="subtítulo" required>

            <label for="edição">Edição</label>
            <input type="text" value="{{ $livro->edição }}" name="edição" id="edição" required>

            <label for="editora">Editora</label>
            <input type="text" value="{{ $livro->editora }}" name="editora" id="editora" required>

            <label for="descrição">Descrição</label>
            <input type="text" value="{{ $livro->descricao }}" name="descricao" id="descrição" required>

            <button type="submit">Editar</button>
        </div>
    </form>
</body>
</html>
