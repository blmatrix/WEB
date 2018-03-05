-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2017 at 01:09 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `bg_payin`
--

CREATE TABLE `bg_payin` (
  `id` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `bet_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `draw_code` int(11) NOT NULL,
  `draw_time` int(11) NOT NULL,
  `currency` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `retrying` int(11) NOT NULL,
  `bet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `odd` int(11) NOT NULL,
  `bet_time` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_balance_before` int(11) NOT NULL,
  `user_balance_after` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bg_payin`
--

INSERT INTO `bg_payin` (`id`, `transaction_id`, `bet_id`, `amount`, `draw_code`, `draw_time`, `currency`, `retrying`, `bet`, `odd`, `bet_time`, `user_id`, `user_balance_before`, `user_balance_after`) VALUES
(55, 1352, 1688, 1311, 2147483647, 1503636771, 'eur', 0, 'Selected ball will be dropped with No. 1,...,42(1, 3, 10)', 6, 1503636771, 1, 753296, 751985),
(56, 1353, 1689, 1311, 2147483647, 1503636772, 'eur', 1, 'Selected ball will be dropped with No. 1,...,42(1, 3, 10)', 6, 1503636772, 1, 751985, 750674),
(57, 2630, 2340, 753396, 2147483647, 1503636789, 'eur', 0, 'Selected ball will be dropped with No. 1,...,42(1, 3, 10)', 6, 1503636789, 1, 753396, 0),
(58, 311837, 316289, 880, 2147483647, 1503636799, 'eur', 0, 'Selected ball will be dropped with No. 1,...,42(1, 3, 10)', 6, 1503636799, 1, 753396, 752516),
(59, 318245, 315637, 111, 2147483647, 1503636799, 'eur', 0, 'Selected ball will be dropped with No. 1,...,42(1, 3, 10)', 6, 1503636799, 1, 753396, 753285),
(60, 312706, 317573, 113, 2147483647, 1503636799, 'eur', 0, 'Selected ball will be dropped with No. 1,...,42(1, 3, 10)', 6, 1503636799, 1, 753396, 753283),
(61, 5647, 5928, 100, 2147483647, 1503636816, 'eur', 0, 'Selected ball will be dropped with No. 1,...,42(1, 3, 10)', 6, 1503636816, 1, 753396, 753296),
(62, 22306, 22644, 100, 2147483647, 1503637037, 'eur', 0, 'Selected ball will be dropped with No. 1,...,42(1, 3, 10)', 6, 1503637037, 1, 753396, 753296),
(63, 1534, 1637, 1311, 2147483647, 1503638795, 'eur', 0, 'Selected ball will be dropped with No. 1,...,42(1, 3, 10)', 6, 1503638795, 1, 753396, 752085),
(64, 1535, 1638, 1311, 2147483647, 1503638795, 'eur', 1, 'Selected ball will be dropped with No. 1,...,42(1, 3, 10)', 6, 1503638795, 1, 752085, 750774),
(65, 1420, 1624, 1311, 2147483647, 1503638801, 'eur', 0, 'Selected ball will be dropped with No. 1,...,42(1, 3, 10)', 6, 1503638801, 1, 753496, 752185),
(66, 1421, 1625, 1311, 2147483647, 1503638801, 'eur', 1, 'Selected ball will be dropped with No. 1,...,42(1, 3, 10)', 6, 1503638801, 1, 752185, 750874),
(67, 2632, 2157, 753596, 2147483647, 1503638812, 'eur', 0, 'Selected ball will be dropped with No. 1,...,42(1, 3, 10)', 6, 1503638812, 1, 753596, 0),
(68, 319358, 318289, 880, 2147483647, 1503638826, 'eur', 0, 'Selected ball will be dropped with No. 1,...,42(1, 3, 10)', 6, 1503638826, 1, 753596, 752716),
(69, 315727, 312658, 111, 2147483647, 1503638826, 'eur', 0, 'Selected ball will be dropped with No. 1,...,42(1, 3, 10)', 6, 1503638826, 1, 753596, 753485),
(70, 312549, 319872, 113, 2147483647, 1503638827, 'eur', 0, 'Selected ball will be dropped with No. 1,...,42(1, 3, 10)', 6, 1503638827, 1, 753596, 753483),
(71, 4423, 4375, 100, 2147483647, 1503638839, 'eur', 0, 'Selected ball will be dropped with No. 1,...,42(1, 3, 10)', 6, 1503638839, 1, 753596, 753496),
(72, 5929, 5429, 100, 2147483647, 1503638853, 'eur', 0, 'Selected ball will be dropped with No. 1,...,42(1, 3, 10)', 6, 1503638853, 1, 753496, 753396),
(73, 22192, 22208, 100, 2147483647, 1503639413, 'eur', 0, 'Selected ball will be dropped with No. 1,...,42(1, 3, 10)', 6, 1503639413, 1, 753496, 753396),
(74, 123456, 123456, 1234, 2147483647, 1503640559, 'eur', 1, 'Selected ball will be dropped with No. 1,...,42(1, 3, 10)', 6, 1503640559, 1, 753496, 752262),
(75, 5862, 5439, 100, 2147483647, 1503640686, 'eur', 0, 'Selected ball will be dropped with No. 1,...,42(1, 3, 10)', 6, 1503640686, 1, 753496, 753396),
(76, 29, 15, 20000, 2147483647, 1503642000, 'eur', 0, 'Player wins', 2, 1503641998, 1, 753496, 733496),
(77, 30, 16, 20000, 2147483647, 1503642000, 'eur', 0, 'Dealer wins', 1, 1503642013, 1, 733496, 713496),
(78, 33, 17, 100, 2147483647, 1503642060, 'eur', 0, 'Dealer wins', 5, 1503642084, 1, 754296, 754196),
(79, 35, 18, 20000, 2147483647, 1503643500, 'eur', 0, 'Two pairs wins', 2, 1503643562, 1, 754196, 734196),
(80, 37, 19, 2000, 2147483647, 1503653880, 'eur', 0, 'Player wins', 2, 1503653873, 1, 780396, 778396),
(81, 38, 20, 2000, 2147483647, 1503653880, 'eur', 0, 'Dealer wins', 2, 1503653875, 1, 778396, 776396),
(82, 1747, 1405, 1311, 2147483647, 1503657355, 'eur', 0, 'Selected ball will be dropped with No. 1,...,42(1, 3, 10)', 6, 1503657355, 1, 776396, 775085),
(83, 1748, 1406, 1311, 2147483647, 1503657356, 'eur', 1, 'Selected ball will be dropped with No. 1,...,42(1, 3, 10)', 6, 1503657356, 1, 775085, 773774),
(84, 1846, 1478, 1311, 2147483647, 1503657411, 'eur', 0, 'Selected ball will be dropped with No. 1,...,42(1, 3, 10)', 6, 1503657411, 1, 773774, 772463),
(85, 1847, 1479, 1311, 2147483647, 1503657411, 'eur', 1, 'Selected ball will be dropped with No. 1,...,42(1, 3, 10)', 6, 1503657411, 1, 772463, 771152),
(86, 41, 21, 5000, 2147483647, 1503915000, 'eur', 0, 'Hand 6 wins', 4, 1503915065, 1, 773874, 768874),
(87, 43, 22, 20000, 2147483647, 1503916200, 'eur', 0, 'One pair wins', 4, 1503916336, 1, 787024, 767024),
(88, 44, 23, 20000, 2147483647, 1503916200, 'eur', 0, 'Flush wins', 5, 1503916403, 1, 767024, 747024),
(89, 45, 24, 20000, 2147483647, 1503916200, 'eur', 0, 'Hand 6 wins', 2, 1503916409, 1, 747024, 727024),
(90, 49, 25, 5000, 2147483647, 1503921960, 'eur', 0, 'Player wins', 2, 1503921954, 1, 763824, 758824),
(91, 51, 26, 5000, 2147483647, 1503922020, 'eur', 0, 'Dealer wins', 2, 1503922015, 1, 758824, 753824),
(92, 53, 27, 5000, 2147483647, 1503922080, 'eur', 0, 'Player wins', 2, 1503922074, 1, 764074, 759074),
(93, 55, 28, 5000, 2147483647, 1503922140, 'eur', 0, 'Dealer wins', 2, 1503922134, 1, 769274, 764274),
(94, 57, 29, 5000, 2147483647, 1503922200, 'eur', 0, 'Player wins', 2, 1503922195, 1, 774474, 769474),
(95, 59, 30, 10000, 2147483647, 1503922200, 'eur', 0, 'Flush wins', 2, 1503922329, 1, 789874, 779874),
(96, 61, 31, 10000, 2147483647, 1504085400, 'eur', 0, 'One pair wins', 4, 1504085527, 1, 779874, 769874),
(97, 62, 32, 10000, 2147483647, 1504085400, 'eur', 0, 'Two pairs wins', 2, 1504085589, 1, 769874, 759874),
(98, 65, 33, 20000, 2147483647, 1504085640, 'eur', 0, 'Player wins', 1, 1504085664, 1, 759874, 739874),
(99, 67, 34, 20000, 2147483647, 1504085700, 'eur', 0, 'Player wins', 2, 1504085699, 1, 739874, 719874),
(100, 68, 35, 20000, 2147483647, 1504085700, 'eur', 0, 'Dealer wins', 1, 1504085715, 1, 740674, 720674),
(101, 71, 36, 20000, 2147483647, 1504085760, 'eur', 0, 'Player wins', 2, 1504085758, 1, 720674, 700674),
(102, 72, 37, 20000, 2147483647, 1504085760, 'eur', 0, 'Dealer wins', 1, 1504085779, 1, 729674, 709674),
(103, 75, 38, 20000, 2147483647, 1504085820, 'eur', 0, 'Player wins', 2, 1504085816, 1, 709674, 689674),
(104, 77, 39, 20000, 2147483647, 1504085880, 'eur', 0, 'Dealer wins', 2, 1504085879, 1, 711874, 691874),
(105, 79, 40, 20000, 2147483647, 1504085940, 'eur', 0, 'Dealer wins', 1, 1504085967, 1, 773874, 753874),
(106, 81, 41, 20000, 2147483647, 1504086000, 'eur', 0, 'Player wins', 2, 1504085999, 1, 753874, 733874),
(107, 83, 42, 20000, 2147483647, 1504086060, 'eur', 0, 'Player wins', 1, 1504086087, 1, 799474, 779474),
(108, 85, 43, 20000, 2147483647, 1504086205, 'eur', 0, 'Red dice wins', 2, 1504086159, 1, 800074, 780074),
(109, 86, 44, 20000, 2147483647, 1504086205, 'eur', 0, 'Blue dice wins', 2, 1504086163, 1, 780074, 760074),
(110, 89, 45, 20000, 2147483647, 1504086385, 'eur', 0, 'Red dice wins', 2, 1504086239, 1, 760074, 740074),
(111, 90, 46, 20000, 2147483647, 1504086385, 'eur', 0, 'Blue dice wins', 2, 1504086243, 1, 785074, 765074);

-- --------------------------------------------------------

--
-- Table structure for table `bg_payout`
--

CREATE TABLE `bg_payout` (
  `id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `currency` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bet_id` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `retrying` int(11) NOT NULL,
  `balance_before` int(11) NOT NULL,
  `balance_after` int(11) NOT NULL,
  `already_processed` int(11) NOT NULL,
  `payout_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bg_payout`
--

INSERT INTO `bg_payout` (`id`, `player_id`, `amount`, `currency`, `bet_id`, `transaction_id`, `retrying`, `balance_before`, `balance_after`, `already_processed`, `payout_time`) VALUES
(33, 1, 1411, 'eur', 1688, 1354, 0, 750674, 752085, 1, 1503643972),
(34, 1, 1311, 'eur', 1689, 1355, 1, 752085, 753396, 1, 1503643972),
(35, 1, 753396, 'eur', 2340, 2631, 0, 0, 753396, 1, 1503643989),
(36, 1, 880, 'eur', 316289, 311838, 0, 752516, 753396, 1, 1503643999),
(37, 1, 111, 'eur', 315637, 318246, 0, 753285, 753396, 1, 1503643999),
(38, 1, 113, 'eur', 317573, 312707, 0, 753283, 753396, 1, 1503643999),
(39, 1, 100, 'eur', 5928, 5648, 0, 753296, 753396, 1, 1503644086),
(40, 1, 100, 'eur', 22644, 22307, 0, 753296, 753396, 1, 1503644237),
(41, 1, 1411, 'eur', 1637, 1536, 0, 750774, 752185, 1, 1503645995),
(42, 1, 1311, 'eur', 1638, 1537, 1, 752185, 753496, 1, 1503645995),
(43, 1, 1411, 'eur', 1624, 1422, 0, 750874, 752285, 1, 1503646001),
(44, 1, 1311, 'eur', 1625, 1423, 1, 752285, 753596, 1, 1503646001),
(45, 1, 753596, 'eur', 2157, 2633, 0, 0, 753596, 1, 1503646012),
(46, 1, 880, 'eur', 318289, 319359, 0, 752716, 753596, 1, 1503646026),
(47, 1, 111, 'eur', 312658, 315728, 0, 753485, 753596, 1, 1503646026),
(48, 1, 113, 'eur', 319872, 312550, 0, 753483, 753596, 1, 1503646027),
(49, 1, 0, 'eur', 4375, 4424, 0, 753496, 753496, 1, 1503646039),
(50, 1, 100, 'eur', 5429, 5930, 0, 753396, 753496, 1, 1503646124),
(51, 1, 100, 'eur', 22208, 22193, 0, 753396, 753496, 1, 1503646613),
(52, 1, 1234, 'eur', 123456, 123456, 1, 752262, 753496, 1, 1503647773),
(53, 1, 100, 'eur', 5439, 5863, 0, 753396, 753496, 1, 1503647956),
(54, 1, 40800, 'eur', 15, 31, 0, 713496, 754296, 1, 1503649261),
(55, 1, 0, 'eur', 16, 32, 0, 754296, 754296, 1, 1503649262),
(56, 1, 0, 'eur', 17, 34, 0, 754196, 754196, 1, 1503649322),
(57, 1, 46200, 'eur', 18, 36, 0, 734196, 780396, 1, 1503650941),
(58, 1, 0, 'eur', 19, 39, 0, 776396, 776396, 1, 1503661142),
(59, 1, 0, 'eur', 20, 40, 0, 776396, 776396, 1, 1503661142),
(60, 1, 1411, 'eur', 1478, 1848, 0, 771152, 772563, 1, 1503664611),
(61, 1, 1311, 'eur', 1479, 1849, 1, 772563, 773874, 1, 1503664612),
(62, 1, 18150, 'eur', 21, 42, 0, 768874, 787024, 1, 1503922443),
(63, 1, 0, 'eur', 22, 46, 0, 727024, 727024, 1, 1503923702),
(64, 1, 0, 'eur', 23, 47, 0, 727024, 727024, 1, 1503923702),
(65, 1, 36800, 'eur', 24, 48, 0, 727024, 763824, 1, 1503923703),
(66, 1, 10250, 'eur', 25, 50, 0, 753824, 764074, 1, 1503929222),
(67, 1, 10200, 'eur', 26, 52, 0, 759074, 769274, 1, 1503929283),
(68, 1, 10200, 'eur', 27, 54, 0, 764274, 774474, 1, 1503929342),
(69, 1, 10200, 'eur', 28, 56, 0, 769474, 779674, 1, 1503929402),
(70, 1, 10200, 'eur', 29, 58, 0, 779674, 789874, 1, 1503929462),
(71, 1, 0, 'eur', 30, 60, 0, 779874, 779874, 1, 1503929642),
(72, 1, 0, 'eur', 31, 63, 0, 719874, 719874, 1, 1504092902),
(73, 1, 0, 'eur', 32, 64, 0, 719874, 719874, 1, 1504092902),
(74, 1, 20800, 'eur', 33, 66, 0, 719874, 740674, 1, 1504092902),
(75, 1, 0, 'eur', 34, 69, 0, 700674, 700674, 1, 1504092962),
(76, 1, 29000, 'eur', 35, 70, 0, 700674, 729674, 1, 1504092962),
(77, 1, 0, 'eur', 36, 73, 0, 689674, 689674, 1, 1504093021),
(78, 1, 22200, 'eur', 37, 74, 0, 689674, 711874, 1, 1504093022),
(79, 1, 41000, 'eur', 38, 76, 0, 691874, 732874, 1, 1504093082),
(80, 1, 41000, 'eur', 39, 78, 0, 732874, 773874, 1, 1504093141),
(81, 1, 24600, 'eur', 40, 80, 0, 733874, 758474, 1, 1504093201),
(82, 1, 41000, 'eur', 41, 82, 0, 758474, 799474, 1, 1504093265),
(83, 1, 20600, 'eur', 42, 84, 0, 779474, 800074, 1, 1504093321),
(84, 1, 45000, 'eur', 43, 87, 0, 740074, 785074, 1, 1504093442),
(85, 1, 0, 'eur', 44, 88, 0, 785074, 785074, 1, 1504093442),
(86, 1, 45000, 'eur', 45, 91, 0, 765074, 810074, 1, 1504093622),
(87, 1, 0, 'eur', 46, 92, 0, 810074, 810074, 1, 1504093622);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `balance` int(11) NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token_life` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `balance`, `token`, `token_life`) VALUES
(1, 'test', 'test', 810074, '87af4c1a-2f492822-bbf9e000-62a81910', 1504251345);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bg_payin`
--
ALTER TABLE `bg_payin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bg_payout`
--
ALTER TABLE `bg_payout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bg_payin`
--
ALTER TABLE `bg_payin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `bg_payout`
--
ALTER TABLE `bg_payout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
