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

    <?php
        include '../../model/conexao.php';
        $cli_id = filter_input(INPUT_GET, 'cli_id' , FILTER_DEFAULT);
        $sth = $pdo->prepare("select *from clientes where cli_id = :cli_id");
        $sth->bindValue(':cli_id' , $cli_id);
        $sth->execute();
        $data = $sth->fetch(PDO::FETCH_ASSOC);
        extract($data);
    ?>

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
        </ul>
    </div>
</nav>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title text-center">Atualizar Consultas</h6>
                    <form name="form_update_cliente" method="post">
                        <div class="form-group">
                            <input type="hidden" name="cli_id" value="<?= $cli_id ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="cli_nome">Nome</label>
                            <input type="text" class="form-control" id="cli_nome" name="cli_nome" value="<?= $cli_nome ?>">
                        </div>
                        <div class="form-group">
                            <label for="cli_email">Email</label>
                            <input type="text" class="form-control" id="cli_email" name="cli_email" value="<?= $cli_email ?>">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="cli_telefone">Telefone</label>
                            <input type="number" class="form-control" id="cli_email" name="cli_telefone" value="<?= $cli_telefone ?>">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="cli_endereco">Endereço</label>
                            <input type="text" class="form-control" id="cli_endereco" name="cli_endereco" value="<?= $cli_endereco ?>">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="cli_nascimento">Data de Nascimento</label>
                            <input type="date" class="form-control" id="cli_nascimento" name="cli_nascimento" value="<?= $cli_nascimento ?>">
                        </div>
                        <br>
                        <div class="form-group">
                         <label for="cli_convenio">Selecione seu convênio:</label>
                        <select id="cli_convenio" name="cli_convenio" class="form-control">
                        <option value="Intermédica Empresarial - Smart 200">Intermédica Empresarial - Smart 200</option>
                        <option value="Amil Empresa - S450">Amil Empresa - S450</option>
                        <option value="Notredame Intermédica - Advance 600">Notredame Intermédica - Advance 600</option>
                        <option value="Bradesco Saúde - Top Nacional">Bradesco Saúde - Top Nacional</option>
                        <option value="SulAmérica Saúde - Exato">SulAmérica Saúde - Exato</option>
                        <option value="Amil - One">Amil - One</option>
                        <option value="Omint - Premium">Omint - Premium</option>
                        <option value="Porto Seguro - Cristal">Porto Seguro - Cristal</option>
        </select>
    </div>
                        <br>                                                                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </div>
                    </form>
                    <div class="msg"></div>
                </div>
            </div>
        </div>
    </div>
</div>



</body>

<script type="text/javascript" src="../../controller/jquery-3.7.1.min.js"></script>

<script type="text/javascript" src="../../controller/cliente.js"></script>>

</html>