-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 01:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agromart`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `image` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `description`, `date`, `image`, `status`) VALUES
(1, 'Cras tincidunt elementum leo.', 'Sed venenatis euismod massa, ut dapibus est pretium nec. Curabitur fringilla velit mauris, quis sodales turpis semper vestibulum. Suspendisse potenti. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras tincidunt elementum leo. Sed venenatis euismod massa, ut dapibus est pretium nec. Curabitur fringilla velit mauris, quis sodales turpis semper vestibulum. Suspendisse potenti. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras tincidunt elementum leo.', '2021-04-12 16:04:06', 'article/art1.jpg', 1),
(2, 'Cras tincidunt elementum leo.', 'Sed venenatis euismod massa, ut dapibus est pretium nec. Curabitur fringilla velit mauris, quis sodales turpis semper vestibulum. Suspendisse potenti. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras tincidunt elementum leo. Sed venenatis euismod massa, ut dapibus est pretium nec. Curabitur fringilla velit mauris, quis sodales turpis semper vestibulum. Suspendisse potenti. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras tincidunt elementum leo.', '2021-04-12 16:04:10', 'article/art2.jpg', 1),
(3, 'Cras tincidunt elementum leo.', 'Sed venenatis euismod massa, ut dapibus est pretium nec. Curabitur fringilla velit mauris, quis sodales turpis semper vestibulum. Suspendisse potenti. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras tincidunt elementum leo. Sed venenatis euismod massa, ut dapibus est pretium nec. Curabitur fringilla velit mauris, quis sodales turpis semper vestibulum. Suspendisse potenti. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras tincidunt elementum leo.', '2021-04-12 16:04:12', 'article/art3.jpg', 1),
(4, 'Cras tincidunt elementum leo.', 'Sed venenatis euismod massa, ut dapibus est pretium nec. Curabitur fringilla velit mauris, quis sodales turpis semper vestibulum. Suspendisse potenti. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras tincidunt elementum leo. Sed venenatis euismod massa, ut dapibus est pretium nec. Curabitur fringilla velit mauris, quis sodales turpis semper vestibulum. Suspendisse potenti. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras tincidunt elementum leo.', '2021-04-12 16:04:14', 'article/art4.jpg', 1),
(5, 'dryfruits', 'almond,cahsew', '2024-01-05 12:01:20', '/Images/productImage/1704436280088.jpg', 0),
(6, 'test', 'testing', '2024-01-25 07:16:07', '', 0),
(7, 'Ram mandir', 'inugrated on 22 jan', '2024-01-25 07:18:56', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `jobtype` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL,
  `city` varchar(25) NOT NULL,
  `salary` varchar(25) DEFAULT NULL,
  `farmerid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `title`, `description`, `jobtype`, `date`, `status`, `city`, `salary`, `farmerid`) VALUES
(2, 'Plumber Required', 'Urgent requirement. Plumber required ', 'Plumber', '2021-04-13 15:47:50', 1, 'Sulya', '15000', 2),
(3, 'Labor Required', 'Labor required for farming work..', 'Labor', '2021-04-13 15:47:47', 1, 'Belthangady', '8000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `image` varchar(50) NOT NULL,
  `color` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `description`, `status`, `date`, `image`, `color`) VALUES
(1, 'Fruits', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In suscipit dignissim augue, sed molestie quam euismod sed. Cras scelerisque nibh nec gravida molestie. Mauris laoreet erat urna, ut tristique urna ultrices non. Curabitur hendrerit pharetra ligula ut vehicula. Cras eget dui sem. Morbi condimentum ex tellus. Ut suscipit in est in pulvinar. Nam aliquet venenatis mauris nec facilisis. Cras purus lorem, pellentesque ut quam vel, interdum ultrices ipsum. Donec auctor, nisi vel consectetur maximus, neque libero tempus est, ut tempor lacus neque sit amet leo. Phasellus turpis odio, congue id libero at, efficitur iaculis diam. Etiam ac leo nec est tristique dignissim sit amet sollicitudin massa. Ut tincidunt odio ac sapien fringilla pulvinar. Vestibulum dictum nulla a tristique suscipit. Integer justo augue, dapibus sed lobortis quis, vestibulum sit amet urna.', 1, '2021-04-13 10:41:31', 'category/fruits.jpg', '#ff6b6b'),
(2, 'Berries', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In suscipit dignissim augue, sed molestie quam euismod sed. Cras scelerisque nibh nec gravida molestie. Mauris laoreet erat urna, ut tristique urna ultrices non. Curabitur hendrerit pharetra ligula ut vehicula. Cras eget dui sem. Morbi condimentum ex tellus. Ut suscipit in est in pulvinar. Nam aliquet venenatis mauris nec facilisis. Cras purus lorem, pellentesque ut quam vel, interdum ultrices ipsum. Donec auctor, nisi vel consectetur maximus, neque libero tempus est, ut tempor lacus neque sit amet leo. Phasellus turpis odio, congue id libero at, efficitur iaculis diam. Etiam ac leo nec est tristique dignissim sit amet sollicitudin massa. Ut tincidunt odio ac sapien fringilla pulvinar. Vestibulum dictum nulla a tristique suscipit. Integer justo augue, dapibus sed lobortis quis, vestibulum sit amet urna.', 1, '2021-04-13 10:41:47', 'category/berries.jpg', '#f06595'),
(3, 'Vegetable', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In suscipit dignissim augue, sed molestie quam euismod sed. Cras scelerisque nibh nec gravida molestie. Mauris laoreet erat urna, ut tristique urna ultrices non. Curabitur hendrerit pharetra ligula ut vehicula. Cras eget dui sem. Morbi condimentum ex tellus. Ut suscipit in est in pulvinar. Nam aliquet venenatis mauris nec facilisis. Cras purus lorem, pellentesque ut quam vel, interdum ultrices ipsum. Donec auctor, nisi vel consectetur maximus, neque libero tempus est, ut tempor lacus neque sit amet leo. Phasellus turpis odio, congue id libero at, efficitur iaculis diam. Etiam ac leo nec est tristique dignissim sit amet sollicitudin massa. Ut tincidunt odio ac sapien fringilla pulvinar. Vestibulum dictum nulla a tristique suscipit. Integer justo augue, dapibus sed lobortis quis, vestibulum sit amet urna.', 1, '2021-04-13 10:41:31', 'category/vegetables.jpg', '#ff922b'),
(4, 'Equipments', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In suscipit dignissim augue, sed molestie quam euismod sed. Cras scelerisque nibh nec gravida molestie. Mauris laoreet erat urna, ut tristique urna ultrices non. Curabitur hendrerit pharetra ligula ut vehicula. Cras eget dui sem. Morbi condimentum ex tellus. Ut suscipit in est in pulvinar. Nam aliquet venenatis mauris nec facilisis. Cras purus lorem, pellentesque ut quam vel, interdum ultrices ipsum. Donec auctor, nisi vel consectetur maximus, neque libero tempus est, ut tempor lacus neque sit amet leo. Phasellus turpis odio, congue id libero at, efficitur iaculis diam. Etiam ac leo nec est tristique dignissim sit amet sollicitudin massa. Ut tincidunt odio ac sapien fringilla pulvinar. Vestibulum dictum nulla a tristique suscipit. Integer justo augue, dapibus sed lobortis quis, vestibulum sit amet urna.', 1, '2021-04-13 10:41:47', 'category/equipments.jpg', '#51cf66');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `productid` int(10) NOT NULL,
  `payment_number` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `price` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `userid`, `productid`, `payment_number`, `status`, `date`, `price`) VALUES
(1, 1, 3, 'PAY82825ONF', 1, '2021-04-16 15:33:46', '42'),
(4, 5, 19, 'PAY31881ONF', 1, '2021-07-15 20:22:50', '100'),
(6, 5, 9, 'PAY32898ONF', 1, '2021-07-16 11:39:32', '42'),
(7, 5, 4, 'PAY40430ONF', 1, '2021-07-16 11:39:56', '234'),
(8, 5, 2, 'PAY24308ONF', 1, '2021-07-16 11:40:19', '234'),
(9, 5, 3, 'PAY25644ONF', 1, '2021-07-16 11:41:08', '42'),
(10, 5, 2, 'PAY48405ONF', 1, '2021-07-16 11:41:39', '234'),
(18, 1, 6, '123456', 1, '2024-01-29 07:13:30', '234'),
(19, 1, 2, 'PAY361628', 1, '2024-01-29 07:16:22', '234'),
(20, 1, 1, 'PAY152737', 1, '2024-02-06 07:05:48', '42'),
(21, 1, 1, 'PAY328452', 1, '2024-03-14 08:34:58', '42');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL,
  `pricetype` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL,
  `userid` int(10) NOT NULL,
  `categoryid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `description`, `image`, `price`, `pricetype`, `date`, `status`, `userid`, `categoryid`) VALUES
(1, 'Apple', 'Crisp and refreshing, the apple is a timeless favorite among fruit lovers worldwide.Apples come in a variety of colors and textures, from the crisp crunch of a Fuji to the tender sweetness of a Honeycrisp. ', 'apple.jpg', '42', ' (1 kg)', '2021-04-15 15:25:05', 1, 2, 1),
(2, 'Mango', 'Known as the \"king of fruits,\" the mango entices with its intoxicating aroma, silky texture, and tropical sweetness.Mangoes are a sensory delight that evoke images of sun-kissed beaches and lush tropical landscapes. ', 'mangoes.webp', '234', ' (1 kg)', '2021-04-15 15:25:12', 1, 2, 1),
(3, 'Banana', 'Bananas are nature\'s perfect snack, offering a convenient source of energy, nutrients, and potassium in a portable package. With their creamy texture and naturally sweet flavor, bananas are beloved by people of all ages. ', 'banana.jpg', '42', ' (1 kg)', '2021-04-15 15:25:05', 1, 2, 1),
(4, 'Pineapple', 'The pineapple is a symbol of hospitality and tropical indulgence, with its golden hue, spiky crown, and juicy flesh reminiscent of sunny shores and exotic locales.  ', 'pineapple1.webp', '234', ' (1 kg)', '2021-04-15 15:25:12', 1, 2, 1),
(5, 'Shovel', 'The shovel is a trusty companion for gardeners, landscapers, and farmers alike, revered for its versatility and durability. With its sturdy blade and ergonomic handle, the shovel is capable of digging, lifting, and moving soil, mulch, gravel, and other materials with ease. ', '1713859037.webp', '550', ' (1 piece)', '2021-04-15 15:25:05', 1, 2, 4),
(7, 'Strawberry', 'Strawberries are nature\'s sweet gems, cherished for their juicy texture, vibrant color, and irresistible flavor. Strawberries are a beloved symbol of summer and indulgence. ', 'straw.webp', '140', ' (1 kg)', '2021-04-15 15:25:05', 1, 2, 2),
(8, 'Blueberries', 'Blueberries are nature\'s tiny treasures, bursting with flavor, antioxidants, and nutritional benefits.Blueberries offer a sweet-tart flavor and juicy texture that tantalize the taste buds.', '1713858577.webp', '234', ' (1 kg)', '2021-04-15 15:25:12', 1, 2, 2),
(9, 'Tomato', 'Tomatoes are a kitchen staple beloved for their versatility, vibrant color, and rich flavor. Whether enjoyed raw in salads, roasted in sauces, or sliced atop sandwiches, tomatoes add a burst of freshness and acidity to any dish', 'tomato1.webp', '42', ' (1 kg)', '2021-04-15 15:25:05', 1, 2, 3),
(25, 'Cabbage', 'Cabbage is a humble yet versatile vegetable prized for its crisp texture, mild flavor, and nutritional benefits. Whether enjoyed raw in salads,  or cooked in soups and stir-fries, cabbage adds crunch and depth to a wide range of dishes.', '1713864091.webp', '42', '1', '2024-04-23 11:21:31', 1, 9, 3),
(26, 'Rake', 'The rake is an essential tool in the gardener\'s arsenal, designed to gather and remove debris, leaves, and other unwanted materials from lawns, gardens, and fields.With its sturdy handle and row of tines, the rake efficiently collects and redistributes soil.', '1713864474.webp', '450', '1', '2024-04-23 11:27:54', 1, 9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `subsidy`
--

CREATE TABLE `subsidy` (
  `subsidy_id` int(11) NOT NULL,
  `subsidy_no` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `adhar_no` varchar(100) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `otp_status` varchar(50) NOT NULL,
  `otp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subsidy`
--

INSERT INTO `subsidy` (`subsidy_id`, `subsidy_no`, `user_id`, `name`, `price`, `subject`, `adhar_no`, `phone`, `email`, `description`, `status`, `date`, `otp_status`, `otp`) VALUES
(9, 'SUB57634', 2, 'Allen', '20000', 'subsidy for growing crops', '12345678945612', '7894561234', 'yashwathkulal@gmail.com', 'subsidy funds', 'Approved', '2024-03-16', 'verified', '962271');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(25) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL,
  `userRole` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `contact`, `email`, `password`, `date`, `status`, `userRole`) VALUES
(1, 'Dharmendar', '8569856952', 'dar@gmail.com', '2', '2021-04-12 16:19:57', 1, 'User'),
(2, 'Akash k', '9865326535', 'akashk@gmail.com', '123', '2021-04-12 16:19:57', 1, 'Farmer'),
(5, 'jee', '9769696969', 'manojkpajeer127@gmail.com', 'MAnoj143@@', '2021-07-15 17:42:29', 1, 'User'),
(6, 'admin', '1234', 'admin@gmail.com', '34', '2024-01-03 14:44:53', 1, 'Admin'),
(7, 'varsha', '123456789', 'acharvarsha990@gmail.com', 'PAS20774', '2024-01-05 12:04:07', 0, 'Farmer'),
(9, 'roy', '1224554545', 'roy@gmail.com', '1234', '2024-01-25 08:15:57', 1, 'Farmer'),
(11, 'manoj', '1234567894', 'manu@gmail.com', '12', '2024-03-14 12:10:44', 1, 'NGO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subsidy`
--
ALTER TABLE `subsidy`
  ADD PRIMARY KEY (`subsidy_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `subsidy`
--
ALTER TABLE `subsidy`
  MODIFY `subsidy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
