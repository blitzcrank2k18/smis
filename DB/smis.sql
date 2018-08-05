-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2018 at 05:06 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smis`
--

-- --------------------------------------------------------

--
-- Table structure for table `mr_and_ms`
--

CREATE TABLE `mr_and_ms` (
  `id` int(12) NOT NULL,
  `sss_id` int(12) NOT NULL,
  `sy_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mr_and_ms`
--

INSERT INTO `mr_and_ms` (`id`, `sss_id`, `sy_id`) VALUES
(1, 19, 4),
(2, 21, 4);

-- --------------------------------------------------------

--
-- Table structure for table `promoted_students`
--

CREATE TABLE `promoted_students` (
  `promoted_id` int(11) NOT NULL,
  `sss_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promoted_students`
--

INSERT INTO `promoted_students` (`promoted_id`, `sss_id`) VALUES
(5, 17),
(6, 20),
(7, 18);

-- --------------------------------------------------------

--
-- Table structure for table `school_year`
--

CREATE TABLE `school_year` (
  `sy_id` int(10) NOT NULL,
  `sy` varchar(10) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_year`
--

INSERT INTO `school_year` (`sy_id`, `sy`, `status`) VALUES
(1, '2015-2016', 2),
(2, '2016-2017', 2),
(3, '2017-2018', 2),
(4, '2014-2015', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_attendance`
--

CREATE TABLE `student_attendance` (
  `att_id` int(12) NOT NULL,
  `sss_id` int(12) NOT NULL,
  `month` text NOT NULL,
  `days_classes` int(2) NOT NULL,
  `days_present` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_attendance`
--

INSERT INTO `student_attendance` (`att_id`, `sss_id`, `month`, `days_classes`, `days_present`) VALUES
(1, 3, 'June', 0, 0),
(2, 3, 'July', 0, 0),
(3, 3, 'August', 0, 0),
(4, 3, 'September', 0, 0),
(5, 3, 'October', 0, 0),
(6, 3, 'November', 0, 0),
(7, 3, 'December', 0, 0),
(8, 3, 'January', 0, 0),
(9, 3, 'Febuary', 0, 0),
(10, 3, 'March', 0, 0),
(11, 3, 'April', 0, 0),
(12, 3, 'May', 0, 0),
(13, 4, 'June', 0, 0),
(14, 4, 'July', 0, 0),
(15, 4, 'August', 0, 0),
(16, 4, 'September', 0, 0),
(17, 4, 'October', 0, 0),
(18, 4, 'November', 0, 0),
(19, 4, 'December', 0, 0),
(20, 4, 'January', 0, 0),
(21, 4, 'Febuary', 0, 0),
(22, 4, 'March', 0, 0),
(23, 4, 'April', 0, 0),
(24, 4, 'May', 0, 0),
(25, 5, 'June', 0, 0),
(26, 5, 'July', 0, 0),
(27, 5, 'August', 0, 0),
(28, 5, 'September', 0, 0),
(29, 5, 'October', 0, 0),
(30, 5, 'November', 0, 0),
(31, 5, 'December', 0, 0),
(32, 5, 'January', 0, 0),
(33, 5, 'Febuary', 0, 0),
(34, 5, 'March', 0, 0),
(35, 5, 'April', 0, 0),
(36, 5, 'May', 0, 0),
(37, 6, 'June', 0, 0),
(38, 6, 'July', 0, 0),
(39, 6, 'August', 0, 0),
(40, 6, 'September', 0, 0),
(41, 6, 'October', 0, 0),
(42, 6, 'November', 0, 0),
(43, 6, 'December', 0, 0),
(44, 6, 'January', 0, 0),
(45, 6, 'Febuary', 0, 0),
(46, 6, 'March', 0, 0),
(47, 6, 'April', 0, 0),
(48, 6, 'May', 0, 0),
(49, 7, 'June', 0, 0),
(50, 7, 'July', 0, 0),
(51, 7, 'August', 0, 0),
(52, 7, 'September', 0, 0),
(53, 7, 'October', 0, 0),
(54, 7, 'November', 0, 0),
(55, 7, 'December', 0, 0),
(56, 7, 'January', 0, 0),
(57, 7, 'Febuary', 0, 0),
(58, 7, 'March', 0, 0),
(59, 7, 'April', 0, 0),
(60, 7, 'May', 0, 0),
(61, 8, 'June', 0, 0),
(62, 8, 'July', 0, 0),
(63, 8, 'August', 0, 0),
(64, 8, 'September', 0, 0),
(65, 8, 'October', 0, 0),
(66, 8, 'November', 0, 0),
(67, 8, 'December', 0, 0),
(68, 8, 'January', 0, 0),
(69, 8, 'Febuary', 0, 0),
(70, 8, 'March', 0, 0),
(71, 8, 'April', 0, 0),
(72, 8, 'May', 0, 0),
(73, 9, 'June', 0, 0),
(74, 9, 'July', 0, 0),
(75, 9, 'August', 0, 0),
(76, 9, 'September', 0, 0),
(77, 9, 'October', 0, 0),
(78, 9, 'November', 0, 0),
(79, 9, 'December', 0, 0),
(80, 9, 'January', 0, 0),
(81, 9, 'Febuary', 0, 0),
(82, 9, 'March', 0, 0),
(83, 9, 'April', 0, 0),
(84, 9, 'May', 0, 0),
(85, 10, 'June', 0, 0),
(86, 10, 'July', 0, 0),
(87, 11, 'June', 0, 0),
(88, 10, 'August', 0, 0),
(89, 11, 'July', 0, 0),
(90, 10, 'September', 0, 0),
(91, 11, 'August', 0, 0),
(92, 10, 'October', 0, 0),
(93, 11, 'September', 0, 0),
(94, 10, 'November', 0, 0),
(95, 12, 'June', 0, 0),
(96, 11, 'October', 0, 0),
(97, 10, 'December', 0, 0),
(98, 12, 'July', 0, 0),
(99, 11, 'November', 0, 0),
(100, 12, 'August', 0, 0),
(101, 10, 'January', 0, 0),
(102, 11, 'December', 0, 0),
(103, 10, 'Febuary', 0, 0),
(104, 13, 'June', 0, 0),
(105, 12, 'September', 0, 0),
(106, 11, 'January', 0, 0),
(107, 10, 'March', 0, 0),
(108, 12, 'October', 0, 0),
(109, 10, 'April', 0, 0),
(110, 11, 'Febuary', 0, 0),
(111, 13, 'July', 0, 0),
(112, 12, 'November', 0, 0),
(113, 11, 'March', 0, 0),
(114, 10, 'May', 0, 0),
(115, 13, 'August', 0, 0),
(116, 12, 'December', 0, 0),
(117, 11, 'April', 0, 0),
(118, 12, 'January', 0, 0),
(119, 13, 'September', 0, 0),
(120, 11, 'May', 0, 0),
(121, 12, 'Febuary', 0, 0),
(122, 13, 'October', 0, 0),
(123, 12, 'March', 0, 0),
(124, 13, 'November', 0, 0),
(125, 12, 'April', 0, 0),
(126, 13, 'December', 0, 0),
(127, 12, 'May', 0, 0),
(128, 13, 'January', 0, 0),
(129, 13, 'Febuary', 0, 0),
(130, 13, 'March', 0, 0),
(131, 13, 'April', 0, 0),
(132, 13, 'May', 0, 0),
(133, 14, 'June', 0, 0),
(134, 14, 'July', 0, 0),
(135, 14, 'August', 0, 0),
(136, 14, 'September', 0, 0),
(137, 14, 'October', 0, 0),
(138, 14, 'November', 0, 0),
(139, 14, 'December', 0, 0),
(140, 14, 'January', 0, 0),
(141, 14, 'Febuary', 0, 0),
(142, 14, 'March', 0, 0),
(143, 14, 'April', 0, 0),
(144, 14, 'May', 0, 0),
(145, 15, 'June', 0, 0),
(146, 15, 'July', 0, 0),
(147, 15, 'August', 0, 0),
(148, 15, 'September', 0, 0),
(149, 15, 'October', 0, 0),
(150, 15, 'November', 0, 0),
(151, 15, 'December', 0, 0),
(152, 15, 'January', 0, 0),
(153, 15, 'Febuary', 0, 0),
(154, 15, 'March', 0, 0),
(155, 15, 'April', 0, 0),
(156, 15, 'May', 0, 0),
(157, 16, 'June', 0, 0),
(158, 16, 'July', 0, 0),
(159, 16, 'August', 0, 0),
(160, 16, 'September', 0, 0),
(161, 16, 'October', 0, 0),
(162, 16, 'November', 0, 0),
(163, 16, 'December', 0, 0),
(164, 16, 'January', 0, 0),
(165, 16, 'Febuary', 0, 0),
(166, 16, 'March', 0, 0),
(167, 16, 'April', 0, 0),
(168, 16, 'May', 0, 0),
(169, 17, 'June', 0, 0),
(170, 17, 'July', 0, 0),
(171, 17, 'August', 0, 0),
(172, 17, 'September', 0, 0),
(173, 17, 'October', 0, 0),
(174, 17, 'November', 0, 0),
(175, 17, 'December', 0, 0),
(176, 17, 'January', 0, 0),
(177, 17, 'Febuary', 0, 0),
(178, 17, 'March', 0, 0),
(179, 17, 'April', 0, 0),
(180, 17, 'May', 0, 0),
(181, 18, 'June', 0, 0),
(182, 18, 'July', 0, 0),
(183, 18, 'August', 0, 0),
(184, 18, 'September', 0, 0),
(185, 18, 'October', 0, 0),
(186, 18, 'November', 0, 0),
(187, 18, 'December', 0, 0),
(188, 18, 'January', 0, 0),
(189, 18, 'Febuary', 0, 0),
(190, 18, 'March', 0, 0),
(191, 18, 'April', 0, 0),
(192, 18, 'May', 0, 0),
(193, 19, 'June', 1, 10),
(194, 19, 'July', 1, 10),
(195, 19, 'August', 1, 10),
(196, 19, 'September', 1, 10),
(197, 19, 'October', 0, 0),
(198, 19, 'November', 0, 0),
(199, 19, 'December', 0, 0),
(200, 19, 'January', 0, 0),
(201, 19, 'February', 0, 0),
(202, 19, 'March', 0, 0),
(203, 19, 'April', 0, 0),
(204, 19, 'May', 0, 0),
(205, 20, 'June', 1, 20),
(206, 20, 'July', 1, 20),
(207, 20, 'August', 1, 20),
(208, 20, 'September', 1, 20),
(209, 20, 'October', 1, 20),
(210, 20, 'November', 1, 20),
(211, 20, 'December', 1, 20),
(212, 20, 'January', 1, 20),
(213, 20, 'February', 0, 0),
(214, 20, 'March', 0, 0),
(215, 20, 'April', 0, 0),
(216, 20, 'May', 0, 0),
(217, 21, 'June', 0, 0),
(218, 21, 'July', 0, 0),
(219, 21, 'August', 0, 0),
(220, 21, 'September', 0, 0),
(221, 21, 'October', 0, 0),
(222, 21, 'November', 0, 0),
(223, 21, 'December', 0, 0),
(224, 21, 'January', 0, 0),
(225, 21, 'Febuary', 0, 0),
(226, 21, 'March', 0, 0),
(227, 21, 'April', 0, 0),
(228, 21, 'May', 0, 0),
(229, 22, 'June', 0, 0),
(230, 22, 'July', 0, 0),
(231, 22, 'August', 0, 0),
(232, 22, 'September', 0, 0),
(233, 22, 'October', 0, 0),
(234, 22, 'November', 0, 0),
(235, 22, 'December', 0, 0),
(236, 22, 'January', 0, 0),
(237, 22, 'Febuary', 0, 0),
(238, 22, 'March', 0, 0),
(239, 22, 'April', 0, 0),
(240, 22, 'May', 0, 0),
(241, 23, 'June', 1, 0),
(242, 23, 'July', 1, 0),
(243, 23, 'August', 1, 0),
(244, 23, 'September', 1, 0),
(245, 23, 'October', 1, 0),
(246, 23, 'November', 1, 0),
(247, 23, 'December', 1, 0),
(248, 23, 'January', 1, 0),
(249, 23, 'February', 1, 0),
(250, 23, 'March', 0, 0),
(251, 23, 'April', 1, 0),
(252, 23, 'May', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_grade`
--

CREATE TABLE `student_grade` (
  `sg_id` int(10) NOT NULL,
  `sss_id` int(10) NOT NULL,
  `subject_id` int(10) NOT NULL,
  `1grading` int(5) NOT NULL,
  `2grading` int(5) NOT NULL,
  `3grading` int(5) NOT NULL,
  `4grading` int(5) NOT NULL,
  `final` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_grade`
--

INSERT INTO `student_grade` (`sg_id`, `sss_id`, `subject_id`, `1grading`, `2grading`, `3grading`, `4grading`, `final`) VALUES
(1, 3, 3, 50, 50, 50, 50, '50'),
(2, 3, 6, 50, 50, 50, 50, '50'),
(3, 3, 3, 85, 56, 86, 86, '78'),
(4, 19, 6, 86, 86, 84, 85, '85'),
(5, 19, 2, 88, 84, 87, 85, '86'),
(6, 19, 3, 85, 86, 84, 84, '85'),
(7, 20, 6, 95, 94, 95, 95, '95'),
(8, 20, 2, 80, 80, 80, 80, '80'),
(9, 20, 3, 80, 80, 80, 80, '80'),
(10, 17, 6, 88, 88, 88, 88, '88'),
(11, 18, 2, 88, 88, 88, 88, '88'),
(12, 21, 2, 87, 85, 87, 86, '86'),
(13, 23, 6, 82, 84, 80, 85, '83'),
(14, 17, 2, 82, 83, 84, 86, '84'),
(15, 17, 3, 88, 84, 86, 84, '86'),
(16, 17, 4, 88, 88, 88, 84, '87'),
(17, 17, 6, 88, 78, 89, 82, '84'),
(18, 17, 3, 88, 99, 99, 99, '96'),
(19, 17, 4, 80, 88, 77, 88, '83'),
(20, 17, 3, 98, 88, 77, 87, '88'),
(21, 20, 3, 89, 98, 78, 88, '88'),
(22, 20, 4, 87, 88, 77, 88, '85'),
(23, 20, 4, 87, 86, 84, 85, '86'),
(24, 20, 6, 85, 88, 85, 75, '83'),
(25, 20, 2, 66, 77, 88, 85, '79'),
(26, 19, 6, 87, 88, 87, 88, '88'),
(27, 19, 6, 87, 88, 87, 88, '88'),
(28, 19, 6, 87, 88, 87, 88, '88'),
(29, 19, 6, 87, 88, 87, 88, '88'),
(30, 19, 6, 87, 88, 87, 88, '88'),
(31, 19, 6, 87, 88, 87, 88, '88'),
(32, 23, 3, 89, 80, 87, 87, '86'),
(33, 23, 2, 88, 84, 85, 86, '86'),
(34, 23, 4, 85, 85, 84, 85, '85'),
(35, 23, 4, 84, 84, 88, 88, '86'),
(36, 23, 3, 84, 84, 85, 85, '85'),
(37, 23, 4, 86, 86, 84, 84, '85'),
(38, 23, 2, 86, 84, 84, 85, '85');

-- --------------------------------------------------------

--
-- Table structure for table `student_profile`
--

CREATE TABLE `student_profile` (
  `student_id` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `midname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bday` date NOT NULL,
  `birthplace` varchar(200) NOT NULL,
  `lrn_no` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` int(5) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `date_added` date NOT NULL,
  `contact` varchar(15) NOT NULL,
  `guardian` varchar(50) NOT NULL,
  `guardian_contact` varchar(12) NOT NULL,
  `guardian_occupation` varchar(50) NOT NULL,
  `course_completed` text NOT NULL,
  `e_school` varchar(200) NOT NULL,
  `e_sy` varchar(10) NOT NULL,
  `e_gen_ave` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_profile`
--

INSERT INTO `student_profile` (`student_id`, `firstname`, `lastname`, `midname`, `gender`, `bday`, `birthplace`, `lrn_no`, `address`, `status`, `pic`, `date_added`, `contact`, `guardian`, `guardian_contact`, `guardian_occupation`, `course_completed`, `e_school`, `e_sy`, `e_gen_ave`) VALUES
(1, 'carlo', 'montero', 'mitsubishi', 'Male', '1998-06-23', 'Negross occidental, Talisay City, Zone 2', '545465465465', 'Silay City', 1, 'default.jpg', '2018-02-01', '02945656621', 'Mama', '09454545454', 'house wife', '', '', '', ''),
(6, 'sample', 'Sample', 'sample', 'Male', '2000-06-23', 'Negros Occidental, Bacolod City, Brgy. Sample', '123545445434', 'sample', 0, 'default.jpg', '2018-05-27', '09455465877', 'Mama2', '09465546878', 'Sample Occupation', '6', 'Elementary school', '2013-2014', '89.55'),
(7, 'sample2', 'sample2', 'sample2', 'Female', '2000-06-23', 'Negros Occidental, Talisay City, Zone 1', '123132113213', 'Talisay City', 1, 'default.jpg', '2018-05-27', '09456432187', 'PAPA', '09458787888', 'Employee', '6', 'Carlos Hilado Memorial state college', '2014-2015', '88.75'),
(9, 'Student1', 'student1', 'aa', 'Female', '2003-02-05', 'wdasd,awd,awd', '545646552215', 'Sa bahay', 1, 'default.jpg', '2018-05-30', '09454545453', 'gajsdhhjg', '09754543543', 'asdasd', '6', 'jkasgg', '2013-2015', '88.90');

-- --------------------------------------------------------

--
-- Table structure for table `student_sy_status`
--

CREATE TABLE `student_sy_status` (
  `sss_id` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  `status` int(5) NOT NULL,
  `school` varchar(100) NOT NULL,
  `school_address` varchar(200) NOT NULL,
  `average` varchar(5) NOT NULL,
  `teacher_id` varchar(12) NOT NULL,
  `adviser` varchar(100) NOT NULL,
  `grade` int(2) NOT NULL,
  `section` varchar(20) NOT NULL,
  `total_days` int(3) NOT NULL,
  `total_present` int(3) NOT NULL,
  `sy_id` int(5) NOT NULL,
  `number_in_school` int(2) NOT NULL,
  `curriculum` text NOT NULL,
  `advance_unit` varchar(100) NOT NULL,
  `lack_unit` varchar(100) NOT NULL,
  `classified_as` varchar(10) NOT NULL,
  `sy_status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_sy_status`
--

INSERT INTO `student_sy_status` (`sss_id`, `student_id`, `status`, `school`, `school_address`, `average`, `teacher_id`, `adviser`, `grade`, `section`, `total_days`, `total_present`, `sy_id`, `number_in_school`, `curriculum`, `advance_unit`, `lack_unit`, `classified_as`, `sy_status`) VALUES
(17, 1, 1, 'Efegenio Lizares National High School', 'Brgy. Efegenio Lizares, Talisay City', '87.00', '', '', 7, '1', 0, 0, 4, 0, '', 'English', 'Math', '', 'New'),
(18, 7, 1, 'Efegenio Lizares National High School', 'Brgy. Efegenio Lizares, Talisay City', '88.00', '3', '', 7, '2', 0, 0, 4, 0, '', '', '', '', 'New'),
(19, 1, 0, 'Past School', 'Past school address', '83.75', '', 'Mr. From other', 9, '2', 40, 40, 4, 8, 'sample', '', '', '10', 'Transferee'),
(20, 1, 0, 'qwer', 'qwerte', '82.13', '', 'qwert', 8, '2', 8, 160, 4, 7, 'qwer', '', '', '9', 'Transferee'),
(21, 9, 1, 'Efegenio Lizares National High School', 'Brgy. Efegenio Lizares, Talisay City', '86.00', '2', '', 7, '1', 0, 0, 4, 0, '', '', '', '', 'New'),
(22, 6, 1, 'Efegenio Lizares National High School', 'Brgy. Efegenio Lizares, Talisay City', '', '2', '', 7, '1', 0, 0, 4, 0, '', '', '', '', 'New'),
(23, 1, 0, 'Efegenio', 'Talisay', '82.75', '', 'Ms. Caroline', 10, '4', 11, 0, 4, 20, '', '', '', 'Passed', 'Transferee');

-- --------------------------------------------------------

--
-- Table structure for table `subject_list`
--

CREATE TABLE `subject_list` (
  `subject_id` int(10) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_list`
--

INSERT INTO `subject_list` (`subject_id`, `subject`, `description`, `status`) VALUES
(2, 'English I', 'Engilshanay Una', 0),
(3, 'Mathematics  II', 'Geometry', 0),
(4, 'Science I', 'Basta aa', 0),
(5, 'Vacant', 'Pina kabudlay dakpun nga subject', 0),
(6, 'Araling Panlipunan', 'Philippine History', 0);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_list`
--

CREATE TABLE `teacher_list` (
  `teacher_id` int(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `grade` int(2) NOT NULL,
  `section` varchar(2) NOT NULL,
  `sy_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_list`
--

INSERT INTO `teacher_list` (`teacher_id`, `name`, `grade`, `section`, `sy_id`) VALUES
(2, 'mrs. Sample', 7, '1', 4),
(3, 'mr. Sample2', 7, '2', 4),
(4, 'asddf', 8, '1', 4),
(5, 'jagsgd', 8, '1', 1),
(6, 'asdasdasd', 7, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` int(5) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `username`, `password`, `user_type`, `status`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 1, 1),
(3, 'staff', 'staff', 'staff', 'staff', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mr_and_ms`
--
ALTER TABLE `mr_and_ms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promoted_students`
--
ALTER TABLE `promoted_students`
  ADD PRIMARY KEY (`promoted_id`);

--
-- Indexes for table `school_year`
--
ALTER TABLE `school_year`
  ADD PRIMARY KEY (`sy_id`);

--
-- Indexes for table `student_attendance`
--
ALTER TABLE `student_attendance`
  ADD PRIMARY KEY (`att_id`);

--
-- Indexes for table `student_grade`
--
ALTER TABLE `student_grade`
  ADD PRIMARY KEY (`sg_id`);

--
-- Indexes for table `student_profile`
--
ALTER TABLE `student_profile`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_sy_status`
--
ALTER TABLE `student_sy_status`
  ADD PRIMARY KEY (`sss_id`);

--
-- Indexes for table `subject_list`
--
ALTER TABLE `subject_list`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teacher_list`
--
ALTER TABLE `teacher_list`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mr_and_ms`
--
ALTER TABLE `mr_and_ms`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `promoted_students`
--
ALTER TABLE `promoted_students`
  MODIFY `promoted_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `school_year`
--
ALTER TABLE `school_year`
  MODIFY `sy_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `student_attendance`
--
ALTER TABLE `student_attendance`
  MODIFY `att_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;
--
-- AUTO_INCREMENT for table `student_grade`
--
ALTER TABLE `student_grade`
  MODIFY `sg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `student_profile`
--
ALTER TABLE `student_profile`
  MODIFY `student_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `student_sy_status`
--
ALTER TABLE `student_sy_status`
  MODIFY `sss_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `subject_list`
--
ALTER TABLE `subject_list`
  MODIFY `subject_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `teacher_list`
--
ALTER TABLE `teacher_list`
  MODIFY `teacher_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
