<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../estilo.css"/>
    <link rel="icon" href="../../img/favicon.png" type="image/x-icon" />
    <title>Home</title>
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



</body>

<script type="text/javascript" src="../../controller/jquery-3.7.1.min.js"></script>

</html>