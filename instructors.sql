-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2021 at 10:30 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

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
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `id` int(11) NOT NULL,
  `instructor_id` varchar(1000) DEFAULT NULL,
  `name` varchar(1000) DEFAULT NULL,
  `common_name` varchar(1000) NOT NULL,
  `hire_date` varchar(1000) DEFAULT NULL,
  `phone` varchar(1000) DEFAULT NULL,
  `email` varchar(1000) DEFAULT NULL,
  `frequency` varchar(300) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `resign_date` date DEFAULT NULL,
  `identification` varchar(300) DEFAULT NULL,
  `idNumber` int(100) DEFAULT NULL,
  `paymentMethod` varchar(300) DEFAULT NULL,
  `BankName` varchar(300) DEFAULT NULL,
  `BankCode` int(100) DEFAULT NULL,
  `AccountNumber` int(100) DEFAULT NULL,
  `AccountType` varchar(300) DEFAULT NULL,
  `unitNumber` int(100) DEFAULT NULL,
  `Street` varchar(300) DEFAULT NULL,
  `town` varchar(300) DEFAULT NULL,
  `zipCode` int(100) DEFAULT NULL,
  `JobTitle` varchar(300) DEFAULT NULL,
  `incomeTaxNumber` int(100) DEFAULT NULL,
  `ContactNum` varchar(300) DEFAULT NULL,
  `EmergencyContact1` varchar(300) DEFAULT NULL,
  `EmergencyContact2` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`id`, `instructor_id`, `name`, `common_name`, `hire_date`, `phone`, `email`, `frequency`, `dob`, `resign_date`, `identification`, `idNumber`, `paymentMethod`, `BankName`, `BankCode`, `AccountNumber`, `AccountType`, `unitNumber`, `Street`, `town`, `zipCode`, `JobTitle`, `incomeTaxNumber`, `ContactNum`, `EmergencyContact1`, `EmergencyContact2`) VALUES
(2, '9612270055083', 'Lee-Ann Megan Moodley', 'Teacher LeeAnn', '3-Jun-21', '813949291', 'moodleyleeann75@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '9411160064085', 'Nicole Dollie', 'Teacher Nicole', '31-May-21', '671523085', 'nicole.dollie@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '8012205082081', 'Juan Souw', '', '31-May-21', '741405784', 'juansouw@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '9401180017080', 'Janelle Jacobs', '', '11-May-21', '071 895 5086', 'janellejcbs@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '9411250083086', 'Taylor Lee Abrahams', '', '5-May-21', '084 907 3879', 'abrahamstaylorlee@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '9411250083086', 'Taylor Lee Abrahams', '', '5-May-21', '084 907 3879', 'abrahamstaylorlee@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '9608220243084', 'Jessica Vuyelwa Oliphant', '', '5-May-21', '081 021 3787', 'jessicavulyewa@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, '8302015070081', 'Tertius', '', '1-Apr-21', '27610805452', 'tertius.carstens.1983@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, '7408285006084', 'Joop', '', '1-Mar-21', '073 394 3000', 'joopvj@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, '8302015070081', 'Carey', 'Teacher Carey', '1-Mar-21', '081 531 2833', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, '8003280046083', 'Aimee', '', '1-Mar-21', '082 870 3250', 'aimee.jvvuuren@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, '5667788', 'Tairo', '', '1-Mar-21', '072 250 1422', 'kim@avbg.co.za', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, '8512020235087', 'Ferah', '', '1-Mar-21', '082 871 7850', 'ganiferah@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, '3809125086083', 'Colin', '', '1-Mar-21', '083 487 2423', 'lifecoaching@ploka.co.za', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, '332482', 'test teacher', 'test', '2021-08-25', '323223', 'test@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, '653781', 'Mapula', 'Nchabeleng', '2021-08-01', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, '246779', 'Ntokozo', 'Hlatshwayo', '2021-08-01', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, '298150', 'Ashley ', 'Brandon Price', '2021-08-06', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, '356171', 'Indira Kohlo', 'Indira', '2021-08-01', '073 439 6514', 'indira.kohlo@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, NULL, 'Daphne Maqungo', 'Teacher Nono', '2020-01-09', NULL, 'nono@abcinternational.co.za', 'monthly', '0000-00-00', NULL, 'RSA ID', 770514, 'EFT', 'Standard Bank', 4805, 200360388, 'Cheque', 230, 'Mnagani Street', 'Johannesburg', 1868, 'Admin Clerk', 2147483647, NULL, NULL, NULL),
(23, NULL, 'Barbara Bakota', 'Teacher Barbara', '2021-04-01', NULL, 'barbara@crystalgarden.co.za', 'monthly', '0000-00-00', '2021-06-03', 'RSA ID', 701130, 'EFT', 'Nedbank', 192205, 2147483647, 'Savings', 5, 'Knights Avenue', 'Randburg', 21947, 'Admin / Teacher', 1790107849, NULL, NULL, NULL),
(24, NULL, 'Gloria Kholeka Butale', 'Teacher Gloria', '2021-01-12', NULL, 'gloriabutale@gmail.com', 'monthly', '1977-11-04', NULL, 'RSA ID', 770411, 'EFT', 'Standard Bank', 1005, 658048910, 'Savings', 353, 'Mimosa Street', 'Dobsonville', 1865, 'Admin / Teacher', NULL, NULL, NULL, NULL),
(25, NULL, 'Jaco Van Jaarsveld', 'Teacher Joop', '2021-01-03', NULL, 'joopvj@gmail.com', 'monthly', '0000-00-00', NULL, 'RSA ID', 740828, 'EFT', 'FNB', 250655, 2147483647, 'Cheque', 8, 'JF Kennedy Street', 'Kempton Park', 1622, 'Teacher', 2147483647, NULL, NULL, NULL),
(26, NULL, 'Ferahnaaz Ismail', 'Teacher Ferah', '2021-01-03', NULL, 'ganiferah@gmail.com', 'monthly', '1985-02-12', NULL, 'RSA ID', 851202, 'EFT', 'ABSA', 632005, 2147483647, 'Savings', 11, 'Holkam Road', 'Sandton', 2191, 'Teacher', 310385240, NULL, NULL, NULL),
(27, NULL, 'Carey Beatrice Leah Stuart', 'Teacher Carey', '2021-01-03', NULL, 'careystuart7@gmail.com', 'monthly', '1993-02-01', NULL, 'RSA ID', 930102, 'EFT', 'Capitec', 470010, 1339343930, 'Savings', 21, 'Poplar Road', 'Germiston', 1401, 'Teacher', 2147483647, NULL, NULL, NULL),
(28, NULL, 'Aimee Jansen Van Vuuren', 'Teacher Aimee', '2021-01-03', NULL, 'aimee.jvvuuren@gmail.com', 'monthly', '0000-00-00', NULL, 'RSA ID', 800328, 'EFT', 'Tyme Bank', 678910, 2147483647, 'Savings', 434, 'Highland Road', 'Johannesburg', 2094, 'Teacher', 1318313143, NULL, NULL, NULL),
(29, NULL, 'Tertius Christo Carstens', 'Teacher Tertius', '2021-01-04', NULL, 'Tertius.Carstens.1983@gmail.com', 'monthly', '1983-01-02', NULL, 'RSA ID', 830201, 'EFT', 'FNB', 212217, 2147483647, 'Cheque', 27, 'Watson Road', 'Johannesburg', 2192, 'Teacher', 1304128232, NULL, NULL, NULL),
(30, NULL, 'Taylor Lee Abrahams', 'Teacher Taylor', '2021-05-05', NULL, 'abrahamstaylorlee@gmail.com', 'monthly', '0000-00-00', NULL, 'RSA ID', 941125, 'EFT', 'Capitec', 470010, 1383125226, 'Savings', 81, 'Saint Aubyn Road', 'Johannesburg', 4071, 'Teacher', 1383125226, NULL, NULL, NULL),
(31, NULL, 'Jessica Vuyelwa Oliphant', 'Teacher Jessica', '2021-05-05', NULL, 'jessicavulyewa@gmail.com', 'monthly', '0000-00-00', NULL, 'RSA ID', 960822, 'EFT', 'Capitec', 470010, 1462076856, 'Savings', 6, 'Cole Street', 'Johannesburg', 2101, 'Teacher', NULL, NULL, NULL, NULL),
(32, NULL, 'Janelle Jacobs', 'Teacher Janelle', '2021-11-05', NULL, 'janellejcbs@gmail.com', 'monthly', '0000-00-00', NULL, 'RSA ID', 940118, 'EFT', 'Capitec', 470010, 1518466514, 'Savings', 27, 'Eastern Lane', 'Johannesburg', 1735, 'Teacher', 1414248169, NULL, NULL, NULL),
(33, NULL, 'Juan  Rossouw', 'Teacher Juan', '31-05-2021', NULL, 'juansaw@gmail.com', 'monthly', '0000-00-00', NULL, 'RSA ID', 801220, 'EFT', 'Capitec', 470010, 1587221649, 'Savings', 79, 'Sunrise Avenue', 'Krugersdorp', 1739, 'Teacher', 2147483647, NULL, NULL, NULL),
(34, NULL, 'Nicole Kirstine Dollie', 'Teacher Nicole', '31-05-2021', NULL, 'nicole.dollie@gmail.com', 'monthly', '0000-00-00', NULL, 'RSA ID', 941116, 'EFT', 'Standard Bank', 7654, 2147483647, 'Cheque', 203, 'Sterre Road', 'Johannesburg', 1811, 'Teacher', 2147483647, NULL, NULL, NULL),
(35, NULL, 'Lee-Ann Megan Moodley', 'Teacher LeeAnn', '2021-03-03', NULL, 'moodleyleeann75@gmail.com', 'monthly', '0000-00-00', NULL, 'RSA ID', 961227, 'EFT', 'ABSA', 630826, 2147483647, 'Cheque', 128, 'Solomon Street', 'Johannesburg', 2141, 'Teacher', NULL, NULL, NULL, NULL),
(36, NULL, 'Talent Dlamini', 'Talent', '2021-01-02', NULL, 'talentgold448@gmail.com', 'monthly', '1973-01-02', NULL, 'Zimbabwe ID', 732001, 'EFT', 'Standard Bank', 15137, 2147483647, 'Savings', 1714, 'Vlakfontein Road', 'Lenasia', 1829, 'Security', NULL, NULL, NULL, NULL),
(37, NULL, 'Monica Ndlovu', 'Monica', '2021-01-02', NULL, 'ndlovumonica080@gmail.com', 'monthly', '1994-05-09', NULL, 'Zimbabwe ID', 410925, 'E-WALLET', NULL, NULL, NULL, NULL, 302, 'Van Der Merwe Street', 'Johannesburg', 2001, 'Cleaning Executive', NULL, NULL, NULL, NULL),
(38, NULL, 'Mirriam Mapula Nchabeleng', 'Teacher Mapula', '2021-01-08', NULL, 'nchabeleng.mm@gmail.com', 'monthly', '1988-11-07', NULL, 'RSA ID', 8807, 'EFT', 'Capitec', NULL, 1280415728, 'Savings', 78, NULL, 'Johannesburg', 2090, 'Teacher', 2147483647, NULL, NULL, NULL),
(39, NULL, 'Ashley Brandon Price', 'Teacher Ashley', '2021-06-08', NULL, 'ash01price@gmail.com', 'monthly', '0000-00-00', NULL, 'RSA ID', 9211, 'EFT', 'Capitec', NULL, 1773312365, 'Savings', NULL, NULL, NULL, NULL, 'Teacher', NULL, NULL, NULL, NULL),
(40, NULL, 'Ntokozo', 'Teacher Ntokozo', NULL, NULL, 'ntokozohlatshwayo1993@gmail.com', 'monthly', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Johannesburg', NULL, 'Teacher', NULL, NULL, NULL, NULL),
(41, NULL, 'Indira Bever-Leigh Claire', 'Teacher Indira', NULL, NULL, 'indira.kohlo@gmail.com', 'monthly', '0000-00-00', NULL, 'RSA ID', 7011, 'EFT', 'ABSA', NULL, 2147483647, 'Savings', 22, 'Rober Bruce Street', 'Johannesburg', NULL, 'Teacher', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
