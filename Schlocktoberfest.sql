-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 08, 2016 at 12:17 am
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Schlocktoberfest`
--

-- --------------------------------------------------------

--
-- Table structure for table `merchandise`
--

CREATE TABLE `merchandise` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `merchandise`
--

INSERT INTO `merchandise` (`id`, `name`, `price`, `description`) VALUES
(1, 'Collectable DVD', '29.99', 'A collectable DVD, Zone 4'),
(2, 'Dinner for five', '159.00', 'Dinner with 4 celebrities');

-- --------------------------------------------------------

--
-- Table structure for table `Movies`
--

CREATE TABLE `Movies` (
  `ID` tinyint(3) UNSIGNED NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Year` year(4) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Movies`
--

INSERT INTO `Movies` (`ID`, `Title`, `Year`, `Description`) VALUES
(1, 'Troll 2', 1999, 'The best worst movie ever'),
(2, 'You don''t mess with the Zohan', 2008, 'Tired of all the fighting in his country, legendary Israeli commando Zohan (Adam Sandler) fakes his own death and goes to New York, where he can fulfill his fondest dream: to become a hairstylist. Zohan''s sexy way with a cut and curl makes him a hit with Manhattan''s women, but when enemy Arabs spot him, Zohan has to call on his military skills if he is ever to wield scissors again.'),
(3, 'Couples Retreat', 2009, 'Four couples, all friends, descend on a tropical island resort. Though one husband and wife are there to work on their marriage, the others just want to enjoy some fun in the sun. They soon find, however, that paradise comes at a price: Participation in couples therapy sessions is mandatory. What started out as a cut-rate vacation turns into an examination of the common problems many face.'),
(4, 'Superbad', 2007, 'High-school seniors Seth (Jonah Hill) and Evan (Michael Cera) have high hopes for a graduation party: The co-dependent teens plan to score booze and babes so they can become part of the in-crowd, but separation anxiety and two bored police officers (Bill Hader, Seth Rogen) complicate the pair''s self-proclaimed mission.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `merchandise`
--
ALTER TABLE `merchandise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Movies`
--
ALTER TABLE `Movies`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `merchandise`
--
ALTER TABLE `merchandise`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Movies`
--
ALTER TABLE `Movies`
  MODIFY `ID` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
