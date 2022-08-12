-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-08-12 07:32:48
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `resume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `about`
--

CREATE TABLE `about` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `about`
--

INSERT INTO `about` (`id`, `img`, `text`) VALUES
(1, 'my.jpg', '過去都是從事服務業，這次疫情太嚴重而導致失業，想尋求一個可以永續的工作，參加了泰山職訓的甄試便開始學習程式技術，在學習程式的過程中找到了興趣，希望未來能從事相關工作與團隊一起努力！');

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `id` int(11) UNSIGNED NOT NULL,
  `acc` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '管理者帳號',
  `pw` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '管理者密碼'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`id`, `acc`, `pw`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- 資料表結構 `repository`
--

CREATE TABLE `repository` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '作品縮圖',
  `href` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '作品連結',
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `repository`
--

INSERT INTO `repository` (`id`, `img`, `href`, `sh`) VALUES
(1, 'bmi.jpg', 'http://220.128.133.15/s1110208/BMI/', 1),
(10, 'calendar.jpg', 'http://220.128.133.15/s1110208/PerpetualCalendar-HomeWork', 1),
(11, 'vote.jpg', 'http://220.128.133.15/s1110208/Vote/', 1),
(12, 'space.jpg', 'http://220.128.133.15/s1110208/spaceGame/', 1),
(13, 'toneso.jpg', 'http://220.128.133.15/s1110208/toneso/', 1),
(14, 'analogClock.jpg', 'http://220.128.133.15/s1110208/analogClock/', 1),
(15, 'cat.jpg', 'http://220.128.133.15/s1110208/cat/', 1),
(16, 'clock.jpg', 'http://220.128.133.15/s1110208/clock/', 1),
(17, 'colorShape.jpg', 'http://220.128.133.15/s1110208/colorShape/', 1),
(18, 'colorEdit.jpg', 'http://220.128.133.15/s1110208/colorEdit/', 1),
(19, 'ps-1.jpg', 'https://www.flickr.com/photos/196142177@N08/52232856016/in/dateposted-public/', 1),
(20, 'ps-2.jpg', 'https://www.flickr.com/photos/196142177@N08/52233127974/in/dateposted-public/', 1),
(21, 'ps-3.jpg', 'https://www.flickr.com/photos/196142177@N08/52232862613/in/dateposted-public/', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `repository`
--
ALTER TABLE `repository`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `repository`
--
ALTER TABLE `repository`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
