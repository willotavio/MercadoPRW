<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionário</title>
  
    <style>
        <?php include 'style.css'; ?>
    </style>

</head>
<body>

    <h1>FUNCIONÁRIO</h1>

    <form action='controle.php' method='GET'>
        <p><input type='number' name='codigo' placeholder="Código"></p>
        <p><input type='text' name='nome' placeholder="Nome"></p>
        <p><input type='text' name='cargo' placeholder="Cargo"></p>
        <p><input type='submit' name='botao' value='Cadastrar'></p>
        <p><input type='submit' name='botao' value='Atualizar'></p>
        <p><input type='submit' name='botao' value='Deletar'></p>
    </form>

    <form action='controle.php' method='GET'>
        <p><input type='number' name='codigo' placeholder="Código"></p>
        <p><input type='submit' name='botao' value='Consultar'></p>
    </form>

    <form action='index.php'>
        <p><input type='submit' value="Voltar"></p>
    </form>

</body>
</html>