-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Lis 2018, 20:13
-- Wersja serwera: 10.1.36-MariaDB
-- Wersja PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `test`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` text,
  `date_add` datetime DEFAULT NULL,
  `autor` varchar(100) DEFAULT NULL,
  `id_categories` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `date_add`, `autor`, `id_categories`) VALUES
(5, 'asd', 'To jest przykÅ‚adowy artykuÅ‚.\r\nTestuje dziaÅ‚anie bra', '2018-11-14 19:09:44', NULL, 4),
(7, 'Dane kontaktowe do firmy', 'Oto email do firmy: arek@herkules.com.pl', '2018-11-14 19:58:05', NULL, 7);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(4, 'AktualnoÅ›ci'),
(5, 'Strona gÅ‚Ã³wna'),
(7, 'Kontakt'),
(8, 'Galeria');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_09_27_185340_test', 1),
(2, '2018_09_27_185340_tests', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tests`
--

CREATE TABLE `tests` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@example.com', NULL, '$2y$10$w8B5ltBdWYXca8gGh4I1rec5FMmwUWdcXVVM.abQvTgSS2DQDk8bS', NULL, '2018-09-27 17:15:23', '2018-09-27 17:15:23'),
(2, 'user', 'user@example.com', NULL, '$2y$10$jBpeC6vdbf7BixgLX6BOwOwsxF.dwNb4J48Ux6gtfwTCvVxrOliFu', NULL, '2018-09-27 17:16:39', '2018-09-27 17:16:39'),
(3, 'user', 'user@example.com', NULL, '$2y$10$mmJgySBTsUnVZCQ84aLPMOx76GRlwEx1nU3YbbhmdccUXbxeIaWSy', NULL, '2018-09-27 17:17:30', '2018-09-27 17:17:30'),
(4, 'user', 'user@example.com', NULL, '$2y$10$YTS1hhw7j1DjwZbgQ5Hgl.klLQci/0IsTLs9kj2W7GWtZFXnBSkR6', NULL, '2018-09-27 17:19:39', '2018-09-27 17:19:39'),
(5, 'user', 'user@example.com', NULL, '$2y$10$sRA3i6TOpkq0BnOe4QnTIujZmdQ/nAz2Q0i8uMkaqiC.BS0TOHHum', NULL, '2018-09-27 17:26:04', '2018-09-27 17:26:04'),
(6, 'user', 'user@example.com', NULL, '$2y$10$48Iw1Ql0Z91rqbrlmWJ./OF1eE.S.mi3XLtf.l5Nrcx4QZKJ1amGm', NULL, '2018-09-27 17:26:19', '2018-09-27 17:26:19'),
(7, 'user', 'user@example.com', NULL, '$2y$10$TZoN2VO5ie45EOvo0YQLyeA9zlMjxNeDvY7JHDX9rucVryJNFxmKa', NULL, '2018-09-27 17:26:27', '2018-09-27 17:26:27'),
(8, 'user', 'user@example.com', NULL, '$2y$10$1mInmct6OlCHwYorJSqXKumr.nWobyJxJC1./fK6RvWvTq7aJpMMy', NULL, '2018-09-27 17:26:48', '2018-09-27 17:26:48'),
(9, 'user', 'user@example.com', NULL, '$2y$10$qmrLkXF.R8kMYJFyrOZfD.HtNNYtIQr/qpxBWk5jt71.HjqPlHKVi', NULL, '2018-09-27 17:27:22', '2018-09-27 17:27:22'),
(10, 'user', 'user@example.com', NULL, '$2y$10$vXS91iB1fEeeKscDqY54C.dJ69Uohq3mtX51rDQ2PfcLaK.RL8K5e', NULL, '2018-09-27 17:28:01', '2018-09-27 17:28:01'),
(11, 'user', 'user@example.com', NULL, '$2y$10$YdynWXjBQ1OA5IkuV409ne2z61IfV6vW.qTlUBlZG/kek9.9njLTK', NULL, '2018-09-27 17:28:43', '2018-09-27 17:28:43'),
(12, 'user', 'user@example.com', NULL, '$2y$10$D8Umo.jMoRvve6xuzir9O.SSLJ5QiZRQvVcrVJNm/Fch2mJPtP8ui', NULL, '2018-09-27 17:29:54', '2018-09-27 17:29:54'),
(13, 'user', 'user@example.com', NULL, '$2y$10$4D0QE2R1UoLyFyUDkDDYjeivy8VvlCvA4MhPlLLn8gueyrL1AL.uW', NULL, '2018-09-27 17:30:43', '2018-09-27 17:30:43'),
(14, 'user', 'user@example.com', NULL, '$2y$10$UQxcXQfX99FNe4izBkV7EeoOq2WxuGmcvnuNd8vVk6MWAxCEN7Csq', NULL, '2018-09-27 17:30:51', '2018-09-27 17:30:51'),
(15, 'user', 'user@example.com', NULL, '$2y$10$UluWrhiF1io47V/ytgAp5OYTuCubn22MdkZ6fAHCCeW4LeyV8bFxq', NULL, '2018-09-27 17:31:16', '2018-09-27 17:31:16'),
(16, 'user', 'user@example.com', NULL, '$2y$10$1bUDnIqIwoLQ1vkXgiljROkca1QfBlES0qBtIld7tus.hHqWNZ9aq', NULL, '2018-09-27 17:33:46', '2018-09-27 17:33:46');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categories` (`id_categories`);

--
-- Indeksy dla tabeli `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
