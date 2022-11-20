<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinemar</title>
    <link rel="icon" type="image/x-icon" href="../img/pog.gif">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <style>
      body {
        background-image: url("img/pog.gif");
        background-repeat: repeat;
         background-attachment: fixed;
         background-size: 30% 10%;
       }
       h5{
        text-shadow: 1px 0 #fff, -1px 0 #fff, 0 1px #fff, 0 -1px #fff,
          1px 1px #fff, -1px -1px #fff, 1px -1px #fff, -1px 1px #fff;
          color: #000000; 
          font-family:arial; 
          font-size:180%;
       }
       h6{
          color:#fff; 
          font-family:arial; 
          font-size:25px;
          text-align:left;
       }
      </style>
  </head>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
<div class="container-fluid">
          <a class="navbar-brand fs-3" href="index.php">Cinepoggers</a>
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
                <a class="nav-link" aria-current="page" href="filmes pag/filmes.php">Filmes</a>
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
                <a href="cadastro/cadastro.php" class="float-right"><button class="btn btn-outline-primary">Cadastrar-se</button></a>
            </div>
            <div class="">
                <a href="login/login.php" class="float-right"><button class="btn btn-outline-primary ml-3">Login</button></a>
            </div>
        </div>
      </nav>
<!--<div class="fundo">
  <img src="img/cinema_no_mar.jpeg" >
</div> -->
 
<div class='row mt-4'>

<div class="card col-3 ml-3" style="width: 18rem;">
  <img class="card-img-top" src="img/sapo.gif" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">nome do filme</h5>
    <p class="card-text">descrição</p>
    <a href="#" class="btn btn-danger">preço</a>
  </div>
</div>

<div class="card col-6 ml-3" style="width: 18rem;">
  <img class="card-img-top" src="img/sapo.gif" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">nome do filme</h5>
    <p class="card-text">descrição</p>
    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-danger">preço</a>
  </div>
</div>

<div class="card col-9 ml-3" style="width: 18rem;">
  <img class="card-img-top" src="img/sapo.gif" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">nome do filme</h5>
    <p class="card-text">descrição</p>
    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-danger">preço</a>
  </div>
</div>

<div class="card col-12 ml-3" style="width: 18rem;">
  <img class="card-img-top" src="img/sapo.gif" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">nome do filme</h5>
    <p class="card-text">desc</p>
    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-danger">preço</a>
  </div>
</div>
<p>   
<div class="card col-15 ml-3" style="width: 18rem;">
  <img class="card-img-top" src="img/sapo.gif" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">nome do filme</h5>
    <p class="card-text">desc</p>
    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-danger">preço</a>
  </div>
</div>
</div><p>
                 <!--lembrar trocar link-->
  <div class="w-100 p-3" style="background-color: #000000; opacity: 0.65">
    <footer><h6>contato do cinema: (51) 4206-9024</footer> <!--inserir-->
  </div>
</main>
</body>
</html>