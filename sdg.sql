-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 01:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdg`
--

-- --------------------------------------------------------

--
-- Table structure for table `research5.1.1`
--

CREATE TABLE `research5.1.1` (
  `ID` int(255) NOT NULL,
  `total_no_published_research` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `year_pub` int(255) NOT NULL,
  `no_clinical` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `research5.1.1`
--

INSERT INTO `research5.1.1` (`ID`, `total_no_published_research`, `title`, `author`, `year_pub`, `no_clinical`) VALUES
(1, '12', 'Gender Based Law', 'Risa Hontiveros', 2023, 12),
(2, '', 'Gender Based Law', 'Risa Hontiveros', 2023, 12);

-- --------------------------------------------------------

--
-- Table structure for table `research5.2.1`
--

CREATE TABLE `research5.2.1` (
  `ID` int(255) NOT NULL,
  `no_starting_deg` varchar(255) NOT NULL,
  `no_first_start_deg` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `research5.2.1`
--

INSERT INTO `research5.2.1` (`ID`, `no_starting_deg`, `no_first_start_deg`) VALUES
(1, '12', 12),
(2, '', 14),
(3, '14', 15),
(4, '', 16),
(5, '13', 15),
(6, '12', 13);

-- --------------------------------------------------------

--
-- Table structure for table `research5.3.1`
--

CREATE TABLE `research5.3.1` (
  `ID` int(255) NOT NULL,
  `no_college_applicants` int(255) NOT NULL,
  `no_admitted` int(255) NOT NULL,
  `no_enrollees` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `research5.3.1`
--

INSERT INTO `research5.3.1` (`ID`, `no_college_applicants`, `no_admitted`, `no_enrollees`) VALUES
(1, 12, 15, 17);

-- --------------------------------------------------------

--
-- Table structure for table `research5.3.2`
--

CREATE TABLE `research5.3.2` (
  `ID` int(255) NOT NULL,
  `no_job_applicants` int(255) NOT NULL,
  `no_newly_hired` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `research5.3.2`
--

INSERT INTO `research5.3.2` (`ID`, `no_job_applicants`, `no_newly_hired`) VALUES
(1, 14, 15);

-- --------------------------------------------------------

--
-- Table structure for table `research5.3.3`
--

CREATE TABLE `research5.3.3` (
  `ID` int(255) NOT NULL,
  `no_women_applicants` int(255) NOT NULL,
  `no_ppa` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `research5.3.3`
--

INSERT INTO `research5.3.3` (`ID`, `no_women_applicants`, `no_ppa`) VALUES
(1, 15, 12),
(2, 12, 15);

-- --------------------------------------------------------

--
-- Table structure for table `research5.3.4`
--

CREATE TABLE `research5.3.4` (
  `ID` int(255) NOT NULL,
  `no_ppa_women` int(255) NOT NULL,
  `no_internal_ppa` int(255) NOT NULL,
  `no_external_ppa` int(255) NOT NULL,
  `title_ppa` text NOT NULL,
  `description_ppa` text NOT NULL,
  `total_cost` int(255) NOT NULL,
  `fund_source` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `research5.3.4`
--

INSERT INTO `research5.3.4` (`ID`, `no_ppa_women`, `no_internal_ppa`, `no_external_ppa`, `title_ppa`, `description_ppa`, `total_cost`, `fund_source`) VALUES
(1, 14, 15, 17, 'Rochelle', 'Short description', 15, 15);

-- --------------------------------------------------------

--
-- Table structure for table `research5.3.5`
--

CREATE TABLE `research5.3.5` (
  `ID` int(255) NOT NULL,
  `no_encourage_woman` int(255) NOT NULL,
  `title_ppa` varchar(255) NOT NULL,
  `description_ppa` varchar(255) NOT NULL,
  `total_cost1` int(255) NOT NULL,
  `fund_source1` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `research5.3.5`
--

INSERT INTO `research5.3.5` (`ID`, `no_encourage_woman`, `title_ppa`, `description_ppa`, `total_cost1`, `fund_source1`) VALUES
(1, 15, 'Work Force', 'Women taking up the gap', 14, 0);

-- --------------------------------------------------------

--
-- Table structure for table `research5.4.1`
--

CREATE TABLE `research5.4.1` (
  `ID` int(11) NOT NULL,
  `no_employees` int(11) NOT NULL,
  `academic_teaching_staff` int(11) NOT NULL,
  `senior_staff` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `research5.4.1`
--

INSERT INTO `research5.4.1` (`ID`, `no_employees`, `academic_teaching_staff`, `senior_staff`) VALUES
(1, 15, 18, 20);

-- --------------------------------------------------------

--
-- Table structure for table `research5.5.1`
--

CREATE TABLE `research5.5.1` (
  `ID` int(255) NOT NULL,
  `total_graduates` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `research5.5.1`
--

INSERT INTO `research5.5.1` (`ID`, `total_graduates`) VALUES
(1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `research5.5.2`
--

CREATE TABLE `research5.5.2` (
  `ID` int(255) NOT NULL,
  `applicants_for_graduation` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research5.5.3`
--

CREATE TABLE `research5.5.3` (
  `ID` int(255) NOT NULL,
  `total_no_STEM` int(255) NOT NULL,
  `no_graduate_medicine` int(255) NOT NULL,
  `no_art_humanities` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `research5.5.3`
--

INSERT INTO `research5.5.3` (`ID`, `total_no_STEM`, `no_graduate_medicine`, `no_art_humanities`) VALUES
(1, 15, 18, 20);

-- --------------------------------------------------------

--
-- Table structure for table `research5.6.1`
--

CREATE TABLE `research5.6.1` (
  `ID` int(255) NOT NULL,
  `no_non_discrimination` int(255) NOT NULL,
  `no_ppa_implemented` int(255) NOT NULL,
  `title_ppa` varchar(255) NOT NULL,
  `description_ppa` varchar(255) NOT NULL,
  `total_cost` int(255) NOT NULL,
  `fund_source` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research5.6.2`
--

CREATE TABLE `research5.6.2` (
  `ID` int(255) NOT NULL,
  `no_non_discrimation_trans` varchar(255) NOT NULL,
  `no_ppa_implemented` varchar(255) NOT NULL,
  `title_ppa` varchar(255) NOT NULL,
  `description_ppa` varchar(255) NOT NULL,
  `total_cost` varchar(255) NOT NULL,
  `fund_source` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research5.6.3`
--

CREATE TABLE `research5.6.3` (
  `ID` int(255) NOT NULL,
  `no_maternity_paternity` int(255) NOT NULL,
  `no_ppa_implemented` varchar(255) NOT NULL,
  `title_ppa` varchar(255) NOT NULL,
  `description_ppa` varchar(255) NOT NULL,
  `total_cost` varchar(255) NOT NULL,
  `fund_source` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research5.6.4`
--

CREATE TABLE `research5.6.4` (
  `ID` int(255) NOT NULL,
  `no_paternity` int(255) NOT NULL,
  `no_equi_paternity` int(255) NOT NULL,
  `no_maternity_leave` int(255) NOT NULL,
  `no_equi_maternity` int(255) NOT NULL,
  `no_solo_parents` int(255) NOT NULL,
  `no_equi_solo_parents` int(255) NOT NULL,
  `total_num_VAWC` int(255) NOT NULL,
  `total_equi_VAWC` int(255) NOT NULL,
  `no_special` int(255) NOT NULL,
  `equi_special` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research5.6.5`
--

CREATE TABLE `research5.6.5` (
  `ID` int(255) NOT NULL,
  `no_solo_employees` int(255) NOT NULL,
  `no_solo_solo` int(255) NOT NULL,
  `no_solo_students` int(255) NOT NULL,
  `no_solostudents_solo` int(255) NOT NULL,
  `no_employees_children_soloparent` int(255) NOT NULL,
  `total_num_student_soloparents` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research5.6.6`
--

CREATE TABLE `research5.6.6` (
  `ID` int(255) NOT NULL,
  `no_use_childfacility` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research5.6.7`
--

CREATE TABLE `research5.6.7` (
  `ID` int(255) NOT NULL,
  `no_staff_faculty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research5.6.8`
--

CREATE TABLE `research5.6.8` (
  `ID` int(255) NOT NULL,
  `no_mentoring_femalestudents` varchar(255) NOT NULL,
  `title_ppa1` varchar(255) NOT NULL,
  `description_ppa` varchar(255) NOT NULL,
  `total_cost1` varchar(255) NOT NULL,
  `fund_source1` varchar(255) NOT NULL,
  `no_mentoring_female_employees` varchar(255) NOT NULL,
  `title_ppa2` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `total_cost2` varchar(255) NOT NULL,
  `fund_source2` varchar(255) NOT NULL,
  `total_female_employees` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research5.6.9`
--

CREATE TABLE `research5.6.9` (
  `ID` int(255) NOT NULL,
  `no_policy_protecting` varchar(255) NOT NULL,
  `no_ppa_implemented` varchar(255) NOT NULL,
  `title_ppa` varchar(255) NOT NULL,
  `description_ppa` varchar(255) NOT NULL,
  `total_cost` varchar(255) NOT NULL,
  `fund_source` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research5.6.10`
--

CREATE TABLE `research5.6.10` (
  `ID` int(255) NOT NULL,
  `no_reports_discrimination` int(255) NOT NULL,
  `no_resolved_discrimination` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research5.7.1`
--

CREATE TABLE `research5.7.1` (
  `ID` int(255) NOT NULL,
  `level_functionality` varchar(255) NOT NULL,
  `upload_memo` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research5.7.2`
--

CREATE TABLE `research5.7.2` (
  `ID` int(255) NOT NULL,
  `no_conducted_CODI` int(255) NOT NULL,
  `title_ppa` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `total_cost` varchar(255) NOT NULL,
  `fund_source` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research5.7.3`
--

CREATE TABLE `research5.7.3` (
  `ID` int(11) NOT NULL,
  `no_sexual_harrassment` int(11) NOT NULL,
  `no_resolved_sexual_harrassment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research5.7.4`
--

CREATE TABLE `research5.7.4` (
  `ID` int(255) NOT NULL,
  `VAW_officer` varchar(255) NOT NULL,
  `evidence` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research5.7.5`
--

CREATE TABLE `research5.7.5` (
  `ID` int(255) NOT NULL,
  `no_filed_VAWC_cases` varchar(255) NOT NULL,
  `no_resolve_VAWC` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research5.7.6.1`
--

CREATE TABLE `research5.7.6.1` (
  `ID` int(255) NOT NULL,
  `no_students_abuse` int(255) NOT NULL,
  `no_student_abuse_partner` int(255) NOT NULL,
  `no_students_abuse_otherpeople` int(255) NOT NULL,
  `no_students_reported` int(255) NOT NULL,
  `no_students_confide` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research5.7.6.2`
--

CREATE TABLE `research5.7.6.2` (
  `ID` int(255) NOT NULL,
  `no_employees_experience_abuse` int(255) NOT NULL,
  `no_employees_partner` int(255) NOT NULL,
  `no_employees_abuse_otherpeople` int(255) NOT NULL,
  `no_employees_reported` int(255) NOT NULL,
  `no_employees_confide` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research5.8.1`
--

CREATE TABLE `research5.8.1` (
  `ID` int(255) NOT NULL,
  `total_campus_GAA` varchar(255) NOT NULL,
  `total_GAA` varchar(255) NOT NULL,
  `total_GAD_fund` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research5.8.2`
--

CREATE TABLE `research5.8.2` (
  `ID` int(255) NOT NULL,
  `total_GAD_fund_utilized` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research5.9.1`
--

CREATE TABLE `research5.9.1` (
  `ID` int(255) NOT NULL,
  `no_implemented_CapDev` varchar(255) NOT NULL,
  `no_beneficiaries` varchar(255) NOT NULL,
  `title_ppa` varchar(255) NOT NULL,
  `description_ppa` varchar(255) NOT NULL,
  `total_cost` varchar(255) NOT NULL,
  `fund_source` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research5.9.2`
--

CREATE TABLE `research5.9.2` (
  `ID` int(255) NOT NULL,
  `no_conducted_GAD` int(255) NOT NULL,
  `title_ppa` varchar(255) NOT NULL,
  `description_ppa` varchar(255) NOT NULL,
  `total_cost` varchar(255) NOT NULL,
  `fund_source` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research5.9.3`
--

CREATE TABLE `research5.9.3` (
  `ID` int(255) NOT NULL,
  `no_GAD_IEC` int(255) NOT NULL,
  `total_cost` int(255) NOT NULL,
  `no_IEC_materials` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research 5.9.4`
--

CREATE TABLE `research 5.9.4` (
  `ID` int(255) NOT NULL,
  `no_purchased_GAD` int(255) NOT NULL,
  `no_GAD_related_esource` int(255) NOT NULL,
  `total_amount_utilized` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research 5.10.1`
--

CREATE TABLE `research 5.10.1` (
  `ID` int(255) NOT NULL,
  `no_courses_integrated` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research 5.11.1`
--

CREATE TABLE `research 5.11.1` (
  `ID` int(255) NOT NULL,
  `no_extension_ppa` int(255) NOT NULL,
  `title_ppa` varchar(255) NOT NULL,
  `description_ppa` varchar(255) NOT NULL,
  `total_cost` varchar(255) NOT NULL,
  `fund_source` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `research5.1.1`
--
ALTER TABLE `research5.1.1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.2.1`
--
ALTER TABLE `research5.2.1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.3.1`
--
ALTER TABLE `research5.3.1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.3.2`
--
ALTER TABLE `research5.3.2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.3.3`
--
ALTER TABLE `research5.3.3`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.3.4`
--
ALTER TABLE `research5.3.4`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.3.5`
--
ALTER TABLE `research5.3.5`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.4.1`
--
ALTER TABLE `research5.4.1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.5.1`
--
ALTER TABLE `research5.5.1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.5.2`
--
ALTER TABLE `research5.5.2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.5.3`
--
ALTER TABLE `research5.5.3`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.6.1`
--
ALTER TABLE `research5.6.1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.6.2`
--
ALTER TABLE `research5.6.2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.6.3`
--
ALTER TABLE `research5.6.3`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.6.4`
--
ALTER TABLE `research5.6.4`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.6.5`
--
ALTER TABLE `research5.6.5`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.6.6`
--
ALTER TABLE `research5.6.6`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.6.7`
--
ALTER TABLE `research5.6.7`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.6.8`
--
ALTER TABLE `research5.6.8`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.6.9`
--
ALTER TABLE `research5.6.9`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.6.10`
--
ALTER TABLE `research5.6.10`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.7.1`
--
ALTER TABLE `research5.7.1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.7.2`
--
ALTER TABLE `research5.7.2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.7.3`
--
ALTER TABLE `research5.7.3`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.7.4`
--
ALTER TABLE `research5.7.4`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.7.5`
--
ALTER TABLE `research5.7.5`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.7.6.1`
--
ALTER TABLE `research5.7.6.1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.7.6.2`
--
ALTER TABLE `research5.7.6.2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.8.1`
--
ALTER TABLE `research5.8.1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.8.2`
--
ALTER TABLE `research5.8.2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.9.1`
--
ALTER TABLE `research5.9.1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.9.2`
--
ALTER TABLE `research5.9.2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research5.9.3`
--
ALTER TABLE `research5.9.3`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research 5.9.4`
--
ALTER TABLE `research 5.9.4`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research 5.10.1`
--
ALTER TABLE `research 5.10.1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research 5.11.1`
--
ALTER TABLE `research 5.11.1`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `research5.1.1`
--
ALTER TABLE `research5.1.1`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `research5.2.1`
--
ALTER TABLE `research5.2.1`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `research5.3.1`
--
ALTER TABLE `research5.3.1`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `research5.3.2`
--
ALTER TABLE `research5.3.2`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `research5.3.3`
--
ALTER TABLE `research5.3.3`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `research5.3.4`
--
ALTER TABLE `research5.3.4`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `research5.3.5`
--
ALTER TABLE `research5.3.5`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `research5.4.1`
--
ALTER TABLE `research5.4.1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `research5.5.1`
--
ALTER TABLE `research5.5.1`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `research5.5.2`
--
ALTER TABLE `research5.5.2`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research5.5.3`
--
ALTER TABLE `research5.5.3`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `research5.6.1`
--
ALTER TABLE `research5.6.1`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research5.6.2`
--
ALTER TABLE `research5.6.2`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research5.6.3`
--
ALTER TABLE `research5.6.3`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research5.6.4`
--
ALTER TABLE `research5.6.4`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research5.6.5`
--
ALTER TABLE `research5.6.5`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research5.6.6`
--
ALTER TABLE `research5.6.6`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research5.6.7`
--
ALTER TABLE `research5.6.7`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research5.6.8`
--
ALTER TABLE `research5.6.8`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research5.6.9`
--
ALTER TABLE `research5.6.9`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research5.6.10`
--
ALTER TABLE `research5.6.10`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research5.7.1`
--
ALTER TABLE `research5.7.1`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research5.7.2`
--
ALTER TABLE `research5.7.2`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research5.7.3`
--
ALTER TABLE `research5.7.3`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research5.7.4`
--
ALTER TABLE `research5.7.4`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research5.7.5`
--
ALTER TABLE `research5.7.5`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research5.7.6.1`
--
ALTER TABLE `research5.7.6.1`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research5.7.6.2`
--
ALTER TABLE `research5.7.6.2`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research5.8.1`
--
ALTER TABLE `research5.8.1`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research5.8.2`
--
ALTER TABLE `research5.8.2`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research5.9.1`
--
ALTER TABLE `research5.9.1`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research5.9.2`
--
ALTER TABLE `research5.9.2`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research5.9.3`
--
ALTER TABLE `research5.9.3`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research 5.9.4`
--
ALTER TABLE `research 5.9.4`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research 5.10.1`
--
ALTER TABLE `research 5.10.1`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research 5.11.1`
--
ALTER TABLE `research 5.11.1`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
