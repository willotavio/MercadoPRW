<?php
class conexao{
 
    public static $instancia;

    public static function getConexao(){
        if(!isset(self::$instancia)){
            self::$instancia = new PDO('mysql:host=localhost;port=3308;dbname=mercado; chartset=utf8', 'root', '');
            return self::$instancia;
        } else{
            return self::$instancia;
        }
    }
}

?>