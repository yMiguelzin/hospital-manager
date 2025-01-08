<?php
session_start();

header('Content-type: application/json');
header('Access-Control-Allow-Origin:*');

include 'conexao.php';

$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$dados = array(
    'cli_nome' => $post['cli_nome'],
    'cli_email' => $post['cli_email'],
    'cli_telefone' => $post['cli_telefone'],
    'cli_endereco' => $post['cli_endereco'],
    'cli_nascimento' => $post['cli_nascimento'],
    'cli_convenio' => $post['cli_convenio']

);

$field = implode(',', array_keys($dados));
$places = ':' . implode(', :', array_keys($dados));
$tabela = 'clientes';
$create = "INSERT INTO {$tabela} ({$field}) VALUES ({$places})";

// Prepare the SQL statement
$sth = $pdo->prepare($create);

if ($sth->execute($dados)) {
    $json['error'] = 'success';
    $json['msg'] = 'Dados cadastrados com sucesso';
} else {
    $json['error'] = 'error insert';
    $json['msg'] = 'Não foi possível efetuar o cadastro';
}

echo json_encode($json);
