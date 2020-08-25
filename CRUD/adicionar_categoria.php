<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Categoria</title>
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
        
        <div class="container" style="margin-top: 40px; width:500px">

            <h3>Cadastro de Categoria</h3>
            <form action="_inserir_categoria.php" method="post">

                <div class="form-group" style="margin-top: 30px">
                    <input type="text" name="categoria" class="form-control" placeholder="Digite o nome de uma nova categoria" autocomplete="off" required>
                </div>

                <div style="text-align: right">
                    <a href="menu.php" role="button" class="btn btn-outline-primary">Voltar</a>
                    <button type="submit" id="botao" class="btn btn-primary btn">Cadastrar</button>
                </div>
            </form>
        </div>



        <footer>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        </footer>
    </body>
</html>