<?php
/* 
        Esse sistema tem o objetivo unicamente educativo!

        Sistema utilizado e desenvolvido pela monitoria do 4° Ano B de Informática
        do colegio CEEP Pedro Boaretto Neto de Cascavel - PR

*/

//variavel principal
$nome = $email = $senha = $Csenha = "";
// variavel de erro'
$nomeErr = $emailErr = $senhaErr = $CsenhaErr = "";

//verifica se o botão de entrar foi clicado
if (isset($_POST["submit"])) {
    // verifica se o campo nome está vazio
    if (empty($_POST["nome"])) {
        $nomeErr = " Obrigatorio nome!!";
    } else {
        $nome = $_POST["nome"];
    }
    //verifica se o campo senha está vazio
    if (empty($_POST["senha"])) {
        $senhaErr = " Insira uma senha";
    } else {
        $senha = $_POST["senha"];
    }

    // verifica se os campos nome e senha estão validos
    if (($nome != null) and ($senha != null)) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cinemar";

        // cria a conexão
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // verifica a conexão
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        // faz a verificação no banco como usuario sem admin
        $sql = "SELECT nome, senha, admin FROM usuarios WHERE nome='$nome' and senha='$senha' and admin='n' ";
        $result = mysqli_query($conn, $sql);

        // restorna se tiver algo no banco 
        if (mysqli_num_rows($result) > 0) {
            //envia para o index.php
            header("location: ../index.php");
        } else {
            $nomeErr = " Usuario ou senha incorretos!";
        }
        // faz a verificação no banco como usuario com admin
        $sql_admin = "SELECT nome, senha, admin FROM usuarios WHERE nome='$nome' and senha='$senha' and admin='s' ";
        $result_admin = mysqli_query($conn, $sql_admin);

        // restorna se tiver algo no banco 
        if (mysqli_num_rows($result_admin) > 0) {
            //envia para o admin.php
            header("location: ../admin/admin.php");
        } else {
            $nomeErr = " Usuario ou senha incorretos!";
        }

        //encerra a conexão
        mysqli_close($conn);
    }
}
