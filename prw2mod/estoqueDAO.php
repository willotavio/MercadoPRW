<?php
    include 'conexao.php';

    class estoqueDao{
        public function cadastrarEstoque(Estoque $e){
            $sql = 'insert into estoque (codigo_estoque, produto, quantidade, valor_compra) values (?,?,?,?)';

            $banco = new conexao();
            $con = $banco->getConexao();
            $resultado = $con->prepare($sql);
            $resultado->bindValue(1, $e->getCodigo());
            $resultado->bindValue(2, $e->getProduto());
            $resultado->bindValue(3, $e->getQuantidade());
            $resultado->bindValue(4, $e->getValor());

            $final = $resultado->execute();

            if($final){
                echo "<script LANGUAGE= 'JavaScript'>
                window.alert('Cadastrado com sucesso');
                window.location.href='indexestoque.php';
                </script>";
            }
        }

        public function atualizarEstoque(Estoque $e){
            $sql = 'update estoque set produto=?, quantidade=?, valor_compra=? where codigo_estoque=?';

            $banco = new conexao();
            $con = $banco->getConexao();
            $resultado = $con->prepare($sql);
            $resultado->bindValue(4, $e->getCodigo());
            $resultado->bindValue(1, $e->getProduto());
            $resultado->bindValue(2, $e->getQuantidade());
            $resultado->bindValue(3, $e->getValor());

            $final = $resultado->execute();

            if($final){
                echo "<script LANGUAGE= 'JavaScript'>
                window.alert('Atualizado com sucesso');
                window.location.href='indexestoque.php';
                </script>";
            }
        }

        public function deletarEstoque($codigo){
            $sql = 'delete from estoque where codigo_estoque=?';

            $banco = new conexao();
            $con = $banco->getConexao();
            $resultado = $con->prepare($sql);
            $resultado->bindValue(1, $codigo);
            
            $final = $resultado->execute();

            if($final){
                echo "<script LANGUAGE= 'JavaScript'>
                window.alert('Deletado com sucesso');
                window.location.href='indexestoque.php';
                </script>";
            }
        }

        public function consultarEstoque(){
            $sql = 'select * from estoque';

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