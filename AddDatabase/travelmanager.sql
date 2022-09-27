-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 04:58 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelmanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `Flight_Id` varchar(100) NOT NULL,
  `DateFrom` date NOT NULL,
  `DestinationFrom` char(20) NOT NULL,
  `DateBack` date NOT NULL,
  `DestinationTo` char(20) NOT NULL,
  `Price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`Flight_Id`, `DateFrom`, `DestinationFrom`, `DateBack`, `DestinationTo`, `Price`) VALUES
('9000', '2019-05-19', 'Budapest', '2019-05-30', 'Fülöp Szigetek', 2500),
('9001', '2019-04-20', 'Marosvásárhely', '2019-04-30', 'Oslo', 1500),
('9002', '2019-05-29', 'Marosvásárhely', '2019-06-02', 'Isztambul', 2000),
('9003', '2019-10-10', 'Amsterdam', '2019-10-15', 'Hawaii', 2200),
('9004', '2019-05-10', 'Párizs', '2019-05-15', 'Barcelona', 1800),
('9005', '2019-11-23', 'Estevan', '2019-11-26', 'New Bern', 2200),
('9006', '2019-12-10', 'Newlyn', '2019-12-15', 'Berlin', 2500),
('9008', '2019-12-20', 'Johnstown', '2019-12-28', 'Bolton', 1500),
('9009', '2019-11-24', 'Morganton', '2019-11-30', 'Palokivalo', 2000),
('9010', '2019-12-19', 'Beresowka', '2019-12-27', 'Tingeting', 1700),
('9011', '2019-12-30', 'Galagaoui', '2020-01-03', 'Karangsalam', 3000),
('9012', '2019-11-28', 'Rowosari', '2019-12-06', 'Elbing', 1900),
('9013', '2020-01-15', 'East Peru', '2019-12-24', 'Locarno', 2000),
('9014', '2019-12-26', 'Los Angeles', '2020-01-02', 'Valencia', 2400),
('9015', '2019-12-28', 'Cork', '2020-01-06', 'Florida', 3000),
('9016', '2020-01-04', 'Granada', '2020-01-08', 'California', 2200),
('9017', '2020-01-02', 'Texas', '2020-01-09', 'Seville', 2550),
('9018', '2020-01-02', 'Bilbao', '2020-01-15', 'Colorado', 3000),
('9019', '2020-01-05', 'Kansas', '2020-01-09', 'Las Vegas', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `Id` int(4) NOT NULL,
  `Hotel_Name` varchar(100) NOT NULL,
  `RoomType` char(10) NOT NULL,
  `Extras` char(20) NOT NULL,
  `Price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`Id`, `Hotel_Name`, `RoomType`, `Extras`, `Price`) VALUES
(2010, 'Hotel Azur', ' Four beds', 'All Inclusive', 560),
(2011, 'Hotel Miamor', 'Ten beds', 'Dinner', 450),
(2012, 'Hotel Business', 'One bed', 'Pool', 2000),
(2013, 'Hotel Kekeg', 'Three beds', 'All Inclusive', 2050),
(2014, 'Hotel Gogggle', 'Double bed', 'Nothing', 200),
(2015, 'Hotel Gmogye', 'Five beds', 'Free parking', 75),
(2016, 'Hotel Kiliti', 'Seven beds', 'Lunch', 1596),
(2018, 'Hotel Atlantis', 'Six beds', 'Wifi', 1478),
(2019, 'Hotel Mogyoróvár', 'Eight beds', 'Casino', 1563),
(2020, 'Hotel Elvira', 'Nine beds', 'Game room', 7000);

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `Pay_Id` int(4) NOT NULL,
  `BankAccountNumber` varchar(28) NOT NULL,
  `Cash` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Id` int(4) NOT NULL,
  `Regis_Name` char(20) NOT NULL,
  `Telnumber` int(13) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Id`, `Regis_Name`, `Telnumber`, `Address`, `Email`, `Password`) VALUES
(3, 'John', 4789562, 'mereu 32', 'john22@yahoo.com', 'qwert'),
(4, 'Zolyomi Hunor', 123456789, 'Zala 13', 'zolyomihuni@yahoo.co', '123456'),
(5, 'Kiss Tunde Timea', 748662381, 'Marosvasarhely', 'timiki3ss@gmail.com', 'gagyi2'),
(6, 'Mandarin', 74859612, 'fafa', 'mandarin@yahoo.com', '123456'),
(7, 'Nagy Zoltan', 174258566, 'Dalailama', 'zolizoli@yahoo.com', '123456'),
(8, 'Liszt Ferenc', 0, '', 'ferike@gmail.com', 'feriliszt');

-- --------------------------------------------------------

--
-- Table structure for table `rentacar`
--

CREATE TABLE `rentacar` (
  `Id` int(4) NOT NULL,
  `Car_Information` varchar(100) NOT NULL,
  `Rent_Date` date NOT NULL,
  `Rent_Date_Back` date NOT NULL,
  `Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rentacar`
--

INSERT INTO `rentacar` (`Id`, `Car_Information`, `Rent_Date`, `Rent_Date_Back`, `Price`) VALUES
(5020, 'Jeep', '2019-05-20', '2019-05-30', 800),
(5021, 'Lada', '2019-05-20', '2019-05-30', 1200),
(5022, 'Volkswagen', '2019-05-20', '2019-05-30', 300),
(5023, 'BMW', '2019-05-20', '2019-05-30', 600),
(5024, 'Dacia', '2019-05-20', '2019-05-30', 980),
(5025, 'Sharom', '2019-12-19', '2019-12-24', 600),
(5026, 'Toyota', '2019-12-21', '2019-12-30', 2900),
(5027, 'Volvo', '2019-04-06', '2019-04-12', 6000),
(5028, 'Ferrari', '2019-06-12', '2019-06-18', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `Id` int(4) NOT NULL,
  `Reservation_Date` date NOT NULL,
  `Trip_Name` varchar(100) NOT NULL,
  `Regis_Name` char(20) NOT NULL,
  `NumberOfPersons` int(2) NOT NULL,
  `Hotel_Name` varchar(100) DEFAULT NULL,
  `Flight_Id` varchar(100) DEFAULT NULL,
  `Car_Information` varchar(100) DEFAULT NULL,
  `Pay_Id` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Id`, `Reservation_Date`, `Trip_Name`, `Regis_Name`, `NumberOfPersons`, `Hotel_Name`, `Flight_Id`, `Car_Information`, `Pay_Id`) VALUES
(1, '2019-11-05', '1056', 'Kola', 3, '2019', '9000', '5028', 3012),
(2, '2019-11-10', '1053', 'Kicsi Kutya', 2, '2019', '9000', '5027', 3011),
(3, '2019-06-17', '1050', 'John', 2, '2013', '9016', '5027', 3011),
(4, '2019-04-03', 'Cycling in the city ', 'Kiss Tunde Timea', 4, 'Hotel Gogggle | Doub', '0', 'Car type: Jeep | Available from: 2019-05-20 to: 2019-05-30 | Price: 800€', 5602),
(5, '2019-07-09', 'Please select your t', 'mandarin', 1, 'Hotel Gmogye | Five ', '0', 'Please select your car.', 1235),
(6, '2019-12-17', 'Museum Visit | Price', 'Nagy Zoltan', 10, 'Hotel Kekeg | Three ', '0', 'Car type: Sharom | Available from: 2019-12-19 to: 2019-12-24 | Price: 600€', 2500),
(7, '2019-12-09', 'Please select your t', 'Liszt Ferenc', 1, 'Hotel Gogggle | Doub', '0', 'Car type: Toyota | Available from: 2019-12-21 to: 2019-12-30 | Price: 2900€', 1234),
(8, '2019-12-09', 'City ​​breaks | Pric', 'Liszt Ferenc', 1, 'Please select your h', '0', 'Please select your car.', 50),
(9, '2019-12-13', 'Museum Visit | Price: 35€', 'Liszt Ferenc', 2, 'Hotel Kekeg | Three beds room | Extras: All Inclusive | Price: 2050€', 'Rowosari » Elbing | From: 2019-11-28 To: 2019-12-06 | Price: 1900€', 'Car type: Volkswagen | Available from: 2019-05-20 to: 2019-05-30 | Price: 300€', 1020),
(10, '2019-12-28', 'Please select your trip.', 'Liszt Ferenc', 6, 'Please select your hotel.', 'Please select your flight.', 'Please select your car.', 1010);

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `Id` int(4) NOT NULL,
  `Price` int(6) NOT NULL,
  `Trip_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`Id`, `Price`, `Trip_Name`) VALUES
(1050, 100, 'Cruise'),
(1051, 10, ' Cycling in the city'),
(1052, 50, 'City ​​breaks'),
(1053, 200, ' Windsurfing'),
(1054, 35, ' Museum Visit'),
(1055, 15, 'Outdoor occupation'),
(1056, 19, ' Kayaking');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`Flight_Id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`Pay_Id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `rentacar`
--
ALTER TABLE `rentacar`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `foglalas_fk1` (`Hotel_Name`),
  ADD KEY `foglalas_fk2` (`Car_Information`),
  ADD KEY `foglalas_fk3` (`Regis_Name`),
  ADD KEY `foglalas_fk4` (`Trip_Name`),
  ADD KEY `foglalas_fk5` (`Flight_Id`),
  ADD KEY `foglalas_fk6` (`Pay_Id`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `Pay_Id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
