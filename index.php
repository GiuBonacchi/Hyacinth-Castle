<?php

require_once("class/index.php");

$con = new dataBase();
$link = $con-> getConexao();

$stmt = $link->prepare("select * from reservas");
$stmt->execute();

$data = $smtm->fetchAll();

print_r($data);

?>