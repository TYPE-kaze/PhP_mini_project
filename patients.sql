-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 11, 2024 lúc 10:44 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hms`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `patients`
--

INSERT INTO `patients` (`id`, `fullname`, `gender`, `dateOfBirth`, `address`, `mobile`) VALUES
(1, 'Merrile Saenz', NULL, '2005-02-11', '3363 Onsgard Park', '4333397022'),
(2, 'Tyne Scarsbrick', NULL, '2011-09-06', '527 Utah Lane', '4931008265'),
(3, 'Ivar Comoletti', NULL, '2013-10-02', '57 Maple Wood Alley', '6901741628'),
(4, 'Barnebas Kitter', NULL, '2008-02-25', '380 Ramsey Terrace', '4373111049'),
(5, 'Lamont Dandy', NULL, '2010-01-10', '829 Macpherson Parkway', '7563460060'),
(6, 'Granthem Flaubert', NULL, '1982-06-14', '89 Summit Trail', '1225207837'),
(7, 'Lion Bowskill', NULL, '2014-01-06', '89214 Ruskin Circle', '5349200188'),
(8, 'Reinwald Flieg', NULL, '2002-05-31', '8 Montana Lane', '6268118417'),
(9, 'Jorie Reedman', NULL, '2018-03-02', '807 International Street', '4718265444'),
(10, 'Laurens Pumphreys', NULL, '2012-10-05', '52 Golf Course Hill', '1656825148'),
(11, 'Alix Skae', NULL, '2002-02-24', '6258 Tennessee Hill', '6431044625'),
(12, 'Carmelita Gile', NULL, '1985-11-16', '4 Anderson Alley', '7799426349'),
(13, 'Noelle Welbourn', NULL, '2009-11-16', '069 Cottonwood Place', '1239867785'),
(14, 'Base Unsworth', NULL, '1997-06-25', '6 Birchwood Plaza', '3361052673'),
(15, 'Teddie Tomlett', NULL, '1991-04-19', '437 Upham Junction', '3874442119'),
(16, 'Trina De Ambrosis', NULL, '2021-11-30', '94479 Stuart Trail', '1633740728'),
(17, 'Tobe Dugget', NULL, '1995-08-21', '717 Schurz Terrace', '2418661165'),
(18, 'Sayres Fowells', NULL, '2001-03-08', '21334 Victoria Avenue', '8649187219'),
(19, 'Anthia Marks', NULL, '2004-05-12', '2325 Upham Plaza', '6271470991'),
(20, 'Eadith Seakings', NULL, '2017-11-29', '38279 Miller Place', '7551716479'),
(21, 'Ole Glowach', NULL, '2000-12-04', '987 Graceland Way', '4475936855'),
(22, 'Jacquette Veque', NULL, '1995-07-06', '5990 Jackson Drive', '4735148969'),
(23, 'Shannah Snewin', NULL, '2005-03-25', '636 Sachs Place', '3202865474'),
(24, 'Darline Filipson', NULL, '2006-08-31', '29 Superior Center', '7762468820'),
(25, 'Marga Kampshell', NULL, '1989-01-31', '0808 Clarendon Place', '1048431665'),
(26, 'Karolina Kalf', NULL, '1986-10-25', '152 Logan Way', '4767247815'),
(27, 'Viv Borkin', NULL, '1993-06-02', '608 Vermont Park', '2037075852'),
(28, 'Creigh Kitchingman', NULL, '1984-04-07', '7134 Acker Park', '4986424272'),
(29, 'Lucius MacDonagh', NULL, '2018-05-04', '78256 Arizona Plaza', '6351602398'),
(30, 'Cynthy Wibrow', NULL, '1991-09-22', '25 Ridge Oak Court', '5128740613'),
(31, 'Channa Cattermull', NULL, '1994-01-08', '2 Sheridan Avenue', '1135020256'),
(32, 'Swen Cavet', NULL, '1996-06-12', '55 Eagle Crest Trail', '3165453616'),
(33, 'Gratiana Lathwell', NULL, '2016-06-20', '5 Carey Hill', '7867779585'),
(34, 'Annmaria Chalkly', NULL, '2015-02-25', '1 Summer Ridge Pass', '1161647522'),
(35, 'Phil Graith', NULL, '1991-04-03', '1080 Bartillon Way', '8899490904'),
(36, 'Grantham Golsby', NULL, '1997-09-06', '5029 Merchant Plaza', '3972030834'),
(37, 'Monro Forre', NULL, '1991-08-26', '69723 Linden Terrace', '4861721872'),
(38, 'Marchall Sigars', NULL, '2008-11-29', '6830 Bluejay Lane', '2797126239'),
(39, 'Dacie Vereker', NULL, '2008-05-11', '156 Superior Street', '9424855521'),
(40, 'Yorke Cluatt', NULL, '1999-04-08', '9 La Follette Street', '4561279223'),
(41, 'Gayle Northbridge', NULL, '2018-11-14', '0 Farwell Alley', '2383075753'),
(42, 'Mercie Antoney', NULL, '2023-01-22', '7 Schmedeman Crossing', '8348413341'),
(43, 'Mab Gluyas', NULL, '1994-08-30', '6 Heffernan Point', '5219724551'),
(44, 'Caddric Pembridge', NULL, '1997-02-16', '55 Porter Avenue', '9217708536'),
(45, 'Lyndel Olensby', NULL, '2006-09-24', '4 Tennyson Point', '8187032344'),
(46, 'Germayne Narramor', NULL, '1995-02-03', '53 Cherokee Alley', '1131334782'),
(47, 'Herbert Doerren', NULL, '1983-12-27', '7846 Erie Hill', '8144539979'),
(48, 'Archie Hadaway', NULL, '2012-07-06', '08 Northview Terrace', '4725854659'),
(49, 'Ole Salerno', NULL, '1995-12-10', '250 Beilfuss Point', '1425242223'),
(50, 'Ramsey Fifoot', NULL, '1989-01-14', '1271 Scoville Center', '3511921957'),
(51, 'Rickie Jaslem', NULL, '2018-12-03', '54 Hoard Parkway', '6198427009'),
(52, 'Cordie Nordass', NULL, '1996-03-16', '6 Annamark Crossing', '2055110141'),
(53, 'Rudolfo Pischoff', NULL, '2018-03-07', '0241 Grover Hill', '8601216197'),
(54, 'Abe Devonish', NULL, '1988-02-15', '4 Namekagon Street', '3873457475'),
(55, 'Frannie de Juares', NULL, '1994-07-11', '055 Colorado Plaza', '8762205201'),
(56, 'Ronald Chamberlen', NULL, '2017-06-01', '6 Moland Junction', '9812996606'),
(57, 'Abeu Fealey', NULL, '2019-01-19', '25383 Veith Park', '4351910876'),
(58, 'Iolande Carey', NULL, '1982-09-28', '7978 Eliot Junction', '4877678539'),
(59, 'Sinclair Banisch', NULL, '2006-10-02', '96832 Esker Place', '3084145094'),
(60, 'Kandace Hammersley', NULL, '2021-09-24', '5570 1st Alley', '4299675809'),
(61, 'Angel Gradley', NULL, '2007-08-11', '581 Prairie Rose Terrace', '8332079763'),
(62, 'Dorrie Horley', NULL, '1986-11-10', '7932 Bartillon Hill', '1641098936'),
(63, 'Hugues Hurburt', NULL, '2007-04-27', '56 Lakewood Gardens Street', '6603192509'),
(64, 'Elysee Rigmond', NULL, '2006-07-11', '9 Di Loreto Avenue', '3977480880'),
(65, 'Brinna Josling', NULL, '1993-09-04', '4524 Golf View Point', '1632957305'),
(66, 'Fred Henkens', NULL, '2001-04-21', '09775 Forster Way', '4046704539'),
(67, 'Rickey Barefoot', NULL, '1983-12-24', '049 Hansons Street', '3531298549'),
(68, 'Clevie Redpath', NULL, '1993-04-19', '4 Gina Hill', '3209451693'),
(69, 'Sim Angliss', NULL, '1993-11-01', '3096 Parkside Plaza', '4677277623'),
(70, 'Bear Catenot', NULL, '1990-02-25', '904 Village Terrace', '7404910406'),
(71, 'Janelle Skocroft', NULL, '2015-11-01', '802 Amoth Court', '3475125619'),
(72, 'Taffy Glozman', NULL, '1980-02-29', '1 Onsgard Hill', '5448324441'),
(73, 'Lida Ference', NULL, '1999-04-14', '7 Trailsway Court', '1724783152'),
(74, 'Crichton Stiddard', NULL, '1992-09-23', '2 Bay Parkway', '4579053386'),
(75, 'Dorolice Astall', NULL, '2006-08-18', '6065 Commercial Point', '6036014410'),
(76, 'Horace Kornilyev', NULL, '2021-06-03', '259 Corben Street', '5096182551'),
(77, 'Constance Revely', NULL, '1988-08-29', '6 Northwestern Junction', '4902385283'),
(78, 'Dyane Espinos', NULL, '1999-12-15', '6444 Forest Dale Way', '8536443398'),
(79, 'Briney Isgar', NULL, '1984-04-23', '8847 Daystar Drive', '1892952212'),
(80, 'Garek Glowacha', NULL, '1994-11-29', '61 Hazelcrest Road', '1324832257'),
(81, 'Raddie Buckthorp', NULL, '1999-08-18', '00 Scott Avenue', '7926676027'),
(82, 'Donelle Heimann', NULL, '2010-01-20', '8330 Talmadge Lane', '9952332361'),
(83, 'Petrina Beefon', NULL, '1992-05-06', '9421 Dovetail Terrace', '8358659601'),
(84, 'Leanor Knightsbridge', NULL, '2014-12-28', '77427 Toban Street', '1963950044'),
(85, 'Theresa Sponton', NULL, '2008-12-18', '7 Raven Junction', '9269770068'),
(86, 'Myrna Maber', NULL, '1987-09-28', '3 High Crossing Way', '5666949401'),
(87, 'Bibi Breadmore', NULL, '1987-11-05', '211 Kingsford Lane', '8092500418'),
(88, 'Claribel Gorsse', NULL, '1999-09-06', '20923 Nevada Crossing', '6762115874'),
(89, 'Ailsun Yakob', NULL, '1985-02-19', '62126 Hudson Court', '9252300048'),
(90, 'Eve Warry', NULL, '2019-04-13', '384 Holy Cross Way', '5463492124'),
(91, 'Justen Cay', NULL, '2022-03-05', '5 Stoughton Circle', '4853991315'),
(92, 'Sayres Keating', NULL, '2016-06-17', '263 Shoshone Way', '1919048639'),
(93, 'Ikey Vassie', NULL, '1991-11-23', '60126 Tomscot Lane', '8433180793'),
(94, 'Travis Glowach', NULL, '2009-03-01', '0509 Fuller Street', '8028441664'),
(95, 'Antonina Heskin', NULL, '1988-10-19', '564 Hazelcrest Trail', '8362008969'),
(96, 'Carlye Sapsford', NULL, '2005-08-17', '40 Bowman Street', '1313309245'),
(97, 'Florenza Pleasants', NULL, '1983-02-15', '62 Mcbride Pass', '6864577557'),
(98, 'Gamaliel Greader', NULL, '2014-02-01', '418 Acker Place', '8823499092'),
(99, 'Gaspar Smittoune', NULL, '2006-10-01', '15137 Mccormick Street', '6772798587'),
(100, 'Rockwell Cowl', NULL, '2001-05-28', '5369 Charing Cross Plaza', '6645340575');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
