-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 
-- サーバのバージョン： 10.1.37-MariaDB
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capsule_toy_system`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `cardinfo`
--

CREATE TABLE `cardinfo` (
  `cardNo` int(11) NOT NULL,
  `cardName` varchar(45) DEFAULT NULL,
  `cardAttribute` int(45) DEFAULT NULL,
  `cardAttributeStr` varchar(45) DEFAULT NULL,
  `cardRarity` int(45) DEFAULT NULL,
  `cardRarityStr` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `cardinfo`
--

INSERT INTO `cardinfo` (`cardNo`, `cardName`, `cardAttribute`, `cardAttributeStr`, `cardRarity`, `cardRarityStr`) VALUES
(1, 'クトゥルフ', 2, '水', 4, 'SSR'),
(2, 'イグ', 5, '闇', 4, 'SSR'),
(3, 'クトゥグア', 1, '火', 3, 'SR'),
(4, 'シアエガ', 5, '闇', 2, 'R'),
(5, 'ダゴン', 2, '水', 1, 'N'),
(6, 'ツァトゥグ', 3, '自然', 1, 'N'),
(7, 'ハスター', 5, '闇', 3, 'SR'),
(8, 'ゴル＝ゴロス', 2, '水', 4, 'SSR'),
(9, 'アイホート', 5, '闇', 2, 'R'),
(10, 'グラーキ', 2, '水', 1, 'N'),
(11, 'ガタノトーア', 2, '水', 2, 'R'),
(12, 'ムナガラー', 2, '水', 3, 'SR'),
(13, 'モルディギアン', 5, '闇', 2, 'R'),
(14, 'ファロール', 5, '闇', 3, 'SR'),
(15, 'ラーン＝テゴス', 3, '自然', 2, 'R'),
(16, 'ルリム・シャイコース', 2, '水', 2, 'R'),
(17, 'ヴルトゥーム', 4, '光', 3, 'SR'),
(18, 'イゴールナク', 5, '闇', 2, 'R'),
(19, 'グロス＝ゴルカ', 3, '自然', 3, 'SR'),
(20, 'ヨグ＝ソトース', 4, '光', 2, 'R'),
(21, 'シュブ=ニグラス', 4, '光', 3, 'SR'),
(22, 'ナイアーラトテップ', 5, '闇', 4, 'SSR'),
(23, 'アザトース', 5, '闇', 4, 'SSR'),
(24, 'アブホース', 3, '自然', 3, 'SR'),
(25, 'トゥールスチャ', 1, '火', 1, 'N'),
(26, 'ノーデンス', 2, '水', 2, 'R'),
(27, 'ヴォルヴァドス', 1, '火', 4, 'SSR');

-- --------------------------------------------------------

--
-- テーブルの構造 `usercard`
--

CREATE TABLE `usercard` (
  `id` int(11) NOT NULL,
  `userNo` int(11) DEFAULT NULL,
  `cardNo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `userinfo`
--

CREATE TABLE `userinfo` (
  `userNo` int(11) UNSIGNED NOT NULL,
  `userId` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `userStone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='			';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cardinfo`
--
ALTER TABLE `cardinfo`
  ADD PRIMARY KEY (`cardNo`);

--
-- Indexes for table `usercard`
--
ALTER TABLE `usercard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`userNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cardinfo`
--
ALTER TABLE `cardinfo`
  MODIFY `cardNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `usercard`
--
ALTER TABLE `usercard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `userNo` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
