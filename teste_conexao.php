<?php
require_once("class/dataBase.php");

$con = new dataBase();
$link = $con->getConexao();

if ($link) {
    echo "Conexão bem-sucedida!";
} else {
    echo "Erro na conexão.";
}
?>