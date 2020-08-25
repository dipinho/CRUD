<?php

include 'conexao.php';

$nroproduto = $_POST['nroproduto']; //recebe o valor do atributo
$nomedoproduto = $_POST['nomedoproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) 
VALUES ($nroproduto,'$nomedoproduto','$categoria',$quantidade,'$fornecedor')";

$inserir = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
crossorigin="anonymous">
<div class="container" style="width: 700px; margin-top: 20px">
    <center>
    <h4>Produto adicionado com sucesso!</h4>
    <div style="padding-top: 20px">
    <a href="index.php" role="button" class="btn bt-lg btn-primary"> Cadastrar novo item</a>
    </center>
    </div>
</div>