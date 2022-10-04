



    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <thead>
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
                            
                            <button type="submit">Excluir</button>
                        </form>
                        <a href="/produto/editar/{{ $l->id }}">editar</a>
                    </td>
                </tr>               
            @endforeach
        </tbody>
    </body>
    </html>