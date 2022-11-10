<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">

    <?php
        //Mensagem de sucesso ou falha na hora 
        //de fazer o login
        if( isset($autenticou) ){

            if( !$autenticou){

                echo '  <div class="alert alert-danger" role="alert">
                            Credenciais inválidas!
                        </div>';
            }
        }

    ?>

        <form action="autenticacao.php" method="post">
        Email: 
        <input name="usuario" type="text" autocomplete="off">
        <br>
        senha
        <input name="senha" type="password" autocomplete="off">
        <br>
        <input name="enviar" type="submit" value="Logar">
        </form>
    </div>
</div>    
</body>
</html>