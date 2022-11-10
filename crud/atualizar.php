<?php
//Buscamos o código que conecta no SGBD
require_once '../bancoDeDados/conecta.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$turno = $_POST['turno'];
$inicio = $_POST['inicio'];

//EU PREPARO MEU UPDATE PARA NÃO SOFRERE SQL INJECTED
$stmt = $bd->prepare(" UPDATE alunos
                        SET nome = :nome,
                            turno = :turno,
                            inicio = :inicio
                            WHERE 
                            id = :id");
$stmt->bindParam(':id', $id);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':turno', $turno);
$stmt->bindParam(':inicio', $inicio);


$stmt->execute();


$atualizou = false;

if($stmt->rowCount() > 0){

    $atualizou = true;
}

include 'index.php';