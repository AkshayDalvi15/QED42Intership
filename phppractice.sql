-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2021 at 05:48 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phppractice`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '2021-08-08 00:20:25'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `views`, `image`, `content`, `created_at`, `updated_at`) VALUES
(0, 3, 'Zero to One', 0, 'book.jpg', '&lt;p&gt;Peter Thiel encourages young people to put learning before university. it&amp;#39;s easier to copy a model than to make something new&lt;/p&gt;\r\n', '2021-08-12 18:20:59', '2021-08-12 18:20:59'),
(0, 3, 'Who say You can\'t? you do ', 0, 'book.jpg', '&lt;p&gt;In this book Daniel&amp;nbsp; studied the lives of great achievers, sought guidance from spiritual leaders, and discovered the secrets for shaping one&amp;#39;s own destiny.&amp;nbsp; He used his personal experience of changing his life to create this powerful experience of changing his life to create this powerful seven-step guide to discovering your true self.&lt;/p&gt;\r\n', '2021-08-12 18:24:48', '2021-08-12 18:24:48'),
(0, 2, 'The 5 am club', 0, 'book.jpg', '&lt;p&gt;The 5 am club concept over twenty years ago, based on a revolutionary morning routine that has helped his clients maximize their productivity, activate their best health, and bulletproof their life.&lt;/p&gt;\r\n', '2021-08-12 18:27:26', '2021-08-12 18:27:26'),
(0, 2, 'The new one minute manager', 0, 'book.jpg', '&lt;p&gt;Due to the One minute manager book. Today, organizations must respond faster, with fewer resources, to keep up with ever-changing technology and globalization.To help you lead, manage, and succeed in this changing world Ken Blanchard offer you The new one minute manager.&lt;/p&gt;\r\n', '2021-08-12 18:30:58', '2021-08-12 18:30:58'),
(0, 2, 'The Secret', 0, 'book.jpg', '&lt;p&gt;In this book, you&amp;rsquo;ll learn how to use The Secret in every aspect of your life&amp;mdash;money, health, relationships, happiness, and in every interaction you have in the world. You&amp;rsquo;ll begin to understand the hidden, untapped power that&amp;rsquo;s within you, and this revelation can bring joy to every aspect of your life.&lt;/p&gt;\r\n', '2021-08-12 18:32:34', '2021-08-12 18:32:34'),
(0, 3, 'The Power of Now', 0, 'book.jpg', '&lt;p&gt;Eckhart Tolle&amp;#39;s message is simple: living in the now is the truest path to happiness and enlightenment. And while this message may not seem stunningly original or fresh, Tolle&amp;#39;s clear writing, supportive voice and enthusiasm make this an excellent manual for anyone who&amp;#39;s ever wondered what exactly &amp;quot;living in the now&amp;quot; means. Foremost, Tolle is a world-class teacher, able to explain complicated concepts in concrete language.&lt;/p&gt;\r\n', '2021-08-12 18:34:38', '2021-08-12 18:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('Author','Admin') DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `role`, `password`, `created_at`, `updated_at`) VALUES
(2, 'AkshayDalvi123', 'akshaydalvi123@tmail.com', 'Admin', '321akshaydalvi', '2021-08-11 06:25:02', '2021-08-11 07:20:58'),
(3, 'amitdalvi', 'amitdalvi@tmail.com', 'Admin', '9850219176', '2021-08-11 07:00:05', '2021-08-11 07:22:58'),
(4, 'pravinG', 'pravinG@tmail.com', 'Author', 'c1533b9eb43a46071199feec131c5fde', '2021-08-11 07:14:58', '2021-08-11 07:14:58'),
(7, 'vipulsali', 'vipulsali@tmail.com', 'Admin', 'e405c1df83bd248a07fc9a912279aed6', '2021-08-12 05:52:41', '2021-08-12 05:52:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
