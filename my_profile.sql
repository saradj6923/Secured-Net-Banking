-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2018 at 06:38 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_master`
--

CREATE TABLE IF NOT EXISTS `account_master` (
  `Ac_No` int(11) NOT NULL,
  `Ac_type` varchar(15) NOT NULL,
  `Balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_master`
--

INSERT INTO `account_master` (`Ac_No`, `Ac_type`, `Balance`) VALUES
(1008, '', 11000),
(1009, 'SB', 202000),
(1010, 'SB', 1950000),
(1011, 'SB', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `ac_transaction`
--

CREATE TABLE IF NOT EXISTS `ac_transaction` (
`Trans_ID` int(11) NOT NULL,
  `Ac_No` int(11) NOT NULL,
  `Trans_Date` date NOT NULL,
  `Type` varchar(15) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Transfer_Ac` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ac_transaction`
--

INSERT INTO `ac_transaction` (`Trans_ID`, `Ac_No`, `Trans_Date`, `Type`, `Amount`, `Transfer_Ac`) VALUES
(1, 1008, '2018-03-15', '0', 10000, 222),
(3, 1008, '2018-03-14', '0', 10000, 222),
(4, 1009, '2018-03-16', '0', 200000, 67859000),
(5, 1010, '2018-03-19', 'Deposit', 100000, 50150),
(6, 1010, '2018-03-19', 'Withdraw', 150000, 50170),
(7, 1011, '2018-03-21', 'Deposit', 10000, 1012);

-- --------------------------------------------------------

--
-- Table structure for table `my_profiles`
--

CREATE TABLE IF NOT EXISTS `my_profiles` (
`profiles_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `file` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=307 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_profiles`
--

INSERT INTO `my_profiles` (`profiles_id`, `username`, `file`) VALUES
(169, 'logesh@gmail.com', 'f1.jpg'),
(170, 'logesh@gmail.com', 'f2.jpg'),
(171, 'logesh@gmail.com', 'f3.jpg'),
(172, 'logesh@gmail.com', 'f4.jpg'),
(173, 'logesh@gmail.com', 'f5.jpg'),
(174, 'logesh@gmail.com', 'htc.jpg'),
(175, 'logesh@gmail.com', 'lenova.jpg'),
(176, 'logesh@gmail.com', 'micro.jpeg'),
(182, 'logesh@gmail.com', 'sam1.png'),
(183, 'logesh@gmail.com', 'samsung.png'),
(184, 'dinesh@gmail.com', 'thumb-01.jpg'),
(185, 'dinesh@gmail.com', 'thumb-02.jpg'),
(186, 'dinesh@gmail.com', 'thumb-03.jpg'),
(187, 'dinesh@gmail.com', 'thumb-04.jpg'),
(188, 'dinesh@gmail.com', 'thumb-05.jpg'),
(189, 'dinesh@gmail.com', 'thumb-06.jpg'),
(192, 'dinesh@gmail.com', 'thumb-07.jpg'),
(193, 'dinesh@gmail.com', 'thumb-08.jpg'),
(194, 'dinesh@gmail.com', 'thumb-09.jpg'),
(195, 'dinesh@gmail.com', 'thumb-11.jpg'),
(196, 'fazulu@gmail.com', '01-boxed.jpg'),
(197, 'fazulu@gmail.com', 'bio.png'),
(198, 'fazulu@gmail.com', 'oppo.jpg'),
(199, 'fazulu@gmail.com', 'only-for-2.png'),
(200, 'fazulu@gmail.com', 'blog-06.jpg'),
(201, 'fazulu@gmail.com', 'responsive2.png'),
(202, 'fazulu@gmail.com', 'viewlogo.aspx.png'),
(203, 'fazulu@gmail.com', 'magazine.png'),
(204, 'fazulu@gmail.com', 'tons-of-reusable-elements.png'),
(205, 'fazulu@gmail.com', 'skill-bars.gif'),
(206, 'demo@ymail.com', 'ajax-loader.gif'),
(207, 'demo@ymail.com', 'focus-button.png'),
(208, 'demo@ymail.com', 'next.png'),
(209, 'demo@ymail.com', 'pause-button.png'),
(210, 'demo@ymail.com', 'play-button.png'),
(211, 'demo@ymail.com', 'prev.png'),
(212, 'demo@ymail.com', 'slide1.jpeg'),
(213, 'demo@ymail.com', 'slide2.jpeg'),
(214, 'demo@ymail.com', 'slide3.jpeg'),
(215, 'demo@ymail.com', 'slide4.jpeg'),
(216, 'kc', 'Chrysanthemum.jpg'),
(217, 'kevincastrofeb@gmail.com', 'aaa.png'),
(218, 'kevincastrofeb@gmail.com', 'bann1.jpg'),
(219, 'kevincastrofeb@gmail.com', 'demo.xps'),
(220, 'kevincastrofeb@gmail.com', 'bill.png'),
(221, 'kevincastrofeb@gmail.com', 'requie.PNG'),
(222, 'kevincastrofeb@gmail.com', 'Desert.jpg'),
(223, 'kevincastrofeb@gmail.com', 'Jellyfish.jpg'),
(224, 'kevincastrofeb@gmail.com', 'Lighthouse.jpg'),
(225, 'kevincastrofeb@gmail.com', 'Penguins.jpg'),
(226, 'kevincastrofeb@gmail.com', 'Tulips.jpg'),
(227, 'sharp_shahul@yahoo.co.in', 'img4.jpg'),
(228, 'sharp_shahul@yahoo.co.in', 'img1.png'),
(229, 'sharp_shahul@yahoo.co.in', 'furimg.jpg'),
(230, 'sharp_shahul@yahoo.co.in', 'img3.jpg'),
(231, 'sharp_shahul@yahoo.co.in', 'img7.jpg'),
(232, 'sharp_shahul@yahoo.co.in', 'img5.jpg'),
(233, 'sharp_shahul@yahoo.co.in', 'img6.jpg'),
(234, 'sharp_shahul@yahoo.co.in', 'img8.jpg'),
(235, 'sharp_shahul@yahoo.co.in', 'img13.jpg'),
(236, 'sharp_shahul@yahoo.co.in', 'img9.jpg'),
(237, 'rajasekar@gmail.com', 'Wallpaper 1080p (1).jpg'),
(238, 'rajasekar@gmail.com', 'Wallpaper 1080p (2).jpg'),
(239, 'rajasekar@gmail.com', 'Wallpaper 1080p (3).jpg'),
(240, 'rajasekar@gmail.com', 'Wallpaper 1080p (5).jpg'),
(241, 'rajasekar@gmail.com', 'Wallpaper 1080p (6).jpg'),
(242, 'rajasekar@gmail.com', 'Wallpaper 1080p (7).jpg'),
(243, 'rajasekar@gmail.com', 'Wallpaper 1080p (8).jpg'),
(244, 'rajasekar@gmail.com', 'Wallpaper 1080p (9).jpg'),
(245, 'rajasekar@gmail.com', 'Wallpaper 1080p (10).jpg'),
(246, 'rajasekar@gmail.com', 'Wallpaper 1080p (11).jpg'),
(247, 'musthafa@gmal.com', 'Wallpaper 1080p (13).jpg'),
(248, 'musthafa@gmal.com', 'Wallpaper 1080p (14).jpg'),
(249, 'musthafa@gmal.com', 'Wallpaper 1080p (15).jpg'),
(250, 'musthafa@gmal.com', 'Wallpaper 1080p (16).jpg'),
(251, 'musthafa@gmal.com', 'Wallpaper 1080p (17).jpg'),
(252, 'musthafa@gmal.com', 'Wallpaper 1080p (18).jpg'),
(253, 'musthafa@gmal.com', 'Wallpaper 1080p (19).jpg'),
(254, 'musthafa@gmal.com', 'Wallpaper 1080p (20).jpg'),
(255, 'musthafa@gmal.com', 'Wallpaper 1080p (22).jpg'),
(256, 'musthafa@gmal.com', 'Wallpaper 1080p (23).jpg'),
(257, 'satheeskumar@gmail.com', 'Wallpaper 1080p (25).jpg'),
(258, 'satheeskumar@gmail.com', 'Wallpaper 1080p (26).jpg'),
(259, 'satheeskumar@gmail.com', 'Wallpaper 1080p (27).jpg'),
(260, 'satheeskumar@gmail.com', 'Wallpaper 1080p (29).jpg'),
(261, 'satheeskumar@gmail.com', 'Wallpaper 1080p (30).jpg'),
(262, 'satheeskumar@gmail.com', 'Wallpaper 1080p (32).jpg'),
(263, 'satheeskumar@gmail.com', 'Wallpaper 1080p (33).jpg'),
(264, 'satheeskumar@gmail.com', 'Wallpaper 1080p (35).jpg'),
(265, 'satheeskumar@gmail.com', 'Wallpaper 1080p (36).jpg'),
(266, 'satheeskumar@gmail.com', 'Wallpaper 1080p (37).jpg'),
(267, 'test@gmail.com', 'Wallpaper 1080p (51).jpg'),
(268, 'test@gmail.com', 'Wallpaper 1080p (52).jpg'),
(269, 'test@gmail.com', 'Wallpaper 1080p (53).jpg'),
(270, 'test@gmail.com', 'Wallpaper 1080p (54).jpg'),
(271, 'test@gmail.com', 'Wallpaper 1080p (55).jpg'),
(272, 'test@gmail.com', 'Wallpaper 1080p (56).jpg'),
(273, 'test@gmail.com', 'Wallpaper 1080p (57).jpg'),
(274, 'test@gmail.com', 'Wallpaper 1080p (58).jpg'),
(275, 'test@gmail.com', 'Wallpaper 1080p (59).jpg'),
(276, 'test@gmail.com', 'Wallpaper 1080p (60).jpg'),
(277, 'safi@gmail.com', 'Wallpaper 1080p (61).jpg'),
(278, 'safi@gmail.com', 'Wallpaper 1080p (62).jpg'),
(279, 'safi@gmail.com', 'Wallpaper 1080p (63).jpg'),
(280, 'safi@gmail.com', 'Wallpaper 1080p (64).jpg'),
(281, 'safi@gmail.com', 'Wallpaper 1080p (65).jpg'),
(282, 'safi@gmail.com', 'Wallpaper 1080p (66).jpg'),
(283, 'safi@gmail.com', 'Wallpaper 1080p (67).jpg'),
(284, 'safi@gmail.com', 'Wallpaper 1080p (68).jpg'),
(285, 'safi@gmail.com', 'Wallpaper 1080p (69).jpg'),
(286, 'safi@gmail.com', 'Wallpaper 1080p (71).jpg'),
(287, 'saran@gmail.com', 'Wallpaper 1080p (81).jpg'),
(288, 'saran@gmail.com', 'Wallpaper 1080p (82).jpg'),
(289, 'saran@gmail.com', 'Wallpaper 1080p (83).jpg'),
(290, 'saran@gmail.com', 'Wallpaper 1080p (84).jpg'),
(291, 'saran@gmail.com', 'Wallpaper 1080p (85).jpg'),
(292, 'saran@gmail.com', 'Wallpaper 1080p (86).jpg'),
(293, 'saran@gmail.com', 'Wallpaper 1080p (87).jpg'),
(294, 'saran@gmail.com', 'Wallpaper 1080p (88).jpg'),
(295, 'saran@gmail.com', 'Wallpaper 1080p (89).jpg'),
(296, 'saran@gmail.com', 'Wallpaper 1080p (90).jpg'),
(297, 'satheeskumarsai33@gmail.com', '000c1314.jpeg'),
(298, 'satheeskumarsai33@gmail.com', '001.JPG'),
(299, 'satheeskumarsai33@gmail.com', '1.jpg'),
(300, 'satheeskumarsai33@gmail.com', '02).jpg'),
(301, 'satheeskumarsai33@gmail.com', '2.jpg'),
(302, 'satheeskumarsai33@gmail.com', '2bedrooms.jpg'),
(303, 'satheeskumarsai33@gmail.com', '03SC008.JPG'),
(304, 'satheeskumarsai33@gmail.com', '3 (2).jpg'),
(305, 'satheeskumarsai33@gmail.com', '3.jpg'),
(306, 'satheeskumarsai33@gmail.com', '3d_wallpaper_7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profile_admin`
--

CREATE TABLE IF NOT EXISTS `profile_admin` (
`profile_admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_admin`
--

INSERT INTO `profile_admin` (`profile_admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
`register_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Ac_No` int(11) unsigned NOT NULL,
  `opening_date` date NOT NULL,
  `login_valid` varchar(100) NOT NULL,
  `img_valid` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`register_id`, `name`, `email`, `mobile`, `city`, `uname`, `password`, `Ac_No`, `opening_date`, `login_valid`, `img_valid`) VALUES
(20, 'logesh', 'logesh@gmail.com', '9876543211', 'karur', 'logesh@gmail.com', 'logesh', 1001, '2018-03-05', '0', '0'),
(21, 'Dinesh', 'dinesh@gmail.com', '9874563210', 'trichy', 'dinesh@gmail.com', 'dinesh', 1002, '2018-03-05', '0', '0'),
(22, 'fazulu', 'gfdfd@gmail.com', '7896541230', 'trichy', 'fazulu@gmail.com', '1234', 1003, '2018-03-05', '0', '0'),
(23, 'demo', 'demo@ymail.com', '7896541230', 'trichy', 'demo@ymail.com', 'demo', 1004, '2018-03-05', '0', '0'),
(24, 'R.Kc', 'kc123@gmail.com', '9578209101', 'Trichy', 'kc@gmail.com', 'kc@123', 1005, '2018-03-05', '0', '0'),
(25, 'KC', 'kevincastrofeb@gmail.com', '9578209101', 'Trichy', 'kevincastrofeb@gmail.com', '123', 1006, '2018-03-05', '0', '0'),
(26, 'Shahul Hameed', 'sharp_shahul@yahoo.co.in', '9842393852', 'Madurai', 'sharp_shahul@yahoo.co.in', 'fgdfg', 1007, '2018-03-05', '', ''),
(27, 'Rajasekar', 'rajasekar@gmail.com', '9876543210', 'K.K.Nagar, Madurai', 'rajasekar@gmail.com', 'raja', 1, '2018-03-05', '0', '0'),
(28, 'Musthafa', 'musthafa@gmail.com', '9988776655', 'Dindugal', 'musthafa@gmal.com', 'musthafa', 1, '0000-00-00', '', ''),
(29, 'Sathees', 'satheeskumar@gmail.com', '8110964230', 'Kamarajar Street,Chokalingapuram,Melur', 'satheeskumar@gmail.com', 'sathees', 1, '2018-03-06', '1', '0'),
(34, 'test', 'test@gmail.com', '9009912344', 'Madurai', 'test@gmail.com', 'test', 1008, '2018-03-13', '0', '0'),
(35, 'safi', 'safi@gmail.com', '8110964230', 'Madurai', 'safi@gmail.com', 'safi', 1009, '2018-03-15', '1', ''),
(36, 'saran', 'saran@gmail.com', '9943303758', 'Kamarajar Street,Chokalingapuram,Melur', 'saran@gmail.com', 'saraan', 1010, '2018-03-19', '0', '0'),
(37, 'satheeskumar', 'satheeskumarsai33@gmail.com', '8110964230', 'Kamarajar Street,Chokalingapuram,Melur', 'satheeskumarsai33@gmail.com', '231996', 1011, '2018-03-21', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `verify_my_profiles`
--

CREATE TABLE IF NOT EXISTS `verify_my_profiles` (
`verify_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `verify_profile` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verify_my_profiles`
--

INSERT INTO `verify_my_profiles` (`verify_id`, `username`, `verify_profile`) VALUES
(10, 'logesh@gmail.com', '176'),
(11, 'dinesh@gmail.com', '185'),
(12, 'fazulu@gmail.com', '200'),
(13, 'demo@ymail.com', '213'),
(14, 'kevincastrofeb@gmail.com', '225'),
(15, 'sharp_shahul@yahoo.co.in', '235'),
(16, 'rajasekar@gmail.com', '245'),
(17, 'musthafa@gmal.com', '255'),
(18, 'satheeskumar@gmail.com', '261'),
(19, 'test@gmail.com', '276'),
(20, 'safi@gmail.com', '286'),
(21, 'saran@gmail.com', '296'),
(22, 'satheeskumarsai33@gmail.com', '304');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ac_transaction`
--
ALTER TABLE `ac_transaction`
 ADD PRIMARY KEY (`Trans_ID`);

--
-- Indexes for table `my_profiles`
--
ALTER TABLE `my_profiles`
 ADD PRIMARY KEY (`profiles_id`);

--
-- Indexes for table `profile_admin`
--
ALTER TABLE `profile_admin`
 ADD PRIMARY KEY (`profile_admin_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
 ADD PRIMARY KEY (`register_id`);

--
-- Indexes for table `verify_my_profiles`
--
ALTER TABLE `verify_my_profiles`
 ADD PRIMARY KEY (`verify_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ac_transaction`
--
ALTER TABLE `ac_transaction`
MODIFY `Trans_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `my_profiles`
--
ALTER TABLE `my_profiles`
MODIFY `profiles_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=307;
--
-- AUTO_INCREMENT for table `profile_admin`
--
ALTER TABLE `profile_admin`
MODIFY `profile_admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
MODIFY `register_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `verify_my_profiles`
--
ALTER TABLE `verify_my_profiles`
MODIFY `verify_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
