-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 22, 2023 at 03:43 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disease_manage`
--

-- --------------------------------------------------------

--
-- Table structure for table `admit`
--

CREATE TABLE `admit` (
  `patientid` int(10) UNSIGNED NOT NULL,
  `hospitalid` int(11) NOT NULL,
  `dateadd` date NOT NULL,
  `datediss` date NOT NULL,
  `diseaseid` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admit`
--

INSERT INTO `admit` (`patientid`, `hospitalid`, `dateadd`, `datediss`, `diseaseid`, `description`) VALUES
(18, 5, '2023-01-23', '2023-01-24', 9, 'bad'),
(19, 6, '2023-01-22', '2023-01-24', 1, 'bad');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `diseasename` varchar(100) NOT NULL,
  `diseaseid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`diseasename`, `diseaseid`) VALUES
('Dengue', 1),
('Malaria', 2),
('chikungunya', 3),
('Typhiod', 4),
('Diarrhoea', 5),
('Hepatitis A', 6),
('Hepatitis B', 7),
('Pneumonia', 8),
('Covid-19', 9),
('AIDS', 10),
('Others', 11);

-- --------------------------------------------------------

--
-- Table structure for table `hospital_details`
--

CREATE TABLE `hospital_details` (
  `hospital_name` varchar(100) NOT NULL,
  `hospital_id` int(11) NOT NULL,
  `hospital_loc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hosp_login`
--

CREATE TABLE `hosp_login` (
  `hosp_name` varchar(25) DEFAULT NULL,
  `hosp_id` int(11) NOT NULL,
  `hosp_mail` varchar(25) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hosp_login`
--

INSERT INTO `hosp_login` (`hosp_name`, `hosp_id`, `hosp_mail`, `password`) VALUES
('Pragathi', 5, 'pragathi@hospital.com', '$2y$10$/LobZphgIDJzpg/Bluk4IuxAfF5C2chaNhv78UNqP3n6CprczTcEy'),
('Adarsha', 6, 'adarsha@hospital.com', '$2y$10$uAYWEERMpvLAvTfF.ZScZ.yLf5A/LuyW2URm1gnNjYoDmddzgRgRe');

-- --------------------------------------------------------

--
-- Table structure for table `muncipal`
--

CREATE TABLE `muncipal` (
  `munc_mail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `muncipal`
--

INSERT INTO `muncipal` (`munc_mail`, `password`) VALUES
('admin@admin.com', '$2y$10$bHVznTGF9WUVREUYtXGU6Oa/r9IlXTv1FTaBtfwx/FE5beJh.Ghea'),
('admin@admin.com', '$2y$10$bHVznTGF9WUVREUYtXGU6Oa/r9IlXTv1FTaBtfwx/FE5beJh.Ghea');

-- --------------------------------------------------------

--
-- Table structure for table `muncipal_details`
--

CREATE TABLE `muncipal_details` (
  `patientid` int(10) UNSIGNED NOT NULL,
  `hospitalid` int(11) NOT NULL,
  `diseaseid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `muncipal_display`
-- (See below for the actual view)
--
CREATE TABLE `muncipal_display` (
`patientid` int(10) unsigned
,`hospitalid` int(11)
,`diseaseid` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patientid` int(10) UNSIGNED NOT NULL,
  `userid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `location` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patientid`, `userid`, `name`, `date`, `location`, `phone`) VALUES
(18, 1, 'chinmay', '2023-01-23', 'puttur city', '910876533'),
(19, 4, 'navin', '2023-01-22', 'bellare', '910876533'),
(20, 4, 'jnapak', '2023-01-22', 'puttur', '987654321'),
(21, 1, 'Anvithgopa', '2023-01-23', 'puttur city', '987654321');

-- --------------------------------------------------------

--
-- Stand-in structure for view `patient_add`
-- (See below for the actual view)
--
CREATE TABLE `patient_add` (
`patientid` int(10) unsigned
,`name` varchar(100)
,`hospitalid` int(11)
,`dateadd` date
,`phone` varchar(10)
,`datediss` date
,`description` varchar(100)
,`diseaseid` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `patientid` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `hospitalid` int(11) NOT NULL,
  `dateadd` date NOT NULL,
  `patientno` int(10) NOT NULL,
  `datedis` date NOT NULL,
  `description` varchar(100) NOT NULL,
  `diseaseid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reg_form`
--

CREATE TABLE `reg_form` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg_form`
--

INSERT INTO `reg_form` (`userid`, `username`, `email`, `password`) VALUES
(1, 'anvithgopa', 'anvithgopabellare@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `full_name`, `email`, `password`) VALUES
(1, 'anvithgopa', 'anvithgopabellare@gmail.com', '$2y$10$iV4EXrNdshrJ0y10wjXHAOFDStom0MaLkOgGlzFqYPpRovfxDuj1y'),
(4, 'Gurukiran', 'gurukiran@gmail.com', '$2y$10$nLhRmRkFMOMSPtcQuhVyD.Ixbedba3fU7OM7SrugHJYsqqMlplSB2');

-- --------------------------------------------------------

--
-- Structure for view `muncipal_display`
--
DROP TABLE IF EXISTS `muncipal_display`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `muncipal_display`  AS SELECT `patient_add`.`patientid` AS `patientid`, `patient_add`.`hospitalid` AS `hospitalid`, `patient_add`.`diseaseid` AS `diseaseid` FROM `patient_add``patient_add`  ;

-- --------------------------------------------------------

--
-- Structure for view `patient_add`
--
DROP TABLE IF EXISTS `patient_add`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `patient_add`  AS SELECT `p`.`patientid` AS `patientid`, `p`.`name` AS `name`, `a`.`hospitalid` AS `hospitalid`, `a`.`dateadd` AS `dateadd`, `p`.`phone` AS `phone`, `a`.`datediss` AS `datediss`, `a`.`description` AS `description`, `a`.`diseaseid` AS `diseaseid` FROM (`patient` `p` join `admit` `a` on(`p`.`patientid` = `a`.`patientid`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admit`
--
ALTER TABLE `admit`
  ADD KEY `diseasefk` (`diseaseid`),
  ADD KEY `hospfk` (`hospitalid`),
  ADD KEY `patientfk` (`patientid`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`diseaseid`);

--
-- Indexes for table `hospital_details`
--
ALTER TABLE `hospital_details`
  ADD KEY `hosp_fk` (`hospital_id`);

--
-- Indexes for table `hosp_login`
--
ALTER TABLE `hosp_login`
  ADD PRIMARY KEY (`hosp_id`);

--
-- Indexes for table `muncipal_details`
--
ALTER TABLE `muncipal_details`
  ADD PRIMARY KEY (`patientid`,`diseaseid`) USING BTREE,
  ADD KEY `diseaseid` (`diseaseid`),
  ADD KEY `hospitalid` (`hospitalid`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patientid`),
  ADD KEY `userfk` (`userid`);

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD PRIMARY KEY (`patientid`,`diseaseid`) USING BTREE,
  ADD KEY `fk3` (`diseaseid`),
  ADD KEY `fk2` (`hospitalid`);

--
-- Indexes for table `reg_form`
--
ALTER TABLE `reg_form`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `diseaseid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hosp_login`
--
ALTER TABLE `hosp_login`
  MODIFY `hosp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patientid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `patient_details`
--
ALTER TABLE `patient_details`
  MODIFY `patientid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reg_form`
--
ALTER TABLE `reg_form`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admit`
--
ALTER TABLE `admit`
  ADD CONSTRAINT `diseasefk` FOREIGN KEY (`diseaseid`) REFERENCES `disease` (`diseaseid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hospfk` FOREIGN KEY (`hospitalid`) REFERENCES `hosp_login` (`hosp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hospital_details`
--
ALTER TABLE `hospital_details`
  ADD CONSTRAINT `hosp_fk` FOREIGN KEY (`hospital_id`) REFERENCES `hosp_login` (`hosp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `muncipal_details`
--
ALTER TABLE `muncipal_details`
  ADD CONSTRAINT `diseaseid` FOREIGN KEY (`diseaseid`) REFERENCES `disease` (`diseaseid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hospitalid` FOREIGN KEY (`hospitalid`) REFERENCES `hosp_login` (`hosp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `patientid` FOREIGN KEY (`patientid`) REFERENCES `patient` (`patientid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `userfk` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`patientid`) REFERENCES `patient` (`patientid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk2` FOREIGN KEY (`hospitalid`) REFERENCES `hosp_login` (`hosp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk3` FOREIGN KEY (`diseaseid`) REFERENCES `disease` (`diseaseid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
