-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2024 at 01:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrentalsystem426`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bookingid` int(11) NOT NULL,
  `bookingdate` date DEFAULT NULL,
  `customerid` int(11) DEFAULT NULL,
  `carid` int(11) DEFAULT NULL,
  `driverid` int(11) DEFAULT NULL,
  `bookingstart` date DEFAULT NULL,
  `bookingend` date DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `advance` decimal(10,2) DEFAULT NULL,
  `note` varchar(512) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bookingid`, `bookingdate`, `customerid`, `carid`, `driverid`, `bookingstart`, `bookingend`, `price`, `advance`, `note`, `status`) VALUES
(1, '2024-04-16', 3, 2, 1, '2024-04-20', '2024-04-22', '12500.00', '6500.00', 'Dummy Text', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `carid` int(11) NOT NULL,
  `carnumber` varchar(20) DEFAULT NULL,
  `brand` varchar(20) DEFAULT NULL,
  `model` varchar(20) DEFAULT NULL,
  `fuel` varchar(20) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `seating` tinyint(4) DEFAULT NULL,
  `average` decimal(10,2) DEFAULT NULL,
  `ac` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`carid`, `carnumber`, `brand`, `model`, `fuel`, `color`, `seating`, `average`, `ac`, `type`) VALUES
(1, 'GJ 03 AB 1122', 'Toyota', 'Innove', 'Diesel', 'white', 8, '11.50', 'Yes', 'Passenger'),
(2, 'GJ 03 AE 1234', 'Maruti', 'Ertica', 'CNG', 'white', 10, '16.00', 'Yes', 'Private'),
(3, 'GJ 03 AB 1102', 'Toyota', 'Corrola', 'Pterol', 'Black', 5, '17.50', 'Yes', 'Passenger'),
(4, 'GJ 03 AE 5234', 'Maruti', 'Ecco', 'CNG', 'white', 10, '16.00', 'No', 'Private');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerid` int(11) NOT NULL,
  `customername` varchar(20) DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `whatsapp` varchar(15) DEFAULT NULL,
  `adahrcard` varchar(20) DEFAULT NULL,
  `licance` varchar(20) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerid`, `customername`, `dateofbirth`, `gender`, `address`, `phone`, `email`, `whatsapp`, `adahrcard`, `licance`, `status`) VALUES
(1, 'Priyajitsinh jadeja', '2091-04-16', 'Male', 'Rajkot', '998899889900', 'jadeja@gmail.com', '9988998878', '112233112233', '890890890', 1),
(2, 'adarsh chavda', '2004-04-09', 'male', 'rajkot', '45378890985', 'adarsh@gmai.com', '88998889898', '8797987987987', '577657567', 1),
(3, 'Hensi Lambiya', '2001-04-16', 'Female', 'Rajkot', '991199889900', 'hensi@gmail.com', '91188998878', '00033112233', '81190890890', 1),
(4, 'Hemal Varu', '2004-04-09', 'Female', 'rajkot', '11378890985', 'hemal@gmai.com', '99998889898', '6787987987', '57765756733', 1);

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `driverid` int(11) NOT NULL,
  `drivername` varchar(20) DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `whatsapp` varchar(15) DEFAULT NULL,
  `adahrcard` varchar(20) DEFAULT NULL,
  `licance` varchar(20) DEFAULT NULL,
  `licancetype` varchar(20) DEFAULT NULL,
  `licanceexpiry` date DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`driverid`, `drivername`, `dateofbirth`, `gender`, `address`, `phone`, `email`, `whatsapp`, `adahrcard`, `licance`, `licancetype`, `licanceexpiry`, `status`) VALUES
(1, 'Dhruvisha Dave', '2002-04-16', 'female', 'Rajkot', '9988776655', 'dhruvisha@gmail.com', '8899889988', '9876543212', '990990990', 'Heavy', '2034-04-16', 1),
(2, 'Aryan Thakrar', '2007-04-16', 'Male', 'Rajkot', '9900990099', 'aryan@gmail.com', '9988999900', '9988999999', '990000099977', 'Heavy', '2044-04-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fueling`
--

CREATE TABLE `fueling` (
  `fuelid` int(11) NOT NULL,
  `fueldate` date DEFAULT NULL,
  `carid` int(11) DEFAULT NULL,
  `driverid` int(11) DEFAULT NULL,
  `fueltype` varchar(20) DEFAULT NULL,
  `quantity` decimal(10,2) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `insuranceid` int(11) NOT NULL,
  `carid` int(11) DEFAULT NULL,
  `insurancedate` date DEFAULT NULL,
  `provider` varchar(512) DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `type` varchar(128) DEFAULT NULL,
  `premium` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `repairing`
--

CREATE TABLE `repairing` (
  `repairid` int(11) NOT NULL,
  `carid` int(11) DEFAULT NULL,
  `driverid` int(11) DEFAULT NULL,
  `repairdate` date DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `vendor` varchar(512) DEFAULT NULL,
  `repairdescription` varchar(1024) DEFAULT NULL,
  `cost` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `reviewid` int(11) NOT NULL,
  `customerid` int(11) DEFAULT NULL,
  `bookingid` int(11) DEFAULT NULL,
  `reviewon` timestamp NOT NULL DEFAULT current_timestamp(),
  `reviewmessage` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bookingid`),
  ADD KEY `fk_customer_booking` (`customerid`),
  ADD KEY `fk_carid_bookings` (`carid`),
  ADD KEY `fk_driver_booking` (`driverid`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`carid`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`driverid`);

--
-- Indexes for table `fueling`
--
ALTER TABLE `fueling`
  ADD PRIMARY KEY (`fuelid`),
  ADD KEY `fk_car_fueling` (`carid`),
  ADD KEY `fk_driver_fueling` (`driverid`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`insuranceid`),
  ADD KEY `fk_car_insurnce` (`carid`);

--
-- Indexes for table `repairing`
--
ALTER TABLE `repairing`
  ADD PRIMARY KEY (`repairid`),
  ADD KEY `fk_car_repair` (`carid`),
  ADD KEY `fk_driver_repair` (`driverid`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewid`),
  ADD KEY `fk_customer_review` (`customerid`),
  ADD KEY `fk_booking_review` (`bookingid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `carid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `driverid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fueling`
--
ALTER TABLE `fueling`
  MODIFY `fuelid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `insuranceid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `repairing`
--
ALTER TABLE `repairing`
  MODIFY `repairid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `fk_carid_bookings` FOREIGN KEY (`carid`) REFERENCES `cars` (`carid`),
  ADD CONSTRAINT `fk_customer_booking` FOREIGN KEY (`customerid`) REFERENCES `customers` (`customerid`),
  ADD CONSTRAINT `fk_driver_booking` FOREIGN KEY (`driverid`) REFERENCES `drivers` (`driverid`);

--
-- Constraints for table `fueling`
--
ALTER TABLE `fueling`
  ADD CONSTRAINT `fk_car_fueling` FOREIGN KEY (`carid`) REFERENCES `cars` (`carid`),
  ADD CONSTRAINT `fk_driver_fueling` FOREIGN KEY (`driverid`) REFERENCES `drivers` (`driverid`);

--
-- Constraints for table `insurance`
--
ALTER TABLE `insurance`
  ADD CONSTRAINT `fk_car_insurnce` FOREIGN KEY (`carid`) REFERENCES `cars` (`carid`);

--
-- Constraints for table `repairing`
--
ALTER TABLE `repairing`
  ADD CONSTRAINT `fk_car_repair` FOREIGN KEY (`carid`) REFERENCES `cars` (`carid`),
  ADD CONSTRAINT `fk_driver_repair` FOREIGN KEY (`driverid`) REFERENCES `drivers` (`driverid`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk_booking_review` FOREIGN KEY (`bookingid`) REFERENCES `bookings` (`bookingid`),
  ADD CONSTRAINT `fk_customer_review` FOREIGN KEY (`customerid`) REFERENCES `customers` (`customerid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
