-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 10, 2014 at 01:56 AM
-- Server version: 5.5.37-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ci_sample_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE IF NOT EXISTS `levels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `level`) VALUES
(1, 'admin'),
(2, 'user');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `class`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'users', '2014-06-09 22:19:00', 1, '0000-00-00 00:00:00', 0),
(2, 'products', '2014-06-09 22:19:00', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `index` tinyint(1) NOT NULL DEFAULT '0',
  `create` tinyint(1) NOT NULL DEFAULT '0',
  `edit` tinyint(1) NOT NULL DEFAULT '0',
  `destroy` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `module_id`, `user_id`, `index`, `create`, `edit`, `destroy`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, 1, 1, 1, 0, 0, '2014-06-09 22:19:00', 1, '2014-06-10 01:52:00', 1),
(5, 2, 1, 0, 1, 1, 0, '2014-06-10 01:27:00', 1, '0000-00-00 00:00:00', 0),
(6, 1, 2, 1, 1, 1, 1, '2014-06-10 01:44:00', 1, '0000-00-00 00:00:00', 0),
(7, 2, 2, 1, 0, 0, 0, '2014-06-10 01:45:00', 1, '0000-00-00 00:00:00', 0),
(10, 1, 3, 1, 1, 1, 0, '2014-06-10 01:54:00', 1, '0000-00-00 00:00:00', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `full_name`, `email`, `phone`, `level_id`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'administrator', 'info@boxgue.com', '085769796363', 1, 1, '2014-05-31 11:00:00', 0, '2014-06-08 20:22:00', 1),
(2, 'user', '5f4dcc3b5aa765d61d8327deb882cf99', 'hopland', 'info@boxgue.com', '085769796363', 2, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(3, 'user2', '5f4dcc3b5aa765d61d8327deb882cf99', 'user 2', 'email2@gmail.com', '097898', 2, 1, '0000-00-00 00:00:00', 0, '2014-06-08 18:34:00', 1),
(4, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test2', 'test@boxgue.com', '085769796363', 2, 1, '2014-06-08 21:07:00', 1, '2014-06-08 21:08:00', 1);

