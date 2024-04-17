<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Usuarios</title>
    <!--  bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<nav class="nav navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">PHP</a>
    <button class="navbar-toggler" type="button" data_toggle="collapse"
    data_target="#navbarNav" arial-control="navbarNav" arial-expanded="false"
    data_lable="Alternar">
        <span class="navbar-toggler-icon"></span>
        Menu
    </button>

    <div class="collapse navbar-colapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home Sweet home <span 
                class="sr-only">(pag.Atual)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-lik" href="?page=novo">Novo Usuário</a>
            </li>
            <li class="nav-item">
                <a class="nav-lik" href="?page=listar">Listar Usuários</a>
            </li>
        </ul>
    </div>
</nav>

<div class="conteiner">
    <div class="col mt-5">
        <?php
            include("config.php");
            switch(@$_REQUEST["page"]){
                case "novo":
                    include("novo-usuario.php");
                    break;
                case "listar":
                    include("listar-usuario.php");
                    break;
                case "editar": 
                    include("editar-usuario.php");
                    break;
                case "salvar":
                    include("crud-controle-usuario.php");
                    break;
                default:
                    print "<h1>Bem-Vindo!!</h1>";
            }
        ?>
    </div>
</div>

    
    <!-- script bootstrap css -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- script bootstrap popper e jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</body>
</html>