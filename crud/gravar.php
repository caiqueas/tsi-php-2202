<?php

//Search the code that conects into database
require_once '../bancoDeDados/conecta.php';



//include_once ; will not show a fatal if doesn't exists

//var_dump($_POST);

//data from html file

$nome = $_POST ['nome'];
$turno = $_POST ['turno'];
$inicio = $_POST ['inicio'];


$objconsulta = $bd -> prepare ('INSERT INTO alunos (nome,turno,inicio) VALUE 
(:nome, :turno, :inicio)'); 

/*the variable 'objconsulta' recieve the sql commands*/

$objconsulta ->bindParam(':nome', $nome);
$objconsulta ->bindParam(':turno', $turno);
$objconsulta ->bindParam(':inicio', $inicio);

/* the function bindParam() binds the parameter with the variable*/ 


//SGBD

if ($objconsulta -> execute()){
    $gravou = true;
}else{
    $gravou = false;
}

//Finalmente executamos a consulta no SGBD

include 'index.php';