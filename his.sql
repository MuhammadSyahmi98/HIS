-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2021 at 04:17 PM
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
-- Table structure for table `drug_history`
--

CREATE TABLE `drug_history` (
  `drug_history_id` int(11) NOT NULL,
  `drug_history_quantity` int(11) NOT NULL,
  `drug_code` int(11) NOT NULL,
  `history_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drug_history`
--

INSERT INTO `drug_history` (`drug_history_id`, `drug_history_quantity`, `drug_code`, `history_id`) VALUES
(3, 2, 2, 3),
(4, 2, 1, 3),
(5, 2, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `drug_information`
--

CREATE TABLE `drug_information` (
  `drug_code` int(11) NOT NULL,
  `drug_name` varchar(80) NOT NULL,
  `drug_description` varchar(300) NOT NULL,
  `drug_doses` varchar(30) NOT NULL,
  `drug_date_receive` date NOT NULL,
  `drug_expiry_date` date NOT NULL,
  `drug_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drug_information`
--

INSERT INTO `drug_information` (`drug_code`, `drug_name`, `drug_description`, `drug_doses`, `drug_date_receive`, `drug_expiry_date`, `drug_quantity`) VALUES
(1, 'Vaksin12', 'Amik kalau nak hidup lama', '2 dose', '2021-06-11', '2021-07-09', 119),
(2, 'Vaksin', 'adasdasd', '2 dose', '2021-06-18', '2021-07-08', 211),
(3, 'Vaksin', 'sdsadasd', '2 dose', '2021-06-16', '2021-06-30', 12),
(4, 'Vaksin', 'sdsadasd1', '2 dose', '2021-06-16', '2021-06-30', 89);

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
  `family_nationality` varchar(30) NOT NULL,
  `patient_PMI` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family_information`
--

INSERT INTO `family_information` (`family_id`, `family_name`, `family_phone_number`, `family_ic_number`, `family_sex`, `family_race`, `family_blood_type`, `family_address`, `family_email`, `family_nationality`, `patient_PMI`) VALUES
(1, 'asdsd', '32312323223', '32312323223', 'Man', 'Malay', 'O-', 'TL 87 Jalan Masjid Serom 3', 'test@gmail.com', 'Malaysia', 2),
(2, 'Hafis', '0193212342', '765435678675', 'Man', 'Malay', 'O-', 'TL 87 Jalan Masjid Serom 3', 'luhamasdt@gmail.com', 'Malaysia', 3);

-- --------------------------------------------------------

--
-- Table structure for table `insurance_information`
--

CREATE TABLE `insurance_information` (
  `insurance_id` int(11) NOT NULL,
  `insurance_name` varchar(80) NOT NULL,
  `insurance_status` varchar(30) NOT NULL,
  `patient_PMI` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurance_information`
--

INSERT INTO `insurance_information` (`insurance_id`, `insurance_name`, `insurance_status`, `patient_PMI`) VALUES
(1, 'Insurance 1', 'Active', 2),
(2, 'Insurance 2', 'Not Active', 3);

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
-- Table structure for table `medical_history`
--

CREATE TABLE `medical_history` (
  `history_id` int(11) NOT NULL,
  `drug_status` varchar(30) DEFAULT 'in progress',
  `history_date` date NOT NULL,
  `history_time` time NOT NULL,
  `history_review` varchar(300) NOT NULL,
  `history_ward` varchar(15) NOT NULL,
  `patient_PMI` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_history`
--

INSERT INTO `medical_history` (`history_id`, `drug_status`, `history_date`, `history_time`, `history_review`, `history_ward`, `patient_PMI`, `staff_id`) VALUES
(3, 'complete', '2021-06-27', '09:44:10', 'Testing', 'No', 2, 1),
(4, 'in progress', '2021-06-27', '12:50:20', 'Sakit apa tok wi', 'No', 3, 1);

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
  `patient_phone_number` varchar(30) NOT NULL,
  `patient_BOD` date NOT NULL,
  `patient_ic_number` varchar(80) NOT NULL,
  `patient_sex` varchar(15) NOT NULL,
  `patient_race` varchar(15) NOT NULL,
  `patient_blood_type` varchar(15) NOT NULL,
  `patient_address` varchar(80) NOT NULL,
  `patient_nationality` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_information`
--

INSERT INTO `patient_information` (`patient_PMI`, `patient_name`, `patient_email`, `patient_phone_number`, `patient_BOD`, `patient_ic_number`, `patient_sex`, `patient_race`, `patient_blood_type`, `patient_address`, `patient_nationality`) VALUES
(2, 'Muhammad Aliff Iqmal Bint Othman', 'aliff@gmail.com', '0196399925', '2021-06-03', '8888888888', 'Man', 'Malay', '0+', 'No 13 Jalan TU 34', 'Bangladesh'),
(3, 'Luhman Musa Pawerrr', 'luhman@gmail.com', '0196399925', '2021-06-24', '9907654323', 'Man', 'Malay', '0+', 'TL 87 Jalan Masjid Serom 3', 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `patient_queue`
--

CREATE TABLE `patient_queue` (
  `queue_id` int(11) NOT NULL,
  `queue_date` date NOT NULL,
  `queue_time` time NOT NULL,
  `queue_status` varchar(30) DEFAULT 'waiting',
  `patient_PMI` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_queue`
--

INSERT INTO `patient_queue` (`queue_id`, `queue_date`, `queue_time`, `queue_status`, `patient_PMI`) VALUES
(18, '2021-06-26', '17:51:00', 'complete', 2),
(21, '2021-06-27', '06:42:13', 'complete', 3),
(22, '2021-06-27', '16:02:55', 'waiting', 2);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(80) NOT NULL,
  `staff_username` varchar(30) NOT NULL,
  `staff_email` varchar(80) NOT NULL,
  `staff_password` varchar(80) NOT NULL,
  `staff_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `staff_username`, `staff_email`, `staff_password`, `staff_type`) VALUES
(1, 'Muhammad', 'muhammad92', 'muhammad@gmail.com', '12345', 2);

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
-- Indexes for table `drug_history`
--
ALTER TABLE `drug_history`
  ADD PRIMARY KEY (`drug_history_id`),
  ADD KEY `drug_code` (`drug_code`),
  ADD KEY `history_id` (`history_id`);

--
-- Indexes for table `drug_information`
--
ALTER TABLE `drug_information`
  ADD PRIMARY KEY (`drug_code`);

--
-- Indexes for table `family_information`
--
ALTER TABLE `family_information`
  ADD PRIMARY KEY (`family_id`),
  ADD KEY `patient_PMI` (`patient_PMI`);

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
-- Indexes for table `medical_history`
--
ALTER TABLE `medical_history`
  ADD PRIMARY KEY (`history_id`),
  ADD KEY `patient_PMI` (`patient_PMI`),
  ADD KEY `staff_id` (`staff_id`);

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
-- Indexes for table `patient_queue`
--
ALTER TABLE `patient_queue`
  ADD PRIMARY KEY (`queue_id`),
  ADD KEY `patient_PMI` (`patient_PMI`);

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
-- AUTO_INCREMENT for table `drug_history`
--
ALTER TABLE `drug_history`
  MODIFY `drug_history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `drug_information`
--
ALTER TABLE `drug_information`
  MODIFY `drug_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `family_information`
--
ALTER TABLE `family_information`
  MODIFY `family_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `insurance_information`
--
ALTER TABLE `insurance_information`
  MODIFY `insurance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoice_information`
--
ALTER TABLE `invoice_information`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical_history`
--
ALTER TABLE `medical_history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient_information`
--
ALTER TABLE `patient_information`
  MODIFY `patient_PMI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient_queue`
--
ALTER TABLE `patient_queue`
  MODIFY `queue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `drug_history`
--
ALTER TABLE `drug_history`
  ADD CONSTRAINT `drug_history_ibfk_1` FOREIGN KEY (`drug_code`) REFERENCES `drug_information` (`drug_code`),
  ADD CONSTRAINT `drug_history_ibfk_2` FOREIGN KEY (`history_id`) REFERENCES `medical_history` (`history_id`);

--
-- Constraints for table `family_information`
--
ALTER TABLE `family_information`
  ADD CONSTRAINT `family_information_ibfk_1` FOREIGN KEY (`patient_PMI`) REFERENCES `patient_information` (`patient_PMI`);

--
-- Constraints for table `medical_history`
--
ALTER TABLE `medical_history`
  ADD CONSTRAINT `medical_history_ibfk_1` FOREIGN KEY (`patient_PMI`) REFERENCES `patient_information` (`patient_PMI`),
  ADD CONSTRAINT `medical_history_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Constraints for table `patient_queue`
--
ALTER TABLE `patient_queue`
  ADD CONSTRAINT `patient_queue_ibfk_1` FOREIGN KEY (`patient_PMI`) REFERENCES `patient_information` (`patient_PMI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
