-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2020 at 05:48 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itims`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `astmodel_id` int(10) UNSIGNED NOT NULL,
  `manufacturer_id` int(10) UNSIGNED NOT NULL,
  `supplier_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `serial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warehouse_id` int(10) UNSIGNED NOT NULL,
  `po` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inv_dt` date DEFAULT NULL,
  `unit_cost` decimal(8,2) DEFAULT NULL,
  `expenditure_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `depreciation_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wrntyexp_dt` date DEFAULT NULL,
  `eol` date DEFAULT NULL,
  `asset_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` int(10) UNSIGNED DEFAULT NULL,
  `division_id` int(10) UNSIGNED DEFAULT NULL,
  `assigned_date` date DEFAULT NULL,
  `is_assigned` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `note` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `name`, `astmodel_id`, `manufacturer_id`, `supplier_id`, `category_id`, `serial`, `uom`, `warehouse_id`, `po`, `invoice`, `inv_dt`, `unit_cost`, `expenditure_type`, `depreciation_model`, `wrntyexp_dt`, `eol`, `asset_tag`, `employee_id`, `division_id`, `assigned_date`, `is_assigned`, `note`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'HP Elitebook 840', 2, 2, 2, 2, '234324', 'pc', 9999, '3433888', '345354', '2020-04-01', '76888.00', 'Capex', 'Straight-line', '2021-04-01', '2024-04-01', '3435454', 8, 13, '2020-05-10', 'Yes', NULL, NULL, 'Assigned', '2020-04-26 11:10:43', '2020-04-26 11:10:43'),
(8, 'Dell 5420 Lattitude', 1, 1, 4, 2, '983429487329848', 'pc', 9999, '1111118288', '99998383', '2020-04-01', '89000.00', 'Capex', 'Straight-line', '2021-04-01', '2024-04-01', '1111266226', 3, 4, '2020-05-10', 'Yes', NULL, NULL, 'Assigned', '2020-04-26 11:23:02', '2020-04-26 11:23:02'),
(9, 'Panasonic KX MB251 Multifunction Laser Printer', 5, 5, 1, 4, '234897', 'pc', 9999, '09877777', '7667557656', '2020-04-01', '80000.00', 'Capex', 'Straight-line', '2021-04-01', '2025-04-01', '1234566', 8, 5, '2020-05-10', 'Yes', NULL, NULL, 'Assigned', '2020-04-26 12:34:06', '2020-04-26 12:34:06'),
(10, 'Samsung ML-2020 Hi-Speed Laser Printer', 4, 4, 2, 4, '809234', 'pc', 9999, '342543', '54235', '2020-04-01', '70900.00', 'Opex', 'Straight-line', '2021-09-01', '2023-09-01', '8909889', 6, 6, '2020-05-10', 'Yes', NULL, NULL, 'Assigned', '2020-04-26 12:48:02', '2020-04-26 12:48:02'),
(11, 'Dell Vostro 3671MT 9th Gen Intel Core i3 9100', 6, 1, 5, 1, '24332', 'pc', 9999, '43324343', '34324', '2018-02-01', '70888.00', 'Capex', 'Straight-line', '2020-12-31', '2022-12-31', '767676', 4, 13, '2020-05-10', 'Yes', NULL, NULL, 'Assigned', '2020-05-05 10:21:33', '2020-05-05 10:21:33'),
(12, 'Dell Inspiron 14-3480 Intel CDC 4205U 14.0 inch HD Laptop', 8, 1, 1, 2, '42354354', 'pc', 5, '4213432', '234123432', '2020-01-01', '33343.00', 'Capex', 'Straight-line', '2021-01-01', '2025-01-01', '42134324', NULL, NULL, NULL, 'No', NULL, NULL, 'Damaged', '2020-05-08 03:36:53', '2020-05-08 03:36:53'),
(13, 'HP 15-da2010TU Core i3 10 Gen 15.6\"', 2, 2, 3, 2, '42343', 'pc', 9999, '234324', '3432434', '2020-05-01', '33334.00', 'Capex', 'Straight-line', '2021-05-01', '2024-05-01', '3454354', 4, 13, '2020-05-10', 'Yes', NULL, NULL, 'Assigned', '2020-05-09 20:34:35', '2020-05-09 20:34:35'),
(14, 'Acer Aspire A315-21 46ZB AMD-A4-9120E 15.6\" HD Laptop', 9, 6, 5, 2, '6546354', 'pc', 9999, '456456', '546546', '2020-05-10', '4444.00', 'Capex', 'Straight-line', '2021-05-09', '2025-05-11', '345345', 4, 13, '2020-05-10', 'Yes', NULL, NULL, 'Assigned', '2020-05-09 22:25:52', '2020-05-09 22:25:52');

-- --------------------------------------------------------

--
-- Table structure for table `astmodels`
--

CREATE TABLE `astmodels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacturer_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `astmodels`
--

INSERT INTO `astmodels` (`id`, `name`, `manufacturer_id`, `category_id`, `note`, `created_at`, `updated_at`) VALUES
(1, 'Dell Lattitude', 1, 2, 'Dell Laptop', '2020-04-16 14:54:57', '2020-04-16 14:54:57'),
(2, 'HP Pavillion', 2, 2, 'HP  Laptop', '2020-04-16 14:55:17', '2020-04-16 14:55:17'),
(3, 'Panasonic PBX', 5, 6, 'PABX Desk Phone', '2020-04-16 15:01:31', '2020-04-16 15:01:31'),
(4, 'Samsung Laser Printer', 4, 4, 'Samsung Printer', '2020-04-16 15:18:45', '2020-04-16 15:18:45'),
(5, 'Panasonic Laser Printer', 5, 4, NULL, '2020-04-26 12:30:31', '2020-04-26 12:30:31'),
(6, 'Dell Vostro', 1, 1, 'Dell Vostro', '2020-05-05 09:12:34', '2020-05-05 09:12:34'),
(7, 'HP Laser Printer', 2, 4, 'HP Laser Printer', '2020-05-05 09:16:05', '2020-05-05 09:16:05'),
(8, 'Dell Inspiron', 1, 2, NULL, '2020-05-08 03:35:42', '2020-05-08 03:35:42'),
(9, 'Acer Aspire', 6, 2, NULL, '2020-05-09 22:25:01', '2020-05-09 22:25:01');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `address`, `location`, `note`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ashulia', 'Ashulia Branch', 'Ashulia', NULL, NULL, '2020-04-14 13:33:50', '2020-04-14 13:33:50'),
(2, 'Vulta', 'Vulta Branch', 'Vulta', NULL, NULL, '2020-04-14 13:34:05', '2020-04-14 13:34:05'),
(3, 'CTG', 'Chittagong Branch', 'CTG', NULL, NULL, '2020-04-14 13:34:28', '2020-04-14 13:34:28'),
(4, 'Moth Bari', 'Moth Bari Branch', 'Moth Bari', NULL, NULL, '2020-04-14 13:35:07', '2020-04-14 13:35:07'),
(5, 'Banani', 'Banani Main Branch', 'Banani', NULL, NULL, '2020-04-15 04:31:27', '2020-04-15 04:31:27');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `note`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Desktop', 'Desktop Computer', NULL, '2020-04-16 11:58:28', '2020-04-16 11:58:28'),
(2, 'Laptop', 'Laptop Computer', NULL, '2020-04-16 11:59:20', '2020-04-16 11:59:20'),
(3, 'Mouse', 'Computer Mouse', NULL, '2020-04-16 12:00:42', '2020-04-16 12:00:42'),
(4, 'Printer', 'Printer', NULL, '2020-04-16 12:03:37', '2020-04-16 12:03:37'),
(5, 'Tonner', 'Printer Tonner', NULL, '2020-04-16 12:03:53', '2020-04-16 12:03:53'),
(6, 'PABX Phone', 'PABXPhone', NULL, '2020-04-16 14:57:44', '2020-04-16 14:57:44');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'IT&ERP', 'IT&ERP Division', '2020-04-14 11:32:40', '2020-04-14 11:32:40'),
(4, 'EP Sales', 'Electric Power Sales', '2020-04-14 11:33:25', '2020-04-14 11:33:25'),
(5, 'F&A', 'Finance & Accounts', '2020-04-14 12:22:23', '2020-04-14 12:22:23'),
(6, 'Marine', 'Marine Sales', '2020-04-14 12:22:39', '2020-04-14 12:22:39'),
(7, 'Alied', 'Alied Division', '2020-04-14 12:23:16', '2020-04-14 12:23:16'),
(8, 'PSSD', 'Product Support', '2020-04-14 12:23:30', '2020-04-14 12:23:30'),
(9, 'LBA', 'Large Accounts Division', '2020-04-14 12:23:50', '2020-04-14 12:23:50'),
(10, 'HR', 'Human Resource', '2020-04-14 12:24:16', '2020-04-14 12:24:16'),
(11, 'SCM', 'Supply Chain', '2020-04-14 12:24:28', '2020-04-14 12:24:28'),
(12, 'PPD', 'Public Procurement Division', '2020-04-14 12:25:01', '2020-04-14 12:25:01'),
(13, 'Service', 'Service Division', '2020-04-14 12:25:20', '2020-04-14 12:25:20');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supervisor_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_id` int(10) UNSIGNED NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division_id` int(10) UNSIGNED NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `employee_id`, `email`, `supervisor_id`, `branch_id`, `designation`, `phone`, `department`, `division_id`, `note`, `status`, `created_at`, `updated_at`) VALUES
(1, 'AKM Tanvir Rahim', 750, 'tanvir.rahim@banglacat.com', 'Bazlur Rashid', 5, 'Deputy Manager', '+8801755515050', 'Business Applications', 1, NULL, 'Active', '2020-04-15 04:32:28', '2020-04-15 04:32:28'),
(2, 'Sharmin Shawon', 883, 'sharmin.shawon@banglacat.com', 'Bazlur Rashid', 5, 'Asst. Manager', '0393488348', 'Business Applications', 1, NULL, 'Active', '2020-04-15 05:06:07', '2020-04-15 05:06:07'),
(3, 'Arifuzzaman', 88, 'arif.uzzaman@banglacat.com', 'ffd', 5, 'Sr. Manager', '43454', 'SCM', 11, NULL, 'Active', '2020-04-16 09:31:43', '2020-04-16 09:31:43'),
(4, 'A.S.M Ashaduzzaman', 739, 'ashad.zaman@banglacat.com', NULL, 5, 'Sr. Manager', '9484884', 'service', 13, NULL, 'Active', '2020-04-16 09:33:06', '2020-04-16 09:33:06'),
(5, 'Kamal Hossain', 99, 'kamal.hossain@banglacat.com', NULL, 1, 'Asst. Manager', '84848', 'EP', 4, NULL, 'Active', '2020-04-16 09:33:55', '2020-04-16 09:33:55'),
(6, 'Nesma Huda', 1201, 'nesma.huda@banglacat.com', 'Bazlur Rashid', 5, 'Sr.Executive', '09383736', 'Business Applications', 1, NULL, 'Active', '2020-05-05 09:22:06', '2020-05-05 09:22:06'),
(7, 'Annatoma Islam', 1202, 'annatoma.islam@banglacat.com', 'Bazlur Rashid', 5, 'Executive', '099338', 'Business Applications', 1, NULL, 'Active', '2020-05-05 09:26:07', '2020-05-05 09:26:07'),
(8, 'Abu Al Masud', 223, 'abu@banglacat.com', 'Ashad Zaman', 1, 'Sr. Executive', '0848484', 'Service Admin', 13, NULL, 'Active', '2020-05-08 03:34:02', '2020-05-08 03:34:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `name`, `address`, `email`, `phone`, `website`, `logo`, `note`, `created_at`, `updated_at`) VALUES
(1, 'Dell', 'Dell USA', 'info@dell.com', '94848', 'www.dell.com', NULL, 'Dell Corporation', '2020-04-16 13:46:30', '2020-04-16 13:46:30'),
(2, 'HP', 'HP USA', 'hp@hp.com', '48484577', 'www.hp.com', NULL, 'HP corporation', '2020-04-16 13:48:34', '2020-04-16 13:48:34'),
(3, 'Apple', 'Apple USA', 'apple@apple.com', '58855885', 'www.apple.com', NULL, 'Apple Ltd.', '2020-04-16 13:49:11', '2020-04-16 13:49:11'),
(4, 'Samsung', 'Samsung Korea', 'info@samsung.com', '585767', 'www.samsung.com', NULL, 'Samsung korea', '2020-04-16 13:49:48', '2020-04-16 13:49:48'),
(5, 'Panasonic', 'Panasonic', 'info@panasonic.com', '98989889', 'www.panasonic.com', NULL, 'Panasonic', '2020-04-16 15:01:01', '2020-04-16 15:01:01'),
(6, 'Acer', 'Acer USA', 'acer@acb.com', '404994', 'www.acer.com', NULL, NULL, '2020-05-09 22:24:39', '2020-05-09 22:24:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 2),
(3, '2019_08_19_000000_create_failed_jobs_table', 2),
(4, '2020_04_12_155843_create_employees_table', 3),
(5, '2020_04_12_162506_create_branches_table', 3),
(6, '2020_04_12_163536_create_suppliers_table', 3),
(7, '2020_04_12_164301_create_categories_table', 3),
(8, '2020_04_12_164656_create_manufacturers_table', 3),
(9, '2020_04_12_165953_create_astmodels_table', 3),
(10, '2020_04_12_170258_create_warehouses_table', 3),
(11, '2020_04_12_170553_create_assets_table', 3),
(13, '2020_04_14_154444_create_divisions_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `address`, `city`, `post_code`, `phone`, `cp`, `cp_phone`, `cp_email`, `website`, `note`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Computer Source', 'Elephant Road, Dhaka', 'Dhaka', '1213', '+8801755515050', 'Mr. Tahsan', '09494884', 'tahsan@cs.com', 'www.computersource.com', 'Computer Source BD', 'Active', '2020-04-20 13:09:57', '2020-04-20 13:09:57'),
(2, 'AMZ Computers', 'IDB, Dhaka', 'Dhaka', '1234', '0969686886', 'Mr. Zaber Al Hasan', '09988877', 'hasan@amz.com', 'www.amz.com', 'AMZ Computers', 'Active', '2020-04-20 13:10:38', '2020-04-20 13:10:38'),
(3, 'Btrac Solutions Ltd', 'Banani, Dhaka', 'Dhaka', '1213', '048474474747', 'Sheikh Abdullah', '0948484848', 'abdullah@btracsolutions.com', 'www.btracsolutions.com', 'Bangla Trac Solutions Ltd', 'Active', '2020-04-20 13:15:34', '2020-04-20 13:15:34'),
(4, 'Btrac Technology Ltd', 'Banani, Dhaka', 'Dhaka', '1213', '039384848', 'Mr. Sajibul Alam', '03848484848', 'sajib@btractech.com', 'www.btractech.com', 'Btrac Tech Ltd', 'Active', '2020-04-20 13:19:41', '2020-04-20 13:19:41'),
(5, 'XYZ Computer', 'Multiplan center, Elephant Road, Dhaka.', 'Dhaka', '1213', '+88017552343', 'Shafiqul Islam', '934983498', 'shafiq@xyz.com', 'www.xyz.com', NULL, 'ACTIVE', '2020-05-05 09:51:19', '2020-05-05 09:51:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(10) UNSIGNED NOT NULL DEFAULT '2',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tanvir Rahim', 'tanvir.rahim@banglacat.com', NULL, '$2y$10$qkD2cgVnQZ2WaIsN0SjG5OE.3CAVSg/doDrUzJtkQ49K8roRUeidC', 2, 'B8T9b4Wbyzhp43UwzuqyH8basw4J0eith7h5hJYzqsJXvHGPX8J3CdfsTIAH', '2020-04-11 08:33:24', '2020-04-11 08:33:24'),
(2, 'User', 'user@banglacat.com', NULL, '$2y$10$3cBDla83/jQxrIjuPD5I4eIQFZOKNYI5AKdqydc9odr4d3/b6Tg8e', 2, NULL, '2020-04-11 08:34:12', '2020-04-11 08:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE `warehouses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_id` int(10) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `warehouses`
--

INSERT INTO `warehouses` (`id`, `name`, `branch_id`, `address`, `location`, `note`, `created_at`, `updated_at`) VALUES
(1, 'Ashulia', 1, 'Ashulia Warehouse,\r\nAshulia.', NULL, 'Ashulia Warehouse', '2020-04-25 09:10:06', '2020-04-25 09:10:06'),
(2, 'Vulta', 2, 'Vulta Warehouse,\r\nNarayangonj.', NULL, 'Vulta Warehouse', '2020-04-25 09:11:04', '2020-04-25 09:11:04'),
(3, 'CTG', 3, 'Chittagong', NULL, 'CTG Warehouse', '2020-04-25 09:44:12', '2020-04-25 09:44:12'),
(4, 'Moth Bari', 4, 'Moth Bari, Narajangonj,\r\nDhaka', NULL, 'Moth Bari Warehouse', '2020-04-25 09:45:23', '2020-04-25 09:45:23'),
(5, 'Banani', 5, 'House: 38, Road: 12, Block: H,\r\nBanani, Dhaka', NULL, 'Banani Warehouse', '2020-04-25 09:46:49', '2020-04-25 09:46:49'),
(9999, 'N/A', 9999, 'N/A', NULL, 'Assigned to User', '2020-04-25 09:46:49', '2020-04-25 09:46:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `asset_tag` (`asset_tag`),
  ADD UNIQUE KEY `serial` (`serial`);

--
-- Indexes for table `astmodels`
--
ALTER TABLE `astmodels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `astmodels`
--
ALTER TABLE `astmodels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
