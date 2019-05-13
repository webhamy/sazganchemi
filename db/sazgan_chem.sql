-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2018 at 10:22 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sazgan_chem`
--
CREATE DATABASE IF NOT EXISTS `sazgan_chem` DEFAULT CHARACTER SET utf8 COLLATE utf8_persian_ci;
USE `sazgan_chem`;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `date` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `p_name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `p_id` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `price` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `address` varchar(800) COLLATE utf8_persian_ci NOT NULL,
  `UserId` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `mobile` varchar(500) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `date`, `p_name`, `p_id`, `price`, `address`, `UserId`, `mobile`) VALUES
(1, '3شهریور 1397', 'پرمترین ۲۵% ای سی یک لیتری', '1', '15000', 'تهران ، تهرانپارس ، بلوار شاهد ، خیابان پروین ، نرسیده به خیابان196 ، پلاک382', '2', '09907974165'),
(2, '۴ شهریور ۱۳۹۷', 'پرمترین ۲۵% ای سی یک لیتری', '1', '3000', 'تهران ، تهرانپارس ، بلوار شاهد ، خیابان پروین ، نرسیده به خیابان196 ، پلاک382', '2', '09102189688'),
(3, '۴ شهریور ۱۳۹۷', 'روغن امولسیون شونده ۸۰% ای دابلیو', '2', '5000', 'تهران ، تهرانپارس ، بلوار شاهد ، خیابان پروین ، نرسیده به خیابان196 ، پلاک382', '2', '09191213869'),
(4, '۴ شهریور ۱۳۹۷', 'دلتامترین ۲/۵% ای سی یک لیتری', '4', '5000', 'تهران ، تهرانپارس ، بلوار شاهد ، خیابان پروین ، نرسیده به خیابان196 ، پلاک382', '3', '09191213869'),
(5, '۴ شهریور ۱۳۹۷', 'دیازینون ۶۰% ای سی یک لیتری', '5', '5000', 'تهران ، تهرانپارس ، بلوار شاهد ، خیابان پروین ، نرسیده به خیابان196 ، پلاک382', '2', '09191213869'),
(6, '۴ شهریور ۱۳۹۷', 'روغن امولسیون شونده ۸۰% ای دابلیو', '2', '15000', 'تهران ، تهرانپارس ، بلوار شاهد ، خیابان پروین ، نرسیده به خیابان196 ، پلاک382', '2', '09907974165'),
(7, '۴ شهریور ۱۳۹۷', 'روغن امولسیون شونده ۸۰% ای دابلیو', '2', '15000', 'تهران ، تهرانپارس ، بلوار شاهد ، خیابان پروین ، نرسیده به خیابان196 ، پلاک382', '5', '09907974165'),
(8, '۴ شهریور ۱۳۹۷', 'دلتامترین ۲/۵% ای سی یک لیتری', '4', '15000', 'تهران ، تهرانپارس ، بلوار شاهد ، خیابان پروین ، نرسیده به خیابان196 ، پلاک382', '4', '09907974165'),
(9, '۴ شهریور ۱۳۹۷', 'دلتامترین ۲/۵% ای سی یک لیتری', '4', '15000', 'تهران ، تهرانپارس ، بلوار شاهد ، خیابان پروین ، نرسیده به خیابان196 ، پلاک382', '4', '09907974165'),
(10, '۴ شهریور ۱۳۹۷', 'روغن امولسیون شونده ۸۰% ای دابلیو', '2', '15000', 'تهران ، تهرانپارس ، بلوار شاهد ، خیابان پروین ، نرسیده به خیابان196 ، پلاک382', '2', '09907974165'),
(11, '۴ شهریور ۱۳۹۷', 'روغن امولسیون شونده ۸۰% ای دابلیو', '2', '15000', 'تهران ، تهرانپارس ، بلوار شاهد ، خیابان پروین ، نرسیده به خیابان196 ، پلاک382', '2', '09907974165'),
(12, '۴ شهریور ۱۳۹۷', 'دلتامترین ۲/۵% ای سی یک لیتری', '4', '15000', 'تهران ، تهرانپارس ، بلوار شاهد ، خیابان پروین ، نرسیده به خیابان196 ، پلاک382', '2', '09907974165'),
(13, '۴ شهریور ۱۳۹۷', 'تبوکونازول ۶% اف اس ۴ لیتری', '6', '18000', 'تهران ، تهرانپارس ، بلوار شاهد ، خیابان پروین ، نرسیده به خیابان196 ، پلاک382', '6', '09907974165'),
(14, '۴ شهریور ۱۳۹۷', 'روغن امولسیون شونده ۸۰% ای دابلیو', '2', '15000', 'تهران ، تهرانپارس ، بلوار شاهد ، خیابان پروین ، نرسیده به خیابان196 ، پلاک382', '5', '09907974165'),
(15, '۴ شهریور ۱۳۹۷', 'پرمترین ۲۵% ای سی یک لیتری', '1', '15000', 'تهران ، تهرانپارس ، بلوار شاهد ، خیابان پروین ، نرسیده به خیابان196 ، پلاک382', '3', '09907974165'),
(16, '۵ شهریور ۱۳۹۷', 'دیازینون ۶۰% ای سی یک لیتری', '5', '15000', 'تهران ، تهرانپارس ، بلوار شاهد ، خیابان پروین ، نرسیده به خیابان196 ، پلاک382', '2', '09907974165'),
(17, '۵ شهریور ۱۳۹۷', 'مخلوط بردو ۱۸ % اس سی یک لیتری', '8', '15000', 'تهران ، تهرانپارس ، بلوار شاهد ، خیابان پروین ، نرسیده به خیابان196 ، پلاک382', '2', '09907974165'),
(18, '۷ شهریور ۱۳۹۷', 'دلتامترین ۲/۵% ای سی یک لیتری', '4', '15000', 'yhguj', '2', '09907974165'),
(19, '۱۰ شهریور ۱۳۹۷', 'دیفنوکونازول ۳% اف اس ۴ لیتری', '9', '15000', 'gggg', '2', '02177370795'),
(20, '۱۰ شهریور ۱۳۹۷', 'دیفنوکونازول ۳% اف اس ۴ لیتری', '9', '15000', 'gggg', '2', '02177370795'),
(21, '۱۰ شهریور ۱۳۹۷', 'دیفنوکونازول ۳% اف اس ۴ لیتری', '9', '15000', 'h', '2', '02177370795'),
(22, '۱۰ شهریور ۱۳۹۷', 'پروپارژیت ۵۷% ای سی یک لیتری', '11', '15000', 'h', '2', '02177370795'),
(23, '۱۱ شهریور ۱۳۹۷', 'پرمترین ۲۵% ای سی یک لیتری', '1', '15000', 'jjjjjjjjj', '2', '09191213869'),
(24, '۱۱ شهریور ۱۳۹۷', 'دیفنوکونازول ۳% اف اس ۴ لیتری', '9', '15000', 'jjjjjjjjj', '2', '09191213869'),
(25, '۱۲ شهریور ۱۳۹۷', 'دیفنوکونازول ۳% اف اس ۴ لیتری', '10', '15000', 'tyyyyyyyyyy', '2', '09907974165'),
(26, '۱۲ شهریور ۱۳۹۷', 'دیفنوکونازول ۳% اف اس ۴ لیتری', '10', '15000', 'tyyyyyyyyyy', '2', '09907974165'),
(27, '۱۲ شهریور ۱۳۹۷', 'روغن امولسیون شونده ۸۰%', '2', '15000', 'بللللللللللل', '9', '09907974165'),
(28, '۱۲ شهریور ۱۳۹۷', 'دلتامترین ۲/۵% ای سی', '4', '15000', 'بللللللللللل', '9', '09907974165'),
(29, '۱۲ شهریور ۱۳۹۷', 'سایپرمترین ۴۰% ای سی نیم لیتری', '3', '15000', 'بللللللللللل', '9', '09907974165'),
(30, '۱۲ شهریور ۱۳۹۷', 'دیازینون ۶۰% ای سی', '5', '15000', 'بللللللللللل', '9', '09907974165'),
(31, '۱۳ شهریور ۱۳۹۷', 'دیفنوکونازول ۳% اف اس', '9', '15000', 'hghg', '2', '02177370795'),
(32, '۱۳ شهریور ۱۳۹۷', 'روغن امولسیون شونده ۸۰%', '2', '15000', 'hghg', '2', '02177370795'),
(33, '۱۳ شهریور ۱۳۹۷', 'روغن امولسیون شونده ۸۰%', '2', '15000', 'lllllllll', '10', '02177370795'),
(34, '۱۳ شهریور ۱۳۹۷', 'سایپرمترین ۴۰% ای سی', '3', '15000', 'lllllllll', '10', '02177370795'),
(35, '۱۳ شهریور ۱۳۹۷', 'دلتامترین ۲/۵% ای سی', '4', '15000', 'gjjj', '2', '02177370795'),
(36, '۱۳ شهریور ۱۳۹۷', 'سایپرمترین ۴۰% ای سی', '3', '15000', 'gjjj', '2', '02177370795'),
(37, '۱۵ شهریور ۱۳۹۷', 'پرمترین ۲۵% ای سی', '1', '15000', 'dcd', '6', '02177370769'),
(38, '۱۵ شهریور ۱۳۹۷', 'سایپرمترین ۴۰% ای سی', '3', '15000', 'dcd', '6', '02177370769');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `type` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `com_name` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `pub_name` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `effective_material` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `hazard_class` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `toxicity_degree` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `antitoxin` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `des` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `img_name` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `price` varchar(100) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `type`, `com_name`, `pub_name`, `effective_material`, `hazard_class`, `toxicity_degree`, `antitoxin`, `des`, `img_name`, `price`) VALUES
(1, 'پرمترین ۲۵% ای سی  ', 'حشره', 'ندارد', 'پرمترین ۲۵% ای سی', '۲۵۰ گرم برکیلوگرم', 'II(سمی وزیان آور )', '۶۰۰۰-۴۳۰میلی گرم برکیلوگرم وزن بدن موش بزرگ', 'پادزهر خاصی ندارد	', 'حشره کش تماسی با طیف وسیع از گروه پایرتروییدهای سنتتیک', '123-1-135x155.jpg', '15000'),
(2, 'روغن امولسیون شونده ۸۰% ', 'حشره', 'ندارد', 'روغن امولسیون شونده ۸۰% ای دابلیو	', 'روغن معدنی مخصوص ۸۰۰گرم برکیلوگرم	', 'U(سمیت حاد ندارد)', 'بیش از ۱۵۰۰۰میلی گرم برکیلوگرم وزن بدن موش بزرگ	', '', 'روغن امولسیون شونده به منظورکنترل ومبارزه باآفات جهت سمپاشی زمستانه یاپیش بهاره می باشد.', 'امولسیون-شونده-۸۰-ای-دابلیو-یک-لیتری-1.jpg', '15000'),
(3, 'سایپرمترین ۴۰% ای سی ', 'حشره', 'میشومترین', 'سایپرمترین ۴۰% ای سی	', '۴۰۰ گرم برکیلوگرم	', 'II(سمی وزیان آور )	', '۴۱۵۰-۲۵۰ میلی گرم برکیلوگرم وزن بدن موش بزرگ	', 'این سم پادزهر ویژه ای نداردودرمان براساس علایم صورت می گیرد.	', 'حشره کش غیرسیستمیک , تماسی وگوارشی از گروه پایروتیروییدها بااثر ابقایی روی گیاه سم پاشی شده.', 'ECسایپرمترین-40.png', '15000'),
(4, 'دلتامترین ۲/۵% ای سی ', 'کنه ', 'میشومترین', 'دلتا مترین ۲/۵% ای سی', '۲۵ گرم بر لیتر	', 'II(سمی وزیان آور )	', '۵۰۰۰-۱۳۵ میلی گرم برکیلوگرم وزن بدن موش	', 'دیازپام .دیازپام پادزهر واقعی نیست وفقط سیستم اعصاب مرکزی راتسکین می دهد.	', 'حشره کشی گوارشی وتماسی از گروه پا پروتروییدهای مصنوعی جهت کنترل طیف وسیعی از آفات جونده ومکنده گیاهان زراعی وباغی', '124.png', '15000'),
(5, 'دیازینون ۶۰% ای سی', 'حشره', 'میشوزینون', 'دیازینون ۶۰% ای سی	', '۶۰۰ گرم برکیلوگرم	', 'II(سمی وزیان آور)	', '۱۲۵۰میلی گرم برکیلوگرم وزن بدن موش	', 'سولفات آتروپین وتوگزوگویین میباشد که تحت نظرپزشک  بایدمصرف  گردد.	', 'حشره کشی است غیرسیستمیک بااثرتماسی وگوارشی وتنفسی ازگروه ارگانوفسفره که برروی طیف وسیعی از آفات محصولات باغی وزراعی موثراست.', '۶۰-ای-سی-یک-لیتری-2.jpg', '15000'),
(6, 'تبوکونازول۶% اف اس', 'قارچ', 'ندارد', 'تبوکونازول ۶% اف اس	', '۶۰ گرم برلیتر	', 'II(سمی وزیان آور)	', '۴۰۰۰-۱۷۰۰میلی گرم برکیلوگرم وزن بدن موش	', 'این سم پادزهر ویژه ای نداردودرمن می بایست زیرنظرپزشک وبراساس علایم صورت بپذیرد.	', 'قارچ کشی سیستمیک باخاصیت حفاظتی ,درمانی وریشه کنی به عنوان ضدعفونی کننده بذر.', 'photo_2018-02-06_09-54-02.jpg', '18000'),
(7, 'تبوکونازول ۲۵% ای دابلیو \r\n', 'قارچ', 'ندارد', 'تبوکونازول ۲۵% ای دابلیو	', '۲۵۰ گرم برلیتر	', 'II (سمی وزیان آور)\r\n', '۴۰۰۰-۱۷۰۰میلیگرم برکیلوگرم وزن بدن موش	', 'این سم پادزهر ویژه ای نداردودرمان میبایست زیرنظرپزشک وبراساس علایم صورت بپذیرد.	', 'قارچ کشی سیستمیک باخاصیت حفاظتی , درمانی وریشه کنی علیه زنگ های زردگندم', 'EWتبوکونازول-25.jpg', '15000'),
(8, 'مخلوط بردو ۱۸ % اس سی ', 'قارچ', 'میشو بردوکس ۱۸% اس سی	', 'مخلوط بردو ۱۸ % اس سی	', '۱۸۰ گرم برکیلوگرم برحسب سولفات مس خالص	', 'III( احتیاط )	', '۴۰۰۰ میلی گرم برکیلوگرم	', 'این سم پادزهر ویژه ای ندارد و درمان براساس علایم وتحت نظرپزشک صورت می پذیرد.	', 'مخلوط بردو باخاصیت حفاظتی قدیمی ترین ترکیب مس می باشدکه حدود ۲قرن است جهت کنترل بیماریهای قارجی وبرخی بیماریهای باکتریایی گیاهان مصرف  می گردد.ترکیب این قارچ کش درشرایط قابل کنترل بافرمولاسیون اس سی (سوسپانسیون غلیظ )که پایداری قابل توجهی داشته وphآن حدود خنثی می باشد می تواندبسیاری ازبیماریهای قارچی  وبرخی بیماریهای باکتریایی گیاهان را کنترل کند.', 'SCمخلوط-بردو-18-1.jpg', '15000'),
(9, 'دیفنوکونازول ۳% اف اس  \r\n', 'قارچ', 'ندارد', 'دیفنوکونازول ۳% اف اس	', '۳۰ گرم برلیتر	', 'II(سمی وزیان آور)	', '۱۴۵۳ میلی گرم برکیلوگرم	', 'این سم پادزهر ویژه ای ندارد ودرمان می بایست زیرنظرپزشک وبراساس علایم صورت بپذیرد.	', 'سوسپانسیون برای ضدعفونی بذر.دیفنوکونازول قارچ کشی ازگروه تریازولها باطیف تاثیروسیع می باشد.این تاثیرسیاهک پنهان معمولی گندم ویاسیاهک پاکوتاه گندم رابه خوبی کنترل می نماید.\r\n', 'FSدیفنوکونازول3.jpg', '15000'),
(10, 'دیفنوکونازول ۳% اف اس \r\n', 'قارچ', 'ندارد', 'دیفنوکونازول ۳% اف اس	', '۳۰ گرم برلیتر	', 'II(سمی وزیان آور)	', '۱۴۵۳ میلی گرم برکیلوگرم وزن بدن موش	', 'این سم پادزهر ویژه ای ندارد ودرمان می بایست زیرنظرپزشک وبراساس علایم صورت بپذیرد.	', 'سوسپانسیون برای ضدعفونی بذر.دیفنوکونازول قارچ کشی ازگروه تریازولها باطیف تاثیروسیع می باشد.این تاثیرسیاهک پنهان معمولی گندم ویاسیاهک پاکوتاه گندم رابه خوبی کنترل می نماید.', '3FSدیفنوکونازول-4لیتر-1.jpg', '15000'),
(11, 'پروپارژیت ۵۷% ای سی  \r\n', 'کنه', 'ندارد', 'پروپارژیت ۵۷% ای سی	', '۵۷۰ گرم برلیتر	', 'III(احتیا ط)	', '۲۸۰۰ میلی گرم برکیلوگرم 	', 'این سم پادزهر ویژه ای نداردو درمان می بایست زیرنظرپزشک وبراساس علایم صورت بپذیزد.	', 'پروپارژیت کنه کشی اختصاصی با خاصیت تماسی ازگروه سولفیت استرها می باشدکه ازطریق تنفس هم برروی کنه ها موثر است.', '۵۷-ای-سی.jpg', '15000'),
(12, 'فن پروپاترین ۱۰% ای سی  \r\n', 'کنه', 'ندارد', 'فن پروپاترین ۱۰% ای سی	', '۱۰۰ گرم بر لیتر	', 'II ( سمی وزیان آور )	', '۶/۷۰ میلی گرم برکیلوگرم 	', 'این سم پادزهرویژه ای ندارد.آرام بخشهایی مانند باربیتوراتها تحت نظرپزشک توصیه می شود.	', 'حشره کش وکنه کش از گروه پیروتیروییدهای نیمه سنتتیک با اثرتماسی وگوارشی خاصیت دورکنندگی روی کنه های گیاهی', 'Fenpropathrin-10EC.jpg', '15000'),
(13, 'فن پیروکسی میت ۵% اس سی\r\n', 'کنه', 'ندارد', 'فن پیروکسی میت ۵% اس سی	', '۵۰ گرم برکیلوگرم	', 'II(سمی وزیان آور)	', '۲۴۵ میلی گرم برکیلوگرم', 'این سم پادزهر ویژه ای ندارد ودرمان براساس علایم صورت می پذیرد.	', 'کنه کشی تماسی وگوارشی باخاصیت نفوذی ازگروه فنوکسی پیرازول می باشد که برروی حالات لاروی پوره بالغ کنه ها موثربوده ودرصورت اختلاط باروغن ,تخم کنه ها رانیزکنترل می کند.', 'photo_2018-02-06_10-09-49.jpg', '15000'),
(14, 'دلتامترین ۲/۵% ای سی  ', 'حشره', 'میشومترین', 'دلتا مترین ۲/۵% ای سی', '۲۵ گرم بر لیتر	', 'II(سمی وزیان آور )	', '۵۰۰۰-۱۳۵ میلی گرم برکیلوگرم وزن بدن موش	', 'دیازپام .دیازپام پادزهر واقعی نیست وفقط سیستم اعصاب مرکزی راتسکین می دهد.	', 'حشره کشی گوارشی وتماسی از گروه پا پروتروییدهای مصنوعی جهت کنترل طیف وسیعی از آفات جونده ومکنده گیاهان زراعی وباغی', '124.png', '15000'),
(15, 'دیازینون', 'حشره', 'Diazinon 6Diazinon', 'ندارد', 'فاصله بین آخرین سمپاشی تا برداشت محصول ۱۰ روز می‌باشد.', 'ندارد', 'Acute oral LD 50 for rats: 1250 mg/kg', 'ندارد', 'دیازینون حشره‌کشی است از گروه ارگانوفسفره که با نحوه اثر تماسی، گوارشی و تنفسی طیف وسیعی از آفات جونده و مکنده را کنترل می‌کند، تا حدی خاصیت نفوذی و سیستمیک نیز دارد، هم در خاک و هم بر روی اندام هوایی مصرف می‌شود. دیازینون علاوه بر دارا بودن اثر ضربه‌ای، دارای دوام طولانی نیز می‌باشد، بقایای این حشره‌کش ممکن است تا یک ماه بر روی نباتات و محیط باقی بماند. بهترین زمان برای سمپاشی هنگامی است که هوا آرام باشد.', '02.png', '50000'),
(16, 'پاراکوات', 'حشره', 'Paraquat 20% SL', 'ندارد', 'ندارد', 'ندراد', 'Acute oral LD 50 for rats: 120 – 157 mg/kg', 'ندارد', 'پاراکوات علف‌کشی غیرسیستمیک از گروه بی‌پیریدیل‌هاست، که نحوه اثر آن تماسی با کمی خاصیت جابه‌جایی و انتقال آن فقط از راه آپوپلاستیک می‌باشد، طیف وسیعی از علف‌های هرز یکساله کشیده برگ و پهن‌برگ را کنترل می‌کند. پاراکوات روی قسمت‌های خشبی گیاه مؤثر نیست بنابراین می‌توان آن را زیر درختان و بین ردیف‌های کشت به کار برد. بهتر است سمپاشی زمانی انجام شود که ارتفاع علف‌های هرز ۱۵ سانتی‌متر یا کمتر باشد.', '03.png', '40000'),
(17, 'توفوردی + ام سی پی آ', 'حشره ', '2,4-D+MCPA 67/5% SL', 'ندارد', 'ندارد', 'ندارد', 'Acute oral LD 50 for rats: 2,4-D: 994 mg/kg', 'ندارد', 'تورفوردی علف‌کشی است هورمونی، سیستمیک و انتخابی که از گروه فنوکسی استیک اسید (اکسین) می‌باشد. تورفوردی اساساً به عنوان یک علف‌کش پس رویشی، برای کنترل علف‌های هرز یکساله و چندساله پهن برگ در گیاهان زراعی کشیده برگ و زمین‌های غیرزراعی و نیز برای مهار علف‌های هرز آبزی مصرف می‌شود. در غلظت‌های خیلی اندک، به عنوان یک ماده تنظیم‌کننده رشد مورد استفاده قرار می‌گیرد. این علف‌کش قابلیت انتقال به دو صورت آپوپلاستیک (آوند چوب) و سیمپلاستیک (آوند آبکش) را دارا می‌باشد ولی عمدتاً از طریق آوندهای آبکش منتقل می‌شود.', '01.png', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `company` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `message` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `date` varchar(100) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `user_name`, `name`, `email`, `company`, `title`, `message`, `date`) VALUES
(10, '3', 'ثریا', 'sorayamaleki8@yahoo.com', 'وب حامی', 'وب سایت', 'یا شما به این فکر کرده اید چه عواملی در سایت شما، رتبه بندی موتور های جستجو را تحت تاثیر قرار خواهد داد؟ با آموزش سئو و بهینه سازی سایت تیم سئوخانه همراه شوید: \r\n«آموزش سئو و بهینه سازی سایت»', '8مرداد1397'),
(11, '4', 'زهرا', 'sorayamaleki8@yahoo.com', 'سبزیران', 'همکاری', 'در صورتی که علاقمند به همکاری با من هستید یا پیشنهادی کاری دارید، از طریق فرم زیر می توانید پیشنهاد خود را مطرح کنید. در صورت امکان تمام تلاش خودم رو برای پاسخ سریع به درخواست شما انجام میدم. امیدوارم این شروع همکاری جدیدی بین ما باشه.', '17آذر 1396'),
(12, '4', 'ثریا', 'sorayamaleki8@yahoo.com', 'رها اندیش', 'لیست قیمت', 'لیست قیمت محصولات ارسال گردد', '10دی1395'),
(13, '2', 'زهرا', 'sorayamaleki8@yahoo.com', 'کالاگرد', 'تبلیغات', 'گروه تبلیغاتی ایده با سابقه ای درخشان و با در اختیار داشتن کادری مجرب و حرفه ای در عرصه تبلیغات با افتخار آماده ارائه خدمات هرچه بهتر به شرکت ها و سازمان ها می باشد.برای دریافت اطلاعات بیشتر به ادامه مطلب مراجعه فرمائید.', '12دی1395'),
(14, '2', 'مانا', 'aa@bb.com', 'سازگان شیمی', 'همکاری', 'در صورتی که علاقمند به همکاری با من هستید یا پیشنهادی کاری دارید، از طریق فرم زیر می توانید پیشنهاد خود را مطرح کنید. در صورت امکان تمام تلاش خودم رو برای پاسخ سریع به درخواست شما انجام میدم. امیدوارم این شروع همکاری جدیدی بین ما باشه.', '2خرداد1396'),
(15, '2', 'دلارام', 'aa@bb.com', 'وب حامی', 'وب سایت', 'وب سایت شما، به مطالب و مواد گرافیکی مانند کلمات، نمادهای بصری و گرافیکی، فایلهای صوتی و تصویری که برای آن انتخاب می کنید وابسته است در واقع وب سایت نمادی از شرکت و یا مجموعه شما می باشد که در سطح جهانی عرضه میشود', '31مرداد1397'),
(27, 'کاربر مهمان', 'غغغ', 'sorayamaleki8@yahoo.com', 'fffffgh', 'fhfghf', 'hfhfh', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `user_type` tinyint(11) NOT NULL DEFAULT '1',
  `email` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `user_type`, `email`, `phone`) VALUES
(1, 'admin', '121386975sm', 0, 'sorayamaleki8@yahoo.com', '09100752046'),
(4, 'user3', '963852741', 1, 'sorayamaleki8@yahoo.com', '02177370795'),
(5, 'user4', '2468101214', 1, 'sorayamaleki8@yahoo.com', '02177370795'),
(6, 'user5', '135791113', 1, 'sorayamaleki8@yahoo.com', '09907974165'),
(7, 'user6', '147258369', 1, 'info@generalpanel.dev', '09907974165'),
(8, 'ثریا', '141414', 1, 'sorayamaleki8@yahoo.com', '02177370765'),
(9, 'dfd', '123456987', 1, 'aa@bb.com', '02177777777'),
(10, 'ref', '12345678', 1, 'aa@bb.com', '02177370795'),
(11, 'user55', '987321654', 1, 'aa@bb.com', '02177370795');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;