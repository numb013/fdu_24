-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016 年 9 朁E09 日 01:34
-- サーバのバージョン： 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fdu24`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `check_likes`
--

CREATE TABLE `check_likes` (
  `id` int(10) NOT NULL,
  `like_genre` int(10) NOT NULL,
  `name` varchar(255) NOT NULL COMMENT '好きなこと',
  `status` int(10) NOT NULL DEFAULT '0',
  `delete_flag` varchar(255) DEFAULT '0' COMMENT '削除',
  `created` datetime NOT NULL COMMENT '作成日',
  `modified` datetime DEFAULT NULL COMMENT '更新日'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `check_likes`
--

INSERT INTO `check_likes` (`id`, `like_genre`, `name`, `status`, `delete_flag`, `created`, `modified`) VALUES
(1, 1, '流されやすい', 0, '0', '2016-06-29 02:34:48', '2016-06-29 02:34:48'),
(2, 1, 'お人好し', 0, '0', '2016-06-29 02:35:18', '2016-06-29 02:35:18'),
(3, 1, '素直', 0, '0', '2016-06-29 02:35:33', '2016-06-29 02:35:33'),
(4, 1, 'サバサバ', 0, '0', '2016-06-30 02:04:31', '2016-06-30 02:04:31'),
(5, 1, 'ネガティブ', 0, '0', '2016-06-30 02:04:41', '2016-06-30 02:04:41'),
(6, 1, 'ポジティブ', 0, '0', '2016-08-21 23:50:23', '2016-08-21 23:50:23'),
(7, 1, '冷めている', 0, '0', '2016-08-22 00:32:15', '2016-08-22 00:32:15'),
(8, 2, '計画的', 0, '0', '2016-08-22 00:32:23', '2016-08-22 00:32:23'),
(9, 2, '神経質', 0, '0', '2016-08-22 00:32:33', '2016-08-22 00:32:33'),
(10, 2, '大雑把', 0, '0', '2016-08-22 00:32:42', '2016-08-22 00:32:42'),
(11, 2, '不真面目', 0, '0', '2016-08-22 00:32:51', '2016-08-22 00:32:51'),
(12, 2, 'お調子者', 0, '0', '2016-08-22 00:33:00', '2016-08-22 00:33:00'),
(13, 2, '辛抱強い', 0, '0', '2016-08-22 00:33:08', '2016-08-22 00:33:08'),
(14, 2, '短気', 0, '0', '2016-08-22 00:33:16', '2016-08-22 00:33:16'),
(15, 3, '空気が読めない', 0, '0', '2016-08-22 00:34:01', '2016-08-22 00:34:01'),
(16, 3, 'こびない', 0, '0', '2016-08-22 00:34:24', '2016-08-22 00:34:24'),
(17, 3, '買い物依存症', 0, '0', '2016-08-22 00:34:34', '2016-08-22 00:34:34'),
(18, 3, '見栄っ張り', 0, '0', '2016-08-22 00:34:44', '2016-08-22 00:34:44'),
(19, 3, '発想力がある', 0, '0', '2016-08-22 00:34:53', '2016-08-22 00:34:53'),
(20, 3, '照れ屋', 0, '0', '2016-08-22 00:35:03', '2016-08-22 00:35:03'),
(21, 3, 'しつこい', 0, '0', '2016-08-22 00:35:12', '2016-08-22 00:35:12'),
(22, 4, 'おしゃべり', 0, '0', '2016-08-22 00:35:29', '2016-08-22 00:35:29'),
(23, 4, '人見知り', 0, '0', '2016-08-22 00:35:37', '2016-08-22 00:35:37'),
(24, 4, '根暗', 0, '0', '2016-08-22 00:35:46', '2016-08-22 00:35:46'),
(25, 4, '話べた', 0, '0', '2016-08-22 00:35:54', '2016-08-22 00:35:54'),
(26, 4, '世間に不満あり', 0, '0', '2016-08-22 00:36:02', '2016-08-22 00:36:02'),
(27, 4, '夜型', 0, '0', '2016-08-22 00:36:10', '2016-08-22 00:36:10'),
(28, 5, '聞き役', 0, '0', '2016-08-22 00:36:28', '2016-08-22 00:36:28'),
(29, 5, '細かい', 0, '0', '2016-08-22 00:36:38', '2016-08-22 00:36:38'),
(30, 5, '正義感', 0, '0', '2016-08-22 00:37:00', '2016-08-22 00:37:00'),
(31, 5, '運動音痴', 0, '0', '2016-08-22 00:37:11', '2016-08-22 00:37:11'),
(32, 5, '音痴', 0, '0', '2016-08-22 00:37:20', '2016-08-22 00:37:20'),
(33, 5, '心配性', 0, '0', '2016-08-22 00:37:29', '2016-08-22 00:37:29'),
(34, 6, '無責任', 0, '0', '2016-08-22 00:37:37', '2016-08-22 00:37:37'),
(35, 6, '大食い', 0, '0', '2016-08-22 00:37:45', '2016-08-22 00:37:45'),
(36, 6, '根に持つ', 0, '0', '2016-08-28 00:00:59', '2016-08-28 00:00:59'),
(37, 6, '頑固者', 0, '0', '2016-08-28 00:01:10', '2016-08-28 00:01:10'),
(38, 6, '明るい', 0, '0', '2016-08-28 00:03:13', '2016-08-28 00:03:13'),
(39, 6, '変態', 0, '0', '2016-08-28 00:03:24', '2016-08-28 00:03:24');

-- --------------------------------------------------------

--
-- テーブルの構造 `check_personals`
--

CREATE TABLE `check_personals` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL COMMENT '職業名',
  `delete_flag` varchar(255) NOT NULL DEFAULT '0' COMMENT '削除',
  `created` datetime NOT NULL COMMENT '作成日',
  `modified` datetime DEFAULT NULL COMMENT '更新日'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `check_personals`
--

INSERT INTO `check_personals` (`id`, `name`, `delete_flag`, `created`, `modified`) VALUES
(1, '映画好き', '0', '2016-06-29 01:56:36', '2016-06-29 01:56:36'),
(2, '手先器用', '0', '2016-06-29 02:03:21', '2016-06-29 02:03:21'),
(5, '音楽好き', '0', '2016-08-17 21:13:28', '2016-08-17 21:13:28'),
(3, '漫画好き', '0', '2016-06-30 02:03:40', '2016-06-30 02:03:40'),
(4, 'ゲーム好き', '0', '2016-06-30 02:04:09', '2016-06-30 02:04:09'),
(6, '読書好き', '0', '2016-08-17 21:13:51', '2016-08-17 21:13:51'),
(7, 'お笑い好き', '0', '2016-08-17 21:14:35', '2016-08-17 21:14:35'),
(8, 'お洒落好き', '0', '2016-08-17 21:14:48', '2016-08-17 21:14:48'),
(9, 'スリル好き', '0', '2016-08-17 21:15:11', '2016-08-17 21:15:11'),
(10, '文章が得意', '0', '2016-08-17 21:15:28', '2016-08-17 21:15:28'),
(11, '絵が得意', '0', '2016-08-17 21:15:34', '2016-08-17 21:15:34'),
(12, 'パソコン得意', '0', '2016-08-17 21:15:53', '2016-08-17 21:15:53'),
(13, '容姿端麗', '0', '2016-08-17 21:16:04', '2016-08-17 21:16:04'),
(15, '計算が得意', '0', '2016-08-17 21:16:29', '2016-08-17 21:16:29'),
(16, '運動が得意', '0', '2016-08-17 21:16:37', '2016-08-17 21:16:37'),
(17, 'お酒が好き', '0', '2016-08-17 21:16:46', '2016-08-17 21:16:46');

-- --------------------------------------------------------

--
-- テーブルの構造 `contcts`
--

CREATE TABLE `contcts` (
  `id` int(10) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL COMMENT '名前',
  `user_address` varchar(255) NOT NULL COMMENT 'アドレス',
  `contact_text` varchar(255) DEFAULT NULL COMMENT '内容',
  `delete_flag` varchar(255) DEFAULT NULL COMMENT '削除',
  `created` datetime NOT NULL COMMENT '作成日',
  `modified` datetime DEFAULT NULL COMMENT '更新日'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `partner_id` int(10) DEFAULT NULL,
  `partner_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `delete_flag` int(11) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `images`
--

INSERT INTO `images` (`id`, `partner_id`, `partner_name`, `name`, `url`, `delete_flag`, `created`, `modified`) VALUES
(384, 5, NULL, '450x341x52a579725e4c1bf9213148d2.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160624082333_0.jpeg', 0, '2016-06-24 08:29:46', '2016-06-24 08:29:46'),
(385, 6, NULL, '150691_378379285590785_2062398803_n.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160624083022_0.jpeg', 0, '2016-06-24 08:30:26', '2016-06-24 08:30:26'),
(386, 6, NULL, '6df3937fbbf53ade1c6f92addb38979c.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160624083022_1.jpeg', 0, '2016-06-24 08:30:26', '2016-06-24 08:30:26'),
(387, 8, NULL, '000000600x223xdd861e41935277451884e494 (1).jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160627203840_0.jpeg', 0, '2016-06-27 20:38:48', '2016-06-27 20:38:48'),
(388, 9, NULL, '2641e4c9902e7894d7069cbe1b494c78.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160627204429_0.jpeg', 0, '2016-06-27 20:44:32', '2016-06-27 20:44:32'),
(389, 10, 'Profession', '370c886a26c26f248d99eda9fb85b8e0.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160627204614_0.jpeg', 0, '2016-06-27 20:46:47', '2016-06-27 20:46:47'),
(390, 11, 'Profession', '2641e4c9902e7894d7069cbe1b494c78.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160627210944_0.jpeg', 0, '2016-06-27 21:09:47', '2016-06-27 21:09:47'),
(391, 12, 'Profession', 'ac53f0451d6eab40364d3d3aaf24fd2b.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160627223127_0.jpeg', 0, '2016-06-27 22:31:32', '2016-06-27 22:31:32'),
(392, 13, 'Profession', '59a32d8756c4265c988c5d2c7f4bff23.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160627230453_0.jpeg', 1, '2016-06-27 23:04:57', '2016-06-27 23:04:57'),
(393, 13, 'Profession', '1004438_289139154565264_1075970158_n.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160627230406_0.jpeg', 1, '2016-06-27 23:04:57', '2016-06-27 23:04:57'),
(394, 13, 'Profession', '36837f98caf9b612035b128ae2b64919.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160628001702_0.jpeg', 0, '2016-06-28 00:19:41', '2016-06-28 00:19:41'),
(395, 13, 'Profession', '14052301_The_Giver_00s.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160628002114_0.jpeg', 1, '2016-06-28 00:21:18', '2016-06-28 00:21:18'),
(396, 14, 'Profession', '000000600x223xdd861e41935277451884e494 (1).jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160629004640_0.jpeg', 0, '2016-06-29 00:46:45', '2016-06-29 00:46:45'),
(397, 16, 'Profession', 'at28_64_018.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160629230327_0.jpeg', 1, '2016-06-29 23:03:31', '2016-06-29 23:03:31'),
(398, 17, 'Profession', 'at28_86_027.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160629230621_0.jpeg', 1, '2016-06-29 23:06:25', '2016-06-29 23:06:25'),
(399, 18, 'Profession', 'at28_88_003.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160629230757_0.jpeg', 1, '2016-06-29 23:08:12', '2016-06-29 23:08:12'),
(400, 19, 'Profession', 'at28_96_013.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160629231119_0.jpeg', 1, '2016-06-29 23:11:39', '2016-06-29 23:11:39'),
(401, 20, 'Profession', 'at28_93_011.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160629231341_0.jpeg', 1, '2016-06-29 23:13:47', '2016-06-29 23:13:47'),
(402, 21, 'Profession', 'at28_90_021.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160630012151_0.jpeg', 0, '2016-06-30 01:21:55', '2016-06-30 01:21:55'),
(403, 22, 'Profession', 'at28_90_021.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160630012151_0.jpeg', 0, '2016-06-30 01:22:59', '2016-06-30 01:22:59'),
(404, 23, 'Profession', 'at28_90_021.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160630012151_0.jpeg', 0, '2016-06-30 01:23:27', '2016-06-30 01:23:27'),
(405, 24, 'Profession', 'at28_90_021.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160630012151_0.jpeg', 0, '2016-06-30 01:23:52', '2016-06-30 01:23:52'),
(406, 25, 'Profession', 'at28_91_012.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160630012534_0.jpeg', 1, '2016-06-30 01:25:37', '2016-06-30 01:25:37'),
(407, 26, 'Profession', 'at28_89_004.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160630020746_0.jpeg', 1, '2016-06-30 02:07:49', '2016-06-30 02:07:49'),
(408, 27, 'Profession', '009.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160630215827_0.jpeg', 1, '2016-06-30 21:58:51', '2016-06-30 21:58:51'),
(409, 28, 'Profession', '036.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160630221421_0.jpeg', 1, '2016-06-30 22:14:47', '2016-06-30 22:14:47'),
(410, 29, 'Profession', '059.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160630222546_0.jpeg', 1, '2016-06-30 22:25:50', '2016-06-30 22:25:50'),
(411, 26, 'Profession', '1378627_521747384569411_1589236281_n.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160702004129_0.jpeg', 1, '2016-07-02 00:41:35', '2016-07-02 00:41:35'),
(412, 29, 'Profession', 'c1576ebf6f36f8936b60d14ceaac92d8.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160702011334_0.jpeg', 1, '2016-07-02 01:13:41', '2016-07-02 01:13:41'),
(413, 17, 'Profession', 'b583545e7fc818ae46a6d6d67faa52a9.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160702033342_0.jpeg', 1, '2016-07-02 03:33:51', '2016-07-02 03:33:51'),
(414, 29, 'Profession', '31a1c7c13b27ca3b5ebca5411c1c2e7b.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160703160752_0.jpeg', 1, '2016-07-03 16:07:58', '2016-07-03 16:07:58'),
(415, 29, 'Profession', 'at28_82_012.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160703160844_0.jpeg', 1, '2016-07-03 16:08:47', '2016-07-03 16:08:47'),
(416, 28, 'Profession', 'at28_99_020.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160703160940_0.jpeg', 1, '2016-07-03 16:09:43', '2016-07-03 16:09:43'),
(417, 28, 'Profession', 'at28_99_019.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160703160940_1.jpeg', 1, '2016-07-03 16:09:43', '2016-07-03 16:09:43'),
(418, 28, 'Profession', 'at28_99_012.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160703160940_2.jpeg', 1, '2016-07-03 16:09:43', '2016-07-03 16:09:43'),
(419, 29, 'Profession', 'image_5.jpg', 'http://localhost/fdu24/app/webroot/files/updir/', 1, '2016-08-03 00:12:22', '2016-08-03 00:12:22'),
(420, 29, 'Profession', 'image_5.jpg', 'http://localhost/fdu24/app/webroot/files/updir/', 1, '2016-08-03 00:12:34', '2016-08-03 00:12:34'),
(421, 29, 'Profession', 'image_5.jpg', 'http://localhost/fdu24/app/webroot/files/updir/', 1, '2016-08-03 00:13:20', '2016-08-03 00:13:20'),
(422, 30, 'Profession', 'image_5.jpg', 'http://localhost/fdu24/app/webroot/files/updir/', 1, '2016-08-03 00:14:42', '2016-08-03 00:14:42'),
(423, 31, 'Profession', 'image_4.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160803004102_0.jpeg', 0, '2016-08-03 00:41:09', '2016-08-03 00:41:09'),
(424, 32, 'Profession', 'image_4.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160803004222_0.jpeg', 0, '2016-08-03 00:42:49', '2016-08-03 00:42:49'),
(425, 16, 'Profession', 'at28_93_026.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160819011126_0.jpeg', 0, '2016-08-19 01:11:29', '2016-08-19 01:11:29'),
(426, 17, 'Profession', '136507110.jpg', 'http://localhost/fdu24/app/webroot/files/updir/', 1, '2016-08-19 01:12:44', '2016-08-19 01:12:44'),
(427, 17, 'Profession', '136507110.jpg', 'http://localhost/fdu24/app/webroot/files/updir/', 1, '2016-08-19 01:13:04', '2016-08-19 01:13:04'),
(428, 17, 'Profession', 'aeddafcca8164c84.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160819011346_0.jpeg', 1, '2016-08-19 01:13:50', '2016-08-19 01:13:50'),
(429, 27, 'Profession', '9_o.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160819011440_0.jpeg', 1, '2016-08-19 01:14:44', '2016-08-19 01:14:44'),
(430, 29, 'Profession', 'securedownload.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160819011517_0.jpeg', 1, '2016-08-19 01:15:21', '2016-08-19 01:15:21'),
(431, 30, 'Profession', 'image_7.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160819011559_0.jpeg', 1, '2016-08-19 01:16:03', '2016-08-19 01:16:03'),
(432, 27, 'Profession', 'at28_60_021.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160820211943_0.jpeg', 1, '2016-08-20 21:19:48', '2016-08-20 21:19:48'),
(433, 17, 'Profession', '721b915f2dbc0baf5c2c54d7bf837cc5.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160820212017_0.jpeg', 1, '2016-08-20 21:20:20', '2016-08-20 21:20:20'),
(434, 30, 'Profession', 'afbd0fa4b4cc9260006924e44c8cc91d.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160820212056_0.jpeg', 1, '2016-08-20 21:20:59', '2016-08-20 21:20:59'),
(435, 27, 'Profession', '6c3d89bcaa339e53e04a6093d9d6766345d83051f8dedd07237f745ea62c0aee_6622769_450_8526776.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160827174123_0.jpeg', 1, '2016-08-27 17:41:27', '2016-08-27 17:41:27'),
(436, 30, 'Profession', '7558260856abbe23f5e63f0326eb5c05.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160827174158_0.jpeg', 1, '2016-08-27 17:42:08', '2016-08-27 17:42:08'),
(437, 30, 'Profession', 'graphic-designer.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160829182724_0.jpeg', 0, '2016-08-29 18:27:29', '2016-08-29 18:27:29'),
(438, 26, 'Profession', 'Voice_actor.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160829183225_0.jpeg', 0, '2016-08-29 18:32:29', '2016-08-29 18:32:29'),
(439, 19, 'Profession', '151578-tattooist.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160829183852_0.jpeg', 0, '2016-08-29 18:38:55', '2016-08-29 18:38:55'),
(440, 27, 'Profession', 'movie_buy.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160829184422_0.jpeg', 0, '2016-08-29 18:44:25', '2016-08-29 18:44:25'),
(441, 25, 'Profession', 'dj.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160829185639_0.jpeg', 1, '2016-08-29 18:56:43', '2016-08-29 18:56:43'),
(442, 28, 'Profession', 'WEDDING_PLANNER.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160829190325_0.jpeg', 0, '2016-08-29 19:03:30', '2016-08-29 19:03:30'),
(443, 29, 'Profession', 'stom.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160829190844_0.jpeg', 0, '2016-08-29 19:08:48', '2016-08-29 19:08:48'),
(444, 20, 'Profession', 'prg_img_photo04.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160829191813_0.jpeg', 0, '2016-08-29 19:18:15', '2016-08-29 19:18:15'),
(445, 17, 'Profession', 'webdesigner.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160829192412_0.jpeg', 0, '2016-08-29 19:24:16', '2016-08-29 19:24:16'),
(446, 18, 'Profession', 'php.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160829192529_0.jpeg', 0, '2016-08-29 19:25:33', '2016-08-29 19:25:33'),
(447, 25, 'Profession', 'dj.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160902232048_0.jpeg', 0, '2016-09-02 23:20:51', '2016-09-02 23:20:51'),
(448, 69, 'Profession', 'welcome-world--large-msg-126737299603.jpg', 'http://localhost/fdu24/app/webroot/files/updir/20160907011454_0.jpeg', 0, '2016-09-07 01:14:58', '2016-09-07 01:14:58');

-- --------------------------------------------------------

--
-- テーブルの構造 `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `movies`
--

CREATE TABLE `movies` (
  `id` int(10) NOT NULL,
  `movie_url` text COMMENT '動画URL',
  `title` varchar(255) DEFAULT NULL COMMENT 'タイトル',
  `movie_text` text COMMENT '本文',
  `partner_id` int(10) DEFAULT NULL COMMENT 'トップに表示',
  `partner_name` varchar(255) DEFAULT NULL,
  `movie_uuid` int(11) DEFAULT NULL,
  `delete_flag` int(11) DEFAULT '0' COMMENT '削除日',
  `created` datetime NOT NULL COMMENT '作成日',
  `modified` datetime DEFAULT NULL COMMENT '更新日'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `movies`
--

INSERT INTO `movies` (`id`, `movie_url`, `title`, `movie_text`, `partner_id`, `partner_name`, `movie_uuid`, `delete_flag`, `created`, `modified`) VALUES
(292, '447cO8LTq9A', NULL, NULL, 0, 'Profession', 39241, 0, '2016-06-24 08:21:14', '2016-06-24 08:21:14'),
(293, 'atmAgzcIKcY', NULL, NULL, 3, 'Profession', 58184, 0, '2016-06-24 08:25:11', '2016-06-24 08:25:11'),
(294, 'atmAgzcIKcY', NULL, NULL, 5, 'Profession', 58184, 0, '2016-06-24 08:29:46', '2016-06-24 08:29:46'),
(295, '447cO8LTq9A', NULL, NULL, 6, 'Profession', 56570, 0, '2016-06-24 08:30:26', '2016-06-24 08:30:26'),
(296, '447cO8LTq9A', NULL, NULL, 8, 'Profession', 16937, 0, '2016-06-27 20:38:48', '2016-06-27 20:38:48'),
(297, '447cO8LTq9A', NULL, NULL, 9, 'Profession', 91153, 0, '2016-06-27 20:44:32', '2016-06-27 20:44:32'),
(298, 'KjXoZeQvh6A', NULL, NULL, 10, 'Profession', 37277, 0, '2016-06-27 20:46:47', '2016-06-27 20:46:47'),
(299, '447cO8LTq9A', NULL, NULL, 11, 'Profession', 81882, 0, '2016-06-27 21:09:47', '2016-06-27 21:09:47'),
(300, '447cO8LTq9A', NULL, NULL, 12, 'Profession', 67784, 0, '2016-06-27 22:31:32', '2016-06-27 22:31:32'),
(301, 'KjXoZeQvh6A', NULL, NULL, 13, 'Profession', 11995, 1, '2016-06-27 23:04:57', '2016-06-27 23:04:57'),
(302, '447cO8LTq9A', NULL, NULL, 13, 'Profession', 85533, 0, '2016-06-27 23:04:57', '2016-06-27 23:04:57'),
(303, '447cO8LTq9A', NULL, NULL, 15, 'Profession', 73483, 0, '2016-06-29 23:01:00', '2016-06-29 23:01:00'),
(304, '447cO8LTq9A', NULL, NULL, 16, 'Profession', 83555, 0, '2016-06-29 23:03:31', '2016-06-29 23:03:31'),
(305, 'atmAgzcIKcY', NULL, NULL, 17, 'Profession', 47308, 0, '2016-06-29 23:06:25', '2016-06-29 23:06:25'),
(306, '447cO8LTq9A', NULL, NULL, 18, 'Profession', 34616, 0, '2016-06-29 23:08:12', '2016-06-29 23:08:12'),
(307, '447cO8LTq9A', NULL, NULL, 19, 'Profession', 36555, 1, '2016-06-29 23:11:39', '2016-06-29 23:11:39'),
(308, '447cO8LTq9A', NULL, NULL, 20, 'Profession', 12844, 1, '2016-06-29 23:13:47', '2016-06-29 23:13:47'),
(309, 'atmAgzcIKcY', NULL, NULL, 21, 'Profession', 90483, 0, '2016-06-30 01:21:55', '2016-06-30 01:21:55'),
(310, 'atmAgzcIKcY', NULL, NULL, 22, 'Profession', 90483, 0, '2016-06-30 01:22:59', '2016-06-30 01:22:59'),
(311, 'atmAgzcIKcY', NULL, NULL, 23, 'Profession', 90483, 0, '2016-06-30 01:23:27', '2016-06-30 01:23:27'),
(312, 'atmAgzcIKcY', NULL, NULL, 24, 'Profession', 90483, 0, '2016-06-30 01:23:52', '2016-06-30 01:23:52'),
(313, 'atmAgzcIKcY', NULL, NULL, 25, 'Profession', 69910, 1, '2016-06-30 01:25:37', '2016-06-30 01:25:37'),
(314, 'atmAgzcIKcY', NULL, NULL, 26, 'Profession', 19457, 1, '2016-06-30 02:07:49', '2016-06-30 02:07:49'),
(315, '_YMT87CufLk', NULL, NULL, 27, 'Profession', 42512, 1, '2016-06-30 21:58:51', '2016-06-30 21:58:51'),
(316, 'GlOR_hPUpC4', NULL, NULL, 28, 'Profession', 68375, 1, '2016-06-30 22:14:47', '2016-06-30 22:14:47'),
(317, '447cO8LTq9A', NULL, NULL, 29, 'Profession', 51641, 1, '2016-06-30 22:25:50', '2016-06-30 22:25:50'),
(318, '447cO8LTq9A', NULL, NULL, 30, 'Profession', 17892, 1, '2016-08-03 00:14:42', '2016-08-03 00:14:42'),
(319, 'KjXoZeQvh6A', NULL, NULL, 32, 'Profession', 50067, 0, '2016-08-03 00:42:49', '2016-08-03 00:42:49'),
(320, 'nM9UeuJSBKM', NULL, NULL, 30, 'Profession', 32641, 0, '2016-08-29 18:27:29', '2016-08-29 18:27:29'),
(321, 'x57BtABY9Mc', NULL, NULL, 26, 'Profession', 20977, 0, '2016-08-29 18:32:29', '2016-08-29 18:32:29'),
(322, 'ZOGWaVCrCsA', NULL, NULL, 19, 'Profession', 39046, 0, '2016-08-29 18:38:55', '2016-08-29 18:38:55'),
(323, '9e2BX_RnlXM', NULL, NULL, 27, 'Profession', 68682, 0, '2016-08-29 18:44:25', '2016-08-29 18:44:25'),
(324, 'nsJsg3HVRM8', NULL, NULL, 25, 'Profession', 96028, 0, '2016-08-29 18:56:43', '2016-08-29 18:56:43'),
(325, 'scUZU_gzTAA', NULL, NULL, 28, 'Profession', 46655, 0, '2016-08-29 19:03:30', '2016-08-29 19:03:30'),
(326, 'MUJH05rYL1c', NULL, NULL, 29, 'Profession', 76790, 0, '2016-08-29 19:08:48', '2016-08-29 19:08:48'),
(327, 's137apbH7-o', NULL, NULL, 20, 'Profession', 45589, 0, '2016-08-29 19:17:57', '2016-08-29 19:17:57'),
(328, 'XRC6JeagHHU', NULL, NULL, 69, 'Profession', 29711, 0, '2016-09-07 01:14:58', '2016-09-07 01:14:58');

-- --------------------------------------------------------

--
-- テーブルの構造 `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `create` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `professions`
--

CREATE TABLE `professions` (
  `id` int(10) NOT NULL,
  `image_flag` varchar(255) NOT NULL COMMENT '画像フラグ',
  `genre` int(10) DEFAULT NULL,
  `movie_flag` varchar(255) DEFAULT NULL COMMENT '動画フラグ',
  `profession_name` varchar(255) DEFAULT NULL COMMENT '職業名',
  `job_content` text COMMENT '仕事内容',
  `job_step1` text NOT NULL COMMENT 'なり方１',
  `job_step2` text COMMENT 'なり方2',
  `job_step3` text COMMENT 'なり方3',
  `check_sex` varchar(255) DEFAULT NULL COMMENT '性別',
  `check_personal` varchar(255) DEFAULT NULL COMMENT '性格診断',
  `check_like` varchar(255) DEFAULT NULL COMMENT '好きなもの',
  `job_url` varchar(255) DEFAULT NULL COMMENT 'url',
  `core_status` varchar(255) DEFAULT NULL COMMENT 'コア数値',
  `know_count` int(10) NOT NULL DEFAULT '0',
  `delete_flag` varchar(10) NOT NULL DEFAULT '0' COMMENT '削除',
  `created` datetime NOT NULL COMMENT '作成日',
  `modified` datetime DEFAULT NULL COMMENT '更新日'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `professions`
--

INSERT INTO `professions` (`id`, `image_flag`, `genre`, `movie_flag`, `profession_name`, `job_content`, `job_step1`, `job_step2`, `job_step3`, `check_sex`, `check_personal`, `check_like`, `job_url`, `core_status`, `know_count`, `delete_flag`, `created`, `modified`) VALUES
(17, '1', 1, '1', 'WEBデザイナー', '映画サイトのデザインをする', '専門学校へ行く', '作ったサイトをネットに公表する', '面接に行く', '1,5', '1,2,3,4,5,6,7,8,10,11,12,15,16,17', '1,4,5,6,7,8,9,16,18,19,21,22,23,26,27,29,33,36,37,38', 'FFFF', '1', 0, '0', '2016-06-29 23:06:25', '2016-09-07 01:54:06'),
(18, '1', 1, '1', 'プログラマー', 'ゲームやアプリを作る', '専門学校へ行く', 'ゲームをネットに公開する', '面接する', '1', '2,3,4,5,10,12,15,17', '1,4,5,6,7,8,9,16,18,19,20,21,22,24,26,27,28,29,30,33,36,37,39', 'FFFF', '1', 0, '0', '2016-06-29 23:08:12', '2016-09-07 01:52:54'),
(19, '1', 2, '1', '彫師', 'スポーツ選手やアーティストの体に一生残る絵を書く', '刺青を入れる', '刺青カルチャーを教わる', '紹介してもらう', '1,5', '1,2,3,4,5,7,8,9,11,16', '1,2,3,4,5,6,8,9,13,16,19,20,22,24,26,27,29,33,36,37,38,39', 'FFFF', '3', 1, '0', '2016-06-29 23:11:39', '2016-09-07 01:51:35'),
(20, '1', 4, '1', '芸能人のマネージャー', '芸能人という商品を営業する', 'タレントプロダクションに面接に行く', '熱い気持ちを伝える', '断られてももう一度行く', '1', '1,3,5,6,7,10,12,13,16,17', '1,2,3,6,8,9,13,20,21,27,28,29,33,38', 'FFFF', '1', 0, '0', '2016-06-29 23:13:47', '2016-09-07 01:50:33'),
(69, '1', 2, '1', 'ファッションデザイナー', '世の中には、服・靴・バッグ・小物などのさまざまなファッションアイテムが溢れています。それらのデザインや素材、色、縫製の仕方などを考え、形にしているのが、ファッションデザイナーと呼ばれる職業の人たち。', '専門の学校で勉強する', 'アパレルメーカーで経験を積む', 'デザイナーに弟子入りする', '1,5', '1,2,5,6,8,10,11,12,17', '1,2,3,4,6,7,8,9,15,16,17,18,19,21,22,26,28,29,36,37,38,39', 'http://localhost/fdu24/admin/Professions/add', '2', 0, '0', '2016-09-07 01:14:58', '2016-09-09 01:31:05'),
(25, '1', 1, '1', 'クラブDJ', 'クラブDJはクラブでDJとして音楽を選曲し、音楽を流す職業。\r\nDJにも様々な系統があり、テクノ・ハウス・レゲエ・ヒップホップなど数多くの専門分野があります。', 'クラブで遊ぶ', 'DJと友達になる', '友達主催のイベントに出演させてもらう', '1,5', '1,2,3,4,5,7,8,12,13', '1,2,3,6,10,12,19,22,26,27,33,37,38,39', 'FFFF', '2', 1, '0', '2016-06-30 01:25:37', '2016-09-07 01:49:41'),
(26, '1', 1, '1', '映画声優', 'あの映画スターの声になれる', '専門学校行く', '表現力つける', 'オーデションに行く', '1,5', '1,3,4,5,6,7,10,13', '2,3,4,5,6,7,9,11,12,13,15,19,23,31,34,36,39', 'FFFF', '2', 4, '0', '2016-06-30 02:07:49', '2016-09-07 01:49:12'),
(27, '1', 2, '1', '映画バイヤー', '海外の映画祭などに出かけ、日本でヒットしそうな映画の上映権をオークションや交渉で買い付ける仕事。完成作品の上映を見て買う場合もあれば、脚本の段階で、その内容、監督、出演者などからヒットを予測して買い付ける場合もある。買い付け額は数千万円から数億円。', '映画の配給会社などへ就職', '語学力を磨く', '語学力を磨く', '1,5', '1,3,5,6,7,9,10,12,16,17', '1,3,4,5,6,8,10,13,17,19,22,28,29,33,39', 'FFFF', '3', 1, '0', '2016-06-30 21:58:51', '2016-09-07 01:48:29'),
(28, '1', 2, '1', 'ウェディングプランナー', '結婚式場やホテルなどで、結婚式を挙げる新郎様・新婦様の、“挙式・披露宴”をプランニングする仕事・スタッフの事です。', '専門学校', 'おもてなしの心を磨く', '面接へ行く', '1,5', '1,5,6,7,8,10,13,17', '1,2,3,6,8,9,10,12,13,17,19,22,28,30,33,38', 'FFFF', '2', 1, '0', '2016-06-30 22:14:47', '2016-09-07 01:46:14'),
(29, '1', 8, '1', 'ストームチェイサー', '竜巻を追跡して映像に記録する専門家。', '竜巻の出る地域をリサーチ', '竜巻の写真を撮る', '竜巻に関する本を出す', '1', '1,4,9,15,16', '3,6,8,13,16,21,26,30,33,37,39', 'FFFF', '5', 0, '0', '2016-06-30 22:25:50', '2016-09-07 01:44:47'),
(30, '1', 1, '1', 'グラフィックデザイナー', 'aaaaaaaaaaaa\r\n\r\naaaaaaaaaaaaaaaa\r\n', 'sfafafasfd', 'asdfasdfadsf', 'afasdfasdfasdf', '1,5', '1,2,3,4,5,6,7,11,12', '3,6,8,9,13,15,19,22,24,26,27,28,29,31,33,36,37,39', 'http://localhost/fdu24/admin/Professions/add', '1', 3, '0', '2016-08-03 00:14:42', '2016-09-07 01:47:37');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(1, 'numb013013', '$2a$10$FJI0CBOsMBROMoFMzMtsiOAkRmwTV8oYyembYBmiDv/P7HU4D1eMe', 'admin', '2016-06-24 00:01:47', '2016-06-24 00:01:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `check_likes`
--
ALTER TABLE `check_likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `check_personals`
--
ALTER TABLE `check_personals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contcts`
--
ALTER TABLE `contcts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professions`
--
ALTER TABLE `professions`
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
-- AUTO_INCREMENT for table `check_likes`
--
ALTER TABLE `check_likes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `check_personals`
--
ALTER TABLE `check_personals`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=449;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=329;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `professions`
--
ALTER TABLE `professions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
