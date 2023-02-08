<?php 
echo '<pre>';
print_r($_POST);
echo '</pre>';

// montando o texto
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);
//                                                                             PHP End Of Line
$texto = $_POST['titulo'] . '#' . $_POST['categoria'] . '#'  . $_POST['descricao'] . PHP_EOL;

// abrindo, escrevendo e fechando o arquivo
$arquivo = fopen('arquivo.txt', 'a');
echo 'arquivo criado e aberto <hr>';

fwrite($arquivo, $texto);
echo 'arquivo escrito <hr>';

fclose($arquivo);
echo 'arquivo fechado <hr>';

header('Location: abrir_chamado.php');
?>