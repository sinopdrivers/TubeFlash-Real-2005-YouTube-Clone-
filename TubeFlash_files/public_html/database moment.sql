-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 11, 2021 at 04:02 PM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `framebit`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` varchar(255) NOT NULL,
  `commentid` int NOT NULL,
  `comment` text NOT NULL,
  `user` text NOT NULL,
  `date` text NOT NULL,
  `hidden` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registeredon` text NOT NULL,
  `profpic` text NOT NULL,
  `aboutme` text NOT NULL,
  `prof_name` text NOT NULL,
  `prof_age` text NOT NULL,
  `prof_city` text NOT NULL,
  `prof_hometown` text NOT NULL,
  `prof_country` text NOT NULL,
  `prof_occupation` text NOT NULL,
  `prof_interests` text NOT NULL,
  `prof_music` text NOT NULL,
  `prof_books` text NOT NULL,
  `prof_movies` text NOT NULL,
  `prof_website` text NOT NULL,
  `featured_vid` varchar(255) NOT NULL,
  `recent_vid` varchar(255) NOT NULL,
  `videos_watched` int NOT NULL,
  `subscribers` int NOT NULL,
  `videos` int NOT NULL,
  `channel_color` varchar(255) NOT NULL,
  `channel_bg` text NOT NULL,
  `brandingpic` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `brandingurl` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videodb`
--

DROP TABLE IF EXISTS `videodb`;
CREATE TABLE IF NOT EXISTS `videodb` (
  `VideoID` varchar(255) NOT NULL,
  `VideoName` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `VideoDesc` text NOT NULL,
  `Uploader` text NOT NULL,
  `UploadDate` text NOT NULL,
  `ViewCount` int NOT NULL,
  `VideoCategory` text NOT NULL,
  `VideoFile` text NOT NULL,
  `CustomThumbnail` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
