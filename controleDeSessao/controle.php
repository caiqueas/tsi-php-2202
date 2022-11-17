<?php

//Inicializo o sistema de controle de sessão
session_start();

//Verifica se o usuário está logado
//em nossa aplicação
if( !isset($_SESSION['id']) ){

    //Se não estiver, é direcionado para tela de login
    header('Location: /tsi-php-2202/login');
    exit();
}
