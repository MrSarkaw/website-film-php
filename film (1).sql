-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 05, 2019 at 10:32 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `film`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

DROP TABLE IF EXISTS `actors`;
CREATE TABLE IF NOT EXISTS `actors` (
  `id_actor` int(11) NOT NULL AUTO_INCREMENT,
  `actor_name` varchar(200) NOT NULL,
  `image_actor` varchar(200) CHARACTER SET latin1 NOT NULL,
  `des` longtext NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_actor`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf32;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`id_actor`, `actor_name`, `image_actor`, `des`, `id_user`) VALUES
(2, 'al pacino', 'pacino.jpg', 'â€ŽØ¬Û†Ù† Ú©Ø±ÛŒØ³ØªÛ†ÙÛ•Ø± â€œØ¬Û†Ù†ÛŒâ€ Ø¯ÛŽÙ¾  Ø¦Û•Ú©ØªÛ•Ø±ÛŽÚ©ÛŒ Ø¦Û•Ù…Û•Ø±ÛŒÚ©ÛŒ ØŒ Ø¨Û•Ø±Ù‡Û•Ù…Ù‡ÛŽÙ†Û•Ø± Ùˆ Ù…Û†Ø³ÛŒÙ‚Ø§Ú˜Û•Ù†Û•.ØªÙˆØ§Ù†ÛŒÙˆÛŒÛ•ØªÛŒ Ø®Û•ÚµØ§ØªÛŒ Ú¯Û†ÚµØ¯Ù† Ú¯ÚµÛ†Ø¨ Ø¨Ø¨Ø§ØªÛ•ÙˆÛ• Ø¨Û† Ø¨Ø§Ø´ØªØ±ÛŒÙ† Ø¦Û•Ú©ØªÛ•Ø±.Ù„Û•Ø³Ø§ÚµØ§Ù†ÛŒ Ù¡Ù©Ù¨Ù Û•Ú©Ø§Ù† Ø¨Û•Ù‡Û†ÛŒ Ú•Û†ÚµÚ¯ÛŽÚ•Ø§Ù†Û•Ú©Û•ÛŒ Ù„Û• Ø²Ù†Ø¬ÛŒØ±Û•ÛŒ ØªÛ•Ù„Û•Ú¤Ø²ÛŒÛ†Ù†ÛŒ (Ø´Û•Ù‚Ø§Ù…ÛŒ Ù¢Ù¡Ù¡)Ø¯Ø§ ØªÙˆØ§Ù†ÛŒ Ù†Ø§ÙˆØ¨Ø§Ù†Ú¯ÛŽÚ©ÛŒ Ø¨Ø§Ø´ Ù„Û•ØªÛ•Ù…Û•Ù†ÛŒ Ù‡Û•Ø±Ø²Û•Ú©Ø§Ø±ÛŒØ¯Ø§ Ø¨Û†Ø®Û†ÛŒ Ø¯Û•Ø³ØªÛ•Ø¨Û•Ø± Ø¨Ú©Ø§Øª.\r\nâ€ŽÙ„Û•ÙˆÚ©Ø§ØªÛ•ÙˆÛ• Ø¯ÛŽÙ¾ Ø¯Û•Ø³ØªÛŒ Ú©Ø±Ø¯ÙˆÙˆÛ• Ø¨Û• Ú•Û†Ù„Ú¯ÛŽØ±Ø§Ù† Ù„Û• ÙÛŒÙ„Ù…Û• Ù…Û•Ø²Ù†Û•Ú©Ø§Ù† Ú©Û• ÛŒÛ•Ú©Û•Ù… ÙÛŒÙ„Ù…ÛŒØ´ÛŒ ÙÛŒÙ„Ù…ÛŒ Ø¬Û•Ù†Ú¯ÛŒ (Platoon) Ø¨ÙˆÙˆ Ù„Û•Ø³Ø§ÚµÛŒ Ù¡Ù©Ù¨Ù¦ ØŒ Ø¯ÙˆØ§ØªØ± Ù„Û• ÙÛŒÙ„Ù…ÛŒ (Edward Scisscorhands â€“ Ø¦ÛŽØ¯ÙˆØ§Ø±Ø¯ÛŒ Ø¯Û•Ø³Øª Ù…Ù‚Û•Ø³)Ø¯Ø§ Ú•Û†ÚµÛŽÚ©ÛŒ Ø³Û•Ø±Ù†Ø¬Ú•Ø§Ú©ÛŽØ´ÛŒ Ú¯ÛŽØ±Ø§.Ø¯ÙˆØ§ØªØ± Ù„Û•Ø³Ø§ÚµÛŒ Ù¡Ù©Ù©Ù© Ù„Û• ÙÛŒÙ„Ù…ÛŒ (Sleepy Hollow)Ø¯Ø§ Ú•Û†Ù„ÛŒ Ú¯ÛŽÚ•Ø§ Ú©Û• ÙÛŒÙ„Ù…Û•Ú©Û• Ø³Û•Ø±Ú©Û•ÙˆØªÙ†ÛŽÚ©ÛŒ Ú¯Û•ÙˆØ±Û•ÛŒ Ù„Û• Ø¨Û†Ú©Ø³ Ø¦Û†ÙÛŒØ³ Ø¨Û•Ø¯Û•Ø³ØªÙ‡ÛŽÙ†Ø§.\r\nâ€ŽÙˆ Ù‡Û•Ø±ÙˆÛ•Ù‡Ø§ Ø²Ù†Ø¬ÛŒØ±Û• ÙÛŒÙ„Ù…ÛŒ Ú†Û•ØªÛ•Ú©Ø§Ù†ÛŒ Ø¯Û•Ø±ÛŒØ§ÛŒ Ú©Ø§Ø±ÛŒØ¨ÛŒ Ú©Û• Ø¨Û• Ù…Û•Ø²Ù†ØªØ±ÛŒÙ† Ú•Û†ÚµÛŒ (Ø¯ÛŽÙ¾) Ø¯Ø§Ø¯Û•Ù†Ø±ÛŽØª.Ù‡Û•Ø±ÙˆÛ•Ù‡Ø§ ÙÛŒÙ„Ù…ÛŒ Ù…Û†Ø³ÛŒÙ‚ÛŒ (Ú†Ø§Ø±Ù„ÛŒ Ùˆ Ú©Ø§Ø±Ú¯Û•ÛŒ Ø´ÙˆÚ©ÚµØ§ØªÛ• -Charlie and the Choclatae Factory) Ùˆ Ø¯ÙˆØ§ØªØ± ÙÛŒÙ„Ù…ÛŒ (Alice in Wonderland) Ùˆ Ø¯Û•Ù†Ú¯ÛŒ Ú•Ø§Ù†Ú¯Û†Ø´ Ù„Û• Ø¦Û•Ù†ÛŒÙ…Û•ÛŒØ´Ù†ÛŒ (Rangoo).\r\nâ€ŽØ¯ÛŽÙ¾ Ø¨Û•ÛŒÛ•Ú©ÛŽÚ© Ù„Û• Ù…Û•Ø²Ù†ØªØ±ÛŒÙ† Ø¦Û•Ú©ØªÛ•Ø±Ø§Ù†ÛŒ Ø³ÛŒÙ†Û•Ù…Ø§ Ù„Û• Ø¬ÛŒÙ‡Ø§Ù†Ø¯Ø§ Ø¯Ø§Ø¯Û•Ù†Ø±ÛŽØª ØŒ ØªÙˆØ§Ù†ÛŒ Ø³Û•Ø±Ú©Û•ÙˆØªÙ†ÛŽÚ©ÛŒ Ú¯Û•ÙˆØ±Û• Ù„Û•Ú•Û†ÚµÚ¯ÛŽÚ•Ø§Ù†ÛŒ Ú©Û•Ø³Ø§ÛŒÛ•ØªÛŒÛ• Ø±Ø§Ø³ØªÛŒÛ•Ú©Ø§Ù†ÛŒ Ø¨Û•Ø¯Û•Ø³ØªØ¨ÛŽÙ†ÛŽ Ù„Û• ÙÛŒÙ„Ù…Û•Ú©Ø§Ù†ÛŒ ÙˆÛ•Ú© : ÙÛŒÙ„Ù…ÛŒ (Ed Wood â€“ Ø¦ÛŽØ¯ ÙˆØ¯) Ù„Û•Ú•Û†ÚµÛŒ Ø¯Û•Ø±Ù‡ÛŽÙ†Û•Ø±ÛŒ Ø¨Û•Ù†Ø§ÙˆØ¨Ø§Ù†Ú¯ (Ø¦ÛŽØ¯ ÙˆÙˆØ¯)ÛŒ Ø¯Û•Ø¨ÛŒÙ†ÛŒ Ùˆ Ø¨Ø±ÛŒÚ©Ø§Ø±ÛŒ Ø¦ÛŽÙ Ø¨ÛŒ Ø¦Ø§ÛŒ (Ø¬Û†Ø³ÛŽÙ Ù¾ÛŒØ³ØªÙ†) Ù„Û• ÙÛŒÙ„Ù…ÛŒ (Donnie Brasco)Ø¯Ø§ ØŒ\r\nâ€ŽÙˆ Ù†ÙˆÙˆØ³Û•Ø±ÛŒ Ú©ØªÛŽØ¨ÛŒ Ù¾ÛŒØªÛ•Ø± Ù¾Ø§Ù† (Ø¬Û•ÛŒ Ø¦ÛŽÙ… Ø¨Ø§Ø±ÛŒ) Ù„Û•ÙÛŒÙ„Ù…ÛŒ (Finding Neverland) ØŒ Ùˆ Ù…Ø§ÙÛŒØ§ÛŒ Ø¨Û•Ù†Ø§ÙˆØ¨Ø§Ù†Ú¯ (Ø¬Û†Ù† Ø¯ÛŒÙ„ÛŒÙ†Ø¬Û•Ø±) Ù„Û• ÙÛŒÙ„Ù…ÛŒ Ø¯ÙˆÚ˜Ù…Ù†Ø§Ù†ÛŒ Ú¯Û•Ù„ Ø¯Ø§.Ù‡Û•Ø±ÙˆÛ•Ù‡Ø§ Ø³Ø§ÚµÛŒ Ù¢Ù Ù¡Ù¢Ù¢ Ø¯Û•Ø±Ú©Û•ÙˆØª Ù„Û• ÙÛŒÙ„Ù…ÛŒ (Dark Shadows).Ù„Û•Ø³Ø§ÚµÛŒ Ù¢Ù Ù¡Ù¥ Ø¯ÛŽÙ¾ Ù„Û•Ú†Û•Ù†Ø¯Ø§Ù† ÙÛŒÙ„Ù…ÛŒ Ø¬ÛŒØ§ÙˆØ§Ø² Ø¯Û•Ø±Ú©Û•ÙˆØª Ø³Û•Ø±Û•ØªØ§ Ù„Û• ÙÛŒÙ„Ù…ÛŒ Ú©Û†Ù…ÛŒØ¯ÛŒ Ù…Û†Ø±ØªØ¯ÛŒÚ©Ø§ÛŒØ¯Ø§ Ø¯Û•Ø±Ú©Û•ÙˆØª Ùˆ Ø¯ÙˆØ§ØªØ± Ù„Û• ÙÛŒÙ„Ù…ÛŒ (Tusk) ØŒ Ùˆ Ù…Û•Ø²Ù†ØªØ±ÛŒÙ† Ú•Û†ÚµÛŒØ´ÛŒ Ù„Û• Ø¯ÙˆØ§ÛŒ Ø³Ø§ÚµÛŒ Ù¢Ù Ù¡Ù Û•ÙˆÛ• Ù„Û• ÙÛŒÙ„Ù…ÛŒ Ú•ÛŽÙˆÚ•Û•Ø³Ù…ÛŒ Ú•Û•Ø´ Ø¨ÙˆÙˆ Ù„Û•Ø³Ø§ÚµÛŒ Ù¢Ù Ù¡Ù¥ Ú©Û• ØªÛŒØ§ÛŒØ¯Ø§ Ú•Û†ÚµÛŒ Ú†Û•ØªÛ•ÛŒ Ø¦Û•Ù…Û•Ø±ÛŒÚ©ÛŒ ÙˆØ§ÛŒØªÛŒ Ø¨Û•Ù„Ú¯Û•Ø±ÛŒ Ø¯Û•Ø¨ÛŒÙ†ÛŒ Ùˆ Ø¨Û•ÛŒÛ•Ú©ÛŽÚ© Ù„Û• Ù…Û•Ø²Ù†ØªØ±ÛŒÙ† Ú•Û†ÚµÛ•Ú©Ø§Ù†ÛŒ Ø¯ÛŽÙ¾ Ø¯Ø§Ø¯Û•Ù†Ø±ÛŽ Ù„Û•Ú˜ÛŒØ§Ù†ÛŒ Ù¾ÛŒØ´Û•Ú¯Û•Ø±ÛŒØ¯Ø§.Ø¯ÛŽÙ¾ ØªØ§Ú©Ùˆ Ø¦ÛŽØ³ØªØ§ Ø¨Û†Ú†Û•Ù†Ø¯Ø§Ù† Ø®Û•ÚµØ§ØªÛŒ Ú¯Ø±ÛŒÙ†Ú¯ÛŒØ´ Ù¾Ø§ÚµÛŽÙˆØ±Ø§Ùˆ Ø¨ÙˆÙˆÛ• ØŒ Ù„Û•Ù†ÛŽÙˆØ§Ù†ÛŒØ§Ù†Ø¯Ø§ Ø³ÛŽ Ù¾Ø§ÚµØ§ÙˆØªÙ† Ø¨Û† Ø®Û•ÚµØ§ØªÛŒ Ø¦Û†Ø³Ú©Ø§Ø± ØŒ Ùˆ ØªÙˆØ§Ù†ÛŒÙˆÛŒÛ•ØªÛŒ Ø®Û•ÚµØ§ØªÛŒ Ú¯Û†ÚµØ¯Ù† Ú¯ÚµÛ†Ø¨ Ø¨Û† ÙÛŒÙ„Ù…ÛŒ (Sweeny Todd : The Demon Barber of Fleet Street) Ø¨Ø¨Ø§ØªÛ•ÙˆÛ•. Ù„Û•Ø³Ø§ÚµÛŒ Ù¢Ù Ù¡Ù¢ Ø¯Ø§ ØŒ Ø¯ÛŽÙ¾ Ù†Ø§ÙˆÛŒ Ú†ÙˆÙˆÛ• Ù†ÛŽÙˆ Ú©ØªÛŽØ¨ÛŒ Ú¯ÛŒÙ†Ø³ ÙˆÛ•Ú© Ø¯Û•ÙˆÚµÛ•Ù…Û•Ù†Ø¯ØªØ±ÛŒÙ† Ø¦Û•Ú©ØªÛ•Ø± Ø¨Û•Ø¯Ø§Ù‡Ø§ØªÛŒ Ù§Ù¥Ù¥ Ù…Ù„ÛŒÛ†Ù† Ø¯Û†Ù„Ø§Ø±.\r\n', 2),
(4, 'johnny depp', 'jon.jpg', 'â€ŽØ¬Û†Ù† Ú©Ø±ÛŒØ³ØªÛ†ÙÛ•Ø± â€œØ¬Û†Ù†ÛŒâ€ Ø¯ÛŽÙ¾  Ø¦Û•Ú©ØªÛ•Ø±ÛŽÚ©ÛŒ Ø¦Û•Ù…Û•Ø±ÛŒÚ©ÛŒ ØŒ Ø¨Û•Ø±Ù‡Û•Ù…Ù‡ÛŽÙ†Û•Ø± Ùˆ Ù…Û†Ø³ÛŒÙ‚Ø§Ú˜Û•Ù†Û•.ØªÙˆØ§Ù†ÛŒÙˆÛŒÛ•ØªÛŒ Ø®Û•ÚµØ§ØªÛŒ Ú¯Û†ÚµØ¯Ù† Ú¯ÚµÛ†Ø¨ Ø¨Ø¨Ø§ØªÛ•ÙˆÛ• Ø¨Û† Ø¨Ø§Ø´ØªØ±ÛŒÙ† Ø¦Û•Ú©ØªÛ•Ø±.Ù„Û•Ø³Ø§ÚµØ§Ù†ÛŒ Ù¡Ù©Ù¨Ù Û•Ú©Ø§Ù† Ø¨Û•Ù‡Û†ÛŒ Ú•Û†ÚµÚ¯ÛŽÚ•Ø§Ù†Û•Ú©Û•ÛŒ Ù„Û• Ø²Ù†Ø¬ÛŒØ±Û•ÛŒ ØªÛ•Ù„Û•Ú¤Ø²ÛŒÛ†Ù†ÛŒ (Ø´Û•Ù‚Ø§Ù…ÛŒ Ù¢Ù¡Ù¡)Ø¯Ø§ ØªÙˆØ§Ù†ÛŒ Ù†Ø§ÙˆØ¨Ø§Ù†Ú¯ÛŽÚ©ÛŒ Ø¨Ø§Ø´ Ù„Û•ØªÛ•Ù…Û•Ù†ÛŒ Ù‡Û•Ø±Ø²Û•Ú©Ø§Ø±ÛŒØ¯Ø§ Ø¨Û†Ø®Û†ÛŒ Ø¯Û•Ø³ØªÛ•Ø¨Û•Ø± Ø¨Ú©Ø§Øª.\r\nâ€ŽÙ„Û•ÙˆÚ©Ø§ØªÛ•ÙˆÛ• Ø¯ÛŽÙ¾ Ø¯Û•Ø³ØªÛŒ Ú©Ø±Ø¯ÙˆÙˆÛ• Ø¨Û• Ú•Û†Ù„Ú¯ÛŽØ±Ø§Ù† Ù„Û• ÙÛŒÙ„Ù…Û• Ù…Û•Ø²Ù†Û•Ú©Ø§Ù† Ú©Û• ÛŒÛ•Ú©Û•Ù… ÙÛŒÙ„Ù…ÛŒØ´ÛŒ ÙÛŒÙ„Ù…ÛŒ Ø¬Û•Ù†Ú¯ÛŒ (Platoon) Ø¨ÙˆÙˆ Ù„Û•Ø³Ø§ÚµÛŒ Ù¡Ù©Ù¨Ù¦ ØŒ Ø¯ÙˆØ§ØªØ± Ù„Û• ÙÛŒÙ„Ù…ÛŒ (Edward Scisscorhands â€“ Ø¦ÛŽØ¯ÙˆØ§Ø±Ø¯ÛŒ Ø¯Û•Ø³Øª Ù…Ù‚Û•Ø³)Ø¯Ø§ Ú•Û†ÚµÛŽÚ©ÛŒ Ø³Û•Ø±Ù†Ø¬Ú•Ø§Ú©ÛŽØ´ÛŒ Ú¯ÛŽØ±Ø§.Ø¯ÙˆØ§ØªØ± Ù„Û•Ø³Ø§ÚµÛŒ Ù¡Ù©Ù©Ù© Ù„Û• ÙÛŒÙ„Ù…ÛŒ (Sleepy Hollow)Ø¯Ø§ Ú•Û†Ù„ÛŒ Ú¯ÛŽÚ•Ø§ Ú©Û• ÙÛŒÙ„Ù…Û•Ú©Û• Ø³Û•Ø±Ú©Û•ÙˆØªÙ†ÛŽÚ©ÛŒ Ú¯Û•ÙˆØ±Û•ÛŒ Ù„Û• Ø¨Û†Ú©Ø³ Ø¦Û†ÙÛŒØ³ Ø¨Û•Ø¯Û•Ø³ØªÙ‡ÛŽÙ†Ø§.\r\nâ€ŽÙˆ Ù‡Û•Ø±ÙˆÛ•Ù‡Ø§ Ø²Ù†Ø¬ÛŒØ±Û• ÙÛŒÙ„Ù…ÛŒ Ú†Û•ØªÛ•Ú©Ø§Ù†ÛŒ Ø¯Û•Ø±ÛŒØ§ÛŒ Ú©Ø§Ø±ÛŒØ¨ÛŒ Ú©Û• Ø¨Û• Ù…Û•Ø²Ù†ØªØ±ÛŒÙ† Ú•Û†ÚµÛŒ (Ø¯ÛŽÙ¾) Ø¯Ø§Ø¯Û•Ù†Ø±ÛŽØª.Ù‡Û•Ø±ÙˆÛ•Ù‡Ø§ ÙÛŒÙ„Ù…ÛŒ Ù…Û†Ø³ÛŒÙ‚ÛŒ (Ú†Ø§Ø±Ù„ÛŒ Ùˆ Ú©Ø§Ø±Ú¯Û•ÛŒ Ø´ÙˆÚ©ÚµØ§ØªÛ• -Charlie and the Choclatae Factory) Ùˆ Ø¯ÙˆØ§ØªØ± ÙÛŒÙ„Ù…ÛŒ (Alice in Wonderland) Ùˆ Ø¯Û•Ù†Ú¯ÛŒ Ú•Ø§Ù†Ú¯Û†Ø´ Ù„Û• Ø¦Û•Ù†ÛŒÙ…Û•ÛŒØ´Ù†ÛŒ (Rangoo).\r\nâ€ŽØ¯ÛŽÙ¾ Ø¨Û•ÛŒÛ•Ú©ÛŽÚ© Ù„Û• Ù…Û•Ø²Ù†ØªØ±ÛŒÙ† Ø¦Û•Ú©ØªÛ•Ø±Ø§Ù†ÛŒ Ø³ÛŒÙ†Û•Ù…Ø§ Ù„Û• Ø¬ÛŒÙ‡Ø§Ù†Ø¯Ø§ Ø¯Ø§Ø¯Û•Ù†Ø±ÛŽØª ØŒ ØªÙˆØ§Ù†ÛŒ Ø³Û•Ø±Ú©Û•ÙˆØªÙ†ÛŽÚ©ÛŒ Ú¯Û•ÙˆØ±Û• Ù„Û•Ú•Û†ÚµÚ¯ÛŽÚ•Ø§Ù†ÛŒ Ú©Û•Ø³Ø§ÛŒÛ•ØªÛŒÛ• Ø±Ø§Ø³ØªÛŒÛ•Ú©Ø§Ù†ÛŒ Ø¨Û•Ø¯Û•Ø³ØªØ¨ÛŽÙ†ÛŽ Ù„Û• ÙÛŒÙ„Ù…Û•Ú©Ø§Ù†ÛŒ ÙˆÛ•Ú© : ÙÛŒÙ„Ù…ÛŒ (Ed Wood â€“ Ø¦ÛŽØ¯ ÙˆØ¯) Ù„Û•Ú•Û†ÚµÛŒ Ø¯Û•Ø±Ù‡ÛŽÙ†Û•Ø±ÛŒ Ø¨Û•Ù†Ø§ÙˆØ¨Ø§Ù†Ú¯ (Ø¦ÛŽØ¯ ÙˆÙˆØ¯)ÛŒ Ø¯Û•Ø¨ÛŒÙ†ÛŒ Ùˆ Ø¨Ø±ÛŒÚ©Ø§Ø±ÛŒ Ø¦ÛŽÙ Ø¨ÛŒ Ø¦Ø§ÛŒ (Ø¬Û†Ø³ÛŽÙ Ù¾ÛŒØ³ØªÙ†) Ù„Û• ÙÛŒÙ„Ù…ÛŒ (Donnie Brasco)Ø¯Ø§ ØŒ\r\nâ€ŽÙˆ Ù†ÙˆÙˆØ³Û•Ø±ÛŒ Ú©ØªÛŽØ¨ÛŒ Ù¾ÛŒØªÛ•Ø± Ù¾Ø§Ù† (Ø¬Û•ÛŒ Ø¦ÛŽÙ… Ø¨Ø§Ø±ÛŒ) Ù„Û•ÙÛŒÙ„Ù…ÛŒ (Finding Neverland) ØŒ Ùˆ Ù…Ø§ÙÛŒØ§ÛŒ Ø¨Û•Ù†Ø§ÙˆØ¨Ø§Ù†Ú¯ (Ø¬Û†Ù† Ø¯ÛŒÙ„ÛŒÙ†Ø¬Û•Ø±) Ù„Û• ÙÛŒÙ„Ù…ÛŒ Ø¯ÙˆÚ˜Ù…Ù†Ø§Ù†ÛŒ Ú¯Û•Ù„ Ø¯Ø§.Ù‡Û•Ø±ÙˆÛ•Ù‡Ø§ Ø³Ø§ÚµÛŒ Ù¢Ù Ù¡Ù¢Ù¢ Ø¯Û•Ø±Ú©Û•ÙˆØª Ù„Û• ÙÛŒÙ„Ù…ÛŒ (Dark Shadows).Ù„Û•Ø³Ø§ÚµÛŒ Ù¢Ù Ù¡Ù¥ Ø¯ÛŽÙ¾ Ù„Û•Ú†Û•Ù†Ø¯Ø§Ù† ÙÛŒÙ„Ù…ÛŒ Ø¬ÛŒØ§ÙˆØ§Ø² Ø¯Û•Ø±Ú©Û•ÙˆØª Ø³Û•Ø±Û•ØªØ§ Ù„Û• ÙÛŒÙ„Ù…ÛŒ Ú©Û†Ù…ÛŒØ¯ÛŒ Ù…Û†Ø±ØªØ¯ÛŒÚ©Ø§ÛŒØ¯Ø§ Ø¯Û•Ø±Ú©Û•ÙˆØª Ùˆ Ø¯ÙˆØ§ØªØ± Ù„Û• ÙÛŒÙ„Ù…ÛŒ (Tusk) ØŒ Ùˆ Ù…Û•Ø²Ù†ØªØ±ÛŒÙ† Ú•Û†ÚµÛŒØ´ÛŒ Ù„Û• Ø¯ÙˆØ§ÛŒ Ø³Ø§ÚµÛŒ Ù¢Ù Ù¡Ù Û•ÙˆÛ• Ù„Û• ÙÛŒÙ„Ù…ÛŒ Ú•ÛŽÙˆÚ•Û•Ø³Ù…ÛŒ Ú•Û•Ø´ Ø¨ÙˆÙˆ Ù„Û•Ø³Ø§ÚµÛŒ Ù¢Ù Ù¡Ù¥ Ú©Û• ØªÛŒØ§ÛŒØ¯Ø§ Ú•Û†ÚµÛŒ Ú†Û•ØªÛ•ÛŒ Ø¦Û•Ù…Û•Ø±ÛŒÚ©ÛŒ ÙˆØ§ÛŒØªÛŒ Ø¨Û•Ù„Ú¯Û•Ø±ÛŒ Ø¯Û•Ø¨ÛŒÙ†ÛŒ Ùˆ Ø¨Û•ÛŒÛ•Ú©ÛŽÚ© Ù„Û• Ù…Û•Ø²Ù†ØªØ±ÛŒÙ† Ú•Û†ÚµÛ•Ú©Ø§Ù†ÛŒ Ø¯ÛŽÙ¾ Ø¯Ø§Ø¯Û•Ù†Ø±ÛŽ Ù„Û•Ú˜ÛŒØ§Ù†ÛŒ Ù¾ÛŒØ´Û•Ú¯Û•Ø±ÛŒØ¯Ø§.Ø¯ÛŽÙ¾ ØªØ§Ú©Ùˆ Ø¦ÛŽØ³ØªØ§ Ø¨Û†Ú†Û•Ù†Ø¯Ø§Ù† Ø®Û•ÚµØ§ØªÛŒ Ú¯Ø±ÛŒÙ†Ú¯ÛŒØ´ Ù¾Ø§ÚµÛŽÙˆØ±Ø§Ùˆ Ø¨ÙˆÙˆÛ• ØŒ Ù„Û•Ù†ÛŽÙˆØ§Ù†ÛŒØ§Ù†Ø¯Ø§ Ø³ÛŽ Ù¾Ø§ÚµØ§ÙˆØªÙ† Ø¨Û† Ø®Û•ÚµØ§ØªÛŒ Ø¦Û†Ø³Ú©Ø§Ø± ØŒ Ùˆ ØªÙˆØ§Ù†ÛŒÙˆÛŒÛ•ØªÛŒ Ø®Û•ÚµØ§ØªÛŒ Ú¯Û†ÚµØ¯Ù† Ú¯ÚµÛ†Ø¨ Ø¨Û† ÙÛŒÙ„Ù…ÛŒ (Sweeny Todd : The Demon Barber of Fleet Street) Ø¨Ø¨Ø§ØªÛ•ÙˆÛ•. Ù„Û•Ø³Ø§ÚµÛŒ Ù¢Ù Ù¡Ù¢ Ø¯Ø§ ØŒ Ø¯ÛŽÙ¾ Ù†Ø§ÙˆÛŒ Ú†ÙˆÙˆÛ• Ù†ÛŽÙˆ Ú©ØªÛŽØ¨ÛŒ Ú¯ÛŒÙ†Ø³ ÙˆÛ•Ú© Ø¯Û•ÙˆÚµÛ•Ù…Û•Ù†Ø¯ØªØ±ÛŒÙ† Ø¦Û•Ú©ØªÛ•Ø± Ø¨Û•Ø¯Ø§Ù‡Ø§ØªÛŒ Ù§Ù¥Ù¥ Ù…Ù„ÛŒÛ†Ù† Ø¯Û†Ù„Ø§Ø±.\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `permission_level` varchar(10) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `first_name` (`first_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf32;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_user`, `username`, `first_name`, `password`, `permission_level`) VALUES
(1, 'sarkaw', 'sarkaw', '123456789', 'manger');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `id_film` int(11) NOT NULL AUTO_INCREMENT,
  `name_film` varchar(200) NOT NULL,
  `image_film` varchar(200) NOT NULL,
  `time` time NOT NULL,
  `actors` varchar(200) NOT NULL,
  `year` date NOT NULL,
  `description` varchar(2000) NOT NULL,
  `id_user` int(11) NOT NULL,
  `online_v` varchar(500) NOT NULL,
  `download` varchar(500) NOT NULL,
  `trailer` varchar(500) NOT NULL,
  `visitor` varchar(250) NOT NULL,
  PRIMARY KEY (`id_film`),
  UNIQUE KEY `name_film` (`name_film`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf32;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `name_film`, `image_film`, `time`, `actors`, `year`, `description`, `id_user`, `online_v`, `download`, `trailer`, `visitor`) VALUES
(2, 'insidious 4', 'insidious3.jpg', '01:30:00', 'Ø¯ÛŽØ±Ù…Û†Øª Ø¯ÛŒÙ„Ù…Û†Ù†ÛŒ Ùˆ Ø³ØªÛŒÙØ§Ù† Ø³ÙƒÛ†Øª Ùˆ Ø¦Ø§Ù†Ú¯ÙˆØ³ Ø³Ø§Ù…Ù¾Ø³Û†Ù†', '2019-07-04', 'hello', 1, 'https://wwww.google.com', 'https://www.google.iq/', 'https://www.google.iq/', '12'),
(3, 'taitanic', 'taitanic.jfif', '01:30:00', 'Ù„ÛŒÙ† Ø´Ø§ÛŒØŒ Ù„ÛŒ ÙˆØ§Ù†ÛŽÙ„ØŒ Ø¦Ø§Ù†Ú¯Û†Ø³ Ø³Ø§Ù…Ù¾Ø³Û†Ù†', '1999-03-14', 'ÛŒØ´Ù†ÛŒØ´Ù†ØªÛŒÙ†Ù†ÛŒØªÙ†Ø´ØªÛŒÙ†Ø´', 1, 'https://wwww.google.com', 'https://www.google.iq/', 'https://www.google.iq/', '1');

-- --------------------------------------------------------

--
-- Table structure for table `f_g`
--

DROP TABLE IF EXISTS `f_g`;
CREATE TABLE IF NOT EXISTS `f_g` (
  `id_film` int(11) NOT NULL,
  `id_Genre_film` int(11) NOT NULL,
  KEY `id_film` (`id_film`),
  KEY `id_Genre_film` (`id_Genre_film`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `f_g`
--

INSERT INTO `f_g` (`id_film`, `id_Genre_film`) VALUES
(2, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `id_Genre_film` int(11) NOT NULL AUTO_INCREMENT,
  `Genre_film` varchar(250) NOT NULL,
  PRIMARY KEY (`id_Genre_film`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf32;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id_Genre_film`, `Genre_film`) VALUES
(2, 'ØªØ±Ø³Ù†Ø§Ùƒ'),
(3, 'ÙƒÛ†Ù…ÛŒØ¯ÛŒ'),
(4, 'Ø²Ø§Ù†Ø³ØªÛŒ Ø®Ù‡â€ŒÛŒØ§ÚµÛŒ'),
(5, 'Ú•Û†Ù…Ø§Ù†Ø³ÛŒ'),
(6, 'ØªØ§ÙˆØ§Ù†'),
(7, 'Ø¦Ø§ÙƒØ´Ù†'),
(8, 'Ø¦Ù‡â€ŒÙ†ÛŒÙ…Ù‡â€ŒÛŒØ´Ù†'),
(9, 'Ø³Ù‡â€ŒØ±ÙƒÛŽØ´ÛŒ');

-- --------------------------------------------------------

--
-- Table structure for table `qouteoffilms`
--

DROP TABLE IF EXISTS `qouteoffilms`;
CREATE TABLE IF NOT EXISTS `qouteoffilms` (
  `id_qoute` int(11) NOT NULL AUTO_INCREMENT,
  `name_films` varchar(250) CHARACTER SET utf32 NOT NULL,
  `image_film` varchar(250) CHARACTER SET utf32 NOT NULL,
  `qoute` varchar(1000) CHARACTER SET utf32 NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_qoute`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qouteoffilms`
--

INSERT INTO `qouteoffilms` (`id_qoute`, `name_films`, `image_film`, `qoute`, `id_user`) VALUES
(1, 'Band of Brothers', 'band_of_brothers_1.jpg', 'Ù€ ØªØ±Ø³ ÙˆÛ•Ú©Ùˆ Ú˜Û•Ù‡Ø± ÙˆØ§ÛŒÛ• Ù„Û• Ø¬Û•Ù†Ú¯ Ø¯Ø§ ØŒ Ù‡Û•Ø³ØªÛŒ Ù¾ÛŽØ¯Û•Ú©Û•ÛŒØª Ø¨Û•ÚµØ§Ù… Ù†Ø§Ø¨ÛŽØª Ù†ÛŒØ´Ø§Ù†ÛŒ Ø¨Ø¯Û•ÛŒØª ', 1),
(2, 'Public enemies', 'Public enemies.jpg', '.. Ù…Ù† Ø¯Ú˜ÛŒ Ú©Û†Ù…Û•ÚµÚ¯Û• Ù†ÛŒÙ… ØŒ Ø¨Û•ÚµÚ©Ùˆ Ù…Ù† Ø¯Ú˜ÛŒ Ù…Ø±Û†Ú¤Û• Ú¯Û•Ù…Ú˜Û•Ú©Ø§Ù†Ù…', 1),
(3, 'got', 'got.jpg', 'Ú©Ù€Ø§ØªÙ€ÛŽÚ© Ú¾Ù€Û•Ù…Ù€ÙˆÙˆ Ú©Ù€Û•Ù… Ùˆ Ú©Ù€ÙˆØ±ØªÙ€ÛŒÛ•Ú©Ù€Ø§Ù†Ù€ÛŒ Ø®Ù€Û†Øª\r\nÙ‚Ù€Ø¨ÙˆÚµ Ø¨ÛŽØª ØŒ Ú©Ù€Û•Ø³ Ù†Ù€Ø§ØªÙˆØ§Ù†Ù€ÛŽ ØªÙ€ÛŽÚ©Øª Ø¨Ù€Ø´Ú©ÛŽÙ€Ù†ÛŽ ', 1),
(4, 'Peaky Blinders', 'pu.jpg', ' Ù¾ÙˆØ±Û• Ù¾ÙˆÚµÛŒ Ø¨Û• Ø¦ÛŒØ¯Ø§ÛŒ Ø¨Ø±Ø§Ø²Ø§ÛŒ Ø¯Û•ÚµÛŽØª :\r\nÙ¾ÛŒØ§ÙˆÛŽÚ© Ù„Û•Ú¯Û•Úµ Ú˜Ù†ÛŽÚ© Ø¬ÙˆÙˆØª Ø¨ÙˆÙˆ Ùˆ Ù…Ù†Ø¯Ø§ÚµÛŽÚ©ÛŒ ÛŒØ§Ù† Ø¨ÙˆÙˆ ØŒ Ø¨Û• Ù…Ù†Ø¯Ø§ÚµÛ•Ú©Û•ÛŒØ§Ù† ÙˆÙˆØª Ø²Û†Úµ Ùˆ Ø¨Û• Ú˜Ù†Û•Ú©Û•Ø´ Ø³Û†Ø²Ø§Ù†ÛŒ ØŒ Ø¨Û•ÚµØ§Ù… Ù‡ÛŒÚ† Ù†Ø§ÙˆÛŽÚ©ÛŒØ§Ù† Ø¨Û† Ù¾ÛŒØ§ÙˆÛ•Ú©Û• Ù†Û•Ø¨ÙˆÙˆ .......!!', 1),
(5, 'Gangster Squad', 'gangastar.jpg', 'Ø¯ÙˆÙˆ Ø´Øª Ù‡Û•ÛŒÛ• Ù†Ø§ØªÙˆØ§Ù†ÛŒ Ø¨Ú¯Û•Ú•ÛŽØªÛ•ÙˆÛ•\r\nÙÛŒØ´Û•Ú©ÛŽÚ© Ú©Û• Ù„Û• Ø¯Û•Ù…Ø§Ù†Ú†Û• Ø¯Û•Ø±Ø¯Û•Ú†ÛŽØª ØŒ Ù„Û•Ú¯Û•Úµ Ù‚Ø³Û•ÛŒÛ•Ú© Ú©Û• Ø¯Û•Ù… Ø¯Û•Ø±Ø¯Û•Ú†ÛŽ ØŒ Ø¨Û†ÛŒÛ• ÙˆØ±ÛŒØ§ÛŒ Ø¦Û•Ùˆ Ø¯ÙˆÙˆØ§Ù†Û•Ø¨Û• \r\n\r\n', 1),
(6, 'true grit', 'a.jpg', ' Ù‡ÛŒÚ† Ø´ØªÛŽÚ© Ù„Û•Ùˆ Ø¯ÙˆÙ†ÛŒØ§Ø¯Ø§ Ø¨Û• Ø®Û†Ø±Ø§ÛŒÛŒ Ù†ÛŒÛ• ØŒ ØªÛ•Ù†Ù‡Ø§ Ø¨Û•Ø²Û•ÛŒÛŒ Ø®ÙˆØ¯Ø§ Ù†Û•Ø¨ÛŽ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

DROP TABLE IF EXISTS `slide`;
CREATE TABLE IF NOT EXISTS `slide` (
  `id_slide` int(11) NOT NULL AUTO_INCREMENT,
  `img_movies` varchar(250) NOT NULL,
  `kurtayak` varchar(500) CHARACTER SET utf32 NOT NULL,
  PRIMARY KEY (`id_slide`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `warger`
--

DROP TABLE IF EXISTS `warger`;
CREATE TABLE IF NOT EXISTS `warger` (
  `id_warger` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET utf32 NOT NULL,
  `img_warger` varchar(250) NOT NULL,
  `age` int(2) NOT NULL,
  `id_user` varchar(250) NOT NULL,
  PRIMARY KEY (`name`),
  UNIQUE KEY `id_warger` (`id_warger`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warger`
--

INSERT INTO `warger` (`id_warger`, `name`, `img_warger`, `age`, `id_user`) VALUES
(2, 'sarkash', 'pacino.jpg', 21, '1'),
(1, 'sarkaw', 'jon.jpg', 19, '1');

-- --------------------------------------------------------

--
-- Table structure for table `w_f`
--

DROP TABLE IF EXISTS `w_f`;
CREATE TABLE IF NOT EXISTS `w_f` (
  `name_film` varchar(250) CHARACTER SET utf32 NOT NULL,
  `name_warger` varchar(250) CHARACTER SET utf32 NOT NULL,
  KEY `name_warger` (`name_warger`),
  KEY `name_film` (`name_film`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `w_f`
--

INSERT INTO `w_f` (`name_film`, `name_warger`) VALUES
('insidious 4', 'sarkaw'),
('insidious 4', 'sarkaw'),
('taitanic', 'sarkaw');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `admin` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `f_g`
--
ALTER TABLE `f_g`
  ADD CONSTRAINT `f_g_ibfk_2` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `f_g_ibfk_3` FOREIGN KEY (`id_Genre_film`) REFERENCES `genre` (`id_Genre_film`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `w_f`
--
ALTER TABLE `w_f`
  ADD CONSTRAINT `w_f_ibfk_1` FOREIGN KEY (`name_film`) REFERENCES `film` (`name_film`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `w_f_ibfk_2` FOREIGN KEY (`name_warger`) REFERENCES `warger` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
