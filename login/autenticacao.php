<?php
//Buscamos o código que conecta no SGBD
require_once '../bancoDeDados/conecta.php';

//Trim retira o espaço antes e depois do email/senha
$email = trim($_POST['usuario']);
$senha = trim($_POST['senha']);

$stmt = $bd->prepare(" SELECT
                            nome, senha
                        FROM
                            usuarios
                        WHERE
                            email = :email ");

$stmt->bindParam(':email', $email);

$stmt->execute();

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

$autenticou = false;

if( isset($usuario['nome']) ){

    //Comparar a senha para ver se está correta

    if(password_verify($senha, $usuario['senha']) ){

        //Sessão inicializada
        session_start();
        $_SESSION['id'] = $email;

        //Direciona para o menu principal
        header('Location: /tsi-php-2202/menu');

    }
}

include 'index.php';
