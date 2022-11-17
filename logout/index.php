<?php
//Chama o controle de sessão
require '../controleDeSessao/controle.php';

//Destroi a sessão
session_destroy();

//Redireciona o usuário para tela de login
header('Location: /tsi-php-2202/login');