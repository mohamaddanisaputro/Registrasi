-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.28 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table event_sepeda.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;

-- Dumping data for table event_sepeda.migrations: ~4 rows (approximately)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- Dumping data for table event_sepeda.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;

-- Dumping data for table event_sepeda.personal_access_tokens: ~0 rows (approximately)
DELETE FROM `personal_access_tokens`;

-- Dumping data for table event_sepeda.tbl_event: ~3 rows (approximately)
DELETE FROM `tbl_event`;
INSERT INTO `tbl_event` (`id_event`, `nama_event`, `tgl_daftar`, `tgl_maks_daftar`, `informasi`) VALUES
	(1, 'Cisadon Uphill', '2023-01-02', '2023-01-20', 'Up to 2000 Elevation'),
	(2, 'CIJUJUNG  MARATHON', '2022-12-19', '2023-01-26', 'Marathon 48km'),
	(3, 'Xc Bogor', '2022-12-12', '2023-01-01', 'XC trail');

-- Dumping data for table event_sepeda.tbl_kategori_event: ~6 rows (approximately)
DELETE FROM `tbl_kategori_event`;
INSERT INTO `tbl_kategori_event` (`id_kategori_event`, `kode`, `nama_kategori`, `min_umur`, `max_umur`) VALUES
	(1, '1', 'Men open 18-25th', 18, 25),
	(2, '2', 'Master A 26-30th', 26, 30),
	(3, '3', 'Master B 31-40', 31, 40),
	(4, '4', 'Master C 41-50', 41, 50),
	(5, '5', 'Women', 17, 40),
	(6, '6', 'Men Elite', 18, 30);

-- Dumping data for table event_sepeda.tbl_pendaftaran_peserta: ~13 rows (approximately)
DELETE FROM `tbl_pendaftaran_peserta`;
INSERT INTO `tbl_pendaftaran_peserta` (`id_pendaftaran_peserta`, `no_bib`, `id_event`, `nik`, `nama`, `nm_komunitas`, `tempat_lahir`, `tanggal_lahir`, `no_telp`, `id_kategori_event`, `tgl_daftar`, `registrasi_ulang`) VALUES
	(1, '1001', 1, '32004900949', 'mandala', 'bcr', 'bogor', '2000-12-12', '0859985999', 1, '2023-01-31', 1),
	(2, '1002', 1, '320299909', 'dani', 'csr', 'bogor', '2000-12-12', '089999899', 1, '2023-01-31', 0),
	(3, '3001', 1, '32090999940099', 'riyanda', '04oc', 'bogor', '1998-12-12', '0859983999', 3, '2023-01-31', 0),
	(4, '1003', 1, '203840939403940', 'yuzongq', 'mlbb', 'bogor', '2022-12-12', '089699992', 1, '2023-01-31', 0),
	(5, '1004', 1, '32090890999', 'Sulpan', 'KCC', 'Bogor', '1998-10-10', '0878898883', 1, '2023-02-08', 1),
	(6, '1005', 1, '32090940000920', 'Candra', 'Bcr', 'bogoro', '1999-09-19', '0892992922', 1, '2023-02-10', 1),
	(7, '1001', 2, '320104160600012', 'Dani', 'KSGB', 'Bogor', '2000-12-12', '08950959999', 1, '2023-02-11', 0),
	(8, '1006', 1, '3201041600012', 'pa adiat', 'bcr', 'bogor', '2000-12-12', '0898999999', 1, '2023-02-11', 1),
	(9, '1007', 1, '320104050005000', 'Dani', 'Sab', 'bogor', '2000-12-12', '089993999222', 1, '2023-02-16', 0),
	(10, '1008', 1, '3222200400000200', 'adiat', 'bcr', 'bgr', '2000-02-12', '0898839933', 1, '2023-02-16', 0),
	(11, '1009', 1, '3201041606000012', 'Dani', 'KSGB', 'Bogor', '2000-06-16', '082125859999', 1, '2023-02-16', 1),
	(12, '1010', 1, '32010415052002', 'fadil', 'ksgb', 'bogor', '2000-12-12', '08999999', 1, '2023-02-21', 0),
	(13, '1011', 1, '320104160600012', 'dani', 'ksgb', 'bogor', '2000-06-16', '08592999929', 1, '2023-02-23', 0);

-- Dumping data for table event_sepeda.users: ~1 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'sepeda@admin.com', 'admin', NULL, '$2y$10$V0.DxRw8MjYaPbOh9.ESV.9vk.LJAPRwOYPs.Qz8CzMVJFzfIGjGS', '1', NULL, NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
