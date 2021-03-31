-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 09:42 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sellcars`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `role`) VALUES
(7, 'admin1', '21232f297a57a5a743894a0e4a801fc3', 1),
(8, 'admin2', '21232f297a57a5a743894a0e4a801fc3', 2),
(11, 'paulin', '21232f297a57a5a743894a0e4a801fc3', 2),
(13, 'Gregory', '21232f297a57a5a743894a0e4a801fc3', 2),
(14, 'michał', '21232f297a57a5a743894a0e4a801fc3', 2),
(15, 'anna', '21232f297a57a5a743894a0e4a801fc3', 2);

-- --------------------------------------------------------

--
-- Table structure for table `carimages`
--

CREATE TABLE `carimages` (
  `imageId` int(255) NOT NULL,
  `carId` int(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `role` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carimages`
--

INSERT INTO `carimages` (`imageId`, `carId`, `path`, `role`) VALUES
(1, 5, '../pictures/carsimages/602299ec43db20.31454411.jpg', 1),
(2, 80, '../pictures/carsimages/6022adf62df7f7.55834461.jpg', 1),
(3, 13, '../pictures/carsimages/6022aeb1a1d1a3.46063537.jpg', 1),
(4, 20, '../pictures/carsimages/6022b07b1ec3a8.28123347.jpg', 1),
(5, 20, '../pictures/carsimages/6022b07b1ec3a8.28123347.jpg', 2),
(6, 20, '../pictures/carsimages/6022b07b1ec3a8.28123347.jpg', 2),
(7, 20, '../pictures/carsimages/6022b07b1ec3a8.28123347.jpg', 2),
(8, 20, '../pictures/carsimages/6022b07b1ec3a8.28123347.jpg', 2),
(9, 20, '../pictures/carsimages/6022b07b1ec3a8.28123347.jpg', 2),
(10, 20, '../pictures/carsimages/6022b07b1ec3a8.28123347.jpg', 2),
(11, 20, '../pictures/carsimages/6022b07b1ec3a8.28123347.jpg', 2),
(12, 21, '../pictures/carsimages/6022b1f84ba9e3.34448369.jpg', 1),
(13, 21, '../pictures/carsimages/6022b1f84ba9e3.34448369.jpg', 2),
(14, 21, '../pictures/carsimages/6022b1f84ba9e3.34448369.jpg', 2),
(15, 1, '../pictures/carsimages/6022b1f84ba9e3.34448369.jpg', 2),
(16, 21, '../pictures/carsimages/6022b1f84ba9e3.34448369.jpg', 2),
(17, 21, '../pictures/carsimages/6022b1f84ba9e3.34448369.jpg', 2),
(18, 21, '../pictures/carsimages/6022b1f84ba9e3.34448369.jpg', 2),
(19, 21, '../pictures/carsimages/6022b1f84ba9e3.34448369.jpg', 2),
(20, 21, '../pictures/carsimages/6022b1f84ba9e3.34448369.jpg', 2),
(21, 21, '../pictures/carsimages/6022b1f84ba9e3.34448369.jpg', 2),
(22, 21, '../pictures/carsimages/6022b1f84ba9e3.34448369.jpg', 2),
(23, 22, '../pictures/carsimages/6022b3217cddf7.03762875.jpg', 1),
(24, 22, '../pictures/carsimages/6022b3217cddf7.03762875.jpg', 2),
(25, 22, '../pictures/carsimages/6022b3217cddf7.03762875.jpg', 2),
(26, 22, '../pictures/carsimages/6022b3217cddf7.03762875.jpg', 2),
(27, 22, '../pictures/carsimages/6022b3217cddf7.03762875.jpg', 2),
(28, 22, '../pictures/carsimages/6022b3217cddf7.03762875.jpg', 2),
(29, 22, '../pictures/carsimages/6022b3217cddf7.03762875.jpg', 2),
(30, 23, '../pictures/carsimages/6022b34f9f2ec9.17677136.jpg', 1),
(31, 23, '../pictures/carsimages/6022b34f9f2ec9.17677136.jpg', 2),
(32, 23, '../pictures/carsimages/6022b34f9f2ec9.17677136.jpg', 2),
(33, 23, '../pictures/carsimages/6022b34f9f2ec9.17677136.jpg', 2),
(34, 23, '../pictures/carsimages/6022b34f9f2ec9.17677136.jpg', 2),
(35, 23, '../pictures/carsimages/6022b34f9f2ec9.17677136.jpg', 2),
(36, 23, '../pictures/carsimages/6022b34f9f2ec9.17677136.jpg', 2),
(37, 24, '../pictures/carsimages/6022b3d1b5c939.96063010.jpg', 1),
(38, 24, '../pictures/carsimages/6022b3d1b5c939.96063010.jpg', 2),
(39, 24, '../pictures/carsimages/6022b3d1b5c939.96063010.jpg', 2),
(40, 24, '../pictures/carsimages/6022b3d1b5c939.96063010.jpg', 2),
(41, 24, '../pictures/carsimages/6022b3d1b5c939.96063010.jpg', 2),
(42, 24, '../pictures/carsimages/6022b3d1b5c939.96063010.jpg', 2),
(43, 24, '../pictures/carsimages/6022b3d1b5c939.96063010.jpg', 2),
(44, 25, '../pictures/carsimages/6022b4891758a8.20165282.jpg', 1),
(45, 25, '../pictures/carsimages/6022b489179818.03730909.jpg', 2),
(46, 25, '../pictures/carsimages/6022b48917f136.39559596.jpg', 2),
(47, 25, '../pictures/carsimages/6022b4891859a9.38696378.jpg', 2),
(48, 25, '../pictures/carsimages/6022b48918a8a7.71012571.jpg', 2),
(49, 25, '../pictures/carsimages/6022b489191848.95800856.jpg', 2),
(50, 26, '../pictures/carsimages/6022b54aec0a29.46952637.jpg', 1),
(51, 26, '../pictures/carsimages/6022b54aec60f1.07744303.jpg', 2),
(52, 26, '../pictures/carsimages/6022b54aeca832.31902545.jpg', 2),
(53, 26, '../pictures/carsimages/6022b54aececb3.65748212.jpg', 2),
(54, 26, '../pictures/carsimages/6022b54aed3ce0.37342248.jpg', 2),
(55, 26, '../pictures/carsimages/6022b54aed82f4.90157517.jpg', 2),
(56, 26, '../pictures/carsimages/6022b54aedc369.08725226.jpg', 2),
(57, 26, '../pictures/carsimages/6022b54aee1b14.72119623.jpg', 2),
(58, 26, '../pictures/carsimages/6022b54aeea978.94232446.jpg', 2),
(59, 27, '../pictures/carsimages/60247e904817b0.33992316.png', 1),
(60, 27, '../pictures/carsimages/60247e90494e33.34689988.jpg', 2),
(61, 27, '../pictures/carsimages/60247e904a0e21.26406823.jpg', 2),
(62, 27, '../pictures/carsimages/60247e904ab6e8.12673015.jpg', 2),
(63, 28, '../pictures/carsimages/60247faab2c426.84009396.png', 1),
(64, 28, '../pictures/carsimages/60247faab349a7.56908974.jpg', 2),
(65, 28, '../pictures/carsimages/60247faab3f8e9.66691811.png', 2),
(66, 28, '../pictures/carsimages/60247faab4b9b7.54474864.png', 2),
(67, 28, '../pictures/carsimages/60247faab556a8.12925673.jpg', 2),
(68, 29, '../pictures/carsimages/602480598e6fc0.51907117.png', 1),
(69, 29, '../pictures/carsimages/602480598f0746.38365132.jpg', 2),
(70, 29, '../pictures/carsimages/60248059903b37.09462728.jpg', 2),
(71, 29, '../pictures/carsimages/60248059914585.30027772.jpg', 2),
(72, 29, '../pictures/carsimages/60248059922a37.78780767.jpg', 2),
(73, 29, '../pictures/carsimages/60248059929753.11915734.png', 2),
(74, 29, '../pictures/carsimages/60248059932e91.60825347.png', 2),
(75, 29, '../pictures/carsimages/60248059940e97.17647049.png', 2),
(76, 29, '../pictures/carsimages/6024805995ace9.37540797.jpg', 2),
(77, 30, '../pictures/carsimages/6024810c3291a0.23553410.png', 1),
(78, 30, '../pictures/carsimages/6024810c32ece5.10789238.jpg', 2),
(79, 30, '../pictures/carsimages/6024810c336ce7.11740925.jpg', 2),
(80, 30, '../pictures/carsimages/6024810c33e637.00700849.jpg', 2),
(81, 30, '../pictures/carsimages/6024810c34f338.49389715.jpg', 2),
(82, 30, '../pictures/carsimages/6024810c358fe1.07162084.png', 2),
(83, 31, '../pictures/carsimages/60248197e22927.92425524.png', 1),
(84, 31, '../pictures/carsimages/60248197e28314.29364016.jpg', 2),
(85, 31, '../pictures/carsimages/60248197e2e3a3.65855314.jpg', 2),
(86, 31, '../pictures/carsimages/60248197e35a59.18120377.jpg', 2),
(87, 31, '../pictures/carsimages/60248197e42957.51152089.jpg', 2),
(88, 31, '../pictures/carsimages/60248197e4b206.91932117.jpg', 2),
(89, 32, '../pictures/carsimages/60248219d42503.70510698.png', 1),
(90, 32, '../pictures/carsimages/60248219d54d31.66408783.jpg', 2),
(91, 32, '../pictures/carsimages/60248219d5ea81.01326953.jpg', 2),
(92, 32, '../pictures/carsimages/60248219d6dd20.55991694.png', 2),
(93, 32, '../pictures/carsimages/60248219d7c5b2.31323338.png', 2),
(94, 33, '../pictures/carsimages/6024829649f8f8.78332853.png', 1),
(95, 33, '../pictures/carsimages/602482964ad661.21418731.jpg', 2),
(96, 33, '../pictures/carsimages/602482964ba134.39830528.png', 2),
(97, 33, '../pictures/carsimages/602482964c0894.97655068.png', 2),
(98, 33, '../pictures/carsimages/602482964ccd37.77583346.png', 2),
(99, 33, '../pictures/carsimages/602482964d7876.33248158.png', 2),
(100, 33, '../pictures/carsimages/602482964e1a58.77704786.png', 2),
(101, 33, '../pictures/carsimages/602482964f1637.54407827.jpg', 2),
(102, 34, '../pictures/carsimages/602482eecd42c5.64168521.png', 1),
(103, 34, '../pictures/carsimages/602482eecdcf26.35668938.png', 2),
(104, 34, '../pictures/carsimages/602482eece88d7.36057272.png', 2),
(105, 34, '../pictures/carsimages/602482eecf3700.40824256.png', 2),
(106, 34, '../pictures/carsimages/602482eecf93c6.28998640.png', 2),
(107, 34, '../pictures/carsimages/602482eed035e1.15366400.png', 2),
(108, 34, '../pictures/carsimages/602482eed0acb2.08018967.png', 2),
(109, 34, '../pictures/carsimages/602482eed11995.99921472.jpg', 2),
(110, 35, '../pictures/carsimages/6025256fb68d93.55976816.jfif', 1),
(111, 35, '../pictures/carsimages/6025256fb7b152.31175337.png', 2),
(112, 35, '../pictures/carsimages/6025256fb80a34.36943626.png', 2),
(113, 35, '../pictures/carsimages/6025256fb85f47.55897136.png', 2),
(114, 35, '../pictures/carsimages/6025256fb8daa3.04188857.png', 2),
(115, 35, '../pictures/carsimages/6025256fb9bb96.99268930.webp', 2),
(116, 35, '../pictures/carsimages/6025256fba5c12.42244841.png', 2),
(117, 35, '../pictures/carsimages/6025256fbb37d7.31946976.jpg', 2),
(118, 36, '../pictures/carsimages/602526079b7229.46501061.webp', 1),
(119, 36, '../pictures/carsimages/602526079bc137.57765429.jpg', 2),
(120, 36, '../pictures/carsimages/602526079bff08.44851322.jfif', 2),
(121, 36, '../pictures/carsimages/602526079c4b49.51702656.jpg', 2),
(122, 36, '../pictures/carsimages/602526079d2148.33116444.png', 2),
(123, 36, '../pictures/carsimages/602526079dddf7.63071938.png', 2),
(124, 36, '../pictures/carsimages/602526079e3435.21572516.webp', 2),
(125, 37, '../pictures/carsimages/60252c48b40106.09255185.webp', 1),
(126, 37, '../pictures/carsimages/60252c48b5acd5.25234431.png', 2),
(127, 37, '../pictures/carsimages/60252c48b6c166.83315761.png', 2),
(128, 37, '../pictures/carsimages/60252c48b739b4.75182754.png', 2),
(129, 37, '../pictures/carsimages/60252c48b7b726.64957073.png', 2),
(130, 37, '../pictures/carsimages/60252c48b85a41.62614346.png', 2),
(131, 37, '../pictures/carsimages/60252c48b95f73.71283898.png', 2),
(132, 37, '../pictures/carsimages/60252c48ba1c94.21105524.jpg', 2),
(133, 37, '../pictures/carsimages/60252c48badb85.08070946.jpg', 2),
(134, 37, '../pictures/carsimages/60252c48bb2e70.05341661.jpg', 2),
(135, 38, '../pictures/carsimages/60252ccdd588b6.39125489.webp', 1),
(136, 39, '../pictures/carsimages/60252dfe0a4487.21593877.webp', 1),
(137, 39, '../pictures/carsimages/60252dfe0a94e9.89854031.png', 2),
(138, 39, '../pictures/carsimages/60252dfe0ae062.37575320.png', 2),
(139, 39, '../pictures/carsimages/60252dfe0b4175.87661497.png', 2),
(140, 39, '../pictures/carsimages/60252dfe0bb358.17664681.png', 2),
(141, 39, '../pictures/carsimages/60252dfe0ca7e0.65860284.png', 2),
(142, 39, '../pictures/carsimages/60252dfe0e0ab1.19578535.png', 2),
(143, 39, '../pictures/carsimages/60252dfe0e69f4.97469169.png', 2),
(144, 39, '../pictures/carsimages/60252dfe0ed513.91865945.jpg', 2),
(145, 39, '../pictures/carsimages/60252dfe0f41f2.36596616.jpg', 2),
(146, 40, '../pictures/carsimages/60252e8a2a3fd2.74118940.webp', 1),
(147, 40, '../pictures/carsimages/60252e8a2a95d2.26459274.png', 2),
(148, 40, '../pictures/carsimages/60252e8a2acef7.62202364.png', 2),
(149, 40, '../pictures/carsimages/60252e8a2b0127.01829657.png', 2),
(150, 40, '../pictures/carsimages/60252e8a2b3475.90829440.png', 2),
(151, 40, '../pictures/carsimages/60252e8a2b6730.43660406.jpg', 2),
(152, 40, '../pictures/carsimages/60252e8a2b9d81.36179727.jpg', 2),
(153, 40, '../pictures/carsimages/60252e8a2bcb61.59991497.jpg', 2),
(154, 41, '../pictures/carsimages/60252f0b878ce8.48180699.webp', 1),
(155, 41, '../pictures/carsimages/60252f0b87e986.24089479.png', 2),
(156, 41, '../pictures/carsimages/60252f0b883258.17975997.png', 2),
(157, 41, '../pictures/carsimages/60252f0b887769.08652159.png', 2),
(158, 41, '../pictures/carsimages/60252f0b88b680.13129508.png', 2),
(159, 41, '../pictures/carsimages/60252f0b890549.36553584.png', 2),
(160, 41, '../pictures/carsimages/60252f0b895c60.79193763.jpg', 2),
(161, 42, '../pictures/carsimages/60252f9953f590.06351574.webp', 1),
(162, 42, '../pictures/carsimages/60252f9954a159.82354623.png', 2),
(163, 42, '../pictures/carsimages/60252f99550224.69711603.png', 2),
(164, 42, '../pictures/carsimages/60252f99555130.48260796.png', 2),
(165, 42, '../pictures/carsimages/60252f9955a933.15573986.png', 2),
(166, 42, '../pictures/carsimages/60252f9955fcc9.83398857.png', 2),
(167, 42, '../pictures/carsimages/60252f99563055.73905001.jpg', 2),
(168, 43, '../pictures/carsimages/60270a709d7f56.94409224.webp', 1),
(169, 43, '../pictures/carsimages/60270a709f48b0.69806713.webp', 2),
(170, 43, '../pictures/carsimages/60270a709fae07.38358998.webp', 2),
(171, 43, '../pictures/carsimages/60270a70a06207.95296481.webp', 2),
(172, 43, '../pictures/carsimages/60270a70a194c8.51016559.webp', 2),
(173, 43, '../pictures/carsimages/60270a70a2a5b8.06496854.png', 2),
(174, 43, '../pictures/carsimages/60270a70a358f4.98552141.png', 2),
(175, 43, '../pictures/carsimages/60270a70a3b464.09465331.png', 2),
(176, 43, '../pictures/carsimages/60270a70a448e3.74260365.png', 2),
(177, 43, '../pictures/carsimages/60270a70a549e4.78451872.png', 2),
(178, 44, '../pictures/carsimages/60270ab7c45731.76833232.webp', 1),
(179, 44, '../pictures/carsimages/60270ab7c58dc1.12218476.png', 2),
(180, 44, '../pictures/carsimages/60270ab7c64ac4.11610232.png', 2),
(181, 44, '../pictures/carsimages/60270ab7c6f056.34399242.png', 2),
(182, 44, '../pictures/carsimages/60270ab7c74aa3.26056835.png', 2),
(183, 44, '../pictures/carsimages/60270ab7c7a554.74751411.png', 2),
(184, 44, '../pictures/carsimages/60270ab7c80c51.81678082.png', 2),
(185, 44, '../pictures/carsimages/60270ab7c87643.14515752.png', 2),
(186, 44, '../pictures/carsimages/60270ab7c95fc9.17484153.jpg', 2),
(187, 44, '../pictures/carsimages/60270ab7ca1c61.81631739.jpg', 2),
(188, 45, '../pictures/carsimages/60270aec786183.76983672.webp', 1),
(189, 45, '../pictures/carsimages/60270aec78e008.39273337.png', 2),
(190, 45, '../pictures/carsimages/60270aec7972b1.13010227.png', 2),
(191, 45, '../pictures/carsimages/60270aec7a6117.62559403.png', 2),
(192, 45, '../pictures/carsimages/60270aec7b4310.73978700.png', 2),
(193, 45, '../pictures/carsimages/60270aec7bc301.69512387.png', 2),
(194, 45, '../pictures/carsimages/60270aec7c2c97.96862970.png', 2),
(195, 45, '../pictures/carsimages/60270aec7c8c64.37450600.png', 2),
(196, 45, '../pictures/carsimages/60270aec7cf917.21271652.jpg', 2),
(197, 45, '../pictures/carsimages/60270aec7e99b2.17829407.jpg', 2),
(198, 46, '../pictures/carsimages/60270b1dbf9774.67719535.webp', 1),
(199, 46, '../pictures/carsimages/60270b1dbfe8a5.51271150.png', 2),
(200, 46, '../pictures/carsimages/60270b1dc02436.68361836.png', 2),
(201, 46, '../pictures/carsimages/60270b1dc062b0.05809440.png', 2),
(202, 46, '../pictures/carsimages/60270b1dc0ad76.85457847.png', 2),
(203, 46, '../pictures/carsimages/60270b1dc0f890.94770313.png', 2),
(204, 46, '../pictures/carsimages/60270b1dc16703.87456603.png', 2),
(205, 46, '../pictures/carsimages/60270b1dc1fa65.68817565.png', 2),
(206, 46, '../pictures/carsimages/60270b1dc29338.88571911.jpg', 2),
(207, 46, '../pictures/carsimages/60270b1dc331a6.53755537.jpg', 2),
(208, 48, '../pictures/carsimages/60270b8b147459.57513326.webp', 1),
(209, 48, '../pictures/carsimages/60270b8b14b042.38744053.png', 2),
(210, 48, '../pictures/carsimages/60270b8b1531a3.90485077.png', 2),
(211, 48, '../pictures/carsimages/60270b8b15f775.51349550.png', 2),
(212, 48, '../pictures/carsimages/60270b8b16b3d4.98383653.png', 2),
(213, 48, '../pictures/carsimages/60270b8b171333.68153779.png', 2),
(214, 48, '../pictures/carsimages/60270b8b176132.65760218.png', 2),
(215, 48, '../pictures/carsimages/60270b8b17a841.42886863.png', 2),
(216, 48, '../pictures/carsimages/60270b8b17e782.04180336.jpg', 2),
(217, 48, '../pictures/carsimages/60270b8b181be1.82966106.jpg', 2),
(218, 49, '../pictures/carsimages/60270bf7c70912.07571209.webp', 1),
(219, 49, '../pictures/carsimages/60270bf7c862b1.00150490.webp', 2),
(220, 49, '../pictures/carsimages/60270bf7c8e094.61068230.webp', 2),
(221, 49, '../pictures/carsimages/60270bf7c93286.97477781.png', 2),
(222, 49, '../pictures/carsimages/60270bf7c97d12.10807782.png', 2),
(223, 49, '../pictures/carsimages/60270bf7c9c591.30597598.png', 2),
(224, 49, '../pictures/carsimages/60270bf7ca10d4.91886316.png', 2),
(225, 49, '../pictures/carsimages/60270bf7ca4c96.24312109.png', 2),
(226, 49, '../pictures/carsimages/60270bf7ca81d6.84763313.png', 2),
(227, 50, '../pictures/carsimages/602d2d81e3e4a3.82860010.png', 1),
(228, 50, '../pictures/carsimages/602d2d81e447c8.18054200.png', 2),
(229, 50, '../pictures/carsimages/602d2d81e485c7.88029679.png', 2),
(230, 50, '../pictures/carsimages/602d2d81e4ba80.73570582.png', 2),
(231, 50, '../pictures/carsimages/602d2d81e4ebf9.94759331.png', 2),
(232, 50, '../pictures/carsimages/602d2d81e52579.95755805.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `carID` int(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `productionYear` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `postDate` date NOT NULL,
  `price` int(255) NOT NULL,
  `vin` varchar(255) NOT NULL,
  `typeID` int(255) NOT NULL,
  `used` int(1) NOT NULL,
  `visible` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`carID`, `brand`, `model`, `manufacturer`, `productionYear`, `description`, `postDate`, `price`, `vin`, `typeID`, `used`, `visible`) VALUES
(27, 'BMW', '2021 BMW 740', 'BMW', 2021, 'The BMW 7 Series is a large luxury sedan with seating for four or five, depending on the model. Rear- and all-wheel-drive versions are offered, and engine choices range from a 335-horsepower, turbocharged 3.0-liter inline-six in the 740i to a 600-hp, turb', '2021-02-11', 999777, '67899JHKK', 1, 1, 1),
(28, 'Bentley Flying Spur', '2021', 'Bentley ', 2021, 'Maximum Age/Mileage\r\n10 years old or less/unlimited mileage\r\nBasic Warranty Terms\r\n1 year/unlimited miles\r\nPowertrain\r\n1 year/unlimited miles\r\nDealer Certification Required\r\nYes\r\nRoadside Assistance\r\nYes', '2021-02-15', 2566332, '6789ADHKK', 1, 1, 1),
(29, '2021 LEXUS IS 300', 'IS 300', 'LEXUS', 2021, 'Lexus virtually has debuted the latest generation of its IS compact sports sedan, showing off a longer and wider look that is sporty and muscular, crucial in a class where nearly every competing manufacturer touts its model’s driving fun factor. The IS’ u', '0000-00-00', 445566, '56629JHKB', 1, 1, 1),
(30, 'MASERATI', 'Ghibli', 'MASERATI', 2021, 'Maximum Age/Mileage\r\n2014-18 Ghibli, Gran Tursimo, Levante and Quattroporte models; dependent on service record\r\nBasic Warranty Terms\r\nRemainder of orginal warranty plus 2 years/unlimited mileage\r\nPowertrain\r\nN/A\r\nDealer Certification Required\r\n120-point ', '2021-03-14', 558862, '345346', 1, 1, 1),
(31, 'MASERATI', 'Quattroporte', 'MASERATI ', 2021, 'The 2021 Maserati Quattroporte has not been tested.\r\n', '2021-02-23', 5544, '56629JHKB', 4, 1, 1),
(32, 'Porsche Taycan', 'Taycan', 'Porsche', 2021, 'The 2021 Porsche Taycan currently has 0 recalls\r\n\r\n', '2021-05-11', 999777, '56629JHKB', 1, 1, 1),
(33, 'Tesla ', 'Model 3', 'Tesla', 2021, 'The 2021 Tesla Model 3 currently has 0 recalls\r\n\r\n', '2021-02-11', 372556, '67899JHKK', 1, 1, 1),
(34, 'VOLVO S90', 'S90', 'Volvo', 2021, 'Basic Warranty Terms\r\n5 years/unlimited miles , upgradeable up to 10 years', '2021-02-11', 999777, '56629JHKB', 6, 1, 1),
(35, 'Cadillac', 'CT4V', 'Cadillac', 2021, 'Bumper-to-Bumper\r\n\r\n48 months / 50,000 miles\r\n\r\nPowertrain\r\n\r\n72 months / 70,000 miles\r\n\r\nRoadside Assistance\r\n\r\n72 months / 70,000 miles\r\n\r\n', '2021-02-17', 999777, '345', 1, 1, 1),
(36, 'Chevrolet', 'Malibu', 'Chevrolet', 2021, 'The front-wheel-drive, five-seat Malibu is Chevrolet’s mid-size family sedan. Power comes from a standard 160-horsepower, turbocharged 1.5-liter four-cylinder engine paired with a continuously variable automatic transmission. An optional 250-hp, turbo 2.0', '2021-07-11', 285232, '678BBBBBB', 7, 1, 1),
(37, 'Dodge', 'Charger', 'Dodge', 2021, 'The Dodge Charger is a full-size sedan that can seat up to five people. It runs on a standard 292-horsepower, 3.6-liter V-6 engine that works with an eight-speed automatic transmission. Also available are a 370-hp, 5.7-liter V-8; a 485-hp, 6.4-liter V-8; ', '2021-06-11', 511332, 'CVCC9JHKB', 5, 1, 1),
(38, 'KIA', 'Seltos', 'KIA', 2021, 'Kia has staked a strong claim among big three-row SUVs with the new Telluride’s traditional SUV looks and smart tech. Now the brand is aiming for similar looks-and-brains chemistry in a subcompact SUV with the 2021 Seltos. Doing it smaller and cheaper is ', '2020-02-11', 5222777, '6789MMC3', 3, 1, 1),
(39, 'Chevrolet', 'TrailBlazer', 'Chevrolet', 2020, 'The 2021 Chevrolet Trailblazer is a surprisingly fun-to-drive, spacious, competent little crossover that looks good and represents a decent value in its lower trims.\r\nVersus the competition: The Trailblazer becomes a harder sell when compared with some co', '2020-02-11', 256332, '5652JHKB', 2, 1, 1),
(40, 'Volkswagen', 'Atlas', 'Volkswagen', 2021, 'Volkswagen updated the Atlas for 2021 with smoother styling, more technology and wider availability for its base engine, a turbo four-cylinder. A non-turbo V-6 remains available on all but the base trim level; both engines pair with an eight-speed automat', '2020-02-11', 999777, '56629JHKB', 2, 1, 1),
(41, 'Cadillac', 'ESV', 'Cadillac', 2021, 'Bumper-to-Bumper\r\n\r\n48 months / 50,000 miles\r\n\r\nRoadside Assistance\r\n\r\n72 months / 70,000 miles\r\n\r\nFree Scheduled Maintenance\r\n\r\n12 months / unlimited distance', '2020-02-11', 99334, '5NRM9JHKB', 6, 1, 1),
(42, 'jaguar', 'E-PACE', 'jaguar', 2021, 'The new E-Pace’s looks have been slightly updated. The most noticeable tweak is front and center, with a new grille that features a mesh design and chrome detailing. Jaguar also says it made aerodynamic adjustments to the SUV’s bumper.\r\n\r\nMore detail has ', '2020-02-11', 99334, 'BGRM9JHKB', 2, 1, 1),
(43, 'Lincoln', 'Nautilius', 'Lincoln', 2021, 'Lincoln has been having a banner year despite all that’s gone on and wants to keep that momentum rolling into 2021 with an updated version of its mid-size Nautilus SUV. Slotting between the three-row (Ford Explorer-based) Aviator and the compact (Ford Esc', '2021-02-11', 999777, '67899JHKK', 2, 1, 1),
(44, 'Maserati', 'Levante', 'MASERATI', 2021, 'Lincoln has been having a banner year despite all that’s gone on and wants to keep that momentum rolling into 2021 with an updated version of its mid-size Nautilus SUV. Slotting between the three-row (Ford Explorer-based) Aviator and the compact (Ford Esc', '2021-02-11', 999777, '67899JHKK', 2, 1, 1),
(45, 'Aucra', 'DLX', 'AUCRA', 2021, 'Lincoln has been having a banner year despite all that’s gone on and wants to keep that momentum rolling into 2021 with an updated version of its mid-size Nautilus SUV. Slotting between the three-row (Ford Explorer-based) Aviator and the compact (Ford Esc', '2021-02-11', 999777, '67899JHKK', 4, 1, 1),
(46, 'Audi', 'Q5', 'AUDI', 2021, 'Lincoln has been having a banner year despite all that’s gone on and wants to keep that momentum rolling into 2021 with an updated version of its mid-size Nautilus SUV. Slotting between the three-row (Ford Explorer-based) Aviator and the compact (Ford Esc', '2021-02-11', 999777, '67899JHKK', 2, 1, 1),
(48, 'BMW', 'X2', 'BMW', 2021, 'Lincoln has been having a banner year despite all that’s gone on and wants to keep that momentum rolling into 2021 with an updated version of its mid-size Nautilus SUV. Slotting between the three-row (Ford Explorer-based) Aviator and the compact (Ford Esc', '2021-02-11', 999777, '67899JHKK', 2, 1, 1),
(49, 'Audi', 'SQ7', 'AUDI', 2021, 'IHAIUSHD ok\r\n', '0000-00-00', 2566332, '56629JHKB', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `typeID` int(255) NOT NULL,
  `typeName` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `typeImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`typeID`, `typeName`, `description`, `typeImage`) VALUES
(1, 'Sedan', 'The current definition of a sedan is much the same as it\'s always been: a passenger car with four doors and a separate trunk. Sedans are described as having \"three-box\" bodies: the front box is home to the engine; the middle box is larger and houses the p', 'pictures/typeImage/sedan.png'),
(2, 'SUV', 'the SUV has been classified as a light truck rather than a car. This gives the SUV a more relaxed fuel efficiency standard. In terms of how the SUV looks and feels, it resembles a combination of truck, minivan, and the average American family car.', 'pictures/typeImage/suv.png'),
(3, 'Compact', 'The U.S. Code of Federal Regulations and It Still Runs define compact cars as a North American vehicle class that lands between mid-size and subcompact vehicles.', 'pictures/typeImage/compact.png'),
(4, 'Cabrio', 'As you may have expected, cabriolet is a foreign word for convertible. It defines a vehicle that has a hard- or soft-top retractable roof. This can be found on a sedan, coupe, wagon, or even an SUV in some cases', 'pictures/typeImage/cabrio.png'),
(5, 'Combi', 'Combi coupé is a marketing term used by Saab to describe cars with a sloping coupé-like rear hatchback. The term joins the European term \"combi\" (for an estate car / station wagon) with coupé. The design combines the functionality of a hatchback with the ', 'pictures/typeImage/combi.png'),
(6, 'Minivan', 'Minivan is an American car classification for vehicles designed to transport passengers in the rear seating row(s), with reconfigurable seats in two or three rows. ... Compared with a full-size van, minivans are now based on a passenger car platform and h', 'pictures/typeImage/minivan.png'),
(7, 'Mini', 'a very small automobile especially : subcompact.', 'pictures/typeImage/mini.png'),
(10, 'New cabrio', 'iuahuidukhfsdfsjdnkjh', 'pictures/typeImage/602d2e7e55df03.15464733.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carimages`
--
ALTER TABLE `carimages`
  ADD PRIMARY KEY (`imageId`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`carID`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`typeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `carimages`
--
ALTER TABLE `carimages`
  MODIFY `imageId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `carID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `typeID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
