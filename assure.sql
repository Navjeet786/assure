-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 26, 2021 at 01:30 AM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assure`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `add_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `first_name`, `last_name`, `phone`, `email`, `password`, `image`, `role`, `add_date`) VALUES
(1, 'hussain1', 'MOZAMMIL', 'HUSSAIN', NULL, 'mozammil@accurate-web.com', '$2y$10$OyBT8fy6Q2lOSomvZEtiPOvqb9zyG.vG1mDiQZlDl7ysFD9nj0ck6', NULL, 'Admin', '2020-12-16 15:27:26');

-- --------------------------------------------------------

--
-- Table structure for table `admin-login`
--

CREATE TABLE `admin-login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `add_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin-login`
--

INSERT INTO `admin-login` (`id`, `username`, `email`, `password`, `role`, `add_date`) VALUES
(1, 'hussain1', 'mozammil@accurate-web.com', '$2y$10$OyBT8fy6Q2lOSomvZEtiPOvqb9zyG.vG1mDiQZlDl7ysFD9nj0ck6', 'Admin', '2020-12-16 15:27:26');

-- --------------------------------------------------------

--
-- Table structure for table `company_register_profile`
--

CREATE TABLE `company_register_profile` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `company_register_for` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_contact_person` varchar(255) DEFAULT NULL,
  `personal_number` varchar(255) DEFAULT NULL,
  `company_phone_number` varchar(255) DEFAULT NULL,
  `cac_file` varchar(3000) DEFAULT NULL,
  `address` longtext,
  `company_website` varchar(255) DEFAULT NULL,
  `company_logo` varchar(3000) DEFAULT NULL,
  `about_company` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_register_profile`
--

INSERT INTO `company_register_profile` (`id`, `username`, `company_register_for`, `company_name`, `company_contact_person`, `personal_number`, `company_phone_number`, `cac_file`, `address`, `company_website`, `company_logo`, `about_company`) VALUES
(1, 'khan4', 'Waiter', 'Lorem Ipsum', 'Xyza', '98765431', '07004369298', 'file-upload/301520011.png', 'T P LANE', 'abc.com', '', '<p>Test</p>');

-- --------------------------------------------------------

--
-- Table structure for table `individual_guarantor`
--

CREATE TABLE `individual_guarantor` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `gn_name` varchar(255) DEFAULT NULL,
  `gn_email` varchar(255) DEFAULT NULL,
  `gn_phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `individual_guarantor`
--

INSERT INTO `individual_guarantor` (`id`, `username`, `gn_name`, `gn_email`, `gn_phone`) VALUES
(1, 'hussain1', 'ABC', 'abc@gmail.com', '9966338855'),
(2, 'hussain1', 'XYZ', 'cf@cf.com', '9875522100');

-- --------------------------------------------------------

--
-- Table structure for table `individual_register_profile`
--

CREATE TABLE `individual_register_profile` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `apply_for` varchar(255) DEFAULT NULL,
  `bvn` varchar(255) DEFAULT NULL,
  `passport` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `work_exp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `individual_register_profile`
--

INSERT INTO `individual_register_profile` (`id`, `username`, `apply_for`, `bvn`, `passport`, `gender`, `phone`, `address`, `country`, `state`, `city`, `qualification`, `work_exp`) VALUES
(1, 'hussain1', 'Electrician', 'NBVH1234', 'ZG989790', 'Male', '07004369298', 'T P LANE', 'India', 'BIHAR', 'PATNA', 'MCA', '3');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL COMMENT 'email_verified',
  `role` varchar(255) DEFAULT NULL,
  `add_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `first_name`, `last_name`, `email`, `password`, `token`, `status`, `role`, `add_date`) VALUES
(1, 'hussain1', 'Samsul', 'Hussain', 'hussainmstr@gmail.com', '$2y$10$tZqQ3CLbNTpQNjO8xTkZFuqxsb10rPLtDGIyCc6NreterzimPeviG', '1', 'Active', 'Individual', '2021-02-05 19:23:14'),
(4, 'khan4', 'Rajveer', 'Khan', 'mozammil.92@rediffmail.com', '$2y$10$LsG/Y3/lwNhSo3fKpZHPjuA.dR4BRCvWk57Ht75Tk/8fwLmsNCGDK', '1', 'Active', 'Company', '2021-02-05 21:12:38'),
(5, 'srivastava5', 'Abhishek', 'Srivastava', 'abhisri141@gmail.com', '$2y$10$zSXHjiPHOKbKogamBqwtreDO5ZpwDWo6XEHV7Y.dh.11o/kdax4HW', '1', 'Active', NULL, '2021-02-15 14:35:33');

-- --------------------------------------------------------

--
-- Table structure for table `worker-category`
--

CREATE TABLE `worker-category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker-category`
--

INSERT INTO `worker-category` (`id`, `category_name`, `image`) VALUES
(1, 'Electrician', 'file-upload/552721136.png'),
(2, 'Plumber', 'file-upload/383029772.png'),
(3, 'Driver', 'file-upload/799621708.png'),
(4, 'Cook', 'file-upload/1867698897.png'),
(5, 'Cleaner', 'file-upload/1288023446.png'),
(6, 'Waiter', 'file-upload/629771863.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin-login`
--
ALTER TABLE `admin-login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_register_profile`
--
ALTER TABLE `company_register_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `individual_guarantor`
--
ALTER TABLE `individual_guarantor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `individual_register_profile`
--
ALTER TABLE `individual_register_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `worker-category`
--
ALTER TABLE `worker-category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin-login`
--
ALTER TABLE `admin-login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_register_profile`
--
ALTER TABLE `company_register_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `individual_guarantor`
--
ALTER TABLE `individual_guarantor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `individual_register_profile`
--
ALTER TABLE `individual_register_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `worker-category`
--
ALTER TABLE `worker-category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
