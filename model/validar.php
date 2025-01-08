<?php
session_start();

header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');

include 'conexao.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$login = $dados['login'];
$senha = $dados['senha'];

$sth = $pdo->prepare('SELECT * FROM usuarios WHERE usu_email = :email AND usu_senha = :senha');
$sth->bindValue(':email', $login);
$sth->bindValue(':senha', $senha);
$sth->execute();

$json = array();

if ($sth->rowCount() > 0) {
    $resultado = $sth->fetch(PDO::FETCH_ASSOC);
    extract($resultado);

    $_SESSION['Login']['email'] = $resultado['usu_email'];
    $_SESSION['Login']['senha'] = $resultado['usu_senha'];

    $json['error'] = 'success';
    $json['msg'] = 'Bem Vindo ' . $login;
} else {
    $json['error'] = 'login ERROR';
    $json['msg'] = 'Login ou Senha inválidos';
}


echo json_encode($json);
