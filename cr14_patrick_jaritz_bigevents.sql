-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 21, 2018 at 05:16 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr14_patrick_jaritz_bigevents`
--

-- --------------------------------------------------------

--
-- Table structure for table `big_event`
--

CREATE TABLE `big_event` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `capacity` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address_street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `big_event`
--

INSERT INTO `big_event` (`id`, `name`, `start_date`, `end_date`, `image`, `capacity`, `email`, `phone`, `address_street`, `address_code`, `address_city`, `url`, `type`, `start_time`, `end_time`) VALUES
(1, 'Film Festival 2018', '2018-12-12 00:00:00', '2018-12-13 00:00:00', 'https://events.wien.info/media/full/kino-unter-sternen-wir-kommen-aus-oesterreich_1.jpg', 514, 'mhaquard0@nsw.gov.au', '953-253-1261', 'Armistice Road 95', '8682', 'Skövde', 'http://ovh.net/amet/nunc/viverra.html', 'Music', NULL, NULL),
(2, 'Puccini: La Bohème', '2017-08-28 04:10:24', '2018-02-22 14:23:31', 'https://events.wien.info/media/full/01_La_Boheme_108447_BORRAS_HARTIG.jpg', 978, 'xdejuares1@ucoz.ru', '493-859-8085', '95573 Lakewood Gardens Trail', '9478', 'Guiglo', 'http://wp.com/eu/tincidunt/in/leo/maecenas/pulvinar/lobortis.html', 'Opera', NULL, NULL),
(3, 'Tschaikovskij: Der Nussknacker', '2018-06-21 23:17:49', '2018-07-06 01:28:02', 'https://events.wien.info/media/full/40518_1.jpg', 60, 'yarnaldo2@oakley.com', '978-325-1231', '7480 Ludington Alley', '6104', 'San Enrique', 'https://multiply.com/sagittis/nam/congue/risus.json', 'Opera', NULL, NULL),
(4, 'Der Prozess by Franz Kafka', '2017-12-14 23:44:00', '2017-09-24 19:25:00', 'https://events.wien.info/media/full/Plakat_Der_Prozess_-_DEZ_2017_1500x1000_wien_info.jpg', 699, 'tguillou3@bloomberg.com', '309-958-1119', 'Messerschmidt Court 560', '58338-000', 'Pilar', 'https://nasa.gov/fermentum/donec/ut/mauris/eget/massa.xml', 'Theater', NULL, NULL),
(5, 'ABBAMANIA - The Show Gold Tour', '2017-11-12 04:56:09', '2018-04-25 08:41:56', 'https://events.wien.info/media/full/abba_3.jpg', 567, 'cnajara4@imgur.com', '843-655-6012', '48524 Helena Junction', 'C0A', 'Montague', 'http://nature.com/nisl/duis/bibendum/felis/sed.jpg', 'Musical', NULL, NULL),
(6, 'Kino unter Sternen', '2018-05-23 17:47:27', '2017-07-20 05:53:43', 'https://events.wien.info/media/full/kino-unter-sternen-wir-kommen-aus-oesterreich_1.jpg', 1213, 'bgardner5@cornell.edu', '936-978-7716', '838 Gateway Pass', '2902', 'Marseille', 'http://lulu.com/non/quam/nec/dui/luctus/rutrum.html', 'Movie', NULL, NULL),
(7, 'Albrecht Dürer', '2018-01-21 04:18:30', '2018-05-18 05:04:42', 'https://events.wien.info/media/full/Dürer_1.jpg', 1203, 'gbowick6@wiley.com', '683-455-6358', '6102 Arkansas Pass', '2510', 'Ulset', 'https://nifty.com/ante/ipsum/primis/', 'Exhibition', NULL, NULL),
(8, 'Angelo Kelly & Family - Irish Christmas', '2017-11-29 23:37:00', '2017-11-24 12:32:00', 'http://images.bstatic.de/ZgfetfXLiu79KTPcEltwAdsbCmo=/1200x630/filters:extract_focal()/images.bstatic.de/EWHrb5zZuBZh52bucC4ATv8LURU=/489x271:509x291/bunte16ctyroajzxe.devcloud.acquia-sites.com/sites/default/files/images/3551/t_ab_angelo_kelly.jpg', 1404, 'gbeamont7@google.nl', '187-215-4987', 'Magdeline Park 352', '5205', 'Pamotan', 'https://hc360.com/sed/ante/vivamus/tortor.png', 'Music', NULL, NULL),
(9, 'Flea Market on Naschmarkt', '2017-08-08 00:16:00', '2018-01-07 19:38:00', 'https://l7.alamy.com/zooms/23febca0035846deaa9847bd83416238/vienna-naschmarkt-linke-wienzeile-flea-market-antique-market-with-ekrfc9.jpg', 1343, 'hfulham8@yahoo.co.jp', '345-814-1840', '4763 Butterfield Circle', '2705-215', 'Mucifal', 'https://hc360.com/enim/leo/rhoncus/sed/vestibulum/', 'Market', NULL, NULL),
(12, 'Beyond Klimt', '2018-06-24 05:30:00', '2018-03-16 06:48:00', 'https://events.wien.info/media/full/Klimt.jpg', 1848, 'kclitsomeb@telegraph.co.uk', '223-397-5501', '5015 Buhler Pass', '6515', 'Medaya', 'https://soundcloud.com/ligula', 'Exhibition', NULL, NULL),
(13, 'Bruegel', '2018-04-24 10:56:00', '2018-02-08 04:42:00', 'https://events.wien.info/media/full/GG_1026.jpg', 158, 'scurmanc@histats.com', '703-800-9912', '62 Forest Road', '44830-000', 'Piritiba', 'https://mediafire.com/venenatis/turpis.html', 'Exhibition', NULL, NULL),
(14, 'Claude Monet. Impression and Emotion', '2018-02-21 18:57:00', '2018-02-01 07:07:00', 'https://events.wien.info/media/full/Claude_Monet_Blick_auf_Vétheuil_2.jpg', 1026, 'gjachimakd@ox.ac.uk', '453-134-0270', '0151 Oak Valley Street', '8759', 'Yangmadao', 'http://google.es/ac/est/lacinia/nisi/venenatis.js', 'Exhibition', NULL, NULL),
(15, 'Egon Schiele', '2017-09-27 09:28:00', '2018-02-06 07:31:00', 'https://events.wien.info/media/full/Schiele_2.jpg', 640, 'mlahertye@buzzfeed.com', '233-663-0333', '182 Upham Way', '3465', 'Port Louis', 'https://si.edu/pellentesque.jsp', 'Exhibition', NULL, NULL),
(16, 'ImPuls Tanz', '2018-08-07 00:00:00', '2018-08-21 00:00:00', 'https://events.wien.info/media/full/impulstanz_logojpg.jpg', 1500, 'impuls@tanz.com', '066087232893', 'Museumsquartier 1', '1060', 'Vienna', 'https://events.wien.info/en/vgo/impulstanz-2018/', 'Festival', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `big_event`
--
ALTER TABLE `big_event`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `big_event`
--
ALTER TABLE `big_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
