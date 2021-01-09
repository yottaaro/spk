-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2020 pada 05.43
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-spk-zakat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `kode_Mustahik` varchar(25) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `tempat_Lahir` varchar(40) NOT NULL,
  `tanggal_Lahir` date NOT NULL,
  `alamat` tinytext NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `no_ktp` varchar(25) NOT NULL,
  `pekerjaan` varchar(40) NOT NULL,
  `jabatan_pekerjaan` varchar(40) NOT NULL,
  `tlp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`kode_Mustahik`, `nama`, `tempat_Lahir`, `tanggal_Lahir`, `alamat`, `jenis_kelamin`, `no_ktp`, `pekerjaan`, `jabatan_pekerjaan`, `tlp`) VALUES
('KMZ-001', 'Budi', 'Tasikmalaya', '1998-10-12', 'Mitrabatik Tasikmalaya', 'Laki-Laki', '1222211413212', 'Alfamart', 'Kasir', 'Mitrabatik Tasikmalaya'),
('KMZ-002', 'Tafsir', 'Tasikmalaya', '1996-11-12', 'Indihiang', 'Laki-Laki', '12312311142221', 'Coffe', 'Barista', '089761223098'),
('KMZ-003', 'Lasmini', 'Tasikmalaya', '1982-12-12', 'Panyingkiran', 'Perempuan', '123111112349081', 'Yogya', 'Kasir', '089761223098'),
('KMZ-004', 'Muriya', 'Tasikmalaya', '1997-01-14', 'Mangkubumi', 'Perempuan', '345111122211122', 'Pelacuraan', 'Big Tit', '08976121112221'),
('KMZ-005', 'Siti', 'Tasikmalaya', '1998-10-12', 'Mitrabatik Tasikmalaya', 'Perempuan', '2000001922', 'CoofeShop', 'Kasir', '081211456788');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `id_mustahik` varchar(25) NOT NULL,
  `Nilai_S` double NOT NULL,
  `nilai_V` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id`, `id_mustahik`, `Nilai_S`, `nilai_V`) VALUES
(311, 'KMZ-001', 0.10321609957735, 0.24590092414219),
(312, 'KMZ-002', 0.076639796615996, 0.18258582615612),
(313, 'KMZ-003', 0.069512149448628, 0.16560499629923),
(314, 'KMZ-004', 0.089509090056055, 0.2132454922637),
(315, 'KMZ-005', 0.08086955674492, 0.19266276113876);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_Pengguna` int(11) NOT NULL,
  `nama_Pengguna` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hakakses` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_Pengguna`, `nama_Pengguna`, `username`, `password`, `hakakses`) VALUES
(1, 'Dian', '/', '6666cd76f96956469e7be39d750cc7d9', 'Admin'),
(2, 'Developer', 'Developer', '6666cd76f96956469e7be39d750cc7d9', 'Admin'),
(5, 'Kamu', '345', '6666cd76f96956469e7be39d750cc7d9', 'Pengguna');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_kriteria`
--

CREATE TABLE `sub_kriteria` (
  `id_sub` int(11) NOT NULL,
  `nama_Pilihan` varchar(50) NOT NULL,
  `nilai_Pilihan` int(11) NOT NULL,
  `id_Kritera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sub_kriteria`
--

INSERT INTO `sub_kriteria` (`id_sub`, `nama_Pilihan`, `nilai_Pilihan`, `id_Kritera`) VALUES
(1, 'Milik Sendiri', 3, 4),
(2, 'Tidak Punya', 1, 4),
(4, 'Mengontrak', 2, 4),
(5, 'Punya', 3, 5),
(6, 'Mencicil', 2, 5),
(7, 'Tidak Punya', 1, 5),
(8, 'Suami Atau Istri', 1, 6),
(9, 'Anak atau Menantu', 2, 6),
(10, 'Orang Tua', 3, 6),
(11, 'Tidak Ada', 4, 6),
(12, 'Lengkap', 2, 7),
(13, 'Tidak Lengkap', 1, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_evaluasi`
--

CREATE TABLE `tbl_evaluasi` (
  `id` int(11) NOT NULL,
  `id_Kriteria` int(11) NOT NULL,
  `kode_Mustahik` varchar(25) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_evaluasi`
--

INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES
(1, 1, 'KMZ-001', 1000000),
(2, 3, 'KMZ-001', 3),
(3, 4, 'KMZ-001', 2),
(4, 5, 'KMZ-001', 2),
(5, 6, 'KMZ-001', 4),
(6, 7, 'KMZ-001', 2),
(7, 1, 'KMZ-002', 1500000),
(8, 3, 'KMZ-002', 1),
(9, 4, 'KMZ-002', 3),
(10, 5, 'KMZ-002', 1),
(11, 6, 'KMZ-002', 4),
(12, 7, 'KMZ-002', 2),
(13, 1, 'KMZ-003', 1200000),
(14, 3, 'KMZ-003', 1),
(15, 4, 'KMZ-003', 2),
(16, 5, 'KMZ-003', 2),
(17, 6, 'KMZ-003', 4),
(18, 7, 'KMZ-003', 1),
(19, 1, 'KMZ-004', 900000),
(20, 3, 'KMZ-004', 1),
(21, 4, 'KMZ-004', 2),
(22, 5, 'KMZ-004', 1),
(23, 6, 'KMZ-004', 4),
(24, 7, 'KMZ-004', 2),
(25, 1, 'KMZ-005', 400000),
(26, 3, 'KMZ-005', 1),
(27, 4, 'KMZ-005', 3),
(28, 5, 'KMZ-005', 1),
(29, 6, 'KMZ-005', 2),
(30, 7, 'KMZ-005', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `id` int(11) NOT NULL,
  `nama_Kriteria` varchar(100) NOT NULL,
  `status_Nilai` int(11) NOT NULL,
  `sifat_Kriteria` int(11) NOT NULL,
  `bobot` int(11) NOT NULL,
  `perbaikan_Bobot` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`id`, `nama_Kriteria`, `status_Nilai`, `sifat_Kriteria`, `bobot`, `perbaikan_Bobot`) VALUES
(1, 'Pendapatan PerBulan', -1, 0, 4, -0.19047619),
(3, 'Jumlah Tanggungan', 1, 0, 5, 0.238095238),
(4, 'Kepemilikan Rumah', -1, 1, 3, -0.142857142),
(5, 'Kepemilikan BerMotor', -1, 1, 3, -0.142857142),
(6, 'Ada tidaknya penanggung jawab', 1, 1, 3, 0.142857142),
(7, 'Kelengkapan Berkas', 1, 1, 3, 0.142857142);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`kode_Mustahik`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_Pengguna`);

--
-- Indeks untuk tabel `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD PRIMARY KEY (`id_sub`),
  ADD KEY `id_Kritera` (`id_Kritera`);

--
-- Indeks untuk tabel `tbl_evaluasi`
--
ALTER TABLE `tbl_evaluasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_Mustahik` (`kode_Mustahik`),
  ADD KEY `id_Kriteria` (`id_Kriteria`);

--
-- Indeks untuk tabel `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=316;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_Pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_evaluasi`
--
ALTER TABLE `tbl_evaluasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD CONSTRAINT `sub_kriteria_ibfk_1` FOREIGN KEY (`id_Kritera`) REFERENCES `tbl_kriteria` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_evaluasi`
--
ALTER TABLE `tbl_evaluasi`
  ADD CONSTRAINT `tbl_evaluasi_ibfk_1` FOREIGN KEY (`id_Kriteria`) REFERENCES `tbl_kriteria` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_evaluasi_ibfk_2` FOREIGN KEY (`kode_Mustahik`) REFERENCES `alternatif` (`kode_Mustahik`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
