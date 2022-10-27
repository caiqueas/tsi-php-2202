<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Listar</title>
</head>
<body>
    <div class="container">
        <form method ="post">
        <a href="formIncluir.php"><button class='btn'>Novo Aluno</button></a>

        <?php
        //mensagem de sucesso ou falha na hora de gravar o aluno
        if( isset($gravou) ){

            if( !$gravou ){

                echo '  <div class="alert alert-danger" role="alert">
                            Erro ao tentar gravar o aluno!
                        </div>';
            }else{

                echo '  <div class="alert alert-success" role="alert">
                            Aluno gravado com sucesso!
                        </div>';
            } 
        }

        //mensagem de sucesso ou erro na hora de apagar o aluno
        if( isset($apagado) ){

            if( !$apagado ){

                echo '  <div class="alert alert-danger" role="alert">
                            Erro ao tentar apagar o aluno!
                        </div>';
            }else{

                echo '  <div class="alert alert-success" role="alert">
                            Aluno apagado com sucesso!
                        </div>';
            } 
        }
        ?>
        <table class="table">
            <thead>
               <th>ID</th>
                <th>Nome</th>
                <th>Turno</th>
                <th>Início</th>
                <th>Ações</th>
            </thead>

            <?php
            foreach($alunos as $aluno){

                echo "  <tr>
                            <td>{$aluno['id']}</td>
                            <td>{$aluno['nome']}</td>
                            <td>{$aluno['turno']}</td>
                            <td>{$aluno['inicio']}</td>
                            <td>
                                <button class='btn btn-info'
                                formaction='editar.php'
                                value='{$aluno['id']}' 
                                name='id'> 
                                Editar
                                </button>

                                <button class='btn btn-danger'
                                formaction='apagar.php'
                                value='{$aluno['id']}' 
                                name='id'> 
                                Apagar
                                </button>
                            </td>
                        </tr>";  
            }   
            ?>

        </table>
        </form>
   </div>
</body>
</html>