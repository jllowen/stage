-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 31 aug 2020 om 16:04
-- Serverversie: 5.7.23
-- PHP-versie: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jallabase`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `forum`
--

DROP TABLE IF EXISTS `forum`;
CREATE TABLE IF NOT EXISTS `forum` (
  `msgid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(25) NOT NULL,
  `text` varchar(255) NOT NULL,
  `userid` int(100) NOT NULL,
  PRIMARY KEY (`msgid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `forum`
--

INSERT INTO `forum` (`msgid`, `title`, `text`, `userid`) VALUES
(1, 'hallo', 'wieis daar', 2),
(2, 'lowen', 'is mijn bitch', 2),
(3, 'outdated program', 'dat zou vet zijn', 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `itemid` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(25) NOT NULL,
  `text` text NOT NULL,
  `price` decimal(5,0) NOT NULL,
  `image` int(100) NOT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`itemid`, `naam`, `text`, `price`, `image`) VALUES
(1, 'paars mondkapje', 'mooie kleur', '300', 123),
(2, 'rood mondkapje', 'mooie kleur', '130', 123),
(3, 'blauw mondkapje', 'mooiste kleur\r\n', '339', 123);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(10) NOT NULL AUTO_INCREMENT,
  `naam` varchar(25) NOT NULL,
  `plaats` varchar(75) NOT NULL,
  `rank` set('djalla','junk','G','moderator','root') NOT NULL,
  `email` varchar(75) NOT NULL,
  `achternaam` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`userid`, `naam`, `plaats`, `rank`, `email`, `achternaam`, `password`) VALUES
(1, 't', 'veenendaal', 'djalla', '6@6.nl', 'b', '$2y$10$xVrqfvHfGCOD/zBF0pYa8./OPVnjB16IduDWoXb3FOA.XWHLj0ZJy'),
(2, 'Nuha', 'veenendaal', 'djalla', 'nuha.x.c@live.nl', 'Camara', '$2y$10$DPcM0qXmJ5jjG0M3ZTlyUeCeAHllumtKLdj//MFzERAcA9P.Svdk.'),
(3, 'tom', 'brabant', 'djalla', 'e@e.nl', 'van zandt', '$2y$10$N2z4YIVCUHhPuM.3HHwLzuSed2J/U9ELsxjvZ/wBSmCNpP/FOZILm'),
(4, 'sander', 'brabant', 'djalla', 'o@o.nl', 'coolwijk', '$2y$10$Y.HHMRMj1o77pRw9isTdVOIV1AUQxLDfR2AcZOFXliClRBZzs.0xa'),
(5, 'deborah', 'rotterdam', 'djalla', '1@1.nl', 'h', '$2y$10$LlxWMFYRvPWJqa3YZArBfOzfX3FO8/P0asqx76NMO7aUSGK1gygGu'),
(6, '1', 'ameronge', 'djalla', 'a@a.nl', '2', '$2y$10$p6i5GKMuc0a/uSHB6PGM5eGHlNuz7bYJMin7juy2Z0jwNG2Ze181m'),
(7, 'arjen', 'amsterdam', 'djalla', 'a@b.nl', 'b', '$2y$10$3PJrHG6Jo3PUbgzjuqSq1el6/ZUL4XSWJF9nQiHap5TDSkGk9yWj2'),
(8, 'victor', 'est', 'djalla', 'victor@poep.nl', 'kaas', '$2y$10$n3B4jn5kPlWTi4/JdJbfg..lI9vh5jjuVfhFm.yIfcB7il7UrJvXq');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
