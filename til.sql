-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: database:3306
-- Creato il: Dic 13, 2021 alle 21:55
-- Versione del server: 5.7.36
-- Versione PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `til`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `settings`
--

CREATE TABLE `settings` (
  `ID` int(11) NOT NULL,
  `USERS` varchar(256) COLLATE utf8_bin NOT NULL,
  `NOTIFICATION` tinyint(1) NOT NULL,
  `DATE_FORMAT` varchar(256) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struttura della tabella `tils`
--

CREATE TABLE `tils` (
  `ID` int(11) NOT NULL,
  `USER` varchar(256) COLLATE utf8_bin NOT NULL,
  `TITLE` varchar(256) COLLATE utf8_bin NOT NULL,
  `MAIN` varchar(256) COLLATE utf8_bin NOT NULL,
  `TAGS` varchar(256) COLLATE utf8_bin NOT NULL,
  `REMINDER_DAY` tinyint(1) NOT NULL,
  `REMINDER_WEEK` tinyint(1) NOT NULL,
  `REMINDER_MONTH` tinyint(1) NOT NULL,
  `REMINDER_YEAR` tinyint(1) NOT NULL,
  `PUBLIC` tinyint(1) NOT NULL,
  `ANONYMUS` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(256) COLLATE utf8_bin NOT NULL,
  `EMAIL` varchar(256) COLLATE utf8_bin NOT NULL,
  `PASSWORD` varchar(256) COLLATE utf8_bin NOT NULL,
  `PEPPER` varchar(256) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UINIQUE` (`ID`,`USERS`),
  ADD KEY `USERS_SETTINGS` (`USERS`);

--
-- Indici per le tabelle `tils`
--
ALTER TABLE `tils`
  ADD PRIMARY KEY (`ID`,`USER`),
  ADD KEY `INDEX` (`TITLE`,`MAIN`,`TAGS`),
  ADD KEY `USERS` (`USER`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`,`USERNAME`),
  ADD UNIQUE KEY `ID` (`ID`,`USERNAME`,`EMAIL`),
  ADD KEY `INDEX` (`USERNAME`,`EMAIL`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `settings`
--
ALTER TABLE `settings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `settings`
--
ALTER TABLE `settings`
  ADD CONSTRAINT `USERS_SETTINGS` FOREIGN KEY (`USERS`) REFERENCES `users` (`USERNAME`);

--
-- Limiti per la tabella `tils`
--
ALTER TABLE `tils`
  ADD CONSTRAINT `USERS` FOREIGN KEY (`USER`) REFERENCES `users` (`USERNAME`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
