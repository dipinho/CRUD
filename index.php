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
                    <option></option>
                    <option>Periféricos</option>
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Celulares</option>
                </select> 
            </div>

            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="quantidade" placeholder="Quantidade do produto" required>
            </div>

            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control" name="fornecedor">
                    <option></option>
                    <option>Seu Chalita</option>
                    <option>Djalma</option>
                    <option>Arcides </option>
                </select> 
            </div>

            <div style="text-align: right">
                <button type="submit" id="botao" class="btn ">Cadastrar</button>
            </div>

        </form>
    </div>


    <script src="js/bootstrap.js"></script>
</body>
</html>