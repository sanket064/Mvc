-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 25, 2019 at 03:33 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sanket06_concert`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES
(1, 'Sanket', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'sanket064@gmail.com'),
(7, 'Sanket', '$2y$10$lzB6YBTLFsNvz1aaU2D0k.xTXcQJECv0E1lGs2J2C6mXk.xZZG8DS', 'sanket064@gmail.com'),
(8, 'sanket064', '$2y$10$tcLHcpreOY1hU./Yvj0eMuBERbcJLtSYX5hPAfJe1QMht/EDQvAZi', 'sanket064@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` mediumint(50) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `Name`) VALUES
(1, 'Music'),
(2, 'Drama'),
(3, 'Performance');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` mediumint(50) NOT NULL,
  `nTicketID` mediumint(9) NOT NULL,
  `nUserID` mediumint(9) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `nTicketID`, `nUserID`) VALUES
(68, 4, 0),
(61, 3, 1),
(53, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` mediumint(50) NOT NULL,
  `nInvoiceNumber` bigint(50) NOT NULL,
  `dateOrdered` datetime NOT NULL,
  `strFullName` varchar(255) NOT NULL,
  `nPrice` float(8,2) NOT NULL,
  `strEmail` varchar(255) NOT NULL,
  `strCardNumber` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `nInvoiceNumber`, `dateOrdered`, `strFullName`, `nPrice`, `strEmail`, `strCardNumber`) VALUES
(1, 20190531682993940, '2019-05-31 12:36:41', 'sadasd', 847.00, 'asdasd', '0'),
(2, 20190531741298822, '2019-05-31 12:43:44', 'sadasd', 847.00, 'asdasd', '0'),
(3, 20190603134197357, '2019-06-03 11:14:50', 'sanket', 450.00, 'asdasd', '0'),
(4, 20190607809985098, '2019-06-07 01:13:41', '', 494.00, '', '0'),
(5, 20190608171028697, '2019-06-08 12:50:38', '', 500.00, '', '0'),
(6, 20190608448957956, '2019-06-08 07:47:47', '', 350.00, '', '0'),
(7, 20190608948936691, '2019-06-08 11:20:02', 'sadasd', 85.00, 'sanket064@gmail.com', '0'),
(8, 20190608238844913, '2019-06-08 11:20:32', 'sadasd', 85.00, 'sanket064@gmail.com', '0'),
(9, 20190608796081696, '2019-06-08 11:22:39', 'sadasd', 85.00, 'sanket064@gmail.com', '0'),
(10, 20190608636877422, '2019-06-08 11:26:11', 'sanket', 85.00, 'sanket064@gmail.com', '0'),
(11, 20190608865693261, '2019-06-08 11:26:30', '575757575757575757', 85.00, 'sanket064@gmail.com', '0'),
(12, 2019060847803435, '2019-06-08 11:31:55', '575757575757575757', 85.00, 'sanket064@gmail.com', '0'),
(13, 20190608175221687, '2019-06-08 11:38:21', 'ALFA ACE', 50.00, 'sanket064@gmail.com', '575'),
(14, 20190608141168309, '2019-06-08 11:39:15', 'ALFA ACE', 50.00, 'sanket064@gmail.com', '7894561230'),
(15, 20190609466004322, '2019-06-09 12:42:42', 'ALFA ACE', 580.00, '45', '456'),
(16, 20190609843068430, '2019-06-09 12:43:45', 'ALFA ACE', 580.00, '45', '456'),
(17, 20190609353131412, '2019-06-09 12:44:15', 'ALFA ACE', 580.00, '45', '456'),
(18, 2019060991356895, '2019-06-09 12:45:04', 'ALFA ACE', 580.00, '45', '456'),
(19, 20190609963032971, '2019-06-09 12:45:23', '', 85.00, '', ''),
(20, 20190609669772914, '2019-06-09 12:46:18', '', 170.00, '', ''),
(21, 201906091884117, '2019-06-09 03:17:53', 'ALFA ACE', 85.00, 'sanket064@gmail.com', 'refe'),
(22, 20190609567869366, '2019-06-09 03:20:34', '', 170.00, '', ''),
(23, 20190609497947429, '2019-06-09 06:02:32', 'ALFA ACE', 450.00, 'sanket064@gmail.com', 'sdsad'),
(24, 20190609382165300, '2019-06-09 06:13:50', '', 425.00, '', ''),
(25, 20190609470631858, '2019-06-09 06:15:47', '', 425.00, '', ''),
(26, 20190609307174938, '2019-06-09 10:54:23', 'ALFA ACE', 255.00, 'sanket064@gmail.com', ''),
(27, 20190609439243827, '2019-06-09 10:54:46', 'ALFA ACE', 255.00, 'sanket064@gmail.com', ''),
(28, 20190609778539962, '2019-06-09 10:55:40', 'ALFA ACE', 85.00, 'sanket064@gmail.com', '755757'),
(29, 20190609244398835, '2019-06-09 10:56:02', '', 85.00, '', ''),
(30, 2019060930962043, '2019-06-09 09:24:23', '', 85.00, '', ''),
(31, 20190609895252597, '2019-06-09 11:48:35', '', 0.00, '', ''),
(32, 201906102186763, '2019-06-10 05:27:55', '', 705.00, '', ''),
(33, 20190610608135114, '2019-06-10 05:36:07', '', 50.00, '', ''),
(34, 20190610148972605, '2019-06-10 01:55:01', '', 85.00, '', ''),
(35, 20190610106822286, '2019-06-10 02:23:34', 'ALFA ACE', 85.00, 'sanket064@gmail.com', '4589221520'),
(36, 20190610189721207, '2019-06-10 10:51:26', '', 85.00, '', ''),
(37, 2019061032987974, '2019-06-10 10:51:43', '', 0.00, '', ''),
(38, 20190610355201130, '2019-06-10 05:15:02', '', 100.00, '', ''),
(39, 20190611938770281, '2019-06-11 03:59:13', 'Your Good', 22500.00, 'friend@gm.com', '24124124214'),
(40, 20190612295937959, '2019-06-12 09:21:45', '', 170.00, '', ''),
(41, 20190624677085769, '2019-06-24 05:59:36', 'ahmed123', 7650.00, 'vanartsahmed@gmail.com', ' ujj'),
(42, 20190626285236501, '2019-06-26 03:33:47', '', 450.00, '', ''),
(43, 20190626461062016, '2019-06-26 03:34:10', '', 0.00, '', ''),
(44, 20190626786438795, '2019-06-26 03:34:37', 'Nathan', 50.00, 'nathan@vanarts.com', '1234123412341234'),
(45, 20190628213347910, '2019-06-28 05:18:39', 'nathan', 85.00, 'nathan@vanarts.com', '1234123412341234'),
(46, 20190704690516566, '2019-07-04 06:35:40', '', 50.00, '', ''),
(47, 20190705743442091, '2019-07-05 10:06:11', 'ALFA ACE', 50.00, 'sanket064@gmail.com', '888'),
(48, 20190705533656180, '2019-07-05 10:08:26', 'ALFA ACE', 0.00, 'sanket064@gmail.com', '888'),
(49, 20190705779134027, '2019-07-05 10:08:32', 'ALFA ACE', 0.00, 'sanket064@gmail.com', '888'),
(50, 20190705985783126, '2019-07-05 10:08:51', 'ALFA ACE', 0.00, 'sanket064@gmail.com', '888'),
(51, 20190705410908908, '2019-07-05 10:09:02', 'ALFA ACE', 0.00, 'sanket064@gmail.com', '888'),
(52, 20190705655831656, '2019-07-05 10:14:04', '', 0.00, '', ''),
(53, 20190705499107992, '2019-07-05 10:14:39', '', 0.00, '', ''),
(54, 20190705305712713, '2019-07-05 10:15:44', '', 0.00, '', ''),
(55, 20190705346397063, '2019-07-05 10:16:03', '', 0.00, '', ''),
(56, 20190705210365432, '2019-07-05 10:16:27', '', 0.00, '', ''),
(57, 20190705182882675, '2019-07-05 10:16:30', '', 0.00, '', ''),
(58, 20190705572053012, '2019-07-05 10:23:39', '', 0.00, '', ''),
(59, 2019070532907925, '2019-07-05 10:24:07', '', 0.00, '', ''),
(60, 20190705866572801, '2019-07-05 10:26:46', '', 0.00, '', ''),
(61, 20190705366717010, '2019-07-05 10:27:29', '', 0.00, '', ''),
(62, 20190705172430896, '2019-07-05 10:27:35', '', 0.00, '', ''),
(63, 20190705219331390, '2019-07-05 10:28:35', '', 0.00, '', ''),
(64, 20190705112664096, '2019-07-05 10:29:11', '', 0.00, '', ''),
(65, 20190705794316056, '2019-07-05 10:31:41', '', 480.00, '', ''),
(66, 20190705210793798, '2019-07-05 10:32:13', '', 0.00, '', ''),
(67, 20190705491460984, '2019-07-05 10:32:35', '', 0.00, '', ''),
(68, 2019070543509839, '2019-07-05 10:32:44', '', 0.00, '', ''),
(69, 20190705120972117, '2019-07-05 10:32:51', '', 0.00, '', ''),
(70, 20190705742300297, '2019-07-05 10:33:03', '', 0.00, '', ''),
(71, 20190705472617619, '2019-07-05 10:33:10', '', 0.00, '', ''),
(72, 20190705565365056, '2019-07-05 10:33:26', '', 0.00, '', ''),
(73, 20190823260870921, '2019-08-23 08:23:44', '', 50.00, '', ''),
(74, 20190823774677782, '2019-08-23 08:23:49', '', 0.00, '', ''),
(75, 20190824737026540, '2019-08-24 04:42:45', '', 115.00, '', ''),
(76, 20190824676365475, '2019-08-24 04:43:40', '', 50.00, '', ''),
(77, 20190824785933164, '2019-08-24 04:44:32', 'ALFA ACE', 150.00, 'nehag093@gmail.com', '1654555'),
(78, 20190824433814262, '2019-08-24 04:58:04', 'ALFA ACE', 0.00, 'nehag093@gmail.com', '1654555'),
(79, 20190825353388140, '2019-08-25 03:41:48', '', 50.00, '', ''),
(80, 201908257458290, '2019-08-25 04:44:51', '', 150.00, '', ''),
(81, 20190825708287398, '2019-08-25 04:46:37', '', 480.00, '', ''),
(82, 20190825432157175, '2019-08-25 04:47:19', '', 960.00, '', ''),
(83, 20190825519312522, '2019-08-25 12:11:48', 'sanket', 50.00, 'sanket064@gmail.com', '12345'),
(84, 20190825176688062, '2019-08-25 12:20:57', 'sanket', 0.00, 'sanket064@gmail.com', '12345'),
(85, 2019082596654376, '2019-08-25 12:26:53', 'sanket', 480.00, 'sanket064@gmail.com', '44949491161'),
(86, 20190825480085415, '2019-08-25 12:31:31', '', 50.00, '', ''),
(87, 20190825762207165, '2019-08-25 05:52:38', '', 50.00, '', ''),
(88, 20190825485635634, '2019-08-25 12:52:59', '', 50.00, '', ''),
(89, 20190825887699707, '2019-08-25 01:02:14', '', 0.00, '', ''),
(90, 20190825376274292, '2019-08-25 06:06:39', '', 0.00, '', ''),
(91, 20190825434029930, '2019-08-25 06:09:38', '', 0.00, '', ''),
(92, 20190825216443585, '2019-08-25 06:12:03', '', 50.00, '', ''),
(93, 20190825776498506, '2019-08-25 06:22:07', 'dsdsa', 50.00, 'dasdasdas', 'dasdasdasd'),
(94, 20190825371497619, '2019-08-25 06:52:43', 'sdsdsd', 50.00, 'sdsds', 'dsds'),
(95, 2019082522147272, '2019-08-25 07:00:26', 'eff', 50.00, 'dfsf', 'sfsf'),
(96, 20190825870780657, '2019-08-25 07:15:14', 'fef', 50.00, 'asdasdasda', 'asdasdasdasdfuc'),
(97, 2019082531063140, '2019-08-25 07:24:40', 'vd', 100.00, 'vdfsd', 'fsfsf'),
(98, 20190825457285101, '2019-08-25 07:34:10', '', 50.00, '', ''),
(99, 20190825402665047, '2019-08-25 07:41:48', '', 99.00, '', ''),
(100, 20190825292695330, '2019-08-25 07:52:13', 'nknl', 300.00, 'mlml', 'lmlm'),
(101, 20190825456368164, '2019-08-25 07:59:32', 'knknk', 50.00, 'onon', 'jojo'),
(102, 2019082530495481, '2019-08-25 08:18:19', 'mlmll', 960.00, 'mlmlml', 'mlmlm'),
(103, 2019082523999917, '2019-08-25 08:19:57', '', 480.00, '', ''),
(104, 20190825584767405, '2019-08-25 03:31:43', '', 450.00, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `invoices_tickets`
--

CREATE TABLE `invoices_tickets` (
  `id` int(11) NOT NULL,
  `nInvoiceID` int(11) NOT NULL,
  `nTicketID` int(11) NOT NULL,
  `nQuantity` int(11) NOT NULL,
  `nPrice` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `invoices_tickets`
--

INSERT INTO `invoices_tickets` (`id`, `nInvoiceID`, `nTicketID`, `nQuantity`, `nPrice`) VALUES
(1, 79, 2, 1, 50),
(2, 80, 2, 3, 50),
(3, 81, 3, 1, 480),
(4, 82, 3, 2, 480),
(5, 87, 2, 1, 50),
(6, 92, 2, 1, 50),
(7, 93, 2, 1, 50),
(8, 95, 2, 1, 50),
(9, 96, 2, 1, 50),
(10, 97, 2, 2, 50),
(11, 98, 2, 1, 50),
(12, 99, 2, 1, 99),
(13, 100, 2, 6, 50),
(14, 101, 2, 1, 50),
(15, 102, 3, 2, 480),
(16, 103, 3, 1, 480),
(17, 104, 2, 9, 50);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(255) NOT NULL,
  `strName` varchar(255) NOT NULL,
  `strDate` varchar(255) NOT NULL,
  `strTime` varchar(255) NOT NULL,
  `strDescription` text NOT NULL,
  `strLocation` varchar(255) NOT NULL,
  `nQuantity` mediumint(255) NOT NULL,
  `nPrice` float(10,2) NOT NULL,
  `strImage` varchar(255) NOT NULL,
  `nCategoryID` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `strName`, `strDate`, `strTime`, `strDescription`, `strLocation`, `nQuantity`, `nPrice`, `strImage`, `nCategoryID`) VALUES
(2, 'The Heaven', '2019-06-08', '03:37 Pm', 'Here Is my next Show', 'France', 179, 50.00, 'music3.jpg', 2),
(3, 'Magician', '2019-08-09', '03:39 Pm', 'Another Show', 'Brazil', 497, 480.00, 'music7.jpg', 1),
(4, 'Power House', '2019-06-08', '10:26 Pm', 'Another great victory', 'china', 50, 450.00, 'music5.jpg', 1),
(5, 'Nature Power', '2019-06-09', '6:14 AM', 'I am the power', 'Thailand', 0, 450.00, 'music4.jpg', 3),
(6, 'The Rising Star', '2019-08-12', '10:30 PM', 'Don\'t miss the chance for the great day', 'montreal', 0, 105.00, 'music1.jpg', 2),
(7, 'The Great Nation Voice', '2019-09-21', '07:45 PM', 'Lets rock the party', 'abbotsford', 0, 120.00, 'music6.jpg', 3),
(8, 'The last world', '2019-10-23', '09:45 PM', 'Lets Begin the party', 'Vancouver', 500, 210.00, 'music2.jpg', 3),
(9, 'The Indian Music Festival', '2019-09-29', '08:14 PM', 'Let show the world how is the best', 'Langely', 100, 200.00, 'music8.jpg', 2),
(17, 'African', '2111', '12:40 Pm', 'I have the party hour', 'British Columbia', 0, 89.00, 'amazon-audible-banner.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Username`, `Password`, `Email`) VALUES
(1, 'sanket', '$2y$12$tYN8kLfqCfVvUxEXquYxYOxy6U6nFmuSx4bPZmuUd.hYmyBF9t5O6', ''),
(2, 'vikrant@gmail.com', '$2y$12$tYN8kLfqCfVvUxEXquYxYOxy6U6nFmuSx4bPZmuUd.hYmyBF9t5O6', ''),
(5, 'neha', '$2y$10$gO0eh/waLUu16h3pmgxdHeUH85XTkDmkh1.ii7Ifxz2lgRveaf07y', 'neah'),
(6, 'fire', '$2y$10$VeGaIay4YFj3Vz3QTcPIXOex31Knma.1Bcmq4Dl5Y160fIoqgv422', 'fire@gmail.com'),
(7, 'Unicorn', '$2y$10$T2aePEPyO/IaeIhop6dtluYTz8x9EqfE55jhON6V1av8CCZOTwTsW', 'unicorn@gmail.com'),
(8, 'james', '$2y$10$ReY8fcm4euQQPUSbct7XCuc9M4hynloMg40smCuyQV.1T5ewmxp/W', 'james@gmail.com'),
(9, 'hey', '$2y$10$ew2XP0MX26Sv4pzSEM6TNuU1NVcakotFpG5ohRuVPHiXKpr0lSuia', 'hello@hello.com'),
(10, 'nleggatt', '$2y$10$Ra4uu888Z0qqdNuXIL5ZXu7IuloeZ6709ubETU/qX2r38ZrrGZS8i', 'nathan@vanarts.com'),
(11, 'oldd', '$2y$10$LwXZqXpxPPmbuo0TQz87deV3rgDMYMQHbwpg4Yp/Yxy5saAl2Rt.6', 'east@gmail.com'),
(12, 'nike', '$2y$10$G0.hx4PmHjdTrfwVCj/xiu/V/yW1gRyiCZO1D79zHDdIEGVx6RKI.', 'nike064@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices_tickets`
--
ALTER TABLE `invoices_tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` mediumint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` mediumint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` mediumint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `invoices_tickets`
--
ALTER TABLE `invoices_tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
