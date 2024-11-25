<?php

require_once("class/dataBase.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $primeiro_nome = $_POST['primeiroNome'];
    $sobrenome = $_POST['sobrenome'];
    $telefone = $_POST['Telefone'];
    $email = $_POST['email'];
    $data_reserva = $_POST['dataReserva'];
    $horario = $_POST['horario'];
    $pessoas_mesa = $_POST['pessoaQ'];
    $restricoes = $_POST['restricaoA'];
}

    $con = new dataBase();
    $link = $con->getConexao();
    $sql = "INSERT INTO reservas (primeiro_nome, sobrenome, telefone, email, data_reserva, horario, pessoas_mesa, restricoes)
     VALUES (:primeiro_nome, :sobrenome, :telefone, :email, :data_reserva, :horario, :pessoas_mesa, :restricoes)";

try {
    $stmt = $link->prepare($sql);
    $stmt->bindParam(':primeiro_nome', $primeiro_nome);
    $stmt->bindParam(':sobrenome', $sobrenome);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':data_reserva', $data_reserva);
    $stmt->bindParam(':horario', $horario);
    $stmt->bindParam(':pessoas_mesa', $pessoas_mesa);
    $stmt->bindParam(':restricoes', $restricoes); 
}

if ($stmt->execute()) {
    echo "<script>
            alert('Reserva realizada com sucesso!');
            window.location.href = 'reservas.html';
          </script>";
} else {
    echo "<script>alert('Erro ao salvar a reserva.');</script>";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>

