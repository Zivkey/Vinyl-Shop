-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 10:58 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinyldatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `lista_zelja`
--

CREATE TABLE `lista_zelja` (
  `id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `ime_ploce` text NOT NULL,
  `muzicar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lista_zelja`
--

INSERT INTO `lista_zelja` (`id`, `user_name`, `ime_ploce`, `muzicar`) VALUES
(3, 'Zivke1', 'Astroworld', 'Travis Scott'),
(5, 'laza', 'Blonde ', 'Frank Ocean'),
(6, 'aleksa', 'Up 2 Me', 'Yeat'),
(7, 'aleksa', '2 Alive', 'Yeat'),
(8, 'nadja', 'DAMN', 'Kendrick Lamar'),
(9, 'nadja', 'Madvillany', 'MFDOOm');

-- --------------------------------------------------------

--
-- Table structure for table `ploca`
--

CREATE TABLE `ploca` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `ime_ploce` text NOT NULL,
  `muzicar` text NOT NULL,
  `produkcijska_kuca` text NOT NULL,
  `cena` decimal(10,0) NOT NULL,
  `stanje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ploca`
--

INSERT INTO `ploca` (`id`, `url`, `ime_ploce`, `muzicar`, `produkcijska_kuca`, `cena`, `stanje`) VALUES
(19, 'IMG-62b4e0fddf6b05.63130785.jpg', 'Joji', 'Joji', '92Studio', '3000', 100),
(20, 'IMG-62b4e10ed92c20.41928961.jpg', 'Damn', 'Kendrick Lamar', 'TDEStudio', '5000', 100),
(21, 'IMG-62b4e127d207d2.29977981.jpg', 'Igor', 'Tyer the Creator', 'TylerProduction', '6000', 50),
(22, 'IMG-62b4e136109da9.04627631.jpg', 'Asap', 'Asap Rocky', 'AsapMob', '5000', 100),
(23, 'IMG-62b4e14d572649.19850145.jpg', '2014 Forest Hills Drive', 'J Cole', 'JColeProduction', '3000', 100),
(24, 'IMG-62b63bed27f580.36656673.jpg', 'Good Kid Maad City', 'Kendrick Lamar', 'TDERecords', '4000', 20),
(26, 'IMG-62b63cd6371619.01977098.jpg', 'Discovery', 'Daft Punk', 'DaftRecords', '5000', 16),
(27, 'IMG-62c7441fd50d64.40913838.jpg', 'Plaza', 'Capo Plaza', 'Nznmmorabude', '5000', 200);

-- --------------------------------------------------------

--
-- Table structure for table `poruka`
--

CREATE TABLE `poruka` (
  `id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `ime` text NOT NULL,
  `prezime` text NOT NULL,
  `telefon` text NOT NULL,
  `tekst_poruke` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poruka`
--

INSERT INTO `poruka` (`id`, `user_name`, `ime`, `prezime`, `telefon`, `tekst_poruke`) VALUES
(2, 'Zivke1', 'Marko', 'Zivanovic', '063474831', 'I cant find the album i am looking for!'),
(4, 'laza', 'Marko', 'Zivanovic', '063464831', 'Testing phone validation!'),
(5, 'laza', 'Pera', 'Peric', '295859283', 'Very plesent website is all i can say!'),
(6, 'laza', 'Djoka', 'Djokic', '083749283', 'All the great albums you have!!!!'),
(8, 'nadja', 'Steva', 'Stevic', '124385291', 'Bad bad bad bad bad!\r\n'),
(9, 'nadja', 'Djoka', 'Djokic', '032948293', 'Very good website is all i can say!'),
(10, 'nadja', 'Djoka', 'Djokic', '275839102', 'GOOOODDD!!!!!'),
(11, 'nadja', 'Koki', 'Koki', '028324983', 'Website is veary proffestional!\r\n'),
(12, 'nadja', 'Stipe', 'Dredic', '221503978', 'I love the website!!!'),
(13, 'nadja', 'Krsta', 'Krstic', '513245687', '100 % best website out there!');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `mail` text NOT NULL,
  `admin` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `mail`, `admin`) VALUES
(2, 'zivkealt', '45f8157ef020086334c5db8c9bfd6bee', 'ZivkeAdmin', 'zivkeAdmin@gmail.com', 1),
(3, 'korisnik', '716b64c0f6bad9ac405aab3f00958dd1', 'ime', 'korisnik@gmail.com', 0),
(5, 'Zivke1', '081ad1b4de509ce4710639d335a64445', 'Marko', 'zivke1@gmail.com', 0),
(6, 'peraperic', 'd8795f0d07280328f80e59b1e8414c49', 'pera', 'pera@gmail.com', 0),
(7, 'laza', '767fdd322137520a943c56285f51953f', 'laza', 'laza@gmail.com', 0),
(8, 'nidza', '956a5d094200b95f6dc4ddd19ff583af', 'nidza', 'nidza@gmail.com', 0),
(9, 'steva', '0b00bb92f296e3d9fdb72e8b2704fff9', 'steva', 'steva@gmail.com', 0),
(10, 'nadja', '7b5d5ba2931542c307e327133b4ec9dd', 'nadja', 'nadja@gmail.com', 0),
(11, 'aleksa', 'd58b26f8345673cbd7f178a02b8ce4ea', 'aleksa', 'aleksa@gmail.com', 0),
(12, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zalba`
--

CREATE TABLE `zalba` (
  `id` int(11) NOT NULL,
  `user_zalba` text NOT NULL,
  `zalba_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zalba`
--

INSERT INTO `zalba` (`id`, `user_zalba`, `zalba_text`) VALUES
(10, 'Zivke1', 'Very good webiste!'),
(11, 'laza', 'Cant get enough of this website!'),
(12, 'aleksa', 'Not enough albums!!!\r\n'),
(13, 'aleksa', 'I feel that this website is growing on me!\r\n'),
(14, 'nadja', 'Very good website cant get enough of it!!!'),
(16, 'nidza', 'Cant get enough of this website!'),
(17, 'steva', 'I am stunned by this webstie!'),
(18, 'korisnik', 'Wow what an amazin thing!'),
(19, 'korisnik', 'Very bad website!!!'),
(20, 'nadja', 'What a great place to hangout!!!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lista_zelja`
--
ALTER TABLE `lista_zelja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ploca`
--
ALTER TABLE `ploca`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poruka`
--
ALTER TABLE `poruka`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zalba`
--
ALTER TABLE `zalba`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lista_zelja`
--
ALTER TABLE `lista_zelja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ploca`
--
ALTER TABLE `ploca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `poruka`
--
ALTER TABLE `poruka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `zalba`
--
ALTER TABLE `zalba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
