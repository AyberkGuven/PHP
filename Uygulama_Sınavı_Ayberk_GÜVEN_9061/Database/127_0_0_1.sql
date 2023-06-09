-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 02 Haz 2023, 09:45:15
-- Sunucu sürümü: 8.0.31
-- PHP Sürümü: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `uygulama_sinavi_ayberk_guven_9061`
--
CREATE DATABASE IF NOT EXISTS `uygulama_sinavi_ayberk_guven_9061` DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci;
USE `uygulama_sinavi_ayberk_guven_9061`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(75) COLLATE utf8mb3_turkish_ci NOT NULL,
  `Email` varchar(75) COLLATE utf8mb3_turkish_ci NOT NULL,
  `Explanation` varchar(1111) COLLATE utf8mb3_turkish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `message`
--

INSERT INTO `message` (`Id`, `Name`, `Email`, `Explanation`) VALUES
(1, 'Burak Demir', 'Burak4141@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.'),
(2, 'Emirhan Yiğit Polat', 'Emirhan4141@gmail.com', 'alley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'),
(3, 'Emirhan Yiğit Polat', 'Emirhan4141@gmail.com', 'alley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'),
(4, '', '', ''),
(5, '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
