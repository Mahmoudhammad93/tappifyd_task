-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2024 at 05:32 PM
-- Server version: 8.0.37-0ubuntu0.22.04.3
-- PHP Version: 8.1.2-1ubuntu2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_logs`
--

CREATE TABLE `admin_logs` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint NOT NULL,
  `description_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('create','update','delete','restore','login','logout') COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_data` longtext COLLATE utf8mb4_unicode_ci,
  `new_data` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_logs`
--

INSERT INTO `admin_logs` (`id`, `user_id`, `model`, `model_id`, `description_ar`, `description_en`, `status`, `old_data`, `new_data`, `created_at`, `updated_at`) VALUES
(1, 1, '\\App\\Models\\User', 1, 'تسجيل الدخول', 'Login', 'login', NULL, NULL, '2024-06-27 10:25:52', '2024-06-27 10:25:52'),
(2, 1, '\\App\\Models\\User', 1, 'تسجيل الدخول', 'Login', 'login', NULL, NULL, '2024-06-27 10:28:11', '2024-06-27 10:28:11'),
(3, 1, '\\App\\Models\\Role', 1, 'تحديث بيانات التصاريح', 'Update Permissions Details', 'update', NULL, NULL, '2024-06-27 10:37:26', '2024-06-27 10:37:26'),
(4, 1, 'App\\Models\\Category', 1, 'اضافة قسم جديد', 'Add New Category', 'create', NULL, NULL, '2024-06-27 10:47:36', '2024-06-27 10:47:36'),
(5, 1, 'App\\Models\\Category', 2, 'اضافة قسم جديد', 'Add New Category', 'create', NULL, NULL, '2024-06-27 10:49:17', '2024-06-27 10:49:17'),
(6, 1, '\\App\\Models\\Product', 1, 'اضافة منتج جديد', 'Add New Product', 'create', NULL, NULL, '2024-06-27 10:51:37', '2024-06-27 10:51:37'),
(7, 1, '\\App\\Models\\Product', 1, 'تحديث بيانات المنتج', 'Update Product Details', 'update', NULL, NULL, '2024-06-27 10:54:52', '2024-06-27 10:54:52'),
(8, 1, '\\App\\Models\\Product', 1, 'تحديث بيانات المنتج', 'Update Product Details', 'update', NULL, NULL, '2024-06-27 10:55:07', '2024-06-27 10:55:07');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `parent_id` bigint UNSIGNED DEFAULT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` bigint NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `order` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name_ar`, `name_en`, `slug`, `views`, `deleted_at`, `created_at`, `updated_at`, `status`, `order`) VALUES
(1, NULL, 'Teegan Moss', 'Kathleen Lynn', 'kathleen-lynn', 0, NULL, '2024-06-27 10:47:36', '2024-06-27 10:47:36', 1, NULL),
(2, NULL, 'Stephen Newton', 'Carla Mckee', 'carla-mckee', 0, NULL, '2024-06-27 10:49:17', '2024-06-27 10:49:17', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint UNSIGNED NOT NULL,
  `mediaable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mediaable_id` bigint UNSIGNED NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` text COLLATE utf8mb4_unicode_ci,
  `mime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `mediaable_type`, `mediaable_id`, `url`, `filename`, `mime`, `type`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Category', 1, 'http://127.0.0.1:8000/storage/categories/2024-06-27/06272024134736667d6d78989cb.jpg', '06272024134736667d6d78989cb.jpg', 'image/jpeg', 'image', '2024-06-27 10:47:36', '2024-06-27 10:47:36'),
(2, 'App\\Models\\Category', 2, 'http://127.0.0.1:8000/storage/categories/2024-06-27/06272024134917667d6ddd20362.jpg', '06272024134917667d6ddd20362.jpg', 'image/jpeg', 'image', '2024-06-27 10:49:17', '2024-06-27 10:49:17'),
(3, 'App\\Models\\Product', 1, 'http://127.0.0.1:8000/storage/products/2024-06-27/06272024135136667d6e68e934d.png', '06272024135136667d6e68e934d.png', 'image/png', NULL, '2024-06-27 10:51:37', '2024-06-27 10:51:37');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_17_094004_create_user_details_table', 1),
(6, '2023_04_26_142612_create_tables_table', 1),
(7, '2023_04_26_142657_create_sessions_table', 1),
(8, '2023_04_26_142723_create_categories_table', 1),
(9, '2023_04_26_142727_create_products_table', 1),
(10, '2023_04_26_142728_create_product_additions_table', 1),
(11, '2023_04_26_142733_create_media_table', 1),
(12, '2023_04_26_143541_create_admin_logs_table', 1),
(13, '2023_04_30_121703_create_settings_table', 1),
(14, '2023_08_01_125731_add_image_to_users_table', 1),
(15, '2023_09_14_082002_create_product_options_table', 1),
(16, '2023_10_16_064838_add_name_status_to_settings_table', 1),
(17, '2024_01_24_011041_add_status_to_categories_table', 1),
(18, '2024_02_04_031635_add_color_to_settings_table', 1),
(19, '2024_02_04_055050_add_order_to_categories_table', 1),
(20, '2024_02_07_003236_laratrust_setup_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `table_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_name_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `table_id`, `name`, `display_name_ar`, `display_name_en`, `created_at`, `updated_at`) VALUES
(1, 1, 'browse_dashboard', 'تصفح لوحة التحكم', 'Dashboard', '2024-06-27 10:25:38', '2024-06-27 10:25:38'),
(2, 1, 'browse_all_products', 'كل المنتجات', 'All Products', '2024-06-27 10:25:38', '2024-06-27 10:25:38'),
(3, 1, 'browse_all_categories', 'كل الاقسام', 'All Categories', '2024-06-27 10:25:38', '2024-06-27 10:25:38'),
(4, 1, 'browse_all_users', 'كل المستخدمين', 'All Users', '2024-06-27 10:25:38', '2024-06-27 10:25:38'),
(5, 2, 'browse_admins', 'المشرفين', 'Admins', '2024-06-27 10:25:38', '2024-06-27 10:25:38'),
(6, 2, 'view_admins', 'المشرفين', 'Admins View', '2024-06-27 10:25:38', '2024-06-27 10:25:38'),
(7, 2, 'create_admins', 'المشرفين', 'Admins Create', '2024-06-27 10:25:38', '2024-06-27 10:25:38'),
(8, 2, 'edit_admins', 'المشرفين', 'Admins Edit', '2024-06-27 10:25:38', '2024-06-27 10:25:38'),
(9, 2, 'delete_admins', 'المشرفين', 'Admins Delete', '2024-06-27 10:25:38', '2024-06-27 10:25:38'),
(10, 3, 'browse_roles', 'الادوار', 'Roles', '2024-06-27 10:25:38', '2024-06-27 10:25:38'),
(11, 3, 'view_roles', 'الادوار', 'Roles View', '2024-06-27 10:25:38', '2024-06-27 10:25:38'),
(12, 3, 'create_roles', 'الادوار', 'Roles Create', '2024-06-27 10:25:38', '2024-06-27 10:25:38'),
(13, 3, 'edit_roles', 'الادوار', 'Roles Edit', '2024-06-27 10:25:38', '2024-06-27 10:25:38'),
(14, 3, 'delete_roles', 'الادوار', 'Roles Delete', '2024-06-27 10:25:38', '2024-06-27 10:25:38'),
(15, 4, 'browse_categories', 'الاقسام', 'Categories', '2024-06-27 10:25:38', '2024-06-27 10:25:38'),
(16, 4, 'view_categories', 'الاقسام', 'Categories View', '2024-06-27 10:25:38', '2024-06-27 10:25:38'),
(17, 4, 'create_categories', 'الاقسام', 'Categories Create', '2024-06-27 10:25:38', '2024-06-27 10:25:38'),
(18, 4, 'edit_categories', 'الاقسام', 'Categories Edit', '2024-06-27 10:25:38', '2024-06-27 10:25:38'),
(19, 4, 'delete_categories', 'الاقسام', 'Categories Delete', '2024-06-27 10:25:38', '2024-06-27 10:25:38'),
(20, 5, 'browse_products', 'المنتجات', 'Products', '2024-06-27 10:25:38', '2024-06-27 10:25:38'),
(21, 5, 'view_products', 'المنتجات', 'Products View', '2024-06-27 10:25:38', '2024-06-27 10:25:38'),
(22, 5, 'create_products', 'المنتجات', 'Products Create', '2024-06-27 10:25:38', '2024-06-27 10:25:38'),
(23, 5, 'edit_products', 'المنتجات', 'Products Edit', '2024-06-27 10:25:38', '2024-06-27 10:25:38'),
(24, 5, 'delete_products', 'المنتجات', 'Products Delete', '2024-06-27 10:25:38', '2024-06-27 10:25:38');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,3) NOT NULL,
  `views` bigint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name_ar`, `name_en`, `description_ar`, `description_en`, `price`, `views`, `created_at`, `updated_at`) VALUES
(1, 1, 'Aretha Odom test', 'Lillian Hood', 'Cupiditate repellend', 'Eos laborum obcaecat', 590.000, 0, '2024-06-27 10:51:36', '2024-06-27 10:55:07');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_name_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name_ar`, `display_name_en`, `description_ar`, `description_en`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'سوبر ادمن', 'super admin', 'test', 'test', NULL, '2024-06-27 10:37:26');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('gNGhSksvHJcqCufnzB7uVLS88VIT0BUgPsph9WgI', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiVVhjTmNOaEI5VEs4M1U2WkxKakV2MVRFamtkMTNCZFJkSmVVQkRncyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo0OiJsYW5nIjtzOjI6ImVuIjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0MToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluL2FkbWlucy9jcmVhdGUiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NToidGhlbWUiO3M6NDoiZGFyayI7fQ==', 1719497859);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snapchat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords_ar` text COLLATE utf8mb4_unicode_ci,
  `keywords_en` text COLLATE utf8mb4_unicode_ci,
  `description_ar` text COLLATE utf8mb4_unicode_ci,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `about_ar` blob,
  `about_en` blob,
  `terms_ar` blob,
  `terms_en` blob,
  `privacy_ar` blob,
  `privacy_en` blob,
  `playstore` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `playstore_version` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appstore` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appstore_version` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name_status` tinyint NOT NULL DEFAULT '0',
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name_ar`, `name_en`, `address_ar`, `address_en`, `logo`, `icon`, `email`, `phone`, `whatsapp`, `facebook`, `instagram`, `twitter`, `snapchat`, `keywords_ar`, `keywords_en`, `description_ar`, `description_en`, `about_ar`, `about_en`, `terms_ar`, `terms_en`, `privacy_ar`, `privacy_en`, `playstore`, `playstore_version`, `appstore`, `appstore_version`, `created_at`, `updated_at`, `name_status`, `color`) VALUES
(1, 'مهمة', 'Task', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-27 10:25:37', '2024-06-27 10:25:37', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `name`, `display_name_ar`, `display_name_en`, `created_at`, `updated_at`) VALUES
(1, 'dashboard', 'لوحة التحكم', 'Dashboard', '2024-06-27 10:25:38', '2024-06-27 10:25:38'),
(2, 'admins', 'المشرفين', 'Admins', '2024-06-27 10:25:38', '2024-06-27 10:25:38'),
(3, 'roles', 'المشرفين', 'Roles', '2024-06-27 10:25:38', '2024-06-27 10:25:38'),
(4, 'categories', 'المشرفين', 'Categories', '2024-06-27 10:25:38', '2024-06-27 10:25:38'),
(5, 'products', 'المشرفين', 'Products', '2024-06-27 10:25:38', '2024-06-27 10:25:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `user_type` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `name`, `email`, `mobile`, `password`, `google_id`, `remember_token`, `created_at`, `updated_at`, `image`) VALUES
(1, 'admin', 'Admin', 'admin@admin.com', '01004460433', '$2y$10$V3FI88.AVRJBFDARma7pPO1p1wj1XQU4.VRrcMHNvAtnXGsS2xnPC', NULL, NULL, '2024-06-27 10:25:38', '2024-06-27 10:25:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `language` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ar',
  `theme` enum('dark','light') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'dark',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `language`, `theme`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'dark', '2024-06-27 10:58:49', '2024-06-27 11:11:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_logs`
--
ALTER TABLE `admin_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_logs_user_id_index` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_parent_id_index` (`parent_id`),
  ADD KEY `categories_slug_index` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_mediaable_type_mediaable_id_index` (`mediaable_type`,`mediaable_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`),
  ADD KEY `permissions_table_id_index` (`table_id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_index` (`permission_id`),
  ADD KEY `permission_user_user_id_index` (`user_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_index` (`category_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_index` (`role_id`),
  ADD KEY `role_user_user_id_index` (`user_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`),
  ADD UNIQUE KEY `users_google_id_unique` (`google_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_details_user_id_index` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_logs`
--
ALTER TABLE `admin_logs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_logs`
--
ALTER TABLE `admin_logs`
  ADD CONSTRAINT `admin_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_table_id_foreign` FOREIGN KEY (`table_id`) REFERENCES `tables` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
