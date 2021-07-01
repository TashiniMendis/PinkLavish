-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 10:15 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pink lavish`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `C_Id` int(8) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact` int(10) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Service` text NOT NULL,
  `TeamMember` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`C_Id`, `Name`, `Email`, `Contact`, `City`, `Date`, `Service`, `TeamMember`) VALUES
(10008001, 'Tashini Mendis', 'tashinihansika@gmail.com', 716656533, 'Tangalle', '2021-04-01', 'Nail Service', 'Tashini'),
(10008004, 'Samathi Kisalka', 'samathikisalka@gmail.com', 714568915, 'Tangalle', '2021-03-27', 'Bridal', 'Tashini'),
(10008006, 'gavindu', 'gavindu@gmail.com', 714561233, 'Galle', '2021-03-22', 'Nail Service', 'Tharu'),
(10008008, 'Nimal', 'nimal123@gmail.com', 715523123, 'Monaragala', '2021-03-31', 'Hair Service', 'Tharu'),
(10008011, 'Chandima', 'chandima@gmail.com', 778456123, 'Hambantota', '2021-04-04', 'Bridal', 'Tharu'),
(10008012, 'Laknadee', 'laknadee@gmail.com', 714561230, 'Galle', '2021-04-04', 'Bridal', 'Tharu'),
(10008013, 'Tashini Hansika', 'tashinihansika123@gmail.com', 714563210, 'Kataragama', '2021-06-15', 'Nail Service', 'Imasha'),
(10008014, 'Samathi Kisalka', 'samathikisalka@gmail.com', 718974563, 'Tangalle', '2021-06-28', 'Hair Service', 'Tharu'),
(10008015, 'Hasini Punsara', 'sara@gmail.com', 764512307, 'Tangalle', '2021-06-28', 'Bridal', 'lalnadee');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `order_id` int(8) NOT NULL,
  `order_Customer` varchar(255) NOT NULL,
  `order_Date` date NOT NULL,
  `order_value` double NOT NULL,
  `order_Cash_Paid` double NOT NULL,
  `total_value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`order_id`, `order_Customer`, `order_Date`, `order_value`, `order_Cash_Paid`, `total_value`) VALUES
(1, 'gavindu', '2021-04-01', 1500, 1500, 0),
(2, 'Samathi', '2021-04-22', 2400, 2400, 0),
(3, 'Hasini', '2021-05-03', 1250, 1000, 250),
(4, 'Tashini', '2021-05-12', 1600, 1400, 200),
(5, 'Chandima', '2021-05-19', 1380, 1300, 80),
(6, 'Imasha', '2021-05-29', 2650, 2450, 200);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `P_Id` int(8) NOT NULL,
  `P_name` varchar(255) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`P_Id`, `P_name`, `price`) VALUES
(10002, 'WOW COCONUT HAIR CONDITIONER', 1450),
(10003, 'HAIR HEALTH CASTER OIL', 1400),
(10004, 'ORIENTAL RED ONION HAIR MASK', 1250),
(10006, 'OLAY REGENARISE CREAM', 500),
(10007, 'SIMPLE MOISTURISING FACE WASH', 300),
(10008, 'NEW NUDE EYE SHADOW PALETTE', 1540),
(10009, 'AVOS MISS ROSE LIPSTICK', 345);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `S_Id` int(8) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `S_Name` varchar(255) NOT NULL,
  `Price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`S_Id`, `Type`, `S_Name`, `Price`) VALUES
(1, 'Face service', 'Cleanup', 4100),
(2, 'Face service', 'Facial', 2500),
(4, 'Hair service', 'SHAMPOO/CUT/BLOW DRY', 4000),
(5, 'Hair service', 'HAIR IRONING', 2000),
(6, 'Nail Service', 'MANICURE', 2500),
(7, 'Nail Service', 'FOOT SCRUB', 800);

-- --------------------------------------------------------

--
-- Table structure for table `teammember`
--

CREATE TABLE `teammember` (
  `T_no` int(8) NOT NULL,
  `T_name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact` int(10) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teammember`
--

INSERT INTO `teammember` (`T_no`, `T_name`, `Email`, `Contact`, `Password`) VALUES
(10040007, 'Gavindu', 'gavindu@gmail.com', 2147483647, '9912'),
(10040005, 'Imasha', 'imashadilakshi@gmail.com', 774563123, ''),
(10040001, 'Punsara', 'hasinipunsara@gmail.com', 705210446, '97PH'),
(10040002, 'Samathi', 'samathikisalka@gmail.com', 713767774, '9712'),
(10040003, 'Tashini hansika', 'tashinihansika123@gmail.com', 716656533, '980213'),
(10040004, 'Tharushi Laknadee', '', 774563423, ''),
(10041006, 'Wishmi', 'wishmikaveesha@gmail.com', 715588082, '0505');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`C_Id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`P_Id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`S_Id`);

--
-- Indexes for table `teammember`
--
ALTER TABLE `teammember`
  ADD PRIMARY KEY (`T_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `C_Id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10008016;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `order_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `P_Id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10010;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `S_Id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
