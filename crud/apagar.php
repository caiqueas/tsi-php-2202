<?php
//Controle de acesso/sessão
require_once '../controleDeSessao/controle.php';

//buscamos o codigo que conecta no SGBD
require_once '../BancoDeDados/conecta.php';

//apenas para ficar mais facil de trabalhar 
//com dado enviado pelo usuário


$id = $_POST['id'] ?? 0;

// ?? quando nao existe $_POST na url

//evito que seja recebido $id  e qualquer coisa que seja diferente de numeros(digitos)
$id = preg_replace('/\D/', '', $id);


if($bd->exec("DELETE FROM alunos WHERE id = $id")){

    $apagado=true;

}else{

    $apagado = false;

};

include 'index.php';