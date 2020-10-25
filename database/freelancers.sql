-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 25 Paź 2020, 14:56
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `hackaton`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `freelancers`
--

CREATE TABLE `freelancers` (
  `id` int(11) NOT NULL,
  `name2` text NOT NULL,
  `surname2` text NOT NULL,
  `email2` text NOT NULL,
  `perks2` text NOT NULL,
  `class2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `freelancers`
--

INSERT INTO `freelancers` (`id`, `name2`, `surname2`, `email2`, `perks2`, `class2`) VALUES
(50, 'Wojtek', 'Bujna', 'wojciech.bujna@zs6sobieski.edu.pl', 'html, css, js, programowanie', '1pr'),
(51, 'Wojciech', 'Kokot', 'wojciech.kokot@zs6sobieski.edu.pl', 'grafika, programowanie, html, css', '1pr'),
(59, 'Marcin', 'Panzer', 'marcin.panzer@zs6sobieski.edu.pl', 'śpiew, html, css', '2gin'),
(60, 'Nikodem', 'Majnzer', 'nikodem.majnzer@zs6sobieski.edu.pl', 'programowanie, granie na pianinie', '1pr'),
(61, 'Paweł', 'Oślizło', 'paweł.oślizło@zs6sobieski.edu.pl', 'strategiczne, html, css, js', '1pr'),
(62, 'Marta', 'Machej', 'marta.machej@zs6sobieski.edu.pl', 'montaż filmów, html, css, js, php', '1pr'),
(63, 'Gracjan', 'Karpiński', 'gracjan.karpinski@zs6sobieski.edu.pl', 'html, css, php ,mySQL', '1pr'),
(64, 'John', 'Smith', 'john.smith@zs6sobieski.edu.pl', 'html, css, js', '1 a');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `freelancers`
--
ALTER TABLE `freelancers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `freelancers`
--
ALTER TABLE `freelancers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
