<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionário</title>
</head>
<body>
    <form action='controle.php' method='GET'>
        <p><input type='number' name='codigo' placeholder="Código"></p>
        <p><input type='text' name='nome' placeholder="Nome"></p>
        <p><input type='text' name='cargo' placeholder="Cargo"></p>
        <p><input type='submit' name='botao' value='cadastrar'></p>
        <p><input type='submit' name='botao' value='atualizar'></p>
        <p><input type='submit' name='botao' value='deletar'></p>
    </form>

    <form action='controle.php' method='GET'>
        <p><input type='number' name='codigo' placeholder="Código"></p>
        <p><input type='submit' name='botao' value='consultar'></p>
    </form>

</body>
</html>