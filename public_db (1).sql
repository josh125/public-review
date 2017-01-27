-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2015 at 01:52 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `public_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('030e190aefee978cf3de7f54583ce4715f6b6b24', '::1', 1443172264, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333137323236343b69647c733a313a2231223b757365726e616d657c733a343a226a6f7368223b67726f75707c733a313a2232223b),
('041fae33f8a34d9780716bcfbbe5214067d39ab0', '::1', 1443161607, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333136313332363b),
('196befd7239d75ec4a6921fada0acef76c19ee2f', '::1', 1443153316, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333135333234363b),
('1d7233a08d9e1c13d8d1ef7d38f74be7ae74e523', '::1', 1443175652, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333137353631393b),
('2893895be60f75862dbae932a5c1ca03c21c46de', '::1', 1443173014, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333137323930313b69647c733a313a2231223b757365726e616d657c733a343a226a6f7368223b67726f75707c733a313a2232223b),
('2a549d584a52908e3dd01808c709644d936752fe', '::1', 1443147711, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333134373639383b),
('36d6ae2f8b4e2842fe03b605d8a4e8afc34c96ab', '::1', 1443147031, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333134363739313b),
('3ad5adc693933bff43cb39c4ed60363ed065bf84', '::1', 1443167236, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333136373039343b),
('3d9fbed930029af977a73c14a9b4691fd2a001c7', '::1', 1443148680, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333134383633343b),
('43c0ef4ada8be9ab727c51edf69349700fd36a1a', '::1', 1443171042, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333137303738323b69647c733a313a2231223b757365726e616d657c733a343a226a6f7368223b67726f75707c733a313a2232223b),
('499fcadec69de308fff033b99059d76fcb1b5d40', '::1', 1443169110, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333136383831343b69647c733a313a2231223b757365726e616d657c733a343a226a6f7368223b67726f75707c733a313a2232223b),
('49c2101a12819405acf4edb2c51376ca73b9856d', '::1', 1443161780, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333136313738303b),
('4fb7544b7f28584d3989b337ccddcd11be673ce1', '::1', 1443176691, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333137363430303b),
('50052d42fbfa8f808deed5e7244b758f79212297', '::1', 1443168796, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333136383530373b69647c733a313a2231223b757365726e616d657c733a343a226a6f7368223b67726f75707c733a313a2232223b),
('5179208bc1ddb3af92a14c4f40a130e57ae0eecd', '::1', 1443171475, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333137313437343b69647c733a313a2231223b757365726e616d657c733a343a226a6f7368223b67726f75707c733a313a2232223b),
('52b856f205c64e86f26ba8825894b649eef91ad0', '::1', 1443170152, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333136393931333b69647c733a313a2231223b757365726e616d657c733a343a226a6f7368223b67726f75707c733a313a2232223b),
('5d568906091169935b87d64c93874b744d3663eb', '::1', 1443148459, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333134383236333b),
('607bb8098acdc49a099ea8a3d031056ab46152f2', '::1', 1443165808, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333136353730313b),
('60b32a7c3c07937a44e14719a3110fa090a85ef3', '::1', 1443176945, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333137363933373b69647c733a313a2231223b757365726e616d657c733a343a226a6f7368223b67726f75707c733a313a2232223b),
('623e0fd8c06ff21960f39b6cfef6dee46bd94cf9', '::1', 1443150862, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333135303637333b),
('708d460f3ea6df014852357ed9840b5f59a6d92d', '::1', 1443168445, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333136383134353b69647c733a313a2231223b757365726e616d657c733a343a226a6f7368223b67726f75707c733a313a2232223b),
('8014b5c0790ec6fb3ba596d0a77f256829190638', '::1', 1443151444, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333135313134343b),
('8b0d0439955fa683de0b5962fcdd39cc83d69ceb', '::1', 1443175535, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333137353239373b),
('922ac2fbba68b37b16fce465a2bfeab1dcc10049', '::1', 1443147689, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333134373339313b),
('92a66fb279619b83f9f0a7456c45236a4aeeca6b', '::1', 1443174952, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333137343934323b),
('938a69de792503b3b71f996b9887ec601ed2ade3', '::1', 1443154971, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333135343930313b),
('94b6f952a496e2f7c6f7d8ad95ba9b4879f0c984', '::1', 1443152353, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333135323330353b),
('95d33c39c3414e58020828d6f7782f233cad422e', '::1', 1443177657, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333137373338393b),
('a80b9cbad4a5978b7ea74a335e500657d5c6a84f', '::1', 1443164578, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333136343330343b),
('ab07f9ceb91ddca4c2094104d804a00c9daa7f8b', '::1', 1443160876, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333136303636393b),
('b0327787b0d08479c27da838b87303505999f262', '::1', 1443154151, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333135333839353b),
('b1a00914ffe6f2bc0c0faca697d6d39f8ca1fcef', '::1', 1443168071, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333136373834303b69647c733a313a2231223b757365726e616d657c733a343a226a6f7368223b67726f75707c733a313a2232223b),
('b524f253fa0740162832693935cc4bdda8dec0db', '::1', 1443146238, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333134353935343b),
('b5efa1334f2b5702fe70034f0c210b1c42f95cb9', '::1', 1443177921, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333137373730353b),
('b6a399786274e5c3f2f8d8612b47a60a7aba0df2', '::1', 1443156321, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333135363135393b69647c733a313a2235223b757365726e616d657c733a31303a226d617873616368636869223b67726f75707c733a313a2232223b),
('bc0ddab10f59d15d165d4685cbd4170a87ffe277', '::1', 1443169543, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333136393530303b69647c733a313a2231223b757365726e616d657c733a343a226a6f7368223b67726f75707c733a313a2232223b),
('c13bccc801cb8a38ebdeb57cacc795e5932e60e7', '::1', 1443165268, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333136343937363b),
('c68e6d82e2e2522ecb8637357a3f904205f14285', '::1', 1443178033, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333137383031353b),
('c7aba2163f34b15a6b8f95c810a2a41d4c29a5e1', '::1', 1443174574, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333137343535393b),
('cdb29b96875ed5d4913ffe353bdcbecb3fc29b0f', '::1', 1443167779, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333136373533353b),
('cfcc805e627d1cbcadfe97f558706a3e34e323b0', '::1', 1443171282, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333137313039363b69647c733a313a2231223b757365726e616d657c733a343a226a6f7368223b67726f75707c733a313a2232223b),
('d2b55e352976f464bec301804751d6de672a8a08', '::1', 1443156631, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333135363531323b69647c733a313a2235223b757365726e616d657c733a31303a226d617873616368636869223b67726f75707c733a313a2232223b),
('d49b08dbbdcf70a0231a0588321175cfe38259a5', '::1', 1443164122, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333136333933383b),
('dab81b7c326d8581897767ad8886e936ef4cd288', '::1', 1443169454, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333136393136343b69647c733a313a2231223b757365726e616d657c733a343a226a6f7368223b67726f75707c733a313a2232223b),
('e418502390f1f727bd04e530c7a15dea7514f1a6', '::1', 1443149472, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333134393436323b),
('e472e0b884d5878a16c426b39bc0da666975ca84', '::1', 1443151607, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333135313435323b),
('e618f77353a617cb183596cdf505efe833972f48', '::1', 1443164956, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333136343636363b),
('e64d20544523d3780a2f5575b8c76c886d1a0501', '::1', 1443158199, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333135383139383b69647c733a313a2235223b757365726e616d657c733a31303a226d617873616368636869223b67726f75707c733a313a2232223b),
('ede749f1b3336bc80b9f6473ef4c82f51e95a237', '::1', 1443152003, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333135323030333b),
('f189dd56f3d0a066579a2e01ee5d5c2f604d9c22', '::1', 1443170434, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333137303238343b69647c733a313a2231223b757365726e616d657c733a343a226a6f7368223b67726f75707c733a313a2232223b),
('f24bc811026023cab4392af10e46783a2e925390', '::1', 1443161228, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333136303937353b),
('fa20525931111fd21038b3db3cb59d21058b55e4', '::1', 1443159254, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333135393132303b69647c733a313a2235223b757365726e616d657c733a31303a226d617873616368636869223b67726f75707c733a313a2232223b);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `group_id` int(11) unsigned NOT NULL,
  `group_name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(6);

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE IF NOT EXISTS `people` (
  `pep_id` int(11) unsigned NOT NULL,
  `pep_name` varchar(255) NOT NULL,
  `country` varchar(128) NOT NULL,
  `city` varchar(128) NOT NULL,
  `phone` int(10) NOT NULL,
  `profession` varchar(128) NOT NULL,
  `website` varchar(128) NOT NULL,
  `category_id` int(10) NOT NULL,
  `pep_date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pep_slug` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`pep_id`, `pep_name`, `country`, `city`, `phone`, `profession`, `website`, `category_id`, `pep_date_created`, `pep_slug`, `user_id`) VALUES
(15, 'Bamboo', 'Philippines', 'Manila', 35156, 'artist', '', 1, '2015-09-24 15:10:54', 'bamboo', 3),
(17, 'Joshua Delos Santos', 'Philippines', 'Manila', 151531, 'artist', 'www.josh.com', 1, '2015-09-24 15:09:52', 'joshua-delos-santos', 1),
(18, 'Angelina Jolie', 'United States', 'California', 13515, 'artist', '', 1, '2015-09-24 15:10:20', 'angelina-jolie', 3),
(19, 'jerrilyn', 'Philippines', 'manila', 1351535, 'artist', '', 1, '2015-09-24 15:09:36', 'jerrilyn', 1),
(20, 'Angel Locsin', 'Philippines', 'Quezon City', 313516, 'artist', '', 1, '2015-09-24 15:09:38', 'angel-locsin', 1),
(21, 'Yayadub', 'Philippines', 'manila', 156553, 'artist', '', 1, '2015-09-24 15:09:41', 'yayadub', 1),
(22, 'thadsy sachchi', 'Philippines', 'Manila', 27589569, 'Calgary Court House', 'www.ThadsySachchi.com', 1, '2015-09-25 04:48:32', 'thadsy-sachchi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE IF NOT EXISTS `places` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(255) NOT NULL,
  `country` varchar(128) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(128) NOT NULL,
  `phone` varchar(55) NOT NULL,
  `description` text NOT NULL,
  `website` varchar(128) NOT NULL,
  `category_id` int(10) NOT NULL,
  `place_slug` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`place_id`, `place_name`, `country`, `address`, `city`, `phone`, `description`, `website`, `category_id`, `place_slug`, `user_id`) VALUES
(1, 'rizal park', 'Philippines', 'manila', 'manila', '53153', 'park', 'www.rizal.com', 2, 'rizal-park', 3),
(2, 'Divisoria', 'Philippines', 'tondo', 'manila', '3153', 'market', 'www.div.com', 2, 'divisoria', 3),
(3, 'La union', 'Philippines', 'San Juan', 'La Union', 'sdfsf', 'Province ', '', 2, 'la-union', 1),
(4, 'Binondo', 'Philippines', 'divisoria', 'manila', '55661436', 'Chinatown', '', 2, 'binondo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `review_id` int(11) unsigned NOT NULL,
  `comment` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `rate` varchar(128) NOT NULL,
  `pep_id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  `biz_id` int(11) NOT NULL,
  `web_id` int(11) NOT NULL,
  `th_id` int(11) NOT NULL,
  `review_slug` varchar(255) NOT NULL,
  `review_title` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `comment`, `date`, `user_id`, `category_id`, `rate`, `pep_id`, `place_id`, `biz_id`, `web_id`, `th_id`, `review_slug`, `review_title`) VALUES
(81, 'best shoes for sneaker', '2015-09-25 07:05:48', 1, 5, '4', 0, 0, 0, 0, 1, 'nike-sb', 'best shoes i wear'),
(86, 'the first time i came here i was thinking it was cheap and not good but when i taste\r\nit was the same when you eat on a good restaurant', '2015-09-25 08:02:41', 1, 3, '5', 0, 0, 56, 0, 0, '', 'Good food and cheap'),
(87, 'Best actress for me and very sexy ', '2015-09-25 08:09:55', 1, 3, '5', 20, 0, 0, 0, 0, '', 'Good Actress'),
(89, 'One of the best places in manila that you want to visit', '2015-09-25 08:22:52', 1, 2, '5', 0, 1, 0, 0, 0, '', 'Good places to visit Manila'),
(91, 'Facebook proves that they are the number one social sites', '2015-09-25 08:25:43', 1, 4, '5', 0, 0, 0, 1, 0, '', 'Best Social Sites'),
(93, 'Best shoes i wear even my shoes was a 5 year old already still using for my skate', '2015-09-25 08:35:46', 1, 5, '5', 0, 0, 0, 0, 1, '', 'good shoes for skate ');

-- --------------------------------------------------------

--
-- Table structure for table `review_biz`
--

CREATE TABLE IF NOT EXISTS `review_biz` (
  `biz_id` int(11) unsigned NOT NULL,
  `biz_name` varchar(255) NOT NULL,
  `country` varchar(128) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(128) NOT NULL,
  `phone` varchar(55) NOT NULL,
  `description` text,
  `website` varchar(128) NOT NULL,
  `category_id` int(10) NOT NULL,
  `biz_slug` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review_biz`
--

INSERT INTO `review_biz` (`biz_id`, `biz_name`, `country`, `address`, `city`, `phone`, `description`, `website`, `category_id`, `biz_slug`, `user_id`) VALUES
(48, 'Burger Machine', 'Philippines', 'manila', 'manila', '3153153153', 'burger', '', 3, 'burger-machine', 3),
(49, 'Aling nena', 'Philippines', 'sdgfsdg', 'manila', '1513555', 'karinderya', '', 3, 'aling-nena', 1),
(51, 'aling toyang', 'Philippines', 'manila', 'manila', '153535', 'kainan', '', 3, 'aling-toyang', 1),
(52, 'Je rice mill', 'Philippines', 'tondo', 'manila', '315', 'rice ', '', 3, 'je-rice-mill', 3),
(53, 'River Store', 'Philippines', 'manila', 'manila', '531531', 'food store', '', 3, 'river-store', 1),
(54, 'Awesome Resort', 'Philippines', 'san juan', 'la union', '21513', 'beach resort', '', 3, 'awesome-resort', 3),
(55, 'Tropical Resort', 'Philippines', 'la union', 'La Union', '31351', 'Beach', 'www.tropical.com', 3, 'tropical-resort', 0),
(56, 'Angels Carinderia', 'Philippines', 'paco', 'manila', '135153', 'kainan', '', 3, 'angels-carinderia', 1);

-- --------------------------------------------------------

--
-- Table structure for table `review_category`
--

CREATE TABLE IF NOT EXISTS `review_category` (
  `category_id` int(11) unsigned NOT NULL,
  `category_name` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review_category`
--

INSERT INTO `review_category` (`category_id`, `category_name`) VALUES
(1, 'people'),
(2, 'places'),
(3, 'business'),
(4, 'website'),
(5, 'things');

-- --------------------------------------------------------

--
-- Table structure for table `things`
--

CREATE TABLE IF NOT EXISTS `things` (
  `th_id` int(11) NOT NULL,
  `th_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `th_slug` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `category_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `things`
--

INSERT INTO `things` (`th_id`, `th_name`, `category`, `sub_category`, `description`, `th_slug`, `country`, `website`, `category_id`, `user_id`) VALUES
(1, 'Nike sb', 'Shoes', '', 'nike sb shoes', 'nike-sb', 'Philippines', '', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) unsigned NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(128) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `group_id` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `address` varchar(255) NOT NULL,
  `country` varchar(128) NOT NULL,
  `last_name` varchar(128) NOT NULL,
  `birtday` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `firstname`, `group_id`, `status`, `date_created`, `address`, `country`, `last_name`, `birtday`) VALUES
(1, 'josh', '42f1bfafb745acedbca448b9c5711bbbf05f93bb2719810f66cd7eed22488b305cdddb9f5812bbaa245650546f06d12efe35a7126657a30705236c112e086371', 'jpdelossantos25@gmail.com', 'Joshua D.', 2, 1, '2015-09-16 03:00:43', '', '', '', '0000-00-00'),
(2, 'parkway', '7aa7aea085943d42383c38c814255fc7a863421d45d6b387d3073cf6ca0d0b2b05f876bb67933511feed3a1d97c17ae69f3521f91cc60537d122f2ab44ce24f8', 'park@gmail.com', '', 2, 1, '2015-09-14 12:56:27', '', '', '', '0000-00-00'),
(3, 'skyjosh', 'a47580fc832aea4b163303b1c7af294cb143db3c759774a61be14785fdf417b3e194e935d2ece68211bef18717fef0c694c83ccb27d4d042b33344cc3c54c95a', 'skyjosh125@gmail.com', 'skyjosh', 2, 1, '2015-09-20 09:09:35', '', '', '', '0000-00-00'),
(4, 'jerlyn', '8ebca109eab7afb4dd5c02cc5cdbf297888291328efb46888ea41617eab51dce409547ff99d2ea56b88a80fb9f38f595460794a790c829e4c73a178e06e6bdfe', 'jerlyn@gmail.com', '', 2, 1, '2015-09-25 00:46:06', '', '', '', NULL),
(5, 'maxsachchi', '4c6900773e06fc3ce1793c722af15575bc197c891062e68b85a9a8ed9f087640c1e0d934eca5043b3f8cfdb1a5bd30b1a6bb4e3cd003f0c6d2ffe17ed1a6186d', 'max99x@hotmail.com', 'maxsachchi', 2, 1, '2015-09-25 05:33:15', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE IF NOT EXISTS `website` (
  `web_id` int(11) NOT NULL,
  `web_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `web_slug` varchar(255) NOT NULL,
  `category_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`web_id`, `web_name`, `category`, `website`, `country`, `description`, `web_slug`, `category_id`, `user_id`) VALUES
(1, 'Facebook', 'Social Media', 'www.facebook.com', 'United States', 'Public social sites', 'facebook', 4, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`), ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`pep_id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `review_biz`
--
ALTER TABLE `review_biz`
  ADD PRIMARY KEY (`biz_id`);

--
-- Indexes for table `review_category`
--
ALTER TABLE `review_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `things`
--
ALTER TABLE `things`
  ADD PRIMARY KEY (`th_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`web_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `group_id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `pep_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `review_biz`
--
ALTER TABLE `review_biz`
  MODIFY `biz_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `review_category`
--
ALTER TABLE `review_category`
  MODIFY `category_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `things`
--
ALTER TABLE `things`
  MODIFY `th_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `web_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
