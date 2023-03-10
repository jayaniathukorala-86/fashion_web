-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 04, 2023 at 04:58 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `fc_countries`
--

CREATE TABLE `fc_countries` (
  `fc_country_id` int(11) NOT NULL,
  `fc_country_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fc_countries`
--

INSERT INTO `fc_countries` (`fc_country_id`, `fc_country_name`) VALUES
(1, 'Sweden'),
(2, 'Sri Lanka'),
(3, 'United Kingdom'),
(4, 'Canada');

-- --------------------------------------------------------

--
-- Table structure for table `fc_order_details`
--

CREATE TABLE `fc_order_details` (
  `fc_order_id` int(11) NOT NULL,
  `c_name` varchar(150) NOT NULL,
  `c_email` varchar(150) NOT NULL,
  `c_telephone` int(11) NOT NULL,
  `c_address1` varchar(100) NOT NULL,
  `c_Address2` varchar(100) NOT NULL,
  `c_city` varchar(50) NOT NULL,
  `c_state` varchar(50) NOT NULL,
  `c_zipcode` int(11) NOT NULL,
  `c_country` int(11) NOT NULL,
  `c_payment_method` int(11) NOT NULL,
  `c_title` int(11) NOT NULL,
  `c_captcha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `fc_payment_methods`
--

CREATE TABLE `fc_payment_methods` (
  `fc_pm_id` int(11) NOT NULL,
  `fc_payment_method` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fc_payment_methods`
--

INSERT INTO `fc_payment_methods` (`fc_pm_id`, `fc_payment_method`) VALUES
(1, 'Bank Account'),
(2, 'Cash'),
(3, 'Paypal');

-- --------------------------------------------------------

--
-- Table structure for table `fc_products`
--

CREATE TABLE `fc_products` (
  `fc_poduct_id` int(11) NOT NULL,
  `fc_product_name` varchar(150) NOT NULL,
  `fc_product_details` text NOT NULL,
  `fc_product_price` int(11) NOT NULL,
  `fc_product_discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `fc_titles`
--

CREATE TABLE `fc_titles` (
  `fc_title_id` int(11) NOT NULL,
  `fc_title` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fc_titles`
--

INSERT INTO `fc_titles` (`fc_title_id`, `fc_title`) VALUES
(1, 'Dr'),
(2, 'Miss'),
(3, 'Mr'),
(4, 'Mrs'),
(5, 'Ms'),
(6, 'Other'),
(7, 'Prof'),
(8, 'Rev');

-- --------------------------------------------------------

--
-- Table structure for table `fc_users`
--

CREATE TABLE `fc_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `user_role` int(11) NOT NULL,
  `user_password` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fc_users`
--

INSERT INTO `fc_users` (`user_id`, `user_name`, `user_role`, `user_password`) VALUES
(1, 'jayani', 1, 'jayani123'),
(2, 'harshani', 2, 'harshani123'),
(3, 'kalani', 2, 'kalani123');

-- --------------------------------------------------------

--
-- Table structure for table `fc_user_messages`
--

CREATE TABLE `fc_user_messages` (
  `fc_msg_id` int(11) NOT NULL,
  `fc_msg_subject` varchar(150) NOT NULL,
  `fc_client_name` varchar(150) NOT NULL,
  `fc_message` text NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `fc_user_roles`
--

CREATE TABLE `fc_user_roles` (
  `fc_role_id` int(11) NOT NULL,
  `fc_role` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fc_user_roles`
--

INSERT INTO `fc_user_roles` (`fc_role_id`, `fc_role`) VALUES
(1, 'Manager'),
(2, 'Subject Clerk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fc_countries`
--
ALTER TABLE `fc_countries`
  ADD PRIMARY KEY (`fc_country_id`);

--
-- Indexes for table `fc_order_details`
--
ALTER TABLE `fc_order_details`
  ADD PRIMARY KEY (`fc_order_id`),
  ADD KEY `c_title` (`c_title`),
  ADD KEY `c_country` (`c_country`),
  ADD KEY `c_payment_method` (`c_payment_method`);

--
-- Indexes for table `fc_payment_methods`
--
ALTER TABLE `fc_payment_methods`
  ADD PRIMARY KEY (`fc_pm_id`);

--
-- Indexes for table `fc_products`
--
ALTER TABLE `fc_products`
  ADD PRIMARY KEY (`fc_poduct_id`);

--
-- Indexes for table `fc_titles`
--
ALTER TABLE `fc_titles`
  ADD PRIMARY KEY (`fc_title_id`);

--
-- Indexes for table `fc_users`
--
ALTER TABLE `fc_users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_role` (`user_role`);

--
-- Indexes for table `fc_user_messages`
--
ALTER TABLE `fc_user_messages`
  ADD PRIMARY KEY (`fc_msg_id`);

--
-- Indexes for table `fc_user_roles`
--
ALTER TABLE `fc_user_roles`
  ADD PRIMARY KEY (`fc_role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fc_countries`
--
ALTER TABLE `fc_countries`
  MODIFY `fc_country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `fc_order_details`
--
ALTER TABLE `fc_order_details`
  MODIFY `fc_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `fc_payment_methods`
--
ALTER TABLE `fc_payment_methods`
  MODIFY `fc_pm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `fc_products`
--
ALTER TABLE `fc_products`
  MODIFY `fc_poduct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `fc_titles`
--
ALTER TABLE `fc_titles`
  MODIFY `fc_title_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `fc_users`
--
ALTER TABLE `fc_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `fc_user_messages`
--
ALTER TABLE `fc_user_messages`
  MODIFY `fc_msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `fc_user_roles`
--
ALTER TABLE `fc_user_roles`
  MODIFY `fc_role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fc_order_details`
--
ALTER TABLE `fc_order_details`
  ADD CONSTRAINT `fc_order_details_ibfk_1` FOREIGN KEY (`c_title`) REFERENCES `fc_titles` (`fc_title_id`),
  ADD CONSTRAINT `fc_order_details_ibfk_2` FOREIGN KEY (`c_country`) REFERENCES `fc_countries` (`fc_country_id`),
  ADD CONSTRAINT `fc_order_details_ibfk_3` FOREIGN KEY (`c_payment_method`) REFERENCES `fc_payment_methods` (`fc_pm_id`);

--
-- Constraints for table `fc_users`
--
ALTER TABLE `fc_users`
  ADD CONSTRAINT `fc_users_FK_1` FOREIGN KEY (`user_role`) REFERENCES `fc_user_roles` (`fc_role_id`),
  ADD CONSTRAINT `fc_users_ibfk_1` FOREIGN KEY (`user_role`) REFERENCES `fc_user_roles` (`fc_role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
