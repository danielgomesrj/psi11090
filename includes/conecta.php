<?php

class ConexaoDB002{
    private $usuario;
    private $senha;
    private $banco;
    private $servidor;
    private static $pdo;
    
    public function __construct(){
        $this->servidor = "xxxxx";
        $this->banco = "xxxxxx";
        $this->usuario = "xxxxxx";
        $this->senha = "xxxxxxxx";
    }
    
    public function conectar(){
        try{
            if(is_null(self::$pdo)){
                self::$pdo = new PDO("sqlsrv:Server=".$this->servidor.";database=".$this->banco, $this->usuario, $this->senha);
            }
            return self::$pdo;
        } catch (PDOException $ex) {
			echo $ex->getMessage();
        }
    }
}
?>