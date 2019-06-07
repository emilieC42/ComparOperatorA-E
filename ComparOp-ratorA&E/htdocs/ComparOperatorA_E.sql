-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jun 07, 2019 at 12:14 PM
-- Server version: 10.3.13-MariaDB-1:10.3.13+maria~bionic
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ComparOperatorA&E`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(10) NOT NULL,
  `location` varchar(150) NOT NULL,
  `price` int(10) NOT NULL,
  `id_tour_operator` int(10) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `pathImg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `location`, `price`, `id_tour_operator`, `ville`, `pathImg`) VALUES
(19, 'Espagne', 633, 1, 'Gijón', '/assets/img/upload/Gijon.jpg'),
(20, 'Espagne', 650, 22, 'Gijón', '/assets/img/upload/Gijon.jpg'),
(21, 'Espagne', 700, 23, 'Gijón', '/assets/img/upload/Gijon.jpg'),
(26, 'Espagne', 780, 24, 'Gijón', '../../assets/img/upload/Gijon.jpg'),
(29, 'Espagne', 650, 25, 'Gijón', '../../assets/img/upload/Gijon.jpg'),
(30, 'Espagne', 650, 9999, 'Gijón', '../../assets/img/upload/Gijon.jpg'),
(31, 'Île de La Réunion', 1454, 1, 'Saint-Gilles les Bains', '../../assets/img/upload/Saint-Gilles les Bains.jpg'),
(32, 'Île de La Réunion', 1454, 9999, 'Saint-Gilles les Bains', '../../assets/img/upload/Saint-Gilles les Bains.jpg'),
(33, 'Île de La Réunion', 1500, 22, 'Saint-Gilles les Bains', '../../assets/img/upload/Saint-Gilles les Bains.jpg'),
(47, 'Île de La Réunion', 1450, 23, 'Saint-Gilles les Bains', '../../assets/img/upload/Saint-Gilles les Bains.jpg'),
(52, 'Île de La Réunion', 1200, 24, 'Saint-Gilles les Bains', '../../assets/img/upload/Saint-Gilles les Bains.jpg'),
(53, 'Île de La Réunion', 1299, 25, 'Saint-Gilles les Bains', '../../assets/img/upload/Saint-Gilles les Bains.jpg'),
(54, 'Grèce', 734, 1, 'Héraklion', '../../assets/img/upload/Heraklion.jpg'),
(55, 'Grèce', 734, 9999, 'Héraklion', '../../assets/img/upload/Heraklion.jpg'),
(56, 'Grèce', 720, 22, 'Héraklion', '../../assets/img/upload/Heraklion.jpg'),
(57, 'Grèce', 740, 23, 'Héraklion', '../../assets/img/upload/Heraklion.jpg'),
(58, 'Grèce', 725, 24, 'Héraklion', '../../assets/img/upload/Heraklion.jpg'),
(59, 'Grèce', 739, 25, 'Héraklion', '../../assets/img/upload/Heraklion.jpg'),
(60, 'Italie', 681, 1, 'Palerme', '../../assets/img/upload/Palerme.jpg'),
(61, 'Italie', 681, 9999, 'Palerme', '../../assets/img/upload/Palerme.jpg'),
(62, 'Italie', 675, 22, 'Palerme', '../../assets/img/upload/Palerme.jpg'),
(64, 'Italie', 650, 23, 'Palerme', '../../assets/img/upload/Palerme.jpg'),
(65, 'Italie', 689, 24, 'Palerme', '../../assets/img/upload/Palerme.jpg'),
(66, 'Italie', 676, 25, 'Palerme', '../../assets/img/upload/Palerme.jpg'),
(67, 'Portugal', 444, 1, 'Ílhavo', '../../assets/img/upload/lhavo.jpg'),
(68, 'Portugal', 444, 9999, 'Ílhavo', '../../assets/img/upload/lhavo.jpg'),
(69, 'Portugal', 430, 22, 'Ílhavo', '../../assets/img/upload/lhavo.jpg'),
(70, 'Portugal', 445, 23, 'Ílhavo', '../../assets/img/upload/lhavo.jpg'),
(71, 'Portugal', 449, 24, 'Ílhavo', '../../assets/img/upload/lhavo.jpg'),
(72, 'Portugal', 442, 25, 'Ílhavo', '../../assets/img/upload/lhavo.jpg'),
(73, 'États-Unis - Californie', 2040, 1, 'San José', '../../assets/img/upload/San Jose.jpg'),
(74, 'États-Unis - Californie', 2040, 9999, 'San José', '../../assets/img/upload/San Jose.jpg'),
(75, 'États-Unis - Californie', 2035, 22, 'San José', '../../assets/img/upload/San Jose.jpg'),
(76, 'États-Unis - Californie', 2045, 23, 'San José', '../../assets/img/upload/San Jose.jpg'),
(77, 'États-Unis - Californie', 2044, 24, 'San José', '../../assets/img/upload/San Jose.jpg'),
(78, 'États-Unis - Californie', 2036, 25, 'San José', '../../assets/img/upload/San Jose.jpg'),
(79, 'Canada', 1374, 1, 'Québec', '../../assets/img/upload/Quebec.jpeg'),
(80, 'Canada', 1374, 9999, 'Québec', '../../assets/img/upload/Quebec.jpeg'),
(81, 'Canada', 1380, 22, 'Québec', '../../assets/img/upload/Quebec.jpeg'),
(82, 'Canada', 1370, 23, 'Québec', '../../assets/img/upload/Quebec.jpeg'),
(83, 'Canada', 1385, 24, 'Québec', '../../assets/img/upload/Quebec.jpeg'),
(84, 'Canada', 1378, 25, 'Québec', '../../assets/img/upload/Quebec.jpeg'),
(85, 'France', 1423, 1, 'Paris', '../../assets/img/upload/paris.jpg'),
(86, 'France', 1423, 9999, 'Paris', '../../assets/img/upload/paris.jpg'),
(87, 'France', 1400, 22, 'Paris', '../../assets/img/upload/paris.jpg'),
(88, 'France', 1426, 23, 'Paris', '../../assets/img/upload/paris.jpg'),
(90, 'France', 1415, 24, 'Paris', '../../assets/img/upload/paris.jpg'),
(91, 'France', 1428, 25, 'Paris', '../../assets/img/upload/paris.jpg'),
(98, 'Russie', 548, 1, 'Moscou', '../../assets/img/upload/moscou.jpg'),
(99, 'Russie', 548, 9999, 'Moscou', '../../assets/img/upload/moscou.jpg'),
(100, 'Russie', 560, 22, 'Moscou', '../../assets/img/upload/moscou.jpg'),
(102, 'Russie', 539, 23, 'Moscou', '../../assets/img/upload/moscou.jpg'),
(103, 'Russie', 545, 24, 'Moscou', '../../assets/img/upload/moscou.jpg'),
(104, 'Russie', 541, 25, 'Moscou', '../../assets/img/upload/moscou.jpg'),
(105, 'Unguja - Tanzanie', 1152, 1, 'Zanzibar', '../../assets/img/upload/Zanzibar.jpg'),
(106, 'Unguja - Tanzanie', 1152, 9999, 'Zanzibar', '../../assets/img/upload/Zanzibar.jpg'),
(107, 'Unguja - Tanzanie', 1155, 22, 'Zanzibar', '../../assets/img/upload/Zanzibar.jpg'),
(108, 'Unguja - Tanzanie', 1149, 23, 'Zanzibar', '../../assets/img/upload/Zanzibar.jpg'),
(109, 'Unguja - Tanzanie', 1148, 24, 'Zanzibar', '../../assets/img/upload/Zanzibar.jpg'),
(110, 'Unguja - Tanzanie', 1150, 25, 'Zanzibar', '../../assets/img/upload/Zanzibar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) NOT NULL,
  `message` varchar(250) NOT NULL,
  `author` varchar(150) NOT NULL,
  `id_tour_operator` int(10) NOT NULL,
  `vote` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `message`, `author`, `id_tour_operator`, `vote`) VALUES
(1, 'super club !', 'alex', 1, 0),
(22, 'cool!', 'pedro', 22, 0),
(35, 'Génial!!!', 'axel', 23, 0),
(40, 'pedro', 'R', 1, 5),
(41, 'zefse', 'e', 1, 5),
(43, 'axel', 'génial', 1, 5),
(44, 'axel', 'génial', 1, 5),
(45, 'axel', 'e', 1, 0),
(46, 'cc', 'emilie', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tour_operators`
--

CREATE TABLE `tour_operators` (
  `id` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `grade` float NOT NULL DEFAULT 0,
  `link` varchar(255) NOT NULL,
  `is_premium` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tour_operators`
--

INSERT INTO `tour_operators` (`id`, `name`, `grade`, `link`, `is_premium`) VALUES
(1, 'Club Med', 2, 'https://www.clubmed.fr/', 1),
(22, 'Air France', 0, 'https://www.airfrance.fr/', 0),
(23, 'Sejours-voyages', 0, 'https://www.sejoursvoyages.com/', 1),
(24, 'La Française des Circuits', 0, 'https://www.lafrancaisedescircuits.biz/index.do?idMicro=', 0),
(25, 'Un Monde à Part', 0, 'https://www.unmondeadeux.com/', 0),
(9999, 'famtome', 5, 'aaaa', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_operator` (`id_tour_operator`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tour_operator` (`id_tour_operator`);

--
-- Indexes for table `tour_operators`
--
ALTER TABLE `tour_operators`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tour_operators`
--
ALTER TABLE `tour_operators`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `destinations`
--
ALTER TABLE `destinations`
  ADD CONSTRAINT `fk_operator` FOREIGN KEY (`id_tour_operator`) REFERENCES `tour_operators` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk_tour_operator` FOREIGN KEY (`id_tour_operator`) REFERENCES `tour_operators` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
