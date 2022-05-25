<?php
    $codigo = filter_input(INPUT_GET,'codigo');
    $produto =  filter_input(INPUT_GET,'produto');
    $quantidade =  filter_input(INPUT_GET,'quantidade');
    $funcionario =  filter_input(INPUT_GET,'funcionario');
    $botao =  filter_input(INPUT_GET,'botao');

    include 'vendas.php';
    $ven = new vendas();
    
    $ven->setCodigo($codigo);
    $ven->setProduto($produto);
    $ven->setQuantidade($quantidade);
    $ven->setFuncionario($funcionario);

    include 'vendasDAO.php';
    $vendasDao = new vendasDao();

    if($botao=='Cadastrar'){
        $vendasDao->cadastrarvendas($ven);
    }else if($botao=='Consultar'){
        $vendasDao->consultarVendas();
        foreach($vendasDao->consultarVendas() as $res){
           
            echo $res['codigo_venda']."<br>";
            echo $res['produto_venda']."<br>";
            echo $res['quantidade_venda']."<br>";
            echo $res['funcionario_venda']."<br><br>";
          
        }
        }else if($botao=='Atualizar'){
            $vendasDao->atualizarVendas($ven);
        }else if($botao=='Deletar'){
            $vendasDao->deletarVendas($codigo);
        }
    
?>