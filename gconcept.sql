-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 13, 2022 at 04:48 AM
-- Server version: 10.5.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u677179892_thegconcept`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `uploaded_on`, `status`) VALUES
(2, 'IMG_0063~photo-full.jpg', '0000-00-00 00:00:00', '1'),
(3, 'IMG_0064~photo-full.jpg', '0000-00-00 00:00:00', '1'),
(4, 'IMG_0065~photo-full.jpg', '0000-00-00 00:00:00', '1'),
(5, 'IMG_0067~photo-full.jpg', '0000-00-00 00:00:00', '1'),
(6, 'IMG_0204~photo-full.jpg', '0000-00-00 00:00:00', '1'),
(7, 'IMG_0204~photo.PNG', '0000-00-00 00:00:00', '1'),
(8, 'IMG_0401~photo.JPG', '0000-00-00 00:00:00', '1'),
(9, 'IMG_0402~photo.JPG', '0000-00-00 00:00:00', '1'),
(10, 'IMG_0403~photo.JPG', '0000-00-00 00:00:00', '1'),
(11, 'IMG_0404~photo.JPG', '0000-00-00 00:00:00', '1'),
(12, 'IMG_0405~photo.jpg', '0000-00-00 00:00:00', '1'),
(13, 'IMG_0409~photo.jpg', '0000-00-00 00:00:00', '1'),
(14, 'IMG_0424~photo-full.jpg', '0000-00-00 00:00:00', '1'),
(15, 'IMG_0424~photo.PNG', '0000-00-00 00:00:00', '1'),
(16, 'IMG_0595~photo.jpg', '0000-00-00 00:00:00', '1'),
(17, 'IMG_0596~photo.jpg', '0000-00-00 00:00:00', '1'),
(18, 'IMG_0597~photo.jpg', '0000-00-00 00:00:00', '1'),
(19, 'IMG_0598~photo.jpg', '0000-00-00 00:00:00', '1'),
(20, 'IMG_0599~photo.jpg', '0000-00-00 00:00:00', '1'),
(21, 'IMG_0600~photo.jpg', '0000-00-00 00:00:00', '1'),
(22, 'IMG_0601~photo.jpg', '0000-00-00 00:00:00', '1'),
(23, 'IMG_0602~photo.jpg', '0000-00-00 00:00:00', '1'),
(24, 'IMG_0603~photo.jpg', '0000-00-00 00:00:00', '1'),
(25, 'IMG_0604~photo.jpg', '0000-00-00 00:00:00', '1'),
(26, 'IMG_0605~photo.jpg', '0000-00-00 00:00:00', '1'),
(27, 'IMG_0606~photo.jpg', '0000-00-00 00:00:00', '1'),
(28, 'IMG_0607~photo.jpg', '0000-00-00 00:00:00', '1'),
(29, 'IMG_0703~photo-full.jpg', '0000-00-00 00:00:00', '1'),
(30, 'IMG_0704~photo-full.jpg', '0000-00-00 00:00:00', '1'),
(31, 'IMG_0704~photo.PNG', '0000-00-00 00:00:00', '1'),
(32, 'IMG_1724~photo-full.jpg', '0000-00-00 00:00:00', '1'),
(33, 'IMG_1803~photo.JPG', '0000-00-00 00:00:00', '1'),
(34, 'IMG_1804~photo.JPG', '0000-00-00 00:00:00', '1'),
(35, 'IMG_1805~photo.JPG', '0000-00-00 00:00:00', '1'),
(36, 'IMG_1806~photo.JPG', '0000-00-00 00:00:00', '1'),
(37, 'IMG_1807~photo.JPG', '0000-00-00 00:00:00', '1'),
(38, 'IMG_1808~photo.jpg', '0000-00-00 00:00:00', '1'),
(39, 'IMG_1809~photo.JPG', '0000-00-00 00:00:00', '1'),
(40, 'IMG_1810~photo.JPG', '0000-00-00 00:00:00', '1'),
(41, 'IMG_1811~photo.JPG', '0000-00-00 00:00:00', '1'),
(42, 'IMG_1812~photo.JPG', '0000-00-00 00:00:00', '1'),
(43, 'IMG_1813~photo.JPG', '0000-00-00 00:00:00', '1'),
(44, 'IMG_1814~photo.JPG', '0000-00-00 00:00:00', '1'),
(45, 'IMG_1815~photo.JPG', '0000-00-00 00:00:00', '1'),
(46, 'IMG_1816~photo.JPG', '0000-00-00 00:00:00', '1'),
(47, 'IMG_1817~photo.jpg', '0000-00-00 00:00:00', '1'),
(48, 'IMG_1818~photo.JPG', '0000-00-00 00:00:00', '1'),
(49, 'IMG_1819~photo.JPG', '0000-00-00 00:00:00', '1'),
(50, 'IMG_1820~photo.jpg', '0000-00-00 00:00:00', '1'),
(51, 'IMG_1821~photo.JPG', '0000-00-00 00:00:00', '1'),
(52, 'IMG_1822~photo.JPG', '0000-00-00 00:00:00', '1'),
(53, 'IMG_1823~photo.jpg', '0000-00-00 00:00:00', '1'),
(54, 'IMG_1825~photo.JPG', '0000-00-00 00:00:00', '1'),
(55, 'IMG_1826~photo.JPG', '0000-00-00 00:00:00', '1'),
(56, 'IMG_1827~photo.JPG', '0000-00-00 00:00:00', '1'),
(57, 'IMG_1828~photo.JPG', '0000-00-00 00:00:00', '1'),
(58, 'IMG_1829~photo.JPG', '0000-00-00 00:00:00', '1'),
(59, 'IMG_1830~photo.JPG', '0000-00-00 00:00:00', '1'),
(60, 'IMG_1831~photo.JPG', '0000-00-00 00:00:00', '1'),
(61, 'IMG_1832~photo.jpg', '0000-00-00 00:00:00', '1'),
(62, 'IMG_1834~photo.jpg', '0000-00-00 00:00:00', '1'),
(63, 'IMG_1835~photo.JPG', '0000-00-00 00:00:00', '1'),
(64, 'IMG_1836~photo.JPG', '0000-00-00 00:00:00', '1'),
(65, 'IMG_1838~photo.JPG', '0000-00-00 00:00:00', '1'),
(66, 'IMG_1839~photo.JPG', '0000-00-00 00:00:00', '1'),
(67, 'IMG_1840~photo.JPG', '0000-00-00 00:00:00', '1'),
(68, 'IMG_1841~photo.jpg', '0000-00-00 00:00:00', '1'),
(69, 'IMG_1842~photo.JPG', '0000-00-00 00:00:00', '1'),
(70, 'IMG_1844~photo.JPG', '0000-00-00 00:00:00', '1'),
(71, 'IMG_1845~photo.JPG', '0000-00-00 00:00:00', '1'),
(72, 'IMG_1846~photo.JPG', '0000-00-00 00:00:00', '1'),
(73, 'IMG_1847~photo.JPG', '0000-00-00 00:00:00', '1'),
(74, 'IMG_1850~photo.JPG', '0000-00-00 00:00:00', '1'),
(75, 'IMG_1853~photo.jpg', '0000-00-00 00:00:00', '1'),
(76, 'IMG_1854~photo.JPG', '0000-00-00 00:00:00', '1'),
(77, 'IMG_1855~photo.JPG', '0000-00-00 00:00:00', '1'),
(78, 'IMG_1858~photo.JPG', '0000-00-00 00:00:00', '1'),
(79, 'IMG_1859~photo.JPG', '0000-00-00 00:00:00', '1'),
(80, 'IMG_1861~photo.JPG', '0000-00-00 00:00:00', '1'),
(81, 'IMG_1862~photo.JPG', '0000-00-00 00:00:00', '1'),
(82, 'IMG_1863~photo.JPG', '0000-00-00 00:00:00', '1'),
(83, 'IMG_1864~photo.JPG', '0000-00-00 00:00:00', '1'),
(84, 'IMG_1865~photo.jpg', '0000-00-00 00:00:00', '1'),
(85, 'IMG_1867~photo.JPG', '0000-00-00 00:00:00', '1'),
(86, 'IMG_1869~photo.JPG', '0000-00-00 00:00:00', '1'),
(87, 'IMG_1870~photo.JPG', '0000-00-00 00:00:00', '1'),
(88, 'IMG_1872~photo.jpg', '0000-00-00 00:00:00', '1'),
(89, 'IMG_1873~photo.JPG', '0000-00-00 00:00:00', '1'),
(90, 'IMG_1874~photo.jpg', '0000-00-00 00:00:00', '1'),
(91, 'IMG_1875~photo.jpg', '0000-00-00 00:00:00', '1'),
(92, 'IMG_1876~photo.jpg', '0000-00-00 00:00:00', '1'),
(93, 'IMG_1877~photo.jpg', '0000-00-00 00:00:00', '1'),
(94, 'IMG_1878~photo.jpg', '0000-00-00 00:00:00', '1'),
(95, 'IMG_1879~photo.jpg', '0000-00-00 00:00:00', '1'),
(96, 'IMG_1880~photo.jpg', '0000-00-00 00:00:00', '1'),
(97, 'IMG_1881~photo.jpg', '0000-00-00 00:00:00', '1'),
(98, 'IMG_1882~photo.JPG', '0000-00-00 00:00:00', '1'),
(99, 'IMG_1883~photo.jpg', '0000-00-00 00:00:00', '1'),
(100, 'IMG_1884~photo.JPG', '0000-00-00 00:00:00', '1'),
(101, 'IMG_1885~photo.JPG', '0000-00-00 00:00:00', '1'),
(102, 'IMG_1886~photo.JPG', '0000-00-00 00:00:00', '1'),
(103, 'IMG_1887~photo.JPG', '0000-00-00 00:00:00', '1'),
(104, 'IMG_1888~photo.JPG', '0000-00-00 00:00:00', '1'),
(105, 'IMG_1889~photo.JPG', '0000-00-00 00:00:00', '1'),
(106, 'IMG_1944~photo.PNG', '0000-00-00 00:00:00', '1'),
(107, 'IMG_2170~photo-full.jpg', '0000-00-00 00:00:00', '1'),
(108, 'IMG_2170~photo.PNG', '0000-00-00 00:00:00', '1'),
(109, 'IMG_2450~photo.PNG', '0000-00-00 00:00:00', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
