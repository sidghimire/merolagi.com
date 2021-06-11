--
-- Database: `ccsnea2i_merolagi_product_transaction`
--
CREATE DATABASE IF NOT EXISTS `ccsnea2i_merolagi_product_transaction` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `ccsnea2i_merolagi_product_transaction`;

-- --------------------------------------------------------

--
-- Table structure for table `deal_product`
--

DROP TABLE IF EXISTS `deal_product`;
CREATE TABLE `deal_product` (
  `id` int(11) NOT NULL,
  `productId` varchar(255) NOT NULL,
  `customerId` varchar(255) NOT NULL,
  `transactionId` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL DEFAULT '27.68626067122141',
  `longitude` varchar(255) NOT NULL DEFAULT '85.34910844153079',
  `address` varchar(255) NOT NULL DEFAULT 'Kathmandu',
  `phone` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `createdDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deal_product`
--

INSERT INTO `deal_product` (`id`, `productId`, `customerId`, `transactionId`, `latitude`, `longitude`, `address`, `phone`, `quantity`, `createdDate`) VALUES
(2, '330051db28ca2cddafb01a37e4daca955f59c9211627b', '819a27b8e19bb3b9994799ce820c30405f59af45418d8', 'e21cd45b032ff5ea3f0fa06d3cef04045f5a28b97e225', '27.6885032', '85.34173229999999', 'Sanjeevani Ayurvedic Medical Mandir', '9841360149', '2000', '2020/09/10'),
(3, '330051db28ca2cddafb01a37e4daca955f59c9211627b', '819a27b8e19bb3b9994799ce820c30405f59af45418d8', '13e8387e1c7651e5724e5ca581f3c5ff5f5a28fe057ae', '27.7282816', '85.31148800000001', 'Nav Sangam Marg, Kathmandu, Bagmati', '9841360149', '10', '2020/09/10'),
(4, '4a7f624d10109a859271edc131c6f3095f5c3f0c23d50', '819a27b8e19bb3b9994799ce820c30405f59af45418d8', '1d5be96edd7b32523af5a4e2d36706705f5c52155804d', '27.71941118457318', '85.331165446462', 'Bhatbhateni Park', '9841360149', '20', '2020/09/12'),
(5, '4a7f624d10109a859271edc131c6f3095f5c3f0c23d50', '819a27b8e19bb3b9994799ce820c30405f59af45418d8', '57f0491d8485ae9b5500dcc4ce42bc555f5c65b0df779', '27.727871686678533', '85.36831289465142', 'Vinamra Marg, Kathmandu, Bagmati', '987654321', '2', '2020/09/12'),
(6, 'b3627bffddc85f986b11a8cab238dad05f5db84b9bad0', '', '81cc0135818f219821cb6a1d260a2f645f5f4e4c411df', '', '', '', '', '', '2020/09/14'),
(7, '330051db28ca2cddafb01a37e4daca955f59c9211627b', 'd2a2ee3e4a2f450824d71597ed3c259a5f5a3f04f402d', 'df09488ce74caaac03f52416b0c38d995f5f95474deb0', '27.686302246070323', '85.34377098083498', 'Madan Bhandari Road, Kathmandu, Bagmati', '96559865', '14555555', '2020/09/14'),
(8, 'c5ca5075bd9f44ffb5e77cad466fd05d5f60bafb6289d', '819a27b8e19bb3b9994799ce820c30405f59af45418d8', 'adf6400bb81ea41169f122f852857bce5f60be4c71a5e', '27.68626067122141', '85.34377098083498', 'Kathmandu', '9841174811', '1', '2020/09/15'),
(9, '8e9d4c22aaa0f0fde75c6e5667e43e7b5f60d327f1e78', '', 'f675393f73ffeede6fee963b369f9d0a5f6484dd21b7a', '27.6922368', '85.3573632', 'Tribhuvan International Airport', '', '', '2020/09/18'),
(10, '4a7f624d10109a859271edc131c6f3095f5c3f0c23d50', '', 'd69a7e99d0b580004e6bc3c210aa871c5f64e74b739a9', '', '', '', '', '', '2020/09/18'),
(11, '011996a9a870fb7cda6103394b96301f5f61e0dbe47ab', 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'c9e0ca98f6c01836280943e3078db9a85f661320d6085', '27.6791296', '85.3344256', 'Janata Sadak, Lalitpur, Bagmati', '9841360149', '2000', '2020/09/19'),
(12, '330051db28ca2cddafb01a37e4daca955f59c9211627b', 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '331e3e1007486a025f9b502fc85a4b565f6ecddc87aaa', '27.682406399999998', '85.3573632', 'Madhyapur Thimi, Bagmati', '9841360149', '2000', '2020/09/26'),
(13, '2ff96b4431829a57f74a42c31a6fde3e5f69b1a15471b', '819a27b8e19bb3b9994799ce820c30405f59af45418d8', '1faac3ac871165aee2aa636c007dc6275f81713282077', '27.646361600000002', '85.3737472', 'Lubhu, Bagmati', '9801139903', '1', '2020/10/10');

-- --------------------------------------------------------

--
-- Table structure for table `deal_realestate`
--

DROP TABLE IF EXISTS `deal_realestate`;
CREATE TABLE `deal_realestate` (
  `id` int(11) NOT NULL,
  `productId` varchar(255) NOT NULL,
  `customerId` varchar(255) NOT NULL,
  `transactionId` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `createdDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deal_realestate`
--

INSERT INTO `deal_realestate` (`id`, `productId`, `customerId`, `transactionId`, `latitude`, `longitude`, `address`, `phone`, `createdDate`) VALUES
(20, 'd81bcb6f226925f29be18c4dedc055835f672a9777fcb', '72bb43060504cab43a1dbb80297935b85f56edf4e0954', '89c08c1226e50b390912c0fe4602ced25f673da7ab296', '27.688565099999998', '85.3416333', 'Sanjeevani Ayurvedic Medical Mandir', '9841360149', '2020/09/20'),
(21, 'd81bcb6f226925f29be18c4dedc055835f672a9777fcb', '72bb43060504cab43a1dbb80297935b85f56edf4e0954', '53dd0b15911afe53d699bb267d4aa6a35f673dcb5ee2d', '27.6885676', '85.3416676', 'Sanjeevani Ayurvedic Medical Mandir', '9841360149', '2020/09/20'),
(22, 'f026de806ad0db426392c2c90c2351165f677c35d7f92', 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '72301ad58ddb6dfa17f8bb48a8b8552c5f6ece8e8f41b', '27.682406399999998', '85.3573632', 'Madhyapur Thimi, Bagmati', '9841360149', '2020/09/26'),
(23, 'f026de806ad0db426392c2c90c2351165f677c35d7f92', 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', 'e1c7bbe48f3c8be9b65cae94dfe427865f6ecea9aff77', '27.682406399999998', '85.3573632', 'Madhyapur Thimi, Bagmati', '9841360149', '2020/09/26'),
(24, 'f026de806ad0db426392c2c90c2351165f677c35d7f92', 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '5d692d5aaee224016c20667dbef77dfd5f6ecefc2c8e5', '27.688466899999998', '85.34169349999999', 'Sanjeevani Ayurvedic Medical Mandir', '9841360149', '2020/09/26'),
(25, 'f026de806ad0db426392c2c90c2351165f677c35d7f92', 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '2e78b33def61e7d2a23966b97fa8dc3b5f6ecf4747da5', '27.688466899999998', '85.34169349999999', 'Sanjeevani Ayurvedic Medical Mandir', '9841360149', '2020/09/26');

-- --------------------------------------------------------

--
-- Table structure for table `deal_services`
--

DROP TABLE IF EXISTS `deal_services`;
CREATE TABLE `deal_services` (
  `id` int(11) NOT NULL,
  `productId` varchar(255) NOT NULL,
  `customerId` varchar(255) NOT NULL,
  `transactionId` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL DEFAULT '27.68626067122141',
  `longitude` varchar(255) NOT NULL DEFAULT '85.34910844153079',
  `address` varchar(255) NOT NULL DEFAULT 'Kathmandu',
  `phone` varchar(255) NOT NULL,
  `hiringTime` varchar(255) NOT NULL,
  `createdDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deal_services`
--

INSERT INTO `deal_services` (`id`, `productId`, `customerId`, `transactionId`, `latitude`, `longitude`, `address`, `phone`, `hiringTime`, `createdDate`) VALUES
(9, '676b3ebd2d5f2a3a6fdd1df5582a2a135f61c4be0bb5a', '819a27b8e19bb3b9994799ce820c30405f59af45418d8', 'c87fb4e62d56693a93781b8246727b575f61ea1644741', '27.6922368', '85.3344256', 'Sharda Colony', '9841360149', '3', '2020/09/16'),
(10, '676b3ebd2d5f2a3a6fdd1df5582a2a135f61c4be0bb5a', '819a27b8e19bb3b9994799ce820c30405f59af45418d8', '8d65d74aa3f9e89bb55b4834be17dbdd5f61ea38e3de2', '27.6922368', '85.3344256', 'Sharda Colony', '9841360149', '11', '2020/09/16'),
(11, 'df8c4311608ec5ec0c4990f5e7cfea215f64a0ddc5881', '6c3a983fd4956355098469963292a0975f64cd2eba3d4', 'd917f80c9f59cb8a589a5b53a4a206275f64cdbd2279c', '27.7', '85.3332', 'Rudramati Marg, Kathmandu, Bagmati', '9860980565', '3', '2020/09/18'),
(12, 'df8c4311608ec5ec0c4990f5e7cfea215f64a0ddc5881', '6c3a983fd4956355098469963292a0975f64cd2eba3d4', 'b3b2766d868be5dc4d1a00d719767b4e5f64cdd9a71e9', '27.7', '85.3332', 'Rudramati Marg, Kathmandu, Bagmati', '9860980565', '1', '2020/09/18'),
(13, '92620ce0b7cbaf9092b3c8fa5e87d4fe5f64b8f08d036', 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '251d0f9b359a9f56593e8bed96cd647d5f65a2b15b322', '27.6791296', '85.3344256', 'Janata Sadak, Lalitpur, Bagmati', '9841360149', '1', '2020/09/19'),
(14, 'df8c4311608ec5ec0c4990f5e7cfea215f64a0ddc5881', '', 'a2ca68176ff5225c75203a6d7a6795355f66c1b821aea', '27.7242169', '85.3457809', 'Ring Road, Mahangkal, Bagmati', '', '', '2020/09/20'),
(15, 'df8c4311608ec5ec0c4990f5e7cfea215f64a0ddc5881', '', '3f3b4e5b9a494a9ff85fe2eba15adf3b5f66c1c8db7f3', '', '', '', '', '', '2020/09/20'),
(16, '527cdcbf8b012d7d06f447617590e4835f64abf970724', '', 'b44c7cf027e5ac708a9fd48a66be95745f66dac44a739', '27.6964153', '85.2837892', 'Gita Marg, Kathmandu, Bagmati', '', '', '2020/09/20'),
(17, '14b6c08246712a6e29044944726356e15f64b36c457b1', '', '222283cd767819b2bad0330afbf8d5ed5f66db7e04a88', '27.7246005', '85.3779706', 'Narayantar Road, Jorpati, Bagmati', '', '', '2020/09/20'),
(18, '14b6c08246712a6e29044944726356e15f64b36c457b1', '', 'db468775abecebf0ef09b56bd55394085f66dc0e53635', '27.7245966', '85.3779745', 'Narayantar Road, Jorpati, Bagmati', '', '', '2020/09/20'),
(19, '14b6c08246712a6e29044944726356e15f64b36c457b1', '', 'dc121ec6fc2f99f30268efcd7c14c6bf5f67049c792c1', '', '', '', '', '', '2020/09/20'),
(20, '14b6c08246712a6e29044944726356e15f64b36c457b1', '', 'a3af359692c4a4c5e7ee373c0ebfce1e5f6707e8d1b42', '27.869533', '83.9256825', 'Ambote, Sakhar, Gandaki', '', '', '2020/09/20'),
(21, 'df8c4311608ec5ec0c4990f5e7cfea215f64a0ddc5881', '5dd7ee2f679b67c539c53ca86f45fda25f670cd3c6ba4', '1d865a92de2b7d20fb437760647647ec5f670e6ee2c5f', '', '', '', '9947302122', '24', '2020/09/20'),
(22, '14b6c08246712a6e29044944726356e15f64b36c457b1', '5dd7ee2f679b67c539c53ca86f45fda25f670cd3c6ba4', '9964cc9838fdbf1a9dde5422c7263bad5f670ed42e1c9', '', '', '', '9847302122', '12', '2020/09/20'),
(23, '14b6c08246712a6e29044944726356e15f64b36c457b1', '', '76e8f714c230e876276814aef6fed0015f67360c97440', '', '', '', '', '', '2020/09/20'),
(24, '14b6c08246712a6e29044944726356e15f64b36c457b1', '', 'ceb0c82504f26d9627672fe904e9ff895f67366ddd54c', '28.0939838', '84.49793', 'Chakratirtha, Gandaki', '', '', '2020/09/20'),
(25, '14b6c08246712a6e29044944726356e15f64b36c457b1', '819a27b8e19bb3b9994799ce820c30405f59af45418d8', '5e72e58027ad03290c80403a83bb92aa5f67387feb6b0', '27.6884899', '85.3416962', 'Sanjeevani Ayurvedic Medical Mandir', '9844442363', '30', '2020/09/20'),
(26, '14b6c08246712a6e29044944726356e15f64b36c457b1', '', '3b5a4151de03cef823447c1e2bcddea95f6738d68a1bb', '27.6884899', '85.3416962', 'Sanjeevani Ayurvedic Medical Mandir', '', '', '2020/09/20'),
(27, '14b6c08246712a6e29044944726356e15f64b36c457b1', 'db27f1958900c7de58afabf6301cf6585f673dc5e30cb', 'ccc9bd3a4a7d8e345f0cb97267e701805f6742c58b585', '28.0941534', '84.4977211', 'Chakratirtha, Gandaki', '9805803550', '30', '2020/09/20'),
(28, '527cdcbf8b012d7d06f447617590e4835f64abf970724', '075a0afd4daf0c4a0e09a76f63111eca5f69e8804c1d0', 'a9513bb3527818a1dd062bb1872670795f69ed24f2eb1', '27.64690166666666', '85.31303266666666', 'Lalitpur, Bagmati', '9864489630', '20', '2020/09/22'),
(29, 'df8c4311608ec5ec0c4990f5e7cfea215f64a0ddc5881', '075a0afd4daf0c4a0e09a76f63111eca5f69e8804c1d0', 'b575ef88e8c4228756f62e0a5fff756a5f6ac1f14a9ee', '', '', '', '9864489630', '2', '2020/09/23'),
(30, '3321a46d90279897c42712b9650aace55f6ea5157e078', 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '48a13a12792de65dd59719d52cea32b15f6ecac570def', '27.68293308926904', '85.35818402250138', 'Kathmandu, Bagmati', '9841360149', '3', '2020/09/26'),
(31, '3321a46d90279897c42712b9650aace55f6ea5157e078', 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef', '067b8b089c3348178a9c0ccb545e395a5f6eccc91d843', '27.68631523058303', '85.34595296843389', 'Aditi Marg, Kathmandu, Bagmati', '9841360149', '4', '2020/09/26'),
(32, 'fe5eba850eee0827e442b39b7eaecb7c5f705d9b65a06', '6a7e9d0fc841f346a750ad37008d00155f71e01ea4a1a', '87ecb80e90c5a7a7da824de10ecb5f515f71e0fa85aa3', '27.736739085595097', '85.30184268951416', 'Bypass Chowk, Kathmandu, Bagmati', '9845670262', '10', '2020/09/28'),
(33, 'c3457f4bcbe4142786c51d53637c72395f719f478f2a7', '428123c67abd70bcaaa012cbaf06acd85f71e6c2ed382', 'e02c2cc8550fd8de4d7e0c0bb03ce58d5f71e80799ad7', '27.6922368', '85.3344256', 'Kathmandu', '9846462933 ', '3', '2020/09/28'),
(34, '', '428123c67abd70bcaaa012cbaf06acd85f71e6c2ed382', 'fff88e7ca560f4a918afbb7d971ab4af5f722e38e3f2c', '27.6922368', '85.3344256', 'Kathmandu', '9846462933 ', '40', '2020/09/28'),
(35, 'df8c4311608ec5ec0c4990f5e7cfea215f64a0ddc5881', '1891c76b9ea8e480ce55cefcf16d323a5f76f458b96ee', 'b2a4bf79f0462598279c36ac3f0fad7c5f76f4e86bd16', '27.3309072', '87.0624261', 'Khartamchha, Koshi', '9840874553', '90', '2020/10/02'),
(36, 'df8c4311608ec5ec0c4990f5e7cfea215f64a0ddc5881', 'e9ec8053cd720481c44fb398e90092965f7dabe71a66c', '6273a20251b0981fd43e31dd3c0b42835f7dacb0eb707', '27.6922368', '85.3344256', 'Kathmandu', '9818539871', '10', '2020/10/07');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_complete`
--

DROP TABLE IF EXISTS `transaction_complete`;
CREATE TABLE `transaction_complete` (
  `id` int(11) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `comments` longtext NOT NULL,
  `transactionId` varchar(255) NOT NULL,
  `transactionDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction_complete`
--

INSERT INTO `transaction_complete` (`id`, `currency`, `price`, `quantity`, `comments`, `transactionId`, `transactionDate`) VALUES
(9, 'Rs.', '144', '2000', 'NO COMMENT', '8687fd201e2ac0eb95e31c14b2542f025f5c2edc65663', '2020/09/12'),
(10, 'Rs.', '30', '1', 'HELLO', '47a2192cfae156cdc952a15ccbf0445d5f5c2f495ee5d', '2020/09/12'),
(11, 'Rs.', '1', '2000', '', '99bc2711b7fb1f6e92d888cc26a274275f5c9721907a1', '2020/09/13'),
(12, 'Rs.', '1', '2000', '85', 'e21cd45b032ff5ea3f0fa06d3cef04045f5a28b97e225', '2020/09/14');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_realestate_complete`
--

DROP TABLE IF EXISTS `transaction_realestate_complete`;
CREATE TABLE `transaction_realestate_complete` (
  `id` int(11) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `hiringTime` varchar(255) NOT NULL,
  `comments` longtext NOT NULL,
  `transactionId` varchar(255) NOT NULL,
  `transactionDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_service_complete`
--

DROP TABLE IF EXISTS `transaction_service_complete`;
CREATE TABLE `transaction_service_complete` (
  `id` int(11) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `hiringTime` varchar(255) NOT NULL,
  `comments` longtext NOT NULL,
  `transactionId` varchar(255) NOT NULL,
  `transactionDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction_service_complete`
--

INSERT INTO `transaction_service_complete` (`id`, `currency`, `price`, `hiringTime`, `comments`, `transactionId`, `transactionDate`) VALUES
(1, 'Rs.', '7', '7', 'Test', 'a9e6ca83ffc983b8f72ec9310c641d6b5f644b573c00d', '2020/09/18'),
(2, 'Rs.', '0', '1', 'TEST', '5e72e58027ad03290c80403a83bb92aa5f67387feb6b0', '2020/09/20'),
(3, 'Rs.', '7', '30', '', 'a2ca68176ff5225c75203a6d7a6795355f66c1b821aea', '2020/09/22'),
(4, 'Rs.', '15', '7', 'Has been contacted and waiting for the confirmation from the client side', 'e02c2cc8550fd8de4d7e0c0bb03ce58d5f71e80799ad7', '2020/09/29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deal_product`
--
ALTER TABLE `deal_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deal_realestate`
--
ALTER TABLE `deal_realestate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deal_services`
--
ALTER TABLE `deal_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_complete`
--
ALTER TABLE `transaction_complete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_realestate_complete`
--
ALTER TABLE `transaction_realestate_complete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_service_complete`
--
ALTER TABLE `transaction_service_complete`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deal_product`
--
ALTER TABLE `deal_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `deal_realestate`
--
ALTER TABLE `deal_realestate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `deal_services`
--
ALTER TABLE `deal_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `transaction_complete`
--
ALTER TABLE `transaction_complete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transaction_realestate_complete`
--
ALTER TABLE `transaction_realestate_complete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaction_service_complete`
--
ALTER TABLE `transaction_service_complete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
