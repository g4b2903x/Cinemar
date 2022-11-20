<?php

include_once 'conexao.php';

if (isset($_FILES['poster'])) {
    $poster = $_FILES['poster'];

    if ($poster['error'])
        die("Falha ao enviar arquivo");

    $pasta = "poster/";
    $nomeDoPoster = $poster['name'];
    $novoNomeDoPoster = uniqid();
    $extensao = strtolower(pathinfo($nomeDoPoster, PATHINFO_EXTENSION));

    if ($extensao != "jpg" && $extensao != "png" && $extensao != "webp")
        die("Tipo de arquivo não aceito");

    $path = $pasta . $novoNomeDoPoster . "." . $extensao;
    $deu_certo = move_uploaded_file($poster["tmp_name"], $path);

    if ($deu_certo) {
        $conn->query("INSERT INTO tb_filmes (poster) VALUES ('$path')") or die($conn->error);
        echo "<P>Arquivo enviado com sucesso!</P>";
    } else
        echo "Falha ao enviar arquivo";
}

$sql_query = $conn->query("SELECT * FROM tb_filmes WHERE poster") or die($conn->error);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data" action=" ">
        <label for=" ">Selecione o arquivo</label>
        <input type="file" name="poster">
        <p>
            <button type="submit"> Enviar arquivor</button>
    </form>

</body>

</html>