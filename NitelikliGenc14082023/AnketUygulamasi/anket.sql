-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 Ara 2018, 17:58:04
-- Sunucu sürümü: 10.1.30-MariaDB
-- PHP Sürümü: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `extraegitim`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anket`
--

CREATE TABLE `anket` (
  `id` int(10) UNSIGNED NOT NULL,
  `soru` varchar(100) NOT NULL,
  `cevapbir` varchar(50) NOT NULL,
  `cevapiki` varchar(50) NOT NULL,
  `cevapuc` varchar(50) NOT NULL,
  `oysayisibir` int(10) UNSIGNED NOT NULL,
  `oysayisiiki` int(10) UNSIGNED NOT NULL,
  `oysayisiuc` int(10) UNSIGNED NOT NULL,
  `toplamoysayisi` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `anket`
--

INSERT INTO `anket` (`id`, `soru`, `cevapbir`, `cevapiki`, `cevapuc`, `oysayisibir`, `oysayisiiki`, `oysayisiuc`, `toplamoysayisi`) VALUES
(1, 'Web Sitesi Tasarımımızı Nasıl Buldunuz?', 'Mükemmel', 'Normal', 'Kötü', 3100, 1211, 72, 4383);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `anket`
--
ALTER TABLE `anket`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `anket`
--
ALTER TABLE `anket`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
