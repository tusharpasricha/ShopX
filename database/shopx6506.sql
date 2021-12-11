-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 07:18 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopx6502`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `buyer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gstin` varchar(200) NOT NULL,
  `state` varchar(2000) NOT NULL,
  `city` varchar(2000) NOT NULL,
  `pincode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `caption` longtext NOT NULL,
  `photo` varchar(255) NOT NULL,
  `user_id` varchar(235) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `caption`, `photo`, `user_id`, `timestamp`) VALUES
(6, 'Books are the Best companions✨✨', 'b-1638972811.b', '1115', '2021-12-08 14:13:31'),
(8, 'No One is there for you! No worries cakes will never leave you', 'c-1638978148.c', '1111', '2021-12-08 15:42:28'),
(9, 'All new Arrival ! Do check out once👕👕 ', 'c-1638978230.c', '1112', '2021-12-08 15:43:50'),
(10, 'Knock knock ! Who is there ?  All new premium watch collection✨✨ ', 'w-1638978398.w', '1116', '2021-12-08 15:46:38'),
(11, 'Music is the real healer', 'm-1638978522.m', '1117', '2021-12-08 15:48:42'),
(12, 'Sale never seen before! Do check out', 's-1638978719.s', '1114', '2021-12-08 15:51:59'),
(13, 'Do checkout the Latest Iphones arrival', 'i-1638978785.i', '1114', '2021-12-08 15:53:05'),
(14, 'Make birthdays more special with our delicious cakes', 'm-1638979022.m', '1111', '2021-12-08 15:57:02'),
(15, 'Sports are important to be fit. dont be lazy play hard', 's-1638979129.s', '1113', '2021-12-08 15:58:49'),
(16, 'Do join the football camp sponsored by us', 's-1638979248.s', '1113', '2021-12-08 16:00:48'),
(17, 'Time is valueble and so are our watches. #RolexCollection', 'i-1638979361.i', '1116', '2021-12-08 16:02:41'),
(18, 'electronic watches are a new trend. Dont lag behind check our collection', 'i-1638979593.i', '1116', '2021-12-08 16:06:33');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `shop_id` int(15) NOT NULL,
  `product_desc` varchar(2000) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `shop_id`, `product_desc`, `product_title`, `price`, `status`, `image`, `timestamp`) VALUES
(110031, 1114, 'Most powerful notebooks. Fast M1 processors, incredible graphics.', 'Macbook Pro', 190990, 1, 'm-1638947164.m', '2021-12-08 07:06:04'),
(110032, 1114, 'Apple Watch Series 3 have a water resistance rating of 50 metres ', 'Iwatch', 20000, 1, 'w-1638947218.w', '2021-12-08 07:06:58'),
(110033, 1114, ' The earbuds come with Bluetooth with a great connectivity range.', 'Earpods', 5190, 1, 'a-1638971703.a', '2021-12-08 07:07:58'),
(110034, 1114, ' Capture your moment with the compact digital cameras & lenses from Sony', 'Sony Exp91', 59000, 1, 's-1638971795.s', '2021-12-08 07:09:03'),
(110035, 1114, 'Wide camera. Water resistant. Retina display. Privacy built in', 'Iphone11', 49800, 1, 'i-1638947399.i', '2021-12-08 07:09:59'),
(110036, 1117, 'plucked stringed musical instrument that probably originated in Spain ', 'Guitar', 15000, 1, 'g-1638947685.g', '2021-12-08 07:14:45'),
(110037, 1117, 'The violin, sometimes known as a fiddle, is a wooden chordophone (string instrument) in the violin family.Violins are also important in many varieties of folk music, including country music, bluegrass music, and in jazz.', 'Violin', 5900, 1, 'v-1638947975.v', '2021-12-08 07:19:35'),
(110038, 1117, 'a musical instrument with a drumlike body, a fretted neck, and usually four or five strings which may be plucked or strummed', 'Banjo', 7900, 1, 'b-1638948002.b', '2021-12-08 07:20:02'),
(110039, 1117, 'a wind instrument consisting of a conical or cylindrical usually metal tube, a cup-shaped mouthpiece, and a flared bell', 'trumpet', 6300, 1, 't-1638948025.t', '2021-12-08 07:20:25'),
(110040, 1117, ' musical instrument having steel wire strings that sound when struck by felt-covered hammers operated from a keyboard', 'Piano', 79900, 1, 'p-1638948054.p', '2021-12-08 07:20:54'),
(110041, 1117, 'a percussion instrument consisting of a hollow shell or cylinder with a drumhead stretched over one or both ends that is beaten with the hands or with some implement (such as a stick or wire brush)', 'Drums', 52000, 1, 'e-1638948084.e', '2021-12-08 07:21:24'),
(110042, 1117, 'a keyed woodwind instrument consisting of a cylindrical tube which is stopped at one end and which has a side hole over which air is blown to produce the tone and having a range from middle C upward for three octaves\n\n', 'Flute', 5100, 1, 'f-1638948105.f', '2021-12-08 07:21:45'),
(110043, 1116, 'Try out our premium collection of the all new xz series of titan Watches ', 'Titanxz', 80900, 1, 't-1638948333.t', '2021-12-08 07:25:33'),
(110044, 1116, 'Wearing a Rolex watch enables entry into a world of unlimited possibilities', 'Rolex Rseries', 120090, 1, 'w-1638948384.w', '2021-12-08 07:26:24'),
(110045, 1116, 'When the clean lines of the mid-century meet the modern looks of today, the results are key men\'s watches that represent the best of what we stand for', 'Fossil', 4999, 1, 'w-1638948410.w', '2021-12-08 07:26:50'),
(110046, 1116, 'Apple Watch is a wearable smartwatch that allows users to accomplish a variety of tasks, including making phone calls, sending text messages and reading email.', 'I watch', 80000, 1, 'w-1638948442.w', '2021-12-08 07:27:22'),
(110047, 1116, 'Not the insolent, sacrilegious or rude variety, but more the cheeky anti-authoritarian kind.', 'Fastrack', 8900, 1, 'w-1638948478.w', '2021-12-08 07:27:58'),
(110048, 1115, 'In this ground-breaking book, Clear reveals how these tiny changes will help you get 1 percent better every day.', 'Atomic Habit', 599, 1, 'a-1638948800.a', '2021-12-08 07:33:20'),
(110049, 1115, 'How to win friends and Influence People', 'Dale Cra', 850, 1, 'd-1638948845.d', '2021-12-08 07:34:05'),
(110050, 1115, 'In this generation-defining self-help guide, a superstar blogger cuts through the crap to show us how to stop trying to be “positive” all the time so that we can truly become better, happier people', 'Subtle art of not giving f', 499, 1, 'f-1638948877.f', '2021-12-08 07:34:37'),
(110051, 1115, 'Finding your ikigai is easier than you might think. This book will help you work out what your own ikigai really is, and equip you to change your life.', 'ikagai', 350, 1, 'i-1638948903.i', '2021-12-08 07:35:03'),
(110052, 1115, 'In The Psychology of Money, award-winning author Morgan Housel shares 19 short stories exploring the strange ways people think about money and teaches you how to make better sense of one of life’s most important topics.', 'Psychology of money', 750, 1, 'm-1638948945.m', '2021-12-08 07:35:45'),
(110053, 1113, 'a device for riding upon, usually while standing, consisting of a short, oblong piece of wood, plastic, fiberglass, or aluminum mounted on large roller-skate wheels, used on smooth surfaces and requiring better balance on the part of the rider than ordinary roller skates do', 'skate', 8900, 1, 's-1638949406.s', '2021-12-08 07:43:26'),
(110054, 1113, 'Try out out Carrom made out of the finest and the smoothest woods', 'Carrom', 1490, 1, 'c-1638949428.c', '2021-12-08 07:43:48'),
(110055, 1113, ' Here is the finest Basketball which will surely help you score good', 'Basket Ball', 2999, 1, 'b-1638949449.b', '2021-12-08 07:44:09'),
(110056, 1113, 'lets produce some heat on the grass with our finest quality football ', 'Football', 1999, 1, 'f-1638949467.f', '2021-12-08 07:44:27'),
(110057, 1113, 'Do try our boxing gloves made out of the finest material.', 'Boxing Gloves', 1600, 1, 'g-1638949493.g', '2021-12-08 07:44:53'),
(110058, 1113, 'a shoe designed to be worn for sports, exercising, or recreational activity, as racquetball, jogging, or aerobic dancing.', 'Sport shoes', 9999, 1, 's-1638949543.s', '2021-12-08 07:45:43'),
(110059, 1111, 'Fan of Doraemon? So are we. \nSo here comes the Dora cakes for all the doraemon fans full of sweet chocolate and choco chips', 'Dora Cake', 850, 1, 'j-1638950579.j', '2021-12-08 08:02:59'),
(110060, 1111, ' Surely the first choice for the people with premium taste', 'BlueBerry Cake ', 1500, 1, 'b-1638973928.b', '2021-12-08 08:03:37'),
(110061, 1111, ' We dont beleive in wars but bombs are must when comes to chocolate blast. Do try our exotic Choco Bomb ', 'Choco Bomb', 1599, 1, 'g-1638950649.g', '2021-12-08 08:04:09'),
(110062, 1111, ' Berries are love. We made it more special by adding choco to it.Do try out Choco Berry cake', 'Choco Berry', 359, 1, 'f-1638950675.f', '2021-12-08 08:04:35'),
(110063, 1111, 'Cupcakes are small, tasty snack cakes that are favored for their portability and portion-control. \nAll they need is you. So do try our tasty cup cakes.', 'Cup Cake', 250, 1, 'm-1638950709.m', '2021-12-08 08:05:09'),
(110064, 1111, '  Dont Worry this lava will not burn your skin but surely your apetite.', 'White Black Lava', 2000, 1, 'c-1638950750.c', '2021-12-08 08:05:50'),
(110065, 1111, ' breads are so boring so there comes our exotic Chocolate breads', 'Chocolate Bread', 210, 1, 'h-1638950815.h', '2021-12-08 08:06:55'),
(110066, 1111, 'A health cake full of yummy Dry fruits. Surely a great healthy feast ', 'Dry fruits Cake', 9500, 1, 'c-1638950864.c', '2021-12-08 08:07:44'),
(110067, 1111, 'No friends for the whole cake.\nDont worry Self love is enough and so is our pastry', 'Pastry', 6500, 1, 'g-1638950922.g', '2021-12-08 08:08:42'),
(110068, 1112, 'Here comes our premium collection of Tshirts.', 'T-Shirts', 1599, 1, 't-1638963526.t', '2021-12-08 11:38:46'),
(110069, 1112, 'Pure leather is a rare thing.But we here provides with the finest quality belts', 'Belts', 1999, 1, 'b-1638963582.b', '2021-12-08 11:39:42'),
(110070, 1112, ' Denim Jeans', 'Jeans', 3599, 1, 'j-1638964321.j', '2021-12-08 11:40:06'),
(110071, 1112, ' Jeans and other formal stuff maybe sometimes too harsh. be at ease and wear out comfortable shorts', 'Shorts', 899, 1, 's-1638964275.s', '2021-12-08 11:41:05'),
(110072, 1112, ' hello', 'Trousers', 1599, 1, 't-1638964369.t', '2021-12-08 11:41:28'),
(110073, 1112, 'yoyo', 'Shirts', 1199, 1, 's-1638963720.s', '2021-12-08 11:42:00');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL,
  `owner_id` varchar(25) NOT NULL,
  `gst_in` varchar(11) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `state` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `pincode` int(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`shop_id`, `owner_id`, `gst_in`, `shop_name`, `state`, `city`, `pincode`, `address`) VALUES
(1111, 'sarthak01', '9564783', 'Cake Corner', 'Uttar Pradesh', 'Moradabad', 244001, 'Gokuldhaam'),
(1112, 'tushar01', '98986564', 'FashionX', 'Uttar Pradesh', 'Delhi', 110001, 'CP'),
(1113, 'kabeer01', '5562326', 'Sports Hub', 'Maharastra', 'Mumbai', 230532, 'Powder Gali'),
(1114, 'jethiya01', '2265995', 'Gada Electronics', 'Maharastra', 'Mumbai', 125001, 'Powder Gali'),
(1115, 'gabbar01', '2654989', 'Gabbar Book Store', 'Uttar Pradesh', 'Mirzapur', 251320, 'Central Park'),
(1116, 'bunny01', '5969555', 'Watch Store', 'Goa', 'vasco da gama', 235001, 'Fort'),
(1117, 'shirley01', '596558', 'Melody Instruments', 'Rajasthan', 'Jaipur', 5655564, 'Hawa Mahal');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `cpassword` varchar(15) NOT NULL,
  `acc_type` int(5) NOT NULL DEFAULT 1102,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `name`, `password`, `cpassword`, `acc_type`, `time`) VALUES
(1200, 'bhavey01', 'bhavey@gmail.com', 'Bhavey Mittal', 'bhavey01', 'bhavey01', 1102, '2021-11-21 08:49:49'),
(1249, 'bunny01', 'bunny@gmail.com', 'Bunny', 'bunny011', 'bunny011', 1101, '2021-12-08 06:26:26'),
(1253, 'flyingbeast01', 'gourav@gmail.com', 'Gourav Taneja', 'flying01', 'flying01', 1102, '2021-12-08 06:54:56'),
(1248, 'gabbar01', 'Gabbar@gamil.com', 'Gabbar Singh', 'gabbar01', 'gabbar01', 1101, '2021-12-08 06:21:50'),
(1247, 'jethiya01', 'Jethalal@gmail.com', 'Jethalal Gada', 'jethiya01', 'jethiya01', 1101, '2021-12-08 06:14:04'),
(1246, 'kabeer01', 'kabir@gmail.com', 'Kabeer Singh', 'kabeer01', 'kabeer01', 1101, '2021-12-08 06:11:05'),
(1252, 'naman01', 'naman@gmail.com', 'Naman Gupta', 'naman011', 'naman011', 1102, '2021-12-08 06:44:51'),
(1244, 'sarthak01', 'tusharpasricha21@gmail.com', 'Sarthak Gupta', 'sarthak01', 'sarthak01', 1101, '2021-12-08 06:03:35'),
(1250, 'shirley01', 'shirley@gmail.com', 'Shirley Setia', 'shirley01', 'shirley01', 1101, '2021-12-08 06:36:24'),
(1245, 'tushar01', 'tushar@gmail.com', 'Tushar Pasricha', 'tushar01', 'tushar01', 1101, '2021-12-08 06:08:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`shop_id`),
  ADD UNIQUE KEY `shop_id` (`shop_id`),
  ADD KEY `Foreign_key` (`owner_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_name`),
  ADD UNIQUE KEY `UNIQUE` (`email`),
  ADD UNIQUE KEY `PRI` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110074;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1119;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1254;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `shop`
--
ALTER TABLE `shop`
  ADD CONSTRAINT `Foreign_key` FOREIGN KEY (`owner_id`) REFERENCES `users` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
