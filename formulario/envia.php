<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <form action="recebe.php" method = "post">
    <label for="nome">Nome</label>
    <input type = "text" name = "nomeUsuario" id= "nome"><br>
    <label for="nome">Idade</label>
    <input type = "text" name = "idadeUsuario" id= "idade"><br>
    <label for="nome">CPF</label>
    <input type = "text" name = "cpfUsuario" id= "CPF"><br>
    <select name="periodoUsuario" id="periodo">
        <option valeue="">Escolha</option>
        <option valeue="matutino">Matutino</option>
        <option valeue="vespertino">Vespertino</option>
        <option valeue="noturno">Noturno</option>
    </select><br>
    <input type = "submit" value = "Enviar">
</form> 
</body>
</html>