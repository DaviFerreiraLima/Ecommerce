<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="/css/styles.css">
    <script scr="/js/scripts.js"></script>
</head>
<body>
    <div class="titulo">
        <h1>Cadastrar Produto</h1>
    </div>

    <div class="input">
        <form action="/produto/criar" method="POST">
        @csrf
        <label for="nomeDoProduto">Nome</label>
        <input type="text" name="nomeDoProduto" id="" placeholder="Digite o nome do Produto">
        
        <label for="precoDoProduto">Preço</label>
        <input type="number" name="precoDoProduto" id="precoDoProduto" placeholder="Digite o preço">

        <label for="quantidadeDisponivel">Quantidade</label>
        <input type="number" name="quantidadeDisponivel" id="quantidadeDisponivel" placeholder="Digite a quantidade em estoque">

        <label for="categoriaDoProduto">Categoria</label>
        <input type="text" name="categoriaDoProduto" id="categoriaDoProduto" placeholder="Digite a categoria do produto">

        <label for="descricaoDoProduto">Descrição</label>
        <input type="text" name="descricaoDoProduto" id="descricaoDoProduto" placeholder="Digite a descrição do produto">>

        <div>
            <input type="submit" value="Criar Produto">
        </div>
        </form>

    </div>
    

    
</body>
</html>