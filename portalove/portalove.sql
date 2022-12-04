-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Sun 04.Dec 2022, 23:11
-- Verzia serveru: 10.4.25-MariaDB
-- Verzia PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `portalove`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `popis` varchar(255) NOT NULL,
  `clanok` text NOT NULL,
  `titulka` varchar(100) NOT NULL,
  `nadpis` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `blog`
--

INSERT INTO `blog` (`id`, `popis`, `clanok`, `titulka`, `nadpis`) VALUES
(1, 'Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra', 'Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetraAenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetraAenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra', 'tm-img-310x180-1.jpg', 'Lorem ipsum dolor #1'),
(2, 'Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra', 'Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetraAenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetraAenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra', 'tm-img-310x180-2.jpg', 'Lorem ipsum dolor #2');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `menu`
--

INSERT INTO `menu` (`id`, `name`, `file`) VALUES
(1, 'Home', 'index.php'),
(3, 'Contact', 'contact.php');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `spravy`
--

CREATE TABLE `spravy` (
  `id` int(11) NOT NULL,
  `meno` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `sprava` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `spravy`
--
ALTER TABLE `spravy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pre tabuľku `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pre tabuľku `spravy`
--
ALTER TABLE `spravy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
