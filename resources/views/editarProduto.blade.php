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
        <h1>Editar Produto: {{$produto->nomeDoProduto}}</h1>
    </div>

    <div class="input">
        <form action="/produto/atualizar/{{$produto->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="nomeDoProduto">Nome</label>
        <input type="text" name="nomeDoProduto" id="" placeholder="Digite o nome do Produto" value={{$produto->nomeDoProduto}}>
        
        <label for="precoDoProduto">Preço</label>
        <input type="number" name="precoDoProduto" id="precoDoProduto" placeholder="Digite o preço" value={{$produto->precoDoProduto}}>

        <label for="quantidadeDisponivel">Quantidade</label>
        <input type="number" name="quantidadeDisponivel" id="quantidadeDisponivel" placeholder="Digite a quantidade em estoque" value={{$produto->quantidadeDisponivel}}>

        <label for="categoriaDoProduto">Categoria</label>
        <input type="text" name="categoriaDoProduto" id="categoriaDoProduto" placeholder="Digite a categoria do produto" value={{$produto->categoriaDoProduto}}>

        <label for="descricaoDoProduto">Descrição</label>
        <input type="text" name="descricaoDoProduto" id="descricaoDoProduto" placeholder="Digite a descrição do produto"value={{$produto->descricaoDoProduto}}>

        <div>
            <input type="submit" value="Atualizar Produto">
        </div>
        </form>

    </div>
    

    
</body>
</html>