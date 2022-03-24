-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2022 at 09:47 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectnail`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int(10) NOT NULL,
  `slip` varchar(500) DEFAULT NULL,
  `status_id` int(2) DEFAULT NULL,
  `total_price` int(50) DEFAULT NULL,
  `paid_date` date DEFAULT NULL,
  `paid_time` time DEFAULT NULL,
  `amount_paid` varchar(50) DEFAULT NULL,
  `amount_left` varchar(50) DEFAULT NULL,
  `book_date` date DEFAULT NULL,
  `book_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `book_status` int(11) DEFAULT NULL,
  `cus_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `slip`, `status_id`, `total_price`, `paid_date`, `paid_time`, `amount_paid`, `amount_left`, `book_date`, `book_time`, `book_status`, `cus_id`) VALUES
(1, '../img/slip/slip1.jpg', 1, 199, '2021-04-27', '13:00:00', '100', '99', '2021-04-30', '2021-11-11 22:56:46', 0, 3),
(17, '../img/slip/slip1.jpg', 0, 199, '2021-04-01', '14:00:00', '100', '99', '2021-04-05', '2021-11-12 01:53:44', 1, 20),
(18, '../img/slip/slip1.jpg', 0, 199, '2021-05-13', '17:00:00', '100', '99', '2021-05-18', '2021-11-12 01:57:22', 0, 3),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-22 07:04:28', 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `book_nail_detail`
--

CREATE TABLE `book_nail_detail` (
  `bd_id` int(10) NOT NULL,
  `date_add` date NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `cus_file` varchar(500) NOT NULL,
  `cus_price` varchar(50) NOT NULL,
  `date__review` date DEFAULT NULL,
  `comment` varchar(500) NOT NULL,
  `star_level` varchar(500) NOT NULL,
  `review_picture` varchar(500) NOT NULL,
  `book_id` int(11) NOT NULL,
  `nailer_id` int(11) NOT NULL,
  `ST_ID` int(11) NOT NULL,
  `S_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book_nail_detail`
--

INSERT INTO `book_nail_detail` (`bd_id`, `date_add`, `time_start`, `time_end`, `cus_file`, `cus_price`, `date__review`, `comment`, `star_level`, `review_picture`, `book_id`, `nailer_id`, `ST_ID`, `S_ID`) VALUES
(97, '2021-11-20', '10:00:00', '12:00:00', '', '399', '2021-11-12', 'ลายเล็บสวยมากเลยค่ะ ชอบมาก ไม่ผิดหวัง', '', '../img/review/review2.png', 17, 2, 40, 6),
(101, '2021-11-18', '12:00:00', '14:00:00', '', '20', '2021-11-18', 'ช่างให้คำแนะนำดีมากค่ะ รู้สึกชอบมาก ๆ', '', '../img/review/review6.png', 19, 2, 6, 0),
(102, '2021-11-17', '12:00:00', '14:00:00', '', '399', '2021-11-17', 'ชอบลายเล็บนี้มากเลยค่ะ ช่างทำออกมาได้ดีมาก', '', '../img/review/review7.png', 19, 2, 40, 6),
(103, '2021-11-13', '12:00:00', '14:00:00', '', '20', '2021-11-13', 'งานเนี้ยบมากเลยค่ะ ต้องกลับมาใช้บริการอีกแน่นอน', '', '../img/review/review8.png', 18, 2, 1, 0),
(105, '2021-11-11', '17:00:00', '18:00:00', '', '399', '2021-11-11', 'ร้านสะอาด ปลอดภัย บริการดีมากเลยค่ะ', '', '../img/review/review9.png', 18, 2, 40, 6),
(118, '2022-01-30', '10:00:00', '12:00:00', '', '399', '2021-11-12', 'ลายเล็บสวยมากเลยค่ะ ชอบมาก ไม่ผิดหวัง', '', '../img/review/review2.png', 17, 2, 41, 7),
(158, '2021-11-20', '10:00:00', '12:00:00', '', ' 20', NULL, '', '', '', 17, 2, 2, 1),
(162, '2021-12-23', '13:00:00', '16:00:00', '', ' 20', NULL, '', '', '', 22, 1, 1, 1),
(163, '2022-01-30', '13:00:00', '16:00:00', '', ' 20', NULL, '', '', '', 22, 1, 1, 1),
(165, '2022-01-30', '00:00:00', '00:00:00', '', '399', NULL, '', '', '', 22, 0, 40, 6);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `file` varchar(500) NOT NULL,
  `typeuser_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `username`, `fname`, `lname`, `password`, `email`, `tel`, `file`, `typeuser_id`) VALUES
(1, 'admin', '', '', 'admin1234', 'admin@gmail.com', '0803455600', '', 1),
(3, 'เอแคลร์', 'พิชญาพา', 'ภูก้านก่อง', '1234', ' pkk.pischayp@kkumail.com', ' 087858388', '../img/user/acy.jpg', 2),
(9, 'นานะ', 'แจมิน', 'นา', '12345678', 'nana@gmail.com', '0888888888', '../img/user/nana.jpg', 2),
(12, 'moomin', 'เหรินจวิ้น', 'ฮวัง', '12345', 'moomin@gmail.com', '0665895447', '../img/user/moomin.jpg', 2),
(20, 'ตะนอย', 'ปัณฑิตา', 'เมนะรัตน์', '01234', 'pantita.ma@kkumail.com', '0853369574', '../img/user/js.jpg', 2),
(21, 'แพรว', 'พัฒ', 'เมือง', '789456', 'user2@gmail.com', '0859658745', '../img/user/img618da08ae65ad.png', 2),
(22, 'แจน', 'ณัฐ', 'ชาติ', '123456', 'user3@gmail.com', '0985698574', '../img/user/img618da0f1de9ff.png', 2),
(23, 'benz', 'ธนัชชา', 'เตียนพลกรัง', 'benza', 'user4@gmail.com', '0986695874', '../img/user/img618dafcb0615a.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nailer`
--

CREATE TABLE `nailer` (
  `nailer_id` int(11) NOT NULL,
  `nailer_name` varchar(50) NOT NULL,
  `fname` varchar(500) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `nailer_tel` varchar(10) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `nailer_picture` varchar(1000) NOT NULL,
  `typeuser_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nailer`
--

INSERT INTO `nailer` (`nailer_id`, `nailer_name`, `fname`, `lname`, `nailer_tel`, `username`, `password`, `nailer_picture`, `typeuser_id`) VALUES
(1, 'ช่างโบว์', 'สุภัสรา', 'สุขภิสาร', '0975836954', 'bow', 'bow1234', '../img/nailer/nailer1.png', 3),
(2, 'ช่างตุ๊ก', 'ตุ๊ก', 'สุขภิสาร', '0862330400', 'tuk', 'tuk1234', '../img/nailer/nailer2.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table `nailer_leave`
--

CREATE TABLE `nailer_leave` (
  `leave_id` int(50) NOT NULL,
  `leave_begin` date NOT NULL,
  `leave_end` date NOT NULL,
  `leave_type` text NOT NULL,
  `leave_description` varchar(1000) NOT NULL,
  `nailer_id` int(50) NOT NULL,
  `leavestatus_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nailer_leave`
--

INSERT INTO `nailer_leave` (`leave_id`, `leave_begin`, `leave_end`, `leave_type`, `leave_description`, `nailer_id`, `leavestatus_id`) VALUES
(15, '2021-11-16', '2021-11-20', 'เต็มวัน', 'ทดสอบลาทั้งวัน', 2, 1),
(16, '2021-12-04', '0000-00-00', 'ลาเช้า', 'ทดสอบลาเช้า', 2, 3),
(17, '2021-12-25', '0000-00-00', 'ลาบ่าย', 'ทดสอบลาบ่าย', 2, 3),
(18, '2022-01-13', '0000-00-00', 'ลาเช้า', '55555', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `nail_set`
--

CREATE TABLE `nail_set` (
  `ns_id` int(10) NOT NULL,
  `ns_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nail_set`
--

INSERT INTO `nail_set` (`ns_id`, `ns_name`) VALUES
(1, 'ต่อเล็บ (1 นิ้ว)'),
(2, 'เซต'),
(3, 'สปา');

-- --------------------------------------------------------

--
-- Table structure for table `nail_type`
--

CREATE TABLE `nail_type` (
  `nt_id` int(10) NOT NULL,
  `nt_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nail_type`
--

INSERT INTO `nail_type` (`nt_id`, `nt_name`) VALUES
(1, 'เล็บมือ'),
(2, 'เล็บเท้า');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_nailer`
--

CREATE TABLE `portfolio_nailer` (
  `port_id` int(11) NOT NULL,
  `port_file` varchar(100) CHARACTER SET utf8 NOT NULL,
  `nailer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_nailer`
--

INSERT INTO `portfolio_nailer` (`port_id`, `port_file`, `nailer_id`) VALUES
(1, '../img/nailer/profile/pf1_n1.png', 1),
(2, '../img/nailer/profile/pf2_n1.png', 1),
(3, '../img/nailer/profile/pf3_n1.png', 1),
(4, '../img/nailer/profile/pf4_n1.png', 1),
(5, '../img/nailer/profile/pf5_n1.png', 1),
(6, '../img/nailer/profile/pf6_n1.png', 1),
(7, '../img/nailer/profile/pf7_n1.png', 1),
(8, '../img/nailer/profile/pf8_n1.png', 1),
(9, '../img/nailer/profile/pf9_n1.png', 1),
(10, '../img/nailer/profile/pf1_n2.png', 2),
(11, '../img/nailer/profile/pf2_n2.png', 2),
(12, '../img/nailer/profile/pf3_n2.png', 2),
(13, '../img/nailer/profile/pf4_n2.png', 2),
(14, '../img/nailer/profile/pf5_n2.png', 2),
(15, '../img/nailer/profile/pf6_n2.png', 2),
(16, '../img/nailer/profile/pf7_n2.png', 2),
(17, '../img/nailer/profile/pf8_n2.png', 2),
(18, '../img/nailer/profile/pf9_n2.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `service_item`
--

CREATE TABLE `service_item` (
  `ST_ID` int(50) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `file` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `S_ID` int(11) NOT NULL,
  `nt_id` int(10) NOT NULL,
  `ns_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_item`
--

INSERT INTO `service_item` (`ST_ID`, `detail`, `file`, `price`, `name`, `S_ID`, `nt_id`, `ns_id`) VALUES
(1, 'สีขาวเบอร์ 1 ขาวนวล', '../img/1618416671.png', 20, 'สีขาว    ', 1, 1, 1),
(2, 'สีกากีโทนอ่อน', '../img/1618417593.png', 20, 'สีกากี 1', 1, 1, 1),
(3, 'สีน้ำตาลอ่อน เบอร์ 1', '../img/1618417625.png', 20, 'สีน้ำตาล (อ่อน)  ', 1, 1, 1),
(4, 'สีน้ำตาลเข้ม เบอร์ 1\r\n', '../img/1618417670.png', 20, 'สีน้ำตาล (เข้ม)', 1, 1, 1),
(5, 'สีน้ำตาลเบอร์ 3 น้ำตาลอมครีม', '../img/1618417700.png', 20, 'สีน้ำตาล 3', 1, 1, 1),
(6, 'สีกะปิโทนอ่อน เบอร์ 1', '../img/1618418922.png', 20, 'สีกะปิ', 1, 1, 1),
(7, 'P007  ', '../img/1618418998.png', 20, '', 1, 1, 1),
(8, 'P008  ', '../img/1618427858.png', 20, '', 1, 1, 1),
(9, 'P009   ', '../img/1618427889.png', 20, '', 1, 1, 1),
(31, 'P010  ', '../img/1619282517.png', 20, '', 2, 1, 1),
(32, 'P011 ', '../img/1619289352.png', 20, '', 3, 1, 1),
(36, 'P013  ', '../img/1619382787.png', 20, '', 4, 1, 1),
(37, 'P012', '../img/1619385823.png', 20, '', 5, 1, 1),
(40, 'การทำสปามือเล็บ นอกจากจะช่วยผลัดเซลล์ผิวเก่าออกไปแล้ว ผิวดูสว่างใสมากขึ้น ', '../img/icon/spa1.png', 399, 'สปามือ', 6, 1, 3),
(41, 'การทำสปามือเท้า ให้ความรู้สึกผ่อนคลาย ช่วยลดอาการกล้ามเนื้อล็อค ช่วยให้บริเวณฝ่ามือและเท้ามีความชุ่ม', '../img/icon/spa2.png', 399, 'สปาเท้า', 7, 2, 3),
(42, 'สีเขียวนู้ดอ่อนๆ ทำให้ผิวดูขาว', '../img/nail/img618dc5d00a2b5.png', 20, 'สีเขียวนู้ด', 1, 1, 1),
(43, '55555555555555', '../img/nail/img618dffccb06e9.png', 129, 'น่ารัก', 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `service_type`
--

CREATE TABLE `service_type` (
  `S_ID` int(11) NOT NULL,
  `S_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_type`
--

INSERT INTO `service_type` (`S_ID`, `S_name`) VALUES
(1, 'สีพื้น'),
(2, 'เพ้นท์'),
(3, 'กลิตเตอร์'),
(4, 'สติกเกอร์'),
(5, 'ลูกแก้ว'),
(6, 'สปามือ'),
(7, 'สปาเท้า');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `time`) VALUES
(1, '10:00-11:00,15:00-16:00,17:00-18:00,08:00-09:00');

-- --------------------------------------------------------

--
-- Table structure for table `type_leave`
--

CREATE TABLE `type_leave` (
  `leavestatus_id` int(11) NOT NULL,
  `leave_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type_leave`
--

INSERT INTO `type_leave` (`leavestatus_id`, `leave_status`) VALUES
(1, 'อนุมัติ'),
(2, 'ไม่อนุมัติ'),
(3, 'รอการอนุมัติ');

-- --------------------------------------------------------

--
-- Table structure for table `type_status`
--

CREATE TABLE `type_status` (
  `status_id` int(2) NOT NULL,
  `status_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type_status`
--

INSERT INTO `type_status` (`status_id`, `status_name`) VALUES
(0, 'non'),
(1, 'confirm');

-- --------------------------------------------------------

--
-- Table structure for table `type_user`
--

CREATE TABLE `type_user` (
  `typeuser_id` int(50) NOT NULL,
  `typeuser_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type_user`
--

INSERT INTO `type_user` (`typeuser_id`, `typeuser_name`) VALUES
(1, 'admin'),
(2, 'customer'),
(3, 'nailer');

-- --------------------------------------------------------

--
-- Table structure for table `vacation_day`
--

CREATE TABLE `vacation_day` (
  `vacation_id` int(11) NOT NULL,
  `vacation_date` date NOT NULL,
  `vacation_detail` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `nailer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `book_nail_detail`
--
ALTER TABLE `book_nail_detail`
  ADD PRIMARY KEY (`bd_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `nailer`
--
ALTER TABLE `nailer`
  ADD PRIMARY KEY (`nailer_id`);

--
-- Indexes for table `nailer_leave`
--
ALTER TABLE `nailer_leave`
  ADD PRIMARY KEY (`leave_id`);

--
-- Indexes for table `nail_set`
--
ALTER TABLE `nail_set`
  ADD PRIMARY KEY (`ns_id`);

--
-- Indexes for table `nail_type`
--
ALTER TABLE `nail_type`
  ADD PRIMARY KEY (`nt_id`);

--
-- Indexes for table `portfolio_nailer`
--
ALTER TABLE `portfolio_nailer`
  ADD PRIMARY KEY (`port_id`);

--
-- Indexes for table `service_item`
--
ALTER TABLE `service_item`
  ADD PRIMARY KEY (`ST_ID`);

--
-- Indexes for table `service_type`
--
ALTER TABLE `service_type`
  ADD PRIMARY KEY (`S_ID`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_status`
--
ALTER TABLE `type_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `type_user`
--
ALTER TABLE `type_user`
  ADD PRIMARY KEY (`typeuser_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `book_nail_detail`
--
ALTER TABLE `book_nail_detail`
  MODIFY `bd_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `nailer`
--
ALTER TABLE `nailer`
  MODIFY `nailer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nailer_leave`
--
ALTER TABLE `nailer_leave`
  MODIFY `leave_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `nail_set`
--
ALTER TABLE `nail_set`
  MODIFY `ns_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nail_type`
--
ALTER TABLE `nail_type`
  MODIFY `nt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portfolio_nailer`
--
ALTER TABLE `portfolio_nailer`
  MODIFY `port_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `service_item`
--
ALTER TABLE `service_item`
  MODIFY `ST_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `service_type`
--
ALTER TABLE `service_type`
  MODIFY `S_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `type_status`
--
ALTER TABLE `type_status`
  MODIFY `status_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `type_user`
--
ALTER TABLE `type_user`
  MODIFY `typeuser_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
