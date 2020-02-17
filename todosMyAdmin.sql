-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Feb 17, 2020 alle 07:07
-- Versione del server: 10.3.18-MariaDB
-- Versione PHP: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todos`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `todos`
--

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `description` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `completed` tinyint(1) NOT NULL,
  `date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dump dei dati per la tabella `todos`
--

INSERT INTO `todos` (`id`, `description`, `completed`, `date`) VALUES
(1, 'Prima cosa da fare', 0, '2020-02-12 23:00:00'),
(2, 'Seconda cosa da fare', 0, '2020-01-31 23:00:00'),
(3, 'Terza cosa da fare', 0, '2020-02-12 23:00:00'),
(4, 'Quarta cosa da fare', 0, '2020-01-31 23:00:00'),
(5, 'Quinta cosa da fare', 0, NULL),
(6, 'Sesta cosa da fare', 0, NULL);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
