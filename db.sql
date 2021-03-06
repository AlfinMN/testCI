-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Mar 2021 pada 11.16
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
-- Database: `umkm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `NIP` int(11) NOT NULL,
  `NamaGuru` varchar(50) NOT NULL,
  `PangkatGol` varchar(50) NOT NULL,
  `MataPelajaranBinaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`NIP`, `NamaGuru`, `PangkatGol`, `MataPelajaranBinaan`) VALUES
(4889013, 'Suharyati', 'PengaturTk.I/IId', 'B.Indonesia'),
(4889014, 'Jimmy Pandu', 'Tk.I/IIIb', 'Matematika'),
(4889015, 'Hartono', 'Penata/IIIc', 'Penjaskes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `KodeJadwal` varchar(11) NOT NULL,
  `Hari` varchar(20) NOT NULL,
  `Jam` varchar(15) NOT NULL,
  `NIP` int(11) NOT NULL,
  `KodeKelas` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`KodeJadwal`, `Hari`, `Jam`, `NIP`, `KodeKelas`) VALUES
('J1', 'Selasa', '14:00', 4889013, 'K2-01'),
('J2 ', 'Rabu', '15:00', 4889014, 'K1-01'),
('J3', 'Rabu', '16:00', 4889014, 'K1-02'),
('j5', 'Selasa', '15:00', 4889014, 'K1-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `KodeKelas` varchar(11) NOT NULL,
  `NamaKelas` varchar(50) NOT NULL,
  `Kapasitas` int(11) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`KodeKelas`, `NamaKelas`, `Kapasitas`, `Status`) VALUES
('K1-01', 'Kelas 1.1', 30, 'aktif'),
('K1-02', 'Kelas 1.2', 30, 'aktif'),
('K2-01 ', 'Kelas 2.1', 25, 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilik_umkm`
--

CREATE TABLE `pemilik_umkm` (
  `id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `produk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemilik_umkm`
--

INSERT INTO `pemilik_umkm` (`id`, `nama`, `produk`) VALUES
('1', 'apin', 'pelet cirebon'),
('2', 'eloco', 'hengpon jadul'),
('3', 'balmond', 'topup diamond'),
('4', 'ucok', 'pancake duren'),
('5', 'maman', 'velg racing'),
('6', 'entong', 'pedesan entog'),
('7', 'alucard', 'voucher gaming'),
('8', 'celiboy', 'jersey gaming'),
('9', 'zilong', 'jasa cheater');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`NIP`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`KodeJadwal`),
  ADD KEY `KodeKelas` (`KodeKelas`),
  ADD KEY `NIP` (`NIP`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`KodeKelas`);

--
-- Indeks untuk tabel `pemilik_umkm`
--
ALTER TABLE `pemilik_umkm`
  ADD PRIMARY KEY (`id`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`KodeKelas`) REFERENCES `kelas` (`KodeKelas`),
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`NIP`) REFERENCES `guru` (`NIP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
