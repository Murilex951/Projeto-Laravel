<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Livro</title>
    <link rel="stylesheet" href="/edit.css">
</head>
<body>
   <center> <h1>Editar Livro</h1> </center>
    <form action="/editar/{{ $livro->id }}" method="POST">
        @csrf
        <div class="flex-container">
    <center><label for="titulo">Título:</label> <br>
            <input type="text" value="{{ $livro->titulo }}" name="titulo" id="titulo" required> <br>         

            <label for="autor">Autor:</label> <br>
            <input type="text" value="{{ $livro->autor }}" name="autor" id="autor" required> <br>

            <label for="ano_de_publicacao">Ano de Publicação:</label> <br>
            <input type="number" value="{{ $livro->ano_de_publicação }}" name="ano_de_publicação" id="ano_de_publicação" required> <br>

            <label for="subtítulo">Subtítulo</label> <br>
            <input type="text" value="{{ $livro->subtítulo }}" name="subtítulo" id="subtítulo" required> <br>

            <label for="edição">Edição</label> <br>
            <input type="text" value="{{ $livro->edição }}" name="edição" id="edição" required> <br>

            <label for="editora">Editora</label> <br>
            <input type="text" value="{{ $livro->editora }}" name="editora" id="editora" required> <br>

            <label for="descrição">Descrição</label> <br>
            <input type="text" value="{{ $livro->descricao }}" name="descricao" id="descrição" required> <br> <br>
 
            <button type="submit">Editar</button> </center>
        </div>
    </form>
</body>
</html>
