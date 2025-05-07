-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 06, 2025 at 07:07 PM
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
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(32) NOT NULL,
  `url` int(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `date added` date NOT NULL DEFAULT current_timestamp(),
  `images` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `name`, `description`, `category`, `url`, `quantity`, `price`, `date added`, `images`) VALUES
(1, 'Oceanic Blend', 'Oceanic Winds\'s signature original medium roast blend.', 'coffee beans', 0, 200, 18, '2025-05-06', 0),
(2, 'Atlantic Breeze', 'Light roast ground. Great for morning kick off.', 'coffee beans', 0, 200, 18, '2025-05-06', 0),
(3, 'Surfer\'s Delight', 'Light roast ground', 'coffee beans', 0, 200, 18, '2025-05-06', 0),
(4, 'Vanilla Sand', 'Premium vanilla coffee blend.', 'coffee beans', 0, 200, 18, '2025-05-06', 0),
(5, 'Morning Brew', 'Plain coffee is served in a 12-ounce (354 ml) cup.', 'hot drink', 0, 20, 4, '2025-05-06', 0),
(6, 'Cappuccino', 'Classic cappuccino served in a 12 ounces (354 ml) cup.', 'hot drink', 0, 20, 4, '2025-05-06', 0),
(7, 'Frozen Latte', 'Classic frozen latte served in a 12 ounces (354 ml) cup.', 'cold drink', 0, 20, 5, '2025-05-06', 0),
(8, 'Iced Coffee', 'Iced Coffee served in a 12 ounces (354 ml) cup.', 'cold drinks', 0, 20, 6, '2025-05-06', 0),
(9, 'Double Chocolate Muffins', '4 Chocolate chip muffins.', 'pastry', 0, 20, 7, '2025-05-06', 0),
(10, 'Bagels', '2 bagels with a cream cheese cup', 'pastry', 0, 20, 7, '2025-05-06', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
