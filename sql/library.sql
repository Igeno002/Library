-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 11:01 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `AdminEmail` varchar(120) DEFAULT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `FullName`, `AdminEmail`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'Anuj Kumar', 'admin@gmail.com', 'admin', 'f925916e2754e5e03f75dd58a5733251', '2024-01-20 06:03:56'),
(8, 'UWISEZERANO Liliane', 'lili@gmail.com', 'liliane', '81dc9bdb52d04dc20036dbd8313ed055', '2024-05-02 22:00:00'),
(9, 'jmv ww', 'assitant@gmail.com', 'assitant', '25f9e794323b453885f5181f1b624d0b', '2024-05-15 12:49:11');

-- --------------------------------------------------------

--
-- Table structure for table `tblauthors`
--

CREATE TABLE `tblauthors` (
  `id` int(11) NOT NULL,
  `AuthorName` varchar(159) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblauthors`
--

INSERT INTO `tblauthors` (`id`, `AuthorName`, `creationDate`, `UpdationDate`) VALUES
(17, 'Dennis Ritchie ', '2024-05-10 15:50:03', '2024-05-13 17:36:11'),
(19, 'Bjarne Stroustrup', '2024-05-10 16:51:12', NULL),
(20, 'Charles Babbage', '2024-05-10 16:51:47', NULL),
(21, 'Brendan Eich', '2024-05-10 16:52:59', NULL),
(22, 'Linus Torvalds', '2024-05-10 16:54:15', NULL),
(23, 'Ken Blanchard', '2024-05-11 07:51:21', NULL),
(24, 'Igeno Isaac', '2024-05-11 07:51:50', NULL),
(25, 'jmv', '2024-05-15 12:37:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblbooks`
--

CREATE TABLE `tblbooks` (
  `id` int(11) NOT NULL,
  `BookName` varchar(255) DEFAULT NULL,
  `CatId` int(11) DEFAULT NULL,
  `AuthorId` int(11) DEFAULT NULL,
  `ISBNNumber` varchar(25) DEFAULT NULL,
  `BookPrice` decimal(10,2) DEFAULT NULL,
  `bookImage` varchar(250) NOT NULL,
  `isIssued` int(1) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `BookFile` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblbooks`
--

INSERT INTO `tblbooks` (`id`, `BookName`, `CatId`, `AuthorId`, `ISBNNumber`, `BookPrice`, `bookImage`, `isIssued`, `RegDate`, `UpdationDate`, `BookFile`) VALUES
(21, 'PHP FOR ADVANCED LEVEL', 10, 17, '1235665634', 10.00, '1efecc0ca822e40b7b673c0d79ae943f.jpg1715356357.jpg', 0, '2024-05-10 15:52:37', '2024-05-12 19:33:56', 'php_cookbook.pdf'),
(22, 'ADVANCED C++ PROGRAMMING', 10, 17, '2323483091', 45.00, '175ae520d02b1f0cba43c4e2983ed4fe.jpg1715413320.jpg', 1, '2024-05-11 07:42:00', '2024-05-15 13:22:39', 'C++.pdf'),
(23, 'WORD PRESS MISTRY GUIDE', 10, 19, '2904830923', 43.00, '44f82c8d0e06733d308c4401854becd6.jpg1715413403.jpg', NULL, '2024-05-11 07:43:23', NULL, 'Physics Learners book S2.pdf'),
(24, 'Digital Implant Planning and Guided Implant Surgery', 13, 24, '834920', 87.00, 'images.jpg1715414184.jpg', 0, '2024-05-11 07:56:24', '2024-05-15 13:06:35', 'mysql-tutorial-excerpt-5.7-en.pdf'),
(25, 'test book', 16, 25, '24516770987672', 34.00, '144ab706ba1cb9f6c23fd6ae9c0502b3.jpg1715776757.jpg', NULL, '2024-05-15 12:39:17', NULL, 'C++.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` int(11) NOT NULL,
  `CategoryName` varchar(150) DEFAULT NULL,
  `Status` int(1) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`id`, `CategoryName`, `Status`, `CreationDate`, `UpdationDate`) VALUES
(10, 'SCIENCE AND TECHNOLOGY', 0, '2024-05-10 15:48:43', '2024-05-15 12:36:30'),
(12, 'Business and Economics', 1, '2024-05-11 07:48:36', '0000-00-00 00:00:00'),
(13, 'Medicine and Health Sciences', 1, '2024-05-11 07:49:08', '0000-00-00 00:00:00'),
(14, 'Education', 1, '2024-05-11 07:49:50', '0000-00-00 00:00:00'),
(15, 'Agriculture ,Animal sciences and Veterinary Medicine', 1, '2024-05-11 07:50:12', '0000-00-00 00:00:00'),
(16, 'cbi', 1, '2024-05-15 12:36:53', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblissuedbookdetails`
--

CREATE TABLE `tblissuedbookdetails` (
  `id` int(11) NOT NULL,
  `BookId` int(11) DEFAULT NULL,
  `StudentID` varchar(150) DEFAULT NULL,
  `IssuesDate` timestamp NULL DEFAULT current_timestamp(),
  `ReturnDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `RetrunStatus` int(1) DEFAULT NULL,
  `fine` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblissuedbookdetails`
--

INSERT INTO `tblissuedbookdetails` (`id`, `BookId`, `StudentID`, `IssuesDate`, `ReturnDate`, `RetrunStatus`, `fine`) VALUES
(18, 21, 'SID009', '2024-05-12 19:32:56', '2024-05-12 19:33:56', 1, 0),
(19, 22, 'SID014', '2024-05-15 12:42:01', '2024-05-15 12:43:29', 1, 2),
(20, 24, 'SID014', '2024-05-15 13:05:25', '2024-05-15 13:06:35', 1, 5),
(21, 22, 'SID017', '2024-05-15 13:22:39', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `id` int(11) NOT NULL,
  `StudentId` varchar(100) DEFAULT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `MobileNumber` char(11) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `Status` int(1) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`id`, `StudentId`, `FullName`, `EmailId`, `MobileNumber`, `Password`, `Status`, `RegDate`, `UpdationDate`) VALUES
(1, 'SID002', 'Anuj kumar', 'anujk@gmail.com', '9865472555', 'f925916e2754e5e03f75dd58a5733251', 1, '2024-01-31 07:23:03', '2024-05-15 12:46:19'),
(4, 'SID005', 'sdfsd', 'csfsd@dfsfks.com', '8569710025', '92228410fc8b872914e023160cf4ae8f', 1, '2024-01-31 07:23:03', '2024-05-13 14:28:26'),
(8, 'SID009', 'SHEMA YVAN Braize', 'test@gmail.com', '2359874527', 'f925916e2754e5e03f75dd58a5733251', 1, '2024-01-31 07:23:03', '2024-05-13 15:39:45'),
(9, 'SID010', 'Amit', 'amit@gmail.com', '8585856224', 'f925916e2754e5e03f75dd58a5733251', 1, '2024-01-31 07:23:03', '2024-02-04 06:32:42'),
(10, 'SID011', 'Sarita Pandey', 'sarita@gmail.com', '4672423754', 'f925916e2754e5e03f75dd58a5733251', 1, '2024-01-31 07:23:03', '2024-02-04 06:32:42'),
(11, 'SID012', 'John Doe', 'john@test.com', '1234569870', 'f925916e2754e5e03f75dd58a5733251', 0, '2024-01-31 07:23:03', '2024-05-13 17:35:01'),
(12, 'SID014', 'ITANGISHAKA IGENO Isaac', 'itangiishakaigen@gmail.com', '0784095820', '202cb962ac59075b964b07152d234b70', 1, '2024-05-01 08:00:49', '2024-05-13 17:35:06'),
(13, 'SID015', 'ITANGISHAKA IGENO ISAAC', 'igeno2@gmail.com', '0784095820', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2024-05-04 08:07:12', NULL),
(14, 'SID016', 'valens nizeyimana', 'nizeyimana@gmail.com', '0784090582', 'e10adc3949ba59abbe56e057f20f883e', 1, '2024-05-15 13:13:11', NULL),
(15, 'SID017', 'valens', 'niz@gmail.com', '0784097820', 'fcea920f7412b5da7be0cf42b8c93759', 1, '2024-05-15 13:14:23', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblauthors`
--
ALTER TABLE `tblauthors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbooks`
--
ALTER TABLE `tblbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblissuedbookdetails`
--
ALTER TABLE `tblissuedbookdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `StudentId` (`StudentId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblauthors`
--
ALTER TABLE `tblauthors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tblbooks`
--
ALTER TABLE `tblbooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblissuedbookdetails`
--
ALTER TABLE `tblissuedbookdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
