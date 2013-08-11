-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 08, 2013 at 11:34 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `madonnaexeat`
--

-- --------------------------------------------------------

--
-- Table structure for table `authassignment`
--

CREATE TABLE IF NOT EXISTS `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authassignment`
--


-- --------------------------------------------------------

--
-- Table structure for table `authitem`
--

CREATE TABLE IF NOT EXISTS `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authitem`
--


-- --------------------------------------------------------

--
-- Table structure for table `authitemchild`
--

CREATE TABLE IF NOT EXISTS `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authitemchild`
--


-- --------------------------------------------------------

--
-- Table structure for table `mde_department`
--

CREATE TABLE IF NOT EXISTS `mde_department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `faculty` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_mde_department_mde_faculty1_idx` (`faculty`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `mde_department`
--


-- --------------------------------------------------------

--
-- Table structure for table `mde_exeat`
--

CREATE TABLE IF NOT EXISTS `mde_exeat` (
  `id` int(11) NOT NULL,
  `student` int(11) NOT NULL,
  `purpose` text NOT NULL,
  `destination` varchar(45) NOT NULL,
  `proposed_date_out` varchar(45) NOT NULL,
  `proposed_days` varchar(45) NOT NULL,
  `proposed_date_in` varchar(45) DEFAULT NULL,
  `approved_date_out` varchar(45) DEFAULT NULL,
  `approved_days` varchar(45) DEFAULT NULL,
  `expiring_date` varchar(45) DEFAULT NULL,
  `approved_remark` varchar(45) DEFAULT NULL,
  `sign_out_date` varchar(45) DEFAULT NULL,
  `signed_out_by` varchar(45) DEFAULT NULL,
  `expired` varchar(45) DEFAULT NULL,
  `sign_in_remark` varchar(45) DEFAULT NULL,
  `signed_in_by` varchar(45) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `entry_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_mde_exeat_mde_student1_idx` (`student`),
  KEY `fk_mde_exeat_mde_status1_idx` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mde_exeat`
--


-- --------------------------------------------------------

--
-- Table structure for table `mde_faculty`
--

CREATE TABLE IF NOT EXISTS `mde_faculty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `mde_faculty`
--


-- --------------------------------------------------------

--
-- Table structure for table `mde_level`
--

CREATE TABLE IF NOT EXISTS `mde_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `mde_level`
--


-- --------------------------------------------------------

--
-- Table structure for table `mde_menuitems`
--

CREATE TABLE IF NOT EXISTS `mde_menuitems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `mde_menuitems`
--

INSERT INTO `mde_menuitems` (`id`, `name`, `url`) VALUES
(16, 'Manage Menu Items', '/index.php/menuitems/admin'),
(17, 'Manage States', '/index.php/state/admin'),
(18, 'Manage Levels', '/index.php/level/admin'),
(19, 'Manage Global Setting', '/index.php/setting/admin'),
(20, 'Manage Faculties', '/index.php/faculty/admin'),
(21, 'Manage Department', '/index.php/department/admin');

-- --------------------------------------------------------

--
-- Table structure for table `mde_menuusers`
--

CREATE TABLE IF NOT EXISTS `mde_menuusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `mde_menuitems_id` int(11) NOT NULL,
  `mde_roles_id` int(11) NOT NULL,
  `created` varchar(45) DEFAULT NULL,
  `createdby` varchar(45) DEFAULT NULL,
  `modified` varchar(45) DEFAULT NULL,
  `modifiedby` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_mde_menuusers_mde_menuitems1` (`mde_menuitems_id`),
  KEY `fk_mde_menuusers_mde_roles1` (`mde_roles_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `mde_menuusers`
--


-- --------------------------------------------------------

--
-- Table structure for table `mde_profiles`
--

CREATE TABLE IF NOT EXISTS `mde_profiles` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '',
  `surname` varchar(50) NOT NULL DEFAULT '',
  `othernames` varchar(100) NOT NULL DEFAULT '',
  `gender` varchar(10) NOT NULL DEFAULT '',
  `occupation` varchar(100) NOT NULL DEFAULT '',
  `photo` varchar(255) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `phonenumbers` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mde_profiles`
--

INSERT INTO `mde_profiles` (`user_id`, `title`, `surname`, `othernames`, `gender`, `occupation`, `photo`, `address`, `phonenumbers`) VALUES
(1, '', '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', '', ''),
(4, 'Mr.', 'Inyang-Etoh', 'David Alphonsus', 'Male', 'Business', 'a87ff679a2f3e71d9181a67b7542122cmee.jpg', '#12 brown Street', '');

-- --------------------------------------------------------

--
-- Table structure for table `mde_profiles_fields`
--

CREATE TABLE IF NOT EXISTS `mde_profiles_fields` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` varchar(15) NOT NULL DEFAULT '0',
  `field_size_min` varchar(15) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` varchar(5000) NOT NULL DEFAULT '',
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` varchar(5000) NOT NULL DEFAULT '',
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`,`widget`,`visible`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `mde_profiles_fields`
--

INSERT INTO `mde_profiles_fields` (`id`, `varname`, `title`, `field_type`, `field_size`, `field_size_min`, `required`, `match`, `range`, `error_message`, `other_validator`, `default`, `widget`, `widgetparams`, `position`, `visible`) VALUES
(4, 'title', 'Title', 'VARCHAR', '50', '2', 1, '', '', '', '', '', '', '', 0, 3),
(5, 'surname', 'Surname', 'VARCHAR', '50', '3', 1, '', '', '', '', '', '', '', 0, 3),
(6, 'othernames', 'Other Names', 'VARCHAR', '100', '3', 1, '', '', '', '', '', '', '', 0, 3),
(7, 'gender', 'Gender', 'VARCHAR', '10', '1', 1, '', '', '', '', '', '', '', 0, 3),
(8, 'occupation', 'Occupation', 'VARCHAR', '100', '3', 1, '', '', '', '', '', '', '', 0, 3),
(10, 'photo', 'Passport', 'VARCHAR', '255', '0', 0, '', '', '', '', '', '', '', 0, 0),
(11, 'address', 'Residential Address', 'VARCHAR', '255', '2', 1, '', '', '', '', '', '', '', 0, 3),
(12, 'phonenumbers', 'Phone Number(s)', 'VARCHAR', '10', '0', 2, '', '', '', '', '', '', '', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `mde_setting`
--

CREATE TABLE IF NOT EXISTS `mde_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session` varchar(45) NOT NULL,
  `semester` varchar(45) NOT NULL,
  `semester_start_date` varchar(45) NOT NULL,
  `semester_end_date` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `mde_setting`
--


-- --------------------------------------------------------

--
-- Table structure for table `mde_state`
--

CREATE TABLE IF NOT EXISTS `mde_state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `code` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `mde_state`
--

INSERT INTO `mde_state` (`id`, `name`, `code`) VALUES
(1, 'Abia', 'AB'),
(2, 'Adamawa', 'AD'),
(3, 'Akwa Ibom', 'AK'),
(4, 'Anambra', 'AN'),
(5, 'Bauchi', 'BA'),
(6, 'Bayelsa', 'BY'),
(7, 'Benue', 'BN'),
(8, 'Borno', 'BO'),
(9, 'Cross River', 'CR'),
(10, 'Delta', 'DL'),
(11, 'Ebonyi', 'EB'),
(12, 'Edo', 'ED'),
(13, 'Ekiti', 'EK'),
(14, 'Enugu', 'EN'),
(15, 'Federal Capital Territory', 'FCT'),
(16, 'Gombe', 'GB'),
(17, 'Imo', 'IM'),
(18, 'Jigawa', 'JG'),
(19, 'Kaduna', 'KD'),
(20, 'Kano', 'KN'),
(21, 'Katsina', 'KT'),
(22, 'Kebbi', 'KB'),
(23, 'Kogi', 'KG'),
(24, 'Kwara', 'KW'),
(25, 'Lagos', 'LAG'),
(26, 'Nasarawa', 'NS'),
(27, 'Niger', 'NI'),
(28, 'Ogun', 'OG'),
(29, 'Ondo', 'ON'),
(30, 'Osun', 'OS'),
(31, 'Oyo', 'OY'),
(32, 'Plateau', 'PL'),
(33, 'Rivers', 'RV'),
(34, 'Sokoto', 'SK'),
(35, 'Taraba', 'TA'),
(36, 'Yobe', 'YB'),
(37, 'Zamfara', 'ZF');

-- --------------------------------------------------------

--
-- Table structure for table `mde_status`
--

CREATE TABLE IF NOT EXISTS `mde_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `access_level` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `mde_status`
--


-- --------------------------------------------------------

--
-- Table structure for table `mde_student`
--

CREATE TABLE IF NOT EXISTS `mde_student` (
  `id` int(11) NOT NULL,
  `regno` varchar(45) NOT NULL,
  `department` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `hometown` varchar(45) DEFAULT NULL,
  `profile` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_mde_student_mde_state1_idx` (`state`),
  KEY `fk_mde_student_mde_department1_idx` (`department`),
  KEY `fk_mde_student_mde_level1_idx` (`level`),
  KEY `fk_mde_student_mde_profiles1_idx` (`profile`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mde_student`
--


-- --------------------------------------------------------

--
-- Table structure for table `mde_userroles`
--

CREATE TABLE IF NOT EXISTS `mde_userroles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `created` varchar(45) DEFAULT NULL,
  `createdby` varchar(45) DEFAULT NULL,
  `modified` varchar(45) DEFAULT NULL,
  `modifiedby` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mde_userroles`
--

INSERT INTO `mde_userroles` (`id`, `name`, `created`, `createdby`, `modified`, `modifiedby`) VALUES
(1, 'Administrator', NULL, NULL, NULL, NULL),
(2, 'Parent/Guardian', NULL, NULL, '2013-07-29 00:04:41', '1'),
(3, 'Tutor', '2013-08-04 10:13:24', '1', '2013-08-04 10:13:24', '1'),
(4, 'Hostel Master/Matron', '2013-08-04 10:13:49', '1', '2013-08-04 10:14:06', '1');

-- --------------------------------------------------------

--
-- Table structure for table `mde_users`
--

CREATE TABLE IF NOT EXISTS `mde_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `userrole` int(10) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastvisit_at` varchar(45) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `createdby` varchar(45) DEFAULT NULL,
  `modfiedby` varchar(45) DEFAULT NULL,
  `modified` varchar(45) DEFAULT NULL,
  `name` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`),
  KEY `fk_mde_users_mde_userroles1` (`userrole`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mde_users`
--

INSERT INTO `mde_users` (`id`, `username`, `password`, `email`, `activkey`, `userrole`, `create_at`, `lastvisit_at`, `superuser`, `status`, `createdby`, `modfiedby`, `modified`, `name`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', '9a24eff8c15a6a141ece27eb6947da0f', 0, '2013-07-19 18:27:54', '2013-08-08 20:45:05', 1, 1, NULL, NULL, NULL, ''),
(2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@example.com', '099f825543f7850cc038b90aaff39fac', 0, '2013-07-19 18:27:54', '0000-00-00 00:00:00', 0, 1, NULL, NULL, NULL, ''),
(4, '08064761071', '81dc9bdb52d04dc20036dbd8313ed055', 'dinyang@gmail.com', 'bfa8bc8d138d2b8bdc190ce08e3b0c85', 1, '2013-07-27 18:50:46', '2013-07-27 20:26:43', 0, 1, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `rights`
--

CREATE TABLE IF NOT EXISTS `rights` (
  `itemname` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`itemname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rights`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_migration`
--

CREATE TABLE IF NOT EXISTS `tbl_migration` (
  `version` varchar(255) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_migration`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `authassignment`
--
ALTER TABLE `authassignment`
  ADD CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `authitemchild`
--
ALTER TABLE `authitemchild`
  ADD CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mde_department`
--
ALTER TABLE `mde_department`
  ADD CONSTRAINT `fk_mde_department_mde_faculty1` FOREIGN KEY (`faculty`) REFERENCES `mde_faculty` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mde_exeat`
--
ALTER TABLE `mde_exeat`
  ADD CONSTRAINT `fk_mde_exeat_mde_status1` FOREIGN KEY (`status`) REFERENCES `mde_status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mde_exeat_mde_student1` FOREIGN KEY (`student`) REFERENCES `mde_student` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mde_profiles`
--
ALTER TABLE `mde_profiles`
  ADD CONSTRAINT `user_profile_id` FOREIGN KEY (`user_id`) REFERENCES `mde_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mde_student`
--
ALTER TABLE `mde_student`
  ADD CONSTRAINT `fk_mde_student_mde_department1` FOREIGN KEY (`department`) REFERENCES `mde_department` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mde_student_mde_level1` FOREIGN KEY (`level`) REFERENCES `mde_level` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mde_student_mde_profiles1` FOREIGN KEY (`profile`) REFERENCES `mde_profiles` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mde_student_mde_state1` FOREIGN KEY (`state`) REFERENCES `mde_state` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
