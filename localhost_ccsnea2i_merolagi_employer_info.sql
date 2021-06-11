-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 12, 2020 at 12:39 PM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccsnea2i_merolagi_employer_info`
--
CREATE DATABASE IF NOT EXISTS `ccsnea2i_merolagi_employer_info` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `ccsnea2i_merolagi_employer_info`;

-- --------------------------------------------------------

--
-- Table structure for table `corporate_employer_list`
--

DROP TABLE IF EXISTS `corporate_employer_list`;
CREATE TABLE `corporate_employer_list` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `uploadedDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `corporate_employer_list`
--

INSERT INTO `corporate_employer_list` (`id`, `email`, `uploadedDate`) VALUES
(13, 'siddharthaghimire@gmail.com', '2020/09/16'),
(14, 'rollaside.company@gmail.com', '2020/09/16'),
(15, 'girban@hotmail.com', '2020/09/16'),
(16, '', '2020/09/16'),
(17, '', '2020/09/19'),
(18, 'Sarojgaming369@gmail.com', '2020/09/20'),
(19, 'Sarojgaming369@gmail.com', '2020/09/20'),
(20, 'Sarojgaming369@gmail.com', '2020/09/20'),
(21, 'gurungrajendra517@gmail.com', '2020/09/20'),
(22, 'gurungrajendra517@gmail.com', '2020/09/20'),
(23, 'nogomom33@gmail.com', '2020/09/20');

-- --------------------------------------------------------

--
-- Table structure for table `employer_address_info`
--

DROP TABLE IF EXISTS `employer_address_info`;
CREATE TABLE `employer_address_info` (
  `id` int(11) NOT NULL,
  `uniqueUserId` varchar(255) NOT NULL,
  `houseNo` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zipCode` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `createdDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer_address_info`
--

INSERT INTO `employer_address_info` (`id`, `uniqueUserId`, `houseNo`, `state`, `city`, `zipCode`, `street`, `country`, `createdDate`) VALUES
(1, '819a27b8e19bb3b9994799ce820c30405f59af45418d8', '', '', '', '', '', '', '2020/09/10'),
(2, 'd2a2ee3e4a2f450824d71597ed3c259a5f5a3f04f402d', '', '', '', '', '', '', '2020/09/10'),
(3, '7834b1855bfb8c35a97793a3c4b1dbd55f5db7aa6878f', '', '', '', '', '', '', '2020/09/13'),
(4, 'b1f864a31dbc192717b6053a996b15fb5f5dc5b9e0430', '', '', '', '', '', '', '2020/09/13'),
(5, 'df35057defec573b5a265deb42a0445e5f604e10db56b', '', '', '', '', '', '', '2020/09/15'),
(6, '3128ac75ca4a9d8214537cbd360108c35f60b68b846b4', '', '', '', '', '', '', '2020/09/15'),
(7, '8a2e58e9a42703eeb49003ead40c2a175f61cf93e1d41', '', '', '', '', '', '', '2020/09/16'),
(8, '12ec7199f1bae7cc88a4bac3259963065f61dda63b226', '', '', '', '', '', '', '2020/09/16'),
(9, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '68', 'Bagmati', 'Kathmandu', '44600', 'New Baneshwor, Kathmandu', 'Nepal', '2020/09/18'),
(10, '6c3a983fd4956355098469963292a0975f64cd2eba3d4', '', '', 'New Banrshwor', '', '', '', '2020/09/18'),
(11, 'f0a5c9ce346782b9981209a0c240589e5f65b41737517', '', '', '', '', '', '', '2020/09/19'),
(12, 'c5971820352b70d878111c1a69004a875f65c12844b4f', '', '', '', '', '', '', '2020/09/19'),
(13, '84925e26b1728ba1e077e8de5bf0a0735f66be58271de', '', '', '', '', '', '', '2020/09/20'),
(14, '644708cfb2a5888b7cf816a510f6438f5f66d3f30441b', '', '', '', '', '', '', '2020/09/20'),
(15, '37eed8c5fdca6de7cfe39fd70bec3aa25f66dadbaad46', '', '', '', '', '', '', '2020/09/20'),
(16, '5dd7ee2f679b67c539c53ca86f45fda25f670cd3c6ba4', '', '', '', '', '', '', '2020/09/20'),
(17, 'dd2abff7c8944dcdc5e117a24071ff0d5f671e69e4d7a', '', '', '', '', '', '', '2020/09/20'),
(18, 'db27f1958900c7de58afabf6301cf6585f673dc5e30cb', '', '', '', '', '', '', '2020/09/20'),
(19, 'b32575abf2cc139f6815de1d148b94625f6989678cc16', '**', '3', 'Kathmandu', '44600', 'Minbhawan', 'Nepal', '2020/09/22'),
(20, '075a0afd4daf0c4a0e09a76f63111eca5f69e8804c1d0', '', '', '', '', '', '', '2020/09/22'),
(21, '5d8d62ad87153c2ac7ebed99940e272c5f6acbcf5ae59', '', '', '', '', '', '', '2020/09/23'),
(22, '0f09efde65b1c704fb2678fe578b9dad5f6ec9a9493a2', '', '', '', '', '', '', '2020/09/26'),
(23, '034e640cd4dbdb1830ea032bd60334735f6ff8c1d787d', '', '', '', '', '', '', '2020/09/27'),
(24, '034e640cd4dbdb1830ea032bd60334735f6ff8c1d7759', '', '', '', '', '', '', '2020/09/27'),
(25, '5eaeec90712692a0017456e5caf5a7325f705af332bf0', '', 'Bagmati', 'Kathmandu', '44600', 'New Baneshwor, Kathmandu', 'Nepal', '2020/09/27'),
(26, '1288ec05a67769b1c4449508b17d17665f709110e4102', '', '', '', '', '', '', '2020/09/27'),
(27, 'cd49fd423a632e106fdefe2105840e035f71bc54c417c', '', '', '', '', '', '', '2020/09/28'),
(28, '6a7e9d0fc841f346a750ad37008d00155f71e01ea4a1a', '', '', '', '', '', '', '2020/09/28'),
(29, '428123c67abd70bcaaa012cbaf06acd85f71e6c2ed382', '', '', '', '', '', '', '2020/09/28'),
(30, '1891c76b9ea8e480ce55cefcf16d323a5f76f458b96ee', '', '', '', '', '', '', '2020/10/02'),
(31, 'e9ec8053cd720481c44fb398e90092965f7dabe71a66c', '', '', '', '', '', '', '2020/10/07'),
(32, '6bb5415faea62244a6d981d5e97be6555f81d2b71336d', '', '', '', '', '', '', '2020/10/10'),
(33, 'a969d91335518c7c462f6c7b3f2a66095f81d3e9ab8f1', '', '', '', '', '', '', '2020/10/10'),
(34, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', '', 'Bagmati', 'Bhaktapur', '44600', 'Balkot', 'Nepal', '2020/10/11');

-- --------------------------------------------------------

--
-- Table structure for table `employer_company_info`
--

DROP TABLE IF EXISTS `employer_company_info`;
CREATE TABLE `employer_company_info` (
  `id` int(11) NOT NULL,
  `uniqueUserId` varchar(255) NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `alternateWebsite` varchar(255) NOT NULL,
  `createdDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer_company_info`
--

INSERT INTO `employer_company_info` (`id`, `uniqueUserId`, `companyName`, `designation`, `website`, `alternateWebsite`, `createdDate`) VALUES
(1, '819a27b8e19bb3b9994799ce820c30405f59af45418d8', 'Merolagi admin', '', '', '', '2020/09/10'),
(2, 'd2a2ee3e4a2f450824d71597ed3c259a5f5a3f04f402d', '', '', '', '', '2020/09/10'),
(3, '7834b1855bfb8c35a97793a3c4b1dbd55f5db7aa6878f', '', '', '', '', '2020/09/13'),
(4, 'b1f864a31dbc192717b6053a996b15fb5f5dc5b9e0430', '', '', '', '', '2020/09/13'),
(5, 'df35057defec573b5a265deb42a0445e5f604e10db56b', '', '', '', '', '2020/09/15'),
(6, '3128ac75ca4a9d8214537cbd360108c35f60b68b846b4', '', '', '', '', '2020/09/15'),
(7, '8a2e58e9a42703eeb49003ead40c2a175f61cf93e1d41', '', '', '', '', '2020/09/16'),
(8, '12ec7199f1bae7cc88a4bac3259963065f61dda63b226', '', '', '', '', '2020/09/16'),
(9, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'CCS NEPAL', 'CEO', 'ccsnepal.com', '', '2020/09/18'),
(10, '6c3a983fd4956355098469963292a0975f64cd2eba3d4', '', '', '', '', '2020/09/18'),
(11, 'f0a5c9ce346782b9981209a0c240589e5f65b41737517', '', '', '', '', '2020/09/19'),
(12, 'c5971820352b70d878111c1a69004a875f65c12844b4f', '', '', '', '', '2020/09/19'),
(13, '84925e26b1728ba1e077e8de5bf0a0735f66be58271de', '', '', '', '', '2020/09/20'),
(14, '644708cfb2a5888b7cf816a510f6438f5f66d3f30441b', '', '', '', '', '2020/09/20'),
(15, '37eed8c5fdca6de7cfe39fd70bec3aa25f66dadbaad46', '', '', '', '', '2020/09/20'),
(16, '5dd7ee2f679b67c539c53ca86f45fda25f670cd3c6ba4', '', '', '', '', '2020/09/20'),
(17, 'dd2abff7c8944dcdc5e117a24071ff0d5f671e69e4d7a', '', '', '', '', '2020/09/20'),
(18, 'db27f1958900c7de58afabf6301cf6585f673dc5e30cb', '', '', '', '', '2020/09/20'),
(19, 'b32575abf2cc139f6815de1d148b94625f6989678cc16', 'Digital Payment Services', 'CEO', 'Coming Soon', '', '2020/09/22'),
(20, '075a0afd4daf0c4a0e09a76f63111eca5f69e8804c1d0', '', '', '', '', '2020/09/22'),
(21, '5d8d62ad87153c2ac7ebed99940e272c5f6acbcf5ae59', '', '', '', '', '2020/09/23'),
(22, '0f09efde65b1c704fb2678fe578b9dad5f6ec9a9493a2', '', '', '', '', '2020/09/26'),
(23, '034e640cd4dbdb1830ea032bd60334735f6ff8c1d787d', '', '', '', '', '2020/09/27'),
(24, '034e640cd4dbdb1830ea032bd60334735f6ff8c1d7759', '', '', '', '', '2020/09/27'),
(25, '5eaeec90712692a0017456e5caf5a7325f705af332bf0', 'Merolagi.com', 'CEO', 'merolagi.com', '', '2020/09/27'),
(26, '1288ec05a67769b1c4449508b17d17665f709110e4102', '', '', '', '', '2020/09/27'),
(27, 'cd49fd423a632e106fdefe2105840e035f71bc54c417c', '', '', '', '', '2020/09/28'),
(28, '6a7e9d0fc841f346a750ad37008d00155f71e01ea4a1a', '', '', '', '', '2020/09/28'),
(29, '428123c67abd70bcaaa012cbaf06acd85f71e6c2ed382', '', '', '', '', '2020/09/28'),
(30, '1891c76b9ea8e480ce55cefcf16d323a5f76f458b96ee', '', '', '', '', '2020/10/02'),
(31, 'e9ec8053cd720481c44fb398e90092965f7dabe71a66c', '', '', '', '', '2020/10/07'),
(32, '6bb5415faea62244a6d981d5e97be6555f81d2b71336d', '', '', '', '', '2020/10/10'),
(33, 'a969d91335518c7c462f6c7b3f2a66095f81d3e9ab8f1', '', '', '', '', '2020/10/10'),
(34, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'Three Brother Home Service Center', '', ' threebrothersnp.com', '', '2020/10/11');

-- --------------------------------------------------------

--
-- Table structure for table `employer_profile`
--

DROP TABLE IF EXISTS `employer_profile`;
CREATE TABLE `employer_profile` (
  `id` int(11) NOT NULL,
  `uniqueUserId` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alternateEmail` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `alternateMobile` varchar(255) NOT NULL,
  `profilePhoto` varchar(255) NOT NULL,
  `createdDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer_profile`
--

INSERT INTO `employer_profile` (`id`, `uniqueUserId`, `name`, `alternateEmail`, `mobile`, `alternateMobile`, `profilePhoto`, `createdDate`) VALUES
(1, '819a27b8e19bb3b9994799ce820c30405f59af45418d8', 'Siddhartha Ghimire', '', '', '', '', '2020/09/10'),
(2, 'd2a2ee3e4a2f450824d71597ed3c259a5f5a3f04f402d', '', '', '', '', '', '2020/09/10'),
(3, '7834b1855bfb8c35a97793a3c4b1dbd55f5db7aa6878f', '', '', '', '', '', '2020/09/13'),
(4, 'b1f864a31dbc192717b6053a996b15fb5f5dc5b9e0430', '', '', '', '', '', '2020/09/13'),
(5, 'df35057defec573b5a265deb42a0445e5f604e10db56b', '', '', '', '', '', '2020/09/15'),
(6, '3128ac75ca4a9d8214537cbd360108c35f60b68b846b4', '', '', '', '', '', '2020/09/15'),
(7, '8a2e58e9a42703eeb49003ead40c2a175f61cf93e1d41', '', '', '', '', '', '2020/09/16'),
(8, '12ec7199f1bae7cc88a4bac3259963065f61dda63b226', '', '', '', '', '', '2020/09/16'),
(9, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'CCS NEPAL', '', '01-4104194', '', 'ded32878ed02cb2bca740951473be53b5f64ba367fa51.png', '2020/09/18'),
(10, '6c3a983fd4956355098469963292a0975f64cd2eba3d4', 'Abhinav Hingmang', '', '9860980565', '985100517+', '', '2020/09/18'),
(11, 'f0a5c9ce346782b9981209a0c240589e5f65b41737517', '', '', '', '', '', '2020/09/19'),
(12, 'c5971820352b70d878111c1a69004a875f65c12844b4f', '', '', '', '', '', '2020/09/19'),
(13, '84925e26b1728ba1e077e8de5bf0a0735f66be58271de', '', '', '', '', '', '2020/09/20'),
(14, '644708cfb2a5888b7cf816a510f6438f5f66d3f30441b', '', '', '', '', '', '2020/09/20'),
(15, '37eed8c5fdca6de7cfe39fd70bec3aa25f66dadbaad46', '', '', '', '', '', '2020/09/20'),
(16, '5dd7ee2f679b67c539c53ca86f45fda25f670cd3c6ba4', 'Anish Newa', '', '9847302122', '', '', '2020/09/20'),
(17, 'dd2abff7c8944dcdc5e117a24071ff0d5f671e69e4d7a', '', '', '', '', '', '2020/09/20'),
(18, 'db27f1958900c7de58afabf6301cf6585f673dc5e30cb', '', '', '', '', '', '2020/09/20'),
(19, 'b32575abf2cc139f6815de1d148b94625f6989678cc16', 'Digital Payment Services', '', '9849******', '', 'a3b2ec37c1c2824f5a498d4be979ef135f698baf5c41e.jpg', '2020/09/22'),
(20, '075a0afd4daf0c4a0e09a76f63111eca5f69e8804c1d0', '', '', '', '', '', '2020/09/22'),
(21, '5d8d62ad87153c2ac7ebed99940e272c5f6acbcf5ae59', 'Swastik Trade Link', '', '9851057149', '9841872514', '', '2020/09/23'),
(22, '0f09efde65b1c704fb2678fe578b9dad5f6ec9a9493a2', '', '', '', '', '', '2020/09/26'),
(23, '034e640cd4dbdb1830ea032bd60334735f6ff8c1d787d', '', '', '', '', '', '2020/09/27'),
(24, '034e640cd4dbdb1830ea032bd60334735f6ff8c1d7759', '', '', '', '', '', '2020/09/27'),
(25, '5eaeec90712692a0017456e5caf5a7325f705af332bf0', 'Merolagi.com', '', '9841360149', '', '46b6b757772b30e76073fbeede4025115f705bf616613.jpg', '2020/09/27'),
(26, '1288ec05a67769b1c4449508b17d17665f709110e4102', '', '', '', '', '', '2020/09/27'),
(27, 'cd49fd423a632e106fdefe2105840e035f71bc54c417c', '', '', '', '', '', '2020/09/28'),
(28, '6a7e9d0fc841f346a750ad37008d00155f71e01ea4a1a', '', '', '', '', '', '2020/09/28'),
(29, '428123c67abd70bcaaa012cbaf06acd85f71e6c2ed382', '', '', '', '', '', '2020/09/28'),
(30, '1891c76b9ea8e480ce55cefcf16d323a5f76f458b96ee', '', '', '', '', '', '2020/10/02'),
(31, 'e9ec8053cd720481c44fb398e90092965f7dabe71a66c', '', '', '', '', '', '2020/10/07'),
(32, '6bb5415faea62244a6d981d5e97be6555f81d2b71336d', 'Krish Aryal', '', '9813413653', '', '', '2020/10/10'),
(33, 'a969d91335518c7c462f6c7b3f2a66095f81d3e9ab8f1', '', '', '', '', '', '2020/10/10'),
(34, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'Three Brother Home Service Center', '', '9845768927', '9851192248', '918a26675c4ab2c702670efa5e31b14c5f826eb5d8d5b.png', '2020/10/11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `corporate_employer_list`
--
ALTER TABLE `corporate_employer_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer_address_info`
--
ALTER TABLE `employer_address_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer_company_info`
--
ALTER TABLE `employer_company_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer_profile`
--
ALTER TABLE `employer_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `corporate_employer_list`
--
ALTER TABLE `corporate_employer_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `employer_address_info`
--
ALTER TABLE `employer_address_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `employer_company_info`
--
ALTER TABLE `employer_company_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `employer_profile`
--
ALTER TABLE `employer_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
