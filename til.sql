-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: database:3306
-- Creato il: Dic 21, 2021 alle 12:27
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
-- Database: `til.sample`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `random`
--

CREATE TABLE `random` (
  `ID` int(11) NOT NULL,
  `COLOR` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `ANIMAL` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struttura della tabella `settings`
--

CREATE TABLE `settings` (
  `ID` int(11) NOT NULL,
  `USER` varchar(256) COLLATE utf8_bin NOT NULL,
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
  `DAY` varchar(12) COLLATE utf8_bin NOT NULL,
  `MONTH` varchar(12) COLLATE utf8_bin NOT NULL,
  `YEAR` varchar(12) COLLATE utf8_bin NOT NULL,
  `TITLE` varchar(256) COLLATE utf8_bin NOT NULL,
  `MAIN` text COLLATE utf8_bin NOT NULL,
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
  `USER` varchar(256) COLLATE utf8_bin NOT NULL,
  `EMAIL` varchar(256) COLLATE utf8_bin NOT NULL,
  `PASS` varchar(256) COLLATE utf8_bin NOT NULL,
  `PEPPER` varchar(256) COLLATE utf8_bin NOT NULL,
  `ACTIVATED` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `random`
--
ALTER TABLE `random`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `COLOR` (`COLOR`,`ANIMAL`);

--
-- Indici per le tabelle `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UINIQUE` (`ID`,`USER`),
  ADD KEY `USERS_SETTINGS` (`USER`);

--
-- Indici per le tabelle `tils`
--
ALTER TABLE `tils`
  ADD PRIMARY KEY (`ID`,`USER`),
  ADD KEY `INDEX` (`TITLE`,`TAGS`),
  ADD KEY `USERS` (`USER`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`,`USER`),
  ADD UNIQUE KEY `ID` (`ID`,`USER`,`EMAIL`),
  ADD UNIQUE KEY `USER` (`USER`,`EMAIL`),
  ADD KEY `INDEX` (`USER`,`EMAIL`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `random`
--
ALTER TABLE `random`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=380;

--
-- AUTO_INCREMENT per la tabella `settings`
--
ALTER TABLE `settings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `tils`
--
ALTER TABLE `tils`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `settings`
--
ALTER TABLE `settings`
  ADD CONSTRAINT `USERS_SETTINGS` FOREIGN KEY (`USER`) REFERENCES `users` (`USER`);

--
-- Limiti per la tabella `tils`
--
ALTER TABLE `tils`
  ADD CONSTRAINT `USERS` FOREIGN KEY (`USER`) REFERENCES `users` (`USER`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
