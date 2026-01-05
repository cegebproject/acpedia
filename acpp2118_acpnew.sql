-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 05, 2026 at 10:49 AM
-- Server version: 11.4.9-MariaDB-cll-lve
-- PHP Version: 8.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acpp2118_acpnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `ac_types`
--

CREATE TABLE `ac_types` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(120) NOT NULL,
  `icon_url` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `sort_order` int(11) DEFAULT 0,
  `is_active` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(11) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state_province` varchar(100) DEFAULT NULL,
  `postal_code` varchar(20) DEFAULT NULL,
  `country` varchar(100) NOT NULL,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'Primary key, auto-incrementing ID for the brand',
  `name` varchar(150) NOT NULL COMMENT 'Name of the brand (e.g., "Daikin", "LG")',
  `slug` varchar(170) NOT NULL COMMENT 'URL-friendly version of the brand name (e.g., "daikin")',
  `description` text DEFAULT NULL COMMENT 'A short description or summary of the brand',
  `logo_url` varchar(255) DEFAULT NULL COMMENT 'URL for the brand logo image',
  `website_url` varchar(255) DEFAULT NULL COMMENT 'Official website URL of the brand',
  `is_active` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'Status of the brand: 1 = Active, 0 = Inactive',
  `sort_order` int(11) NOT NULL DEFAULT 0 COMMENT 'Sort order for displaying brands',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Timestamp of when the brand was created',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'Timestamp of when the brand was last updated'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Stores product brands';

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'Primary key, auto-incrementing ID for the category',
  `parent_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'ID of the parent category, if this is a sub-category. NULL for top-level categories.',
  `name` varchar(150) NOT NULL COMMENT 'Name of the category (e.g., "Split AC", "Window AC")',
  `slug` varchar(170) NOT NULL COMMENT 'URL-friendly version of the category name (e.g., "split-ac")',
  `description` text DEFAULT NULL COMMENT 'A short description or summary of the category',
  `image_url` varchar(255) DEFAULT NULL COMMENT 'URL for an optional category image',
  `is_active` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'Status of the category: 1 = Active, 0 = Inactive',
  `sort_order` int(11) NOT NULL DEFAULT 0 COMMENT 'Sort order for displaying categories',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Timestamp of when the category was created',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'Timestamp of when the category was last updated'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Stores product categories';

-- --------------------------------------------------------

--
-- Table structure for table `equipment_unit`
--

CREATE TABLE `equipment_unit` (
  `unit_id` int(11) NOT NULL,
  `owner_user_id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL,
  `serial_number` varchar(100) NOT NULL,
  `unit_type` enum('Outdoor','Indoor','Controller','Other') NOT NULL,
  `unit_model` varchar(100) DEFAULT NULL,
  `building_name` varchar(100) DEFAULT NULL,
  `floor_number` varchar(20) DEFAULT NULL,
  `room_name` varchar(100) DEFAULT NULL,
  `installed_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pk_list`
--

CREATE TABLE `pk_list` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `slug` varchar(60) DEFAULT NULL,
  `btu_min` int(11) DEFAULT NULL,
  `btu_max` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `sort_order` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'Primary key, auto-incrementing ID for the product',
  `category_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'Foreign key linking to the categories table',
  `ac_type_id` int(11) DEFAULT NULL,
  `brand_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'Foreign key linking to the brands table',
  `pk_id` int(11) DEFAULT NULL,
  `series_ac` varchar(100) DEFAULT NULL COMMENT 'Product series name or identifier',
  `name` varchar(255) NOT NULL COMMENT 'Product name (e.g., "Daikin 1.5 Ton 5 Star Inverter Split AC")',
  `slug` varchar(270) NOT NULL COMMENT 'URL-friendly version of the product name, unique',
  `base_price` decimal(12,2) NOT NULL DEFAULT 0.00 COMMENT 'The standard retail price of the product',
  `sale_price` decimal(12,2) DEFAULT NULL COMMENT 'Discounted price, if the product is on sale',
  `main_image_url` varchar(255) DEFAULT NULL COMMENT 'URL for the primary product image',
  `additional_image_urls` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL COMMENT 'JSON array of URLs for other product images' CHECK (json_valid(`additional_image_urls`)),
  `specifications` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL COMMENT 'JSON object storing key-value pairs of product specifications (e.g., {"BTU": "18000", "Energy Rating": "5 Star"})' CHECK (json_valid(`specifications`)),
  `features` text DEFAULT NULL COMMENT 'Key features, can be comma-separated or bullet points for display',
  `warranty_info` varchar(255) DEFAULT NULL COMMENT 'Brief warranty information (e.g., "1 Year Comprehensive, 10 Years Compressor")',
  `is_active` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'Product status: 1 = Active (visible on site), 0 = Inactive',
  `is_featured` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Featured product: 1 = Yes, 0 = No',
  `avg_rating` decimal(3,2) NOT NULL DEFAULT 0.00,
  `review_count` int(11) NOT NULL DEFAULT 0,
  `meta_title` varchar(255) DEFAULT NULL COMMENT 'SEO title for the product page',
  `meta_description` text DEFAULT NULL COMMENT 'SEO meta description',
  `meta_keywords` varchar(255) DEFAULT NULL COMMENT 'SEO meta keywords',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Timestamp of product creation',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'Timestamp of last product update',
  `refrigerant_type` varchar(50) DEFAULT NULL COMMENT 'Type of refrigerant used (e.g., R32, R410A)',
  `model_indoor` varchar(100) DEFAULT NULL COMMENT 'Specific model identifier for the indoor unit',
  `model_outdoor` varchar(100) DEFAULT NULL COMMENT 'Specific model identifier for the outdoor unit',
  `btu_per_hour` int(10) UNSIGNED DEFAULT NULL COMMENT 'Cooling capacity in BTU per hour',
  `daya_listrik` varchar(50) DEFAULT NULL COMMENT 'Electrical power consumption in Watts (e.g., "800 Watt")',
  `made_in` varchar(100) DEFAULT NULL COMMENT 'Country of manufacture',
  `bobot_tkdn` decimal(5,2) DEFAULT NULL COMMENT 'TKDN percentage (Tingkat Komponen Dalam Negeri)',
  `dimensi_indoor` varchar(100) DEFAULT NULL COMMENT 'Combined indoor dimensions (e.g., "W x H x D")',
  `dimensi_outdoor` varchar(100) DEFAULT NULL COMMENT 'Combined outdoor dimensions (e.g., "W x H x D")',
  `indoor_width_mm` decimal(8,2) UNSIGNED DEFAULT NULL COMMENT 'Width of the indoor unit in millimeters',
  `indoor_depth_mm` decimal(8,2) UNSIGNED DEFAULT NULL COMMENT 'Depth of the indoor unit in millimeters',
  `indoor_height_mm` decimal(8,2) UNSIGNED DEFAULT NULL COMMENT 'Height of the indoor unit in millimeters',
  `outdoor_width_mm` decimal(8,2) UNSIGNED DEFAULT NULL COMMENT 'Width of the outdoor unit in millimeters',
  `outdoor_depth_mm` decimal(8,2) UNSIGNED DEFAULT NULL COMMENT 'Depth of the outdoor unit in millimeters',
  `outdoor_height_mm` decimal(8,2) UNSIGNED DEFAULT NULL COMMENT 'Height of the outdoor unit in millimeters',
  `indoor_weight_kg` decimal(8,2) UNSIGNED DEFAULT NULL COMMENT 'Weight of the indoor unit in kilograms',
  `outdoor_weight_kg` decimal(8,2) UNSIGNED DEFAULT NULL COMMENT 'Weight of the outdoor unit in kilograms',
  `liquid_pipe_size_inches` decimal(4,2) UNSIGNED DEFAULT NULL COMMENT 'Size of the liquid pipe in inches (e.g., 0.25 for 1/4")',
  `gas_pipe_size_inches` decimal(4,2) UNSIGNED DEFAULT NULL COMMENT 'Size of the gas pipe in inches (e.g., 0.375 for 3/8")',
  `drain_pipe_size_inches` decimal(4,2) UNSIGNED DEFAULT NULL COMMENT 'Size of the drain pipe in inches',
  `max_pipe_length_m` decimal(6,2) UNSIGNED DEFAULT NULL COMMENT 'Maximum allowed pipe length between units in meters',
  `max_pipe_height_m` decimal(6,2) UNSIGNED DEFAULT NULL COMMENT 'Maximum allowed pipe height difference between units in meters',
  `garansi_sparepart` varchar(50) DEFAULT NULL COMMENT 'Warranty period for spare parts (e.g., "1 Tahun")',
  `garansi_kompressor` varchar(50) DEFAULT NULL COMMENT 'Warranty period for the compressor (e.g., "10 Tahun")',
  `general_description` text DEFAULT NULL COMMENT 'A general description of the product, encompassing key details not covered by short/long descriptions.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Stores product master data';

-- --------------------------------------------------------

--
-- Table structure for table `request_attachment`
--

CREATE TABLE `request_attachment` (
  `attachment_id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `storage_path` varchar(255) NOT NULL,
  `mime_type` varchar(100) DEFAULT NULL,
  `uploaded_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request_discussion`
--

CREATE TABLE `request_discussion` (
  `discussion_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `posted_at` timestamp NULL DEFAULT current_timestamp(),
  `is_internal_note` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request_message`
--

CREATE TABLE `request_message` (
  `message_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `posted_at` timestamp NULL DEFAULT current_timestamp(),
  `is_internal_note` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_request`
--

CREATE TABLE `service_request` (
  `request_id` int(11) NOT NULL,
  `submitted_by_user_id` int(11) NOT NULL,
  `assigned_to_user_id` int(11) DEFAULT NULL,
  `type_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `unit_timeline_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `priority` enum('Low','Medium','High','Critical') NOT NULL DEFAULT 'Medium',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_type`
--

CREATE TABLE `service_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(50) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `specialized_admin_data`
--

CREATE TABLE `specialized_admin_data` (
  `data_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_name` varchar(50) DEFAULT NULL,
  `field_key` varchar(50) NOT NULL,
  `field_value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(50) NOT NULL,
  `is_final` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `timeline_attachment`
--

CREATE TABLE `timeline_attachment` (
  `attachment_id` int(11) NOT NULL,
  `timeline_id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `storage_path` varchar(255) NOT NULL,
  `mime_type` varchar(100) DEFAULT NULL,
  `uploaded_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unit_timeline`
--

CREATE TABLE `unit_timeline` (
  `timeline_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activity_type` enum('Service Call','Inspection','Repair','Note','Installation','Maintenance') NOT NULL,
  `description` text NOT NULL,
  `is_public` tinyint(1) DEFAULT 0,
  `posted_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `user_address_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL,
  `address_type` varchar(50) DEFAULT 'Primary',
  `is_primary` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(50) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `user_role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `assigned_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_service_request_detail`
-- (See below for the actual view)
--
CREATE TABLE `v_service_request_detail` (
`request_id` int(11)
,`title` varchar(255)
,`priority` enum('Low','Medium','High','Critical')
,`status_name` varchar(50)
,`service_type` varchar(50)
,`created_at` timestamp
,`submitted_first_name` varchar(50)
,`submitted_last_name` varchar(50)
,`assigned_first_name` varchar(50)
,`assigned_last_name` varchar(50)
,`street_address` varchar(255)
,`city` varchar(100)
,`latitude` decimal(10,8)
,`longitude` decimal(11,8)
,`serial_number` varchar(100)
,`unit_model` varchar(100)
,`room_name` varchar(100)
,`unit_timeline_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_unit_timeline_history`
-- (See below for the actual view)
--
CREATE TABLE `v_unit_timeline_history` (
`timeline_id` int(11)
,`unit_id` int(11)
,`activity_type` enum('Service Call','Inspection','Repair','Note','Installation','Maintenance')
,`description` text
,`is_public` tinyint(1)
,`posted_at` timestamp
,`author_first_name` varchar(50)
,`author_last_name` varchar(50)
,`file_name` varchar(255)
,`storage_path` varchar(255)
);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ac_types`
--
ALTER TABLE `ac_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug_unique` (`slug`),
  ADD UNIQUE KEY `name_unique` (`name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug_unique` (`slug`),
  ADD KEY `parent_id_foreign` (`parent_id`);

--
-- Indexes for table `equipment_unit`
--
ALTER TABLE `equipment_unit`
  ADD PRIMARY KEY (`unit_id`),
  ADD UNIQUE KEY `serial_number` (`serial_number`),
  ADD KEY `owner_user_id` (`owner_user_id`),
  ADD KEY `address_id` (`address_id`);

--
-- Indexes for table `pk_list`
--
ALTER TABLE `pk_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug_unique_products` (`slug`),
  ADD KEY `category_id_foreign_products` (`category_id`),
  ADD KEY `brand_id_foreign_products` (`brand_id`),
  ADD KEY `fk_product_pk` (`pk_id`),
  ADD KEY `fk_product_ac_type` (`ac_type_id`);

--
-- Indexes for table `request_attachment`
--
ALTER TABLE `request_attachment`
  ADD PRIMARY KEY (`attachment_id`),
  ADD KEY `message_id` (`message_id`);

--
-- Indexes for table `request_discussion`
--
ALTER TABLE `request_discussion`
  ADD PRIMARY KEY (`discussion_id`),
  ADD KEY `request_id` (`request_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `request_message`
--
ALTER TABLE `request_message`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `request_id` (`request_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `role_name` (`role_name`);

--
-- Indexes for table `service_request`
--
ALTER TABLE `service_request`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `submitted_by_user_id` (`submitted_by_user_id`),
  ADD KEY `assigned_to_user_id` (`assigned_to_user_id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `address_id` (`address_id`),
  ADD KEY `unit_id` (`unit_id`),
  ADD KEY `unit_timeline_id` (`unit_timeline_id`);

--
-- Indexes for table `service_type`
--
ALTER TABLE `service_type`
  ADD PRIMARY KEY (`type_id`),
  ADD UNIQUE KEY `type_name` (`type_name`);

--
-- Indexes for table `specialized_admin_data`
--
ALTER TABLE `specialized_admin_data`
  ADD PRIMARY KEY (`data_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`),
  ADD UNIQUE KEY `status_name` (`status_name`);

--
-- Indexes for table `timeline_attachment`
--
ALTER TABLE `timeline_attachment`
  ADD PRIMARY KEY (`attachment_id`),
  ADD KEY `timeline_id` (`timeline_id`);

--
-- Indexes for table `unit_timeline`
--
ALTER TABLE `unit_timeline`
  ADD PRIMARY KEY (`timeline_id`),
  ADD KEY `unit_id` (`unit_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`user_address_id`),
  ADD UNIQUE KEY `uc_user_address` (`user_id`,`address_id`),
  ADD KEY `address_id` (`address_id`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`group_id`),
  ADD UNIQUE KEY `group_name` (`group_name`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`user_role_id`),
  ADD UNIQUE KEY `uc_user_role` (`user_id`,`role_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ac_types`
--
ALTER TABLE `ac_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key, auto-incrementing ID for the brand';

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key, auto-incrementing ID for the category';

--
-- AUTO_INCREMENT for table `equipment_unit`
--
ALTER TABLE `equipment_unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pk_list`
--
ALTER TABLE `pk_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key, auto-incrementing ID for the product';

--
-- AUTO_INCREMENT for table `request_attachment`
--
ALTER TABLE `request_attachment`
  MODIFY `attachment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request_discussion`
--
ALTER TABLE `request_discussion`
  MODIFY `discussion_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request_message`
--
ALTER TABLE `request_message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_request`
--
ALTER TABLE `service_request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_type`
--
ALTER TABLE `service_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specialized_admin_data`
--
ALTER TABLE `specialized_admin_data`
  MODIFY `data_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `timeline_attachment`
--
ALTER TABLE `timeline_attachment`
  MODIFY `attachment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unit_timeline`
--
ALTER TABLE `unit_timeline`
  MODIFY `timeline_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
  MODIFY `user_address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `user_role_id` int(11) NOT NULL AUTO_INCREMENT;

-- --------------------------------------------------------

--
-- Structure for view `v_service_request_detail`
--
DROP TABLE IF EXISTS `v_service_request_detail`;

CREATE ALGORITHM=UNDEFINED DEFINER=`acpp2118`@`localhost` SQL SECURITY DEFINER VIEW `v_service_request_detail`  AS SELECT `sr`.`request_id` AS `request_id`, `sr`.`title` AS `title`, `sr`.`priority` AS `priority`, `s`.`status_name` AS `status_name`, `st`.`type_name` AS `service_type`, `sr`.`created_at` AS `created_at`, `u_submit`.`first_name` AS `submitted_first_name`, `u_submit`.`last_name` AS `submitted_last_name`, `u_assign`.`first_name` AS `assigned_first_name`, `u_assign`.`last_name` AS `assigned_last_name`, `a`.`street_address` AS `street_address`, `a`.`city` AS `city`, `a`.`latitude` AS `latitude`, `a`.`longitude` AS `longitude`, `eu`.`serial_number` AS `serial_number`, `eu`.`unit_model` AS `unit_model`, `eu`.`room_name` AS `room_name`, `sr`.`unit_timeline_id` AS `unit_timeline_id` FROM ((((((`service_request` `sr` join `status` `s` on(`sr`.`status_id` = `s`.`status_id`)) join `service_type` `st` on(`sr`.`type_id` = `st`.`type_id`)) join `user` `u_submit` on(`sr`.`submitted_by_user_id` = `u_submit`.`user_id`)) left join `user` `u_assign` on(`sr`.`assigned_to_user_id` = `u_assign`.`user_id`)) join `address` `a` on(`sr`.`address_id` = `a`.`address_id`)) left join `equipment_unit` `eu` on(`sr`.`unit_id` = `eu`.`unit_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_unit_timeline_history`
--
DROP TABLE IF EXISTS `v_unit_timeline_history`;

CREATE ALGORITHM=UNDEFINED DEFINER=`acpp2118`@`localhost` SQL SECURITY DEFINER VIEW `v_unit_timeline_history`  AS SELECT `ut`.`timeline_id` AS `timeline_id`, `ut`.`unit_id` AS `unit_id`, `ut`.`activity_type` AS `activity_type`, `ut`.`description` AS `description`, `ut`.`is_public` AS `is_public`, `ut`.`posted_at` AS `posted_at`, `u`.`first_name` AS `author_first_name`, `u`.`last_name` AS `author_last_name`, `ta`.`file_name` AS `file_name`, `ta`.`storage_path` AS `storage_path` FROM ((`unit_timeline` `ut` join `user` `u` on(`ut`.`user_id` = `u`.`user_id`)) left join `timeline_attachment` `ta` on(`ut`.`timeline_id` = `ta`.`timeline_id`)) ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `fk_categories_parent_id` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `equipment_unit`
--
ALTER TABLE `equipment_unit`
  ADD CONSTRAINT `equipment_unit_ibfk_1` FOREIGN KEY (`owner_user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `equipment_unit_ibfk_2` FOREIGN KEY (`address_id`) REFERENCES `address` (`address_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`ac_type_id`) REFERENCES `ac_types` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `products_ibfk_4` FOREIGN KEY (`pk_id`) REFERENCES `pk_list` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Constraints for table `request_attachment`
--
ALTER TABLE `request_attachment`
  ADD CONSTRAINT `request_attachment_ibfk_1` FOREIGN KEY (`message_id`) REFERENCES `request_message` (`message_id`) ON DELETE CASCADE;

--
-- Constraints for table `request_discussion`
--
ALTER TABLE `request_discussion`
  ADD CONSTRAINT `request_discussion_ibfk_1` FOREIGN KEY (`request_id`) REFERENCES `service_request` (`request_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `request_discussion_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `request_message`
--
ALTER TABLE `request_message`
  ADD CONSTRAINT `request_message_ibfk_1` FOREIGN KEY (`request_id`) REFERENCES `service_request` (`request_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `request_message_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `service_request`
--
ALTER TABLE `service_request`
  ADD CONSTRAINT `service_request_ibfk_1` FOREIGN KEY (`submitted_by_user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `service_request_ibfk_2` FOREIGN KEY (`assigned_to_user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `service_request_ibfk_3` FOREIGN KEY (`type_id`) REFERENCES `service_type` (`type_id`),
  ADD CONSTRAINT `service_request_ibfk_4` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`),
  ADD CONSTRAINT `service_request_ibfk_5` FOREIGN KEY (`address_id`) REFERENCES `address` (`address_id`),
  ADD CONSTRAINT `service_request_ibfk_6` FOREIGN KEY (`unit_id`) REFERENCES `equipment_unit` (`unit_id`),
  ADD CONSTRAINT `service_request_ibfk_7` FOREIGN KEY (`unit_timeline_id`) REFERENCES `unit_timeline` (`timeline_id`);

--
-- Constraints for table `specialized_admin_data`
--
ALTER TABLE `specialized_admin_data`
  ADD CONSTRAINT `specialized_admin_data_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `timeline_attachment`
--
ALTER TABLE `timeline_attachment`
  ADD CONSTRAINT `timeline_attachment_ibfk_1` FOREIGN KEY (`timeline_id`) REFERENCES `unit_timeline` (`timeline_id`) ON DELETE CASCADE;

--
-- Constraints for table `unit_timeline`
--
ALTER TABLE `unit_timeline`
  ADD CONSTRAINT `unit_timeline_ibfk_1` FOREIGN KEY (`unit_id`) REFERENCES `equipment_unit` (`unit_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `unit_timeline_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `user_address`
--
ALTER TABLE `user_address`
  ADD CONSTRAINT `user_address_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_address_ibfk_2` FOREIGN KEY (`address_id`) REFERENCES `address` (`address_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `user_role_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_role_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
