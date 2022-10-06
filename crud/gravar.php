<?php

//Buscamos o código que conecta no SGBD
require_once '../bancoDeDados/conecta.php';
//include_once(); não gera erro fatal se não existir

//Dados provenientes do formulário HTML
$nome = $_POST['nome'];
$turno = $_POST['turno'];
$inicio = $_POST['inicio'];

$consulta = 
    $bd->prepare('  INSERT INTO alunos 
                        (nome, turno, inicio)
                    VALUE 
                        (:nome, :turno, :inicio)');

/*
A função $bd->prepare() retorna outra variável (objeto),
 essa outra variável consegue juntar os dados do usuário com consulta SQL
*/

$consulta->bindParam('nome' , $nome);
$consulta->bindParam('turno' , $turno);
$consulta->bindParam('inicio' , $inicio);

/*
A função $consulta->bindParam() substitui os rótulos (ex.: ":nome")
 pelos dados inseguros
*/

if($consulta->execute() ){
    echo "Gravou com sucesso!";
}else{
    echo "Erro ao gravar no banco de dados";
}

//Finalmente executamos a consulta no SGBD