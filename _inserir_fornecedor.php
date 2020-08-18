<?php

include 'conexao.php';

$fornecedor = $_POST['fornecedor'];
$sql = "INSERT INTO fornecedor (fornecedor) values ('$fornecedor')";
$inserir = mysqli_query($conexao, $sql); 
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
crossorigin="anonymous">

<style type="text/css">       
    #botao{
        background-color: #1F485E;
        color: #ffffff;
    }

    #botao:hover{
        color: #FFFECE;
    }
</style>

<div class="container" style="width: 700px; margin-top: 20px">
    <center>
        <h4>Fornecedor adicionado com sucesso!</h4>
            <div style="padding-top: 20px">
                <a href="index.php" role="button" class="btn btn-outline-primary"> Voltar ao menu</a>
                <a href="adicionar_fornecedor.php" id="botao" role="button" class="btn btn-primary"> Cadastrar novo fornecedor</a>
    </center>
    </div>
</div>