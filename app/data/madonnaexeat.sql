-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 68.178.142.146
-- Generation Time: Aug 11, 2013 at 02:15 PM
-- Server version: 5.0.96
-- PHP Version: 5.1.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `madonnaexeat`
--

-- --------------------------------------------------------

--
-- Table structure for table `AuthAssignment`
--

CREATE TABLE `AuthAssignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY  (`itemname`,`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `AuthAssignment`
--


-- --------------------------------------------------------

--
-- Table structure for table `AuthItem`
--

CREATE TABLE `AuthItem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY  (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `AuthItem`
--


-- --------------------------------------------------------

--
-- Table structure for table `AuthItemChild`
--

CREATE TABLE `AuthItemChild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY  (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `AuthItemChild`
--


-- --------------------------------------------------------

--
-- Table structure for table `mde_department`
--

CREATE TABLE `mde_department` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(45) NOT NULL,
  `faculty` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_mde_department_mde_faculty1_idx` (`faculty`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mde_department`
--

INSERT INTO `mde_department` VALUES(1, 'Computer Science', 2);
INSERT INTO `mde_department` VALUES(2, 'Electrical Electronics Engineering', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mde_exeat`
--

CREATE TABLE `mde_exeat` (
  `id` int(11) NOT NULL auto_increment,
  `student` int(11) NOT NULL,
  `purpose` text NOT NULL,
  `destination` varchar(45) NOT NULL,
  `proposed_date_out` varchar(45) NOT NULL,
  `proposed_days` varchar(45) NOT NULL,
  `proposed_date_in` varchar(45) default NULL,
  `approved_date_out` varchar(45) default NULL,
  `approved_days` varchar(45) default NULL,
  `expiring_date` varchar(45) default NULL,
  `approved_remark` varchar(45) default NULL,
  `sign_out_date` varchar(45) default NULL,
  `signed_out_by` varchar(45) default NULL,
  `expired` varchar(45) default NULL,
  `sign_in_remark` varchar(45) default NULL,
  `signed_in_by` varchar(45) default NULL,
  `status` int(11) NOT NULL,
  `entry_status` int(11) default NULL,
  `created` varchar(45) NOT NULL,
  `createdby` varchar(45) NOT NULL,
  `modified` varchar(100) NOT NULL,
  `modifiedby` varchar(100) NOT NULL,
  `approvedby` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_mde_exeat_mde_student1_idx` (`student`),
  KEY `fk_mde_exeat_mde_status1_idx` (`status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mde_exeat`
--

INSERT INTO `mde_exeat` VALUES(3, 4, 'Traveling to get school fees', 'Port harcourt', '15-08-2013', '', '17-08-2013', '10-08-2013', NULL, '16-08-2013', 'Valid entry', NULL, NULL, NULL, NULL, NULL, 2, 1, '2013-08-09 13:46:18', '4', '2013-08-09 14:57:30', '5', 'Brown, James');

-- --------------------------------------------------------

--
-- Table structure for table `mde_faculty`
--

CREATE TABLE `mde_faculty` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mde_faculty`
--

INSERT INTO `mde_faculty` VALUES(1, 'Engineering');
INSERT INTO `mde_faculty` VALUES(2, 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `mde_level`
--

CREATE TABLE `mde_level` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `mde_level`
--

INSERT INTO `mde_level` VALUES(1, '100');
INSERT INTO `mde_level` VALUES(2, '200');
INSERT INTO `mde_level` VALUES(3, '300');
INSERT INTO `mde_level` VALUES(4, '400');
INSERT INTO `mde_level` VALUES(5, '500');
INSERT INTO `mde_level` VALUES(6, '600');

-- --------------------------------------------------------

--
-- Table structure for table `mde_menuitems`
--

CREATE TABLE `mde_menuitems` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(45) default NULL,
  `url` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `mde_menuitems`
--

INSERT INTO `mde_menuitems` VALUES(16, 'Manage Menu Items', '/menuitems/admin');
INSERT INTO `mde_menuitems` VALUES(17, 'Manage States', '/state/admin');
INSERT INTO `mde_menuitems` VALUES(18, 'Manage Levels', '/level/admin');
INSERT INTO `mde_menuitems` VALUES(19, 'Manage Global Setting', '/setting/admin');
INSERT INTO `mde_menuitems` VALUES(20, 'Manage Faculties', '/faculty/admin');
INSERT INTO `mde_menuitems` VALUES(21, 'Manage Department', '/department/admin');
INSERT INTO `mde_menuitems` VALUES(22, 'Manage Status', '/status/admin');
INSERT INTO `mde_menuitems` VALUES(24, 'Manage Students', '/profiles/admin');
INSERT INTO `mde_menuitems` VALUES(25, 'New User', '/user/admin/create');
INSERT INTO `mde_menuitems` VALUES(26, 'Manage Users', '/user/admin');
INSERT INTO `mde_menuitems` VALUES(27, 'Manage User Types', '/userroles/admin');

-- --------------------------------------------------------

--
-- Table structure for table `mde_profiles`
--

CREATE TABLE `mde_profiles` (
  `user_id` int(11) NOT NULL auto_increment,
  `surname` varchar(50) NOT NULL default '',
  `othernames` varchar(100) NOT NULL default '',
  `gender` varchar(10) NOT NULL default '',
  `photo` varchar(255) NOT NULL default '',
  `address` varchar(255) NOT NULL default '',
  `phonenumbers` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `mde_profiles`
--

INSERT INTO `mde_profiles` VALUES(1, '', '', '', '', '', '');
INSERT INTO `mde_profiles` VALUES(2, '', '', '', '', '', '');
INSERT INTO `mde_profiles` VALUES(4, 'Inyang-Etoh', 'Patrick Bernard', 'Male', 'a87ff679a2f3e71d9181a67b7542122cnewpass.jpg', '#12 brown Street', '');
INSERT INTO `mde_profiles` VALUES(5, 'Brown', 'James', 'Male', 'e4da3b7fbbce2345d7772b0674a318d5REG NO-05066540IF.jpg', 'home', '');
INSERT INTO `mde_profiles` VALUES(6, 'Inyangetoh', 'Patosky B.', 'male', '', '45 aka road', '');
INSERT INTO `mde_profiles` VALUES(7, 'akpan', 'akanimo etim', 'male', '8f14e45fceea167a5a36dedd4bea2543Henry.jpg', '52 independence avenue', '');
INSERT INTO `mde_profiles` VALUES(8, 'Ishmael', 'Godwin', 'male', '', '#77 woji road, PH.', '0803184738');

-- --------------------------------------------------------

--
-- Table structure for table `mde_profiles_fields`
--

CREATE TABLE `mde_profiles_fields` (
  `id` int(10) NOT NULL auto_increment,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` varchar(15) NOT NULL default '0',
  `field_size_min` varchar(15) NOT NULL default '0',
  `required` int(1) NOT NULL default '0',
  `match` varchar(255) NOT NULL default '',
  `range` varchar(255) NOT NULL default '',
  `error_message` varchar(255) NOT NULL default '',
  `other_validator` varchar(5000) NOT NULL default '',
  `default` varchar(255) NOT NULL default '',
  `widget` varchar(255) NOT NULL default '',
  `widgetparams` varchar(5000) NOT NULL default '',
  `position` int(3) NOT NULL default '0',
  `visible` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `varname` (`varname`,`widget`,`visible`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `mde_profiles_fields`
--

INSERT INTO `mde_profiles_fields` VALUES(5, 'surname', 'Surname', 'VARCHAR', '50', '3', 1, '', '', '', '', '', '', '', 0, 3);
INSERT INTO `mde_profiles_fields` VALUES(6, 'othernames', 'Other Names', 'VARCHAR', '100', '3', 1, '', '', '', '', '', '', '', 0, 3);
INSERT INTO `mde_profiles_fields` VALUES(7, 'gender', 'Gender', 'VARCHAR', '10', '1', 1, '', '', '', '', '', '', '', 0, 3);
INSERT INTO `mde_profiles_fields` VALUES(10, 'photo', 'Passport', 'VARCHAR', '255', '0', 0, '', '', '', '', '', '', '', 0, 0);
INSERT INTO `mde_profiles_fields` VALUES(11, 'address', 'Residential Address', 'VARCHAR', '255', '2', 1, '', '', '', '', '', '', '', 0, 3);
INSERT INTO `mde_profiles_fields` VALUES(13, 'phonenumbers', 'Phone Number(s)', 'VARCHAR', '100', '0', 2, '', '', '', '', '', '', '', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `mde_setting`
--

CREATE TABLE `mde_setting` (
  `id` int(11) NOT NULL auto_increment,
  `session` varchar(45) NOT NULL,
  `semester` varchar(45) NOT NULL,
  `semester_start_date` varchar(45) NOT NULL,
  `semester_end_date` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `mde_setting`
--


-- --------------------------------------------------------

--
-- Table structure for table `mde_state`
--

CREATE TABLE `mde_state` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) default NULL,
  `code` varchar(4) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `mde_state`
--

INSERT INTO `mde_state` VALUES(1, 'Abia', 'AB');
INSERT INTO `mde_state` VALUES(2, 'Adamawa', 'AD');
INSERT INTO `mde_state` VALUES(3, 'Akwa Ibom', 'AK');
INSERT INTO `mde_state` VALUES(4, 'Anambra', 'AN');
INSERT INTO `mde_state` VALUES(5, 'Bauchi', 'BA');
INSERT INTO `mde_state` VALUES(6, 'Bayelsa', 'BY');
INSERT INTO `mde_state` VALUES(7, 'Benue', 'BN');
INSERT INTO `mde_state` VALUES(8, 'Borno', 'BO');
INSERT INTO `mde_state` VALUES(9, 'Cross River', 'CR');
INSERT INTO `mde_state` VALUES(10, 'Delta', 'DL');
INSERT INTO `mde_state` VALUES(11, 'Ebonyi', 'EB');
INSERT INTO `mde_state` VALUES(12, 'Edo', 'ED');
INSERT INTO `mde_state` VALUES(13, 'Ekiti', 'EK');
INSERT INTO `mde_state` VALUES(14, 'Enugu', 'EN');
INSERT INTO `mde_state` VALUES(15, 'Federal Capital Territory', 'FCT');
INSERT INTO `mde_state` VALUES(16, 'Gombe', 'GB');
INSERT INTO `mde_state` VALUES(17, 'Imo', 'IM');
INSERT INTO `mde_state` VALUES(18, 'Jigawa', 'JG');
INSERT INTO `mde_state` VALUES(19, 'Kaduna', 'KD');
INSERT INTO `mde_state` VALUES(20, 'Kano', 'KN');
INSERT INTO `mde_state` VALUES(21, 'Katsina', 'KT');
INSERT INTO `mde_state` VALUES(22, 'Kebbi', 'KB');
INSERT INTO `mde_state` VALUES(23, 'Kogi', 'KG');
INSERT INTO `mde_state` VALUES(24, 'Kwara', 'KW');
INSERT INTO `mde_state` VALUES(25, 'Lagos', 'LAG');
INSERT INTO `mde_state` VALUES(26, 'Nasarawa', 'NS');
INSERT INTO `mde_state` VALUES(27, 'Niger', 'NI');
INSERT INTO `mde_state` VALUES(28, 'Ogun', 'OG');
INSERT INTO `mde_state` VALUES(29, 'Ondo', 'ON');
INSERT INTO `mde_state` VALUES(30, 'Osun', 'OS');
INSERT INTO `mde_state` VALUES(31, 'Oyo', 'OY');
INSERT INTO `mde_state` VALUES(32, 'Plateau', 'PL');
INSERT INTO `mde_state` VALUES(33, 'Rivers', 'RV');
INSERT INTO `mde_state` VALUES(34, 'Sokoto', 'SK');
INSERT INTO `mde_state` VALUES(35, 'Taraba', 'TA');
INSERT INTO `mde_state` VALUES(36, 'Yobe', 'YB');
INSERT INTO `mde_state` VALUES(37, 'Zamfara', 'ZF');

-- --------------------------------------------------------

--
-- Table structure for table `mde_status`
--

CREATE TABLE `mde_status` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(45) NOT NULL,
  `access_level` int(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `mde_status`
--

INSERT INTO `mde_status` VALUES(1, 'Awaiting Approval', 0);
INSERT INTO `mde_status` VALUES(2, 'Approved', 1);
INSERT INTO `mde_status` VALUES(3, 'Not Approved/Entry Closed', 1);
INSERT INTO `mde_status` VALUES(4, 'Signed Out', 2);
INSERT INTO `mde_status` VALUES(5, 'Sign In', 3);
INSERT INTO `mde_status` VALUES(6, 'Signed In but Awaiting Panel Review', 3);
INSERT INTO `mde_status` VALUES(7, 'Panel Cleared', 4);

-- --------------------------------------------------------

--
-- Table structure for table `mde_student`
--

CREATE TABLE `mde_student` (
  `id` int(11) NOT NULL,
  `regno` varchar(45) NOT NULL,
  `department` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `hometown` varchar(45) default NULL,
  `profile` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `regno` (`regno`),
  UNIQUE KEY `profile` (`profile`),
  KEY `fk_mde_student_mde_state1_idx` (`state`),
  KEY `fk_mde_student_mde_department1_idx` (`department`),
  KEY `fk_mde_student_mde_level1_idx` (`level`),
  KEY `fk_mde_student_mde_profiles1_idx` (`profile`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mde_student`
--

INSERT INTO `mde_student` VALUES(1, 'CS/09/173', 1, 4, 17, 'Ideato-North L.g.a', 1);
INSERT INTO `mde_student` VALUES(4, 'MDG/2012/3674947', 1, 3, 3, 'Ukana', 4);
INSERT INTO `mde_student` VALUES(7, 'mls/11/141', 1, 3, 3, 'independence avenue', 7);
INSERT INTO `mde_student` VALUES(8, 'CS/10/001', 1, 4, 33, 'Ogoni', 8);

-- --------------------------------------------------------

--
-- Table structure for table `mde_userroles`
--

CREATE TABLE `mde_userroles` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(45) default NULL,
  `description` text NOT NULL,
  `created` varchar(45) default NULL,
  `createdby` varchar(45) default NULL,
  `modified` varchar(45) default NULL,
  `modifiedby` varchar(45) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mde_userroles`
--

INSERT INTO `mde_userroles` VALUES(1, 'Administrator', 'Site administrator that is in-charge of managing site settings and user accounts', NULL, NULL, '2013-08-09 11:43:53', '1');
INSERT INTO `mde_userroles` VALUES(2, 'Student', 'Registered Student of the Institution', NULL, NULL, '2013-08-09 11:42:26', '1');
INSERT INTO `mde_userroles` VALUES(3, 'Exeat Moderator', 'Officer incharge of approving or declining exeat requests', '2013-08-04 10:13:24', '1', '2013-08-09 11:43:07', '1');
INSERT INTO `mde_userroles` VALUES(4, 'Exeat Check-in/Check-Out Officer', 'Officers at the gate that authorized to sign-out approved exeat or sign-in completed exeat', '2013-08-04 10:13:49', '1', '2013-08-09 11:41:43', '1');

-- --------------------------------------------------------

--
-- Table structure for table `mde_users`
--

CREATE TABLE `mde_users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL default '',
  `userrole` int(10) NOT NULL,
  `create_at` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `lastvisit_at` varchar(45) NOT NULL default '0000-00-00 00:00:00',
  `superuser` int(1) NOT NULL default '0',
  `status` int(1) NOT NULL default '0',
  `createdby` varchar(45) default NULL,
  `modfiedby` varchar(45) default NULL,
  `modified` varchar(45) default NULL,
  `name` varchar(150) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`),
  KEY `fk_mde_users_mde_userroles1` (`userrole`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `mde_users`
--

INSERT INTO `mde_users` VALUES(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', '9a24eff8c15a6a141ece27eb6947da0f', 0, '2013-07-19 18:27:54', '2013-08-11 20:23:04', 1, 1, NULL, NULL, NULL, '');
INSERT INTO `mde_users` VALUES(2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@example.com', '099f825543f7850cc038b90aaff39fac', 0, '2013-07-19 18:27:54', '0000-00-00 00:00:00', 0, 1, NULL, NULL, NULL, '');
INSERT INTO `mde_users` VALUES(4, 'patrickb', '6ecc0500d10ea0a41cba814ce259ef75', 'pinyang@gmail.com', 'd299ed4d66650c3f7b7164934b22206b', 2, '2013-07-27 18:50:46', '2013-08-11 21:08:52', 0, 1, NULL, NULL, NULL, 'Inyang-Etoh, Patrick Bernard');
INSERT INTO `mde_users` VALUES(5, 'james', '81dc9bdb52d04dc20036dbd8313ed055', 'james@gmail.com', 'b9304806b19773d70717c689b0a54377', 3, '2013-08-09 12:56:54', '2013-08-10 12:52:34', 0, 1, NULL, NULL, NULL, 'Brown, James');
INSERT INTO `mde_users` VALUES(6, 'Ibeto', 'a44158d97640aee2f8f11b9da1742a26', 'inyangetohp@yahoo.com', '84b39e73f86e25f4e592c2f042ef897d', 1, '2013-08-11 20:07:13', '2013-08-11 21:10:13', 1, 1, NULL, NULL, NULL, 'Inyangetoh, Patosky B.');
INSERT INTO `mde_users` VALUES(7, 'legato', 'b970f9688faca6bda5163054dfd123d4', 'legato52@yahoo.com', '8e3e77193dee5062696610d7bbe8c91d', 2, '2013-08-11 20:38:02', '2013-08-11 21:10:59', 1, 1, NULL, NULL, NULL, 'akpan, akanimo etim');
INSERT INTO `mde_users` VALUES(8, 'MrPassword', 'e98eb21470cc507b107aa34db07b054b', 'mails2ishmael@yahoo.com', '793c108a32095fbc02ddefe23e210305', 2, '2013-08-11 21:14:08', '2013-08-11 21:14:42', 1, 1, NULL, NULL, NULL, 'Ishmael, Godwin');

-- --------------------------------------------------------

--
-- Table structure for table `Rights`
--

CREATE TABLE `Rights` (
  `itemname` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY  (`itemname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Rights`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_migration`
--

CREATE TABLE `tbl_migration` (
  `version` varchar(255) NOT NULL,
  `apply_time` int(11) default NULL,
  PRIMARY KEY  (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_migration`
--


--
-- Constraints for dumped tables
--

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
