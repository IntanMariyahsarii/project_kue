-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2023 pada 08.26
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tokokue`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telepon` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `instagram` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id_contact`, `nama`, `email`, `no_telepon`, `alamat`, `instagram`) VALUES
(1, 'Eternal Cake', 'eternal.cake@gmail.com', '08123456789', 'Jl. Margonda Raya No.358, Kemiri Muka, Kecamatan Beji, Kota Depok, Jawa Barat 16423', 'https://www.instagram.com/eternal.pics');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `jenis_kategori` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `jenis_kategori`, `created_date`) VALUES
(1, 'kue ulang tahun', 'produk', '2023-05-22 15:21:58'),
(2, 'kue kering', 'produk', '2023-05-22 15:40:12'),
(3, 'roti', 'produk', '2023-05-22 15:40:12'),
(4, 'pastry', 'produk', '2023-05-22 15:45:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `gambar_produk` text NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_promo` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `gambar_produk`, `harga`, `stok`, `id_promo`, `id_kategori`, `deskripsi`, `created_date`) VALUES
(5, 'Nastar', 'uploads/d5a0293144bc395426b59878537ec329.jpg', '35000', 10, 1, 2, 'Nastar', '0000-00-00 00:00:00'),
(13, 'Kastangel Keju', 'uploads/kastangel.jpg', '42000', 13, 2, 2, 'Kastangel Keju', '0000-00-00 00:00:00'),
(15, 'Bento', 'uploads/bento.jpg', '50000', 10, 1, 1, 'Bento Birthday Cake', '0000-00-00 00:00:00'),
(33, 'Putri Salju', 'uploads/3c45327d78a11746de9cb654400a094b.jpg', '45000', 3, 1, 2, 'kue putri salju', '0000-00-00 00:00:00'),
(34, 'Kue Sagu', 'uploads/sagu-keju-santan.jpg', '41000', 4, 1, 2, 'Kue sagu', '0000-00-00 00:00:00'),
(35, 'Kue Semprit', 'uploads/ef8240d42ca81ab2d3b5987e6644c5b0.jpg', '38000', 4, 1, 2, 'kue semprit', '0000-00-00 00:00:00'),
(36, 'Vanila Cupcake', 'uploads/adeb6c253b76f8253b7d5e5657d33cc6.jpg', '20000', 15, 3, 3, 'Vanila Cupcake', '0000-00-00 00:00:00'),
(37, 'Pie Buah', 'uploads/pie.jpg', '15000', 12, 1, 3, 'pie buah', '0000-00-00 00:00:00'),
(38, 'Red Velvet', 'uploads/1f39e0e52da83587281858f80568c5b8.jpg', '23000', 2, 1, 1, 'Red Velvet', '0000-00-00 00:00:00'),
(39, 'macaron', 'uploads/47eac69a15aa7905e6f1ffdff4415b83.jpg', '65000', 8, 3, 1, 'macaron rainbow', '0000-00-00 00:00:00'),
(40, 'Dessert Box Strawberry', 'uploads/c7e0bf5a43defb546804e09f5776e55a.jpg', '45000', 5, 4, 3, 'Dessert Box Strawberry', '0000-00-00 00:00:00'),
(41, 'Matcha Tres Leches Cake', 'uploads/c69bd290f2008ec14b7e192e5821b886.jpg', '55000', 5, 1, 1, 'Matcha Tres Leches Cake', '0000-00-00 00:00:00'),
(42, 'Rainbow Mille Crepe', 'uploads/80622d66c9387a6aa7fb78f61f11ebe3.jpg', '30000', 8, 1, 3, 'Rainbow Mille Crepe', '0000-00-00 00:00:00'),
(43, 'Pancake Butter', 'uploads/6bf60c63f8930867693213bf05e8eeb8.jpg', '20000', 10, 1, 3, 'Pancake Butter', '0000-00-00 00:00:00'),
(44, 'Donat', 'uploads/a85813bb6f460c6a14602b425311269a.jpg', '13000', 11, 1, 3, 'Harga untuk per 1 donat ', '0000-00-00 00:00:00'),
(48, 'Birthday Cake', 'uploads/d43fcddde75f06ae1cd957d5fb6596c2.jpg', '280000', 12, 1, 1, 'Birthday Cake', '2023-05-25 22:32:55'),
(49, 'Custom Cookies', 'uploads/514a7022eb49c668674feed95ddbcee6.jpg', '150000', 2, 3, 2, 'Custom Cookies', '2023-05-25 22:33:42'),
(50, 'Danish', 'uploads/7ad5476126bdadd6e506265eca672df0.jpg', '37000', 11, 3, 3, 'Danish', '2023-05-25 22:34:34'),
(51, 'Croissant', 'uploads/5bebe528001fe4723cea765232171840.jpg', '45000', 11, 1, 3, 'Croissant', '2023-05-25 22:35:17'),
(52, 'Caracter Birthday Cake', 'uploads/a36233a60f3ee643c94b85f5b25e3b04.jpg', '280000', 2, 1, 1, 'Caracter Birthday Cake', '2023-05-25 22:35:50'),
(53, 'Fruit Salad', 'uploads/salad.jpg', '30000', 11, 1, 3, 'Fruit Salad', '2023-05-25 22:38:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `promotion`
--

CREATE TABLE `promotion` (
  `id_promo` int(11) NOT NULL,
  `promo` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `promotion`
--

INSERT INTO `promotion` (`id_promo`, `promo`, `created_date`) VALUES
(1, 'Tidak ada promo', '2023-05-22 15:22:25'),
(2, 'Beli 1 Gratis 1', '2023-05-22 15:22:25'),
(3, 'Beli 2 Gratis 1', '2023-05-22 15:46:34'),
(4, 'Beli 5 Gratis 2', '2023-05-22 15:46:34');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id_promo`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id_promo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
