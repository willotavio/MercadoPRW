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

    if($botao=='cadastrar'){
        $estoDao->cadastrarEstoque($esto);
    }else if($botao=='consultar'){
        $estoDao->consultarEstoque();
        foreach($estoDao->consultarEstoque() as $res){
            echo $res['codigo_estoque']."<br>";
            echo $res['produto']."<br>";
            echo $res['quantidade']."<br>";
            echo $res['valor_compra']."<br><br>";
          }
        }else if($botao=='atualizar'){
            $estoDao->atualizarEstoque($esto);
        }else if($botao=='deletar'){
            $estoDao->deletarEstoque($codigo);
        }
    
?>