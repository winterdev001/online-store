-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2020 at 10:43 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amizero_market`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'New Trending T-shirts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent egestas iaculis tristique. Quisque aliquam, turpis in suscipit varius, augue tellus tempor urna, et eleifend lectus sapien sed tortor. Nunc vitae lacus tincidunt, auctor velit et, feugiat leo. Donec orci sem, rutrum nec sem condimentum, eleifend ultricies enim. Nunc pulvinar, quam ut ultricies iaculis, odio enim pretium tellus, auctor fringilla metus tortor in turpis. Nulla facilisi. Etiam sit amet faucibus nunc.\r\n\r\nMauris eu vehicula metus. Proin interdum interdum ullamcorper. Nunc vitae porttitor arcu. Donec eget convallis libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce ut eros vitae felis porta ullamcorper. Aenean consectetur erat sed odio imperdiet vehicula. Maecenas bibendum risus dui, vitae fringilla nunc tincidunt volutpat.', 'tshirt2_1584624697.jpg', 1, '2020-03-19 11:31:37', '2020-03-19 11:31:37'),
(2, 'Best car of the month', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent egestas iaculis tristique. Quisque aliquam, turpis in suscipit varius, augue tellus tempor urna, et eleifend lectus sapien sed tortor. Nunc vitae lacus tincidunt, auctor velit et, feugiat leo. Donec orci sem, rutrum nec sem condimentum, eleifend ultricies enim. Nunc pulvinar, quam ut ultricies iaculis, odio enim pretium tellus, auctor fringilla metus tortor in turpis. Nulla facilisi. Etiam sit amet faucibus nunc.\r\n\r\nMauris eu vehicula metus. Proin interdum interdum ullamcorper. Nunc vitae porttitor arcu. Donec eget convallis libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce ut eros vitae felis porta ullamcorper. Aenean consectetur erat sed odio imperdiet vehicula. Maecenas bibendum risus dui, vitae fringilla nunc tincidunt volutpat.', 'santafe1_1584624734.jpg', 2, '2020-03-19 11:32:14', '2020-03-19 11:32:14'),
(3, 'My go to house style of 2020', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent egestas iaculis tristique. Quisque aliquam, turpis in suscipit varius, augue tellus tempor urna, et eleifend lectus sapien sed tortor. Nunc vitae lacus tincidunt, auctor velit et, feugiat leo. Donec orci sem, rutrum nec sem condimentum, eleifend ultricies enim. Nunc pulvinar, quam ut ultricies iaculis, odio enim pretium tellus, auctor fringilla metus tortor in turpis. Nulla facilisi. Etiam sit amet faucibus nunc.\r\n\r\nMauris eu vehicula metus. Proin interdum interdum ullamcorper. Nunc vitae porttitor arcu. Donec eget convallis libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce ut eros vitae felis porta ullamcorper. Aenean consectetur erat sed odio imperdiet vehicula. Maecenas bibendum risus dui, vitae fringilla nunc tincidunt volutpat.', 'FANCY-15_1584624772.gif', 3, '2020-03-19 11:32:52', '2020-03-19 11:32:52');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Fashion', '2020-03-19 11:30:01', '2020-03-19 11:30:01'),
(2, 'Cars', '2020-03-19 11:30:09', '2020-03-19 11:30:09'),
(3, 'House', '2020-03-19 11:30:20', '2020-03-19 11:30:20');

-- --------------------------------------------------------

--
-- Table structure for table `carousels`
--

CREATE TABLE `carousels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carousels`
--

INSERT INTO `carousels` (`id`, `first_title`, `second_title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'New-Season', 'New watch 2020', 'banner-07_1584625062.jpg', '2020-03-19 11:27:25', '2020-03-19 11:37:42'),
(2, 'New-Season', 'New arrival Bags', 'banner-06_1584625089.jpg', '2020-03-19 11:28:50', '2020-03-19 11:38:09'),
(3, 'New-Season', 'Best choice of 2020', 'banner-01_1584625125.jpg', '2020-03-19 11:29:45', '2020-03-19 11:38:45');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Fashion', '2020-03-19 11:17:34', '2020-03-19 11:17:34', '1_1584623853.jpg'),
(2, 'House', '2020-03-19 11:20:24', '2020-03-19 11:20:24', '1-480x270_1584624024.gif'),
(3, 'Cars', '2020-03-19 11:20:52', '2020-04-01 10:27:32', 'cars_1585744052.jpg'),
(4, 'Electronics', '2020-04-01 10:25:59', '2020-04-01 10:25:59', 'comp_1585743958.jpg'),
(5, 'Sport', '2020-04-01 10:26:17', '2020-04-01 10:26:17', 'sport_1585743977.jpg'),
(6, 'Plot', '2020-04-01 10:26:42', '2020-04-01 10:26:42', 'house_1585744002.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `for` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `for_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `email`, `content`, `for`, `for_id`, `created_at`, `updated_at`) VALUES
(1, 'winter@gmail.com', 'nice house!!', 'product', 2, '2020-03-19 14:30:08', '2020-03-19 14:30:08'),
(3, 'user@gmail.com', 'nice car', 'product', 3, '2020-03-19 14:38:38', '2020-03-19 14:38:38'),
(5, 'winter@gmail.com', 'i wonder where you got them?', 'product', 1, '2020-03-19 14:48:57', '2020-03-19 14:48:57'),
(6, 'new@gmail.com', 'Woow!', 'product', 2, '2020-03-19 14:57:36', '2020-03-19 14:57:36'),
(12, 'test@gmail.com', 'test', 'blog', 1, '2020-03-20 09:19:48', '2020-03-20 09:19:48'),
(13, 'today@gmail.com', 'wooow', 'blog', 3, '2020-03-20 13:55:39', '2020-03-20 13:55:39');

-- --------------------------------------------------------

--
-- Table structure for table `fields`
--

CREATE TABLE `fields` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `field_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fields`
--

INSERT INTO `fields` (`id`, `field_name`, `created_at`, `updated_at`) VALUES
(1, 'SUV', '2020-03-19 11:21:18', '2020-03-19 11:21:18'),
(2, 'Collection', '2020-03-19 11:21:30', '2020-03-19 11:21:30'),
(4, 'T-shirt', '2020-03-19 13:23:30', '2020-03-19 13:23:30'),
(5, 'Jackets', '2020-03-19 13:25:53', '2020-03-19 13:25:53'),
(6, 'Residential', '2020-04-01 17:11:09', '2020-04-01 17:11:09'),
(7, 'Shoes', '2020-04-01 17:12:05', '2020-04-01 17:12:05');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'winter@gmail.com', 'where is your address ecactly?', '2020-03-19 15:26:12', '2020-03-19 15:26:12'),
(2, 'winter@gmail.com', 'do you sell online too?', '2020-03-19 15:27:19', '2020-03-19 15:27:19'),
(4, 'me@gmail.com', 'where can i find you?', '2020-03-20 13:56:25', '2020-03-20 13:56:25');

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
(25, '2014_10_12_000000_create_users_table', 1),
(26, '2014_10_12_100000_create_password_resets_table', 1),
(27, '2020_03_06_062717_create_products_table', 1),
(28, '2020_03_06_062923_create_categories_table', 1),
(29, '2020_03_06_062937_create_fields_table', 1),
(30, '2020_03_06_121738_create_product_images_table', 1),
(31, '2020_03_10_074355_add_user_id_to_products', 1),
(32, '2020_03_10_095021_add_image_to_categories', 1),
(33, '2020_03_16_123518_create_carousels_table', 1),
(34, '2020_03_17_093921_create_blogs_table', 1),
(35, '2020_03_17_093937_create_blog_categories_table', 1),
(36, '2020_03_19_153353_create_comments_table', 2),
(37, '2020_03_19_153405_create_messages_table', 2),
(38, '2020_03_20_134324_add_image_to_users', 3);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seller_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seller_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `quantity`, `total`, `description`, `product_images`, `status`, `seller_phone`, `seller_email`, `category_id`, `field_id`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Collection 1', 35, 3, 105, 'New fashion collection!', '[\"2_1584624161.jpg\"]', '0', '0789023456', 'collection@gmail.com', 1, 2, '2020-03-19 11:22:42', '2020-03-19 11:22:42', 1),
(2, 'Villa', 400000, 2, 800000, 'New villa in kigali', '[\"RENDER-05_1584624319.gif\",\"h14aa-300x155_1584624319.gif\",\"RENDER-08_1584624319.gif\"]', '0', '0789023498', 'villa@gmail.com', 2, 6, '2020-03-19 11:25:19', '2020-04-01 17:11:40', 1),
(3, 'Santafe 2020', 30000, 1, 30000, 'new santafe', '[\"santafe1_1584624401.jpg\"]', '0', '0789023411', 'car@gmail.com', 3, 1, '2020-03-19 11:26:41', '2020-03-19 11:26:41', 1),
(4, 'New Jacket', 10, 3, 30, 'new T-shirt', '[\"product-detail-03_1584631523.jpg\",\"product-detail-02_1584631523.jpg\",\"product-detail-01_1584631523.jpg\"]', '0', '0789023456', 'collection@gmail.com', 1, 5, '2020-03-19 13:25:23', '2020-03-19 13:26:28', 1),
(5, 'Off-white Vans', 19, 2, 38, 'Brand new all white vans.', '[\"vans_1585768404.jpg\"]', '0', '0789023450', 'shoes@gmail.com', 1, 7, '2020-04-01 17:13:24', '2020-04-01 17:13:24', 1),
(6, 'Jordan one', 27, 1, 27, 'Brand new Jordan ones with rare colours , get yours before its all sell out.', '[\"j1_1585768590.jpg\",\"j3_1585768590.jpg\",\"j2_1585768590.jpg\"]', '0', '0789023452', 'shoes@gmail.com', 1, 7, '2020-04-01 17:16:30', '2020-04-01 17:16:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `super` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `super`, `remember_token`, `created_at`, `updated_at`, `image`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$SSJTJjQ82fUvpH9xFkJEFOj.Shkl.IZT4bX4WfzreCvTPcrnnkgoK', '0788990011', 1, NULL, NULL, '2020-03-20 14:23:59', 'banner-01_1584721439.jpg'),
(2, 'Alan', 'alan@gmail.com', NULL, '$2y$10$nbDSQ34iV4ydJRGHAdircu9YrbXoD52mxcXsJ2H3mB1AEJDB5qG/2', '0700000000', 0, NULL, '2020-03-20 12:05:17', '2020-03-20 13:04:41', 'product-min-01_1584716681.jpg'),
(3, 'fab', 'fab@gmail.com', NULL, '$2y$10$lUbDWaKex/zT0iI3XbvsEOAt8kO5rp9hiFxSpUyyNcSz8qG49hzZy', '0711111111', 0, NULL, '2020-03-20 13:58:47', '2020-03-20 13:58:47', 'noimage.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousels`
--
ALTER TABLE `carousels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `fields`
--
ALTER TABLE `fields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
