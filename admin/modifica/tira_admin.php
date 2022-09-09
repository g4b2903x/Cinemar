<?php
    $id = $_GET['id'];
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

    $sql = "UPDATE tb_cliente SET admin='n' WHERE id_cliente=$id";

    if ($conn->query($sql) === TRUE) {
        header('Location: ../admin.php');
    } else {
    echo "Error updating record: " . $conn->error;
    }

    $conn->close();

?>