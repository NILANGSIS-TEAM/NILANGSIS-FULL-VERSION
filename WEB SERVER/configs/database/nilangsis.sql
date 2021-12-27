-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 25 Des 2021 pada 16.56
-- Versi server: 10.3.32-MariaDB-cll-lve
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1694897_b_bws_3_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `histori_pelanggaran`
--

CREATE TABLE `histori_pelanggaran` (
  `KodeHIS` varchar(7) NOT NULL,
  `NIP` varchar(18) NOT NULL,
  `NIS` varchar(10) NOT NULL,
  `KodeTP` varchar(4) NOT NULL,
  `BuktiPelanggaran` varchar(255) NOT NULL,
  `TanggalKejadian` varchar(10) NOT NULL,
  `Pukul` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `histori_pelanggaran`
--

INSERT INTO `histori_pelanggaran` (`KodeHIS`, `NIP`, `NIS`, `KodeTP`, `BuktiPelanggaran`, `TanggalKejadian`, `Pukul`) VALUES
('HIS0001', '100873629387473845', '0002348237', 'TP01', '61bbfbdc41caa-merokok.jpg', '28-11-2021', '09:54'),
('HIS0002', '100278763284286424', '0009896657', 'TP03', '61bbfce25b121-berpakaian tidak rapi.jpg', '28-11-2021', '09:58'),
('HIS0003', '100238492739472836', '0002348237', 'TP02', '61bbfe90760bd-berkelahi.jpeg', '28-11-2021', '10:05'),
('HIS0004', '100238492739472836', '0002348237', 'TP07', '61bbfeac8d55f-bolos sekolah.jpg', '29-11-2021', '10:06'),
('HIS0005', '100238492739472836', '0002348237', 'TP08', '61bbfebede326-rambut panjang.jpg', '29-11-2021', '10:06'),
('HIS0006', '100239847286472423', '0002346826', 'TP04', '61bc2045964d9-rambut berwarna.jpg', '29-11-2021', '12:29'),
('HIS0007', '100239847286472423', '0009236846', 'TP07', '61bc206acdf72-bolos sekolah.jpg', '30-11-2021', '12:29'),
('HIS0008', '100239847286472423', '0006552725', 'TP03', '61bc20995f4ea-berpakaian tidak rapi.jpg', '30-11-2021', '12:30'),
('HIS0009', '100239847286472423', '0006552725', 'TP02', '61bc20ea47340-berkelahi.jpeg', '01-12-2021', '12:32'),
('HIS0010', '100239847286472423', '0003876288', 'TP06', '61bc210874949-merusak fasilitas sekolah.jpg', '01-12-2021', '12:32'),
('HIS0011', '100239847286472423', '0006552725', 'TP10', '61bc22ebd5023-narkoba.jpeg', '01-12-2021', '12:40'),
('HIS0012', '100239847286472423', '0001981761', 'TP01', '61bc230f15f26-merokok.jpg', '02-12-2021', '12:41'),
('HIS0013', '100239847286472423', '0007887262', 'TP02', '61bc23b592c92-berkelahi.jpeg', '02-12-2021', '12:44'),
('HIS0014', '100239847286472423', '0001181798', 'TP05', '61bc23c8ce5ea-bolos kelas.jpg', '03-12-2021', '12:44'),
('HIS0015', '100239847286472423', '0001971719', 'TP05', '61bc23ddc4971-bolos kelas.jpg', '03-12-2021', '12:44'),
('HIS0016', '100092349823794926', '0002397428', 'TP09', '61bc24771ec00-terlambat datang sekolah.jpg', '04-12-2021', '12:47'),
('HIS0017', '100092349823794926', '0001273681', 'TP09', '61bc249888905-terlambat datang sekolah.jpg', '04-12-2021', '12:47'),
('HIS0018', '100230477267652234', '0002765276', 'TP02', '61bc25dca73ae-berkelahi.jpeg', '05-12-2021', '12:52'),
('HIS0019', '100230477267652234', '0002762826', 'TP06', '61bc2608b77f5-merusak fasilitas sekolah.jpg', '05-12-2021', '12:53'),
('HIS0020', '100230477267652234', '0009861961', 'TP03', '61bc2660854fa-berpakaian tidak rapi.jpg', '06-12-2021', '12:55'),
('HIS0021', '100230477267652234', '0001917675', 'TP02', '61bc2672f0aed-berkelahi.jpeg', '06-12-2021', '12:55'),
('HIS0022', '100230477267652234', '0002876287', 'TP02', '61bc26a3f0329-berkelahi.jpeg', '07-12-2021', '12:56'),
('HIS0023', '100230477267652234', '0009278268', 'TP04', '61bc26be8b011-rambut berwarna.jpg', '07-12-2021', '12:57'),
('HIS0024', '100230479286482684', '0002328787', 'TP02', '61bc275e1f5fa-berkelahi.jpeg', '08-12-2021', '12:59'),
('HIS0025', '100230479286482684', '0009229887', 'TP05', '61bc277784e59-bolos kelas.jpg', '08-12-2021', '13:00'),
('HIS0026', '100230479286482684', '0001918787', 'TP06', '61bc27870eddc-merusak fasilitas sekolah.jpg', '09-12-2021', '13:00'),
('HIS0027', '100230479286482684', '0002384823', 'TP03', '61bc2793e8218-berpakaian tidak rapi.jpg', '09-12-2021', '13:00'),
('HIS0028', '100230479286482684', '0002394682', 'TP01', '61bc27a668e13-merokok.jpg', '10-12-2021', '13:01'),
('HIS0029', '100234728673423223', '0002364827', 'TP08', '61bc2865c930e-rambut panjang.jpg', '10-12-2021', '13:04'),
('HIS0030', '100234728673423223', '0002384823', 'TP05', '61bc287a85f18-bolos kelas.jpg', '11-12-2021', '13:04'),
('HIS0031', '100234728673423223', '0002929729', 'TP02', '61bc2897ef9e9-berkelahi.jpeg', '11-12-2021', '13:05'),
('HIS0032', '100234728673423223', '0009818761', 'TP03', '61bc28a4b5305-berpakaian tidak rapi.jpg', '11-12-2021', '13:05'),
('HIS0033', '100234728673423223', '0002729872', 'TP04', '61bc28b60157b-rambut berwarna.jpg', '12-12-2021', '13:05'),
('HIS0034', '100234728673423223', '0001199818', 'TP01', '61bc28dc3eef4-merokok.jpg', '12-12-2021', '13:06'),
('HIS0035', '100234728673423223', '0002628762', 'TP06', '61bc28eb738ba-merusak fasilitas sekolah.jpg', '12-12-2021', '13:06'),
('HIS0036', '100234728673423223', '0009116576', 'TP09', '61bc290af1033-terlambat datang sekolah.jpg', '14-12-2021', '13:06'),
('HIS0037', '100234728673423223', '0002991871', 'TP01', '61bc292ba9671-merokok.jpg', '14-12-2021', '13:07'),
('HIS0038', '100239468264826847', '0001729364', 'TP01', '61bc2bbb5a910-merokok.jpg', '14-12-2021', '13:18'),
('HIS0039', '100239468264826847', '0001729364', 'TP05', '61bc2bca65383-bolos kelas.jpg', '14-12-2021', '13:18'),
('HIS0040', '100239468264826847', '0001198287', 'TP01', '61bc2be973a30-merokok.jpg', '14-12-2021', '13:19'),
('HIS0041', '100239468264826847', '0001198287', 'TP04', '61bc2bf725002-rambut berwarna.jpg', '15-12-2021', '13:19'),
('HIS0043', '100239497236423423', '0009837492', 'TP07', '61bc2c5c4862f-bolos sekolah.jpg', '15-12-2021', '13:21'),
('HIS0044', '100239497236423423', '0009837492', 'TP05', '61bc2c688a127-bolos kelas.jpg', '16-12-2021', '13:21'),
('HIS0045', '100239497236423423', '0002652765', 'TP03', '61bc2c7416729-berpakaian tidak rapi.jpg', '16-12-2021', '13:21'),
('HIS0046', '100239497236423423', '0006286287', 'TP01', '61bc2c80a95a4-merokok.jpg', '16-12-2021', '13:21'),
('HIS0047', '100239497236423423', '0006286287', 'TP07', '61bc2c8ee0497-bolos sekolah.jpg', '17-12-2021', '13:21'),
('HIS0048', '100239497236423423', '0002276887', 'TP03', '61bc2ca5b26be-berpakaian tidak rapi.jpg', '17-12-2021', '13:22'),
('HIS0049', '100239497236423423', '0002276887', 'TP02', '61bc2cb33e485-berkelahi.jpeg', '17-12-2021', '13:22'),
('HIS0050', '100239497236423423', '0001181672', 'TP04', '61bc2cbf29138-rambut berwarna.jpg', '18-12-2021', '13:22'),
('HIS0051', '100239497236423423', '0002286287', 'TP01', '61bc2ccdcae01-merokok.jpg', '18-12-2021', '13:23'),
('HIS0052', '100239497236423423', '0001919686', 'TP04', '61bc2cde1e0e8-rambut berwarna.jpg', '18-12-2021', '13:23'),
('HIS0053', '100239497236423423', '0001918768', 'TP09', '61bc2cee419fe-terlambat datang sekolah.jpg', '20-12-2021', '13:23'),
('HIS0054', '100239847827648726', '0009896657', 'TP03', '61bc2d5cf0b34-berpakaian tidak rapi.jpg', '20-12-2021', '13:25'),
('HIS0055', '100239847827648726', '0002397428', 'TP02', '61bc2d6a22195-berkelahi.jpeg', '20-12-2021', '13:25'),
('HIS0056', '100239847827648726', '0002364827', 'TP06', '61bc2dddde9ec-merusak fasilitas sekolah.jpg', '21-12-2021', '13:27'),
('HIS0057', '100239847827648726', '0001729364', 'TP07', '61bc2df09a63a-bolos sekolah.jpg', '21-12-2021', '13:27'),
('HIS0058', '100239847827648726', '0001293681', 'TP02', '61bc2e0380eb1-berkelahi.jpeg', '21-12-2021', '13:28'),
('HIS0059', '100239847827648726', '0002765276', 'TP02', '61bc2e1155de6-berkelahi.jpeg', '22-12-2021', '13:28'),
('HIS0060', '100239847827648726', '0001916768', 'TP05', '61bc2e255f8ca-bolos kelas.jpg', '22-12-2021', '13:28'),
('HIS0061', '100239847827648726', '0007876873', 'TP03', '61bc2e5f7f0f9-berpakaian tidak rapi.jpg', '22-12-2021', '13:28'),
('HIS0062', '100239847827648726', '0007887262', 'TP06', '61bc2e70d9305-merusak fasilitas sekolah.jpg', '22-12-2021', '13:30'),
('HIS0063', '100239847827648726', '0002328787', 'TP02', '61bc2e7c89e9f-berkelahi.jpeg', '23-12-2021', '13:30'),
('HIS0064', '100239847827648726', '0001199818', 'TP04', '61bc2e8a67505-rambut berwarna.jpg', '23-12-2021', '13:30'),
('HIS0065', '100239847827648726', '0001919686', 'TP07', '61bc2e9b0378b-bolos sekolah.jpg', '23-12-2021', '13:30'),
('HIS0066', '100239847827648726', '0008887657', 'TP02', '61bc2eaf2ec7a-berkelahi.jpeg', '23-12-2021', '13:31'),
('HIS0067', '100239848264826846', '0001971719', 'TP01', '61bc2ee6c9499-merokok.jpg', '24-12-2021', '13:31'),
('HIS0068', '100239848264826846', '0001971719', 'TP04', '61bc2ef8679e2-rambut berwarna.jpg', '24-12-2021', '13:32'),
('HIS0070', '100239848264826846', '0001971719', 'TP09', '61bc2f12e5e90-terlambat datang sekolah.jpg', '24-12-2021', '13:32'),
('HIS0071', '100239848264826846', '0001971719', 'TP08', '61bc2f27bca72-rambut panjang.jpg', '25-12-2021', '13:32'),
('HIS0072', '100239848264826846', '0001181798', 'TP03', '61bc2f3a67387-berpakaian tidak rapi.jpg', '25-12-2021', '13:33'),
('HIS0073', '100239847827648726', '0002928726', 'TP02', '61bc30023fca6-berkelahi.jpeg', '25-12-2021', '13:36'),
('HIS0074', '100230477267652234', '0002397428', 'TP02', '61bc302a735da-berkelahi.jpeg', '25-12-2021', '13:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas_kelas`
--

CREATE TABLE `identitas_kelas` (
  `KodeIK` varchar(4) NOT NULL,
  `IdentitasKelas` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `identitas_kelas`
--

INSERT INTO `identitas_kelas` (`KodeIK`, `IdentitasKelas`) VALUES
('IK01', 'A'),
('IK02', 'B'),
('IK03', 'C'),
('IK04', 'D');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `KodeJBT` varchar(5) NOT NULL,
  `Jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`KodeJBT`, `Jabatan`) VALUES
('JBT01', 'Kepala Sekolah'),
('JBT02', 'Wakil Kepala Sekolah'),
('JBT03', 'Guru Mata Pelajaran'),
('JBT04', 'Bimbingan Konseling'),
('JBT05', 'Security');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level_pelanggaran`
--

CREATE TABLE `level_pelanggaran` (
  `KodeLP` varchar(4) NOT NULL,
  `LevelPelanggaran` varchar(6) NOT NULL,
  `ColorLevel` varchar(7) NOT NULL,
  `TextLevel` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level_pelanggaran`
--

INSERT INTO `level_pelanggaran` (`KodeLP`, `LevelPelanggaran`, `ColorLevel`, `TextLevel`) VALUES
('LP01', 'Ringan', '#E8F5E9', '#4CAF50'),
('LP02', 'Sedang', '#FFF8E1', '#FFC107'),
('LP03', 'Berat', '#FFEBEE', '#F44336');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level_user`
--

CREATE TABLE `level_user` (
  `KodeLU` varchar(4) NOT NULL,
  `LevelUSR` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level_user`
--

INSERT INTO `level_user` (`KodeLU`, `LevelUSR`) VALUES
('LU01', 'Administrator'),
('LU02', 'Petugas Monitoring');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `NIP` varchar(18) NOT NULL,
  `NamaGR` varchar(50) NOT NULL,
  `FotoPegawai` varchar(255) NOT NULL,
  `JenisKelamin` varchar(9) NOT NULL,
  `TempatLahir` varchar(20) NOT NULL,
  `TanggalLahir` date NOT NULL,
  `KodeJBT` varchar(5) NOT NULL,
  `Status` varchar(14) NOT NULL,
  `NomorHP` varchar(13) NOT NULL,
  `Alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`NIP`, `NamaGR`, `FotoPegawai`, `JenisKelamin`, `TempatLahir`, `TanggalLahir`, `KodeJBT`, `Status`, `NomorHP`, `Alamat`) VALUES
('100092349823794926', 'Jacob Antung Kang, S.Kom.', '61b794aa73cd0-avatar-23.jpg', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100198472876482684', 'Suho Zainur Abidin Noor, S.Si.', '61b797a997bde-avatar-31.jpg', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100230477267652234', 'Rudyanto Suliawan, S.Hum.', '61bb32c5842f8-avatar-36.jpg', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100230479286482684', 'Jarina Prestiani Riyani, S.E.', '61b797761b63a-avatar-28.jpg', 'Perempuan', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100230492394729374', 'Mickel Saputro Darmawan, S.Kom.', '61bb342784357-avatar-47.jpg', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100234223423423423', 'Sammy Hamzah, S.Si.', '61bb336c31260-avatar-43.jpg', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100234728673423223', 'Candra Hermawan, S.Kom.', '61bb3450cf01d-avatar-50.jpg', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100234792834926487', 'Andre Zanuari, S.Pd.', '61bb349a5ab41-avatar-54.jpg', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '082223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota'),
('100234827648268462', 'Mimin Aminah, S.Kes.', '61bb34829c3d1-avatar-52.jpg', 'Perempuan', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100234928648284726', 'James Steven Kallman, S.Ag.', '61b797955ee05-avatar-30.jpg', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100236512732131213', 'Aam Dewi Hamidah, S.Pd.', '61b7935d66c8e-avatar-9.png', 'Perempuan', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100237492736487268', 'Zerline Conception Pliac, S.Kom.', '61bb32e94c4cd-avatar-38.jpg', 'Perempuan', 'Bondowoso', '1988-12-12', 'JBT04', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100238492739472836', 'Ungkoro Darmosusilo, S.Sn.', '61bb32870f55b-avatar-33.jpg', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT05', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100239429364872648', 'Jacqueline Rumanila, S.Sos.', '61b79760a3133-avatar-27.jpg', 'Perempuan', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100239468263487234', 'Batavia Prosperindo Sekuritas, S.Si.', '61b7939826328-avatar-11.jpg', 'Perempuan', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100239468264826847', 'Michelle Tania, S.Si.', '61bb341932de5-avatar-46.jpg', 'Perempuan', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100239472964872684', 'James Rachman Adjimin, S.Pd.', '61b79785cd50c-avatar-29.jpg', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100239478236482683', 'Upekkha Theresia Murdaya, S.Sos.', '61bb32f85822c-avatar-39.jpg', 'Perempuan', 'Bondowoso', '1988-12-12', 'JBT04', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100239478273648627', 'Rusdi Sunarjo, S.Sos.', '61bb330730d88-avatar-40.jpg', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100239479286486284', 'Rita Nigarina, S.Sn.', '61b7974f9e27b-avatar-26.jpg', 'Perempuan', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100239497236423423', 'Lilik Estarina, S.Sn.', '61b7941a46c42-avatar-16.png', 'Perempuan', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100239648263482684', 'Rayhan Dermawan Pujayanto, S.Pd.', '61bb34dbd9257-avatar-57.jpg', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100239749234987283', 'Mieke Santosa, S.Hum.', '61bb343519697-avatar-48.jpg', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100239842648242342', 'Cahyani Nilangrum, S.Si.', '61b79495e972e-avatar-22.jpg', 'Perempuan', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100239847236482638', 'Dinar Prawitasari, S.Hum.', '61b793a7ceda9-avatar-12.png', 'Perempuan', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100239847276482346', 'Abdul Rachman, S.Kom.', '61b79218ebf66-avatar-2.png', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT02', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100239847286472423', 'Budiono Tanbun Boen, S.Pd.', '61b7946f2f8fd-avatar-20.jpg', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT05', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100239847297364876', 'Rusdy Budisusetyo, S.E.', '61bb33175e690-avatar-41.jpg', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100239847732648726', 'Untoro Angkawijaya, S.Kes.', '61bb32a08a11b-avatar-34.jpg', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT05', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100239847827648268', 'Umar Justin Timberlake, S.Hum.', '61b797c188c2d-avatar-32.jpg', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100239847827648726', 'Monica Yoanita Octavia, S.Ag.', '61bb33f767fc8-avatar-45.jpg', 'Perempuan', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100239847923649762', 'Mintardjo Halim, S.E.', '61bb3341a667d-avatar-42.jpg', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT04', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100239848264826846', 'Daniar Sutrisno, S.Pd.', '61bb348e6ea56-avatar-53.jpg', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100239848264872684', 'Edwin Danang Tresna, S.Kom', '61bb34a5bbe63-avatar-55.jpg', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100239848274862423', 'Dendy Tresno Notowijoyo, S.Pd.', '61bb355f875f6-avatar-60.jpg', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100239848762487628', 'Dias Nahta Wijaya, S.Kom.', '61bb34734ab35-avatar-51.jpg', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100239864826348762', 'Drian Dani Sutrisno, S.Kom.', '61bb38ee0c6fd-avatar-61.jpg', 'Laki-laki', 'Bondowoso', '1976-12-17', 'JBT03', 'Kawin', '089367635726', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100239874873264527', 'Ayu Nisa Pujianti, S.Kom.', '61bb35492eb3d-avatar-59.jpg', 'Perempuan', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100239874923648726', 'Beata Ida Hartini, S.Kes.', '61b794344f7af-avatar-17.png', 'Perempuan', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100239874982374923', 'Milany Terianto Luwena, S.Sn.', '61bb344462db5-avatar-49.jpg', 'Perempuan', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100242342846826734', 'Lisa Kurnia Putri, S.Kom.', '61b793dd51774-avatar-15.png', 'Perempuan', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100242345452423423', 'Auristela Aqilla, S.Ag.', '61b793cb0b004-avatar-14.png', 'Perempuan', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100278763284286424', 'Putri Cahyani, S.Kom.', '61b79379e55f4-avatar-10.png', 'Perempuan', 'Bondowoso', '1988-12-12', 'JBT04', 'Belum Menikah', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100293874926387468', 'Rudyanto Gunawan, S.Kom.', '61bb32b57dd40-avatar-35.jpg', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT04', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100294682648264826', 'Dinar Rahmadanti, S.Pd.', '61bb353d0cf55-avatar-58.jpg', 'Perempuan', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100298428364826342', 'Runi Adianti, S.Sn.', '61b793ba16388-avatar-13.png', 'Perempuan', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100298428648672342', 'Nabila Ayu Wardani, S.Hum.', '61b794bdbd302-avatar-24.jpg', 'Perempuan', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100298468264826726', 'Sally Texania Marita Joesoef, S.E.', '61bb34b3b5a77-avatar-56.jpg', 'Perempuan', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100298472642423423', 'Ika Restanto Wardani, S.E.', '61b7945aafcee-avatar-19.jpg', 'Perempuan', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100298472648284624', 'Jacobus Busono Prawiroredjo, S.Kes.', '61b7973b12cf8-avatar-25.jpg', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100298479236482684', 'Monalita Kardono Soegiarto, S.Pd.', '61bb33e06bc6d-avatar-44.jpg', 'Perempuan', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100298826482684726', 'Abdullah Alatas, S.Sos.', '61b7929872fcc-avatar-6.png', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100397468234876234', 'Rusdi Kirana, S.Kes.', '61bb32d9a3b02-avatar-37.jpg', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100723468672348726', 'Abdul Hadi Ismail, S.Si.', '61b78f73a1863-avatar-1.png', 'Laki-laki', 'Bondowoso', '1968-09-24', 'JBT01', 'Kawin', '087626357165', 'Jl. Remartadinata, Kebon Raya, Kec. Bondowoso, Bondowoso Kota Raya'),
('100782638465187612', 'Abdul Salam Tahir, S.Kes.', '61b792741f74d-avatar-5.png', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100823487628348267', 'Ayu Kartini Santosa, S.Ag.', '61b79483f13bb-avatar-21.jpg', 'Perempuan', 'Bondowoso', '1988-12-12', 'JBT05', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100832642365472323', 'Abu Djaja Bunjamin, S.E.', '61b792b021efc-avatar-7.png', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100873629387473845', 'Zanuar Prestana, S.Kom.', '61bb343509281-avatar-23.jpg', 'Laki-laki', 'Bondowoso', '2000-10-27', 'JBT04', 'Belum Menikah', '082337887364', 'Jl. Pringgondani Jayapura, Sukowono Raya, Kec. Pujer Joss, Kabupaten Bondowoso'),
('100923848762384628', 'Abdul Rifai Natanegara, S.Sn.', '61b7925688325-avatar-4.png', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100982396482462534', 'Abdul Rahman, S.Hum.', '61b79234e3db0-avatar-3.png', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100982673648256232', 'Abu Hermanto Budiono, S.Pd.', '61b793189b0c4-avatar-8.png', 'Laki-laki', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya'),
('100982749294729342', 'Linda Kurnia, S.Sos.', '61b794451a87b-avatar-18.jpg', 'Perempuan', 'Bondowoso', '1988-12-12', 'JBT03', 'Kawin', '089223983764', 'Jl. Remartadinata Kencana, Gg. Mayoran No.50, Kec.Bondowoso, Bondowoso Kota Raya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `NIS` varchar(10) NOT NULL,
  `NamaSW` varchar(40) NOT NULL,
  `FotoSiswa` varchar(255) NOT NULL,
  `JenisKelamin` varchar(9) NOT NULL,
  `TempatLahir` varchar(20) NOT NULL,
  `TanggalLahir` date NOT NULL,
  `Kelas` varchar(4) NOT NULL,
  `KodeIK` varchar(4) NOT NULL,
  `NomorHPSiswa` varchar(13) NOT NULL,
  `NomorHPWali` varchar(13) NOT NULL,
  `Alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`NIS`, `NamaSW`, `FotoSiswa`, `JenisKelamin`, `TempatLahir`, `TanggalLahir`, `Kelas`, `KodeIK`, `NomorHPSiswa`, `NomorHPWali`, `Alamat`) VALUES
('0001118768', 'Wiwik Hariyatik', '61bb6ae437c93-avatar-1.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'IX', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001177578', 'Agung Bakti Saputra', '61bb6a16de417-avatar-117.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001181672', 'Evan Hara Malik ', '61bb6aae62251-avatar-127.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001181798', 'Muhammad Mashudi', '61bb665473f07-avatar-94.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001187686', 'Mohammad Ikhlas Sofyan ', '61bb6a87cfd00-avatar-124.png', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001198287', 'Muhammad Norisman Firmansyah', '61bb597a2b684-avatar-43.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VII', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001198719', 'Abdul Mukid', '61bb6615728a9-avatar-89.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001198798', 'Farel Darka Listu', '61bb6aba2238c-avatar-128.png', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001199818', 'Khairurrohman Jayadiningrat', '61bb69f4ccc65-avatar-114.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001239183', 'Sofyan Saori', '61bb572903d4a-avatar-23.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VII', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001273681', 'Azizatun Hasanah', '61bb5480cc38a-avatar-13.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VII', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001284742', 'Nanda Ayu Farina', '61bb58427ce0a-avatar-29.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VII', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001287638', 'Mohammad Zainullah', '61bb5954c1821-avatar-40.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VII', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001293681', 'Ellyana Rizkyawati', '61bb5e46a3be9-avatar-50.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VIII', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001726384', 'Ella Ayu Damayanti', '61bb593d40528-avatar-38.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VII', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001729364', 'Billy Damas', '61bb596f42416-avatar-42.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VII', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001816765', 'Adinda Ayu Triasasti', '61bb63158e789-avatar-71.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VIII', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001876326', 'Sekar Mauliyah', '61bb5e3c28836-avatar-49.jpeg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VIII', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001916768', 'Maulidia Rani Prawita', '61bb637a60e40-avatar-77.png', 'Perempuan', 'Bondowoso', '2006-08-08', 'VIII', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001916876', 'Miftahul Arif', '61bb68c06c1b5-avatar-102.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001917675', 'Dinda Yulia Nensi', '61bb68d84ead8-avatar-104.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'IX', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001918221', 'Sudjoko Diningrat', '61bb690561ff0-avatar-107.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001918768', 'Rafli Putra Efendi', '61bb6a74e7e35-avatar-122.png', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001918787', 'Muhammad Rohman Fadila', '61bb68cc2b266-avatar-103.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001919179', 'Endang Lestari', '61bb6a2f2bc0c-avatar-119.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'IX', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001919686', 'Gibran Nur Qomar', '61bb6aed778a5-avatar-2.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001919887', 'Mohammad Iqbal Agung Nugroho', '61bb664730022-avatar-93.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001971719', 'Nico Demus Darmawan', '61bb66680090a-avatar-95.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001981698', 'Cahyono Mulyojoyo', '61bb667475af9-avatar-96.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001981761', 'Luqman Hakim', '61bb5e2aa84b7-avatar-48.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VIII', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001981798', 'Nadia Putri Lestari', '61bb669c01f9b-avatar-99.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'IX', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001981961', 'Tri Kustiyarini', '61bb6b0640cfc-avatar-4.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'IX', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001987175', 'Zainur Rohim', '61bb64bc29f00-avatar-83.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VIII', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001987199', 'Sitti Rofiatul Holifah', '61bb68e57356f-avatar-105.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'IX', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0001988257', 'Sofia Adawiyah', '61bb596149351-avatar-41.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VII', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002272622', 'Faruk Maulana', '61bb663a316c6-avatar-92.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002276887', 'Adnan Bastian Hazard ', '61bb6a9c6ea6a-avatar-126.png', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002277575', 'Wiwik Mukartiwi', '61bb6a230a354-avatar-118.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'IX', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002286287', 'Mohammad Faisal Rafli', '61bb6a7e1b0fe-avatar-123.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002322276', 'Muhammad Eko Wahyudi', '61bb68b227e49-avatar-101.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002328282', 'Adi Sasmoko', '61bb6a3a68a81-avatar-120.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002328787', 'Hanifah Ayunari', '61bb68f1bb7f4-avatar-106.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'IX', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002346826', 'Azril Nur Rahman', '61bb53ab39438-avatar-9.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VII', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002347628', 'Cinta Laura Nadia', '61bb577832fdb-avatar-30.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VII', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002348237', 'Ahmad Wildan', '61bb539fd7379-avatar-8.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VII', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002348248', 'Danang Sutrisno Jayaningrat', '61bb53bfcc13d-avatar-11.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VII', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002364827', 'Muhammad Mahbubi', '61bb573d734c7-avatar-25.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VII', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002364872', 'Ahnaf Maulana', '61bb54b1439a3-avatar-17.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VII', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002374682', 'Mochammad Sofyan Dwi Supriyanto', '61bb5e106779f-avatar-46.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VIII', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002374923', 'Dimas Fany Azzuzi', '61bb537830123-avatar-7.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VII', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002384293', 'Hardiana Bhakti Nugrahani', '61bb6246033c3-avatar-67.png', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VIII', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002384823', 'Eggi Permana Sunarya', '61bb579062af0-avatar-32.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VII', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002384826', 'Mohammad Ramli', '61bb54a34119f-avatar-16.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VII', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002394682', 'Fahmi Dafrin Maulana', '61bb5785eb9db-avatar-31.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VII', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002394729', 'Gita Fadia Setyorini', '61bb54ba80deb-avatar-18.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VII', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002394782', 'Vita Nada Agustin', '61bb533e4c922-avatar-3.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VII', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002394872', 'Dimas Mulya Perkasa Ernanta', '61bb5753226bb-avatar-27.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VII', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002397428', 'Dewi Ayu Marina', '61bb54c606a34-avatar-19.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VII', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002397492', 'Rindi Susanti', '61bb5602067f4-avatar-20.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VII', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002398478', 'Dewi Ayu Handayani', '61bb575ca121b-avatar-28.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VII', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002398479', 'Farul Ahmad Wananda', '61bb53b50808f-avatar-10.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VII', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002398492', 'Defana Maghfirotul Ula', '61bb53228f214-avatar-1.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VII', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002628762', 'Nanang Afandi', '61bb69e7e2306-avatar-113.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002652765', 'Prakasa Bayangkara Putra', '61bb64d4a3bf3-avatar-85.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VIII', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002727257', 'Nugeraha Presto Wardana', '61bb60d98ff29-avatar-65.png', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VIII', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002729872', 'Rina Malisa Dewi', '61bb635a333e6-avatar-75.png', 'Perempuan', 'Bondowoso', '2006-08-08', 'VIII', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002762826', 'Muhammad Candra Alifisya', '61bb60cc9d697-avatar-64.png', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VIII', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002765276', 'Citria Ningsih Wulandari', '61bb600e19c10-avatar-58.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VIII', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002783681', 'Siska Nur Cahyani Imamah', '61bb5ff265a6e-avatar-56.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VIII', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002876275', 'Muhammad Duwi Niki Arisandi', '61bb5e5b2ef27-avatar-51.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VIII', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002876287', 'Cindi Puspita Ayu', '61bb60c08d100-avatar-63.jpeg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VIII', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002882682', 'Putri Nur Sinta', '61bb5e842fb5d-avatar-54.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VIII', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002892761', 'Ayu Trisna Dewi', '61bb64c8756d6-avatar-84.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VIII', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002894726', 'Hasim Ashari', '61bb560c3514b-avatar-21.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VII', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002927881', 'Cinta Laura Nada', '61bb64fd94a2b-avatar-88.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VIII', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002928726', 'Della Putri Ningsih', '61bb63473aa27-avatar-74.png', 'Perempuan', 'Bondowoso', '2006-08-08', 'VIII', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002928782', 'Frans Zanuar', '61bb694a3f83e-avatar-110.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002929729', 'Jasmine Anggraini', '61bb636624c66-avatar-76.png', 'Perempuan', 'Bondowoso', '2006-08-08', 'VIII', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002936482', 'Laura Nada Claudia Rusydi', '61bb536884b7d-avatar-6.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VII', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002962846', 'Selviatun Hasanah', '61bb573272218-avatar-24.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VII', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002983749', 'Mohammad Rizaldi', '61bb549870dac-avatar-15.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VII', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0002991871', 'Ahmad Sofyan Andreas', '61bb6a446ea45-avatar-121.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0003242876', 'Niki Muhammad Nafis', '61bb591b3459c-avatar-35.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VII', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0003294682', 'Dinar Susilo Wati', '61bb579bb3f91-avatar-33.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VII', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0003298479', 'Indri Dinari Ramadanti', '61bb561f9a8c7-avatar-22.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VII', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0003842678', 'Mohammad Bahrul Ulum', '61bb535d5c6da-avatar-5.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VII', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0003873587', 'Dewi Nagita Sari', '61bb64e16b4b9-avatar-86.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VIII', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0003876288', 'Ilham Yoga Fatahillah', '61bb5e76d1cfe-avatar-53.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VIII', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0003876328', 'Savina Zahro', '61bb5e66ba117-avatar-52.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VIII', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0004876868', 'Viola Dwi Prasetiani', '61bb632fde4b0-avatar-73.png', 'Perempuan', 'Bondowoso', '2006-08-08', 'VIII', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0004976287', 'Sinta Dewi Sagita', '61bb64ebd81cf-avatar-87.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VIII', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0005646546', 'Darmawan Wijaksono', '61bb6046c0a8c-avatar-61.jpeg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VIII', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0006286287', 'Putra Rahman Darmanto', '61bb6496f41d9-avatar-80.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VIII', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0006552725', 'Harits Thufail Ramadhan', '61bb5e9061068-avatar-55.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VIII', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0006654435', 'Nuri Hela Sari', '61bb598a27adb-avatar-44.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VII', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0007168816', 'Putri Jamine', '61bb648b97617-avatar-79.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VIII', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0007298872', 'Dira Erna Putri', '61bb60374a351-avatar-60.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VIII', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0007662653', 'Siska Nur Aini', '61bb59495bddf-avatar-39.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VII', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0007866776', 'Riska Riniawanti', '61bb6021acdc1-avatar-59.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VIII', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0007876873', 'Daniar Anggraini Rahmadanti', '61bb64a2610fa-avatar-81.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VIII', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0007887262', 'Bima Anggara Wirasatya', '61bb662d21f13-avatar-91.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0008228876', 'Mentik Ekowati', '61bb6afb4ef24-avatar-3.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'IX', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0008276876', 'Dini Andini', '61bb69be7367f-avatar-112.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'IX', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0008296287', 'Zul Arsil Mustofa', '61bb66213fa4e-avatar-90.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0008752376', 'Ibnu Batutah', '61bb5931b9c75-avatar-37.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VII', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('000876248', 'Riska Dwi Nur Aini', '61bb5746ec6ac-avatar-26.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VII', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0008887657', 'Devid Mahbubby Prasetya', '61bb605348504-avatar-62.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VIII', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0009116576', 'Tri Sugeng Andrianto', '61bb69ff2bfa3-avatar-115.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0009118768', 'Yuningsih Ayuningtias', '61bb6a0a7ed78-avatar-116.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'IX', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0009157157', 'Violy Sam Maulana', '61bb632298c2d-avatar-72.png', 'Perempuan', 'Bondowoso', '2006-08-08', 'VIII', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0009167615', 'Nelly Maulia Indarkasih', '61bb5e1ab89ed-avatar-47.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VIII', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0009178681', 'Angga Raja Putra', '61bb69b2eb137-avatar-111.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0009186188', 'Dwi Agustina', '61bb5e0506390-avatar-45.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VIII', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0009188787', 'Lukman Harun', '61bb691aa18c7-avatar-108.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0009198186', 'Anggita Wulandari', '61bb62631f0b3-avatar-69.png', 'Perempuan', 'Bondowoso', '2006-08-08', 'VIII', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0009199787', 'Martoyo Mulyadi', '61bb66816fc6a-avatar-97.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0009229887', 'Dedy Dwianto', '61bb68a64ede9-avatar-100.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0009236846', 'Zainur Roziqin', '61bb533451774-avatar-2.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VII', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0009278268', 'Raihan Dani Hibatullah', '61bb611d31cc4-avatar-66.png', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VIII', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0009287267', 'Lisa Kurnia Putri', '61bb64af44418-avatar-82.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VIII', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0009718761', 'Nicken Betrice Margareta', '61bb626f2d636-avatar-70.png', 'Perempuan', 'Bondowoso', '2006-08-08', 'VIII', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0009762763', 'Sitti Mahmudah', '61bb59278aff2-avatar-36.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VII', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0009818761', 'Dzikrillah Sukma Pamungkas', '61bb62566f988-avatar-68.png', 'Laki-laki', 'Bondowoso', '2006-08-08', 'VIII', 'IK03', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0009837492', 'Putri Melina Dewi', '61bb6481c7207-avatar-78.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VIII', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0009861961', 'Roseana Salwa Asrifa', '61bb6931cf6c6-avatar-109.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'IX', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0009873248', 'Sella Putri Sari', '61bb5476af8d5-avatar-12.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VII', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0009876856', 'Vindy Amelia Putri', '61bb6001ccd9d-avatar-57.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VIII', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0009896657', 'Amalia Siska Kurniawati', '61bb534a5a345-avatar-4.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VII', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0009898738', 'Ermeiri Andini', '61bb590f72090-avatar-34.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VII', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0009923871', 'Gita Leoni Dwi Fripta', '61bb548ca2b44-avatar-14.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'VII', 'IK02', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0009928762', 'Nurul Juliyanto', '61bb6a9097b54-avatar-125.jpg', 'Laki-laki', 'Bondowoso', '2006-08-08', 'IX', 'IK04', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali'),
('0019178687', 'Sinta Bella Rahmani', '61bb668de435b-avatar-98.jpg', 'Perempuan', 'Bondowoso', '2006-08-08', 'IX', 'IK01', '082142883982', '087009287421', 'Jl. Raya Uluwatu, Gg.Kemayoran No.58, Ungasan, Kec. Kuta Selatan, Kabupaten Badung, Bali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_pelanggaran`
--

CREATE TABLE `tipe_pelanggaran` (
  `KodeTP` varchar(4) NOT NULL,
  `TipePelanggaran` varchar(50) NOT NULL,
  `KodeLP` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tipe_pelanggaran`
--

INSERT INTO `tipe_pelanggaran` (`KodeTP`, `TipePelanggaran`, `KodeLP`) VALUES
('TP01', 'Merokok', 'LP02'),
('TP02', 'Berkelahi', 'LP02'),
('TP03', 'Pakaian Tidak Rapi', 'LP01'),
('TP04', 'Rambut Berwarna', 'LP01'),
('TP05', 'Bolos Kelas', 'LP02'),
('TP06', 'Merusak Fasilitas Sekolah', 'LP03'),
('TP07', 'Bolos Sekolah', 'LP02'),
('TP08', 'Rambut Panjang', 'LP01'),
('TP09', 'Terlambat Datang Sekolah', 'LP01'),
('TP10', 'Memakai Narkoba', 'LP03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `KodeUSR` varchar(5) NOT NULL,
  `NIP` varchar(18) NOT NULL,
  `Username` varchar(35) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `KodeLU` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`KodeUSR`, `NIP`, `Username`, `Password`, `KodeLU`) VALUES
('USR01', '100873629387473845', 'Master Server', '$2y$10$4wQ1lMcTW08Rq4gKawW5ouucu2h0Uaddi1mpM58yfS.h/K4MU.LgG', 'LU01'),
('USR02', '100238492739472836', 'PM-Ungkoro', '$2y$10$zQyhU0BILcgH3AuEpYVq1OC0uxRVMR/aj0ZM80CVZXkW.luf0bLCq', 'LU02'),
('USR03', '100239847286472423', 'PM-Budiono', '$2y$10$YD.Zcpj/2sjsvCIkb039/OYCq2orAztCAkWup0FNzR.RNv0CsvFYq', 'LU02'),
('USR04', '100278763284286424', 'ADM-Putri', '$2y$10$GIbwZFJw8CyAJbFjGANxNuGCINAusBjJdqzgpo7Y4ndvvUB8EEO9O', 'LU01'),
('USR05', '100092349823794926', 'PM-Jacob', '$2y$10$wJqh1tmJjwfHCf.HAlUZvu5wwzOebIEZbjZV2lyBlljBf.J7hPD1S', 'LU02'),
('USR06', '100230477267652234', 'PM-Rudyanto', '$2y$10$AybRboeEtzIQiPAuPaKEn.6Mi0jfaAym1q/wv5BY/WHntaq4b/c1.', 'LU02'),
('USR07', '100230479286482684', 'PM-Prestiani', '$2y$10$CvX7.9zbKuDuXmxNKoj7yOxCGzTLg6GfBqs31EEm4DlQbl8KtwDBS', 'LU02'),
('USR08', '100234728673423223', 'PM-Candra', '$2y$10$X2s4NfS7SPjYkYWCupwmPujjfmN50I71xEYPft6VkiJqyiFjTD55e', 'LU02'),
('USR09', '100239468264826847', 'PM-Michelle', '$2y$10$y1UBiz8BUNaNezbgsT5gJuV5YWLqi5zB3XpwbprWwd7tpP9b57X.S', 'LU02'),
('USR10', '100239497236423423', 'PM-Estarina', '$2y$10$OUc0y0i5YIdOU720aoW5JOHB9B3TcysR3ruSjrAp8erxeRFxrec4q', 'LU02'),
('USR11', '100239847827648726', 'PM-Monica', '$2y$10$e1rJJ2dF7e7YDqs8v4WNveWJavn4uTQH8kV8GZfGwn52nthFYHU3G', 'LU02'),
('USR12', '100239848264826846', 'PM-Daniar', '$2y$10$lKsOelslt6bSkVnvUvR1P.czEbdyJVzLOziYAET.nC0jnsHLzaJA2', 'LU02'),
('USR13', '100239848274862423', 'PM-Dendy', '$2y$10$3mTBtcBkHFHFhCG46HDgbe3GFW3UxuB8Fa4rJX7VyAqATH9nBkAUe', 'LU02'),
('USR14', '100234827648268462', 'PM-Mimin', '$2y$10$UIi4RHXBd/cNeE3sFE1GAevwNQIiHxbLr3cOGZy86MMgzErcyb.nW', 'LU02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `histori_pelanggaran`
--
ALTER TABLE `histori_pelanggaran`
  ADD PRIMARY KEY (`KodeHIS`),
  ADD KEY `NIP` (`NIP`),
  ADD KEY `NIS` (`NIS`),
  ADD KEY `KodeTP` (`KodeTP`);

--
-- Indeks untuk tabel `identitas_kelas`
--
ALTER TABLE `identitas_kelas`
  ADD PRIMARY KEY (`KodeIK`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`KodeJBT`);

--
-- Indeks untuk tabel `level_pelanggaran`
--
ALTER TABLE `level_pelanggaran`
  ADD PRIMARY KEY (`KodeLP`);

--
-- Indeks untuk tabel `level_user`
--
ALTER TABLE `level_user`
  ADD PRIMARY KEY (`KodeLU`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`NIP`),
  ADD KEY `KodeJBT` (`KodeJBT`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NIS`),
  ADD KEY `KodeIK` (`KodeIK`);

--
-- Indeks untuk tabel `tipe_pelanggaran`
--
ALTER TABLE `tipe_pelanggaran`
  ADD PRIMARY KEY (`KodeTP`),
  ADD KEY `KodeLP` (`KodeLP`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`KodeUSR`),
  ADD KEY `KodeLU` (`KodeLU`),
  ADD KEY `NIP` (`NIP`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `histori_pelanggaran`
--
ALTER TABLE `histori_pelanggaran`
  ADD CONSTRAINT `histori_pelanggaran_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `pegawai` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `histori_pelanggaran_ibfk_4` FOREIGN KEY (`NIS`) REFERENCES `siswa` (`NIS`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `histori_pelanggaran_ibfk_5` FOREIGN KEY (`KodeTP`) REFERENCES `tipe_pelanggaran` (`KodeTP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`KodeJBT`) REFERENCES `jabatan` (`KodeJBT`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`KodeIK`) REFERENCES `identitas_kelas` (`KodeIK`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tipe_pelanggaran`
--
ALTER TABLE `tipe_pelanggaran`
  ADD CONSTRAINT `tipe_pelanggaran_ibfk_1` FOREIGN KEY (`KodeLP`) REFERENCES `level_pelanggaran` (`KodeLP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `pegawai` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`KodeLU`) REFERENCES `level_user` (`KodeLU`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
