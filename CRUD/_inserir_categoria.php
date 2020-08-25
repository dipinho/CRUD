<?php

include 'conexao.php';

$categoria = $_POST['categoria'];
$sql = "INSERT INTO categoria (categoria) values ('$categoria')";
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
        <h4>Categoria adicionada com sucesso!</h4>
            <div style="padding-top: 20px">
                <a href="menu.php" role="button" class="btn btn-outline-primary"> Voltar ao menu</a>
                <a href="adicionar_categoria.php" id="botao" role="button" class="btn btn-primary"> Cadastrar nova categoria</a>
    </center>
    </div>
</div>