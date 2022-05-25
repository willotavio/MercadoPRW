<?php
    $codigo = filter_input(INPUT_GET,'codigo');
    $nome =  filter_input(INPUT_GET,'nome');
    $cargo =  filter_input(INPUT_GET,'cargo');
    $botao =  filter_input(INPUT_GET,'botao');

    include 'funcionario.php';
    $func = new funcionario();
    
    $func->setCodigo($codigo);
    $func->setNome($nome);
    $func->setCargo($cargo);

    include 'funcionarioDAO.php';
    $funcDao = new funcionarioDao();

    if($botao=='Cadastrar'){
        $funcDao->cadastrarFuncionario($func);
    }else if($botao=='Consultar'){
        $funcDao->consultarFuncionario();
        foreach($funcDao->consultarFuncionario() as $res){
            ?>
            <form action='controlefuncionario.php' method='GET'>
            <p><?php echo $res['codigo_funcionario'] ?></p>
            <p><input type='text' value='<?php echo $res['nome'] ?>'></p>
            <p><input type='text' value='<?php echo $res['cargo'] ?>'></p>
            <p><input type='submit' name='botao' value='Atualizar'></p>
            <p><input type='submit' name='botao' value='Deletar'></p>
            </form>
        <?php
        }
        }else if($botao=='Atualizar'){
            $funcDao->atualizarFuncionario($func);
        }else if($botao=='Deletar'){
            $funcDao->deletarFuncionario($codigo);
        }
    
?>