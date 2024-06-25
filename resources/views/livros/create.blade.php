<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Livro</title>
    <link rel="stylesheet" href="/cad-livros.css">
</head>
<body>
    <center>
        <h1>Adicionar Novo Livro</h1>
    </center>

    <form action="{{ route('livros.store') }}" method="POST">
        @csrf
        <div class="flex-container">

        <center>
            <label for="titulo">Título:</label> <br>
            <input type="text" name="titulo" id="titulo" required> <br>        
              

            <label for="autor">Autor:</label> <br> 
            <input type="text" name="autor" id="autor" required> <br>

            <label for="ano_de_publicacao">Ano de Publicação:</label> <br>
            <input type="number" name="ano_de_publicação" id="ano_de_publicação" required> <br>

            <label for="subtítulo">Subtítulo</label> <br> 
            <input type="text" name="subtítulo" id="subtítulo" required> <br>

            <label for="edição">Edição</label> <br>
            <input type="text" name="edição" id="edição" required> <br>

            <label for="editora">Editora</label> <br>
            <input type="text" name="editora" id="editora" required> <br>

            <br>

            <button type="submit">Salvar</button>
        </center> 
        </div>
    </form>
</body>
</html>
