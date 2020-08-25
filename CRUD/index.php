<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style type="text/css">
            #tamanho{
                width: 300px;
                -webkit-box-shadow: 10px 10px 39px -14px rgba(158,150,158,1);
                -moz-box-shadow: 10px 10px 39px -14px rgba(158,150,158,1);
                box-shadow: 10px 10px 39px -14px rgba(158,150,158,1);
            }
            #botao{
                background-color: #1F485E;
                color: #ffffff;
            }

            body{
                background-color: #e4e4e4;
            }

            #botao:hover{
                color: #FFFECE;
            }
        </style>
    </head>
    <body >
        <div class="container" id="tamanho" style="margin-top:100px; border-radius: 15px; border: 2px solid #f3f3f3" >
            <div style="padding:10px">
                <center>
                    <img src="img/cadeado.png" alt="cadeado" width="120px" height="120px">
                </center>
                    <form>
                        <div class="form-group">
                            <label>Usuário</label>
                            <input type="text" name="usuario" class="form-control"  placeholder="Usuário" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Senha</label>
                            <input type="password" name="senha" class="form-control" placeholder="Senha" required>
                        </div>
                    </form>
                    <div style="text-align: right">
                        <a href="menu.php" role="button" class="btn " id="botao">Login</a>
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