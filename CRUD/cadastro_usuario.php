<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Usuário</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <style type="text/css">
            body{
                background-color: #e4e4e4;
            }
            #tamanho{
                width: 300px;
                -webkit-box-shadow: 10px 10px 39px -14px rgba(158,150,158,1);
                -moz-box-shadow: 10px 10px 39px -14px rgba(158,150,158,1);
                box-shadow: 10px 10px 39px -14px rgba(158,150,158,1);
            }
            #h3{
                margin-top:15px;
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
        <div class="container" id="tamanho" style=" width:400px; padding:10px; margin-top:40px; border-radius: 15px; border: 2px solid #f3f3f3">
            <h3 id="h3">Cadastro de Usuário</h3>
            
            <form action="_insert_usuario.php" method="POST">
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="nomeusuario" class="form-control" requeried autocomplete="off"> 
                </div> 
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="emailusuario" class="form-control" requeried autocomplete="off"> 
                </div> 
                <div class="form-group">
                    <label>Senha</label>
                    <input id="txtSenha" type="password" name="senhausuario" class="form-control" requeried autocomplete="off"> 
                </div> 
                <div class="form-group">
                    <label>Repetir Senha</label>
                    <input type="password" name="senhausuario2" class="form-control" requeried autocomplete="off" placeholder="Repetir senha" oninput="validaSenha(this)"> 
                    <small>Precisa ser igual a senha digitada acima.</small>
                </div>
                <div class="form-group">
                    <label>Nivel de Acesso</label>
                    <select name="nivelusuario" class="form-control">
                            <option value="1">Administrador</option>
                            <option value="2">Funcionario</option>
                            <option value="3">Conferente</option>
                    </select>
                </div> 
                <div style="text-align: right">
                    <a href="menu.php" role="button" class="btn btn-outline-primary">Voltar</a>
                    <button type="submit" class="btn" id="botao">Cadastrar</button>
                </div>   
            </form>
        </div>
        
        <footer class="footer">
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        
            <script>
            function validaSenha(input){
                if (input.value != document.getElementById('txtSenha').value){
                    input.setCustomValidity("Repita a senha corretamente"); 
                }else{
                    input.setCustomValidity(''); 
                }
            }
            </script>
        </footer>
    </body>
</html>