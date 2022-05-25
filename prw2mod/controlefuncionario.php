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
            echo $res['codigo_funcionario']."<br>";
            echo $res['nome']."<br>";
            echo $res['cargo']."<br><br>";
          }
        }else if($botao=='Atualizar'){
            $funcDao->atualizarFuncionario($func);
        }else if($botao=='Deletar'){
            $funcDao->deletarFuncionario($codigo);
        }
    
?>