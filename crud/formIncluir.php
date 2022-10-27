<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Cadastro</title>
</head>
<body>
    <form action = "gravar.php" method = "POST">
        
        <label for="nome">Nome: </label>
        <input type ="text" name = "nome">
        <br>

        <label for = "turno"> Turno: </label>
        <select name = "turno">
            <option value = ""> Escolha</opcion>
            <option value = "matutino"> Matutino</opcion>
            <option value = "vespertino"> Vespertino</opcion>
            <option value = "noturno"> Noturno</opcion>
        </select>
        <br>
        <label for = "inicio"> </label>
        <input type ="date" name = "inicio" id = "inicio">
        <br>
        <input type= "submit" value = "Gravar">
</body>
</html>

 
  
