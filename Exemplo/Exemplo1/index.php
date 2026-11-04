<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: lightblue;">

    <header class="cabecalho">
        <h1>Cadastro de Produtos</h1>
    </header>

    <div class="formulario">
        <form action="processa.php" method="post">

            <label for="nome">Nome</label>
            <input type="text" required name="nome" id="nome">

            <label for="preco">Preço</label>
            <input type="number" step="0.01" min="0" required name="preco" id="preco">

            <label for="quantidade">Quantidade</label>
            <input type="number" min="1" required name="quantidade" id="quantidade">

            <button type="submit">Enviar</button>

        </form>
    </div>

</body>
</html>
