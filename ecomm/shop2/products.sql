-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 23, 2025 at 09:52 AM
-- Server version: 10.6.21-MariaDB-cll-lve
-- PHP Version: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `IXD608shopproducts`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `email`, `url`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'Oceanic Blend', '', 'www.oceanicwinds.com/oceanicblend', 18, 'coffee beans', '2025-05-15 06:02:42', '2025-05-15 06:02:42', 'Oceanic Winds\'s signature original medium roast blend.', 'oceanic-blend.png', 'oceanic-blend.png'),
(2, 'Atlantic Breeze', '', 'www.oceanicbreeze.com/atlanticbreeze', 18, 'coffee beans', '2025-05-15 06:06:31', '2025-05-15 06:06:31', 'Light roast ground. Great for morning kick off.', 'atlantic-breeze.png', 'atlantic-breeze.png'),
(3, 'Surfer\'s Delight', '', 'www.oceanicbreeze.com/surfersdelight', 18, 'coffee beans', '2025-05-15 06:06:31', '2025-05-15 06:06:31', 'Light roast ground', 'surfers-delight.png', 'surfers-delight.png'),
(4, 'Vanilla Sand', '', 'www.oceanicbreeze.com/vanillasand', 18, 'coffee beans', '2025-05-15 06:06:31', '2025-05-15 06:06:31', 'Premium vanilla coffee blend.', 'vanilla-sand.png', 'vanilla-sand.png'),
(5, 'Morning Brew', '', 'www.oceanicbreeze.com/morningbrew', 4, 'hot drink', '2025-05-15 06:06:31', '2025-05-15 06:06:31', 'Plain coffee is served in a 12-ounce (354 ml) cup', 'morning-brew.png', 'morning-brew.png'),
(6, 'Cappuccino', '', 'www.oceanicbreeze.com/cappiccino', 4, 'hot drink', '2025-05-15 06:06:31', '2025-05-15 06:06:31', 'Classic cappuccino served in a 12 ounces (354 ml) cup.', 'cappiccino.png', 'cappiccino.png'),
(7, 'Frozen Latte', '', 'www.oceanicbreeze.com/frozenlatte', 5, 'cold drink', '2025-05-15 06:06:31', '2025-05-15 06:06:31', 'Classic frozen latte served in a 12 ounces (354 ml) cup.', 'frozen-latte.png', 'frozen-latte.png'),
(8, 'Iced Coffee', '', 'www.oceanicbreeze.com/icedcoffee', 5, 'cold drink', '2025-05-15 06:06:31', '2025-05-15 06:06:31', 'Iced Coffee served in a 12 ounces (354 ml) cup.', 'iced-coffee.png', 'iced-coffee.png'),
(9, 'Double Chocolate Muffins', '', 'www.oceanicbreeze.com/doublechocolatemuffins', 7, 'pastry', '2025-05-15 06:15:45', '2025-05-15 06:15:45', '4 Chocolate chip muffins.', 'chocolate-muffin.png', 'chocolate-muffin.png'),
(10, 'Bagels', '', 'www.oceanicbreeze.com/bagels', 7, 'pastry', '2025-05-15 06:15:45', '2025-05-15 06:15:45', '2 bagels with a cream cheese cup.', 'bagel.png', 'bagel.png'),
(11, 'Frappiccino', '', 'www.oceanicbreeze.com/frappiccino', 7, 'cold drink', '2025-05-15 06:22:13', '2025-05-15 06:22:13', 'Classic frappiccino served in a 12 ounces (354 ml) cup.', 'frappuccino.png', 'frappuccino.png'),
(12, 'Cheese Danish', '', 'www.oceanicbreeze.com/cheesedanish', 5, 'pastry', '2025-05-15 06:22:13', '2025-05-15 06:22:13', 'Fluffy cheese pastry served warm.', 'danish.png', 'danish.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
