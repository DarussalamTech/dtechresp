-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 04, 2013 at 10:30 AM
-- Server version: 5.5.32
-- PHP Version: 5.3.10-1ubuntu3.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `darussalam_pub`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `description` text,
  `image` varchar(150) NOT NULL,
  `small_image` varchar(150) NOT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  `activity_log` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `image`, `small_image`, `create_time`, `create_user_id`, `update_time`, `update_user_id`, `activity_log`) VALUES
(6, 'Apps', 'Apps', 'big_mob_03.png', 'mob.png', '2013-09-26 15:42:04', 1, '2013-09-30 16:04:04', 1, NULL),
(7, 'E-books', 'E-books', 'big_pad_03.png', 'ipad.png', '2013-09-26 16:41:37', 1, '2013-09-30 16:06:56', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `conf_misc`
--

CREATE TABLE IF NOT EXISTS `conf_misc` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `param` varchar(150) NOT NULL,
  `value` varchar(150) NOT NULL,
  `field_type` varchar(150) NOT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  `activity_log` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `conf_misc`
--

INSERT INTO `conf_misc` (`id`, `title`, `param`, `value`, `field_type`, `create_time`, `create_user_id`, `update_time`, `update_user_id`, `activity_log`) VALUES
(1, 'Date Format', 'dateformat', 'y/m/d', 'dropDown', '2013-09-24 05:09:02', 1, '2013-09-24 05:09:02', 1, NULL),
(2, 'Smtp Email', 'smtp', '1', 'dropDown', '2013-09-24 05:09:02', 1, '2013-09-24 05:09:02', 1, NULL),
(3, 'Darussalam Amazon Link', 'darussalam_amazon_link', '', '', '2013-10-03 02:10:57', 1, '2013-10-03 02:10:57', 1, NULL),
(4, 'Darussalam Google Play Store', 'darussalam_play_store_link', '', '', '2013-10-03 02:10:57', 1, '2013-10-03 02:10:57', 1, NULL),
(5, 'Darussalam Windows Store', 'darussalam_windows_store_link', '', '', '2013-10-03 02:10:57', 1, '2013-10-03 02:10:57', 1, NULL),
(11, 'Ticker News', 'darussalam_ticker_news', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500', 'textArea', '2013-10-03 03:10:40', 1, '2013-10-03 15:39:33', 1, NULL),
(12, 'Darussalam Quran Link', 'darussalam_quran_link', 'http://dtechsystems.net/index.php/en/pak/lahore/1/category/Quran-34', '', '2013-10-03 03:10:40', 1, '2013-10-03 15:42:49', 1, NULL),
(13, 'Darussalam Books Link', 'darussalam_books_link', 'http://dtechsystems.net/index.php/en/pak/lahore/1/category/Books-57', '', '2013-10-03 03:10:40', 1, '2013-10-03 15:41:30', 1, NULL),
(14, 'Darussalam Educational Toys Link', 'darussalam_edu_toys_link', 'http://dtechsystems.net/index.php/en/pak/lahore/1/category/Educational-Toys-110', '', '2013-10-03 03:10:40', 1, '2013-10-03 15:42:33', 1, NULL),
(15, 'Darussalam Digital Device Link', 'darussalam_device_link', 'http://dtechsystems.net/index.php/en/pak/lahore/1/category/Islamic-Devices-58', '', '2013-10-03 03:10:40', 1, '2013-10-03 15:42:21', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_feedback`
--

CREATE TABLE IF NOT EXISTS `contact_feedback` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(150) DEFAULT NULL,
  `body` text,
  `email_sent` tinyint(1) DEFAULT '0',
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  `activity_log` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `contact_feedback`
--

INSERT INTO `contact_feedback` (`id`, `name`, `email`, `subject`, `body`, `email_sent`, `create_time`, `create_user_id`, `update_time`, `update_user_id`, `activity_log`) VALUES
(1, 'dffdfd', 'ali@pakneeds.com', '', 'dssdsd', 0, '2013-10-02 16:12:45', 1, '2013-10-02 16:12:45', 1, NULL),
(2, 'dffdfd', 'ali@pakneeds.com', 'test', 'dssdsd', 0, '2013-10-02 16:13:53', 1, '2013-10-02 16:13:53', 1, NULL),
(3, 'ali abbas', 'ali@pakneeds.com', 'tee', 'tst', 0, '2013-10-02 16:14:52', 1, '2013-10-02 16:14:52', 1, NULL),
(4, 'ali abbas', 'ali@pakneeds.com', 'tee', 'tst', 0, '2013-10-02 16:15:11', 1, '2013-10-02 16:15:11', 1, NULL),
(5, 'ali', 'ali@pakneeds.com', 'its my app', 'its my msessag', 0, '2013-10-02 17:23:48', 1, '2013-10-02 17:23:48', 1, NULL),
(6, 'ali abbas', 'ali@pakneeds.com', 'aa', 'dssdsd', 0, '2013-10-02 17:25:17', 1, '2013-10-02 17:25:17', 1, NULL),
(7, 'ali abbas', 'ali@pakneeds.com', 'test', 'test', 0, '2013-10-02 17:34:24', 1, '2013-10-02 17:34:24', 1, NULL),
(8, 'ali abbas', 'ali@pakneeds.com', 'test', 'test', 0, '2013-10-02 17:35:52', 1, '2013-10-02 17:35:52', 1, NULL),
(9, 'ali abbas', 'ali@pakneeds.com', 'test', 'asdssd', 0, '2013-10-02 17:36:51', 1, '2013-10-02 17:36:51', 1, NULL),
(10, 'ali abbas', 'ali@pakneeds.com', 'test', 'test', 0, '2013-10-02 17:38:02', 1, '2013-10-02 17:38:02', 1, NULL),
(11, 'ali abbas', 'ali@pakneeds.com', 'test', 'a', 0, '2013-10-02 17:38:36', 1, '2013-10-02 17:38:36', 1, NULL),
(12, 'ali abbas', 'ali@pakneeds.com', 'abc', 'aas', 0, '2013-10-02 17:41:34', 1, '2013-10-02 17:41:34', 1, NULL),
(13, 'ali abbas', 'ali@pakneeds.com', 'abc', 'aas', 0, '2013-10-02 17:47:24', 1, '2013-10-02 17:47:24', 1, NULL),
(14, 'ali abbas', 'ali@pakneeds.com', 'abc', 'aas', 0, '2013-10-02 17:49:36', 1, '2013-10-02 17:49:36', 1, NULL),
(15, 'ali abbas', 'ali@pakneeds.com', 'abc', 'aas', 0, '2013-10-02 17:50:06', 1, '2013-10-02 17:50:06', 1, NULL),
(16, 'ali abbas', 'ali@pakneeds.com', 'abc', 'aas', 0, '2013-10-02 17:53:18', 1, '2013-10-02 17:53:18', 1, NULL),
(17, 'ali abbas', 'ali@pakneeds.com', 'abc', 'aas', 0, '2013-10-02 17:56:13', 1, '2013-10-02 17:56:13', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login_logs`
--

CREATE TABLE IF NOT EXISTS `login_logs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ip_address` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` enum('admin','seller','buyer') DEFAULT NULL,
  `success` tinyint(1) DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  `activity_log` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) unsigned DEFAULT NULL,
  `root_parent` int(11) NOT NULL,
  `controller` varchar(255) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `default_title` varchar(255) DEFAULT NULL,
  `user_title` varchar(255) DEFAULT NULL,
  `is_assigned` enum('Yes','No') NOT NULL,
  `weight` int(11) DEFAULT NULL,
  `min_permission` varchar(255) NOT NULL,
  `root_class` varchar(255) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  `activity_log` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `pid`, `root_parent`, `controller`, `action`, `default_title`, `user_title`, `is_assigned`, `weight`, `min_permission`, `root_class`, `create_time`, `create_user_id`, `update_time`, `update_user_id`, `activity_log`) VALUES
(1, 0, 1, 'site', 'index', 'Home', 'Home', 'Yes', 1, 'View', NULL, '2013-09-26 15:47:07', 1, '2013-09-26 15:47:07', 1, NULL),
(2, 0, 2, 'category', 'index', 'Category', 'Category', 'Yes', 2, 'View', NULL, '2013-09-26 15:47:07', 1, '2013-09-26 15:47:07', 1, NULL),
(3, 2, 2, 'category', 'index', 'List All', 'List All', 'Yes', 0, 'View', NULL, '2013-09-26 15:47:07', 1, '2013-09-26 15:47:07', 1, NULL),
(4, 2, 2, 'category', 'create', 'Create', 'Create', 'Yes', 2, 'View', NULL, '2013-09-26 15:47:07', 1, '2013-09-26 15:47:07', 1, NULL),
(5, 0, 5, 'platforms', 'index', 'Platform', 'Plateform', 'Yes', 2, 'View', NULL, '2013-09-26 15:47:07', 1, '2013-09-26 15:47:07', 1, NULL),
(6, 5, 5, 'platforms', 'index', 'List All', 'List All', 'Yes', 0, 'View', NULL, '2013-09-26 15:47:07', 1, '2013-09-26 15:47:07', 1, NULL),
(7, 5, 5, 'platforms', 'create', 'Create', 'Create', 'Yes', 2, 'View', NULL, '2013-09-26 15:47:07', 1, '2013-09-26 15:47:07', 1, NULL),
(8, 0, 8, 'product', 'index', 'Product', 'Product', 'Yes', 2, 'View', NULL, '2013-09-26 15:47:07', 1, '2013-09-26 15:47:07', 1, NULL),
(9, 8, 8, 'product', 'index', 'List All', 'List All', 'Yes', 0, 'View', NULL, '2013-09-26 15:47:07', 1, '2013-09-26 15:47:07', 1, NULL),
(10, 8, 8, 'product', 'create', 'Create', 'Create', 'Yes', 2, 'View', NULL, '2013-09-26 15:47:07', 1, '2013-09-26 15:47:07', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `platforms`
--

CREATE TABLE IF NOT EXISTS `platforms` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `description` text,
  `image` varchar(150) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  `activity_log` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `platforms`
--

INSERT INTO `platforms` (`id`, `name`, `description`, `image`, `create_time`, `create_user_id`, `update_time`, `update_user_id`, `activity_log`) VALUES
(2, 'Google Store', 'Google Store', NULL, '2013-09-27 10:13:06', 1, '2013-09-27 10:13:06', 1, NULL),
(3, 'Apple Store', 'Apple Store', NULL, '2013-09-27 10:13:18', 1, '2013-09-27 10:13:18', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `description` text,
  `is_slider` tinyint(1) DEFAULT '0',
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  `activity_log` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `is_slider`, `create_time`, `create_user_id`, `update_time`, `update_user_id`, `activity_log`) VALUES
(1, 'Supplication', 'Supplication', 1, '2013-09-27 10:15:10', 1, '2013-10-02 12:35:27', 1, NULL),
(2, 'Qurani Surah', 'TEst', 1, '2013-09-27 12:49:16', 1, '2013-10-02 12:35:42', 1, NULL),
(3, 'A Treatise on Hijab', 'by Shaikh Muhmmad bin Salih Al Uthaimeen and Darussalam Kindle eBook', 1, '2013-09-30 17:41:30', 1, '2013-10-02 12:35:52', 1, NULL),
(4, 'Ebook 1', 'Ebook 1 ', 1, '2013-09-30 17:42:35', 1, '2013-10-02 12:36:04', 1, NULL),
(5, 'Ebook 3', 'Ebook 3', 0, '2013-09-30 17:43:12', 1, '2013-09-30 17:43:12', 1, NULL),
(6, 'Ebook 5', 'Ebook 5', 0, '2013-09-30 17:45:38', 1, '2013-09-30 17:45:38', 1, NULL),
(7, 'Ebook 6', 'Ebook 6', 0, '2013-09-30 17:46:07', 1, '2013-09-30 17:46:07', 1, NULL),
(8, 'Ebook 7', 'Ebook 7', 0, '2013-09-30 17:46:51', 1, '2013-09-30 17:46:51', 1, NULL),
(9, 'Ebook 10', 'Ebook 10', 0, '2013-09-30 17:47:21', 1, '2013-09-30 17:47:21', 1, NULL),
(10, 'test', 'test', 0, '2013-10-03 17:47:56', 1, '2013-10-03 17:47:56', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) unsigned NOT NULL,
  `category_id` int(11) unsigned NOT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  `activity_log` text,
  PRIMARY KEY (`id`),
  KEY `fk_category` (`category_id`),
  KEY `fk_product` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `product_id`, `category_id`, `create_time`, `create_user_id`, `update_time`, `update_user_id`, `activity_log`) VALUES
(1, 1, 6, '2013-09-27 10:15:10', 1, '2013-09-27 10:24:25', 1, NULL),
(2, 1, 7, '2013-09-27 10:15:10', 1, '2013-09-27 10:15:10', 1, NULL),
(4, 2, 7, '2013-09-27 12:49:16', 1, '2013-09-27 12:49:16', 1, NULL),
(5, 3, 7, '2013-09-30 17:41:30', 1, '2013-09-30 17:41:30', 1, NULL),
(6, 4, 7, '2013-09-30 17:42:35', 1, '2013-09-30 17:42:35', 1, NULL),
(7, 5, 7, '2013-09-30 17:43:12', 1, '2013-09-30 17:43:12', 1, NULL),
(8, 6, 7, '2013-09-30 17:45:38', 1, '2013-09-30 17:45:38', 1, NULL),
(9, 7, 7, '2013-09-30 17:46:07', 1, '2013-09-30 17:46:07', 1, NULL),
(10, 8, 7, '2013-09-30 17:46:51', 1, '2013-09-30 17:46:51', 1, NULL),
(11, 9, 7, '2013-09-30 17:47:21', 1, '2013-09-30 17:47:21', 1, NULL),
(12, 10, 6, '2013-10-03 17:47:56', 1, '2013-10-03 17:47:56', 1, NULL),
(13, 10, 7, '2013-10-03 17:47:56', 1, '2013-10-03 17:47:56', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE IF NOT EXISTS `product_image` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) unsigned NOT NULL,
  `tag` varchar(150) DEFAULT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  `image_large` varchar(150) NOT NULL,
  `image_small` varchar(150) DEFAULT NULL,
  `image_detail` varchar(150) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  `activity_log` text,
  PRIMARY KEY (`id`),
  KEY `fk_product_image` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `product_id`, `tag`, `is_default`, `image_large`, `image_small`, `image_detail`, `create_time`, `create_user_id`, `update_time`, `update_user_id`, `activity_log`) VALUES
(3, 1, 'hello', 0, '87p980bkej.jpg', 'small_87p980bkej.jpg', 'detail_87p980bkej.jpg', '2013-09-27 12:31:23', 1, '2013-10-04 10:27:47', 1, NULL),
(4, 1, 'test', 0, '4vg0ejsmtf.png', 'small_4vg0ejsmtf.png', 'detail_4vg0ejsmtf.png', '2013-09-27 12:46:22', 1, '2013-09-27 12:46:22', 1, NULL),
(6, 2, 'sss', 1, 'pd5740kfwi.jpg', 'small_pd5740kfwi.jpg', 'detail_pd5740kfwi.jpg', '2013-09-27 12:49:16', 1, '2013-09-30 17:44:51', 1, NULL),
(7, 3, 'Hijab title', 1, 'na209cudcu.jpg', 'small_na209cudcu.jpg', 'detail_na209cudcu.jpg', '2013-09-30 17:41:30', 1, '2013-09-30 17:41:30', 1, NULL),
(8, 4, 'Hijab', 0, 'v6ugrpn0ug.jpg', 'small_v6ugrpn0ug.jpg', 'detail_v6ugrpn0ug.jpg', '2013-09-30 17:42:35', 1, '2013-09-30 17:42:35', 1, NULL),
(9, 5, 'Ebook 3', 0, 'qdl3w1ihem.jpg', 'small_qdl3w1ihem.jpg', 'detail_qdl3w1ihem.jpg', '2013-09-30 17:43:12', 1, '2013-09-30 17:43:12', 1, NULL),
(10, 6, '', 0, 'ujvug749w9.jpg', 'small_ujvug749w9.jpg', 'detail_ujvug749w9.jpg', '2013-09-30 17:45:38', 1, '2013-09-30 17:45:38', 1, NULL),
(11, 7, 'test', 0, '43l46d81v4.jpg', 'small_43l46d81v4.jpg', 'detail_43l46d81v4.jpg', '2013-09-30 17:46:07', 1, '2013-09-30 17:46:07', 1, NULL),
(12, 8, '', 0, 'aowudwas7q.jpg', 'small_aowudwas7q.jpg', 'detail_aowudwas7q.jpg', '2013-09-30 17:46:51', 1, '2013-09-30 17:46:51', 1, NULL),
(13, 9, 'Ebook 10', 0, 'lf57in9kw8.jpg', 'small_lf57in9kw8.jpg', 'detail_lf57in9kw8.jpg', '2013-09-30 17:47:21', 1, '2013-09-30 17:47:21', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_platforms`
--

CREATE TABLE IF NOT EXISTS `product_platforms` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) unsigned NOT NULL,
  `plateform_id` int(11) unsigned NOT NULL,
  `link` varchar(300) NOT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  `activity_log` text,
  PRIMARY KEY (`id`),
  KEY `fk_plateform_plateform` (`plateform_id`),
  KEY `fk_product_plateform` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `product_platforms`
--

INSERT INTO `product_platforms` (`id`, `product_id`, `plateform_id`, `link`, `create_time`, `create_user_id`, `update_time`, `update_user_id`, `activity_log`) VALUES
(1, 1, 2, 'http://www.google.com', '2013-09-27 10:15:10', 1, '2013-09-27 10:15:10', 1, NULL),
(2, 1, 3, 'http://www.apples.com', '2013-09-27 10:15:10', 1, '2013-09-27 10:24:41', 1, NULL),
(3, 2, 2, 'http://www.google.com', '2013-09-27 12:49:16', 1, '2013-09-27 12:49:16', 1, NULL),
(5, 3, 2, 'www.google.com/abc.dd', '2013-09-30 17:41:30', 1, '2013-09-30 17:41:30', 1, NULL),
(6, 4, 2, 'www.google.com/hijab.com', '2013-09-30 17:42:35', 1, '2013-09-30 17:42:35', 1, NULL),
(7, 5, 2, 'www.google.com/abc.dd', '2013-09-30 17:43:12', 1, '2013-09-30 17:43:12', 1, NULL),
(8, 6, 2, 'www.ebook.com/abc.dd', '2013-09-30 17:45:38', 1, '2013-09-30 17:45:38', 1, NULL),
(9, 7, 2, 'www.google.com/abc.dd', '2013-09-30 17:46:07', 1, '2013-09-30 17:46:07', 1, NULL),
(10, 8, 2, 'www.ebook.com/abc.dd', '2013-09-30 17:46:51', 1, '2013-09-30 17:46:51', 1, NULL),
(11, 9, 2, 'www.google.com/abc.dd', '2013-09-30 17:47:21', 1, '2013-09-30 17:47:21', 1, NULL),
(12, 10, 2, 'aaa', '2013-10-03 17:47:56', 1, '2013-10-03 17:47:56', 1, NULL),
(13, 10, 3, 'sdsdds', '2013-10-03 17:47:56', 1, '2013-10-03 17:47:56', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_slider`
--

CREATE TABLE IF NOT EXISTS `product_slider` (
  `id` int(11) unsigned NOT NULL,
  `slider_image` varchar(150) DEFAULT NULL,
  `description` text,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  `activity_log` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_slider`
--

INSERT INTO `product_slider` (`id`, `slider_image`, `description`, `create_time`, `create_user_id`, `update_time`, `update_user_id`, `activity_log`) VALUES
(1, '1.jpg', 'Its slider of view', '2013-10-01 16:37:44', 1, '2013-10-02 12:35:27', 1, NULL),
(2, '2.jpg', 'Supplications', '2013-10-02 12:23:23', 1, '2013-10-02 12:35:42', 1, NULL),
(3, '3.jpg', 'Test', '2013-10-02 12:25:10', 1, '2013-10-02 12:35:52', 1, NULL),
(4, '4.jpg', 'test', '2013-10-02 12:28:36', 1, '2013-10-02 12:36:04', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_slider_platforms`
--

CREATE TABLE IF NOT EXISTS `product_slider_platforms` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `slider_id` int(11) unsigned NOT NULL,
  `product_plateform_id` int(11) unsigned NOT NULL,
  `tag` varchar(150) DEFAULT NULL,
  `image_platform` varchar(150) NOT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  `activity_log` text,
  PRIMARY KEY (`id`),
  KEY `fk_product_slider_slider` (`slider_id`),
  KEY `fk_product_slider_platform` (`product_plateform_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `product_slider_platforms`
--

INSERT INTO `product_slider_platforms` (`id`, `slider_id`, `product_plateform_id`, `tag`, `image_platform`, `create_time`, `create_user_id`, `update_time`, `update_user_id`, `activity_log`) VALUES
(3, 3, 1, '', 'twcfajiwgv.png', '2013-10-02 12:25:51', 1, '2013-10-02 12:25:51', 1, NULL),
(4, 1, 1, 'Google', '2ruvzuoe2j.png', '2013-10-02 12:52:02', 1, '2013-10-02 12:52:02', 1, NULL),
(5, 1, 2, 'Apple', 'mangw0g8vg.png', '2013-10-02 12:52:02', 1, '2013-10-02 12:52:02', 1, NULL),
(6, 2, 2, 'Apple', 'iy8dj7jgyh.png', '2013-10-02 12:52:45', 1, '2013-10-02 12:52:45', 1, NULL),
(7, 2, 1, 'Google', 'eovzd2olgr.png', '2013-10-02 12:52:45', 1, '2013-10-02 12:52:45', 1, NULL),
(8, 3, 2, 'Apple', '48frgb4v47.png', '2013-10-02 12:53:11', 1, '2013-10-02 12:53:11', 1, NULL),
(9, 3, 1, 'Google', 'zb58zg6xi3.png', '2013-10-02 12:53:11', 1, '2013-10-02 12:53:11', 1, NULL),
(10, 4, 1, 'Tag', '8zgu8l2s4d.png', '2013-10-02 12:53:38', 1, '2013-10-02 12:53:38', 1, NULL),
(11, 4, 2, 'test ', '46zikg00xj.png', '2013-10-02 12:53:38', 1, '2013-10-02 12:53:38', 1, NULL);

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

INSERT INTO `tbl_migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1380025334),
('m120708_142711_tbl_user', 1380025499),
('m120719_165411_add_adminUser', 1380025500),
('m120719_182641_login_log', 1380025500),
('m120721_170436_add_new_menu_table', 1380025500),
('m120910_183824_add_column_user', 1380025501),
('m130129_155820_conf_mis', 1380025502),
('m130610_165345_addingMigrationFOrconfig', 1380025502),
('m130925_050104_categories', 1380085455),
('m130925_050435_product', 1380085550),
('m130925_050606_product_category', 1380085714),
('m130925_050854_relationAgainstproductcategory', 1380086364),
('m130925_052256_plateforms', 1380086644),
('m130925_052423_product_plateforms', 1380086785),
('m130925_052639_plateform_relation_product', 1380087204),
('m130925_053647_product_images', 1380087682),
('m130925_054006_productImgrelation', 1380087682),
('m130926_072647_add_image_columnINplateform', 1380180572),
('m130927_044622_addLInkinplateforms', 1380257330),
('m130927_060257_addIsdefaultColumn', 1380261991),
('m130930_105445_addSmallImageColumnINcategory', 1380538612),
('m131001_103629_add_sliderTableForProduct', 1380626810),
('m131001_123717_addIsSliderColumnINProduct', 1380631182),
('m131001_124610_slider_plateforms', 1380631750),
('m131001_124931_relation_ofSLider', 1380631970),
('m131002_093122_resizingImage', 1380707975),
('m131002_103001_addContactustable', 1380710028),
('m131003_095330_addOtherConfig', 1380794277),
('m131003_095829_addOtherlinks', 1380796720);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `type` enum('admin','non-admin') DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `activation_key` varchar(50) DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  `activity_log` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `password`, `email`, `ip_address`, `type`, `is_active`, `activation_key`, `deleted`, `create_time`, `create_user_id`, `update_time`, `update_user_id`, `activity_log`) VALUES
(1, 'admin', 'admin', '', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com', '', 'admin', 1, NULL, 0, '2013-09-24 05:09:59', 1, '2013-09-24 05:09:59', 1, 'user insterted through console');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_category`
--
ALTER TABLE `product_category`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `fk_product_image` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `product_platforms`
--
ALTER TABLE `product_platforms`
  ADD CONSTRAINT `fk_plateform_plateform` FOREIGN KEY (`plateform_id`) REFERENCES `platforms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_product_plateform` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_slider`
--
ALTER TABLE `product_slider`
  ADD CONSTRAINT `fk_product_slider` FOREIGN KEY (`id`) REFERENCES `product` (`id`);

--
-- Constraints for table `product_slider_platforms`
--
ALTER TABLE `product_slider_platforms`
  ADD CONSTRAINT `fk_product_slider_platform` FOREIGN KEY (`product_plateform_id`) REFERENCES `product_platforms` (`id`),
  ADD CONSTRAINT `fk_product_slider_slider` FOREIGN KEY (`slider_id`) REFERENCES `product_slider` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
