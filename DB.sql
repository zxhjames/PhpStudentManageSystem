-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2019-06-13 22:53:18
-- 服务器版本： 5.7.26-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Student`
--

-- --------------------------------------------------------

--
-- 表的结构 `login`，用于注册登录
--

CREATE TABLE `login` (
  `id` int(11) DEFAULT NULL,
  `pwd` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `login`
--

INSERT INTO `login` (`id`, `pwd`) VALUES
(20162590, '123'),
(20162591, '123'),
(20162599, '1'),
(20162510, '1'),
(20162510, '1'),
(20162555, '123'),
(20162555, '123'),
(20162555, '123'),
(20162556, '123'),
(20162556, '123'),
(20162559, '1'),
(20162580, '1'),
(20162595, '1'),
(20162596, '1'),
(20162598, '1'),
(1998, '123');

-- --------------------------------------------------------

--
-- 表的结构 `StuClass`，用于存储学生课程
--

CREATE TABLE `StuClass` (
  `cid` int(11) NOT NULL,
  `cname` varchar(30) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `StuClass`
--

INSERT INTO `StuClass` (`cid`, `cname`) VALUES
(1, '操作系统'),
(2, '数据结构'),
(3, '计算机组成'),
(4, '计算机网络'),
(5, '编译原理'),
(6, '网络安全'),
(7, '软件工程');

-- --------------------------------------------------------

--
-- 表的结构 `StuInfo`，学生基本信息表
--

CREATE TABLE `StuInfo` (
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
-- 转存表中的数据 `StuInfo`
--

INSERT INTO `StuInfo` (`id`, `name`, `sex`, `mingzu`, `birthday`, `mianmao`, `pid`, `phone`, `mail`, `qq`) VALUES
(20162559, '111', '111', '1', '1998-03-12', '1', '1', '13632125241', '1849483422@qq.com', '1'),
(20162580, '111', '111', '1', '1998-03-12', '1', '1', '13632125241', '1849483422@qq.com', '1'),
(20162591, '科比', '男', '汉', '1998-03-17', '团员', '360281199803178016', '13207987081', '1849483422@qq.com', '1849483422'),
(20162592, '詹姆斯', '男', '汉', '1998-03-17', '团员', '360281199803178016', '13207987081', '1849483422@qq.com', '1849483422'),
(20162595, '111', '111', '1', '1998-03-12', '1', '1', '13632125241', '1849483422@qq.com', '1'),
(20162596, '111', '111', '1', '1998-03-12', '1', '1', '13632125241', '1849483422@qq.com', '1'),
(20162598, '111', '111', '1', '1998-03-12', '1', '1', '13632125241', '1849483422@qq.com', '1'),
(20162599, '111', '111', '1', '1998-03-12', '1', '1', '13632125241', '1849483422@qq.com', '1');

-- --------------------------------------------------------

--
-- 表的结构 `StuMajor`，学生专业信息
--

CREATE TABLE `StuMajor` (
  `id` int(11) NOT NULL,
  `xueli` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `xuezhi` int(4) DEFAULT NULL,
  `menlei` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `major` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `faculty` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `class` varchar(20) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `StuMajor`
--

INSERT INTO `StuMajor` (`id`, `xueli`, `xuezhi`, `menlei`, `major`, `faculty`, `class`) VALUES
(20162559, '4', 4, '4', '4', '', '4'),
(20162580, '4', 4, '4', '4', '', '4'),
(20162591, '本科', 4, '工学', '计算机', '计算机学院', '信管1601'),
(20162592, '本科', 4, '工学', '计算机ff', '计算机学院', '信管1601'),
(20162595, '4', 4, '4', '4', '', '4'),
(20162596, '4', 4, '4', '4', '', '4'),
(20162598, '4', 4, '4', '4', '', '4');

-- --------------------------------------------------------

--
-- 表的结构 `StuScore`，成绩表
--

CREATE TABLE `StuScore` (
  `sid` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `StuScore`
--

INSERT INTO `StuScore` (`sid`, `cid`, `score`) VALUES
(20162591, 1, 90),
(20162591, 2, 100),
(20162591, 3, 90),
(20162591, 4, 90),
(20162599, 1, 80),
(20162599, 2, 100),
(20162598, 1, 100),
(20162598, 2, 123),
(20162598, 3, 123),
(20162598, 4, 123),
(20162598, 6, 123),
(20162598, 7, 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD KEY `fk_3` (`id`);

--
-- Indexes for table `StuClass`
--
ALTER TABLE `StuClass`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `StuInfo`
--
ALTER TABLE `StuInfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `StuMajor`
--
ALTER TABLE `StuMajor`
  ADD PRIMARY KEY (`id`);

--
-- 限制导出的表
--

--
-- 限制表 `StuMajor`
--
ALTER TABLE `StuMajor`
  ADD CONSTRAINT `fk_1` FOREIGN KEY (`id`) REFERENCES `StuInfo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
