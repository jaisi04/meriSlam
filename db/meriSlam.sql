-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 10, 2016 at 08:48 AM
-- Server version: 5.7.12-0ubuntu1
-- PHP Version: 7.0.4-7ubuntu2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meriSlam`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_signup`
--

CREATE TABLE `table_signup` (
  `user_id` int(11) NOT NULL,
  `name_user` varchar(30) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password_user` varchar(32) NOT NULL,
  `active_user` int(11) NOT NULL DEFAULT '0',
  `dob_user` date DEFAULT NULL,
  `gender_user` varchar(1) DEFAULT NULL,
  `about_user` varchar(1024) DEFAULT NULL,
  `rstatus_user` varchar(32) DEFAULT NULL,
  `mobile_user` varchar(16) DEFAULT NULL,
  `occu_user` varchar(64) DEFAULT NULL,
  `address_user` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_signup`
--

INSERT INTO `table_signup` (`user_id`, `name_user`, `email_user`, `password_user`, `active_user`, `dob_user`, `gender_user`, `about_user`, `rstatus_user`, `mobile_user`, `occu_user`, `address_user`) VALUES
(4, 'Akshay', 'w@e.r', 'abcd', 0, '1995-04-13', 'M', 'Just Awesome!', 'H', '9835980147', 'Web Designing', 'Ranchi, Jsr'),
(5, 'akshay', 'aks@email.e', 'mom', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'satyam', 'satyam@gmail.com', 'lalala', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'sample user', 'sampleuser@email.domain', 'sp', 0, '2016-06-09', 'G', 'Sample Description', 'Sample Status', '4868897864', 'Sample Profession', 'Sample Address'),
(8, 'luffy', 'luffy@gmail.com', 'luffy', 0, '2016-06-09', 'F', 'i am from tori', '', '', '', 'tori'),
(9, 'gaurav', 'gshehgal1995@gmail.com', '100995', 0, '1995-09-10', 'M', 'dfghkjo[piougtrzfxbnm', 'unmarried', '8804875035', 'student', 'redsgwjekf;l');

-- --------------------------------------------------------

--
-- Table structure for table `table_slam`
--

CREATE TABLE `table_slam` (
  `slam_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `nick` varchar(32) NOT NULL,
  `home` varchar(64) NOT NULL,
  `contact` varchar(64) NOT NULL,
  `dob` varchar(32) NOT NULL,
  `book` varchar(64) NOT NULL,
  `movie` varchar(64) NOT NULL,
  `song` varchar(64) NOT NULL,
  `food` varchar(64) NOT NULL,
  `sport` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_slam`
--

INSERT INTO `table_slam` (`slam_id`, `user_id`, `name`, `nick`, `home`, `contact`, `dob`, `book`, `movie`, `song`, `food`, `sport`) VALUES
(3, 6, 'q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p'),
(5, 4, 'Akshay Jaiswal', 'maddy', 'ranchi', 'quora', 'April 13', 'I hate books', 'NEVERRRR', 'Brother;s Anthem', 'Strictly Non-Veg', 'Table Tennis'),
(6, 4, 'qqqq', 'wwww', 'eeee', 'rrrr', 'tttt', 'yyyy', 'uuuu', 'iiii', 'oooo', 'pppp'),
(7, 4, 'eee', 'rrr', 'ggg', 'vvv', 'nnn', ',ll', 'kkk', 'ggg', 'ddd', 'aaa'),
(10, 6, 'dsds', 'bdf', 'gf,', 'gf', 'fd', 'xcn', ',tr', 'dfm', 'c ', 'edt'),
(11, 6, 'wga', ' cx', 'yhf', 'asc', 'liu', 'iup', 'c v', 'erd', 'DN', 'fdnfdn'),
(12, 7, 'Sampe Salmiee1', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA'),
(13, 7, 'LA', 'LA', 'LA', 'LA', 'La', 'LA', 'La', 'Laq', 'La', 'Laq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_signup`
--
ALTER TABLE `table_signup`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `table_slam`
--
ALTER TABLE `table_slam`
  ADD PRIMARY KEY (`slam_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_signup`
--
ALTER TABLE `table_signup`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `table_slam`
--
ALTER TABLE `table_slam`
  MODIFY `slam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
