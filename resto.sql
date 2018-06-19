-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 19 Juin 2018 à 17:26
-- Version du serveur :  5.7.22-0ubuntu0.16.04.1
-- Version de PHP :  7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `resto`
--

-- --------------------------------------------------------

--
-- Structure de la table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `seat_number` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time` time NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `status` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `order_line`
--

CREATE TABLE `order_line` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `priceHT` int(11) NOT NULL,
  `tax` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `priceHT` decimal(50,2) NOT NULL,
  `tax` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `priceHT`, `tax`, `stock`, `image`, `is_active`, `created_at`, `update_at`) VALUES
(1, 'Bacon Burger', 'miam miam', '10.00', 10, 120, 'bacon_cheeseburger.jpg', 1, '2018-06-16 00:00:00', '2018-06-17 00:00:00'),
(2, 'Bagel Thon', 'pour ceux qui ne mangent pas de viande', '10.00', 10, 120, 'bagel_thon.jpg', 1, '2018-06-16 00:00:00', '2018-06-17 00:00:00'),
(3, 'Coca cola ', 'du sucre et de la cafeine :)', '3.00', 10, 1200, 'coca.jpg', 1, '2018-06-11 00:00:00', '2018-06-11 00:00:00'),
(4, 'Carrot Cake', 'le gateau qui rend aimable ', '5.00', 10, 100, 'carrot_cake.jpg', 1, '2018-06-17 00:00:00', '2018-06-17 00:00:00'),
(5, 'Donut Chocolat', 'le dessert préféré d\'Homer !', '4.00', 10, 1000, 'chocolate_donut.jpg', 1, '2018-06-17 00:00:00', '2018-06-17 00:00:00'),
(6, 'Cookies', 'Miam miam', '2.00', 10, 1500, 'cookies.jpg', 1, '2018-06-17 00:00:00', '2018-06-17 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `zipcode` varchar(200) NOT NULL,
  `city` varchar(200) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `birthdate`, `email`, `password`, `address`, `zipcode`, `city`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Victoire', 'Rabiller', '1983-07-07', 'rabillervic@g.com', 'rl836vO2Wg7T2', 'azep grtprgeq', '44000', 'Nantes', '0606060120', '2018-06-01 00:00:00', '2018-06-09 00:00:00'),
(2, 'Frederic', 'Laborde', '2018-01-01', 'fredericlaborde@gmail.com', 'rl836vO2Wg7T2', '12 rue de la ville en bois', '44000', 'Nantes', '0102030405', '2018-06-19 09:13:21', '2018-06-19 09:13:21'),
(3, 'Azerty', 'Laurence', '1983-07-07', 'laurence.azerty@gmail.com', 'rl836vO2Wg7T2', '12 rue de la ville en pierre', '11111', 'Londres', '+33681848484', '2018-06-19 09:14:16', '2018-06-19 09:14:16'),
(4, 'Ines', 'Adam', '1985-01-01', 'ines@gmail.com', 'rl836vO2Wg7T2', '12 rue des fleurs', '44000', 'nantes', '0201014152', '2018-06-19 09:15:28', '2018-06-19 09:15:28'),
(5, 'Laurent', 'Radix', '1991-10-12', 'laurentradix@gmail.com', 'rl836vO2Wg7T2', '1 rue de l\'academie', '44401', 'Nantes', '02020202', '2018-06-19 13:42:41', '2018-06-19 13:42:41'),
(6, 'madeleine', 'Ratata', '1992-12-12', 'ratata@ratata.fr', 'rl836vO2Wg7T2', '2 venelle de la foret', '45000', 'Nantes', '0000000', '2018-06-19 14:03:05', '2018-06-19 14:03:05'),
(7, 'Adam', 'Rabiller', '1991-10-19', 'adam.rabiller@test.fr', 'rl836vO2Wg7T2', '2 rue de la vie', '75000', 'Paris', '0240513502', '2018-06-19 16:13:05', '2018-06-19 16:13:05');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `order_line`
--
ALTER TABLE `order_line`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `order_line`
--
ALTER TABLE `order_line`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
