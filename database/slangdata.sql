-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 06, 2016 at 11:07 AM
-- Server version: 5.5.47-cll
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `adrianab_slang`
--

-- --------------------------------------------------------

--
-- Table structure for table `slangdata`
--

CREATE TABLE IF NOT EXISTS `slangdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language` text COLLATE utf8_unicode_ci NOT NULL,
  `word` text COLLATE utf8_unicode_ci NOT NULL,
  `pronunciation` text COLLATE utf8_unicode_ci NOT NULL,
  `translation` text COLLATE utf8_unicode_ci NOT NULL,
  `example` text COLLATE utf8_unicode_ci NOT NULL,
  `notes` text COLLATE utf8_unicode_ci NOT NULL,
  `nsfw` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=45 ;

--
-- Dumping data for table `slangdata`
--

INSERT INTO `slangdata` (`id`, `language`, `word`, `pronunciation`, `translation`, `example`, `notes`, `nsfw`) VALUES
(29, 'spanish', 'chavalo(a)', 'chah-BAH-loh', 'kid; child', 'Â¡Este chavalo jodido me vuelve loca! â€” This fucking kid drives me crazy!', 'Used in Nicaragua, often by angry mothers and directed at disobedient children, but does not necessarily have a negative connotation.', ''),
(30, 'german', 'Bonze', 'BOHN-tse', 'rich and influential person; snob', 'Oh man, der ist voll der Bonze mit seinem neuen Wagen â€” Oh man, he\\''s such a snob with his new car', 'Derogatory', ''),
(31, 'spanish', 'lornita', 'lor-NEE-tah', 'gullible person', '!CayÃ³ la lornita! â€” The gullible person fell for it!', 'Peruvian', ''),
(32, 'spanish', 'baboso', 'bah-BOH-soh', 'idiot', 'Ese baboso dejÃ³ sus llaves â€” That idiot left his keys', 'Can be used as an adjective or a noun. ex. NiÃ±a babosa', ''),
(33, 'spanish', 'tuanis', 'TWAH-nees', ' cool', 'Mi reloj nuevo estÃ¡ bien tuanis â€” My new watch is really cool', '', ''),
(34, 'german', 'chillen', 'CHIL-len', 'to chill', 'Wir werden eine Runde chillen. â€” We\\''re going to chill for a bit.', 'Der Chiller can refer to a stoner, as in this tweet by @Max_Rolls: \\"ich bin mega der chiller. Tue sehr gerne alleine weed smoken verschiedene serien gucken usw. einfach sehr stoner life :)\\"', ''),
(35, 'german', 'Auf geht\\''s!', 'OWF GEYTS', 'Let\\''s go!/Here we go!', '', '', ''),
(36, 'spanish', 'suave', 'SWAH-vey', 'Hold on a minute', '', 'Literally means \\"soft.\\" Used in Costa Rica', ''),
(37, 'spanish', 'pura vida', 'POO-rah VEE-dah', 'A motto to live peacefully', '', 'A person can be pura vida, a thing can be pura vida, a place can be pura vida; you can say it to greet someone or to say goodbye to someone, or you can use it to say thank you. Used in Costa Rica.', ''),
(38, 'spanish', 'Â¡A la gran puta!', 'ah lah grahn POOH-tuh', 'Son of a bitch!', 'Â¡A la gran puta, Trump ganÃ³! â€” Son of a bitch, Trump won!', 'A vulgar expression, used to express great surprise', 'yes'),
(39, 'arabic', 'ÙŠØ§ Ø¨Ø®ØªÙƒ! (ya baxtak!)', 'YAH BACH-took', 'Lucky you!', '', 'An Egyptian idiom', ''),
(40, 'chinese', 'é…· (traditional & simplified) / kÃ¹ (Pinyin)', 'COOL', 'cool', 'å¥½é…·å–” / hÇŽo kÃ¹ Å â€” That\\''s cool!', '', ''),
(41, 'french', 'BlÃ©', 'BLEY', 'money', 'Il gagne beaucoup de blÃ©. â€” He earns a lot of money.', 'Literally means \\"wheat\\"', ''),
(42, 'italian', 'Che palle!', 'keh PAL-leh', 'What a pain in the ass!', '', 'Literally: \\"What balls!\\"', 'yes'),
(44, 'japanese', 'ãƒŠã‚¤ã‚¹', 'naisu', 'Nice!', '*hears good news* ãƒŠã‚¤ã‚¹ï¼', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
