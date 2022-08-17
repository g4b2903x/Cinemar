<?php
    include_once "mecanismo.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>login</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
<div class="container-fluid">
          <a class="navbar-brand fs-3" href="../index.php">Cinemar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../index.html">Filmes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Cinemas</a>
              </li>
            </ul>
          </div> 
            <div class="">
                <a href="../cadastro/cadastro.php" class="float-right"><button class="btn btn-outline-primary">Cadastrar-se</button></a>
            </div>
        </div>
      </nav>
    <div class="d-flex justify-content-center mt-5">
        <form action="" method="post">
            <label for="nome" class="form-label h4">Nome:</label><span class="text-danger h5"><?= $nomeErr?></span>
            <input type="text" id="nome" name="nome" class="form-control">
            <label for="senha" class="form-label h4">Senha:</label><span class="text-danger h5"><?= $senhaErr?></span>
            <input type="text" id="senha" name="senha" class="form-control">
            <small>
                <a href="../cadastro/cadastro.php">Cadastrar-se</a>
            </small>
            <div class="d-flex justify-content-center mt-2">
                <button type="submit" name="submit" class="btn btn-outline-danger w-100">Entrar</button>
            </div>
        </form>
    </div>
</body>
</html>