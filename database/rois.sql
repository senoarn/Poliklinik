-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 22, 2019 at 05:21 PM
-- Server version: 5.7.26-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-6+ubuntu16.04.1+deb.sury.org+3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rois`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(20) NOT NULL,
  `kode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_obat`
--

CREATE TABLE `data_obat` (
  `id` int(20) NOT NULL,
  `order_id` varchar(30) NOT NULL,
  `kode` varchar(30) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `minum` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_obat`
--

INSERT INTO `data_obat` (`id`, `order_id`, `kode`, `jumlah`, `minum`) VALUES
(33, '08052019171', '4', '10', '5'),
(34, '08052019615', '4', '1', '1'),
(35, '08052019102', '5', '1', '1'),
(36, '08052019323', '5', '10', '1'),
(37, '29052019667', '5', '10', '3x1');

-- --------------------------------------------------------

--
-- Table structure for table `kuratif`
--

CREATE TABLE `kuratif` (
  `order_id` varchar(80) NOT NULL,
  `pasien` varchar(10) NOT NULL,
  `kel_utama` text NOT NULL,
  `tgl_periksa` varchar(25) NOT NULL,
  `riwayat_penyakit` text NOT NULL,
  `fisik` text NOT NULL,
  `lab` varchar(80) NOT NULL,
  `radio` varchar(80) NOT NULL,
  `diagnosis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuratif`
--

INSERT INTO `kuratif` (`order_id`, `pasien`, `kel_utama`, `tgl_periksa`, `riwayat_penyakit`, `fisik`, `lab`, `radio`, `diagnosis`) VALUES
('08052019311', '75', 'Keluhan Utama', '2019-05-08', 'Riwayat Penyakit', 'Pemeriksaan FIsik', 'kuratif/', '', 'Dignosis'),
('08052019323', '74', 'tes', '2019-05-08', 'tes', 'tes', 'kuratif/', '', 'tes'),
('0805201936', '74', 'Keluhan Utama', '2019-05-08', 'Penyakit', 'Penyakit fisik', 'kuratif/', '', 'Diagnosis'),
('08052019615', '75', 'tes', '2019-05-08', 'tes', 'tes', 'kuratif/', '', 'tes'),
('08052019686', '75', 'tes', '2019-05-08', 'tes', 'tes', 'kuratif/', '', 'tes'),
('29052019667', '74', 'lala', '2019-05-29', 'lala', 'lala', 'kuratif/', '', 'lala');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(10) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `stok` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `kode`, `nama`, `jenis`, `stok`) VALUES
(4, '2', 'Mixagrip', 'Obat batuk', 4),
(5, '555', 'Paramex', 'Sakit Kepala', 10);

-- --------------------------------------------------------

--
-- Table structure for table `pakar`
--

CREATE TABLE `pakar` (
  `id` int(10) NOT NULL,
  `a` varchar(500) NOT NULL,
  `b` varchar(500) NOT NULL,
  `c` varchar(500) NOT NULL,
  `d` varchar(500) NOT NULL,
  `e` varchar(500) NOT NULL,
  `f` varchar(500) NOT NULL,
  `g` varchar(500) NOT NULL,
  `h` varchar(500) NOT NULL,
  `i` varchar(500) NOT NULL,
  `j` varchar(500) NOT NULL,
  `penyakit` varchar(100) NOT NULL,
  `rekom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pakar`
--

INSERT INTO `pakar` (`id`, `a`, `b`, `c`, `d`, `e`, `f`, `g`, `h`, `i`, `j`, `penyakit`, `rekom`) VALUES
(14, 'panas pada dewasa', 'sesak saat istirahat', 'krepitasi dan napas bronkial', 'dahak kuning atau hijau', '', '', '', '', '', '', 'bronkitis akut', ''),
(15, 'panas pada dewasa', 'sesak saat istirahat', 'krepitasi dan napas bronkial', 'dahak kuning atau hijau', 'batuk lebih dari 4 minggu atau batuk darah dalam waktu 3 bulan', 'leher kaku', '', '', '', '', 'miningitis', '');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(10) NOT NULL,
  `rm` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nrp` varchar(20) NOT NULL,
  `ktp` varchar(20) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tgl` varchar(15) NOT NULL,
  `usia` varchar(4) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `kerja` varchar(15) NOT NULL,
  `detail` varchar(5) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL,
  `bb` varchar(4) NOT NULL,
  `tb` varchar(4) NOT NULL,
  `goldar` varchar(3) NOT NULL,
  `rhesus` varchar(3) NOT NULL,
  `thn_masuk` varchar(10) NOT NULL,
  `smartcard` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `rm`, `nama`, `nrp`, `ktp`, `tempat`, `tgl`, `usia`, `jk`, `kerja`, `detail`, `agama`, `alamat`, `tlp`, `status`, `bb`, `tb`, `goldar`, `rhesus`, `thn_masuk`, `smartcard`) VALUES
(74, '0006110804', 'vector', '123123153', '1123123141', 'Pasuruan', '2019-03-14', '23', 'Laki-Laki ', 'Direksi', 'SB', 'Islam', 'Carat, Porong', '08993919948', 'Belum Menikah', '45', '160', 'O', '+', '0006110804', '555555');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit_diagnosa`
--

CREATE TABLE `penyakit_diagnosa` (
  `id` int(11) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit_diagnosa`
--

INSERT INTO `penyakit_diagnosa` (`id`, `nama`, `tgl`, `ket`) VALUES
(10, 'TBC PARU', '2019-06-18 12:44:20pm', 'penyakit'),
(11, 'Kelemahan Badan', '2019-06-18 12:45:48pm', 'diagnosa'),
(12, 'Panas', '2019-06-18 12:46:02pm', 'diagnosa'),
(13, 'Anemia Berat', '2019-06-18 12:46:19pm', 'diagnosa'),
(14, 'Batuk lebih 4 Minggu atau Batuk darah 3 bulan ini', '2019-06-18 12:46:29pm', 'diagnosa'),
(15, 'Rongsent Paru', '2019-06-18 12:47:01pm', 'diagnosa'),
(16, 'Stress Mental', '2019-06-18 12:47:53pm', 'penyakit'),
(17, 'Bengkak', '2019-06-18 12:48:42pm', 'diagnosa'),
(18, 'Kehilangan Berat Badan', '2019-06-18 12:48:59pm', 'diagnosa'),
(19, 'Sesak pada aktivitas', '2019-06-18 12:49:11pm', 'diagnosa'),
(20, 'Masalah kebosanan', '2019-06-18 12:49:23pm', 'diagnosa');

-- --------------------------------------------------------

--
-- Table structure for table `promotif`
--

CREATE TABLE `promotif` (
  `id` varchar(15) NOT NULL,
  `nrp` varchar(20) NOT NULL,
  `kb_umum` text NOT NULL,
  `bmi` varchar(15) NOT NULL,
  `tekanan_darah` varchar(15) NOT NULL,
  `nadi` varchar(15) NOT NULL,
  `respirasi` varchar(15) NOT NULL,
  `suhu` varchar(15) NOT NULL,
  `cacat_anggota_tubuh` varchar(15) NOT NULL,
  `bagian_cacat` varchar(255) NOT NULL,
  `conjuctiva` varchar(15) NOT NULL,
  `sclera` varchar(15) NOT NULL,
  `cyanosis` varchar(15) NOT NULL,
  `dyspnea` varchar(15) NOT NULL,
  `tanggal` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotif`
--

INSERT INTO `promotif` (`id`, `nrp`, `kb_umum`, `bmi`, `tekanan_darah`, `nadi`, `respirasi`, `suhu`, `cacat_anggota_tubuh`, `bagian_cacat`, `conjuctiva`, `sclera`, `cyanosis`, `dyspnea`, `tanggal`) VALUES
('5189080119', '12031', ' Keterangan ', '10', '10', '10', '10', '10', '1', ' cacat', '1', '0', '1', '1', '19-01-08'),
('4615080119', '12031', ' Kebersihan bersih sekali ', '10', '10', '101', '010', '10', '1', 'cacat', '1', '1', '1', '1', '08/01/2019'),
('2728130119', '123123153', ' Bersih Sekali', '10', '10', '101', '101', '10', '1', 'Tidak ada yang cacat', '1', '1', '1', '1', '13/01/2019'),
('1795040219', '12031610089', ' Bersih', '110', '10', '10', '10', '10', '0', 'cacat', '1', '1', '1', '1', '04/02/2019'),
('3816130319', '12031610089', ' ', '0.00195', '', '', '', '', '', '', '', '', '', '', '13/03/2019'),
('2455130319', '12031610089', ' ', '0.00195', '', '', '', '', '', '', '', '', '', '', '13/03/2019'),
('5447130319', '12031610089', ' ', '0.00195', '', '', '', '', '', '', '', '', '', '', '13/03/2019'),
('5737130319', '12031610089', ' ', '0.00195', '', '', '', '', '', '', '', '', '', '', '13/03/2019'),
('9333130319', '12031610089', ' ', '0.00195', '', '', '', '', '', '', '', '', '', '', '13/03/2019'),
('8966130319', '12031610089', ' ', '0.00195', '', '', '', '', '', '', '', '', '', '', '13/03/2019'),
('5211140319', '1121331231123', ' ', '3.90625', '', '', '', '', '', '', '', '', '', '', '14/03/2019'),
('2580140319', '1121331231123', ' ', '3.90625', '', '', '', '', '', '', '', '', '', '', '14/03/2019'),
('1763140319', '1121331231123', ' ', '3.90625', '', '', '', '', '', '', '', '', '', '', '14/03/2019'),
('8138140319', '123123153', ' ', '19.53125', '', '', '', '', '', '', '', '', '', '', '14/03/2019'),
('2710140319', '123123153', ' ', '19.53125', '', '', '', '', '', '', '', '', '', '', '14/03/2019'),
('9951140319', '123123153', ' ', '17.57813', '', '', '', '', '', '', '', '', '', '', '14/03/2019'),
('2709140319', '123123153', ' ', '17.57813', '', '', '', '', '', '', '', '', '', '', '14/03/2019'),
('3109140319', '123123153', ' ', '17.57813', '', '', '', '', '', '', '', '', '', '', '14/03/2019'),
('449140319', '', '', '', '', '', '', '', '', '', '', '', '', '', '14/03/2019'),
('8889220519', '123123155542', ' 1', '1', '10', '1', '', '', '0', '', '0', '0', '0', '0', '22/05/2019'),
('3927010619', '123123153', ' 1', '1', '1', '1', '1', '1', '0', '1', '0', '0', '0', '0', '01/06/2019'),
('2579010619', '123123153', ' ', '17.57813', '', '', '', '', '0', '', '0', '0', '0', '0', '01/06/2019'),
('9522010619', '123123153', ' ', '17.57813', '', '', '', '', '0', '', '0', '0', '0', '0', '01/06/2019'),
('4062010619', '', '', '', '', '', '', '', '', '', '', '', '', '', '01/06/2019'),
('5786010619', '123123153', 'chalid', '17.57813', '40', '1', '101', '10', '1', 'Tidak ada yang cacat', '0', '1', '0', '0', '01/06/2019'),
('7725180619', '123123153', ' tesss', '17.57813', '', '', '', '', '0', '', '0', '0', '0', '0', '18/06/2019'),
('1836180619', '', '', '', '', '', '', '', '', '', '', '', '', '', '18/06/2019');

-- --------------------------------------------------------

--
-- Table structure for table `promotif_hiper`
--

CREATE TABLE `promotif_hiper` (
  `no` int(11) NOT NULL,
  `hiperkolesterol` int(11) NOT NULL,
  `hiperurisemia` int(11) NOT NULL,
  `guladar` int(11) NOT NULL,
  `indikasi_guldar` varchar(150) NOT NULL,
  `ket_hiperkoles` varchar(20) NOT NULL,
  `ket_hiperuris` varchar(20) NOT NULL,
  `ket_guldar` varchar(20) NOT NULL,
  `id_promotif` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotif_hiper`
--

INSERT INTO `promotif_hiper` (`no`, `hiperkolesterol`, `hiperurisemia`, `guladar`, `indikasi_guldar`, `ket_hiperkoles`, `ket_hiperuris`, `ket_guldar`, `id_promotif`) VALUES
(1, 1, 1, 1, '', '1', '1', '1', '1'),
(2, 1, 1, 1, '1', '1', '1', '1', '1'),
(3, 140, 6, 2, '130', 'Normal', 'Normal', 'Tidak Normal', '7448010619'),
(4, 110, 6, 1, '120', 'Normal', 'Normal', 'Normal', '5786010619'),
(5, 110, 1, 1, '110', 'Normal', 'Tidak Normal', 'Normal', '7725180619');

-- --------------------------------------------------------

--
-- Table structure for table `promotif_jantung`
--

CREATE TABLE `promotif_jantung` (
  `id` varchar(20) NOT NULL,
  `asma` varchar(20) NOT NULL,
  `bronkitis` varchar(20) NOT NULL,
  `jantung` varchar(20) NOT NULL,
  `wasir` varchar(20) NOT NULL,
  `hepar` varchar(20) NOT NULL,
  `hypertensi` varchar(20) NOT NULL,
  `hernia` varchar(20) NOT NULL,
  `lien` varchar(20) NOT NULL,
  `tetis` varchar(20) NOT NULL,
  `penyakit_kelamin` varchar(20) NOT NULL,
  `ket_jantung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotif_jantung`
--

INSERT INTO `promotif_jantung` (`id`, `asma`, `bronkitis`, `jantung`, `wasir`, `hepar`, `hypertensi`, `hernia`, `lien`, `tetis`, `penyakit_kelamin`, `ket_jantung`) VALUES
('1763140319', '', '', '', '', '', '', '', '', '', '', ' '),
('1795040219', '1', '0', '1', '1', '1', '0', '0', '0', '0', '1', ' Jantung Sehat'),
('1836180619', '', '', '', '', '', '', '', '', '', '', ''),
('2455130319', '', '', '', '', '', '', '', '', '', '', ' '),
('2579010619', '0', '0', '0', '0', '1', '1', '0', '1', '0', '0', ' '),
('2580140319', '', '', '', '', '', '', '', '', '', '', ' '),
('2709140319', '', '', '', '', '', '', '', '', '', '', ' '),
('2710140319', '', '', '', '', '', '', '', '', '', '', ' '),
('2728130119', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '  Penafasan jantung sehat'),
('3109140319', '', '', '', '', '', '', '', '', '', '', ' '),
('3816130319', '', '', '', '', '', '', '', '', '', '', ' '),
('3927010619', '0', '0', '0', '0', '1', '1', '0', '1', '0', '0', ' '),
('4062010619', '', '', '', '', '', '', '', '', '', '', ''),
('449140319', '', '', '', '', '', '', '', '', '', '', ''),
('4615080119', '1', '1', '1', '1', '1', '', '1', '0', '1', '1', ' PErnafasan '),
('5189080119', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', ' Pernafasan '),
('5211140319', '', '', '', '', '', '', '', '', '', '', ' '),
('5447130319', '', '', '', '', '', '', '', '', '', '', ' '),
('5737130319', '', '', '', '', '', '', '', '', '', '', ' '),
('5786010619', '0', '0', '0', '0', '1', '1', '0', '1', '0', '0', ' '),
('7725180619', '0', '0', '0', '0', '1', '1', '0', '1', '0', '0', ' '),
('8138140319', '', '', '', '', '', '', '', '', '', '', ' '),
('8889220519', '0', '0', '0', '0', '1', '1', '0', '1', '0', '0', ' '),
('8966130319', '', '', '', '', '', '', '', '', '', '', ' '),
('9333130319', '', '', '', '', '', '', '', '', '', '', ' '),
('9522010619', '0', '0', '0', '0', '1', '1', '0', '1', '0', '0', ' '),
('9951140319', '', '', '', '', '', '', '', '', '', '', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `promotif_kulit`
--

CREATE TABLE `promotif_kulit` (
  `id` varchar(20) NOT NULL,
  `lepra` varchar(20) NOT NULL,
  `tato` varchar(20) NOT NULL,
  `borok` varchar(20) NOT NULL,
  `penyakit_kulit` varchar(20) NOT NULL,
  `ket_kulit` text NOT NULL,
  `catatan` text NOT NULL,
  `kesimpulan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotif_kulit`
--

INSERT INTO `promotif_kulit` (`id`, `lepra`, `tato`, `borok`, `penyakit_kulit`, `ket_kulit`, `catatan`, `kesimpulan`) VALUES
('1763140319', '', '', '', '', ' ', '', ''),
('1795040219', '', '1', '0', '0', ' Kulit sehat', 'Sehat', 'Sehat'),
('1836180619', '', '', '', '', '', '', ''),
('2455130319', '', '', '', '', ' ', '', ''),
('2579010619', '', '0', '0', '0', ' ', '', ''),
('2580140319', '', '', '', '', ' ', '', ''),
('2709140319', '', '', '', '', ' ', '', ''),
('2710140319', '', '', '', '', ' ', '', ''),
('2728130119', '', '0', '1', '1', '  Kulit Sehat', ' Tidak ada catatan', ' kesimpulan baik'),
('3109140319', '', '', '', '', ' ', '', ''),
('3816130319', '', '', '', '', ' ', '', ''),
('3927010619', '', '0', '0', '0', ' ', '', ''),
('4062010619', '', '', '', '', '', '', ''),
('449140319', '', '', '', '', '', '', ''),
('4615080119', '', '1', '1', '1', '  Kulit ', 'Catatan', 'Kesimpulan'),
('5189080119', '', '1', '1', '1', '  kulit', 'catatan ', 'kesimpulan'),
('5211140319', '', '', '', '', ' ', '', ''),
('5447130319', '', '', '', '', ' ', '', ''),
('5737130319', '', '', '', '', ' ', '', ''),
('5786010619', '', '0', '0', '0', ' ', '', ''),
('7725180619', '', '0', '0', '0', ' ', '', ''),
('8138140319', '', '', '', '', ' ', '', ''),
('8889220519', '', '0', '0', '0', ' ', '', ''),
('8966130319', '', '', '', '', ' ', '', ''),
('9333130319', '', '', '', '', ' ', '', ''),
('9522010619', '', '0', '0', '0', ' ', '', ''),
('9951140319', '', '', '', '', ' ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `promotif_mata`
--

CREATE TABLE `promotif_mata` (
  `id` varchar(15) NOT NULL,
  `tajam_kanan` varchar(15) NOT NULL,
  `tajam_kiri` varchar(15) NOT NULL,
  `buta_kanan` varchar(15) NOT NULL,
  `buta_kiri` varchar(15) NOT NULL,
  `juling_kanan` varchar(15) NOT NULL,
  `juling_kiri` varchar(15) NOT NULL,
  `kacamata` varchar(15) NOT NULL,
  `ket_mata` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotif_mata`
--

INSERT INTO `promotif_mata` (`id`, `tajam_kanan`, `tajam_kiri`, `buta_kanan`, `buta_kiri`, `juling_kanan`, `juling_kiri`, `kacamata`, `ket_mata`) VALUES
('5189080119', '10', '10', '1', '1', '1', '1', '1', '  Mata'),
('4615080119', ' 101', '01', '1', '1', '1', '1', '1', '  ket'),
('2728130119', '110', '10', '1', '1', '1', '1', '1', ' Mata Baik '),
('1795040219', '110', '110', '0', '1', '1', '1', '1', '  mata sehat'),
('3816130319', '', '', '', '', '', '', '', ' '),
('2455130319', '', '', '', '', '', '', '', ' '),
('5447130319', '', '', '', '', '', '', '', ' '),
('5737130319', '', '', '', '', '', '', '', ' '),
('9333130319', '', '', '', '', '', '', '', ' '),
('8966130319', '', '', '', '', '', '', '', ' '),
('5211140319', '', '', '', '', '', '', '', ' '),
('2580140319', '', '', '', '', '', '', '', ' '),
('1763140319', '', '', '', '', '', '', '', ' '),
('8138140319', '', '', '', '', '', '', '', ' '),
('2710140319', '', '', '', '', '', '', '', ' '),
('9951140319', '', '', '', '', '', '', '', ' '),
('2709140319', '', '', '', '', '', '', '', ' '),
('3109140319', '', '', '', '', '', '', '', ' '),
('449140319', '', '', '', '', '', '', '', ''),
('8889220519', '', '', '0', '0', '0', '0', '0', ' '),
('3927010619', '1', '1', '0', '0', '0', '0', '0', ' '),
('2579010619', '', '', '0', '0', '0', '0', '0', ' '),
('9522010619', '', '', '0', '0', '0', '0', '0', ' '),
('4062010619', '', '', '', '', '', '', '', ''),
('5786010619', '', '', '0', '0', '0', '0', '0', ' '),
('7725180619', '', '', '0', '0', '0', '0', '0', ' '),
('1836180619', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `promotif_mulut`
--

CREATE TABLE `promotif_mulut` (
  `id` varchar(15) NOT NULL,
  `labio_scesis` varchar(15) NOT NULL,
  `lidah_kotor` varchar(15) NOT NULL,
  `gagap` varchar(15) NOT NULL,
  `kelenjar_gondok` varchar(15) NOT NULL,
  `gigi_lubang` varchar(15) NOT NULL,
  `lympa` varchar(15) NOT NULL,
  `ket_mulut` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotif_mulut`
--

INSERT INTO `promotif_mulut` (`id`, `labio_scesis`, `lidah_kotor`, `gagap`, `kelenjar_gondok`, `gigi_lubang`, `lympa`, `ket_mulut`) VALUES
('5189080119', '1', '1', '1', '1', '1', '1', ' Ketarangan '),
('4615080119', '1', '1', '1', '1', '1', '1', '  teseting'),
('2728130119', '0', '1', '1', '0', '1', '1', '  Mulut Baik'),
('1795040219', '1', '1', '1', '1', '1', '1', '  mulut sehat'),
('3816130319', '', '', '', '', '', '', ' '),
('2455130319', '', '', '', '', '', '', ' '),
('5447130319', '', '', '', '', '', '', ' '),
('5737130319', '', '', '', '', '', '', ' '),
('9333130319', '', '', '', '', '', '', ' '),
('8966130319', '', '', '', '', '', '', ' '),
('5211140319', '', '', '', '', '', '', ' '),
('2580140319', '', '', '', '', '', '', ' '),
('1763140319', '', '', '', '', '', '', ' '),
('8138140319', '', '', '', '', '', '', ' '),
('2710140319', '', '', '', '', '', '', ' '),
('9951140319', '', '', '', '', '', '', ' '),
('2709140319', '', '', '', '', '', '', ' '),
('3109140319', '', '', '', '', '', '', ' '),
('449140319', '', '', '', '', '', '', ''),
('8889220519', '0', '0', '0', '0', '0', '0', ' '),
('3927010619', '0', '0', '0', '0', '0', '0', ' '),
('2579010619', '0', '0', '0', '0', '0', '0', ' '),
('9522010619', '0', '0', '0', '0', '0', '0', ' '),
('4062010619', '', '', '', '', '', '', ''),
('5786010619', '0', '0', '0', '0', '0', '0', ' '),
('7725180619', '0', '0', '0', '0', '0', '0', ' '),
('1836180619', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `promotif_telinga`
--

CREATE TABLE `promotif_telinga` (
  `id` varchar(20) NOT NULL,
  `tajam_kanan` varchar(15) NOT NULL,
  `tajam_kiri` varchar(15) NOT NULL,
  `liang_kanan` varchar(15) NOT NULL,
  `liang_kiri` varchar(15) NOT NULL,
  `serumen_kanan` varchar(15) NOT NULL,
  `serumen_kiri` varchar(15) NOT NULL,
  `ket_telinga` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotif_telinga`
--

INSERT INTO `promotif_telinga` (`id`, `tajam_kanan`, `tajam_kiri`, `liang_kanan`, `liang_kiri`, `serumen_kanan`, `serumen_kiri`, `ket_telinga`) VALUES
('5189080119', '1', '0', '1', '1', '1', '1', '  telinga'),
('4615080119', '0', '1', '1', '1', '1', '1', '  keterangan'),
('2728130119', '1', '1', '1', '1', '1', '1', '  Telinga Baik'),
('1795040219', '1', '1', '1', '1', '1', '1', 'Telinga aman '),
('3816130319', '', '', '', '', '', '', ' '),
('2455130319', '', '', '', '', '', '', ' '),
('5447130319', '', '', '', '', '', '', ' '),
('5737130319', '', '', '', '', '', '', ' '),
('9333130319', '', '', '', '', '', '', ' '),
('8966130319', '', '', '', '', '', '', ' '),
('5211140319', '', '', '', '', '', '', ' '),
('2580140319', '', '', '', '', '', '', ' '),
('1763140319', '', '', '', '', '', '', ' '),
('8138140319', '', '', '', '', '', '', ' '),
('2710140319', '', '', '', '', '', '', ' '),
('9951140319', '', '', '', '', '', '', ' '),
('2709140319', '', '', '', '', '', '', ' '),
('3109140319', '', '', '', '', '', '', ' '),
('449140319', '', '', '', '', '', '', ''),
('8889220519', '1', '1', '1', '1', '1', '1', ' '),
('3927010619', '1', '1', '1', '1', '1', '1', '1 '),
('2579010619', '1', '1', '1', '1', '1', '1', ' '),
('9522010619', '1', '1', '1', '1', '1', '1', ' '),
('4062010619', '', '', '', '', '', '', ''),
('5786010619', '1', '1', '1', '1', '1', '1', ' '),
('7725180619', '1', '1', '1', '1', '1', '1', ' '),
('1836180619', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `rehabilitatif`
--

CREATE TABLE `rehabilitatif` (
  `id` int(20) NOT NULL,
  `tangal` varchar(20) NOT NULL,
  `diagnosa_akhir` text NOT NULL,
  `saran` text NOT NULL,
  `kemajuan` text NOT NULL,
  `kuratif` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rehabilitatif`
--

INSERT INTO `rehabilitatif` (`id`, `tangal`, `diagnosa_akhir`, `saran`, `kemajuan`, `kuratif`) VALUES
(5, '20/05/2019', 'masih sakit', 'minum obat', 'masih tetap belum maju', '0402201987'),
(6, '04/02/2019', 'sudah baikan', 'minum obat', 'semakin baik', '0402201987'),
(8, '22/05/2019', 'pilek', 'berobat', 'semakin baik', '08052019323'),
(10, '22/05/2019', 'Percobaan tes', 'saran Rehabilitatif', 'Kemajuan Program Rehabilitatif', '08052019323'),
(11, '22/05/2019', 'Percobaan Keluhan Utama', 'Saran Program', 'Kemajuan ', '0805201936');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_periksa` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id`, `nama`, `jenis_periksa`, `tanggal`) VALUES
(20, 'Chalid Ade Rahman', 'Kuratif', '08-05-2019 09:17:03pm'),
(21, 'Chalid Ade Rahman', 'Kuratif', '08-05-2019 09:22:17pm'),
(22, 'Chalid Ade Rahman', 'Rehabilitatif', '08-05-2019 09:30:23pm'),
(23, 'Chalid Ade Rahman', 'Kuratif', '08-05-2019 10:07:31pm'),
(24, 'vector', 'Kuratif', '08-05-2019 10:08:09pm'),
(25, 'Chalid Ade Rahman', 'Promotif dan Presentif', '22-05-2019 07:16:32am'),
(26, '', 'Rehabilitatif', '22/05/2019'),
(27, 'vector', 'Rehabilitatif', '22/05/2019'),
(28, 'vector', 'Promotif dan Presentif', '01-06-2019 01:15:37pm'),
(29, 'vector', 'Promotif dan Presentif', '01-06-2019 02:04:50pm'),
(30, 'vector', 'Promotif dan Presentif', '01-06-2019 03:44:53pm'),
(31, '', 'Promotif dan Presentif', '01-06-2019 04:22:47pm'),
(32, 'vector', 'Promotif dan Presentif', '01-06-2019 04:23:44pm'),
(33, 'vector', 'Promotif dan Presentif', '18-06-2019 04:00:43pm'),
(34, '', 'Promotif dan Presentif', '18-06-2019 04:01:30pm');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_baru`
--

CREATE TABLE `siswa_baru` (
  `id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `panggilan` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `saudara` varchar(50) NOT NULL,
  `ke` varchar(50) NOT NULL,
  `dari` varchar(50) NOT NULL,
  `goldar` varchar(10) NOT NULL,
  `rhesus` varchar(5) NOT NULL,
  `hp1` varchar(15) NOT NULL,
  `hp2` varchar(15) NOT NULL,
  `pil1` varchar(50) NOT NULL,
  `pil2` varchar(50) NOT NULL,
  `pil3` varchar(50) NOT NULL,
  `jalur1` varchar(50) NOT NULL,
  `jalur2` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `riwayat1` varchar(50) NOT NULL,
  `riwayat2` varchar(50) NOT NULL,
  `riwayat3` varchar(50) NOT NULL,
  `ekskul1` varchar(150) NOT NULL,
  `ekskul2` varchar(150) NOT NULL,
  `ekskul3` varchar(150) NOT NULL,
  `ekskul4` varchar(150) NOT NULL,
  `ekskul5` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa_baru`
--

INSERT INTO `siswa_baru` (`id`, `nama`, `panggilan`, `jk`, `saudara`, `ke`, `dari`, `goldar`, `rhesus`, `hp1`, `hp2`, `pil1`, `pil2`, `pil3`, `jalur1`, `jalur2`, `jurusan`, `riwayat1`, `riwayat2`, `riwayat3`, `ekskul1`, `ekskul2`, `ekskul3`, `ekskul4`, `ekskul5`) VALUES
('', 'Lina', '', 'Perempuan', '', '', '', '', '', '089999999939', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('20042019760', 'Chalid Ade Rahman', 'Chalid', 'Laki-Laki', '5', '1', '5', 'A', '+', '085784566522', '088582992342', 'Teknik K3', 'Teknik Permesinan', 'Teknik Pengelasan', 'SBMPTN', '', 'Teknik Kimia', 'Kemala Bhayangkari 10 Porong', 'Negeri 1 Porong', 'Negeri 5 Porong', 'Basket', 'Volley', 'Futsal', 'Bopak Sodor', 'Kelereng'),
('22062019928', 'Sitrun', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_baru1`
--

CREATE TABLE `siswa_baru1` (
  `id` varchar(50) NOT NULL,
  `asma` varchar(50) NOT NULL,
  `tbc` varchar(50) NOT NULL,
  `hepatitis` varchar(50) NOT NULL,
  `operasi` varchar(50) NOT NULL,
  `operasi_text` varchar(50) NOT NULL,
  `kecelakaan` varchar(50) NOT NULL,
  `kecelakaan_text` varchar(50) NOT NULL,
  `opname` varchar(50) NOT NULL,
  `opname_text` varchar(50) NOT NULL,
  `maag` varchar(50) NOT NULL,
  `epilepsi` varchar(50) NOT NULL,
  `olahraga` varchar(50) NOT NULL,
  `buah` varchar(50) NOT NULL,
  `rokok` varchar(50) NOT NULL,
  `batang` varchar(50) NOT NULL,
  `tidur` varchar(50) NOT NULL,
  `waktu1` varchar(50) NOT NULL,
  `bangun` varchar(50) NOT NULL,
  `waktu2` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `bpjs` varchar(50) NOT NULL,
  `faskes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa_baru1`
--

INSERT INTO `siswa_baru1` (`id`, `asma`, `tbc`, `hepatitis`, `operasi`, `operasi_text`, `kecelakaan`, `kecelakaan_text`, `opname`, `opname_text`, `maag`, `epilepsi`, `olahraga`, `buah`, `rokok`, `batang`, `tidur`, `waktu1`, `bangun`, `waktu2`, `facebook`, `instagram`, `bpjs`, `faskes`) VALUES
('20042019760', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Campak', 'Pernah', 'kecelakaan', 'Pernah', 'opnamae', 'Tidak', '0', '<1x/pekan', 'setiap hari', '0', '5', '21:00', 'WIB', '05:00', 'WIB', '/Chalidade', '/Chalidade', 'Iya', 'aman'),
('22062019928', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '', 'Pernah', '', 'Pernah', '', 'Tidak', '0', '<1x/pekan', 'setiap hari', '0', '', '', 'WIB', '', 'WIB', '', '', 'Iya', ''),
('25042019588', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Aman', 'Pernah', 'Aman', 'Pernah', 'Aman', 'Tidak', '0', '<1x/pekan', 'setiap hari', '0', '', '08:00', 'WIB', '20:00', 'WIB', '/Linanurfauziah', '/Linanurfauziah', 'Iya', 'Sehat'),
('28042019754', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '', 'Pernah', '', 'Pernah', '', 'Tidak', '0', '<1x/pekan', 'setiap hari', '0', '', '', 'WIB', '', 'WIB', '', '', 'Iya', '');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_baru2`
--

CREATE TABLE `siswa_baru2` (
  `id` varchar(50) NOT NULL,
  `ayah` varchar(50) NOT NULL,
  `tgl_ayah` varchar(50) NOT NULL,
  `kerja_ayah` varchar(50) NOT NULL,
  `riw_ayah` varchar(50) NOT NULL,
  `darah_ayah` varchar(50) NOT NULL,
  `ibu` varchar(50) NOT NULL,
  `tgl_ibu` varchar(50) NOT NULL,
  `kerja_ibu` varchar(50) NOT NULL,
  `riw_ibu` varchar(50) NOT NULL,
  `darah_ibu` varchar(50) NOT NULL,
  `penghasil` varchar(50) NOT NULL,
  `saudara1` varchar(50) NOT NULL,
  `tgl_saudara1` varchar(50) NOT NULL,
  `gol_saudara1` varchar(50) NOT NULL,
  `saudara2` varchar(50) NOT NULL,
  `tgl_saudara2` varchar(50) NOT NULL,
  `gol_saudara2` varchar(50) NOT NULL,
  `saudara3` varchar(50) NOT NULL,
  `tgl_saudara3` varchar(50) NOT NULL,
  `gol_saudara3` varchar(50) NOT NULL,
  `saudara4` varchar(50) NOT NULL,
  `tgl_saudara4` varchar(50) NOT NULL,
  `gol_saudara4` varchar(50) NOT NULL,
  `saudara5` varchar(50) NOT NULL,
  `tgl_saudara5` varchar(50) NOT NULL,
  `gol_saudara5` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa_baru2`
--

INSERT INTO `siswa_baru2` (`id`, `ayah`, `tgl_ayah`, `kerja_ayah`, `riw_ayah`, `darah_ayah`, `ibu`, `tgl_ibu`, `kerja_ibu`, `riw_ibu`, `darah_ibu`, `penghasil`, `saudara1`, `tgl_saudara1`, `gol_saudara1`, `saudara2`, `tgl_saudara2`, `gol_saudara2`, `saudara3`, `tgl_saudara3`, `gol_saudara3`, `saudara4`, `tgl_saudara4`, `gol_saudara4`, `saudara5`, `tgl_saudara5`, `gol_saudara5`) VALUES
('20042019760', 'Kaliman', '2019-04-20', 'Bengkel Cat Mobil', 'Tidak ada', 'o', 'Anita Setiawati', '2019-04-20', 'Rumah Tangga', 'Tidak ada', 'AB', 'Rp. 1.500.001 - 3.000.000,-', 'Chindy', '2019-04-20', 'o', 'Chelud', '2019-04-13', 'A', 'Chalid', '2019-04-22', 'B', 'Chyhuy', '2019-04-21', 'C', 'Chichi', '2019-04-08', 'B'),
('22062019928', '', '', '', '', '', '', '', '', '', '', '< Rp. 1.500.000,-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('25042019588', 'Kaliman', '2019-08-01', 'Bengkel Cat', 'Sehat', 'O', 'Anita Setiawati', '2019-08-10', 'Ibu Rumah Tangga', 'Sehat', 'O', '< Rp. 1.500.000,-', 'Chelud', '2019-08-19', 'O', 'Chalid', '2019-04-25', 'A', 'Chindy', '2019-04-08', 'O', 'Chicka', '2019-04-17', 'AB', 'Chulyn', '2019-04-22', 'B'),
('28042019754', '', '', '', '', '', '', '', '', '', '', '< Rp. 1.500.000,-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_baru3`
--

CREATE TABLE `siswa_baru3` (
  `id` varchar(50) NOT NULL,
  `bb` varchar(50) NOT NULL,
  `tb` varchar(50) NOT NULL,
  `bmi` varchar(50) NOT NULL,
  `tkd` varchar(50) NOT NULL,
  `nadi_awal` varchar(50) NOT NULL,
  `bw` varchar(50) NOT NULL,
  `st1` varchar(50) NOT NULL,
  `st2` varchar(50) NOT NULL,
  `sp02` varchar(50) NOT NULL,
  `visus` varchar(50) NOT NULL,
  `umum` varchar(50) NOT NULL,
  `mata` varchar(50) NOT NULL,
  `ket_mata` varchar(250) NOT NULL,
  `hidung` varchar(50) NOT NULL,
  `ket_hidung` varchar(250) NOT NULL,
  `mulut_1` varchar(50) NOT NULL,
  `mulut_2` varchar(50) NOT NULL,
  `ket_paring` varchar(250) NOT NULL,
  `ket_tonsi` varchar(250) NOT NULL,
  `telinga` varchar(50) NOT NULL,
  `k_telinga` varchar(250) NOT NULL,
  `tiroid` varchar(50) NOT NULL,
  `k_tiroid` varchar(250) NOT NULL,
  `paru` varchar(50) NOT NULL,
  `ket_paru` varchar(250) NOT NULL,
  `wh` varchar(50) NOT NULL,
  `murmur` varchar(50) NOT NULL,
  `ket_mur` varchar(250) NOT NULL,
  `galop` varchar(50) NOT NULL,
  `hepar` varchar(50) NOT NULL,
  `ket_hepar` varchar(250) NOT NULL,
  `lien` varchar(50) NOT NULL,
  `ket_lien` varchar(250) NOT NULL,
  `geni` varchar(50) NOT NULL,
  `ket_geni` varchar(250) NOT NULL,
  `haemorhoid` varchar(50) NOT NULL,
  `fistul` varchar(50) NOT NULL,
  `abses` varchar(50) NOT NULL,
  `eks_tangan` varchar(50) NOT NULL,
  `ket_tangan` varchar(250) NOT NULL,
  `kk_refleks` varchar(50) NOT NULL,
  `kk_ederma` varchar(50) NOT NULL,
  `ket_kaki` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa_baru3`
--

INSERT INTO `siswa_baru3` (`id`, `bb`, `tb`, `bmi`, `tkd`, `nadi_awal`, `bw`, `st1`, `st2`, `sp02`, `visus`, `umum`, `mata`, `ket_mata`, `hidung`, `ket_hidung`, `mulut_1`, `mulut_2`, `ket_paring`, `ket_tonsi`, `telinga`, `k_telinga`, `tiroid`, `k_tiroid`, `paru`, `ket_paru`, `wh`, `murmur`, `ket_mur`, `galop`, `hepar`, `ket_hepar`, `lien`, `ket_lien`, `geni`, `ket_geni`, `haemorhoid`, `fistul`, `abses`, `eks_tangan`, `ket_tangan`, `kk_refleks`, `kk_ederma`, `ket_kaki`) VALUES
('20042019760', '50', '160', '0.001953125', '10', '5', '-', '10', '10', '10', 'OD', 'Normal', '-', 'normal', '-', 'normal', 'Paringitis -', 'Tonsilitis -', 'normal', 'normal', '-', 'normal', '-', 'normal', '+', 'normal', '-', '-', 'normal', '+', 'Teraba', 'normal', 'Tidak Teraba', 'normal', '+', 'normal', '+', '-', '+', 'Normal', 'normal', 'Normal', 'Normal', 'Normal'),
('2004201992', '50', '160', '0.001953125', '10', '5', '-', '10', '10', '10', 'OD', 'Normal', '-', 'normal', '-', 'normal', 'Paringitis -', 'Tonsilitis -', 'normal', 'normal', '-', 'normal', '-', 'normal', '+', 'normal', '-', '-', 'normal', '+', 'Teraba', 'normal', 'Tidak Teraba', 'normal', '+', 'normal', '+', '-', '+', 'Normal', 'normal', 'Normal', 'Normal', 'normal'),
('22062019928', '', '', 'NAN', '', '', '', '', '', '', '', 'Normal', '-', '', '-', '', 'Paringitis -', 'Tonsilitis -', '', '', '-', '', '-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Normal', '', 'Normal', 'Normal', ''),
('25042019588', '60', '160', '0.00234375', '90', '110', '+', '110', '90', '10', 'OD', 'Normal', '-', 'Aman', '-', 'Aman', 'Paringitis -', 'Tonsilitis -', 'Aman', 'Aman', '-', 'Aman', '-', 'Aman', '-', 'Aman', '-', '+', 'Aman', '+', 'Teraba', 'Aman', 'Teraba', 'Aman', '+', 'Aman', '+', '+', '-', 'Normal', 'Aman', 'Normal', 'Normal', 'Aman');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_baru4`
--

CREATE TABLE `siswa_baru4` (
  `id` varchar(50) NOT NULL,
  `a1` varchar(11) NOT NULL,
  `a2` varchar(11) NOT NULL,
  `a3` varchar(11) NOT NULL,
  `a4` varchar(11) NOT NULL,
  `a5` varchar(11) NOT NULL,
  `b1` varchar(11) NOT NULL,
  `b2` varchar(11) NOT NULL,
  `b3` varchar(11) NOT NULL,
  `b4` varchar(11) NOT NULL,
  `c1` varchar(11) NOT NULL,
  `c2` varchar(11) NOT NULL,
  `c3` varchar(11) NOT NULL,
  `c4` varchar(11) NOT NULL,
  `c5` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa_baru4`
--

INSERT INTO `siswa_baru4` (`id`, `a1`, `a2`, `a3`, `a4`, `a5`, `b1`, `b2`, `b3`, `b4`, `c1`, `c2`, `c3`, `c4`, `c5`) VALUES
('20042019760', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
('22062019928', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
('25042019588', '1', '', '', '1', '', '', '1', '', '1', '', '', '1', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_baru6`
--

CREATE TABLE `siswa_baru6` (
  `id` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `sholat` varchar(50) NOT NULL,
  `quran` varchar(50) NOT NULL,
  `sholat1` varchar(50) NOT NULL,
  `quran1` varchar(50) NOT NULL,
  `sholat2` varchar(50) NOT NULL,
  `quran2` varchar(50) NOT NULL,
  `sholat3` varchar(50) NOT NULL,
  `quran3` varchar(50) NOT NULL,
  `m` varchar(50) NOT NULL,
  `n` varchar(50) NOT NULL,
  `p` varchar(50) NOT NULL,
  `q` varchar(50) NOT NULL,
  `l` varchar(500) NOT NULL,
  `b` varchar(500) NOT NULL,
  `o` varchar(500) NOT NULL,
  `gr` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa_baru6`
--

INSERT INTO `siswa_baru6` (`id`, `agama`, `sholat`, `quran`, `sholat1`, `quran1`, `sholat2`, `quran2`, `sholat3`, `quran3`, `m`, `n`, `p`, `q`, `l`, `b`, `o`, `gr`) VALUES
('2004201944', 'Kristen', '', '', '1', '1', '', '', '', '', '10', '10', '10', '10', '', '', '', ''),
('20042019760', 'Islam', '5', '5', '', '', '', '', '', '', '100', '100', '100', '100', '', '', '', ''),
('22062019928', 'Islam', '5', '1', '', '', '', '', '', '', '52', '42', '52', '54', '["1","5","9","7","3","3","7","3","5","9"]', '["2","6","0","6","2","4","6","2","6","8"]', '["3","7","9","5","1","5","5","3","7","7"]', '["4","8","8","4","2","6","4","4","8","6"]');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `nama`, `email`, `password`, `jabatan`) VALUES
(1, 'Chalid Ade Rahman', 'chalidade@gmail.com', 'Chalidade', 'Admin'),
(2, 'Roisuddin A', 'roisudin20@gmail.com', 'roisk32015', 'Management');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_obat`
--
ALTER TABLE `data_obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuratif`
--
ALTER TABLE `kuratif`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakar`
--
ALTER TABLE `pakar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rm` (`rm`),
  ADD UNIQUE KEY `nrp` (`nrp`);

--
-- Indexes for table `penyakit_diagnosa`
--
ALTER TABLE `penyakit_diagnosa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotif`
--
ALTER TABLE `promotif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotif_hiper`
--
ALTER TABLE `promotif_hiper`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `promotif_jantung`
--
ALTER TABLE `promotif_jantung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotif_kulit`
--
ALTER TABLE `promotif_kulit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotif_mata`
--
ALTER TABLE `promotif_mata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotif_mulut`
--
ALTER TABLE `promotif_mulut`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotif_telinga`
--
ALTER TABLE `promotif_telinga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rehabilitatif`
--
ALTER TABLE `rehabilitatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa_baru`
--
ALTER TABLE `siswa_baru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa_baru1`
--
ALTER TABLE `siswa_baru1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa_baru2`
--
ALTER TABLE `siswa_baru2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa_baru3`
--
ALTER TABLE `siswa_baru3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa_baru4`
--
ALTER TABLE `siswa_baru4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa_baru6`
--
ALTER TABLE `siswa_baru6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_obat`
--
ALTER TABLE `data_obat`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pakar`
--
ALTER TABLE `pakar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `penyakit_diagnosa`
--
ALTER TABLE `penyakit_diagnosa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `promotif_hiper`
--
ALTER TABLE `promotif_hiper`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rehabilitatif`
--
ALTER TABLE `rehabilitatif`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
