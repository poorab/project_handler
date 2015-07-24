-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 24, 2015 at 02:56 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project_handler_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `approved_project_details`
--

CREATE TABLE IF NOT EXISTS `approved_project_details` (
  `approved_project_id` int(3) NOT NULL AUTO_INCREMENT,
  `project_id` int(3) NOT NULL,
  `review_id` int(4) NOT NULL,
  PRIMARY KEY (`approved_project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `approved_project_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `batch_details`
--

CREATE TABLE IF NOT EXISTS `batch_details` (
  `batch_id` int(3) NOT NULL AUTO_INCREMENT,
  `batch_name` varchar(20) NOT NULL,
  PRIMARY KEY (`batch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `batch_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE IF NOT EXISTS `course_details` (
  `course_id` int(3) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(30) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `course_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `disapproved_projects`
--

CREATE TABLE IF NOT EXISTS `disapproved_projects` (
  `disapproved_project_id` int(3) NOT NULL AUTO_INCREMENT,
  `project_id` int(3) NOT NULL,
  `reason_of_disapproval` varchar(200) NOT NULL,
  PRIMARY KEY (`disapproved_project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `disapproved_projects`
--


-- --------------------------------------------------------

--
-- Table structure for table `documents_submitted`
--

CREATE TABLE IF NOT EXISTS `documents_submitted` (
  `document_submission_id` int(4) NOT NULL AUTO_INCREMENT,
  `document_id` int(3) NOT NULL,
  `approved_project_id` int(3) NOT NULL,
  PRIMARY KEY (`document_submission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `documents_submitted`
--


-- --------------------------------------------------------

--
-- Table structure for table `mentor_details`
--

CREATE TABLE IF NOT EXISTS `mentor_details` (
  `mentor_id` int(3) NOT NULL AUTO_INCREMENT,
  `mentor_name` varchar(30) NOT NULL,
  `batch_id` int(3) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`mentor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `mentor_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `mentor_review`
--

CREATE TABLE IF NOT EXISTS `mentor_review` (
  `review_id` int(4) NOT NULL AUTO_INCREMENT,
  `mentor_id` int(3) NOT NULL,
  `approved_project_id` int(3) NOT NULL,
  `review_detail` varchar(400) NOT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `mentor_review`
--


-- --------------------------------------------------------

--
-- Table structure for table `notice_details`
--

CREATE TABLE IF NOT EXISTS `notice_details` (
  `notice_id` int(4) NOT NULL AUTO_INCREMENT,
  `notice_purpose` varchar(200) NOT NULL,
  `notice_date` date NOT NULL,
  `batch_id` int(3) NOT NULL,
  `mentor_id` int(3) NOT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `notice_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE IF NOT EXISTS `project_details` (
  `project_id` int(3) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(30) NOT NULL,
  `project_discription` text NOT NULL,
  `github_link` varchar(30) DEFAULT NULL,
  `mentor_id` int(3) NOT NULL,
  `batch_id` int(3) NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `project_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `project_documents`
--

CREATE TABLE IF NOT EXISTS `project_documents` (
  `document_id` int(3) NOT NULL AUTO_INCREMENT,
  `document_name` varchar(30) NOT NULL,
  PRIMARY KEY (`document_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `project_documents`
--


-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE IF NOT EXISTS `student_details` (
  `student_id` int(3) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(30) NOT NULL,
  `roll_no` varchar(12) NOT NULL,
  `course_id` int(3) NOT NULL,
  `semester` int(2) NOT NULL,
  `batch_id` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `student_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `student_project_details`
--

CREATE TABLE IF NOT EXISTS `student_project_details` (
  `s_p_id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'student_project_details_id',
  `project_id` int(3) NOT NULL,
  `student_id` int(3) NOT NULL,
  PRIMARY KEY (`s_p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This table is created to link student and project details' AUTO_INCREMENT=1 ;

--
-- Dumping data for table `student_project_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `user_id` int(3) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL COMMENT 'username is mail id',
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user_info`
--

