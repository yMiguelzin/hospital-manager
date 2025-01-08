<?php

header('Content-type: application/json');
header('Access-Control-Allow-Origin:*');

include 'conexao.php';

$post = filter_input_array(INPUT_POST, FILTER_DEFAULT); 
$id = $post['cli_id'];
$dados = array (
    'cli_nome' => $post['cli_nome'],
    'cli_email' => $post['cli_email'],
    'cli_telefone' => $post['cli_telefone'],
    'cli_endereco' => $post['cli_endereco'],
    'cli_nascimento' => $post['cli_nascimento'],
    'cli_convenio' => $post['cli_convenio']
);
foreach ($dados as $Key => $Value):
    $placeKey[] = $Key . ' = :' . $Key;
endforeach;
$places = implode(', ', $placeKey);

$tabela = 'clientes';
$referencia = 'cli_id';
$update = "update {$tabela} set {$places} where {$referencia} = {$id}";
$sth = $pdo->prepare($update);
if($sth ->execute($dados)):
    $json ['error'] = 'success';
    $json ['msg'] = 'Dados atualizado com sucesso';
else:
    $json ['error'] = 'error insert';
    $json ['msg'] = 'Não foi possível efetuar a atualização';
endif;

echo json_encode($json);
