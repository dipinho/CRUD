<?php

include 'conexao.php';
include 'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$mail = $_POST['emailusuario'];
$senha = $_POST['senhausuario'];
$nivel = $_POST['nivelusuario'];
$status = 'Ativo';

$sql = "INSERT INTO usuarios (nome_usuario,mail_usuario,senha_usuario,nivel_usuario,status) 
values ('$nomeusuario','$mail',sha1('$senha'),$nivel,'$status')";

$inserir = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style="width:400px">
    <center>
        <h3>Usuário cadastrado com sucesso!</h3>
        <div style="margin-top:10px">
            <a href="cadastro_usuario.php" class="btn btn-sm btn-success">Voltar</a>
        </div>
    </center>
</div>