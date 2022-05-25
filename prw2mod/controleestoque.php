<?php
    $codigo = filter_input(INPUT_GET,'codigo');
    $produto =  filter_input(INPUT_GET,'produto');
    $quantidade =  filter_input(INPUT_GET,'quantidade');
    $valor =  filter_input(INPUT_GET,'valor');
    $botao =  filter_input(INPUT_GET,'botao');

    include 'estoque.php';
    $esto = new estoque();
    
    $esto->setCodigo($codigo);
    $esto->setProduto($produto);
    $esto->setQuantidade($quantidade);
    $esto->setValor($valor);

    include 'estoqueDAO.php';
    $estoDao = new estoqueDao();

    if($botao=='Cadastrar'){
        $estoDao->cadastrarEstoque($esto);
    }else if($botao=='Consultar'){
        $estoDao->consultarEstoque();
        foreach($estoDao->consultarEstoque() as $res){
            
            ?>
            <form action='controleestoque.php' method='GET'>
            <p><?php echo $res['codigo_estoque'] ?></p>
            <p><input type='text' value='<?php echo $res['produto'] ?>'></p>
            <p><input type='text' value='<?php echo $res['quantidade'] ?>'></p>
            <p><input type='text' value='<?php echo $res['valor_compra'] ?>'></p>
            <p><input type='submit' name='botao' value='Atualizar'></p>
            <p><input type='submit' name='botao' value='Deletar'></p>
            </form>
        <?php

          }
        }else if($botao=='Atualizar'){
            $estoDao->atualizarEstoque($esto);
        }else if($botao=='Deletar'){
            $estoDao->deletarEstoque($codigo);
        }
    
?>