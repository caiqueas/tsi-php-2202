<?php

$nome = $_POST ['nomeUsuario'];
$idade = $_POST ['idadeUsuario'];
$cpf = $_POST ['cpfUsuario'];
$periodo = $_POST ['periodoUsuario'];

//echo "Voce tem $nome,$idade,$cpf,$periodo ";

//$_SERVER possui muitas variáveis de ambiente que podem ser muito importantes
//para você em algum momento, ex: IP do requisitante


$arquivo = fopen('aluno.csv', 'a'); // abra o arquivo para append
fwrite($arquivo, "$nome,$idade,$cpf,$periodo;{$_SERVER['REMOTE_ADDR']}\r\n");
fclose($arquivo);









