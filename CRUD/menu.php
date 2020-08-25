<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <style type="text/css">
            #h2{
                text-align: center;
                margin-top:15px;
            }

            body{
                background-color: #e4e4e4;
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
        <h2 id="h2">Controle de Estoque</h2>

        <div class="container" style="margin-top:20px">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Adicionar Produto</h5>
                            <p class="card-text">Opção para adicionar produtos em nosso estoque.</p>
                            <a href="adicionar_produtos.php" id="botao" class="btn">Cadastrar Produto</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Adicionar Categoria</h5>
                            <p class="card-text">Opção para adicionar apenas uma nova categoria.</p>
                            <a href="adicionar_categoria.php" id="botao" class="btn">Cadastrar Categoria</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container" style="margin-top:20px">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Adicionar Fornecedor</h5>
                            <p class="card-text">Opção para adicionar apenas um novo Fornecedor.</p>
                            <a href="adicionar_fornecedor.php" id="botao" class="btn">Cadastrar Fornecedor</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Lista de Produtos</h5>
                            <p class="card-text">Opção para visualizar, editar e excluir produtos.</p>
                            <a href="listar_produtos.php" id="botao" class="btn">Listar Produtos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>   

        <div class="container" style="margin-top:20px">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Lista de Categorias </h5>
                            <p class="card-text">Opção para visualizar, editar e excluir categorias.</p>
                            <a href="listar_categoria.php" id="botao" class="btn">Listar Categorias</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Cadastro de Usuários</h5>
                            <p class="card-text">Opção para visualizar, editar e excluir fornecedores.</p>
                            <a href="cadastro_usuario.php" id="botao" class="btn " role="button"  >Cadastrar Usuários</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

    <footer class="footer">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </footer>
    </body>
</html>