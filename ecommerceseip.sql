-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 30, 2021 at 03:22 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerceseip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8 NOT NULL,
  `soft_delete` tinyint(1) NOT NULL,
  `is_draft` tinyint(1) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone`, `soft_delete`, `is_draft`, `created_at`, `modified_at`) VALUES
(7, 'Mohammed Asif Khan', 'asifulhauqe1234@gmail.com', 'asifkhan', '234-45-678', 0, 1, '2021-12-21 09:39:18', '2021-12-21 01:39:18'),
(8, 'rt', 'ty@gmail.com', '1212', '111-45-869', 0, 1, '2021-12-21 11:29:24', '2021-12-21 11:30:06');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `promotional_message` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `html_banner` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_draft` tinyint(1) NOT NULL,
  `soft_delete` tinyint(1) NOT NULL,
  `max_display` tinyint(1) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `picture`, `link`, `promotional_message`, `html_banner`, `is_active`, `is_draft`, `soft_delete`, `max_display`, `created_at`, `modified_at`) VALUES
(15, 'Afsan', 'IMG_1640078591_FB_IMG_1639540965452.jpg', '', 'adssdgfds', 'asfdg', 1, 1, 0, 1, '2021-12-21 09:23:11', '2021-12-21 01:23:12');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `sid` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `picture` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `product_title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `unity_price` int(11) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `sid`, `product_id`, `picture`, `product_title`, `qty`, `unity_price`, `total_price`) VALUES
(11, 2345, 12, 'IMG_1640078949_IMG_1639557814_custom-img4.jpg', 'asdfg', 2, 100, 200),
(13, 75, 8675, 'IMG_1640080790_IMG_1639475662_product1-700x850.jpg', 'ghh', 8, 90, 720),
(14, 125, 4556, 'IMG_1640082124_IMG_1639475662_product1-700x850.jpg', 'chair', 2, 1500, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `link` varchar(255) CHARACTER SET utf8 NOT NULL,
  `soft_delete` tinyint(1) DEFAULT NULL,
  `is_draft` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `link`, `soft_delete`, `is_draft`, `created_at`, `modified_at`) VALUES
(7, 'Chair', 'ahsdkjhd', 1, 1, '2021-12-21 09:32:39', '2021-12-21 01:32:39');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(40) CHARACTER SET utf8 NOT NULL,
  `email` varchar(40) CHARACTER SET utf8 NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8 NOT NULL,
  `comment` text CHARACTER SET utf8 NOT NULL,
  `status` tinyint(4) NOT NULL,
  `soft_delete` int(1) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `comment`, `status`, `soft_delete`, `date`) VALUES
(6, 'Asif', 'arifkhan2011@gmai.com', 'Abcd', 'bye', 1, 0, '2021-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `lebel_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `brand_id`, `lebel_id`, `title`, `picture`, `is_active`, `created_at`, `modified_at`, `is_deleted`) VALUES
(29, NULL, NULL, 'asif', 'IMG_1640083759_IMG_1639557814_custom-img4.jpg', 1, '2021-12-21 09:46:30', '2021-12-21 10:49:19', 0),
(31, NULL, NULL, 'awqe', 'IMG_1640084304_IMG_1639475662_product1-700x850.jpg', 0, '2021-12-21 10:58:24', '2021-12-21 02:58:24', 1),
(32, NULL, NULL, 'jhgdjhfjk', 'IMG_1640854814_blog-img2-913x500.jpg', 1, '2021-12-30 15:00:14', '2021-12-30 15:00:14', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
