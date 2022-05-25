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
           
           ?>
            <form action='controlevendas.php' method='GET'>
            <p><?php echo $res['codigo_vendas'] ?></p>
            <p><input type='text' value='<?php echo $res['produto_venda'] ?>'></p>
            <p><input type='text' value='<?php echo $res['quantidade_venda'] ?>'></p>
            <p><input type='text' value='<?php echo $res['funcionario_compra'] ?>'></p>
            <p><input type='submit' name='botao' value='Atualizar'></p>
            <p><input type='submit' name='botao' value='Deletar'></p>
            </form>
        <?php
          
        }
        }else if($botao=='Atualizar'){
            $vendasDao->atualizarVendas($ven);
        }else if($botao=='Deletar'){
            $vendasDao->deletarVendas($codigo);
        }
    
?>