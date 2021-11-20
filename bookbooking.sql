-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 09, 2019 at 06:18 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE IF NOT EXISTS `admininfo` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`username`, `password`) VALUES
('trimon', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `bookinfo`
--

CREATE TABLE IF NOT EXISTS `bookinfo` (
  `book_id` varchar(20) NOT NULL,
  `book_name` varchar(20) NOT NULL,
  `book_author` varchar(20) NOT NULL,
  `book_price` varchar(10) NOT NULL,
  `book_img` varchar(500) NOT NULL,
  `book_quantity` varchar(10) NOT NULL,
  `book_description` varchar(500) NOT NULL,
  `book_cat` varchar(10) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookinfo`
--

INSERT INTO `bookinfo` (`book_id`, `book_name`, `book_author`, `book_price`, `book_img`, `book_quantity`, `book_description`, `book_cat`) VALUES
('1', 'OOP', 'Aurther', '29.99', 'image\\oop1.png', '10', 'Description Object-oriented programming is a programming paradigm based on the concept of "objects", which can contain data in the form of code.', 'cse'),
('10', 'Mechanics of Solids', 'James F. Kuros', '22.00', 'image\\mechanicsofsolids.png', '6', 'Description Object-oriented programming is a programming paradigm based on the concept of "objects", which can contain data in the form of code.', 'eee'),
('11', 'Gray''s Anatomy', 'Krith D. Coofer', '68.33', 'image\\graysanatomy.png', '6', 'Description Object-oriented programming is a programming paradigm based on the concept of "objects", which can contain data in the form of code.', 'med'),
('12', 'Parasitology', 'Eith Horowist', '65.99', 'image\\parasitology.png', '5', 'Description Object-oriented programming is a programming paradigm based on the concept of "objects", which can contain data in the form of code.', 'med'),
('13', 'Complex Number', 'James F. Kuros', '24.99', 'image\\complexnumber.png', '5', 'Description Object-oriented programming is a programming paradigm based on the concept of "objects", which can contain data in the form of code.', 'math'),
('14', 'Nano Physics', 'Eith Horowist', '22.00', 'image\\nanophysics.png', '5', 'Description Object-oriented programming is a programming paradigm based on the concept of "objects", which can contain data in the form of code.', 'math'),
('15', 'Digital Circuit', 'D. Rog', '49.99', 'image/digitalcircuit.png', '10', 'Description Object-oriented programming is a programming paradigm based on the concept of "objects", which can contain data in the form of code.', 'eee'),
('2', 'Algorithm', 'Eith Horowist', '19.99', 'image\\algorithm.png', '7', 'Description Object-oriented programming is a programming paradigm based on the concept of "objects", which can contain data in the form of code.', 'cse'),
('3', 'Big Data', 'Mathew', '24.99', 'image\\bigdata.png', '9', 'Description Object-oriented programming is a programming paradigm based on the concept of "objects", which can contain data in the form of code.', 'cse'),
('4', 'Compiler', 'Krith D. Coofer', '34.99', 'image\\compiler.png', '5', 'Description Object-oriented programming is a programming paradigm based on the concept of "objects", which can contain data in the form of code.', 'cse'),
('5', 'Computer Graphics', 'Steven Herington', '22.99', 'image\\computergraphics.png', '4', 'Description Object-oriented programming is a programming paradigm based on the concept of "objects", which can contain data in the form of code.', 'cse'),
('6', 'Computer Network', 'James F. Kuros', '24.99', 'image\\computernetwork.png', '6', 'Description Object-oriented programming is a programming paradigm based on the concept of "objects", which can contain data in the form of code.', 'cse'),
('7', 'Data Mining', 'H. Rosef', '36.99', 'image\\datamining.png', '7', 'Description Object-oriented programming is a programming paradigm based on the concept of "objects", which can contain data in the form of code.', 'cse'),
('8', 'Data Structure', 'Roland Fredrikh', '19.99', 'image\\datastructure.png', '6', 'Description Object-oriented programming is a programming paradigm based on the concept of "objects", which can contain data in the form of code.', 'cse'),
('9', 'Electronics Circuit', 'Rejaul Karim', '22.00', 'image\\electronicscircuit.png', '5', 'Description Object-oriented programming is a programming paradigm based on the concept of "objects", which can contain data in the form of code.', 'eee');

-- --------------------------------------------------------

--
-- Table structure for table `bookinginfo`
--

CREATE TABLE IF NOT EXISTS `bookinginfo` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `book_id` varchar(20) NOT NULL,
  `book_name` varchar(20) NOT NULL,
  `book_author` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `book_price` varchar(20) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `bookinginfo`
--

INSERT INTO `bookinginfo` (`id`, `book_id`, `book_name`, `book_author`, `user_id`, `book_price`, `user_address`) VALUES
(1, '10', 'Mechanics of Solids', 'James F. Kuros', 'tanjid1', '22.00', 'shyamoli'),
(2, '14', 'Nano Physics', 'Eith Horowist', 'tanjid1', '22.00', 'shyamoli'),
(3, '8', 'Data Structure', 'Roland Fredrikh', 'tanjid1', '19.99', 'shyamoli'),
(4, '6', 'Computer Network', 'James F. Kuros', 'nazma1', '24.99', 'sandwip,chittagong'),
(5, '1', 'OOP', 'Aurther', 'nazma1', '29.99', 'sandwip,chittagong'),
(8, '1', 'OOP', 'Aurther', 'tanjid1', '29.99', 'shyamoli');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `sl` int(20) NOT NULL AUTO_INCREMENT,
  `book_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `comment` varchar(100) NOT NULL,
  PRIMARY KEY (`sl`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`sl`, `book_id`, `user_id`, `user_name`, `comment`) VALUES
(1, '1', 'tanjid1', 'Tanjidul', 'this is a nice book.'),
(2, '1', 'tanjid1', 'Tanjidul', 'in time delivery.'),
(3, '11', 'tanjid1', 'Tanjidul', 'love this book.'),
(4, '7', 'nazma1', 'Rowshan', 'nice book'),
(5, '1', 'nazma1', 'Rowshan', 'what an amazing book.'),
(6, '8', 'tanjid1', 'Tanjidul', 'cool book.'),
(7, '10', 'tanjid1', 'Tanjidul', 'wow...'),
(8, '11', 'tanjid1', 'Tanjidul', 'H SAYE0'),
(9, '10', 'tanjid1', 'Tanjidul', 'HE336'),
(10, '12', 'tanjid1', 'Tanjidul', 'dfgfd'),
(11, '1', 'tanjid1', 'Tanjidul', 'hellow');

-- --------------------------------------------------------

--
-- Table structure for table `sellinfo`
--

CREATE TABLE IF NOT EXISTS `sellinfo` (
  `sl` int(20) NOT NULL AUTO_INCREMENT,
  `book_id` varchar(20) NOT NULL,
  `book_name` varchar(20) NOT NULL,
  `book_author` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `book_price` varchar(20) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  PRIMARY KEY (`sl`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `sellinfo`
--

INSERT INTO `sellinfo` (`sl`, `book_id`, `book_name`, `book_author`, `user_id`, `book_price`, `user_address`) VALUES
(1, '10', 'Mechanics of Solids', 'James F. Kuros', 'tanjid1', '22.00', 'shyamoli'),
(2, '6', 'Computer Network', 'James F. Kuros', 'nazma1', '24.99', 'sandwip,chittagong'),
(3, '10', 'Mechanics of Solids', 'James F. Kuros', 'tanjid1', '22.00', 'shyamoli'),
(4, '4', 'Compiler', 'Krith D. Coofer', 'tanjid1', '34.99', 'shyamoli'),
(5, '4', 'Compiler', 'Krith D. Coofer', 'tanjid1', '34.99', 'shyamoli'),
(6, '10', 'Mechanics of Solids', 'James F. Kuros', 'tanjid1', '22.00', 'shyamoli'),
(7, '10', 'Mechanics of Solids', 'James F. Kuros', 'tanjid1', '22.00', 'shyamoli'),
(8, '10', 'Mechanics of Solids', 'James F. Kuros', 'tanjid1', '22.00', 'shyamoli'),
(9, '10', 'Mechanics of Solids', 'James F. Kuros', 'tanjid1', '22.00', 'shyamoli'),
(10, '10', 'Mechanics of Solids', 'James F. Kuros', 'tanjid1', '22.00', 'shyamoli'),
(11, '10', 'Mechanics of Solids', 'James F. Kuros', 'tanjid1', '22.00', 'shyamoli');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`first_name`, `last_name`, `user_id`, `phonenumber`, `address`, `password`) VALUES
('Rowshan', 'Akhter', 'nazma1', '01936243723', 'sandwip,chittagong', '123456'),
('Tanjidul', 'Ahad', 'tanjid1', '01914334648', 'shyamoli', '12345');
