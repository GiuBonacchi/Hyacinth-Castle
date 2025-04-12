SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `reservas` (
  `idR` smallint(6) NOT NULL,
  `primeiroNome` varchar(30) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dataReserva` date NOT NULL,
  `horario` time NOT NULL,
  `pessoaQ` smallint(6) NOT NULL,
  `restricaoA` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `reservas` (`idR`, `primeiroNome`, `sobrenome`, `telefone`, `email`, `dataReserva`, `horario`, `pessoaQ`, `restricaoA`) VALUES
(1, 'Jo?o', 'Silva', '123456789', 'joao.silva@email.com', '2024-12-10', '18:30:00', 2, 'Sem restri??es');

ALTER TABLE `reservas`
  ADD PRIMARY KEY (`idR`);
ALTER TABLE `reservas`
  MODIFY `idR` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
