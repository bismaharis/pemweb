-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 04:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbadboostify`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `target_marketing` varchar(50) NOT NULL,
  `product_type` varchar(50) NOT NULL,
  `ad_type` varchar(50) NOT NULL,
  `platform` varchar(50) NOT NULL,
  `total_price` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `user_id`, `company_name`, `product_name`, `target_marketing`, `product_type`, `ad_type`, `platform`, `total_price`, `created_at`) VALUES
(1, 12, 'nana', 'aban', 'remaja', 'makanan', 'vidio_panjang', 'Google', 90000, '2024-06-13 12:04:40'),
(2, 12, 'nana', 'ads', 'anak', 'makanan', 'poster', 'Google', 38000, '2024-06-13 07:53:28'),
(3, 12, 'nana', 'aban', 'anak', 'makanan', 'poster', 'Google', 38000, '2024-06-13 07:55:05'),
(4, 12, 'nana', 'ads', 'anak', 'makanan', 'poster', 'Google', 38000, '2024-06-13 08:11:53'),
(5, 12, 'pt na', 'ads', 'anak', 'mable', 'vidio_pendek', 'YouTube', 53000, '2024-06-13 08:18:40'),
(6, 12, 'pt na', 'aban', 'anak', 'makanan', 'vidio_pendek', 'Google', 43000, '2024-06-13 08:31:05'),
(7, 12, 'pt na', 'aban', 'anak', 'makanan', 'poster', 'Google', 38000, '2024-06-13 08:32:44'),
(8, 12, 'pt na', 'aban', 'anak', 'makanan', 'poster', 'Google', 38000, '2024-06-13 08:33:01'),
(9, 12, 'nana', 'aban', 'anak', 'makanan', 'poster', 'Google', 38000, '2024-06-13 08:33:30'),
(10, 12, 'pt na', 'aban', 'anak', 'makanan', 'poster', 'Google', 38000, '2024-06-13 08:33:57'),
(11, 12, 'nana', 'ads', 'anak', 'makanan', 'poster', 'Google', 38000, '2024-06-13 08:34:34'),
(12, 12, 'nana', 'ads', 'anak', 'makanan', 'poster', 'Google', 38000, '2024-06-13 08:35:10'),
(13, 12, 'pt na', 'aban', 'anak', 'makanan', 'poster', 'Google', 38000, '2024-06-13 08:35:43');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `target_marketing` varchar(50) NOT NULL,
  `product_type` varchar(50) NOT NULL,
  `ad_type` varchar(50) NOT NULL,
  `media_path` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `user_id`, `company_name`, `product_name`, `target_marketing`, `product_type`, `ad_type`, `media_path`, `price`, `created_at`) VALUES
(1, 12, 'hahah', 'aban', 'anak', 'makanan', 'poster', 'uploads/Cuplikan layar 2024-06-13 152331.png', 28000.00, '2024-06-13 09:43:28'),
(2, 12, 'hahah', 'aban', 'anak', 'makanan', 'poster', 'uploads/Cuplikan layar 2024-06-13 152331.png', 28000.00, '2024-06-13 09:47:35'),
(3, 12, 'hahah', 'aban', 'anak', 'makanan', 'poster', 'uploads/Cuplikan layar 2024-06-13 152331.png', 28000.00, '2024-06-13 09:48:05'),
(4, 12, 'hahah', 'aban', 'anak', 'makanan', 'poster', 'uploads/Cuplikan layar 2024-06-13 152331.png', 28000.00, '2024-06-13 09:49:51'),
(5, 12, 'hahah', 'aban', 'anak', 'makanan', 'poster', 'uploads/Cuplikan layar 2024-06-13 152331.png', 28000.00, '2024-06-13 09:55:19'),
(6, 12, 'nana', 'aban', 'anak', 'makanan', 'poster', 'uploads/Cuplikan layar 2024-06-13 152331.png', 28000.00, '2024-06-13 09:55:36'),
(7, 12, 'nana', 'aban', 'anak', 'makanan', 'poster', 'uploads/Cuplikan layar 2024-06-12 195505.png', 28000.00, '2024-06-13 09:55:54'),
(8, 12, 'nana', 'aban', 'dewasa', 'makanan', 'vidio_pendek', 'uploads/Cuplikan layar 2024-06-13 095056.png', 37000.00, '2024-06-13 10:18:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `created_at`) VALUES
(1, 'fadil', '123', 'fadilfasa03@gmail.com', '2024-05-21 21:30:06'),
(2, 'fasa', '123', 'rffasa31@gmail.com', '2024-05-21 22:03:25'),
(3, 'refa', '123', 'rfadilfasa@gmail.com', '2024-05-21 22:20:25'),
(8, '', '', '', '2024-05-21 22:52:22'),
(9, 'bimbim', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 'bisma@gmail.com', '2024-05-21 23:01:24'),
(11, 'agil', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'rffasa31@gmail.com', '2024-05-22 10:28:39'),
(12, 'guru', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'sophia@netsneeze.com', '2024-06-11 17:16:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ads`
--
ALTER TABLE `ads`
  ADD CONSTRAINT `ads_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `content_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
