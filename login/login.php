<?php

include_once 'mecanismo.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../css/styles.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <title>Login</title>
  <link rel="icon" type="image/x-icon" href="../img/cinemarIcon.png">
  <style>
    body {
      background-image: url("../img/fundo.png");
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
    }
  </style>
</head>

<body>
  <div id="container-imagem">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand fs-3" href="../index.php">Cinemar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cinemas</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="index.php">Cinemar <img src="img/cinemarIcon.png" width="25" height="22"></a>
                <a class="dropdown-item" href="grongos.php">Cinepoggers <img src="img/pog.gif" width="25" height="25"></a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="contato.php">Contatos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="sobrenos.php">Sobre nós</a>
            </li>
          </ul>
          <div class="search-container">
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0 mr-3" type="submit">Buscar</button>
            </form>
          </div>
        </div>
        <div class="">
          <a href="../cadastro/cadastro.php" class="float-right"><button class="btn btn-outline-primary">Cadastrar-se</button></a>
        </div>
      </div>
    </nav>
    <div class="d-flex justify-content-center align-items-center mt-5">
      <form action="" method="post">
        <h2 class="mb-3">Login</h1>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="nome" name="nome" id="nome">
            <label for="nome" class="">Nome:</label><span class="text-danger"><?= $nomeErr; ?></span>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control transparent-input" placeholder="Senha" name="senha" id="senha">
            <label for="senha" class="form-label red">Senha:</label><span class="text-danger"><?= $senhaErr; ?></span>
          </div>
          <small class="">
            <p> Não é membro ainda? <a href="../cadastro/cadastro.php">Cadastre-se</a></p>
          </small>
          <div class="d-flex justify-content-center mt-2">
            <button type="submit" name="submit" class="btn btn-outline-danger w-100">Entrar</button>
          </div>
      </form>
    </div>
  </div>
</body>

</html>