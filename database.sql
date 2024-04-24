-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 09:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `priority` varchar(50) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `assign_to` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `description`, `priority`, `start_date`, `due_date`, `assign_to`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dummy Task 1', 'This is a dummy task for testing purposes', 'Medium', '2024-04-21', '2024-04-30', NULL, NULL, '2024-04-21 16:28:05', '2024-04-21 16:28:05'),
(2, 'Dummy Task 2', 'This is a dummy task for testing purposes', 'Medium', '2024-04-21', '2024-04-30', NULL, NULL, '2024-04-21 16:28:05', '2024-04-21 16:28:05'),
(3, 'Dummy Task 3', 'This is a dummy task for testing purposes', 'Medium', '2024-04-21', '2024-04-30', NULL, NULL, '2024-04-21 16:28:05', '2024-04-21 16:28:05'),
(4, 'Dummy Task 4', 'This is a dummy task for testing purposes', 'Medium', '2024-04-21', '2024-04-30', NULL, NULL, '2024-04-21 16:28:05', '2024-04-21 16:28:05'),
(5, 'Dummy Task 5', 'This is a dummy task for testing purposes', 'Medium', '2024-04-21', '2024-04-30', NULL, NULL, '2024-04-21 16:28:05', '2024-04-21 16:28:05'),
(6, 'Dummy Task 6', 'This is a dummy task for testing purposes', 'Medium', '2024-04-21', '2024-04-30', NULL, NULL, '2024-04-21 16:28:05', '2024-04-21 16:28:05'),
(7, 'Dummy Task 7', 'This is a dummy task for testing purposes', 'Medium', '2024-04-21', '2024-04-30', NULL, NULL, '2024-04-21 16:28:05', '2024-04-21 16:28:05'),
(8, 'Dummy Task 8', 'This is a dummy task for testing purposes', 'Medium', '2024-04-21', '2024-04-30', NULL, NULL, '2024-04-21 16:28:05', '2024-04-21 16:28:05'),
(9, 'Dummy Task 9', 'This is a dummy task for testing purposes', 'Medium', '2024-04-21', '2024-04-30', NULL, NULL, '2024-04-21 16:28:05', '2024-04-21 16:28:05'),
(10, 'Dummy Task 10', 'This is a dummy task for testing purposes', 'Medium', '2024-04-21', '2024-04-30', NULL, NULL, '2024-04-21 16:28:05', '2024-04-21 16:28:05'),
(17, 'fdfsda', '<p>fdsfadsfsdfsd</p>\r\n', 'Low', NULL, '0000-00-00', 1, 'Pending', '2024-04-22 17:05:41', '2024-04-22 17:05:41'),
(19, 'Dummy Task 1', '<p>This is a dummy task for testing purposes</p>\r\n', 'High', '2024-04-21', '2024-04-30', 12, 'Completed', '2024-04-24 03:25:07', '2024-04-24 03:25:07'),
(20, 'Dummy Task 1', '<p>This is a dummy task for testing purposes</p>\r\n', 'Medium', '2024-04-21', '2024-04-30', 12, 'Completed', '2024-04-24 03:25:20', '2024-04-24 03:25:20'),
(21, 'Dummy Task 1', '<p>This is a dummy task for testing purposes</p>\r\n', 'Medium', '2024-04-21', '2024-04-30', 12, 'Completed', '2024-04-24 03:26:42', '2024-04-24 03:26:42'),
(22, 'Dummy Task 1', '<p>This is a dummy task for testing purposes</p>\r\n', 'High', '2024-04-21', '2024-04-30', 12, 'In-Progress', '2024-04-24 03:27:36', '2024-04-24 03:47:01'),
(23, 'Dummy Task 1', '<p>This is a dummy task for testing purposes</p>\r\n', 'Medium', '2024-04-21', '2024-04-30', 12, 'Completed', '2024-04-24 03:38:45', '2024-04-24 03:38:45'),
(25, 'Dummy Task 1', '<p>This is a dummy task for testing purposes</p>\r\n', 'High', '2024-04-21', '2024-04-30', 14, 'Completed', '2024-04-24 03:42:55', '2024-04-24 06:55:24'),
(26, 'Dummy Task 1', '<p>This is a dummy task for testing purposes</p>\r\n', 'High', '2024-04-21', '2024-04-30', 12, 'In-Progress', '2024-04-24 03:42:59', '2024-04-24 03:42:59'),
(27, 'Dummy Task 32', '<p>This is a dummy task for testing purposes&nbsp;This is a dummy task for testing purposesThis is a dummy task for testing purposes.</p>\r\n', 'High', '2024-04-23', '2024-05-02', 14, 'Pending', '2024-04-24 03:44:12', '2024-04-24 06:44:05'),
(29, 'create task for user2', '<p>this task for user 1&nbsp;this task for user 1this task for user 1this task for user 1this task for user 1</p>\r\n', 'Low', '2024-04-26', '2024-04-29', 22, 'In-Progress', '2024-04-24 07:10:14', '2024-04-24 07:12:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`) VALUES
(2, 'admin', 'adminpassword', 'admin@example.com', 'admin'),
(13, 'jayant', '$2y$10$SaZ3YVA.j5pQ7th9o.zO7OPXEv/69RgQGgN4zuVlsfuLMvg47ep0y', 'jayant194.raikwar@gmail.com', 'admin'),
(14, 'demo12', 'admin', 'demo@gmail.com', 'user'),
(15, 'demo21', 'admin', 'demo21@gmail.com', 'user'),
(20, 'admin', 'admin@123', 'admin@gmail.com', 'admin'),
(21, 'user1', 'user12345', 'user1@gmail.com', 'user'),
(22, 'user2', 'user12345', 'user2@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
