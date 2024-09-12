<?php 
    include('inicia_sessao.php');

    //limpa variáveis de sessão
    session_unset();

    //destrói a sessão
    session_destroy();

    //volta para página inicial
    header('Location:index.php')
?>