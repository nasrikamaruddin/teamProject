-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 11:27 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easypeasy`
--
CREATE DATABASE IF NOT EXISTS `easypeasy` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `easypeasy`;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `HistoryID` int(10) NOT NULL,
  `Orderid` int(10) DEFAULT NULL,
  `UserID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`HistoryID`, `Orderid`, `UserID`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

CREATE TABLE `ingredient` (
  `IngredientID` int(10) NOT NULL,
  `ingredientname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredient`
--

INSERT INTO `ingredient` (`IngredientID`, `ingredientname`) VALUES
(1, 'Salt'),
(2, 'pepper'),
(3, 'onion'),
(4, 'garlic'),
(5, 'chicken');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `MessageID` int(10) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`MessageID`, `email`, `message`) VALUES
(6, 'teeeeeeesy@mail.com', 'olalalalalaala bilipala'),
(7, 'jz@mail.com', 'wahahahaah mammamama'),
(8, 'chikachika@walaa.com', 'falalaalal gugulala'),
(9, 'jzlow132@gmail.com', 'hey. lorem ipsum kinda bull shit. sdfgdfhgfdgfdggxf z. close but no cigar? or XXXX'),
(11, 'leehuing17@gmail.com', 'hey yooo!'),
(12, 'nelsonlee0413@gmail.com', 'hmmm. just a suggestion. blablablablabla. im so cool.');

-- --------------------------------------------------------

--
-- Table structure for table `myorder`
--

CREATE TABLE `myorder` (
  `OrderID` int(10) NOT NULL,
  `productid1` int(10) DEFAULT NULL,
  `productid2` int(10) DEFAULT NULL,
  `productid3` int(10) DEFAULT NULL,
  `orderdate` date DEFAULT NULL,
  `deliverydate` date NOT NULL,
  `deliverytime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myorder`
--

INSERT INTO `myorder` (`OrderID`, `productid1`, `productid2`, `productid3`, `orderdate`, `deliverydate`, `deliverytime`) VALUES
(1, 1, 5, 3, '2017-11-30', '2017-12-05', '7-8am'),
(2, 2, 4, 1, '2017-11-30', '0000-00-00', ''),
(3, 3, 5, 1, '2017-11-30', '0000-00-00', ''),
(4, 1, 5, 1, '2017-11-30', '0000-00-00', ''),
(5, 5, 4, 3, '2017-11-30', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `PlanID` int(10) NOT NULL,
  `planname` varchar(50) DEFAULT NULL,
  `planprice` decimal(9,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`PlanID`, `planname`, `planprice`) VALUES
(1, 'standard', '70.00'),
(2, 'family', '130.00'),
(3, 'party', '190.00');

-- --------------------------------------------------------

--
-- Table structure for table `preference`
--

CREATE TABLE `preference` (
  `PrefID` int(10) NOT NULL,
  `prefname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preference`
--

INSERT INTO `preference` (`PrefID`, `prefname`) VALUES
(1, 'Egg'),
(2, 'Nuts'),
(3, 'Dairy'),
(4, 'Beef'),
(5, 'Vegetarian');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(10) NOT NULL,
  `productname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `productname`) VALUES
(1, 'Black Pepper Lamb Chop'),
(2, 'Mushroom Chicken'),
(3, 'Fish N Chip'),
(4, 'Spicy Chicken McDeluxe'),
(5, 'Chizza');

-- --------------------------------------------------------

--
-- Table structure for table `productingredient`
--

CREATE TABLE `productingredient` (
  `ProductID` int(10) DEFAULT NULL,
  `IngredientID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productingredient`
--

INSERT INTO `productingredient` (`ProductID`, `IngredientID`) VALUES
(1, 5),
(1, 1),
(1, 2),
(5, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(10) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `prefid` int(10) DEFAULT NULL,
  `planid` int(10) DEFAULT NULL,
  `orderid` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `password`, `fname`, `lname`, `email`, `address`, `prefid`, `planid`, `orderid`) VALUES
(1, '123123123', 'ng', 'leehui', 'leehui@gmail.com', '12, pulau pinang.', 3, 2, 1),
(2, '12341234', 'low', 'jinzhi', 'jinzhi@gmail.com', '33,sri petaling', 4, 1, 2),
(3, '1234512345', 'lee', 'karhui', 'karhui@gmail.com', '20 upm serdang.', 1, 3, 3),
(4, '321321321', 'tee', 'szenyew', 'tsyew@gmail.com', '5, kajang.', 5, 2, 4),
(5, '0987654321', 'pika', 'chu', 'pikachu@gmail.com', '9, pokemon planet.', 4, 3, 5),
(6, '123123123', NULL, NULL, 'fsdfs@sfsdf.com', NULL, NULL, NULL, NULL),
(7, '12312313', NULL, NULL, 'gsgf@mail.com', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`HistoryID`),
  ADD KEY `Orderid` (`Orderid`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`IngredientID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`MessageID`);

--
-- Indexes for table `myorder`
--
ALTER TABLE `myorder`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `productid1` (`productid1`),
  ADD KEY `productid2` (`productid2`),
  ADD KEY `productid3` (`productid3`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`PlanID`);

--
-- Indexes for table `preference`
--
ALTER TABLE `preference`
  ADD PRIMARY KEY (`PrefID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `productingredient`
--
ALTER TABLE `productingredient`
  ADD KEY `ProductID` (`ProductID`),
  ADD KEY `IngredientID` (`IngredientID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `prefid` (`prefid`),
  ADD KEY `planid` (`planid`),
  ADD KEY `orderid` (`orderid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `HistoryID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `IngredientID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `MessageID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `myorder`
--
ALTER TABLE `myorder`
  MODIFY `OrderID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `PlanID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `preference`
--
ALTER TABLE `preference`
  MODIFY `PrefID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`Orderid`) REFERENCES `myorder` (`OrderID`),
  ADD CONSTRAINT `history_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Constraints for table `myorder`
--
ALTER TABLE `myorder`
  ADD CONSTRAINT `myorder_ibfk_1` FOREIGN KEY (`productid1`) REFERENCES `product` (`productID`),
  ADD CONSTRAINT `myorder_ibfk_2` FOREIGN KEY (`productid2`) REFERENCES `product` (`productID`),
  ADD CONSTRAINT `myorder_ibfk_3` FOREIGN KEY (`productid3`) REFERENCES `product` (`productID`);

--
-- Constraints for table `productingredient`
--
ALTER TABLE `productingredient`
  ADD CONSTRAINT `productingredient_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `product` (`productID`),
  ADD CONSTRAINT `productingredient_ibfk_2` FOREIGN KEY (`IngredientID`) REFERENCES `ingredient` (`IngredientID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`prefid`) REFERENCES `preference` (`PrefID`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`planid`) REFERENCES `plan` (`PlanID`),
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`orderid`) REFERENCES `myorder` (`OrderID`);
--
-- Database: `ecommerce`
--
CREATE DATABASE IF NOT EXISTS `ecommerce` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ecommerce`;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_id` int(10) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `user_email`, `user_pass`) VALUES
(1, 'jieyou_1994@live.com', 'jieyou'),
(2, 'chailiying94@gmail.com', 'abc123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `size` char(3) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `size`, `qty`) VALUES
(1, '::1', '', 0),
(2, '::1', '', 0),
(3, '::1', '', 0),
(4, '::1', '', 0),
(5, '::1', '', 0),
(10, '::1', '', 0),
(11, '::1', '', 0),
(12, '::1', '', 0),
(18, '::1', '', 0),
(19, '::1', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Office wear'),
(2, 'Dress'),
(3, 'Pant');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_ip` varchar(225) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_contact` int(20) NOT NULL,
  `customer_street` text NOT NULL,
  `customer_city` varchar(255) NOT NULL,
  `customer_country` varchar(255) NOT NULL,
  `customer_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_ip`, `customer_name`, `customer_email`, `customer_contact`, `customer_street`, `customer_city`, `customer_country`, `customer_pass`) VALUES
(75, '::1', 'jieyou', 'jieyou_1994@live.com', 123456, 'no23', 'Selangor', 'Nepal', 'jieyou'),
(76, '::1', 'HAHA', 'jieyou_1994@live.com', 2222, 'er', 'jieyou_1994@live.com', '', 'jieyou'),
(79, '::1', 'sam3', 'sam2@live.com', 333344, 'haha', 'seri kembangan', 'jieyou_1994@live.com', 'jieyou'),
(81, '::1', 'ly', 'ey', 4444, 'wrw', 'jieyou_1994@live.com', 'Nepal', 'jieyou'),
(82, '::1', '4433', '34', 3242, '324', 'jieyou_1994@live.com', 'United States', 'jieyou'),
(83, '::1', 'Chai Li Ying', 'chailiying94@gmail.com', 123456789, 'Taman Kemena', 'Bintulu', 'Malaysia', '123456'),
(84, '::1', 'Li Ying', 'leeying94@yahoo.com', 139598645, 'Taman Kemena', 'Bintulu', 'Malaysia', '123');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 0, 'Stripe Jabot Long </br>Sleeve Top', 400, '<p>Weight: 300g</p>\r\n<p>Material: Cotton</p>\r\n<p>Size available: S,M,L</p>\r\n<p>Shoulder: 35-37CM</p>\r\n<p>Bust: 84-92CM</p>\r\n<p>Waistline: 70-78CM</p>\r\n<p>Sleeve Length: 58-59CM</p>\r\n<p>Shirt Length: 60-62CM</p>', '', 'Stripe Jabot Long Sleeve Top, Office wear'),
(2, 1, 'Minimalist Button Up</br>\r\nLong Sleeve Top ', 53, 'Weight: 350g\r\nMaterial: Cotton\r\n\r\nS: \r\nShoulder: 35CM\r\nBust: 84CM\r\nWaistline: 72CM\r\nSleeve Length: 59CM\r\nShirt Length: 58CM\r\n\r\nM: \r\nShoulder: 36CM\r\nBust: 88CM\r\nWaistline: 76CM\r\nSleeve Length: 60CM\r\nShirt Length: 59CM\r\n\r\nL: \r\nShoulder: 37CM\r\nBust: 92CM\r\nWaistline: 80CM\r\nSleeve Length: 61CM\r\nShirt Length: 60CM\r\n\r\nXL: \r\nShoulder: 38CM\r\nBust: 96CM\r\nWaistline: 84CM\r\nSleeve Length: 62CM\r\nShirt Length: 61CM\r\n\r\nXXL: \r\nShoulder: 39CM\r\nBust: 100CM\r\nWaistline: 88CM\r\nSleeve Length: 63CM\r\nShirt Length: 62CM\r\n\r\nXXXL: \r\nShoulder: 40CM\r\nBust: 104CM\r\nWaistline: 92CM\r\nSleeve Length: 64CM\r\nShirt Length: 63CM\r\n', 'Minimalist Button Up Long Sleeve Top2.jpg', 'Minimalist Button Up Long Sleeve Top ,office wear'),
(3, 3, 'Denim Ripped</br>Skinny Pants ', 64, '<p><span style=\"color: #555555; font-family: Arial, sans-serif; font-size: 12px; line-height: 13.8px;\">Denim Ripped Skinny Pants is one of the popular sales product of our shop. Market price is Rm 78.00. While if you shop with us, it only cost for Rm64.00. Hips size are range from 88cm to 96cm, thigh is from 48cmto 58cm&nbsp;and pant length are 105cm to 108cm.</span></p>', 'Denim Ripped Skinny Pants.jpg', 'Denim Ripped Skinny Pants , Pant'),
(4, 1, 'BowTie Neck Button</br>Up Long Sleeve Top', 38, '<p>Weight: 400g</p>\r\n<p>Material: Chiffon</p>\r\n<p>Size available:</p>\r\n<p>S,M,L</p>\r\n<p>Shoulder: 36-38CM</p>\r\n<p>Bust: 82-90CM</p>\r\n<p>Sleeve Length: 56-58CM</p>\r\n<p>Shirt Length: 57-59CM</p>\r\n<p>&nbsp;</p>', 'Bow Tie Neck Button Up Long Sleeve Top.jpg', 'Bow Tie Neck Button Up Long Sleeve Top, Office wear'),
(5, 1, 'Bow Tie Neck</br>Mesh Blouse', 35, '<p>Weight: 200g</p>\r\n<p>Material: Mesh</p>\r\n<p>Shoulder: 36CM</p>\r\n<p>Sleeve Length: 16CM</p>\r\n<p>Bust: 100CM</p>\r\n<p>Shirt Length: 60CM</p>', 'Bow Tie Neck Mesh Blouse.jpg', 'Bow Tie Neck Mesh Blouse,Office wear'),
(7, 1, 'Chiffon Lace Mesh</br>Long Sleeve Top', 44, '<p>Weight: 320g</p>\r\n<p>Material: Chiffon + Lace</p>\r\n<p>Size Available:</p>\r\n<p>S,M,L</p>\r\n<p>Shirt Length: 61-63CM</p>\r\n<p>Bust: 86-94CM</p>\r\n<p>Sleeve Length: 60-62CM</p>\r\n<p>Shoulder: 36-38CM</p>\r\n<p>&nbsp;</p>', 'Chiffon Lace Mesh Long Sleeve Top.jpg', 'Chiffon Lace Mesh Long Sleeve Top, Office wear'),
(8, 1, 'Puff Sleeve Button</br>Up Blouse ', 35, '<p>Weight: 250g</p>\r\n<p>Material: Cotton</p>\r\n<p>Size available:</p>\r\n<p>S,M,L</p>\r\n<p>Shoulder: 34-36CM</p>\r\n<p>Bust: 80-88CM</p>\r\n<p>Waistline: 67-75CM</p>\r\n<p>Shirt Length: 58-59CM</p>', 'Puff Sleeve Button Up Blouse.jpg', 'Puff Sleeve Button Up Blouse, Office wear'),
(9, 2, 'Lace Mesh Chiffon</br>Maxi Dress', 61, '<p>Weight: 350g</p>\r\n<p>&nbsp;</p>\r\n<p>Material: Chiffon</p>\r\n<p>Available size: S,M,L</p>\r\n<p>Skirt Length: 134-142CM</p>\r\n<p>Bust: 84-92CM</p>\r\n<p>Shoulder: 37-39CM</p>\r\n<p>Waistline: 68-76CM</p>', 'Lace Mesh Chiffon Maxi Dress.jpg', 'Lace Mesh Chiffon Maxi Dress, Dress'),
(10, 2, 'Waist Gathered Chiffon</br>Placket Dress', 53, '<p>Weight: 300g</p>\r\n<p>&nbsp;</p>\r\n<p>Material: Chiffon</p>\r\n<p>Size: S,M,L,XL</p>\r\n<p>Shirt Length: 82-85CM</p>\r\n<p>Bust: 83-95CM</p>\r\n<p>Shoulder: 34-37CM</p>\r\n<p>Sleeve Length: 40-43CM</p>\r\n<p>Waistline: 77-89CM</p>', 'Waist Gathered Chiffon Placket Dress.jpg', 'Waist Gathered Chiffon Placket Dress, Dress'),
(11, 2, 'Stripe 2 Piece</br>Mini Dress', 45, '<p>Weight: 500g</p>\r\n<p>Material: Cotton</p>\r\n<p>Size: M,L,XL</p>\r\n<p>Top</p>\r\n<p>Back Length: 51-53CM</p>\r\n<p>Front Length: 26-28CM</p>\r\n<p>Bust: 92-100CM</p>\r\n<p>Shoulder: 40-42CM</p>\r\n<p>Dress</p>\r\n<p>Bust: 76-84CM</p>\r\n<p>Skirt Length: 78-82CM</p>\r\n<p>&nbsp;</p>', 'Stripe 2 Piece Mini Dress.jpg', 'Stripe 2 Piece Mini Dress, Dress'),
(12, 2, 'Pattern Lace Mesh</br>Shift Dress ', 63, '<p>Weight: 300g</p>\r\n<p>Material: Lace</p>\r\n<p>Size: M,L,XL</p>\r\n<p>Shirt Length: 80-83CM</p>\r\n<p>Bust: 86-98CM</p>\r\n<p>Shoulder: 35-40CM</p>\r\n<p>Sleeve Length: 38-41CM</p>', 'Pattern Lace Mesh Shift Dress.jpg', 'Pattern Lace Mesh Shift Dress, Dress'),
(13, 2, 'Retro Maternity</br>Nursing Dress', 68, '<p>Weight: 400g</p>\r\n<p>Material: Cotton Linen</p>\r\n<p>Size: S,M,L,XL</p>\r\n<p>Shoulder: 39-45CM</p>\r\n<p>Bust: 96-108CM</p>\r\n<p>Abdomen: 96-108CM</p>\r\n<p>Sleeve Length: 41-45CM</p>\r\n<p>Shirt Length: 79-85CM</p>', 'Retro Maternity Nursing Dress.jpg', 'Retro Maternity Nursing Dress, Dress'),
(14, 2, 'Back Button Up Cut</br>Out Midi Dress ', 66, '<p>Weight: 280g</p>\r\n<p>Material: Chiffon</p>\r\n<p>Shoulder: 34CM</p>\r\n<p>Bust: 84CM</p>\r\n<p>Waistline: 66CM</p>\r\n<p>(Invisible Zipper)</p>\r\n<p>Skirt Length: 120CM</p>\r\n<p>&nbsp;</p>', 'Back Button Up Cut Out Midi Dress.jpg', 'Back Button Up Cut Out Midi Dress, Dress'),
(15, 3, 'Denim Mini Graphic</br>Skinny Pants ', 64, '<p>Weight: 500g</p>\r\n<p>Material: Denim Cotton</p>\r\n<p>Size: M,L,XL,XXL</p>\r\n<p>Hips: 88-100CM</p>\r\n<p>Thigh: 48 - 60CM</p>\r\n<p>Pants Length: 100-1085CM</p>', 'Denim Mini Graphic Skinny Pants.jpg', 'Denim Mini Graphic Skinny Pants, Pant'),
(16, 3, 'Denim Ripped Slim</br>Fit Pants', 64, '<p>Weight: 500g</p>\r\n<p>Material: Denim Cotton</p>\r\n<p>Size: M,L,XL,XXL</p>\r\n<p>Hips: 88-100CM</p>\r\n<p>Thigh: 48 - 64CM</p>\r\n<p>Pants Length: 105-108CM</p>', 'Denim Ripped Slim Fit Pants.jpg', 'Denim Ripped Slim Fit Pants, Pant'),
(17, 3, 'Denim Sentence Embroide</br>Skinny Pants ', 67, '<p>Weight: 500g</p>\r\n<p>Material: Denim Cotton</p>\r\n<p>Size: M,L,XL,XXL</p>\r\n<p>Hips: 88-100CM</p>\r\n<p>Thigh: 48 - 60CM</p>\r\n<p>Pants Length: 105-108CM</p>', 'Denim Sentence Embroidered Skinny Pants.jpg', 'Denim Sentence Embroidered Skinny Pants, Pant'),
(18, 3, 'Denim Drawstring</br>Peg Leg Pants ', 74, '<p>Weight: 400g</p>\r\n<p>Material: Denim</p>\r\n<p>Size range: 27-32</p>\r\n<p>Waistline: 63-75CM</p>\r\n<p>Pants Length: 92-97CM</p>\r\n<p>Hips: 90-102CM</p>\r\n<p>Thigh: 53-58CM</p>', 'Denim Drawstring Peg Leg Pants.jpg', 'Denim Drawstring Peg Leg Pants, Pant'),
(19, 3, 'Denim Ripped</br>Skinny Pant', 65, '<p>Weight: 500g</p>\r\n<p>Material: Denim</p>\r\n<p>Size range: 26-31</p>\r\n<p>Waistline: 66-76CM</p>\r\n<p>Hips: 84-94CM</p>\r\n<p>Thigh: 44-56CM</p>\r\n<p>Pants Length: 85-90CM</p>\r\n<p>&nbsp;</p>', 'Denim Ripped Skinny Pant.jpg', 'Denim Ripped Skinny Pant, Pant');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `S` char(3) NOT NULL,
  `M` char(3) NOT NULL,
  `L` char(3) NOT NULL,
  `XXL` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Database: `employeedetails`
--
CREATE DATABASE IF NOT EXISTS `employeedetails` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `employeedetails`;

-- --------------------------------------------------------

--
-- Table structure for table `employeedetails`
--

CREATE TABLE `employeedetails` (
  `id` int(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `destination` varchar(20) DEFAULT NULL,
  `salary` varchar(20) DEFAULT NULL,
  `dateOfJoin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeedetails`
--

INSERT INTO `employeedetails` (`id`, `name`, `address`, `destination`, `salary`, `dateOfJoin`) VALUES
(0, 'hey', 'address', 'upm', '200', '2018-03-05'),
(1, 'ff', 'ff', 'fff', '222', '2018-03-14'),
(2, 'hey', 'address', 'upm', '200', '2018-03-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employeedetails`
--
ALTER TABLE `employeedetails`
  ADD PRIMARY KEY (`id`);
--
-- Database: `idea`
--
CREATE DATABASE IF NOT EXISTS `idea` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `idea`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(10) NOT NULL,
  `adminPassword` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `announceID` int(11) NOT NULL,
  `announce_date` date NOT NULL,
  `announce_title` varchar(250) NOT NULL,
  `announce_msg` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announceID`, `announce_date`, `announce_title`, `announce_msg`) VALUES
(3, '2018-03-01', 'Welcome to IDEA 2018!', 'Are you ready for IDEA 2018? Let\'s get this started!'),
(4, '2018-03-03', 'Ready for the first challenge?', 'Your first challenge will due in 1(one) week!'),
(6, '2018-03-13', 'Top 20 Announcement', 'Top 20 will be announced next week!'),
(7, '2018-03-13', 'Top 10!', 'bla');

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `mentorID` int(10) NOT NULL,
  `mentorname` varchar(70) NOT NULL,
  `mentoremail` varchar(70) NOT NULL,
  `mentorpassword` varchar(70) NOT NULL,
  `company` varchar(50) NOT NULL,
  `teamID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`mentorID`, `mentorname`, `mentoremail`, `mentorpassword`, `company`, `teamID`) VALUES
(1, 'Dr. Man Thor', 'thor@mail.com', 'thor', 'Asgard', NULL),
(2, 'banana', 'banana@mail.com', 'banana', 'Banana Republic', NULL),
(3, 'Dr. Ng LH', 'ng@mail.com', 'ng', 'UPM', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `progressreport`
--

CREATE TABLE `progressreport` (
  `ReportID` int(11) NOT NULL,
  `date` date NOT NULL,
  `submissiondate` date NOT NULL,
  `submissiontitle` varchar(250) NOT NULL,
  `content` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progressreport`
--

INSERT INTO `progressreport` (`ReportID`, `date`, `submissiondate`, `submissiontitle`, `content`) VALUES
(10, '2018-03-12', '2018-03-20', 'Submission 1: Business Plan!', 'Your 1st assignment is to produce a detailed and compelling business report.All the best to all teams!'),
(11, '2018-03-13', '2018-03-30', 'Submission 2: Promo Video', 'This submission require all teams to produce a 90 seconds video and upload it on Youtube. \r\n\r\nProduce a detail report and we can\'t wait to see the video.'),
(13, '2018-03-13', '2018-03-30', 'Submission 3: Top 30 Challenge', 'Top 30!'),
(14, '2018-03-13', '2018-04-20', 'Submission 4!', 'submit blablalba');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `requestID` int(11) NOT NULL,
  `teamID` int(10) NOT NULL,
  `mentorID` int(10) NOT NULL,
  `requestStatus` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`requestID`, `teamID`, `mentorID`, `requestStatus`) VALUES
(4, 5, 2, NULL),
(7, 6, 1, 'Accepted'),
(10, 5, 1, 'Accepted'),
(11, 6, 2, 'Accepted'),
(12, 10, 1, 'Accepted'),
(13, 11, 1, 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `submitcheck`
--

CREATE TABLE `submitcheck` (
  `reportID` int(11) NOT NULL,
  `teamID` int(11) NOT NULL,
  `submit` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submitcheck`
--

INSERT INTO `submitcheck` (`reportID`, `teamID`, `submit`) VALUES
(1, 0, '0'),
(2, 0, 'JZLOW_resume.pdf'),
(3, 5, 'JZLOW_resume.pdf'),
(4, 9, 'JZLOW_resume.pdf'),
(5, 9, 'CEL 2106 SCL WORKSHEET WEEK 3(JZ).doc'),
(6, 6, 'CEL 2106 THT WEEK 1_JZ.docx'),
(7, 6, 'JZLOW_resume.pdf'),
(8, 6, 'JZLOW_resume.pdf'),
(9, 10, 'jzpage2.pdf'),
(10, 10, 'IMG_20170821_095244.jpg'),
(11, 11, 'JZLOW_resume.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `teamID` int(10) NOT NULL,
  `teamname` varchar(50) NOT NULL,
  `teamcode` varchar(20) NOT NULL,
  `mentorID` int(10) DEFAULT NULL,
  `teamstatus` varchar(30) DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`teamID`, `teamname`, `teamcode`, `mentorID`, `teamstatus`) VALUES
(7, 'mcD', 'jchfzw', NULL, 'Active'),
(8, 'Wakanda', '5wniz0', NULL, 'Active'),
(10, 'thornado', 'fdemjb', NULL, 'Active'),
(11, 'IDEA', '61u0p4', 1, 'Active'),
(12, 'faris', '22jdxp', NULL, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(10) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(20) NOT NULL,
  `ID` varchar(64) NOT NULL,
  `IC` varchar(64) NOT NULL,
  `university` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `graduateyear` year(4) NOT NULL,
  `teamID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `name`, `email`, `password`, `ID`, `IC`, `university`, `faculty`, `graduateyear`, `teamID`) VALUES
(163, 'timothy', 'tim@mail.com', 'timtim', '2018-01-04 02.38.00 1.jpg', 'IMG_20171214_184104_02.jpg', 'University Putra Malaysia', 'Faculty of Computer Science and Information Techno', 2020, 10),
(165, 'jim', 'jim@mail.com', '123123', '', '', 'University Putra Malaysia', 'FSKTM', 2019, 12),
(166, 'Jon T', 'jon@mail.com', '123123', '', '', 'University Putra Malaysia', 'Faculty of Computer Science', 2019, 12),
(167, 'idea', 'idea@mail.com', '123123', 'IMG_20171214_184104_02.jpg', '2018-01-04 02.38.00 1.jpg', 'University Putra Malaysia', 'Faculty of Agriculture ', 2023, 11),
(168, 'dsjgsdj', 'sdjfs@mail.com', '123123', 'IMG_20170821_095244.jpg', '2017-08-22 01.29.11 1.jpg', 'UPM', 'Faculty of Agriculture ', 2018, NULL),
(169, 'jz low', 'jz22@mail.com', '123123', '2018-01-04 02.38.00 1.jpg', '2017-05-20 07.46.24 1.jpg', 'UPM', 'Faculty of Agriculture ', 2018, NULL),
(170, 'jz low', 'jz12@mail.com', '123123', 'IMG_20171214_184104_02.jpg', '2017-05-20 07.46.24 1.jpg', 'UPM', 'Faculty of Agriculture ', 2018, NULL),
(171, 'jzlow', 'khlee@mail.com', '123123', 'IMG_20171214_184104_02.jpg', '2018-01-04 02.38.00 1.jpg', 'UPM', 'Faculty of Agriculture ', 2018, NULL),
(173, 'jzlow', 'khleeng@mail.com', '123123', 'IMG_20171214_184104_02.jpg', '2017-05-20 07.46.24 1.jpg', 'UPM', 'Faculty of Agriculture ', 2018, NULL),
(174, 'jzlow', 'khleeng1@mail.com', '123123', 'IMG_20171214_184104_02.jpg', '2017-08-22 01.29.11 1.jpg', 'UPM', 'Faculty of Agriculture ', 2018, NULL),
(175, 'jzlow', 'khleeng19@mail.com', '123123', 'IMG_20171214_184104_02.jpg', '2017-05-20 07.46.24 1.jpg', 'University Putra Malaysia', 'Faculty of Agriculture ', 2018, NULL),
(176, 'jzlow', 'khleeng192@mail.com', '123123', 'IMG_20171107_194908.jpg', '2018-01-04 02.38.00 1.jpg', 'University Putra Malaysia', 'Faculty of Agriculture ', 2018, NULL),
(177, 'jzlow', 'khle2eng192@mail.com', '123123', 'IMG_20171214_184104_02.jpg', '2017-08-22 01.29.11 1.jpg', 'University Putra Malaysia', 'Faculty of Agriculture ', 2018, NULL),
(178, 'djfs', 'dhdh@mail.com', '123123', 'IMG_20171214_184104_02.jpg', '2017-05-20 07.46.24 1.jpg', 'University Putra Malaysia', 'Faculty of Agriculture ', 2018, NULL),
(179, 'sdfsfsdgs', 'sdgsgsdg@mail.com', '123123', 'IMG_20171214_184104_02.jpg', '2017-05-20 07.46.24 1.jpg', 'University Putra Malaysia', 'Faculty of Science', 2018, NULL),
(180, 'sdfsfsdgs', 'sdgsg1sdg@mail.com', '123123', 'IMG_20171214_184104_02.jpg', '2017-08-22 01.29.11 1.jpg', 'UPM', 'Faculty of Agriculture ', 2018, NULL),
(181, 'bla bla', 'blabla@mail.com', '123123', 'IMG_20171214_184104_02.jpg', '2017-05-20 07.46.24 1.jpg', 'University Putra Malaysia', 'Faculty of Agriculture ', 2023, NULL),
(182, 'kazaa', 'kazaa@mail.com', '123123', 'IMG_20171214_184104_02.jpg', '2017-05-20 07.46.24 1.jpg', 'University Putra Malaysia', 'Faculty of Agriculture ', 2018, NULL),
(183, 'jzzznv', 'nvnv@mail.com', '123123', '76b7ed123dd35a5faa910d9ab73302dd.jpg', '76b7ed123dd35a5faa910d9ab73302dd.jpg', 'UUpm', 'Faculty of Economics and Management ', 2018, NULL),
(184, 'tchalla', 'wknda@mail.com', '123123', '76b7ed123dd35a5faa910d9ab73302dd.jpg', '76b7ed123dd35a5faa910d9ab73302dd.jpg', 'wknd', 'Faculty of Science', 2018, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announceID`);

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`mentorID`);

--
-- Indexes for table `progressreport`
--
ALTER TABLE `progressreport`
  ADD PRIMARY KEY (`ReportID`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`requestID`);

--
-- Indexes for table `submitcheck`
--
ALTER TABLE `submitcheck`
  ADD KEY `report_FK` (`reportID`),
  ADD KEY `team_FK` (`teamID`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`teamID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mentor`
--
ALTER TABLE `mentor`
  MODIFY `mentorID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `progressreport`
--
ALTER TABLE `progressreport`
  MODIFY `ReportID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `requestID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `submitcheck`
--
ALTER TABLE `submitcheck`
  MODIFY `reportID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `teamID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;
--
-- Database: `jfreedb`
--
CREATE DATABASE IF NOT EXISTS `jfreedb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jfreedb`;

-- --------------------------------------------------------

--
-- Table structure for table `mobile_tbl`
--

CREATE TABLE `mobile_tbl` (
  `mobile_brand` varchar(100) NOT NULL,
  `unit_sale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile_tbl`
--

INSERT INTO `mobile_tbl` (`mobile_brand`, `unit_sale`) VALUES
('Samsung', 10),
('OnePlus', 20),
('Samsung', 10),
('OnePlus', 20);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `salesID` int(11) NOT NULL,
  `Year` year(4) NOT NULL,
  `Month` varchar(3) NOT NULL,
  `Sales` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`salesID`, `Year`, `Month`, `Sales`) VALUES
(1, 2017, 'Jan', 6000),
(2, 2017, 'Feb', 5680),
(3, 2017, 'Mac', 6050),
(4, 2017, 'Apr', 4050),
(5, 2017, 'May', 5680),
(6, 2017, 'Jun', 6020),
(7, 2017, 'Jul', 5460),
(8, 2017, 'Aug', 5550),
(9, 2017, 'Sep', 4080),
(10, 2017, 'Oct', 4500),
(11, 2017, 'Nov', 5600),
(12, 2017, 'Dec', 6000),
(13, 2018, 'Jan', 6000),
(14, 2018, 'Feb', 5000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`salesID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `salesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Database: `milliont_main`
--
CREATE DATABASE IF NOT EXISTS `milliont_main` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `milliont_main`;

-- --------------------------------------------------------

--
-- Table structure for table `1milliontraders`
--

CREATE TABLE `1milliontraders` (
  `userID` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `address` varchar(250) NOT NULL,
  `studentID` int(8) DEFAULT NULL,
  `university` varchar(100) DEFAULT NULL,
  `faculty` varchar(100) DEFAULT NULL,
  `classification` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `userType` varchar(100) NOT NULL,
  `programme` varchar(100) DEFAULT NULL,
  `codeCount` int(8) NOT NULL,
  `studentIDImg` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `membershipfees`
--

CREATE TABLE `membershipfees` (
  `feeID` int(11) NOT NULL,
  `transID` varchar(11) NOT NULL,
  `feeStatus` varchar(25) NOT NULL,
  `userID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `referral`
--

CREATE TABLE `referral` (
  `userID` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referral`
--

INSERT INTO `referral` (`userID`, `code`) VALUES
('014311', '152515'),
('020144', '253135'),
('020522', '020144'),
('041515', '253135'),
('134331', '212022'),
('242420', '152251'),
('244301', '253135'),
('421010', '134331'),
('441531', '130020'),
('455555', '220102'),
('514503', '181666'),
('524401', '253135');

-- --------------------------------------------------------

--
-- Table structure for table `ydecacademicadvisor`
--

CREATE TABLE `ydecacademicadvisor` (
  `mentorID` int(11) NOT NULL,
  `mentorName` varchar(150) NOT NULL,
  `university` varchar(100) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `teamID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ydecfinalreportresult`
--

CREATE TABLE `ydecfinalreportresult` (
  `resultID` int(11) NOT NULL,
  `criteria` varchar(255) NOT NULL,
  `reportID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ydecfinancialresult`
--

CREATE TABLE `ydecfinancialresult` (
  `resultID` int(11) NOT NULL,
  `criteria` varchar(255) NOT NULL,
  `month1` varchar(255) NOT NULL,
  `month2` varchar(255) NOT NULL,
  `month3` varchar(255) NOT NULL,
  `reportID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ydecindustry`
--

CREATE TABLE `ydecindustry` (
  `mentorID` int(11) NOT NULL,
  `mentorName` varchar(150) NOT NULL,
  `company` varchar(50) NOT NULL,
  `teamID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ydecinvitation`
--

CREATE TABLE `ydecinvitation` (
  `inviteID` int(11) NOT NULL,
  `teamID` int(11) NOT NULL,
  `participantID` int(11) NOT NULL,
  `invite_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ydecparticipant`
--

CREATE TABLE `ydecparticipant` (
  `participantID` int(11) NOT NULL,
  `userID` varchar(20) NOT NULL,
  `teamID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ydecpitchingvideo`
--

CREATE TABLE `ydecpitchingvideo` (
  `videoID` int(11) NOT NULL,
  `link` int(11) NOT NULL,
  `teamID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ydecpreliminaryresult`
--

CREATE TABLE `ydecpreliminaryresult` (
  `resultID` int(11) NOT NULL,
  `criteria` varchar(255) NOT NULL,
  `videoID` int(11) NOT NULL,
  `proposalID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ydecproposal`
--

CREATE TABLE `ydecproposal` (
  `proposalID` int(11) NOT NULL,
  `documentName` varchar(50) NOT NULL,
  `teamID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ydecreport`
--

CREATE TABLE `ydecreport` (
  `reportID` int(11) NOT NULL,
  `date` date NOT NULL,
  `reportType` varchar(255) NOT NULL,
  `teamID` int(11) NOT NULL,
  `mentorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ydecteam`
--

CREATE TABLE `ydecteam` (
  `teamID` int(11) NOT NULL,
  `teamName` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `projectTitle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1milliontraders`
--
ALTER TABLE `1milliontraders`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `membershipfees`
--
ALTER TABLE `membershipfees`
  ADD PRIMARY KEY (`feeID`),
  ADD KEY `userFK` (`userID`);

--
-- Indexes for table `referral`
--
ALTER TABLE `referral`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `ydecacademicadvisor`
--
ALTER TABLE `ydecacademicadvisor`
  ADD PRIMARY KEY (`mentorID`),
  ADD KEY `teamFK` (`teamID`);

--
-- Indexes for table `ydecfinalreportresult`
--
ALTER TABLE `ydecfinalreportresult`
  ADD PRIMARY KEY (`resultID`),
  ADD KEY `reportFK` (`reportID`);

--
-- Indexes for table `ydecfinancialresult`
--
ALTER TABLE `ydecfinancialresult`
  ADD PRIMARY KEY (`resultID`),
  ADD KEY `reportFinFK` (`reportID`);

--
-- Indexes for table `ydecindustry`
--
ALTER TABLE `ydecindustry`
  ADD PRIMARY KEY (`mentorID`),
  ADD KEY `teamIndustryFK` (`teamID`);

--
-- Indexes for table `ydecinvitation`
--
ALTER TABLE `ydecinvitation`
  ADD KEY `FK_inviteparticipant` (`participantID`),
  ADD KEY `FK_teaminvite` (`teamID`);

--
-- Indexes for table `ydecparticipant`
--
ALTER TABLE `ydecparticipant`
  ADD PRIMARY KEY (`participantID`),
  ADD KEY `participantUserFK` (`userID`),
  ADD KEY `participantTeamFK` (`teamID`);

--
-- Indexes for table `ydecpitchingvideo`
--
ALTER TABLE `ydecpitchingvideo`
  ADD PRIMARY KEY (`videoID`),
  ADD KEY `PitchingTeamFK` (`teamID`);

--
-- Indexes for table `ydecpreliminaryresult`
--
ALTER TABLE `ydecpreliminaryresult`
  ADD PRIMARY KEY (`resultID`),
  ADD KEY `PrelimVideoFK` (`videoID`),
  ADD KEY `PrelimProposalFK` (`proposalID`);

--
-- Indexes for table `ydecproposal`
--
ALTER TABLE `ydecproposal`
  ADD PRIMARY KEY (`proposalID`),
  ADD KEY `ProposalTeamFK` (`teamID`);

--
-- Indexes for table `ydecreport`
--
ALTER TABLE `ydecreport`
  ADD PRIMARY KEY (`reportID`),
  ADD KEY `reportTeamFK` (`teamID`),
  ADD KEY `reportMentorFK` (`mentorID`);

--
-- Indexes for table `ydecteam`
--
ALTER TABLE `ydecteam`
  ADD PRIMARY KEY (`teamID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `membershipfees`
--
ALTER TABLE `membershipfees`
  MODIFY `feeID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ydecfinalreportresult`
--
ALTER TABLE `ydecfinalreportresult`
  MODIFY `resultID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ydecpitchingvideo`
--
ALTER TABLE `ydecpitchingvideo`
  MODIFY `videoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ydecpreliminaryresult`
--
ALTER TABLE `ydecpreliminaryresult`
  MODIFY `resultID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ydecproposal`
--
ALTER TABLE `ydecproposal`
  MODIFY `proposalID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ydecreport`
--
ALTER TABLE `ydecreport`
  MODIFY `reportID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `membershipfees`
--
ALTER TABLE `membershipfees`
  ADD CONSTRAINT `userFK` FOREIGN KEY (`userID`) REFERENCES `1milliontraders` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ydecacademicadvisor`
--
ALTER TABLE `ydecacademicadvisor`
  ADD CONSTRAINT `teamFK` FOREIGN KEY (`teamID`) REFERENCES `ydecteam` (`teamID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ydecfinalreportresult`
--
ALTER TABLE `ydecfinalreportresult`
  ADD CONSTRAINT `reportFK` FOREIGN KEY (`reportID`) REFERENCES `ydecreport` (`reportID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ydecfinancialresult`
--
ALTER TABLE `ydecfinancialresult`
  ADD CONSTRAINT `reportFinFK` FOREIGN KEY (`reportID`) REFERENCES `ydecreport` (`reportID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ydecindustry`
--
ALTER TABLE `ydecindustry`
  ADD CONSTRAINT `teamIndustryFK` FOREIGN KEY (`teamID`) REFERENCES `ydecteam` (`teamID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ydecparticipant`
--
ALTER TABLE `ydecparticipant`
  ADD CONSTRAINT `participantTeamFK` FOREIGN KEY (`teamID`) REFERENCES `ydecteam` (`teamID`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `participantUserFK` FOREIGN KEY (`userID`) REFERENCES `1milliontraders` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'table', 'milliont_main', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"allrows\":\"1\",\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@TABLE@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"json_structure_or_data\":\"data\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"xml_structure_or_data\":\"data\",\"xml_export_events\":\"something\",\"xml_export_functions\":\"something\",\"xml_export_procedures\":\"something\",\"xml_export_tables\":\"something\",\"xml_export_triggers\":\"something\",\"xml_export_views\":\"something\",\"xml_export_contents\":\"something\",\"yaml_structure_or_data\":\"data\",\"\":null,\"lock_tables\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"htmlword_columns\":null,\"json_pretty_print\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}'),
(3, 'root', 'server', 'milliont_main', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"db_select[]\":[\"easypeasy\",\"ecommerce\",\"employeedetails\",\"idea\",\"jfreedb\",\"milliont_main\",\"phpmyadmin\",\"test\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@SERVER@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"json_structure_or_data\":\"data\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"yaml_structure_or_data\":\"data\",\"\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"htmlword_columns\":null,\"json_pretty_print\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"milliont_main\",\"table\":\"1milliontraders\"},{\"db\":\"milliont_main\",\"table\":\"membershipfees\"},{\"db\":\"idea\",\"table\":\"admin\"},{\"db\":\"idea\",\"table\":\"announcement\"},{\"db\":\"easypeasy\",\"table\":\"history\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2018-03-31 15:54:58', '{\"collation_connection\":\"utf8mb4_unicode_ci\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
