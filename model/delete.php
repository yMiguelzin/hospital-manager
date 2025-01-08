<?php
session_start();

header('Content-type: application/json');
header('Access-Control-Allow-Origin:*');

include 'conexao.php';

$post = filter_input_array(INPUT_POST, FILTER_DEFAULT); 
$dados = array (
    'cli_id' => $post['cli_id']
);

$field = implode(',', array_keys($dados));
$places = ':' .implode(', :', array_keys($dados));
$tabela = 'clientes';
$delete = "DELETE FROM {$tabela} WHERE {$field} = {$places} ";
$sth = $pdo->prepare($delete);
if($sth ->execute($dados)):
    $json ['error'] = 'success';
    $json ['msg'] = 'Excluindo...';
else:
    $json ['error'] = 'error delete';
    $json ['msg'] = 'Erro';
endif;

echo json_encode($json);