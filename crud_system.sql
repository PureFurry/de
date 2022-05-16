-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 14 May 2022, 23:50:57
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `crud_system`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `yonetici_islem` varchar(256) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `process_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`yonetici_islem`, `process_time`) VALUES
('a', '0000-00-00 00:00:00'),
('Ekleme işlemi Yapildi', '0000-00-00 00:00:00'),
('Ekleme işlemi Yapildi', '0000-00-00 00:00:00'),
('Ekleme işlemi Yapildi', '2022-05-14 21:48:51'),
('0', '2022-05-14 21:54:29'),
('ascxzEkleme işlemi Yapildi', '2022-05-14 21:58:20'),
('13Silme işlemi Yapildi', '2022-05-14 22:00:41'),
('14Silme işlemi Yapildi', '2022-05-14 22:00:41'),
('20Silme işlemi Yapildi', '2022-05-14 22:00:42'),
('Silme işlemi Yapildi', '2022-05-14 22:07:28'),
('Silme işlemi Yapildi', '2022-05-14 22:08:22');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `blog_baslik` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `crate_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blogkategori`
--

CREATE TABLE `blogkategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori_baslik` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `crate_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `blogkategori`
--

INSERT INTO `blogkategori` (`id`, `kategori_baslik`, `crate_time`) VALUES
(21, 'qwe', '2022-05-14 21:48:51'),
(22, 'asdcxz', '2022-05-14 21:54:29'),
(23, 'ascxz', '2022-05-14 21:58:20');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `blogkategori`
--
ALTER TABLE `blogkategori`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `blogkategori`
--
ALTER TABLE `blogkategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
