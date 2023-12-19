-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2023 at 05:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fldsmart_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anl_fr`
--

CREATE TABLE `tbl_anl_fr` (
  `Anl_fr_id` int(45) NOT NULL,
  `Anl_fr_receive` int(55) NOT NULL,
  `Anl_fr_pred` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_arch`
--

CREATE TABLE `tbl_arch` (
  `arch_archive_id` int(55) NOT NULL,
  `arch_archive_history` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_auth_create`
--

CREATE TABLE `tbl_auth_create` (
  `auth_create_id` int(45) NOT NULL,
  `auth_create_User` varchar(55) NOT NULL,
  `auth_create_Pass` int(55) NOT NULL,
  `auth_create_Fname` varchar(55) NOT NULL,
  `auth_create_Lname` varchar(55) NOT NULL,
  `auth_create_Add` varchar(55) NOT NULL,
  `auth_create_Lstate` varchar(45) NOT NULL,
  `User_id` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_auth_create`
--

INSERT INTO `tbl_auth_create` (`auth_create_id`, `auth_create_User`, `auth_create_Pass`, `auth_create_Fname`, `auth_create_Lname`, `auth_create_Add`, `auth_create_Lstate`, `User_id`) VALUES
(2, 'carl0809', 202, 'michael', 'bonifacio', 'acacia', 'user', 0),
(3, 'carl07', 827, 'carl', 'cabunoc', 'acacia', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_crt_incid`
--

CREATE TABLE `tbl_crt_incid` (
  `Crt_incid_id` int(45) NOT NULL,
  `Crt_incid_Rname` varchar(55) NOT NULL,
  `Crt_incid_Loc` varchar(55) NOT NULL,
  `Crt_incid_D` datetime NOT NULL,
  `Crt_incid_Desc` varchar(55) NOT NULL,
  `isDeleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_crt_incid`
--

INSERT INTO `tbl_crt_incid` (`Crt_incid_id`, `Crt_incid_Rname`, `Crt_incid_Loc`, `Crt_incid_D`, `Crt_incid_Desc`, `isDeleted`) VALUES
(1, 'carl', 'acacia', '2023-11-19 00:00:00', 'adadasdasd', 1),
(2, 'carl', 'asdas', '2023-11-19 00:00:00', 'aadada', 1),
(3, 'nelson', 'longos', '2023-11-19 00:00:00', 'bdfsvsafa', 1),
(4, 'ADSADSAD', 'ASDADASD', '2023-11-20 00:18:00', '', 1),
(5, 'gvxzvzx', 'zxdahgsa', '2023-11-20 00:20:00', 'asdacxczxc', 1),
(6, 'polpopl;kolpi', 'asdas', '2023-11-20 10:13:00', 'jmduaknd,asmdhasd', 1),
(7, 'mmm', 'acacia', '2023-11-20 13:35:00', 'vdewfehytrgjuy', 1),
(8, 'sdsgfg', 'nvnfh', '2023-11-25 10:01:00', 'ghfjmy', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_coll`
--

CREATE TABLE `tbl_data_coll` (
  `Data_coll_id` int(11) NOT NULL,
  `Data_coll_send` int(11) NOT NULL,
  `Rn_Cmp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fld_auth`
--

CREATE TABLE `tbl_fld_auth` (
  `User_id` int(45) NOT NULL,
  `User_state` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fld_indi`
--

CREATE TABLE `tbl_fld_indi` (
  `Fld_indi_id` int(45) NOT NULL,
  `Data_coll_id` int(45) NOT NULL,
  `Anl_fr_id` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rcd_mngmnt`
--

CREATE TABLE `tbl_rcd_mngmnt` (
  `Rcd_mngmnt_id` int(45) NOT NULL,
  `Rcd_mngmnt` int(55) NOT NULL,
  `Crt_incid_id` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_res_op`
--

CREATE TABLE `tbl_res_op` (
  `Res_Op_id` int(45) NOT NULL,
  `Res_Op_Total` int(55) NOT NULL,
  `Set_id` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rn_cmp`
--

CREATE TABLE `tbl_rn_cmp` (
  `Rn_Cmp_id` int(45) NOT NULL,
  `Rn_Cmp_vol` int(55) NOT NULL,
  `Rn_Cmp_hr` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_set`
--

CREATE TABLE `tbl_set` (
  `Set_id` int(45) NOT NULL,
  `Set_Rname` varchar(55) NOT NULL,
  `Set_Loc` varchar(55) NOT NULL,
  `Set_Status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_anl_fr`
--
ALTER TABLE `tbl_anl_fr`
  ADD PRIMARY KEY (`Anl_fr_id`);

--
-- Indexes for table `tbl_arch`
--
ALTER TABLE `tbl_arch`
  ADD PRIMARY KEY (`arch_archive_id`);

--
-- Indexes for table `tbl_auth_create`
--
ALTER TABLE `tbl_auth_create`
  ADD PRIMARY KEY (`auth_create_id`);

--
-- Indexes for table `tbl_crt_incid`
--
ALTER TABLE `tbl_crt_incid`
  ADD PRIMARY KEY (`Crt_incid_id`);

--
-- Indexes for table `tbl_data_coll`
--
ALTER TABLE `tbl_data_coll`
  ADD PRIMARY KEY (`Data_coll_id`),
  ADD UNIQUE KEY `Rn_Cmp_id` (`Rn_Cmp_id`);

--
-- Indexes for table `tbl_fld_auth`
--
ALTER TABLE `tbl_fld_auth`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `tbl_fld_indi`
--
ALTER TABLE `tbl_fld_indi`
  ADD PRIMARY KEY (`Fld_indi_id`),
  ADD UNIQUE KEY `Data_coll_id` (`Data_coll_id`,`Anl_fr_id`);

--
-- Indexes for table `tbl_rcd_mngmnt`
--
ALTER TABLE `tbl_rcd_mngmnt`
  ADD PRIMARY KEY (`Rcd_mngmnt_id`),
  ADD UNIQUE KEY `Crt_incid_id` (`Crt_incid_id`);

--
-- Indexes for table `tbl_res_op`
--
ALTER TABLE `tbl_res_op`
  ADD PRIMARY KEY (`Res_Op_id`),
  ADD UNIQUE KEY `Set_id` (`Set_id`);

--
-- Indexes for table `tbl_rn_cmp`
--
ALTER TABLE `tbl_rn_cmp`
  ADD PRIMARY KEY (`Rn_Cmp_id`);

--
-- Indexes for table `tbl_set`
--
ALTER TABLE `tbl_set`
  ADD PRIMARY KEY (`Set_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_anl_fr`
--
ALTER TABLE `tbl_anl_fr`
  MODIFY `Anl_fr_id` int(45) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_arch`
--
ALTER TABLE `tbl_arch`
  MODIFY `arch_archive_id` int(55) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_auth_create`
--
ALTER TABLE `tbl_auth_create`
  MODIFY `auth_create_id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_crt_incid`
--
ALTER TABLE `tbl_crt_incid`
  MODIFY `Crt_incid_id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_data_coll`
--
ALTER TABLE `tbl_data_coll`
  MODIFY `Data_coll_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_fld_auth`
--
ALTER TABLE `tbl_fld_auth`
  MODIFY `User_id` int(45) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_fld_indi`
--
ALTER TABLE `tbl_fld_indi`
  MODIFY `Fld_indi_id` int(45) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_rcd_mngmnt`
--
ALTER TABLE `tbl_rcd_mngmnt`
  MODIFY `Rcd_mngmnt_id` int(45) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_res_op`
--
ALTER TABLE `tbl_res_op`
  MODIFY `Res_Op_id` int(45) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_rn_cmp`
--
ALTER TABLE `tbl_rn_cmp`
  MODIFY `Rn_Cmp_id` int(45) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_set`
--
ALTER TABLE `tbl_set`
  MODIFY `Set_id` int(45) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
