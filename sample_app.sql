-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 14, 2014 at 04:13 PM
-- Server version: 5.5.37-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ci_sample_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `default_rules`
--

CREATE TABLE IF NOT EXISTS `default_rules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `index` tinyint(1) NOT NULL DEFAULT '0',
  `show` tinyint(1) NOT NULL DEFAULT '0',
  `create` tinyint(1) NOT NULL DEFAULT '0',
  `store` tinyint(1) NOT NULL DEFAULT '0',
  `edit` tinyint(1) NOT NULL DEFAULT '0',
  `update` tinyint(1) NOT NULL DEFAULT '0',
  `destroy` tinyint(1) NOT NULL DEFAULT '0',
  `download` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `default_rules`
--

INSERT INTO `default_rules` (`id`, `level_id`, `module_id`, `index`, `show`, `create`, `store`, `edit`, `update`, `destroy`, `download`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, '2014-06-14 15:54:00', 1, '2014-06-14 15:55:00', 1),
(2, 1, 2, 1, 1, 1, 1, 1, 1, 1, 0, '2014-06-14 15:56:00', 1, '0000-00-00 00:00:00', 0),
(4, 1, 3, 1, 1, 1, 1, 1, 1, 0, 0, '2014-06-14 16:01:00', 1, '2014-06-14 16:07:00', 1),
(5, 1, 4, 1, 1, 1, 1, 1, 1, 0, 0, '2014-06-14 16:07:00', 1, '2014-06-14 16:08:00', 1),
(6, 1, 5, 1, 1, 1, 1, 1, 1, 0, 0, '2014-06-14 16:08:00', 1, '0000-00-00 00:00:00', 0),
(7, 1, 6, 1, 1, 1, 1, 1, 1, 0, 0, '2014-06-14 16:08:00', 1, '0000-00-00 00:00:00', 0),
(8, 2, 2, 1, 1, 1, 1, 1, 1, 0, 0, '2014-06-14 16:09:00', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE IF NOT EXISTS `levels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(25) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `level`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'admin', '0000-00-00 00:00:00', 0, '2014-06-14 15:26:00', 1),
(2, 'manager', '0000-00-00 00:00:00', 0, '2014-06-14 15:26:00', 1),
(3, 'user', '2014-06-14 15:33:00', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `class`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'users', '2014-06-09 22:19:00', 1, '0000-00-00 00:00:00', 0),
(2, 'products', '2014-06-09 22:19:00', 1, '0000-00-00 00:00:00', 0),
(3, 'modules', '2014-06-10 22:09:00', 1, '2014-06-10 22:54:00', 1),
(4, 'rules', '2014-06-10 22:54:00', 1, '0000-00-00 00:00:00', 0),
(5, 'levels', '2014-06-14 15:22:00', 1, '0000-00-00 00:00:00', 0),
(6, 'defaultrules', '2014-06-14 15:50:00', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE IF NOT EXISTS `rules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `index` tinyint(1) NOT NULL DEFAULT '0',
  `show` tinyint(1) NOT NULL DEFAULT '0',
  `create` tinyint(1) NOT NULL DEFAULT '0',
  `store` tinyint(1) NOT NULL DEFAULT '0',
  `edit` tinyint(1) NOT NULL DEFAULT '0',
  `update` tinyint(1) NOT NULL DEFAULT '0',
  `destroy` tinyint(1) NOT NULL DEFAULT '0',
  `download` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`id`, `module_id`, `user_id`, `index`, `show`, `create`, `store`, `edit`, `update`, `destroy`, `download`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2014-06-09 22:19:00', 1, '2014-06-12 22:11:00', 1),
(7, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, '2014-06-10 01:45:00', 1, '2014-06-11 23:20:00', 1),
(12, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2014-06-10 22:54:00', 1, '2014-06-12 22:11:00', 1),
(13, 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2014-06-10 22:55:00', 1, '2014-06-12 22:11:00', 1),
(14, 3, 2, 1, 0, 0, 0, 0, 0, 0, 0, '2014-06-12 22:17:00', 1, '0000-00-00 00:00:00', 0),
(15, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, '2014-06-12 22:30:00', 1, '2014-06-12 22:38:00', 1),
(16, 2, 1, 1, 1, 1, 1, 1, 1, 0, 0, '2014-06-14 15:04:00', 1, '2014-06-14 15:05:00', 1),
(17, 5, 1, 1, 1, 1, 1, 1, 1, 0, 0, '2014-06-14 15:23:00', 1, '2014-06-14 15:34:00', 1),
(18, 6, 1, 1, 1, 1, 1, 1, 1, 1, 0, '2014-06-14 15:51:00', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `full_name` varchar(120) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `level_id` int(11) NOT NULL DEFAULT '2',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `full_name`, `email`, `phone`, `level_id`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'administrator', 'info2@boxgue.com', '085769796363', 1, 1, '2014-05-31 11:00:00', 0, '2014-06-10 22:07:00', 1),
(2, 'user', '5f4dcc3b5aa765d61d8327deb882cf99', 'user test', 'info@boxgue.com', '085769796363', 2, 1, '0000-00-00 00:00:00', 0, '2014-06-11 23:26:00', 2);

