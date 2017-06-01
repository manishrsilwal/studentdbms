-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 01, 2017 at 06:35 पूर्वाह्न
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `SN` int(11) NOT NULL,
  `gradename` varchar(15) NOT NULL,
  `feemonth` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`SN`, `gradename`, `feemonth`) VALUES
(1, 'Nursery', '250'),
(2, 'LKG', '300'),
(3, 'UKG', '350'),
(4, '1', '500'),
(5, '2', '600'),
(6, '3', '700'),
(7, '4', '800'),
(8, '5', '1,000'),
(9, '6', '1,200'),
(10, '7', '1,500'),
(11, '8', '1,800'),
(12, '9', '1,900'),
(13, '10', '2,000');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `grade_id` int(11) NOT NULL,
  `gradename` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`grade_id`, `gradename`) VALUES
(1, 'Nursery'),
(2, 'LKG'),
(3, 'UKG'),
(4, '1'),
(5, '2'),
(6, '3'),
(7, '4'),
(8, '5'),
(9, '6'),
(10, '7'),
(11, '8'),
(12, '9'),
(13, '10');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `SN` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`SN`, `username`, `password`, `role`) VALUES
(1, 'examadmin', 'examadmin', 'examadmin'),
(2, 'accountadmin', 'accountadmin', 'accountadmin'),
(3, 'admin', 'admin', 'admin'),
(4, 'newacc', 'newacc', 'accountadmin'),
(5, 'newexam', 'newexam', 'examadmin'),
(6, 'newadmin', 'newadmin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `marks1`
--

CREATE TABLE `marks1` (
  `SN` int(11) NOT NULL,
  `student_id` varchar(15) NOT NULL,
  `English` int(11) NOT NULL,
  `Nepali` int(11) NOT NULL,
  `Science` int(11) NOT NULL,
  `Math` int(11) NOT NULL,
  `Social` int(11) DEFAULT NULL,
  `Computer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks1`
--

INSERT INTO `marks1` (`SN`, `student_id`, `English`, `Nepali`, `Science`, `Math`, `Social`, `Computer`) VALUES
(1, '017NUR01', 80, 85, 80, 95, NULL, NULL),
(2, '017NUR02', 80, 85, 70, 70, NULL, NULL),
(3, '017NUR03', 60, 65, 70, 80, NULL, NULL),
(4, '017NUR04', 80, 90, 85, 90, NULL, NULL),
(5, '017LKG01', 60, 65, 70, 85, NULL, NULL),
(6, '017LKG02', 70, 80, 70, 86, NULL, NULL),
(7, '017UKG01', 80, 80, 65, 90, NULL, NULL),
(8, '017UKG02', 80, 75, 65, 85, NULL, NULL),
(9, '017ONE01', 80, 86, 65, 75, 60, 75),
(10, '017ONE02', 80, 82, 90, 89, 80, 90),
(11, '017ONE03', 80, 75, 95, 99, 70, 79),
(13, '017ONE04', 95, 90, 87, 96, 80, 90),
(14, '017UKG03', 85, 89, 87, 80, 75, 76);

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `student_id` varchar(15) NOT NULL,
  `gfname` varchar(20) NOT NULL,
  `gmname` varchar(20) DEFAULT NULL,
  `glname` varchar(20) NOT NULL,
  `relation` varchar(20) NOT NULL,
  `phnum` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`student_id`, `gfname`, `gmname`, `glname`, `relation`, `phnum`) VALUES
('017LKG01', 'Gotfried', '', 'Hendry', 'Brother', '9856454545'),
('017LKG02', 'Marshall', '', 'Dislocation', 'Brother', '9845212021'),
('017NUR01', 'Madhav', '', 'Silwal', 'Father', '9841220020'),
('017NUR02', 'Katappa', '', 'Karki', 'Father', '9854221102'),
('017NUR03', 'Henry', '', 'Ford', 'Brother', '9874512151'),
('017NUR04', 'Charles', '', 'Anderson', 'Father', '9845220020'),
('017ONE01', 'Onderson', '', 'Anderson', 'Father', '9845220020'),
('017ONE02', 'Ritesh', '', 'Sudde', 'Father', '9845220036'),
('017ONE03', 'Harpeet', '', 'Singh', 'Father', '9845220015'),
('017ONE04', 'Sunny', '', 'Watson', 'Brother', '9845662120'),
('017UKG01', 'Julia', '', 'Watson', 'Sister', '9845220020'),
('017UKG02', 'Jarvis', '', 'Jordan', 'Brother', '9874552252'),
('017UKG03', 'Sindhu', '', 'Hadda', 'Brother', '9845221121');

-- --------------------------------------------------------

--
-- Table structure for table `payment_status`
--

CREATE TABLE `payment_status` (
  `student_id` varchar(15) NOT NULL,
  `paid` int(11) NOT NULL,
  `paid_date` date NOT NULL,
  `dueleft` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_status`
--

INSERT INTO `payment_status` (`student_id`, `paid`, `paid_date`, `dueleft`) VALUES
('017LKG01', 600, '0000-00-00', NULL),
('017LKG02', 600, '2017-02-02', NULL),
('017NUR01', 500, '2017-02-06', NULL),
('017NUR02', 250, '2017-01-15', 0),
('017NUR03', 500, '2017-02-08', NULL),
('017NUR04', 250, '0000-00-00', 0),
('017ONE01', 500, '2017-01-18', 500),
('017UKG01', 350, '2017-02-02', NULL),
('017UKG02', 350, '2017-02-06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `student_id` varchar(15) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `dobad` date NOT NULL,
  `dobbs` date NOT NULL,
  `doa` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `adgrade` varchar(15) NOT NULL,
  `rollno` int(11) NOT NULL,
  `address_temp_street` varchar(30) DEFAULT NULL,
  `address_temp_ward` int(11) DEFAULT NULL,
  `address_temp_vdcmun` varchar(30) DEFAULT NULL,
  `address_temp_district` varchar(20) DEFAULT NULL,
  `address_temp_zone` varchar(20) DEFAULT NULL,
  `address_temp_country` varchar(20) DEFAULT NULL,
  `address_per_street` varchar(20) NOT NULL,
  `address_per_ward` int(11) NOT NULL,
  `address_per_vdcmun` varchar(20) NOT NULL,
  `address_per_district` varchar(20) NOT NULL,
  `address_per_zone` varchar(20) NOT NULL,
  `address_per_country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`student_id`, `fname`, `mname`, `lname`, `gender`, `dobad`, `dobbs`, `doa`, `email`, `adgrade`, `rollno`, `address_temp_street`, `address_temp_ward`, `address_temp_vdcmun`, `address_temp_district`, `address_temp_zone`, `address_temp_country`, `address_per_street`, `address_per_ward`, `address_per_vdcmun`, `address_per_district`, `address_per_zone`, `address_per_country`) VALUES
('017LKG01', 'Jannet', NULL, 'Karki', 'F', '2015-02-12', '2068-02-21', '2017-02-28', 'm@m.com', 'LKG', 1, NULL, NULL, NULL, NULL, NULL, NULL, 'Koteshwor', 35, 'Kathmandu', 'Kathmandu', 'Bagmati', 'Nepal'),
('017LKG02', 'Dipesh', NULL, 'Khadka', 'M', '2015-02-12', '2068-02-21', '2017-02-28', 'm@m.com', 'LKG', 2, NULL, NULL, NULL, NULL, NULL, NULL, 'Koteshwor', 35, 'Kathmandu', 'Kathmandu', 'Bagmati', 'Nepal'),
('017LKG02', 'Suman', NULL, 'Dhakal', 'M', '2015-02-12', '2068-02-21', '2017-02-28', 'm@m.com', 'LKG', 3, NULL, NULL, NULL, NULL, NULL, NULL, 'Koteshwor', 35, 'Kathmandu', 'Kathmandu', 'Bagmati', 'Nepal'),
('017NUR01', 'Manish', NULL, 'Silwal', 'M', '2015-02-12', '2068-02-21', '2017-02-28', 'm@m.com', 'Nursery', 1, NULL, NULL, NULL, NULL, NULL, NULL, 'Lalitpur', 5, 'Lalitpur', 'Lalitpur', 'Bagmati', 'Nepal'),
('017NUR02', 'Pratit', NULL, 'Silwal', 'M', '2015-02-12', '2068-02-21', '2017-02-28', 'm@m.com', 'Nursery', 2, NULL, NULL, NULL, NULL, NULL, NULL, 'Lalitpur', 5, 'Lalitpur', 'Lalitpur', 'Bagmati', 'Nepal'),
('017NUR03', 'Monika', NULL, 'Karki', 'F', '2015-02-12', '2068-02-21', '2017-02-28', 'm@m.com', 'Nursery', 3, NULL, NULL, NULL, NULL, NULL, NULL, 'Lagankhel', 5, 'Lalitpur', 'Lalitpur', 'Bagmati', 'Nepal'),
('017NUR04', 'Sadiksha', NULL, 'Karki', 'F', '2015-02-12', '2068-02-21', '2017-02-28', 'm@m.com', 'Nursery', 4, NULL, NULL, NULL, NULL, NULL, NULL, 'Koteshwor', 35, 'Kathmandu', 'Kathmandu', 'Bagmati', 'Nepal'),
('017ONE01', 'Nancy', NULL, 'Watson', 'F', '2011-02-12', '2068-02-21', '2017-02-28', 'm@m.com', '1', 1, NULL, NULL, NULL, NULL, NULL, NULL, 'Nabhal', 12, 'Lalitpur', 'Lalitpur', 'Bagmati', 'Nepal'),
('017ONE02', 'Jenelika', NULL, 'Sudde', 'F', '2015-02-07', '2065-02-06', '2017-02-27', 'jen@lika.com', '1', 2, NULL, NULL, NULL, NULL, NULL, NULL, 'Jawalkhel', 12, 'Lalitpur', 'Lalitpur', 'Bagmati', 'Nepal'),
('017ONE03', 'Jogindar', '', 'Singh', 'M', '2005-02-03', '2068-02-03', '2017-02-02', 'jogin@der.com', '1', 3, '', 0, '', '', '', '', 'Pulchowk', 20, 'Lalitpur', '$Lalitpur', 'Bagmati', 'Nepal'),
('017ONE04', 'Kirsten', '', 'Anderson', 'F', '2005-02-01', '2060-03-01', '2017-01-01', 'kirsten@k.com', '1', 4, '', 0, '', '', '', '', 'Mahalaxmisthan', 5, 'Lalitpur', '$Lalitpur', 'Bagmati', 'Nepal'),
('017UKG01', 'Kyle', NULL, 'Hammer', 'M', '2015-02-12', '2068-02-21', '2017-02-28', 'm@m.com', 'UKG', 1, NULL, NULL, NULL, NULL, NULL, NULL, 'Koteshwor', 35, 'Kathmandu', 'Kathmandu', 'Bagmati', 'Nepal'),
('017UKG02', 'Hemant', NULL, 'Harke', 'M', '2015-02-12', '2068-02-21', '2017-02-28', 'm@m.com', 'UKG', 2, NULL, NULL, NULL, NULL, NULL, NULL, 'Narayanthan', 35, 'Kathmandu', 'Kathmandu', 'Bagmati', 'Nepal'),
('017UKG03', 'James', '', 'Miller', 'M', '2006-02-05', '2070-02-05', '2017-01-01', 'jon@james.com', 'UKG', 3, '', 0, '', '', '', '', 'Budol', 5, 'Banepa', '$Kavrepalanchowk', 'Bagmati', 'Nepal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`SN`,`gradename`),
  ADD KEY `gradename` (`gradename`),
  ADD KEY `gradename_2` (`gradename`),
  ADD KEY `gradename_3` (`gradename`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`grade_id`,`gradename`),
  ADD KEY `gradename` (`gradename`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `marks1`
--
ALTER TABLE `marks1`
  ADD PRIMARY KEY (`SN`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `payment_status`
--
ALTER TABLE `payment_status`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`student_id`,`rollno`),
  ADD KEY `student_id` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `marks1`
--
ALTER TABLE `marks1`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `fee`
--
ALTER TABLE `fee`
  ADD CONSTRAINT `fee_ibfk_1` FOREIGN KEY (`gradename`) REFERENCES `grade` (`gradename`);

--
-- Constraints for table `marks1`
--
ALTER TABLE `marks1`
  ADD CONSTRAINT `marks1_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `studentinfo` (`student_id`);

--
-- Constraints for table `parents`
--
ALTER TABLE `parents`
  ADD CONSTRAINT `parents_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `studentinfo` (`student_id`);

--
-- Constraints for table `payment_status`
--
ALTER TABLE `payment_status`
  ADD CONSTRAINT `payment_status_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `studentinfo` (`student_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
