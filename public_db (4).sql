-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2015 at 02:18 PM
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
-- Table structure for table `attract_category_item`
--

CREATE TABLE IF NOT EXISTS `attract_category_item` (
  `attract_category_item_id` int(11) NOT NULL,
  `sort_trip` varchar(128) NOT NULL,
  `date_visit` varchar(128) NOT NULL,
  `recommend_visit` varchar(128) NOT NULL,
  `public_free` varchar(128) NOT NULL,
  `gratuity` varchar(128) NOT NULL,
  `rainy_activity` varchar(128) NOT NULL,
  `food_available` varchar(128) NOT NULL,
  `car_required` varchar(128) NOT NULL,
  `public_transpo` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `main_category_item_id` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attract_category_item`
--

INSERT INTO `attract_category_item` (`attract_category_item_id`, `sort_trip`, `date_visit`, `recommend_visit`, `public_free`, `gratuity`, `rainy_activity`, `food_available`, `car_required`, `public_transpo`, `user_id`, `main_category_item_id`) VALUES
(1, 'Family (young children)', 'June 2015', '', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `biz_category_item`
--

CREATE TABLE IF NOT EXISTS `biz_category_item` (
  `biz_category_item` int(11) NOT NULL,
  `main_category_item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sort_biz` varchar(128) NOT NULL,
  `biz_legit` varchar(128) NOT NULL,
  `biz_service` varchar(128) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biz_category_item`
--

INSERT INTO `biz_category_item` (`biz_category_item`, `main_category_item_id`, `user_id`, `sort_biz`, `biz_legit`, `biz_service`) VALUES
(13, 14, 1, 'Business', 'Yes', 'Not Sure');

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
('088eeb0a0168813a28fd03f48cfbd014ba88af2e', '::1', 1446899500, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434363839393434373b69647c733a313a2231223b757365726e616d657c733a343a226a6f7368223b656d61696c7c733a32353a226a7064656c6f7373616e746f73323540676d61696c2e636f6d223b67726f75707c733a313a2232223b),
('0a8c5dbc77fa9b435474e4b2495c180cb259ca27', '::1', 1450237170, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303233373137303b),
('0a93178f0861a2e0f90afe1fe01f62a9677ee10c', '::1', 1449546075, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393534363037353b),
('0b1a7b73104cb12d8eb682b60cfa0fc323ebbdf9', '::1', 1449917687, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393931373638313b),
('0c24b049d7431df5a9649a1069da50ee40bbf528', '::1', 1449632205, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393633323230343b),
('0de7d3ae30e6e6d6aee7acf32825bde85cd62c56', '::1', 1449314823, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393331343832333b),
('0fbf2b7d7fc9fa1ae72eb5377fefcd2209a8ea7d', '::1', 1449906557, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393930363535373b),
('157bb0c702b0d4efe8a834c62620e4070655636f', '::1', 1450158801, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303135383637393b),
('1ab032e796fcc374051f912d18b5ef2fcb69df68', '::1', 1449453149, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393435333039363b),
('1b240312c93cfd8ad87b39dc1631e2f9c3a51497', '::1', 1449982913, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393938323832333b69647c733a313a2231223b757365726e616d657c733a343a226a6f7368223b656d61696c7c733a32353a226a7064656c6f7373616e746f73323540676d61696c2e636f6d223b67726f75707c733a313a2232223b),
('1f3d25aeafd48016372f515fe5a14d336161ab2b', '::1', 1449907511, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393930373234373b),
('20dab6ce31702e1d82b0bf1813cc82547358e657', '::1', 1450084222, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303038343231393b),
('21d460b5669b08f1076cebcf48fd8576af82cb99', '::1', 1449377368, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393337373232363b),
('2291b479296134dd232aee489690482f1fbafe05', '::1', 1449370970, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393337303937303b),
('24e83740aa98e47baf5209bbe825cd780dfaaadb', '::1', 1449632941, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393633323934313b),
('2edff196ce39e9937f51333fc50f36996e1b7002', '::1', 1449396913, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393339363931323b),
('31f5cbd85833e9821fb8f53e626ee5b877a83684', '::1', 1449364912, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393336343732333b),
('32e5149fe2f168e39ab94a667b11aa0f8c3685fc', '::1', 1447050039, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434373034393834323b),
('33fe90bf1d0c39c7afb4dc37a075749cef13361b', '::1', 1450586227, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303538363232373b),
('34138cc8a992961d8d3d66c302ad4c3890814e45', '::1', 1450234756, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303233343735333b),
('3b8caef11fa3c5f69e1ee09eefb074b802c743eb', '::1', 1450093508, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303039333530363b),
('3db8958f980f6ae404825f2e6bfbb6e147d663bf', '::1', 1450081323, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303038313239323b69647c733a313a2231223b757365726e616d657c733a343a226a6f7368223b656d61696c7c733a32353a226a7064656c6f7373616e746f73323540676d61696c2e636f6d223b67726f75707c733a313a2232223b),
('451d74d24b0e7a91d18124db7cb7e4f9c629428d', '::1', 1449913505, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393931333530313b),
('483e0b2611b05e80a7d5cd4faace8d50f9d42143', '::1', 1447050341, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434373035303334313b),
('4a0ecb6669734c0a7f3d0543238511ba5b44edc7', '::1', 1449918707, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393931383730333b),
('4a8a0b61437f83d3f89795154b4c08fd00a21a57', '::1', 1449717604, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393731373532313b),
('4ca5440d6316523eac27fd4f33ee7c8357735984', '::1', 1447055070, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434373035353035333b),
('4cf3afe39e9cd3b281296e8f94d253019e898a0d', '::1', 1449721979, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393732313937313b),
('55223efe8770905d78931198a8fe28b93f3e7f1b', '::1', 1447056095, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434373035363038323b),
('58b6b261c12df0603e7dc79e832fc5188489b009', '::1', 1449144749, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393134343637333b),
('5969db28a0ccec09ec5be9ebe36649edf46ec60a', '::1', 1446961134, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434363936313034363b),
('59a3a9db5ef1a7977b53dede4be338eac490f4c2', '::1', 1450142211, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303134323231303b),
('5aaa606c37199fb2a73ddcda1c1d2050178b94fb', '::1', 1449909158, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393930393135373b),
('5c74a309dd44cb2bc4bcef3f659deecaaaa7c7e2', '::1', 1449634443, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393633343238343b),
('5fc33fcb611219788cd38af04c1cf871d586caa9', '::1', 1447056487, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434373035363437373b),
('61f1bcc36cf4f05a3616dc946cde55352f8d4ac5', '::1', 1449665917, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393636353931373b),
('6336864388672bd39f28810a682fba9f266d7782', '::1', 1447050674, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434373035303635343b),
('6472bb1cfc2e79c1b0b1c5f005b6887a88404157', '::1', 1450407575, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303430373537353b),
('65062cc0c663687c49b0d4eb1bcbadda912b6f5b', '::1', 1449484165, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393438343136353b),
('6c120d95d0adc12517a90dd96e67780c110fda85', '::1', 1449387193, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393338373139333b),
('70496e23237fa6fde550fb7fbe79ebd32e33efd0', '::1', 1449721365, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393732313334363b),
('73c287a45ac0fcf19a089fa8fe53e92063fac0e6', '::1', 1448432130, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434383433323133303b),
('75c3baacebc6297862164ebbd641c4766e49d9eb', '::1', 1450085697, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303038353636343b),
('7b50f58f8c5a42b1309f226cf2f8a114601c3234', '::1', 1450244867, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303234343836373b),
('7d73490be4fd97b28b27fd30443671e0d8da67da', '::1', 1449728559, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393732383535393b),
('80660b4e63595731ea7bdb9f2d154b05ab8bb1d7', '::1', 1449905993, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393930353939333b),
('85e162151692e8a9f82cfeebf9d494a9186f83ab', '::1', 1449147214, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393134373231343b),
('8b3b135c99a29742f5ec5f22a9da4520e7714b2c', '::1', 1450158267, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303135383039393b),
('8be17c011e57289ecd218d75e46daec249169890', '::1', 1450160585, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303136303538303b),
('902e7fc69e2c344042bb5fafee63f91586059672', '::1', 1449479228, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393437393232383b),
('903b6e74d1fb3a180c9dc708c5b7464e45a7f07c', '::1', 1450581551, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303538313531363b),
('963638e6823089a2d0704fb4b35633fa8968af20', '::1', 1449926744, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393932363734343b),
('9e316374e3758b77fbaac963ea1f12abfc35a966', '::1', 1450243444, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303234333434343b),
('9f456413c3fef6e8a6ee49955da74feb1c73118c', '::1', 1449149713, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393134393731333b),
('a0ac602552cf9ef4f811a88fc5b7f3ee138714b5', '::1', 1449932361, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393933323336313b),
('a3add307c6ecb58756a50e6246187912e91947d2', '::1', 1449395299, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393339353239393b),
('a5b4cb60e4eccfe0b7f93066c6582bdf44d49b92', '::1', 1446889792, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434363838393439323b69647c733a313a2231223b757365726e616d657c733a343a226a6f7368223b656d61696c7c733a32353a226a7064656c6f7373616e746f73323540676d61696c2e636f6d223b67726f75707c733a313a2232223b),
('a8d0db1bbd5149eb8475efa46ec8187cd3c5a386', '::1', 1448341837, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434383334313733393b),
('a9a2eb4da7078df76b6e2e35aa6ea50752815b29', '::1', 1446890136, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434363838393834333b69647c733a313a2231223b757365726e616d657c733a343a226a6f7368223b656d61696c7c733a32353a226a7064656c6f7373616e746f73323540676d61696c2e636f6d223b67726f75707c733a313a2232223b),
('ad28c0e27a241ab241c0094d281d1de00821abb0', '::1', 1449634885, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393633343838353b),
('ae1c494f4bf59a5f6368db10577d371d100f857c', '::1', 1450082642, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303038323634323b6572726f727c733a34333a22596f75206d757374204c6f6720696e206f7264657220746f2063726561746520612063617465676f72792e223b5f5f63695f766172737c613a313a7b733a353a226572726f72223b733a333a226e6577223b7d),
('afd10400fad7fefc2c160cd691c445031e738f83', '::1', 1449633485, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393633333438353b),
('bee9d038ee872f4c2bee262d39162935675b1ef1', '::1', 1448253016, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434383235323939383b),
('cc8153800004ae3fc9fb5e291b0455c455d39668', '::1', 1449401996, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393430313939363b),
('cdb7d6290a9399dcd691bc0e6e786a0694a92c4c', '::1', 1449399605, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393339393539343b),
('cf453859e1048441fe18e2bd1a27242666cb519b', '::1', 1447062495, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434373036323439343b),
('d11d597761db29f17479e4f86f8713a4ce3754d2', '::1', 1450159997, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303135393834303b),
('d2c423299b218e1aaf807eac534afd6abf594481', '::1', 1450581906, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303538313930363b),
('d4659cd769d44024a3e0b9bd1b58588fcc47e53e', '::1', 1449911333, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393931313332343b),
('d9466bb02bde97fca2dfe19045d6d78cefed9df4', '::1', 1449392943, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393339323934333b),
('db5ce4398e66570fefbf898c403453f0aaab9825', '::1', 1450233814, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303233333739383b),
('db6d52690ff51d74def2e605af53cc9d0697973e', '::1', 1449905202, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393930353135373b),
('dbc533d029784cd75999b97ba33a9790ccfcc0a1', '::1', 1450089358, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303038393335353b),
('df884734fc9e237e60716b822b8f81a491bf0d0a', '::1', 1450234484, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303233343438313b),
('e038b3c217349213ac0abf73f9fa9e4accc3abd6', '::1', 1448348544, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434383334383534343b),
('e1085e3714a31f42babf46cc19e50ae3f0c41f0a', '::1', 1446900138, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434363839393838343b),
('e23fffd4219bd62e55649f58e5b6a09976505cb3', '::1', 1449489409, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393438393430393b),
('e2f3cffc57f8dd2f91a983367b17e46e93390566', '::1', 1450094637, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303039343535333b),
('e362291aa8c8698cb2ebd7118fd146119bc80863', '::1', 1448426966, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434383432363936353b),
('e5e31bf01e3ae0e6a9bb984de644aff93d420b7d', '::1', 1448843467, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434383834333436363b),
('e7241ebf83f168cc381b1b04da9996703683996e', '::1', 1447056786, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434373035363738353b),
('e9995c35ec23dfbcddb51f983b2155fed87273f7', '::1', 1449911832, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393931313736343b),
('eb39ad322fde214105f3b9042c7012e94a89c74e', '::1', 1449719629, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393731393632393b),
('ecdbf1bc7a8576a41a44f40086b50787ff5b692e', '::1', 1449402555, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393430323535353b),
('ede4eff4ee460d2f88e05251419cd97e2bb3e871', '::1', 1449907007, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393930363933333b),
('f0bd0115fbfc1b7dd0486d7db8efbe1d64e669dd', '::1', 1449727295, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393732373239353b),
('f8fcfa706a5b5fe18510325ac631e1f81f48c617', '::1', 1450160040, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435303135393939373b),
('fa36ba973e0a629e64ff29b3d70c1dc4fc29eee3', '::1', 1446900264, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434363930303235393b),
('fcb87e6fb61cf8c463dec72bc6a59b41ac586d2c', '::1', 1449723062, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393732323932323b),
('fd3da17d30916859d9a4aa4a30ad1eafe4eceb66', '::1', 1448341723, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434383334313433343b),
('fee8d56ab9573875de64e40fdf535b034ae576ac', '::1', 1449662822, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434393636323633333b);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(128) NOT NULL,
  `contact_email` varchar(128) NOT NULL,
  `contact_subject` varchar(128) NOT NULL,
  `contact_message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`) VALUES
(1, 'josh', 'skyjosh125@yahoo.com', 'Good Site', 'Your site is good and needs to improve to make the public review more'),
(2, 'je', 'je@gmail.com', 'wew', 'asdfasdfasdfasfasfas'),
(3, 'jirrelyn', 'jerrilyn14@gmail.com', 'Thanks', 'Thanks for the site it looks good and helps us make a review');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `group_id` int(11) unsigned NOT NULL,
  `group_name` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`group_id`, `group_name`) VALUES
(1, 'admin'),
(2, 'members'),
(3, 'category');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE IF NOT EXISTS `hotels` (
  `hotel_id` int(11) NOT NULL,
  `hotel_name` varchar(128) NOT NULL,
  `country` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `phone_no` varchar(55) NOT NULL,
  `website` varchar(128) NOT NULL,
  `category_id` int(11) NOT NULL,
  `hotel_slug` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hotel_view` varchar(128) NOT NULL,
  `hotel_pool` varchar(128) NOT NULL,
  `budget_hotel` varchar(128) NOT NULL,
  `luxury_hotel` varchar(128) NOT NULL,
  `romantic_hotel` varchar(128) NOT NULL,
  `trendy_hotel` varchar(128) NOT NULL,
  `hotel_service` tinyint(1) NOT NULL,
  `hotel_sleep` tinyint(1) NOT NULL,
  `hotel_room` tinyint(1) NOT NULL,
  `hotel_nearby` varchar(128) NOT NULL,
  `hotel_room_wifi` varchar(128) NOT NULL,
  `hotel_tip` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotel_id`, `hotel_name`, `country`, `address`, `phone_no`, `website`, `category_id`, `hotel_slug`, `user_id`, `date_created`, `hotel_view`, `hotel_pool`, `budget_hotel`, `luxury_hotel`, `romantic_hotel`, `trendy_hotel`, `hotel_service`, `hotel_sleep`, `hotel_room`, `hotel_nearby`, `hotel_room_wifi`, `hotel_tip`) VALUES
(1, 'manila hotel', 'philippines', 'metro manila', '+639528584688', 'www.manilahotel.com', 6, 'manila_hotel', 1, '2015-10-16 08:52:15', '', '', '', '', '', '', 0, 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_reviews`
--

CREATE TABLE IF NOT EXISTS `hotel_reviews` (
  `hotel_rev_id` int(11) NOT NULL,
  `hotel_rate` tinyint(1) NOT NULL,
  `title` varchar(128) NOT NULL,
  `comment` text NOT NULL,
  `sort_trip` tinyint(1) NOT NULL,
  `date_travel` varchar(128) NOT NULL,
  `hotel_view` tinyint(1) NOT NULL,
  `hotel_pool` tinyint(1) NOT NULL,
  `budget_hotel` tinyint(1) NOT NULL,
  `luxury_hotel` tinyint(1) NOT NULL,
  `romantic_hotel` tinyint(1) NOT NULL,
  `trendy_hotel` tinyint(1) NOT NULL,
  `hotel_service` tinyint(1) NOT NULL,
  `hotel_sleep` tinyint(1) NOT NULL,
  `hotel_rooms` tinyint(1) NOT NULL,
  `hotel_nearby` tinyint(1) NOT NULL,
  `hotel_room_wifi` tinyint(1) NOT NULL,
  `hotel_tip` varchar(255) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_reviews`
--

INSERT INTO `hotel_reviews` (`hotel_rev_id`, `hotel_rate`, `title`, `comment`, `sort_trip`, `date_travel`, `hotel_view`, `hotel_pool`, `budget_hotel`, `luxury_hotel`, `romantic_hotel`, `trendy_hotel`, `hotel_service`, `hotel_sleep`, `hotel_rooms`, `hotel_nearby`, `hotel_room_wifi`, `hotel_tip`, `hotel_id`, `user_id`) VALUES
(1, 5, 'Affordable Hotel', 'This is a good hotel and make us fee relax with affordable foods and everything', 2, 'August 25', 1, 1, 1, 3, 1, 3, 4, 4, 4, 4, 1, 'best view in higher floor', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `item_reviews`
--

CREATE TABLE IF NOT EXISTS `item_reviews` (
  `item_review_id` int(10) unsigned NOT NULL,
  `review` text NOT NULL,
  `main_category_item_id` int(10) unsigned NOT NULL,
  `date_review` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `review_rate` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title_review` varchar(128) NOT NULL,
  `review_slug` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_reviews`
--

INSERT INTO `item_reviews` (`item_review_id`, `review`, `main_category_item_id`, `date_review`, `review_rate`, `user_id`, `title_review`, `review_slug`) VALUES
(1, 'Beautiful and historic Manila Hotel. Not the cheapest place, but the ambiance is worth it. Be prepared to brave the Manila traffic to get there. It''s right beside Manila Ocean Park and faces Manila Bay so if you get an ocean view room you get your own private sunset view.', 1, '2015-10-27 01:29:14', 4, 1, 'A beautiful old-time hotel', 'manila-hotel'),
(2, 'I liked its convenience. It is close to two major malls in Manila (Robinson''s Place and SM Manila). Also if you need to buy something (basic necessities, midnight snaks, etc.), a 24-hours convenience store is located just across the hotel.', 2, '2015-10-27 01:31:37', 4, 2, 'Good to stay in Manila', ''),
(3, 'Stayed 3 night 4 days with a reasonable price and equipped with a swimming pool. Even though the hotel is getting old, it is find to stay for a short time. The most impressive one was speed of elevator. Very fast!!', 3, '2015-10-27 01:34:11', 4, 3, 'very nice place', ''),
(4, 'Almost every year whenever my family goes to Manila, we make sure to stay here. I just love this place esp. the breakfast buffet! One thing I just want to change is the WIFI access. The rooms are pricey and you only get to have free wifi for the first three hours (Deluxe rooms).', 4, '2015-10-27 01:35:59', 4, 4, 'Beautiful hotel and nice staff', ''),
(5, 'Oh my. I remember the times we used to spend here at Harbor View. It was the best place ever. Eating exquisite and scrumptious food while the fragrance if the ocean resonates. It was badass.', 5, '2015-10-27 01:37:47', 4, 5, 'Wonderful food, Wonderful service', ''),
(6, 'A different dining experience. Great food and great ambiance! We will definitely go back and my best dinner so far was experienced at La Cocina', 6, '2015-10-27 01:39:14', 4, 2, 'Love it here and the food is delicious', ''),
(7, 'One of the best restaurants that offers good Chinese food at a reasonable price. They offer ala carte meals and/or shabu-shabu. Provides satisfactory customer service. However, I think the place still has room for improvements', 7, '2015-10-27 01:40:45', 4, 1, 'I love chinese cuisine', ''),
(8, 'Yes, the view from the terraces is great and the interior design of the lounge is well chosen.\r\nBut when the staff is performing with the same poor quality like a simple bar behind the next corner somewhere in the Philippines, then I don''t know why I should spend the money there for the average drinks.\r\nThe bar staff need five minutes and more to return the change for the cocktails, at least if you are not one of the so called VIP guests which enjoy a special service.', 8, '2015-10-27 01:42:07', 4, 2, 'Very nice and beautiful view when its night time', ''),
(9, 'solemn restaurant, i love the atmosphere, the food the service and the crew! ten thumbs up for them. a very romantic place for a very special occasion.', 9, '2015-10-27 01:42:51', 4, 4, 'Quiet, clean, tasty', ''),
(10, 'best hotel in manila because of unique old style hotel with good views near in rizal park ', 1, '2015-10-28 01:44:01', 5, 1, 'Manila best hotel', 'manila-hotel'),
(11, 'good hotel and accommodation of the staff in hotel also a good place to with a family', 2, '2015-10-28 02:29:27', 4, 1, 'best place to stay ', ''),
(12, 'good hotel to make a reserve event and other things if you have birthday celebrant here', 4, '2015-10-28 02:41:56', 4, 1, 'diamond hotel awesome', ''),
(13, 'good hotel to stay with your gf/bf they have romantic style hotel for couples like us\r\nand their staff is very helpful to us. ', 3, '2015-10-28 02:53:04', 5, 1, 'nice hotel', ''),
(19, 'the hotel is more like you came on the old manila style with give us a good ambiance', 1, '2015-10-28 03:22:54', 4, 1, 'beautiful hotel', 'manila-hotel'),
(22, 'I booked the Pan Pacific and couldn''t have made a better choice! From the airport pickup to check in all was smooth and easy. The service the staff offers is genuine and warm. They make you feel like you''re the best and only customer on site!\r\n\r\nMy room was well kept and very clean. I really enjoyed the pool area and the down time I had there. You can get a snack drinks from the bar no problem and the prices are ok. \r\n\r\nThe return back to the airport was just as flawless as the trip in. Clean car, good driver and all with a smile. ', 11, '2015-10-30 04:17:09', 4, 1, 'Comfortably Stay', 'pan-pacific-manila'),
(21, 'rizal park is the historical places of manila and good to visit in nigh time because of the colorful \r\nfountain dancing everynight.', 10, '2015-10-29 11:30:19', 4, 1, 'best attraction in manila', ''),
(23, 'facebook is one of the best social media till now and help me to reach\r\nmy old friend and other relatives ', 13, '2015-10-30 10:30:26', 5, 1, 'best social media', ''),
(24, 'They are trying to force current Windows 7 (and older) owners to take this upgrade! No matter what you do you can''t get rid of this Windows 10 "invasive" program platform! If I wanted it I would go out and purchase another computer with a factory installed copy! Some owners never even asked for it yet we find ourselves inundated with unwanted multiple attempts of installation!', 14, '2015-10-30 11:06:54', 3, 1, 'Microsoft is unbelievable', ''),
(43, 'mark was one of i see a humble billionaire that help the people connect using the social media \r\nfacebook', 15, '2015-11-02 04:26:01', 4, 1, 'Creator of Facebook', ''),
(38, 'mark was a good programmer and a CEO of facebook that create billions of user in his social sites facebook', 15, '2015-11-02 02:25:21', 5, 1, 'cool CEO', ''),
(37, 'this hotel have everything in their website including chat and other to easily check in and \r\nview the information', 12, '2015-11-02 02:01:14', 4, 1, 'good website for hotel', ''),
(36, 'new laptop was good for this new OS also of microsoft that give many features', 14, '2015-11-02 01:33:45', 4, 1, 'best OS for new laptop', ''),
(54, 'This movie is so many funny scences and i love to watch all of the scary movies from the\r\nbeginning to end.', 25, '2015-11-02 10:59:08', 4, 1, 'Funny horror movie', ''),
(55, 'this music makes me play again and again like kind of spell because its nice\r\nto hear always', 23, '2015-11-04 02:45:32', 5, 1, 'best music ', '');

-- --------------------------------------------------------

--
-- Table structure for table `main_category`
--

CREATE TABLE IF NOT EXISTS `main_category` (
  `main_category_id` int(10) unsigned NOT NULL,
  `category` varchar(175) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_category`
--

INSERT INTO `main_category` (`main_category_id`, `category`, `date_created`) VALUES
(1, 'people', '2015-10-21 10:48:13'),
(2, 'places', '2015-10-21 10:48:13'),
(3, 'business', '2015-10-21 10:48:35'),
(4, 'website', '2015-10-21 10:48:35'),
(5, 'things', '2015-10-21 10:48:52'),
(6, 'hotels', '2015-10-21 10:48:52'),
(7, 'restaurant', '2015-10-27 01:11:48'),
(8, 'attraction', '2015-10-27 01:11:48'),
(9, 'movies', '2015-10-30 02:46:09'),
(10, 'music', '2015-10-30 02:46:09'),
(11, 'sports', '2015-10-30 02:46:28'),
(12, 'gaming', '2015-10-30 02:46:28'),
(13, 'news', '2015-10-30 02:46:44'),
(14, 'others', '2015-10-30 02:46:44');

-- --------------------------------------------------------

--
-- Table structure for table `main_category_item`
--

CREATE TABLE IF NOT EXISTS `main_category_item` (
  `main_category_item_id` int(10) unsigned NOT NULL,
  `item_name` varchar(175) NOT NULL,
  `main_category_id` int(11) NOT NULL,
  `country` varchar(128) NOT NULL,
  `city` varchar(128) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_no` varchar(128) NOT NULL,
  `website_url` varchar(128) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category_info` varchar(128) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_category_item`
--

INSERT INTO `main_category_item` (`main_category_item_id`, `item_name`, `main_category_id`, `country`, `city`, `address`, `phone_no`, `website_url`, `slug`, `category_info`) VALUES
(1, 'Manila Hotel', 6, 'Philippines', 'Manila', ' Bonifacio Drive,One Rizal Park', '(02) 527 0011', 'www.manila-hotel.com.ph', 'manila-hotel', ''),
(2, 'Pearl Manila Hotel', 6, 'Philippines', 'Manila', 'Gen. Luna St, Paco, Manila, Metro ', '(02) 400 0088', 'www.pearlmanila.com.ph', 'pearl-manila-hotel', ''),
(3, 'Century Park Hotel', 6, 'Philippines', 'Manila', 'Ocampo St, Manila, Metro Manila', '(02) 528 8888', 'www.centurypark.com', 'century-park-hotel', ''),
(4, 'Diamond Hotel Philippines', 6, 'Philippines', 'Manila', 'Roxas Boulevard, Corner Dr. J. Quintos St.', '(02) 305 3000', 'www.diamondhotel.com', 'diamond-hotel-philippines', ''),
(5, 'Harbor View Restaurant', 7, 'Philippines', 'Manila', ' South Dr, Ermita, Manila, 1000', '(02) 710 0060', '', 'harbor-view-restaurant', ''),
(6, 'La Cocina de Tita Moning', 7, 'Philippines', 'Manila', 'San Rafael St, San Miguel, Manila, 1005', '(02) 734 2141', 'www.lacocinadetitamoning.com', 'la-cocina-de-tita-moning', ''),
(7, 'Golden Fortune Seafood Restaurant', 7, 'Philippines', 'Manila', ' 61F, Peace Hotel, 1283 Soler, 294 Z 28 Binondo, Manila, 1006', '(02) 244 9304', '', 'golden-fortune-seafood-restaurant', ''),
(8, '71 Gramercy', 7, 'Philippines', 'Makati', '71st Floor, Century City, Kalayaan Ave, Makati, 1210 Metro Manila', '0917 809 4093', '', '71-gramercy', ''),
(9, 'ILUSTRADO', 7, 'Philippines', 'Manila', '744 Gen. Luna St, Intramuros', '(02) 527 3674', 'www.ilustradorestaurant.com.ph', 'ilustrado', ''),
(10, 'Rizal Park', 8, 'Philippines', 'Manila', 'Roxas blvd, Ermita', '', '', 'rizal-park', ''),
(11, 'Pan Pacific Manila', 6, 'Philippines', 'Manila', ' M. Adriatico corner General Malvar Streets, Malate', '(02) 318 0788', 'www.panpacific.com', 'pan-pacific-manila', 'Luxury Hotel'),
(12, 'Big Hotel', 4, 'Philippines', 'Manila', 'Ermita, Malate', '(02) 561 7852', 'www.bighotel.com.ph', 'big-hotel', 'big hotel'),
(13, 'Facebook', 4, 'United States', 'Massachusetts', ' Cambridge', '', 'www.facebook.com', 'facebook', 'Social Media'),
(14, 'Microsoft', 3, 'United States', 'Washington', ' Redmond', '', 'www.microsoft.com', 'microsoft', 'Computer Software'),
(15, 'Mark Zuckerberg', 1, 'United States', 'California', 'Palo Alto', '', 'www.facebook.com', 'mark-zuckerberg', 'CEO and Founder of Facebook'),
(25, 'Scary Movie', 9, 'United States', '', '', '', '', 'scary-movie', 'Horror Movie'),
(23, 'Sleepwalker', 10, 'United States', '', '', '', '', 'sleepwalker', ''),
(26, 'Awesome Hotel', 6, 'Philippines', 'la union', 'san juan ', '', 'www.awesomehotel.com', 'awesome-hotel', '');

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
-- Table structure for table `movie_category_item`
--

CREATE TABLE IF NOT EXISTS `movie_category_item` (
  `movie_categ_item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `main_category_item_id` int(11) NOT NULL,
  `movie_good` varchar(128) NOT NULL,
  `movie_rated` varchar(128) NOT NULL,
  `sort_movie` varchar(128) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie_category_item`
--

INSERT INTO `movie_category_item` (`movie_categ_item_id`, `user_id`, `main_category_item_id`, `movie_good`, `movie_rated`, `sort_movie`) VALUES
(1, 1, 25, 'Yes', 'Yes', 'Comedy');

-- --------------------------------------------------------

--
-- Table structure for table `music_category_item`
--

CREATE TABLE IF NOT EXISTS `music_category_item` (
  `music_categ_item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `main_category_item_id` int(11) NOT NULL,
  `sort_music` varchar(128) NOT NULL,
  `genre_info` varchar(128) NOT NULL,
  `music_public` varchar(128) NOT NULL,
  `music_listen` varchar(128) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music_category_item`
--

INSERT INTO `music_category_item` (`music_categ_item_id`, `user_id`, `main_category_item_id`, `sort_music`, `genre_info`, `music_public`, `music_listen`) VALUES
(1, 1, 23, 'Rock', 'reggare rock', 'Not Sure', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `other_category_item`
--

CREATE TABLE IF NOT EXISTS `other_category_item` (
  `other_category_id` int(11) NOT NULL,
  `sort_trip` varchar(128) NOT NULL,
  `date_travel` varchar(128) NOT NULL,
  `hotel_view` varchar(128) NOT NULL,
  `hotel_pool` varchar(128) NOT NULL,
  `budget_hotel` varchar(128) NOT NULL,
  `luxury_hotel` varchar(128) NOT NULL,
  `romantic_hotel` varchar(128) NOT NULL,
  `trendy_hotel` varchar(128) NOT NULL,
  `hotel_service` tinyint(1) NOT NULL,
  `hotel_sleep` tinyint(1) NOT NULL,
  `hotel_rooms` tinyint(1) NOT NULL,
  `hotel_nearby` varchar(128) NOT NULL,
  `hotel_room_wifi` varchar(128) NOT NULL,
  `hotel_tip` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `main_category_item_id` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other_category_item`
--

INSERT INTO `other_category_item` (`other_category_id`, `sort_trip`, `date_travel`, `hotel_view`, `hotel_pool`, `budget_hotel`, `luxury_hotel`, `romantic_hotel`, `trendy_hotel`, `hotel_service`, `hotel_sleep`, `hotel_rooms`, `hotel_nearby`, `hotel_room_wifi`, `hotel_tip`, `user_id`, `main_category_item_id`) VALUES
(2, 'Couples', 'August 2015', 'Yes', 'Yes', 'Not Sure', 'Yes', 'Yes', 'Not Sure', 5, 4, 5, 'Landmarks', 'Yes, Free Wifi', 'best view is the top hotel rooms', 1, 1);

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
(22, 'thadsy sachchi', 'Philippines', 'Manila', 27589569, 'Calgary Court House', 'www.ThadsySachchi.com', 1, '2015-09-28 03:25:20', 'thadsy-sachchi', 5);

-- --------------------------------------------------------

--
-- Table structure for table `people_category_item`
--

CREATE TABLE IF NOT EXISTS `people_category_item` (
  `people_categ_item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `main_category_item_id` int(11) NOT NULL,
  `public_known` varchar(128) NOT NULL,
  `people_reputation` varchar(128) NOT NULL,
  `profession` varchar(128) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people_category_item`
--

INSERT INTO `people_category_item` (`people_categ_item_id`, `user_id`, `main_category_item_id`, `public_known`, `people_reputation`, `profession`) VALUES
(1, 1, 15, 'Yes', 'Yes', 'CEO'),
(2, 1, 23, 'Yes', 'Yes', 'rock');

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
-- Table structure for table `resto_category_item`
--

CREATE TABLE IF NOT EXISTS `resto_category_item` (
  `resto_category_item_id` int(11) NOT NULL,
  `sort_trip` varchar(128) NOT NULL,
  `when_eat` varchar(128) NOT NULL,
  `date_visit` varchar(128) NOT NULL,
  `resto_breakfast` varchar(128) NOT NULL,
  `resto_brunch` varchar(128) NOT NULL,
  `resto_friendly` varchar(128) NOT NULL,
  `resto_take_out` varchar(128) NOT NULL,
  `resto_wifi` varchar(128) NOT NULL,
  `resto_delivery` varchar(128) NOT NULL,
  `resto_service` tinyint(1) NOT NULL,
  `resto_food` tinyint(1) NOT NULL,
  `resto_value` tinyint(1) NOT NULL,
  `resto_expense` varchar(128) NOT NULL,
  `resto_dishes` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `main_category_item_id` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resto_category_item`
--

INSERT INTO `resto_category_item` (`resto_category_item_id`, `sort_trip`, `when_eat`, `date_visit`, `resto_breakfast`, `resto_brunch`, `resto_friendly`, `resto_take_out`, `resto_wifi`, `resto_delivery`, `resto_service`, `resto_food`, `resto_value`, `resto_expense`, `resto_dishes`, `user_id`, `main_category_item_id`) VALUES
(1, 'Family', 'Dinner', 'June 2015', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 5, 5, 4, 'Mid-range', 'sea foods', 1, 5);

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
  `review_title` varchar(128) NOT NULL,
  `hotel_rev_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `comment`, `date`, `user_id`, `category_id`, `rate`, `pep_id`, `place_id`, `biz_id`, `web_id`, `th_id`, `review_title`, `hotel_rev_id`) VALUES
(81, 'best shoes for sneaker', '2015-09-25 07:05:48', 1, 5, '4', 0, 0, 0, 0, 1, 'best shoes i wear', 0),
(86, 'the first time i came here i was thinking it was cheap and not good but when i taste\r\nit was the same when you eat on a good restaurant', '2015-09-25 08:02:41', 1, 3, '5', 0, 0, 56, 0, 0, 'Good food and cheap', 0),
(87, 'Best actress for me and very sexy ', '2015-09-25 08:09:55', 1, 3, '5', 20, 0, 0, 0, 0, 'Good Actress', 0),
(89, 'One of the best places in manila that you want to visit', '2015-09-25 08:22:52', 1, 2, '5', 0, 1, 0, 0, 0, 'Good places to visit Manila', 0),
(91, 'Facebook proves that they are the number one social sites', '2015-09-25 08:25:43', 1, 4, '5', 0, 0, 0, 1, 0, 'Best Social Sites', 0),
(93, 'Best shoes i wear even my shoes was a 5 year old already still using for my skate', '2015-09-25 08:35:46', 1, 5, '5', 0, 0, 0, 0, 1, 'good shoes for skate ', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review_category`
--

INSERT INTO `review_category` (`category_id`, `category_name`) VALUES
(1, 'people'),
(2, 'places'),
(3, 'business'),
(4, 'website'),
(5, 'things'),
(6, 'hotels');

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
  `user_address` varchar(255) NOT NULL,
  `user_country` varchar(128) NOT NULL,
  `last_name` varchar(128) NOT NULL,
  `birtday` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `firstname`, `group_id`, `status`, `date_created`, `user_address`, `user_country`, `last_name`, `birtday`) VALUES
(1, 'josh', '42f1bfafb745acedbca448b9c5711bbbf05f93bb2719810f66cd7eed22488b305cdddb9f5812bbaa245650546f06d12efe35a7126657a30705236c112e086371', 'jpdelossantos25@gmail.com', 'Joshua D.', 2, 1, '2015-09-16 03:00:43', '', '', '', '0000-00-00'),
(2, 'parkway', '7aa7aea085943d42383c38c814255fc7a863421d45d6b387d3073cf6ca0d0b2b05f876bb67933511feed3a1d97c17ae69f3521f91cc60537d122f2ab44ce24f8', 'park@gmail.com', 'park', 2, 1, '2015-09-28 09:06:47', '', '', '', '0000-00-00'),
(3, 'skyjosh', 'a47580fc832aea4b163303b1c7af294cb143db3c759774a61be14785fdf417b3e194e935d2ece68211bef18717fef0c694c83ccb27d4d042b33344cc3c54c95a', 'skyjosh125@gmail.com', 'skyjosh', 2, 1, '2015-09-20 09:09:35', '', '', '', '0000-00-00'),
(4, 'jerlyn', '8ebca109eab7afb4dd5c02cc5cdbf297888291328efb46888ea41617eab51dce409547ff99d2ea56b88a80fb9f38f595460794a790c829e4c73a178e06e6bdfe', 'jerlyn@gmail.com', 'jerrilyn', 2, 1, '2015-09-28 09:06:44', '', '', '', NULL),
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

-- --------------------------------------------------------

--
-- Table structure for table `web_category_item`
--

CREATE TABLE IF NOT EXISTS `web_category_item` (
  `web_categ_item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `main_category_item_id` int(11) NOT NULL,
  `sort_of_website` varchar(128) NOT NULL,
  `useful_site` varchar(128) NOT NULL,
  `site_visit` varchar(128) NOT NULL,
  `site_harmful` varchar(128) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_category_item`
--

INSERT INTO `web_category_item` (`web_categ_item_id`, `user_id`, `main_category_item_id`, `sort_of_website`, `useful_site`, `site_visit`, `site_harmful`) VALUES
(1, 1, 12, 'Business', 'Yes', 'Not Sure', 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attract_category_item`
--
ALTER TABLE `attract_category_item`
  ADD PRIMARY KEY (`attract_category_item_id`);

--
-- Indexes for table `biz_category_item`
--
ALTER TABLE `biz_category_item`
  ADD PRIMARY KEY (`biz_category_item`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`), ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `hotel_reviews`
--
ALTER TABLE `hotel_reviews`
  ADD PRIMARY KEY (`hotel_rev_id`);

--
-- Indexes for table `item_reviews`
--
ALTER TABLE `item_reviews`
  ADD PRIMARY KEY (`item_review_id`);

--
-- Indexes for table `main_category`
--
ALTER TABLE `main_category`
  ADD PRIMARY KEY (`main_category_id`);

--
-- Indexes for table `main_category_item`
--
ALTER TABLE `main_category_item`
  ADD PRIMARY KEY (`main_category_item_id`);

--
-- Indexes for table `movie_category_item`
--
ALTER TABLE `movie_category_item`
  ADD PRIMARY KEY (`movie_categ_item_id`);

--
-- Indexes for table `music_category_item`
--
ALTER TABLE `music_category_item`
  ADD PRIMARY KEY (`music_categ_item_id`);

--
-- Indexes for table `other_category_item`
--
ALTER TABLE `other_category_item`
  ADD PRIMARY KEY (`other_category_id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`pep_id`);

--
-- Indexes for table `people_category_item`
--
ALTER TABLE `people_category_item`
  ADD PRIMARY KEY (`people_categ_item_id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `resto_category_item`
--
ALTER TABLE `resto_category_item`
  ADD PRIMARY KEY (`resto_category_item_id`);

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
-- Indexes for table `web_category_item`
--
ALTER TABLE `web_category_item`
  ADD PRIMARY KEY (`web_categ_item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attract_category_item`
--
ALTER TABLE `attract_category_item`
  MODIFY `attract_category_item_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `biz_category_item`
--
ALTER TABLE `biz_category_item`
  MODIFY `biz_category_item` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `group_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hotel_reviews`
--
ALTER TABLE `hotel_reviews`
  MODIFY `hotel_rev_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `item_reviews`
--
ALTER TABLE `item_reviews`
  MODIFY `item_review_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `main_category`
--
ALTER TABLE `main_category`
  MODIFY `main_category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `main_category_item`
--
ALTER TABLE `main_category_item`
  MODIFY `main_category_item_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `movie_category_item`
--
ALTER TABLE `movie_category_item`
  MODIFY `movie_categ_item_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `music_category_item`
--
ALTER TABLE `music_category_item`
  MODIFY `music_categ_item_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `other_category_item`
--
ALTER TABLE `other_category_item`
  MODIFY `other_category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `pep_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `people_category_item`
--
ALTER TABLE `people_category_item`
  MODIFY `people_categ_item_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `resto_category_item`
--
ALTER TABLE `resto_category_item`
  MODIFY `resto_category_item_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
  MODIFY `category_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
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
--
-- AUTO_INCREMENT for table `web_category_item`
--
ALTER TABLE `web_category_item`
  MODIFY `web_categ_item_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
