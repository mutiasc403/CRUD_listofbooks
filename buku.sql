-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2019 at 08:57 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `Id` int(100) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Pages` int(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`Id`, `Title`, `Author`, `Date`, `Pages`, `Type`, `Gambar`) VALUES
(2, 'Habibie', 'Bacharuddin', '2019-09-01', 323, 'Memoar', 'images/bukuhabibie.jpg'),
(4, 'Doodle For Your Journal', 'Asrika Vitawati', '2019-10-01', 100, 'Pengembangan Diri', 'images/bukudoodle.jpg'),
(5, 'Love Theft', 'Prisca Primasari', '2017-09-01', 408, 'Romance', 'images/bukulovetheft.jpg'),
(6, 'Ramadhan Agar Tak Sekedar Lapar & Dahaga', 'Dr. Aidh Al Qarni', '2019-05-01', 136, 'Islam', 'images/bukuramadhan.jpg'),
(7, 'Tapak Jejak', 'Fiersa Besari', '2019-08-01', 316, 'Fiksi', 'images/bukutapak.jpg'),
(8, 'Si Anak Badai', 'Tere Liye', '2019-08-01', 421, 'Fiksi', 'images/bukusianak.jpg'),
(9, 'Biografi Resmi Pierre Tendean: Sang Patriot-Kisah Seorang Pahlawan Revolusi', 'Rooswidiati Tendean', '2019-03-01', 214, 'Sejarah Indonesia', 'images/bukusangpatriot.png'),
(10, 'Dreamin Sun 09', 'Ichigo Takano', '2019-09-01', 192, 'Komik', 'images/bukudreamin.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
