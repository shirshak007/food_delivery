-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2018 at 04:13 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_delivery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_ID` varchar(10) NOT NULL,
  `A_NAME` varchar(50) NOT NULL,
  `PWD` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_ID`, `A_NAME`, `PWD`) VALUES
('1', 'Shirshak Das', '123'),
('2', 'Partha P Sarkar', '123');

-- --------------------------------------------------------

--
-- Table structure for table `craddress`
--

CREATE TABLE `craddress` (
  `C_ID` bigint(20) NOT NULL,
  `ADDRESS_ID` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `craddress`
--

INSERT INTO `craddress` (`C_ID`, `ADDRESS_ID`) VALUES
(1, 1),
(1, 4),
(2, 2),
(3, 3),
(4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `C_ID` bigint(20) NOT NULL,
  `C_NAME` varchar(100) NOT NULL,
  `PH_NO` bigint(20) NOT NULL,
  `LOGIN_TYPE` varchar(100) NOT NULL,
  `MEMBERSHIP` varchar(50) NOT NULL DEFAULT 'STANDRAD',
  `PASSWORD` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`C_ID`, `C_NAME`, `PH_NO`, `LOGIN_TYPE`, `MEMBERSHIP`, `PASSWORD`) VALUES
(1, 'Shirshak Das', 9876541230, 'shirshak007@gmail.com', 'STANDARD', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(2, 'Partha P Sarkar', 9876543211, 'parthaCU@gmail.com', 'PREMIUM', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(3, 'Soumik De', 9654875411, 'soumik@gmail.com', 'STANDARD', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(4, 'Subham Basak', 7898745621, 'subham@yahoo.in', 'PREMIUM', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

-- --------------------------------------------------------

--
-- Table structure for table `cust_order`
--

CREATE TABLE `cust_order` (
  `CUST_ID` bigint(20) NOT NULL,
  `ORDER_ID` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust_order`
--

INSERT INTO `cust_order` (`CUST_ID`, `ORDER_ID`) VALUES
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(3, 1),
(3, 20),
(3, 21),
(4, 22);

-- --------------------------------------------------------

--
-- Table structure for table `c_address`
--

CREATE TABLE `c_address` (
  `ADDRESS_ID` bigint(20) NOT NULL,
  `FLAT_NO` varchar(10) NOT NULL,
  `FLOOR` varchar(100) NOT NULL,
  `APARTMENT_NO` varchar(100) NOT NULL,
  `STREET` varchar(100) NOT NULL,
  `LOCALITY` varchar(100) DEFAULT NULL,
  `PINCODE` mediumint(9) NOT NULL,
  `CITY` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_address`
--

INSERT INTO `c_address` (`ADDRESS_ID`, `FLAT_NO`, `FLOOR`, `APARTMENT_NO`, `STREET`, `LOCALITY`, `PINCODE`, `CITY`) VALUES
(1, '1A', '2', '4B', 'EM', 'H park', 700152, 'Kol'),
(2, '1', '2', '3', '4', '5', 700103, 'KOLK'),
(3, '1', '2', '3', '4', '5', 700001, 'Kolkata'),
(4, '1A', '3', 'Green Wood', 'James Long', 'Behala', 700084, 'Kolkata'),
(5, '7s', '3', '4x', 'S Road', 'Dharmatala', 700001, 'Kolkata');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_boy`
--

CREATE TABLE `delivery_boy` (
  `D_B_ID` bigint(20) NOT NULL,
  `D_B_SSN` bigint(20) NOT NULL,
  `D_B_NAME` varchar(100) NOT NULL,
  `PH_NO` bigint(20) NOT NULL,
  `E_MAIL` varchar(150) NOT NULL,
  `PASSWORD` varchar(150) NOT NULL,
  `AREA` varchar(150) NOT NULL,
  `SALARY` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_boy`
--

INSERT INTO `delivery_boy` (`D_B_ID`, `D_B_SSN`, `D_B_NAME`, `PH_NO`, `E_MAIL`, `PASSWORD`, `AREA`, `SALARY`) VALUES
(1, 11, 'Rakesh Mondal', 9874563212, 'rakesh@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '700103', 5000),
(2, 112, 'Arun Halder', 9874563213, 'arul@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '700103', 10000),
(3, 1234, 'Subhankar Maiti', 9874563218, 'subhankar@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '700152', 9000),
(4, 1111, 'Alok Nath', 7878986544, 'alok@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '700001', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `d_b_service`
--

CREATE TABLE `d_b_service` (
  `D_B_ID` bigint(20) NOT NULL,
  `PINCODE` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_b_service`
--

INSERT INTO `d_b_service` (`D_B_ID`, `PINCODE`) VALUES
(1, 700103),
(2, 700103),
(3, 700152),
(4, 700001);

-- --------------------------------------------------------

--
-- Table structure for table `food_delivery`
--

CREATE TABLE `food_delivery` (
  `ORDER_ID` bigint(20) NOT NULL,
  `D_B_ID` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_delivery`
--

INSERT INTO `food_delivery` (`ORDER_ID`, `D_B_ID`) VALUES
(1, 1),
(2, 3),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(9, 3),
(10, 3),
(13, 3),
(14, 3),
(15, 3),
(16, 3),
(17, 3),
(18, 3),
(19, 3),
(20, 4),
(21, 4),
(22, 4);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `PINCODE` mediumint(9) NOT NULL,
  `AREA` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`PINCODE`, `AREA`) VALUES
(700001, 'Dharmatala'),
(700084, 'Behala'),
(700103, 'Salt Lake'),
(700107, 'Ruby'),
(700152, 'garia');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `F_ID` bigint(20) NOT NULL,
  `F_DESC` varchar(100) NOT NULL,
  `FOOD_TYPE` varchar(50) NOT NULL,
  `R_ID` bigint(20) NOT NULL,
  `MIN_Q` mediumint(9) DEFAULT '1',
  `MAX_Q` bigint(20) DEFAULT NULL,
  `AVAILABILITY` varchar(50) NOT NULL,
  `PRICE` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`F_ID`, `F_DESC`, `FOOD_TYPE`, `R_ID`, `MIN_Q`, `MAX_Q`, `AVAILABILITY`, `PRICE`) VALUES
(1, 'Chicken Biryani(1 pc)', 'Indian', 1, 1, 10, '100', 100),
(2, 'Mutton Biryani (2pcs)', 'Indian', 1, 1, 10, '99', 130),
(3, 'Chicken Manchurian(4pcs)', 'Chinese', 2, 1, 6, '32', 120),
(4, 'Chicken kasa (4 pcs)', 'Indian', 1, 1, 10, '50', 90),
(5, 'Special Chicken Polao (2 pcs)', 'Indian', 1, 1, 5, '10', 150),
(6, 'Veg Fried Rice', 'Chinese', 1, 1, 10, '50', 80),
(7, 'Mixed Fried Rice(Chicken+Prawn)', 'Chinese', 1, 1, 10, '40', 160),
(8, 'Prawn Pakora(8pcs)', 'Indian', 1, 1, 5, '100', 80),
(9, 'Veg Sandwich(Pure Veg)', 'Italian', 1, 2, 5, '120', 35),
(10, 'Chicken Biryani', 'Indian', 3, 1, 10, '50', 80),
(11, 'Veg Pizza', 'Italian', 3, 1, 5, '20', 300),
(12, 'Veg Pizza', 'Italian', 2, 1, 10, '5', 250),
(13, 'Chicken Biryani(1 pcs)', 'Indian', 2, 1, 10, '40', 90),
(14, 'Chicken Burger', 'American', 4, 1, 10, '99', 70),
(15, 'Vetki Paturi', 'Indian', 1, 1, 5, '4', 200);

-- --------------------------------------------------------

--
-- Table structure for table `menu_order`
--

CREATE TABLE `menu_order` (
  `ORDER_ID` bigint(20) NOT NULL,
  `FOOD_ID` bigint(20) NOT NULL,
  `QUANTITY` bigint(20) NOT NULL,
  `STATUS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_order`
--

INSERT INTO `menu_order` (`ORDER_ID`, `FOOD_ID`, `QUANTITY`, `STATUS`) VALUES
(1, 1, 2, 'Picked Up'),
(1, 2, 1, 'Picked Up'),
(1, 7, 3, 'Picked Up'),
(2, 3, 2, 'Picked Up'),
(2, 12, 2, 'Picked Up'),
(3, 3, 1, 'Picked Up'),
(4, 3, 1, 'Picked Up'),
(4, 12, 1, 'Picked Up'),
(5, 3, 1, 'Picked Up'),
(6, 12, 1, 'Picked Up'),
(7, 3, 2, 'Not Picked'),
(7, 14, 1, 'Not Picked'),
(8, 3, 1, 'Picked Up'),
(9, 14, 1, 'Not Picked'),
(10, 3, 1, 'Picked Up'),
(10, 12, 1, 'Picked Up'),
(10, 14, 1, 'Picked Up'),
(11, 14, 1, 'Not Picked'),
(12, 14, 1, 'Not Picked'),
(13, 14, 1, 'Not Picked'),
(14, 14, 1, 'Not Picked'),
(15, 14, 1, 'Not Picked'),
(16, 3, 6, 'Picked Up'),
(16, 12, 10, 'Picked Up'),
(17, 3, 3, 'Picked Up'),
(18, 3, 1, 'Not Picked'),
(19, 3, 1, 'Not Picked'),
(20, 1, 8, 'Not Picked'),
(20, 2, 6, 'Not Picked'),
(21, 1, 3, 'Not Picked'),
(21, 5, 2, 'Not Picked'),
(21, 15, 2, 'Not Picked'),
(22, 2, 1, 'Picked Up'),
(22, 15, 1, 'Picked Up');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `ORDER_ID` bigint(20) NOT NULL,
  `PAYMENT_METHOD` varchar(100) NOT NULL,
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `TOTAL` bigint(20) NOT NULL,
  `PAYMENT_STATUS` varchar(50) NOT NULL,
  `DELIVERY_STATUS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`ORDER_ID`, `PAYMENT_METHOD`, `DATE`, `TOTAL`, `PAYMENT_STATUS`, `DELIVERY_STATUS`) VALUES
(1, 'cod', '2018-06-17 02:18:10', 1000, 'Paid', 'Delivered'),
(2, 'UPI', '2018-06-17 03:51:43', 740, 'Paid', 'Delivered'),
(3, 'UPI', '2018-07-01 02:09:58', 120, 'Paid', 'Delivered'),
(4, 'cod', '2018-07-01 02:10:00', 370, 'Paid', 'Delivered'),
(5, 'cod', '2018-07-01 02:10:02', 120, 'Paid', 'Delivered'),
(6, 'cod', '2018-07-01 02:10:04', 250, 'Paid', 'Delivered'),
(7, 'Paytm', '2018-07-01 02:10:17', 310, 'Paid', 'Delivered'),
(8, 'cod', '2018-07-01 02:10:06', 190, 'Paid', 'Delivered'),
(9, 'cod', '2018-07-01 02:10:19', 190, 'Paid', 'Delivered'),
(10, 'cod', '2018-07-01 02:10:08', 440, 'Paid', 'Delivered'),
(11, 'cod', '2018-06-20 05:39:06', 70, 'Not Paid', 'Not Delivered'),
(12, 'cod', '2018-06-20 05:45:54', 70, 'Not Paid', 'Not Delivered'),
(13, 'cod', '2018-07-01 02:10:20', 70, 'Paid', 'Delivered'),
(14, 'cod', '2018-07-01 02:10:22', 70, 'Paid', 'Delivered'),
(15, 'cod', '2018-07-01 02:10:24', 70, 'Paid', 'Delivered'),
(16, 'cod', '2018-07-01 02:10:09', 1600, 'Paid', 'Delivered'),
(17, 'cod', '2018-07-01 02:10:11', 360, 'Paid', 'Delivered'),
(18, 'cod', '2018-07-01 02:10:13', 120, 'Paid', 'Delivered'),
(19, 'cod', '2018-07-01 02:10:15', 120, 'Paid', 'Delivered'),
(20, 'cod', '2018-06-22 04:51:30', 1280, 'Not Paid', 'Not Delivered'),
(21, 'UPI', '2018-06-30 19:17:49', 1000, 'Paid', 'Not Delivered'),
(22, 'cod', '2018-07-01 02:05:40', 330, 'Paid', 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `R_ID` bigint(20) NOT NULL,
  `R_NAME` text NOT NULL,
  `R_TYPE` varchar(100) NOT NULL,
  `PACKAGE` varchar(50) NOT NULL DEFAULT 'STANDARD',
  `OWNER_SSN` bigint(20) NOT NULL,
  `E_MAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`R_ID`, `R_NAME`, `R_TYPE`, `PACKAGE`, `OWNER_SSN`, `E_MAIL`, `PASSWORD`) VALUES
(1, 'Arsalan', 'Indian', '5', 12345, 'arsalan@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(2, 'godfather', 'Indian Chinese', '4', 12346, 'god@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(3, 'DLF', 'CHINESE', '4', 123457, 'dlf@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(4, 'Clay Oven', 'Italian Chinese', '4', 12457, 'clay@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(5, 'Bypass Dhaba', 'Indian', '3', 78965, 'bypass@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(6, 'Jimmy\'s Restaurant', 'Chinese', '3', 789546, 'jimmy@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_order`
--

CREATE TABLE `restaurant_order` (
  `R_ID` bigint(20) NOT NULL,
  `ORDER_ID` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant_order`
--

INSERT INTO `restaurant_order` (`R_ID`, `ORDER_ID`) VALUES
(1, 1),
(1, 20),
(1, 21),
(1, 22),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 8),
(2, 10),
(2, 16),
(2, 17),
(2, 18),
(2, 19),
(4, 7),
(4, 9),
(4, 10),
(4, 11),
(4, 12),
(4, 13),
(4, 14),
(4, 15);

-- --------------------------------------------------------

--
-- Table structure for table `rrloc`
--

CREATE TABLE `rrloc` (
  `R_ID` bigint(20) NOT NULL,
  `R_LOC_ID` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rrloc`
--

INSERT INTO `rrloc` (`R_ID`, `R_LOC_ID`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `r_loc`
--

CREATE TABLE `r_loc` (
  `R_LOC_ID` bigint(20) NOT NULL,
  `PH_NO` bigint(20) NOT NULL,
  `BUILDING` varchar(100) NOT NULL,
  `FLOOR_NO` varchar(100) NOT NULL,
  `STREET_NO` varchar(100) NOT NULL,
  `LOCALITY` varchar(100) NOT NULL,
  `PINCODE` mediumint(9) NOT NULL,
  `CITY` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_loc`
--

INSERT INTO `r_loc` (`R_LOC_ID`, `PH_NO`, `BUILDING`, `FLOOR_NO`, `STREET_NO`, `LOCALITY`, `PINCODE`, `CITY`) VALUES
(1, 9876541123, '3', '2', '4', 'Dharmatala', 700001, 'Kolkata'),
(2, 9874563102, '2', '0', '1A', 'Garia', 700152, 'Koilkata'),
(3, 7894563210, '7', '4', '5', 'New Town', 700103, 'Kolkata'),
(4, 9754684123, '11A', '1', 'NSC Bose Road', 'NDP', 700152, 'Kolkata'),
(5, 9878787879, '1A', 'Ground', 'EM Bypass', 'Ruby', 700107, 'Kolkata'),
(6, 7897878998, 'AC', '2nd', 'Lenin Road', 'Dharmatala', 700001, 'Kolkata');

-- --------------------------------------------------------

--
-- Table structure for table `r_offer`
--

CREATE TABLE `r_offer` (
  `R_ID` bigint(20) NOT NULL,
  `PINCODE` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_offer`
--

INSERT INTO `r_offer` (`R_ID`, `PINCODE`) VALUES
(1, 700001),
(2, 700152),
(3, 700001),
(4, 700152),
(5, 700001),
(5, 700107),
(6, 700001);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `C_ID` int(11) NOT NULL,
  `ORDER_ID` int(11) NOT NULL,
  `FOOD_ID` int(11) NOT NULL,
  `R_ID` int(11) NOT NULL,
  `QUANTITY` int(11) NOT NULL,
  `SUB_TOTAL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `craddress`
--
ALTER TABLE `craddress`
  ADD PRIMARY KEY (`C_ID`,`ADDRESS_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`C_ID`),
  ADD UNIQUE KEY `PH_NO` (`PH_NO`),
  ADD UNIQUE KEY `LOGIN_TYPE` (`LOGIN_TYPE`);

--
-- Indexes for table `cust_order`
--
ALTER TABLE `cust_order`
  ADD PRIMARY KEY (`CUST_ID`,`ORDER_ID`),
  ADD KEY `ORDER_ID` (`ORDER_ID`);

--
-- Indexes for table `c_address`
--
ALTER TABLE `c_address`
  ADD PRIMARY KEY (`ADDRESS_ID`),
  ADD KEY `PINCODE` (`PINCODE`);

--
-- Indexes for table `delivery_boy`
--
ALTER TABLE `delivery_boy`
  ADD PRIMARY KEY (`D_B_ID`),
  ADD UNIQUE KEY `D_B_SSN` (`D_B_SSN`),
  ADD UNIQUE KEY `PH_NO` (`PH_NO`),
  ADD UNIQUE KEY `E_MAIL` (`E_MAIL`);

--
-- Indexes for table `d_b_service`
--
ALTER TABLE `d_b_service`
  ADD PRIMARY KEY (`D_B_ID`,`PINCODE`),
  ADD KEY `PINCODE` (`PINCODE`);

--
-- Indexes for table `food_delivery`
--
ALTER TABLE `food_delivery`
  ADD PRIMARY KEY (`ORDER_ID`,`D_B_ID`),
  ADD KEY `D_B_ID` (`D_B_ID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`PINCODE`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`F_ID`),
  ADD KEY `R_ID` (`R_ID`);

--
-- Indexes for table `menu_order`
--
ALTER TABLE `menu_order`
  ADD PRIMARY KEY (`ORDER_ID`,`FOOD_ID`),
  ADD KEY `FOOD_ID` (`FOOD_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`ORDER_ID`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`R_ID`),
  ADD UNIQUE KEY `R_ID` (`R_ID`),
  ADD UNIQUE KEY `OWNER_SSN` (`OWNER_SSN`),
  ADD UNIQUE KEY `E_MAIL` (`E_MAIL`);

--
-- Indexes for table `restaurant_order`
--
ALTER TABLE `restaurant_order`
  ADD PRIMARY KEY (`R_ID`,`ORDER_ID`),
  ADD KEY `ORDER_ID` (`ORDER_ID`);

--
-- Indexes for table `rrloc`
--
ALTER TABLE `rrloc`
  ADD PRIMARY KEY (`R_ID`,`R_LOC_ID`),
  ADD KEY `R_LOC_ID` (`R_LOC_ID`);

--
-- Indexes for table `r_loc`
--
ALTER TABLE `r_loc`
  ADD PRIMARY KEY (`R_LOC_ID`),
  ADD UNIQUE KEY `PH_NO` (`PH_NO`),
  ADD KEY `PINCODE` (`PINCODE`);

--
-- Indexes for table `r_offer`
--
ALTER TABLE `r_offer`
  ADD PRIMARY KEY (`R_ID`,`PINCODE`),
  ADD KEY `PINCODE` (`PINCODE`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `C_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `delivery_boy`
--
ALTER TABLE `delivery_boy`
  MODIFY `D_B_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `F_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `ORDER_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `R_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `r_loc`
--
ALTER TABLE `r_loc`
  MODIFY `R_LOC_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cust_order`
--
ALTER TABLE `cust_order`
  ADD CONSTRAINT `cust_order_ibfk_1` FOREIGN KEY (`CUST_ID`) REFERENCES `customer` (`C_ID`),
  ADD CONSTRAINT `cust_order_ibfk_2` FOREIGN KEY (`ORDER_ID`) REFERENCES `payment` (`ORDER_ID`);

--
-- Constraints for table `c_address`
--
ALTER TABLE `c_address`
  ADD CONSTRAINT `c_address_ibfk_1` FOREIGN KEY (`PINCODE`) REFERENCES `location` (`PINCODE`);

--
-- Constraints for table `d_b_service`
--
ALTER TABLE `d_b_service`
  ADD CONSTRAINT `d_b_service_ibfk_1` FOREIGN KEY (`D_B_ID`) REFERENCES `delivery_boy` (`D_B_ID`),
  ADD CONSTRAINT `d_b_service_ibfk_2` FOREIGN KEY (`PINCODE`) REFERENCES `location` (`PINCODE`);

--
-- Constraints for table `food_delivery`
--
ALTER TABLE `food_delivery`
  ADD CONSTRAINT `food_delivery_ibfk_1` FOREIGN KEY (`D_B_ID`) REFERENCES `delivery_boy` (`D_B_ID`),
  ADD CONSTRAINT `food_delivery_ibfk_2` FOREIGN KEY (`ORDER_ID`) REFERENCES `payment` (`ORDER_ID`);

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`R_ID`) REFERENCES `restaurant` (`R_ID`);

--
-- Constraints for table `menu_order`
--
ALTER TABLE `menu_order`
  ADD CONSTRAINT `menu_order_ibfk_1` FOREIGN KEY (`FOOD_ID`) REFERENCES `menu` (`F_ID`),
  ADD CONSTRAINT `menu_order_ibfk_2` FOREIGN KEY (`ORDER_ID`) REFERENCES `payment` (`ORDER_ID`);

--
-- Constraints for table `restaurant_order`
--
ALTER TABLE `restaurant_order`
  ADD CONSTRAINT `restaurant_order_ibfk_1` FOREIGN KEY (`ORDER_ID`) REFERENCES `payment` (`ORDER_ID`),
  ADD CONSTRAINT `restaurant_order_ibfk_2` FOREIGN KEY (`R_ID`) REFERENCES `restaurant` (`R_ID`);

--
-- Constraints for table `rrloc`
--
ALTER TABLE `rrloc`
  ADD CONSTRAINT `rrloc_ibfk_1` FOREIGN KEY (`R_ID`) REFERENCES `restaurant` (`R_ID`),
  ADD CONSTRAINT `rrloc_ibfk_2` FOREIGN KEY (`R_LOC_ID`) REFERENCES `r_loc` (`R_LOC_ID`);

--
-- Constraints for table `r_loc`
--
ALTER TABLE `r_loc`
  ADD CONSTRAINT `r_loc_ibfk_1` FOREIGN KEY (`PINCODE`) REFERENCES `location` (`PINCODE`);

--
-- Constraints for table `r_offer`
--
ALTER TABLE `r_offer`
  ADD CONSTRAINT `r_offer_ibfk_1` FOREIGN KEY (`PINCODE`) REFERENCES `location` (`PINCODE`),
  ADD CONSTRAINT `r_offer_ibfk_2` FOREIGN KEY (`R_ID`) REFERENCES `restaurant` (`R_ID`),
  ADD CONSTRAINT `r_offer_ibfk_3` FOREIGN KEY (`R_ID`) REFERENCES `restaurant` (`R_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
