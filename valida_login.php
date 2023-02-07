<?php 

// Usuários do sistema
$usuario_autenticado = false;

$usuarios_app = [
    array('email' => 'adm@teste.com', 'senha' => '123456'),
    array('email' => 'user@teste.com', 'senha' => '123123'),
    array('email' => 'felipe@teste.com', 'senha' => '102030'),
];

/* método - GET / retira as informações da URL na requisição
print_r($_GET);

echo '<br>';

echo $_GET['email'];
echo '<br>';
echo $_GET['senha']; */

// método - POST / pega as informações na requisição sem mostrar na URL

foreach($usuarios_app as $user) {

    if($user['email'] == $_POST['email'] && $user['senha']  == $_POST['senha']) {
        $usuario_autenticado = true;
    }
    
}
// header - função nativa do php para forçar redirecionamento.
if($usuario_autenticado) {
    header('Location: home.php');
}else {
    header('Location: index.php?login=erro');
}



?>