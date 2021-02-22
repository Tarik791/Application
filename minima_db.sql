-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 02:12 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minima_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) NOT NULL,
  `url_address` varchar(60) NOT NULL,
  `image` varchar(500) NOT NULL,
  `date` datetime NOT NULL,
  `description` varchar(1024) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `url_address` varchar(60) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `url_address`, `username`, `password`, `email`, `date`) VALUES
(2, 'ivWosbYi2xo1VZYJAQ2frfLYHZIw9YiQ98qs', 'Terzo', '123', 'terzotarik@gmail.com', '2021-02-20 00:20:08'),
(3, 'pWp3TcdtFnv9bVKNgtBWXtsk8Ew0Sx5aYBeM2WIu6kGBuR', 'Rico', '123', 'terzotarik@gmail.com', '2021-02-20 00:33:48'),
(4, 'HBt6ajTqbBt1B7g2SQTsq1u1YL8PT96', 'Rico', '123', 'terzotarik@gmail.com', '2021-02-21 00:23:05'),
(5, '7yvWxTGjIqSvaimjgn5zPU1qfR8zg', 'Tarik', '123', 'terzotarik@gmail.com', '2021-02-21 00:26:31'),
(6, 'GMMw6QJ0xmgRG3LyDc8UWAq515nXxLkxjpEy4MnE9eCdyXxv73kH8', 'Tarikk', '123', 'terzotarik@gmail.com', '2021-02-22 00:19:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `url_address` (`url_address`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `url_address` (`url_address`),
  ADD KEY `username` (`username`),
  ADD KEY `password` (`password`),
  ADD KEY `date` (`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
