<?php

include_once "conecta.php";

class QuerysDB002 {
    
    private $con;

    
    public function __construct(){
        $this->con = new ConexaoDB002();
    }
    
   

	public function selecionaProdutos(){
		try{
	
			$cst = $this->con->conectar()->prepare("
			
			SELECT NOME, CODIGOPRODUTO
      		FROM [DB_PRODUCAO].[dbo].[PRODUTO] 
	
			;");
			$cst->execute();
			return $cst->fetchAll();
		} catch (PDOException $ex) {
			return 'erro '.$ex->getMessage();
		}
	}




	public function selecionaProdutosCompleto(){
		try{
	
			$codprod= $_REQUEST['codprod'];

			$cst = $this->con->conectar()->prepare("
			
			SELECT

			a.[CODIGOPRODUTO] as CODPROD,
			a.[NOME] as NOMEPROD,
			a.[DESCRICAO] as DESCPROD,
			a.[CATEGORIA] as CATEPROD,
			a.[ATRIBUTO1] as ATR1PROD,
			a.[ATRIBUTO2] as ATR2PROD,
			a.[ATRIBUTO3] as ATR3PROD,
			a.[ATRIBUTO4] as ATR4PROD,
			B.[CODIGOITEM] as CODITEM,
			b.[NOME] as NOMEITEM ,
			b.[DESCRICAO] as DESCITEM,
			b.[CATEGORIA] as CATEITEM,
			b.[ATRIBUTO1] as ATR1ITEM,
			b.[ATRIBUTO2] as ATR2ITEM,
			b.[ATRIBUTO3] as ATR3ITEM,
			b.[ATRIBUTO4] as ATR4ITEM			  
						
			FROM
			
			(
			SELECT [CODIGOPRODUTO]
				  ,[NOME]
				  ,[DESCRICAO]
				  ,[CATEGORIA]
				  ,[ATRIBUTO1]
				  ,[ATRIBUTO2]
				  ,[ATRIBUTO3]
				  ,[ATRIBUTO4]
			  FROM [DB_PRODUCAO].[dbo].[PRODUTO] 
			  )a
			
			  LEFT JOIN
			
			(
			SELECT [CODIGOPRODUTO]
				  ,[CODIGOITEM]
				  ,[NOME]
				  ,[DESCRICAO]
				  ,[CATEGORIA]
				  ,[ATRIBUTO1]
				  ,[ATRIBUTO2]
				  ,[ATRIBUTO3]
				  ,[ATRIBUTO4]
			  FROM [DB_PRODUCAO].[dbo].[ITEM_PRODUTO]
			  
			  ) b
			
			  ON a.[CODIGOPRODUTO] = b.[CODIGOPRODUTO]
			
			
			  WHERE a.CODIGOPRODUTO = '".$codprod."'
	
			;");
			$cst->execute();
			return $cst->fetchAll();
		} catch (PDOException $ex) {
			return 'erro '.$ex->getMessage();
		}
	}
        
}		

?>