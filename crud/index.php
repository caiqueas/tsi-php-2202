<?php
require_once '../bancoDeDados/conecta.php';

require_once '../controleDeSessao/controle.php';



$stmt = $bd->query('SELECT id, nome, turno, inicio FROM alunos');  

$alunos = [];

while( $registro = $stmt->fetch(PDO::FETCH_ASSOC) ){

    $alunos[] = $registro;
}

include 'view/listar.php';