-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 30, 2013 at 07:05 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yellow_pages`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE IF NOT EXISTS `advertisement` (
  `cid` int(11) DEFAULT NULL,
  `poster` varchar(30) DEFAULT NULL,
  KEY `cid` (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`cid`, `poster`) VALUES
(1, 'pizza.jpg'),
(2, 'dominos.jpg'),
(7, 'puma.gif'),
(9, 'raymond.gif'),
(20, 'big.gif'),
(23, '');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `cid` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(30) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `lyk` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cid`),
  UNIQUE KEY `name` (`name`,`location`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='General details about a company. Available to all users.' AUTO_INCREMENT=24 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cid`, `name`, `category`, `location`, `phone`, `email`, `description`, `image`, `uid`, `lyk`) VALUES
(1, 'Pizza Hut', 'Restaurant', 'Lalbagh', '0039883988', 'pizzahut@gmail.com', ' Italian Family restaurant located in convenient location at Bharat Mall, Mangalore.', 'pizzahut.gif', 'rahul@gmail.com', 20),
(2, 'Dominos', 'Restaurant', 'Jyoti', '08242431358', 'mangalore@dominos.co.in ', 'Italian Pizzas at affordable cost. Famous for it''s no cutlery policy', 'dominos.gif', 'rahul@gmail.com', 6),
(3, 'Hao Ming', 'Restaurant', 'Balmatta', '08242216893', 'hao_ming@gmail.com', 'Chinese restaurant. Very reasonable prices. Owned and run by a Chinese.', 'haoming.jpg', 'rahul@gmail.com', 5),
(4, 'Chefs', 'Restaurant', 'Kadri', '08242216404', 'chefs@gmail.com', 'Burgers, pastas and Lasigias at great prices in the heart of mangalore', 'chefs.jpg', 'sahil@gmail.com', 3),
(6, 'Pabbas', 'Restaurant', 'Lalbagh', '08242240120', 'pabbas@gmail.com', 'Ice cream parlour cum restaurant with great reviews', 'pabbas.jpg', 'rahul@gmail.com', 12),
(7, 'Puma', 'Garments', 'Jyoti', '0824223453', 'mangalore@puma.com', 'best in class sports wear and apparels. Official sponsorers of Bangalore Royal Challengers.', 'puma.jpg', 'rahul@gmail.com', 1),
(8, 'Levis', 'Garments', 'Balmatta', '0824324985', 'customer.care@levis.com', 'Best in class formal and informal shirts and jeans.', 'levis.jpg', 'sahil@gmail.com', 7),
(9, 'Raymonds', 'Garments', 'Kadri', '0824201198', 'raymonds_mang@yahoo.com', 'Tailor made suitings and shirtings, the finest cotton garments.', 'raymond.jpg', 'sahil@gmail.com', 0),
(10, 'Inox', 'Cinemas', 'Jyoti', '0824543267', 'mangalore@inox.com', 'Gold class movie theatres. INOX currently operates 41 multiplexes and 155 screens in 26 cities.', 'inox.jpg', 'sahil@gmail.com', 6),
(11, 'Suraj', 'Restaurant', 'Surathkal', '0824354676', 'suraj@gmail.com', 'A nice place to dine. Good romm services with 3 restaurants.', 'suraj.gif', 'rahul@gmail.com', 1),
(12, 'NITTE', 'Institute', 'Kadri', '0824345678', 'nitte@nitte.com', 'Information technologgy institute famous for it''s green engineering initiatives. Located in heart of city.', 'nitte.gif', 'sahil@gmail.com', 0),
(13, 'NITK', 'Institute', 'Surathkal', '8088059851', 'admin@nitk.ac.in', 'NITK is an institute of national importance vide Indian government''s act in 2001. It is one of the top colleges of technology in India.', 'nitk.gif', 'sahil@gmail.com', 20),
(14, 'KMC', 'Institute', 'Jyoti', '9876543210', 'kmc@kmc.ac.in', 'KMC is popular medical college and hospital in mangalore. Headquartered in adjoining town of Manipal, it provides all aminities of health services', 'kmc.gif', 'rahul@gmail.com', 5),
(18, 'Adidas', 'Garments', 'Lalbagh', '08244273564', 'mangalore@adidas.com', 'Sports accessories with great sale offers throughout the year. ', 'adidas.jpg', 'rahul@gmail.com', 7),
(20, 'Big Cinemas', 'Cinemas', 'Lalbagh', '9343122001', 'mangalore@bigcinemas.com', 'Reliance developed Big Cinemas with dolby digital sound and affordable ticket rates.', 'bigcinemas.gif', 'rahul@gmail.com', 2),
(21, '', '', '', '', '', '', '', '', 0),
(22, 'Infosys', 'Institute', 'Jyoti', '123456', 'infosys@gmail.com', 'IT Company', '', 'rahul@gmail.com', 0),
(23, 'sangeeta', 'Institute', 'Kadri', '9910402508', 'sangeeta@gmail.com', 'good college', '', 'sangeeta@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `cid` int(5) NOT NULL,
  `rating` int(1) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  KEY `cid` (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`cid`, `rating`, `description`) VALUES
(1, 3, 'Pizza Hut is one of the finest pizzeira in the world with over 200 restaurant chains. Pizza Hut Lalbagh is a Multicuisine restaurant located in the heart of Mangalore'),
(2, 4, 'Dominos is one of the finest pizzeira in the world with over 500 restaurant chains. There are three locations of this a Multicuisine restaurant in Mangalore');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `subject`, `category`, `message`) VALUES
('Rahul', 'rahul@gmail.com', 'Website ', 'feedback', 'Nice work dude!!'),
('Sahil', 'sahil@gmail.com', 'Advertisement', 'feedback', 'Nice advertisement portal :)'),
('kumar', 'kumar@live.com', 'hello', 'complaint', '');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `uid` varchar(20) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  KEY `uid` (`uid`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`uid`, `cid`, `description`) VALUES
('sangeeta@gmail.com', 1, 'good place to eat.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Registered user details for login conditions.';

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `password`, `uname`) VALUES
('khushi@gmail.com', '2345', 'khushi'),
('sangeeta@gmail.com', '1234', 'sangeeta');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD CONSTRAINT `advertisement_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `company` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `details_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `company` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `company` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;
