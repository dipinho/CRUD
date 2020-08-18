<?php

include 'conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Edição</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <style type="text/css">
        #tamanhoContainer{
            width: 500px;
        }

        #botao{
            background-color: #1F485E;
            color: #ffffff;
        }

        #botao:hover{
            color: #FFFECE;
        }
    </style>

</head>
<body>
    <div class="container" id="tamanhoContainer" style="margin-top: 40px">
        <h3>Formulário de Edição</h3>
        <form action="_atualizar_categoria.php" method="post" style="margin-top: 20px">

        <?php

            $sql = "SELECT * FROM `categoria` WHERE id_categoria = $id ";
            $busca = mysqli_query($conexao, $sql);

                while($array = mysqli_fetch_array($busca)){
                    $id_categoria = $array['id_categoria'];
                    $categoria = $array['categoria'];
                    
        ?>
            <div class="form-group">
                <label>Nome Categoria</label>
                <input type="text" class="form-control" name="categoria" value="<?php echo $categoria ?>">
                <input type="text" class="form-control" name="id" value="<?php echo $id_categoria ?>" style="display: none" >
            </div>


            <div style="text-align: right">
                <a href="listar_categoria.php" role="button" class="btn btn-outline-primary">Voltar</a>
                <button type="submit" id="botao" class="btn ">Atualizar</button>
            </div>

        <?php   }   ?>
        </form>
    </div>


    <script src="js/bootstrap.js"></script>
</body>
</html>