-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2022-07-03 09:25:47
-- 服务器版本： 5.7.26
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `stusys`
--

-- --------------------------------------------------------

--
-- 表的结构 `login`
--

CREATE TABLE `login` (
  `id` int(11) DEFAULT NULL,
  `pwd` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `login`
--

INSERT INTO `login` (`id`, `pwd`) VALUES
(1998, '123'),
(1999, '123'),
(2000, '123456'),
(2004, '123');

-- --------------------------------------------------------

--
-- 表的结构 `stuclass`
--

CREATE TABLE `stuclass` (
  `cid` int(11) NOT NULL,
  `cname` varchar(30) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `stuinfo`
--

CREATE TABLE `stuinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `sex` char(4) DEFAULT NULL,
  `mingzu` varchar(20) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `mianmao` varchar(20) DEFAULT NULL,
  `pid` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `mail` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `qq` varchar(20) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `stuinfo`
--

INSERT INTO `stuinfo` (`id`, `name`, `sex`, `mingzu`, `birthday`, `mianmao`, `pid`, `phone`, `mail`, `qq`) VALUES
(1998, 'admin', '男', '汉', '2000-01-02', '团员', 'XXXXX', '', 'XXX@123.com', ''),
(1999, '王小明', '男', '汉', '2000-01-01', '团员', 'XXXXX', 'XXXXXXXXXX', 'hhh@qq.com', 'XXXXX '),
(2000, '李晓明', '男', '汉', '2000-01-01', '团员', 'XXXXX', 'XXXXXXXXXX', 'XXXX@gmail.com', '12312@qq.com'),
(2004, '王小丽', '女', '汉', '2000-01-01', '团员', 'XXXXX', 'XXXXXXXXXX', '12312@qq.com', 'XXXX');

-- --------------------------------------------------------

--
-- 表的结构 `stumajor`
--

CREATE TABLE `stumajor` (
  `id` int(11) NOT NULL,
  `xueli` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `xuezhi` int(4) DEFAULT NULL,
  `menlei` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `major` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `faculty` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `class` varchar(20) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `stumajor`
--

INSERT INTO `stumajor` (`id`, `xueli`, `xuezhi`, `menlei`, `major`, `faculty`, `class`) VALUES
(1998, '本科', 4, '计算机', '计算机工程', '', '计算机2001班'),
(1999, '本科', 4, '计算机', '计算机', '', '计算机2002'),
(2000, '本科', 4, '计算机', '计算机技术', '', '计算机2001班'),
(2004, '本科', 4, '计算机', '计算机技术', '', '计算机2001班');

-- --------------------------------------------------------

--
-- 表的结构 `stuscore`
--

CREATE TABLE `stuscore` (
  `sid` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `stuscore`
--

INSERT INTO `stuscore` (`sid`, `cid`, `score`) VALUES
(1998, 1, 90),
(1998, 2, 98),
(1998, 3, 91),
(1998, 4, 91),
(1998, 6, 88),
(1998, 7, 95),
(1999, 1, 100),
(1999, 2, 98),
(1999, 3, 90),
(1999, 4, 99),
(1999, 6, 87),
(1999, 7, 90),
(2000, 1, 90),
(2000, 2, 90),
(2004, 1, 100),
(2004, 2, 100),
(2004, 3, 100),
(2004, 4, 100),
(2004, 6, 100),
(2004, 7, 100);

--
-- 转储表的索引
--

--
-- 表的索引 `login`
--
ALTER TABLE `login`
  ADD KEY `fk_3` (`id`);

--
-- 表的索引 `stuclass`
--
ALTER TABLE `stuclass`
  ADD PRIMARY KEY (`cid`);

--
-- 表的索引 `stuinfo`
--
ALTER TABLE `stuinfo`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `stumajor`
--
ALTER TABLE `stumajor`
  ADD PRIMARY KEY (`id`);

--
-- 限制导出的表
--

--
-- 限制表 `stumajor`
--
ALTER TABLE `stumajor`
  ADD CONSTRAINT `fk_1` FOREIGN KEY (`id`) REFERENCES `stuinfo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
