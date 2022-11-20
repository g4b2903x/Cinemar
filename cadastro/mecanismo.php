<?php
/* 
        Esse sistema tem o objetivo unicamente educativo!

        Sistema utilizado e desenvolvido pela monitoria do 4° Ano B de Informática
        do colegio CEEP Pedro Boaretto Neto de Cascavel - PR

*/

// variavel principal
$nome = $cpf = $email =  $senha = $Csenha = "";
// variavel de erro
$nomeErr = $cpfErr = $emailErr = $senhaErr = $CsenhaErr = "";

// verifica se o botão cadastrar foi clicado
if (isset($_POST["submit"])) {

    //valida o compo nome
    if (empty($_POST["nome"])) {
        $nomeErr = " Obrigatorio nome!";
    } elseif (strlen($_POST["nome"]) < 3) {
        $nomeErr = " minimo de caracteres!";
    } elseif (strlen($_POST["nome"]) > 50) {
        $nomeErr = " maximo de caracteres!";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $_POST["nome"])) {
        $nomeErr = " Nome invalido!";
    } else {
        $nome = $_POST["nome"];
    }


    //valida o campo cpf
    if (empty($_POST["cpf"])) {
        $cpfErr = " cpf obrigatório";
    } elseif (strlen($_POST["cpf"]) != 11) {
        $cpfErr = "cpf inválido";
    } elseif (!preg_match("/[0-9]{3}\.?[0-9]{3}\.?[0-9]{3}\-?[0-9]{2}/", $_POST["cpf"])) {
        $cpfErr = "cpf inválido";
    } else {
        $cpf = $_POST["cpf"];
    }


    //valida o campo email
    if (empty($_POST["email"])) {
        $emailErr = " Obrigatorio email";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Email invalido";
    } else {
        $email = $_POST["email"];
    }


    //valida o campo senha
    if (empty($_POST["senha"])) {
        $senhaErr = " Senha obrigatoria!";
    } elseif (strlen($_POST["senha"]) < 6) {
        $senhaErr = "digite no minimo 6 caracteres!";
    } elseif (strlen($_POST["senha"]) > 45) {
        $senhaErr = "digite no maximo 45 caracteres!";
    } else {
        $senha = $_POST["senha"];
    }


    //valida o campo confirmação de senha
    if (empty($_POST["Csenha"])) {
        $CsenhaErr = " Senha invalida!";
    } elseif ($_POST["senha"] != $_POST["Csenha"]) {
        $CsenhaErr = "As senhas não são iguais!";
    } else {
        $Csenha = $_POST["Csenha"];
    }

    // verifica se todos os comapos estão validos
    if (($nome != null) and ($cpf != null) and ($email != null) and ($senha != null) and ($Csenha != null)) {
        //variaveis de conexão
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cinemar";

        try {
            //conexão
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //sql que insere no banco 
            $sql = "INSERT INTO tb_clientes (nome_cli, cpf_cli, email_cli, senha_cli, admin)
            VALUES ('$nome', '$cpf', '$email', '$senha', 'n')";

            //executa o sql
            $conn->exec($sql);
            //envia para o login.php
            header("Location: ../login/login.php");
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }

        //encerra a conexão
        $conn = null;
    }
}
