-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: יולי 16, 2022 בזמן 05:17 PM
-- גרסת שרת: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoesstore`
--

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `products`
--

CREATE TABLE `products` (
  `prodcutType` varchar(40) NOT NULL,
  `productDescription` varchar(40) NOT NULL,
  `actualPrice` int(10) NOT NULL,
  `images` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- הוצאת מידע עבור טבלה `products`
--

INSERT INTO `products` (`prodcutType`, `productDescription`, `actualPrice`, `images`) VALUES
('slippers', 'Slippers in all kinds of colors', 85, 'pictureSho/sh8.jpeg'),
('Nike shoes', 'Nike shoes in all kinds of colors', 139, 'pictureSho/sh2.jpeg'),
('Nike shoes glow', 'Nike shoes glow in the dark', 210, 'pictureSho/sh3.jpeg'),
('Simple shoes', 'Simple shoes with glowing lights', 100, 'pictureSho/reka.jpeg'),
('Adids shoes', 'Expensive adidas shoes', 319, 'pictureSho/sh4.jpeg'),
('Running shoes', 'High quality running shoes', 231, 'pictureSho/sh6.jpeg');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `user`
--

CREATE TABLE `user` (
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- הוצאת מידע עבור טבלה `user`
--

INSERT INTO `user` (`FirstName`, `LastName`, `Email`, `Password`) VALUES
('liel', 'hodara', 'lielxd12@gmail.com', '123456'),
('', '', 'elad@gmail.com', '123456789'),
('', '', 'efi@gmail.com', '1234567'),
('sophie', 'nash', 'sophie@gmail.com', '1234'),
('tal', 'wolvovsky', 'tal@gmail.com', 'tal123'),
('vered', 'hodara', 'vered@gmail.com', 'vered2233');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
