-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 05, 2013 at 11:26 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `commentID` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(255) NOT NULL,
  `customerID` varchar(255) NOT NULL,
  `productID` varchar(255) NOT NULL,
  PRIMARY KEY (`commentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentID`, `comment`, `customerID`, `productID`) VALUES
(1, 'Very nice product', '32', '30'),
(5, 'Nice pic of shawl', '52', '30'),
(6, 'Good design', '52', '36'),
(7, 'Thori kam kemat m becho yar', '32', '30'),
(9, 'Nice', '32', '36'),
(10, 'Bht alla h', '32', '56'),
(11, 'Good', '53', '57'),
(12, 'Good', '56', '57'),
(13, 'Aaaa', '32', '54');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` char(1) NOT NULL,
  `paddress` varchar(255) NOT NULL,
  `a_address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `customerID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`customerID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`fname`, `lname`, `gender`, `paddress`, `a_address`, `city`, `mobile`, `email`, `customerID`) VALUES
('Hammad', 'Maqsood', 'M', 'G-6/4', '', 'Islamabad', '03435201606', 'opelmoon2007@yahoo.com', 32),
('Paras', 'Handicrafts', 'M', 'F-6/1 in super market.', '', 'Islamabad', '03435201606', 'parashandicraft@yahoo.com', 43),
('Zohaib', 'Khan', 'M', 'G-6/1-2', '', 'Islamabad', '0300', 'zohaib@yahoo.com', 47),
('Jazzy', 'Khan', 'M', 'block no 04', '', 'Islamad', '1223233', 'shahidrafiq46@yahoo.com', 49),
('Haris', 'Amjad', 'M', 'D-ground', '', 'Faislabad', '03434660799', 'niceharis12@yahoo.com', 52),
('Govinda', 'Kumar', 'M', 'Street#44', '', 'Islamabad', '03365007497', 'govindakumar07@hotmail.com', 53),
('Hamad', 'Maqsood', 'M', 'Lal masjid', '', 'Islamabad', '03365007497', 'openlmoon@gmail.com', 54),
('Naqash', 'Khalid', 'M', 'Lal masjid', '', 'Islamabad', '03365007497', 'openlmoon@gmail.com', 55),
('Hammad', 'Maqsood', 'M', 'lal masjid', '', 'Islamabad', '03365007497', 'openlmoon@gmail.com', 56),
('Waqas', 'Khalid', 'M', 'Hs 19', '', 'Islamabad', '03003302795', 'waqas@gmail.com', 57);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `txnid` varchar(20) NOT NULL,
  `payment_amount` decimal(7,2) NOT NULL,
  `payment_status` varchar(25) NOT NULL,
  `itemid` varchar(25) NOT NULL,
  `createtime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `payments`
--


-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pname` varchar(255) NOT NULL,
  `pcate` varchar(255) NOT NULL,
  `pgender` varchar(10) NOT NULL,
  `psize` varchar(255) NOT NULL,
  `pcolor` varchar(255) NOT NULL,
  `pprice` int(255) NOT NULL,
  `pCprice` int(255) NOT NULL,
  `pqty` int(255) NOT NULL,
  `pdate` date NOT NULL,
  `pdisc` varchar(1000) NOT NULL,
  `pimg` varchar(255) NOT NULL,
  `productID` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`productID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pname`, `pcate`, `pgender`, `psize`, `pcolor`, `pprice`, `pCprice`, `pqty`, `pdate`, `pdisc`, `pimg`, `productID`) VALUES
('Kashmiri', 'coats', 'Female', 'XL', 'Red,Brown', 4000, 3000, 10, '2013-04-01', 'Embroidered Coats in traditional Kashmiri embroidery designs. These coats are hand-embroidered in many different patterns. Some have allover creeper or floral designs while some are embroidered along the borders only. Some coats may have boteh embroidered back and will therefore cost comparatively less than allover embrodiered coats.', '../images/ProductsImgs/kashmiri coats.jpg', 57),
('Kani gold', 'stole', 'Female', '28x80', 'Golden,Mehrone', 2000, 1500, 10, '2013-04-01', 'New without tags: A brand-new, unused, and unworn item (including handmade items) that is not in original packaging or may be missing original packaging materials (such as the original box or bag). The original tags may not be attached.', '../images/ProductsImgs/kanigold.jpg', 56),
('Ari', 'stole', 'Female', '28x80', 'Blue', 3000, 2000, 5, '2013-04-01', 'Kashmiri Shawls With Ari Embroidery, 100 percent fine wool, either fully embroidered along the length of the shawl or embroidered only at its borders', '../images/ProductsImgs/Aristole.jpg', 55),
('Kani', 'shawl', 'Female', '45x90', 'Grey', 5000, 3500, 10, '2013-04-01', 'This exquisite Heirloom Kani Shawl was hand-woven in Kashmir over many, many months. It is made from pure hand-spun pashmina yarn and woven in an intricate all-over pattern of flowers, leaves and trailing branches and with a stunning stripy border. It is called a “Kani” shawl (our namesake!) after the very fine wooden needle used in its weaving, which involves many colour changes and demands a great deal of skill and concentration from the shawlweaver. We carry a very small collection of these beautiful, unique shawls, which are heirloom pieces.', '../images/ProductsImgs/Kani.jpg', 54),
('Kashmiri', 'coats', 'Male', 'XL', '', 5000, 4000, 20, '2013-04-01', 'Embroidered Coats in traditional Kashmiri embroidery designs. These coats are hand-embroidered in many different patterns. Some have allover creeper or floral designs while some are embroidered along the borders only. Some coats may have boteh embroidered back and will therefore cost comparatively less than allover embrodiered coats.', '../images/ProductsImgs/gentscoat.JPG', 58),
('Ponchu', 'sweater', 'Female', 'XL', 'Red,Brown', 3000, 1500, 200, '2013-04-01', 'The poncho is essentially a single large sheet of fabric with an opening in the center for the head with a piece of fabric that covers the head. Rainproof ponchos normally are fitted with fasteners to close the sides once the poncho is draped over the body, with openings provided for the arms; many have hoods attached to ward off wind and rain.', '../images/ProductsImgs/poncholadies.jpg', 59),
('Kurtas', 'shirt', 'Male', 'Xl', 'Black', 500, 300, 500, '2013-04-01', 'Kurta (different sizes are available). Please enquire the prices for other sizes.', '../images/ProductsImgs/shirts.jpg', 60),
('Pull over', 'sweater', 'Male', 'xxl', 'Blue,Red', 3000, 2000, 200, '2013-03-11', 'Gap has a selection of pullover sweatshirts which offers a fresh take on trends by adding subtle details and stylish accents. The pullover sweatshirts collection gives you a variety of colors to choose from, allowing you to create an individual look that is all your own. The fabric and construction used to make pullover sweatshirts ensures a comfortable fit that complements your every curve. Shop for pullover sweatshirts at Gap to get a terrific combination of style and comfort.', '../images/ProductsImgs/pulloversmen.jpg', 61),
('Nepali', 'scarf', 'Female', 'XL', 'Red,Brown,Green,Black', 2000, 15000, 0, '2013-04-01', 'Gap has a selection of pullover sweatshirts which offers a fresh take on trends by adding subtle details and stylish accents. The pullover sweatshirts collection gives you a variety of colors to choose from, allowing you to create an individual look that is all your own. The fabric and construction used to make pullover sweatshirts ensures a comfortable fit that complements your every curve. Shop for pullover sweatshirts at Gap to get a terrific combination of style and comfort.', '../images/ProductsImgs/Gucci1.jpg', 62),
('Kurtas', 'shirt', 'Male', 'L', 'Black', 500, 400, 200, '2013-04-01', 'Gap has a selection of pullover sweatshirts which offers a fresh take on trends by adding subtle details and stylish accents. The pullover sweatshirts collection gives you a variety of colors to choose from, allowing you to create an individual look that is all your own. The fabric and construction used to make pullover sweatshirts ensures a comfortable fit that complements your every curve. Shop for pullover sweatshirts at Gap to get a terrific combination of style and comfort.', '../images/ProductsImgs/shirts.jpg', 63),
('Nepali', 'scarf', 'Female', '28x80', '', 1000, 800, 0, '2013-01-05', 'Nepals Best product. Most Demanded also in pakistan', '../images/ProductsImgs/Gucci.jpg', 64),
('Fendi', 'shawl', 'Female', '45x90', 'Blue,Red', 4000, 3000, 20, '2013-01-05', 'The Fendi brand started in 1925 and came to be one of the most famous Italian fashion houses. It boasts of lots of accessories lines but has already grown to include perfumes, apparel, eyewear, and home articles. Louis Vuitton Moet Hennessy is the current owner of the Fendi brand, another French company that is big on selling luxury goods.', '../images/ProductsImgs/Fendi.jpg', 65),
('Fundi', 'shawl', 'Male', '45x90', '', 4000, 3000, 23, '2013-01-05', '', '../images/ProductsImgs/Fendi1.jpg', 70),
('Top dore', 'shawl', 'Female', '45x90', 'Blue', 4000, 3000, 10, '2013-01-05', '', '../images/ProductsImgs/topdore.JPG', 72),
('Two tone', 'shawl', 'Female', '45x90', 'Red,Brown', 5000, 4000, 23, '2013-01-05', '', '../images/ProductsImgs/twotone.JPG', 73),
('Two', 'shawl', 'Male', '45x90', 'Pink', 5000, 4000, 34, '2013-01-05', '', '../images/ProductsImgs/two.jpg', 74);

-- --------------------------------------------------------

--
-- Table structure for table `userloginid`
--

CREATE TABLE IF NOT EXISTS `userloginid` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `customerID` int(11) NOT NULL,
  KEY `password` (`password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userloginid`
--

INSERT INTO `userloginid` (`username`, `password`, `customerID`) VALUES
('hammad7531', '12345678', 32),
('govinda', '47090676', 53),
('zohaib', 'asdfghjkl', 47),
('niceharis', 'harisamjad', 52),
('mohmand', 'mohmandkhan', 49),
('hamad', 'qwertyui', 56),
('admin', 'sp10bcs088', 43),
('waqas', 'qwertyui', 57);
