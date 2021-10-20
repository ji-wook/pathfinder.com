-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 01, 2021 at 08:32 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minor_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobpost`
--

CREATE TABLE `jobpost` (
  `p_id` int(20) NOT NULL,
  `p_user_name` varchar(200) NOT NULL,
  `p_email` varchar(200) NOT NULL,
  `p_job_title` varchar(200) NOT NULL,
  `p_company` varchar(200) NOT NULL,
  `p_location` varchar(200) NOT NULL,
  `p_phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobpost`
--

INSERT INTO `jobpost` (`p_id`, `p_user_name`, `p_email`, `p_job_title`, `p_company`, `p_location`, `p_phone`) VALUES
(1, 'Mark', 'mark2@gmail.com', 'buisness development executive', 'Omega Startup ', 'MADHYA PRADESH', '9456478345'),
(2, 'Page', 'page2@gmail.com', 'buisness development executive', 'Oreva', 'MADHYA PRADESH', '7564893453');

-- --------------------------------------------------------

--
-- Table structure for table `keeper`
--

CREATE TABLE `keeper` (
  `k_id` int(30) NOT NULL,
  `k_user_name` varchar(100) NOT NULL,
  `k_email` varchar(50) NOT NULL,
  `k_password` varchar(100) NOT NULL,
  `k_confirm_pass` varchar(100) NOT NULL,
  `k_phone` varchar(20) NOT NULL,
  `k_state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keeper`
--

INSERT INTO `keeper` (`k_id`, `k_user_name`, `k_email`, `k_password`, `k_confirm_pass`, `k_phone`, `k_state`) VALUES
(24317, 'David', 'david2@gmail.com', 'david2', 'david2', '7564893453', 'Maharashtra'),
(1928601, 'James', 'james2@gmail.com', 'james2', 'james2', '6789543756', 'Delhi'),
(2246335, 'Page', 'page2@gmail.com', 'page23', 'page23', '7564893453', 'Madhya Pradesh'),
(2147483647, 'Mark', 'mark2@gmail.com', 'mark23', 'mark23', '9456478345', 'Madhya Pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `moreinfo`
--

CREATE TABLE `moreinfo` (
  `m_id` int(20) NOT NULL,
  `m_user_name` varchar(200) NOT NULL,
  `m_email` varchar(200) NOT NULL,
  `m_job_title` varchar(200) NOT NULL,
  `m_location` varchar(200) NOT NULL,
  `m_phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moreinfo`
--

INSERT INTO `moreinfo` (`m_id`, `m_user_name`, `m_email`, `m_job_title`, `m_location`, `m_phone`) VALUES
(1, 'riyen', 'riyen1@gmail.com', 'buisness development executive', 'MADHYA PRADESH', '9345678256'),
(2, 'emma', 'emma1@gmail.com', 'sales assistant', 'KARNATAKA', '8654563226'),
(3, 'tiger', 'tiger@gmail.com', 'buisness development executive', 'MADHYA PRADESH', '7564392346');

-- --------------------------------------------------------

--
-- Table structure for table `seeker`
--

CREATE TABLE `seeker` (
  `s_id` bigint(30) NOT NULL,
  `s_user_name` varchar(100) NOT NULL,
  `s_email` varchar(50) NOT NULL,
  `s_password` varchar(100) NOT NULL,
  `s_confirm_pass` varchar(100) NOT NULL,
  `s_phone` varchar(20) NOT NULL,
  `s_state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seeker`
--

INSERT INTO `seeker` (`s_id`, `s_user_name`, `s_email`, `s_password`, `s_confirm_pass`, `s_phone`, `s_state`) VALUES
(579464312, 'rutuja', 'rutuja1@gmail.com', 'rutuja1', 'rutuja1', '8954738492', 'Maharashtra'),
(746865031, 'sam', 'sam1@gmail.com', 'sam123', 'sam123', '6789436732', 'Kerala'),
(5823754470, 'vivek', 'vivek1@gmail.com', 'vivek1', 'vivek1', '5678934321', 'Delhi'),
(51691074464, 'asdfgh', 'asdfgh@gmail.com', '123456789', '123456789', '8465747392', 'Karnataka'),
(421336675462, 'roye', 'roye1@gmail.com', 'roye12', 'roye12', '8657694325', 'Madhya Pradesh'),
(770772634138, 'emma', 'emma1@gmail.com', 'emma12', 'emma12', '8654563226', 'Karnataka'),
(7904710801219, 'joy', 'joy1@gmail.com', 'joy123', 'joy123', '6789435673', 'Delhi'),
(516603171378577874, 'tiger', 'tiger@gmail.com', 'tiger1', 'tiger1', '7564392346', 'Madhya Pradesh'),
(1884099356483048906, 'adfs', 'adfs@gmail.com', 'adfs12', 'adfs12', '8564739235', 'Delhi'),
(5388522608548818001, 'amar', 'amar1@gmail.com', 'amar12', 'amar12', '7654368234', 'West Bengal'),
(9223372036854775807, 'riyen', 'riyen1@gmail.com', 'riyen1', 'riyen1', '9345678256', 'Madhya Pradesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `keeper`
--
ALTER TABLE `keeper`
  ADD PRIMARY KEY (`k_id`);

--
-- Indexes for table `moreinfo`
--
ALTER TABLE `moreinfo`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `seeker`
--
ALTER TABLE `seeker`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobpost`
--
ALTER TABLE `jobpost`
  MODIFY `p_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `keeper`
--
ALTER TABLE `keeper`
  MODIFY `k_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `moreinfo`
--
ALTER TABLE `moreinfo`
  MODIFY `m_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seeker`
--
ALTER TABLE `seeker`
  MODIFY `s_id` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9223372036854775807;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
