-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2024 at 04:50 AM
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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `description`, `priority`, `start_date`, `due_date`, `created_at`, `updated_at`) VALUES
(1, 'Dummy Task 1', 'This is a dummy task for testing purposes', 'Medium', '2024-04-21', '2024-04-30', '2024-04-21 16:28:05', '2024-04-21 16:28:05'),
(2, 'Dummy Task 2', 'This is a dummy task for testing purposes', 'Medium', '2024-04-21', '2024-04-30', '2024-04-21 16:28:05', '2024-04-21 16:28:05'),
(3, 'Dummy Task 3', 'This is a dummy task for testing purposes', 'Medium', '2024-04-21', '2024-04-30', '2024-04-21 16:28:05', '2024-04-21 16:28:05'),
(4, 'Dummy Task 4', 'This is a dummy task for testing purposes', 'Medium', '2024-04-21', '2024-04-30', '2024-04-21 16:28:05', '2024-04-21 16:28:05'),
(5, 'Dummy Task 5', 'This is a dummy task for testing purposes', 'Medium', '2024-04-21', '2024-04-30', '2024-04-21 16:28:05', '2024-04-21 16:28:05'),
(6, 'Dummy Task 6', 'This is a dummy task for testing purposes', 'Medium', '2024-04-21', '2024-04-30', '2024-04-21 16:28:05', '2024-04-21 16:28:05'),
(7, 'Dummy Task 7', 'This is a dummy task for testing purposes', 'Medium', '2024-04-21', '2024-04-30', '2024-04-21 16:28:05', '2024-04-21 16:28:05'),
(8, 'Dummy Task 8', 'This is a dummy task for testing purposes', 'Medium', '2024-04-21', '2024-04-30', '2024-04-21 16:28:05', '2024-04-21 16:28:05'),
(9, 'Dummy Task 9', 'This is a dummy task for testing purposes', 'Medium', '2024-04-21', '2024-04-30', '2024-04-21 16:28:05', '2024-04-21 16:28:05'),
(10, 'Dummy Task 10', 'This is a dummy task for testing purposes', 'Medium', '2024-04-21', '2024-04-30', '2024-04-21 16:28:05', '2024-04-21 16:28:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'jayant', '$2y$10$q35RPV1vDvJX2hOSbb/6qeEEtC7RSYDUlG9FuxTdLiJZZ.o2CdOge', 'jayant@gmail.com');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
