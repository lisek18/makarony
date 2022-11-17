-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Czas generowania: 17 Lis 2022, 21:44
-- Wersja serwera: 10.5.15-MariaDB-10+deb11u1
-- Wersja PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `lisekkk`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `jezyki`
--

CREATE TABLE `jezyki` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `jezyki`
--

INSERT INTO `jezyki` (`id`, `nazwa`) VALUES
(1, 'Angielski'),
(2, 'Niemiecki'),
(3, 'Hiszpański'),
(4, 'Rosyjski'),
(5, 'Ukraiński'),
(6, 'Włoski'),
(7, 'Francuski'),
(8, 'Portugalski'),
(9, 'Duński'),
(10, 'Inny');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `makarony`
--

CREATE TABLE `makarony` (
  `id` int(11) NOT NULL,
  `makaron` varchar(50) DEFAULT NULL,
  `sos` varchar(50) NOT NULL,
  `wielkosc` int(11) NOT NULL,
  `cena` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `makarony`
--

INSERT INTO `makarony` (`id`, `makaron`, `sos`, `wielkosc`, `cena`) VALUES
(1, 'Spaghetti', 'Bolongese', 300, 20),
(2, 'BeKid', 'Serowy', 150, 10),
(3, 'Firmowy', 'Pieczarkowy', 500, 15),
(4, 'Wegan', 'Koperkowo-ZioÅ‚owy', 50, 300),
(5, 'Szpinakowa Uczta', 'Szpiankowo-Serowy', 300, 20),
(6, 'ZielonoMi', 'ZioÅ‚owo-Szparagowy', 300, 25);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `stanowiska`
--

CREATE TABLE `stanowiska` (
  `id` int(11) NOT NULL,
  `nazwa` tinytext CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `stanowiska`
--

INSERT INTO `stanowiska` (`id`, `nazwa`) VALUES
(1, 'Kucharz'),
(2, 'Kelner'),
(3, 'Sprzataczka'),
(4, 'Menager'),
(5, 'Szef kelnera'),
(6, 'Szef kucharza'),
(7, 'Właściciel');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tab`
--

CREATE TABLE `tab` (
  `id` int(2) NOT NULL,
  `Nazwisko` tinytext DEFAULT NULL,
  `Imie` tinytext DEFAULT NULL,
  `Tel` int(9) NOT NULL,
  `id_stan` int(11) NOT NULL,
  `id_jezyk` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `tab`
--

INSERT INTO `tab` (`id`, `Nazwisko`, `Imie`, `Tel`, `id_stan`, `id_jezyk`) VALUES
(1, 'Kluska', 'Zenon', 543679987, 1, 2),
(2, 'Bogdziewicz', 'Wiktoria', 512986917, 6, 5),
(3, 'Laskowska', 'Oliwia', 456765234, 7, 1),
(4, 'Wrona', 'Bartosz', 678987654, 4, 1),
(5, 'Danik', 'Jakub', 123543567, 2, 4),
(6, 'Wąs', 'Adam', 345654234, 2, 4),
(7, 'Lis', 'Mariola', 196765432, 3, 8),
(8, 'Blaik', 'Adam', 987534278, 1, 9),
(9, 'Szatek', 'Eryk', 456789321, 5, 10),
(10, 'Kot', 'Ela', 678345098, 3, 5);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `jezyki`
--
ALTER TABLE `jezyki`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `makarony`
--
ALTER TABLE `makarony`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `stanowiska`
--
ALTER TABLE `stanowiska`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `tab`
--
ALTER TABLE `tab`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_jezyk` (`id_jezyk`),
  ADD KEY `ID_stan` (`id_stan`) USING BTREE;

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `jezyki`
--
ALTER TABLE `jezyki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `makarony`
--
ALTER TABLE `makarony`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT dla tabeli `stanowiska`
--
ALTER TABLE `stanowiska`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `tab`
--
ALTER TABLE `tab`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
