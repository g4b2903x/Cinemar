<?php
/* 
        Esse sistema tem o objetivo unicamente educativo!

        Sistema utilizado e desenvolvido pela monitoria do 4° Ano B de Informática
        do colegio CEEP Pedro Boaretto Neto de Cascavel - PR, adptado pelo desenvolvedor deste projeto

*/


//variavel principal
$nome = $email = $senha = $Csenha = "";
// variavel de erro
$nomeErr = $emailErr = $senhaErr = $CsenhaErr = "";




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cinemar";

// cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



//verifica se o botão de entrar foi clicado
if (isset($_POST["submit"])) {
    // verifica se o campo nome está vazio
    if (empty($_POST["nome"])) {
        $nomeErr = " Nome obrigatório";
    } else {
        $nome = $conn->real_escape_string($_POST["nome"]);
    }
    //verifica se o campo senha está vazio
    if (empty($_POST["senha"])) {
        $senhaErr = " Insira uma senha";
    } else {
        $senha = $conn->real_escape_string($_POST["senha"]);
    }
}


// faz a verificação no banco como usuario sem admin
$sql = "SELECT nome_cli, senha_cli, admin FROM tb_clientes WHERE nome_cli='$nome' and senha_cli='$senha' and admin='n'";
$result = mysqli_query($conn, $sql);

// restorna se tiver algo no banco 
if (mysqli_num_rows($result) > 0) {
    //envia para o index.php
    header("location: ../index.php");
} else {
    $nomeErr = " Usuário ou senha incorretos";
}

// faz a verificação no banco como usuario com admin
$sql_admin = "SELECT nome_cli, senha_cli, admin FROM tb_clientes WHERE nome_cli='$nome' and senha_cli='$senha' and admin='s' ";
$sql_query = $conn->query($sql_admin) or die("Falha na execução do codigo  sql" . $conn->error);

$quantidade = $sql_query->num_rows;
// restorna se tiver algo no banco 
if ($quantidade > 0) {

    $admin = $sql_query->fetch_assoc();

    if (!isset($_SESSION)) {
        session_start();
    }

    $_SESSION['id_cliente'] = $admin['id_cliente'];
    $_SESSION['admin'] = $admin['admin'];

    //envia para o admin.php
    header("location: ../admin/admin.php");
} else {
    $nomeErr = " Usuário ou senha inrfefrecorretos";
}

//encerra a conexão
$conn->close();
