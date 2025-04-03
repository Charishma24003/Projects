-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2024 at 05:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `temple`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbnatya`
--

CREATE TABLE `addbnatya` (
  `id` int(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `clsname` varchar(50) NOT NULL,
  `insname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `mcharge` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addbnatya`
--

INSERT INTO `addbnatya` (`id`, `image`, `clsname`, `insname`, `email`, `time`, `mcharge`) VALUES
(2, 'bharathnatya.jpg', 'Sri Shivamrutha Natyalaya', 'Ms. Sudharani Iyer', 'sudhaiyer@gmail.com', '02.00 pm to 04.00 pm (Every  Sunday)', 'Rs.500');

-- --------------------------------------------------------

--
-- Table structure for table `addcamp`
--

CREATE TABLE `addcamp` (
  `id` int(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addcamp`
--

INSERT INTO `addcamp` (`id`, `image`, `cname`, `date`, `time`) VALUES
(2, 'img20.jpg', 'Health Checkup', '2024-02-13', '1.30pm'),
(3, 'bloodcamp.jpg', 'Blood Donation', '2024-10-24', '1;00pm');

-- --------------------------------------------------------

--
-- Table structure for table `addhall`
--

CREATE TABLE `addhall` (
  `id` int(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `hallname` varchar(50) NOT NULL,
  `capacity` varchar(50) NOT NULL,
  `charge` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `description` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addhall`
--

INSERT INTO `addhall` (`id`, `image`, `hallname`, `capacity`, `charge`, `amount`, `description`) VALUES
(4, 'img2.jpg', 'Rajathadri', '800', '25000', '10000', 'Absolute Beauty!!!!');

-- --------------------------------------------------------

--
-- Table structure for table `addrules`
--

CREATE TABLE `addrules` (
  `id` int(20) NOT NULL,
  `rules` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addrules`
--

INSERT INTO `addrules` (`id`, `rules`) VALUES
(2, 'Cleanliness of the temple surroundings should be maintained.'),
(3, 'Umbrella, Sticks, Materials made of animal skin should not be brought inside the'),
(4, 'Devotees should maintain discipline and follow the rules of Vaidhika Dharma.'),
(5, 'Female devotees should not enter the temple when pregnant after sixth month or l'),
(6, 'Female devotees should not enter the temple for the first 5 days of their menstr'),
(7, 'Using mobile phones inside the temple is strictly prohibited.');

-- --------------------------------------------------------

--
-- Table structure for table `addseva`
--

CREATE TABLE `addseva` (
  `id` int(20) NOT NULL,
  `sevaname` varchar(50) NOT NULL,
  `sevaprice` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addseva`
--

INSERT INTO `addseva` (`id`, `sevaname`, `sevaprice`) VALUES
(11, 'Pradosha Pooja', '250'),
(12, 'Rudrabishekha', '100'),
(14, 'Bilva Patra Archana', '400'),
(16, 'Lingarchana', '150'),
(17, 'Shiva Sahasranama Archana', '350'),
(18, 'Maha Mrityunjayamantra Japa', '350'),
(19, 'Shiva Aarthi', '150'),
(20, 'Maha Shivarathri Pooja', '600');

-- --------------------------------------------------------

--
-- Table structure for table `addspecialday`
--

CREATE TABLE `addspecialday` (
  `id` int(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `festday` varchar(50) NOT NULL,
  `specialseva` varchar(50) NOT NULL,
  `festdate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addspecialday`
--

INSERT INTO `addspecialday` (`id`, `date`, `festday`, `specialseva`, `festdate`) VALUES
(1, '2023-02-12', 'Navarathri', 'Kumkumarchana', '2023-12-23'),
(2, '2023-12-20', 'Krishna Janmashtami', 'Pushpa Archana', '2023-12-11'),
(3, '2024-06-23', 'Ganesh Chaturthi', 'Ganesh Pooja', '2024-06-29'),
(4, '2023-12-12', 'Ram Navami', 'Ram Archana Pooja', '2023-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `addvworks`
--

CREATE TABLE `addvworks` (
  `id` int(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `vname` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addvworks`
--

INSERT INTO `addvworks` (`id`, `image`, `vname`, `date`, `time`) VALUES
(1, 'img30.jpg', 'ANNADANA', '2023-11-23', '12:45'),
(2, 'img81.jpg', 'Prasada Preparation', '2023-02-24', '10:00');

-- --------------------------------------------------------

--
-- Table structure for table `addyaksha`
--

CREATE TABLE `addyaksha` (
  `id` int(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `clsname` varchar(50) NOT NULL,
  `insname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `mcharge` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addyaksha`
--

INSERT INTO `addyaksha` (`id`, `image`, `clsname`, `insname`, `email`, `time`, `mcharge`) VALUES
(2, 'img35.jpg', ' Sri Amrutheshwara Yakshagana Mandala', 'Mr.Manjunath Rao', 'manjunath@gmail.com', '10.00 am to 12.30 pm (Every Sunday)', 'Rs.450');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'amrutheshwara@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `bkbnatya`
--

CREATE TABLE `bkbnatya` (
  `id` int(20) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `image` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `uaddress` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bkbnatya`
--

INSERT INTO `bkbnatya` (`id`, `sname`, `pname`, `image`, `email`, `phone`, `uaddress`, `date`) VALUES
(1, 'Shreya', 'Shivakumar', 'img9.jpg', 'shreya@gmail.com', '9525584566333', 'wqdqq', '2023-12-29');

-- --------------------------------------------------------

--
-- Table structure for table `bkcamp`
--

CREATE TABLE `bkcamp` (
  `id` int(20) NOT NULL,
  `campnm` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `uaddress` varchar(50) NOT NULL,
  `evdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bkcamp`
--

INSERT INTO `bkcamp` (`id`, `campnm`, `uname`, `email`, `phone`, `uaddress`, `evdate`) VALUES
(1, 'blood', 'Santhosh', 'santhosh@gmail.com', '9525584566333', 'vdfvf', '2023-12-29'),
(2, 'blood', 'Khushi', 'khushi21@gmail.com', '954863215789', 'dgf', '2023-12-26');

-- --------------------------------------------------------

--
-- Table structure for table `bkhall`
--

CREATE TABLE `bkhall` (
  `id` int(20) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `uaddress` varchar(50) NOT NULL,
  `evdate` date NOT NULL,
  `evname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bkhall`
--

INSERT INTO `bkhall` (`id`, `uname`, `email`, `phone`, `uaddress`, `evdate`, `evname`) VALUES
(1, '', '', '', '', '0000-00-00', ''),
(2, 'Khushi', 'khushi21@gmail.com', '954863215789', 'fsdsd', '2023-12-14', 'Wedding'),
(3, 'Joohi', 'joohi@gmail.com', '9525584566333', 'vdfvdfv', '2023-12-30', 'Wedding');

-- --------------------------------------------------------

--
-- Table structure for table `bkharake`
--

CREATE TABLE `bkharake` (
  `id` int(20) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `harake` varchar(50) NOT NULL,
  `rharake` varchar(80) NOT NULL,
  `hdate` date NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bkharake`
--

INSERT INTO `bkharake` (`id`, `uname`, `email`, `phone`, `harake`, `rharake`, `hdate`, `date`) VALUES
(1, 'Khushi', 'khushi21@gmail.com', '89546236985', 'Annadana', 'sdsd', '2023-12-22', '2023-12-17');

-- --------------------------------------------------------

--
-- Table structure for table `bksday`
--

CREATE TABLE `bksday` (
  `id` int(20) NOT NULL,
  `bno` varchar(20) NOT NULL,
  `festday` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bksday`
--

INSERT INTO `bksday` (`id`, `bno`, `festday`, `email`, `bdate`, `status`) VALUES
(8, 'BKS08', '2', 'chirag24@gmail.com', '2023-12-30 05:49:56', 'Accepted'),
(9, 'BKS09', '1', 'chirag24@gmail.com', '2023-12-30 05:51:04', 'Rejected'),
(10, 'BKS10', '3', 'chirag24@gmail.com', '2023-12-30 05:49:44', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `bkseva`
--

CREATE TABLE `bkseva` (
  `id` int(20) NOT NULL,
  `bno` varchar(20) NOT NULL,
  `sevaname` varchar(50) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bkseva`
--

INSERT INTO `bkseva` (`id`, `bno`, `sevaname`, `quantity`, `email`, `bdate`, `status`) VALUES
(1, 'BK01', '12', '3', 'charismachari45678@gmail.com', '2023-12-29 06:59:48', 'Accepted'),
(2, 'BK02', '12', '3', 'charismachari45678@gmail.com', '2023-12-29 06:59:19', 'Rejected'),
(3, 'BK03', '14', '2', 'charismachari45678@gmail.com', '2023-12-29 06:35:59', 'Pending'),
(4, 'BK04', '11', '2', 'charismachari45678@gmail.com', '2023-12-29 07:13:07', 'Accepted'),
(5, 'BK05', '11', '1', 'charismachari45678@gmail.com', '2023-12-29 07:15:09', 'Accepted'),
(6, 'BK06', '12', '1', 'charismachari45678@gmail.com', '2023-12-29 07:17:01', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `bkvworks`
--

CREATE TABLE `bkvworks` (
  `id` int(20) NOT NULL,
  `campnm` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `uaddress` varchar(50) NOT NULL,
  `evdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bkvworks`
--

INSERT INTO `bkvworks` (`id`, `campnm`, `uname`, `email`, `phone`, `uaddress`, `evdate`) VALUES
(1, 'blood', 'Nihal', 'nihal@gmail.com', '89546236985', 'gfgf', '2023-12-28'),
(2, 'blood', 'Santhosh', 'santhosh@gmail.com', '89546236985', 'dgfdfd', '2023-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `bkyaksha`
--

CREATE TABLE `bkyaksha` (
  `id` int(20) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `uaddress` varchar(80) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bkyaksha`
--

INSERT INTO `bkyaksha` (`id`, `sname`, `pname`, `image`, `email`, `phone`, `uaddress`, `date`) VALUES
(1, 'Shreya', 'Shivakumar', 'img23.jpg', 'shreya@gmail.com', '9525584566333', 'asdfdfdsdf', '2023-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(20) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`) VALUES
(5, 'img1.jpg'),
(6, 'img6.jpg'),
(14, 'img5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `contact`, `email`, `password`) VALUES
(1, 'charishma', '4785963214', 'charismachari45678@gmail.com', '12345'),
(2, 'Chirag', '4785963266666', 'chirag24@gmail.com', '333');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbnatya`
--
ALTER TABLE `addbnatya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addcamp`
--
ALTER TABLE `addcamp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addhall`
--
ALTER TABLE `addhall`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addrules`
--
ALTER TABLE `addrules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addseva`
--
ALTER TABLE `addseva`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addspecialday`
--
ALTER TABLE `addspecialday`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addvworks`
--
ALTER TABLE `addvworks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addyaksha`
--
ALTER TABLE `addyaksha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bkbnatya`
--
ALTER TABLE `bkbnatya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bkcamp`
--
ALTER TABLE `bkcamp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bkhall`
--
ALTER TABLE `bkhall`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bkharake`
--
ALTER TABLE `bkharake`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bksday`
--
ALTER TABLE `bksday`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bkseva`
--
ALTER TABLE `bkseva`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bkvworks`
--
ALTER TABLE `bkvworks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bkyaksha`
--
ALTER TABLE `bkyaksha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addbnatya`
--
ALTER TABLE `addbnatya`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `addcamp`
--
ALTER TABLE `addcamp`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `addhall`
--
ALTER TABLE `addhall`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `addrules`
--
ALTER TABLE `addrules`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `addseva`
--
ALTER TABLE `addseva`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `addspecialday`
--
ALTER TABLE `addspecialday`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `addvworks`
--
ALTER TABLE `addvworks`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `addyaksha`
--
ALTER TABLE `addyaksha`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bkbnatya`
--
ALTER TABLE `bkbnatya`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bkcamp`
--
ALTER TABLE `bkcamp`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bkhall`
--
ALTER TABLE `bkhall`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bkharake`
--
ALTER TABLE `bkharake`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bksday`
--
ALTER TABLE `bksday`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bkseva`
--
ALTER TABLE `bkseva`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bkvworks`
--
ALTER TABLE `bkvworks`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bkyaksha`
--
ALTER TABLE `bkyaksha`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
