-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2018 at 09:06 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `premiumpms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_phone`) VALUES
(2, 'Sule Bendel', 'suleben@yahoo.com', '09084567891'),
(3, 'mary kay', 'maryka@gmail.com', '08060912389'),
(4, 'Kemi Bado logo', 'badoo@yahoo.com', '02084567891'),
(5, 'Gbenga Jegede', 'jengbe@gmail.com', '08060914523'),
(6, 'tark mata', 'tarkmat@yahoo.com', '07084567891'),
(8, 'hurty marty yoyo', 'markaj@yahoo.com', '02084567891'),
(9, 'pasa opeyemi', 'psalmsam@gmail.com', '08060912345'),
(12, 'Kemi Bado', 'badoo@yahoo.com', '02084567891'),
(13, 'Gbenga Jegede', 'jengbe@gmail.com', '08060914523'),
(16, 'hurty marty', 'markaj@yahoo.com', '02084567891'),
(17, 'ADEWUYI JEGEDE', 'femiogede@yahoo.com', '08060913940'),
(18, 'samuel sule', 'samuelsule@yahoo.com', '09078678945'),
(19, 'Awoyode Tope', 'atomtope@yahoo.com', '07089234565'),
(20, 'olori wumi', 'olori@yahoo.com', '08956789645'),
(21, 'Tinuke Odunlade', 'atinuke@yahoo.com', '07067873456'),
(22, 'OLOLADE MARY', 'ololademary@yahoo.com', '07089234565'),
(23, 'kikelomo Ajayi', 'kikeajayi@yahoo.com', '05067895223'),
(24, 'Omidiwura Femi', 'femtech@yahoo.com', '08060913940'),
(25, 'omidiwura Timilehin', 'timi.wura@yahoo.com', '07067453212'),
(26, 'ARIKUYERI Areago', 'arik@yahoo.com', '07089076543');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
