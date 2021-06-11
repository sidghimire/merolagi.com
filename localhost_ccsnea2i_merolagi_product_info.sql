--
-- Database: `ccsnea2i_merolagi_product_info`
--
CREATE DATABASE IF NOT EXISTS `ccsnea2i_merolagi_product_info` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `ccsnea2i_merolagi_product_info`;

-- --------------------------------------------------------

--
-- Table structure for table `product_features`
--

DROP TABLE IF EXISTS `product_features`;
CREATE TABLE `product_features` (
  `id` int(11) NOT NULL,
  `employerUniqueId` varchar(255) NOT NULL,
  `productUniqueId` varchar(255) NOT NULL,
  `productFeature` varchar(255) NOT NULL,
  `productFeatureValue` varchar(255) NOT NULL,
  `createdDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_features`
--

INSERT INTO `product_features` (`id`, `employerUniqueId`, `productUniqueId`, `productFeature`, `productFeatureValue`, `createdDate`) VALUES
(9, '7834b1855bfb8c35a97793a3c4b1dbd55f5db7aa6878f', 'b3627bffddc85f986b11a8cab238dad05f5db84b9bad0', 'Is It Customized', 'Full', '2020/09/13'),
(23, '819a27b8e19bb3b9994799ce820c30405f59af45418d8', '330051db28ca2cddafb01a37e4daca955f59c9211627b', 'Color', 'red', '2020/09/14'),
(24, '819a27b8e19bb3b9994799ce820c30405f59af45418d8', '330051db28ca2cddafb01a37e4daca955f59c9211627b', 'Size', 'Large', '2020/09/14'),
(25, '819a27b8e19bb3b9994799ce820c30405f59af45418d8', '330051db28ca2cddafb01a37e4daca955f59c9211627b', 'Stripe', 'Yes', '2020/09/14'),
(26, '819a27b8e19bb3b9994799ce820c30405f59af45418d8', '330051db28ca2cddafb01a37e4daca955f59c9211627b', 'Color Available', 'Brown', '2020/09/14'),
(27, '819a27b8e19bb3b9994799ce820c30405f59af45418d8', '330051db28ca2cddafb01a37e4daca955f59c9211627b', 'Made In', 'Palpa', '2020/09/14'),
(28, '819a27b8e19bb3b9994799ce820c30405f59af45418d8', '330051db28ca2cddafb01a37e4daca955f59c9211627b', 'Brand', 'Palpali', '2020/09/14'),
(29, '7834b1855bfb8c35a97793a3c4b1dbd55f5db7aa6878f', '8ce0c40322f792483dff904150a932b95f5f4f9b2f4b8', '', '', '2020/09/15'),
(30, '819a27b8e19bb3b9994799ce820c30405f59af45418d8', 'c5ca5075bd9f44ffb5e77cad466fd05d5f60bafb6289d', 'Is It Customized', '', '2020/09/15'),
(31, '819a27b8e19bb3b9994799ce820c30405f59af45418d8', '8e9d4c22aaa0f0fde75c6e5667e43e7b5f60d327f1e78', 'Color', 'Grey', '2020/09/15'),
(32, '819a27b8e19bb3b9994799ce820c30405f59af45418d8', '8e9d4c22aaa0f0fde75c6e5667e43e7b5f60d327f1e78', 'Brand', 'KN95', '2020/09/15'),
(33, '819a27b8e19bb3b9994799ce820c30405f59af45418d8', '8e9d4c22aaa0f0fde75c6e5667e43e7b5f60d327f1e78', 'Size', 'Large', '2020/09/15'),
(34, '819a27b8e19bb3b9994799ce820c30405f59af45418d8', '8e9d4c22aaa0f0fde75c6e5667e43e7b5f60d327f1e78', 'Size Dimension', 'Large', '2020/09/15'),
(35, '819a27b8e19bb3b9994799ce820c30405f59af45418d8', '8e9d4c22aaa0f0fde75c6e5667e43e7b5f60d327f1e78', 'Color Available', 'Blue', '2020/09/15'),
(37, '12ec7199f1bae7cc88a4bac3259963065f61dda63b226', '011996a9a870fb7cda6103394b96301f5f61e0dbe47ab', '', '', '2020/09/16'),
(38, '819a27b8e19bb3b9994799ce820c30405f59af45418d8', '4a7f624d10109a859271edc131c6f3095f5c3f0c23d50', 'Size', '३ केजी', '2020/09/18'),
(39, '819a27b8e19bb3b9994799ce820c30405f59af45418d8', '4a7f624d10109a859271edc131c6f3095f5c3f0c23d50', 'Color Available', 'रातो', '2020/09/18'),
(48, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '4b5d3e47ec496c358962be9a89e323825f698423c1ada', 'Brand', 'Google Gift Card', '2020/09/22'),
(49, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '4b5d3e47ec496c358962be9a89e323825f698423c1ada', 'Size', '100$', '2020/09/22'),
(58, 'b32575abf2cc139f6815de1d148b94625f6989678cc16', 'c2f4f80fb084fb73f04f810e3398fd775f699a96d6b5b', 'Brand', 'XBOX', '2020/09/22'),
(59, 'b32575abf2cc139f6815de1d148b94625f6989678cc16', 'c2f4f80fb084fb73f04f810e3398fd775f699a96d6b5b', 'Size', '$25', '2020/09/22'),
(62, 'b32575abf2cc139f6815de1d148b94625f6989678cc16', '61a3e2eee8204d36c53f8c69203e38ff5f698c2b6465a', 'Brand', 'Google Gift Card', '2020/09/22'),
(63, 'b32575abf2cc139f6815de1d148b94625f6989678cc16', '61a3e2eee8204d36c53f8c69203e38ff5f698c2b6465a', 'Size', '100$', '2020/09/22'),
(64, 'b32575abf2cc139f6815de1d148b94625f6989678cc16', '2ff96b4431829a57f74a42c31a6fde3e5f69b1a15471b', 'Brand', 'Google Gift Card', '2020/09/22'),
(65, 'b32575abf2cc139f6815de1d148b94625f6989678cc16', '2ff96b4431829a57f74a42c31a6fde3e5f69b1a15471b', 'Size', '50$', '2020/09/22'),
(66, '5d8d62ad87153c2ac7ebed99940e272c5f6acbcf5ae59', '3c6d8db629d361c52cc2ecbe953375e95f6af8516af37', 'Size Dimension', '', '2020/09/23'),
(70, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'd40a910f4e1d72dc6ce57175e8e64c235f8270beb91f2', 'Volume', '12 Litres', '2020/10/11'),
(71, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'd40a910f4e1d72dc6ce57175e8e64c235f8270beb91f2', 'Contact Number', '9841892248', '2020/10/11'),
(72, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'd40a910f4e1d72dc6ce57175e8e64c235f8270beb91f2', 'Brand', 'Neo', '2020/10/11'),
(111, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', '5ce056cbed180f455d18fd3b385302b35f828837b7405', 'Metal', 'Stain less steel', '2020/10/11'),
(112, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', '5ce056cbed180f455d18fd3b385302b35f828837b7405', 'Capacity 250 liters', 'Rs. 38000', '2020/10/11'),
(113, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', '5ce056cbed180f455d18fd3b385302b35f828837b7405', 'Capacity 300 liters', 'Rs. 48000', '2020/10/11'),
(114, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', '5ce056cbed180f455d18fd3b385302b35f828837b7405', 'Guarantee', '1 Year', '2020/10/11'),
(115, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', '5ce056cbed180f455d18fd3b385302b35f828837b7405', 'Warranty', '7 Years', '2020/10/11'),
(116, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'a645d0e5a7f4ce68c8d7e11160a1ae835f82722f88d8f', 'Volume', '12 Litres', '2020/10/11'),
(117, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'a645d0e5a7f4ce68c8d7e11160a1ae835f82722f88d8f', 'Price', '18000', '2020/10/11'),
(118, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'a645d0e5a7f4ce68c8d7e11160a1ae835f82722f88d8f', 'Brand', 'Nexus Diamond', '2020/10/11'),
(119, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'a645d0e5a7f4ce68c8d7e11160a1ae835f82722f88d8f', 'Purifying Technology', 'RO + UV + UF + TDS', '2020/10/11'),
(120, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'a645d0e5a7f4ce68c8d7e11160a1ae835f82722f88d8f', 'In The Box', 'Main unit with all the accessories with manual', '2020/10/11'),
(121, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', '5a42152cda0530a081a95650c53a25335f8273d3d257f', 'Type', '8 mm thickness ', '2020/10/11'),
(122, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', '5a42152cda0530a081a95650c53a25335f8273d3d257f', 'Price', 'Rs.120', '2020/10/11'),
(123, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', '5a42152cda0530a081a95650c53a25335f8273d3d257f', 'Type', '12 mm thickness', '2020/10/11'),
(124, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', '5a42152cda0530a081a95650c53a25335f8273d3d257f', 'Price', 'Rs. 170', '2020/10/11'),
(125, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', '5a42152cda0530a081a95650c53a25335f8273d3d257f', 'Contact ', '9841892248', '2020/10/11'),
(126, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', '5a42152cda0530a081a95650c53a25335f8273d3d257f', 'Alternate Contact', '9851192248', '2020/10/11'),
(127, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'f6e34653ede374fc81cb606c44682c805f8275b79c908', 'Digital with button', 'Rs. 14000', '2020/10/11'),
(128, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'f6e34653ede374fc81cb606c44682c805f8275b79c908', 'Only button', 'Rs. 13000', '2020/10/11'),
(129, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'f6e34653ede374fc81cb606c44682c805f8275b79c908', 'Waranty', '2 Years', '2020/10/11'),
(130, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'f6e34653ede374fc81cb606c44682c805f8275b79c908', 'Contact', '9841892248 ', '2020/10/11'),
(131, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'f6e34653ede374fc81cb606c44682c805f8275b79c908', '', '', '2020/10/11'),
(132, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', '435f8035a5e34810a5b8874c4a1da95f5f8278ab8a6a3', 'Volume ', '12 Litres', '2020/10/11'),
(133, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', '435f8035a5e34810a5b8874c4a1da95f5f8278ab8a6a3', 'Water filtering per. hours ', '14 - 15 liters', '2020/10/11'),
(134, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', '435f8035a5e34810a5b8874c4a1da95f5f8278ab8a6a3', 'Service charge', 'Free', '2020/10/11'),
(135, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', '435f8035a5e34810a5b8874c4a1da95f5f8278ab8a6a3', 'Waranty', '1 Year', '2020/10/11'),
(136, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', '435f8035a5e34810a5b8874c4a1da95f5f8278ab8a6a3', 'Life Time Service ', 'Free', '2020/10/11'),
(137, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', '435f8035a5e34810a5b8874c4a1da95f5f8278ab8a6a3', 'Contact', '9841892248', '2020/10/11'),
(138, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', '99521f9fabfbfd26292af99100c895385f8279cda24a0', 'Capacity', '8 Litres', '2020/10/11'),
(139, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', '99521f9fabfbfd26292af99100c895385f8279cda24a0', 'Price', '16000', '2020/10/11'),
(140, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', '99521f9fabfbfd26292af99100c895385f8279cda24a0', 'Contact', '9841892248', '2020/10/11'),
(141, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', '99521f9fabfbfd26292af99100c895385f8279cda24a0', 'Alternate Contact', '9851192248', '2020/10/11'),
(142, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'e14311763fd078df5af68e81076fd59d5f8286f300d30', 'Brand', 'Nexus', '2020/10/11'),
(143, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'e14311763fd078df5af68e81076fd59d5f8286f300d30', 'Volume', '18 Litres', '2020/10/11'),
(144, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'e14311763fd078df5af68e81076fd59d5f8286f300d30', 'Name', 'Skoda', '2020/10/11'),
(145, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'e14311763fd078df5af68e81076fd59d5f8286f300d30', 'Service Charge', 'Free', '2020/10/11'),
(146, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'e14311763fd078df5af68e81076fd59d5f8286f300d30', 'Guarantee', '1 Year', '2020/10/11'),
(147, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'e14311763fd078df5af68e81076fd59d5f8286f300d30', 'Contact', '9841892248', '2020/10/11');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

DROP TABLE IF EXISTS `product_images`;
CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `employerUniqueId` varchar(255) NOT NULL,
  `productUniqueId` varchar(255) NOT NULL,
  `imageName` varchar(255) NOT NULL,
  `createdDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `employerUniqueId`, `productUniqueId`, `imageName`, `createdDate`) VALUES
(1, '819a27b8e19bb3b9994799ce820c30405f59af45418d8', '330051db28ca2cddafb01a37e4daca955f59c9211627b', '330051db28ca2cddafb01a37e4daca955f59c92118b7a.jpg', '2020/09/10'),
(2, '819a27b8e19bb3b9994799ce820c30405f59af45418d8', '4a7f624d10109a859271edc131c6f3095f5c3f0c23d50', '4a7f624d10109a859271edc131c6f3095f5c3f0c254c5.jpg', '2020/09/12'),
(3, '7834b1855bfb8c35a97793a3c4b1dbd55f5db7aa6878f', 'b3627bffddc85f986b11a8cab238dad05f5db84b9bad0', 'b3627bffddc85f986b11a8cab238dad05f5db84b9d9b1.jpg', '2020/09/13'),
(4, '7834b1855bfb8c35a97793a3c4b1dbd55f5db7aa6878f', '8ce0c40322f792483dff904150a932b95f5f4f9b2f4b8', '8ce0c40322f792483dff904150a932b95f5f4f9b30570.bmp', '2020/09/14'),
(6, '819a27b8e19bb3b9994799ce820c30405f59af45418d8', 'c5ca5075bd9f44ffb5e77cad466fd05d5f60bafb6289d', 'c5ca5075bd9f44ffb5e77cad466fd05d5f60bafb6dceb.jpg', '2020/09/15'),
(7, '819a27b8e19bb3b9994799ce820c30405f59af45418d8', '8e9d4c22aaa0f0fde75c6e5667e43e7b5f60d327f1e78', '8e9d4c22aaa0f0fde75c6e5667e43e7b5f60d327f36fc.jpg', '2020/09/15'),
(8, '12ec7199f1bae7cc88a4bac3259963065f61dda63b226', '011996a9a870fb7cda6103394b96301f5f61e0dbe47ab', '011996a9a870fb7cda6103394b96301f5f61e0dbe5da9.jpg', '2020/09/16'),
(10, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '4b5d3e47ec496c358962be9a89e323825f698423c1ada', '7fd2e62730b6e1c5583169d3379090075f698569ee148.jpg', '2020/09/22'),
(11, 'b32575abf2cc139f6815de1d148b94625f6989678cc16', '61a3e2eee8204d36c53f8c69203e38ff5f698c2b6465a', '61a3e2eee8204d36c53f8c69203e38ff5f698c2b65955.jpg', '2020/09/22'),
(12, 'b32575abf2cc139f6815de1d148b94625f6989678cc16', 'c2f4f80fb084fb73f04f810e3398fd775f699a96d6b5b', 'c2f4f80fb084fb73f04f810e3398fd775f699a96d7f50.jpg', '2020/09/22'),
(13, 'b32575abf2cc139f6815de1d148b94625f6989678cc16', '2ff96b4431829a57f74a42c31a6fde3e5f69b1a15471b', '2ff96b4431829a57f74a42c31a6fde3e5f69b1a155fa5.jpeg', '2020/09/22'),
(14, '5d8d62ad87153c2ac7ebed99940e272c5f6acbcf5ae59', '3c6d8db629d361c52cc2ecbe953375e95f6af8516af37', '3c6d8db629d361c52cc2ecbe953375e95f6af8516d340.jpg', '2020/09/23'),
(15, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'd40a910f4e1d72dc6ce57175e8e64c235f8270beb91f2', 'd40a910f4e1d72dc6ce57175e8e64c235f8270bebb0a1.jpg', '2020/10/11'),
(16, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'd40a910f4e1d72dc6ce57175e8e64c235f8270beb91f2', 'd40a910f4e1d72dc6ce57175e8e64c235f8270bebddfc.jpg', '2020/10/11'),
(17, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'd40a910f4e1d72dc6ce57175e8e64c235f8270beb91f2', 'd40a910f4e1d72dc6ce57175e8e64c235f8270bebe91d.jpg', '2020/10/11'),
(18, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'a645d0e5a7f4ce68c8d7e11160a1ae835f82722f88d8f', 'a645d0e5a7f4ce68c8d7e11160a1ae835f82722f8a7bf.jpg', '2020/10/11'),
(19, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'a645d0e5a7f4ce68c8d7e11160a1ae835f82722f88d8f', 'a645d0e5a7f4ce68c8d7e11160a1ae835f82722f8b95c.png', '2020/10/11'),
(20, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', '5a42152cda0530a081a95650c53a25335f8273d3d257f', '5a42152cda0530a081a95650c53a25335f8273d3d443a.jpg', '2020/10/11'),
(21, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'f6e34653ede374fc81cb606c44682c805f8275b79c908', 'f6e34653ede374fc81cb606c44682c805f8275b79e2a5.jpg', '2020/10/11'),
(22, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'f6e34653ede374fc81cb606c44682c805f8275b79c908', 'f6e34653ede374fc81cb606c44682c805f8275b79f9d1.jpg', '2020/10/11'),
(23, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'f6e34653ede374fc81cb606c44682c805f8275b79c908', 'f6e34653ede374fc81cb606c44682c805f8275b7a021f.jpg', '2020/10/11'),
(24, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', '435f8035a5e34810a5b8874c4a1da95f5f8278ab8a6a3', '435f8035a5e34810a5b8874c4a1da95f5f8278ab8c51d.png', '2020/10/11'),
(25, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', '435f8035a5e34810a5b8874c4a1da95f5f8278ab8a6a3', '435f8035a5e34810a5b8874c4a1da95f5f8278ab8d4f4.png', '2020/10/11'),
(26, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', '99521f9fabfbfd26292af99100c895385f8279cda24a0', '99521f9fabfbfd26292af99100c895385f8279cda3d11.jpg', '2020/10/11'),
(27, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'e14311763fd078df5af68e81076fd59d5f8286f300d30', 'e14311763fd078df5af68e81076fd59d5f8286f303ca6.jpg', '2020/10/11'),
(28, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', '5ce056cbed180f455d18fd3b385302b35f828837b7405', '5ce056cbed180f455d18fd3b385302b35f828837b8d99.jpg', '2020/10/11'),
(29, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', '5ce056cbed180f455d18fd3b385302b35f828837b7405', '5ce056cbed180f455d18fd3b385302b35f828837bf9d0.jpg', '2020/10/11'),
(30, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', '5ce056cbed180f455d18fd3b385302b35f828837b7405', '5ce056cbed180f455d18fd3b385302b35f828837c392d.jpg', '2020/10/11');

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

DROP TABLE IF EXISTS `product_info`;
CREATE TABLE `product_info` (
  `id` int(11) NOT NULL,
  `employerUniqueId` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `productDescription` longtext NOT NULL,
  `currency` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `videoLink` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL DEFAULT '27.68626067122141',
  `longitude` varchar(255) NOT NULL DEFAULT '85.34910844153079',
  `address` varchar(255) NOT NULL DEFAULT 'Kathmandu',
  `deadline` varchar(255) NOT NULL,
  `createdDate` varchar(255) NOT NULL,
  `productUniqueId` varchar(255) NOT NULL,
  `display` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`id`, `employerUniqueId`, `productName`, `category`, `productDescription`, `currency`, `price`, `quantity`, `videoLink`, `latitude`, `longitude`, `address`, `deadline`, `createdDate`, `productUniqueId`, `display`) VALUES
(1, '819a27b8e19bb3b9994799ce820c30405f59af45418d8', 'Dhakatopi', 'Clothing', '<p><em>Dhaka</em>&nbsp;ko&nbsp;<em>Topi</em>&nbsp;literately Means A &quot;headgear Made Of&nbsp;<em>Dhaka</em>&nbsp;cloth&quot;, A Fine Cotton Cloth Once Exclusively Imported From&nbsp;<em>Dhaka</em>, The Present-day Capital Of Bangladesh. The&nbsp;<em>Dhaka Topi</em>&nbsp;was A Part Of The Nepalese National Dress, And A Symbol Of Nepalese Nationality.</p>', 'Rs.', '2000', 'Per Piece', '', '27.68626067122141', '85.34910844153079', 'Tinkune Chakra Path, Kathmandu, Bagmati', '30', '2020/09/10', '330051db28ca2cddafb01a37e4daca955f59c9211627b', ''),
(2, '819a27b8e19bb3b9994799ce820c30405f59af45418d8', 'छोडेर पालेको  ८ महिनाको कुखुरा', 'Agriculture', '<p>लोकल कुखुरा Chicken</p>', 'Rs.', '600', 'केजी', '', '26.994289803021193', '85.89245096456182', 'Bardibas, Janakpur', '30', '2020/09/12', '4a7f624d10109a859271edc131c6f3095f5c3f0c23d50', ''),
(3, '7834b1855bfb8c35a97793a3c4b1dbd55f5db7aa6878f', 'Software', 'Technology', '', 'Rs.', '50000', '1', '', '26.994289803021193', '85.89245096456182', 'Bardibas, Janakpur', '7', '2020/09/13', 'b3627bffddc85f986b11a8cab238dad05f5db84b9bad0', ''),
(5, '819a27b8e19bb3b9994799ce820c30405f59af45418d8', 'hygiene Kit', 'Accessories', '<p>Contains towels, soaps, toiletries, perfume, nail cutter, tissue paper, comb, hair care products.</p>', 'Rs.', '1500', 'Per Piece', '', '27.68626067122141', '85.34910844153079', 'Kathmandu', '7', '2020/09/15', 'c5ca5075bd9f44ffb5e77cad466fd05d5f60bafb6289d', ''),
(6, '819a27b8e19bb3b9994799ce820c30405f59af45418d8', 'Mask KN95', 'Clothing', '<p>Mask Is Available here</p>', 'Rs.', '50', 'Per Piece', '', '27.6885114733677', '85.34167394115117', 'Sanjeevani Ayurvedic Medical Mandir', '15', '2020/09/15', '8e9d4c22aaa0f0fde75c6e5667e43e7b5f60d327f1e78', ''),
(7, '12ec7199f1bae7cc88a4bac3259963065f61dda63b226', 'Goat', 'Agriculture', '<p>Baby Goat</p>', 'Rs.', '3200', 'Per unit', '', '27.57015218159744', '84.5233458147692', 'Kumroj, Narayani', '15', '2020/09/16', '011996a9a870fb7cda6103394b96301f5f61e0dbe47ab', ''),
(8, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'Google Gift Card', 'Accessories', '<p>Product Description:&nbsp;</p><p>1) This Code Is Applicable In Google Play US Store With IP Of USA Only. It Cannot Be Redeemed In Any Other Google Play Accounts Which Are Created In Other Countries Other Than The United States.&nbsp;</p><p>2) Violation Of Any Google Play Giftcards&rsquo; TOS Will Result In Immediate Deactivation Of The Code Without Prior Notice. Please Make Sure Your IP Address Is Set To United States Before Using The Code.&nbsp;</p><p>[DISCLAIMER:&nbsp;</p><p>1) Merolagi.com&nbsp;is Not Associated, Affiliated Or Connected In Any Way With Websites That Promises Exchange And/or Trades Of Google Play Cards With Other Products.&nbsp;</p><p>2) No Refund/Exchange Will Be Provided For The Reasons Mentioned Above.&nbsp;</p><p>3) We Do Not Return The Code Issue Showing As &ldquo;There Is A Problem With The Code. Please Try Another One.&rdquo;]&nbsp;</p><p>How To Redeem The Code From Your Mobile Devices:&nbsp;</p><p>1. On Your Android Device, Open The Google Play Store App . 2. Tap Menu Redeem. 3. Enter Your Code. 4. Tap Redeem.&nbsp;</p><p>How To Redeem The Code From Your Computer:&nbsp;</p><p>1) Go To</p><p>2) Enter Your Code&nbsp;<a target=\"_blank\" href=\"http://www.play.google.com/redeem\">www.play.google.com/redeem&nbsp;</a></p><p>&nbsp;</p><p>3) Click Redeem.</p>', 'Rs.', '11800', 'Per Piece', '', '', '', '', '7', '2020/09/22', '4b5d3e47ec496c358962be9a89e323825f698423c1ada', 'off'),
(9, 'b32575abf2cc139f6815de1d148b94625f6989678cc16', 'Google Gift Card 100$ (US)', 'Accessories', '<p>1) This Code Is Applicable In Google Play US Store With IP Of USA Only. It Cannot Be Redeemed In Any Other Google Play Accounts Which Are Created In Other Countries Other Than The United States.&nbsp;</p><p>2) Violation Of Any Google Play Giftcards&rsquo; TOS Will Result In Immediate Deactivation Of The Code Without Prior Notice. Please Make Sure Your IP Address Is Set To United States Before Using The Code.&nbsp;</p><p><strong>DISCLAIMER:&nbsp;</strong></p><p>1) Digital Payment Services is Not Associated, Affiliated Or Connected In Any Way With Websites That Promises Exchange And/or Trades Of Google Play Cards With Other Products.&nbsp;</p><p>2) No Refund/Exchange Will Be Provided For The Reasons Mentioned Above.&nbsp;</p><p>3) We Do Not Return The Code Issue Showing As &ldquo;There Is A Problem With The Code. Please Try Another One.&rdquo;]&nbsp;</p><p><strong>How To Redeem The Code From Your Mobile Devices:&nbsp;</strong></p><p>1. On Your Android Device, Open The Google Play Store App .</p><p>2. Tap Menu</p><p>3. Payment Methods</p><p>4. Redeem Code</p><p>5. Enter Your Code</p><p>5. Tap Redeem.&nbsp;</p><p><strong>How To Redeem The Code From Your Computer:</strong></p><p>1) Go To</p><p>2) Enter Your Code&nbsp;<a target=\"_blank\" href=\"http://www.play.google.com/redeem\">www.play.google.com/redeem&nbsp;</a></p><p>3) Click Redeem.</p>', 'Rs.', '11800', 'Per Piece', '', '', '', '', '7', '2020/09/22', '61a3e2eee8204d36c53f8c69203e38ff5f698c2b6465a', ''),
(10, 'b32575abf2cc139f6815de1d148b94625f6989678cc16', 'USD 25 XBOX LIVE Gift Card (US)', 'Accessories', '<p>1. Get The Gamer On Your List A Digital Xbox Gift Card To Use At Microsoft Store Online, On Windows, And On Xbox. * You&rsquo;ll Receive An Email With A Digital Code That Your Gift Recipient Can Use To Buy Popular Games, Add-ons, Map Packs And More.</p><p>2. This Code Is Applicable For Use In US Microsoft Store Only. (This Product Cannot Be Redeemed In&nbsp;Microsoft Accounts Which Are Created In Other Countries Other Than The United States.)</p><p>3) Violation Of Any Microsoft&rsquo;s TOS Regarding Xbox Will Result In Immediate Deactivation Of Code&nbsp;Without Prior Notice.</p><p><strong>[DISCLAIMER:</strong></p><p>1) Digital Payment Services Is Not Associated, Affiliated Or Connected In Any Way With Websites That&nbsp;Promises Exchange And/or Trades Of Microsoft Cards With Other Products.</p><p>2) No Refund/Exchange Will Be Provided For The Reasons Mentioned Above.</p><p>3) We Do Not Return The Code Issue Showing As &ldquo;There Is A Problem With The Code. Please Try Another One.&rdquo;</p>', 'Rs.', '2950', 'Per Piece', '', '', '', '', '7', '2020/09/22', 'c2f4f80fb084fb73f04f810e3398fd775f699a96d6b5b', ''),
(11, 'b32575abf2cc139f6815de1d148b94625f6989678cc16', 'Google Gift Card 50$ (US)', 'Accessories', '<p>Product Description:&nbsp;</p><p>1) This Code Is Applicable In Google Play US Store With IP Of USA Only. It Cannot Be Redeemed In Any Other Google Play Accounts Which Are Created In Other Countries Other Than The United States.&nbsp;</p><p>2) Violation Of Any Google Play Giftcards&rsquo; TOS Will Result In Immediate Deactivation Of The Code Without Prior Notice. Please Make Sure Your IP Address Is Set To United States Before Using The Code.&nbsp;</p><p>DISCLAIMER:&nbsp;</p><p>1) Digital Payment Services Is Not Associated, Affiliated Or Connected In Any Way With Websites That Promises Exchange And/or Trades Of Google Play Cards With Other Products.&nbsp;</p><p>2) No Refund/Exchange Will Be Provided For The Reasons Mentioned Above.&nbsp;</p><p>3) We Do Not Return The Code Issue Showing As &ldquo;There Is A Problem With The Code. Please Try Another One.&rdquo;]&nbsp;</p><p>How To Redeem The Code From Your Mobile Devices:&nbsp;</p><p>1. On Your Android Device, Open The Google Play Store App .</p><p>2. Tap Menu</p><p>3. Payment Methods</p><p>4. Redeem Code</p><p>5. Enter Your Code</p><p>5. Tap Redeem.&nbsp;</p><p>How To Redeem The Code From Your Computer:&nbsp;</p><p>1) Go To</p><p>2) Enter Your Code&nbsp;<a target=\"_blank\" href=\"http://www.play.google.com/redeem\">www.play.google.com/redeem&nbsp;</a></p><p>3) Click Redeem.</p>', 'Rs.', '6050', 'Per Piece', '', '', '', '', '7', '2020/09/22', '2ff96b4431829a57f74a42c31a6fde3e5f69b1a15471b', ''),
(12, '5d8d62ad87153c2ac7ebed99940e272c5f6acbcf5ae59', 'MOMO Chowmein Container ', 'Service', '<p>momo ,chowmein container&nbsp;</p>', 'Rs.', '480', 'per pkt', '', '', '', '', '365', '2020/09/23', '3c6d8db629d361c52cc2ecbe953375e95f6af8516af37', ''),
(13, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'Water Filter', 'Accessories', '<p>7 Stages Purification With TDS Controller<br />Triple Protection Of RO+UV+UF<br />Mineral Cartridge For Enhanced Taste And Added Minerals</p><ul><li>Triple Purification Technology: RO+UV+UF Filteration</li><li>Alkaline Cartridge And Auto Cleaning System</li><li>Alkaline Water Gives Added Health Benefits</li><li>Remove All Micro Impurities &amp; Retains Essential Minerals.</li><li>12 Ltrs. Storage Capacity</li><li>Fully Automatic Ideal For Higher TDS.</li><li>1 Years Warranty</li><li>7 STAGE PURIFICATION SYSTEM</li></ul>', 'Rs.', '16000', 'Per Piece', '', '27.6646141074064', '85.36688757539393', 'Balkot, Bagmati', '30', '2020/10/11', 'd40a910f4e1d72dc6ce57175e8e64c235f8270beb91f2', ''),
(14, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'Water Filter Nexus Diamond', 'Accessories', '<ul><li>Electrical &amp; Storage : Electric Purification - Suitable For Areas With Water Shortage</li><li>12 L : More The Capacity, More The Users Can Be Served With Drinking Water</li><li>RO + UV + UF + TDS : Uses Many Filters To Remove Salts &amp; Microbes In Multiple Stages</li></ul><p>Prefilter Is Only Required Where The TDS Level Of Water Is Above 2000 TDS And If Required Then You Can Purchase It Separately From The Company. Sediment And Pre Carbon Is Already Built Into The System For Safety And Filtration. Any Other Company/individual Selling/duplicating Any Of Our Products Will Be Charged For The Illegal Practice .They Shall Be Penalized With Financial Charges And/or Imprisonment As Per Indian Legal System. Important Notes: All Accessories Including 10 Feet Pipe, Fittings Are Either Inside The Water Tank Or On The Top Of The Box. Membrane Is Pre-fitted Inside The Membrane Housing. Leakage Is Not A Manufacturing Defect. The Technician Should Be Insert The Pipe Tightly Into The Connectors Or Use Teflon Tap To Tighten The Connection During The Installation.</p><p>&nbsp;</p>', 'Rs.', '18000', 'Per Piece', '', '27.666608040839982', '85.36604105392657', 'Balkot, Bagmati', '90', '2020/10/11', 'a645d0e5a7f4ce68c8d7e11160a1ae835f82722f88d8f', ''),
(15, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'Par-kiting', 'Accessories', '<p>1. 8 Mm Thickness Per. Square Rs.120-|<br />2. 12 Mm Thickness Per. Square Rs. 170-|</p><p>Par-kiting Are Available In Different Styles And Colors.</p><ul><li>Can Be Installed On Exisiting Floor</li><li>Quick Installation</li><li>Waterproof</li><li>Stain Resistant</li><li>Scratch Resistant</li><li>Fire Resistant</li><li>Termite Proof</li><li>Glue Free</li><li>Weather Proof</li></ul><ul><li>WPC DIY(Do It Yourself)decking Tile Flooring Is Perfect Foryour Bathroom, Balcony, Terrace,garden,walkway Or Any Outdoor Area.</li><li>Easy And Quick Installation. No Screws Or Adhesive Required. Interlocking System. FItting Is Soo EASY, You Can Do It Yourself.</li><li>Anti-slip, Waterproof, Anti-mildew, Anti-termite,Anti-insect,UV Resistance, Durable And Lasts For A Long Time.</li><li>Anti-slip, So Can Be Used In Bathroom And Shower Area. Water Flows From Below The WPC Decking Tiles.</li><li>Each Decking Tile Can Be Removed For Cleaning And Maintenance As And When Required.</li><li>Looks And Feels Like Natural Wood With Its Wood Grain Finish And IsEco-Friendly.</li></ul>', 'Rs.', '150', 'Square', '', '27.666707768520396', '85.36602298652531', 'Balkot, Bagmati', '90', '2020/10/11', '5a42152cda0530a081a95650c53a25335f8273d3d257f', ''),
(16, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'Kitchen Chimney', 'Accessories', '<p>Product : Kitchen Chimney.<br />2 Years Warranty.<br />Price:<br />1. Screen Touch -: Rs. 18,000-|<br />2. Digital With Button -: Rs. 14,000-|<br />3. Only Button -: Rs 13,000-|<br />All Chimney Having Oil Collector And Free Fitting.<br />Contact To +977 9841892248 / 9851192248 For More Info.</p><p>Kitchen Chimney Is An Appliance That Absorb Smoke, Fumes From Kitchen And Makes Kitchen Clean And Oil, Smoke Free. In Fact, Modern Kitchen Chimney Adds Style And Decor To Your Modular Kitchen.<br />&nbsp;</p>', 'Rs.', '15000', 'Per Piece', '', '27.666717314462872', '85.36601961629358', 'Balkot, Bagmati', '90', '2020/10/11', 'f6e34653ede374fc81cb606c44682c805f8275b79c908', ''),
(17, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'Kent Water Filter With RO + UV + UF', 'Accessories', '<p>Brand : Kent Water Filter.<br />Kent Water Filter With RO + UV + UF And Mineral Filtering.<br />Volume : 12 Liters.<br />Water Filtering Per. Hours : 14 - 15 Liters<br />Price : Rs. 24,000 -| With Free Service Charge.<br />It Comes With 1 Years Of Warranty And Life Time Free Service.<br />More Details Contact Us : +977 9841892248/9851192248</p><p>KENT Elegant Is An Advanced And Compact RO Purifier That Uses Multiple Purification Process Of RO+UF+TDS Control To Remove Impurities From Water. The Wall-mountable Design And Automatic Operation Make KENT Elegant Ideal For Domestic Purposes. Ideal For Purifying Water From All Sources, This Purifier Retains The Essential Minerals In Water And Takes Total Care Of Your Well-being.</p><p>Makes Water 100% Pure</p><p>The Multiple Purification Process Of RO+UF+TDS Control+ UV Disinfection In Storage Tank Makes The Drinking Water 100% Pure And Suitable For Drinking. This Process Removes Even Dissolved Impurities Such As Arsenic, Rust, Pesticides, And Fluorides, And Kills Bacteria And Viruses To Make Water Potable.</p><p>Multiple Purification Process With Mineral ROTM&nbsp;Technology</p><p>KENT&#39;s Mineral ROTM&nbsp;Technology Helps To Retain Essential Natural Minerals In Purified Water Using The TDS Controller, Thereby Providing 100% Pure And Mineral-rich Drinking Water.</p><p>Retains Essential Minerals</p><p>The RO Purifier From KENT Comes With A TDS Control Valve, Which No Other RO Purifiers Have Till Date. The Unique Feature Allows Users To Control The Natural Minerals (TDS) In Purified Water. In Short, The Water Purifier Removes Impurities From Tap Water And At The Same Time Retains Essential Natural Minerals In Water Making It 100% Pure.</p>', 'Rs.', '24000', 'Per Piece', '', '27.66672091181802', '85.36603259390934', 'Balkot, Bagmati', '90', '2020/10/11', '435f8035a5e34810a5b8874c4a1da95f5f8278ab8a6a3', ''),
(18, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'Royal Water Purifier With RO+UV+UF ', 'Accessories', '<p>Royal Water Purifier With RO+UV+UF Having The Capacity Of 8 Ltrs.<br />ISO Certified Water Purifier.<br />Price-: Rs. 16,000-| With Service Charge Always Free. One Year Guaranty.<br />For More Detail Contact : +977 9841892248/9851192248</p><p>&nbsp;</p><p>The Water Mark Aqua Grand+ ROYAL Ro + Uv + Tds Water Purifier Will Ensure That Your Family Gets Pure And Clean Drinking Water At All Times. It Has A Maximum Storage Capacity Of Fifteen Liters, Which Is Sufficient For Your Entire Family. Being Fully Automatic, This 10 Liter Water Purifier Will Make A Great Water Purifying Solution For Your Home. Featuring Reverse Osmosis (Ro+Uv+Tds) Water Purification Methods, This Water Purifier Effectively Flushes Away Pollutants, So That Your Family Stays Away From Any Kind Of Harmful Diseases.</p>', 'Rs.', '16000', 'Per Piece', '', '27.666723446191572', '85.36606051785631', 'Balkot, Bagmati', '90', '2020/10/11', '99521f9fabfbfd26292af99100c895385f8279cda24a0', ''),
(19, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'Skoda Water Purifier', 'Accessories', '<p>Name: Skoda<br />Brand: Nexus<br />Volume: 18 Ltrs.<br />Price : Rs.22,000-|<br />1 Year Guaranty With Free Service Charge.<br />With Ro+UV+UF And Mineral Filtering.<br />Contact No.: +977 9841892248/9851192248</p><p><strong>Nexus </strong>is Among The Best Water Purifiers That Are Used In Homes And Offices. It Has The Capacity Of Giving 120 Litres Of Pure Water In A Day And Also Has A Storage Tank With The Capacity Of 12 Litres. So, You Get Enough Water To Drink And Cook And Prepare Tea Coffee Etc.</p><p>It&rsquo;s Lightweight As Well As Ten Stage Purification Technology Make It The Best Choice For Commercial Use. It Also Has Various Other Features Like Flushing System, Push-fit Connectors, SMPS, UV Failure Indicator, Automatic Cut-off/start System To Tell You When You Need The Servicing And To Ensure You That You And Your Family Are Getting Healthier Water.</p>', 'Rs.', '22000', 'Per Piece', '', '27.66675980748713', '85.366070095799', 'Balkot, Bagmati', '90', '2020/10/11', 'e14311763fd078df5af68e81076fd59d5f8286f300d30', ''),
(20, 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204', 'Solar Water Heater', 'Accessories', '<p>Product Name: Solar Water Heater<br />Metal: Stain&nbsp;less steel<br />Price: Capacity 200 liters = 33,000-|<br />Capacity 250 liters = 38,000-|<br />Capacity 300 liters = 48,000-|<br />1 year guaranty and 7 years of warranty.<br />Contact to : +977 9841892248/9851192248 for more details.</p><p>Solar Water Heating Technologies are simple, reliable and cost-effective method of harnessing the sun&#39;s energy. Demand for Solar energy has increased exponentially in recent years as heating, cooling and energy costs continue to skyrocket. Olizstore can help you with fitting a solar water heating system both pressurized &amp; non-pressurized to meet your specific needs, allowing you to realize immediate energy cost savings, lock in your long term energy costs, and helping protect our environment.</p>', 'Rs.', '38000', 'Per Piece', '', '27.664925551243577', '85.36679319695578', 'Balkot, Bagmati', '90', '2020/10/11', '5ce056cbed180f455d18fd3b385302b35f828837b7405', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_negotiate`
--

DROP TABLE IF EXISTS `product_negotiate`;
CREATE TABLE `product_negotiate` (
  `id` int(11) NOT NULL,
  `productId` varchar(255) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `negotiateId` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `sentDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `realestate_features`
--

DROP TABLE IF EXISTS `realestate_features`;
CREATE TABLE `realestate_features` (
  `id` int(11) NOT NULL,
  `employerUniqueId` varchar(255) NOT NULL,
  `productUniqueId` varchar(255) NOT NULL,
  `productFeature` varchar(255) NOT NULL,
  `productFeatureValue` varchar(255) NOT NULL,
  `createdDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `realestate_features`
--

INSERT INTO `realestate_features` (`id`, `employerUniqueId`, `productUniqueId`, `productFeature`, `productFeatureValue`, `createdDate`) VALUES
(193, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'f026de806ad0db426392c2c90c2351165f677c35d7f92', 'Area', '2.5 Anna', '2020/09/20'),
(194, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'f026de806ad0db426392c2c90c2351165f677c35d7f92', 'Road', '13 ft', '2020/09/20');

-- --------------------------------------------------------

--
-- Table structure for table `realestate_images`
--

DROP TABLE IF EXISTS `realestate_images`;
CREATE TABLE `realestate_images` (
  `id` int(11) NOT NULL,
  `employerUniqueId` varchar(255) NOT NULL,
  `productUniqueId` varchar(255) NOT NULL,
  `imageName` varchar(255) NOT NULL,
  `createdDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `realestate_images`
--

INSERT INTO `realestate_images` (`id`, `employerUniqueId`, `productUniqueId`, `imageName`, `createdDate`) VALUES
(13, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'f026de806ad0db426392c2c90c2351165f677c35d7f92', 'f026de806ad0db426392c2c90c2351165f677c35d9834.png', '2020/09/20');

-- --------------------------------------------------------

--
-- Table structure for table `realestate_info`
--

DROP TABLE IF EXISTS `realestate_info`;
CREATE TABLE `realestate_info` (
  `id` int(11) NOT NULL,
  `employerUniqueId` varchar(255) NOT NULL,
  `estateTitle` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `estateDescription` longtext NOT NULL,
  `currency` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `phoneNo` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL DEFAULT '27.6922368',
  `longitude` varchar(255) NOT NULL DEFAULT '85.3344256',
  `address` varchar(255) NOT NULL DEFAULT 'Kathmandu',
  `deadline` varchar(255) NOT NULL,
  `createdDate` varchar(255) NOT NULL,
  `productUniqueId` varchar(255) NOT NULL,
  `display` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `realestate_info`
--

INSERT INTO `realestate_info` (`id`, `employerUniqueId`, `estateTitle`, `category`, `estateDescription`, `currency`, `price`, `phoneNo`, `latitude`, `longitude`, `address`, `deadline`, `createdDate`, `productUniqueId`, `display`) VALUES
(13, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'Land For Sale In Lubu', 'Land', '<p>Land For Sale In Lubu, Sirutar Area. Its a 2.5 Anna Land.&nbsp;</p>', 'Rs.', '4200000', '9851115804', '27.647530935491933', '85.37712840780989', 'Lubhu, Bagmati', '90', '2020/09/20', 'f026de806ad0db426392c2c90c2351165f677c35d7f92', '');

-- --------------------------------------------------------

--
-- Table structure for table `realestate_negotiate`
--

DROP TABLE IF EXISTS `realestate_negotiate`;
CREATE TABLE `realestate_negotiate` (
  `id` int(11) NOT NULL,
  `productId` varchar(255) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `negotiateId` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `sentDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service_features`
--

DROP TABLE IF EXISTS `service_features`;
CREATE TABLE `service_features` (
  `id` int(11) NOT NULL,
  `employerUniqueId` varchar(255) NOT NULL,
  `productUniqueId` varchar(255) NOT NULL,
  `productFeature` varchar(255) NOT NULL,
  `productFeatureValue` varchar(255) NOT NULL,
  `createdDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_features`
--

INSERT INTO `service_features` (`id`, `employerUniqueId`, `productUniqueId`, `productFeature`, `productFeatureValue`, `createdDate`) VALUES
(163, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '527cdcbf8b012d7d06f447617590e4835f64abf970724', 'No. of Vacancy/s', '20', '2020/09/18'),
(164, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '527cdcbf8b012d7d06f447617590e4835f64abf970724', 'Employment Type', 'Full Time', '2020/09/18'),
(165, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '527cdcbf8b012d7d06f447617590e4835f64abf970724', 'Education Level', 'Intermediate', '2020/09/18'),
(166, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '527cdcbf8b012d7d06f447617590e4835f64abf970724', 'Education Programe', 'ANY', '2020/09/18'),
(167, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '527cdcbf8b012d7d06f447617590e4835f64abf970724', 'Experience Required	', 'Equals To 1 year (Not Compulsory)', '2020/09/18'),
(168, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '527cdcbf8b012d7d06f447617590e4835f64abf970724', 'JOB LOCATION', 'Province 2, Janakpur, Bardibas, Dhanusha, Sindhuli, Jaleshwor, Gaushala, Mahottari', '2020/09/18'),
(169, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '14b6c08246712a6e29044944726356e15f64b36c457b1', 'No. of Vacancy/s', '20', '2020/09/18'),
(170, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '14b6c08246712a6e29044944726356e15f64b36c457b1', 'Employment Type', 'Full Time', '2020/09/18'),
(171, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '14b6c08246712a6e29044944726356e15f64b36c457b1', 'Education Level', 'Intermediate', '2020/09/18'),
(172, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '14b6c08246712a6e29044944726356e15f64b36c457b1', 'Education Programee', 'Any', '2020/09/18'),
(173, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '14b6c08246712a6e29044944726356e15f64b36c457b1', 'Experience Required', 'Equals To 1 year (Not Compulsory)', '2020/09/18'),
(174, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '14b6c08246712a6e29044944726356e15f64b36c457b1', 'JOB LOCATION', 'Province 2, Janakpur, Bardibas, Dhanusha, Sindhuli, Jaleshwor, Gaushala, Mahottari', '2020/09/18'),
(175, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '14b6c08246712a6e29044944726356e15f64b36c457b1', 'KEY SKILLS', 'Computer, Typing, Data Entry, Communication, Hardwork', '2020/09/18'),
(176, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '92620ce0b7cbaf9092b3c8fa5e87d4fe5f64b8f08d036', 'No. of Vacancy/s', 'Few', '2020/09/18'),
(177, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '92620ce0b7cbaf9092b3c8fa5e87d4fe5f64b8f08d036', 'Employment Type', 'Full Time', '2020/09/18'),
(178, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '92620ce0b7cbaf9092b3c8fa5e87d4fe5f64b8f08d036', 'Education Level', 'Bachelors', '2020/09/18'),
(179, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '92620ce0b7cbaf9092b3c8fa5e87d4fe5f64b8f08d036', 'Education Programe', 'Bachelors / Masters in related field', '2020/09/18'),
(180, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '92620ce0b7cbaf9092b3c8fa5e87d4fe5f64b8f08d036', 'Experience Required', 'Equals To 2 year', '2020/09/18'),
(193, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'df8c4311608ec5ec0c4990f5e7cfea215f64a0ddc5881', 'No. Of Vacancy/s', 'Few', '2020/09/19'),
(194, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'df8c4311608ec5ec0c4990f5e7cfea215f64a0ddc5881', 'Employment Type', 'Intermediate', '2020/09/19'),
(195, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'df8c4311608ec5ec0c4990f5e7cfea215f64a0ddc5881', ' Education Level', 'Intermediate', '2020/09/19'),
(196, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'df8c4311608ec5ec0c4990f5e7cfea215f64a0ddc5881', 'Education Programe	', '+2 Pass', '2020/09/19'),
(197, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'df8c4311608ec5ec0c4990f5e7cfea215f64a0ddc5881', 'Experience Required', 'Equals To Year (Not Compulsory)', '2020/09/19'),
(198, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'df8c4311608ec5ec0c4990f5e7cfea215f64a0ddc5881', 'Skills', 'Confidentiality, Computer Knowledge, Typing Speed And Accuracy', '2020/09/19'),
(205, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '3321a46d90279897c42712b9650aace55f6ea5157e078', 'Employment Type', 'Full Time', '2020/09/26'),
(206, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '3321a46d90279897c42712b9650aace55f6ea5157e078', 'Offered Salary', 'Negotiable', '2020/09/26'),
(207, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '3321a46d90279897c42712b9650aace55f6ea5157e078', 'Education Level', 'Intermediate', '2020/09/26'),
(208, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '3321a46d90279897c42712b9650aace55f6ea5157e078', 'Education Programe', '+2 Pass', '2020/09/26'),
(209, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '3321a46d90279897c42712b9650aace55f6ea5157e078', 'Experience Required', 'Equals To Year (Not Compulsory)', '2020/09/26'),
(210, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '3321a46d90279897c42712b9650aace55f6ea5157e078', 'Skills', 'Confidentiality Computer Knowledge Typing Speed And Accuracy', '2020/09/26'),
(211, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '3321a46d90279897c42712b9650aace55f6ea5157e078', 'No. Of Vacancy', '15', '2020/09/26'),
(212, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '3321a46d90279897c42712b9650aace55f6ea5157e078', '', '', '2020/09/26'),
(213, '5eaeec90712692a0017456e5caf5a7325f705af332bf0', 'fe5eba850eee0827e442b39b7eaecb7c5f705d9b65a06', 'Degree', 'Bachelors In Information Technology/ Engineering', '2020/09/27'),
(214, '5eaeec90712692a0017456e5caf5a7325f705af332bf0', 'fe5eba850eee0827e442b39b7eaecb7c5f705d9b65a06', 'Experience', '1 Year', '2020/09/27'),
(215, '5eaeec90712692a0017456e5caf5a7325f705af332bf0', 'fe5eba850eee0827e442b39b7eaecb7c5f705d9b65a06', 'Skills', 'HTML, PHP, JS, NODE, SQL', '2020/09/27'),
(216, '5eaeec90712692a0017456e5caf5a7325f705af332bf0', 'fe5eba850eee0827e442b39b7eaecb7c5f705d9b65a06', 'Job Type', 'FULL TIME/ Part Time', '2020/09/27'),
(217, '5eaeec90712692a0017456e5caf5a7325f705af332bf0', 'fe5eba850eee0827e442b39b7eaecb7c5f705d9b65a06', 'Work From Home', 'Yes', '2020/09/27'),
(218, '5eaeec90712692a0017456e5caf5a7325f705af332bf0', 'fe5eba850eee0827e442b39b7eaecb7c5f705d9b65a06', '', '', '2020/09/27'),
(249, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '04060a120185b37d55e375b6dffaa9495f71a119002ad', 'Location', 'Tinkune, Kathmandu', '2020/09/29'),
(250, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '04060a120185b37d55e375b6dffaa9495f71a119002ad', 'Skill', 'Kind, Caring, Cooperative, Helpful', '2020/09/29'),
(251, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '04060a120185b37d55e375b6dffaa9495f71a119002ad', 'Education', 'Not Required', '2020/09/29'),
(252, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '04060a120185b37d55e375b6dffaa9495f71a119002ad', 'Experience', 'Very Little', '2020/09/29'),
(253, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '04060a120185b37d55e375b6dffaa9495f71a119002ad', 'Job Type', 'FULL TIME', '2020/09/29'),
(254, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '04060a120185b37d55e375b6dffaa9495f71a119002ad', 'Gender', 'Any', '2020/09/29'),
(255, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'c3457f4bcbe4142786c51d53637c72395f719f478f2a7', 'Location', 'Tokha', '2020/09/29'),
(256, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'c3457f4bcbe4142786c51d53637c72395f719f478f2a7', 'Skill', 'Kind, Caring, Cooperative, Helpful', '2020/09/29'),
(257, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'c3457f4bcbe4142786c51d53637c72395f719f478f2a7', 'Education', 'Not Required', '2020/09/29'),
(258, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'c3457f4bcbe4142786c51d53637c72395f719f478f2a7', 'Experience', 'Very Little', '2020/09/29'),
(259, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'c3457f4bcbe4142786c51d53637c72395f719f478f2a7', 'Job Type ', 'Full Time', '2020/09/29'),
(260, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'c3457f4bcbe4142786c51d53637c72395f719f478f2a7', 'Gender', 'Any', '2020/09/29');

-- --------------------------------------------------------

--
-- Table structure for table `service_images`
--

DROP TABLE IF EXISTS `service_images`;
CREATE TABLE `service_images` (
  `id` int(11) NOT NULL,
  `employerUniqueId` varchar(255) NOT NULL,
  `productUniqueId` varchar(255) NOT NULL,
  `imageName` varchar(255) NOT NULL,
  `createdDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_images`
--

INSERT INTO `service_images` (`id`, `employerUniqueId`, `productUniqueId`, `imageName`, `createdDate`) VALUES
(124, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'df8c4311608ec5ec0c4990f5e7cfea215f64a0ddc5881', 'df8c4311608ec5ec0c4990f5e7cfea215f64a0ddc7243.png', '2020/09/18'),
(125, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '527cdcbf8b012d7d06f447617590e4835f64abf970724', '527cdcbf8b012d7d06f447617590e4835f64abf9728cd.jpg', '2020/09/18'),
(126, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '14b6c08246712a6e29044944726356e15f64b36c457b1', '14b6c08246712a6e29044944726356e15f64b36c474a0.jpg', '2020/09/18'),
(127, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '92620ce0b7cbaf9092b3c8fa5e87d4fe5f64b8f08d036', '92620ce0b7cbaf9092b3c8fa5e87d4fe5f64b8f08ed7c.jpg', '2020/09/18'),
(128, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '3321a46d90279897c42712b9650aace55f6ea5157e078', '3321a46d90279897c42712b9650aace55f6ea51580702.jpg', '2020/09/26'),
(129, '5eaeec90712692a0017456e5caf5a7325f705af332bf0', 'fe5eba850eee0827e442b39b7eaecb7c5f705d9b65a06', 'fe5eba850eee0827e442b39b7eaecb7c5f705d9b678df.png', '2020/09/27'),
(130, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'c3457f4bcbe4142786c51d53637c72395f719f478f2a7', 'c3457f4bcbe4142786c51d53637c72395f719f479145c.jpg', '2020/09/28'),
(131, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '04060a120185b37d55e375b6dffaa9495f71a119002ad', '2078c01a0ca4f1c399e276f19ea1ccb35f71a11901feb.jpg', '2020/09/28');

-- --------------------------------------------------------

--
-- Table structure for table `service_info`
--

DROP TABLE IF EXISTS `service_info`;
CREATE TABLE `service_info` (
  `id` int(11) NOT NULL,
  `employerUniqueId` varchar(255) NOT NULL,
  `serviceName` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `serviceDescription` longtext NOT NULL,
  `currency` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `workAnywhere` varchar(255) NOT NULL,
  `activeStatus` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL DEFAULT '27.6922368',
  `longitude` varchar(255) NOT NULL DEFAULT '85.3344256',
  `address` varchar(255) NOT NULL DEFAULT 'Kathmandu',
  `deadline` varchar(255) NOT NULL,
  `createdDate` varchar(255) NOT NULL,
  `productUniqueId` varchar(255) NOT NULL,
  `display` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_info`
--

INSERT INTO `service_info` (`id`, `employerUniqueId`, `serviceName`, `category`, `serviceDescription`, `currency`, `price`, `workAnywhere`, `activeStatus`, `latitude`, `longitude`, `address`, `deadline`, `createdDate`, `productUniqueId`, `display`) VALUES
(56, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'KYC UPDATE SERVICES', 'Banking', '<p>&nbsp;Entering customer and account data from source documents within time limits &gt;&gt; Compiling, verifying accuracy and sorting information to prepare source data for computer/KYC entry &gt;&gt; Reviewing data for deficiencies or errors, correcting any incompatibilities and checking output</p>', 'Rs.', '13400', 'No', 'On', '27.690140236581694', '85.33890278306802', 'Kali Marg, Kathmandu, Bagmati', '30', '2020/09/18', 'df8c4311608ec5ec0c4990f5e7cfea215f64a0ddc5881', ''),
(57, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'DATA ENTRY OPERATER', 'Technology', '', 'Rs.', '13400', 'Yes', 'On', '26.727059455357765', '85.92480835457306', 'Janaki Mandir Area Marg, Janakpur', '30', '2020/09/18', '527cdcbf8b012d7d06f447617590e4835f64abf970724', ''),
(58, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'MESSENGER', 'Banking', '', 'Rs.', '13450', 'Yes', 'On', '27.6791296', '85.3344256', 'Janata Sadak, Lalitpur, Bagmati', '30', '2020/09/18', '14b6c08246712a6e29044944726356e15f64b36c457b1', ''),
(59, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'Accountant', 'Banking', '<p>RESPONSIBILITIES</p><ul><li>Review and recommend modifications to accounting systems and procedures</li><li>Manage accounting assistants and bookkeepers</li><li>Participate in financial standards setting and in forecast process</li><li>Provide input into department&rsquo;s goal setting process</li><li>Prepare financial statements and produce budget according to schedule</li><li>Assist with tax audits and tax returns</li><li>Direct internal and external audits to ensure compliance</li><li>Plan, assign and review staff&rsquo;s work</li><li>Support month-end and year-end close process</li><li>Develop and document business processes and accounting policies to maintain and strengthen internal controls</li><li>Ensure compliance with GAAP principles</li><li>Liaise with our Financial Manager&nbsp;and Accounting Manager&nbsp;to improve financial procedures</li></ul><p>OTHER SPECIFICATION</p><p>&nbsp;</p><ul><li>Should have the sound knowledge of TDS, Letter of credit</li><li>Working knowledge of tax laws and GAAP.</li><li>Should have the knowledge of Inventory Management</li><li>Bachelor&#39;s degree in accounting or finance required.</li></ul>', 'Rs.', '25000', 'Yes', 'On', '27.6791296', '85.3344256', 'Janata Sadak, Lalitpur, Bagmati', '30', '2020/09/18', '92620ce0b7cbaf9092b3c8fa5e87d4fe5f64b8f08d036', ''),
(60, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'KYC UPDATE SERVICE', 'Accessories', '<p>A reputed organization in State No.2 Is looking for a telanted personell for kyc update service.</p><p>RESPONSIBILITIES</p><p>&gt;&gt; Insert and update kyc data on a frequent basis. &gt;&gt; Check source documents for accuracy &gt;&gt; Retrieve and review data from external sites, clients, and/or projects managers. &gt;&gt; Develop new methods to enter data more efficiently. &gt;&gt; Communicate with data company staff to verify data that might have error.</p>', 'Rs.', '13450', 'Yes', 'On', '26.729513171995922', '85.92792882396984', 'Ram Janaki Path, Janakpur', '30', '2020/09/26', '3321a46d90279897c42712b9650aace55f6ea5157e078', ''),
(61, '5eaeec90712692a0017456e5caf5a7325f705af332bf0', 'Web Developer', 'Technology', '<p>We are looking for an outstanding Web Developer to be responsible for the coding, innovative design and layout of our website.&nbsp;Web developer responsibilities include building our website from concept all the way to completion from the bottom up, fashioning everything from the home page to site layout and function.</p><p>Although there are no formal educational requirements to become a Web Developer, experience in the field will be expected. Knowledge in the following is a requirement:</p><ul><li>HTML/XHTML, CSS, JavaScript</li><li>Server architecture</li><li>Experience with server-side frameworks such as python, ruby, php, Java, ASP, ASP.NET</li><li>Experience with database systems such as SQL and Oracle</li></ul><p>A Bachelor&rsquo;s degree in the following subjects should be included:</p><ul><li>Computer Science</li><li>Computing</li></ul><p>Aside from these skills, there are a number of qualities to be highlighted in a Web Developer job description to ensure the most suitable candidates apply:</p><ul><li>Thorough functional knowledge and coding experience</li><li>Basic knowledge of Search Engine Optimisation</li><li>Ability to multitask with strict time constraints, budgets and business goals</li><li>Strong&nbsp;communication skills</li><li>Management experience or examples that show ability to manage a team, should this role involve team management</li></ul>', 'Rs.', '50000', 'Yes', 'On', '27.687805853745687', '85.33837798787968', 'Minbhawan Marg, Kathmandu, Bagmati', '30', '2020/09/27', 'fe5eba850eee0827e442b39b7eaecb7c5f705d9b65a06', ''),
(62, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'Care Giver', 'HouseHold', '<p>Post:&nbsp;हेरचाह गर्ने&nbsp;व्यक्ति ( Care Giver )</p><p>तलब:&nbsp;रु: 14000&nbsp;- 15000</p><p>हामी तत्काल टोखामा केयर टेकरको खोजी गरिरहेका छौं।<br />इच्छुक व्यक्तिहरू सकेसम्म चाँडो आवेदन दिन सक्दछन्।</p><p>जिम्मेवारी:</p><p>१. व्यक्तिगत हेरचाहको साथ सहयोग, जसमा बाथरूम प्रकार्यहरू, ग्रुमिंग र खानाहरू समावेश हुन सक्छन्।</p><p>२. निर्धारित स्वास्थ्य सेवा योजना अनुसरण गर्दै, जसमा व्यायाम र औषधि प्रशासनलाई सहयोग पुर्&zwj;याउन सक्छ।</p><p>3. ग्राहकको घरको सुनिश्चितता उनीहरूको आवश्यकता अनुसार व्यवस्थित गरिएको छ र त्यो सुरक्षा उपायहरू ठाउँमा छन्। तपाइँले केहि हल्का कामको लागि सहयोगको पनि अपेक्षा गर्न सक्नुहुन्छ।</p><p>4.&nbsp;स्वास्थ्य, व्यवहार, र आवश्यकताहरूमा अनुगमन र रिपोर्ट।</p><p>5.&nbsp;एक पेशेवर र मैत्री दृष्टिकोण।<br />6. लचिलो घण्टा काम गर्ने इच्छुकता, जसमा रात पाली सामेल हुन सक्छ।&nbsp;</p><p>&nbsp;</p><p>&nbsp;Elderly caretakers help older individuals who need assistance. They can help their patients get dressed, eat, bathe and complete light housekeeping duties, such as dishes or folding laundry. Caretakers plan, prepare and monitor meals. They might run errands, remind patients of medications and escort them to events -- if working as an in-home caretaker. Most importantly, caretakers provide companionship for elderly individuals. They may provide basic health services such as monitoring patients&rsquo; pulses, respiration and temperature. If allowed in their state, caretakers can administer medication prescribed by a physician.</p>', 'Rs.', '15000', 'Yes', 'On', '27.76292632036923', '85.33028857314865', 'Tokha Saraswati, Bagmati', '30', '2020/09/28', 'c3457f4bcbe4142786c51d53637c72395f719f478f2a7', ''),
(63, 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'Care Giver', 'HouseHold', '<p>Post:&nbsp;हेरचाह गर्ने&nbsp;व्यक्ति ( Care Giver )</p><p>तलब:&nbsp;रु: 14000&nbsp;- 15000<br />Location: Tinkune, Kathmandu</p><p>हामी तत्काल टोखामा केयर टेकरको खोजी गरिरहेका छौं।<br />इच्छुक व्यक्तिहरू सकेसम्म चाँडो आवेदन दिन सक्दछन्।</p><p>जिम्मेवारी:</p><p>१. व्यक्तिगत हेरचाहको साथ सहयोग, जसमा बाथरूम प्रकार्यहरू, ग्रुमिंग र खानाहरू समावेश हुन सक्छन्।</p><p>२. निर्धारित स्वास्थ्य सेवा योजना अनुसरण गर्दै, जसमा व्यायाम र औषधि प्रशासनलाई सहयोग पुर्&zwj;याउन सक्छ।</p><p>3. ग्राहकको घरको सुनिश्चितता उनीहरूको आवश्यकता अनुसार व्यवस्थित गरिएको छ र त्यो सुरक्षा उपायहरू ठाउँमा छन्। तपाइँले केहि हल्का कामको लागि सहयोगको पनि अपेक्षा गर्न सक्नुहुन्छ।</p><p>4.&nbsp;स्वास्थ्य, व्यवहार, र आवश्यकताहरूमा अनुगमन र रिपोर्ट।</p><p>5.&nbsp;एक पेशेवर र मैत्री दृष्टिकोण।<br />6. लचिलो घण्टा काम गर्ने इच्छुकता, जसमा रात पाली सामेल हुन सक्छ।</p><p>&nbsp;</p><p>Elderly caretakers help older individuals who need assistance. They can help their patients get dressed, eat, bathe and complete light housekeeping duties, such as dishes or folding laundry. Caretakers plan, prepare and monitor meals. They might run errands, remind patients of medications and escort them to events -- if working as an in-home caretaker. Most importantly, caretakers provide companionship for elderly individuals. They may provide basic health services such as monitoring patients&rsquo; pulses, respiration and temperature. If allowed in their state, caretakers can administer medication prescribed by a physician.</p>', 'Rs.', '15000', 'Yes', 'On', '27.4695853', '85.2722472', 'Thansingtar, Pyutar, Bagmati', '30', '2020/09/28', '04060a120185b37d55e375b6dffaa9495f71a119002ad', '');

-- --------------------------------------------------------

--
-- Table structure for table `service_negotiate`
--

DROP TABLE IF EXISTS `service_negotiate`;
CREATE TABLE `service_negotiate` (
  `id` int(11) NOT NULL,
  `productId` varchar(255) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `negotiateId` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `sentDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_features`
--
ALTER TABLE `product_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_negotiate`
--
ALTER TABLE `product_negotiate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `realestate_features`
--
ALTER TABLE `realestate_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `realestate_images`
--
ALTER TABLE `realestate_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `realestate_info`
--
ALTER TABLE `realestate_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `realestate_negotiate`
--
ALTER TABLE `realestate_negotiate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_features`
--
ALTER TABLE `service_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_images`
--
ALTER TABLE `service_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_info`
--
ALTER TABLE `service_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_negotiate`
--
ALTER TABLE `service_negotiate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_features`
--
ALTER TABLE `product_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product_info`
--
ALTER TABLE `product_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_negotiate`
--
ALTER TABLE `product_negotiate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `realestate_features`
--
ALTER TABLE `realestate_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT for table `realestate_images`
--
ALTER TABLE `realestate_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `realestate_info`
--
ALTER TABLE `realestate_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `realestate_negotiate`
--
ALTER TABLE `realestate_negotiate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service_features`
--
ALTER TABLE `service_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=261;

--
-- AUTO_INCREMENT for table `service_images`
--
ALTER TABLE `service_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `service_info`
--
ALTER TABLE `service_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `service_negotiate`
--
ALTER TABLE `service_negotiate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
