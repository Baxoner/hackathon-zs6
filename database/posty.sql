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
-- Struktura tabeli dla tabeli `posty`
--

CREATE TABLE `posty` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `description` text NOT NULL,
  `email` text NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `posty`
--

INSERT INTO `posty` (`id`, `name`, `surname`, `description`, `email`, `title`) VALUES
(102, 'Barbara', 'Halska', 'Poszukuje ucznia chętnego do stworzenia plakatu do szkolnego konkursu Hackaton, wszystkich zainteresowanych proszę o kontakt ze mną poprzez e-mail gdzie wyśle wszystkie potrzebne grafiki.', 'barbara.halska@zs6sobieski.edu.pl', 'Plakat na Hackaton!'),
(103, 'Edyta', 'Ochodek-Kapica', 'Ogłaszam konkurs którego założenia polega na zrobieniu zdjęcia z kolorami flagi francuskiej, zdjęcia proszę wysyłać na poniżej podany e-mail. ', 'edyta.ochodek-kapica@zs6sobieski.edu.pl', '\"W kolorach flagi\" konkurs fotograficzny'),
(104, 'Gracjan', 'Karpiński', 'Tworze projekt nowej strony naszej szkoły jednak nie jestem obeznany w tematach php i my SQL jest ktoś chętny do współpracy? Chętne osoby proszę o kontakt mailem podanym poniżej.', 'gracjan.karpiński@zs6sobieski.edu.pl', 'Pomoc w stronie www');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `posty`
--
ALTER TABLE `posty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `posty`
--
ALTER TABLE `posty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
