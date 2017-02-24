-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-02-24 10:55:41
-- 伺服器版本: 10.1.21-MariaDB
-- PHP 版本： 7.1.1

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
(67, '語言學習類', 'ssss', 'https://github.com/SuYoungShen/bookname', 2017),
(68, '商業類、科技類', 'ccc', 'https://github.com/SuYoungShen/bookname', 2017),
(69, '商業類、科技類', 'sdsd', 'https://github.com/SuYoungShen/bookname', 2017),
(70, '商業類、科技類', 'aaaaa', 'https://github.com/SuYoungShen/bookname', 2017),
(71, '旅遊、時尚流行類', 'ㄎ', 'http://php.net/manual/en/language.types.array.php', 2017),
(72, '語言學習類', 'sss', 'http://php.net/manual/en/language.types.array.php', 2017),
(73, '人文藝術、其它類', 'ss', 'http://php.net/manual/en/language.types.array.php', 2017),
(74, '語言學習類', 'sddd', 'http://php.net/manual/en/language.types.array.php', 2017);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
