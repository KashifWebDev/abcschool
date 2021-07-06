-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 10:45 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_abcschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `pass` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `email`, `pass`) VALUES
(1, 'Administrator', 'admin@admin.com', 'admin@123'),
(4, 'test Admin', 'test@admin.com', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `phone_code` int(5) NOT NULL,
  `country_code` char(2) NOT NULL,
  `country_name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `phone_code`, `country_code`, `country_name`) VALUES
(1, 93, 'AF', 'Afghanistan'),
(2, 358, 'AX', 'Aland Islands'),
(3, 355, 'AL', 'Albania'),
(4, 213, 'DZ', 'Algeria'),
(5, 1684, 'AS', 'American Samoa'),
(6, 376, 'AD', 'Andorra'),
(7, 244, 'AO', 'Angola'),
(8, 1264, 'AI', 'Anguilla'),
(9, 672, 'AQ', 'Antarctica'),
(10, 1268, 'AG', 'Antigua and Barbuda'),
(11, 54, 'AR', 'Argentina'),
(12, 374, 'AM', 'Armenia'),
(13, 297, 'AW', 'Aruba'),
(14, 61, 'AU', 'Australia'),
(15, 43, 'AT', 'Austria'),
(16, 994, 'AZ', 'Azerbaijan'),
(17, 1242, 'BS', 'Bahamas'),
(18, 973, 'BH', 'Bahrain'),
(19, 880, 'BD', 'Bangladesh'),
(20, 1246, 'BB', 'Barbados'),
(21, 375, 'BY', 'Belarus'),
(22, 32, 'BE', 'Belgium'),
(23, 501, 'BZ', 'Belize'),
(24, 229, 'BJ', 'Benin'),
(25, 1441, 'BM', 'Bermuda'),
(26, 975, 'BT', 'Bhutan'),
(27, 591, 'BO', 'Bolivia'),
(28, 599, 'BQ', 'Bonaire, Sint Eustatius and Saba'),
(29, 387, 'BA', 'Bosnia and Herzegovina'),
(30, 267, 'BW', 'Botswana'),
(31, 55, 'BV', 'Bouvet Island'),
(32, 55, 'BR', 'Brazil'),
(33, 246, 'IO', 'British Indian Ocean Territory'),
(34, 673, 'BN', 'Brunei Darussalam'),
(35, 359, 'BG', 'Bulgaria'),
(36, 226, 'BF', 'Burkina Faso'),
(37, 257, 'BI', 'Burundi'),
(38, 855, 'KH', 'Cambodia'),
(39, 237, 'CM', 'Cameroon'),
(40, 1, 'CA', 'Canada'),
(41, 238, 'CV', 'Cape Verde'),
(42, 1345, 'KY', 'Cayman Islands'),
(43, 236, 'CF', 'Central African Republic'),
(44, 235, 'TD', 'Chad'),
(45, 56, 'CL', 'Chile'),
(46, 86, 'CN', 'China'),
(47, 61, 'CX', 'Christmas Island'),
(48, 672, 'CC', 'Cocos (Keeling) Islands'),
(49, 57, 'CO', 'Colombia'),
(50, 269, 'KM', 'Comoros'),
(51, 242, 'CG', 'Congo'),
(52, 242, 'CD', 'Congo, Democratic Republic of the Congo'),
(53, 682, 'CK', 'Cook Islands'),
(54, 506, 'CR', 'Costa Rica'),
(55, 225, 'CI', 'Cote D\'Ivoire'),
(56, 385, 'HR', 'Croatia'),
(57, 53, 'CU', 'Cuba'),
(58, 599, 'CW', 'Curacao'),
(59, 357, 'CY', 'Cyprus'),
(60, 420, 'CZ', 'Czech Republic'),
(61, 45, 'DK', 'Denmark'),
(62, 253, 'DJ', 'Djibouti'),
(63, 1767, 'DM', 'Dominica'),
(64, 1809, 'DO', 'Dominican Republic'),
(65, 593, 'EC', 'Ecuador'),
(66, 20, 'EG', 'Egypt'),
(67, 503, 'SV', 'El Salvador'),
(68, 240, 'GQ', 'Equatorial Guinea'),
(69, 291, 'ER', 'Eritrea'),
(70, 372, 'EE', 'Estonia'),
(71, 251, 'ET', 'Ethiopia'),
(72, 500, 'FK', 'Falkland Islands (Malvinas)'),
(73, 298, 'FO', 'Faroe Islands'),
(74, 679, 'FJ', 'Fiji'),
(75, 358, 'FI', 'Finland'),
(76, 33, 'FR', 'France'),
(77, 594, 'GF', 'French Guiana'),
(78, 689, 'PF', 'French Polynesia'),
(79, 262, 'TF', 'French Southern Territories'),
(80, 241, 'GA', 'Gabon'),
(81, 220, 'GM', 'Gambia'),
(82, 995, 'GE', 'Georgia'),
(83, 49, 'DE', 'Germany'),
(84, 233, 'GH', 'Ghana'),
(85, 350, 'GI', 'Gibraltar'),
(86, 30, 'GR', 'Greece'),
(87, 299, 'GL', 'Greenland'),
(88, 1473, 'GD', 'Grenada'),
(89, 590, 'GP', 'Guadeloupe'),
(90, 1671, 'GU', 'Guam'),
(91, 502, 'GT', 'Guatemala'),
(92, 44, 'GG', 'Guernsey'),
(93, 224, 'GN', 'Guinea'),
(94, 245, 'GW', 'Guinea-Bissau'),
(95, 592, 'GY', 'Guyana'),
(96, 509, 'HT', 'Haiti'),
(97, 0, 'HM', 'Heard Island and Mcdonald Islands'),
(98, 39, 'VA', 'Holy See (Vatican City State)'),
(99, 504, 'HN', 'Honduras'),
(100, 852, 'HK', 'Hong Kong'),
(101, 36, 'HU', 'Hungary'),
(102, 354, 'IS', 'Iceland'),
(103, 91, 'IN', 'India'),
(104, 62, 'ID', 'Indonesia'),
(105, 98, 'IR', 'Iran, Islamic Republic of'),
(106, 964, 'IQ', 'Iraq'),
(107, 353, 'IE', 'Ireland'),
(108, 44, 'IM', 'Isle of Man'),
(109, 972, 'IL', 'Israel'),
(110, 39, 'IT', 'Italy'),
(111, 1876, 'JM', 'Jamaica'),
(112, 81, 'JP', 'Japan'),
(113, 44, 'JE', 'Jersey'),
(114, 962, 'JO', 'Jordan'),
(115, 7, 'KZ', 'Kazakhstan'),
(116, 254, 'KE', 'Kenya'),
(117, 686, 'KI', 'Kiribati'),
(118, 850, 'KP', 'Korea, Democratic People\'s Republic of'),
(119, 82, 'KR', 'Korea, Republic of'),
(120, 381, 'XK', 'Kosovo'),
(121, 965, 'KW', 'Kuwait'),
(122, 996, 'KG', 'Kyrgyzstan'),
(123, 856, 'LA', 'Lao People\'s Democratic Republic'),
(124, 371, 'LV', 'Latvia'),
(125, 961, 'LB', 'Lebanon'),
(126, 266, 'LS', 'Lesotho'),
(127, 231, 'LR', 'Liberia'),
(128, 218, 'LY', 'Libyan Arab Jamahiriya'),
(129, 423, 'LI', 'Liechtenstein'),
(130, 370, 'LT', 'Lithuania'),
(131, 352, 'LU', 'Luxembourg'),
(132, 853, 'MO', 'Macao'),
(133, 389, 'MK', 'Macedonia, the Former Yugoslav Republic of'),
(134, 261, 'MG', 'Madagascar'),
(135, 265, 'MW', 'Malawi'),
(136, 60, 'MY', 'Malaysia'),
(137, 960, 'MV', 'Maldives'),
(138, 223, 'ML', 'Mali'),
(139, 356, 'MT', 'Malta'),
(140, 692, 'MH', 'Marshall Islands'),
(141, 596, 'MQ', 'Martinique'),
(142, 222, 'MR', 'Mauritania'),
(143, 230, 'MU', 'Mauritius'),
(144, 269, 'YT', 'Mayotte'),
(145, 52, 'MX', 'Mexico'),
(146, 691, 'FM', 'Micronesia, Federated States of'),
(147, 373, 'MD', 'Moldova, Republic of'),
(148, 377, 'MC', 'Monaco'),
(149, 976, 'MN', 'Mongolia'),
(150, 382, 'ME', 'Montenegro'),
(151, 1664, 'MS', 'Montserrat'),
(152, 212, 'MA', 'Morocco'),
(153, 258, 'MZ', 'Mozambique'),
(154, 95, 'MM', 'Myanmar'),
(155, 264, 'NA', 'Namibia'),
(156, 674, 'NR', 'Nauru'),
(157, 977, 'NP', 'Nepal'),
(158, 31, 'NL', 'Netherlands'),
(159, 599, 'AN', 'Netherlands Antilles'),
(160, 687, 'NC', 'New Caledonia'),
(161, 64, 'NZ', 'New Zealand'),
(162, 505, 'NI', 'Nicaragua'),
(163, 227, 'NE', 'Niger'),
(164, 234, 'NG', 'Nigeria'),
(165, 683, 'NU', 'Niue'),
(166, 672, 'NF', 'Norfolk Island'),
(167, 1670, 'MP', 'Northern Mariana Islands'),
(168, 47, 'NO', 'Norway'),
(169, 968, 'OM', 'Oman'),
(170, 92, 'PK', 'Pakistan'),
(171, 680, 'PW', 'Palau'),
(172, 970, 'PS', 'Palestinian Territory, Occupied'),
(173, 507, 'PA', 'Panama'),
(174, 675, 'PG', 'Papua New Guinea'),
(175, 595, 'PY', 'Paraguay'),
(176, 51, 'PE', 'Peru'),
(177, 63, 'PH', 'Philippines'),
(178, 64, 'PN', 'Pitcairn'),
(179, 48, 'PL', 'Poland'),
(180, 351, 'PT', 'Portugal'),
(181, 1787, 'PR', 'Puerto Rico'),
(182, 974, 'QA', 'Qatar'),
(183, 262, 'RE', 'Reunion'),
(184, 40, 'RO', 'Romania'),
(185, 70, 'RU', 'Russian Federation'),
(186, 250, 'RW', 'Rwanda'),
(187, 590, 'BL', 'Saint Barthelemy'),
(188, 290, 'SH', 'Saint Helena'),
(189, 1869, 'KN', 'Saint Kitts and Nevis'),
(190, 1758, 'LC', 'Saint Lucia'),
(191, 590, 'MF', 'Saint Martin'),
(192, 508, 'PM', 'Saint Pierre and Miquelon'),
(193, 1784, 'VC', 'Saint Vincent and the Grenadines'),
(194, 684, 'WS', 'Samoa'),
(195, 378, 'SM', 'San Marino'),
(196, 239, 'ST', 'Sao Tome and Principe'),
(197, 966, 'SA', 'Saudi Arabia'),
(198, 221, 'SN', 'Senegal'),
(199, 381, 'RS', 'Serbia'),
(200, 381, 'CS', 'Serbia and Montenegro'),
(201, 248, 'SC', 'Seychelles'),
(202, 232, 'SL', 'Sierra Leone'),
(203, 65, 'SG', 'Singapore'),
(204, 1, 'SX', 'Sint Maarten'),
(205, 421, 'SK', 'Slovakia'),
(206, 386, 'SI', 'Slovenia'),
(207, 677, 'SB', 'Solomon Islands'),
(208, 252, 'SO', 'Somalia'),
(209, 27, 'ZA', 'South Africa'),
(210, 500, 'GS', 'South Georgia and the South Sandwich Islands'),
(211, 211, 'SS', 'South Sudan'),
(212, 34, 'ES', 'Spain'),
(213, 94, 'LK', 'Sri Lanka'),
(214, 249, 'SD', 'Sudan'),
(215, 597, 'SR', 'Suriname'),
(216, 47, 'SJ', 'Svalbard and Jan Mayen'),
(217, 268, 'SZ', 'Swaziland'),
(218, 46, 'SE', 'Sweden'),
(219, 41, 'CH', 'Switzerland'),
(220, 963, 'SY', 'Syrian Arab Republic'),
(221, 886, 'TW', 'Taiwan, Province of China'),
(222, 992, 'TJ', 'Tajikistan'),
(223, 255, 'TZ', 'Tanzania, United Republic of'),
(224, 66, 'TH', 'Thailand'),
(225, 670, 'TL', 'Timor-Leste'),
(226, 228, 'TG', 'Togo'),
(227, 690, 'TK', 'Tokelau'),
(228, 676, 'TO', 'Tonga'),
(229, 1868, 'TT', 'Trinidad and Tobago'),
(230, 216, 'TN', 'Tunisia'),
(231, 90, 'TR', 'Turkey'),
(232, 7370, 'TM', 'Turkmenistan'),
(233, 1649, 'TC', 'Turks and Caicos Islands'),
(234, 688, 'TV', 'Tuvalu'),
(235, 256, 'UG', 'Uganda'),
(236, 380, 'UA', 'Ukraine'),
(237, 971, 'AE', 'United Arab Emirates'),
(238, 44, 'GB', 'United Kingdom'),
(239, 1, 'US', 'United States'),
(240, 1, 'UM', 'United States Minor Outlying Islands'),
(241, 598, 'UY', 'Uruguay'),
(242, 998, 'UZ', 'Uzbekistan'),
(243, 678, 'VU', 'Vanuatu'),
(244, 58, 'VE', 'Venezuela'),
(245, 84, 'VN', 'Viet Nam'),
(246, 1284, 'VG', 'Virgin Islands, British'),
(247, 1340, 'VI', 'Virgin Islands, U.s.'),
(248, 681, 'WF', 'Wallis and Futuna'),
(249, 212, 'EH', 'Western Sahara'),
(250, 967, 'YE', 'Yemen'),
(251, 260, 'ZM', 'Zambia'),
(252, 263, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`) VALUES
(3, 'Foundation 1'),
(4, 'Foundation 2'),
(5, 'Basic 1'),
(6, 'Basic 2 '),
(7, 'Intermediate 1'),
(8, 'Intermediate 2'),
(9, 'Advanced 1'),
(11, 'Advanced 2'),
(12, 'IELTS Preparation'),
(13, 'Kim Course');

-- --------------------------------------------------------

--
-- Table structure for table `courses_and_instructors`
--

CREATE TABLE `courses_and_instructors` (
  `id` int(11) NOT NULL,
  `instructor` int(11) NOT NULL,
  `month` varchar(1000) NOT NULL,
  `course` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses_and_instructors`
--

INSERT INTO `courses_and_instructors` (`id`, `instructor`, `month`, `course`) VALUES
(4, 8, 'June', 4),
(5, 10, 'February', 3);

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `student_id` int(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `course_id` int(100) NOT NULL,
  `instructor_id` int(100) NOT NULL,
  `rewrite_date` date DEFAULT NULL,
  `sub1` float NOT NULL,
  `sub2` float NOT NULL,
  `sub3` float NOT NULL,
  `sub4` float NOT NULL,
  `sub5` float NOT NULL,
  `sub6` float NOT NULL,
  `sub7` float NOT NULL,
  `sub8` float NOT NULL,
  `sub9` float NOT NULL,
  `sub10` float NOT NULL,
  `sub11` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `student_id`, `month`, `course_id`, `instructor_id`, `rewrite_date`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `sub7`, `sub8`, `sub9`, `sub10`, `sub11`) VALUES
(2, 2, 'January', 3, 2, NULL, 1, 2, 3, 77, 5, 6, 7, 8, 9, 10, 11),
(3, 457, 'July', 5, 3, '2021-07-08', 78, 87, 35, 87, 28, 88, 69, 80, 76, 89, 82),
(4, 3, 'December', 13, 15, NULL, 55, 56, 74, 88, 96, 40, 95, 88, 77, 80, 68);

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `id` int(11) NOT NULL,
  `instructor_id` varchar(1000) DEFAULT NULL,
  `name` varchar(1000) DEFAULT NULL,
  `hire_date` varchar(1000) DEFAULT NULL,
  `phone` varchar(1000) DEFAULT NULL,
  `email` varchar(1000) DEFAULT NULL,
  `reason` varchar(1000) DEFAULT NULL,
  `deactivation_date` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`id`, `instructor_id`, `name`, `hire_date`, `phone`, `email`, `reason`, `deactivation_date`) VALUES
(2, '9612270055083', 'Lee-Ann Megan Moodley', '3-Jun-21', '813949291', 'moodleyleeann75@gmail.com', '', ''),
(3, '9411160064085', 'Nicole Dollie', '31-May-21', '671523085', 'nicole.dollie@gmail.com', '', ''),
(4, '8012205082081', 'Juan Souw', '31-May-21', '741405784', 'juansouw@gmail.com', '', ''),
(5, '9401180017080', 'Janelle Jacobs', '11-May-21', '071 895 5086', 'janellejcbs@gmail.com', '', ''),
(6, '9411250083086', 'Taylor Lee Abrahams', '5-May-21', '084 907 3879', 'abrahamstaylorlee@gmail.com', '', ''),
(7, '9411250083086', 'Taylor Lee Abrahams', '5-May-21', '084 907 3879', 'abrahamstaylorlee@gmail.com', '', ''),
(8, '9608220243084', 'Jessica Vuyelwa Oliphant', '5-May-21', '081 021 3787', 'jessicavulyewa@gmail.com', '', ''),
(9, '8302015070081', 'Tertius', '1-Apr-21', '27610805452', 'tertius.carstens.1983@gmail.com', '', ''),
(10, '7408285006084', 'Joop', '1-Mar-21', '073 394 3000', 'joopvj@gmail.com', '', ''),
(11, '8302015070081', 'Carey', '1-Mar-21', '081 531 2833', '', '', ''),
(12, '8003280046083', 'Aimee', '1-Mar-21', '082 870 3250', 'aimee.jvvuuren@gmail.com', '', ''),
(13, '5667788', 'Tairo', '1-Mar-21', '072 250 1422', 'kim@avbg.co.za', '', ''),
(14, '8512020235087', 'Ferah', '1-Mar-21', '082 871 7850', 'ganiferah@gmail.com', '', ''),
(15, '3809125086083', 'Colin', '1-Mar-21', '083 487 2423', 'lifecoaching@ploka.co.za', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `master_registration_list`
--

CREATE TABLE `master_registration_list` (
  `id` int(255) NOT NULL,
  `student_id` varchar(1000) DEFAULT NULL,
  `student_name` varchar(1000) DEFAULT NULL,
  `registration_date` date DEFAULT NULL,
  `country` varchar(1000) DEFAULT NULL,
  `passport_no` varchar(1000) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `phone_no` varchar(1000) DEFAULT NULL,
  `email` varchar(1000) DEFAULT NULL,
  `registration_invoice_no` varchar(1000) DEFAULT NULL,
  `guardian_contact` varchar(1000) NOT NULL,
  `address_S_A` varchar(1000) NOT NULL,
  `facebook` varchar(1000) NOT NULL,
  `insta` varchar(1000) NOT NULL,
  `pic` varchar(1000) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `master_registration_list`
--

INSERT INTO `master_registration_list` (`id`, `student_id`, `student_name`, `registration_date`, `country`, `passport_no`, `dob`, `phone_no`, `email`, `registration_invoice_no`, `guardian_contact`, `address_S_A`, `facebook`, `insta`, `pic`) VALUES
(3, '210608-TR0831-89', 'Abdullah Esse', '0000-00-00', 'Turkey', 'U14735009', '0000-00-00', '071 891 1852', '444@fg.sfg', '343434', '443343', 'erer', 'fbbbbb', 'intaaaa', 'default.jpg'),
(4, '210212-SO0101-95', 'Abdullahi Abdikadir Dahir', '0000-00-00', 'Somalia', 'ECZSOM001810210', '0000-00-00', '067 617 3967', '', '', '', '', '', '', 'default.jpg'),
(5, '210423-SO1105-17', 'Abdullahi Abdiwali Hassan', '0000-00-00', 'Somalia', 'P00910341', '0000-00-00', '073 979 9479', 'chairman.scob@gmail.com', '20210190', '', '', '', '', 'default.jpg'),
(6, '210325-SO0606-13', 'Abdullahi Hassan Tohow', '0000-00-00', 'Somalia', 'P00969427', '0000-00-00', '073 621 5262', 'abdullahihassantohow@gmail.com', '27987', '', '', '', '', 'default.jpg'),
(7, '201127-CD0718-45', 'Abel Kasongo Abedi', '0000-00-00', 'Democratic Republic of Congo', 'OP0624886', '0000-00-00', '063 866 8210', '', '', '', '', '', '', 'default.jpg'),
(8, '201015-CD0927-08', '', '2021-07-06', 'Democratic Republic of Congo', 'OP0629678', '2021-07-07', '078 837 5581', '', '201015-CD0927-08', '', '', '', '', 'default.jpg'),
(9, '210127-CD0913-81', 'Abigael kapanga Kutemba', '0000-00-00', 'Democratic Republic of Congo', 'OP0721220', '0000-00-00', '081 702 4153', '', '', '', '', '', '', 'default.jpg'),
(10, '210609-CD0726-67', 'Abigaelle Kaj Tshibamba', '0000-00-00', 'Democratic Republic of Congo', 'OP0769582', '0000-00-00', '068 096 8887', 'prossyyav18@gmail.com', '20210800', '', '', '', '', 'default.jpg'),
(11, '201117-CG0601-29', 'Abissa Mombod Marcolie Ivan', '0000-00-00', 'Republic of Congo', 'OA0331644', '0000-00-00', '078 861 0102', '', '', '', '', '', '', 'default.jpg'),
(12, '210312-CG0208-88', 'Aboubakar Diop', '0000-00-00', 'Republic of Congo', 'OA0447131', '0000-00-00', '082 742 2622', '', '27945', '', '', '', '', 'default.jpg'),
(13, '210510-CD0607-29', 'Adel Matamba Mwanza', '0000-00-00', 'Democratic Republic of Congo', 'OP0745856', '0000-00-00', '078 900 2403', 'idrismenjik@gmail.com', '20210350', '', '', '', '', 'default.jpg'),
(14, '210317-GA0520-67', 'Adeline Serena Lyvia Andeme Makanga', '0000-00-00', 'Gabon', '18GA44601', '0000-00-00', '063 978 2711', 'serena.andememakanga20@gmail.com', '27960', '', '', '', '', 'default.jpg'),
(457, '90790936', 'Kashif New', '2021-07-06', 'Turks and Caicos Islands', '23232323', '2021-07-07', '4313113131313', 'kashif@ali.com', '121212', '244535535', 'sdfg adsfsdaf', 'fffff', 'iiiiiii', '339018card.png');

-- --------------------------------------------------------

--
-- Table structure for table `roster`
--

CREATE TABLE `roster` (
  `id` int(11) NOT NULL,
  `month` varchar(1000) NOT NULL,
  `student_id` int(100) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roster`
--

INSERT INTO `roster` (`id`, `month`, `student_id`, `course_id`) VALUES
(4, 'July', 4, 4),
(6, 'November', 2, 4),
(10, 'September', 9, 9),
(11, 'December', 12, 13);

-- --------------------------------------------------------

--
-- Table structure for table `students_details`
--

CREATE TABLE `students_details` (
  `id` int(255) NOT NULL,
  `date` varchar(1000) DEFAULT NULL,
  `name` varchar(1000) DEFAULT NULL,
  `invoice` varchar(1000) DEFAULT NULL,
  `country` varchar(1000) DEFAULT NULL,
  `dob` varchar(1000) DEFAULT NULL,
  `passport` varchar(1000) DEFAULT NULL,
  `duration` varchar(1000) DEFAULT NULL,
  `course_name` varchar(1000) DEFAULT NULL,
  `contact` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students_details`
--

INSERT INTO `students_details` (`id`, `date`, `name`, `invoice`, `country`, `dob`, `passport`, `duration`, `course_name`, `contact`) VALUES
(2, '11-Dec-20', 'Abdullah Esser', '22701', 'TURKEY', '31-Aug-91', 'U14735009', '12 Months', 'Foundation Language Learning Competencie (FLC)', '071 891 1852'),
(3, '27-Nov-20', 'Abel Kasongo Abedi', '22650', 'DRC', '18-Jul-94', 'OP0624886', '12 Months', 'Foundation Language Learning Competencie (FLC)', '063 866 8210'),
(4, '15-Oct-20', 'Abel Mbobola Ngoie', '37737', 'DRC', '27-Sep-97', 'OP0629678', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 837 5581'),
(5, 'January 27 2021', 'Abigael kapanga Kutemba', 'Inv 1000000022', 'DRC', 'September 13 2003', 'OP0721220', '12 Months', 'Foundation Language Learning Competencie (FLC)', '081 702 4153'),
(6, '17-Nov-20', 'Abissa Mombod Marcolie Ivan', '22615', 'CONGO', '1-Jun-99', 'OA0331644', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(7, 'January 21 2021', 'Adja Mame Mariame Seydi', 'Inv 1000000016', 'SENEGAL', 'January 20 1985', 'AO22601997', '12 Months', 'Foundation Language Learning Competencie (FLC)', '074 041 7229'),
(8, '26/11/2020', 'Albert Eloinze', '22647', 'GABON', '16-Sep-95', '19GA40246', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(9, '12-Nov-20', 'Alexandra Panzo Francisco', '22601', 'ANGOLA', '30-Nov-04', 'N2G07987', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(10, 'January 20 2021', 'Alpha Ousmane Diallo', 'Inv 1000000008', 'GUINEA', 'October 10 1988', 'O00525053', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'alphaousmane2013@gmail.com'),
(11, 'January 20 2021', 'Angelique Eureka Demomo Kpalwele', '22775', 'DRC', 'June 26 2002', 'OP0601093', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 570 9610'),
(12, '9-Dec-20', 'Anifa Rhema Kabalu', '22687', 'DRC', '29-Mar-01', 'OP0580338', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(13, '4-Mar-20', 'Anura Madleenziza Ntchango', '37661', 'To be verified', 'To be verified', 'To be verified', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'To be verified'),
(14, 'January 15 2021', 'Arafat Adio Elvis', '22760', 'CONGO', 'April 16 2000', 'OA0455786', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'faith@fastshipping.co.za'),
(15, '25-Nov-20', 'Arty Lesly Funele Igouwe', '22644', 'GABON', '14-Aug-01', '19GA26961', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'artylesly2001@gmail.com'),
(16, '16-Oct-20', 'Astride Noeline Fayolies', '37750', 'GABON', '19-Dec-02', '17GA34158', '12 Months', 'Foundation Language Learning Competencie (FLC)', '083 964 6856'),
(17, '1-Dec-20', 'Audiphax Nishimwe', '22665', 'DRC', '7-Jan-99', 'OP0289362', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'nishiaudiphax@gmail.com'),
(18, 'January 15 2021', 'Audrey Carmella Bipanda ep Mayombo', '22759', 'GABON', 'September 29 1986', '17GA13465', '12 Months', 'Foundation Language Learning Competencie (FLC)', '072 484 1109'),
(19, '19-Nov-20', 'Axel Patrick Medou Menze', '22633', 'GABON', '23-Mar-91', '19GA25184', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(20, '30-Nov-20', 'Balbyne Mikombe Ndayi', '22653', 'DRC', '28-May-90', 'OP0450681', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'ashrienara@gmail.com'),
(21, '2-Oct-20', 'Benajmin Muya Kabeya', '37717', 'GUINEA', '19-Mar-00', 'RUA70987', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(22, 'October 14 2020', 'Berfy Gerdy Kingalobo', '37733', 'GABON', '26-Sep-02', '17GA07117', '12 Months', 'Foundation Language Learning Competencie (FLC)', '072 43 452'),
(23, '4-Nov-20', 'Beyounah Etamba Esenge', '37783', 'DRC', 'May 02 1983', 'OP0212304', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'takasongoinnocent@yahoo.fr'),
(24, '29-Oct-20', 'Biemaimee Nsala Iwondo', '37773', 'DRC', '1-Sep-02', 'OP0261472', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(25, '3-Dec-20', 'Billie-Bi-Evameyo', '22676', 'GABON', '10-Aug-96', '18GA44593', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'juniorkumba163@gmail.com'),
(26, '9-Nov-20', 'Cedrick Shamba Misenga', '70744', 'DRC', '6-Nov-96', 'OP0675442', '12 Months', 'Foundation Language Learning Competencie (FLC)', '083 486 6936'),
(27, '27-Oct-20', 'Chadrack Nkomgolo Lufuluabo', '37771', 'DRC', '5-Oct-99', 'OP0491361', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'eliekambala5@gmail.com'),
(28, '3-Mar-20', 'Chadrack Tshkembe Zeka', '37621', 'DRC', '1-Oct-00', 'OP0597113', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(29, '19-Nov-20', 'Chantal Mutowe Alphani', '22628', 'DRC', '23-Jul-13', 'OP0610614', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'arsenabin@gmail.com'),
(30, 'January 11 2021', 'Charles Lopaka Lobanji', '22747', 'DRC', '14-Sep-01', 'OP0213791', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 646 1854'),
(31, '23-Oct-20', 'Cherille Olivia Homomzui', '37764', 'GABON', '16-Mar-98', '17GA17023', '12 Months', 'Foundation Language Learning Competencie (FLC)', '067 829 4547'),
(32, '17-Nov-20', 'Chrisnovic Kitobo Chabu', '22616', 'DRC', '23-Jun-02', 'OP0008309', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(33, '23-Nov-20', 'Christian Ngoie Mukanzila', '70964', 'DRC', '23-Dec-98', 'OP0627298', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(34, '26-Nov-20', 'Christine Kazani Ngulula', '22645', 'DRC', '18-Oct-86', 'OP0048277', '12 Months', 'Foundation Language Learning Competencie (FLC)', '074 867 5196'),
(35, 'February 01 2021', 'Christine Mpunga', '22795', 'DRC', 'November 11 1989', 'OP0727313', '12 Months', 'Foundation Language Learning Competencie (FLC)', '082 368 5464'),
(36, '2-Nov-20', 'Christine Tshimng Bitota', '37776', 'DRC', '15-Jun-02', 'OP0601811', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(37, '19-Nov-20', 'Cimeentha Lilamve Ladzolanzen', '22634', 'DRC', '30-Apr-80', 'OP0398049', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'ladzolazemc@gmail.com'),
(38, 'February 03 2021', 'Cimeentha Lilamve Ladzolanzen', '22799', 'DRC', 'April 30 1980', 'OP0398049', '12 months', 'Foundation Language Learning Competencie (FLC)', 'ladzolazemc@gmail.com'),
(39, '3-Oct-20', 'Cindy Kaba Mpambu', '37714', 'DRC', 'April 01,1990', 'OP0102650', '12 Months', 'Foundation Language Learning Competencie (FLC)', '076 785 2016'),
(40, '3-Mar-20', 'Claude P.Mouanga Bibang', '37623', 'GABON', '15-Mar-96', '18GA15834', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(41, '23-Oct-20', 'Crispin Nkuma Kapuluayi', '37762', 'DRC', '2-Jul-85', '0P0404927', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'ilungaclaude98@gmail.com'),
(42, '21-Oct-20', 'Dady Dorian Nzamba Nzamba', '37756', 'GABON', '30-Jan-98', '19GA25733', '12 Months', 'Foundation Language Learning Competencie (FLC)', '067 212 2886'),
(43, '18-Nov-20', 'Dalida Bwana Yama', '22625', 'DRC', '10-Aug-97', 'OP0566566', '12 Months', 'Foundation Language Learning Competencie (FLC)', '074 365 0842'),
(44, '15-Oct-20', 'Daniel Kabwika Kayembe', '37736', 'DRC', '7-Jul-97', 'OP0685759', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 837 5581'),
(45, '11-Dec-20', 'Daniella Andreanie Lobeault Lengada', '22700', 'GABON', '5-Jun-01', '19GA24571', '12 Months', 'Foundation Language Learning Competencie (FLC)', '068 296 0443'),
(46, '23-Nov-20', 'David Lukanda Ngoie', '22638', 'DRC', '18-Jun-98', 'OP0706725', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(47, '13-Oct-20', 'David Nsenga Kapotwe', '37730', 'DRC', '10-Oct-91', 'OP0281068', '12 Months', 'Foundation Language Learning Competencie (FLC)', '067 213 2271'),
(48, 'January 20 2021', 'Deborah Mayangi Mvibudulu', 'Inv 1000000014', 'DRC', 'April 04 1995', 'OP0730439', '12 Months', 'Foundation Language Learning Competencie (FLC)', '061 718 5863'),
(49, '30-Nov-20', 'Desiree Fanella Lagssegue Ankira', '22656', 'GABON', '7-Jul-01', '19GA27086', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'leyassalaurya@gmail.com'),
(50, 'January 22 2021', 'Diamond Ngoie Kazembe', 'Inv 1000000017', 'DRC', 'May 26 1998', 'OP0418564', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'diamondkaz@icloud.com'),
(51, '13-Jan-20', 'Didier Kazadi Kazadi', '70554', 'DRC', '23-Aug-93', 'OP0665388', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'To be verified'),
(52, '21-Oct-20', 'Diomildo Eduardo Dacruzinto', '37755', 'ANGOLA', '5-Oct-85', 'N2057492', '12 Months', 'Foundation Language Learning Competencie (FLC)', '067 674 9658'),
(53, '11-Dec-20', 'Divine Noela Kasiko Kayembe Manjat', '22696', 'DRC', '22-Nov-02', 'OP0361068', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'mwambakasiko@aim.com'),
(54, '14-Dec-20', 'Dorcas Kote Mundeke', '22707', 'DRC', '9-Dec-98', 'OP0599567', '12 Months', 'Foundation Language Learning Competencie (FLC)', '061 718 5863'),
(55, 'February 01 2021', 'Eddy Kimba Tabu', '22784', 'DRC', 'October 29 1998', 'OP0481556', '12 Months', 'Foundation Language Learning Competencie (FLC)', '084 826 3165'),
(56, '30-Dec-20', 'Eldin Claymougoula Loundou', '22720', 'GABON', '23-Jul-02', '19GA47484', '12 Months', 'Foundation Language Learning Competencie (FLC)', '061 176 6551'),
(57, '11-Dec-20', 'Eliada Mwamba Kasiko', '22697', 'DRC', '18-Jun-01', 'OP0361067', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'mwambakasiko@aim.com'),
(58, '14-Dec-20', 'Elie Oel Yannick Kwedt Boundaniba', '22708', 'GABON', '23-Jul-01', '19GA45607', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'floreanomande@yahoo.com'),
(59, 'Junuary 07, 2021', 'Elisabeth Wosho Lomami', '22738', 'DRC', '9-Nov-02', 'OP0634304', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 104 6913'),
(60, 'January 08 2021', 'Elshaimaa Ashraf Shabaan Elsayed', '22741', 'EGYPT', '23-Jun-06', 'A24554879', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'asmashome@gmail.com'),
(61, '10-Oct-20', 'Eric Mbuyi Tshitenge', '37727', 'DRC', '16-Jun-00', 'OP0611117', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(62, '3-Nov-20', 'Esther Kivatsi Kahambu', '37781', 'DRC', '20-Nov-02', 'OP0505376', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'kitimayangu@gmail.com'),
(63, 'January 22 2021', 'Eunice- Dulcie Kiyindou Mbemba', 'Inv 1000000019', 'DRC', 'August 03 1988', 'OP0649372', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'eunicedulcie@gmail.com'),
(64, '2-Nov-20', 'Evariste Daving Ingrid', '37774', 'GABON', '30-Jul-02', '19GA47072', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'mendimeingrid@gmail.com'),
(65, '4-Mar-20', 'Evodie Kapend Tsheusi', '37666', 'DRC', '12-Mar-99', 'OP0604324', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(66, 'Junuary 05, 2021', 'Fabrice Busaka Mpumbu', '22732', 'DRC', '5-Jun-97', 'OPO499863', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(67, '19-Nov-20', 'Fabrice Famba Alphani', '22627', 'DRC', '24-May-14', 'OP0610751', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(68, '23-Nov-20', 'Francis Nyota Lwamba', '22637', 'DRC', '18-Dec-02', 'OP0603838', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(69, 'January 19 2021', 'Franck Gaston Ngoie', '22767', 'DRC', 'May 17 1997', 'OP0467470', '12 Months', 'Foundation Language Learning Competencie (FLC)', '081 415 7444'),
(70, '10-Dec-20', 'George Ticko Ganda Bopoulou', '22694', 'CONGO', '28-Aug-96', 'OA0425196', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'george.ganda@gmail.com'),
(71, '10/7/2020', 'Gertrude Amunaso Kitenge', '37721', 'DRC', '4-Apr-75', 'OP0048233', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(72, 'January 20 2021', 'Gladys Dingoma Nzenze', '22776', 'DRC', 'November 29 1993', 'OP0698609', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 570 9610'),
(73, '13-Oct-20', 'Glody Mukhaya Nkita', '37732', 'DRC', '18-Oct-99', 'OP0607733', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 602 5016'),
(74, 'January 20 2021', 'Gloria Kiteba Kiteba', '22773', 'DRC', 'December 12 2002', 'OP0723392', '12 Months', 'Foundation Language Learning Competencie (FLC)', '076 090 2212'),
(75, '10-Dec-20', 'Grace Kathucias Avome Essono', '22691', 'GABON', '9-Aug-90', '19GA45283', '12 Months', 'Foundation Language Learning Competencie (FLC)', '061 992 5306'),
(76, 'January 20 2021', 'Grace Kiteba Kiteba', '22774', 'DRC', 'February 24 2001', 'OP0723376', '12 Months', 'Foundation Language Learning Competencie (FLC)', '076 090 2212'),
(77, '3-Nov-20', 'Grace Libanza Nzili', '37777', 'DRC', '20-Feb-92', 'OP0561773', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'jimmykasangule@gmail.com'),
(78, '12-Oct-20', 'Grace Nkubi Makiesse', '37728', 'DRC', '26-Dec-95', 'OP0663439', '12 Months', 'Foundation Language Learning Competencie (FLC)', '065 392 6348'),
(79, 'January 20 2021', 'Gracia Gracia Mbenza', '22772', 'DRC', 'December 31 1994', 'OP0339673', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 570 9610'),
(80, '29-Oct-20', 'Grandi Ilunga Mbayo Kabulo', '37772', 'DRC', '5-Jan-02', 'OP0213804', '12 Months', 'Foundation Language Learning Competencie (FLC)', '067 862 2724'),
(81, '19-Oct-20', 'Guy Laurent Mayonemaingoua', '37751', 'GABON', '18-Aug-00', '19GA25271', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(82, '30-Nov-20', 'Guy Lilian Ndong Nguema', '22662', 'GABON', '2-Jan-00', '19GA51840', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'rotoskombora@gmail.com'),
(83, '12-Nov-20', 'Guy Patrick Manfoumbi Nzamba', '22602', 'GABON', '10-May-98', '17GA1535', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(84, '4-Nov-20', 'Hanna Dolores Gongryp Onvoghe', '37790', 'GABON', '23-May-02', '19GA26757', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(85, '4-Jan-21', 'Helene Milena Menguemoto', '22726', 'GABON', '2-Nov-01', '19GA50371', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(86, '19-Nov-20', 'Henriette Ramazani Riziki', '22629', 'DRC', '1-Aug-77', 'OP0600437', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(87, '10-Nov-20', 'Heritier Mufinfa Namazinoka', '37796', 'DRC', '25-Nov-00', 'OP0630202', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'corenemumba@yahoo.com'),
(88, '6-Nov-20', 'Husnny Shabane Nsomembot', '37792', 'GABON', 'April 25 2000', '19GA08723', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'mkabamba3@gmail.com'),
(89, '2-Mar-20', 'Ilungu Chadrack Mbuyamba', '37616', 'To be verified', '26-Jul-98', 'PTA COG 22075495', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'To be verified'),
(90, '18-Nov-20', 'Ines Raissa Icapiep Mbombo', '22619', 'GABON', '26-Dec-80', '18GA13538', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(91, '4-Mar-20', 'Inesse Kapend Ambwamb', '37665', 'DRC', '24-Jan-98', 'OP0601653', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(92, '30-Nov-20', 'Isaac Kibawa Kambala', '22654', 'DRC', '22-Nov-00', 'OP0186953', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'jeanmanckim77@gmail.com'),
(93, 'February 02 2021', 'Isidore Emmanuel Mwema', '22796', 'DRC', 'July 11 2001', 'OP0634301', '12 Months', 'Foundation Language Learning Competencie (FLC)', '073 138 9690'),
(94, '16-Oct-20', 'Issa Hyacinthe Mambada Nyembo', '37741', 'DRC', '13-Jul-05', 'OP0711085', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'africaborwaservices@gmail.com'),
(95, '22-Oct-20', 'Jacky Yesi Bussungu Mbadinga', '37759', 'GABON', '8-Aug-02', '19GA21618', '12 Months', 'Foundation Language Learning Competencie (FLC)', '067 610 5621'),
(96, '17-Nov-20', 'Jacob Lwifi Kahimbo', '22612', 'DRC', '19-May-00', 'OP0483851', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(97, '8-Oct-20', 'Jacques Mwenge Mukaza', '37722', 'DRC', '20-Jun-99', 'OP0052202', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(98, '16-Oct-20', 'Jacques Tshimanga Mutombo', '37739', 'DRC', '29-Mar-01', 'OP0422573', '12 Months', 'Foundation Language Learning Competencie (FLC)', '073 829 7389'),
(99, '19-Oct-20', 'Jealuc Kongolo Kalumba', '37745', 'DRC', '21-Oct-01', 'OP0573634', '12 Months', 'Foundation Language Learning Competencie (FLC)', '073 748 0225'),
(100, '26/11/2020', 'Jean Dorance Engohang Essone', '22646', 'GABON', '4-Mar-96', '19GA27450', '12 Months', 'Foundation Language Learning Competencie (FLC)', '067 906 1447'),
(101, '2-Dec-20', 'Jemima Nkonko Kasongo Kambaji', '22672', 'DRC', '8-Jul-01', 'OP0616496', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(102, '17-Nov-20', 'Jeremie Lommami Okembanzambe', '22614', 'DRC', '19-Nov-00', 'OP0616575', '12 Months', 'Foundation Language Learning Competencie (FLC)', '076 149 8780'),
(103, 'January 18 2021', 'Jessy Merveen Kennet Malonda Ntoutoume', '22766', 'GABON', 'August 13 2000', '17GA26250', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(104, '14-Dec-20', 'Joel Cubaka Kahasha', '22704', 'DRC', '13-Aug-99', 'OP0598506', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(105, '18-Nov-20', 'Joesph Pacome Kegngnina', '22618', 'CAMEROON', '21-Dec-98', '1066883', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(106, 'Junuary 05, 2021', 'Jonathan Mulumba Bipi', '22731', 'DRC', '28-May-98', 'OP0718059', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(107, '4-Nov-20', 'Jordi Nsenga Yumba', '37785', 'DRC', 'January 08 1998', 'OP0481795', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(108, '4-Nov-20', 'Jordi Nsenga Yumba', '37785', 'DRC', '8-Jan-98', 'OP0481795', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'jordinsenga@hotmail.fr'),
(109, '7-Dec-20', 'Junior Mendes Nzandande', '22682', 'ANGOLA', '25-Jan-96', 'N2629599', '12 Months', 'Foundation Language Learning Competencie (FLC)', '065 928 9293'),
(110, '2-Oct-20', 'Kabwika Mwanga', '37718', 'DRC', '21-Oct-97', 'OP0709221', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(111, 'Junuary 04, 2021', 'Kanku Blessing Ntumba', '22724', 'DRC', '8-Apr-96', 'OP0721110', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'Llovekanku21@gmail.com'),
(112, 'Junuary 07, 2021', 'Keitia Mbyumba Miandabu', '22739', 'DRC', '22-Jul-02', 'OP0248816', '12 Months', 'Foundation Language Learning Competencie (FLC)', '072 670 4095'),
(113, '10-Dec-20', 'Kennedy Ngoy Wa Ngoy', '22693', 'DRC', '22-Nov-98', 'OP0648691', '12 Months', 'Foundation Language Learning Competencie (FLC)', '073 947 4854'),
(114, '1-Dec-20', 'Keren Midon Samy', '22666', 'DRC', '15-Sep-02', 'OP0590045', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'vanilla@bpiintl.com'),
(115, '5-Oct-20', 'Kerene Lubwa Kapinga', '37719', 'DRC', 'April 04 2002', 'OP0580725', '12 Months', 'Foundation Language Learning Competencie (FLC)', '061 169 6305'),
(116, '3-Oct-20', 'Ketia Banza', '37715', 'DRC', '5-Feb-00', 'OP0617356', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(117, 'January 22 2021', 'Ketsia Ilunga Kazembe', 'Inv 1000000018', 'DRC', 'April 29 2000', 'OP0419292', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'diamondkaz@icloud.com'),
(118, 'January 19 2021', 'Khalid Mohamed Abukar', '22769', 'SOMALIA', 'April 21 2002', 'P00946596', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'dahircc@gmail.com'),
(119, '23-Oct-20', 'Kwete Bope Chirac Marcel', '37765', 'DRC', '2-Feb-90', 'OP0419768', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(120, '19-Oct-20', 'Laeticia Kambulu Kangudi', '37752', 'DRC', 'December 10 1992', 'OP0470852', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(121, '9-Oct-20', 'Lidvin Mesmin Megha', '37723', 'GABON', '21-Jun-99', '15GA74403', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(122, '23-Oct-20', 'Lidvin Mesmin Megha', '37761', 'GABON', '21-Jun-99', '19GA40600', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(123, '23-Oct-20', 'Lilian Rustique Mboumbaikapi', '37763', 'GABON', '9-Feb-00', '18GA17306', '12 Months', 'Foundation Language Learning Competencie (FLC)', '084 370 7116'),
(124, '16-Oct-20', 'Linda Stella Eguessi', '37740', 'GABON', '21-Aug-84', '19GA24790', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(125, 'January 15 2021', 'Losane Faustine Patricia Kololo', '22758', 'CONGO', 'November 03 2002', 'OA0206031', '12 Months', 'Foundation Language Learning Competencie (FLC)', '082 290 4381'),
(126, '6-Nov-20', 'Loyd Julian Zue- Nguema', '37791', 'GABON', '15-Apr-00', '19GA40086', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(127, 'January 26 2021', 'Luc Mwalisa Kulita', 'Inv 1000000020', 'DRC', 'June 07 2001', 'OP0729510', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 646 1854'),
(128, '17-Dec-20', 'Mahanaim Mutshail Kabwiz', '22712', 'DRC', '15-Nov-01', 'OP0642051', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(129, '20-Oct-20', 'Mahbobur Rahman', '37748', 'BANGLADESH', '19-Feb-89', 'BW0317588', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(130, '2-Mar-20', 'Mamadou Akidu Barry', '37612', 'To be verified', 'To be verified', 'To be verified', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'To be verified'),
(131, '26-Nov-20', 'Mamadou Sidibe', '22648', 'FRANCE', '1-Oct-86', '18EH49443', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(132, '30-Nov-20', 'Mamaoudou', '22651', 'FRANCE', '1-Oct-86', '18EH49443', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(133, '27-Oct-20', 'Maria Nakeya', '37769', 'RSA', '26-Jun-66', '66 06 261 195 182', '12 Months', 'Foundation Language Learning Competencie (FLC)', '071 959 5589'),
(134, '13-Nov-20', 'Mariana Niane', '22609', 'SENEGAL', '1-Jul-92', 'A02678393', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 832 3951'),
(135, '3-Nov-20', 'Marie Denise Mayizandouny', '37779', 'GABON', '30-Jan-96', '19GA10495', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(136, '5-Nov-20', 'Marie Pembamboto Makonga', '37787', 'DRC', '6-Dec-17', 'OP0284296', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(137, '17-Dec-20', 'Marie Yav Madil', '22711', 'DRC', '18-May-67', 'OP0472798', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(138, '11-Dec-20', 'Mario Berjo De Almeida Baptista', '22699', 'ANGOLA', '19-Oct-90', 'N2590977', '12 Months', 'Foundation Language Learning Competencie (FLC)', '076 999 5662'),
(139, '4-Dec-20', 'Marlene Bahai Kabange', '22678', 'DRC', '16-Jul-96', 'OP0516389', '12 Months', 'Foundation Language Learning Competencie (FLC)', '060 625 9266'),
(140, '30-Nov-20', 'Marteza Da Conceicai Bravo Ndala', '22658', 'ANGOLA', '10-May-02', 'N2592719', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'salvadorbravo169@gmail.com'),
(141, '19-Nov-20', 'Marthe Robin Fortune Bendjer', '22632', 'GABON', '6-Jul-99', '17GA20831', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(142, '30-Dec-20', 'Masaka Damesh Mamfoubi', '22723', 'GABON', '24-Aug-98', '17GA20874', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'eddydougandaga@icloud.com'),
(143, '13-Nov-20', 'Matata Josephine Masudi', '22608', 'DRC', '25-Apr-00', 'OP0707399', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(144, '27-Oct-20', 'Mechack Ntumba Lufuluabo', '37770', 'DRC', '5-Oct-99', 'OP0520256', '12 Months', 'Foundation Language Learning Competencie (FLC)', '067 082 6563'),
(145, '2-Dec-20', 'Melinda Violeta Mbidika', '22667', 'ANGOLA', '4-Apr-88', 'N2392374', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 077 3830'),
(146, 'January 18 2021', 'Michka Riana Mbou Tembo', '22761', 'GABON', 'March 23 1998', '19GA47006', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'leonndoungani@gmail.com'),
(147, '13-Nov-20', 'Mika Kabeya Ntambwe', '22605', 'DRC', '25-Sep-96', 'OP0632140', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(148, 'January 27 2021', 'Mirys Raissa Angue Minko', 'Inv 1000000021', 'GABON', 'September 11 1978', '19GA27246', '12 Months', 'Foundation Language Learning Competencie (FLC)', '072 645 4753'),
(149, '14-Dec-20', 'Mohamammed Boubacar', '22705', 'COTE D IVOIRE', '20-Sep-93', '17AL14376', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(150, '26-Oct-20', 'Mohamed Zakariye', '37767', 'SOMALIA', '3-May-88', 'PTASOM000121117', '12 Months', 'Foundation Language Learning Competencie (FLC)', '061 873 2010'),
(151, '14-Oct-20', 'Mohamed Zougmore', '37734', 'BURKINA FASO', '31-Dec-91', 'A3100491', '12 Months', 'Foundation Language Learning Competencie (FLC)', '062 074 2614'),
(152, '3-Oct-20', 'Ms Rabbie Tshimanga Mbombo', '37716', 'DRC', '5-Jun-97', 'OP0647584', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(153, '4-Mar-20', 'Musinde Martial Mukwemba', '37615', 'To be verified', 'April 30 1998', 'PTACOD001881019', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'To be verified'),
(154, 'Junuary 04, 2021', 'Myriam Bosala Kasogo', '22725', 'DRC', '31-Aug-01', 'OP0527141', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'myriamkasogo@gmail.com'),
(155, 'January 15 2021', 'Nancy Balumiza', '22755', 'DRC', 'August 03 1993', 'OP0714061', '12 Months', 'Foundation Language Learning Competencie (FLC)', '061 176 1410'),
(156, 'Junuary 06, 2021', 'Nanou Likunde Watsheke', '22736', 'DRC', '5-May-75', 'OP0683076', '12 Months', 'Foundation Language Learning Competencie (FLC)', '061 346 4618'),
(157, '29-Oct-20', 'Naomie Ipanga Manyinga', '70538', 'DRC', '15-Jun-97', 'OP011145', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(158, '3-Mar-20', 'Nice Vrayance Lembengoundi', '37643', 'GABON', 'June 07 1997', '17GA05923', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'To be verified'),
(159, 'February 03 2021', 'Nicolas Makolo Nyamabu', '22798', 'DRC', 'April 07 1997', 'OP0727444', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 920 7408'),
(160, '30-Dec-20', 'Nils Thevann Mounanga', '22722', 'GABON', '13-Jun-98', '20GA10590', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'eddydougandaga@icloud.com'),
(161, '25-Nov-20', 'Odon Jacques Kitoko Kikanga', '22643', 'DRC', '2-Sep-89', 'OP0586231', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'odonjacqueskikanga014@gmail.com'),
(162, '9-Dec-20', 'Ornella Abedi Miezi', '22686', 'DRC', '5-Jul-93', 'OP0595127', '12 Months', 'Foundation Language Learning Competencie (FLC)', '074 649 6551'),
(163, 'January 11 2021', 'Patrick Embolw Success Missile', '22745', 'DRC', '6-Dec-81', 'OP0353125', '12 Months', 'Foundation Language Learning Competencie (FLC)', '083 591 3828'),
(164, '22-Dec-20', 'Paul Daniel Mukeya Pweto', '22718', 'DRC', '14-Jul-99', 'OP0480699', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'chelyayalukasu@gmail.com'),
(165, '4-Dec-20', 'Paulin Cingomba Cingomba', '22677', 'DRC', '26-Jun-01', 'OP0683267', '12 Months', 'Foundation Language Learning Competencie (FLC)', '067 601 4211'),
(166, '19-Oct-20', 'Pauline Biabende Biuma', '37743', 'DRC', 'November 11 1974', 'OP0710785', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(167, '10-Oct-20', 'Pearce Whesley Mienandi Nzaba', '37726', 'GABON', '12-Oct-99', '18GA36231', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(168, 'January 08 2021', 'Pierre Mpunzi Lwakoma', '22740', 'DRC', '27-May-02', 'OP0491757', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'jacqueskismag@gmail.com'),
(169, '18-Nov-20', 'Prince Feray Vaxyn Mbombo', '22620', 'GABON', '23-Apr-06', '18GA14439', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(170, '4-Dec-20', 'Prisca Kindall Lengata', '22679', 'GABON', '29-Aug-01', '19GA46942', '12 Months', 'Foundation Language Learning Competencie (FLC)', '073 871 0450'),
(171, '10-Oct-20', 'Rachel Mulanganieke', '37724', 'DRC', '11-Oct-98', 'OP0095308', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(172, '9-Nov-20', 'Rebecca Banze Malela', '37795', 'DRC', '19-Nov-99', 'OP0516152', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(173, '10-Dec-20', 'Reine-Edwige Ikogou Alama', '22689', 'GABON', '25-Aug-00', '19GA25723', '12 Months', 'Foundation Language Learning Competencie (FLC)', '063 213 9914'),
(174, '11-Dec-20', 'Rodrick Mayele Ngwete', '22698', 'DRC', '24-Apr-82', 'OP0548834', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(175, '24-Nov-20', 'Roseline Emmanuelle Gnanto', '22641', 'GABON', '17-Jan-00', '19GA46993', '12 Months', 'Foundation Language Learning Competencie (FLC)', '063 073 7554'),
(176, '20-Oct-20', 'Sabel Epinibi Diawara', '37746', 'GABON', 'February 22, 0200', '16GA23477', '12 Months', 'Foundation Language Learning Competencie (FLC)', '083 959 5768'),
(177, 'January 19 2021', 'Sadia Mire Mohamed', '22765', 'SOMALIA', 'August 28 1990', 'P00996426', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'suweysara@gmail.com'),
(178, '2-Dec-20', 'Samy Kal Uluma Saidy', '22669', 'DRC', '26-Apr-00', 'OP0421961', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'vanilla@bpiintl.com'),
(179, '22-Dec-20', 'Samy Kongolo Musengayi', '22717', 'DRC', '29-Apr-00', 'OP0600468', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(180, '30-Oct-20', 'Sandra Kabila Nkulu', '70636', 'DRC', '23-Dec-00', 'OP0629948', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(181, '18-Nov-20', 'Sandra Malenda Mbula', '22626', 'DRC', '12-Jul-84', 'OP0566585', '12 Months', 'Foundation Language Learning Competencie (FLC)', '082 765 2611'),
(182, '9-Nov-20', 'Sandra Sambwe Ngoie', '70743', 'DRC', 'Septermber 24, 1996', 'OP0676123', '12 Months', 'Foundation Language Learning Competencie (FLC)', '083 486 6936'),
(183, '16-Oct-20', 'Selma Immaculee Kashinda Mulaja', '37742', 'DRC', '27-Jul-11', 'OP0711016', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(184, '30-Nov-20', 'Silfried Onanga', '22660', 'GABON', 'July 08 2003', '19GA25509', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'onangasilfried@gmail.com'),
(185, '13-Nov-20', 'Sofwa Fane Maglojre Benjamin', '22606', 'DRC', '16-Oct-00', 'OP0458985', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(186, '10-Dec-20', 'Steeg Alicia Rolina Mafoumbi Ndoundou', '22690', 'GABON', '5-Apr-03', '19GA47035', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(187, 'January 11 2021', 'Sten Axel Boussougou Ibing', '22746', 'GABON', '19-Jun-97', '19GA46381', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(188, '4-Mar-20', 'Stephane Sampolokibawa', '37664', 'DRC', 'June 11 1995', 'OP0119972', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'To be verified'),
(189, 'Junuary 05, 2021', 'Stephanie Mujinga Mulumba', '22730', 'DRC', '11-Oct-02', 'OP0718072', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(190, 'January 15 2021', 'Sthemy Vinga', '22757', 'GABON', 'November 27 1986', '19GA33553', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'vingasthemy@gmail.com'),
(191, 'January 20 2021', 'Taline Ortegra Nzila', '22771', 'CONGO', 'January 30 1991', 'OA0349105', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'nzilataline71@gmail.com'),
(192, 'January 11 2021', 'Tharcisse Kongba Ndima', '22749', 'DRC', '2-Jun-02', 'OP0721998', 'Unverified', 'Foundation Language Learning Competencie (FLC)', '074 502 2407'),
(193, '11-Dec-20', 'Theresa Flora Ondounda Ngouoni', '22702', 'GABON', '6-Mar-98', '19GA26213', '12 Months', 'Foundation Language Learning Competencie (FLC)', '061 176 6531'),
(194, 'Junuary 05, 2021', 'Thesy Banshima Mulumba', '22729', 'DRC', '12-Aug-96', 'OP0718074', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(195, '30-Dec-20', 'Thuzinde Rogonjault', '22721', 'GABON', '26-Mar-97', '20GA42359', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'ashantyrogonjault@icloud.com'),
(196, '5-Nov-20', 'Tockebeo Kapinga Mbuyi', '37786', 'DRC', '22-Dec-95', 'OP0671099', '12 Months', 'Foundation Language Learning Competencie (FLC)', '082 677 4412'),
(197, '9-Nov-20', 'Tridi Kabanda Ngombe', '37797', 'DRC', '19-Apr-01', 'OP0605273', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'philktb@yahoo.fr'),
(198, '30-Nov-20', 'Vital Lumpungu Kabwika', '22655', 'DRC', '14-Jun-01', 'OP0490214', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'allegressemasika2@gmail.com'),
(199, '12-Nov-20', 'Wa Musenge Musegne Myaloro', '22604', 'DRC', '24-Jun-01', 'OP0710792', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(200, 'January 19 2021', 'Winny Shisso Ngoya', '22768', 'DRC', 'January 28 1996', 'OP0670375', '12 Months', 'Foundation Language Learning Competencie (FLC)', '061 476 5511'),
(201, '23-Nov-20', 'Wivine Fergines Mevang Mbombo Mbamba', '22635', 'GABON', '8-May-97', '18GA19328', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(202, 'Junuary 05, 2021', 'Wivine Ngomba Kazadi', '22733', 'DRC', '27-Nov-86', 'OP0715716', '12 Months', 'Foundation Language Learning Competencie (FLC)', '078 861 0102'),
(203, '18-Dec-20', 'Yan Kibullingu', '22715', 'DRC', '23-May-95', 'OP0666850', '12 Months', 'Foundation Language Learning Competencie (FLC)', '079 151 1963'),
(204, 'January 08 2021', 'Yehia Ashraf Shaaban Elsayed Elfar', '22742', 'EGYPT', '27-Jun-02', 'A24550289', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'asmashome@gmail.com'),
(205, '3-Dec-20', 'Zacharie Masimango', '22675', 'DRC', '16-Jun-03', 'OP0679961', '12 Months', 'Foundation Language Learning Competencie (FLC)', 'zachariemasimango03@gmail.com'),
(206, '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses_and_instructors`
--
ALTER TABLE `courses_and_instructors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_registration_list`
--
ALTER TABLE `master_registration_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roster`
--
ALTER TABLE `roster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_details`
--
ALTER TABLE `students_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `courses_and_instructors`
--
ALTER TABLE `courses_and_instructors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `master_registration_list`
--
ALTER TABLE `master_registration_list`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=458;

--
-- AUTO_INCREMENT for table `roster`
--
ALTER TABLE `roster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `students_details`
--
ALTER TABLE `students_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
