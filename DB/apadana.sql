-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2017 at 11:36 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apadana`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhr_coins`
--

CREATE TABLE `mhr_coins` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `buy` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `last_buy` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `sales` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `last_sales` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `res1` int(11) DEFAULT NULL,
  `res2` int(11) DEFAULT NULL,
  `res3` int(11) DEFAULT NULL,
  `res4` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `mhr_coins`
--

INSERT INTO `mhr_coins` (`id`, `code`, `title`, `buy`, `last_buy`, `sales`, `last_sales`, `status`, `res1`, `res2`, `res3`, `res4`) VALUES
(1, 'full-old', 'تمام بهار قدیم', '', '-1', '', '-1', 1, NULL, NULL, NULL, NULL),
(2, 'full-new', 'تمام بهار جدید', '11950000', '11920000', '12100000', '12070000', 1, NULL, NULL, NULL, NULL),
(3, 'half', 'نیم بهار', '6690000', '6670000', '6890000', '6870000', 1, NULL, NULL, NULL, NULL),
(4, 'quarter', 'ربع بهار', '3700000', '3680000', '3850000', '3880000', 1, NULL, NULL, NULL, NULL),
(5, 'g1', 'یک گرمی', '2250000', '2200000', '2400000', '2390000', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mhr_currency`
--

CREATE TABLE `mhr_currency` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `title_en` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `draft` varchar(50) COLLATE utf8_persian_ci NOT NULL DEFAULT '1000',
  `last_draft` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `buy` varchar(50) COLLATE utf8_persian_ci NOT NULL DEFAULT '1000',
  `last_buy` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `sales` varchar(50) COLLATE utf8_persian_ci NOT NULL DEFAULT '1000',
  `last_sales` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `arrangement` int(11) DEFAULT NULL,
  `featured_image` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `res1` int(11) DEFAULT NULL,
  `res2` int(11) DEFAULT NULL,
  `res3` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `mhr_currency`
--

INSERT INTO `mhr_currency` (`id`, `code`, `title`, `title_en`, `draft`, `last_draft`, `buy`, `last_buy`, `sales`, `last_sales`, `arrangement`, `featured_image`, `status`, `res1`, `res2`, `res3`) VALUES
(1, 'USD', 'دلار آمریکا', 'US-Dollar', '1200', 'لطفا تماس بگیرید', '1000', 'لطفا تماس بگیرید', '1100', 'لطفا تماس بگیرید', 1, 'USD.png', 1, NULL, NULL, NULL),
(2, 'EUR', 'یورو', 'Euro', 'لطفا تماس بگیرید', '40300', 'لطفا تماس بگیرید', '40500', 'لطفا تماس بگیرید', '40800', 2, 'EUR.png', 1, NULL, NULL, NULL),
(3, 'GBP', 'پوند انگلستان', 'British Pound', 'لطفا تماس بگیرید', '48200', 'لطفا تماس بگیرید', '47800', 'لطفا تماس بگیرید', '48250', 3, 'GBP.png', 1, NULL, NULL, NULL),
(4, 'CAD', 'دلار کانادا', 'Canadian Dollar', 'لطفا تماس بگیرید', 'از کاندا 29670', 'لطفا تماس بگیرید', '29400', 'لطفا تماس بگیرید', '29750', 4, 'CAD.png', 1, NULL, NULL, NULL),
(5, 'AUD', 'دلار استرالیا', 'Australian Dollar', 'لطفا تماس بگیرید', '29300', 'لطفا تماس بگیرید', '29700', 'لطفا تماس بگیرید', '30050', 11, 'AUD.png', 1, NULL, NULL, NULL),
(6, 'CHF', 'فرانک سوییس', 'Swiss Franc', '-1', '1-', '-1', '36300', '-1', '36800', 13, 'CHF.png', 1, NULL, NULL, NULL),
(7, 'JPY', 'ین ژاپن', 'Japanese Yen', '-1', '1-', '-1', '1-', '-1', '1-', 14, 'JPY.png', 1, NULL, NULL, NULL),
(8, 'SEK', 'کرون سوئد', 'Swedish Krone', 'لطفا تماس بگیرید', '4420', 'لطفا تماس بگیرید', '4110', 'لطفا تماس بگیرید', '4210', 8, 'SEK.png', 1, NULL, NULL, NULL),
(9, 'DKK', 'کرون دانمارک', 'Danish Krone', '-1', '1-', '-1', '5250', '-1', '5380', 9, 'DKK.png', 1, NULL, NULL, NULL),
(10, 'NOK', 'کرون نروژ', 'Norwegian Krone', '-1', '1-', '-1', '4200', '-1', '4350', 10, 'NOK.png', 1, NULL, NULL, NULL),
(11, 'AED', 'درهم امارات', 'Emiratei Dirham', 'لطفا تماس بگیرید', '10370', 'لطفا تماس بگیرید', '10490', 'لطفا تماس بگیرید', '10590', 5, 'AED.png', 1, NULL, NULL, NULL),
(12, 'TRY', 'لیر ترکیه', 'Turkish Lira', 'لطفا تماس بگیرید', '10720', 'لطفا تماس بگیرید', '10600', 'لطفا تماس بگیرید', '10800', 6, 'TRY.png', 1, NULL, NULL, NULL),
(13, 'MYR', 'رینگت مالزی', 'Malaysian Ringgit', 'لطفا تماس بگیرید', '8850', 'لطفا تماس بگیرید', '8800', 'لطفا تماس بگیرید', '9100', 12, 'MYR.png', 1, NULL, NULL, NULL),
(14, 'CNY', 'یوان چین', 'Chinese Yuan', 'لطفا تماس بگیرید', '5490', 'لطفا تماس بگیرید', '5400', 'لطفا تماس بگیرید', '5750', 7, 'CNY.png', 1, NULL, NULL, NULL),
(15, 'THB', 'بت تایلند', 'Thai Baht', '-1', '1-', '-1', '1-', '-1', '1-', 15, 'THB.png', 1, NULL, NULL, NULL),
(16, 'INR', 'روپیه هند', 'Indian Rupee', '-1', '1-', '-1', '1-', '-1', '1-', 16, 'INR.png', 1, NULL, NULL, NULL),
(17, 'SAR', 'ریال عربستان', 'Arabian Riyal', '-1', '1-', '-1', '', '-1', '', 17, 'SAR.png', 1, NULL, NULL, NULL),
(18, 'IQD', 'دینار عراق', 'Iraqi Dinar', '-1', '1-', '-1', '1-', '-1', '1-', 18, 'IQD.png', 1, NULL, NULL, NULL),
(19, 'RUB', 'روبل روسیه', 'Russian Ruble', '-1', '1-', '-1', '1-', '-1', '1-', 19, 'RUB.png', 1, NULL, NULL, NULL),
(20, 'AZN', 'منات آذربایجان', 'Azerbaijani New Manat', '-1', '1-', '-1', '0', '-1', '1-', 20, 'AZN.png', 1, NULL, NULL, NULL),
(21, 'AMD', 'درام ارمنستان', 'Armenian Dram', '-1', '1-', '-1', '1-', '-1', '1-', 21, 'AMD.png', 1, NULL, NULL, NULL),
(22, 'GEL', 'لاری گرجستان', 'Georgian Lari', '-1', '1-', '-1', '1-', '-1', '1-', 22, 'GEL.png', 1, NULL, NULL, NULL),
(23, 'KWD', 'دینار کویت', 'Kuwaiti Dinar', '-1', '1-', '-1', '1-', '-1', '1-', 23, 'KWD.png', 1, NULL, NULL, NULL),
(24, 'BHD', 'دینار بحرین', 'Bahraini Dinar', '-1', '1-', '-1', '1-', '-1', '1-', 24, 'BHD.png', 1, NULL, NULL, NULL),
(25, 'OMR', 'ریال عمان', 'Omani Rial', '-1', '1-', '-1', '1-', '-1', '1-', 25, 'OMR.png', 1, NULL, NULL, NULL),
(26, 'QAR', 'ریال قطر', 'Qatari Riyal', '-1', '1-', '-1', '1-', '-1', '1-', 26, 'QAR.png', 1, NULL, NULL, NULL),
(27, 'SYP', 'لیر سوریه', 'Syrian Pound', '-1', '1-', '-1', '1-', '-1', '1-', 27, 'SYP.png', 1, NULL, NULL, NULL),
(28, 'SGD', 'دلار سنگاپور', 'Singapore Dollar', '-1', '1-', '-1', '1-', '-1', '1-', 28, 'SGD.png', 1, NULL, NULL, NULL),
(29, 'NZD', 'دلار نیوزیلند', 'New Zealand Dollar', '-1', '1-', '-1', '1-', '-1', '1-', 29, 'NZD.png', 1, NULL, NULL, NULL),
(30, 'HKD', 'دلار هنگ‌کنگ', 'Hong Kong Dollar', '-1', '1-', '-1', '1-', '-1', '1-', 30, 'HKD.png', 1, NULL, NULL, NULL),
(31, 'PKR', 'روپیه پاکستان', 'Pakistani Rupees', '-1', '1-', '-1', '1-', '-1', '1-', 31, 'PKR.png', 1, NULL, NULL, NULL),
(32, 'AFN', 'افغانی', 'Afqani', '-1', '1-', '-1', '1-', '-1', '1-', 32, 'AFN.png', 1, NULL, NULL, NULL),
(33, 'MHR', 'محمد', '', '-1', '190', '140', '150', '180', '170', 33, 'b26d013f3f8a13c1b36d87cdd2341eaf.jpg', 2, NULL, NULL, NULL),
(34, 'ABS', 'عباس', '', '1050', '0', '1000', '0', '1010', '0', 32, 'PKR.png', 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mhr_setting`
--

CREATE TABLE `mhr_setting` (
  `id` int(10) UNSIGNED NOT NULL,
  `site_title` varchar(2000) COLLATE utf8_persian_ci NOT NULL,
  `address` varchar(2000) COLLATE utf8_persian_ci NOT NULL,
  `tel` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `fax` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `site_email` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `admin_email` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `admin_pass` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `site_status` int(11) NOT NULL,
  `last_login` bigint(20) NOT NULL,
  `about_us` varchar(5000) COLLATE utf8_persian_ci NOT NULL,
  `manager_msg` longtext CHARACTER SET utf8,
  `last_update` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `mhr_setting`
--

INSERT INTO `mhr_setting` (`id`, `site_title`, `address`, `tel`, `fax`, `site_email`, `admin_email`, `admin_pass`, `site_status`, `last_login`, `about_us`, `manager_msg`, `last_update`) VALUES
(1, 'صرافی آپادانا (شرکت تضامنی رضوی خسروشاهی و شرکا) بامجوز رسمی از بانک مرکزی', 'تهران، خیابان شهید بهشتی، خیابان صابونچی، نبش کوچه ایازی، پلاک ۹۱', '021-83820', '021-83820', 'info@apadanaex.com', 'info@apadanaex.com', '48382ac767744e3dd771a0c991bf4484', 2, 1431721698, ' شرکت تضامنی رضوی خسروشاهی و شرکا ثبت به شماره ۲۳۵۸۲۱ مورخ چهاردهم آبان ۱۳۸۳ دارای مجوز رسمی صرافی نوع دوم از بانک مرکزی جمهوری اسلامی ایران برای ارسال حواله‌جات و خرید و فروش ارز و سکه ', '&lt;p style=&quot;text-align:center&quot;&gt;فرا رسیدن نوروز باستانی را خدمت مشتریان گرانقدر تبریک عرض می نماییم.&lt;/p&gt;\n\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://localhost/apadana/assets/images/flags/f090ae6fd11e1306c4e2a5c63fee9cca.jpg&quot; /&gt;&lt;/p&gt;', 1488446537);

-- --------------------------------------------------------

--
-- Table structure for table `mhr_visitor_data`
--

CREATE TABLE `mhr_visitor_data` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `lastVisit` bigint(20) NOT NULL,
  `status` int(11) NOT NULL,
  `thisDay` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `referer` varchar(2000) COLLATE utf8_persian_ci DEFAULT NULL,
  `res1` int(11) DEFAULT NULL,
  `res2` int(11) DEFAULT NULL,
  `res3` int(11) DEFAULT NULL,
  `res4` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `mhr_visitor_data`
--

INSERT INTO `mhr_visitor_data` (`id`, `ip`, `lastVisit`, `status`, `thisDay`, `referer`, `res1`, `res2`, `res3`, `res4`) VALUES
(41915, '91.99.12.76', 1488436479, 1, '02', NULL, NULL, NULL, NULL, NULL),
(41916, '151.240.40.226', 1488400441, 1, '02', NULL, NULL, NULL, NULL, NULL),
(41917, '109.162.141.206', 1488400519, 1, '02', 'android-app://com.google.android.googlequicksearchbox', NULL, NULL, NULL, NULL),
(41918, '109.162.237.114', 1488400684, 1, '02', 'android-app://com.google.android.googlequicksearchbox', NULL, NULL, NULL, NULL),
(41919, '5.78.192.98', 1488402591, 1, '02', NULL, NULL, NULL, NULL, NULL),
(41920, '151.240.176.39', 1488402996, 1, '02', NULL, NULL, NULL, NULL, NULL),
(41921, '5.78.153.193', 1488405361, 1, '02', NULL, NULL, NULL, NULL, NULL),
(41922, '104.196.218.132', 1488406666, 1, '02', NULL, NULL, NULL, NULL, NULL),
(41923, '157.55.39.59', 1488406926, 1, '02', NULL, NULL, NULL, NULL, NULL),
(41924, '66.249.66.182', 1488407442, 1, '02', NULL, NULL, NULL, NULL, NULL),
(41925, '202.161.74.8', 1488408033, 1, '02', 'https://www.google.com.au/', NULL, NULL, NULL, NULL),
(41926, '213.217.54.8', 1488411745, 1, '02', NULL, NULL, NULL, NULL, NULL),
(41927, '73.87.154.104', 1488434090, 1, '02', NULL, NULL, NULL, NULL, NULL),
(41928, '38.64.218.193', 1488427653, 1, '02', NULL, NULL, NULL, NULL, NULL),
(41929, '66.102.7.151', 1488423121, 1, '02', NULL, NULL, NULL, NULL, NULL),
(41930, '66.249.66.65', 1488428354, 1, '02', NULL, NULL, NULL, NULL, NULL),
(41931, '76.31.143.60', 1488425217, 1, '02', 'https://www.google.com/', NULL, NULL, NULL, NULL),
(41932, '66.249.66.89', 1488426783, 1, '02', NULL, NULL, NULL, NULL, NULL),
(41933, '5.200.122.22', 1488429456, 1, '02', NULL, NULL, NULL, NULL, NULL),
(41934, '151.241.182.93', 1488435016, 1, '02', NULL, NULL, NULL, NULL, NULL),
(41935, '::1', 1488450451, 1, '02', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mhr_visitor_statistics_data`
--

CREATE TABLE `mhr_visitor_statistics_data` (
  `id` int(10) UNSIGNED NOT NULL,
  `totalVisit` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `yearVisit` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `thisYear` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `monthVisit` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `thisMonth` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `weekVisit` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `thisWeek` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `dayVisit` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `thisDay` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `toDayVisitor` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `onlineVisitor` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `res1` int(11) DEFAULT NULL,
  `res2` int(11) DEFAULT NULL,
  `res3` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `mhr_visitor_statistics_data`
--

INSERT INTO `mhr_visitor_statistics_data` (`id`, `totalVisit`, `yearVisit`, `thisYear`, `monthVisit`, `thisMonth`, `weekVisit`, `thisWeek`, `dayVisit`, `thisDay`, `toDayVisitor`, `onlineVisitor`, `res1`, `res2`, `res3`) VALUES
(1, '1851364', '413830', '2017', '7113', '03', '20398', '09', '858', '02', '42021', '1', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhr_coins`
--
ALTER TABLE `mhr_coins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code` (`code`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `mhr_currency`
--
ALTER TABLE `mhr_currency`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code` (`code`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `mhr_setting`
--
ALTER TABLE `mhr_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mhr_visitor_data`
--
ALTER TABLE `mhr_visitor_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ip` (`ip`);

--
-- Indexes for table `mhr_visitor_statistics_data`
--
ALTER TABLE `mhr_visitor_statistics_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mhr_coins`
--
ALTER TABLE `mhr_coins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mhr_currency`
--
ALTER TABLE `mhr_currency`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `mhr_setting`
--
ALTER TABLE `mhr_setting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mhr_visitor_data`
--
ALTER TABLE `mhr_visitor_data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41936;
--
-- AUTO_INCREMENT for table `mhr_visitor_statistics_data`
--
ALTER TABLE `mhr_visitor_statistics_data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
