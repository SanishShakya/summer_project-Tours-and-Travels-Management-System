-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2019 at 10:24 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_summerproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(2) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `name`, `username`, `password`, `email`, `status`, `phone`, `image`, `address`) VALUES
(1, 'admin', 'admin123', '0192023a7bbd73250516f069df18b500', 'admin@gmail.com', 1, 9852320012, '2012_Peugeot_Onyx_Concept_supercars_supercar__d_4492x3366.jpg', 'lalitpur'),
(30, 'Sanish Shakya', 'Sanish10', '0192023a7bbd73250516f069df18b500', 'admin123@gmail.com', 1, 88, 'IMG_8381 - Copy.jpg', 'Odit et tenetur numq');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `bookingId` int(11) NOT NULL,
  `date` date NOT NULL,
  `customerName` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `packageName` varchar(255) NOT NULL,
  `customerEmail` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`bookingId`, `date`, `customerName`, `comment`, `packageName`, `customerEmail`, `status`) VALUES
(37, '2019-11-21', 'Sanish Shakya', 'Dolorem debitis in e', 'Italy', 'sanish9860@gmail.com', 1),
(40, '2019-11-21', 'Sanish Shakya', '<p>ejhherdsggfsjdgf</p>\r\n', 'Gillian Gould', 'sanish9860@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customerId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` char(6) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` int(10) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customerId`, `name`, `email`, `password`, `gender`, `address`, `mobile`, `username`) VALUES
(19, 'Ronit Shakya', 'ronitshakya8@gmail.com', 'f673acbc4f84383c202e3f71e64d82ad', '63889c', 'Patan', 2147483647, 'Ronit123'),
(20, 'Sanish Shakya', 'sanishshk@gmail.com', '22be6dbe4df26efa104cca3400d3d6b9', '63889c', 'Lalitpur', 2147483647, 'admin123'),
(21, 'Sanish Shakya', 'sanishshk@gmail.com', '22be6dbe4df26efa104cca3400d3d6b9', '63889c', 'Lalitpur', 2147483647, 'admin123'),
(22, 'Sanish Shakya', 'sanishshk@gmail.com', '22be6dbe4df26efa104cca3400d3d6b9', '63889c', 'Lalitpur', 2147483647, 'sanish10'),
(23, 'Sanish Shakya', 'sanish9860@gmail.com', '22be6dbe4df26efa104cca3400d3d6b9', '63889c', 'patan', 2147483647, 'admin'),
(24, 'Saugat', 'saugat0743@gmail.com', '25d55ad283aa400af464c76d713c07ad', '63889c', 'Nam ullamco voluptas', 2147483647, 'Saugat');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiry`
--

CREATE TABLE `tbl_enquiry` (
  `enquiryId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_enquiry`
--

INSERT INTO `tbl_enquiry` (`enquiryId`, `name`, `email`, `subject`, `description`, `status`, `created_at`) VALUES
(1, 'Ram Bahadur', 'ram@gmail.com', 'subjectsubject', 'descriptiondescription', 1, '2019-07-15 08:15:00'),
(2, 'Reuben Donovan', 'mokepudydo@mailinator.net', 'Quia eu dolore eiusm', 'Provident similique', 0, '2019-08-08 03:48:59'),
(3, 'Reuben Donovan', 'mokepudydo@mailinator.net', 'Quia eu dolore eiusm', 'Provident similique', 0, '2019-08-08 03:49:17'),
(4, 'Reese Massey', 'loqoso@mailinator.net', 'Quidem hic repudiand', 'Eos est architecto v', 0, '2019-08-08 16:34:37'),
(5, 'Janna Collier', 'xociva@mailinator.com', 'Officiis excepturi d', 'Ut veniam et odio q', 0, '2019-08-08 16:35:26'),
(6, 'Sallu Bhai', 'sallu@gmail.com', 'About Websites', 'I like your Website bro its cool', 0, '2019-08-13 13:49:23'),
(7, 'Hyacinth Holmes', 'foxasapa@mailinator.com', 'Quia quae ad eos do', 'Sunt consequuntur sdfhsjkdfhkjsdhfjskhd fjks hdfkjh sdkjfhkjshfkjshdf kjsdf\r\nsdfkjshdfkjhsdhfkjsdhkfjhskjfhkjsh fdkjsfsbf sdf 4s fsdf 4s f s\r\nf sdf \r\ns \r\nfs d\r\nfs \r\nfsdf', 0, '2019-08-13 13:50:23'),
(8, 'Lois Sheppard', 'ketekyqyailinator', 'Consequatur volupta', 'Ullam odit qui ex si', 0, '2019-08-30 03:39:27'),
(9, 'Lois Sheppard', 'ketekyqyailinator', 'Consequatur volupta', 'Ullam odit qui ex si', 0, '2019-08-30 03:45:13'),
(10, 'Garrison Juarez', 'fegolutyrsdfjhgfgfsjg', 'Et iusto maiores lor', 'Incididunt esse qui', 0, '2019-08-30 03:45:35'),
(11, 'Garrison Juarez', 'fegolutyrsdfjhgfgfsjg', 'Et iusto maiores lor', 'Incididunt esse qui', 0, '2019-08-30 03:49:15'),
(12, 'Marah Deleon', 'xcvxcvxcvxcvxcv', 'Et voluptatibus erro', 'Ullamco iusto non at', 0, '2019-08-30 03:49:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `paymentId` int(11) NOT NULL,
  `transactionId` int(11) NOT NULL,
  `amount` double NOT NULL,
  `date` int(11) NOT NULL,
  `bookingId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tourpackage`
--

CREATE TABLE `tbl_tourpackage` (
  `tourId` int(11) NOT NULL,
  `packageName` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `amount` double NOT NULL,
  `category` varchar(255) NOT NULL,
  `days` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `feature` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_tourpackage`
--

INSERT INTO `tbl_tourpackage` (`tourId`, `packageName`, `description`, `amount`, `category`, `days`, `location`, `status`, `created_at`, `photo`, `created_by`, `feature`) VALUES
(110, 'Simone Meadows', '<p>kdugdukghfjhdkjhg</p>\r\n', 94, 'indiviual', '16', 'Rerum totam eiusmod ', 1, '2019-08-06 09:40:12', '2012_Peugeot_Onyx_Concept_supercars_supercar__d_4492x3366.jpg', '30', 'Quas est magnam bea'),
(114, 'KTM-THAILAND-KTM', 'This tour tour the overall beautiful islands like pattaya island, coral island etc. and various safaris and fun parks', 50000, 'Family', '5 days and 3 nights', 'Thailand', 1, '2019-08-06 15:07:52', 'trend_8.png', '30', 'Full Air Condition room, free wifi, luxury hotel with swimming pools'),
(115, 'Paris', '<p><strong>France</strong>, the largest country in Western Europe, has long been a gateway between the continent&#39;s northern and southern regions. Its lengthy borders touch Germany and Belgium in the north; the Atlantic Ocean in the west; the Pyrenees ', 60000, 'Couple', '6 days 5 nights', 'France', 1, '2019-08-08 17:46:51', 'gettyimages-924894324-612x612.jpg', '30', 'Round-trip Economy Trans-pacific Air, In-land Transportation / Local Transfers, Fine Hotel Accommodations, Authentic Dining, Travel Protections'),
(121, 'Lael Contreras', 'Hic occaecat dolores', 18, 'Couple', '25', 'Enim cumque sapiente', 1, '2019-08-12 06:42:04', '2012_Peugeot_Onyx_Concept_supercars_supercar__d_4492x3366.jpg', '30', 'Ad molestiae aliquid'),
(141, 'Italy', 'bghhgggggggggggggggggggggggggggg', 200000, 'Indiviual', '14', 'jdhkjxhvkjxchvkjxchv', 1, '2019-11-14 05:15:02', 'Screenshot (4).png', '30', 'kjhdkvjchkvjhckvhckjvhkjvchv'),
(143, 'Gillian Gould', '<p>Gillian Gould</p>\r\n', 33, 'Family', '16', 'Ratione ad dolore in', 1, '2019-11-16 10:24:49', 'djg.png', '30', 'Rerum ad omnis accus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`bookingId`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customerId`);

--
-- Indexes for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
  ADD PRIMARY KEY (`enquiryId`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`paymentId`),
  ADD UNIQUE KEY `transactionId` (`transactionId`);

--
-- Indexes for table `tbl_tourpackage`
--
ALTER TABLE `tbl_tourpackage`
  ADD PRIMARY KEY (`tourId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `bookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
  MODIFY `enquiryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `paymentId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tourpackage`
--
ALTER TABLE `tbl_tourpackage`
  MODIFY `tourId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
