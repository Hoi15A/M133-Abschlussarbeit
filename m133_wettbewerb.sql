-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 13. Jul 2016 um 14:21
-- Server-Version: 10.1.13-MariaDB
-- PHP-Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `m133_wettbewerb`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `wettbewerb`
--

CREATE TABLE `wettbewerb` (
  `id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `vname` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `instrument` int(11) NOT NULL,
  `members` int(11) NOT NULL,
  `check1` int(11) NOT NULL,
  `check2` int(11) NOT NULL,
  `check3` int(11) NOT NULL,
  `check4` int(11) NOT NULL,
  `ageGuess` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `wettbewerb`
--

INSERT INTO `wettbewerb` (`id`, `time`, `vname`, `name`, `mail`, `instrument`, `members`, `check1`, `check2`, `check3`, `check4`, `ageGuess`) VALUES
(27, '2016-07-13 12:16:29', 'Bob', 'Ross', 'Ross@Bob.littletree', 1, 3, 0, 1, 0, 1, 122),
(28, '2016-07-13 12:20:17', 'Kappa', 'BibleThump', 'Kreygasm@KappaPride.com', 2, 1, 1, 1, 0, 1, 12);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `wettbewerb`
--
ALTER TABLE `wettbewerb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `wettbewerb`
--
ALTER TABLE `wettbewerb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
