-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 25, 2021 at 07:50 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(255) NOT NULL,
  `project_desc` text NOT NULL,
  `project_team` varchar(100) NOT NULL,
  `project_file` varchar(50) NOT NULL,
  `project_status` varchar(255) NOT NULL,
  `client_company` varchar(255) NOT NULL,
  `project_leader` varchar(255) NOT NULL,
  `project_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`project_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `project_desc`, `project_team`, `project_file`, `project_status`, `client_company`, `project_leader`, `project_added`) VALUES
(1, 'First Project1', 'hi its first project1', '1,2,6', 'Files/image/images.jpg', 'Success', 'infostride1', 'rohit1', '2021-06-24 22:40:50'),
(2, 'second project', 'hi its my second project', '1,2,6', 'Files/image/PARENT SURVEY.docx,2', 'Cancelled', 'google', 'mohan', '2021-06-24 20:37:30'),
(3, 'third project', 'it is my third project', '2,6,4', 'Files/image/WHTSAPP.jpg,3', 'Cancelled', 'infostride', 'Prince', '2021-06-24 20:38:46'),
(4, 'Fourth project', 'hi its my fourth project', '1,2,6,4,5', 'Files/image/wieght.jpg,4', 'Success', 'CBL', 'Mohit', '2021-06-24 20:39:51'),
(5, 'hello', 'dd', '4,5,7', 'Files/image/images.jpg,3', 'Success', 'ggooo', 'ram', '2021-06-24 22:43:21');

-- --------------------------------------------------------

--
-- Table structure for table `project_budget`
--

CREATE TABLE IF NOT EXISTS `project_budget` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `estimated_budget` int(11) NOT NULL,
  `amount_spent` int(11) NOT NULL,
  `estimated_duration` int(11) NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `project_budget`
--

INSERT INTO `project_budget` (`project_id`, `estimated_budget`, `amount_spent`, `estimated_duration`) VALUES
(1, 1001, 1011, 1020),
(2, 201, 202, 202),
(3, 301, 302, 302),
(4, 401, 402, 402),
(5, 1, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `about` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `user_img` varchar(100) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `user_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `about`, `address`, `user_img`, `phone`, `user_added`) VALUES
(1, 'Prince', '1234', 'princeish07@gmail.com', 'hi my name is prince', 'kurali', 'user_img/prince.jpg', '2147483647', '2021-06-17 18:34:32'),
(2, 'Mohit', '1234', 'Rohit@gmail.com', 'hi my name is rohit', 'pathankot', 'user_img/rohit.jpg', '2147483647', '2021-06-17 18:34:32'),
(6, 'prince', '81dc9bdb52d04dc20036dbd8313ed055', 'rahul@gmail.com', '', '', '', '', '2021-06-21 19:22:31'),
(4, 'sham', '1234', 'sham@gmail.com', 'hi my name is sham', 'mohali', 'user_img/sham.jpg', '2147483647', '2021-06-17 18:38:36'),
(5, 'mohan', '1234', 'mohan@gmail.com', 'hi my name is mohan', 'jalandhar', 'user_img/mohan.jpg', '9023139932', '2021-06-17 18:40:58'),
(7, 'prince', '81dc9bdb52d04dc20036dbd8313ed055', '17bcs1987@cuchd.inn', '', '', '', '', '2021-06-21 19:31:59'),
(8, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '2021-06-22 21:03:07'),
(9, 'Kerry', '81dc9bdb52d04dc20036dbd8313ed055', 'ram@gmail.com', '', '', '', '', '2021-06-23 14:47:21');
