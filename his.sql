-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 24, 2021 at 05:09 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `his`
--

-- --------------------------------------------------------

--
-- Table structure for table `drug_information`
--

CREATE TABLE `drug_information` (
  `drug_code` int(11) NOT NULL,
  `drug_name` varchar(80) NOT NULL,
  `drug_doses` varchar(30) NOT NULL,
  `drug_date_recieve` date NOT NULL,
  `drug_expirey_date` date NOT NULL,
  `drug_tyoe` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `family_information`
--

CREATE TABLE `family_information` (
  `family_id` int(11) NOT NULL,
  `family_name` varchar(80) NOT NULL,
  `family_phone_number` varchar(30) NOT NULL,
  `family_ic_number` varchar(30) NOT NULL,
  `family_sex` varchar(15) NOT NULL,
  `family_race` varchar(15) NOT NULL,
  `family_blood_type` varchar(15) NOT NULL,
  `family_address` varchar(80) NOT NULL,
  `family_email` varchar(80) NOT NULL,
  `family_nationality` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `insurance_information`
--

CREATE TABLE `insurance_information` (
  `insurance_id` int(11) NOT NULL,
  `insurance_name` varchar(80) NOT NULL,
  `insurance_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_information`
--

CREATE TABLE `invoice_information` (
  `invoice_id` int(11) NOT NULL,
  `invoice_details` varchar(200) NOT NULL,
  `invoice_payment_date` date NOT NULL,
  `invoice__payment_type` int(11) NOT NULL,
  `insurance_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `patient_name` varchar(80) NOT NULL,
  `patient_username` varchar(40) NOT NULL,
  `patient_phone_number` varchar(30) NOT NULL,
  `patient_email` varchar(80) NOT NULL,
  `patient_password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_name`, `patient_username`, `patient_phone_number`, `patient_email`, `patient_password`) VALUES
(1, 'Luhman Musa', 'luhman92', '019-6399925', 'syahmijalil12@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `patient_information`
--

CREATE TABLE `patient_information` (
  `patient_PMI` int(11) NOT NULL,
  `patient_name` varchar(80) NOT NULL,
  `patient_email` varchar(80) NOT NULL,
  `patient_BOD` date NOT NULL,
  `patient_ic_number` varchar(80) NOT NULL,
  `patient_sex` varchar(5) NOT NULL,
  `patient_race` varchar(15) NOT NULL,
  `patient_blood_type` varchar(5) NOT NULL,
  `patient_address` varchar(80) NOT NULL,
  `patient_nationality` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(80) NOT NULL,
  `staff_username` varchar(30) NOT NULL,
  `staff_email` varchar(80) NOT NULL,
  `staff_password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `staff_username`, `staff_email`, `staff_password`) VALUES
(1, 'Muhammad', 'muhammad92', 'muhammad@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `ward_information`
--

CREATE TABLE `ward_information` (
  `ward_id` int(11) NOT NULL,
  `ward_name` varchar(80) NOT NULL,
  `ward_level` varchar(30) NOT NULL,
  `ward_type` varchar(80) NOT NULL,
  `ward_capacity` varchar(30) NOT NULL,
  `ward_bed_code` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drug_information`
--
ALTER TABLE `drug_information`
  ADD PRIMARY KEY (`drug_code`);

--
-- Indexes for table `family_information`
--
ALTER TABLE `family_information`
  ADD PRIMARY KEY (`family_id`);

--
-- Indexes for table `insurance_information`
--
ALTER TABLE `insurance_information`
  ADD PRIMARY KEY (`insurance_id`);

--
-- Indexes for table `invoice_information`
--
ALTER TABLE `invoice_information`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `patient_information`
--
ALTER TABLE `patient_information`
  ADD PRIMARY KEY (`patient_PMI`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `ward_information`
--
ALTER TABLE `ward_information`
  ADD PRIMARY KEY (`ward_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drug_information`
--
ALTER TABLE `drug_information`
  MODIFY `drug_code` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `family_information`
--
ALTER TABLE `family_information`
  MODIFY `family_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `insurance_information`
--
ALTER TABLE `insurance_information`
  MODIFY `insurance_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice_information`
--
ALTER TABLE `invoice_information`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient_information`
--
ALTER TABLE `patient_information`
  MODIFY `patient_PMI` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ward_information`
--
ALTER TABLE `ward_information`
  MODIFY `ward_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
