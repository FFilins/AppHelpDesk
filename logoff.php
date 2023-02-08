<?php 
session_start();

// remover índices do array sessão
//unset()


//destruir a variavel de sessão
//session_destroy()
//iniciar um redirecionamento após o uso do session_destroy()

session_destroy();
header('Location: index.php');
?>