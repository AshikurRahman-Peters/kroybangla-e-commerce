-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 18, 2020 at 12:10 PM
-- Server version: 5.7.24
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kraybangla`
--

-- --------------------------------------------------------

--
-- Table structure for table `common_part`
--

DROP TABLE IF EXISTS `common_part`;
CREATE TABLE IF NOT EXISTS `common_part` (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `com_title` varchar(255) NOT NULL,
  `com_description` text NOT NULL,
  `com_image` text NOT NULL,
  `com_type` varchar(100) NOT NULL,
  `com_created_by` varchar(100) DEFAULT NULL,
  `com_created_date` datetime NOT NULL,
  `com_update_by` varchar(100) NOT NULL,
  `com_update_date` datetime NOT NULL,
  `com_status` int(11) NOT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `common_part`
--

INSERT INTO `common_part` (`com_id`, `com_title`, `com_description`, `com_image`, `com_type`, `com_created_by`, `com_created_date`, `com_update_by`, `com_update_date`, `com_status`) VALUES
(1, 'WHY WE ARE SPECIAL..??', '<p>There is a lot of e-commerce around discount products. any product 50% discount and FREE SHIPPING.&nbsp;<br />\r\nThere is a lot of e-commerce around discount products. any product 50% discount and FREE SHIPPING.<br />\r\nThere is a lot of e-commerce around discount products. any product 50% discount and FREE SHIPPING</p>', '3652d26238f982a20b9376fcb15a4be3.jpeg', '', NULL, '0000-00-00 00:00:00', '', '2019-04-28 12:56:15', 2),
(2, 'ABOUT OUR NEWLOOKSBD SHOPPY', '<p>There is a lot of e-commerce around discount products. any product 50% discount and FREE SHIPPING.</p>\r\n\r\n<p>There is a lot of e-commerce around discount products. any product 50% discount and FREE SHIPPING</p>', '9f5b28539eebc4a4c49f1c9dcf42d5d8.jpg', 'aboutus', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1),
(3, 'New Feature update', '<h3>NEW FEATURE</h3>', '267755be04fc6935a1056ae4ae4ad27e.jpeg', '', NULL, '0000-00-00 00:00:00', '', '2019-04-28 12:00:15', 2),
(4, 'WHY WE ARE SPECIAL..??', '<p>There is a lot of e-commerce around discount products. any product 50% discount and FREE SHIPPING.&nbsp;<br />\r\nThere is a lot of e-commerce around discount products. any product 50% discount and FREE SHIPPING.<br />\r\nThere is a lot of e-commerce around discount products. any product 50% discount and FREE SHIPPING.</p>', '8198bc9e5d0dffb6823fba473364c00d.jpeg', 'whychoose', NULL, '0000-00-00 00:00:00', 'admin', '0000-00-00 00:00:00', 1),
(5, 'as', '<p>as</p>', '', '', 'admin', '0000-00-00 00:00:00', 'admin', '2020-06-15 10:11:28', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

DROP TABLE IF EXISTS `tbl_about`;
CREATE TABLE IF NOT EXISTS `tbl_about` (
  `about_id` int(11) NOT NULL AUTO_INCREMENT,
  `about_title` varchar(20) NOT NULL,
  `about_description` varchar(5000) NOT NULL,
  `about_status` int(1) NOT NULL,
  `about_created_by` varchar(20) NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`about_id`, `about_title`, `about_description`, `about_status`, `about_created_by`) VALUES
(1, 'asaasa', '<h2><strong>A. Introduction:</strong></h2>\r\n\r\n<p>Welcome to Evaly.com.bd additionally thusly known as &quot;we&quot;, &quot;us&quot; or &quot;Evaly&quot;. We are an online commercial center and these are the terms and conditions overseeing your entrance and utilization of Evaly alongside its related sub-areas, destinations, portable application, administrations and apparatuses (the &quot;Website&quot;). By utilizing the Site, you thusly acknowledge these terms and conditions (counting the connected data in this) and speak to that you consent to conform to these terms and conditions (the &quot;Client Agreement&quot;). This User Agreement is regarded as successful upon your utilization of the Site which means your acknowledgment of these terms. On the off chance that you don&#39;t consent to be bound by this User Agreement kindly don&#39;t get to, register with or utilize this Site. This Site is claimed and worked by Evaly Bangladesh Limited, an organization consolidated under the Companies Act, 1994.</p>\r\n\r\n<p>The Site maintains whatever authority is needed to change, adjust, include, or expel bits of these Terms and Conditions whenever with no earlier warning. Changes will be successful when posted on the Site with no other notification gave. If it&#39;s not too much trouble check these Terms and Conditions normally for refreshes. You proceed with the utilization of the Site following the presenting of changes on Terms and Conditions of utilization establishes your acknowledgment of those changes.</p>\r\n\r\n<h2>B. CONDITIONS OF USE</h2>\r\n\r\n<h2>1. YOUR ACCOUNT</h2>\r\n\r\n<p>To get to specific administrations offered by the stage, we may necessitate that you make a record with us or give individual data to finish the making of a record. We may whenever in our sole and total watchfulness, nullify the username as well as password without giving any explanation or earlier notice and will not be at risk or answerable for any misfortunes endured by, brought about by, emerging out of, regarding or by reason of such solicitation or negation.</p>\r\n\r\n<p>Any agreement between us, regardless of whether for utilization of the site or in connection to the buy of items or administrations through the site will be represented by the laws of Bangladesh and all gatherings submit to the non-restrictive purview of the Bangladeshi Courts.</p>\r\n\r\n<p>You are answerable for keeping up the classification of your client recognizable proof, password, account subtleties, and related private data. You consent to acknowledge this obligation and guarantee your record and its related subtleties are kept up safely consistently and every essential advance is taken to avoid abuse of your record. You ought to advise us promptly on the off chance that you have any motivation to accept that your secret phrase has gotten known to any other individual, or if the secret word is being, or is probably going to be, utilized in an unapproved way. You concur and recognize that any utilization of the Site and related administrations offered as well as any entrance to private data, information or interchanges utilizing your record and secret word will be esteemed to be either performed by you or approved by you all things considered. You consent to be bound by any entrance of the Site as well as utilization of any administrations offered by the Site (regardless of whether such access or use are approved by you or not). You concur that we will be entitled (yet not obliged) to follow up on, depend on or consider you exclusively capable and subject in regard thereof as though the equivalent were done or transmitted by you. You further concur and recognize that you will be bound by and consent to completely reimburse us against all misfortunes emerging from the utilization of or access to the Site through your record.</p>\r\n\r\n<p>It would be ideal if you guarantee that the subtleties you give us are right and finish consistently. You are committed to refreshing insights regarding your record progressively by getting to your record on the web. For snippets of data you are not ready to refresh by getting to Your Account on the Site, you should advise us by means of our client care correspondence channels to help you with these changes. We claim all authority to decline access to the Site, end records, evacuate or alter content whenever without earlier notice to you. We may whenever in our sole and total carefulness, demand that you update your Personal Data or forthwith negate the record or related subtleties without giving any explanation or earlier notice and will not be at risk or liability for any misfortunes endured by or brought about by you or emerging out of or regarding or by reason of such solicitation or nullification. You thusly consent to change your secret key now and again and to keep your record secure and furthermore will be answerable for the privacy of your record and obligated for any revelation or use (regardless of whether such use is approved or n', 1, 'admin'),
(2, 'About Us', '<p>asas</p>', 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `update_by` varchar(100) NOT NULL,
  `update_date` datetime NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `email`, `username`, `pass`, `created_by`, `created_date`, `update_by`, `update_date`, `status`) VALUES
(11, 'Ashikur Rahman', 'liton@gmail.com', 'admin', 'e10adc3949ba59abbe56e057f20f883e', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

DROP TABLE IF EXISTS `tbl_brand`;
CREATE TABLE IF NOT EXISTS `tbl_brand` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` varchar(100) NOT NULL,
  `update_by` datetime NOT NULL,
  `update_date` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `title`, `image`, `created_by`, `created_date`, `update_by`, `update_date`, `status`) VALUES
(1, 'Brand one', '617324023a0da04872d6e94aac682470.png', NULL, '29-04-2019 06:35:30', '0000-00-00 00:00:00', '', 1),
(2, 'Brand two', '80560cd26970456226d875022866c9dd.png', NULL, '29-04-2019 07:11:03', '0000-00-00 00:00:00', '', 1),
(3, 'Brand three', '46fa3be10b3d23c393c95c2533882cf0.jpg', 0, '18-06-2020 10:39:45', '0000-00-00 00:00:00', '2019-04-29 07:22:22', 1),
(4, 'Brand Four', 'e3789696c8f00740d21ac0a9f31d25f1.png', 0, '18-06-2020 10:40:29', '0000-00-00 00:00:00', '2020-06-18 10:58:17', 2),
(5, 'Brand Four', '2989c9714c31bab046ef4b05686e909c.png', 0, '18-06-2020 10:59:29', '0000-00-00 00:00:00', '', 1),
(6, 'Brand Five', '7520a41a5006b34e2c18eed07aea199e.jpg', 0, '18-06-2020 11:00:06', '0000-00-00 00:00:00', '', 1),
(7, 'Brand Six', '58b881c9d35fcb4ca0304c77fb962e6e.png', 0, '18-06-2020 11:00:39', '0000-00-00 00:00:00', '', 1),
(8, 'Brand seven', '2dcfe63df5a2aa9f8cc633f92208bcf6.png', 0, '18-06-2020 11:01:15', '0000-00-00 00:00:00', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

DROP TABLE IF EXISTS `tbl_cart`;
CREATE TABLE IF NOT EXISTS `tbl_cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `pro_title` varchar(300) DEFAULT NULL,
  `pro_description` text,
  `pro_image` text NOT NULL,
  `pro_price` float NOT NULL,
  `pro_old_price` float NOT NULL,
  `pro_status` int(11) NOT NULL,
  `s_id` varchar(100) NOT NULL,
  `pro_quantity` int(11) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM AUTO_INCREMENT=349 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `pro_id`, `cat_id`, `pro_title`, `pro_description`, `pro_image`, `pro_price`, `pro_old_price`, `pro_status`, `s_id`, `pro_quantity`) VALUES
(347, 25, 9, 'Kory Bangla', '<p>Kory Bangla</p>', 'ba94837966b279015c064800cd00cdaf.jpeg', 100, 10, 1, 'hafftgrmd1url9sf0294s90rjchr22lt', 1),
(342, 14, 13, 'Round Neck Black T-Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '9eaf36c23426961b35cb32aa1d2c90c2.jpeg', 450, 500, 1, '7tot8bsvliv6n07oe5n507kucm5kpvf1', 3),
(343, 25, 9, 'Kory Bangla', '<p>Kory Bangla</p>', 'ba94837966b279015c064800cd00cdaf.jpeg', 100, 10, 1, 'v4oofnekfeupnv5985lj7rk8dkohpcoe', 1),
(344, 25, 9, 'Kory Bangla', '<p>Kory Bangla</p>', 'ba94837966b279015c064800cd00cdaf.jpeg', 100, 10, 1, '2nrctujo7ue2hgqase7stmov6k4tssje', 1),
(345, 15, 13, 'Reversible Belt', '<p>descriptionYou can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of &nbsp;stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '9451325ac1541a710bb96aa4cabc7b7d.jpeg', 750, 20, 1, '496fhn3jekseemb3ah2t93d3m97otf42', 1),
(346, 6, 9, 'Reversible Belt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '2067b533ca83eaf5015039dd2b57e1db.jpeg', 325, 625, 1, 'rfhupcklqrleqk27dek2hroalmdmocmq', 1),
(332, 14, 13, 'Round Neck Black T-Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '9eaf36c23426961b35cb32aa1d2c90c2.jpeg', 450, 500, 1, 'u2vei8ct1a88h1udqmi9ot4bb9gonta2', 1),
(329, 15, 13, 'Reversible Belt', '<p>descriptionYou can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of &nbsp;stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '9451325ac1541a710bb96aa4cabc7b7d.jpeg', 750, 20, 1, '0j3eaqjohaaqkkb2e1o4uinmthjfkvkg', 100),
(330, 12, 11, 'Dark Blue Track Pants', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '58aa683fa27d0e5f2a7eb7a44c1c3d04.jpeg', 325, 420, 1, 'uvfp91hnd4jjui42a8i9r5ossdnct703', 1),
(331, 5, 10, 'Gabi Full Sleeve Sweatshirt', '<p>&nbsp;</p>\r\n\r\n<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>\r\n\r\n<p>&nbsp;</p>', '882204aec9f8682362a9fadad987d80c.jpeg', 214, 325, 1, 'u2vei8ct1a88h1udqmi9ot4bb9gonta2', 1),
(324, 14, 13, 'Round Neck Black T-Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '9eaf36c23426961b35cb32aa1d2c90c2.jpeg', 450, 500, 1, '9bvaoq7eqo2d3egja46ha937tdrjmbas', 1),
(323, 14, 13, 'Round Neck Black T-Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '9eaf36c23426961b35cb32aa1d2c90c2.jpeg', 450, 500, 1, '3r2aoj07oe5o2i8j9lmn3v9nlrcrneod', 1),
(322, 14, 13, 'Round Neck Black T-Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '9eaf36c23426961b35cb32aa1d2c90c2.jpeg', 450, 500, 1, 'ijf84p4l10pn5sd19m38u77c565hp4fd', 1),
(321, 14, 13, 'Round Neck Black T-Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '9eaf36c23426961b35cb32aa1d2c90c2.jpeg', 450, 500, 1, 'pjrl2dr25kjhgj7dll0o3pjgccf84bbk', 1),
(319, 25, 9, 'Kory Bangla', '<p>Kory Bangla</p>', 'ba94837966b279015c064800cd00cdaf.jpeg', 100, 10, 1, 't3go8fra4ui22ropqv2dlvopaers6jrv', 1),
(320, 15, 13, 'Reversible Belt', '<p>descriptionYou can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of &nbsp;stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '9451325ac1541a710bb96aa4cabc7b7d.jpeg', 750, 20, 1, 'f75andhsf5qivarvtb4660u3bb407k4p', 1),
(317, 25, 9, 'Kory Bangla', '<p>Kory Bangla</p>', 'ba94837966b279015c064800cd00cdaf.jpeg', 100, 10, 1, '21mqom3337t4jrujjaejkl2jq3bd3e88', 1),
(318, 14, 13, 'Round Neck Black T-Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '9eaf36c23426961b35cb32aa1d2c90c2.jpeg', 450, 500, 1, '9od9lhlkgfdch97t5kduub8venqlh4h8', 1),
(313, 14, 13, 'Round Neck Black T-Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '9eaf36c23426961b35cb32aa1d2c90c2.jpeg', 450, 500, 1, '0h8p09m5ttjrsr9hjvoeisj7rq4b68r3', 100),
(311, 25, 9, 'Kory Bangla', '<p>Kory Bangla</p>', 'ba94837966b279015c064800cd00cdaf.jpeg', 100, 10, 1, 'jcsdhorvacfe9ta39oiev5ivv4af5kh7', 1),
(312, 11, 9, 'Laptop Backpack', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '3315af81a56021c2efa4f1b364283a5d.jpeg', 230, 330, 1, 'bhhj092e5rtdkgeeu328t4q7l6v5a5i1', 1),
(310, 15, 13, 'Reversible Belt', '<p>descriptionYou can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of &nbsp;stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '9451325ac1541a710bb96aa4cabc7b7d.jpeg', 750, 20, 1, 's1n8kvtois24ususpfc3hr31t2bfhptk', 5),
(306, 25, 9, 'Kory Bangla', '<p>Kory Bangla</p>', 'ba94837966b279015c064800cd00cdaf.jpeg', 100, 10, 1, 'la6u9485ai6nfgmrd3qaoci52jvkvlo4', 1),
(307, 15, 13, 'Reversible Belt', '<p>descriptionYou can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of &nbsp;stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '9451325ac1541a710bb96aa4cabc7b7d.jpeg', 750, 20, 1, 'la6u9485ai6nfgmrd3qaoci52jvkvlo4', 1),
(308, 25, 9, 'Kory Bangla', '<p>Kory Bangla</p>', 'ba94837966b279015c064800cd00cdaf.jpeg', 100, 10, 1, '8r0n52u5birdseef6366j29pu12kmo63', 1),
(309, 15, 13, 'Reversible Belt', '<p>descriptionYou can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of &nbsp;stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '9451325ac1541a710bb96aa4cabc7b7d.jpeg', 750, 20, 1, 'fkcq0dif4trsrdl7hq9shasl2u09gage', 1),
(304, 14, 13, 'Round Neck Black T-Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '9eaf36c23426961b35cb32aa1d2c90c2.jpeg', 450, 500, 1, 'os04gbf2ghgg17s463g4g6lbr160e68l', 1),
(303, 11, 9, 'Laptop Backpack', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '3315af81a56021c2efa4f1b364283a5d.jpeg', 230, 330, 1, 'u75jrl71lvmf1ud17itv705356g4pbru', 1),
(301, 11, 9, 'Laptop Backpack', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '3315af81a56021c2efa4f1b364283a5d.jpeg', 230, 330, 1, '3bmqo68gdkavol03ea7bbd5rm2n4qii6', 1),
(302, 9, 10, 'Sleeveless Solid Blue Top', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '4350e5062610460187323b7891bdb5e3.jpeg', 325, 425, 1, 'csqco0r3gtrftvkam19j208rpcovi09v', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE IF NOT EXISTS `tbl_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  `cat_created_by` varchar(100) DEFAULT NULL,
  `cat_created_date` datetime NOT NULL,
  `cat_update_by` varchar(100) NOT NULL,
  `cat_update_date` datetime NOT NULL,
  `cat_status` int(1) NOT NULL,
  `cat_logo` varchar(100) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`, `cat_created_by`, `cat_created_date`, `cat_update_by`, `cat_update_date`, `cat_status`, `cat_logo`) VALUES
(8, 'Footware', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1, ''),
(9, 'Bags', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1, ''),
(10, 'Women\'s', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1, ''),
(11, 'Men\'s', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1, ''),
(13, 'garaments', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1, ''),
(14, 'a', 'Ashikur Rahman', '0000-00-00 00:00:00', 'liton', '2020-06-17 04:58:42', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_colors`
--

DROP TABLE IF EXISTS `tbl_colors`;
CREATE TABLE IF NOT EXISTS `tbl_colors` (
  `colors_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `colors_name` varchar(255) NOT NULL,
  `colors_code` varchar(255) NOT NULL,
  `colors_status` int(1) NOT NULL,
  PRIMARY KEY (`colors_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_colors`
--

INSERT INTO `tbl_colors` (`colors_id`, `product_id`, `colors_name`, `colors_code`, `colors_status`) VALUES
(1, 15, 'red', '#000000', 1),
(2, 15, 'red', '#ff0000', 1),
(3, 15, 'green', '#00ff00', 1),
(4, 15, 'blue', '#80ff00', 1),
(5, 13, 'red', '#ff0000', 1),
(6, 13, 'blue', '#00ff80', 1),
(7, 13, 'green', '#008000', 1),
(8, 14, 'white', '#ffffff', 1),
(9, 14, 'red', '#ff0000', 1),
(10, 14, 'green', '#008000', 1),
(11, 17, 'red', '#ff0000', 1),
(12, 17, 'purple', '#ff8000', 1),
(13, 17, 'green', '#80ff00', 1),
(14, 15, 'red', '#000000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

DROP TABLE IF EXISTS `tbl_contact`;
CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` text NOT NULL,
  `phone` varchar(100) NOT NULL,
  `phone2` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email2` varchar(50) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `update_by` varchar(100) NOT NULL,
  `update_date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `address`, `phone`, `phone2`, `email`, `email2`, `created_by`, `created_date`, `update_by`, `update_date`, `status`) VALUES
(1, '<p>Mirpur 10</p>\r\n\r\n<p>Dhaka, Banglades</p>', '+88 1516762466', '+88 1516762466', 'info@kroybangla.com', 'info@kroybangla2.com', '', '0000-00-00 00:00:00', 'admin', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

DROP TABLE IF EXISTS `tbl_customer`;
CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `created_by` varchar(100) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `update_by` varchar(100) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `zip_code` varchar(20) NOT NULL,
  `city` text NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`c_id`, `created_by`, `created_date`, `update_by`, `updated_date`, `status`, `first_name`, `last_name`, `email`, `phone`, `address`, `zip_code`, `city`, `password`) VALUES
(1, 'liton', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1, '', '', '', '', '', '', '', ''),
(7, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(8, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(11, 'a', '2020-06-02 00:00:00', '2', '2020-06-17 00:00:00', 1, 'asddsad', 'aSdasd', 'admin@gmail.com', '018', '', '5250', 'Dinajpur', '202cb962ac59075b964b07152d234b70'),
(19, NULL, NULL, NULL, NULL, 1, 'Ashikur Rahman', '', 'ashikurrahmanpeters@gmail.com', '01752737030', 'Haydarabad, Gazipur\r\nHaydarabad, Gazipur', '', '', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

DROP TABLE IF EXISTS `tbl_district`;
CREATE TABLE IF NOT EXISTS `tbl_district` (
  `district_id` int(11) NOT NULL AUTO_INCREMENT,
  `district_name` varchar(255) NOT NULL,
  `district_status` int(1) NOT NULL,
  `district_created_by` varchar(20) NOT NULL,
  `district_created_date` date NOT NULL,
  PRIMARY KEY (`district_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `district_name`, `district_status`, `district_created_by`, `district_created_date`) VALUES
(9, 'sa', 1, 'sa', '2020-06-17'),
(10, 'a', 2, 'Ashikur Rahman', '0000-00-00'),
(11, 'aaa', 1, 'Ashikur Rahman', '0000-00-00'),
(12, 'qwa', 1, 'Ashikur Rahman', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_featured`
--

DROP TABLE IF EXISTS `tbl_featured`;
CREATE TABLE IF NOT EXISTS `tbl_featured` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `update_by` varchar(100) NOT NULL,
  `update_date` datetime NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_featured`
--

INSERT INTO `tbl_featured` (`id`, `title`, `description`, `image`, `type`, `created_by`, `created_date`, `update_by`, `update_date`, `status`) VALUES
(1, 'single Category page offer', '<h3><span style=\"color:#e74c3c\">NEW</span> FEATURE</h3>', 'a62749ca075a323f9d888c37637afd02.jpg', 'featured', NULL, '0000-00-00 00:00:00', 'admin', '0000-00-00 00:00:00', 1),
(2, 'Home page offer nine', '<h3><span style=\"color:#e74c3c\">S</span>HOE</h3>', '4839ff9c98e7b50f73970620d92bd535.jpg', 'special_featured', NULL, '0000-00-00 00:00:00', 'admin', '0000-00-00 00:00:00', 1),
(3, 'Home page offer eight', '<h3><span style=\"color:#d35400\">NEW</span> FEATURE</h3>', '17d818b2fcd016ca9e4aa64ae92d42a3.jpg', 'featured', NULL, '0000-00-00 00:00:00', 'admin', '0000-00-00 00:00:00', 1),
(4, 'Home page offer seven', '<p>featured test</p>', '756b69cc2f1e7fb1435aa36532ac2212.jpg', 'special_featured', NULL, '0000-00-00 00:00:00', 'admin', '0000-00-00 00:00:00', 1),
(5, 'Home page offer six', '<p>Coat <span style=\"color:#e74c3c\">50%</span> Offer</p>', '8eddb52e28569691fd7209641ee84f32.jpg', 'offer', NULL, '0000-00-00 00:00:00', 'admin', '0000-00-00 00:00:00', 1),
(6, 'Home page offer five', '<p>Coat&nbsp;<span style=\"color:#e74c3c\">50%</span>&nbsp;Offer</p>', '7c251ea6221445e2214c0dcf0857244d.jpg', 'offer', NULL, '0000-00-00 00:00:00', 'admin', '0000-00-00 00:00:00', 1),
(7, 'Home page offer four', '<p><span style=\"color:#e74c3c\">S</span>HOE</p>', '341e9f5d718eac0da58e157f303166bd.jpg', 'special_featured', NULL, '0000-00-00 00:00:00', 'admin', '0000-00-00 00:00:00', 1),
(8, 'Home page offer three', '<p><span style=\"color:#e74c3c\">S</span>ALE</p>', 'be353e5425980dfd34b57df6cde105fb.jpg', 'special_featured', NULL, '0000-00-00 00:00:00', 'admin', '0000-00-00 00:00:00', 1),
(9, 'Home page offer two', 'as', '31df934123a52d7d7427174534ff3455.jpg', 'a', 'sas', '2020-06-17 00:00:00', 'admin', '0000-00-00 00:00:00', 1),
(10, 'Home page offer one', 'as', '8102e9f7a3f36629255d4bf54381af78.jpg', 'a', 'sas', '2020-06-17 00:00:00', 'admin', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

DROP TABLE IF EXISTS `tbl_image`;
CREATE TABLE IF NOT EXISTS `tbl_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_image`
--

INSERT INTO `tbl_image` (`id`, `product_id`, `image`, `status`) VALUES
(1, 15, '5e01d4259d7cd3b20d8265a28b0491d5.jpg', 2),
(2, 15, '24941b9c554ec70007943ac01345b966.jpg', 2),
(3, 15, '4e430d7150cbea0a6ac4ca13d0b94633.jpg', 2),
(4, 15, '9069fb2047b4a192f019925d68505437.jpg', 2),
(5, 15, 'd43758b908a7be5f1d4f7d565958b5c4.jpg', 1),
(6, 13, 'bcb6aab7d231c22c7efd089667d369ba.jpg', 1),
(7, 13, '83d010f08f00a57443f7ec9ccfc721c8.jpg', 1),
(8, 13, '462e053005cf4c3a4950e63ba3f238d7.jpg', 1),
(9, 13, 'ed472b7e0798732413a2bd20e92c6c00.jpg', 1),
(10, 14, 'e152e62907a626c2dfaf0553d2c6fa6d.jpg', 1),
(11, 14, '162a8316f0fb07adf371838fef10567a.jpg', 1),
(12, 14, '5ab3c9d8093e13502bc11578aaca1b5a.jpg', 1),
(13, 17, '31da2dbb36468c5cf14044744e2b7140.jpg', 1),
(14, 17, '782de68e032503c3b3bf85c9b8d39bde.jpg', 1),
(15, 17, '9f3d650a5b95a411da2beb4585e3aca5.gif', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

DROP TABLE IF EXISTS `tbl_message`;
CREATE TABLE IF NOT EXISTS `tbl_message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `message_name` varchar(20) NOT NULL,
  `message_phone` int(12) NOT NULL,
  `message_mail` varchar(30) NOT NULL,
  `message` varchar(200) NOT NULL,
  `message_status` int(1) NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `message_sub` varchar(100) NOT NULL,
  `update_by` varchar(20) NOT NULL,
  `update_date` varchar(20) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`message_id`, `message_name`, `message_phone`, `message_mail`, `message`, `message_status`, `created_date`, `message_sub`, `update_by`, `update_date`) VALUES
(13, 'Ashikur Rahman', 1752737030, 'as@gmail.com', 'sa', 2, '18-06-2020 10:33:32', 'sadsad', 'admin', '18-06-2020 10:36:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

DROP TABLE IF EXISTS `tbl_orders`;
CREATE TABLE IF NOT EXISTS `tbl_orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_pro_id` int(11) NOT NULL,
  `order_c_id` int(11) NOT NULL,
  `order_time` datetime NOT NULL,
  `order_date` date NOT NULL,
  `order_status_order` varchar(10) NOT NULL,
  `master_id` int(11) NOT NULL,
  `pro_quantity` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`order_id`, `order_pro_id`, `order_c_id`, `order_time`, `order_date`, `order_status_order`, `master_id`, `pro_quantity`) VALUES
(87, 7, 19, '2020-06-18 11:06:27', '2020-06-18', 'p', 57, 6),
(86, 14, 19, '2020-06-16 12:06:40', '2020-06-16', 'p', 56, 1),
(85, 15, 19, '2020-06-16 10:06:24', '2020-06-16', 'p', 53, 1),
(84, 15, 11, '2020-06-16 10:06:07', '2020-06-16', 'p', 52, 1),
(83, 6, 11, '2020-06-16 10:06:16', '2020-06-16', 'p', 51, 1),
(82, 8, 11, '2020-06-16 10:06:46', '2020-06-16', 'p', 50, 6),
(81, 14, 11, '2020-06-16 10:06:46', '2020-06-16', 'p', 50, 1),
(80, 14, 11, '2020-06-16 09:06:26', '2020-06-16', 'p', 49, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders_master`
--

DROP TABLE IF EXISTS `tbl_orders_master`;
CREATE TABLE IF NOT EXISTS `tbl_orders_master` (
  `order_m_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_date` date NOT NULL,
  `order_time` datetime NOT NULL,
  `name` varchar(300) COLLATE utf8mb4_bin NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `address` text COLLATE utf8mb4_bin NOT NULL,
  `district_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `order_status` varchar(1) COLLATE utf8mb4_bin NOT NULL,
  `amount` float NOT NULL,
  `delivery_charge` float NOT NULL,
  `total_amount` float NOT NULL,
  PRIMARY KEY (`order_m_id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `tbl_orders_master`
--

INSERT INTO `tbl_orders_master` (`order_m_id`, `order_date`, `order_time`, `name`, `phone`, `address`, `district_id`, `c_id`, `order_status`, `amount`, `delivery_charge`, `total_amount`) VALUES
(57, '2020-06-18', '2020-06-18 11:06:27', 'Ashikur Rahman', '01752737030', 'Haydarabad, Gazipur\r\nHaydarabad, Gazipur', 11, 19, 'p', 1290, 0, 1340),
(56, '2020-06-16', '2020-06-16 12:06:40', 'Ashikur Rahman', '01752737030', 'Haydarabad, Gazipur\r\nHaydarabad, Gazipur', 3, 19, 'p', 450, 0, 500),
(55, '2020-06-16', '2020-06-16 12:06:20', 'Ashikur Rahman', '01752737030', 'Haydarabad, Gazipur\r\nHaydarabad, Gazipur', 3, 19, 'p', 450, 0, 500),
(54, '2020-06-16', '2020-06-16 12:06:10', 'Ashikur Rahman', '01752737030', 'Haydarabad, Gazipur\r\nHaydarabad, Gazipur', 3, 19, 'p', 450, 0, 500),
(53, '2020-06-16', '2020-06-16 10:06:24', 'Ashikur Rahman', '01752737030', 'Haydarabad, Gazipur\r\nHaydarabad, Gazipur', 3, 19, 's', 750, 0, 800),
(52, '2020-06-16', '2020-06-16 10:06:07', 'Ashikur Rahman', '01752737030', 'Haydarabad, Gazipur\r\nHaydarabad, Gazipur', 3, 19, 's', 750, 0, 800),
(51, '2020-06-16', '2020-06-16 10:06:16', 'Ashikur Rahman', '01752737030', 'Haydarabad, Gazipur\r\nHaydarabad, Gazipur', 3, 11, 'p', 325, 0, 375),
(50, '2020-06-16', '2020-06-16 10:06:46', 'Ashikur Rahman', '01752737030', 'Haydarabad, Gazipur\r\nHaydarabad, Gazipur', 3, 11, 'p', 1740, 0, 1790),
(49, '2020-06-16', '2020-06-16 09:06:26', 'Ashikur Rahman', '01752737030', 'Haydarabad, Gazipur\r\nHaydarabad, Gazipur', 3, 11, 's', 450, 0, 500);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

DROP TABLE IF EXISTS `tbl_products`;
CREATE TABLE IF NOT EXISTS `tbl_products` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `pro_title` varchar(255) NOT NULL,
  `pro_description` text NOT NULL,
  `pro_image` text NOT NULL,
  `pro_price` decimal(10,0) NOT NULL,
  `pro_old_price` decimal(10,0) NOT NULL,
  `pro_created_by` varchar(100) DEFAULT NULL,
  `pro_created_date` datetime NOT NULL,
  `pro_update_by` varchar(100) NOT NULL,
  `pro_update_date` datetime NOT NULL,
  `pro_status` int(1) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '1',
  `future_product` varchar(1) NOT NULL DEFAULT 'n',
  `size` varchar(20) NOT NULL,
  `brand_id` int(20) NOT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`pro_id`, `cat_id`, `pro_title`, `pro_description`, `pro_image`, `pro_price`, `pro_old_price`, `pro_created_by`, `pro_created_date`, `pro_update_by`, `pro_update_date`, `pro_status`, `active`, `future_product`, `size`, `brand_id`) VALUES
(5, 10, 'Gabi Full Sleeve Sweatshirt', '<p>&nbsp;</p>\r\n\r\n<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>\r\n\r\n<p>&nbsp;</p>', '882204aec9f8682362a9fadad987d80c.jpeg', '214', '325', NULL, '2019-04-28 15:14:41', 'admin', '2020-06-14 11:55:48', 1, 1, 'n', '', 0),
(6, 9, 'Reversible Belt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '2067b533ca83eaf5015039dd2b57e1db.jpeg', '325', '625', NULL, '2019-04-28 15:15:19', 'admin', '2020-06-14 11:55:36', 1, 1, 'n', '', 0),
(7, 8, 'Round Neck Black T-Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '0997973023973b59f8f4409b2fe7105a.jpeg', '215', '325', NULL, '2019-04-28 15:15:55', 'admin', '2020-06-14 11:55:26', 1, 1, 'n', '', 0),
(8, 11, 'Gabi Full Sleeve Sweatshirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', 'eefe5c289737037fce3dd030e3e739a4.jpeg', '215', '326', NULL, '2019-04-28 15:44:06', 'admin', '2020-06-14 11:55:17', 1, 1, 'n', '', 0),
(9, 10, 'Sleeveless Solid Blue Top', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '4350e5062610460187323b7891bdb5e3.jpeg', '325', '425', NULL, '2019-04-28 16:00:20', 'admin', '2020-06-14 11:55:08', 1, 1, 'n', '', 0),
(10, 8, 'Big Wing Sneakers (Navy)', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '5f3452faa7de74b6a33105f8ef3c4da4.jpeg', '150', '0', NULL, '2019-04-28 16:02:05', 'admin', '2020-06-14 11:54:58', 1, 1, 'n', '', 0),
(11, 9, 'Laptop Backpack', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '3315af81a56021c2efa4f1b364283a5d.jpeg', '230', '330', NULL, '2019-04-28 16:08:27', 'admin', '2020-06-14 11:54:47', 1, 1, 'n', '', 0),
(12, 11, 'Dark Blue Track Pants', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '58aa683fa27d0e5f2a7eb7a44c1c3d04.jpeg', '325', '420', NULL, '2019-04-28 16:12:54', 'admin', '2020-06-14 11:54:37', 1, 1, 'n', '', 0),
(14, 13, 'Round Neck Black T-Shirt', '<p>You can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of</p>\r\n\r\n<p>stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '9eaf36c23426961b35cb32aa1d2c90c2.jpeg', '450', '500', NULL, '2019-05-04 08:59:15', 'admin', '2020-06-14 11:54:28', 1, 1, 'n', '', 0),
(15, 13, 'Reversible Belt', '<p>descriptionYou can get the product within \\&#39;three\\&#39; working days after confirmation of the order by our customer care representative You can get the product from our office Home delivery is also available Delivery charge: Inside Dhaka-49 Taka, outside Dhaka-99 Taka You can pay online from your card or bKash, also you can pay cash to our office Your booking does not always guarantee product delivery. Product delivery is entirely subjected to availability of &nbsp;stock Color of the products may slightly vary due to photography, lighting sources or your monitor setting/ PC resolution Product delivery may be interrupted or delayed due to natural disaster or in case of political unrest In case of delivery outside Dhaka, customers may have to collect certain products from the nearby courier service office Stock is limited!</p>', '9451325ac1541a710bb96aa4cabc7b7d.jpeg', '750', '20', NULL, '2019-05-08 08:00:21', 'admin', '2020-06-14 11:54:18', 1, 1, 'n', '', 0),
(25, 9, 'Kory Bangla', '<p>Kory Bangla</p>', 'ba94837966b279015c064800cd00cdaf.jpeg', '100', '10', 'admin', '2020-06-14 11:52:55', 'admin', '2020-06-14 11:54:05', 1, 1, 'f', 'asa', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_size`
--

DROP TABLE IF EXISTS `tbl_size`;
CREATE TABLE IF NOT EXISTS `tbl_size` (
  `size_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `size_name` varchar(255) NOT NULL,
  `size_status` int(1) NOT NULL,
  PRIMARY KEY (`size_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_size`
--

INSERT INTO `tbl_size` (`size_id`, `product_id`, `size_name`, `size_status`) VALUES
(1, 7, 'S', 1),
(2, 7, 'M', 1),
(3, 7, 'L', 1),
(4, 7, 'XL', 1),
(5, 7, 'XXL', 1),
(6, 15, 'S', 1),
(7, 15, 'M', 1),
(8, 15, 'L', 2),
(9, 13, 'S', 1),
(10, 14, 'S', 1),
(11, 14, 'M', 1),
(12, 15, 'XL', 2),
(13, 13, 'M', 1),
(14, 13, 'L', 1),
(15, 13, 'XL', 1),
(16, 17, 'S', 1),
(17, 17, 'M', 1),
(18, 17, 'L', 1),
(19, 17, 'XL', 1),
(20, 20, '10 kg', 1),
(21, 20, '50 kg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

DROP TABLE IF EXISTS `tbl_slider`;
CREATE TABLE IF NOT EXISTS `tbl_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slogan` text NOT NULL,
  `image` text NOT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `update_by` varchar(100) NOT NULL,
  `update_date` datetime NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `title`, `slogan`, `image`, `created_by`, `created_date`, `update_by`, `update_date`, `status`) VALUES
(8, 'New Arrivals On Sale', '<h3>SUMMER&nbsp;<span style=\"color:#1abc9c\">COLLECTION</span></h3>', '769f7baa05f2ca123df79a19be0a5067.jpg', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1),
(10, 'Special for today', '<h3>THE BIGGEST&nbsp;<span style=\"color:#1abc9c\">SALE</span></h3>', 'aabb0d7257771abf3d20f8259eefe61e.jpg', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1),
(11, 'Hello', '', 'a6d2b227704e8c8e1c58bd3545b644a9.jpg', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1),
(12, 'Hi', '', '0dad36e646cfdbff404fbbb2ae3d99dc.jpeg', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1),
(13, 'Offer 35%', '', 'a8cc9e0edfd7487db6f45d9c996f2042.jpg', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team`
--

DROP TABLE IF EXISTS `tbl_team`;
CREATE TABLE IF NOT EXISTS `tbl_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `update_by` varchar(100) NOT NULL,
  `update_date` datetime NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_team`
--

INSERT INTO `tbl_team` (`id`, `name`, `description`, `image`, `created_by`, `created_date`, `update_by`, `update_date`, `status`) VALUES
(1, 'Joanna Vilken', '<p>Add Short Description</p>', '285aa0487287556dc3f7a8cb0f76b5b1.jpg', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1),
(2, 'Anika Mollik', '<p>Add Short Description</p>', '674ed399885c8984e14b3108975fd23d.jpg', NULL, '0000-00-00 00:00:00', '', '2019-05-06 08:08:18', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
