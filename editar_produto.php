<?php

include 'conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
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
        <h3>Formulário de Cadastro</h3>
        <form action="_atualizar_produto.php" method="post" style="margin-top: 20px">

        <?php

            $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id ";
            $busca = mysqli_query($conexao, $sql);

                while($array = mysqli_fetch_array($busca)){
                    $id_estoque = $array['id_estoque'];
                    $nroproduto = $array['nroproduto'];
                    $nomeproduto = $array['nomeproduto'];
                    $categoria = $array['categoria'];
                    $quantidade = $array['quantidade'];
                    $fornecedor = $array['fornecedor'];
        ?>

            <div class="form-group">
                <label>Nro Produto</label>
                <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disabled >
                <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display:none" >
            </div>

            <div class="form-group">
                <label>Nome Produto</label>
                <input type="text" class="form-control" name="nomedoproduto" value="<?php echo $nomeproduto ?>">
            </div>

            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="categoria" value="<?php echo $categoria ?>">
                    <option>Periféricos</option>
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Celulares</option>
                </select> 
            </div>

            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
            </div>

            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control" name="fornecedor" value="<?php echo $fornecedor ?>">
                    <option></option>
                    <option>Seu Chalita</option>
                    <option>Djalma</option>
                    <option>Arcides </option>
                </select> 
            </div>

            <div style="text-align: right">
                <button type="submit" id="botao" class="btn ">Atualizar</button>
            </div>

        <?php   }   ?>
        </form>
    </div>


    <script src="js/bootstrap.js"></script>
</body>
</html>