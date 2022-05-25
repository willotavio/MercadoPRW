<?php
    class vendas{
        private $codigo, $produto, $quantidade, $funcionario;

        public function getCodigo(){
            return $this->codigo;
        }

        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }


        public function getProduto(){
            return $this->produto;
        }

        public function setProduto($produto){
            $this->produto = $produto;
        }


        public function getQuantidade(){
            return $this->quantidade;
        }

        public function setQuantidade($quantidade){
            $this->quantidade = $quantidade;
        }


        public function getFuncionario(){
            return $this->funcionario;
        }

        public function setFuncionario($funcionario){
            $this->valor = $funcionario;
        }
    }
?>