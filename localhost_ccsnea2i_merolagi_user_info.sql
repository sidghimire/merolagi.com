--
-- Database: `ccsnea2i_merolagi_user_info`
--
CREATE DATABASE IF NOT EXISTS `ccsnea2i_merolagi_user_info` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `ccsnea2i_merolagi_user_info`;

-- --------------------------------------------------------

--
-- Table structure for table `employer_login`
--

DROP TABLE IF EXISTS `employer_login`;
CREATE TABLE `employer_login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `createdDate` varchar(255) NOT NULL,
  `uniqueUserId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer_login`
--

INSERT INTO `employer_login` (`id`, `email`, `password`, `fullName`, `photo`, `address1`, `address2`, `createdDate`, `uniqueUserId`) VALUES
(1, 'siddharthaghimire@gmail.com', '$2y$10$WmkyAXf2yKaY71cAzdD/jOuxjawWIQIfU3mWOJCIzKw2DuwJd7t5K', '', '', '', '', '2020/09/10', '819a27b8e19bb3b9994799ce820c30405f59af45418d8'),
(2, 'girbanghimire@gmail.com', '$2y$10$ar/ie/cL0uBJ.MX0oIlmH.zRhSOKvbEP2eXhSAv1x66DfzYmrtIIK', '', '', '', '', '2020/09/10', 'd2a2ee3e4a2f450824d71597ed3c259a5f5a3f04f402d'),
(3, 'debu45221@gmail.com', '$2y$10$Wnsh1v7EjFBohoBccQHo9uNnM99g9tK.1vQT0F5D7zZX63iJfktrS', '', '', '', '', '2020/09/13', '7834b1855bfb8c35a97793a3c4b1dbd55f5db7aa6878f'),
(4, 'siddhartha.ghimire.official@gmail.com', '$2y$10$lk0kCcd4FyUxwLApqw5HUeVS0Z5BRhJGI/01B2Sb2IRkT/b.BEQqq', '', '', '', '', '2020/09/13', 'b1f864a31dbc192717b6053a996b15fb5f5dc5b9e0430'),
(5, 'rollaside.company@gmail.com', '$2y$10$TOWpc7qKJqK.41UHuOPzFOo2IRjYVQafzlhoePNcd5UzIiyX15uMe', '', '', '', '', '2020/09/15', 'df35057defec573b5a265deb42a0445e5f604e10db56b'),
(6, 'aavash5bhattarai@gmail.com', '$2y$10$w9c05ARF5lbtlmyPQQyD0.939bYcYBeDhvE0CNdHIZ26QE.u7V69G', '', '', '', '', '2020/09/15', '3128ac75ca4a9d8214537cbd360108c35f60b68b846b4'),
(7, 'rautudhab@gmail.com', '$2y$10$eMdB5hVsMSVOAHRZcq5tku/HKdFjaIF/XisuUmN0bkTo.o5rwZ3L2', '', '', '', '', '2020/09/16', '8a2e58e9a42703eeb49003ead40c2a175f61cf93e1d41'),
(8, 'girban@hotmail.com', '$2y$10$XsMiDr6nlugr3pURAWFm/e6DlDBpxtQphPPeTrUJcFw5Z0tkORU4u', '', '', '', '', '2020/09/16', '12ec7199f1bae7cc88a4bac3259963065f61dda63b226'),
(9, 'info@ccsnepal.com', '$2y$10$tO22mpy2igMEm2HrZrAhqe.DnxQ9uR./w0q6clHN0Cr4ZWVTohJAS', '', '', '', '', '2020/09/18', 'be673a2d3a3a47800f378c7f6658ec415f649a42033ef'),
(10, 'abhinavhingmang@gmail.com', '$2y$10$zsqh6YlVTLmHSNvum.rjFeA6SCFmP4lir94lvf8nSuQMPxfoPL9ka', '', '', '', '', '2020/09/18', '6c3a983fd4956355098469963292a0975f64cd2eba3d4'),
(11, 'nogomom33@gmail.com', '$2y$10$nNB2fCkBNH5piS9mtDXepuSGnIDXcA2JmC6nIPhmvDwwH6eVzRd66', '', '', '', '', '2020/09/19', 'f0a5c9ce346782b9981209a0c240589e5f65b41737517'),
(12, 'tarkerabaripuru@gmail.com', '$2y$10$oQMCFvmQ9mlZQscsqC5UVOnKyhyai5wDHuFx/HbszQMqjRMwbyP82', '', '', '', '', '2020/09/19', 'c5971820352b70d878111c1a69004a875f65c12844b4f'),
(13, 'khadkabarsha6410@gmail.com', '$2y$10$bl/6jnLzUOXDjLG4dhLuDeRZcmbW64MD7bSxy7xng5.wCd6oCsaaa', '', '', '', '', '2020/09/20', '84925e26b1728ba1e077e8de5bf0a0735f66be58271de'),
(14, 'isworkc11@gmail.com', '$2y$10$4luEw8I.9u7YgsrhufU3SeRL0rbLltHDqJ3kdNUCZbCHQoiMlDF.2', '', '', '', '', '2020/09/20', '644708cfb2a5888b7cf816a510f6438f5f66d3f30441b'),
(15, 'thapadipak633@gmail.com', '$2y$10$A5jw387ztAVJRdtDoNtH/OtmHDMBltUIiypaBo0fSpyCf6yv2utYe', '', '', '', '', '2020/09/20', '37eed8c5fdca6de7cfe39fd70bec3aa25f66dadbaad46'),
(16, 'anishstha708@gmail.com', '$2y$10$mx3BpmvIos/RN2T/9w3d/etnRVHU0tzKQMi.zrqYa/TA98JW08Zva', '', '', '', '', '2020/09/20', '5dd7ee2f679b67c539c53ca86f45fda25f670cd3c6ba4'),
(17, 'Chaudharyrukmila97@gmail.com', '$2y$10$oHzslejepu3teDcYA2AlD.zuB6/1D5xEjl2u0S4NIUW1MN730X1DS', '', '', '', '', '2020/09/20', 'dd2abff7c8944dcdc5e117a24071ff0d5f671e69e4d7a'),
(18, 'remonstha77@gmail.com', '$2y$10$awoeZoBG8SwIYvwjaqiELOknS.fgerpYbg3W9DoQaeE7UXFJfnoqK', '', '', '', '', '2020/09/20', 'db27f1958900c7de58afabf6301cf6585f673dc5e30cb'),
(19, 'onlineservicenepal55@gmail.com', '$2y$10$m4GQMOL9GaqCRQ4tMid9i.75CacMrrPm3yvkL2WHLiSGH7FWO0tJa', '', '', '', '', '2020/09/22', 'b32575abf2cc139f6815de1d148b94625f6989678cc16'),
(20, 'aayushacharya194@gmail.com', '$2y$10$9x1mV8xBDEt/WKXc4V2G1eeG2aysuQ7JF.vD.DWZBcLCiM6mENc76', '', '', '', '', '2020/09/22', '075a0afd4daf0c4a0e09a76f63111eca5f69e8804c1d0'),
(21, 'santozkhatiwada01@gmail.com', '$2y$10$Xk4gDJxyy9JgY3IhiS46LeoYeaqq3SPpqxgtTX2cV4Lsfse62lefW', '', '', '', '', '2020/09/23', '5d8d62ad87153c2ac7ebed99940e272c5f6acbcf5ae59'),
(22, 'bhaktipreeyank40@gmail.com', '$2y$10$1NqQcXGbNln.hbb05MOhtuoDHaz9mHtYj73iLhByAFf69DClrburW', '', '', '', '', '2020/09/26', '0f09efde65b1c704fb2678fe578b9dad5f6ec9a9493a2'),
(23, 'hemantkc70@gmail.com', '$2y$10$VBMK7huZBfzuSsewZj2JCO7/W45mx4OlbQEV9H.mOwd2f8dvY4M0O', '', '', '', '', '2020/09/27', '034e640cd4dbdb1830ea032bd60334735f6ff8c1d787d'),
(24, 'hemantkc70@gmail.com', '$2y$10$VBMK7huZBfzuSsewZj2JCO7/W45mx4OlbQEV9H.mOwd2f8dvY4M0O', '', '', '', '', '2020/09/27', '034e640cd4dbdb1830ea032bd60334735f6ff8c1d7759'),
(25, 'admin@merolagi.com', '$2y$10$JvpLf8gdTC256URpC.soQeHNVCBz6vM6fdUqrZ/kzDOSPLE9crU.O', '', '', '', '', '2020/09/27', '5eaeec90712692a0017456e5caf5a7325f705af332bf0'),
(26, 'asmichhetri76@gmail.com', '$2y$10$hMOx9snmP5VDL83FU1nbZOwxqQZx8Ys1ybdGfzZL1iJeiSaGM7cGi', '', '', '', '', '2020/09/27', '1288ec05a67769b1c4449508b17d17665f709110e4102'),
(27, 'motspramesh@gmail.com', '$2y$10$6zc/Vor3zH.9LjgOhYtC4OksFKay/wEAnIuwjUZSPtRrg3kaFtur.', '', '', '', '', '2020/09/28', 'cd49fd423a632e106fdefe2105840e035f71bc54c417c'),
(28, 'phuyalmanoj259@gmail.com', '$2y$10$rW.2.pykgZjs/TUF4wj1LOqkg1D1tHKPB45Rlz4J03ZSWLNynzs8C', '', '', '', '', '2020/09/28', '6a7e9d0fc841f346a750ad37008d00155f71e01ea4a1a'),
(30, 'rishibung.rai@gmail.com', '$2y$10$aYImG0jly7/R0zfhBFgiIuHaVptZNOI4e.0dOpCbQJGND0eDcEvwO', '', '', '', '', '2020/10/02', '1891c76b9ea8e480ce55cefcf16d323a5f76f458b96ee'),
(34, 'Dasansh356@gmail.com', '$2y$10$PmgjoLOM9xyZsa9lfb3Px.0BsxxuAsoMCjjOtj86GwAJuKKOIAq5.', '', '', '', '', '2020/10/07', 'e9ec8053cd720481c44fb398e90092965f7dabe71a66c'),
(35, 'aryalkrish9818@gmail.com', '$2y$10$zG3MWSz2jnwefioVVr/44euQyllUh3Ik8XPeB0uCCzVpMWQD8P56K', '', '', '', '', '2020/10/10', '6bb5415faea62244a6d981d5e97be6555f81d2b71336d'),
(36, 'kaushalkafle@gmail.com', '$2y$10$/LzB1jD3/DzvD4pdFP0t0.kQkWHDiybuFjWOM0LU6Lshk81QJOHT2', '', '', '', '', '2020/10/10', 'a969d91335518c7c462f6c7b3f2a66095f81d3e9ab8f1'),
(37, 'threebrothershomeservice@gmail.com', '$2y$10$f80l5dtZFcgDKEM40cMCiejHtqFqY1E7AHJ4xbZnCTPPU5YH6AV.6', '', '', '', '', '2020/10/11', 'f3f77e170be4cbd8b26a0164f8abf2555f826e6a59204');

-- --------------------------------------------------------

--
-- Table structure for table `employer_login_activation`
--

DROP TABLE IF EXISTS `employer_login_activation`;
CREATE TABLE `employer_login_activation` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `sentDate` varchar(255) NOT NULL,
  `currentState` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer_login_activation`
--

INSERT INTO `employer_login_activation` (`id`, `email`, `password`, `token`, `sentDate`, `currentState`) VALUES
(1, 'siddharthaghimire@gmail.com', '1234567890', 'cfa44af9fba11c0396e27895b4e9af055f59ae00916ac', '2020/09/10', 'NO'),
(2, 'girbanghimire@gmail.com', '123456789', '8ff00a764177190c38d5adfa107af87b5f5a0ecca561b', '2020/09/10', 'NO'),
(3, 'debu45221@gmail.com', '123', '29a1a1a5574d35dfa314903116ffc9c05f5d998cba953', '2020/09/13', 'NO'),
(4, 'siddhartha.ghimire.official@gmail.com', '123', '9bffc7b3d3c8201c6cdbe673cb3d75cd5f5dc3b0c81ce', '2020/09/13', 'NO'),
(5, 'merolaginepal@gmail.com', '1234567890', '4373c75f6d18b3f43427c83dc9976d5f5f602b64c9365', '2020/09/15', 'YES'),
(6, 'rollaside.company@gmail.com', '123456789', '4bd4abac6abeb109ceb6d55f543096c55f602bb626b99', '2020/09/15', 'NO'),
(7, 'rollaside.company@gmail.com', '1234567890', 'e56e2e96c5b7b73d5a90cd509cc7a2925f602c6a827cd', '2020/09/15', 'NO'),
(8, 'rollaside.company@gmail.com', '1234567890', '30cc65120850e41b35a7e49d4043dd6b5f602d0387cc5', '2020/09/15', 'NO'),
(9, 'rollaside.company@gmail.com', '1234567890', '362feb9b675c32baf91ca94b7ec0f5625f602d5542c5b', '2020/09/15', 'NO'),
(10, 'rollaside.company@gmail.com', '1234567890', '1da43a6204916279b561e23cfbf6177d5f602e509b6a1', '2020/09/15', 'NO'),
(11, 'rollaside.company@gmail.com', '1234567890', '990d1d3fb5fb80a103f740a019577b7e5f602e8459b1f', '2020/09/15', 'NO'),
(12, 'rollaside.company@gmail.com', '$2y$10$LD.FAtxp3DPmsoRdBV217OOwzubH3zXtL6rx8gTMmmCHfFPmATHY6', 'b559ddd479665b77cbaabd1be67d5a345f604bf638f85', '2020/09/15', 'NO'),
(13, 'rollaside.company@gmail.com', '$2y$10$TOWpc7qKJqK.41UHuOPzFOo2IRjYVQafzlhoePNcd5UzIiyX15uMe', '8cf27944a62c4e1ee2c5224787cf6adb5f604de917ccf', '2020/09/15', 'NO'),
(14, 'aavash5bhattarai@gmail.com', '$2y$10$w9c05ARF5lbtlmyPQQyD0.939bYcYBeDhvE0CNdHIZ26QE.u7V69G', '3709d50683785c5f7cd949257051af5c5f60b5e441134', '2020/09/15', 'NO'),
(15, '', '$2y$10$H.RyC8PV/KTAIMLDWG9c.edMCufV/obtCrfv1xIfnD0TdvXXkKa1K', '090d60913a367790a9ee4637c2209de85f61cf1c2b30d', '2020/09/16', 'YES'),
(16, 'rautudhab@gmail.com', '$2y$10$eMdB5hVsMSVOAHRZcq5tku/HKdFjaIF/XisuUmN0bkTo.o5rwZ3L2', '0df9d3ddd78ad030824ed8afc77de5ff5f61cf793b425', '2020/09/16', 'NO'),
(17, 'girban@hotmail.com', '$2y$10$XsMiDr6nlugr3pURAWFm/e6DlDBpxtQphPPeTrUJcFw5Z0tkORU4u', '1a98a93abf14f0c4ddb5bc9c63c509925f61dd861445d', '2020/09/16', 'NO'),
(18, 'info@ccsnepal.com', '$2y$10$tO22mpy2igMEm2HrZrAhqe.DnxQ9uR./w0q6clHN0Cr4ZWVTohJAS', '3f68b1c93408634092138cada89b215d5f6499ee6e871', '2020/09/18', 'NO'),
(19, 'abhinavhingmang@gmail.com', '$2y$10$zsqh6YlVTLmHSNvum.rjFeA6SCFmP4lir94lvf8nSuQMPxfoPL9ka', 'c1e9e53907ef381272a194f3029e6b105f64ccd2b03d9', '2020/09/18', 'NO'),
(20, 'abhinavhingmang@gmail.com', '$2y$10$5NqSWs..JTUPT0E5fhQqLe7F2Zn.i/k.fXc7BBM4EZTy3fR653mpq', 'ab0c98d319afc3d37b4446a4eaadf9385f64cd0f5b054', '2020/09/18', 'NO'),
(21, 'nogomom33@gmail.com', '$2y$10$nNB2fCkBNH5piS9mtDXepuSGnIDXcA2JmC6nIPhmvDwwH6eVzRd66', 'f504d364ef31e7f069825e28f2c2e7d05f65b3fc5f50f', '2020/09/19', 'NO'),
(22, '', '$2y$10$wK6TP4mnex1PW0/II3aVgu3vB8dPQPLc8nndyDAN0wQFOxmQF1Hhe', 'de1a94f2a8acd24bb633eea53014651f5f65c0dc3e208', '2020/09/19', 'YES'),
(23, 'tarkerabaripuru@gmail.com', '$2y$10$oQMCFvmQ9mlZQscsqC5UVOnKyhyai5wDHuFx/HbszQMqjRMwbyP82', '67d9f93b1a2d4d8d5e06e7d88057a7bf5f65c10215cb6', '2020/09/19', 'NO'),
(24, 'khadkabarsha6410@gmail.com', '$2y$10$bl/6jnLzUOXDjLG4dhLuDeRZcmbW64MD7bSxy7xng5.wCd6oCsaaa', '4d32a310321acbbdc2203972fa8727c15f66be3935632', '2020/09/20', 'NO'),
(25, 'isworkc11@gmail.com', '$2y$10$4luEw8I.9u7YgsrhufU3SeRL0rbLltHDqJ3kdNUCZbCHQoiMlDF.2', '6519a19eb3d74b802c1c5690b543e1a95f66d3c602661', '2020/09/20', 'NO'),
(26, 'thapadipak633@gmail.com', '$2y$10$A5jw387ztAVJRdtDoNtH/OtmHDMBltUIiypaBo0fSpyCf6yv2utYe', '4d07df5a73f322c81fa54ede847874d35f66d9e8ab97e', '2020/09/20', 'NO'),
(27, 'thapadipak633@gmail.com', '$2y$10$vAaGigPO63hTbZ3IrH2y0.tF8WbwQ61xI.FwiX.J3sYBq7msn5oxa', 'a7e794aa07ff773a21f8ad0c2f6be4ac5f66da106d011', '2020/09/20', 'NO'),
(28, 'Rukmila', '$2y$10$ipiuCd9SaL9kPwUZZv1DDuMVpp6Nb1dTyF8xBk/kbZJhoIXwWHB/q', '7dbd4fbea950220ddd351fb29592af665f66ea3953c9d', '2020/09/20', 'YES'),
(29, 'Rukmila chaudhary', '$2y$10$Zx4BompIUr0Jh7BuVbyzTOLjzgaIOOjDUwW6dGtuTwWMj0m0wnSK6', 'fd99dc943af3082e8d20dc28475d0c915f66eb1e2c14e', '2020/09/20', 'YES'),
(30, 'ChaudharyRukmila', '$2y$10$1XlAPjGl5LkTUl1uZoiahepanH3qBRuriplph52fXHrODQS0yFcKm', '73c88235b72b89e66c1f6a97f05446df5f66ec13cc973', '2020/09/20', 'YES'),
(31, 'Rukshana chaudhary', '$2y$10$/GQA45K7UY2zbCf1TgkFXehK70NiiIqGzMbm5nkKTDjfc5GsR6W6C', 'ec83cea64227a517414991024e32b05b5f66ec6abee27', '2020/09/20', 'YES'),
(32, 'anishstha708@gmail.com', '$2y$10$mx3BpmvIos/RN2T/9w3d/etnRVHU0tzKQMi.zrqYa/TA98JW08Zva', '29287a470492821616b70d33a0c5b7005f670ca9472f9', '2020/09/20', 'NO'),
(33, 'Chaudharyrukmila97@gmail.com', '$2y$10$oHzslejepu3teDcYA2AlD.zuB6/1D5xEjl2u0S4NIUW1MN730X1DS', '5db618a908e6b45829ac47c239f8fd935f671ba5dbb04', '2020/09/20', 'NO'),
(34, 'chaudharyrukmila97@gmail.com ', '$2y$10$eo4ZRcSYW2iOMC/YgkrHd.LINTPRZMYxP7nxRCQHDKLFdG1JRrTFC', 'a6af9f331ba94ff127c89fe0245a12c45f671d881b711', '2020/09/20', 'NO'),
(35, 'chaudharyrukmila@Gmail.com', '$2y$10$3hrFY/RW9lIwMziBOkp41e534u3KWO4JkMh1CyuKESnPbgSDaM3fG', '3f75f281a38149257be7b3801a55fa3c5f67216e6d59c', '2020/09/20', 'YES'),
(36, 'rabinstha701@gmail.com', '$2y$10$V0GoOzor4zpQMYPSpYFsZOOb1IHtE9WsOZS0DPvzXUbfEeAg.pyRi', 'b5031f7d462c63012a1f20d67969f0745f6737219c7ab', '2020/09/20', 'YES'),
(37, 'rabinstha701@gmail.com', '$2y$10$LaWBXBur9jDbcEpVqZk.D.tnqswM16acasU1HJot2hhJY.bfyNPz.', 'ddce2e9949e5ac5a6a9f3c2db6455b255f673723005b2', '2020/09/20', 'YES'),
(38, 'rabinstha701@gmail.com', '$2y$10$9olB2rSxlHAyKLMoqCheDuhHUDX0.1tceHYvs.ZGgKdYPKoG.XeTa', '45e466e7188f0623616f90536186eacf5f67372581c54', '2020/09/20', 'YES'),
(39, '', '$2y$10$UTBiljRg6UcjWWuzfzyj9e7s34R6WsHncR5qXhRoQlKJxamIfA/gu', '157eab141a17224833755b4677c84d8e5f673761950b5', '2020/09/20', 'YES'),
(40, 'rabinsthrestha', '$2y$10$T1XyNp10KxsuqrdGCgXvfekwthV.aFOGd4HFQMxBrPDnTt77fJra.', '8f28b393527732cc45e1bc159353d4085f67387e2e58c', '2020/09/20', 'YES'),
(41, 'rabinsthrestha', '$2y$10$HIuzTxoKrcAe2tkQK4dyFeYSuQBNCYXctwBgLt5b9z/ty3qbjfrge', '8f28b393527732cc45e1bc159353d4085f67387ee440e', '2020/09/20', 'YES'),
(42, '', '$2y$10$S4eo6naPJd5mcrWbkkFmf.Y6ojJ2bbVSkpH.hsiSTSLIQkTihcao.', 'f49729ce6441603bcee7edd639eb9c695f6738a175577', '2020/09/20', 'YES'),
(43, '', '$2y$10$qQHlxkypuNT44cqrJzbfJObaHZyydQpaYptYtnE66Rmnb5.5c9Vmi', '9bde6933e858d23f1dc9f7bf3d956a225f67394d7b03d', '2020/09/20', 'YES'),
(44, 'rabinstha@gmail.com', '$2y$10$bjF3oou4Y6JMQ5sLqNNr8OLZgy1OHGQpb5W4HnSKQNCRDJHIGtWZC', '5c7fa20c121e5db6225f2e0abc6160575f6739ace962d', '2020/09/20', 'YES'),
(45, 'remonstha77@gmail.com', '$2y$10$awoeZoBG8SwIYvwjaqiELOknS.fgerpYbg3W9DoQaeE7UXFJfnoqK', 'b71d8a09b9a0b22aff2eaec39d5cd19e5f673d1e4a001', '2020/09/20', 'NO'),
(46, 'remonstha77@gmail.com', '$2y$10$x1Z9kVzC0xBPZzZjpAtcnOLax4g3aJ9Wu033qMrXFIHLNz1Cg3.Ey', '07e725a378c1b03d72dc7da00c38f8175f673d2ac1797', '2020/09/20', 'NO'),
(47, 'onlineservicenepal55@gmail.com', '$2y$10$m4GQMOL9GaqCRQ4tMid9i.75CacMrrPm3yvkL2WHLiSGH7FWO0tJa', 'aeb27be895a16fd21aea69028fafbc9b5f698958542f8', '2020/09/22', 'NO'),
(48, 'aayushacharya194@gmail.com', '$2y$10$rnfhZOPjtKLwQsZbjEmJX.MxoKHTtmxAHnYQyNwDoTbtQa71B/FSK', '0fdb10fd35bbfe7c3445368d2e5c2f485f69e847a911c', '2020/09/22', 'NO'),
(49, '', '$2y$10$OLG5XtxwU0gObUkQ6s6NguKPOYK8FKMEZA9nSuseHXlWbNd3yE7.G', '4b4fc6a7e5afaaf979a23b343bde357d5f6aca9ca0941', '2020/09/23', 'YES'),
(50, '', '$2y$10$vYeunX2Vt6AVBJD/lPHtGul7YLZAT6yMOYN.NjoaA7.mvziMITIP6', '058a360e505ab7a75245d3a4d32e85515f6acadc5c7d8', '2020/09/23', 'YES'),
(51, 'santozkhatiwada01@gmail.com', '$2y$10$Xk4gDJxyy9JgY3IhiS46LeoYeaqq3SPpqxgtTX2cV4Lsfse62lefW', '441d4f32c0923a286595b5288b1156b55f6acbb2e2434', '2020/09/23', 'NO'),
(52, 'fff', '$2y$10$kR1Nt8Z80U7Gn74THOT.4ODcP.Vur055.iL.mvajOVX07ZgP.X04i', 'b15a08c51c28ba84c79856bb5714e9c85f6ad95a9cd14', '2020/09/23', 'YES'),
(53, '123', '$2y$10$ToWJsZedCVrTuMPM43LVLuEE9zXIzyGtHwiiE/wZrQE0AFClpa/L6', 'a27982d876935cf12b36c1dbf87b247a5f6ad97415df9', '2020/09/23', 'YES'),
(54, 'sasa@gmail.com', '$2y$10$UWV1VpMvtfOQbuHqy11TL.K.SjjdzYIfWY6pdJiHqNLbyjmZo0Hua', 'dba025b2c981dcb341e92d9afcc589db5f6ad993a28c3', '2020/09/23', 'YES'),
(55, 'Sabitapramesh@hotmail.com ', '$2y$10$TaK6EIEIL2DoE6DKKccmQOWxWwv4dyGGMgo0B.I7NV8G.TiS/m4KK', '9f7a545cd9445947cecbdb3f382cafba5f6ec4a276994', '2020/09/26', 'YES'),
(56, 'Sabitapramesh@hotmail.com', '$2y$10$h3q8KmIXrWnFsu4nx5bnL.fz4UHJIfXuFH33WrI6aWLiDCCHE86WW', 'f6db1b9951dcd88ac791c301f2e4f5e15f6ec4c5968cd', '2020/09/26', 'YES'),
(57, 'Sabitapramesh@hotmail.com ', '$2y$10$xPCI.a65IaHdohgrDRaQZe5rcNyKaUmoR54yWQJzR..vFWEqqcEWC', '62708eb3f48e1d092c9958c59eb60b6f5f6ec4ff0e020', '2020/09/26', 'YES'),
(58, 'Sabitapramesh@hotmail.com ', '$2y$10$vHntaHfoWK3nN9CVphgOHul.5l3OIcDrZGQwIx0V99/umswNp6JZi', 'a8f9e926d6e269aa97d010da7fcb7c7f5f6ec512f21e4', '2020/09/26', 'YES'),
(59, 'Sabitapramesh@hotmail.com ', '$2y$10$Zp97sMqjOTJPD7tPAxdZlen7K4k4aOoKhztdhGFTJZlS.Kt.Z8FAK', 'b9808848c225b3dd162f3f5c383dffa45f6ec513c663a', '2020/09/26', 'YES'),
(60, 'bhaktipreeyank40@gmail.com', '$2y$10$1NqQcXGbNln.hbb05MOhtuoDHaz9mHtYj73iLhByAFf69DClrburW', 'efc8ef5ce2a84b46699b1c6791c8afc75f6ec8fbb289f', '2020/09/26', 'NO'),
(61, 'hemantkc70@gmail.com', '$2y$10$VBMK7huZBfzuSsewZj2JCO7/W45mx4OlbQEV9H.mOwd2f8dvY4M0O', '2da8dede102c9db9bce21b37db2adbcd5f6ff87f28489', '2020/09/27', 'NO'),
(62, 'admin@merolagi.com', '$2y$10$JvpLf8gdTC256URpC.soQeHNVCBz6vM6fdUqrZ/kzDOSPLE9crU.O', '26e24263929ba0020ff437aa08346e515f705ad9bbcd9', '2020/09/27', 'NO'),
(63, 'asmichhetri76@gmail.com', '$2y$10$hMOx9snmP5VDL83FU1nbZOwxqQZx8Ys1ybdGfzZL1iJeiSaGM7cGi', '138dc906d32112616e7fdb1b49b1e8605f7090f2b385c', '2020/09/27', 'NO'),
(64, 'motspramesh@gmail.com', '$2y$10$6zc/Vor3zH.9LjgOhYtC4OksFKay/wEAnIuwjUZSPtRrg3kaFtur.', 'bbacc59cd196bddd0726e40e7b68942f5f71bc3518dbe', '2020/09/28', 'NO'),
(65, 'phuyalmanoj259@gmail.com', '$2y$10$rW.2.pykgZjs/TUF4wj1LOqkg1D1tHKPB45Rlz4J03ZSWLNynzs8C', 'd4ce3986ea160e4e305d9db1d36b2dc75f71dffe0dfb9', '2020/09/28', 'NO'),
(66, 'sdungana12@gmail.com ', '$2y$10$zAicMxxVBe6sGdyvxRRNLuFaviMZ5BCoODmr/xTuSKRFilqqFWyHC', 'b968e493ff257603f0e0ac994d1e4e0f5f71e698a8d99', '2020/09/28', 'NO'),
(67, 'Sushma22@gmail.com', '$2y$10$S/K/WHL6bSZ4m3xVZlPVcOuTlR/oLOCY22Cgunaz45QysBmIxSLL2', '9f2139fc27e367d90a0516ec3ca962015f7292fc6efc7', '2020/09/29', 'YES'),
(68, 'Anitalama095@gmail.com', '$2y$10$b0yU8iSWoEjAke2ZxDaNdeW6qvibAXU3uRt4QhY.2dQAix2VIjsNG', 'e0b4e9e3c63a76c2d488974417b6a9af5f72e3ba654bc', '2020/09/29', 'YES'),
(69, 'rishibung.rai@gmail.com', '$2y$10$aYImG0jly7/R0zfhBFgiIuHaVptZNOI4e.0dOpCbQJGND0eDcEvwO', 'b6ad5eab8b057d3ef552c3c0309a298b5f76f41c1b17b', '2020/10/02', 'NO'),
(70, 'saraswotid8@gmail.com', '$2y$10$rVGup.c5PSYuhclwh/B7UOVFCCatrlxu3lMyHt98JxG50tdSLkEt6', '6d551f86da26149d4f07247b2bbdc89a5f7daaa6582f7', '2020/10/07', 'YES'),
(71, 'saraswotid8@gmail.com', '$2y$10$4yXhdrXo7SSRV1my9gI0muLbiWsUBX4mLR87GFFhLzx8OGYqqmwr6', '02870bb312dd932d2485c10cf0ad59695f7daabf93976', '2020/10/07', 'YES'),
(72, 'Dasansh356@gmail.com', '$2y$10$PmgjoLOM9xyZsa9lfb3Px.0BsxxuAsoMCjjOtj86GwAJuKKOIAq5.', '9ceb43190be16522595fd783dbc459ae5f7dab77f05d9', '2020/10/07', 'NO'),
(73, 'vanamkharel@gmail.com', '$2y$10$Cb9PKpgMZ1tdMrKn/vLw8ueuR7RZMdN1WPlzP/a/NqhDVEz9gY.uW', 'cbba1afdf6c3ef4dba4a859319605ed75f7dc2481593d', '2020/10/07', 'YES'),
(74, 'vanamkharel@gmail.com', '$2y$10$ygUk6z/DiUM3MYCLm7D6eOHK1kQVYgqSjnDiE/.VeL04i7VuncKse', 'f3174665173dd28afbcee971ba31cb3e5f7dc2736db15', '2020/10/07', 'YES'),
(75, 'vanamkharel@gmail.com', '$2y$10$pi4cO912xr3lLEXuzLM9YuEIJQbYv53YVRC.EiK5eksM550HC8ZVO', 'c0d8120a15f99bfb399db9213fb150425f7dc2eb57e12', '2020/10/07', 'YES'),
(76, 'vanamkharel@gmail.com', '$2y$10$k6.uW5yM02yoC9ip67THP.aO2OJgftOFIfSdrsgt2n3Y1vqDgWYBC', '934d1813499eec02e5d7911756302f6b5f7dc2f7574b0', '2020/10/07', 'YES'),
(77, 'aryalkrish9818@gmail.com', '$2y$10$zG3MWSz2jnwefioVVr/44euQyllUh3Ik8XPeB0uCCzVpMWQD8P56K', 'cf81b5dcf1bad0a543bfc63866cda2fe5f81d2aa6dbca', '2020/10/10', 'NO'),
(78, 'kaushalkafle@gmail.com', '$2y$10$/LzB1jD3/DzvD4pdFP0t0.kQkWHDiybuFjWOM0LU6Lshk81QJOHT2', '116f1865bd1afa08de9d395c1a687d4b5f81d3caa81e2', '2020/10/10', 'NO'),
(79, 'threebrothershomeservice@gmail.com', '$2y$10$f80l5dtZFcgDKEM40cMCiejHtqFqY1E7AHJ4xbZnCTPPU5YH6AV.6', '8af535213d565135559493c6e3f82f095f826e5fe58c7', '2020/10/11', 'NO'),
(80, 'sasa@gmail.com', '$2y$10$pZVcCOuwbINCtxn4KoZFbu2ahrLdO6BcWiMPYW.rI6XpqAC9GSq/a', '69a6eac22731099c0cc732456d37e26c5f83201c006bd', '2020/10/11', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `employer_login_reset`
--

DROP TABLE IF EXISTS `employer_login_reset`;
CREATE TABLE `employer_login_reset` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `sentDate` varchar(255) NOT NULL,
  `currentState` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer_login_reset`
--

INSERT INTO `employer_login_reset` (`id`, `email`, `token`, `sentDate`, `currentState`) VALUES
(7, 'siddharthaghimire@gmail.com', '400b972dd0374da39001d183b447cd4e5f59b23f3bb7e', '2020/09/10', 'NO'),
(8, 'siddharthaghimire@gmail.com', '23341ea4985b2a3f769dba2929cfe4f45f59b6d5cdc0f', '2020/09/10', 'NO'),
(9, 'siddharthaghimire@gmail.com', 'd615a35e649271b211ab9a8e61c9928e5f59c5a45d376', '2020/09/10', 'NO'),
(10, 'siddharthaghimire@gmail.com', '9a75148123af46044004aee046b85b345f5a0eedab5ca', '2020/09/10', 'NO'),
(11, 'siddhartha.ghimire.official@gmail.com', 'd7bf910432d0256b9737125f839220c75f5dc5d365b7d', '2020/09/13', 'NO'),
(12, 'debu45221@gmail.com', 'b062cb8486cf47a613ab30b2d6ab022d5f5ddaa31f056', '2020/09/13', 'NO'),
(13, 'siddharthaghimire@gmail.com', 'b3b00420f90ee9a731073755c6c961c55f602dda71bce', '2020/09/15', 'NO'),
(14, 'siddharthaghimire@gmail.com', '419b972dd857e847e64e046efb45c7705f602dfdd3d0a', '2020/09/15', 'NO'),
(15, 'rollaside.company@gmail.com', '6d1ed3fb9ea452470629eef77df29dad5f604f6c70b61', '2020/09/15', 'YES'),
(16, 'rollaside.company@gmail.com', 'd141c64b5102b5195216a6b8ee3bd1f25f604f888378d', '2020/09/15', 'YES'),
(17, 'siddharthaghimire@gmail.com', 'e99ebcb7b293ac4e4f839d63d78a562d5f604fea99c89', '2020/09/15', 'NO'),
(18, 'siddharthaghimire@gmail.com', '5afa2da3ac992297f4a5622fe86b4d675f60515fb9970', '2020/09/15', 'NO'),
(19, 'siddharthaghimire@gmail.com', '35d63c95be04ee337dee0942cd04cc995f6051bac1451', '2020/09/15', 'NO'),
(20, 'debu45221@gmail.com', '0cd2d99c9c2df1e2f8ccf7163f83d6d75f6056d19f0e7', '2020/09/15', 'NO'),
(21, 'debu45221@gmail.com', 'cabe4e3792d4075c2c9c8049b745a3b85f60990aa9393', '2020/09/15', 'YES'),
(22, 'aayushacharya194@gmail.com', 'fe01f63276a7bd6195274babc5a3dc7d5f69e8e580b06', '2020/09/22', 'NO'),
(23, 'siddharthaghimire@gmail.com', '1b6564bba3d3418b19c9a7ee3c47ce165f6eb5506b74e', '2020/09/26', 'NO'),
(24, 'siddharthaghimire@gmail.com', 'b795faf7c046b0c8de723ca73535dea15f6edadfd2029', '2020/09/26', 'NO'),
(25, 'siddharthaghimire@gmail.com', '09fe9b4a32d414102beab86ed9bf240b5f7b20d6c4dd0', '2020/10/05', 'NO'),
(26, 'girban@hotmail.com', 'c54c55a183ff4230de9ad7474af70f875f7b4cf4d3b54', '2020/10/05', 'YES'),
(27, 'girban@hotmail.com', '8daead9623022fda74eefa186e9494335f7b4cfa2003e', '2020/10/05', 'YES'),
(28, 'Onlineservicenepal55@gmail.com', 'bf5089007b8147fe5d3f98ad5a38eebe5f83ad052cecf', '2020/10/12', 'YES');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employer_login`
--
ALTER TABLE `employer_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer_login_activation`
--
ALTER TABLE `employer_login_activation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer_login_reset`
--
ALTER TABLE `employer_login_reset`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employer_login`
--
ALTER TABLE `employer_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `employer_login_activation`
--
ALTER TABLE `employer_login_activation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `employer_login_reset`
--
ALTER TABLE `employer_login_reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
