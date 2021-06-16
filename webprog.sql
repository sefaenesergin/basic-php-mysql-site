-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 14 Haz 2021, 20:16:50
-- Sunucu sürümü: 10.4.18-MariaDB
-- PHP Sürümü: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `webprog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `memurlar`
--

CREATE TABLE `memurlar` (
  `memur_id` int(4) NOT NULL,
  `ad` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL,
  `soyad` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL,
  `birim` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL,
  `maas` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `memurlar`
--

INSERT INTO `memurlar` (`memur_id`, `ad`, `soyad`, `birim`, `maas`) VALUES
(12, 'sefa', 'taş', '123', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(256) NOT NULL,
  `telnumber` bigint(20) DEFAULT NULL,
  `birthdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `telnumber`, `birthdate`) VALUES
(13, 'sefae', 'sefa', 123, '2021-06-11'),
(15, 'amet', '123', 123, '2021-06-11'),
(16, 'lemur', '123', 123, '2021-06-03');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `memurlar`
--
ALTER TABLE `memurlar`
  ADD PRIMARY KEY (`memur_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `memurlar`
--
ALTER TABLE `memurlar`
  MODIFY `memur_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
