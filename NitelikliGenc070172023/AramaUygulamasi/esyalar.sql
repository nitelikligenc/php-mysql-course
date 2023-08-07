-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 Ara 2018, 18:58:37
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
-- Tablo için tablo yapısı `esyalar`
--

CREATE TABLE `esyalar` (
  `id` int(10) UNSIGNED NOT NULL,
  `adi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `esyalar`
--

INSERT INTO `esyalar` (`id`, `adi`) VALUES
(1, 'Masa'),
(2, 'Sandalye'),
(3, 'Saat'),
(4, 'Sehpa'),
(5, 'Duvar Saati'),
(6, 'Bilgisayar'),
(7, 'Telefon'),
(8, 'Buzdolabı'),
(9, 'Fırın'),
(10, 'Halı'),
(11, 'Perde'),
(12, 'Dolap'),
(13, 'Konsol'),
(14, 'Koltuk'),
(15, 'Yatak'),
(16, 'Battaniye');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `esyalar`
--
ALTER TABLE `esyalar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `esyalar`
--
ALTER TABLE `esyalar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
