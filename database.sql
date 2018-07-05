-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2018 at 10:22 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `juniors`
--

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `f_id` int(11) NOT NULL,
  `f_person` varchar(255) NOT NULL,
  `f_que` varchar(5000) NOT NULL,
  `f_time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `forum_ans`
--

CREATE TABLE `forum_ans` (
  `f_id` int(11) NOT NULL,
  `f_q_id` int(11) NOT NULL,
  `f_person` varchar(255) NOT NULL,
  `f_reply` varchar(5000) NOT NULL,
  `f_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `u_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(2000) NOT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `stream` varchar(255) DEFAULT NULL,
  `ip_add` varchar(20) NOT NULL,
  `sec_que` varchar(255) NOT NULL,
  `sec_ans` varchar(255) NOT NULL,
  `u_type` varchar(255) NOT NULL DEFAULT 'student',
  `login_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`u_id`, `username`, `password`, `name`, `address`, `qualification`, `stream`, `ip_add`, `sec_que`, `sec_ans`, `u_type`, `login_time`) VALUES
(6, 'ganeshpaul999@sklm.rgukt.in', 'fa1d87bc7f85769ea9dee2e4957321ae', 'Ganesh Bhusi', 'APIIIT Nuzvid, RGUKT, Nuzvid, AP,India', 'e2', 'cse', '::1', 'loves', 'lovely bangaram', 'admin', '07/12/17 11:12:31 AM'),
(16, 'ganipaul@sklm.rgukt.in', 'fa1d87bc7f85769ea9dee2e4957321ae', 'Ganesh Paul', 'RGUIIIT Nuzvid', '', 'Web Developer', '::1', 'hallticket', '1411112422', 'employee', '23/06/18 10:06:50 PM'),
(10, 'n140113@sklm.rgukt.in', '64bb97bbba286e8145e8634c234bf52b', 'sandhya', 'bendi', 'e2', 'cse', '::1', 'hallticket', '1405136064', 'student', '23/04/18 10:04:45 AM'),
(14, 'N141414@sklm.rgukt.in', '9e3983c49d861170cac69517e5b04bb5', 'Srinu Simhadri', 'bendi', 'e2', 'ece', '::1', 'nick_name', 'srinu', 'student', '23/04/18 10:04:46 AM'),
(9, 'rgukt@sklm.rgukt.in', '7f5cf0d6e1846b8b59215c8004f85036', 'rgukts', 'sklm', 'puc', 'puc1', '::1', 'hallticket', '1412312321', 'student', '07/12/17 10:12:42 PM'),
(5, 'rguktn@sklm.rgukt.in', '60bb68d6fa03c79de4adf55eed528fba', 'Ganesh Bhusi', 'APIIIT Nuzvid, RGUKT, Nuzvid, AP', NULL, NULL, '::1', 'nick_name', 'lovely bangaram', 'student', '06/12/17 03:12:08 PM'),
(8, 'sandhyaganesh@sklm.rgukt.in', '64bb97bbba286e8145e8634c234bf52b', 'Sandhya Ganesh', 'RP', 'e2', 'cse', '::1', 'nick_name', 'pichi', 'admin', '07/12/17 03:12:25 PM'),
(15, 'shiv143@sklm.rgukt.in', '69f404925df883e0e5579d65b7768e7c', 'Shiva Thota', 'RGUIIIT Nuzvid', 'e3', 'cse', '::1', 'nick_name', 'shiv', 'student', '23/06/18 09:06:38 PM');

-- --------------------------------------------------------

--
-- Stand-in structure for view `users`
-- (See below for the actual view)
--
CREATE TABLE `users` (
`u_id` int(11)
,`username` varchar(255)
,`password` varchar(255)
,`ip_add` varchar(20)
,`u_type` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `users`
--
DROP TABLE IF EXISTS `users`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `users`  AS  select `profile`.`u_id` AS `u_id`,`profile`.`username` AS `username`,`profile`.`password` AS `password`,`profile`.`ip_add` AS `ip_add`,`profile`.`u_type` AS `u_type` from `profile` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD UNIQUE KEY `f_id` (`f_id`);

--
-- Indexes for table `forum_ans`
--
ALTER TABLE `forum_ans`
  ADD UNIQUE KEY `f_id` (`f_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `u_id` (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `forum_ans`
--
ALTER TABLE `forum_ans`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
