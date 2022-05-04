<?php
    class estoque{
        private $codigo, $produto, $quantidade, $valor;

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


        public function getValor(){
            return $this->valor;
        }

        public function setValor($valor){
            $this->valor = $valor;
        }
    }
?>