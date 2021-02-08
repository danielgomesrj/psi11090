<?php

    include_once ("includes/funcoes.php");
    $buscadados = new QuerysDB002();
    $codprod= $_REQUEST['codprod'];
    

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

 <center><div style="margin-top:100px;"><h2 class="mt-4" >Produto</h2></center></div>
  <table class="table" style="margin-top:30px;">
  <thead class="thead-light">
    <tr>
      <th style="text-align:center;">Nome do Produto</th>
      <th style="text-align:center;">Descrição</th>
      <th style="text-align:center;"><center>Categoria<center></th>
      <th style="text-align:center;"><center>Atributo 1 do Produto<center></th>
      <th style="text-align:center;"><center>Atributo 2 do Produto<center></th>
      <th style="text-align:center;"><center>Atributo 3 do Produto<center></th>
      <th style="text-align:center;"><center>Atributo 4 do Produto<center></th>
    </tr>
  </thead>
  
  
  <tbody id="myTable">

<?php 
$i = 0;
foreach($buscadados->selecionaProdutosCompleto() as $row2){ 
if(++$i > 1) break;

    ?>
    <tr>
      <td style="width:130px;text-align:center;vertical-align:middle;"><?php echo $row2['NOMEPROD'];?></td>
      <td style="width:130px;text-align:center;vertical-align:middle;"><?php echo $row2['DESCPROD'];?></td>
      <td style="width:130px;text-align:center;vertical-align:middle;"><?php echo $row2['CATEPROD'];?></td>
      <td style="width:130px;text-align:center;vertical-align:middle;"><?php echo $row2['ATR1PROD'];?></td>
      <td style="width:130px;text-align:center;vertical-align:middle;"><?php echo $row2['ATR2PROD'];?></td>
      <td style="width:130px;text-align:center;vertical-align:middle;"><?php echo $row2['ATR3PROD'];?></td>
      <td style="width:130px;text-align:center;vertical-align:middle;"><?php echo $row2['ATR4PROD'];?></td>

     		<?php } ?>
    </tr>
</tbody>
</table>




<center><div style="margin-top:100px;"><h2 class="mt-4" >Itens do Produto</h2></center></div>
  <table class="table" style="margin-top:30px;margin-bottom:200px;">
  <thead class="thead-light">
    <tr>
      <th style="text-align:center;">Nome do Item</th>
      <th style="text-align:center;">Descrição</th>
      <th style="text-align:center;"><center>Categoria<center></th>
      <th style="text-align:center;"><center>Atributo 1 do Item<center></th>
      <th style="text-align:center;"><center>Atributo 2 do Item<center></th>
      <th style="text-align:center;"><center>Atributo 3 do Item<center></th>
      <th style="text-align:center;"><center>Atributo 4 do Item<center></th>
    </tr>
  </thead>
  
  
  <tbody id="myTable">

<?php foreach($buscadados->selecionaProdutosCompleto() as $row2){ ?>
    <tr>
      <td style="width:130px;text-align:center;vertical-align:middle;"><?php echo $row2['NOMEITEM'];?></td>
      <td style="width:130px;text-align:center;vertical-align:middle;"><?php echo $row2['DESCITEM'];?></td>
      <td style="width:130px;text-align:center;vertical-align:middle;"><?php echo $row2['CATEITEM'];?></td>
      <td style="width:130px;text-align:center;vertical-align:middle;"><?php echo $row2['ATR1ITEM'];?></td>
      <td style="width:130px;text-align:center;vertical-align:middle;"><?php echo $row2['ATR2ITEM'];?></td>
      <td style="width:130px;text-align:center;vertical-align:middle;"><?php echo $row2['ATR3ITEM'];?></td>
      <td style="width:130px;text-align:center;vertical-align:middle;"><?php echo $row2['ATR4ITEM'];?></td>

     		<?php } ?>
    </tr>
</tbody>
</table>

</body>
</html>