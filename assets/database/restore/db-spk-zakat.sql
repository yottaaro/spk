#
# TABLE STRUCTURE FOR: alternatif
#

DROP TABLE IF EXISTS `alternatif`;

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
  `tlp` varchar(25) NOT NULL,
  PRIMARY KEY (`kode_Mustahik`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `alternatif` (`kode_Mustahik`, `nama`, `tempat_Lahir`, `tanggal_Lahir`, `alamat`, `jenis_kelamin`, `no_ktp`, `pekerjaan`, `jabatan_pekerjaan`, `tlp`) VALUES ('KMZ-001', 'Budi', 'Tasikmalaya', '1998-10-12', 'Mitrabatik Tasikmalaya', 'Laki-Laki', '1222211413212', 'Alfamart', 'Kasir', 'Mitrabatik Tasikmalaya');
INSERT INTO `alternatif` (`kode_Mustahik`, `nama`, `tempat_Lahir`, `tanggal_Lahir`, `alamat`, `jenis_kelamin`, `no_ktp`, `pekerjaan`, `jabatan_pekerjaan`, `tlp`) VALUES ('KMZ-002', 'Tafsir', 'Tasikmalaya', '1996-11-12', 'Indihiang', 'Laki-Laki', '12312311142221', 'Coffe', 'Barista', '089761223098');
INSERT INTO `alternatif` (`kode_Mustahik`, `nama`, `tempat_Lahir`, `tanggal_Lahir`, `alamat`, `jenis_kelamin`, `no_ktp`, `pekerjaan`, `jabatan_pekerjaan`, `tlp`) VALUES ('KMZ-003', 'Lasmini', 'Tasikmalaya', '1982-12-12', 'Panyingkiran', 'Perempuan', '123111112349081', 'Yogya', 'Kasir', '089761223098');
INSERT INTO `alternatif` (`kode_Mustahik`, `nama`, `tempat_Lahir`, `tanggal_Lahir`, `alamat`, `jenis_kelamin`, `no_ktp`, `pekerjaan`, `jabatan_pekerjaan`, `tlp`) VALUES ('KMZ-004', 'Muriya', 'Tasikmalaya', '1997-01-14', 'Mangkubumi', 'Perempuan', '345111122211122', 'Pelacuraan', 'Big Tit', '08976121112221');
INSERT INTO `alternatif` (`kode_Mustahik`, `nama`, `tempat_Lahir`, `tanggal_Lahir`, `alamat`, `jenis_kelamin`, `no_ktp`, `pekerjaan`, `jabatan_pekerjaan`, `tlp`) VALUES ('KMZ-005', 'Siti', 'Tasikmalaya', '1998-10-12', 'Mitrabatik Tasikmalaya', 'Perempuan', '2000001922', 'CoofeShop', 'Kasir', '081211456788');


#
# TABLE STRUCTURE FOR: tbl_kriteria
#

DROP TABLE IF EXISTS `tbl_kriteria`;

CREATE TABLE `tbl_kriteria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_Kriteria` varchar(100) NOT NULL,
  `status_Nilai` int(11) NOT NULL,
  `sifat_Kriteria` int(11) NOT NULL,
  `bobot` int(11) NOT NULL,
  `perbaikan_Bobot` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_kriteria` (`id`, `nama_Kriteria`, `status_Nilai`, `sifat_Kriteria`, `bobot`, `perbaikan_Bobot`) VALUES (1, 'Pendapatan PerBulan', -1, 0, 4, '-0.19047619');
INSERT INTO `tbl_kriteria` (`id`, `nama_Kriteria`, `status_Nilai`, `sifat_Kriteria`, `bobot`, `perbaikan_Bobot`) VALUES (3, 'Jumlah Tanggungan', 1, 0, 5, '0.238095238');
INSERT INTO `tbl_kriteria` (`id`, `nama_Kriteria`, `status_Nilai`, `sifat_Kriteria`, `bobot`, `perbaikan_Bobot`) VALUES (4, 'Kepemilikan Rumah', -1, 1, 3, '-0.142857142');
INSERT INTO `tbl_kriteria` (`id`, `nama_Kriteria`, `status_Nilai`, `sifat_Kriteria`, `bobot`, `perbaikan_Bobot`) VALUES (5, 'Kepemilikan BerMotor', -1, 1, 3, '-0.142857142');
INSERT INTO `tbl_kriteria` (`id`, `nama_Kriteria`, `status_Nilai`, `sifat_Kriteria`, `bobot`, `perbaikan_Bobot`) VALUES (6, 'Ada tidaknya penanggung jawab', 1, 1, 3, '0.142857142');
INSERT INTO `tbl_kriteria` (`id`, `nama_Kriteria`, `status_Nilai`, `sifat_Kriteria`, `bobot`, `perbaikan_Bobot`) VALUES (7, 'Kelengkapan Berkas', 1, 1, 3, '0.142857142');


#
# TABLE STRUCTURE FOR: sub_kriteria
#

DROP TABLE IF EXISTS `sub_kriteria`;

CREATE TABLE `sub_kriteria` (
  `id_sub` int(11) NOT NULL AUTO_INCREMENT,
  `nama_Pilihan` varchar(50) NOT NULL,
  `nilai_Pilihan` int(11) NOT NULL,
  `id_Kritera` int(11) NOT NULL,
  PRIMARY KEY (`id_sub`),
  KEY `id_Kritera` (`id_Kritera`),
  CONSTRAINT `sub_kriteria_ibfk_1` FOREIGN KEY (`id_Kritera`) REFERENCES `tbl_kriteria` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

INSERT INTO `sub_kriteria` (`id_sub`, `nama_Pilihan`, `nilai_Pilihan`, `id_Kritera`) VALUES (1, 'Milik Sendiri', 3, 4);
INSERT INTO `sub_kriteria` (`id_sub`, `nama_Pilihan`, `nilai_Pilihan`, `id_Kritera`) VALUES (2, 'Tidak Punya', 1, 4);
INSERT INTO `sub_kriteria` (`id_sub`, `nama_Pilihan`, `nilai_Pilihan`, `id_Kritera`) VALUES (4, 'Mengontrak', 2, 4);
INSERT INTO `sub_kriteria` (`id_sub`, `nama_Pilihan`, `nilai_Pilihan`, `id_Kritera`) VALUES (5, 'Punya', 3, 5);
INSERT INTO `sub_kriteria` (`id_sub`, `nama_Pilihan`, `nilai_Pilihan`, `id_Kritera`) VALUES (6, 'Mencicil', 2, 5);
INSERT INTO `sub_kriteria` (`id_sub`, `nama_Pilihan`, `nilai_Pilihan`, `id_Kritera`) VALUES (7, 'Tidak Punya', 1, 5);
INSERT INTO `sub_kriteria` (`id_sub`, `nama_Pilihan`, `nilai_Pilihan`, `id_Kritera`) VALUES (8, 'Suami Atau Istri', 1, 6);
INSERT INTO `sub_kriteria` (`id_sub`, `nama_Pilihan`, `nilai_Pilihan`, `id_Kritera`) VALUES (9, 'Anak atau Menantu', 2, 6);
INSERT INTO `sub_kriteria` (`id_sub`, `nama_Pilihan`, `nilai_Pilihan`, `id_Kritera`) VALUES (10, 'Orang Tua', 3, 6);
INSERT INTO `sub_kriteria` (`id_sub`, `nama_Pilihan`, `nilai_Pilihan`, `id_Kritera`) VALUES (11, 'Tidak Ada', 4, 6);
INSERT INTO `sub_kriteria` (`id_sub`, `nama_Pilihan`, `nilai_Pilihan`, `id_Kritera`) VALUES (12, 'Lengkap', 2, 7);
INSERT INTO `sub_kriteria` (`id_sub`, `nama_Pilihan`, `nilai_Pilihan`, `id_Kritera`) VALUES (13, 'Tidak Lengkap', 1, 7);


#
# TABLE STRUCTURE FOR: tbl_evaluasi
#

DROP TABLE IF EXISTS `tbl_evaluasi`;

CREATE TABLE `tbl_evaluasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_Kriteria` int(11) NOT NULL,
  `kode_Mustahik` varchar(25) NOT NULL,
  `nilai` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kode_Mustahik` (`kode_Mustahik`),
  KEY `id_Kriteria` (`id_Kriteria`),
  CONSTRAINT `tbl_evaluasi_ibfk_1` FOREIGN KEY (`id_Kriteria`) REFERENCES `tbl_kriteria` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `tbl_evaluasi_ibfk_2` FOREIGN KEY (`kode_Mustahik`) REFERENCES `alternatif` (`kode_Mustahik`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (1, 1, 'KMZ-001', 1000000);
INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (2, 3, 'KMZ-001', 3);
INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (3, 4, 'KMZ-001', 2);
INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (4, 5, 'KMZ-001', 2);
INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (5, 6, 'KMZ-001', 4);
INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (6, 7, 'KMZ-001', 2);
INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (7, 1, 'KMZ-002', 1500000);
INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (8, 3, 'KMZ-002', 1);
INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (9, 4, 'KMZ-002', 3);
INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (10, 5, 'KMZ-002', 1);
INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (11, 6, 'KMZ-002', 4);
INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (12, 7, 'KMZ-002', 2);
INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (13, 1, 'KMZ-003', 1200000);
INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (14, 3, 'KMZ-003', 1);
INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (15, 4, 'KMZ-003', 2);
INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (16, 5, 'KMZ-003', 2);
INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (17, 6, 'KMZ-003', 4);
INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (18, 7, 'KMZ-003', 1);
INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (19, 1, 'KMZ-004', 900000);
INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (20, 3, 'KMZ-004', 1);
INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (21, 4, 'KMZ-004', 2);
INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (22, 5, 'KMZ-004', 1);
INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (23, 6, 'KMZ-004', 4);
INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (24, 7, 'KMZ-004', 2);
INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (25, 1, 'KMZ-005', 400000);
INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (26, 3, 'KMZ-005', 1);
INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (27, 4, 'KMZ-005', 3);
INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (28, 5, 'KMZ-005', 1);
INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (29, 6, 'KMZ-005', 2);
INSERT INTO `tbl_evaluasi` (`id`, `id_Kriteria`, `kode_Mustahik`, `nilai`) VALUES (30, 7, 'KMZ-005', 1);


#
# TABLE STRUCTURE FOR: nilai
#

DROP TABLE IF EXISTS `nilai`;

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_mustahik` varchar(25) NOT NULL,
  `Nilai_S` double NOT NULL,
  `nilai_V` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=236 DEFAULT CHARSET=utf8mb4;

INSERT INTO `nilai` (`id`, `id_mustahik`, `Nilai_S`, `nilai_V`) VALUES (231, 'KMZ-001', '0.10321609957735', '0.24590092414219');
INSERT INTO `nilai` (`id`, `id_mustahik`, `Nilai_S`, `nilai_V`) VALUES (232, 'KMZ-002', '0.076639796615996', '0.18258582615612');
INSERT INTO `nilai` (`id`, `id_mustahik`, `Nilai_S`, `nilai_V`) VALUES (233, 'KMZ-003', '0.069512149448628', '0.16560499629923');
INSERT INTO `nilai` (`id`, `id_mustahik`, `Nilai_S`, `nilai_V`) VALUES (234, 'KMZ-004', '0.089509090056055', '0.2132454922637');
INSERT INTO `nilai` (`id`, `id_mustahik`, `Nilai_S`, `nilai_V`) VALUES (235, 'KMZ-005', '0.08086955674492', '0.19266276113876');


#
# TABLE STRUCTURE FOR: pengguna
#

DROP TABLE IF EXISTS `pengguna`;

CREATE TABLE `pengguna` (
  `id_Pengguna` int(11) NOT NULL AUTO_INCREMENT,
  `nama_Pengguna` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hakakses` varchar(25) NOT NULL,
  PRIMARY KEY (`id_Pengguna`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `pengguna` (`id_Pengguna`, `nama_Pengguna`, `username`, `password`, `hakakses`) VALUES (1, 'Dian', '/', '6666cd76f96956469e7be39d750cc7d9', 'Admin');


