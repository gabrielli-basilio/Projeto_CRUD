<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Produto</title>
</head>
<body>
    <form action=" {{ route('prdutos.store') }}" method="POST">
        @csrf

        <!-- NOME -->
         <label for="nome">Nome: </label>
         <input type="text" form="nome" name='nome' required>

        <!-- PREÇO -->
         <label for="preco">Nome: </label>
         <input type="number" form="preco" name='nome' required>

        <!-- CATEGORIAS -->
        <label for="categoria">Categoria: </label>
        <select name="categoria" required>
            <option value="{{ $categoria->id }}"> {{$categoria->nome}}</option>
            @endforeach
        </select>
         


    </form>
</body>
</html>