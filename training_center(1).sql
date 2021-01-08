-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 08, 2021 at 08:15 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `training_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Java', '2019-11-18 15:28:43', '2019-11-18 15:28:43'),
(2, 'Android', '2019-11-18 15:28:55', '2019-11-18 15:28:55'),
(4, 'Python', '2019-11-18 15:29:19', '2019-11-18 15:29:19'),
(5, 'Networking', '2019-11-18 15:29:30', '2019-11-18 15:29:30'),
(6, 'Computer Basic', '2019-11-18 15:29:38', '2019-11-18 15:29:47'),
(7, 'Photoshop', '2019-11-18 15:30:10', '2019-11-18 15:30:10'),
(8, 'Accounting', '2019-11-18 15:30:20', '2019-11-18 15:30:20'),
(9, 'AI', '2019-11-18 15:30:45', '2019-11-18 15:30:45');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_14_083750_create_courses_table', 1),
(5, '2019_11_14_085110_create_posts_table', 1),
(6, '2019_11_14_085913_create_students_table', 1),
(7, '2019_11_14_090917_create_registers_table', 1),
(8, '2019_11_16_174323_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\user', 1),
(2, 'App\\User', 2),
(2, 'App\\User', 4),
(2, 'App\\User', 5),
(2, 'App\\User', 6),
(2, 'App\\User', 7),
(2, 'App\\User', 8),
(2, 'App\\User', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `course_id`, `price`, `time`, `room_no`, `image`, `start_date`, `description`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 'Java Training Course', 1, '200000', '9:00 AM - 1:00PM', '1', '/storage/image/1574092168.jpg', '2019-12-01', 'You build robust applications using Java\'s object-oriented features as well as develop platform-independent GUIs. You also learn to read and write data using Java streams and retrieve data from a relational database with JDBC.', '2020-02-28', '2019-11-18 15:49:28', '2019-11-18 16:22:13'),
(2, 'Android Training Course', 2, '200000', '9:00 AM - 1:00PM', '2', '/storage/image/1574092257.jpeg', '2019-12-02', 'Introduction to Android Programming and Advanced Android Programming make it easy and efficient to learn Android development. This Android training course is designed to quickly get you up to speed how to make Android apps for Android devices.', '2020-01-31', '2019-11-18 15:50:57', '2019-11-18 16:22:35'),
(4, 'Python Training Course', 4, '300000', '9:00AM-12:00PM', '4', '/storage/image/1574174410.jpg', '2019-12-02', 'Python is a language with a simple syntax, and a powerful set of libraries. It is an interpreted language, with a rich programming environment, including a robust debugger and profiler. ... We cover data types, control flow, object-oriented programming, and graphical user interface-driven applications.', '2020-02-28', '2019-11-18 15:53:45', '2019-11-19 13:10:10'),
(5, 'Networking Training Course', 5, '250000', '1:00PM-5:00PM', '1', '/storage/image/1574092514.png', '2019-12-09', 'The fundamentals of networking are covered between classroom and laboratory learning. Students gain general knowledge of electronic data communication, industry terminology, common equipment, and standard hardware and software requirements. Topics of discussion may include: Wide-area networks (WANs)', '2020-01-30', '2019-11-18 15:55:14', '2019-11-18 16:23:08'),
(6, 'Computer Basic Training Course', 6, '80000', '9:00 AM - 11:00PM', '5', '/storage/image/1574092598.jpeg', '2019-12-02', '\"Computer Basics\" is a course that\'s designed specifically for those who are completely new to computers or who feel they need to have more instruction before they can feel confident buying a new computer for their personal use.', '2020-01-17', '2019-11-18 15:56:38', '2019-11-18 16:23:18'),
(7, 'Photoshop Training Course', 7, '100000', '3:00PM-6:00PM', '4', '/storage/image/1574214081.png', '2019-12-02', 'Photoshop courses can be taken at the introductory through advanced levels, and they can prepare students to take the Adobe Certified Associate (ACA) exam that covers the entry-level use of the software. ... Basic features and tools of Photoshop. Image editing and manipulation techniques. Creating original graphics.', '2020-01-31', '2019-11-18 15:58:19', '2019-11-20 00:11:21'),
(8, 'Accounting Training Course', 8, '200000', '1:00PM-6:00PM', '3', '/storage/image/1574092777.jpeg', '2019-12-02', 'An introduction to financial accounting concepts and the communication of financial information to external users. Examines the accounting process, transaction analysis, asset and equity accounting, financial statement preparation and analysis, and related topics.', '2020-01-31', '2019-11-18 15:59:37', '2019-11-18 16:23:39'),
(9, 'AI Training Course', 9, '500000', '1:00PM-6:00PM', '6', '/storage/image/1574174435.jpg', '2019-12-02', 'Artificial intelligence (AI) is a research field that studies how to realize the intelligent human behaviors on a computer. The ultimate goal of AI is to make a computer that can learn, plan, and solve problems autonomously. ... Of course, these topics are closely related with each other.', '2020-04-30', '2019-11-18 16:00:52', '2019-11-19 13:10:35');

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `user_id`, `post_id`, `date`, `created_at`, `updated_at`) VALUES
(18, 7, 1, '2019-11-19', '2019-11-19 08:15:07', '2019-11-19 08:15:07'),
(19, 7, 2, '2019-11-19', '2019-11-19 08:15:12', '2019-11-19 08:15:12'),
(20, 7, 1, '2019-11-19', '2019-11-19 08:45:04', '2019-11-19 08:45:04'),
(21, 7, 1, '2019-11-19', '2019-11-19 08:46:25', '2019-11-19 08:46:25'),
(22, 7, 1, '2019-11-19', '2019-11-19 08:53:01', '2019-11-19 08:53:01'),
(23, 7, 1, '2019-11-19', '2019-11-19 08:54:05', '2019-11-19 08:54:05'),
(24, 7, 1, '2019-11-19', '2019-11-19 09:02:38', '2019-11-19 09:02:38'),
(25, 7, 2, '2019-11-19', '2019-11-19 09:02:44', '2019-11-19 09:02:44'),
(26, 7, 2, '2019-11-19', '2019-11-19 09:02:47', '2019-11-19 09:02:47'),
(27, 7, 2, '2019-11-19', '2019-11-19 09:15:04', '2019-11-19 09:15:04'),
(28, 7, 1, '2019-11-19', '2019-11-19 09:19:31', '2019-11-19 09:19:31'),
(29, 7, 1, '2019-11-19', '2019-11-19 09:22:21', '2019-11-19 09:22:21'),
(30, 6, 1, '2019-11-19', '2019-11-19 09:25:06', '2019-11-19 09:25:06'),
(31, 7, 9, '2019-11-20', '2019-11-20 00:38:49', '2019-11-20 00:38:49'),
(32, 7, 5, '2019-11-20', '2019-11-20 00:38:54', '2019-11-20 00:38:54'),
(33, 7, 7, '2019-11-20', '2019-11-20 00:39:08', '2019-11-20 00:39:08'),
(34, 8, 5, '2019-11-20', '2019-11-20 00:42:19', '2019-11-20 00:42:19'),
(35, 8, 4, '2019-11-20', '2019-11-20 00:42:28', '2019-11-20 00:42:28'),
(36, 7, 4, '2019-11-20', '2019-11-20 01:54:28', '2019-11-20 01:54:28'),
(37, 7, 6, '2019-11-20', '2019-11-20 01:55:15', '2019-11-20 01:55:15'),
(38, 7, 8, '2019-11-20', '2019-11-20 02:06:14', '2019-11-20 02:06:14'),
(39, 6, 2, '2019-11-20', '2019-11-20 02:07:24', '2019-11-20 02:07:24'),
(40, 6, 4, '2019-11-20', '2019-11-20 02:08:15', '2019-11-20 02:08:15'),
(41, 2, 1, '2021-01-08', '2021-01-08 18:45:08', '2021-01-08 18:45:08');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', NULL, NULL),
(2, 'user', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `DOB` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DOB` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `DOB`, `gender`, `address`, `phone_no`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$OcBXcBp/o3DDfj4FClJP6.8hLch7NSsgnpw9kjKHZMLIw2m7XDODO', '1998-10-05', 'male', 'Yangon', '09786238450', NULL, '2019-11-18 15:18:46', '2019-11-18 15:18:46'),
(2, 'Hsu Mon Kyaw', 'hsumon@gmail.com', NULL, '$2y$10$38OuSQH07159W4sqstrk9eNcqC2b4iOnMNbBJJf/sTSMQ.4phIbvW', '2000-10-05', 'female', 'Yangon', '09786238450', NULL, '2019-11-18 15:22:57', '2019-11-18 15:22:57'),
(4, 'May Gi', 'maygi@gmail.com', NULL, '$2y$10$9/HpOaKZ0xqYyK2hLi0iBenu4Yg3L1i/tzHVWg/SSA6AoL6HrNgEe', '1996-02-02', 'male', 'lol', '0987654321', NULL, '2019-11-19 03:02:26', '2019-11-19 03:02:26'),
(5, 'zin', 'zin@gmail.com', NULL, '$2y$10$EOOezCLYkVHaQ1D4gfoJaOny47vjtVIGndCBMtf9p6Kl5UlZHbQM6', '1999-11-05', 'female', 'yangon', '09123443212', NULL, '2019-11-19 02:39:38', '2019-11-19 02:39:38'),
(6, 'Ko yan laay', 'yan@gmail.com', NULL, '$2y$10$VYFLNbambD28rj0/CJZvo.jkhb5lMhSXRaVogVKcKj5GyvKwhYXmC', '1995-01-01', 'male', 'yangon', '09876543121', NULL, '2019-11-19 03:18:31', '2019-11-19 03:18:31'),
(7, 'may', 'may@gmail.com', NULL, '$2y$10$n9VYglIa6EFnWWpRlBzYUO3KaxTZ0nOmzW7bkDCXJdPTveQmJkOXq', '2019-11-20', 'female', 'yangon', '0934356576', NULL, '2019-11-19 03:40:06', '2019-11-19 03:40:06'),
(8, 'wah wah win', 'wah@gmail.com', NULL, '$2y$10$VlYIRok4pn83zWyWlGLbyOJDxr/at8IvsjYOZj8RokR.U2v4p/jIK', '1999-06-12', 'female', 'Mon State', '09782088215', NULL, '2019-11-20 00:41:19', '2019-11-20 00:41:19'),
(9, 'paungpaung', 'paung@gmail.com', NULL, '$2y$10$8FU9Uw6Vp7rdmaoIvhY56uqfLQn6kepgeT9wYAqIDQjJFrXLfl7jW', '1999-01-01', 'female', 'Yangon', '09123456782', NULL, '2019-11-20 15:51:34', '2019-11-20 15:51:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
