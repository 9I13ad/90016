-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 16, 2023 at 02:40 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aid`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`id`, `name`, `password`) VALUES
(1, '123@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `AidCategory`
--

CREATE TABLE `AidCategory` (
  `ID` int NOT NULL,
  `CategoryName` varchar(255) DEFAULT NULL,
  `InventoryStatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `AidItem`
--

CREATE TABLE `AidItem` (
  `ID` int NOT NULL,
  `ItemName` varchar(255) DEFAULT NULL,
  `CategoryID` int DEFAULT NULL,
  `Quantity` int DEFAULT NULL,
  `ExpiryDate` date DEFAULT NULL,
  `Ingredients` varchar(255) DEFAULT NULL,
  `AllergenInfo` varchar(255) DEFAULT NULL,
  `ManufacturerBrand` varchar(255) DEFAULT NULL,
  `ClothingSize` varchar(255) DEFAULT NULL,
  `AidKitID` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `AidKit`
--

CREATE TABLE `AidKit` (
  `ID` int NOT NULL,
  `KitName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `AidRequisition`
--

CREATE TABLE `AidRequisition` (
  `ID` int NOT NULL,
  `RecipientID` int DEFAULT NULL,
  `AidKitID` int DEFAULT NULL,
  `AidItemID` int DEFAULT NULL,
  `RequestedQuantity` int DEFAULT NULL,
  `Notes` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Child`
--

CREATE TABLE `Child` (
  `ID` int NOT NULL,
  `RecipientID` int DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Age` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Child`
--

INSERT INTO `Child` (`ID`, `RecipientID`, `Name`, `Age`) VALUES
(1, 3, 'ka', 12);

-- --------------------------------------------------------

--
-- Table structure for table `Donation`
--

CREATE TABLE `Donation` (
  `ID` int NOT NULL,
  `DonorID` int DEFAULT NULL,
  `AidItemID` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Donor`
--

CREATE TABLE `Donor` (
  `ID` int NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Age` int DEFAULT NULL,
  `MailingAddress` varchar(255) DEFAULT NULL,
  `PhoneNumber` varchar(20) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `PreferredModeOfCommunication` varchar(255) DEFAULT NULL,
  `Nationality` varchar(255) DEFAULT NULL,
  `ABN` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `DonorIdentityDocument`
--

CREATE TABLE `DonorIdentityDocument` (
  `ID` int NOT NULL,
  `DonorID` int DEFAULT NULL,
  `DocumentType` varchar(255) DEFAULT NULL,
  `DocumentNumber` varchar(255) DEFAULT NULL,
  `ExpiryDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Partner`
--

CREATE TABLE `Partner` (
  `ID` int NOT NULL,
  `RecipientID` int DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Age` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Recipient`
--

CREATE TABLE `Recipient` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `Age` int NOT NULL,
  `PreviousAddress` varchar(256) NOT NULL,
  `TotalFamilyMembers` int NOT NULL,
  `Nationality` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Recipient`
--

INSERT INTO `Recipient` (`id`, `name`, `Age`, `PreviousAddress`, `TotalFamilyMembers`, `Nationality`) VALUES
(3, 'Yujie Hu', 12, 'fswqf', 12, 'china'),
(4, 'adsioa', 14, 'efomks', 12, 'cANASD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `AidCategory`
--
ALTER TABLE `AidCategory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `AidItem`
--
ALTER TABLE `AidItem`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CategoryID` (`CategoryID`),
  ADD KEY `AidKitID` (`AidKitID`);

--
-- Indexes for table `AidKit`
--
ALTER TABLE `AidKit`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `AidRequisition`
--
ALTER TABLE `AidRequisition`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `RecipientID` (`RecipientID`),
  ADD KEY `AidKitID` (`AidKitID`),
  ADD KEY `AidItemID` (`AidItemID`);

--
-- Indexes for table `Child`
--
ALTER TABLE `Child`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `RecipientID` (`RecipientID`);

--
-- Indexes for table `Donation`
--
ALTER TABLE `Donation`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `DonorID` (`DonorID`),
  ADD KEY `AidItemID` (`AidItemID`);

--
-- Indexes for table `Donor`
--
ALTER TABLE `Donor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `DonorIdentityDocument`
--
ALTER TABLE `DonorIdentityDocument`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `DonorID` (`DonorID`);

--
-- Indexes for table `Partner`
--
ALTER TABLE `Partner`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `RecipientID` (`RecipientID`);

--
-- Indexes for table `Recipient`
--
ALTER TABLE `Recipient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Child`
--
ALTER TABLE `Child`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Recipient`
--
ALTER TABLE `Recipient`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `AidItem`
--
ALTER TABLE `AidItem`
  ADD CONSTRAINT `aiditem_ibfk_1` FOREIGN KEY (`CategoryID`) REFERENCES `AidCategory` (`ID`),
  ADD CONSTRAINT `aiditem_ibfk_2` FOREIGN KEY (`AidKitID`) REFERENCES `AidKit` (`ID`);

--
-- Constraints for table `AidRequisition`
--
ALTER TABLE `AidRequisition`
  ADD CONSTRAINT `aidrequisition_ibfk_1` FOREIGN KEY (`RecipientID`) REFERENCES `Recipient` (`id`),
  ADD CONSTRAINT `aidrequisition_ibfk_2` FOREIGN KEY (`AidKitID`) REFERENCES `AidKit` (`ID`),
  ADD CONSTRAINT `aidrequisition_ibfk_3` FOREIGN KEY (`AidItemID`) REFERENCES `AidItem` (`ID`);

--
-- Constraints for table `Child`
--
ALTER TABLE `Child`
  ADD CONSTRAINT `child_ibfk_1` FOREIGN KEY (`RecipientID`) REFERENCES `Recipient` (`id`);

--
-- Constraints for table `Donation`
--
ALTER TABLE `Donation`
  ADD CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`DonorID`) REFERENCES `Donor` (`ID`),
  ADD CONSTRAINT `donation_ibfk_2` FOREIGN KEY (`AidItemID`) REFERENCES `AidItem` (`ID`);

--
-- Constraints for table `DonorIdentityDocument`
--
ALTER TABLE `DonorIdentityDocument`
  ADD CONSTRAINT `donoridentitydocument_ibfk_1` FOREIGN KEY (`DonorID`) REFERENCES `Donor` (`ID`);

--
-- Constraints for table `Partner`
--
ALTER TABLE `Partner`
  ADD CONSTRAINT `partner_ibfk_1` FOREIGN KEY (`RecipientID`) REFERENCES `Recipient` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
