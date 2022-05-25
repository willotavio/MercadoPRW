<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque</title>

    <style>
        <?php include 'style.css'; ?>
    </style>

</head>
<body>
 
    <div>

    <div class=caixa>

    <h1>ESTOQUE</h1>

    <form action='controleestoque.php' method='GET'>
        <p><input type='number' name='codigo' placeholder="Código"></p>
        <p><input type='text' name='produto' placeholder="Produto"></p>
        <p><input type='text' name='quantidade' placeholder="Quantidade"></p>
        <p><input type='text' name='valor' placeholder="Valor"></p>
        <p><input type='submit' name='botao' value='Cadastrar'></p>
        <p><input type='submit' name='botao' value='Atualizar'></p>
        <p><input type='submit' name='botao' value='Deletar'></p>
    </form>

    <form action='controleestoque.php' method='GET'>
        <p><input type='submit' name='botao' value='Consultar'></p>
    </form>

    <form action='index.php'>
        <br><p><input type='submit' value="Voltar"></p>
    </form>

</div>

</div>

</body>
</html>