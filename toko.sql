-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Apr 2020 pada 10.15
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `album`
--

INSERT INTO `album` (`id`, `name`, `image`, `price`) VALUES
(1, 'SEVENTEEN AN ODE ALBUM', 'album svt anode.jpg', 15.00),
(2, 'SEVENTEEN YOU MADE MY DAWN ALBUM', 'album svt ymmd.jpg', 12.00),
(3, 'BLACK PINK DU DDU DU DDU ALBUM', '17.jpg', 15.00),
(4, 'EXO TEMPO ALBUM', '35.jpg', 15.00),
(5, 'EXO LOVE SHOT ALBUM', '36.jpg', 15.00),
(6, 'EXO THE WAR ALBUM', '37.jpg', 15.00),
(7, 'SEVENTEEN FALLIN FLOWER ALBUM', '39.jpg', 15.00),
(8, 'EXO WINTER ALBUM', '38.jpg', 15.00),
(9, 'SEVENTEEN BOYS BE ALBUM', '40.jpg', 15.00),
(10, 'SEVENTEEN LOVE LETTER ALBUM', '41.jpg', 15.00),
(11, 'TWICE WHAT IS LOVE ALBUM', '42.jpg', 15.00),
(12, 'TWICE FEEL SPECIAL ALBUM', '43.jpg', 15.00),
(13, 'TWICE FANCY ALBUM', '44.jpg', 15.00),
(14, 'TWICE CHEER UP ALBUM', '45.jpg', 15.00),
(15, 'MONSTA X ARE YOU THERE ALBUM', '46.jpg', 15.00),
(16, 'MONSTA X WE ARE HERE ALBUM', '47.jpg', 15.00),
(17, 'MONSTA X FOLLOW ALBUM', '48.jpg', 15.00),
(18, 'GOT7 DYE ALBUM', '49.jpg', 15.00),
(19, 'GOT7 7 OF 7 ALBUM', '50.jpg', 15.00),
(20, 'GOT7 SPINNING ALBUM', '51.jpg', 15.00),
(21, 'GOT7 JUST RIGHT ALBUM', '52.jpg', 15.00),
(22, 'EXO OBSESSION ALBUM', '53.jpg', 15.00),
(23, 'EXO SC WHAT A LIFE ALBUM', '55.jpg', 15.00),
(24, 'EXO THE WAR BLACK ALBUM', '54.jpg', 15.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `all_product`
--

CREATE TABLE `all_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `all_product`
--

INSERT INTO `all_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'SEVENTEEN lightstick', 'lightstick svt.jpg', 35.00),
(2, 'AN ODE ALBUM ', 'album svt anode.jpg', 15.00),
(3, 'YOU MADE MY DAWN ALBUM', 'album svt ymmd.jpg', 12.00),
(4, 'TOTEBAG', 'seventeen merch.jpg', 10.00),
(5, 'T-SHIRT', 'tshirt.jpg', 13.00),
(6, 'RED VELVET lightstick', 'lightstick rv.jpg', 35.00),
(7, 'EXO lightstick', 'lightstick exo.jpg', 35.00),
(8, 'BLACKPINK lightstick', 'lightstick bp.jpg', 35.00),
(9, 'BTS lightstick', 'lightstick bts.jpg', 35.00),
(10, 'GOT7 Lightstick', 'lightstick got7.jpg', 0.00),
(11, 'ASTRO Lightstick', 'lightstick astro.jpg', 35.00),
(12, 'MONSTA X Lightstick', 'lightstick monstax.png', 35.00),
(13, 'TWICE Lightstick', 'lightstick twice.jpg', 35.00),
(18, 'ASTRO rise up hat', '1.png', 25.00),
(20, 'ASTRO STARLIGHT wallet', '2.jpg', 18.00),
(21, 'BLACKPINK T-SHIRT', '3.jpg', 45.00),
(22, 'BLACKPINK HAT', '4.jpg', 12.00),
(23, 'ASTRO T-SHIRT', '5.jpg', 45.00),
(24, 'BLACKPINK BLACK T-SHIRT', '6.jpg', 45.00),
(25, 'EXO NECKLACE', '8.jpg', 50.00),
(26, 'MONSTA X KEYCHAIN', '9.png', 8.00),
(27, 'SUPER M PHOTOBOX', '10.jpg', 15.00),
(28, 'EXO POUCH', '11.jpg', 23.00),
(29, 'EXO KEYCHAIN DOLL', '12.jpg', 10.00),
(30, 'SEVENTEEN KEYCHAIN', '13.JPG', 10.00),
(31, 'SEVENTEEN CARATLAND HOODIE', '14.jpg', 50.00),
(32, 'BLACKPING SLING BAG', '15.jpg', 70.00),
(33, 'BLACKPINK AIR PODS', '16.jpg', 150.00),
(34, 'TWICE JERSEY', '18.jpg', 45.00),
(35, 'TWICE T-SHIRT YES or YES', '19.jpg', 45.00),
(36, 'TWICE TWICELAND HOODIE', '20.jpg', 50.00),
(37, 'ASTRO SLING BAG', '21.jpg', 30.00),
(38, 'GOT7 HOODIE', '22.JPG', 50.00),
(39, 'GOT7 KEYCHAIN', '23.jpg', 10.00),
(40, 'ASTRO JACKET', '24.jpg', 45.00),
(41, 'RED VELVET TOTEBAG', '25.jpg', 30.00),
(42, 'RED VELVET TUMBLR', '26.jpg', 23.00),
(43, 'RED VELVET FAN', '27.jpg', 48.00),
(44, 'RED VELVET JACKET', '28.jpg', 45.00),
(45, 'RED VELVET WAISTBAG', '29.jpg', 33.00),
(46, 'MONSTA X T-SHIRT', '30.JPG', 30.00),
(47, 'MONSTA X HOODIE', '31.jpg', 45.00),
(48, 'EXO DOLL', '32.jpg', 25.00),
(49, 'SEVENTEEN HAT', '33.png', 30.00),
(50, 'ASTRO WORLD T-SHIRT', '34.jpg', 35.00),
(51, 'EXO PHOTOBOOK', '7.jpg', 25.00),
(52, 'BLACK PINK DU DDU DU DDU ALBUM', '17.jpg', 15.00),
(53, 'EXO TEMPO ALBUM', '35.jpg', 15.00),
(54, 'EXO LOVE SHOT ALBUM', '36.jpg', 15.00),
(55, 'EXO THE WAR ALBUM', '37.jpg', 15.00),
(56, 'SEVENTEEN FALLIN FLOWER ALBUM', '39.jpg', 15.00),
(57, 'EXO WINTER ALBUM', '38.jpg', 15.00),
(58, 'SEVENTEEN BOYS BE ALBUM', '40.jpg', 15.00),
(59, 'SEVENTEEN LOVE LETTER ALBUM', '41.jpg', 15.00),
(60, 'TWICE WHAT IS LOVE ALBUM', '42.jpg', 15.00),
(61, 'TWICE FEEL SPECIAL ALBUM', '43.jpg', 15.00),
(62, 'TWICE FANCY ALBUM', '44.jpg', 15.00),
(63, 'TWICE CHEER UP ALBUM', '45.jpg', 15.00),
(64, 'MONSTA X ARE YOU THERE ALBUM', '46.jpg', 15.00),
(65, 'MONSTA X WE ARE HERE ALBUM', '47.jpg', 15.00),
(66, 'MONSTA X FOLLOW ALBUM', '48.jpg', 15.00),
(67, 'GOT7 DYE ALBUM', '49.jpg', 15.00),
(68, 'GOT7 7 OF 7 ALBUM', '50.jpg', 15.00),
(69, 'GOT7 SPINNING ALBUM', '51.jpg', 15.00),
(70, 'GOT7 JUST RIGHT ALBUM', '52.jpg', 15.00),
(71, 'EXO OBSESSION ALBUM', '53.jpg', 15.00),
(72, 'EXO SC WHAT A LIFE ALBUM', '55.jpg', 15.00),
(73, 'EXO THE WAR BLACK ALBUM', '54.jpg', 15.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `latest_product`
--

CREATE TABLE `latest_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `latest_product`
--

INSERT INTO `latest_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'SEVENTEEN lightstick', 'lightstick svt.jpg', 35.00),
(2, 'AN ODE ALBUM ', 'album svt anode.jpg', 15.00),
(3, 'YOU MADE MY DAWN ALBUM', 'album svt ymmd.jpg', 12.00),
(4, 'TOTEBAG', 'seventeen merch.jpg', 10.00),
(5, 'T-SHIRT', 'tshirt.jpg', 13.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lightstick`
--

CREATE TABLE `lightstick` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lightstick`
--

INSERT INTO `lightstick` (`id`, `name`, `image`, `price`) VALUES
(1, 'RED VELVET Lightstick', 'lightstick rv.jpg', 35.00),
(2, 'EXO Lightstick', 'lightstick exo.jpg', 35.00),
(3, 'BLACKPINK Lightstick', 'lightstick bp.jpg', 35.00),
(4, 'BTS Lightstick', 'lightstick bts.jpg', 35.00),
(5, 'GOT7 Lightstick', 'lightstick got7.jpg', 35.00),
(6, 'ASTRO Ligthstick', 'lightstick astro.jpg', 35.00),
(7, 'MONSTA XLightstick', 'lightstick monstax.png', 35.00),
(8, 'TWICE Lightstick', 'lightstick twice.jpg', 35.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `merchandise`
--

CREATE TABLE `merchandise` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `merchandise`
--

INSERT INTO `merchandise` (`id`, `name`, `image`, `price`) VALUES
(10, 'ASTRO rise up hat', '1.png', 25.00),
(11, 'ASTRO STARLIGHT wallet', '2.jpg', 18.00),
(12, 'BLACKPINK T-SHIRT', '3.jpg', 45.00),
(13, 'BLACKPINK HAT', '4.jpg', 12.00),
(14, 'ASTRO T-SHIRT', '5.jpg', 45.00),
(15, 'BLACKPINK BLACK T-SHIRT', '6.jpg', 45.00),
(16, 'EXO NECKLACE', '8.jpg', 50.00),
(17, 'MONSTA X KEYCHAIN', '9.png', 8.00),
(18, 'SUPER M PHOTOBOX', '10.jpg', 15.00),
(19, 'EXO POUCH', '11.jpg', 23.00),
(20, 'EXO KEYCHAIN DOLL', '12.jpg', 10.00),
(21, 'SEVENTEEN KEYCHAIN', '13.JPG', 10.00),
(22, 'SEVENTEEN CARATLAND HOODIE', '14.jpg', 50.00),
(23, 'BLACKPING SLING BAG', '15.jpg', 70.00),
(24, 'BLACKPINK AIR PODS', '16.jpg', 150.00),
(25, 'TWICE JERSEY', '18.jpg', 45.00),
(26, 'TWICE T-SHIRT YES or YES', '19.jpg', 45.00),
(27, 'TWICE TWICELAND HOODIE', '20.jpg', 50.00),
(28, 'ASTRO SLING BAG', '21.jpg', 30.00),
(29, 'GOT7 HOODIE', '22.JPG', 50.00),
(30, 'GOT7 KEYCHAIN', '23.jpg', 10.00),
(31, 'ASTRO JACKET', '24.jpg', 45.00),
(32, 'RED VELVET TOTEBAG', '25.jpg', 30.00),
(33, 'RED VELVET TUMBLR', '26.jpg', 23.00),
(34, 'RED VELVET FAN', '27.jpg', 48.00),
(35, 'RED VELVET JACKET', '28.jpg', 45.00),
(36, 'RED VELVET WAISTBAG', '29.jpg', 33.00),
(37, 'MONSTA X T-SHIRT', '30.JPG', 30.00),
(38, 'MONSTA X HOODIE', '31.jpg', 45.00),
(39, 'EXO DOLL', '32.jpg', 25.00),
(40, 'SEVENTEEN HAT', '33.png', 30.00),
(41, 'ASTRO WORLD T-SHIRT', '34.jpg', 35.00),
(42, 'EXO PHOTOBOOK', '7.jpg', 25.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'ichaa', 'ichaa'),
(3, 'pengunjung', 'pengunjung');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `all_product`
--
ALTER TABLE `all_product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `latest_product`
--
ALTER TABLE `latest_product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lightstick`
--
ALTER TABLE `lightstick`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `merchandise`
--
ALTER TABLE `merchandise`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `all_product`
--
ALTER TABLE `all_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT untuk tabel `latest_product`
--
ALTER TABLE `latest_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `lightstick`
--
ALTER TABLE `lightstick`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `merchandise`
--
ALTER TABLE `merchandise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
