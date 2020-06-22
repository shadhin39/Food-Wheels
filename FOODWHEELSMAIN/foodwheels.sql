-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2019 at 08:35 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodwheels`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `post` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `subject`, `message`, `post`, `file`) VALUES
('Nazmus Shakib Shadin', 'shadhin.aust.cse@gmail.colm', 'dfsd', 'fdsfds', '', ''),
('Nazmus Shakib Shadin', 'shadhin.aust.cse@gmail.colm', 'dfsd', 'fdsfds', '', ''),
('Nazmus Shakib Shadin', 'shadhin.aust.cse@gmail.colm', 'dfsd', 'fdsfds', '', ''),
('Nazmus Shakib Shadin', 'shadhin.aust.cse@gmail.colm', 'dfsd', 'fdsfds', '', ''),
('Nazmus Shakib Shadin', 'shadhin.aust.cse@gmail.colm', 'dfsd', 'fdsfds', '', ''),
('Nazmus Shakib Shadin', 'shadhin.aust.cse@gmail.colm', 'dfsd', 'fdsfds', '', ''),
('nazmus shakib', 'fdfsdf@gmail.com', 'fdsfds', 'dsfdsfd', 'Pizza Supplier', ''),
('nazmus shakib', 'fdfsdf@gmail.com', 'fdsfds', 'dsfdsfd', 'Pizza Supplier', ''),
('nazmus shakib', 'fdfsdf@gmail.com', 'fdsfds', 'dsfdsfd', 'Pizza Supplier', ''),
('nazmus shakib', 'fdfsdf@gmail.com', 'fdsfds', 'dsfdsfd', 'Pizza Supplier', ''),
('dsfsda', 'fdsf@gmail.com', 'dfsf', 'dfdsf', 'chef', '2814-tbl_product.sql'),
('Silvia Sanjana Priyata', 'silvia.aust39@gmail.com', 'I want to join your company', 'This is a short note', 'chef', '4098-'),
('Silvia Sanjana Priyata', 'silvia.aust39@gmail.com', 'I want to join your company', 'This is a short note', 'chef', '9997-'),
('Silvia Sanjana Priyata', 'ds@gmail.com', 'dsfsdf', 'dsfdsf', 'chef', '6249-Class 9.docx'),
('Mehedi hasan', 'ddd@gmail.com', 'no message', 'I am a chef', 'chef', '2619-CV (Mecrhandising position).docx'),
('Nazmus Shakib Shadin', 'shadhin.aust.cse@gmail.com', 'no message', 'Short note', 'Pizza Supplier', '1116-Shadhin.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `insertpurchase`
--

CREATE TABLE `insertpurchase` (
  `image` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `productname`, `quantity`, `price`) VALUES
(16, 'Chicken Mashroom Pizza', 1, 1030),
(17, '8.5 INCHI PIZZA DELIGHT', 5, 652);

-- --------------------------------------------------------

--
-- Table structure for table `rest`
--

CREATE TABLE `rest` (
  `firstname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `number` int(20) NOT NULL,
  `zip` int(10) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `secondname` varchar(100) NOT NULL,
  `conemail` varchar(50) NOT NULL,
  `conpassword` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rest`
--

INSERT INTO `rest` (`firstname`, `email`, `password`, `number`, `zip`, `gender`, `secondname`, `conemail`, `conpassword`, `address`) VALUES
('Fardin Alam', 'shadhin.aust.cse@gmail.com', '123456', 1768454606, 1208, 'Male', 'Shadin', 'shadhin.aust.cse@gmail.com', '123456', 'Dhaka,Bangladesh'),
('soumik', 'soumik@gmail.com', '123', 1233, 121, 'other', 'rad', 'soumik@gmail.com', '123', 'dhaka'),
('silvia Sanjana', 'silvia.aust39@gmail.com', '123456', 1676913068, 1200, '', 'priyata', 'silvia.aust39@gmail.com', '123456', 'dhaka'),
('silvia Sanjana', 'silvia.aust39@gmail.com', '12345', 1676913068, 1200, '', 'priyata', 'silvia.aust39@gmail.com', '12345', 'dhaka'),
('silvia Sanjana', 'silvia.aust39@gmail.com', '12345', 1233, 11, 'Female', 'priyata', 'silvia.aust39@gmail.com', '12345', 'dhaka'),
('silvia Sanjana', 'silvia.aust39@gmail.com', '123', 1676913068, 11, 'Female', 'priyata', 'silvia.aust39@gmail.com', '123', 'dhaka'),
('Nazmus Shakib Shadin', 'nazmusshakib48@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1682994410, 3700, 'Male', 'Shadin', 'nazmusshakib48@gmail.com', '123456', 'Lakshmipur'),
('Fardin Alam ', 'fardinalam57@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1531984613, 1203, '', 'Shuvro', 'fardinalam57@gmail.com', '12345', 'Dhaka, Bnagladesh'),
('silvia Sanjana', 'shuvro@gmail.com', '9040e4fc2d5b7a6da9d277e412ee1a00', 1, 3700, 'Male', 'Shuvro', 'shuvro@gmail.com', 'Shuvro123', 'Lakshmipur'),
('Kaga', 'kaga@gmail.com', '27c44d43f0741e3afd677b7378c8ddc4', 1, 121, 'Male', 'Vatija', 'kaga@gmail.com', '27c44d43f0741e3afd677b7378c8ddc4', 'Dhaka,Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(2, 'Combo Latino', '11.jpg', 999.00),
(1, 'Combo Palaziano', '10.jpg', 499.00),
(3, 'Combo Italiano', '13.jpg', 1550.00),
(15, 'Chicken Mashroom Pizza', 'chicken.jpg', 1030.00),
(14, 'Buy One Get One Pizza IN Free', 'buyonegetone.jpg', 780.00),
(13, '8.5 INCHI PIZZA DELIGHT', '8.5inchi.jpg', 652.25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
