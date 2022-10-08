<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>
    <!-- <link rel="stylesheet" href="/resources/css/applistagem.css"> -->
    <link rel="stylesheet" href="/css/applistagem.css">
</head>
<div class="rigth-tabela">
<body>
    <div class="btm-func">
    <form action="/produto/cadastrar">
        <button type="submit" class="btm" href="/produto/cadastrar">Criar Produto</button>
    </form>
    <form action="/">
        <button type="submit" class="btm" href="/">Página Inicial</button>
    </form>
</div>
    <div class="center-box">
    <table style="margin-top:10px; width:100%; border:1px solid black;">

    <tr style="font-weight:900;">
            <td>Nome</td>
            <td>Descrição</td>
            <td>Categoria</td>
            <td>Quantidade</td>
            <td>Preço</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($lista as $l)
            <tr>
                <td> {{$l->nomeDoProduto}}</td>
                <td> {{$l->descricaoDoProduto}}</td>
                <td> {{$l->categoriaDoProduto}}</td>
                <td> {{$l->quantidadeDisponivel}}</td>
                <td> {{$l->precoDoProduto}}</td>
                <td>
                    <form action="/produto/excluir/{{ $l->id }}" method="POST">
                        @csrf

                        <button class="btm" type="submit">Excluir</button>
                    </form>
                    <button class="btm" href="/produto/editar/{{ $l->id }}">editar</button>
            
                </td>
            </tr>
        @endforeach

    </table>
        
    </tbody>
</body>
</div>
</div>
</html>