-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2020 at 03:35 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ksatour`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`email`, `password`) VALUES
('ghadahm623@gmail.com', '2331');

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
-- Table structure for table `cityofhotels`
--

CREATE TABLE `cityofhotels` (
  `NameOfCity` varchar(255) NOT NULL,
  `ID` int(11) NOT NULL,
  `photo` text NOT NULL,
  `LinkCity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `cityofhotels`
--

INSERT INTO `cityofhotels` (`NameOfCity`, `ID`, `photo`, `LinkCity`) VALUES
('Riyadh', 1, 'images\\Hotels\\Riyadh.jpg', 'SelectHotels.php'),
('Jeddah', 2, 'images\\Hotels\\Jeddah.jpg', 'SelectHotels.php'),
('Dammam', 3, 'images\\Hotels\\Dammam.jpg', 'SelectHotels.php');

-- --------------------------------------------------------

--
-- Table structure for table `cityofhouse`
--

CREATE TABLE `cityofhouse` (
  `NameOfCity` varchar(255) NOT NULL,
  `ID` int(11) NOT NULL,
  `photo` text NOT NULL,
  `LinkCity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `cityofhouse`
--

INSERT INTO `cityofhouse` (`NameOfCity`, `ID`, `photo`, `LinkCity`) VALUES
('Riyadh', 1, 'images\\Houses\\Riyadh1.jpg', 'SelectHouses.php'),
('Jeddah', 2, 'images\\Houses\\jeddah1.jpg', 'SelectHouses.php'),
('Dammam', 3, 'images\\Houses\\Damam.jpg', 'SelectHouses.php');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `dateTo` date NOT NULL,
  `city` varchar(255) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `price` varchar(500) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `location` varchar(500) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `state` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `Name`, `date`, `dateTo`, `city`, `Description`, `price`, `image`, `location`, `email`, `state`) VALUES
(1, 'Chocolaffeine - Coffee and Chocolate Exhibition', '2020-04-22', '2020-04-25', 'Riyadh', 'Join this mouth-watering event and find out more about the history and traditions of coffee roasting and chocolate making. Visitors will learn about all the different tricks of making the most delicious chocolate.', '100', '22.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3623.2876740542233!2d46.72823543551069!3d24.751323934105518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f026dbbf7a31f%3A0xf8461675a7c66027!2z2YXYsdmD2LIg2KfZhNix2YrYp9i2INin2YTYr9mI2YTZiiDZhNmE2YXYpNiq2YXYsdin2Kog2YjYp9mE2YXYudin2LHYtg!5e0!3m2!1sar!2ssa!4v1583366725847!5m2!1sar!2ssa', 'ghadah9713@gmail.com', 1),
(2, 'Art Zone', '2020-05-01', '2020-05-06', 'Jeddah', 'Enjoy watching shows and participate in games during this spectacular event, offering a wide range of activities for the whole family. Kids can have fun at the fully equipped playground, visit the child theatre and watch the Al-Doom 3D shows.', 'free', '33.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14850.472953503862!2d39.1958978302246!3d21.48349100000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3cf1a215b4751%3A0xc4921d0d6defdbca!2z2KjZhNiv2YrYqSDYp9mE2YXZhti32YLYqSDYp9mE2KrYp9ix2YrYrtmK2Kk!5e0!3m2!1sar!2ssa!4v1583367582315!5m2!1sar!2ssa\" ', 'ghadah9713@gmail.com', 1),
(3, 'Al Diriyah Classic Car Festival 2020', '2020-04-08', '2020-04-12', 'Riyadh', 'This unique festival displays more than 550 old and rare cars belonging to private owners from Saudi and different countries from all over the world. The event offers entertainment activities for adults and children.', 'free', 'car.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115947.29695568529!2d46.61005807550581!3d24.749082173749958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2ee0fbc64eabeb%3A0x2ee9dd9e06719893!2z2KfZhNiv2LHYudmK2Kk!5e0!3m2!1sar!2ssa!4v1583367376525!5m2!1sar!2ssa', 'ghadah9713@gmail.com', 1),
(4, 'Global Town Festival', '2020-04-15', '2020-04-21', 'Riyadh', 'Visit one of the most distinguished, inclusive and entertaining cultural events this season. The festival offers the best combination of Eastern and Western culture and civilization, with lots of creative activities, art and entertainment.', '100', '11.png', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3623.2808648675054!2d46.74218018499912!3d24.751557484105373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f0219bcd3e9c3%3A0xcede2ffb0c68d9ee!2z2LPYp9it2Kkg2KfZhNi52LHZiNi2INio2KfZhNiv2KfYptix2Yog2KfZhNi02LHZgtmK!5e0!3m2!1sar!2ssa!4v1584461018658!5m2!1sar!2ssa', 'ghadah9713@gmail.com', 1),
(5, 'Gallery of Mirrors', '2020-04-09', '2020-04-12', 'Dammam', 'This unique storytelling exhibition uses photography and video arts to introduce the peoples of the Arab world and the Middle East. It includes 8 prominent artworks from the Arab World Institute in Paris.', '50', '66.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3575.716083893662!2d50.12252168547198!3d26.33569148337948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e49e4161593f75b%3A0x1c9efa1e5c89d47e!2z2YXYsdmD2LIg2KfZhNmF2YTZgyDYudio2K_Yp9mE2LnYstmK2LIg2KfZhNir2YLYp9mB2Yog2KfZhNi52KfZhNmF2YogLSDYpdir2LHYp9ih!5e0!3m2!1sar!2ssa!4v1584462350247!5m2!1sar!2ssa', 'ghadah9713@gmail.com', 1),
(6, 'Shehadeh Brothers', '2020-04-02', '2020-04-07', 'Dammam', 'The Shehade Bothers, Farid and Rami will give a mind-blowing performance in Dammam. The brothers are well-known musicians, famous for their creative skills in playing an astonishing amount of musical and rhythmic instruments.', '150', 'Chehade_Brothers.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3575.716083893662!2d50.12252168547198!3d26.33569148337948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e49e4161593f75b%3A0x1c9efa1e5c89d47e!2z2YXYsdmD2LIg2KfZhNmF2YTZgyDYudio2K_Yp9mE2LnYstmK2LIg2KfZhNir2YLYp9mB2Yog2KfZhNi52KfZhNmF2YogLSDYpdir2LHYp9ih!5e0!3m2!1sar!2ssa!4v1584462350247!5m2!1sar!2ssa', 'ghadah9713@gmail.com', 1),
(7, 'Full Moon Festival', '2020-04-15', '2020-04-18', 'Jeddah', 'Celebrate the full moon with this unique festival and spectate the amazing shows that await visitors. This entertaining event offers a wide range of activities, including fire shows, musical performances and other interesting programmes.', '50', '44.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7487697.482981998!2d49.07228438562193!3d23.600664298102537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e49e4161593f75b%3A0x1c9efa1e5c89d47e!2z2YXYsdmD2LIg2KfZhNmF2YTZgyDYudio2K_Yp9mE2LnYstmK2LIg2KfZhNir2YLYp9mB2Yog2KfZhNi52KfZhNmF2YogLSDYpdir2LHYp9ih!5e0!3m2!1sar!2ssa!4v1584463938004!5m2!1sar!2ssa', 'ghadah9713@gmail.com', 1),
(8, 'Spartan Race', '2020-04-26', '2020-05-03', 'Riyadh', 'A fun and exciting experience for adventure seekers, this race includes four separate competitions for men, women, boys and girls. The race aims to enhance the fitness level of the contestants.', '150', '55.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232133.1976503883!2d46.640472125666854!3d24.62088564379448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf05809d3482676c4!2z2YjYp9is2YfYqSDYp9mE2YLYr9mK2Kkg2YTYqtmG2LjZitmFINin2YTZhdi52KfYsdi2INmI2KfZhNin2YrZgdmG2KrYp9iq!5e0!3m2!1sar!2ssa!4v1584463238582!5m2!1sar!2ssa', 'ghadah9713@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `flightno` varchar(10) NOT NULL,
  `flight_type` varchar(10) NOT NULL,
  `origin` varchar(40) NOT NULL,
  `destination` varchar(40) NOT NULL,
  `date_a` date NOT NULL,
  `a_time` time NOT NULL,
  `a_thetime` char(2) NOT NULL,
  `classtype` varchar(20) NOT NULL,
  `price` double NOT NULL,
  `r_return` date NOT NULL,
  `r_time` time NOT NULL,
  `r_thetime` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`flightno`, `flight_type`, `origin`, `destination`, `date_a`, `a_time`, `a_thetime`, `classtype`, `price`, `r_return`, `r_time`, `r_thetime`) VALUES
('SA1901', 'B773', 'LON', 'RUH', '2020-03-01', '05:30:00', 'AM', 'Economy', 1300, '2020-04-01', '05:30:00', 'AM'),
('SA1042', 'A330', 'MUN', 'JED', '2020-03-02', '10:30:00', 'AM', 'Business', 2600, '2020-03-22', '10:00:00', 'PM'),
('SA1044', 'B773', 'LEB', 'DMM', '2020-03-04', '09:15:00', 'PM', 'Economy', 1900, '2020-04-07', '10:30:00', 'AM'),
('SA1250', 'A330', 'CAI', 'RUH', '2020-03-01', '12:30:00', 'PM', 'Business', 2900, '2020-04-01', '09:00:00', 'AM'),
('SA1901', 'B773', 'LEB', 'RUH', '2020-03-01', '07:00:00', 'AM', 'Economy', 1300, '2020-04-26', '11:00:00', 'PM'),
('SA1042', 'A330', 'MUN', 'RUH', '2020-03-02', '08:10:00', 'PM', 'Business', 2600, '2020-04-26', '12:40:00', 'PM'),
('SA1860', 'B773', 'BOM', 'DMM', '2020-03-12', '03:15:00', 'PM', 'Economy', 1900, '2020-05-15', '09:00:00', 'PM'),
('SA1860', 'A330', 'CAI', 'JED', '2020-03-10', '12:30:00', 'AM', 'Business', 2900, '2020-04-20', '04:15:00', 'PM'),
('SA1676', 'A330', 'BOM', 'RUH', '2020-04-01', '10:00:00', 'AM', 'Business', 2900, '2020-04-10', '07:00:00', 'AM'),
('SA1676', 'A330', 'LON', 'JED', '2020-04-01', '12:30:00', 'PM', 'Economy', 1900, '2020-04-18', '02:30:00', 'AM'),
('SA1860', 'B773', 'BCN', 'RUH', '2020-03-01', '02:15:00', 'PM', 'Economy', 1300, '2020-03-20', '10:30:00', 'PM'),
('SA1042', 'A330', 'BCN', 'JED', '2020-03-03', '08:20:00', 'PM', 'Economy', 1300, '2020-03-20', '07:40:00', 'AM'),
('SA1042', 'A330', 'IST', 'RUH', '2020-03-20', '05:30:00', 'AM', 'Economy', 1300, '2020-04-02', '08:30:00', 'AM'),
('SA1901', 'B773', 'IST', 'JED', '2020-03-23', '11:40:00', 'PM', 'Business', 2600, '2020-04-02', '06:00:00', 'AM'),
('SA1901', 'B773', 'MXP', 'RUH', '2020-03-14', '06:30:00', 'PM', 'Economy', 1900, '2020-03-26', '01:15:00', 'PM'),
('SA1042', 'A330', 'MXP', 'DMM', '2020-03-16', '10:20:00', 'PM', 'Business', 2900, '2020-04-16', '12:00:00', 'PM'),
('SA1901', 'B773', 'LON', 'RUH', '2020-03-12', '10:11:00', 'AM', 'Economy', 1800, '2020-03-18', '12:07:00', 'AM'),
('SA1801', 'B773', 'BCN', 'JED', '2020-05-12', '17:02:00', 'AM', 'First', 1400, '2020-06-11', '17:03:00', 'AM');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `NameOfCity` varchar(260) NOT NULL,
  `HotelsName` varchar(260) NOT NULL,
  `rooms` varchar(260) NOT NULL,
  `type` varchar(260) NOT NULL,
  `Sleeps` varchar(260) NOT NULL,
  `price` varchar(260) NOT NULL,
  `details` varchar(5000) NOT NULL,
  `Photo1` varchar(260) NOT NULL,
  `Photo2` text NOT NULL,
  `Photo3` text NOT NULL,
  `Photo4` text NOT NULL,
  `Photo5` text NOT NULL,
  `Photo6` text NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `state` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `NameOfCity`, `HotelsName`, `rooms`, `type`, `Sleeps`, `price`, `details`, `Photo1`, `Photo2`, `Photo3`, `Photo4`, `Photo5`, `Photo6`, `email`, `state`) VALUES
(11, 'Riyadh', 'The Ritz-Carlton', '3', 'Deluxe, Guest room, 1 King', 'two persons', '5,250 SAR', 'Lush with 600-year-old olive trees, landscaped gardens and swaying palms, The Ritz-Carlton, Riyadh is one of those Saudi Arabia luxury hotels that completely envelopes its discerning guests in majestic surroundings and discreet, attentive service. Discover an elegant oasis where spacious suites, a world-class spa, a stunning indoor pool, lavish wedding and event spaces and exceptional dining options provide the most unforgettable memories. All room rates are now subject to a 5% VAT to be added on the final bill. A 5% Municipality Fee will also apply for every occupied room per night. ', 'images\\Hotels\\RiyadhHotels\\TheRitzCarlton\\1.jpg', 'images\\Hotels\\RiyadhHotels\\TheRitzCarlton\\2.jpg', 'images\\Hotels\\RiyadhHotels\\TheRitzCarlton\\3.jpg', 'images\\Hotels\\RiyadhHotels\\TheRitzCarlton\\4.jpg', 'images\\Hotels\\RiyadhHotels\\TheRitzCarlton\\5.jpg', 'images\\Hotels\\RiyadhHotels\\TheRitzCarlton\\6.jpg', 'ghadah9713@gmail.com', 1),
(12, 'Riyadh', 'Four Seasons Hotel', '10', 'Deluxe, Guest room, 1 King', 'two persons', '1,700 SAR', 'Four Seasons Hotel Riyadh is a modern hotel situated in the famous Kingdom Tower. It offers an outdoor pool, a spa and an elegantly decorated accommodation. Guests can enjoy free WiFi throughout the property and in the hotel rooms.', 'images\\Hotels\\RiyadhHotels\\FourSeasonsHotel\\1.jpg', 'images\\Hotels\\RiyadhHotels\\FourSeasonsHotel\\2.jpg', 'images\\Hotels\\RiyadhHotels\\FourSeasonsHotel\\3.jpg', 'images\\Hotels\\RiyadhHotels\\FourSeasonsHotel\\4.jpg', 'images\\Hotels\\RiyadhHotels\\FourSeasonsHotel\\5.jpg', 'images\\Hotels\\RiyadhHotels\\FourSeasonsHotel\\6.jpg', 'ghadah9713@gmail.com', 1),
(13, 'Riyadh', 'Burj Rafal Hotel', '10', 'Deluxe, Guest room, 1 King', 'two persons', '1,200 SR', 'Located in Burj Rafal, Burj Rafal Hotel Riyadh offers modern accommodations. It includes 2 seperate fitness centres, swimming pools and free WiFi in all areas. Riyadh Exhibition Centre is a 15- minute drive away.', 'images\\Hotels\\RiyadhHotels\\BurjRafalHotel\\1.jpg', 'images\\Hotels\\RiyadhHotels\\BurjRafalHotel\\2.jpg', 'images\\Hotels\\RiyadhHotels\\BurjRafalHotel\\3.jpg', 'images\\Hotels\\RiyadhHotels\\BurjRafalHotel\\4.jpg', 'images\\Hotels\\RiyadhHotels\\BurjRafalHotel\\5.jpg', 'images\\Hotels\\RiyadhHotels\\BurjRafalHotel\\6.jpg', 'ghadah9713@gmail.com', 1),
(14, 'Riyadh', 'Narcissus Hotel', '10', 'Deluxe, Guest room, 1 King', 'two persons', '951 SR', 'Narcissus Hotel and SPA Riyadh is located on Tahlia street cross Olya street which is the heart of Riyadh’s business and financial center. It features free Wi-Fi, 3 restaurants and meeting facilities. This 5-star hotel has won the World Luxury Hotel Award in 2015. The Kingdom Tower can be reached by car in 5 minutes. Furnished with a modern classic décor, air-conditioned units here come with a mini-bar, flat-screen satellite TV and electric kettle. The marble bathroom has a bath and shower. Suites come with a seating area. Room service is also available.', 'images\\Hotels\\RiyadhHotels\\NarcissusHotel\\1.jpg', 'images\\Hotels\\RiyadhHotels\\NarcissusHotel\\2.jpg', 'images\\Hotels\\RiyadhHotels\\NarcissusHotel\\3.jpg', 'images\\Hotels\\RiyadhHotels\\NarcissusHotel\\4.jpg', 'images\\Hotels\\RiyadhHotels\\NarcissusHotel\\5.jpg', 'images\\Hotels\\RiyadhHotels\\NarcissusHotel\\6.jpg', 'ghadah9713@gmail.com', 1),
(15, 'Riyadh', 'Hilton Riyadh Hotel', '10', 'Deluxe, Guest room, 1 King', 'two persons', '2109 SR', 'Overlooking the Granada Mall and Granada Business Park,Hilton Riyadh Hotel & Residences features 4 dining outlets and 11 flexible meeting rooms. The Eforea Spa caters to men and women and offers 2 indoor pools. Free Wi-Fi with a business centre are provided. All rooms feature flat-screen TV, work desk and seating area. All bathrooms are fitted with bath, shower and offer toiletries, bathrobe and slippers.', 'images\\Hotels\\RiyadhHotels\\HiltonRiyadhHotel\\1.jpg', 'images\\Hotels\\RiyadhHotels\\HiltonRiyadhHotel\\2.jpg', 'images\\Hotels\\RiyadhHotels\\HiltonRiyadhHotel\\3.jpg', 'images\\Hotels\\RiyadhHotels\\HiltonRiyadhHotel\\4.jpg', 'images\\Hotels\\RiyadhHotels\\HiltonRiyadhHotel\\5.jpg', 'images\\Hotels\\RiyadhHotels\\HiltonRiyadhHotel\\6.jpg', 'ghadah9713@gmail.com', 1),
(21, 'Jeddah', 'The Ritz Carlton Jeddah', '10', 'Deluxe, Guest room, 1 King', 'two persons', '1,200 SR', 'Situated in Jeddah, 4.1 km from Jeddah Corniche, The Ritz-Carlton Jeddah features accommodation with a restaurant, free private parking and a fitness centre. The property is set 5 km from Jeddah Mall, 7 km from King Fahad Fountain and 9 km from Al Andalus Mall', 'images\\Hotels\\JeddahHotels\\TheRitzCarltonJeddah\\1.jpg', 'images\\Hotels\\JeddahHotels\\TheRitzCarltonJeddah\\2.jpg', 'images\\Hotels\\JeddahHotels\\TheRitzCarltonJeddah\\3.jpg', 'images\\Hotels\\JeddahHotels\\TheRitzCarltonJeddah\\4.jpg', 'images\\Hotels\\JeddahHotels\\TheRitzCarltonJeddah\\5.jpg', 'images\\Hotels\\JeddahHotels\\TheRitzCarltonJeddah\\6.jpg', 'ghadah9713@gmail.com', 1),
(22, 'Jeddah', 'Hilton Jeddah Hotel', '10', 'Deluxe, Guest room, 1 King', 'two persons', '690 SR', 'Overlooking Jeddah Corniche and the Red Sea, Hilton features 5 dining outlets, 11 flexible meeting rooms and a health club with 2 pools. Free WiFi is available in the lobby. All rooms feature a flat-screen TV, a work desk and a seating area. The bathrooms are ', 'images\\Hotels\\JeddahHotels\\HiltonJeddahHotel\\1.jpg', 'images\\Hotels\\JeddahHotels\\HiltonJeddahHotel\\2.jpg', 'images\\Hotels\\JeddahHotels\\HiltonJeddahHotel\\3.jpg', 'images\\Hotels\\JeddahHotels\\HiltonJeddahHotel\\4.jpg', 'images\\Hotels\\JeddahHotels\\HiltonJeddahHotel\\5.jpg', 'images\\Hotels\\JeddahHotels\\HiltonJeddahHotel\\6.jpg', 'ghadah9713@gmail.com', 1),
(23, 'Jeddah', 'Inter Continental Jeddah', '10', 'Deluxe, Guest room, 1 King', 'two persons', '1,700 SR', 'At the InterContinental? Jeddah hotel, slender palms and the turquoise waters of the outdoor pool combine to create a cool haven on the edge of the Red Sea. Walkthrough the luxurious marble lobby and into a world of regal grandeur and flawless service. The sum', 'images\\Hotels\\JeddahHotels\\InterContinentalJeddah\\1.jpg', 'images\\Hotels\\JeddahHotels\\InterContinentalJeddah\\2.jpg', 'images\\Hotels\\JeddahHotels\\InterContinentalJeddah\\3.jpg', 'images\\Hotels\\JeddahHotels\\InterContinentalJeddah\\4.jpg', 'images\\Hotels\\JeddahHotels\\InterContinentalJeddah\\5.jpg', 'images\\Hotels\\JeddahHotels\\InterContinentalJeddah\\6.jpg', 'ghadah9713@gmail.com', 1),
(31, 'Dammam', 'Kempinski Hotel', '10', 'Deluxe, Guest room, 1 King', 'two persons', '900 SR', 'Ideally located between Al Khobar and Dammam, the hotel provides easy access to the business district and is just minutes from popular shopping malls. Guests can enjoy free WiFi throughout the property. All rooms and Suites are very spacious and offer light an', 'images\\Hotels\\Dammam\\KempinskiHotel\\1.jpg', 'images\\Hotels\\Dammam\\KempinskiHotel\\2.jpg', 'images\\Hotels\\Dammam\\KempinskiHotel\\3.jpg', 'images\\Hotels\\Dammam\\KempinskiHotel\\4.jpg', 'images\\Hotels\\Dammam\\KempinskiHotel\\5.jpg', 'images\\Hotels\\Dammam\\KempinskiHotel\\6.jpg', 'ghadah9713@gmail.com', 1),
(32, 'Dammam', 'Staybridge Suites', '10', 'Deluxe, Guest room, 1 King', 'two persons', '550 SR', 'Boasting a terrace, Staybridge Suites features a 24-hour front desk. This property also provides guests with an outdoor pool. A complimentary hot breakfast buffet is provided. WiFi is offered at the property. All suites come with fully equipped kitchenette inc', 'images\\Hotels\\Dammam\\StaybridgeSuites\\1.jpg', 'images\\Hotels\\Dammam\\StaybridgeSuites\\2.jpg', 'images\\Hotels\\Dammam\\StaybridgeSuites\\3.jpg', 'images\\Hotels\\Dammam\\StaybridgeSuites\\4.jpg', 'images\\Hotels\\Dammam\\StaybridgeSuites\\5.jpg', 'images\\Hotels\\Dammam\\StaybridgeSuites\\6.jpg', 'ghadah9713@gmail.com', 1),
(33, 'Dammam', 'Goldish Hotel', '10', 'Deluxe, Guest room, 1 King', 'two persons', '690 SR', 'Set in Al Khobar, 5 km from Dhahran Expo, Goldish Hotel offers accommodation with a restaurant, free private parking and a fitness centre. The property is located 16 km from Al Rashid Mall, 16 km from Al Khobar Corniche and 26 km from Sunset Marina. The accomm', 'images\\Hotels\\Dammam\\GoldishHotel\\1.jpg', 'images\\Hotels\\Dammam\\GoldishHotel\\2.jpg', 'images\\Hotels\\Dammam\\GoldishHotel\\3.jpg', 'images\\Hotels\\Dammam\\GoldishHotel\\4.jpg', 'images\\Hotels\\Dammam\\GoldishHotel\\5.jpg', 'images\\Hotels\\Dammam\\GoldishHotel\\6.jpg', 'ghadah9713@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `Messagetoadmin` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ownerlogin`
--

CREATE TABLE `ownerlogin` (
  `Email` varchar(100) NOT NULL,
  `Password` int(10) NOT NULL,
  `typeaccount` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ownerlogin`
--

INSERT INTO `ownerlogin` (`Email`, `Password`, `typeaccount`) VALUES
('Ghadah', 123123, NULL),
('ghadah9713@gmail.com', 2331, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(11) NOT NULL,
  `categoryid` int(1) NOT NULL,
  `productname` varchar(30) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `Location` varchar(2000) NOT NULL,
  `city` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `state` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `categoryid`, `productname`, `price`, `photo`, `Location`, `city`, `email`, `state`) VALUES
(1, 5, 'DOSE Café', ' Dose Café offers a variety of options for customers. Cappuccino, latte, espresso, refreshing drinks and regular coffee.\r\nFoods that include salads,\r\nAlso sandwiches and other snacks.\r\n', 'upload/DOSECafe.jpg', 'https://goo.gl/maps/3K2F2xWa1JXqvgyh9', 'Riyadh', 'ghadah9713@gmail.com', 1),
(2, 5, 'Le D’or', 'The location of Le D’or Café on the first Turkish Road, which is one of the best cafes that you can visit in order to have a candy bar in addition to a cup of hot coffee on a cold night, visit them now so that you can enjoy the date caramel cake famous for it\r\nCity: Riyadh', 'upload/Le.jpg', 'https://goo.gl/maps/eyoKSmfX4bVGD2FfA', 'Riyadh', 'ghadah9713@gmail.com', 1),
(3, 7, 'Kingdom Tower Cinema', 'We recommend booking a ticket here if you are planning to\r\ntreat yourself to the only luxurious movie theater experience in\r\nthe city. You will definitely enjoy your favorite movie here\r\nwith the comfy leather seats and waiter on demand.\r\nCity: Riyadh', 'upload/Cinema.jpg', 'https://goo.gl/maps/YhegkRxNutAitSLA8', 'Riyadh', 'ghadah9713@gmail.com', 1),
(4, 7, 'Winter at Tantora', 'an exciting line-up of musical talents will surely light up the stage. Adventure seekers will be thrilled by the amazing range of cultural and culinary experiences and exhilarating activities such as hot air balloon rides and 4x4 tours.', 'upload/Winter.jpg', 'https://goo.gl/maps/s6EuRYS3NnSz1WZo8', 'Riyadh ', 'ghadah9713@gmail.com', 1),
(5, 6, 'Kingdom Tower', 'It is not just a shopping mall, but also the second highest\r\nskyscraper in the city. You can find a great view of the city,\r\nboth mid-range shops and high-end boutiques, the only\r\nluxurious cinema, and finally accommodation at the Four\r\nSeasons. Open:\r\n9:30AM–12:30PM ', 'upload/KingdomTower.jpg', 'https://goo.gl/maps/TK8MseHmhtnaDXSx9', 'Riyadh ', 'ghadah9713@gmail.com', 1),
(6, 7, 'Riyadh Musical Fountain', 'Mindblowing 3D fountain shows using water, fire and smoke. Catch the hourly show at the Boulevard. The Fountain Show is guaranteed to amaze children and adults!.', 'upload/Riyadh.jpg', 'https://goo.gl/maps/fXoXtdW7jtn8UvHi7', 'Riyadh', 'ghadah9713@gmail.com', 1),
(7, 6, 'Riyadh Park', 'The perfect destination and the newest mall for all family\r\nmembers. It has the best combination of stores, entertainment,\r\ntrendy cafes & restaurants. Open:10AM–1:30AM', 'upload/Park.jpg', 'https://goo.gl/maps/GUK315uyJcseEatz9', 'Riyadh', 'ghadah9713@gmail.com', 1),
(8, 6, 'Mall Of Arabia ', 'The mall includes a variety of distinctive restaurants that offer many options of fresh and delicious cuisine, as there are\r\nA special recreation area for children and it contains many fun games suitable for different ages.\r\nOpen:10AM–10PM', 'upload/mool.jpg', 'https://g.page/mallofarabia?share', 'Jeddah', 'ghadah9713@gmail.com', 1),
(9, 5, 'Bert\'s', 'The Bert\'s is operators work on it to offer a bouquet of the best desserts dishes with coffee from Australian coffee that is rich in taste and quality.', 'upload/Golden Kangaro.jpg', 'https://goo.gl/maps/mcSyeqp8DtvsCyAHA', 'Jeddah', 'ghadah9713@gmail.com', 1),
(10, 5, 'Cup & Couch', 'Cup & Couch, its branch is located in Jeddah , and it offers excellent dessert dishes with the same quality coffee that they serve. It is mentioned that families are not allowed to be in the café until in the morning periods. The rest of the day is for individuals', 'upload/photo2.jpg', 'https://goo.gl/maps/onDo2VbSrKi7QN3CA', 'Jeddah', 'ghadah9713@gmail.com', 1),
(11, 6, 'Panorama Mall', 'The mall includes the finest international brand names carefully chosen with its various activities to suit all high tastes of all ages. The mall also includes one of the largest gaming areas .\r\n', 'upload/PanoramaMall.jpg', 'https://goo.gl/maps/6hZbRLq5jJtK3szv5', 'Riyadh', 'ghadah9713@gmail.com', 1),
(12, 7, 'Fakieh Aquarium', 'Fakieh Aquarium is the only aquarium in the Kingdom of Saudi Arabia, and it is also a destination for education and entertainment by displaying the wonders of the water environment in the Red Sea, and the wonders of the seas and other oceans from around the world.', 'upload/Fakieh-Aquarium.jpg', 'https://goo.gl/maps/YG1GMxe95hL3aAQm8', 'Jeddah', 'ghadah9713@gmail.com', 1),
(13, 2, 'Najd Village', 'To offer the concept of rich and diverse Najd cuisine in its original style and in a beautiful heritage ambiance that nourishes feelings of gratitude and nostalgia.Open:12:00PM-12:30AM', 'upload/NajdVillage.jpg', 'https://goo.gl/maps/RPFqNDQe47enfSsb6', 'Riyadh', 'ghadah9713@gmail.com', 1),
(14, 2, 'Zafran Indian', 'Zafran Indian Restaurant is considered one of the distinguished restaurants with delicious Indian food, as it contains a varied menu of well-known Indian dishes, especially curry and Tandoori and all kinds of matter.', 'upload/Zafran Indian.jpg', 'https://goo.gl/maps/GduXjuZCQRDzSBCeA', 'Riyadh', 'ghadah9713@gmail.com', 1),
(15, 2, 'Pampa Grill', 'Pampa Grill Argentine Restaurant is located in Riyadh in the Olaya neighborhood in Narcissus Hotel on the 9th floor, it offers wonderful Argentine dishes in the open air and beautiful views, terrible bacon Argentine dish and shepherd pie from veal and other in addition to excellent salads and drinks.', 'upload/126735.jpg', 'https://goo.gl/maps/CzBTMnBYpP4eVAnd8', 'Riyadh', 'ghadah9713@gmail.com', 1),
(16, 2, 'Al Orjouan Restaurant', 'Savor a delectable assortment of culinary delights at Al Orjouan, widely regarded as one of the finest buffet restaurants in Riyadh. Breakfast, lunch, and dinner are served daily in The Ritz-Carlton, Riyadh dining room\'s relaxed and refined atmosphere ', 'upload/182675780.jpg', 'https://goo.gl/maps/rZG4p6KmqJWaa5nV6', 'Riyadh', 'ghadah9713@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `producttransportion`
--

CREATE TABLE `producttransportion` (
  `categorytraid` int(1) NOT NULL,
  `producttransportionname` varchar(30) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `linkk` varchar(3000) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `producttransportionid` int(11) NOT NULL,
  `state` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producttransportion`
--

INSERT INTO `producttransportion` (`categorytraid`, `producttransportionname`, `price`, `photo`, `linkk`, `email`, `producttransportionid`, `state`) VALUES
(1, 'Saudi Arabian Airlines', 'Travel aboard Saudi Arabian Airlines, feel luxury and comfort, and enjoy our excellent services!\r\n', 'upload/8064194f6314.jpg', 'https://www.saudia.com/?sv_lang=en&cid=&gclid=Cj0KCQiAwP3yBRCkARIsAABGiPpj5sEgXW4rwC1OcqrTRRKiN2h2Bm6Yfh2MwpkMYA-PINyRwY7eYTAaAvQdEALw_wcB', 'ghadah9713@gmail.com', 1, 1),
(1, 'Flynas', 'Save more and fly to new destinations with flynas. Book online now.', 'upload/1115182.jpg', 'https://www.flynas.com/en', 'ghadah9713@gmail.com', 2, 1),
(1, 'Flyadeal', 'Book your trip now and enjoy high quality in Saudi Arabia. Travel at the lowest prices with Adele Airlines.', 'upload/flyadeal.jpg', 'https://www.flyadeal.com/en/', 'ghadah9713@gmail.com', 3, 1),
(2, 'Uber', 'Uber is service which enables you to request car wherever you are and connect you to the destination you want', 'upload/Uber.jpg', 'https://auth.uber.com/login/', 'ghadah9713@gmail.com', 4, 1),
(2, ' Careem', 'Karim is a company that specializes in delivering delivery services through its website and smart phone applications.', 'upload/Careem.jpg', 'https://www.careem.com/en-ae/', 'ghadah9713@gmail.com', 5, 1),
(3, 'Sar train', 'you can book tickets for any economy or business class Sar train', 'upload/maxresdefault.jpg', 'https://booking.sar.com.sa/product/search/train', 'ghadah9713@gmail.com', 6, 1),
(4, 'Bus', 'You can book tickets for any bus trips', 'upload/BUS.jpg', 'https://saptco.com.sa/', 'ghadah9713@gmail.com', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservationshotels`
--

CREATE TABLE `reservationshotels` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `phone` text NOT NULL,
  `people` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `room` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `reservationshotels`
--

INSERT INTO `reservationshotels` (`id`, `name`, `checkin`, `checkout`, `phone`, `people`, `email`, `room`) VALUES
(22, 'Jana', '2020-05-01', '2020-05-03', '0544480994', 2, 'janaalsalem@outlook.sa', 2),
(23, 'Jana', '2020-06-01', '2020-06-12', '0544480994', 2, 'janaalsalem@outlook.sa', 2);

-- --------------------------------------------------------

--
-- Table structure for table `reservationshouse`
--

CREATE TABLE `reservationshouse` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `phone` text NOT NULL,
  `people` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `room` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `reservationshouse`
--

INSERT INTO `reservationshouse` (`id`, `name`, `checkin`, `checkout`, `phone`, `people`, `email`, `room`) VALUES
(3, 'Tul', '2017-12-16', '2017-12-26', '0976245430', 2, 'tembothulani@gmail.com', 0),
(4, 'Jmalia AlRasheed', '2020-07-07', '2020-07-17', '0544480994', 1, 'janaalsalem@outlook.sa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sharinghouses`
--

CREATE TABLE `sharinghouses` (
  `id` int(11) NOT NULL,
  `City` varchar(260) NOT NULL,
  `type` varchar(255) NOT NULL,
  `reservationstype` text NOT NULL,
  `rooms` int(11) NOT NULL,
  `price` varchar(344) NOT NULL,
  `property` varchar(255) NOT NULL,
  `Time` varchar(260) NOT NULL,
  `details` text NOT NULL,
  `photo1` text NOT NULL,
  `photo2` text NOT NULL,
  `photo3` text NOT NULL,
  `photo4` text NOT NULL,
  `photo5` text NOT NULL,
  `state` int(11) DEFAULT '0',
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `sharinghouses`
--

INSERT INTO `sharinghouses` (`id`, `City`, `type`, `reservationstype`, `rooms`, `price`, `property`, `Time`, `details`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `state`, `email`) VALUES
(1, 'Jeddah', 'Flat', 'sharehouse', 5, '210$', 'Properties:   Accommodates:  Beds:  (1) Kings.', '12:00 PM - 2:00 PM', 'The apartment consists of (1) bathroom - bedroom -kitchen - available starting from 23 June 2020 - contact the owner : 0505492765', 'images\\Houses\\Jeddah\\Flat1\\1.jpg', 'images\\Houses\\Jeddah\\Flat1\\2.jpg', 'images\\Houses\\Jeddah\\Flat1\\3.jpg', 'images\\Houses\\Jeddah\\Flat1\\4.jpg', 'images\\Houses\\Jeddah\\Flat1\\5.jpg', 1, 'ghadah9713@gmail.com'),
(2, 'Jeddah', 'Flat', 'sharehouse', 3, '239$', 'Accommodates:  Beds: (1) Single', '12:00 PM- 2:00 PM', 'The flat consists of  lounge - (1) toilets - bedroom - laundry room -  Available as from 5 June 2020 - Contact the owner: 0505476597', 'images\\Houses\\Jeddah\\Flat2\\1.jpg', 'images\\Houses\\Jeddah\\Flat2\\2.jpg', 'images\\Houses\\Jeddah\\Flat2\\3.jpg', 'images\\Houses\\Jeddah\\Flat2\\4.jpg', 'images\\Houses\\Jeddah\\Flat2\\5.jpg', 1, 'ghadah9713@gmail.com'),
(3, 'Jeddah', 'Villa', 'rent', 1, '130$', 'Accommodates:  Beds: (2) Singles, (2) Kings', '12:00 PM - 2:00 PM', 'The villa consists of Ground floor. Men Council - Women Council - Hall - Kitchen-2 toilets. Master bedroom on the first floor: 3 suites - lounge - laundry room - swimming pool - car entrance - garden - Available as from 30 October 2020- Contact the owner: 0554569544 ', 'images\\Houses\\Jeddah\\Villa\\1.jpg', 'images\\Houses\\Jeddah\\Villa\\2.jpg', 'images\\Houses\\Jeddah\\Villa\\3.jpg', 'images\\Houses\\Jeddah\\Villa\\4.jpg', 'images\\Houses\\Jeddah\\Villa\\5.jpg', 1, 'ghadah9713@gmail.com'),
(4, 'Riyadh', 'Villa', 'rent', 1, '170$', ' Accommodates:  Beds: (2) Singles, 1 Kings', '12:00 PM - 2:00 PM', 'The villa consists of Ground floor. Men Council - Women Council - Hall - Kitchen-2 toilets. Master bedroom on the first floor: 3 suites - lounge - laundry room - swimming pool - car entrance - garden - Available as from 29 October 2020- Contact the owner: 0558276544 ', 'images\\Houses\\Riyadh\\house1\\1.JPG', 'images\\Houses\\Riyadh\\house1\\2.JPG', 'images\\Houses\\Riyadh\\house1\\3.JPG', 'images\\Houses\\Riyadh\\house1\\4.JPG', 'images\\Houses\\Riyadh\\house1\\5.JPG', 1, 'ghadah9713@gmail.com'),
(5, 'Riyadh', 'Villa', 'rent', 1, '189$', ' Accommodates: 2 Beds: (1) Singles , (1) Kings ', '12:00 PM - 2:00 PM', 'The villa consists of Ground floor. Men Council - Women Council - Hall - Kitchen-2 toilets. Master bedroom on the first floor: 4 suites - lounge - laundry room - swimming pool - car entrance - garden -Available as from 25 October 2020 - Contact the owner: 0558234566\r\n', 'images\\Houses\\Riyadh\\house2\\1.jpg', 'images\\Houses\\Riyadh\\house2\\2.jpg', 'images\\Houses\\Riyadh\\house2\\3.jpg', 'images\\Houses\\Riyadh\\house2\\4.jpg', 'images\\Houses\\Riyadh\\house2\\5.jpg', 1, 'ghadah9713@gmail.com'),
(6, 'Riyadh', 'Villa', 'sharehouse', 5, '170$', 'Accommodates: 2 Beds: (1) Singles , (1) Kings \r\n', '12:00 PM - 2:00 PM', 'The villa consists of Ground floor. Men Council - Women Council - Hall - Kitchen-2 toilets -lounge - laundry room - car entrance - garden -Available as from 7 October 2020 - Contact the owner: 0558234566', 'images\\Houses\\Riyadh\\house3\\1.jpg', 'images\\Houses\\Riyadh\\house3\\2.jpg', 'images\\Houses\\Riyadh\\house3\\3.jpg', 'images\\Houses\\Riyadh\\house3\\4.jpg', 'images\\Houses\\Riyadh\\house3\\5.jpg', 1, 'ghadah9713@gmail.com'),
(7, 'Dammam', 'Bungalow', 'sharehouse', 3, '167$', 'Accommodates:  Beds:  (1) Kings .', '12:00 PM - 2:00 PM', 'Consists of (1) bedroom - (2) bathroom - kitchen - lounge, dining table - jacuzzi bath - available from 5 May 2020 - Contact the owner: 0505337658', 'images\\Houses\\Dammam\\house2\\1.jpg', 'images\\Houses\\Dammam\\house2\\2.jpg', 'images\\Houses\\Dammam\\house2\\3.jpg', 'images\\Houses\\Dammam\\house2\\4.jpg', 'images\\Houses\\Dammam\\house2\\5.jpg', 1, 'ghadah9713@gmail.com'),
(8, 'Dammam', 'Villa', 'rent', 1, '210$', ' Accommodates:  Beds:  (2) Kings.', '12:00 PM - 2:00 PM', 'The villa consists of one bedroom - bathroom - kitchen - hall, swimming pool - available starting from 4 August 2020 - contact the owner: 0505820865', 'images\\Houses\\Dammam\\Villa\\1.jpg', 'images\\Houses\\Dammam\\Villa\\2.jpg', 'images\\Houses\\Dammam\\Villa\\3.jpg', 'images\\Houses\\Dammam\\Villa\\4.jpg', 'images\\Houses\\Dammam\\Villa\\5.jpg', 1, 'ghadah9713@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `Email` varchar(30) NOT NULL,
  `Password` int(10) NOT NULL,
  `PhoneNumber` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`Email`, `Password`, `PhoneNumber`) VALUES
('ghadah@gmail.com', 123123, 56672557),
('ghadah', 123123, 56778777);

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
-- Indexes for table `cityofhotels`
--
ALTER TABLE `cityofhotels`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cityofhouse`
--
ALTER TABLE `cityofhouse`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `reservationshotels`
--
ALTER TABLE `reservationshotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservationshouse`
--
ALTER TABLE `reservationshouse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sharinghouses`
--
ALTER TABLE `sharinghouses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `producttransportion`
--
ALTER TABLE `producttransportion`
  MODIFY `producttransportionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reservationshotels`
--
ALTER TABLE `reservationshotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `reservationshouse`
--
ALTER TABLE `reservationshouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sharinghouses`
--
ALTER TABLE `sharinghouses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
