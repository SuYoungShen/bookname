-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2017 年 03 月 01 日 13:51
-- 伺服器版本: 10.1.19-MariaDB
-- PHP 版本： 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `bookname`
--

-- --------------------------------------------------------

--
-- 資料表結構 `bookname`
--

CREATE TABLE `bookname` (
  `id` int(10) NOT NULL,
  `types` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `bookname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `bookname`
--

INSERT INTO `bookname` (`id`, `types`, `bookname`, `url`, `datetime`) VALUES
(76, '商業類、科技類', 'b0', 'https://tw.yahoo.com/', 2017),
(78, '商業類、科技類', 'b1', 'https://tw.yahoo.com/', 2017),
(80, '商業類、科技類', 'b2', 'https://tw.yahoo.com/', 2017),
(81, '旅遊、時尚流行類', 'c0', 'https://tw.yahoo.com/', 2017),
(82, '人文藝術、其它類', 'd0', 'https://tw.yahoo.com/', 2017),
(83, '旅遊、時尚流行類', 'C1', 'https://tw.yahoo.com/', 2017),
(84, '旅遊、時尚流行類', 'c2', 'https://tw.yahoo.com/', 2017),
(85, '人文藝術、其它類', 'd1', 'https://tw.yahoo.com/', 2017),
(86, '人文藝術、其它類', 'd2', 'https://tw.yahoo.com/', 2017),
(88, '人文藝術、其它類', 'c', 'https://tw.yahoo.com/', 2017);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `bookname`
--
ALTER TABLE `bookname`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `bookname`
--
ALTER TABLE `bookname`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
