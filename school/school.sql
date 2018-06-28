-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 17, 2018 at 01:31 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `lkg`
--

CREATE TABLE `lkg` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll_no` int(5) NOT NULL,
  `eng` int(5) NOT NULL,
  `nep` int(5) NOT NULL,
  `math` int(5) NOT NULL,
  `science` int(5) NOT NULL,
  `ut1` int(5) NOT NULL,
  `ut2` int(5) NOT NULL,
  `ut3` int(5) NOT NULL,
  `First` int(5) NOT NULL,
  `Sec` int(5) NOT NULL,
  `third` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lkg`
--

INSERT INTO `lkg` (`id`, `name`, `roll_no`, `eng`, `nep`, `math`, `science`, `ut1`, `ut2`, `ut3`, `First`, `Sec`, `third`) VALUES
(12, 'Irajan Dhakal', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 'Irajan Dhakal', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 'Hand', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 'Irajan Dhakal', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 'Irajan Dhakal', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 'Irajan Dhakal', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 'Irajan Dhakal', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 'Irajan Rai', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 'Irajan Bhatta', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, ';lsd;fln', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 'nams', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 'sa', 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nursery`
--

CREATE TABLE `nursery` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll_no` int(5) NOT NULL,
  `eng` int(5) NOT NULL,
  `nep` int(5) NOT NULL,
  `math` int(5) NOT NULL,
  `ut1` int(5) NOT NULL,
  `ut2` int(5) NOT NULL,
  `ut3` int(5) NOT NULL,
  `First` int(5) NOT NULL,
  `Sec` int(5) NOT NULL,
  `third` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nursery`
--

INSERT INTO `nursery` (`id`, `name`, `roll_no`, `eng`, `nep`, `math`, `ut1`, `ut2`, `ut3`, `First`, `Sec`, `third`) VALUES
(7, 'a.skld', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'zzz', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'asdasdk', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 'Irajan Dhakal', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 'Lovely', 8, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 'Male', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 'Irajan Dhakal', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 'Irajan Dhakal', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 'Irajan Dhakal', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 'Irajan Dhakal', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `fatherName` varchar(20) NOT NULL,
  `motherName` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Grade` varchar(10) NOT NULL,
  `dateOfAdmission` date NOT NULL,
  `contact` varchar(25) NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `addressTemp` varchar(10) NOT NULL,
  `District` varchar(50) NOT NULL,
  `VDC` varchar(50) DEFAULT NULL,
  `Municipality` varchar(50) DEFAULT NULL,
  `Ward` int(11) NOT NULL,
  `password` varchar(15) NOT NULL,
  `books` varchar(250) NOT NULL,
  `bookcount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `fatherName`, `motherName`, `DOB`, `Grade`, `dateOfAdmission`, `contact`, `Gender`, `addressTemp`, `District`, `VDC`, `Municipality`, `Ward`, `password`, `books`, `bookcount`) VALUES
(1, 'Arjun Oli', 'Indra Dev', 'Kunti Moktan', '2018-04-01', 'Nursery', '2018-04-03', '9860561367', 'M', 'Naikap', 'Gorkha', NULL, 'Harmi', 9, '', '', 0),
(2, 'Zrjun Oli', 'Indra Dev', 'Kunti Moktan', '2018-04-01', 'L.K.G.', '2018-04-03', '9860561367', 'M', 'Naikap', 'Gorkha', NULL, 'Harmi', 9, '', '', 0),
(3, 'Zrjun Oli', 'Indra Dev', 'Kunti Moktan', '2018-04-01', 'L.K.G.', '2018-04-03', '9860561367', 'M', 'Naikap', 'Gorkha', NULL, 'Harmi', 9, '', '', 0),
(4, 'Brjun Oli', 'Indra Dev', 'Kunti Moktan', '2018-04-01', 'L.K.G.', '2018-04-03', '9860561367', 'M', 'Naikap', 'Gorkha', NULL, 'Harmi', 9, '', '', 0),
(5, 'Irajan Dhakal', 'Ramhari Dhakal', 'Indra Dhakal', '2018-04-01', 'U.K.G.', '2018-04-03', '9860561367', 'M', 'Naikap', 'Gorkha', NULL, 'Harmi', 9, '', '', 0),
(6, 'Irajan Dhakal', 'Ramhari Dhakal', 'Indra Dhakal', '2018-05-24', 'L.K.G.', '2018-05-27', '9860561367', 'M', 'Naikap', 'Chasyal,Lalitpur', NULL, 'Harmi', 1, '', '', 0),
(7, 'a.skld', 'zkcn;knc', ';nc;lancs;ln', '2019-02-02', 'Nursery', '2018-05-28', '25', 'M', 'Chasyal,La', 'adsfasf', NULL, 'wd', 5, '', '', 0),
(8, 'zzz', 'safasfasda', 'safasf', '2018-05-02', 'Nursery', '2018-05-28', '656464', 'M', 'sdf', 'adfsdf', NULL, 'sdfsdf', 2, '', '', 0),
(9, 'asdasdk', 'zkcn;knc', 'Name', '2018-05-01', 'Nursery', '2018-05-28', '5', 'M', 'Chasyal,La', 'Chasyal,Lalitpur', 'Harmi', NULL, 1, '', '', 0),
(10, 'Irajan Dhakal', 'Ramhari Dhakal', 'Indra Dhakal', '2018-10-31', 'U.K.G.', '2018-05-28', '5/3', 'M', 'Chasyal,La', 'Chasyal,Lalitpur', 'Harmi', NULL, 1, '', ',book2,book3,book1', 3),
(11, 'Irajan Dhakal', 'Ramhari Dhakal', 'Indra Dhakal', '2018-05-07', 'Nursery', '2018-05-28', '3', 'M', 'Chasyal,La', 'Chasyal,Lalitpur', 'Harmi', NULL, 2, '', '', 0),
(12, 'Irajan Dhakal', 'Ramhari Dhakal', 'Name', '2018-05-02', 'L.K.G.', '2018-05-28', '22', 'M', 'Chasyal,La', 'Chasyal,Lalitpur', 'Harmi', NULL, 3, '', '', 0),
(13, 'Irajan Dhakal', 'Ramhari Dhakal', 'Indra Dhakal', '2018-05-30', 'L.K.G.', '2018-05-28', '4', 'M', 'Chasyal,La', 'Chasyal,Lalitpur', 'Harmi', NULL, 3, '', '', 0),
(14, 'Lovely', 'Lovely', 'Lovely', '2010-11-27', 'Nursery', '2018-05-29', '2/2', 'M', 'Chasyal,La', 'Chasyal,Lalitpur', 'Harmi', NULL, 3, '<script>btoa(Lo', '', 0),
(15, 'Male', 'Male', 'Male', '2015-09-29', 'Nursery', '2018-05-29', '4/4', 'M', 'Chasyal,La', 'Chasyal,Lalitpur', NULL, 'Harmi', 4, '2015-09-29', '', 0),
(16, 'Hand', 'Hand', 'Hand', '2018-01-01', 'L.K.G.', '2018-05-29', '3', 'M', 'Chasyal,La', 'Chasyal,Lalitpur', 'Harmi', NULL, 1, 'MjAxOC0wMS0wMQ=', '', 0),
(17, 'Irajan Dhakal', 'Ramhari Dhakal', 'Indra Dhakal', '2018-05-02', 'L.K.G.', '2018-05-29', '3', 'M', 'Chasyal,La', 'Chasyal,Lalitpur', 'Harmi', NULL, 2, 'MjA2Njg=', '', 0),
(18, 'Irajan Dhakal', 'Ramhari Dhakal', 'Indra Dhakal', '2018-05-09', 'Nursery', '2018-05-29', '2', 'M', 'Chasyal,La', 'Chasyal,Lalitpur', 'Harmi', NULL, 3, 'MjIyNjk=', '', 0),
(19, 'Irajan Dhakal', 'Ramhari Dhakal', 'Indra Dhakal', '2018-05-01', 'P.G.', '2018-05-29', '2', 'M', 'Chasyal,La', 'Chasyal,Lalitpur', 'Harmi', NULL, 2, 'MTAyNzE0', '', 0),
(20, 'Irajan Dhakal', 'Ramhari Dhakal', 'Indra Dhakal', '2018-05-26', 'L.K.G.', '2018-05-29', '3', 'M', 'Chasyal,La', 'Chasyal,Lalitpur', 'Harmi', NULL, -3, 'MTU3Njc2Nw==', '', 0),
(21, 'Irajan Dhakal', 'Ramhari Dhakal', 'Indra Dhakal', '2018-05-26', 'Nursery', '2018-05-29', '2', 'M', 'Chasyal,La', 'Chasyal,Lalitpur', 'Harmi', NULL, 2, 'MTU3NzExOQ==', '', 0),
(22, 'Irajan Dhakal', 'Name', 'Indra Dhakal', '2018-05-16', 'L.K.G.', '2018-05-29', '2', 'M', 'Chasyal,La', 'Chasyal,Lalitpur', 'Harmi', NULL, 2, 'MTU3NjY2OA==', '', 0),
(23, 'Irajan Dhakal', 'Ramhari Dhakal', 'Name', '2018-05-09', 'U.K.G.', '2018-05-30', '4', 'M', 'Chasyal,La', 'Chasyal,Lalitpur', 'Harmi', NULL, 4, '', '', 0),
(24, 'Irajan Dhakal', 'Ramhari Dhakal', 'Name', '2018-05-03', 'L.K.G.', '2018-05-30', '2', 'M', 'Chasyal,La', 'Chasyal,Lalitpur', 'Muni', NULL, 3, '', '', 0),
(25, 'Irajan Dhakal', 'Name', 'Kunti Moktan', '2018-05-10', 'Nursery', '2018-05-30', '5', 'M', 'Chasyal,La', 'Chasyal,Lalitpur', 'Harmi', NULL, 5, '', '', 0),
(26, 'Irajan Dhakal', 'safasfasda', 'Kunti Moktan', '2018-05-10', 'L.K.G.', '2018-05-30', '6', 'M', 'Chasyal,La', 'Chasyal,Lalitpur', 'Muni', NULL, 5, 'TMFO', '', 0),
(27, 'Irajan Rai', 'Ramhari Dhakal', 'Name', '2018-05-11', 'L.K.G.', '2018-05-30', '3', 'M', 'Chasyal,La', 'Chasyal,Lalitpur', 'Muni', NULL, 2, 'TMFO', '', 0),
(28, 'Irajan Bhatta', 'Ramhari Dhakal', 'Name', '2018-05-08', 'L.K.G.', '2018-05-30', '5/5', 'M', 'Chasyal,La', 'Chasyal,Lalitpur', 'wd', NULL, 5, 'ODI2NDY5', '', 0),
(29, ';lsd;fln', 'zdfsdf', 'dsfsdf', '2018-05-02', 'L.K.G.', '2018-05-31', '5', 'M', 'Chasyal,La', 'Chasyal,Lalitpur', 'Muni', NULL, 3, '', '', 0),
(30, 'Irajan Dhakal', 'Ramhari Dhakal', 'Irajan Dhakal', '2018-05-17', 'Nursery', '2018-05-31', '5', 'M', 'Chasyal,La', 'Chasyal,Lalitpur', 'Muni', NULL, 6, '', '', 0),
(31, 'Irajan Dhakal', 'zkcn;knc', 'Kunti Moktan', '2018-06-22', 'P.G.', '2018-05-31', '4', 'M', 'Chasyal,La', 'Chasyal,Lalitpur', 'Muni', NULL, 4, 'ODI2NZC0', '', 0),
(32, 'Irajan Dhakal', 'Ramhari Dhakal', 'Indra Dhakal', '2018-06-30', 'P.G.', '2018-05-31', '5', 'M', 'Chasyal,La', 'Chasyal,Lalitpur', 'Harmi', NULL, 3, 'NJYWOA==', '', 0),
(33, 'Irajan Dhakal', 'Name', 'Name', '2018-06-07', 'P.G.', '2018-05-31', '7', 'M', 'Chasyal,La', 'Chasyal,Lalitpur', 'Muni', NULL, 7, 'nje4ma==', '', 0),
(34, 'Irajan Dhakal', 'Name', 'Name', '2018-06-08', 'P.G.', '2018-05-31', '4', 'M', 'Chasyal,La', 'Chasyal,Lalitpur', 'Harmi', NULL, 3, 'ntaznq==', '', 0),
(35, 'nams', 'nsadals', 'knkn', '0465-05-06', 'L.K.G.', '2018-05-31', '6464', 'M', 'sdfdf', 'sdsf', '64646asdf', NULL, 646464, 'mja2', '', 0),
(36, 'sa', 'lmsal', 'lmsdl;cnl', '2016-11-29', 'L.K.G.', '2018-06-01', '1', 'M', 'sdcsdcdsc', 'sdcljlm', 'skdhckdcn', NULL, 4, 'odi2odaz', '', 0),
(37, 'Irajan Dhakal', 'Ramhari Dhakal', 'Indra Dhakal', '2018-06-20', 'P.G.', '2018-06-01', '3', 'M', 'Chasyal,La', 'Chasyal,Lalitpur', '64646asdf', NULL, 3, 'mja2', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ukg`
--

CREATE TABLE `ukg` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll_no` int(5) NOT NULL,
  `eng` int(5) NOT NULL,
  `nep` int(5) NOT NULL,
  `math` int(5) NOT NULL,
  `science` int(5) NOT NULL,
  `social` int(5) NOT NULL,
  `ut1` int(5) NOT NULL,
  `ut2` int(5) NOT NULL,
  `ut3` int(5) NOT NULL,
  `First` int(5) NOT NULL,
  `Sec` int(5) NOT NULL,
  `third` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ukg`
--

INSERT INTO `ukg` (`id`, `name`, `roll_no`, `eng`, `nep`, `math`, `science`, `social`, `ut1`, `ut2`, `ut3`, `First`, `Sec`, `third`) VALUES
(10, 'Irajan Dhakal', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL COMMENT 'login username',
  `group` varchar(20) NOT NULL COMMENT 'specifies which group like administrator library',
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `group`, `password`) VALUES
(1, 'igaurab', 'library', 'a'),
(2, 'irajan', 'library', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lkg`
--
ALTER TABLE `lkg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nursery`
--
ALTER TABLE `nursery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ukg`
--
ALTER TABLE `ukg`
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
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
