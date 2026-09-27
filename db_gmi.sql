-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 23 Sep 2026 pada 12.57
-- Versi server: 10.5.27-MariaDB-cll-lve
-- Versi PHP: 8.1.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Basis data: `amaz9546_db_gmi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `filepath` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `images`
--

INSERT INTO `images` (`id`, `filepath`, `created_at`, `updated_at`) VALUES
(99, 'images/1732115655_IMG-20241120-WA0054.jpg', '2025-02-19 13:15:13', '2024-11-20 08:14:15'),
(100, 'images/1732115655_IMG-20241120-WA0056.jpg', '2025-02-19 13:15:22', '2024-11-20 08:14:15'),
(101, 'images/1732115655_IMG-20241120-WA0055.jpg', '2025-02-19 13:15:39', '2024-11-20 08:14:15'),
(102, 'images/1732115655_IMG-20241120-WA0052.jpg', '2025-02-19 13:15:47', '2024-11-20 08:14:15'),
(103, 'images/1732115655_IMG-20241120-WA0053.jpg', '2025-02-19 13:15:54', '2024-11-20 08:14:15'),
(104, 'images/1732116084_IMG-20241120-WA0051.jpg', '2025-02-19 13:16:01', '2024-11-20 08:21:24'),
(105, 'images/1732116084_IMG-20241120-WA0050.jpg', '2025-02-19 13:16:15', '2024-11-20 08:21:24'),
(106, 'images/1732116084_IMG-20241120-WA0046.jpg', '2025-02-19 13:16:22', '2024-11-20 08:21:24'),
(107, 'images/1732116084_IMG-20241120-WA0047.jpg', '2025-02-19 13:16:29', '2024-11-20 08:21:24'),
(108, 'images/1732116084_IMG-20241120-WA0049.jpg', '2025-02-19 13:17:13', '2024-11-20 08:21:24'),
(109, 'images/1732116084_IMG-20241120-WA0044.jpg', '2025-02-19 13:17:13', '2024-11-20 08:21:24'),
(110, 'images/1732116084_IMG-20241120-WA0045.jpg', '2025-02-19 13:17:13', '2024-11-20 08:21:24'),
(111, 'images/1732116084_IMG-20241120-WA0041.jpg', '2025-02-19 13:17:13', '2024-11-20 08:21:24'),
(112, 'images/1732116084_IMG-20241120-WA0038.jpg', '2025-02-19 13:17:13', '2024-11-20 08:21:24'),
(113, 'images/1732116084_IMG-20241120-WA0035.jpg', '2025-02-19 13:17:13', '2024-11-20 08:21:24'),
(114, 'images/1732116084_IMG-20241120-WA0039.jpg', '2025-02-19 13:17:13', '2024-11-20 08:21:24'),
(115, 'images/1732116118_IMG-20241120-WA0032.jpg', '2025-02-19 13:17:13', '2024-11-20 08:21:58'),
(116, 'images/1732116118_IMG-20241120-WA0033.jpg', '2025-02-19 13:17:13', '2024-11-20 08:21:58'),
(117, 'images/1732116118_IMG-20241120-WA0028.jpg', '2025-02-19 13:17:13', '2024-11-20 08:21:58'),
(118, 'images/1732116118_IMG-20241120-WA0029.jpg', '2025-02-19 13:17:13', '2024-11-20 08:21:58'),
(119, 'images/1732116118_IMG-20241120-WA0022.jpg', '2025-02-19 13:17:13', '2024-11-20 08:21:58'),
(120, 'images/1732116118_IMG-20241120-WA0024.jpg', '2025-02-19 13:17:13', '2024-11-20 08:21:58'),
(121, 'images/1732116118_IMG-20241120-WA0026.jpg', '2025-02-19 13:17:13', '2024-11-20 08:21:58'),
(122, 'images/1732116118_IMG-20241120-WA0025.jpg', '2025-02-19 13:17:13', '2024-11-20 08:21:58'),
(123, 'images/1732116118_IMG-20241120-WA0021.jpg', '2025-02-19 13:17:13', '2024-11-20 08:21:58'),
(124, 'images/1732116118_IMG-20241120-WA0023.jpg', '2025-02-19 13:17:13', '2024-11-20 08:21:58'),
(125, 'images/1732116118_IMG-20241120-WA0027.jpg', '2025-02-19 13:17:13', '2024-11-20 08:21:58'),
(126, 'images/1732116118_IMG-20241120-WA0017.jpg', '2025-02-19 13:17:13', '2024-11-20 08:21:58'),
(127, 'images/1732116118_IMG-20241120-WA0018.jpg', '2025-02-19 13:17:13', '2024-11-20 08:21:58'),
(128, 'images/1732116118_IMG-20241120-WA0016.jpg', '2025-02-19 13:17:13', '2024-11-20 08:21:58'),
(129, 'images/1732116118_IMG-20241120-WA0014.jpg', '2025-02-19 13:17:13', '2024-11-20 08:21:58'),
(130, 'images/1732116118_IMG-20241120-WA0015.jpg', '2025-02-19 13:17:13', '2024-11-20 08:21:58'),
(131, 'images/1732116146_IMG-20241120-WA0011.jpg', '2025-02-19 13:17:13', '2024-11-20 08:22:26'),
(132, 'images/1732116146_IMG-20241120-WA0012.jpg', '2025-02-19 13:17:13', '2024-11-20 08:22:26'),
(133, 'images/1732116146_IMG-20241120-WA0013.jpg', '2025-02-19 13:17:13', '2024-11-20 08:22:26'),
(134, 'images/1732116146_IMG-20241120-WA0010.jpg', '2025-02-19 13:17:13', '2024-11-20 08:22:26'),
(135, 'images/1733996388_IMG-20241212-WA0012.jpg', '2025-02-19 13:17:13', '2024-12-12 02:39:48'),
(136, 'images/1733996410_IMG-20241212-WA0012.jpg', '2025-02-19 13:17:13', '2024-12-12 02:40:10'),
(137, 'images/1733996410_IMG-20241212-WA0012.jpg', '2025-02-19 13:17:13', '2024-12-12 02:40:10'),
(138, 'images/1738420559_Screenshot_2025_0201_213539.jpg', '2025-02-19 13:17:13', '2025-02-01 07:35:59'),
(139, 'images/1738420559_Screenshot_2025_0201_213531.jpg', '2025-02-19 13:17:13', '2025-02-01 07:35:59'),
(141, 'images/1744968384_Manual Book Lpk Gmi Jepang (Tanpa WA).jpg', '2025-04-18 02:26:24', '2025-04-18 02:26:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indeks untuk tabel yang dibuang
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
