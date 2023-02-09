<?php 

session_start();


// Usuários do sistema
$usuario_autenticado = false;
$usuario_id = null;
$usuario_perfil_id = null;

$perfis = array(1 => 'administrativo', 2 => 'usuario');

$usuarios_app = [
    array('id' => 1, 'email' => 'adm@teste.com', 'senha' => '123', 'perfil_id' => 1),
    array('id' => 2, 'email' => 'user@teste.com', 'senha' => '123', 'perfil_id' => 2),
    array('id' => 3, 'email' => 'felipe@teste.com', 'senha' => '123', 'perfil_id' => 2),
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
        $usuario_id = $user['id'];
        $usuario_perfil_id = $user['perfil_id'];
    }
    
}
// header - função nativa do php para forçar redirecionamento.
if($usuario_autenticado) {
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuario_id;
    $_SESSION['perfil_id'] = $usuario_perfil_id;
    header('Location: home.php');
}else {
    $_SESSION['autenticado'] = 'NAO';
    header('Location: index.php?login=erro');
}



?>