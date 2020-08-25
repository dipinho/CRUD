<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Modal</title>
    </head>
    <body>

        <!-- Botão para acionar modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
            Lista de Produtos
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Lista de Produtos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="container" >
                        <br>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">Nro Produto</th>
                                <th scope="col">Nome Produto</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Fornecedor</th>
                                <th scope="col">Ação</th>
                                </tr>
                            </thead>
                            
                                <?php
                                    include 'conexao.php';
                                    $sql = "SELECT * FROM `estoque`";
                                    $busca = mysqli_query($conexao, $sql);
                                    
                                    while($array = mysqli_fetch_array($busca)){
                                        $id_estoque = $array['id_estoque'];
                                        $nroproduto = $array['nroproduto'];
                                        $nomeproduto = $array['nomeproduto'];
                                        $categoria = $array['categoria'];
                                        $quantidade = $array['quantidade'];
                                        $fornecedor = $array['fornecedor'];
                                        ?>
            
                                    <tr>
            
                                        <td> <?php echo $nroproduto ?> </td>
                                        <td> <?php echo $nomeproduto ?> </td>
                                        <td> <?php echo $categoria ?> </td>
                                        <td> <?php echo $quantidade ?> </td>
                                        <td> <?php echo $fornecedor ?> </td>
                                        <td>
                                            <a class="btn btn-warning btn-sm" href="editar_produto.php?id=<?php echo $id_estoque?>" role="button"><i class="far fa-edit"></i>&nbsp; Editar</a>
                                            <a class="btn btn-danger btn-sm" href="deletar_produto.php?id=<?php echo $id_estoque?>" role="button"><i class="far fa-trash-alt"></i>&nbsp; Apagar</a>
                                        </td>
            
                                <?php   }   ?>
                                </tr>
                        </table>
                        
                        <div style="text-align: right"> 
                            <a href="index.php" role="button" class="btn btn-outline-primary">Voltar</a>
                        </div>
                    </div>
                </div>
                
            </div>
            </div>
        </div>
        <footer>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        </footer>


    </body>
</html>