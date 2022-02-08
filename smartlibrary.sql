-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Feb 2022 pada 01.05
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartlibrary`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(75) NOT NULL,
  `kelas_user` varchar(30) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `password_user` varchar(100) NOT NULL,
  `status_user` enum('Aktif','Belum Aktif') NOT NULL,
  `info_user` enum('1','0') NOT NULL COMMENT '1= aktif, 0 = tidak aktif',
  `role_id` enum('1','2') NOT NULL COMMENT '1=admin, 2=pengguna'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `kelas_user`, `email_user`, `password_user`, `status_user`, `info_user`, `role_id`) VALUES
(1, 'Bintang Nasution', 'VIII', 'sumbercodeku@gmail.com', '$2y$10$IFBMAL9zLH3pNVliRx4vTeqQO8YpVvqkT7JdHnYlnPZcpo1yYLiX.', 'Belum Aktif', '0', '1'),
(2, 'Bintang Nasution', 'VII', 'bintangnasution@gmail.com', '$2y$10$IFBMAL9zLH3pNVliRx4vTeqQO8YpVvqkT7JdHnYlnPZcpo1yYLiX.', 'Belum Aktif', '1', '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
