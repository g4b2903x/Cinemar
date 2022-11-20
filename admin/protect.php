<?php

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['admin'])) {
    die("Você não pode acessar esta página porque não é ADM <P><A href=\"../login/login.php\">Entrar</A></P>");
}
