<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$servidor = "localhost";
$login = "root";
$senha = "";
$bancodados = "hyacinthcastle";

$link = mysqli_connect($servidor, $login, $senha, $bancodados);
if ($link) {
    echo "Conexão bem-sucedida com o banco de dados hyacinthcastle!";
} else {
    die("Erro na conexão: " . mysqli_connect_error());
}

$primeiroNome = $_POST['primeiroNome'];
$sobrenome = $_POST['sobrenome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$dataReserva = $_POST['dataReserva'];
$horario = $_POST['horario'];
$pessoaQ = $_POST['pessoaQ'];
$restricaoA = $_POST['restricaoA'];

$insere = "INSERT INTO reservas (primeiroNome, sobrenome, telefone, email, dataReserva, horario, pessoaQ, restricaoA)
VALUES ('$primeiroNome', '$sobrenome', '$telefone', '$email', '$dataReserva', '$horario', '$pessoaQ', '$restricaoA')";

if (mysqli_query($link, $insere)) {
    echo "Reserva criada com sucesso!";
} else {
    echo "Erro: " . $insere . "<br>" . mysqli_error($link);
}

mysqli_close($link);

}
?>
