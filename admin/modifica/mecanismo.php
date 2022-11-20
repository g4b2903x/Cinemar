<?php
$id_cliente = $nome = $email = $cpf = $admin = null;
$idErr = $nomeErr = $emailErr = $cpfErr = $adminErr = null;
$admin_s = $admin_n = null;

$id = $_GET['id'];
$id_cliente = $id;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cinemar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id_cliente, nome_cli, cpf_cli, email_cli, admin FROM tb_clientes WHERE id_cliente='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $id_cliente_banco = $row['id_cliente'];
        $nome_banco = $row['nome_cli'];
        $cpf_banco = $row['cpf_cli'];
        $email_banco = $row['email_cli'];
        $admin_banco = $row['admin'];
    }
} else {
    echo "0 results";
}

$conn->close();


if ($admin_banco == 's') {
    $admin_s = 'checked';
} else {
    $admin_n = 'checked';
}

if (isset($_POST["submit"])) {

    //valida o compo nome
    if (empty($_POST["nome"])) {
        $nomeErr = " Obrigatorio nome!!";
    } elseif (strlen($_POST["nome"]) < 3) {
        $nomeErr = " minimo de caracteres!!";
    } elseif (strlen($_POST["nome"]) > 50) {
        $nomeErr = " maximo de caracteres!!";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $_POST["nome"])) {
        $nomeErr = " Nome invalido!!";
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

    //valida o compo email
    if (empty($_POST["email"])) {
        $emailErr = " Obrigatorio email!!";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Email invalido!!";
    } else {
        $email = $_POST["email"];
    }

    //valida o campo admin
    if ($_POST['admin'] == 's') {
        $admin = 's';
    } else {
        $admin = 'n';
    }

    // verifica se todos os comapos estão validos
    if (($nome != null) and ($cpf != null) and ($email != null) and ($admin != null) and ($id_cliente != null)) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cinemar";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "UPDATE tb_clientes SET id_cliente=$id, nome_cli='$nome', cpf_cli='$cpf', email_cli='$email', admin='$admin' WHERE id_cliente=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Registro atualizado com sucesso";
            header("Refresh: 3, url=../admin.php");
        } else {
            echo "Erro ao atualizar o registro: " . $conn->error;
        }

        $conn->close();
    }
}
