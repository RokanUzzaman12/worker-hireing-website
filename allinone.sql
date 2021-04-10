-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 02:31 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `allinone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'Rohim Khan', 'rohim@gmail.com', '123'),
(2, 'admin', 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_title`) VALUES
(7, 'Appliance repair'),
(8, 'Construction'),
(9, 'Business service'),
(10, 'Cleaning'),
(11, 'Event management'),
(12, 'Health & Beauty'),
(13, 'Technology'),
(14, 'Tours & travel');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `mem_id` int(11) NOT NULL,
  `mem_cat_id` int(11) NOT NULL,
  `mem_user_name` varchar(255) NOT NULL,
  `mem_email` varchar(255) NOT NULL,
  `mem_pass` varchar(255) NOT NULL,
  `mem_image` text NOT NULL,
  `mem_description` varchar(255) NOT NULL,
  `mem_rate` varchar(255) NOT NULL,
  `mem_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`mem_id`, `mem_cat_id`, `mem_user_name`, `mem_email`, `mem_pass`, `mem_image`, `mem_description`, `mem_rate`, `mem_details`) VALUES
(9, 13, 'Mr. shiva', 'shiva@gmail.com', '122', 'anupom.jpg', 'technology specialist ', '50', 'good personality person'),
(10, 10, 'Mr. jhon', 'jhon@gmail.com', '123', 'download.jpg', 'good personality person', '40', '5years working experience '),
(11, 14, 'Mr Nirob', 'nirob@gmail.com', '123', 'download (1).jpg', 'honest person', '40', '7years working experience '),
(12, 2, 'Mr. Antu', 'antu@gmail.com', '123', 'download (2).jpg', '', '50', '5years experience about medical services'),
(13, 7, 'Rahmutullah', 'rahamn', '123', 'images (1).jpg', 'hard working person', '30', '5years working experience about electronics working  '),
(14, 11, 'rashni', 'rashnifb2@gmail.com', '123', '20190207_173955.jpg', '', '10', '2years working experience about event management inspector  '),
(15, 11, 'rashni', 'rashnifb2@gmail.com', '123', '20190207_173955.jpg', '', '10', '2years working experience about event management inspector  '),
(17, 9, 'Mr Farazi', 'farazi@gmail.com', '123', 'ikram.jpg', 'honest person ', '100', '9years experience about business planning '),
(18, 10, 'Samiha ', 'samiha@gmail.com', '123', 'samia.jpg', 'intelligence person ', '25', '6years working experience about cleaning '),
(19, 12, 'Misti', 'misti@gmail.com', '123', 'misti.jpg', 'honest person', '65', '6years working experience about health and beauty services '),
(20, 14, 'Mr Rokon', 'rokon@gmail.com', '123', 'rokon.jpg', 'good person', '50', '5years working experience about tourist guide');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ser_id` int(11) NOT NULL,
  `ser_cat_id` int(11) NOT NULL,
  `ser_image` text NOT NULL,
  `ser_title` varchar(255) NOT NULL,
  `ser_content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ser_id`, `ser_cat_id`, `ser_image`, `ser_title`, `ser_content`) VALUES
(10, 8, 'constrction.jpg', 'Construction 33333', 'you can hire worker foreman  '),
(11, 7, 'appliance-repair-logo.jpg', 'Appliance repair', 'Ac repair, electronics repair etc '),
(12, 9, 'businesslogo.png', 'Business service', 'business partner, worker and adviser '),
(13, 10, 'cleaning.png', 'Cleaning', 'Plumber, electrician and worker '),
(14, 11, 'event-planning.png', 'Event management', 'event manager is a true people person and has excellent organizational skills, interpersonal skills, and multitasking skills.'),
(15, 12, 'beauty-and-health-logo.png', 'Health & Beauty', 'beautician  '),
(16, 13, 'technology.jpg', 'Technology', 'advocating for human rights, technology tools '),
(17, 14, 'tour.jpg', 'Tours & travel', 'Select a destination\r\nKnow your tour members. \r\nResearch requirements\r\nPlan activities.\r\nBe in control.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_name` int(11) NOT NULL,
  `u_email` int(11) NOT NULL,
  `u_pass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_pass` varchar(255) NOT NULL,
  `u_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_email`, `u_pass`, `u_image`) VALUES
(1, 'Rokon', 'rokonuzzamancse1@gmail.com', '1234', 'rokon.JPG'),
(2, 'pakhi khatun', 'pakhi@gmail.com', '123', 'pic5.jpg'),
(3, 'Bashar', 'bashar@gmail.com', '123', 'misti.jpg'),
(4, 'Abul kalam', 'abulkalam@gmail.com', '1234', 'pic2.jpg'),
(5, 'ekram', 'ekram@gmil.com', '123', 'oo.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ser_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
