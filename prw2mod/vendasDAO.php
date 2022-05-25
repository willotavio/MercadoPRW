<?php
    include 'conexao.php';

    class vendasDao{
        public function cadastrarVendas(Vendas $v){
            $sql = 'insert into vendas (codigo_venda, produto_venda, quantidade_venda, funcionario_venda) values (?,?,?,?)';

            $banco = new conexao();
            $con = $banco->getConexao();
            $resultado = $con->prepare($sql);
            $resultado->bindValue(1, $v->getCodigo());
            $resultado->bindValue(2, $v->getProduto());
            $resultado->bindValue(3, $v->getQuantidade());
            $resultado->bindValue(4, $v->getFuncionario());

            $final = $resultado->execute();

            if($final){
                echo "<script LANGUAGE= 'JavaScript'>
                window.alert('Cadastrado com sucesso');
                window.location.href='indexvendas.php';
                </script>";
            }
        }

        public function atualizarVendas(Vendas $e){
            $sql = 'update vendas set produto_venda=?, quantidade_venda=?, funcionario_venda=? where codigo_venda=?';

            $banco = new conexao();
            $con = $banco->getConexao();
            $resultado = $con->prepare($sql);
            $resultado->bindValue(4, $e->getCodigo());
            $resultado->bindValue(1, $e->getProduto());
            $resultado->bindValue(2, $e->getQuantidade());
            $resultado->bindValue(3, $e->getFuncionario());

            $final = $resultado->execute();

            if($final){
                echo "<script LANGUAGE= 'JavaScript'>
                window.alert('Atualizado com sucesso');
                window.location.href='indexvendas.php';
                </script>";
            }
        }

        public function deletarVendas($codigo){
            $sql = 'delete from vendas where codigo_vendas=?';

            $banco = new conexao();
            $con = $banco->getConexao();
            $resultado = $con->prepare($sql);
            $resultado->bindValue(1, $codigo);
            
            $final = $resultado->execute();

            if($final){
                echo "<script LANGUAGE= 'JavaScript'>
                window.alert('Deletado com sucesso');
                window.location.href='indexvendas.php';
                </script>";
            }
        }

        public function consultarEstoque(){
            $sql = 'select * from vendas';

            $banco = new conexao();
            $con = $banco->getConexao();
            $resultado = $con->prepare($sql);
            $resultado->execute();
            if($resultado->rowCount()>0){
                $valor = $resultado->fetchAll(\PDO::FETCH_ASSOC);
                return $valor;
            }
        }

    }
?>