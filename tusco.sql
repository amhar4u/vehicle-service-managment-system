-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 07:32 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tusco`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(5) NOT NULL,
  `NIC` varchar(12) NOT NULL,
  `VehicleRno` varchar(8) NOT NULL,
  `VehicleType` varchar(30) NOT NULL,
  `ServiceType` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Status` varchar(20) NOT NULL DEFAULT 'Pending',
  `payment` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `NIC`, `VehicleRno`, `VehicleType`, `ServiceType`, `Date`, `Status`, `payment`) VALUES
(27, '199834820182', 'ABA-2012', 'motorbike', 'Repaire', '2022-11-09', 'Pending', 'Not Paid'),
(28, '199834820182', 'ABA-2012', 'lightVehicle', 'bodywash & repair', '2022-11-06', 'Pending', 'Not Paid'),
(29, '200075502764', 'ABA-2015', 'motorbike', 'bodywash & repair', '2022-11-06', 'Pending', 'Not Paid'),
(30, '200075502764', 'ABA-2012', 'threewheel', 'FullService & repair', '2022-11-06', 'Pending', 'Not Paid'),
(32, '200075512345', 'BBC-1345', 'motorbike', 'Repaire', '2022-11-08', 'Pending', 'Not Paid'),
(33, '199834801019', 'ABA-2014', 'motorbike', 'Repaire', '2022-11-06', 'Pending', 'Paid'),
(34, '199834801019', 'ABA-2014', 'motorbike', 'Repaire', '2022-11-06', 'Pending', 'Paid'),
(35, '199834801019', 'ABA-2012', 'motorbike', 'FullService & repair', '2022-11-08', 'Pending', 'Paid'),
(37, '199834801019', 'BBC-1345', 'threewheel', 'bodywash & repair', '2022-11-08', 'Pending', 'Paid'),
(39, '199834801019', 'BBC-1345', 'motorbike', 'bodywash & repair', '2022-11-08', 'Pending', 'Paid'),
(40, '199834801019', 'BBC-1345', 'motorbike', 'bodywash & repair', '2022-11-08', 'Pending', 'Paid'),
(42, '200075502764', 'ABA-2014', 'threewheel', 'FullService & repair', '2022-11-08', 'Pending', 'Not Paid'),
(43, '199834801019', 'ABA-2015', 'threewheel', 'FullService & repair', '2022-11-08', 'Pending', 'Paid'),
(44, '199834801019', 'ABA-2015', 'threewheel', 'FullService & repair', '2022-11-08', 'Pending', 'Paid'),
(45, '200075502764', 'ABA-2013', 'threewheel', 'FullService & repair', '2022-11-08', 'Pending', 'Not Paid'),
(46, '123445666789', 'CFF-1213', 'threewheel', 'FullService & repair', '2022-11-08', 'Pending', 'Not Paid'),
(50, '200075502764', 'ABA-2012', 'motorbike', 'Repaire', '2022-11-08', 'Pending', 'Not Paid'),
(51, '123445666789', 'CFF-1213', 'threewheel', 'FullService & repair', '2022-11-08', 'Pending', 'Not Paid'),
(53, '200075502764', 'ABA-2012', 'motorbike', 'Repaire', '2022-11-08', 'Pending', 'Not Paid'),
(56, '200075502764', 'ABA-2012', 'motorbike', 'Repaire', '2022-11-08', 'Pending', 'Not Paid'),
(58, '200075502764', 'ABA-2012', 'lightVehicle', 'FullService ', '2022-11-08', 'Pending', 'Not Paid'),
(59, '123445666789', 'CFF-1213', 'motorbike', 'FullService ', '2022-11-08', 'Pending', 'Not Paid'),
(60, '199834820182', 'ABA-2012', 'motorbike', 'FullService & repair', '2022-11-09', 'Pending', 'Not Paid'),
(61, '199834820182', 'ABA-2012', 'motorbike', 'Repaire', '2022-11-09', 'Pending', 'Not Paid'),
(62, '200075502764', 'ABA-2012', 'lightVehicle', 'FullService & repair', '2022-11-09', 'Pending', 'Not Paid'),
(63, '200075502764', 'ABA-2012', 'lightVehicle', 'Repaire', '2022-11-09', 'Pending', 'Not Paid'),
(64, '199834820182', 'ABA-2012', 'threewheel', 'FullService ', '2022-11-09', 'Pending', 'Not Paid'),
(65, '123445666789', 'ABA-2015', 'motorbike', 'BodyWash', '2022-11-09', 'Pending', 'Not Paid'),
(66, '199834820182', 'ABA-2012', 'lightVehicle', 'BodyWash', '2022-11-22', 'Pending', 'Not Paid'),
(67, '199834820182', 'ABA-2012', 'lightVehicle', 'Repaire', '2022-11-22', 'Pending', 'Not Paid'),
(68, '200075502764', 'BBC-1345', 'motorbike', 'FullService ', '2022-11-22', 'Pending', 'Not Paid'),
(69, '200075502764', 'BBC-1345', 'motorbike', 'Repaire', '2022-11-22', 'Pending', 'Not Paid'),
(70, '200075502764', 'CFF-1213', 'motorbike', 'Repaire', '2022-11-22', 'Pending', 'Not Paid'),
(71, '199834820182', 'ABA-2015', 'motorbike', 'bodywash & repair', '2022-11-22', 'Pending', 'Not Paid'),
(72, '199834820182', 'BBC-1345', 'motorbike', 'Repaire', '2022-11-22', 'Pending', 'Not Paid'),
(73, '123445666789', 'BBC-1345', 'threewheel', 'FullService & repair', '2022-11-22', 'Pending', 'Not Paid'),
(74, '123456789101', 'ABA-2014', 'threewheel', 'BodyWash', '2022-11-23', 'Pending', 'Not Paid'),
(75, '200075502764', 'ABA-2014', 'lightVehicle', 'FullService & repair', '2022-11-23', 'Pending', 'Not Paid'),
(76, '200075502764', 'ABA-2014', 'lightVehicle', 'FullService & repair', '2022-11-23', 'Pending', 'Not Paid'),
(77, '199834820182', 'ABA-2012', 'threewheel', 'Repaire', '2022-11-23', 'Pending', 'Not Paid'),
(78, '200412345678', 'ABA-2012', 'threewheel', 'Repaire', '2022-11-23', 'Pending', 'Not Paid'),
(79, '199834801019', 'ABA-2014', 'lightVehicle', 'FullService ', '2022-11-23', 'Pending', 'Paid'),
(80, '200112345678', 'CFF-1213', 'motorbike', 'FullService ', '2022-11-24', 'Pending', 'Not Paid'),
(81, '199912312312', 'BBC-1345', 'lightVehicle', 'BodyWash', '2022-11-24', 'Pending', 'Not Paid'),
(82, '199612345678', 'ABA-2014', 'motorbike', 'Repaire', '2022-11-24', 'Pending', 'Not Paid'),
(83, '199712345678', 'ABA-2012', 'lightVehicle', 'Repaire', '2022-11-24', 'Pending', 'Not Paid'),
(84, '199512231223', 'CFF-1213', 'threewheel', 'Repaire', '2022-11-24', 'Pending', 'Not Paid'),
(86, '198912121212', 'BBC-1345', 'threewheel', 'Repaire', '2022-11-24', 'Pending', 'Not Paid'),
(88, '199011111111', 'ABA-2013', 'motorbike', 'Repaire', '2022-11-24', 'Pending', 'Not Paid'),
(90, '199834801019', 'ABA-2014', 'motorbike', 'Repaire', '2022-11-24', 'Pending', 'Paid'),
(91, '200075502764', 'ABA-2012', 'lightVehicle', 'Repaire', '2022-11-24', 'Pending', 'Not Paid'),
(92, '199985511954', 'ABA-2015', 'lightVehicle', 'FullService & repair', '2022-11-24', 'Pending', 'Not Paid'),
(93, '200056702568', 'ABA-2013', 'motorbike', 'bodywash & repair', '2022-11-24', 'Pending', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cardtype` varchar(30) NOT NULL,
  `cardno` varchar(30) NOT NULL,
  `exdate` varchar(10) NOT NULL,
  `cvcno` int(5) NOT NULL,
  `NIC` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `cardtype`, `cardno`, `exdate`, `cvcno`, `NIC`) VALUES
(10, '199834801019', 'Visa', '1234 5678 9101 1213', '12/24', 123, '199834801019'),
(11, '200112345678', 'Visa', '9876 6543 1234 1111', '12/28', 123, '200112345678'),
(12, '199512231223', 'Amex', '1111 2222 3333 4444', '12/24', 111, '199512231223');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `email`, `Subject`, `message`) VALUES
(4, 'isuri', 'isu@gmail.com', 'Good service', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `NIC` varchar(12) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `ContactNo` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `CPassword` varchar(50) NOT NULL,
  `UserType` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `NIC`, `Name`, `Email`, `ContactNo`, `Address`, `Password`, `CPassword`, `UserType`) VALUES
(14, '123456782322', 'ammmmm', 'muhammedbcd@gmail.com', '0776657108', 'kandy', 'd9b1d7db4cd6e70935368a1efb10e377', '202cb962ac59075b964b07152d234b70', 'employee'),
(15, '123456711111', 'amhar', 'muhammedamhar@gmail.com', '0712733333', 'Colombo', '900150983cd24fb0d6963f7d28e17f72', '900150983cd24fb0d6963f7d28e17f72', 'Customer'),
(16, '199812131323', 'amhar', 'muhammedbcd@gmail.com', '0776657108', 'kanulettiya', 'c20ad4d76fe97759aa27a0c99bff6710', 'c20ad4d76fe97759aa27a0c99bff6710', 'Customer'),
(17, '12345634561', 'amh', 'muhammedamhar@gmail.com', '0776657108', 'kandy', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 'Customer'),
(18, '123456782322', 'amhar', 'muhammedbn@gmail.com', '0712733333', 'Colombo', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 'Customer'),
(19, '123456778899', 'amhar', 'amharr@gmail.com', '0776657107', 'kandy', '7363a0d0604902af7b70b271a0b96480', ' 202cb962ac59075b964b07152d234b70', 'employee'),
(20, '199834824324', 'amhar', 'muhammed@gmail.com', '0776657108', 'Colombo', 'c20ad4d76fe97759aa27a0c99bff6710', 'c20ad4d76fe97759aa27a0c99bff6710', 'Customer'),
(21, '199834824324', 'amhar', 'muhammed@gmail.com', '0712333333', 'kandy', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 'Customer'),
(22, '199812131323', 'amhar', 'muhammed@gmail.com', '0712780283', 'kandy', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 'Customer'),
(23, '12345634561', 'amhar', 'muhammed@gmail.com', '0712780283', 'kandy', 'c20ad4d76fe97759aa27a0c99bff6710', 'c20ad4d76fe97759aa27a0c99bff6710', 'Customer'),
(24, '123456772222', 'amhar', 'muhammed@gmail.com', '0776657108', 'kalpitiya', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 'customer'),
(28, '123456711111', 'sami', 'muhammedbn@gmail.com', '0712333333', 'Colombo', '250cf8b51c773f3f8dc8b4be867a9a02', '250cf8b51c773f3f8dc8b4be867a9a02', 'employee'),
(29, '199834801019', 'amhar', 'muhammedamhar@gmail.com', '0776657108', 'Colombo', 'd9280a3365b6808a5f1c9071e48166d1', 'd9280a3365b6808a5f1c9071e48166d1', 'customer'),
(30, '199834801019', 'amhar', 'muhammedamhar@gmail.com', '0776657108', 'Colombo', 'd9280a3365b6808a5f1c9071e48166d1', 'd9280a3365b6808a5f1c9071e48166d1', 'employee'),
(31, '200075502764', 'Sasara', 'sasarasachini@gmail.com', '0759891675', 'malsiripura', '1aac6cb29b46c3260eda9b1e8e73dae3', '1aac6cb29b46c3260eda9b1e8e73dae3', 'customer'),
(32, '200075502764', 'Sasara', 'sasarasachini@gmail.com', '0759891675', 'malsiripura', '1aac6cb29b46c3260eda9b1e8e73dae3', '1aac6cb29b46c3260eda9b1e8e73dae3', 'employee'),
(33, '123456773344', 'amam', 'amha@gmail.com', '0776657107', 'kurnegala', '698d51a19d8a121ce581499d7b701668', ' 698d51a19d8a121ce581499d7b701668', 'customer'),
(34, 'fsdfdffsdsdf', 'bfdfdgfdgdg', 'muhammedamhar@gmail.com', 'fgfdgdggf', 'ghgfghhfgh1', '81dc9bdb52d04dc20036dbd8313ed055', ' 81dc9bdb52d04dc20036dbd8313ed055', 'customer'),
(35, '123456773344', 'amhar', 'amha@gmail.com', '0776657107', 'kurnegala', '698d51a19d8a121ce581499d7b701668', ' 698d51a19d8a121ce581499d7b701668', 'customer'),
(36, 'admin', 'amhar', 'admin@gmail.com', '0776657108', 'Colombo', 'c93ccd78b2076528346216b3b2f701e6', 'c93ccd78b2076528346216b3b2f701e6', 'admin'),
(37, 'admin', 'amhar', 'admin@gmail.com', '0776657108', 'Colombo', 'c93ccd78b2076528346216b3b2f701e6', 'c93ccd78b2076528346216b3b2f701e6', 'employee'),
(38, '123456711111', 'sami', 'amharr@gmail.com', '0759891675', 'colombo', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055', 'employee'),
(39, '199985511954', 'isuri', 'isu@gmail.com', '0776657107', 'kurnegala', '81dc9bdb52d04dc20036dbd8313ed055', ' 81dc9bdb52d04dc20036dbd8313ed055', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`NIC`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
