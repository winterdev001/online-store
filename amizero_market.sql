-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2020 at 12:55 PM
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
(1, 'New Trending Jackets', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vehicula eros et purus interdum rhoncus. Duis iaculis suscipit pellentesque. Vivamus varius massa condimentum nulla finibus sollicitudin. Sed lacus orci, ullamcorper eget nisl luctus, aliquam rutrum ante. Praesent a accumsan ligula. Ut magna velit, fermentum eu magna eu, porta interdum dolor. Aenean tristique quam eget sollicitudin feugiat. Vestibulum accumsan mi risus, at cursus dolor rutrum nec. Sed sit amet sollicitudin diam. Ut elementum lacus vitae lacus imperdiet, id mattis nibh malesuada. Suspendisse accumsan, ante sit amet consectetur tempor, sapien diam tristique sapien, et maximus ligula est in ligula. Cras eget nulla varius, fermentum urna in, porta erat. Fusce sed nunc ac purus accumsan pellentesque sed ac erat. Donec sit amet lacus non odio porttitor scelerisque ac eu lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vehicula eros et purus interdum rhoncus. Duis iaculis suscipit pellentesque. Vivamus varius massa condimentum nulla finibus sollicitudin. Sed lacus orci, ullamcorper eget nisl luctus, aliquam rutrum ante. Praesent a accumsan ligula. Ut magna velit, fermentum eu magna eu, porta interdum dolor. Aenean tristique quam eget sollicitudin feugiat. Vestibulum accumsan mi risus, at cursus dolor rutrum nec. Sed sit amet sollicitudin diam. Ut elementum lacus vitae lacus imperdiet, id mattis nibh malesuada. Suspendisse accumsan, ante sit amet consectetur tempor, sapien diam tristique sapien, et maximus ligula est in ligula. Cras eget nulla varius, fermentum urna in, porta erat. Fusce sed nunc ac purus accumsan pellentesque sed ac erat. Donec sit amet lacus non odio porttitor scelerisque ac eu lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;', 'product-detail-03_1584447029.jpg', 1, '2020-03-17 10:10:29', '2020-03-17 12:02:12'),
(3, 'The Great Big List of Men’s Gifts for the Holidays', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet quam porttitor, consequat magna auctor, facilisis dui. Maecenas eleifend auctor enim, sit amet malesuada sapien volutpat ut. Pellentesque quis dictum ipsum. Mauris eros lorem, pulvinar ac varius ut, malesuada non turpis. Sed varius ac nulla ac varius. Donec vulputate odio vel faucibus condimentum. Nullam eleifend et massa cursus porttitor. Ut at augue a odio elementum venenatis sit amet vitae massa. Mauris sed libero vel elit vulputate lobortis. Curabitur id velit dapibus, maximus augue convallis, fermentum arcu.\r\n\r\nMaecenas orci odio, pretium in neque eget, volutpat scelerisque metus. Proin eget faucibus dolor. Cras lobortis efficitur ipsum, eget eleifend lorem luctus elementum. Quisque at commodo arcu. Quisque ac ante vulputate metus porttitor euismod. Duis varius semper dolor a ornare. Mauris scelerisque lacinia lorem. Suspendisse ut velit porta, dictum lorem vel, pretium ex. Cras at sollicitudin enim. Vivamus suscipit mollis lectus fringilla vehicula. Sed sollicitudin tristique diam, nec luctus mi finibus non.', 'blog-02_1584454253.jpg', 4, '2020-03-17 12:10:54', '2020-03-17 12:10:54'),
(4, 'Best budget house in 2020', 'Aenean aliquam tincidunt arcu at tempus. Nam ac quam et metus dignissim tincidunt. Nunc a efficitur risus. Suspendisse potenti. Quisque venenatis et sem sit amet volutpat. Sed placerat turpis id velit mattis scelerisque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed varius bibendum elit, vitae faucibus metus hendrerit eget. Curabitur iaculis quam ut scelerisque bibendum. Suspendisse dictum erat vel mauris egestas cursus quis vitae nibh. Mauris eget bibendum odio, sed laoreet ex. Phasellus elementum efficitur nisi ullamcorper laoreet. Vestibulum aliquet nec dolor vel dictum. Cras auctor sed lectus iaculis finibus. Proin interdum massa eu sem facilisis, vel bibendum elit commodo.\r\n\r\nPraesent aliquam, tellus eget congue venenatis, tortor metus finibus ex, eleifend scelerisque est purus et metus. Phasellus finibus et est at ultrices. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec interdum ultrices quam nec aliquet. Nulla lacinia efficitur hendrerit. Phasellus mattis urna eu elit faucibus porta. In justo leo, porta id auctor non, convallis a metus. Donec mi quam, commodo pulvinar tellus a, varius interdum nunc. Quisque ornare massa nec ligula consectetur pellentesque. Aenean eu mattis ante. Phasellus a facilisis libero, et iaculis nulla.', 'house_1584454629.jpg', 5, '2020-03-17 12:17:09', '2020-03-17 12:17:50');

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
(1, 'Fashion', '2020-03-17 10:10:00', '2020-03-17 10:10:00'),
(2, 'Car', '2020-03-17 11:39:05', '2020-03-17 11:52:01'),
(4, 'Lifestyle', '2020-03-17 12:07:41', '2020-03-17 12:07:41'),
(5, 'House', '2020-03-17 12:08:04', '2020-03-17 12:08:04');

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
(1, 'New-Season', 'Jackets & Coats', 'slide-03_1584367284.jpg', '2020-03-16 12:01:24', '2020-03-16 12:01:24'),
(2, 'New Season', 'New fashion Collection 2020', 'slide-01_1584367479.jpg', '2020-03-16 12:04:39', '2020-03-16 12:04:39'),
(3, 'New-Season', 'New arrivalz', 'slide-02_1584367519.jpg', '2020-03-16 12:05:19', '2020-03-17 07:24:53');

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
(1, 'Computers', '2020-03-09 09:58:45', '2020-03-11 09:53:51', 'comp_1583927631.jpg'),
(3, 'Fashion', '2020-03-09 10:26:25', '2020-03-11 09:53:34', 'fashion_1583927614.jpg'),
(4, 'Sport', '2020-03-09 16:11:05', '2020-03-11 10:02:19', 'sport_1583928139.jpg'),
(5, 'Carss', '2020-03-10 09:24:58', '2020-03-13 14:31:48', 'cars_1583925214.jpg'),
(6, 'Hardware', '2020-03-13 14:33:10', '2020-03-13 14:33:10', 'santafe1_1584117188.jpg'),
(7, 'Plot', '2020-03-13 14:37:38', '2020-03-13 14:37:38', 'FANCY-15_1584117458.gif'),
(8, 'House', '2020-03-17 12:01:35', '2020-03-17 12:01:35', 'RENDER-16_1584453695.gif');

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
(1, 'HP', '2020-03-09 10:00:53', '2020-03-09 10:00:53'),
(2, 'House', '2020-03-09 10:11:13', '2020-03-09 10:11:13'),
(3, 'Shoes', '2020-03-09 10:35:45', '2020-03-09 10:35:45'),
(4, 'T-shirt', '2020-03-09 16:10:24', '2020-03-09 16:10:24'),
(5, 'Pant', '2020-03-09 16:13:54', '2020-03-11 12:53:32'),
(6, 'Collection', '2020-03-09 18:10:38', '2020-03-11 08:29:48'),
(9, 'Car', '2020-03-12 10:26:24', '2020-03-12 10:26:24'),
(10, 'Musanze', '2020-03-13 14:37:56', '2020-03-13 14:37:56');

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
(3, '2020_03_06_062717_create_products_table', 1),
(4, '2020_03_06_062923_create_categories_table', 1),
(5, '2020_03_06_062937_create_fields_table', 1),
(6, '2020_03_06_121738_create_product_images_table', 1),
(7, '2020_03_10_074355_add_user_id_to_products', 2),
(8, '2020_03_10_095021_add_image_to_categories', 3),
(9, '2020_03_16_123518_create_carousels_table', 4),
(12, '2020_03_17_093921_create_blogs_table', 5),
(13, '2020_03_17_093937_create_blog_categories_table', 5);

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
(1, 'HP Spectre Folio', 1300, 10, 13000, 'Brand new Hp Spectre Folio, don\'t miss out.', '[\"h2_1583755344.jpg\",\"hp1_1583755344.jpg\",\"hp_1583755345.jpg\"]', '0', '0789023456', 'computers@gmail.com', 1, 1, '2020-03-09 10:02:25', '2020-03-09 10:02:25', 1),
(2, 'Villa', 250000, 1, 250000, 'New villa in kigali', '[\"BRYAN-RENDER-28_1583755962.jpg\",\"BRYAN-RENDER-30_1583755962.jpg\",\"BRYAN-RENDER-29_1583755962.jpg\"]', '0', '0789023456', 'computers@gmail.com', 2, 2, '2020-03-09 10:12:42', '2020-03-09 10:12:42', 1),
(3, 'New White Vans', 16, 5, 80, 'Brand new Vans from winter designers, don\'t miss out.', '[\"vans_1583757453.jpg\",\"vans2_1583757454.jpg\",\"vans1_1583757454.jpg\"]', '0', '0789023459', 'vans@gmail.com', 3, 3, '2020-03-09 10:37:34', '2020-03-09 10:37:34', 1),
(4, 'Trend T-shirts', 7, 7, 49, 'Brand new T-shirts, don\'t miss out.', '[\"tshirt1_1583777599.jpg\",\"tshirt2_1583777600.jpg\",\"tshirt_1583777600.jpg\"]', '0', '0789023456', 'tshirt@gmail.com', 3, 4, '2020-03-09 16:13:20', '2020-03-09 16:13:20', 1),
(5, 'Jog Pants', 13, 3, 39, 'Brand new Jog Pants, don\'t miss out.', '[\"jog_1583777708.jpg\",\"jog2_1583777708.jpg\",\"jog1_1583777708.jpg\"]', '0', '0789023451', 'joggs@gmail.com', 4, 5, '2020-03-09 16:15:08', '2020-03-09 16:15:08', 1),
(6, 'Mini villa', 50000, 1, 50000, 'New Mini villa in kigali', '[\"VICENT-09_1583777932.jpg\",\"VICENT-07_1583777932.jpg\",\"VICENT-08_1583777932.jpg\"]', '0', '0789023450', 'house@gmail.com', 2, 2, '2020-03-09 16:18:52', '2020-03-09 16:18:52', 1),
(7, 'Collection 1', 56, 1, 56, 'New fashion collection!', '[\"3_1583954857.jpg\"]', '0', '0789023411', 'collection@gmail.com', 3, 6, '2020-03-09 18:11:59', '2020-03-11 17:27:37', 1),
(8, 'Collection 2', 56, 2, 112, 'New fashion collection!', '[\"2_1583784936.jpg\"]', '0', '0789023498', 'collection@gmail.com', 3, 6, '2020-03-09 18:15:36', '2020-03-09 18:15:36', 1),
(9, 'Collection 2', 56, 2, 112, 'New fashion collection!', '[\"2_1583784986.jpg\"]', '0', '0789023498', 'collection@gmail.com', 3, 6, '2020-03-09 18:16:26', '2020-03-09 18:16:26', 1),
(11, 'Collection 3', 59, 1, 59, 'New fashion collection!', '[\"fashion_1583918323.jpg\"]', '0', '0789023499', 'collection@gmail.com', 3, 6, '2020-03-11 07:18:43', '2020-03-11 07:18:43', 1),
(12, 'Santafe(Hyundai)', 20000, 1, 20000, 'Brand new Hyundai Santafe, don\'t miss out.', '[\"santafe1_1584016088.jpg\",\"santafe_1584016088.jpg\"]', '0', '0789023123', 'cars@gmail.com', 5, 9, '2020-03-12 10:28:08', '2020-03-12 10:28:08', 1),
(14, 'new', 42, 2, 84, 'new shoes', '[\"4_1584117938.jpg\"]', '0', '0789023456', 'collection@gmail.com', 3, 3, '2020-03-13 14:45:38', '2020-03-13 14:45:38', 1),
(15, 'nnjwj', 300030000, 2, 600060000, 'jnwkM', '[\"BRYAN-RENDER-25_1584118158.jpg\",\"BRYAN-RENDER-29_1584118158.jpg\",\"BRYAN-RENDER-22_1584118158.jpg\"]', '0', '0789023498', 'collection@gmail.com', 2, 2, '2020-03-13 14:49:18', '2020-03-13 14:49:18', 1);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `super`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$tMKzIUriFmY9vH2Is1D7dOvLNhc.b1mtC8NpoIDFoXFItbFeKYKKC', '0789001122', 1, NULL, '2020-03-10 06:45:53', '2020-03-10 06:45:53');

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
-- Indexes for table `fields`
--
ALTER TABLE `fields`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fields`
--
ALTER TABLE `fields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
