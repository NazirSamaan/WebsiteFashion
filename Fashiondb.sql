-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2019 at 08:36 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


-- Database: `Fashiondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `Baju`
--

CREATE TABLE `Baju` (
  `BajuID` int(11) NOT NULL,
  `BajuName` varchar(100) COLLATE utf8_bin NOT NULL,
  `BajuPrice` decimal(50,2) NOT NULL,
  `BajuDes` varchar(250) COLLATE utf8_bin NOT NULL,
  `BajuImg` varchar(100) COLLATE utf8_bin NOT NULL,
  `code` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `Baju`
--

INSERT INTO `Baju` (`BajuID`, `BajuName`, `BajuPrice`, `BajuDes`, `BajuImg`, `code`) VALUES
(21, 'Relaxed Fit Denim jacket', '80', 'Relaxed-fit jacket in rigid cotton denim with a collar', 'images/BlackJacket.jfif', 'BAJU1'),
(22, 'Oversized Fit Corduroy Overshirt', '65', 'Oversized overshirt in soft cotton corduroy with embroidered appliqués', 'images/Overshirt.jfif', 'BAJU2'),
(23, 'Hooded Jacket', '75', 'Relaxed-fit sweatshirt jacket with a soft, brushed inside', 'images/HoodedJacket.jfif', 'BAJU3'),
(24, '3-pack Regular Fit Crew-neck T-shirts', '30', 'Regular-fit T-shirts in soft cotton jersey', 'images/T-Shirt.jfif', 'BAJU4'),
(25, 'Relaxed Fit Flannel Shirt', '50', 'Relaxed-fit shirt in soft cotton flannel ', 'images/RelaxedFitShirt.jfif', 'BAJU5'),
(26, 'Relaxed Fit Fine-knit Cardigan ', '60', 'Relaxed-fit cardigan in fine-knit cotton', 'images/Relaxedfitcardigan.jfif', 'BAJU6'),
(27, 'Regular Fit Cotton Sweater', '72', 'Regular-fit sweater in a soft cotton knit', 'images/Regularfitsweater.jfif', 'BAJU7'),
(28, 'Oversized Fit Jacquard-knit Sweater', '90', 'Soft, oversized, jacquard-knit sweater with wool content', 'images/OversizedFit.jfif', 'BAJU8');

-- --------------------------------------------------------

--
-- Table structure for table `Seluar`
--

CREATE TABLE `Seluar` (
  `SeluarID` int(11) NOT NULL,
  `SeluarName` varchar(100) COLLATE utf8_bin NOT NULL,
  `SeluarPrice` decimal(50,2) NOT NULL,
  `SeluarDes` varchar(250) COLLATE utf8_bin NOT NULL,
  `SeluarImg` varchar(100) COLLATE utf8_bin NOT NULL,
  `code` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `Seluar`
--

INSERT INTO `Seluar` (`SeluarID`, `SeluarName`, `SeluarPrice`, `SeluarDes`, `SeluarImg`, `code`) VALUES
(1, 'Regular Fit Twill Pants', '77', 'Regular-fit, 5-pocket pants in cotton twill', 'images/RegularPants.jfif', 'Seluar1'),
(2, 'Regular Fit Dressy Joggers', '86', 'Dressy, regular-fit joggers in woven fabric.', 'images/pant2.jfif', 'Seluar2'),
(3, 'Joggers pant', '57', 'Dressy, regular-fit joggers in woven fabric', 'images/pant3.jfif', 'Seluar3'),
(4, 'Relaxed Fit Work Pants', '64.00', 'Relaxed-fit work pants in thick cotton canvas', 'images/pant4.jfif', 'Seluar4'),
(5, 'THE JEANS', '99', '5-pocket jeans in stretch cotton denim washed', 'images/jean1.fif', 'Seluar5'),
(6, 'Loose Jeans', '76', '5-pocket jeans in non-stretch cotton denim', 'images/jean2.jfif', 'Seluar6'),
(7, 'Skinny Jeans ', '44.00', '5-pocket jeans in cotton denim with a premium stretch', 'images/jean3.jfif', 'Seluar7'),
(8, 'Freefit Slim Jeans', '120.00', 'Straight-leg, 5-pocket jeans in denim with gentle stretch', 'images/jean4.jfif', 'Seluar8');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `coID` int(11) NOT NULL,
  `coFirstN` varchar(100) COLLATE utf8_bin NOT NULL,
  `coLastN` varchar(100) COLLATE utf8_bin NOT NULL,
  `district` varchar(50) COLLATE utf8_bin NOT NULL,
  `coAddress` varchar(250) COLLATE utf8_bin NOT NULL,
  `coUnit` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `coPhone` int(50) NOT NULL,
  `coEmail` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`coID`, `coFirstN`, `coLastN`, `district`, `coAddress`, `coUnit`, `coPhone`, `coEmail`) VALUES
(8, 'Nazir', 'Samaan', 'Brunei Muara', 'No11, Katok B Jalan Gadong', '', 726223, 'nazir@gmail.com'),
(9, 'Nazir', 'Samaan', 'Brunei Muara', 'No11, Katok B Jalan Gadong', '', 726223, 'nazir@gmail.com'),
(10, 'Nazir', 'Samaan', 'Brunei Muara', 'No11, Katok B Jalan Gadong', '', 726223, 'nazir@gmail.com'),
(11, 'Nazir', 'Samaan', 'Brunei Muara', 'No11, Katok B Jalan Gadong', '', 726223, 'nazir@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contactch`
--

CREATE TABLE `contactch` (
  `conID` int(100) NOT NULL,
  `conName` varchar(150) COLLATE utf8_bin NOT NULL,
  `conEmail` varchar(150) COLLATE utf8_bin NOT NULL,
  `conSub` varchar(150) COLLATE utf8_bin NOT NULL,
  `subMess` varchar(500) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `contactch`
--

INSERT INTO `contactch` (`conID`, `conName`, `conEmail`, `conSub`, `subMess`) VALUES
(9, 'Nazir Samaan', 'nazir@gmail.com', 'Location', 'Is it still available for delivering to serasa');

-- --------------------------------------------------------

--
-- Table structure for table `debitcard`
--

CREATE TABLE `debitcard` (
  `dcID` int(10) NOT NULL,
  `dcNumber` int(100) NOT NULL,
  `dcName` varchar(150) COLLATE utf8_bin NOT NULL,
  `dcDate` varchar(50) COLLATE utf8_bin NOT NULL,
  `dcCode` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `debitcard`
--

INSERT INTO `debitcard` (`dcID`, `dcNumber`, `dcName`, `dcDate`, `dcCode`) VALUES
(1, 1111, 'nazir Samaan', '2020-11-20', 123);

-- --------------------------------------------------------

--
-- Table structure for table `paypal`
--

CREATE TABLE `paypal` (
  `ppID` int(10) NOT NULL,
  `ppUsername` varchar(100) COLLATE utf8_bin NOT NULL,
  `ppPassword` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `paypal`
--

INSERT INTO `paypal` (`ppID`, `ppUsername`, `ppPassword`) VALUES
(1, 'nazir samaan', 'burger');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Baju`
--
ALTER TABLE `Baju`
  ADD PRIMARY KEY (`BajuID`);

--
-- Indexes for table `Seluar`
--
ALTER TABLE `Seluar`
  ADD PRIMARY KEY (`SeluarID`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`coID`);

--
-- Indexes for table `contactch`
--
ALTER TABLE `contactch`
  ADD PRIMARY KEY (`conID`);

--
-- Indexes for table `debitcard`
--
ALTER TABLE `debitcard`
  ADD PRIMARY KEY (`dcID`);

--
-- Indexes for table `paypal`
--
ALTER TABLE `paypal`
  ADD PRIMARY KEY (`ppID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Baju`
--
ALTER TABLE `Baju`
  MODIFY `BajuID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Seluar`
--
ALTER TABLE `Seluar`
  MODIFY `SeluarID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `coID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contactch`
--
ALTER TABLE `contactch`
  MODIFY `conID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `debitcard`
--
ALTER TABLE `debitcard`
  MODIFY `dcID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paypal`
--
ALTER TABLE `paypal`
  MODIFY `ppID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
