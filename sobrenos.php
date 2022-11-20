<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinemar</title>
    <link rel="icon" type="image/x-icon" href="../img/cinemarIcon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <style>
      body {
        background-image: url("img/ku.gif");
        background-repeat: no-repeat;
         background-attachment: fixed;
         background-size: 100% 100%;
       }
       h4{
          color: #000000; 
          font-family:arial; 
          font-size: 50px;
       }
       h5{
          color: #000000; 
          font-family:arial; 
          font-size: 20px;
       }
       h6{
        text-shadow: 1px 0 #fff, -1px 0 #fff, 0 1px #fff, 0 -1px #fff,
          1px 1px #fff, -1px -1px #fff, 1px -1px #fff, -1px 1px #fff;
          color:#000000; 
          font-family:arial; 
          font-size:20px;
          text-align:left;
       }
      </style>
  </head>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
<div class="container-fluid">
          <a class="navbar-brand fs-3" href="index.php">Cinemar</a>
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
                <a href="cadastro/cadastro.php" class="float-right"><button class="btn btn-outline-primary">Cadastrar-se</button></a>
            </div>
            <div class="">
                <a href="login/login.php" class="float-right"><button class="btn btn-outline-primary ml-3">Login</button></a>
            </div>
        </div>
      </nav>
<p>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-3 sidenav">
       <p><img src="img/ad3.jpg" widght="300" height="300"><p><!--fonte: https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.garotasgeeks.com%2Fwp-content%2Fuploads%2F2017%2F09%2FYour-Name.jpg&imgrefurl=https%3A%2F%2Fwww.garotasgeeks.com%2F20-filmes-animados-recentes-que-todo-fa-de-anime-deveria-assistir%2F&tbnid=TolSmyTuWKthVM&vet=12ahUKEwig5474rrH7AhV0F7kGHTzcCOwQMygAegUIARC-AQ..i&docid=7URU4KTA1uDKhM&w=650&h=366&q=filme%20anime&client=opera-gx&ved=2ahUKEwig5474rrH7AhV0F7kGHTzcCOwQMygAegUIARC-AQ -->
       <img src="img/ad1.png" widght="300" height="300"><!--fonte: https://www.google.com/imgres?imgurl=https%3A%2F%2Fbr.web.img3.acsta.net%2Fc_310_420%2Fpictures%2F21%2F10%2F27%2F11%2F49%2F5430171.jpg&imgrefurl=https%3A%2F%2Fwww.adorocinema.com%2Ffilmes%2Ffilme-291677%2F&tbnid=pnwVq8LUJA9UDM&vet=12ahUKEwig5474rrH7AhV0F7kGHTzcCOwQMyg7egQIARBW..i&docid=gJK2uQwT9erO0M&w=310&h=420&q=filme%20anime&client=opera-gx&ved=2ahUKEwig5474rrH7AhV0F7kGHTzcCOwQMyg7egQIARBW -->
    </div>
    <div class="col-sm-6 text-left"> 
    <div class="w-100 p-3" style="background-color: #eee; opacity: 0.8">
      <h4>Sobre nós</h4>
      <h5><p> Nós somos uma empresa que vende sites para cinemas físicos. Nosso propósito é, para os funcionários do cinema, ajudar a administração do cinema através de um sistema com banco de dados e, para os clientes, a diminuição de filas e a facilidade de acesso a escolha dos filmes sem sair de casa!
      </div> </div>
    <div class="col-sm-3 sidenav">
      <div class="well">
        <p><img src="img/ad4.jpg" widght="300" height="300"><p><!-- fonte: https://www.google.com/imgres?imgurl=https%3A%2F%2Fptanime.com%2Fwp-content%2Fuploads%2F2021%2F12%2FNatsu-e-no-Tunnel-Sayonara-no-Deguchi-young-adult-novel-sci-fi-drama-capa-cover-jpn.jpg&imgrefurl=https%3A%2F%2Fwww.animesjapao.com%2F2021%2F12%2Fnatsu-e-no-tunnel-novel-sci-fi-recebe.html&tbnid=nuFfTrG1NuNH-M&vet=12ahUKEwjIwJntr7H7AhWiAtQKHc40BkgQMygIegUIARDUAQ..i&docid=j29ReSRn5h4dbM&w=600&h=856&itg=1&q=filme%20anime%20capa&client=opera-gx&ved=2ahUKEwjIwJntr7H7AhWiAtQKHc40BkgQMygIegUIARDUAQ -->
      </div>
      <div class="well">
        <img src="img/ad2.png" widght="300" height="300"><!-- fonte: https://www.google.com/imgres?imgurl=https%3A%2F%2Flegadoplus.com.br%2Fwp-content%2Fuploads%2F2021%2F09%2FDemon-Slayer-Mugen-Train-new-poster.webp&imgrefurl=https%3A%2F%2Flegadoplus.com.br%2Fdemon-slayer-mugen-train-filme-de-kimetsu-no-yaiba-ganhara-versao-estendida-em-formato-de-anime%2F&tbnid=XsXrS9htg3vvmM&vet=10CBQQMyjAAmoXChMIuMnPqq-x-wIVAAAAAB0AAAAAEAU..i&docid=eQpAw8uAyqo54M&w=707&h=1000&q=filme%20anime&client=opera-gx&ved=0CBQQMyjAAmoXChMIuMnPqq-x-wIVAAAAAB0AAAAAEAU -->
      </div>
    </div>
  </div>
</div>
  <div class="mt-5 p-4 bg-dark text-white text-center">
    <footer><h6>contato do cinema: (51) 4206-9024</footer> <!--inserir-->
    <span style='font-size:50px;'></span>
  </div>
</main>
</body>
</html>