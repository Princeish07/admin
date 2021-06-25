-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 25, 2021 at 01:59 PM
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `project_desc`, `project_team`, `project_file`, `project_status`, `client_company`, `project_leader`, `project_added`) VALUES
(1, 'SMART TOUR AND TRAVEL GUIDANCE APP', 'This project tour and travel guide provides the tourist with city map \r\ndepending on its current location entered by the android phone user.', '1,2', 'graduate exit survey proof.pdf,images.jpg', 'Cancelled', 'Infostride , Mohali', 'Prince', '2021-06-25 19:17:09'),
(2, 'IMPLEMENTATION OF EIGRP', 'nhanced Interior Gateway Routing Protocol (EIGRP) is an advanced \r\ndistance vector routing protocol that is used on a computer network for \r\nautomating routing decisions and configuration. ', '1,2,6', 'bg.jpg,graduate exit survey proof.docx', 'Success', 'Google', 'Kerry', '2021-06-25 19:21:35'),
(3, 'MPLEMENTATION OF VPN', ' A Virtual Private Network (VPN) is used for creating a private scope of \r\ncomputer communications or providing a secure extension of a private \r\nnetwork through an insecure network such as the Internet.', '5,7', 'Ishant(Resume).docx,Priyatution.docx', 'Onhold', 'TCS', 'Sahil', '2021-06-25 19:23:08'),
(4, 'DNS AND WEB SERVER', 'DNS is the backbone of the internet. That statement is far from a precise \r\nDNS definition, but its truthfulness cannot be disputed', '1,2,6,4,5', 'bg.jpg,PARENT SURVEY.docx,WHTSAPP.jpg,why-hd.jpg,w', 'Cancelled', 'infostride,US', 'Sham', '2021-06-25 19:25:05');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `project_budget`
--

INSERT INTO `project_budget` (`project_id`, `estimated_budget`, `amount_spent`, `estimated_duration`) VALUES
(1, 100, 50, 20),
(2, 200, 150, 120),
(3, 300, 250, 219),
(4, 400, 350, 319);

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
  `phone` varchar(250) NOT NULL,
  `user_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `about`, `address`, `phone`, `user_added`) VALUES
(1, 'Prince', '81dc9bdb52d04dc20036dbd8313ed055', 'princeish07@gmail.com', 'hi my name is prince', 'kurali', '2147483647', '2021-06-17 18:34:32'),
(2, 'Mohit', '81dc9bdb52d04dc20036dbd8313ed055', 'Rohit@gmail.com', 'hi my name is rohit', 'pathankot', '2147483647', '2021-06-17 18:34:32'),
(6, 'Kerry', '81dc9bdb52d04dc20036dbd8313ed055', 'rahul@gmail.com', 'hi my name is kerry', 'USA', '9023139932', '2021-06-21 19:22:31'),
(4, 'sham', '81dc9bdb52d04dc20036dbd8313ed055', 'sham@gmail.com', 'hi my name is sham', 'mohali', '2147483647', '2021-06-17 18:38:36'),
(5, 'mohan', '81dc9bdb52d04dc20036dbd8313ed055', 'mohan@gmail.com', 'hi my name is mohan', 'jalandhar', '9023139932', '2021-06-17 18:40:58'),
(7, 'Sahil', '81dc9bdb52d04dc20036dbd8313ed055', '17bcs1987@cuchd.inn', 'hi my name is Sahil', 'Chandigarh', '7888232223', '2021-06-21 19:31:59');
