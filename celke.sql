-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 19/02/2025 às 22:01
-- Versão do servidor: 9.1.0
-- Versão do PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `celke`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `username` varchar(220) NOT NULL,
  `password` varchar(220) NOT NULL,
  `image` varchar(220) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `image`, `created`, `modified`) VALUES
(1, 'root', 'root@root.com', 'root', '123456', 'image1.png', '2025-02-05 22:10:49', '2025-02-05 22:10:49'),
(2, 'ruUoot1', 'root1@root1.com', 'root1', '$2y$10$tnJVnYfl3cOh8KTFQ6AIg.v4UUsTbNWqN2eFXcqeK.i4c1fZfLfA.', 'captura-de-tela-2025-01-30-152727.png', '2025-02-05 22:16:58', '2025-02-16 15:48:24'),
(3, 'admin', 'admin@admin.com', 'admin', '$2y$10$c6Li4wwmXoMWy9fugHxAruS5FWhVy3t/zmTMbIErvw6zi9..1ml/e', 'image3.jpg', '2025-02-05 22:53:59', '2025-02-05 22:53:59'),
(14, 'root9', 'root9@root9.com', 'root9', '$2y$10$nuFXds4CFhmJq/ib9FIogO.qZQVgRHO1RyQR7WcBV0XDVWwaHpwh6', NULL, '2025-02-16 23:42:27', '2025-02-16 23:42:27');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
