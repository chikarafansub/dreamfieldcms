-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 May 2020, 17:05:42
-- Sunucu sürümü: 10.1.29-MariaDB
-- PHP Sürümü: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `football`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `footballers`
--

CREATE TABLE `footballers` (
  `id` int(11) NOT NULL,
  `located` text COLLATE utf8_turkish_ci NOT NULL,
  `namesurname` text COLLATE utf8_turkish_ci NOT NULL,
  `age` text COLLATE utf8_turkish_ci NOT NULL,
  `country` text COLLATE utf8_turkish_ci NOT NULL,
  `nationality` text COLLATE utf8_turkish_ci NOT NULL,
  `team` text COLLATE utf8_turkish_ci NOT NULL,
  `disease` text COLLATE utf8_turkish_ci NOT NULL,
  `neet` text COLLATE utf8_turkish_ci NOT NULL,
  `skill` text COLLATE utf8_turkish_ci NOT NULL,
  `skill2` text COLLATE utf8_turkish_ci NOT NULL,
  `skill3` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `hp` int(11) NOT NULL,
  `mp` int(11) NOT NULL,
  `levelcontrol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `skill2`
--

CREATE TABLE `skill2` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `hp` int(11) NOT NULL,
  `mp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `skill3`
--

CREATE TABLE `skill3` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `hp` int(11) NOT NULL,
  `mp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `team`
--

CREATE TABLE `team` (
  `id` int(1) NOT NULL,
  `teamname` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `captain` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `neet` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tactic` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `footballers`
--
ALTER TABLE `footballers`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `skill2`
--
ALTER TABLE `skill2`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `skill3`
--
ALTER TABLE `skill3`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `footballers`
--
ALTER TABLE `footballers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `skill2`
--
ALTER TABLE `skill2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `skill3`
--
ALTER TABLE `skill3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `team`
--
ALTER TABLE `team`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
