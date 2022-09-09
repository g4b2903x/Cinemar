<?php
/* 
        Esse sistema tem o objetivo unicamente educativo!

        Sistema utilizado e desenvolvido pela monitoria do 4° Ano B de Informática
        do colegio CEEP Pedro Boaretto Neto de Cascavel - PR

*/
function retorna()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cinemar";

    // cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);
    // verifica a conexão
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id_cliente, nome_cli, cpf_cli, email_cli, senha_cli, CASE WHEN admin='s' THEN 'SIM' ELSE 'NÃO' END AS admin_cli FROM tb_cliente";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            $id = $row['id_cliente'];
            $nome = $row['nome_cli'];
            $email = $row['cpf_cli'];
            $email = $row['email_cli'];
            $senha = $row['senha_cli'];
            $admin = $row['admin_cli'];

            echo"
            <tr>
                <th scope='row'>$id</th>
                <td>$nome</td>
                <td>$email</td>
                <td>$senha</td>
                <td>$admin</td>
                <td><a href='modifica/tira_admin.php?id=$id'><button class='btn btn-outline-warning'>User</button></td>
                <td><a href='modifica/torna_admin.php?id=$id'><button class='btn btn-outline-primary'>Admin</button></td>
                <td><a href='modifica/exclui.php?id=$id'><button class='btn btn-outline-danger'>Exclui</button></td>
            </tr>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}