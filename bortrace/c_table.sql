-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2019 年 2 月 07 日 16:58
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `c_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `c_table`
--

CREATE TABLE IF NOT EXISTS `c_table` (
`id` int(11) NOT NULL,
  `race` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `syushi` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `c_table`
--

INSERT INTO `c_table` (`id`, `race`, `syushi`, `date`) VALUES
(2, '1R', -300, '2019-02-07'),
(3, '2R', 930, '2019-02-07'),
(6, '3R', -300, '2019-02-07'),
(7, '4R', -300, '2019-02-07'),
(8, '5R', -500, '2019-02-07'),
(9, '6R', 1750, '2019-02-07'),
(10, '1R', -800, '2019-02-08'),
(11, '2R', -300, '2019-02-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c_table`
--
ALTER TABLE `c_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `c_table`
--
ALTER TABLE `c_table`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
