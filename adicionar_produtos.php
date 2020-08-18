<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário de Cadastro</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

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
            <form action="_inserir_produto.php" method="post" style="margin-top: 20px">
                <div class="form-group">
                    <label>Nro Produto</label>
                    <input type="number" class="form-control" name="nroproduto" placeholder="Insira aqui o número do produto" required>
                </div>

                <div class="form-group">
                    <label>Nome Produto</label>
                    <input type="text" class="form-control" name="nomedoproduto" placeholder="Nome do produto" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control" name="categoria" required>

                        <?php   
                        include 'conexao.php';
                        $sql = "SELECT * FROM categoria order by categoria ASC"; // ASC - ordem alfabética
                        $buscar = mysqli_query($conexao, $sql); 

                        while($array = mysqli_fetch_array($buscar)) {
                            $id_categoria = $array['id_categoria'];
                            $categoria = $array['categoria'];

                        ?>
                        <option><?php echo $categoria ?></option>
                        <?php } ?>
                    </select> 
                </div>

                <div class="form-group">
                    <label>Quantidade</label>
                    <input type="number" class="form-control" name="quantidade" placeholder="Quantidade do produto" required>
                </div>

                <div class="form-group">
                    <label>Fornecedor</label>
                    <select class="form-control" name="fornecedor">

                        <?php   
                        include 'conexao.php';
                        $sql = "SELECT * FROM fornecedor order by fornecedor ASC";
                        $buscar = mysqli_query($conexao, $sql); 

                        while($array = mysqli_fetch_array($buscar)) {
                            $id_fornecedor = $array['id_fornecedor'];
                            $fornecedor = $array['fornecedor'];

                        ?>
                        <option><?php echo $fornecedor ?></option>
                        <?php } ?>
                    </select> 
                </div>

                <div style="text-align: right">
                    <a href="menu.php" role="button" class="btn btn-outline-primary">Voltar</a>
                    <button type="submit" id="botao" class="btn ">Cadastrar</button>
                </div>
            </form>
        </div>

            <footer>
                <script src="js/bootstrap.js"></script>
            </footer>
    </body>
</html>