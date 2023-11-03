-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2020 at 11:46 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `ask`
--

CREATE TABLE `ask` (
  `FirstName` varchar(250) NOT NULL,
  `LastName` varchar(250) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL,
  `question` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ask`
--

INSERT INTO `ask` (`FirstName`, `LastName`, `Email`, `PhoneNumber`, `question`) VALUES
('Nada', 'Alshehri', 'nada@gmail.com', '0552222377', 'Hi '),
('Sara', 'Alshehri', 'Sara@gmail.com', '0552222366', 'Hi : )'),
('', '', '', '', ''),
('Nada', 'Alshehri', 'nada33@gmail.com', '0552222399', 'Hi'),
('Nada', 'Alshehri', 'nada33@gmail.com', '0552222399', 'Hi'),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `catname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `catname`) VALUES
(2, 'Food'),
(5, 'Coffee'),
(6, 'Shopping'),
(7, 'Activity');

-- --------------------------------------------------------

--
-- Table structure for table `categorytransportion`
--

CREATE TABLE `categorytransportion` (
  `categorytraid` int(11) NOT NULL,
  `contentoftranname` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorytransportion`
--

INSERT INTO `categorytransportion` (`categorytraid`, `contentoftranname`) VALUES
(1, 'Flight'),
(2, 'Car'),
(3, 'Train'),
(4, 'Bus');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(11) NOT NULL,
  `categoryid` int(1) NOT NULL,
  `productname` varchar(30) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `categoryid`, `productname`, `price`, `photo`) VALUES
(1, 5, 'DOSE Café', ' Dose Café offers a variety of options for customers. Cappuccino, latte, espresso, refreshing drinks and regular coffee.\r\nFoods that include salads,\r\nAlso sandwiches and other snacks.\r\n', 'upload/DOSECafe.jpg'),
(2, 5, 'Le D’or', 'The location of Le D’or Café on the first Turkish Road, which is one of the best cafes that you can visit in order to have a candy bar in addition to a cup of hot coffee on a cold night, visit them now so that you can enjoy the date caramel cake famous for it', 'upload/Le.jpg'),
(3, 7, 'Kingdom Tower Cinema', 'We recommend booking a ticket here if you are planning to\r\ntreat yourself to the only luxurious movie theater experience in\r\nthe city. You will definitely enjoy your favorite movie here\r\nwith the comfy leather seats and waiter on demand.', 'upload/Cinema.jpg'),
(4, 7, 'Winter at Tantora', 'an exciting line-up of musical talents will surely light up the stage. Adventure seekers will be thrilled by the amazing range of cultural and culinary experiences and exhilarating activities such as hot air balloon rides and 4x4 tours.', 'upload/Winter.jpg'),
(5, 6, 'Kingdom Tower', 'It is not just a shopping mall, but also the second highest\r\nskyscraper in the city. You can find a great view of the city,\r\nboth mid-range shops and high-end boutiques, the only\r\nluxurious cinema, and finally accommodation at the Four\r\nSeasons. Open:\r\n9:30AM–12:30PM ', 'upload/KingdomTower.jpg'),
(6, 7, 'Riyadh Musical Fountain', 'Mindblowing 3D fountain shows using water, fire and smoke. Catch the hourly show at the Boulevard. The Fountain Show is guaranteed to amaze children and adults!.', 'upload/Riyadh.jpg'),
(7, 6, 'Riyadh Park', 'The perfect destination and the newest mall for all family\r\nmembers. It has the best combination of stores, entertainment,\r\ntrendy cafes & restaurants. Open:10AM–1:30AM', 'upload/Park.jpg'),
(8, 6, 'Centria Mall', 'It is your go-to mall to treat yourself or your loved ones with\r\nits high-end boutiques and upscale international restaurants.\r\nOpen:10AM–10PM', 'upload/11270488633_0d9a240336_b.jpg'),
(9, 5, 'Golden Kangaro', 'The Golden Kangaro is located on Unaizah Street in Riyadh and the operators work on it to offer a bouquet of the best desserts dishes with coffee from Australian coffee that is rich in taste and quality.', 'upload/Golden Kangaro.jpg'),
(10, 5, 'Coffee Tale', 'Coffee Tale, its branch is located in Riyadh, on Othman Bin Affan Street, and it offers excellent dessert dishes with the same quality coffee that they serve. It is mentioned that families are not allowed to be in the café until in the morning periods. The rest of the day is for individuals', 'upload/Coffee Tale.jpg'),
(11, 6, 'Panorama Mall', 'The mall includes the finest international brand names carefully chosen with its various activities to suit all high tastes of all ages. The mall also includes one of the largest gaming areas .\r\n', 'upload/PanoramaMall.jpg'),
(12, 7, 'Fakieh Aquarium', 'Fakieh Aquarium is the only aquarium in the Kingdom of Saudi Arabia, and it is also a destination for education and entertainment by displaying the wonders of the water environment in the Red Sea, and the wonders of the seas and other oceans from around the world.', 'upload/Fakieh-Aquarium.jpg'),
(13, 2, 'Najd Village', 'To offer the concept of rich and diverse Najd cuisine in its original style and in a beautiful heritage ambiance that nourishes feelings of gratitude and nostalgia.Open:12:00PM-12:30AM', 'upload/NajdVillage.jpg'),
(14, 2, 'Zafran Indian', 'Zafran Indian Restaurant is considered one of the distinguished restaurants with delicious Indian food, as it contains a varied menu of well-known Indian dishes, especially curry and Tandoori and all kinds of matter.', 'upload/Zafran Indian.jpg'),
(15, 2, 'Pampa Grill', 'Pampa Grill Argentine Restaurant is located in Riyadh in the Olaya neighborhood in Narcissus Hotel on the 9th floor, it offers wonderful Argentine dishes in the open air and beautiful views, terrible bacon Argentine dish and shepherd pie from veal and other in addition to excellent salads and drinks.', 'upload/126735.jpg'),
(16, 2, 'Al Orjouan Restaurant', 'Savor a delectable assortment of culinary delights at Al Orjouan, widely regarded as one of the finest buffet restaurants in Riyadh. Breakfast, lunch, and dinner are served daily in The Ritz-Carlton, Riyadh dining room\'s relaxed and refined atmosphere, while a traditional Friday brunch service begins by greeting guests with Arabic coffee and dates before serving a lavish spread of Oriental and International favorites.\r\n', 'upload/182675780.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `producttransportion`
--

CREATE TABLE `producttransportion` (
  `producttransportionid` int(11) NOT NULL,
  `categorytraid` int(1) NOT NULL,
  `producttransportionname` varchar(30) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producttransportion`
--

INSERT INTO `producttransportion` (`producttransportionid`, `categorytraid`, `producttransportionname`, `price`, `photo`) VALUES
(0, 1, 'Saudi Arabian Airlines', 'Travel aboard Saudi Arabian Airlines, feel luxury and comfort, and enjoy our excellent services!', 'upload/8064194f6314.jpg'),
(1, 1, 'Flynas', 'Save more and fly to new destinations with flynas. Book online now.', 'upload/1115182.jpg'),
(2, 1, 'Flyadeal', 'Book your trip now and enjoy high quality in Saudi Arabia. Travel at the lowest prices with Adele Airlines.', 'upload/flyadeal.jpg'),
(3, 2, 'Uber', 'Uber is service which enables you to request car wherever you are and connect you to the destination you want', 'upload/Uber.jpg'),
(4, 2, ' Careem', 'Karim is a company that specializes in delivering delivery services through its website and smart phone applications.', 'upload/Careem.jpg'),
(5, 3, 'Sar train', 'you can book tickets for any economy or business class Sar train', 'upload/maxresdefault.jpg'),
(6, 4, 'Bus', 'You can book tickets for any bus trips', 'upload/BUS.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `categorytransportion`
--
ALTER TABLE `categorytransportion`
  ADD PRIMARY KEY (`categorytraid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `producttransportion`
--
ALTER TABLE `producttransportion`
  ADD PRIMARY KEY (`producttransportionid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
