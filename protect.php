<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])){
        die("<h1 class='font-bold text-xl'>Você não tem permissao de acessar essa pagina! faça login para continuar navegando. <br><a class='text-3xl text-cyan-400 font-bold hover:text-cyan-600 hover:underline transition' href='login'> Login</a></h1>");
}
?>