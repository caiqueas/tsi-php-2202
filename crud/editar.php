<?php
//Controle de acesso/sessão
require_once '../controleDeSessao/controle.php';

//Buscamos o codigo que conecta no SGBD
require_once '../bancoDeDados/conecta.php';

//APENAS P/ FICAR MAIS FACIL O USO
//Se recebeu o ID para fazer a edição, a gente seleciona aquele aluno
$id = $_POST['id'] ?? 0;
//?? (operador de coalescência) quando não aparece o ID ele substitui por 0)


$stmt  = $bd->prepare('SELECT id, nome, turno, inicio
                        FROM 
                            alunos
                        WHERE 
                            id = :id');

$stmt->bindParam(':id', $id);

$stmt->execute();

//O resultado da consulta jogamos nessa variável aluno
$aluno = $stmt->fetch(PDO::FETCH_ASSOC);

//Mostra o formulário para o usuário
//poder editar os dados do aluno
require_once 'formEditar.php';

//Quando eu clico em GRAVAR, ele grava o conteúdo editado.

//P R I M E I R O
//MOstrar um formulário HTML para o usuário com 
//os dados do aluno selecionado para ser editado

//S E G U N D O
//Ao clicar em Gravar ou Atualizar no Formulário
//fazer o Update no Banco e voltar para a Index com 
//uma mensagem de erro ou sucesso
