<?php

    include_once ("includes/funcoes.php");
    $buscadados = new QuerysDB002();

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">

    <title>Produção Temática - PSI 11090 - Questão 3</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>

<br>
 
    <center>

    <h2 class="mt-4">Produção Temática - PSI 11090 - Questão 3</h2><br><br>


        <div class="container-fluid"></center>

                <br>

                <form method="POST" style="font-size:20px;" enctype="multipart/form-data" action="resultado.php" >
                <center>
                <div class="form-group">

                
                <label style="margin-bottom:25px;">Saiba mais sobre os Produtos Caixa</label>
                <select class="form-control" name="codprod" style="width:200px;" >
                <option>Selecione</option>

                <?php foreach($buscadados->selecionaProdutos() as $row1){ ?>


                <option value="<?php echo $row1['CODIGOPRODUTO']; ?>"><?php echo $row1['NOME']; ?></option>
                <?php } ?>

                
          
                </select>
                </div>
               
          
                </div> 
                    <br>

                    <div>
                    <button type="submit" class="btn btn-info">Buscar</button>
                    </div>
                    </center>
                </form>
              
</body>
</html>