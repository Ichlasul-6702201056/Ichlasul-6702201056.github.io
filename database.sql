-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jan 2022 pada 02.58
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saraheyo.id`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `snack1`
--

CREATE TABLE `snack1` (
  `id` int(5) NOT NULL,
  `snack` varchar(50) NOT NULL,
  `img` varchar(500) NOT NULL,
  `sdesc` mediumtext NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `snack1`
--

INSERT INTO `snack1` (`id`, `snack`, `img`, `sdesc`, `price`) VALUES
(1, 'Banana Roll', '../img/banana_roll.png', 'Banana roll adalah sebuah rollade berisi pisang dengan banyak variasi topping. Anda bisa memesan 2 topping yang berbeda pada satu porsi banana roll. Anda juga bisa memilih topping dengan tambahan keju di atasnya. Berikut topping yang tersedia. <br><br><b>Topping : </b><br>- Coklat <br>- Tiramisu <br>- Keju <br>- Matcha <br>- Strawberry <br>- Taro <br>', 'Rp 10.000,-'),
(2, 'Lumpia', '../img/lumpia_resize.png', 'Lumpia adalah sebuah balutan pastri yang berisi wortel dan suwiran daging lembut juga ditambah dengan saus bangkok yang nikmat cocok untuk mengembalikan energimu yang terkuras selama bekerja.', 'Rp 8.000,-'),
(3, 'Pentol', '../img/pentol_resize.png', 'Pentol adalah . . . siapa sih yang ngga tau pentol xixixi. Pentol Saraheyo.id punya cita rasa yang mantab dan ukuran sebesar rasa sayangku ke kamu hiks.                ', 'Rp 8.000,-'),
(4, 'Ice Cream', '../img/ice_resize.png', 'Ice Cream dari Saraheyo.id memilki 2 variant rasa, yaitu coklat dan strawberry. Dijamin setelah ice cream ini meluncur ke lidah, rasanya sejuk-sejuk segar guys.', 'Rp 1.000,-'),
(6, 'sambal pecel', 'https://www.langsungenak.com/wp-content/uploads/2019/10/sambel.jpg', 'makanan enak', 'Rp 10.000,-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `uid` int(5) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `passw` varchar(255) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`uid`, `nama`, `username`, `passw`, `telp`, `email`) VALUES
(1, '', 'admin', 'admin', '0000', 'admin0000@gmail.com'),
(2, '', 'user', 'user', '0001', 'user0001@gmail.com'),
(6, 'userkedua', 'userkedua', 'userkedua', '0002', 'user0002@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `snack1`
--
ALTER TABLE `snack1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `snack1`
--
ALTER TABLE `snack1`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
