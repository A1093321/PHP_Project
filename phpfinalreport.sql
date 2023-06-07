-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 04:40 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpfinalreport`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_number` int(11) NOT NULL,
  `class_name` longtext NOT NULL,
  `class_day` int(11) NOT NULL,
  `startTime` int(11) NOT NULL COMMENT '開始時間',
  `endTime` int(11) NOT NULL COMMENT '結束時間',
  `class_teacher` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `class_max` int(11) NOT NULL COMMENT '選課最大人數',
  `class_type` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `class_content` varchar(100) NOT NULL,
  `class_video` varchar(100) NOT NULL,
  `teacher_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_number`, `class_name`, `class_day`, `startTime`, `endTime`, `class_teacher`, `class_max`, `class_type`, `class_content`, `class_video`, `teacher_id`) VALUES
(0, '網頁程式設計', 4, 2, 4, '丁一賢', 50, '必修', '', '', ''),
(5, '電子商務', 4, 5, 7, '林杏子', 50, '必修', '', '', 'b1093310'),
(10, '阿', 1, 1, 1, '', 10, '', '', '', 'b1093310'),
(12, 'OOP(I)', 5, 5, 8, '帥哥', 70, '必修', '歐歐批', '', 'b1093310'),
(13, 'OOP(II)', 5, 5, 8, '帥哥', 70, '必修', '歐歐批2', '', 'b1093310'),
(16, 'DBMS', 3, 5, 6, '帥哥', 70, '必修', 'ERmodel', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', 'b1093310'),
(17, '微積分', 4, 5, 7, '美女', 1, '必修', '算到爆', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', 'b1093310'),
(18, '統計學(I)', 2, 5, 7, '吳老師', 1, '必修', 'business statistics', 'https://www.youtube.com/watch?v=uB8L5eCKrFg&list=PLP1Ynr8cs97uUwxOJ4VD_Z3-NwzElPBdN&ab_channel=CUSTC', 'b1093321'),
(19, '統計學(II)', 1, 5, 7, '吳老師', 10, '必修', 'business statistics', 'https://www.youtube.com/watch?v=uB8L5eCKrFg&list=PLP1Ynr8cs97uUwxOJ4VD_Z3-NwzElPBdN&ab_channel=CUSTC', 'b1093321'),
(20, 'Python', 2, 2, 4, '帥哥', 70, '選修', '報告', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', 'b1093310'),
(21, '網路規劃管理', 2, 7, 8, '趙老師', 30, '選修', 'chapter 1 網路基本運作認識 chapter 2 網路模型運作、ICMP 與 ARP 協定 ', 'https://www.youtube.com/watch?v=u0HJ-ERBmk4&ab_channel=%23%E7%B2%98%E6%B7%BB%E5%A3%BD', 'b1093321'),
(24, '看比賽', 2, 1, 8, '寸頭胖子', 200, '必修', 'ya', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', 'b1093310');

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

CREATE TABLE `enroll` (
  `user` char(10) NOT NULL,
  `selected_course` int(11) NOT NULL,
  `comments` varchar(30) NOT NULL,
  `rating` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enroll`
--

INSERT INTO `enroll` (`user`, `selected_course`, `comments`, `rating`) VALUES
('a1093310', 0, '', 0),
('a1093310', 12, '好難喔', 5),
('a1093310', 16, '', 0),
('a1093310', 17, '', 0),
('a1093310', 24, '', 0),
('a1093321', 5, '3', 3);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `userId` char(10) NOT NULL,
  `courseId` int(10) NOT NULL,
  `success` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`userId`, `courseId`, `success`) VALUES
('a1093310', 5, '成功'),
('a1093310', 8, '失敗'),
('a1093310', 8, '失敗'),
('a1093310', 3, '失敗'),
('a1093321', 3, '失敗'),
('a1093321', 6, '失敗'),
('a1093321', 5, '失敗'),
('a1093321', 5, '失敗'),
('a1093321', 3, '失敗'),
('a1093301', 2, '成功'),
('a1093301', 8, '失敗'),
('a1093301', 8, '成功'),
('a1093301', 2, '失敗'),
('a1093301', 2, '失敗'),
('a1093301', 2, '失敗'),
('a1093321', 2, '失敗'),
('a1093321', 8, '失敗'),
('a1093321', 2, '失敗'),
('a1093321', 8, '失敗'),
('a1093321', 2, '失敗'),
('a1093321', 2, '失敗'),
('a1093321', 2, '成功'),
('a1093301', 2, '成功'),
('a1093301', 2, '失敗'),
('a1093301', 8, '成功'),
('a1093301', 2, '失敗'),
('a1093310', 6, '失敗'),
('a1093310', 4, '失敗'),
('a1093310', 6, '失敗'),
('a1093310', 3, '成功'),
('a1093310', 5, '失敗'),
('a1093310', 0, '成功'),
('a1093310', 2, '失敗'),
('a1093310', 8, '失敗'),
('a1093321', 3, '成功'),
('a1093321', 3, '成功'),
('a1093321', 3, '成功'),
('a1093321', 2, '失敗'),
('a1093321', 8, '失敗'),
('a1093321', 3, '成功'),
('a1093321', 3, '成功'),
('a1093321', 3, '成功'),
('a1093310', 3, '失敗'),
('a1093321', 6, '失敗'),
('a1093301', 0, '成功'),
('a1093301', 6, '成功'),
('', 0, '成功'),
('', 0, '成功'),
('a1093310', 10, '成功'),
('a1093321', 10, '成功'),
('a1093321', 10, '失敗'),
('a1093321', 0, '成功'),
('a1093321', 5, '成功'),
('a1093321', 5, '失敗'),
('a1093310', 5, '成功'),
('a1093310', 11, '成功'),
('a1093310', 12, '成功'),
('a1093321', 15, '成功'),
('a1093321', 15, '失敗'),
('a1093310', 12, '失敗'),
('a1093321', 5, '失敗'),
('a1093321', 10, '成功'),
('a1093310', 17, '失敗'),
('a1093310', 17, '成功'),
('a1093301', 17, '失敗'),
('a1093310', 11, '成功'),
('a1093310', 5, '失敗'),
('a1093310', 12, '成功'),
('a1093310', 13, '失敗'),
('a1093310', 17, '失敗'),
('a1093321', 10, '成功'),
('a1093310', 17, '成功'),
('a1093310', 11, '成功'),
('a1093310', 12, '成功'),
('a1093310', 13, '失敗'),
('a1093310', 17, '成功'),
('a1093309', 17, '失敗'),
('a1093310', 16, '成功'),
('a1093310', 0, '成功'),
('a1093310', 24, '成功');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `usr_account` char(10) NOT NULL,
  `usr_role` tinyint(1) NOT NULL COMMENT '教師0/學生1',
  `usr_passwd` longtext NOT NULL,
  `usr_email` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`usr_account`, `usr_role`, `usr_passwd`, `usr_email`) VALUES
('a1093301', 1, 'a1093301', 'a1093301@mail.nuk.edu.tw'),
('a1093302', 1, 'a1093302', 'a1093302@mail.nuk.edu.tw'),
('a1093303', 1, 'a1093303', 'a1093303@mail.nuk.edu.tw'),
('a1093304', 1, 'a1093304', 'a1093304@mail.nuk.edu.tw'),
('a1093305', 1, 'a1093305\r\n', 'a1093305@.mail.nuk.edu.tw'),
('a1093306', 1, 'a1093306', 'a1093306@.mail.nuk.edu.tw'),
('a1093307', 1, 'a1093307', 'a1093307@.mail.nuk.edu.tw'),
('a1093308', 1, 'a1093308', 'a1093308@.mail.nuk.edu.tw'),
('a1093309', 1, 'a1093309', 'a1093309@.mail.nuk.edu.tw'),
('a1093310', 1, '123', 'a1093310@mail.nuk.edu.tw'),
('a1093321', 1, '1234567', 'a1093321@mail.nuk.edu.tw'),
('b1093310', 0, '123', 'a1093310@mail.nuk.edu.tw'),
('b1093321', 0, 'b1093321', 'a1093321@.mail.nuk.edu.tw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_number`);

--
-- Indexes for table `enroll`
--
ALTER TABLE `enroll`
  ADD PRIMARY KEY (`user`,`selected_course`),
  ADD KEY `selected_course` (`selected_course`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`usr_account`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enroll`
--
ALTER TABLE `enroll`
  ADD CONSTRAINT `enroll_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`usr_account`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `enroll_ibfk_2` FOREIGN KEY (`selected_course`) REFERENCES `class` (`class_number`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
