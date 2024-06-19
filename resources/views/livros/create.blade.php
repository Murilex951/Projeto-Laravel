<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Livro</title>
</head>
<body>
    <h1>Adicionar Novo Livro</h1>
    <form action="{{ route('livros.store') }}" method="POST">
        @csrf
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" required>
        <label for="autor">Autor:</label>
        <input type="text" name="autor" id="autor" required>
        <label for="ano_de_publicacao">Ano de Publicação:</label>
        <input type="number" name="ano_de_publicação" id="ano_de_publicação" required>
        <label for="subtítulo">Subtítulo</label>
        <input type="text" name="subtítulo" id="subtítulo" required>
        <label for="edição">Edição</label>
        <input type="text" name="edição" id="edição" required>
        <label for="editora">Editora</label>
        <input type="text" name="editora" id="editora" required>
        <label for="descrição">Descrição</label>
        <input type="text" name="descricao" id="descrição" required>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
