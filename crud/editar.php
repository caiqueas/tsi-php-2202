<?php
//buscamos o codigo que conecta no SGBD
require_once'../BancoDeDados/conecta.php';

//apenas para ficar mais facil de trabalhar 
//com dado enviado pelo usuário
$id = $_POST['id'] ?? 0;
//?? quando não existe POST atribui 0 para id

$stmt = $bd->prepare('  SELECT
                             id, nome, turno, inicio
                        FROM
                            alunos
                        WHERE
                            id = :id');
$stmt->bindParam(':id', $id);

$stmt->execute();

$aluno = $stmt->fetch(PDO::FETCH_ASSOC);

//mostrar um formulário HTML para o usuário 
//com os dados do aluno selecionado para
//ser editado