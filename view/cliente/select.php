<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../estilo.css"/>
    <link rel="icon" href="../../img/favicon.png" type="image/x-icon" />
    <title>Consultas</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
    <a class="navbar-brand" href="#">
            <div style="display: flex; align-items: center;">
                <img src="../../img/hospital.png" alt="Hospital" width="75" height="75" class="d-inline-block align-top">
                <span class="h4 ml-2" style="margin-top: 10px;">CENTRAL DE CONSULTA</span>
            </div>
        </a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="select.php">
                    <button class="btn btn-primary">Consultas</button>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="clientes.php">
                    <button class="btn btn-warning">Novo</button>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sair.php">
                    <button class="btn btn-danger">Sair</button>
                </a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="load"></div>
        <?php

        include '../../model/conexao.php';

        $sth = $pdo->prepare("select * from clientes order by cli_id DESC");
        $sth->execute();

        echo '<h6>' . $sth->rowCount() . ' Consulta(s) Cadastrado(s)</h6>';
        echo '<table class="table table-striped">';
        echo '<tr>';
        echo '<td><b>Nome</b></td>';
        echo '<td><b>E-mail</b></td>';
        echo '<td><b>Telefone</b></td>';
        echo '<td><b>Endereço</b></td>';
        echo '<td><b>Nascimento</b></td>';
        echo '<td><b>Convênio</b></td>';
        echo '<td><b>Editar</b></td>';
        echo '</tr>';
        foreach ($sth as $res) {
            extract($res);
            echo '<tr>';
            echo '<td>' . $cli_nome . '</td>';
            echo '<td>' . $cli_email . '</td>';
            echo '<td>' . $cli_telefone . '</td>';
            echo '<td>' . $cli_endereco . '</td>';
            echo '<td>' . $cli_nascimento . '</td>';
            echo '<td>' . $cli_convenio . '</td>';
            echo '<td>';
            echo '<a href="#" class="deleteClientes" cli_id="' . $cli_id . '">Excluir</a>';
            echo ' / ';
            echo '<a href="formulario_update.php?cli_id=' . $cli_id . '">Editar</a>';
            echo '<div class="msg" cli_id="' . $cli_id . '"></div>';
            echo '</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '<hr><p>Existem: ' . $sth->rowCount() . ' registros</p>';
        ?>
    </div>
</div>

</body>

<script type="text/javascript" src="../../controller/jquery-3.7.1.min.js"></script>

<script type="text/javascript" src="../../controller/cliente.js"></script>>

</html>