<?php
include_once 'mecanismo.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Modifica</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
            <a href="../admin.php"><button class="btn btn-outline-primary">Voltar</button></a>
        </div>
    </nav>
    <div class="container">
        <form action="" method="post">
            <label for="" class="form-label h4">Id:</label><span class="text-danger h4"> <?= $idErr ?></span>
            <input type="number" name="id_cliente" value="<?= $id_cliente_banco ?>" class="form-control" disabled>
            <label for="" class="form-label h4">Nome:</label><span class="text-danger h4"> <?= $nomeErr ?></span>
            <input type="text" name="nome" value="<?= $nome_banco ?>" class="form-control">
            <label for="" class="form-label h4">Email:</label><span class="text-danger h4"> <?= $emailErr ?></span>
            <input type="text" name="email" value="<?= $email_banco ?>" class="form-control">
            <label for="" class="form-label h4">CPF:</label><span class="text-danger h4"> <?= $cpfErr ?></span>
            <input type="text" name="cpf" value="<?= $cpf_banco ?>" class="form-control">

            <label for="" class="form-label h4">Admin:</label></br><span class="text-danger h4"> <?= $adminErr ?></span>
            <input type="radio" id="admins" name="admin" value="s" checked <?= $admin_s ?> <label for="admins" class="form-label h5">sim</label><br>

            <input type="radio" id="admin" name="admin" value="n" <?= $admin_n ?> <label for="admin" class="form-label h5">não</label><br>

            <div class="d-flex justify-content-center mt-2">
                <button type="submit" name="submit" class="btn btn-outline-primary w-100">Salvar</button>
            </div>
        </form>
    </div>
</body>

</html>