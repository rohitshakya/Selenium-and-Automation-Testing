-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2021 at 01:41 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `viva_volt_c4`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `assignment_id` int(255) NOT NULL,
  `period_id` int(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `assignment_details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignment_id`, `period_id`, `user_id`, `assignment_details`) VALUES
(1, 6, 16, 'Science Assignment is given by Maria Hill.'),
(2, 4, 25, 'English Assignment');

-- --------------------------------------------------------

--
-- Table structure for table `category_type`
--

CREATE TABLE `category_type` (
  `cat_id` tinyint(4) NOT NULL,
  `cat_name` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `cat_num` int(10) NOT NULL DEFAULT 1,
  `cat_img` text COLLATE utf8_croatian_ci DEFAULT NULL,
  `cat_bg` varchar(10) COLLATE utf8_croatian_ci DEFAULT NULL,
  `deleteflag` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `category_type`
--

INSERT INTO `category_type` (`cat_id`, `cat_name`, `cat_num`, `cat_img`, `cat_bg`, `deleteflag`) VALUES
(1, 'Activities', 1, 'category_1611206125_87e9d7b8d3289504b1ce.png', 'd87913', 0),
(2, 'Watch', 2, 'category_1611741428_8fdee6a97d862e67f563.png', '277974', 0),
(3, 'MCQ', 0, 'category_1611741366_247425da925f1dd557f8.png', 'ea5744', 0),
(4, 'Read', 2, 'category_1611741398_2b47dbce095a91dc81a1.png', 'a94442', 0),
(5, 'Quiz', 3, 'category_1611741381_76b7bbd8db53efc2aea7.png', '3ac56a', 0),
(6, 'Listen', 4, 'category_1611206140_8bc909e6d5011c9eae4c.png', '22482f', 0),
(7, 'Speak', 1, 'category_1611741417_f907824f0b49313acbb5.png', 'b3606b', 0),
(8, 'Pattern', 1, 'category_1611206149_9533943456de64eec02e.png', '3a5426', 0),
(9, 'Aa', 1, '', NULL, 0),
(10, 'Bb', 2, '', NULL, 0),
(11, 'Cc', 3, '', NULL, 0),
(12, 'Dd', 4, '', NULL, 0),
(13, 'Ee', 5, '', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `chaptername`
--

CREATE TABLE `chaptername` (
  `id` int(10) NOT NULL,
  `chapT_name` varchar(1000) COLLATE utf8_croatian_ci NOT NULL,
  `slug` varchar(256) COLLATE utf8_croatian_ci DEFAULT NULL,
  `chap_image` varchar(100) COLLATE utf8_croatian_ci DEFAULT NULL,
  `chap_content` text COLLATE utf8_croatian_ci DEFAULT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `series_id` int(11) NOT NULL,
  `module_id` int(11) DEFAULT NULL,
  `chap_index` int(11) NOT NULL,
  `deleteflag` tinyint(4) NOT NULL DEFAULT 0,
  `free` tinyint(2) NOT NULL DEFAULT 0,
  `trial` tinyint(2) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `chaptername`
--

INSERT INTO `chaptername` (`id`, `chapT_name`, `slug`, `chap_image`, `chap_content`, `class_id`, `subject_id`, `series_id`, `module_id`, `chap_index`, `deleteflag`, `free`, `trial`) VALUES
(13, 'Astronomical Geography', 'astronomical-geography-3', '', 'Astronomical Geography', 3, 11, 11, 10, 0, 0, 1, 1),
(14, 'Letter', 'letter-12', 'chapter_1613720451_ac2fee15c6e3afa7e6c9.png', '', 12, 13, 0, 25, 0, 0, 0, 1),
(15, 'Opposites', 'opposites-12', 'chapter_1613724742_565e6a5de300ea7f4bad.png', '', 12, 13, 0, 25, 0, 0, 0, 0),
(16, 'Ebook', 'ebook-12', 'chapter_1613723791_ba48dcb6aac2fee48bad.png', '', 12, 13, 0, 25, 0, 0, 1, 0),
(17, 'Flash Cards', 'flash-cards-12', 'chapter_1613724381_dc3ca7126e72783b268d.png', '', 12, 13, 0, 25, 0, 0, 0, 1),
(18, 'Did You Know This?', 'did-you-know-this-3', 'chapter_1613638398_7edfe841aebf0f5f67a6.png', 'Let’s learn about some amazing animals and their amazing abilities.', 3, 7, 12, 17, 0, 0, 1, 0),
(19, 'Our Solar System', 'our-solar-system-3', 'chapter_1613795992_7ca20a43444192368bb4.png', 'Let’s take a peek at our neighbours in outer space.', 3, 7, 15, 17, 0, 0, 0, 0),
(20, 'Great Indians', 'great-indians-3', 'chapter_1613639193_3f4e2a15947cf3a37130.png', 'Let’s learn about the people that helped our country attain freedom for British rule.', 3, 7, 13, 17, 0, 0, 0, 0),
(21, 'Months of the Year', 'months-of-the-year-3', 'chapter_1613796122_e0519db3db6125780477.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ..', 3, 7, 19, 17, 0, 0, 0, 0),
(22, 'Great Buildings', 'great-buildings-3', 'chapter_1613737304_4f7664ead109ddecb439.png', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typese', 3, 7, 13, 17, 0, 0, 0, 0),
(23, 'Word Fun', 'word-fun-3', 'chapter_1613795473_c05b8bfde32ba3859cc1.png', 'Let’s see how some famous names take on new meanings.', 3, 7, 14, 17, 0, 0, 0, 0),
(24, 'Puzzle Time', 'puzzle-time-3', 'chapter_1613644897_779931a2ea031f7b2bbc.png', 'Sharpen your mind with some popular puzzles in this chapter.', 3, 7, 16, 17, 0, 0, 0, 0),
(25, 'Road Safety', 'road-safety-3', 'chapter_1613645272_1088be050c642ad240db.png', 'Here we will see how to cross a road safely and other ways to stay safe on roads.', 3, 7, 18, 17, 0, 0, 0, 0),
(26, 'Amazing Creatures', 'amazing-creatures-3', 'chapter_1613645906_28ab5db4387e1a94ef3b.png', 'Whether big or small, every creature on earth can surprise you with its special abilities. Let’s learn about some of them here', 3, 7, 12, 17, 0, 0, 0, 0),
(27, 'A World Tour', 'a-world-tour-3', 'chapter_1613649004_b3243ff98ce025de6776.png', 'Here’s your chance to embark on a tour of some of the best-known travel destinations.', 3, 7, 13, 17, 0, 0, 0, 0),
(28, 'Our Music', 'our-music-3', 'chapter_1613708865_4e81d101646271cc5e83.png', 'Indian classical music is an alliance of great musical minds and fascinating musical instruments. Let’s learn about them here.', 3, 7, 13, 17, 0, 0, 0, 0),
(29, 'Indian Sportswomen', 'indian-sportswomen-3', 'chapter_1613709291_875fb092ad4fbb3d1f31.png', 'Here we will learn about the sportswomen that have made our country proud.', 3, 7, 17, 17, 0, 0, 0, 0),
(30, 'Their Strange Ways', 'their-strange-ways-3', 'chapter_1613709667_87a3e0ba256e015dca41.png', 'No great mind ever existed without a touch of madness. Let’s learn about some famous people that prove this belief right.', 3, 7, 19, 17, 0, 0, 0, 0),
(31, 'Friends with Feathers', 'friends-with-feathers-3', 'chapter_1613710051_395b37a17f2fa85053df.png', 'Let’s learn about the wonderful creatures that have conquered the sky.', 3, 7, 12, 17, 0, 0, 0, 0),
(32, 'Flag Quiz', 'flag-quiz-3', 'chapter_1613710747_731a1f32abbc12c11b55.png', 'Here we will find out the remarkable features of some countries’ national flags.', 3, 7, 13, 17, 0, 0, 0, 0),
(33, 'Great Inventions', 'great-inventions-3', 'chapter_1613711305_3168454d782a8381a59b.png', 'Let’s learn about some great inventions and the geniuses behind them.', 3, 7, 15, 17, 0, 0, 0, 0),
(34, 'Brainpower', 'brainpower-3', 'chapter_1613711662_86951bd77b83a2b4e2b8.png', 'Let’s see how we can use the alphabet to organize our lists.', 3, 7, 16, 17, 0, 0, 0, 0),
(35, 'Care for Animals', 'care-for-animals-3', 'chapter_1613712464_ffdb0beec4a4c3e7e60a.png', 'Let’s see how we can keep the animals around us healthy and safe.', 3, 7, 18, 17, 0, 0, 0, 0),
(36, 'Matchless Animals', 'matchless-animals-3', 'chapter_1613713026_71853646298374194d3b.png', 'Here we will learn about some of the biggest, fastest and smallest members of the animal kingdom.', 3, 7, 12, 17, 0, 0, 0, 0),
(37, 'Classical Dances', 'classical-dances-3', 'chapter_1613713430_4a3fdeb9be58e68b928e.png', 'Let’s learn about the origins of classical dance forms of India.', 3, 7, 20, 17, 0, 0, 0, 0),
(38, 'Electricity', 'electricity-3', 'chapter_1613713687_f0e2be944510cf36b146.png', 'Let’s take a look at some truly massive solar power plants built in India.', 3, 7, 20, 17, 0, 0, 0, 0),
(39, 'Animal Sounds', 'animal-sounds-3', 'chapter_1613714210_a31cd52e63b62b52ddd0.png', 'Here we will learn about the special sounds that animals make.', 3, 7, 14, 17, 0, 0, 0, 0),
(40, 'National Games', 'national-games-3', 'chapter_1613714878_9892b5c52a57cf078ecb.png', 'Let’s look at the national games of some countries.', 3, 7, 17, 17, 0, 0, 0, 0),
(41, 'Bonsai', 'bonsai-3', 'chapter_1613715393_4b053364ed1bf839d44f.png', 'Let’s discover the art of Bonsai and how people grow trees that can fit inside your drawers.', 3, 7, 12, 17, 0, 0, 0, 0),
(42, 'Sobriquets', 'sobriquets-3', 'chapter_1613716433_8faf8c2c2731cd4523db.png', 'Let’s learn why some famous places around the world have special names attached to them.', 3, 7, 13, 17, 0, 0, 0, 0),
(43, 'Clockwork Puzzle', 'clockwork-puzzle-3', 'chapter_1613716911_ba97a3e94e1e6c7964be.png', 'Let’s solve a fun puzzle about clocks and parts of our body.', 3, 7, 16, 17, 0, 0, 0, 0),
(44, 'Mind Your Manners', 'mind-your-manners-3', 'chapter_1613717227_1b5287418b0cf0de99d7.png', 'Good manners are a way of respecting others and yourself. Let’s look at some of them here.', 3, 7, 18, 17, 0, 0, 0, 0),
(45, 'SatyaNadella', 'satyanadella-3', 'chapter_1613717466_3be761f3f3b83fa2d48e.png', 'Let’s learn about the life of a global business icon today.', 3, 7, 19, 17, 0, 0, 0, 0),
(46, 'Useful Plants', 'useful-plants-3', 'chapter_1613717922_4ffb7f8ab633077c090f.png', 'Let’s learn how plants provide us with countless gifts and make our lives better.', 3, 7, 12, 17, 0, 0, 0, 0),
(47, 'Festival Time', 'festival-time-3', 'chapter_1613718319_2165c8fcb2f8d2a32414.png', 'Let’s learn about some festivals celebrated in different parts of India.', 3, 7, 20, 17, 0, 0, 0, 0),
(48, 'Bookstall', 'bookstall-3', 'chapter_1613718749_e26828bcc9c1559c360e.png', 'Here we will learn about some iconic books and their authors.', 3, 7, 14, 17, 0, 0, 0, 0),
(49, 'Our Amazing Body', 'our-amazing-body-3', 'chapter_1613719298_8b28157ef48f6386a0d0.png', 'Let’s learn about some amazing features of our body.', 3, 7, 15, 17, 0, 0, 0, 0),
(50, 'My Game', 'my-game-3', 'chapter_1613719791_68ec31d0dcb586015f26.png', 'Let’s learn about some popular sports and the terms for people who play them.', 3, 7, 17, 17, 0, 0, 0, 0),
(51, 'Countries, Capitals and Currencies', 'countries-capitals-and-currencies-3', 'chapter_1613722738_93cfa41f08bb459e4b09.png', 'Here we will learn about some countries, their capitals and the name and symbol of their currencies.', 3, 7, 13, 17, 0, 0, 0, 0),
(52, 'Places and Nicknames', 'places-and-nicknames-3', 'chapter_1613722966_465df49ddcb139fd753b.png', 'Many Indian cities have earned special names because of their features. Let’s have a look at some of them here.', 3, 7, 20, 17, 0, 0, 0, 0),
(53, 'You Know My Name', 'you-know-my-name-3', 'chapter_1613723688_0dbfcc63aea518f227fb.png', 'Here we will look at some sports icons and their nicknames..', 3, 7, 17, 17, 0, 0, 0, 0),
(54, 'Be Honest Be Good', 'be-honest-be-good-3', 'chapter_1613724181_9d9278db5cdcbcac54b2.png', 'Honesty is the basis for good character. Let’s look at some imaginary situations to practise this value.', 3, 7, 18, 17, 0, 0, 0, 0),
(55, 'Greetings from Around the World', 'greetings-from-around-the-world-3', 'chapter_1613725015_f94eb10ab8f28dbff65d.png', ' Let’s see how people from different parts of the earth greet each other.', 3, 7, 19, 17, 0, 0, 0, 0),
(56, 'World’s Smallest', 'worlds-smallest-3', 'chapter_1613725279_6914d7b9aac5797ac398.png', 'The natural world is teeming with small yet wonderful creatures. Let’s learn about some them today.', 3, 7, 12, 17, 0, 0, 0, 0),
(57, 'Heritage of India', 'heritage-of-india-3', 'chapter_1613726070_779b691d37168abe6705.png', 'Let’s visit some famous monuments of India.', 3, 7, 20, 17, 0, 0, 0, 0),
(58, 'Group Names', 'group-names-3', 'chapter_1613726463_7ffcae46079ace411790.png', 'Here we will learn about everyday things and put them in different groups.', 3, 7, 14, 17, 0, 0, 0, 0),
(59, 'Put on Your Thinking Cap', 'put-on-your-thinking-cap-3', 'chapter_1613726919_d502f1a05cde155cc8b1.jpg', 'Let’s solve some fun puzzles', 3, 7, 16, 17, 0, 0, 0, 0),
(60, 'Water Sports', 'water-sports-3', 'chapter_1613727434_251c68116583efbf87ad.png', 'Let’s learn about some sports played in water.', 3, 7, 17, 17, 0, 0, 0, 0),
(61, 'Island Nations', 'island-nations-3', 'chapter_1613727825_9fd219d48ef9fe40e85a.png', 'Let’s take a trip to some countries that are entirely located on islands or groups of islands.', 3, 7, 13, 17, 0, 0, 0, 0),
(62, 'National Parks', 'national-parks-3', 'chapter_1613728524_d43aa3766ca7a65d180a.png', 'National parks are places set up to protect wild plants and animals. Let’s visit some of them today.', 3, 7, 20, 17, 0, 0, 0, 0),
(63, 'Animal Similes', 'animal-similes-3', 'chapter_1613728889_6c58739e96ecabc7ee82.png', 'Let’s learn some expressions that use animals for comparison.', 3, 7, 14, 17, 0, 0, 0, 0),
(64, 'Study to Succeed', 'study-to-succeed-3', 'chapter_1613729319_16e6a019ebce7f256529.png', 'Let’s learn how to plan and better organize our study-time.', 3, 7, 18, 17, 0, 0, 0, 0),
(65, 'World’s Largest', 'worlds-largest-3', 'chapter_1613729750_c97705f84ba3741d953f.png', 'Let’s go on a tour of some of the largest natural features of the world.', 3, 7, 19, 17, 0, 0, 0, 0),
(66, 'Ebook', 'ebook-12', 'chapter_1613731813_99c64b5960ad22aa98ff.png', '', 12, 13, 0, 26, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city`, `state_id`) VALUES
(1, 'North and Middle Andaman', 32),
(2, 'South Andaman', 32),
(3, 'Nicobar', 32),
(4, 'Adilabad', 1),
(5, 'Anantapur', 1),
(6, 'Chittoor', 1),
(7, 'East Godavari', 1),
(8, 'Guntur', 1),
(9, 'Hyderabad', 1),
(10, 'Kadapa', 1),
(11, 'Karimnagar', 1),
(12, 'Khammam', 1),
(13, 'Krishna', 1),
(14, 'Kurnool', 1),
(15, 'Mahbubnagar', 1),
(16, 'Medak', 1),
(17, 'Nalgonda', 1),
(18, 'Nellore', 1),
(19, 'Nizamabad', 1),
(20, 'Prakasam', 1),
(21, 'Rangareddi', 1),
(22, 'Srikakulam', 1),
(23, 'Vishakhapatnam', 1),
(24, 'Vizianagaram', 1),
(25, 'Warangal', 1),
(26, 'West Godavari', 1),
(27, 'Anjaw', 3),
(28, 'Changlang', 3),
(29, 'East Kameng', 3),
(30, 'Lohit', 3),
(31, 'Lower Subansiri', 3),
(32, 'Papum Pare', 3),
(33, 'Tirap', 3),
(34, 'Dibang Valley', 3),
(35, 'Upper Subansiri', 3),
(36, 'West Kameng', 3),
(37, 'Barpeta', 2),
(38, 'Bongaigaon', 2),
(39, 'Cachar', 2),
(40, 'Darrang', 2),
(41, 'Dhemaji', 2),
(42, 'Dhubri', 2),
(43, 'Dibrugarh', 2),
(44, 'Goalpara', 2),
(45, 'Golaghat', 2),
(46, 'Hailakandi', 2),
(47, 'Jorhat', 2),
(48, 'Karbi Anglong', 2),
(49, 'Karimganj', 2),
(50, 'Kokrajhar', 2),
(51, 'Lakhimpur', 2),
(52, 'Marigaon', 2),
(53, 'Nagaon', 2),
(54, 'Nalbari', 2),
(55, 'North Cachar Hills', 2),
(56, 'Sibsagar', 2),
(57, 'Sonitpur', 2),
(58, 'Tinsukia', 2),
(59, 'Araria', 4),
(60, 'Aurangabad', 4),
(61, 'Banka', 4),
(62, 'Begusarai', 4),
(63, 'Bhagalpur', 4),
(64, 'Bhojpur', 4),
(65, 'Buxar', 4),
(66, 'Darbhanga', 4),
(67, 'Purba Champaran', 4),
(68, 'Gaya', 4),
(69, 'Gopalganj', 4),
(70, 'Jamui', 4),
(71, 'Jehanabad', 4),
(72, 'Khagaria', 4),
(73, 'Kishanganj', 4),
(74, 'Kaimur', 4),
(75, 'Katihar', 4),
(76, 'Lakhisarai', 4),
(77, 'Madhubani', 4),
(78, 'Munger', 4),
(79, 'Madhepura', 4),
(80, 'Muzaffarpur', 4),
(81, 'Nalanda', 4),
(82, 'Nawada', 4),
(83, 'Patna', 4),
(84, 'Purnia', 4),
(85, 'Rohtas', 4),
(86, 'Saharsa', 4),
(87, 'Samastipur', 4),
(88, 'Sheohar', 4),
(89, 'Sheikhpura', 4),
(90, 'Saran', 4),
(91, 'Sitamarhi', 4),
(92, 'Supaul', 4),
(93, 'Siwan', 4),
(94, 'Vaishali', 4),
(95, 'Pashchim Champaran', 4),
(96, 'Bastar', 36),
(97, 'Bilaspur', 36),
(98, 'Dantewada', 36),
(99, 'Dhamtari', 36),
(100, 'Durg', 36),
(101, 'Jashpur', 36),
(102, 'Janjgir-Champa', 36),
(103, 'Korba', 36),
(104, 'Koriya', 36),
(105, 'Kanker', 36),
(106, 'Kawardha', 36),
(107, 'Mahasamund', 36),
(108, 'Raigarh', 36),
(109, 'Rajnandgaon', 36),
(110, 'Raipur', 36),
(111, 'Surguja', 36),
(112, 'Diu', 29),
(113, 'Daman', 29),
(114, 'Central Delhi', 25),
(115, 'East Delhi', 25),
(116, 'New Delhi', 25),
(117, 'North Delhi', 25),
(118, 'North East Delhi', 25),
(119, 'North West Delhi', 25),
(120, 'South Delhi', 25),
(121, 'South West Delhi', 25),
(122, 'West Delhi', 25),
(123, 'North Goa', 26),
(124, 'South Goa', 26),
(125, 'Ahmedabad', 5),
(126, 'Amreli District', 5),
(127, 'Anand', 5),
(128, 'Banaskantha', 5),
(129, 'Bharuch', 5),
(130, 'Bhavnagar', 5),
(131, 'Dahod', 5),
(132, 'The Dangs', 5),
(133, 'Gandhinagar', 5),
(134, 'Jamnagar', 5),
(135, 'Junagadh', 5),
(136, 'Kutch', 5),
(137, 'Kheda', 5),
(138, 'Mehsana', 5),
(139, 'Narmada', 5),
(140, 'Navsari', 5),
(141, 'Patan', 5),
(142, 'Panchmahal', 5),
(143, 'Porbandar', 5),
(144, 'Rajkot', 5),
(145, 'Sabarkantha', 5),
(146, 'Surendranagar', 5),
(147, 'Surat', 5),
(148, 'Vadodara', 5),
(149, 'Valsad', 5),
(150, 'Ambala', 6),
(151, 'Bhiwani', 6),
(152, 'Faridabad', 6),
(153, 'Fatehabad', 6),
(154, 'Gurgaon', 6),
(155, 'Hissar', 6),
(156, 'Jhajjar', 6),
(157, 'Jind', 6),
(158, 'Karnal', 6),
(159, 'Kaithal', 6),
(160, 'Kurukshetra', 6),
(161, 'Mahendragarh', 6),
(162, 'Mewat', 6),
(163, 'Panchkula', 6),
(164, 'Panipat', 6),
(165, 'Rewari', 6),
(166, 'Rohtak', 6),
(167, 'Sirsa', 6),
(168, 'Sonepat', 6),
(169, 'Yamuna Nagar', 6),
(170, 'Palwal', 6),
(171, 'Bilaspur', 7),
(172, 'Chamba', 7),
(173, 'Hamirpur', 7),
(174, 'Kangra', 7),
(175, 'Kinnaur', 7),
(176, 'Kulu', 7),
(177, 'Lahaul and Spiti', 7),
(178, 'Mandi', 7),
(179, 'Shimla', 7),
(180, 'Sirmaur', 7),
(181, 'Solan', 7),
(182, 'Una', 7),
(183, 'Anantnag', 8),
(184, 'Badgam', 8),
(185, 'Bandipore', 8),
(186, 'Baramula', 8),
(187, 'Doda', 8),
(188, 'Jammu', 8),
(189, 'Kargil', 8),
(190, 'Kathua', 8),
(191, 'Kupwara', 8),
(192, 'Leh', 8),
(193, 'Poonch', 8),
(194, 'Pulwama', 8),
(195, 'Rajauri', 8),
(196, 'Srinagar', 8),
(197, 'Samba', 8),
(198, 'Udhampur', 8),
(199, 'Bokaro', 34),
(200, 'Chatra', 34),
(201, 'Deoghar', 34),
(202, 'Dhanbad', 34),
(203, 'Dumka', 34),
(204, 'Purba Singhbhum', 34),
(205, 'Garhwa', 34),
(206, 'Giridih', 34),
(207, 'Godda', 34),
(208, 'Gumla', 34),
(209, 'Hazaribagh', 34),
(210, 'Koderma', 34),
(211, 'Lohardaga', 34),
(212, 'Pakur', 34),
(213, 'Palamu', 34),
(214, 'Ranchi', 34),
(215, 'Sahibganj', 34),
(216, 'Seraikela and Kharsawan', 34),
(217, 'Pashchim Singhbhum', 34),
(218, 'Ramgarh', 34),
(219, 'Bidar', 9),
(220, 'Belgaum', 9),
(221, 'Bijapur', 9),
(222, 'Bagalkot', 9),
(223, 'Bellary', 9),
(224, 'Bangalore Rural District', 9),
(225, 'Bangalore Urban District', 9),
(226, 'Chamarajnagar', 9),
(227, 'Chikmagalur', 9),
(228, 'Chitradurga', 9),
(229, 'Davanagere', 9),
(230, 'Dharwad', 9),
(231, 'Dakshina Kannada', 9),
(232, 'Gadag', 9),
(233, 'Gulbarga', 9),
(234, 'Hassan', 9),
(235, 'Haveri District', 9),
(236, 'Kodagu', 9),
(237, 'Kolar', 9),
(238, 'Koppal', 9),
(239, 'Mandya', 9),
(240, 'Mysore', 9),
(241, 'Raichur', 9),
(242, 'Shimoga', 9),
(243, 'Tumkur', 9),
(244, 'Udupi', 9),
(245, 'Uttara Kannada', 9),
(246, 'Ramanagara', 9),
(247, 'Chikballapur', 9),
(248, 'Yadagiri', 9),
(249, 'Alappuzha', 10),
(250, 'Ernakulam', 10),
(251, 'Idukki', 10),
(252, 'Kollam', 10),
(253, 'Kannur', 10),
(254, 'Kasaragod', 10),
(255, 'Kottayam', 10),
(256, 'Kozhikode', 10),
(257, 'Malappuram', 10),
(258, 'Palakkad', 10),
(259, 'Pathanamthitta', 10),
(260, 'Thrissur', 10),
(261, 'Thiruvananthapuram', 10),
(262, 'Wayanad', 10),
(263, 'Alirajpur', 11),
(264, 'Anuppur', 11),
(265, 'Ashok Nagar', 11),
(266, 'Balaghat', 11),
(267, 'Barwani', 11),
(268, 'Betul', 11),
(269, 'Bhind', 11),
(270, 'Bhopal', 11),
(271, 'Burhanpur', 11),
(272, 'Chhatarpur', 11),
(273, 'Chhindwara', 11),
(274, 'Damoh', 11),
(275, 'Datia', 11),
(276, 'Dewas', 11),
(277, 'Dhar', 11),
(278, 'Dindori', 11),
(279, 'Guna', 11),
(280, 'Gwalior', 11),
(281, 'Harda', 11),
(282, 'Hoshangabad', 11),
(283, 'Indore', 11),
(284, 'Jabalpur', 11),
(285, 'Jhabua', 11),
(286, 'Katni', 11),
(287, 'Khandwa', 11),
(288, 'Khargone', 11),
(289, 'Mandla', 11),
(290, 'Mandsaur', 11),
(291, 'Morena', 11),
(292, 'Narsinghpur', 11),
(293, 'Neemuch', 11),
(294, 'Panna', 11),
(295, 'Rewa', 11),
(296, 'Rajgarh', 11),
(297, 'Ratlam', 11),
(298, 'Raisen', 11),
(299, 'Sagar', 11),
(300, 'Satna', 11),
(301, 'Sehore', 11),
(302, 'Seoni', 11),
(303, 'Shahdol', 11),
(304, 'Shajapur', 11),
(305, 'Sheopur', 11),
(306, 'Shivpuri', 11),
(307, 'Sidhi', 11),
(308, 'Singrauli', 11),
(309, 'Tikamgarh', 11),
(310, 'Ujjain', 11),
(311, 'Umaria', 11),
(312, 'Vidisha', 11),
(313, 'Ahmednagar', 12),
(314, 'Akola', 12),
(315, 'Amrawati', 12),
(316, 'Aurangabad', 12),
(317, 'Bhandara', 12),
(318, 'Beed', 12),
(319, 'Buldhana', 12),
(320, 'Chandrapur', 12),
(321, 'Dhule', 12),
(322, 'Gadchiroli', 12),
(323, 'Gondiya', 12),
(324, 'Hingoli', 12),
(325, 'Jalgaon', 12),
(326, 'Jalna', 12),
(327, 'Kolhapur', 12),
(328, 'Latur', 12),
(329, 'Mumbai City', 12),
(330, 'Mumbai suburban', 12),
(331, 'Nandurbar', 12),
(332, 'Nanded', 12),
(333, 'Nagpur', 12),
(334, 'Nashik', 12),
(335, 'Osmanabad', 12),
(336, 'Parbhani', 12),
(337, 'Pune', 12),
(338, 'Raigad', 12),
(339, 'Ratnagiri', 12),
(340, 'Sindhudurg', 12),
(341, 'Sangli', 12),
(342, 'Solapur', 12),
(343, 'Satara', 12),
(344, 'Thane', 12),
(345, 'Wardha', 12),
(346, 'Washim', 12),
(347, 'Yavatmal', 12),
(348, 'Bishnupur', 13),
(349, 'Churachandpur', 13),
(350, 'Chandel', 13),
(351, 'Imphal East', 13),
(352, 'Senapati', 13),
(353, 'Tamenglong', 13),
(354, 'Thoubal', 13),
(355, 'Ukhrul', 13),
(356, 'Imphal West', 13),
(357, 'East Garo Hills', 14),
(358, 'East Khasi Hills', 14),
(359, 'Jaintia Hills', 14),
(360, 'Ri-Bhoi', 14),
(361, 'South Garo Hills', 14),
(362, 'West Garo Hills', 14),
(363, 'West Khasi Hills', 14),
(364, 'Aizawl', 15),
(365, 'Champhai', 15),
(366, 'Kolasib', 15),
(367, 'Lawngtlai', 15),
(368, 'Lunglei', 15),
(369, 'Mamit', 15),
(370, 'Saiha', 15),
(371, 'Serchhip', 15),
(372, 'Dimapur', 16),
(373, 'Kohima', 16),
(374, 'Mokokchung', 16),
(375, 'Mon', 16),
(376, 'Phek', 16),
(377, 'Tuensang', 16),
(378, 'Wokha', 16),
(379, 'Zunheboto', 16),
(380, 'Angul', 17),
(381, 'Boudh', 17),
(382, 'Bhadrak', 17),
(383, 'Bolangir', 17),
(384, 'Bargarh', 17),
(385, 'Baleswar', 17),
(386, 'Cuttack', 17),
(387, 'Debagarh', 17),
(388, 'Dhenkanal', 17),
(389, 'Ganjam', 17),
(390, 'Gajapati', 17),
(391, 'Jharsuguda', 17),
(392, 'Jajapur', 17),
(393, 'Jagatsinghpur', 17),
(394, 'Khordha', 17),
(395, 'Kendujhar', 17),
(396, 'Kalahandi', 17),
(397, 'Kandhamal', 17),
(398, 'Koraput', 17),
(399, 'Kendrapara', 17),
(400, 'Malkangiri', 17),
(401, 'Mayurbhanj', 17),
(402, 'Nabarangpur', 17),
(403, 'Nuapada', 17),
(404, 'Nayagarh', 17),
(405, 'Puri', 17),
(406, 'Rayagada', 17),
(407, 'Sambalpur', 17),
(408, 'Subarnapur', 17),
(409, 'Sundargarh', 17),
(410, 'Karaikal', 27),
(411, 'Mahe', 27),
(412, 'Puducherry', 27),
(413, 'Yanam', 27),
(414, 'Amritsar', 18),
(415, 'Bathinda', 18),
(416, 'Firozpur', 18),
(417, 'Faridkot', 18),
(418, 'Fatehgarh Sahib', 18),
(419, 'Gurdaspur', 18),
(420, 'Hoshiarpur', 18),
(421, 'Jalandhar', 18),
(422, 'Kapurthala', 18),
(423, 'Ludhiana', 18),
(424, 'Mansa', 18),
(425, 'Moga', 18),
(426, 'Mukatsar', 18),
(427, 'Nawan Shehar', 18),
(428, 'Patiala', 18),
(429, 'Rupnagar', 18),
(430, 'Sangrur', 18),
(431, 'Ajmer', 19),
(432, 'Alwar', 19),
(433, 'Bikaner', 19),
(434, 'Barmer', 19),
(435, 'Banswara', 19),
(436, 'Bharatpur', 19),
(437, 'Baran', 19),
(438, 'Bundi', 19),
(439, 'Bhilwara', 19),
(440, 'Churu', 19),
(441, 'Chittorgarh', 19),
(442, 'Dausa', 19),
(443, 'Dholpur', 19),
(444, 'Dungapur', 19),
(445, 'Ganganagar', 19),
(446, 'Hanumangarh', 19),
(447, 'Juhnjhunun', 19),
(448, 'Jalore', 19),
(449, 'Jodhpur', 19),
(450, 'Jaipur', 19),
(451, 'Jaisalmer', 19),
(452, 'Jhalawar', 19),
(453, 'Karauli', 19),
(454, 'Kota', 19),
(455, 'Nagaur', 19),
(456, 'Pali', 19),
(457, 'Pratapgarh', 19),
(458, 'Rajsamand', 19),
(459, 'Sikar', 19),
(460, 'Sawai Madhopur', 19),
(461, 'Sirohi', 19),
(462, 'Tonk', 19),
(463, 'Udaipur', 19),
(464, 'East Sikkim', 20),
(465, 'North Sikkim', 20),
(466, 'South Sikkim', 20),
(467, 'West Sikkim', 20),
(468, 'Ariyalur', 21),
(469, 'Chennai', 21),
(470, 'Coimbatore', 21),
(471, 'Cuddalore', 21),
(472, 'Dharmapuri', 21),
(473, 'Dindigul', 21),
(474, 'Erode', 21),
(475, 'Kanchipuram', 21),
(476, 'Kanyakumari', 21),
(477, 'Karur', 21),
(478, 'Madurai', 21),
(479, 'Nagapattinam', 21),
(480, 'The Nilgiris', 21),
(481, 'Namakkal', 21),
(482, 'Perambalur', 21),
(483, 'Pudukkottai', 21),
(484, 'Ramanathapuram', 21),
(485, 'Salem', 21),
(486, 'Sivagangai', 21),
(487, 'Tiruppur', 21),
(488, 'Tiruchirappalli', 21),
(489, 'Theni', 21),
(490, 'Tirunelveli', 21),
(491, 'Thanjavur', 21),
(492, 'Thoothukudi', 21),
(493, 'Thiruvallur', 21),
(494, 'Thiruvarur', 21),
(495, 'Tiruvannamalai', 21),
(496, 'Vellore', 21),
(497, 'Villupuram', 21),
(498, 'Dhalai', 22),
(499, 'North Tripura', 22),
(500, 'South Tripura', 22),
(501, 'West Tripura', 22),
(502, 'Almora', 33),
(503, 'Bageshwar', 33),
(504, 'Chamoli', 33),
(505, 'Champawat', 33),
(506, 'Dehradun', 33),
(507, 'Haridwar', 33),
(508, 'Nainital', 33),
(509, 'Pauri Garhwal', 33),
(510, 'Pithoragharh', 33),
(511, 'Rudraprayag', 33),
(512, 'Tehri Garhwal', 33),
(513, 'Udham Singh Nagar', 33),
(514, 'Uttarkashi', 33),
(515, 'Agra', 23),
(516, 'Allahabad', 23),
(517, 'Aligarh', 23),
(518, 'Ambedkar Nagar', 23),
(519, 'Auraiya', 23),
(520, 'Azamgarh', 23),
(521, 'Barabanki', 23),
(522, 'Badaun', 23),
(523, 'Bagpat', 23),
(524, 'Bahraich', 23),
(525, 'Bijnor', 23),
(526, 'Ballia', 23),
(527, 'Banda', 23),
(528, 'Balrampur', 23),
(529, 'Bareilly', 23),
(530, 'Basti', 23),
(531, 'Bulandshahr', 23),
(532, 'Chandauli', 23),
(533, 'Chitrakoot', 23),
(534, 'Deoria', 23),
(535, 'Etah', 23),
(536, 'Kanshiram Nagar', 23),
(537, 'Etawah', 23),
(538, 'Firozabad', 23),
(539, 'Farrukhabad', 23),
(540, 'Fatehpur', 23),
(541, 'Faizabad', 23),
(542, 'Gautam Buddha Nagar', 23),
(543, 'Gonda', 23),
(544, 'Ghazipur', 23),
(545, 'Gorkakhpur', 23),
(546, 'Ghaziabad', 23),
(547, 'Hamirpur', 23),
(548, 'Hardoi', 23),
(549, 'Mahamaya Nagar', 23),
(550, 'Jhansi', 23),
(551, 'Jalaun', 23),
(552, 'Jyotiba Phule Nagar', 23),
(553, 'Jaunpur District', 23),
(554, 'Kanpur Dehat', 23),
(555, 'Kannauj', 23),
(556, 'Kanpur Nagar', 23),
(557, 'Kaushambi', 23),
(558, 'Kushinagar', 23),
(559, 'Lalitpur', 23),
(560, 'Lakhimpur Kheri', 23),
(561, 'Lucknow', 23),
(562, 'Mau', 23),
(563, 'Meerut', 23),
(564, 'Maharajganj', 23),
(565, 'Mahoba', 23),
(566, 'Mirzapur', 23),
(567, 'Moradabad', 23),
(568, 'Mainpuri', 23),
(569, 'Mathura', 23),
(570, 'Muzaffarnagar', 23),
(571, 'Pilibhit', 23),
(572, 'Pratapgarh', 23),
(573, 'Rampur', 23),
(574, 'Rae Bareli', 23),
(575, 'Saharanpur', 23),
(576, 'Sitapur', 23),
(577, 'Shahjahanpur', 23),
(578, 'Sant Kabir Nagar', 23),
(579, 'Siddharthnagar', 23),
(580, 'Sonbhadra', 23),
(581, 'Sant Ravidas Nagar', 23),
(582, 'Sultanpur', 23),
(583, 'Shravasti', 23),
(584, 'Unnao', 23),
(585, 'Varanasi', 23),
(586, 'Birbhum', 24),
(587, 'Bankura', 24),
(588, 'Bardhaman', 24),
(589, 'Darjeeling', 24),
(590, 'Dakshin Dinajpur', 24),
(591, 'Hooghly', 24),
(592, 'Howrah', 24),
(593, 'Jalpaiguri', 24),
(594, 'Cooch Behar', 24),
(595, 'Kolkata', 24),
(596, 'Malda', 24),
(597, 'Midnapore', 24),
(598, 'Murshidabad', 24),
(599, 'Nadia', 24),
(600, 'North 24 Parganas', 24),
(601, 'South 24 Parganas', 24),
(602, 'Purulia', 24),
(603, 'Uttar Dinajpur', 24);

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(100) NOT NULL,
  `type` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `userId` int(100) DEFAULT NULL,
  `audio_id` int(100) DEFAULT NULL,
  `set_id` int(100) DEFAULT NULL,
  `question` text COLLATE utf8_croatian_ci DEFAULT NULL,
  `quetionFill` text COLLATE utf8_croatian_ci DEFAULT NULL,
  `mcq` longtext COLLATE utf8_croatian_ci DEFAULT NULL,
  `qLeft` text COLLATE utf8_croatian_ci DEFAULT NULL,
  `qRight` text COLLATE utf8_croatian_ci DEFAULT NULL,
  `qAnswer` text COLLATE utf8_croatian_ci DEFAULT NULL,
  `answer` text COLLATE utf8_croatian_ci DEFAULT NULL,
  `mylist` text COLLATE utf8_croatian_ci NOT NULL,
  `myans` text COLLATE utf8_croatian_ci NOT NULL,
  `color` text COLLATE utf8_croatian_ci NOT NULL,
  `md_list` longtext COLLATE utf8_croatian_ci NOT NULL,
  `3d_list` longtext COLLATE utf8_croatian_ci NOT NULL,
  `text` text COLLATE utf8_croatian_ci DEFAULT NULL,
  `solutions` mediumtext COLLATE utf8_croatian_ci DEFAULT NULL,
  `url` varchar(300) COLLATE utf8_croatian_ci DEFAULT NULL,
  `image` varchar(200) COLLATE utf8_croatian_ci DEFAULT NULL,
  `label` varchar(1000) COLLATE utf8_croatian_ci DEFAULT NULL,
  `flowchart` mediumtext COLLATE utf8_croatian_ci NOT NULL,
  `gameId` tinyint(4) NOT NULL,
  `cdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `flag` tinyint(4) NOT NULL DEFAULT 0,
  `free` enum('0','1') COLLATE utf8_croatian_ci NOT NULL DEFAULT '0',
  `trial` enum('0','1') COLLATE utf8_croatian_ci NOT NULL DEFAULT '0',
  `teacher` tinyint(2) NOT NULL DEFAULT 0,
  `screen` tinyint(4) NOT NULL DEFAULT 0,
  `openLock` int(11) NOT NULL DEFAULT 0,
  `orderNo` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `type`, `userId`, `audio_id`, `set_id`, `question`, `quetionFill`, `mcq`, `qLeft`, `qRight`, `qAnswer`, `answer`, `mylist`, `myans`, `color`, `md_list`, `3d_list`, `text`, `solutions`, `url`, `image`, `label`, `flowchart`, `gameId`, `cdate`, `flag`, `free`, `trial`, `teacher`, `screen`, `openLock`, `orderNo`) VALUES
(56, 'vid', 2, 0, 30, '<p>Day and Night</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://media.vivavolt.in/veb/VFZSbmQwNTNQVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-08 04:59:13', 0, '0', '0', 0, 0, 0, NULL),
(57, 'vid', 2, 0, 30, '<p>Earth the Blue Planet</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://media.vivavolt.in/veb/VFZSbmQwOUJQVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-08 05:00:23', 0, '0', '0', 0, 0, 0, NULL),
(62, 'mcq', 2, 0, 32, '<p>Click on capital A.</p>', '[\"\",\"\"]', '[\"<p>A<\\/p>\",\"<p>b<\\/p>\",\"<p>B<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-10 07:33:14', 0, '0', '0', 0, 0, 0, NULL),
(63, 'vid', 2, 0, 33, '<p>Happy or Sad</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://lotus.vivadigitalindia.net/VivaApp/mini-kg/mini/uploads/video/043626Happy_or_sad.mp4', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-10 09:04:26', 0, '0', '0', 0, 0, 0, NULL),
(64, 'vid', 2, 0, 33, '<p>Clean or&nbsp;Dirty</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://lotus.vivadigitalindia.net/VivaApp/mini-kg/mini/uploads/video/043156Clean_or_dirty.mp4', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-10 09:05:55', 0, '0', '0', 0, 0, 0, NULL),
(65, 'ebookUpload', 2, 0, 34, '<p>Ebook</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://lotus.vivadigitalindia.net/VivaApp/mini-kg/mini/uploads/story/fun_with_lettersminikg/index.html', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-10 09:09:12', 0, '0', '0', 0, 0, 0, NULL),
(66, 'textImgAud', 2, 0, 35, '<p>Flash Card</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"A\\\",\\\"Ant\\\"]\",\"image\":\"[\\\"1613125317_283555185bf8351f150c.svg\\\",\\\"1613125317_d7985d5e26459bda178c.svg\\\"]\",\"audio\":\"[\\\"1613125317_94100a47657e2f395ee7.mp3\\\",\\\"1613125317_1f7584216a264d3a30d1.mp3\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"0\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-10 10:07:04', 0, '0', '0', 0, 0, 0, NULL),
(67, 'textImgAud', 2, 0, 32, '<p>AA</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"A\\\",\\\"Ant\\\"]\",\"image\":\"[\\\"1613386746_901247dffa4abddd4095.png\\\",\\\"1613386746_4a2f1391b9a0ffc681ae.png\\\"]\",\"audio\":\"[\\\"1613386746_b578b45b37ecadfe96dd.mp3\\\",\\\"1613386746_a56ad966e3ab6e8dd2dc.mp3\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-15 10:59:06', 0, '0', '0', 0, 0, 0, NULL),
(68, 'vid', 2, 0, 32, '<p>Start</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/18044778_benus_toy_jungle.mp4', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"0\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-15 11:08:39', 0, '0', '0', 0, 0, 0, NULL),
(69, 'vid', 2, 0, 32, '<p>Aa</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://lotus.vivadigitalindia.net/VivaApp/mini-kg/mini/uploads/video/133004anim_1.mp4', '', 'Capital', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-17 10:38:21', 0, '0', '0', 0, 0, 0, NULL),
(70, 'vid', 2, 0, 32, '<p>Aa</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://media.vivavolt.in/media/file_manager/19002218_Earth_2.mp4', '', 'Small', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"0\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-17 10:39:01', 0, '0', '0', 0, 0, 0, NULL),
(71, 'mch', 2, 0, 36, '<p>Match the following</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>salamander<\\/p>\",\"<p>walrus<\\/p>\",\"<p>chameleon<\\/p>\",\"<p>crocodile<\\/p>\",\"<p>scorpion<\\/p>\",\"\",\"\"]', '[\"<p>Its venom is the most expensive liquid.<\\/p>\",\"<p align=\\\"center\\\">gets new teeth every month<\\/p>\",\"<p align=\\\"center\\\">breathes through its skin<\\/p>\",\"<p>has long tusks<\\/p>\",\"<p align=\\\"center\\\">has a tongue that is twice as long as its body<\\/p>\",\"\",\"\"]', '[\"<p>Its venom is the most expensive liquid.<\\/p>\",\"<p align=\\\"center\\\">gets new teeth every month<\\/p>\",\"<p align=\\\"center\\\">breathes through its skin<\\/p>\",\"<p>has long tusks<\\/p>\",\"<p align=\\\"center\\\">has a tongue that is twice as long as its body<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 09:01:51', 0, '0', '0', 0, 0, 0, NULL),
(72, 'pdfUpload', 2, 0, 30, '<p>Answer key test</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://www.google.com/', '', 'Answer Key', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"0\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 09:07:34', 0, '0', '0', 1, 0, 0, NULL),
(74, 'mcq', 2, 0, 37, '<p>By what name is LalaLajpatRai fondly known?</p>', '[\"\",\"\"]', '[\"<p>Punjab Kesari<\\/p>\",\"<p>Shaheed-e-Azam<\\/p>\",\"<p>Iron Man of India<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 09:34:54', 0, '0', '0', 0, 0, 0, NULL),
(75, 'mcq', 2, 0, 37, '<p>Which Indian leader stood up for the Indians in South Africa?</p>', '[\"\",\"\"]', '[\"<p>Indira Gandhi<\\/p>\",\"<p>Jawaharlal Nehru<\\/p>\",\"<p>Mahatma Gandhi<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 09:36:45', 0, '0', '0', 0, 0, 0, NULL),
(76, 'mcq', 2, 0, 37, '<p>What is Sarojini Naidu also known as?</p>', '[\"\",\"\"]', '[\"<p>Nightingale of India<\\/p>\",\"<p>Ba<\\/p>\",\"<p>&nbsp;Poetess of India<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 09:39:36', 0, '0', '0', 0, 0, 0, NULL),
(77, 'fib', 2, 0, 37, '', '[\"\",\"<p>died at a very young age of 23.<\\/p>\"]', '[\"<p>Subhas Chandra Bose<\\/p>\",\"<p>Vallabhbhai Patel<\\/p>\",\"<p>Bhagat Singh<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 09:41:35', 0, '0', '0', 0, 0, 0, NULL),
(78, 'mcq', 2, 0, 37, '<p>To which Indian leader is the Statue of Unity dedicated?</p>', '[\"\",\"\"]', '[\"<p>Subhas Chandra Bose<\\/p>\",\"<p>Bhagat Singh<\\/p>\",\"<p>Vallabhbhai Patel<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 09:48:38', 0, '0', '0', 0, 0, 0, NULL),
(79, 'fib', 2, 0, 39, '', '[\"<p>A&nbsp;<\\/p>\",\"<p>is an object in space which moves around a planet in an orbit.<\\/p>\"]', '[\"<p>space<\\/p>\",\"<p>satellite<\\/p>\",\"<p>star<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 09:54:50', 0, '0', '0', 0, 0, 0, NULL),
(80, 'fib', 2, 0, 39, '', '[\"<p>A group of stars forming interesting patterns is called a<\\/p>\",\"\"]', '[\"<p>constellation<\\/p>\",\"<p>galaxy<\\/p>\",\"<p>solar system<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 09:56:12', 0, '0', '0', 0, 0, 0, NULL),
(81, 'fib', 2, 0, 39, '', '[\"<p>The sun is a star as it has its own&nbsp;<\\/p>\",\"\"]', '[\"<p>light<\\/p>\",\"<p>moon<\\/p>\",\"<p>day and night<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 09:57:24', 0, '0', '0', 0, 0, 0, NULL),
(82, 'fib', 2, 0, 39, '', '[\"<p>Planet&nbsp;<\\/p>\",\"<p>the closest to the sun.<\\/p>\"]', '[\"<p>Earth<\\/p>\",\"<p>Venus<\\/p>\",\"<p>Mercury<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 09:59:00', 0, '0', '0', 0, 0, 0, NULL),
(83, 'fib', 2, 0, 39, '', '[\"<p>The sun and its family of planets are called the<\\/p>\",\"\"]', '[\"<p>galaxy<\\/p>\",\"<p>space<\\/p>\",\"<p>solar system<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 10:00:08', 0, '0', '0', 0, 0, 0, NULL),
(84, 'mch', 2, 0, 40, '<p>Match the following.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>Father&rsquo;s Day<\\/p>\",\"<p>World Population Day<\\/p>\",\"<p>Children&rsquo;s Day<\\/p>\",\"<p>Christmas<\\/p>\",\"<p>Earth Day<\\/p>\",\"\",\"\"]', '[\"<p align=\\\"center\\\">December<\\/p>\",\"<p align=\\\"center\\\">July<\\/p>\",\"<p align=\\\"center\\\">April<\\/p>\",\"<p>June<\\/p>\",\"<p align=\\\"center\\\">November<\\/p>\",\"\",\"\"]', '[\"<p align=\\\"center\\\">December<\\/p>\",\"<p align=\\\"center\\\">July<\\/p>\",\"<p align=\\\"center\\\">April<\\/p>\",\"<p>June<\\/p>\",\"<p align=\\\"center\\\">November<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 10:08:14', 0, '0', '0', 0, 0, 0, 0),
(85, 'fib', 2, 0, 40, '', '[\"<p>We celebrate Teachers&rsquo; Day in the month of&nbsp;<\\/p>\",\"\"]', '[\"<p>September<\\/p>\",\"<p>October<\\/p>\",\"<p>November<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', 'Choose the correct options.', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 10:11:11', 0, '0', '0', 0, 0, 0, NULL),
(86, 'fib', 2, 0, 40, '', '[\"\",\"<p>has the least number of days.<\\/p>\"]', '[\"<p>July<\\/p>\",\"<p>January<\\/p>\",\"<p>February<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 10:12:12', 0, '0', '0', 0, 0, 0, NULL),
(87, 'fib', 2, 0, 40, '', '[\"<p>We celebrate&nbsp;<\\/p>\",\"<p>in the month of January.<\\/p>\"]', '[\"<p>Independence Day<\\/p>\",\"<p>Republic Day<\\/p>\",\"<p>Gandhi Jayanti<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 10:13:34', 0, '0', '0', 0, 0, 0, NULL),
(89, 'fib', 2, 0, 40, '', '[\"\",\"<p>is the fifth month of the year.<\\/p>\"]', '[\"<p>May<\\/p>\",\"<p>April<\\/p>\",\"<p>March<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 10:17:31', 0, '0', '0', 0, 0, 0, NULL),
(90, 'fib', 2, 0, 40, '', '[\"<p>World Population Day is observed on the<\\/p>\",\"<p>day of July<\\/p>\"]', '[\"<p>fifteenth<\\/p>\",\"<p>eleventh<\\/p>\",\"<p>thirteenth<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 10:18:40', 0, '0', '0', 0, 0, 0, NULL),
(91, 'mcq', 2, 0, 41, '<p>Which is the world&rsquo;s most visited museum?</p>', '[\"\",\"\"]', '[\"<p>Louvre<\\/p>\",\"<p>Hagia Sophia<\\/p>\",\"<p>Potala Palace<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 10:25:22', 0, '0', '0', 0, 0, 0, NULL),
(92, 'mcq', 2, 0, 41, '<p>&lsquo;Rose City&rsquo; is the other name of this city.</p>', '[\"\",\"\"]', '[\"<p>Chichen Itza<\\/p>\",\"<p>Al-Khazneh<\\/p>\",\"<p>Petra<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 10:26:19', 0, '0', '0', 0, 0, 0, NULL),
(93, 'mcq', 2, 0, 41, '<p>Which monument also served as the temple of Maya snake godKukulkan?</p>', '[\"\",\"\"]', '[\"<p>Chichen Itza<\\/p>\",\"<p>El Castillo<\\/p>\",\"<p>Al-Khazneh<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 10:27:13', 0, '0', '0', 0, 0, 0, NULL),
(94, 'mcq', 2, 0, 41, '<p>Where is the White House located?</p>', '[\"\",\"\"]', '[\"<p>New York<\\/p>\",\"<p>Florida<\\/p>\",\"<p>Washington,D.C.<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 10:28:43', 0, '0', '0', 0, 0, 0, NULL),
(95, 'mcq', 2, 0, 41, '<p>This building was once the residence of the Dalai Lama.</p>', '[\"\",\"\"]', '[\"<p>&nbsp;Potala Palace<\\/p>\",\"<p>Al-Khazneh<\\/p>\",\"<p>Angkor Wat<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 10:30:21', 0, '0', '0', 0, 0, 0, NULL),
(96, 'mch', 2, 0, 42, '<p><strong>Match the following.</strong></p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>loves honey<\\/p>\",\"<p>works with paint<\\/p>\",\"<p>Australia<\\/p>\",\"<p>produces food<\\/p>\",\"<p>sit comfortably<\\/p>\",\"\",\"\"]', '[\"<p align=\\\"center\\\">artist<\\/p>\",\"<p align=\\\"center\\\">farmer<\\/p>\",\"<p>armchair<\\/p>\",\"<p>kangaroo<\\/p>\",\"<p align=\\\"center\\\">bear<\\/p>\",\"\",\"\"]', '[\"<p align=\\\"center\\\">artist<\\/p>\",\"<p align=\\\"center\\\">farmer<\\/p>\",\"<p>armchair<\\/p>\",\"<p>kangaroo<\\/p>\",\"<p align=\\\"center\\\">bear<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 10:40:11', 0, '0', '0', 0, 0, 0, NULL),
(97, 'mch', 2, 0, 43, '<p><strong>Match the following.</strong></p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>Striped in yellow and black, this insect can sting you back.<\\/p>\",\"<p>a book with a long story.<\\/p>\",\"<p>A young sheep I am, will grow up and be a ram.<\\/p>\",\"<p>In me you store water, to use it now and after.<\\/p>\",\"<p>The blue planet &ndash; none&rsquo;s better than it!<\\/p>\",\"\",\"\"]', '[\"<p align=\\\"center\\\">lamb<\\/p>\",\"<p align=\\\"center\\\">earth<\\/p>\",\"<p align=\\\"center\\\">wasp<\\/p>\",\"<p align=\\\"center\\\">tank<\\/p>\",\"<p>novel<\\/p>\",\"\",\"\"]', '[\"<p align=\\\"center\\\">lamb<\\/p>\",\"<p align=\\\"center\\\">earth<\\/p>\",\"<p align=\\\"center\\\">wasp<\\/p>\",\"<p align=\\\"center\\\">tank<\\/p>\",\"<p>novel<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 10:46:00', 0, '0', '0', 0, 0, 0, NULL),
(98, 'tnf', 2, 0, 44, '<p>We should not wear seatbelts while travelling in a car.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 10:54:14', 0, '0', '0', 0, 0, 0, NULL),
(99, 'tnf', 2, 0, 44, '<p>We can play on the main road even if there are vehicles passing by.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 'f', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 10:55:17', 0, '0', '0', 0, 0, 0, NULL),
(100, 'tnf', 2, 0, 44, '<p>It is important to look left, right and then left before crossing a road.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 10:55:48', 0, '0', '0', 0, 0, 0, NULL),
(101, 'tnf', 2, 0, 44, '<p>It is okay to lean outside the window of a running bus.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 'f', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 10:56:43', 0, '0', '0', 0, 0, 0, NULL),
(102, 'tnf', 2, 0, 44, '<p>There are separate lanes for cycles.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 10:57:35', 0, '0', '0', 0, 0, 0, NULL),
(103, 'fib', 2, 0, 46, '', '[\"<p>The crown-like projection on a seahorse&rsquo;s head is known as&nbsp;<\\/p>\",\"\"]', '[\"<p>coronet<\\/p>\",\"<p>colonel<\\/p>\",\"<p>kernel<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 11:15:00', 0, '0', '0', 0, 0, 0, NULL),
(104, 'fib', 2, 0, 46, '', '[\"<p>Chimpanzees are<\\/p>\",\"\"]', '[\"<p>rodents<\\/p>\",\"<p>apes<\\/p>\",\"<p>marsupials<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 11:15:54', 0, '0', '0', 0, 0, 0, NULL),
(105, 'fib', 2, 0, 46, '', '[\"<p>Butter tea, which is made of yak&rsquo;s milk, is a popular drink in<\\/p>\",\"\"]', '[\"<p>Taiwan<\\/p>\",\"<p>Tibet<\\/p>\",\"<p>Mongolia<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 11:16:43', 0, '0', '0', 0, 0, 0, NULL),
(106, 'fib', 2, 0, 46, '', '[\"\",\"<p>can sleep in standing position.<\\/p>\"]', '[\"<p>Polar bears<\\/p>\",\"<p>Chimpanzees<\\/p>\",\"<p>Horses<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 11:22:46', 0, '0', '0', 0, 0, 0, NULL),
(107, 'fib', 2, 0, 46, '', '[\"\",\"<p>changes its colour to blend with its surroundings.<\\/p>\"]', '[\"<p>chameleon<\\/p>\",\"<p>mole<\\/p>\",\"<p>porcupine<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 11:23:56', 0, '0', '0', 0, 0, 0, 0),
(108, 'mch', 2, 0, 47, '<p><strong>Match the following.</strong></p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>the largest river by volume<\\/p>\",\"<p>the highest cricket ground<\\/p>\",\"<p>the highest mountain peak<\\/p>\",\"<p>the biggest hot desert<\\/p>\",\"<p>the tallest man-made structure<\\/p>\",\"\",\"\"]', '[\"<p>Everest<\\/p>\",\"<p>Sahara<\\/p>\",\"<p>BurjKhalifa<\\/p>\",\"<p>Chail<\\/p>\",\"<p align=\\\"center\\\">Amazon<\\/p>\",\"\",\"\"]', '[\"<p>Everest<\\/p>\",\"<p>Sahara<\\/p>\",\"<p>BurjKhalifa<\\/p>\",\"<p>Chail<\\/p>\",\"<p align=\\\"center\\\">Amazon<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-18 11:56:20', 0, '0', '0', 0, 0, 0, NULL),
(109, 'mch', 2, 0, 48, '<p><b>Match the following</b></p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>Late UstadBismillah Khan<\\/p>\",\"<p>Late KunnakudiVaidyanathan<\\/p>\",\"<p>PanditShivkumar Sharma<\\/p>\",\"<p>UstadZakirHussain<\\/p>\",\"<p>&nbsp;PanditHariprasadChaurasia<\\/p>\",\"\",\"\"]', '[\"<p align=\\\"center\\\">shehnai<\\/p>\",\"<p>santoor<\\/p>\",\"<p align=\\\"center\\\">flute<\\/p>\",\"<p>violin<\\/p>\",\"<p>tabla<\\/p>\",\"\",\"\"]', '[\"<p align=\\\"center\\\">shehnai<\\/p>\",\"<p>santoor<\\/p>\",\"<p align=\\\"center\\\">flute<\\/p>\",\"<p>violin<\\/p>\",\"<p>tabla<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 04:33:56', 0, '0', '0', 0, 0, 0, NULL),
(110, 'mch', 2, 0, 49, '<p><strong>&nbsp;&nbsp; Match the following.</strong></p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>Mithali Raj<\\/p>\",\"<p>Lalita Babar<\\/p>\",\"<p>DipaKarmakar<\\/p>\",\"<p>HeenaSidhu<\\/p>\",\"<p>Akanksha Singh<\\/p>\",\"\",\"\"]', '[\"<p>gymnastics<\\/p>\",\"<p align=\\\"center\\\">running<\\/p>\",\"<p>basketball<\\/p>\",\"<p align=\\\"center\\\">shooting<\\/p>\",\"<p>cricket<\\/p>\",\"\",\"\"]', '[\"<p>gymnastics<\\/p>\",\"<p align=\\\"center\\\">running<\\/p>\",\"<p>basketball<\\/p>\",\"<p align=\\\"center\\\">shooting<\\/p>\",\"<p>cricket<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 04:39:24', 0, '0', '0', 0, 0, 0, NULL),
(111, 'mch', 2, 0, 50, '<p><strong>Match the following.</strong></p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>Thomas Alva Edison<\\/p>\",\"<p>Ludwig van Beethoven<\\/p>\",\"<p>Napoleon Bonaparte<\\/p>\",\"<p>Agatha Christie<\\/p>\",\"<p>Isaac Newton<\\/p>\",\"\",\"\"]', '[\"<p align=\\\"center\\\">composer<\\/p>\",\"<p>scientist<\\/p>\",\"<p align=\\\"center\\\">writer<\\/p>\",\"<p align=\\\"center\\\">political leader<\\/p>\",\"<p>inventor<\\/p>\",\"\",\"\"]', '[\"<p align=\\\"center\\\">composer<\\/p>\",\"<p>scientist<\\/p>\",\"<p align=\\\"center\\\">writer<\\/p>\",\"<p align=\\\"center\\\">political leader<\\/p>\",\"<p>inventor<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 04:46:12', 0, '0', '0', 1, 0, 0, NULL),
(112, 'mcq', 2, 0, 51, '<p>Which of the following features belongs to the penguin?</p>', '[\"\",\"\"]', '[\"<p>It has a waddling walk.<\\/p>\",\"<p>It is a scavenger<\\/p>\",\"<p>It is the largest flightless bird.<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 04:49:40', 0, '0', '0', 0, 0, 0, NULL),
(113, 'mcq', 2, 0, 51, '<p>Which bird is considered a symbol of peace?</p>', '[\"\",\"\"]', '[\"<p>owl<\\/p>\",\"<p>swan<\\/p>\",\"<p>dove<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 04:50:32', 0, '0', '0', 0, 0, 0, NULL),
(114, 'fib', 2, 0, 51, '', '[\"<p>In old times,<\\/p>\",\"<p>&nbsp;used to serve as carriers of messages.<\\/p>\"]', '[\"<p>parrots<\\/p>\",\"<p>pigeons<\\/p>\",\"<p>peacocks<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 04:52:05', 0, '0', '0', 0, 0, 0, NULL),
(115, 'mcq', 2, 0, 51, '<p>Which of the following is the second tallest bird in the world?</p>', '[\"\",\"\"]', '[\"<p>emu<\\/p>\",\"<p>kiwi<\\/p>\",\"<p>goose<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 04:53:15', 0, '0', '0', 0, 0, 0, NULL),
(116, 'mcq', 2, 0, 51, '<p>Which among the following is a waterbird?</p>', '[\"\",\"\"]', '[\"<p>eagle<\\/p>\",\"<p>duck<\\/p>\",\"<p>turkey<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 04:54:17', 0, '0', '0', 0, 0, 0, NULL),
(117, 'mch', 2, 0, 51, '<p><strong>&nbsp; Match the following.</strong></p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>kiwi<\\/p>\",\"<p>eagle<\\/p>\",\"<p>penguin<\\/p>\",\"<p>swan<\\/p>\",\"<p>peacock<\\/p>\",\"\",\"\"]', '[\"<p align=\\\"center\\\">talons<\\/p>\",\"<p align=\\\"center\\\">goddessSaraswati<\\/p>\",\"<p align=\\\"center\\\">New Zealand<\\/p>\",\"<p align=\\\"center\\\">India<\\/p>\",\"<p align=\\\"center\\\">Antarctica<\\/p>\",\"\",\"\"]', '[\"<p align=\\\"center\\\">talons<\\/p>\",\"<p align=\\\"center\\\">goddessSaraswati<\\/p>\",\"<p align=\\\"center\\\">New Zealand<\\/p>\",\"<p align=\\\"center\\\">India<\\/p>\",\"<p align=\\\"center\\\">Antarctica<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 04:56:56', 0, '0', '0', 1, 0, 0, NULL),
(118, 'mcq', 2, 0, 52, '<p>What is the name given to the symbol that represents a person, family, corporation or country?</p>', '[\"\",\"\"]', '[\"<p>court of arms<\\/p>\",\"<p>coat of arms<\\/p>\",\"<p>coat of alms<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', 'Choose the correct options.', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 05:02:24', 0, '0', '0', 0, 0, 0, NULL),
(119, 'mcq', 2, 0, 52, '<p>What is special about the flags of Cyprus and Kosovo?</p>', '[\"\",\"\"]', '[\"<p>They do not have rectangular flags.<\\/p>\",\"<p>The only two flags with leaves on them.<\\/p>\",\"<p>The only two flags with their country&rsquo;s map on them.<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 05:04:30', 0, '0', '0', 0, 0, 0, NULL),
(120, 'mcq', 2, 0, 52, '<p>Which country&rsquo;s flag has a white dragon holding jewels in its claws?<br />\r\n<br />\r\n&nbsp;</p>', '[\"\",\"\"]', '[\"<p>Malaysia<\\/p>\",\"<p>Bhutan<\\/p>\",\"<p>Vietnam<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 05:05:16', 0, '0', '0', 0, 0, 0, NULL),
(121, 'mcq', 2, 0, 52, '<p>Which country&rsquo;s national flag used to have a golden hammer and sickle and a golden-bordered star on a red background?</p>', '[\"\",\"\"]', '[\"<p>Maldives<\\/p>\",\"<p>Mexico<\\/p>\",\"<p>USSR<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 05:06:03', 0, '0', '0', 0, 0, 0, NULL),
(122, 'mcq', 2, 0, 52, '<p>Which country&rsquo;s flag has a yellow 14-pointed star on a blue background?</p>', '[\"\",\"\"]', '[\"<p>Malaysia<\\/p>\",\"<p>Maldives<\\/p>\",\"<p>Mexico<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 05:07:03', 0, '0', '0', 0, 0, 0, NULL);
INSERT INTO `list` (`id`, `type`, `userId`, `audio_id`, `set_id`, `question`, `quetionFill`, `mcq`, `qLeft`, `qRight`, `qAnswer`, `answer`, `mylist`, `myans`, `color`, `md_list`, `3d_list`, `text`, `solutions`, `url`, `image`, `label`, `flowchart`, `gameId`, `cdate`, `flag`, `free`, `trial`, `teacher`, `screen`, `openLock`, `orderNo`) VALUES
(123, 'mch', 2, 0, 53, '<p><b>Match the following</b></p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>The Wright Brothers<\\/p>\",\"<p>John Logie Baird<\\/p>\",\"<p>Alexander Graham Bell<\\/p>\",\"<p>Karl Benz<\\/p>\",\"<p>Walter Hunt<\\/p>\",\"\",\"\"]', '[\"<p align=\\\"center\\\">television<\\/p>\",\"<p>telephone<\\/p>\",\"<p align=\\\"center\\\">car<\\/p>\",\"<p align=\\\"center\\\">safety pin<\\/p>\",\"<p>aeroplane<\\/p>\",\"\",\"\"]', '[\"<p align=\\\"center\\\">television<\\/p>\",\"<p>telephone<\\/p>\",\"<p align=\\\"center\\\">car<\\/p>\",\"<p align=\\\"center\\\">safety pin<\\/p>\",\"<p>aeroplane<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 05:12:30', 0, '0', '0', 0, 0, 0, NULL),
(124, 'mcq', 2, 0, 54, '<p>Which of the following is in alphabetical order?</p>', '[\"\",\"\"]', '[\"<p>great, book, cat, table<\\/p>\",\"<p>cat, great, book, table<\\/p>\",\"<p>book, cat, great, table<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 05:20:09', 0, '0', '0', 1, 0, 0, NULL),
(125, 'mcq', 2, 0, 54, '<p>Which of the following is a festival?</p>', '[\"\",\"\"]', '[\"<p>Easter<\\/p>\",\"<p>Sunday<\\/p>\",\"<p>July<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 05:23:31', 0, '0', '0', 1, 0, 0, NULL),
(126, 'mcq', 2, 0, 54, '<p>What will you get if you join two semicircles?</p>', '[\"\",\"\"]', '[\"<p>an oval<\\/p>\",\"<p>a circle<\\/p>\",\"<p>another semicircle<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 05:24:22', 0, '0', '0', 0, 0, 0, NULL),
(127, 'mcq', 2, 0, 54, '<p>What will you add to a glass of lime juice to make it chilled?</p>', '[\"\",\"\"]', '[\"<p>sugar<\\/p>\",\"<p>water<\\/p>\",\"<p>ice<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 05:25:25', 0, '0', '0', 0, 0, 0, NULL),
(128, 'mcq', 2, 0, 54, '<p>Which of the following is in alphabetical order?</p>', '[\"\",\"\"]', '[\"<p>city, place, maize, drum<\\/p>\",\"<p>city, drum, maize, place<\\/p>\",\"<p>city, drum, place, maize<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 05:26:15', 0, '0', '0', 0, 0, 0, NULL),
(129, 'tnf', 2, 0, 55, '<p>Animals feel both love and pain like humans do.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', 'Are these statements true or false?', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 05:29:59', 0, '0', '0', 1, 0, 0, NULL),
(130, 'tnf', 2, 0, 55, '<p>We should not play with our pets as they can be dangerous.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 'f', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 05:30:29', 0, '0', '0', 0, 0, 0, NULL),
(131, 'tnf', 2, 0, 55, '<p>It is a good habit to feed birds.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"0\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 05:31:09', 0, '0', '0', 0, 0, 0, NULL),
(132, 'tnf', 2, 0, 55, '<p>Stray dogs should be pelted with stones.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 'f', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 05:33:07', 0, '0', '0', 1, 0, 0, NULL),
(133, 'tnf', 2, 0, 55, '<p>We should respect life in all forms.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 05:33:47', 0, '0', '0', 0, 0, 0, NULL),
(134, 'tnf', 2, 0, 56, '<p>The zunzuncito is the other name for a marmoset.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 'f', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 05:39:14', 0, '0', '0', 1, 0, 0, NULL),
(135, 'tnf', 2, 0, 56, '<p>The hummingbird is the fastest flying bird on the planet.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 05:40:02', 0, '0', '0', 0, 0, 0, NULL),
(136, 'tnf', 2, 0, 56, '<p>Komodo dragons are found in Indonesia.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 05:41:10', 0, '0', '0', 0, 0, 0, NULL),
(137, 'tnf', 2, 0, 56, '<p>Giantwētāis found only in Australia.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 'f', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 05:41:38', 0, '0', '0', 0, 0, 0, NULL),
(138, 'tnf', 2, 0, 56, '<p>Pygmy marmosets are monkeys.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 05:42:16', 0, '0', '0', 0, 0, 0, NULL),
(139, 'mch', 2, 0, 57, '<p><strong>Match the following.</strong></p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>sattriya<\\/p>\",\"<p>kathak<\\/p>\",\"<p>mohiniyattam<\\/p>\",\"<p>kuchipudi<\\/p>\",\"<p>bharatanatyam<\\/p>\",\"\",\"\"]', '[\"<p align=\\\"center\\\">Tamil Nadu<\\/p>\",\"<p align=\\\"center\\\">Assam<\\/p>\",\"<p align=\\\"center\\\">Andhra Pradesh\\/Telangana<\\/p>\",\"<p align=\\\"center\\\">Kerala<\\/p>\",\"<p align=\\\"center\\\">Uttar Pradesh<\\/p>\",\"\",\"\"]', '[\"<p align=\\\"center\\\">Tamil Nadu<\\/p>\",\"<p align=\\\"center\\\">Assam<\\/p>\",\"<p align=\\\"center\\\">Andhra Pradesh\\/Telangana<\\/p>\",\"<p align=\\\"center\\\">Kerala<\\/p>\",\"<p align=\\\"center\\\">Uttar Pradesh<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 05:46:59', 0, '0', '0', 0, 0, 0, NULL),
(140, 'tnf', 2, 0, 58, '<p>Bhadla Solar Park is located in Jaipur, Rajasthan.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 05:52:32', 0, '0', '0', 0, 0, 0, NULL),
(141, 'tnf', 2, 0, 58, '<p>Kurnool Ultra Mega Solar Park is located in Andhra Pradesh.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 05:53:03', 0, '0', '0', 0, 0, 0, NULL),
(142, 'tnf', 2, 0, 58, '<p>The largest solar power plant in the world is Pavagada Solar Park.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 'f', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 05:53:45', 0, '0', '0', 0, 0, 0, NULL),
(143, 'tnf', 2, 0, 58, '<p>Bhadla Solar Park is the world&rsquo;s largest solar park in the world.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 05:54:21', 0, '0', '0', 0, 0, 0, NULL),
(144, 'tnf', 2, 0, 58, '<ol>\r\n	<li>NP Kunta Ultra Mega Solar Park is located in Rajasthan.</li>\r\n</ol>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 'f', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 05:55:17', 0, '0', '0', 1, 0, 0, NULL),
(145, 'mch', 2, 0, 59, '<p><strong>Match the following</strong><strong>.</strong></p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>croak<\\/p>\",\"<p>hoot<\\/p>\",\"<p>squeak<\\/p>\",\"<p>bleat<\\/p>\",\"<p>neigh<\\/p>\",\"\",\"\"]', '[\"<p align=\\\"center\\\">bat<\\/p>\",\"<p align=\\\"center\\\">horse<\\/p>\",\"<p align=\\\"center\\\">frog<\\/p>\",\"<p align=\\\"center\\\">sheep<\\/p>\",\"<p>owl<\\/p>\",\"\",\"\"]', '[\"<p align=\\\"center\\\">bat<\\/p>\",\"<p align=\\\"center\\\">horse<\\/p>\",\"<p align=\\\"center\\\">frog<\\/p>\",\"<p align=\\\"center\\\">sheep<\\/p>\",\"<p>owl<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 06:04:08', 0, '0', '0', 0, 0, 0, NULL),
(146, 'fib', 2, 0, 60, '', '[\"<p>Volleyball is the national game of<\\/p>\",\"\"]', '[\"<p>India and Sri Lanka<\\/p>\",\"<p>Sri Lanka and Nepal<\\/p>\",\"<p>India and Nepal<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 06:10:41', 0, '0', '0', 1, 0, 0, NULL),
(147, 'fib', 2, 0, 60, '', '[\"<p>The national sport of Canada is<\\/p>\",\"\"]', '[\"<p>icehockey<\\/p>\",\"<p>baseball<\\/p>\",\"<p>basketball<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 06:11:24', 0, '0', '0', 0, 0, 0, NULL),
(148, 'fib', 2, 0, 60, '', '[\"<p>Capoeira is the national sport of<\\/p>\",\"\"]', '[\"<p>the Philippines<\\/p>\",\"<p>Chile<\\/p>\",\"<p>Brazil<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 06:12:26', 0, '0', '0', 0, 0, 0, NULL),
(150, 'fib', 2, 0, 60, '', '[\"\",\"<p>is a martial art practised in the Philippines.<\\/p>\"]', '[\"<p>Arnis<\\/p>\",\"<p>Charreada<\\/p>\",\"<p>Pato<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 06:14:39', 0, '0', '0', 0, 0, 0, NULL),
(151, 'mcq', 2, 0, 60, '<p>Which of the following sports is not played on horsebacks?</p>', '[\"\",\"\"]', '[\"<p>pato<\\/p>\",\"<p>charreada<\\/p>\",\"<p>tejo<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 06:15:37', 0, '0', '0', 1, 0, 0, NULL),
(152, 'tnf', 2, 0, 61, '<p>The Japanese use the art of bonsai mostly for medicine.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 'f', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', 'Are these statements true or false?', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 06:29:16', 0, '0', '0', 1, 0, 0, NULL),
(153, 'tnf', 2, 0, 61, '<p>Changing the pot of a bonsai tree is an important step.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 06:29:56', 0, '0', '0', 1, 0, 0, NULL),
(154, 'tnf', 2, 0, 61, '<p>Any tree can be a bonsai.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 06:30:29', 0, '0', '0', 0, 0, 0, NULL),
(155, 'tnf', 2, 0, 61, '<p>The first step in creating a bonsai begins with a specimen of the source plant.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 06:31:04', 0, '0', '0', 1, 0, 0, NULL),
(156, 'tnf', 2, 0, 61, '<p>The Indian Bonsai Association was formed in 1989.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 'f', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 06:31:36', 0, '0', '0', 1, 0, 0, NULL),
(157, 'mcq', 2, 0, 62, '<p>Which country is known as the &lsquo;Land of the Golden Pagodas&rsquo;?</p>', '[\"\",\"\"]', '[\"<p>North Korea<\\/p>\",\"<p>Myanmar<\\/p>\",\"<p>Bhutan<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 06:36:46', 0, '0', '0', 1, 0, 0, NULL),
(158, 'mcq', 2, 0, 62, '<p>Which city is also known as the &lsquo;Eternal City&rsquo;?</p>', '[\"\",\"\"]', '[\"<p>Rome<\\/p>\",\"<p>Paris<\\/p>\",\"<p>Moscow<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 06:37:39', 0, '0', '0', 1, 0, 0, NULL),
(159, 'mcq', 2, 0, 62, '<p>Which place is called the &lsquo;Roof of the World&rsquo;?</p>', '[\"\",\"\"]', '[\"<p>Bhutan<\\/p>\",\"<p>Japan<\\/p>\",\"<p>Pamirs<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 06:38:51', 0, '0', '0', 1, 0, 0, NULL),
(160, 'mcq', 2, 0, 62, '<p>Which country is known as the &lsquo;Land of Cakes&rsquo;?</p>', '[\"\",\"\"]', '[\"<p>Bhutan<\\/p>\",\"<p>South Korea<\\/p>\",\"<p>Scotland<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 06:40:10', 0, '0', '0', 1, 0, 0, NULL),
(161, 'mcq', 2, 0, 62, '<p>Which city is also known as the &lsquo;Big Apple&rsquo;?</p>', '[\"\",\"\"]', '[\"<p>New York City<\\/p>\",\"<p>Paris<\\/p>\",\"<p>Moscow<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 06:41:06', 0, '0', '0', 1, 0, 0, NULL),
(162, 'mch', 2, 0, 63, '<p>Match the following to name parts of our body.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>ha<\\/p>\",\"<p>ey<\\/p>\",\"<p>pa<\\/p>\",\"<p>e<\\/p>\",\"<p>he<\\/p>\",\"\",\"\"]', '[\"<p>lm<\\/p>\",\"<p>ar<\\/p>\",\"<p>ad<\\/p>\",\"<p>nd<\\/p>\",\"<p>es<\\/p>\",\"\",\"\"]', '[\"<p>lm<\\/p>\",\"<p>ar<\\/p>\",\"<p>ad<\\/p>\",\"<p>nd<\\/p>\",\"<p>es<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 06:46:08', 0, '0', '0', 1, 0, 0, NULL),
(163, 'mch', 2, 0, 64, '<p><b>Match the following.</b></p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>when somebody gives you something<\\/p>\",\"<p>before entering somebody&rsquo;s room<\\/p>\",\"<p>after waking up<\\/p>\",\"<p>when you cough or sneeze<\\/p>\",\"<p>before eating food<\\/p>\",\"\",\"\"]', '[\"<p align=\\\"center\\\">wash your hands<\\/p>\",\"<p>cover your mouth<\\/p>\",\"<p align=\\\"center\\\">brush your teeth<\\/p>\",\"<p align=\\\"center\\\">thank the person<\\/p>\",\"<p align=\\\"center\\\">ask for permission<\\/p>\",\"\",\"\"]', '[\"<p align=\\\"center\\\">wash your hands<\\/p>\",\"<p>cover your mouth<\\/p>\",\"<p align=\\\"center\\\">brush your teeth<\\/p>\",\"<p align=\\\"center\\\">thank the person<\\/p>\",\"<p align=\\\"center\\\">ask for permission<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 06:50:17', 0, '0', '0', 1, 0, 0, NULL),
(164, 'fib', 2, 0, 65, '', '[\"<p>SatyaNadella is the Chief Executive Officer of<\\/p>\",\"\"]', '[\"<p>Apple<\\/p>\",\"<p>Google<\\/p>\",\"<p>Microsoft<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', 'Choose the correct options.', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 06:53:24', 0, '0', '0', 1, 0, 0, NULL),
(165, 'fib', 2, 0, 65, '', '[\"<p>SatyaNadella was born in the year<\\/p>\",\"\"]', '[\"<p>1966<\\/p>\",\"<p>1967<\\/p>\",\"<p>1968<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 06:54:16', 0, '0', '0', 1, 0, 0, NULL),
(166, 'fib', 2, 0, 65, '', '[\"<p>SatyaNadella went to the&nbsp;<\\/p>\",\"<p>to pursue his master&rsquo;s degree.<\\/p>\"]', '[\"<p>USA<\\/p>\",\"<p>UK<\\/p>\",\"<p>USSR<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 06:55:05', 0, '0', '0', 1, 0, 0, NULL),
(167, 'fib', 2, 0, 65, '', '[\"<p>SatyaNadella was born into a&nbsp;<\\/p>\",\"<p>family.<\\/p>\"]', '[\"<p>Telugu<\\/p>\",\"<p>Tamil<\\/p>\",\"<p>Kannada<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 06:56:10', 0, '0', '0', 1, 0, 0, NULL),
(168, 'fib', 2, 0, 65, '', '[\"\",\"<p>was the first company that Satya joined.<\\/p>\"]', '[\"<p>Wipro Microsystems<\\/p>\",\"<p>Sun Microsystems<\\/p>\",\"<p>IBM Microsystems<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 06:57:05', 0, '0', '0', 1, 0, 0, NULL),
(169, 'mch', 2, 0, 66, '<p>Match the following.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>cotton<\\/p>\",\"<p>neem<\\/p>\",\"<p>coconut<\\/p>\",\"<p>rubber<\\/p>\",\"<p>jute<\\/p>\",\"\",\"\"]', '[\"<p align=\\\"center\\\">gunny cloth and sack<\\/p>\",\"<p align=\\\"center\\\">first-aid box<\\/p>\",\"<p>antifungal<\\/p>\",\"<p align=\\\"center\\\">latex<\\/p>\",\"<p>used in cooking and medicine<\\/p>\",\"\",\"\"]', '[\"<p align=\\\"center\\\">gunny cloth and sack<\\/p>\",\"<p align=\\\"center\\\">first-aid box<\\/p>\",\"<p>antifungal<\\/p>\",\"<p align=\\\"center\\\">latex<\\/p>\",\"<p>used in cooking and medicine<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 07:04:22', 0, '0', '0', 1, 0, 0, NULL),
(170, 'mcq', 2, 0, 67, '<p>Rongali, Kongali and Bhogali are the three variants of which Indian festival?</p>', '[\"\",\"\"]', '[\"<p>Bihu<\\/p>\",\"<p>Onam<\\/p>\",\"<p>Baisakhi<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 07:07:27', 0, '0', '0', 1, 0, 0, NULL),
(171, 'mcq', 2, 0, 67, '<p>&nbsp; &nbsp;Chhath is not observed in which of these states?</p>', '[\"\",\"\"]', '[\"<p>Bihar<\\/p>\",\"<p>Jharkhand<\\/p>\",\"<p>Goa<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 07:08:28', 0, '0', '0', 1, 0, 0, NULL),
(172, 'fib', 2, 0, 67, '', '[\"<p>Ugadi is celebrated by the people of Andhra Pradesh, Telangana and<\\/p>\",\"\"]', '[\"<p>Tamil Nadu<\\/p>\",\"<p>Kerala<\\/p>\",\"<p>Karnataka<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 07:09:26', 0, '0', '0', 1, 0, 0, NULL),
(173, 'fib', 2, 0, 67, '', '[\"<p><i>Pookkalam<\\/i> or rangoli is a part of the festival<\\/p>\",\"\"]', '[\"<p>Onam<\\/p>\",\"<p>Ugadi<\\/p>\",\"<p>Durga Puja<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 07:10:16', 0, '0', '0', 0, 0, 0, NULL),
(174, 'fib', 2, 0, 67, '', '[\"<p>Durga Puja is a<\\/p>\",\"<p>festival.<br \\/>\\r\\n&nbsp;<\\/p>\"]', '[\"<p>ten-day<\\/p>\",\"<p>eight-day<\\/p>\",\"<p>twelve-day<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 07:11:06', 0, '0', '0', 1, 0, 0, NULL),
(175, 'fib', 2, 0, 68, '', '[\"<p><i>Pride and Prejudice<\\/i> was written by<\\/p>\",\"\"]', '[\"<p>Rabindranath Tagore<\\/p>\",\"<p>Jane Austen<\\/p>\",\"<p>Charles Dickens<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 07:14:19', 0, '0', '0', 1, 0, 0, NULL),
(176, 'fib', 2, 0, 68, '', '[\"\",\"<p>is the author of the novel <i>James and the Giant Peach<\\/i>.<\\/p>\"]', '[\"<p>Roald Dahl<\\/p>\",\"<p>Enid Blyton<\\/p>\",\"<p>Charles Dickens<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 07:15:15', 0, '0', '0', 1, 0, 0, NULL),
(177, 'mcq', 2, 0, 68, '<p>Which of these is a novel by Leo Tolstoy?</p>', '[\"<p>Which of these is a novel by Leo Tolstoy?<\\/p>\",\"\"]', '[\"<p><i>War and Peace<\\/i><\\/p>\",\"<p><i>Mansfield Park<\\/i><\\/p>\",\"<p><i>Matilda<\\/i><\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 07:16:08', 0, '0', '0', 1, 0, 0, NULL),
(178, 'mcq', 2, 0, 68, '<p>Who created the Noddy and <i>The Secret Seven</i>?<br />\r\n<br />\r\n&nbsp;</p>', '[\"\",\"\"]', '[\"<p>Rabindranath Tagore<\\/p>\",\"<p>Roald Dahl<\\/p>\",\"<p>Enid Blyton<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 07:19:29', 0, '0', '0', 1, 0, 0, NULL),
(179, 'mcq', 2, 0, 68, '<p>Who wrote the novel <i>Gora</i>?</p>', '[\"<p>Who wrote the novel <i>Gora<\\/i>?<\\/p>\",\"\"]', '[\"<p>Rabindranath Tagore<\\/p>\",\"<p>Leo Tolstoy<\\/p>\",\"<p>Jane Austen<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 07:20:34', 0, '0', '0', 1, 0, 0, NULL),
(180, 'mcq', 2, 0, 69, '<p>What are arteries, veins and capillaries called?</p>', '[\"\",\"\"]', '[\"<div>blood vessels<\\/div>\",\"<p>&nbsp;<\\/p>\\r\\n\\r\\n<p>blood organs<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\",\"<p>blood nerves<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', 'Choose the correct options.', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 07:25:13', 0, '0', '0', 1, 0, 0, NULL),
(181, 'mcq', 2, 0, 69, '<p>In which year did scientists discover a new set of salivary glands?</p>', '[\"\",\"\"]', '[\"<p>2018<\\/p>\",\"<div>2019<\\/div>\",\"<div>2020<\\/div>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 07:26:14', 0, '0', '0', 1, 0, 0, NULL),
(182, 'mcq', 2, 0, 69, '<ol>\r\n	<li>What is common between human and shark teeth?</li>\r\n</ol>', '[\"\",\"\"]', '[\"<p>They are equally long.<\\/p>\",\"<p>They are equally sharp.<\\/p>\",\"<p>They are equally strong.<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 07:26:58', 0, '0', '0', 1, 0, 0, NULL),
(183, 'mcq', 2, 0, 69, '<p>Which organ of the body can be called its control centre?</p>', '[\"\",\"\"]', '[\"<p>the brain<\\/p>\",\"<p>the heart<\\/p>\",\"<p>the lungs<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 07:27:57', 0, '0', '0', 1, 0, 0, NULL),
(184, 'fib', 2, 0, 69, '', '[\"<p>Babies do not shed tears until they are<\\/p>\",\"\"]', '[\"<p>one year old<\\/p>\",\"<p>one week old<\\/p>\",\"<p>one month old<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 07:28:56', 0, '0', '0', 1, 0, 0, NULL),
(185, 'mch', 2, 0, 70, '<p><strong>Match the following.</strong></p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>rider\\/jockey<\\/p>\",\"<p>boxer<\\/p>\",\"<p>archer<\\/p>\",\"<p>skier<\\/p>\",\"<p>wrestler<\\/p>\",\"\",\"\"]', '[\"<p align=\\\"center\\\">archery<\\/p>\",\"<p align=\\\"center\\\">skiing<\\/p>\",\"<p align=\\\"center\\\">wrestling<\\/p>\",\"<p align=\\\"center\\\">boxing<\\/p>\",\"<p align=\\\"center\\\">horse riding<\\/p>\",\"\",\"\"]', '[\"<p align=\\\"center\\\">archery<\\/p>\",\"<p align=\\\"center\\\">skiing<\\/p>\",\"<p align=\\\"center\\\">wrestling<\\/p>\",\"<p align=\\\"center\\\">boxing<\\/p>\",\"<p align=\\\"center\\\">horse riding<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 08:17:20', 0, '0', '0', 1, 0, 0, NULL);
INSERT INTO `list` (`id`, `type`, `userId`, `audio_id`, `set_id`, `question`, `quetionFill`, `mcq`, `qLeft`, `qRight`, `qAnswer`, `answer`, `mylist`, `myans`, `color`, `md_list`, `3d_list`, `text`, `solutions`, `url`, `image`, `label`, `flowchart`, `gameId`, `cdate`, `flag`, `free`, `trial`, `teacher`, `screen`, `openLock`, `orderNo`) VALUES
(186, 'mch', 2, 0, 71, '<h4>Match the countries on the left with their capitals or currencies on the right.</h4>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>Myanmar<\\/p>\",\"<p>Bangladesh<\\/p>\",\"<p>China<\\/p>\",\"<p>Japan<\\/p>\",\"<p>Canada<\\/p>\",\"\",\"\"]', '[\"<p align=\\\"center\\\">renminbi<\\/p>\",\"<p align=\\\"center\\\">Naypyidaw<\\/p>\",\"<p align=\\\"center\\\">Ottawa<\\/p>\",\"<p align=\\\"center\\\">yen<\\/p>\",\"<p align=\\\"center\\\">taka<\\/p>\",\"\",\"\"]', '[\"<p align=\\\"center\\\">renminbi<\\/p>\",\"<p align=\\\"center\\\">Naypyidaw<\\/p>\",\"<p align=\\\"center\\\">Ottawa<\\/p>\",\"<p align=\\\"center\\\">yen<\\/p>\",\"<p align=\\\"center\\\">taka<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 08:21:41', 0, '0', '0', 0, 0, 0, NULL),
(187, 'mch', 2, 0, 72, '<p><strong>Match the following.</strong></p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>St Paul&rsquo;s Cathedral<\\/p>\",\"<p>Queen of Hills<\\/p>\",\"<p>Tea City of India<\\/p>\",\"<p>Gokarnanatheshwara Temple<\\/p>\",\"<p>Orange City of India<\\/p>\",\"\",\"\"]', '[\"<p>Mangaluru (Mangalore)<\\/p>\",\"<p>Dibrugarh<\\/p>\",\"<p>Kolkata<\\/p>\",\"<p>Nagpur<\\/p>\",\"<p>Mussoorie<\\/p>\",\"\",\"\"]', '[\"<p>Mangaluru (Mangalore)<\\/p>\",\"<p>Dibrugarh<\\/p>\",\"<p>Kolkata<\\/p>\",\"<p>Nagpur<\\/p>\",\"<p>Mussoorie<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 08:26:18', 0, '0', '0', 1, 0, 0, NULL),
(188, 'fib', 2, 0, 72, '', '[\"<p>&nbsp;Bengaluru is known as the &lsquo;<\\/p>\",\"<p>&nbsp;of India&rsquo;.<\\/p>\"]', '[\"<p>Silicon Valley<\\/p>\",\"<p>Silicon Mountain<\\/p>\",\"<p>Silicon Plateau<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"0\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 08:27:34', 0, '0', '0', 1, 0, 0, NULL),
(189, 'fib', 2, 0, 72, '', '[\"<p>Jag Mandir is located in<\\/p>\",\"\"]', '[\"<p>Udaipur<\\/p>\",\"<p>Lucknow<\\/p>\",\"<p>Kolkata<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 08:28:45', 0, '0', '0', 1, 0, 0, NULL),
(190, 'fib', 2, 0, 72, '', '[\"<p>Ambedkar Memorial park is located in<\\/p>\",\"\"]', '[\"<p>Udaipur<\\/p>\",\"<p>Lucknow<\\/p>\",\"<p>Kolkata<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"0\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 08:31:30', 0, '0', '0', 1, 0, 0, NULL),
(191, 'mcq', 2, 0, 72, '<p>. Which city is described as the city that never sleeps?</p>', '[\"<p>. Which city is described as the city that never sleeps?<\\/p>\",\"\"]', '[\"<p>Kolkata<\\/p>\",\"<p>Hyderabad<\\/p>\",\"<p>Mumbai<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 08:33:06', 0, '0', '0', 1, 0, 0, NULL),
(192, 'fib', 2, 0, 72, '', '[\"\",\"<p>is known as the &lsquo;City of Pearls&rsquo;<\\/p>\"]', '[\"<p>Kolkata<\\/p>\",\"<p>Hyderabad<\\/p>\",\"<p>Mumbai<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 08:33:51', 0, '0', '0', 1, 0, 0, NULL),
(194, 'fib', 2, 0, 73, '', '[\"<p>PrakashPadukone is known as<\\/p>\",\"\"]', '[\"<p>the Payyoli Express<\\/p>\",\"<p>the Father of Indian Badminton<\\/p>\",\"<p>the Prince of Calcutta<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 08:37:10', 0, '0', '0', 1, 0, 0, NULL),
(195, 'mcq', 2, 0, 73, '<p>Which player is known as the Rawalpindi Express?</p>', '[\"<p>Which player is known as the Rawalpindi Express?<\\/p>\",\"\"]', '[\"<p>Milkha Singh<\\/p>\",\"<p>ShoaibAkhtar<\\/p>\",\"<p>P.T.Usha<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 08:39:01', 0, '0', '0', 1, 0, 0, NULL),
(196, 'mcq', 2, 0, 73, '<p>With which sport is Dhyan Chand associated?</p>', '[\"<p>With which sport is Dhyan Chand associated?<\\/p>\",\"\"]', '[\"<p>hockey<\\/p>\",\"<p>badminton<\\/p>\",\"<p>athletics<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 08:40:02', 0, '0', '0', 1, 0, 0, NULL),
(197, 'fib', 2, 0, 73, '', '[\"<p>Pel&eacute;, the Black Pearl, is a legendary footballer from<\\/p>\",\"\"]', '[\"<p>Brazil<\\/p>\",\"<p>the USA<\\/p>\",\"<p>Egypt<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 08:41:04', 0, '0', '0', 1, 0, 0, NULL),
(198, 'fib', 2, 0, 73, '', '[\"<p>P.T. Usha is known by the nickname<\\/p>\",\"\"]', '[\"<p>the Flying Sikh<\\/p>\",\"<p>Pistol Pete<\\/p>\",\"<p>the Payyoli Express<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 08:41:58', 0, '0', '0', 0, 0, 0, NULL),
(199, 'fib', 2, 0, 74, '', '[\"<p>Integrity is the quality of being<\\/p>\",\"\"]', '[\"<p>polite<\\/p>\",\"<p>helpful<\\/p>\",\"<p>honest<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 08:49:25', 0, '0', '0', 1, 0, 0, NULL),
(200, 'mcq', 2, 0, 74, '<p>You find a wallet full of money on the road. You will</p>', '[\"\",\"\"]', '[\"<p>give it to your parents.<\\/p>\",\"<p>pocket the money.<\\/p>\",\"<p>show off to your friends.<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 08:50:18', 0, '0', '0', 1, 0, 0, NULL),
(201, 'mcq', 2, 0, 74, '<p>You saw your friend copying in the exam. You will<br />\r\n<br />\r\n&nbsp;</p>', '[\"\",\"\"]', '[\"<p>tell him\\/her that it&rsquo;s wrong.<\\/p>\",\"<p>stop talking to him\\/her.<\\/p>\",\"<p>encourage him.<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 08:51:18', 0, '0', '0', 1, 0, 0, NULL),
(202, 'mcq', 2, 0, 74, '<p>You break a vase at home. You will<br />\r\n<br />\r\n&nbsp;</p>', '[\"\",\"\"]', '[\"<p>tell it to your parents.<\\/p>\",\"<p>hide it from your parents.<\\/p>\",\"<p>blame it on someone else.<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 08:52:24', 0, '0', '0', 1, 0, 0, NULL),
(203, 'fib', 2, 0, 74, '', '[\"\",\"<p>is the best policy.<\\/p>\"]', '[\"<p>Courage<\\/p>\",\"<p>Honour<\\/p>\",\"<p>Honesty<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 08:54:31', 0, '0', '0', 1, 0, 0, NULL),
(204, 'mch', 2, 0, 75, '<p>Match the following.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p><em>mano<\\/em><\\/p>\",\"<p>shaka<\\/p>\",\"<p>nose rub<\\/p>\",\"<p>bow<\\/p>\",\"\",\"\",\"\"]', '[\"<p>Philippines<\\/p>\",\"<p>New Zealand<\\/p>\",\"<p>Japan<\\/p>\",\"<p>Hawaii<\\/p>\",\"\",\"\",\"\"]', '[\"<p>Philippines<\\/p>\",\"<p>New Zealand<\\/p>\",\"<p>Japan<\\/p>\",\"<p>Hawaii<\\/p>\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 09:00:10', 0, '0', '0', 1, 0, 0, NULL),
(205, 'mch', 2, 0, 76, '<p>Match the following.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p><i>Brookesia micra<\\/i><\\/p>\",\"<p>Barbados threadsnake<\\/p>\",\"<p><i>Kikiki huna<\\/i><\\/p>\",\"<p>watermeal<\\/p>\",\"<p>pygmy marmoset<\\/p>\",\"\",\"\"]', '[\"<p>smallest snake<\\/p>\",\"<p>smallest monkey<\\/p>\",\"<p>smallest flowering plant<\\/p>\",\"<p>smallest chameleon<\\/p>\",\"<p>smallest flying insect<\\/p>\",\"\",\"\"]', '[\"<p>smallest snake<\\/p>\",\"<p>smallest monkey<\\/p>\",\"<p>smallest flowering plant<\\/p>\",\"<p>smallest chameleon<\\/p>\",\"<p>smallest flying insect<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 09:13:28', 0, '0', '0', 1, 0, 0, NULL),
(206, 'mcq', 2, 0, 77, '<p>Which of these monuments has a whispering gallery in it?<br />\r\n<br />\r\n&nbsp;</p>', '[\"\",\"\"]', '[\"<p>Sun Temple<\\/p>\",\"<p style=\\\"margin-left:18.0pt;\\\">Humayun&rsquo;s Tomb<\\/p>\",\"<p>GolGumbaz<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', 'Choose the correct options.', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 09:16:35', 0, '0', '0', 1, 0, 0, NULL),
(207, 'fib', 2, 0, 77, '', '[\"<p>The TajMahal takes its inspiration from<\\/p>\",\"\"]', '[\"<p>GolGumbaz<\\/p>\",\"<p>Humayun&rsquo;s Tomb<\\/p>\",\"<p>BulandDarwaza<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 09:17:26', 0, '0', '0', 1, 0, 0, NULL),
(208, 'fib', 2, 0, 77, '', '[\"<p>Meenakshi Temple in Madurai is dedicated to goddess<\\/p>\",\"\"]', '[\"<p>Lakshmi<\\/p>\",\"<p>Parvati<\\/p>\",\"<p>Saraswati<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 09:18:17', 0, '0', '0', 1, 0, 0, NULL),
(209, 'fib', 2, 0, 77, '', '[\"\",\"<p>is the highest gateway in the world.<\\/p>\"]', '[\"<p>BulandDarwaza<\\/p>\",\"<p>GolGumbaz<\\/p>\",\"<p>Bara Imambara<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 09:19:06', 0, '0', '0', 1, 0, 0, NULL),
(210, 'fib', 2, 0, 77, '', '[\"<p>Which of these monuments was also known as the &lsquo;Black Pagoda&rsquo;?<\\/p>\",\"\"]', '[\"<p>Meenakshi Temple<\\/p>\",\"<p>GolGumbaz<\\/p>\",\"<p>Sun Temple<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 09:20:00', 0, '0', '0', 1, 0, 0, NULL),
(211, 'fib', 2, 0, 78, '', '[\"<p>Wheat, rice and maize are<\\/p>\",\"\"]', '[\"<p>cereals<\\/p>\",\"<p>vegetables<\\/p>\",\"<p>confectionery<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 09:23:06', 0, '0', '0', 1, 0, 0, NULL),
(212, 'fib', 2, 0, 78, '', '[\"<p>Spoons, forks and knives are<\\/p>\",\"\"]', '[\"<p>confectionery<\\/p>\",\"<p>cutlery<\\/p>\",\"<p>stationery<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 09:23:59', 0, '0', '0', 1, 0, 0, NULL),
(213, 'fib', 2, 0, 78, '', '[\"<p>Paper, pencils and erasers are<\\/p>\",\"\"]', '[\"<p>confectionery<\\/p>\",\"<p>cutlery<\\/p>\",\"<p>stationery<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 09:25:34', 0, '0', '0', 1, 0, 0, NULL),
(214, 'fib', 2, 0, 78, '', '[\"<p>Radishes, turnips and carrots are<\\/p>\",\"\"]', '[\"<p>roots<\\/p>\",\"<p>spices<\\/p>\",\"<p>fruits<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 09:26:36', 0, '0', '0', 1, 0, 0, NULL),
(215, 'fib', 2, 0, 78, '', '[\"<p>Chocolates, lollipops and candies are<\\/p>\",\"\"]', '[\"<p>snacks<\\/p>\",\"<p>toffees<\\/p>\",\"<p>confectionery<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 09:27:50', 0, '0', '0', 1, 0, 0, NULL),
(216, 'mcq', 2, 0, 79, '<p>Find the odd one out:</p>', '[\"\",\"\"]', '[\"<p>guitar<\\/p>\",\"<p>piano<\\/p>\",\"<p>harmonium<\\/p>\",\"<p>screw<\\/p>\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '3', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 09:30:49', 0, '0', '0', 1, 0, 0, NULL),
(217, 'mcq', 2, 0, 79, '<p>Find the odd one out:</p>', '[\"\",\"\"]', '[\"<p>March<\\/p>\",\"<p>Easter<\\/p>\",\"<p>July<\\/p>\",\"<p>November<\\/p>\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 09:32:24', 0, '0', '0', 0, 0, 0, NULL),
(218, 'fib', 2, 0, 79, '', '[\"<p>Complete the series: AZ, BY, CX, DW,<\\/p>\",\"\"]', '[\"<p>EF<\\/p>\",\"<p>EX<\\/p>\",\"<p>EU<\\/p>\",\"<p>EV<\\/p>\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 09:34:01', 0, '0', '0', 1, 0, 0, NULL),
(219, 'fib', 2, 0, 79, '', '[\"<p>Horse is to neigh as goat is to<\\/p>\",\"\"]', '[\"<p>screech<\\/p>\",\"<p>bleat<\\/p>\",\"<p>bark<\\/p>\",\"<p>pray<\\/p>\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 09:35:00', 0, '0', '0', 1, 0, 0, NULL),
(220, 'fib', 2, 0, 79, '', '[\"<p>Eagle is to<\\/p>\",\"<p>as tiger is to walk.<\\/p>\"]', '[\"<p>fly<\\/p>\",\"<p>run<\\/p>\",\"<p>swim<\\/p>\",\"<p>crawl<\\/p>\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 09:36:11', 0, '0', '0', 0, 0, 0, NULL),
(221, 'tnf', 2, 0, 80, '<p>Water polo is played underwater.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 'f', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', 'State whether the given statements are true or false.', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 09:39:19', 0, '0', '0', 1, 0, 0, NULL),
(222, 'tnf', 2, 0, 80, '<p>Freediving is considered the most dangerous water sport.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 09:39:59', 0, '0', '0', 1, 0, 0, NULL),
(223, 'tnf', 2, 0, 80, '<p>Sailboat racing was developed in France in the year 1980.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 09:40:35', 0, '0', '0', 1, 0, 0, NULL),
(224, 'tnf', 2, 0, 80, '<p style=\"margin-left:54.0pt;\">People shoot at fishes in underwater target shooting.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 'f', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 09:41:40', 0, '0', '0', 1, 0, 0, NULL),
(225, 'tnf', 2, 0, 80, '<p>In water polo, the feet of the players always touch the bottom of the pool.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 'f', '[]', '{\"t\":\"<p>True<\\/p>\\r\\n\",\"f\":\"<p>False<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 09:42:09', 0, '0', '0', 0, 0, 0, NULL),
(226, 'fib', 2, 0, 81, '', '[\"<p>The people of<\\/p>\",\"<p>speak Gilbertese and English.<\\/p>\"]', '[\"<p>Kiribati<\\/p>\",\"<div>Maldives<\\/div>\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', 'Choose the correct options.', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 09:47:51', 0, '0', '0', 1, 0, 0, NULL),
(227, 'fib', 2, 0, 81, '', '[\"<p>The official language of the Maldives is<\\/p>\",\"\"]', '[\"<p>Gilbertese<\\/p>\",\"<p>Dhivehi<\\/p>\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 09:49:28', 0, '0', '0', 1, 0, 0, NULL),
(228, 'fib', 2, 0, 81, '', '[\"<p>The island of Cyprus lies in the<\\/p>\",\"<p>Sea.<\\/p>\"]', '[\"<p>&nbsp;Persian<\\/p>\",\"<p>Mediterranean<\\/p>\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 09:51:33', 0, '0', '0', 1, 0, 0, NULL),
(229, 'fib', 2, 0, 81, '', '[\"<p>Arabic is spoken in<\\/p>\",\"\"]', '[\"<p>Malta<\\/p>\",\"<p>Bahrain<\\/p>\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 09:52:20', 0, '0', '0', 1, 0, 0, NULL),
(230, 'fib', 2, 0, 81, '', '[\"<p>Samoa lies in the<\\/p>\",\"\"]', '[\"<p>Pacific Ocean<\\/p>\",\"<p>Persian Gulf<\\/p>\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 09:54:02', 0, '0', '0', 1, 0, 0, NULL),
(231, 'mch', 2, 0, 82, '<p><strong>Match the following.</strong></p>', '[\"<p>Assam<\\/p>\",\"<p>Kanha National Park<\\/p>\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>Assam<\\/p>\",\"<p>Kerala<\\/p>\",\"<p>Jammu and Kashmir<\\/p>\",\"<p>Madhya Pradesh<\\/p>\",\"<p>Rajasthan<\\/p>\",\"\",\"\"]', '[\"<p align=\\\"center\\\">Kanha National Park<\\/p>\",\"<p align=\\\"center\\\">Dachigam National Park<\\/p>\",\"<p align=\\\"center\\\">Keoladeo Ghana National Park<\\/p>\",\"<p align=\\\"center\\\">Periyar National Park<\\/p>\",\"<p align=\\\"center\\\">Kaziranga National Park<\\/p>\",\"\",\"\"]', '[\"<p align=\\\"center\\\">Kanha National Park<\\/p>\",\"<p align=\\\"center\\\">Dachigam National Park<\\/p>\",\"<p align=\\\"center\\\">Keoladeo Ghana National Park<\\/p>\",\"<p align=\\\"center\\\">Periyar National Park<\\/p>\",\"<p align=\\\"center\\\">Kaziranga National Park<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:00:30', 0, '0', '0', 1, 0, 0, NULL),
(232, 'fib', 2, 0, 83, '', '[\"<p>as quick as a<\\/p>\",\"\"]', '[\"<p>puppy<\\/p>\",\"<p>snail<\\/p>\",\"<p>hare<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:03:14', 0, '0', '0', 1, 0, 0, NULL),
(233, 'fib', 2, 0, 83, '', '[\"<p>as wise as an<\\/p>\",\"\"]', '[\"<p>owl<\\/p>\",\"<p>eel<\\/p>\",\"<p>ant<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:03:52', 0, '0', '0', 1, 0, 0, NULL),
(234, 'fib', 2, 0, 83, '', '[\"<p>as<\\/p>\",\"<p>as a mule<br \\/>\\r\\n<br \\/>\\r\\n&nbsp;<\\/p>\"]', '[\"<p>busy<\\/p>\",\"<p>happy<\\/p>\",\"<p>stubborn<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:05:02', 0, '0', '0', 1, 0, 0, NULL),
(235, 'fib', 2, 0, 83, '', '[\"<p>as slow as a<\\/p>\",\"\"]', '[\"<p>snail<\\/p>\",\"<p>mule<\\/p>\",\"<p>bee<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:05:53', 0, '0', '0', 1, 0, 0, NULL),
(236, 'fib', 2, 0, 83, '', '[\"<p>as<\\/p>\",\"<p>as a lark<br \\/>\\r\\n<br \\/>\\r\\n&nbsp;<\\/p>\"]', '[\"<p>playful<\\/p>\",\"<p>happy<\\/p>\",\"<p>busy<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:07:39', 0, '0', '0', 1, 0, 0, NULL),
(237, 'tnf', 2, 0, 84, '<p>Imtiaz revises his lessons after studying.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"<p>good<\\/p>\\r\\n\",\"f\":\"<p>bad<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', 'Are these acts good or bad?', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"0\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:10:18', 0, '0', '0', 1, 0, 0, NULL),
(238, 'tnf', 2, 0, 84, '<p>Shivani likes to listen to music while studying.<br />\r\n<br />\r\n&nbsp;</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 'f', '[]', '{\"t\":\"<p>good<\\/p>\\r\\n\",\"f\":\"<p>bad<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"0\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:11:31', 0, '0', '0', 1, 0, 0, NULL),
(239, 'tnf', 2, 0, 84, '<p>Jishnu treats himself with an ice cream after achieving his target for the day.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"<p>good<\\/p>\\r\\n\",\"f\":\"<p>bad<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"0\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:12:23', 0, '0', '0', 1, 0, 0, NULL),
(240, 'tnf', 2, 0, 84, '<p>Seema likes to study in a silent place. It makes her understand better.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"<p>good<\\/p>\\r\\n\",\"f\":\"<p>bad<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:13:17', 0, '0', '0', 0, 0, 0, NULL),
(241, 'tnf', 2, 0, 84, '<p>Robin relaxes by taking short breaks during study time.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"<p>good<\\/p>\\r\\n\",\"f\":\"<p>bad<\\/p>\\r\\n\"}', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:13:52', 0, '0', '0', 0, 0, 0, NULL),
(242, 'mch', 2, 0, 85, '<p style=\"margin-left:72.0pt;\"><strong>Match the following.</strong></p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>Great Barrier Reef<\\/p>\",\"<p>Angel Falls<\\/p>\",\"<p>Greenland<\\/p>\",\"<p>Caspian Sea<\\/p>\",\"<p>Lake Baikal<\\/p>\",\"\",\"\"]', '[\"<p>Russia<\\/p>\",\"<p>between Asia and Europe<\\/p>\",\"<p>Venezuela<\\/p>\",\"<p>the coast of Australia<\\/p>\",\"<p>Arctic Circle<\\/p>\",\"\",\"\"]', '[\"<p>Russia<\\/p>\",\"<p>between Asia and Europe<\\/p>\",\"<p>Venezuela<\\/p>\",\"<p>the coast of Australia<\\/p>\",\"<p>Arctic Circle<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:18:38', 0, '0', '0', 1, 0, 0, NULL),
(243, 'vid', 2, 0, 36, '<p>Did You Know This?</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSWk5VNTNQVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:25:22', 0, '0', '0', 1, 0, 0, NULL),
(244, 'vid', 2, 0, 37, '<p>Great Indians</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSWk5VOUJQVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:27:08', 0, '0', '0', 1, 0, 0, NULL),
(245, 'vid', 2, 0, 39, '<p>Our Solar System</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSWk5VOVJQVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:28:08', 0, '0', '0', 0, 0, 0, NULL),
(246, 'vid', 2, 0, 41, '<p>Great Buildings</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSamQwMUJQVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:29:04', 0, '0', '0', 1, 0, 0, NULL),
(247, 'vid', 2, 0, 42, '<p>Word Fun</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSamQwMVJQVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:29:54', 0, '0', '0', 1, 0, 0, NULL),
(248, 'vid', 2, 0, 44, '<p>Road Safety</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSamQwMW5QVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:31:07', 0, '0', '0', 1, 0, 0, NULL),
(249, 'vid', 2, 0, 46, '<p>Amazing Creatures</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSamQwMTNQVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:31:52', 0, '0', '0', 1, 0, 0, NULL);
INSERT INTO `list` (`id`, `type`, `userId`, `audio_id`, `set_id`, `question`, `quetionFill`, `mcq`, `qLeft`, `qRight`, `qAnswer`, `answer`, `mylist`, `myans`, `color`, `md_list`, `3d_list`, `text`, `solutions`, `url`, `image`, `label`, `flowchart`, `gameId`, `cdate`, `flag`, `free`, `trial`, `teacher`, `screen`, `openLock`, `orderNo`) VALUES
(250, 'vid', 2, 0, 48, '<p>Our Music</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSamQwNVJQVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:32:29', 0, '0', '0', 1, 0, 0, NULL),
(251, 'vid', 2, 0, 49, '<p>Indian Sportswomen</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSamQwNW5QVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:33:22', 0, '0', '0', 0, 0, 0, NULL),
(252, 'vid', 2, 0, 50, '<p>Their Strange Ways</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSamQwNTNQVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:34:17', 0, '0', '0', 1, 0, 0, NULL),
(253, 'vid', 2, 0, 52, '<p>Flag Quiz</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSamQwOUJQVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:35:11', 0, '0', '0', 1, 0, 0, NULL),
(254, 'vid', 2, 0, 53, '<p>Great Inventions</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSamQwOVJQVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:36:25', 0, '0', '0', 1, 0, 0, NULL),
(255, 'vid', 2, 0, 55, '<p>Care for Animals</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSamVFMUJQVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:37:15', 0, '0', '0', 1, 0, 0, NULL),
(256, 'vid', 2, 0, 56, '<p>Matchless Animals</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSak1FNVJQVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:38:18', 0, '0', '0', 1, 0, 0, NULL),
(257, 'vid', 2, 0, 57, '<p>Classical Dances</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSak1FNW5QVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:39:03', 0, '0', '0', 1, 0, 0, NULL),
(258, 'vid', 2, 0, 59, '<p>Animal Sounds</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSak1FNTNQVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:40:03', 0, '0', '0', 1, 0, 0, NULL),
(259, 'vid', 2, 0, 60, '<p>National Games</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSak1FOUJQVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:40:43', 0, '0', '0', 1, 0, 0, NULL),
(260, 'vid', 2, 0, 61, '<p>Bonsai</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSak1FOVJQVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:41:53', 0, '0', '0', 1, 0, 0, NULL),
(261, 'vid', 2, 0, 62, '<p>Sobriquets&nbsp;</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSak1VMUJQVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:42:52', 0, '0', '0', 1, 0, 0, NULL),
(262, 'vid', 2, 0, 64, '<p>Mind Your Manners</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSak1VMVJQVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:43:41', 0, '0', '0', 1, 0, 0, NULL),
(263, 'vid', 2, 0, 65, '<p>Satya Nadella</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSak1VMW5QVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:44:52', 0, '0', '0', 1, 0, 0, NULL),
(264, 'vid', 2, 0, 66, '<p>Useful Plants</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSak1VMTNQVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:45:58', 0, '0', '0', 1, 0, 0, NULL),
(265, 'vid', 2, 0, 67, '<p>Festival Time</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSak1VNUJQVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:47:01', 0, '0', '0', 1, 0, 0, NULL),
(266, 'vid', 2, 0, 68, '<p>Bookstall</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSak1VNVJQVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:47:32', 0, '0', '0', 1, 0, 0, NULL),
(267, 'vid', 2, 0, 70, '<p>My Game</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSak1VNW5QVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:48:02', 0, '0', '0', 1, 0, 0, NULL),
(268, 'vid', 2, 0, 72, '<p>Places and Nicknames</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSak1VNTNQVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:48:36', 0, '0', '0', 1, 0, 0, NULL),
(269, 'vid', 2, 0, 73, '<p>You Know my Name</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSak1VOUJQVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:49:09', 0, '0', '0', 1, 0, 0, NULL),
(270, 'vid', 2, 0, 74, '<p>Be Honest Be Good</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSak1VOVJQVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:49:41', 0, '0', '0', 1, 0, 0, NULL),
(271, 'vid', 2, 0, 77, '<p>Proud of Heritage</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSak1rNW5QVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:51:54', 0, '0', '0', 1, 0, 0, NULL),
(272, 'vid', 2, 0, 82, '<p>National Parks</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSak1rMVJQVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:52:33', 0, '0', '0', 1, 0, 0, NULL),
(273, 'vid', 2, 0, 83, '<p>Animal Similes</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSak1rMW5QVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:53:08', 0, '0', '0', 1, 0, 0, NULL),
(274, 'vid', 2, 0, 83, '<p>Study to Succeed</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/veb/VFZSak1rMTNQVDA9', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:53:41', 0, '0', '0', 1, 0, 0, NULL),
(275, 'ebookUpload', 2, 0, 86, '<p>Evs ebook</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://lotus.vivadigitalindia.net/VivaApp/mini-kg/mini/uploads/story/world_around_mini/index.html', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 10:55:15', 0, '0', '0', 0, 0, 0, NULL),
(276, 'ebookUpload', 2, 0, 36, '<p>Did You Know This?</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFUWGhOUkUweFRXcEZlVTVVVFQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:00:06', 0, '0', '0', 1, 0, 0, NULL),
(277, 'ebookUpload', 2, 0, 37, '<p>Great Indians</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFUWGhOUkUweFRrUkZlVTVFWnowPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:03:32', 0, '0', '0', 1, 0, 0, NULL),
(278, 'ebookUpload', 2, 0, 39, '<p>Our Solar System</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFUWGhOUkUweFRtcEZlVTFFV1QwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:04:27', 0, '0', '0', 1, 0, 0, NULL),
(279, 'ebookUpload', 2, 0, 40, '<p>&nbsp;Months of the Year</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFUWGhOUkUweFRucEZlVTFVWXowPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:05:30', 0, '0', '0', 1, 0, 0, NULL),
(280, 'ebookUpload', 2, 0, 41, '<p>Great Buildings</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFUWGhOUkUweFQxUkZlVTFFVFQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:07:21', 0, '0', '0', 1, 0, 0, NULL),
(281, 'ebookUpload', 2, 0, 42, '<p>Word Fun</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFUWGhOUkZGNVQwUkZlVTVVWnowPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:08:13', 0, '0', '0', 1, 0, 0, NULL),
(282, 'ebookUpload', 2, 0, 43, '<p>Puzzle Time</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFUWGhOUkZGM1RYcEZlVTFVV1QwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:09:20', 0, '0', '0', 1, 0, 0, NULL),
(283, 'ebookUpload', 2, 0, 44, '<p>Road Safety</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFUWGhOUkZGM1RrUkZlVTVFU1QwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:10:03', 0, '0', '0', 1, 0, 0, NULL),
(284, 'ebookUpload', 2, 0, 46, '<p>Amazing Creatures</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFUWGhOUkZGM1RsUkZlVTVVUVQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:11:34', 0, '0', '0', 1, 0, 0, NULL),
(285, 'ebookUpload', 2, 0, 47, '<p>A World Tour</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFUWGhOUkZGM1RtcEZlVTVVVlQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:12:13', 0, '0', '0', 1, 0, 0, NULL),
(286, 'ebookUpload', 2, 0, 48, '<p>Our Music</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFUWGhOUkZGM1QwUkZlVTFFV1QwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:32:51', 0, '0', '0', 1, 0, 0, NULL),
(287, 'ebookUpload', 2, 0, 49, '<p>Indian Sportswomen</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFUWGhOUkZGNFRVUkZlVTFVWnowPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:33:48', 0, '0', '0', 1, 0, 0, NULL),
(288, 'ebookUpload', 2, 0, 50, '<p>Their Strange Ways</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFUWGhOUkZGNFRWUkZlVTVFUVQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:34:27', 0, '0', '0', 1, 0, 0, NULL),
(289, 'ebookUpload', 2, 0, 51, '<p>Friends with Feathers</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFUWGhOUkZGNFRXcEZlVTE2YXowPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:34:58', 0, '0', '0', 1, 0, 0, NULL),
(290, 'ebookUpload', 2, 0, 52, '<p>Flag Quiz</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFUWGhOUkZGNFRYcEZlVTVVWXowPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:35:27', 0, '0', '0', 1, 0, 0, NULL),
(291, 'ebookUpload', 2, 0, 53, '<p>Great Inventions</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFUWGhOUkZGNFRrUkZlVTVFVlQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:36:18', 0, '0', '0', 1, 0, 0, NULL),
(292, 'ebookUpload', 2, 0, 54, '<p>Brainpower</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFUWGhOUkZGNFRtcEZlVTFxWXowPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:36:54', 0, '0', '0', 1, 0, 0, NULL),
(293, 'ebookUpload', 2, 0, 55, '<p>Care for Animals</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFUWGhOUkZGNFRsUkZlVTVFWXowPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:37:28', 0, '0', '0', 1, 0, 0, NULL),
(294, 'ebookUpload', 2, 0, 56, '<p>Matchless Animals</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwRmQwMVVRWGxOUkVrd1RVUkJlRTFFUVQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:37:59', 0, '0', '0', 1, 0, 0, NULL),
(295, 'ebookUpload', 2, 0, 57, '<p>Classical Dances</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwRmQwMVVRWGxOUkVrd1RYcEJlRTE2U1QwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:38:32', 0, '0', '0', 1, 0, 0, NULL),
(296, 'ebookUpload', 2, 0, 58, '<p>Electricity</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwRmQwMVVRWGxOUkVrd1RrUkJlRTVVYXowPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:39:17', 0, '0', '0', 1, 0, 0, NULL),
(297, 'ebookUpload', 2, 0, 59, '<p>Animal Sounds</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwRmQwMVVRWGxOUkVrd1RtcEJlRTFxVFQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:39:46', 0, '0', '0', 1, 0, 0, NULL),
(298, 'ebookUpload', 2, 0, 60, '<p>National Games</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwRmQwMVVRWGxOUkVreFRYcEJlRTVVU1QwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:40:14', 0, '0', '0', 1, 0, 0, NULL),
(299, 'ebookUpload', 2, 0, 61, '<p>Bonsai</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwRmQwMVVRWGxOUkUxM1QxUkJlRTFFUlQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:40:55', 0, '0', '0', 1, 0, 0, NULL),
(300, 'ebookUpload', 2, 0, 62, '<p>Sobriquets</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwRmQwMVVRWGxOUkUxM1QxUkJlRTVVUlQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:41:35', 0, '0', '0', 1, 0, 0, NULL),
(301, 'ebookUpload', 2, 0, 63, '<p>Clockwork Puzzle</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwRmQwMVVRWGxOUkUxNFRVUkJlRTVFU1QwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:42:09', 0, '0', '0', 1, 0, 0, NULL),
(302, 'ebookUpload', 2, 0, 64, '<p>Mind Your Manners</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwRmQwMVVRWGxOUkUxNFRWUkJlRTFxVFQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:42:39', 0, '0', '0', 1, 0, 0, NULL),
(303, 'ebookUpload', 2, 0, 65, '<p>Satya Nadella</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwRmQwMVVRWGxOUkUxNFRXcEJlRTFVWXowPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:43:33', 0, '0', '0', 1, 0, 0, NULL),
(304, 'ebookUpload', 2, 0, 66, '<p>Useful Plants</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwRmQwMVVRWGxOUkUxNVRrUkJlRTVFWnowPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:45:56', 0, '0', '0', 1, 0, 0, NULL),
(305, 'ebookUpload', 2, 0, 67, '<p>Festival Time</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwRmQwMVVRWGxOUkUxNVRsUkJlRTFxWXowPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:46:39', 0, '0', '0', 1, 0, 0, NULL),
(306, 'ebookUpload', 2, 0, 68, '<p>Bookstall</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwRmQwMVVRWGxOUkUxNVRtcEJlRTFxVFQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:47:59', 0, '0', '0', 1, 0, 0, NULL),
(307, 'ebookUpload', 2, 0, 69, '<p>Our Amazing Body</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwRmQwMVVRWGxOUkUxNVRtcEJlRTVVWXowPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:48:37', 0, '0', '0', 1, 0, 0, NULL),
(308, 'ebookUpload', 2, 0, 70, '<p>My Game</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwRmQwMVVRWGxOUkUxNVRucEJlRTE2UlQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:49:08', 0, '0', '0', 1, 0, 0, NULL),
(309, 'ebookUpload', 2, 0, 71, '<p>Countries, Capitals and Currencies</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwRmQwMVVRWGxOUkUwd1RWUkJlRTFxV1QwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:49:46', 0, '0', '0', 1, 0, 0, NULL),
(310, 'ebookUpload', 2, 0, 72, '<p>Places and Nicknames</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwRmQwMVVRWGxOUkUwd1RXcEJlRTFxYXowPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:51:12', 0, '0', '0', 1, 0, 0, NULL),
(311, 'ebookUpload', 2, 0, 73, '<p>You Know my Name</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwRmQwMVVRWGxOUkUwd1RYcEJlRTFVUVQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:51:51', 0, '0', '0', 1, 0, 0, NULL),
(312, 'ebookUpload', 2, 0, 74, '<p>Be Honest Be Good</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwRmQwMVVRWGxOUkUwd1RYcEJlRTVVVlQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:52:31', 0, '0', '0', 1, 0, 0, NULL),
(313, 'ebookUpload', 2, 0, 75, '<p>Greetings from Around the World</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwRmQwMVVRWGxOUkUwd1RrUkJlRTFxYXowPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:53:20', 0, '0', '0', 1, 0, 0, NULL),
(314, 'ebookUpload', 2, 0, 76, '<p>World&#39;s Smallest</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwRmQwMVVRWGxOUkZGNlRXcEJlRTFVVFQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:54:07', 0, '0', '0', 1, 0, 0, NULL),
(315, 'ebookUpload', 2, 0, 77, '<p>Heritage of India</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwRmQwMVVRWGxOUkZGNlRsUkJlRTFxVFQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:54:41', 0, '0', '0', 1, 0, 0, NULL),
(317, 'ebookUpload', 2, 0, 78, '<p>Group Names</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwRmQwMVVRWGxOUkZGNlRtcEJlRTVVVVQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:56:17', 0, '0', '0', 1, 0, 0, NULL);
INSERT INTO `list` (`id`, `type`, `userId`, `audio_id`, `set_id`, `question`, `quetionFill`, `mcq`, `qLeft`, `qRight`, `qAnswer`, `answer`, `mylist`, `myans`, `color`, `md_list`, `3d_list`, `text`, `solutions`, `url`, `image`, `label`, `flowchart`, `gameId`, `cdate`, `flag`, `free`, `trial`, `teacher`, `screen`, `openLock`, `orderNo`) VALUES
(318, 'ebookUpload', 2, 0, 79, '<p>Put on Your Thinking Cap</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwRmQwMVVRWGxOUkZGNlQwUkJlRTE2VFQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2021-02-19 11:56:51', 0, '0', '0', 1, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mastar_chapter`
--

CREATE TABLE `mastar_chapter` (
  `chap_id` int(10) NOT NULL,
  `chap_name` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `deleteflag` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `mastar_chapter`
--

INSERT INTO `mastar_chapter` (`chap_id`, `chap_name`, `deleteflag`) VALUES
(1, 'Chapter 1', 0),
(2, 'Chapter 2', 0),
(3, 'Chapter 3', 0),
(4, 'Chapter 4', 0),
(5, 'Chapter 5', 0),
(6, 'Chapter 6', 0),
(7, 'Chapter 7', 0),
(8, 'Chapter 8', 0),
(9, 'Chapter 9', 0),
(10, 'Chapter 10', 0),
(11, 'Chapter 11', 0),
(12, 'Chapter 12', 0),
(13, 'Chapter 13', 0),
(14, 'Chapter 14', 0),
(15, 'Chapter 15', 0),
(16, 'Chapter 16', 0),
(17, 'Chapter 17', 0),
(18, 'Chapter 18', 0),
(19, 'Chapter 19', 0),
(20, 'Chapter 20 ', 0),
(21, 'Chapter 21', 0),
(22, 'Chapter 22', 0),
(23, 'Chapter 23', 0),
(24, 'Chapter 24', 0),
(25, 'Chapter 25', 0),
(26, 'Chapter 26', 0),
(27, 'Chapter 27', 0),
(28, 'Chapter 28', 0),
(29, 'Chapter 29', 0),
(30, 'Chapter 30', 0),
(70, 'पाठ 30', 0),
(69, 'पाठ 29', 0),
(68, 'पाठ 28', 0),
(38, 'पाठ 1', 0),
(39, 'पाठ 2', 0),
(67, 'पाठ 27', 0),
(41, 'पाठ 3', 0),
(66, 'पाठ 26', 0),
(44, 'पाठ 4', 0),
(45, 'पाठ 5', 0),
(46, 'पाठ 6', 0),
(47, 'पाठ 7', 0),
(48, 'पाठ 8', 0),
(49, 'पाठ 9', 0),
(50, 'पाठ 10', 0),
(51, 'पाठ 11', 0),
(52, 'पाठ 12', 0),
(53, 'पाठ 13', 0),
(54, 'पाठ 14', 0),
(55, 'पाठ 15', 0),
(56, 'पाठ 16', 0),
(57, 'पाठ 17', 0),
(58, 'पाठ 18', 0),
(59, 'पाठ 19', 0),
(60, 'पाठ 20', 0),
(61, 'पाठ 21', 0),
(62, 'पाठ 22', 0),
(63, 'पाठ 23', 0),
(64, 'पाठ 24', 0),
(65, 'पाठ 25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mastar_class`
--

CREATE TABLE `mastar_class` (
  `class_id` tinyint(4) NOT NULL,
  `c_img` varchar(256) COLLATE utf8_croatian_ci DEFAULT NULL,
  `class_gif` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `class_name` varchar(30) COLLATE utf8_croatian_ci NOT NULL,
  `class_subject` mediumtext COLLATE utf8_croatian_ci NOT NULL,
  `deleteflag` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `mastar_class`
--

INSERT INTO `mastar_class` (`class_id`, `c_img`, `class_gif`, `class_name`, `class_subject`, `deleteflag`) VALUES
(1, '1.png', '1.gif', 'Class 1', '1,2,3,4,5,6,7,8,10,11', 0),
(2, '2.png', '2.gif', 'Class 2', '5,6,7,8,10', 0),
(3, '3.png', '3.gif', 'Class 3', '7,8,11', 0),
(4, '4.png', '4.gif', 'Class 4', '1,7', 0),
(5, '5.png', '5.gif', 'Class 5', '7', 0),
(6, '6.png', '6.gif', 'Class 6', '10', 0),
(7, '7.png', '7.gif', 'Class 7', '3,7,8', 0),
(8, '8.png', '8.gif', 'Class 8', '7', 0),
(9, '9.png', '9.gif', 'Class 9', '7', 0),
(10, '10.png', '10.gif', 'Class 10', '7', 0),
(11, 'class_1612957929_aee4dbecc49fc98ec220.png', '', 'Class 11', '1,2,3,4,5,6,7,8,10,11,12', 0),
(12, 'class_1613556795_f2f10b85d53f574ed2c2.png', '', 'MKG', '13', 0),
(13, 'class_1613556844_0ef7c8bb412e9cf85da6.png', '', 'LKG', '1,8', 0),
(14, 'class_1613556864_0de392effad651dcbe3a.png', '', 'UKG', '1,8', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mastar_series`
--

CREATE TABLE `mastar_series` (
  `series_id` tinyint(4) NOT NULL,
  `slug` varchar(256) COLLATE utf8_croatian_ci DEFAULT NULL,
  `series_name` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `series_img` mediumtext COLLATE utf8_croatian_ci NOT NULL,
  `subject_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL DEFAULT 0,
  `module_id` int(11) DEFAULT 0,
  `series_num` int(11) NOT NULL DEFAULT 0,
  `deleteflag` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `mastar_series`
--

INSERT INTO `mastar_series` (`series_id`, `slug`, `series_name`, `series_img`, `subject_id`, `class_id`, `module_id`, `series_num`, `deleteflag`) VALUES
(11, 'atlas-theme-11', 'Atlas Theme', 'theme_1612522671_1763e3b292f136b606a9.png', 11, 3, 10, 1, 0),
(12, 'life-12', 'Life', 'module_1613636251_3da282868247853d1418.png', 7, 3, 17, 0, 0),
(13, 'world-3', 'World', 'theme_1613636299_cf2570a91e2bb596ff8d.png', 7, 3, 17, 1, 0),
(14, 'leterature-3', 'Leterature', 'theme_1613636330_e5922b0e2b55be45a6d3.png', 7, 3, 17, 2, 0),
(15, 'sci-tech-3', 'Sci-Tech', 'theme_1613636365_c8b7f8abd4ea8d51ed6a.png', 7, 3, 17, 3, 0),
(16, 'brainwaves-3', 'Brainwaves ', 'theme_1613636402_433a606b493e9601e626.png', 7, 3, 17, 4, 0),
(17, 'sports-3', 'Sports', 'theme_1613636448_0de583d30531d5e4d0da.png', 7, 3, 17, 4, 0),
(18, 'values-3', 'Values', 'theme_1613636484_faacb3c729727b9df86b.png', 7, 3, 17, 5, 0),
(19, 'explore-3', 'Explore', 'theme_1613636514_8fa7d46352b7027c6597.png', 7, 3, 17, 6, 0),
(20, 'india-3', 'India', '', 7, 3, 17, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mastar_subject`
--

CREATE TABLE `mastar_subject` (
  `sub_id` tinyint(4) NOT NULL,
  `sub_name` varchar(200) COLLATE utf8_croatian_ci NOT NULL,
  `slug` varchar(256) COLLATE utf8_croatian_ci DEFAULT NULL,
  `sub_cover` varchar(100) COLLATE utf8_croatian_ci DEFAULT NULL,
  `sub_cover_gif` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `sub_month` varchar(255) COLLATE utf8_croatian_ci NOT NULL DEFAULT '0',
  `deleteflag` tinyint(4) NOT NULL DEFAULT 0,
  `sub_num` int(11) NOT NULL DEFAULT 0,
  `sub_sorting` int(11) DEFAULT 0,
  `sub_coming` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `mastar_subject`
--

INSERT INTO `mastar_subject` (`sub_id`, `sub_name`, `slug`, `sub_cover`, `sub_cover_gif`, `sub_month`, `deleteflag`, `sub_num`, `sub_sorting`, `sub_coming`) VALUES
(1, 'English', 'english', 'subject_1613558001_2607e2d645593a1c7274.gif', 'subject_1613558001_11309ba7b1de528ba299.gif', '0', 0, 0, 6, 0),
(2, 'Science', 'science', 'icon.png', '', '0', 0, 0, 5, 0),
(3, 'Computer Science', 'computer-science', 'icon.png', 'subject_1613546043_7fa1177622e61798021c.gif', '0', 1, 0, 4, 1),
(4, 'Math', 'math', 'icon.png', '', '0', 0, 0, 7, 0),
(5, 'Hindi', 'hindi', 'icon.png', '', '0', 0, 0, 8, 0),
(6, 'Social Studies', 'social-studies', 'icon.png', '', '0', 1, 0, 9, 0),
(7, 'General knowledge', 'gk', 'subject_1613454351_a162438b6de27cfd774c.png', 'subject_1613454344_67d13246288979b99c25.gif', '1', 0, 0, 1, 1),
(8, 'Environmental studies', 'evs', 'icon.png', '', '0', 0, 0, 11, 0),
(10, 'Social Science', 'social-science', 'icon.png', '', '0', 0, 0, 10, 0),
(11, 'Atlas', 'atlas', 'atlas.png', 'subject_1613456801_c0bb2fc709b38f2c1e57.gif', '0', 0, 0, 3, 1),
(12, 'Reasoning and Aptitude', 'reasoning', 'subject_1613557821_118a2e833c50a28ae730.png', 'subject_1613456979_c390507094a187af649b.gif', '0', 0, 0, 2, 1),
(13, 'VOLT junior', 'VOLT-junior', '', '', '0', 0, 0, 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `master_module`
--

CREATE TABLE `master_module` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `slug` varchar(256) COLLATE utf8_croatian_ci DEFAULT NULL,
  `m_img` mediumtext COLLATE utf8_croatian_ci NOT NULL,
  `subject_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `m_num` int(11) NOT NULL,
  `m_url` mediumtext COLLATE utf8_croatian_ci NOT NULL,
  `deleteflag` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `master_module`
--

INSERT INTO `master_module` (`m_id`, `m_name`, `slug`, `m_img`, `subject_id`, `class_id`, `m_num`, `m_url`, `deleteflag`) VALUES
(17, 'GK Lessons', 'gk-lessons-3', 'module_1613631794_19c0b6b32b0a1eb91295.png', 7, 3, 0, '', 0),
(10, 'Introduction', 'introduction-3', 'module_1612520349_702534dd7aa0889ce12a.png', 11, 3, 1, '', 0),
(11, 'Maps', 'maps-3', 'module_1612520582_75eee8b5a1b226bcaf56.png', 11, 3, 2, '', 0),
(12, 'General Information', 'general-information-3', 'module_1612520608_c1b80c464fb610058b63.png', 11, 3, 3, '', 0),
(13, 'Interactive', 'interactive-3', 'module_1612520559_d4852564e94fbd37a164.png', 11, 3, 4, '', 0),
(14, 'Activity Sheets', 'activity-sheets-3', 'module_1612520684_e5b6213d5d8f295a99a8.png', 11, 3, 5, '', 0),
(15, 'Current Affairs', 'current-affairs-3', 'module_1612520698_b35831123f11672ad3ee.png', 11, 3, 6, '', 0),
(18, 'GK Plus', 'gk-plus-3', 'module_1613632024_0515deabba7568c7c6db.png', 7, 3, 1, '', 0),
(19, 'GK Live', 'gk-live-3', 'module_1613632090_71ce92aeda2141e3c08a.png', 7, 3, 2, '', 0),
(20, 'VOLT Yearbook', 'volt-yearbook-3', 'module_1613632122_4f85b107354e311bec87.png', 7, 3, 0, '', 0),
(21, 'Listening & Speaking', 'listening-speaking-3', 'module_1613632159_6364ffe610c7fd06f9ee.png', 7, 3, 0, '', 0),
(22, 'Study Skills', 'study-skills-3', 'module_1613632203_ff38bd21c57701dec2f1.png', 7, 3, 4, '', 0),
(23, 'Digital Atlas', 'digital-atlas-3', 'module_1613632378_88a4e496971700b3de76.png', 7, 3, 0, '', 0),
(24, 'Assignments', 'assignments-3', 'module_1613632325_757c64a5a9c9c52c882d.png', 7, 3, 0, '', 0),
(25, 'English', 'english-12', 'module_1613720282_4a8fffcff67effc6373d.png', 13, 12, 1, '', 0),
(26, 'EVS', 'evs-12', 'module_1613725074_2b6872d6264a664cd5d1.png', 13, 12, 2, '', 0),
(27, 'Numbers', 'numbers-12', 'module_1613725160_26c7c7a9921967576c00.png', 13, 12, 3, '', 0),
(28, 'Pattern', 'pattern-12', 'module_1613725226_bd876f7c65376e422c1a.png', 13, 12, 4, '', 0),
(29, 'Rhymes', 'rhymes-12', 'module_1613725281_e12ab2715e95ac2762a4.png', 13, 12, 5, '', 0),
(30, 'Viva digital', 'viva-digital-3', '', 7, 3, 0, 'https://www.vivadigital.in/', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_croatian_ci NOT NULL,
  `notify_desc` text COLLATE utf8_croatian_ci NOT NULL,
  `subject` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `link` text COLLATE utf8_croatian_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_croatian_ci NOT NULL DEFAULT 'active',
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`id`, `title`, `notify_desc`, `subject`, `class`, `link`, `status`, `created_on`) VALUES
(1, 'Notification test', 'Notification Description text update', 0, 0, '', 'active', '2021-01-27 15:38:34');

-- --------------------------------------------------------

--
-- Table structure for table `notify_logs`
--

CREATE TABLE `notify_logs` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `pushid` int(11) NOT NULL,
  `view` tinyint(1) NOT NULL DEFAULT 1,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notify_push`
--

CREATE TABLE `notify_push` (
  `id` int(11) NOT NULL,
  `notifyid` int(11) NOT NULL,
  `notify_title` mediumtext COLLATE utf8_croatian_ci NOT NULL,
  `notify_desc` mediumtext COLLATE utf8_croatian_ci NOT NULL,
  `sender` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `level` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `school` int(11) NOT NULL DEFAULT 0,
  `class` int(11) NOT NULL DEFAULT 0,
  `status` enum('active','inactive') COLLATE utf8_croatian_ci NOT NULL DEFAULT 'active',
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `notify_push`
--

INSERT INTO `notify_push` (`id`, `notifyid`, `notify_title`, `notify_desc`, `sender`, `level`, `school`, `class`, `status`, `created_on`) VALUES
(1, 1, 'Notification test', 'Notification Description text update', 'system', 'all', 0, 0, 'active', '2021-01-27 15:39:13');

-- --------------------------------------------------------

--
-- Table structure for table `period`
--

CREATE TABLE `period` (
  `period_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `school_id` int(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `subject_id` int(255) NOT NULL,
  `remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `period`
--

INSERT INTO `period` (`period_id`, `user_id`, `school_id`, `class`, `section`, `subject_id`, `remark`) VALUES
(1, 16, 1, '1', 'A', 1, '9:00-10:00'),
(3, 16, 1, '3', 'A', 1, '8:00-9:00'),
(6, 25, 13, '1', 'A', 1, 'Class 6 C');

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` int(100) NOT NULL,
  `userId` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  `series` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  `class` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  `ctime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(100) NOT NULL,
  `title` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8_croatian_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `class` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `subject` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `series` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `chapter` int(100) NOT NULL,
  `chapterTitle` mediumtext COLLATE utf8_croatian_ci DEFAULT NULL,
  `category` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `url` mediumtext COLLATE utf8_croatian_ci NOT NULL,
  `year` int(11) NOT NULL DEFAULT 0,
  `month` int(11) NOT NULL,
  `module` int(11) NOT NULL,
  `modified` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `keyword` text COLLATE utf8_croatian_ci NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `title`, `image`, `status`, `description`, `class`, `subject`, `series`, `chapter`, `chapterTitle`, `category`, `url`, `year`, `month`, `module`, `modified`, `keyword`, `flag`) VALUES
(30, 'Atlas video test', '', 'Active', '', '3', '11', '0', 1, '13', '2', '', 0, 2, 10, '2021-02-07 23:00:36', '', 0),
(32, 'MKG-Letter', '', 'Active', '', '12', '13', '0', 1, '14', '9', '', 0, 2, 25, '2021-02-19 02:37:15', '', 0),
(33, 'MKG-Opposites', '', 'Active', '', '12', '13', '0', 1, '15', '2', '', 0, 2, 25, '2021-02-19 02:52:51', '', 0),
(34, 'MKG-Ebook', '', 'Active', '', '12', '13', '0', 1, '16', '4', '', 0, 2, 25, '2021-02-19 02:48:23', '', 0),
(35, 'MKG-Flash-Cards', '', 'Active', '', '12', '13', '0', 1, '17', '1', '', 0, 2, 25, '2021-02-19 02:47:10', '', 0),
(36, 'Did You Know This?', '', 'Active', '', '3', '7', '12', 1, '18', '3', '', 0, 1, 17, '2021-02-18 03:27:12', '', 0),
(37, 'Great Indians', '', 'Active', '', '3', '7', '13', 1, '20', '5', '', 0, 1, 17, '2021-02-19 04:26:35', '', 0),
(38, 'Great Indians', '', 'Active', '', '3', '7', '13', 1, '20', '5', '', 0, 1, 17, '2021-02-18 03:13:37', '', 0),
(39, 'Our Solar System', '', 'Active', '', '3', '7', '15', 1, '19', '5', '', 0, 1, 17, '2021-02-18 03:52:43', '', 0),
(40, 'Months of the Year ', '', 'Active', '', '3', '7', '19', 1, '21', '8', '', 0, 1, 17, '2021-02-18 04:04:59', '', 0),
(41, 'Great Buildings', '', 'Active', '', '3', '7', '13', 1, '22', '5', '', 0, 2, 17, '2021-02-18 04:23:50', '', 0),
(42, 'Word Fun', '', 'Active', '', '3', '7', '14', 1, '23', '8', '', 0, 2, 17, '2021-02-18 04:37:28', '', 0),
(43, 'Puzzle Time', '', 'Active', '', '3', '7', '16', 1, '24', '8', '', 0, 2, 17, '2021-02-18 04:43:34', '', 0),
(44, 'Road Safety', '', 'Active', '', '3', '7', '18', 1, '25', '8', '', 0, 2, 17, '2021-02-18 04:52:20', '', 0),
(45, 'Road Safety', '', 'Active', '', '3', '7', '18', 1, '25', '3', '', 0, 2, 17, '2021-02-18 05:02:12', '', 0),
(46, 'Amazing Creatures', '', 'Active', '', '3', '7', '12', 1, '26', '3', '', 0, 3, 17, '2021-02-18 05:13:49', '', 0),
(47, 'A World Tour ', '', 'Active', '', '3', '7', '13', 2, '27', '8', '', 0, 3, 17, '2021-02-18 05:51:37', '', 0),
(48, 'Our Music', '', 'Active', '', '3', '7', '13', 3, '28', '8', '', 0, 3, 17, '2021-02-18 22:28:59', '', 0),
(49, 'Indian Sportswomen', '', 'Active', '', '3', '7', '17', 4, '29', '8', '', 0, 3, 17, '2021-02-18 22:35:35', '', 0),
(50, 'Their Strange Ways', '', 'Active', '', '3', '7', '19', 5, '30', '8', '', 0, 3, 17, '2021-02-18 22:42:14', '', 0),
(51, 'Friends with Feathers', '', 'Active', '', '3', '7', '12', 1, '31', '3', '', 0, 4, 17, '2021-02-18 22:48:27', '', 0),
(52, 'Flag Quiz', '', 'Active', '', '3', '7', '13', 2, '32', '5', '', 0, 4, 17, '2021-02-18 23:00:30', '', 0),
(53, 'Great Inventions', '', 'Active', '', '3', '7', '15', 3, '33', '8', '', 0, 4, 17, '2021-02-18 23:09:56', '', 0),
(54, 'Brainpower', '', 'Active', '', '3', '7', '16', 4, '34', '3', '', 0, 4, 17, '2021-02-18 23:19:00', '', 0),
(55, 'Care for Animals', '', 'Active', '', '3', '7', '18', 5, '35', '5', '', 0, 4, 17, '2021-02-18 23:28:44', '', 0),
(56, 'Matchless Animals', '', 'Active', '', '3', '7', '12', 1, '36', '5', '', 0, 5, 17, '2021-02-18 23:38:16', '', 0),
(57, 'Classical Dances', '', 'Active', '', '3', '7', '20', 1, '37', '8', '', 0, 5, 17, '2021-02-18 23:44:28', '', 0),
(58, 'Electricity', '', 'Active', '', '3', '7', '20', 4, '38', '3', '', 0, 5, 17, '2021-02-18 23:51:23', '', 0),
(59, 'Animal Sounds', '', 'Active', '', '3', '7', '14', 3, '39', '3', '', 0, 5, 17, '2021-02-18 23:58:59', '', 0),
(60, 'National Games', '', 'Active', '', '3', '7', '17', 5, '40', '3', '', 0, 5, 17, '2021-02-19 00:09:11', '', 0),
(61, ' Bonsai', '', 'Active', '', '3', '7', '12', 1, '41', '3', '', 0, 6, 17, '2021-02-19 00:17:31', '', 0),
(62, 'Sobriquets', '', 'Active', '', '3', '7', '13', 2, '42', '5', '', 0, 6, 17, '2021-02-19 00:35:45', '', 0),
(63, 'Clockwork Puzzle', '', 'Active', '', '3', '7', '16', 3, '43', '5', '', 0, 6, 17, '2021-02-19 00:42:49', '', 0),
(64, 'Mind Your Manners', '', 'Active', '', '3', '7', '18', 4, '44', '5', '', 0, 6, 17, '2021-02-19 00:48:08', '', 0),
(65, 'Satya Nadella', '', 'Active', '', '3', '7', '19', 5, '45', '5', '', 0, 6, 17, '2021-02-19 05:43:09', '', 0),
(66, 'Useful Plants', '', 'Active', '', '3', '7', '12', 1, '46', '5', '', 0, 7, 17, '2021-02-19 01:02:18', '', 0),
(67, 'Festival Time', '', 'Active', '', '3', '7', '20', 2, '47', '5', '', 0, 7, 17, '2021-02-19 01:06:31', '', 0),
(68, 'Bookstall', '', 'Active', '', '3', '7', '14', 3, '48', '5', '', 0, 7, 17, '2021-02-19 01:13:25', '', 0),
(69, 'Our Amazing Body', '', 'Active', '', '3', '7', '15', 4, '49', '5', '', 0, 7, 17, '2021-02-19 01:22:08', '', 0),
(70, 'My Game', '', 'Active', '', '3', '7', '17', 5, '50', '5', '', 0, 7, 17, '2021-02-19 01:30:45', '', 0),
(71, 'Countries, Capitals and Currencies', '', 'Active', '', '3', '7', '13', 1, '51', '5', '', 0, 8, 17, '2021-02-19 02:19:48', '', 0),
(72, 'Places and Nicknames', '', 'Active', '', '3', '7', '20', 2, '52', '5', '', 0, 8, 17, '2021-02-19 02:23:45', '', 0),
(73, 'You Know My Name', '', 'Active', '', '3', '7', '17', 3, '53', '5', '', 0, 8, 17, '2021-02-19 02:35:54', '', 0),
(74, 'Be Honest Be Good', '', 'Active', '', '3', '7', '18', 3, '54', '5', '', 0, 8, 17, '2021-02-19 02:44:50', '', 0),
(75, 'Greetings from Around the World', '', 'Active', '', '3', '7', '19', 5, '55', '5', '', 0, 8, 17, '2021-02-19 02:58:28', '', 0),
(76, 'World’s Smallest', '', 'Active', '', '3', '7', '12', 1, '56', '5', '', 0, 9, 17, '2021-02-19 03:02:17', '', 0),
(77, 'Heritage of India', '', 'Active', '', '3', '7', '20', 2, '57', '5', '', 0, 9, 17, '2021-02-19 03:15:26', '', 0),
(78, 'Group Names', '', 'Active', '', '3', '7', '14', 3, '58', '5', '', 0, 9, 17, '2021-02-19 03:21:54', '', 0),
(79, 'Put on Your Thinking Cap', '', 'Active', '', '3', '7', '16', 4, '59', '5', '', 0, 9, 17, '2021-02-19 03:29:27', '', 0),
(80, 'Water Sports', '', 'Active', '', '3', '7', '17', 5, '60', '5', '', 0, 9, 17, '2021-02-19 03:37:50', '', 0),
(81, 'Island Nations', '', 'Active', '', '3', '7', '13', 1, '61', '5', '', 0, 10, 17, '2021-02-19 03:44:44', '', 0),
(82, 'National Parks', '', 'Active', '', '3', '7', '20', 2, '62', '5', '', 0, 10, 17, '2021-02-19 03:56:25', '', 0),
(83, 'Animal Similes', '', 'Active', '', '3', '7', '14', 3, '63', '5', '', 0, 10, 17, '2021-02-19 04:02:17', '', 0),
(84, 'Study to Succeed', '', 'Active', '', '3', '7', '18', 4, '64', '5', '', 0, 10, 17, '2021-02-19 04:09:22', '', 0),
(85, 'World’s Largest', '', 'Active', '', '3', '7', '19', 5, '65', '5', '', 0, 10, 17, '2021-02-19 04:16:25', '', 0),
(86, 'MKG-EVS-EBOOK', '', 'Active', '', '12', '13', '0', 1, '66', '4', '', 0, 2, 26, '2021-02-19 05:03:39', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `setId` bigint(20) NOT NULL,
  `class` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `course` int(11) NOT NULL,
  `topic` int(11) NOT NULL,
  `act_type` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `total_attempt` int(11) NOT NULL,
  `wrng_attempt` int(11) NOT NULL,
  `right_attempt` int(11) NOT NULL,
  `start_time` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `end_time` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `total_time` time NOT NULL,
  `userid` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `setId`, `class`, `subject`, `course`, `topic`, `act_type`, `total_attempt`, `wrng_attempt`, `right_attempt`, `start_time`, `end_time`, `total_time`, `userid`, `created_on`) VALUES
(1, 1, 1, 1, 0, 0, '1', 4, 2, 2, '9:00', '10:00', '00:36:00', 17, '2021-02-23 16:09:25'),
(2, 1, 1, 1, 0, 0, '2', 4, 2, 2, '9:00', '10:00', '00:36:00', 17, '2021-02-23 16:09:25'),
(3, 1, 1, 1, 0, 0, '3', 4, 2, 2, '9:00', '10:00', '00:36:00', 17, '2021-02-23 16:09:25');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `country_id`) VALUES
(1, 'ANDHRA PRADESH', 105),
(2, 'ASSAM', 105),
(3, 'ARUNACHAL PRADESH', 105),
(4, 'BIHAR', 105),
(5, 'GUJRAT', 105),
(6, 'HARYANA', 105),
(7, 'HIMACHAL PRADESH', 105),
(8, 'JAMMU & KASHMIR', 105),
(9, 'KARNATAKA', 105),
(10, 'KERALA', 105),
(11, 'MADHYA PRADESH', 105),
(12, 'MAHARASHTRA', 105),
(13, 'MANIPUR', 105),
(14, 'MEGHALAYA', 105),
(15, 'MIZORAM', 105),
(16, 'NAGALAND', 105),
(17, 'ORISSA', 105),
(18, 'PUNJAB', 105),
(19, 'RAJASTHAN', 105),
(20, 'SIKKIM', 105),
(21, 'TAMIL NADU', 105),
(22, 'TRIPURA', 105),
(23, 'UTTAR PRADESH', 105),
(24, 'WEST BENGAL', 105),
(25, 'DELHI', 105),
(26, 'GOA', 105),
(27, 'PONDICHERY', 105),
(28, 'LAKSHDWEEP', 105),
(29, 'DAMAN & DIU', 105),
(30, 'DADRA & NAGAR', 105),
(31, 'CHANDIGARH', 105),
(32, 'ANDAMAN & NICOBAR', 105),
(33, 'UTTARAKHAND', 105),
(34, 'JHARKHAND', 105),
(35, 'CHATTISGARH', 105);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `u_name` varchar(150) COLLATE utf8_croatian_ci NOT NULL,
  `u_school` varchar(200) COLLATE utf8_croatian_ci DEFAULT NULL,
  `u_class` varchar(100) COLLATE utf8_croatian_ci DEFAULT NULL,
  `u_sub` varchar(50) COLLATE utf8_croatian_ci DEFAULT NULL,
  `series` varchar(50) COLLATE utf8_croatian_ci DEFAULT NULL,
  `u_email` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `u_pass` varchar(100) COLLATE utf8_croatian_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_croatian_ci DEFAULT NULL,
  `forgot_pas_key` varchar(30) COLLATE utf8_croatian_ci DEFAULT NULL,
  `parent_mobile` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_croatian_ci DEFAULT NULL,
  `user_type` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `creation_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `deletflag` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `u_name`, `u_school`, `u_class`, `u_sub`, `series`, `u_email`, `u_pass`, `password`, `forgot_pas_key`, `parent_mobile`, `image`, `user_type`, `status`, `creation_time`, `deletflag`) VALUES
(2, 'Admin', NULL, NULL, NULL, NULL, 'volt@vivadigitalindia.net', 'fd29b48c9d39724e216a858f4623dc9a', 'Volt@viva02', '39112', '8287080604', 'profile.jpg', 1, 1, '2018-06-22 07:21:21', 0),
(3, 'Abhishek Kumar', NULL, NULL, NULL, NULL, 'abhishek@vivadigitalindia.net', 'a57c0cd6430c251ebb19dda161b397ea', 'Volt@0202', '', '8287080605', 'profile.jpg', 2, 1, '2020-02-04 07:21:21', 0),
(4, 'Sanjay Dubey', NULL, NULL, NULL, NULL, 'sanjay@vivadigitalindia.net', 'a57c0cd6430c251ebb19dda161b397ea', 'Volt@0202', '', '8287080606', 'profile.jpg', 2, 1, '2020-02-04 09:21:29', 0),
(5, 'Asha Rani', NULL, NULL, NULL, NULL, 'asha@vivadigitalindia.net', 'a57c0cd6430c251ebb19dda161b397ea', 'Volt@0202', '', '8287080605', 'profile.jpg', 2, 1, '2020-02-04 07:21:21', 0),
(6, 'Babita Thakur', NULL, NULL, NULL, NULL, 'babita@vivadigitalindia.net', 'a57c0cd6430c251ebb19dda161b397ea', 'Volt@0202', '', '8287080606', 'profile.jpg', 2, 1, '2020-02-04 09:21:29', 0),
(7, 'Heena Yamin', NULL, NULL, NULL, NULL, 'heena@vivadigitalindia.net', 'a57c0cd6430c251ebb19dda161b397ea', 'Volt@0202', '', '8287080606', 'profile.jpg', 2, 1, '2020-02-04 09:21:29', 0),
(8, 'Rohit Shakya', NULL, NULL, NULL, NULL, 'rohit.shakya@vivavolt.net', 'a57c0cd6430c251ebb19dda161b397ea', 'Volt@0202', '', '8287080006', 'profile.jpg', 1, 1, '2021-01-07 09:21:29', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_result`
--

CREATE TABLE `user_result` (
  `id` int(100) NOT NULL,
  `userId` int(100) NOT NULL,
  `catId` int(20) NOT NULL,
  `chapId` int(20) NOT NULL,
  `type` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `totalQuestion` int(20) NOT NULL,
  `currectAnswer` int(20) NOT NULL,
  `wrongAnswer` int(20) NOT NULL,
  `creationTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleteflag` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vt_coupon_management`
--

CREATE TABLE `vt_coupon_management` (
  `vc_id` int(11) NOT NULL,
  `vc_coupon_code` varchar(20) DEFAULT NULL,
  `vc_coupon_type` varchar(20) DEFAULT NULL,
  `vc_coupon_amount` varchar(20) DEFAULT NULL,
  `vc_coupon_start` date DEFAULT NULL,
  `vc_coupon_end` date DEFAULT NULL,
  `vc_coupon_createdby` int(11) NOT NULL DEFAULT 0,
  `vc_coupon_createdate` datetime NOT NULL DEFAULT current_timestamp(),
  `vc_coupon_status` varchar(10) DEFAULT NULL,
  `vc_subject` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vt_coupon_management`
--

INSERT INTO `vt_coupon_management` (`vc_id`, `vc_coupon_code`, `vc_coupon_type`, `vc_coupon_amount`, `vc_coupon_start`, `vc_coupon_end`, `vc_coupon_createdby`, `vc_coupon_createdate`, `vc_coupon_status`, `vc_subject`) VALUES
(1, 'EDU05', 'percentage', '5', '2021-02-15', '2021-02-28', 2, '2021-02-16 11:16:06', 'active', '0'),
(3, 'EDU10', 'percentage', '10', '2021-02-19', '2021-02-28', 2, '2021-02-19 13:15:42', 'active', '7,11');

-- --------------------------------------------------------

--
-- Table structure for table `vt_forgotpassword`
--

CREATE TABLE `vt_forgotpassword` (
  `id` int(11) NOT NULL,
  `vc_email` varchar(256) COLLATE utf8_croatian_ci NOT NULL,
  `vc_TicketNo` varchar(256) COLLATE utf8_croatian_ci NOT NULL,
  `vc_created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vt_live_cart`
--

CREATE TABLE `vt_live_cart` (
  `vc_id` int(11) NOT NULL,
  `vc_session` varchar(100) NOT NULL,
  `vc_merchentorder` varchar(100) NOT NULL,
  `vc_plan` varchar(20) NOT NULL,
  `vc_product` int(22) NOT NULL,
  `vc_qty` int(22) NOT NULL,
  `vc_user` int(22) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `product_price` varchar(20) DEFAULT NULL,
  `product_desc` varchar(200) DEFAULT NULL,
  `product_class` varchar(10) DEFAULT NULL,
  `product_sub` varchar(200) DEFAULT NULL,
  `vc_billinginfo` text NOT NULL,
  `vc_coupon_id` int(11) DEFAULT NULL,
  `vc_coupon_code` varchar(20) DEFAULT NULL,
  `vc_coupon_type` varchar(20) DEFAULT NULL,
  `vc_coupon_amount` varchar(20) DEFAULT NULL,
  `vc_gst` varchar(20) DEFAULT NULL,
  `vc_discount` varchar(20) DEFAULT NULL,
  `vc_payable` varchar(50) DEFAULT NULL,
  `vc_pack_start` date DEFAULT NULL,
  `vc_pack_end` date DEFAULT NULL,
  `vc_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vt_live_cart`
--

INSERT INTO `vt_live_cart` (`vc_id`, `vc_session`, `vc_merchentorder`, `vc_plan`, `vc_product`, `vc_qty`, `vc_user`, `product_name`, `product_price`, `product_desc`, `product_class`, `product_sub`, `vc_billinginfo`, `vc_coupon_id`, `vc_coupon_code`, `vc_coupon_type`, `vc_coupon_amount`, `vc_gst`, `vc_discount`, `vc_payable`, `vc_pack_start`, `vc_pack_end`, `vc_date`) VALUES
(419, 'so4fp43von9i0aejj10j3gfep5h26hut', '', 'student', 9, 1, 17, 'General Knowledge - Class 1', '550', 'Description of GK package', '1', '[\"7\"]', '', 3, 'EDU10', 'percentage', '10', '23.57', '55', '495', '2021-02-20', '2022-02-20', '2021-02-20 10:27:45'),
(420, 'so4fp43von9i0aejj10j3gfep5h26hut', '', 'student', 11, 1, 17, 'English - Class 1', '199', 'Description of package', '1', '[\"1\"]', '', 3, 'EDU10', 'percentage', '0', '9.48', '0', '199', '2021-02-20', '2022-02-20', '2021-02-20 10:27:47'),
(421, 'so4fp43von9i0aejj10j3gfep5h26hut', '', 'student', 12, 1, 17, 'Atlas  Class 3 - 5', '299', 'About this package', '1', '[\"11\"]', '', 3, 'EDU10', 'percentage', '10', '12.81', '29.9', '269.1', '2021-02-20', '2022-02-20', '2021-02-20 10:27:49');

-- --------------------------------------------------------

--
-- Table structure for table `vt_newsreel`
--

CREATE TABLE `vt_newsreel` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `news_desc` mediumtext COLLATE utf8_croatian_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `link` mediumtext COLLATE utf8_croatian_ci NOT NULL,
  `index_num` int(11) NOT NULL DEFAULT 0,
  `status` enum('active','inactive') COLLATE utf8_croatian_ci NOT NULL DEFAULT 'active',
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `vt_newsreel`
--

INSERT INTO `vt_newsreel` (`id`, `title`, `news_desc`, `filename`, `link`, `index_num`, `status`, `created_on`) VALUES
(1, 'News Reel', 'News Reel Text', 'newsreel_1611742307_2c596b547db88c4f42ab.jpeg', 'http://vivavolt.vivadigitalindia.net/', 0, 'active', '2021-01-27 10:11:47');

-- --------------------------------------------------------

--
-- Table structure for table `vt_package`
--

CREATE TABLE `vt_package` (
  `vc_id` int(11) NOT NULL,
  `vc_title` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `vc_class` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `vc_package_desc` text COLLATE utf8_croatian_ci NOT NULL,
  `vc_yearly` int(11) NOT NULL,
  `vc_term_year` int(11) NOT NULL DEFAULT 0,
  `vc_status` enum('active','inactive') COLLATE utf8_croatian_ci NOT NULL DEFAULT 'active',
  `vc_created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `vt_package`
--

INSERT INTO `vt_package` (`vc_id`, `vc_title`, `vc_class`, `vc_package_desc`, `vc_yearly`, `vc_term_year`, `vc_status`, `vc_created_date`) VALUES
(9, 'General Knowledge - Class 1', '1', 'Description of GK package', 550, 1, 'active', '2021-02-03 11:02:00'),
(11, 'English - Class 1', '1', 'Description of package', 199, 1, 'active', '2021-02-03 11:03:07'),
(12, 'Atlas  Class 3 - 5', '1', 'About this package', 299, 1, 'active', '2021-02-03 12:03:00'),
(15, 'General Knowledge - Class 2', '2', 'Description of GK package', 660, 1, 'active', '2021-02-03 11:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `vt_package_info`
--

CREATE TABLE `vt_package_info` (
  `id` int(11) NOT NULL,
  `packageid` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `sublist` mediumtext COLLATE utf8_croatian_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_croatian_ci NOT NULL DEFAULT 'active',
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `vt_package_info`
--

INSERT INTO `vt_package_info` (`id`, `packageid`, `classid`, `sublist`, `status`, `created_on`) VALUES
(25, 11, 1, '[\"1\"]', 'active', '2021-02-18 11:10:04'),
(26, 15, 2, '[\"7\"]', 'active', '2021-02-18 11:10:40'),
(27, 9, 1, '[\"7\"]', 'active', '2021-02-18 11:10:56'),
(28, 12, 1, '[\"11\"]', 'active', '2021-02-18 11:11:28');

-- --------------------------------------------------------

--
-- Table structure for table `vt_premiumfeatures`
--

CREATE TABLE `vt_premiumfeatures` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `image` text COLLATE utf8_croatian_ci NOT NULL,
  `link` text COLLATE utf8_croatian_ci NOT NULL,
  `index_num` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_croatian_ci NOT NULL DEFAULT 'active',
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `vt_premiumfeatures`
--

INSERT INTO `vt_premiumfeatures` (`id`, `title`, `image`, `link`, `index_num`, `class_id`, `status`, `created_on`) VALUES
(1, 'Text', 'whatinside_1611742266_8ea4aaa122a0560da9a2.png', 'http://vivavolt.vivadigitalindia.net/', 3, 1, 'active', '2021-01-27 15:41:06');

-- --------------------------------------------------------

--
-- Table structure for table `vt_premium_package_order`
--

CREATE TABLE `vt_premium_package_order` (
  `vc_id` int(11) NOT NULL,
  `vc_orderno` varchar(100) NOT NULL,
  `vc_merchent_order_no` varchar(100) NOT NULL,
  `vc_txnid` varchar(100) NOT NULL,
  `vc_mode` varchar(50) NOT NULL,
  `vc_plan` varchar(20) NOT NULL,
  `vc_paymentstatus` varchar(50) NOT NULL,
  `vc_product` int(22) NOT NULL,
  `vc_qty` int(22) NOT NULL,
  `product_price` varchar(20) DEFAULT NULL,
  `total_price` varchar(50) NOT NULL,
  `vc_user` int(22) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `product_desc` varchar(200) DEFAULT NULL,
  `product_class` varchar(10) DEFAULT NULL,
  `product_sub` varchar(200) DEFAULT NULL,
  `vc_billinginfo` text NOT NULL,
  `vc_coupon_id` int(11) DEFAULT NULL,
  `vc_coupon_code` varchar(20) DEFAULT NULL,
  `vc_coupon_type` varchar(20) DEFAULT NULL,
  `vc_coupon_amount` varchar(20) DEFAULT NULL,
  `vc_gst` varchar(20) DEFAULT NULL,
  `vc_discount` varchar(20) DEFAULT NULL,
  `vc_payable` varchar(50) DEFAULT NULL,
  `vc_pack_start` date DEFAULT NULL,
  `vc_pack_end` date DEFAULT NULL,
  `vc_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vt_premium_package_order`
--

INSERT INTO `vt_premium_package_order` (`vc_id`, `vc_orderno`, `vc_merchent_order_no`, `vc_txnid`, `vc_mode`, `vc_plan`, `vc_paymentstatus`, `vc_product`, `vc_qty`, `product_price`, `total_price`, `vc_user`, `product_name`, `product_desc`, `product_class`, `product_sub`, `vc_billinginfo`, `vc_coupon_id`, `vc_coupon_code`, `vc_coupon_type`, `vc_coupon_amount`, `vc_gst`, `vc_discount`, `vc_payable`, `vc_pack_start`, `vc_pack_end`, `vc_date`) VALUES
(5, '101001', 'V-220210210144411', '64d1f8f49b67e4bad520', 'RAZORPAY', 'student', 'Paid', 9, 1, '550', '550', 1, 'Class 1 G.K', 'Class 1 G.K About', '1', '[\"7\"]', 'a:8:{s:5:\"fname\";s:5:\"Rahul\";s:5:\"lname\";s:5:\"Singh\";s:7:\"contact\";s:10:\"8470016156\";s:5:\"email\";s:23:\"rahulsingh4ut@gmail.com\";s:5:\"state\";s:5:\"Delhi\";s:4:\"city\";s:13:\"Central Delhi\";s:7:\"pincode\";s:6:\"110092\";s:7:\"address\";s:15:\"New Delhi India\";}', NULL, NULL, NULL, NULL, '26.19', NULL, '550', '2021-02-10', '2022-02-10', '2021-02-10 14:44:32'),
(6, '101002', 'V-220210216153410', 'pay_GcCowZaU4bnyrj', 'RAZORPAY', 'student', 'Paid', 9, 1, '550', '550', 2, 'Class 1 G.K', 'Description of GK package', '1', '[\"7\"]', 'a:8:{s:5:\"fname\";s:4:\"Test\";s:5:\"lname\";s:9:\"Developer\";s:7:\"contact\";s:10:\"9754545151\";s:5:\"email\";s:24:\"saleem@vivagroupindia.in\";s:5:\"state\";s:5:\"Delhi\";s:4:\"city\";s:13:\"Central Delhi\";s:7:\"pincode\";s:6:\"110092\";s:7:\"address\";s:15:\"New Delhi India\";}', 1, 'EDU30', 'percentage', '30', '18.33', '165', '385', '2021-02-16', '2022-02-16', '2021-02-16 15:34:27'),
(7, '101003', 'V-1720210220101309', 'pay_GdhUHiMDL4HEuD', 'RAZORPAY', 'student', 'Paid', 9, 1, '550', '550', 17, 'General Knowledge - Class 1', 'Description of GK package', '1', '[\"7\"]', 'a:8:{s:5:\"fname\";s:7:\"Cecilia\";s:5:\"lname\";s:6:\"Rhodes\";s:7:\"contact\";s:10:\"7896541236\";s:5:\"email\";s:12:\"cc@gmail.com\";s:5:\"state\";s:5:\"Delhi\";s:4:\"city\";s:13:\"Central Delhi\";s:7:\"pincode\";s:6:\"110002\";s:7:\"address\";s:21:\"Dariyaganj New Delhi \";}', 3, 'EDU10', 'percentage', '10', '23.57', '55', '495', '2021-02-20', '2022-02-20', '2021-02-20 10:13:23'),
(8, '101003', 'V-1720210220101309', 'pay_GdhUHiMDL4HEuD', 'RAZORPAY', 'student', 'Paid', 11, 1, '199', '749', 17, 'English - Class 1', 'Description of package', '1', '[\"1\"]', 'a:8:{s:5:\"fname\";s:7:\"Cecilia\";s:5:\"lname\";s:6:\"Rhodes\";s:7:\"contact\";s:10:\"7896541236\";s:5:\"email\";s:12:\"cc@gmail.com\";s:5:\"state\";s:5:\"Delhi\";s:4:\"city\";s:13:\"Central Delhi\";s:7:\"pincode\";s:6:\"110002\";s:7:\"address\";s:21:\"Dariyaganj New Delhi \";}', 3, 'EDU10', 'percentage', '0', '9.48', '0', '199', '2021-02-20', '2022-02-20', '2021-02-20 10:13:23'),
(9, '101003', 'V-1720210220101309', 'pay_GdhUHiMDL4HEuD', 'RAZORPAY', 'student', 'Paid', 12, 1, '299', '1048', 17, 'Atlas  Class 3 - 5', 'About this package', '1', '[\"11\"]', 'a:8:{s:5:\"fname\";s:7:\"Cecilia\";s:5:\"lname\";s:6:\"Rhodes\";s:7:\"contact\";s:10:\"7896541236\";s:5:\"email\";s:12:\"cc@gmail.com\";s:5:\"state\";s:5:\"Delhi\";s:4:\"city\";s:13:\"Central Delhi\";s:7:\"pincode\";s:6:\"110002\";s:7:\"address\";s:21:\"Dariyaganj New Delhi \";}', 3, 'EDU10', 'percentage', '10', '12.81', '29.9', '269.1', '2021-02-20', '2022-02-20', '2021-02-20 10:13:23'),
(10, '101004', 'V-1520210220171358', 'pay_Gdof3hFXIvgzJN', 'RAZORPAY', 'school', 'Paid', 9, 20, '550', '550', 15, 'General Knowledge - Class 1', 'Description of GK package', '1', '[\"7\"]', 'a:8:{s:5:\"fname\";s:6:\"Abacus\";s:5:\"lname\";s:5:\"Admin\";s:7:\"contact\";s:10:\"7896541236\";s:5:\"email\";s:16:\"abacus@gmail.com\";s:5:\"state\";s:5:\"Delhi\";s:4:\"city\";s:9:\"New Delhi\";s:7:\"pincode\";s:6:\"110020\";s:7:\"address\";s:9:\"New Delhi\";}', 0, '0', '0', '0', '523.81', '0', '11000', '2021-04-01', '2022-03-31', '2021-02-20 17:14:25');

-- --------------------------------------------------------

--
-- Table structure for table `vt_school`
--

CREATE TABLE `vt_school` (
  `id` int(11) NOT NULL,
  `school_name` mediumtext COLLATE utf8_croatian_ci NOT NULL,
  `term_start` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `term_end` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `city_id` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `accstatus` enum('enabled','disabled') COLLATE utf8_croatian_ci NOT NULL DEFAULT 'enabled',
  `mnthstatus` enum('enabled','disabled') COLLATE utf8_croatian_ci NOT NULL DEFAULT 'enabled',
  `status` enum('active','inactive') COLLATE utf8_croatian_ci NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `vt_school`
--

INSERT INTO `vt_school` (`id`, `school_name`, `term_start`, `term_end`, `city_id`, `state`, `accstatus`, `mnthstatus`, `status`, `created_on`) VALUES
(1, 'DPS PUBLIC SCHOOL', '6', '5', 114, 25, 'enabled', 'enabled', 'active', '2021-01-27 10:12:26'),
(11, 'APS PUBLIC SCHOOL', '6', '5', 3, 32, 'enabled', 'enabled', 'active', '2021-02-11 08:49:38'),
(12, 'Rk Public school', '4', '3', 114, 25, 'enabled', 'enabled', 'active', '2021-02-11 09:46:45'),
(13, 'Abacus', '4', '3', 116, 25, 'enabled', 'enabled', 'active', '2021-02-18 08:57:20'),
(14, 'DPS PUBLIC SCHOOL', '4', '3', 3, 32, 'enabled', 'enabled', 'active', '2021-02-18 09:18:10');

-- --------------------------------------------------------

--
-- Table structure for table `vt_subscribe`
--

CREATE TABLE `vt_subscribe` (
  `id` int(11) NOT NULL,
  `schoolid` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `sublist` mediumtext COLLATE utf8_croatian_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_croatian_ci NOT NULL DEFAULT 'active',
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `vt_subscribe`
--

INSERT INTO `vt_subscribe` (`id`, `schoolid`, `classid`, `sublist`, `status`, `created_on`) VALUES
(5, 1, 2, '[\"12\"]', 'active', '2021-02-03 10:55:35'),
(6, 1, 1, '[\"9\"]', 'active', '2021-02-03 10:55:35'),
(7, 1, 4, '[\"10\"]', 'active', '2021-02-03 11:04:41');

-- --------------------------------------------------------

--
-- Table structure for table `vt_term_year`
--

CREATE TABLE `vt_term_year` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `start_year` int(11) NOT NULL,
  `end_year` int(11) NOT NULL,
  `status` enum('active','inactive') CHARACTER SET latin1 NOT NULL DEFAULT 'active',
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `vt_term_year`
--

INSERT INTO `vt_term_year` (`id`, `title`, `start_year`, `end_year`, `status`, `created_date`) VALUES
(1, '2020 - 2021', 2020, 2021, 'active', '2021-02-17 10:58:42'),
(2, '2021 - 2022', 2021, 2022, 'active', '2021-02-17 12:56:40'),
(3, '2022 - 2023', 2022, 2023, 'inactive', '2021-02-17 13:02:21'),
(4, '2023 - 2024', 2023, 2024, 'inactive', '2021-02-18 16:16:58'),
(5, '2024 - 2025', 2024, 2025, 'inactive', '2021-02-18 16:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `vt_token_trial`
--

CREATE TABLE `vt_token_trial` (
  `id` int(11) NOT NULL,
  `schoolid` int(11) NOT NULL,
  `packageid` int(11) NOT NULL,
  `token` int(11) NOT NULL,
  `trial` int(11) NOT NULL,
  `trial_status` enum('active','inactive') COLLATE utf8_croatian_ci NOT NULL,
  `trial_start` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `trial_end` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `vt_token_trial`
--

INSERT INTO `vt_token_trial` (`id`, `schoolid`, `packageid`, `token`, `trial`, `trial_status`, `trial_start`, `trial_end`, `created_on`) VALUES
(3, 1, 9, 15, 30, 'active', '', '', '2021-02-04 15:35:34'),
(4, 1, 12, 10, 15, 'active', '', '', '2021-02-04 15:35:34'),
(5, 1, 10, 5, 20, 'active', '', '', '2021-02-04 15:35:34');

-- --------------------------------------------------------

--
-- Table structure for table `vt_useraccount`
--

CREATE TABLE `vt_useraccount` (
  `vc_id` int(11) NOT NULL,
  `vc_name` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `vc_lastname` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `vc_username` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `vc_gender` enum('male','female') COLLATE utf8_croatian_ci NOT NULL,
  `vc_dob` varchar(100) COLLATE utf8_croatian_ci NOT NULL DEFAULT '2001-01-01',
  `vc_studentid` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `vc_state` varchar(50) COLLATE utf8_croatian_ci DEFAULT NULL,
  `vc_city` varchar(50) COLLATE utf8_croatian_ci DEFAULT NULL,
  `vc_school` varchar(200) COLLATE utf8_croatian_ci DEFAULT NULL,
  `vc_profile_pic` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `vc_contact` varchar(10) COLLATE utf8_croatian_ci NOT NULL,
  `vc_email` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `vc_password` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `vc_class` int(2) NOT NULL,
  `vc_sectionclass` varchar(50) COLLATE utf8_croatian_ci NOT NULL DEFAULT 'A',
  `vc_subject` text COLLATE utf8_croatian_ci NOT NULL,
  `vc_status` varchar(10) COLLATE utf8_croatian_ci NOT NULL,
  `vc_created_date` datetime NOT NULL,
  `vc_viewpass` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `vc_token` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `vc_otp` varchar(10) COLLATE utf8_croatian_ci NOT NULL,
  `vc_usertype` enum('student','teacher','admin') COLLATE utf8_croatian_ci NOT NULL DEFAULT 'student',
  `vc_device` varchar(10) COLLATE utf8_croatian_ci NOT NULL,
  `vc_deviceinfo` text COLLATE utf8_croatian_ci NOT NULL,
  `vc_paymentinfo` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `vt_useraccount`
--

INSERT INTO `vt_useraccount` (`vc_id`, `vc_name`, `vc_lastname`, `vc_username`, `vc_gender`, `vc_dob`, `vc_studentid`, `vc_state`, `vc_city`, `vc_school`, `vc_profile_pic`, `vc_contact`, `vc_email`, `vc_password`, `vc_class`, `vc_sectionclass`, `vc_subject`, `vc_status`, `vc_created_date`, `vc_viewpass`, `vc_token`, `vc_otp`, `vc_usertype`, `vc_device`, `vc_deviceinfo`, `vc_paymentinfo`) VALUES
(1, 'Rahul', 'Kumar', 'a0001', 'male', '2014-01-01', 'A007878', '25', '114', '1', '', '9754545151', 'rahul.rajput@vivagroupindia.in', '8c57fe1d1b673624931a081861a135e5', 1, 'A', '1', 'Active', '2021-01-27 04:15:25', 'NElUR0xRSkZzOTVOaXRxZ1NZa3cwUT09', '', '', 'student', '', '', 1),
(2, 'Test', 'Developer', 'a0002', 'male', '2014-01-01', 'A007858', '25', '114', '1', '', '9754545151', 'saleem@vivagroupindia.in', 'b6d276d7a5c1341eddf9c39d06b1fff6', 1, 'A', '9', 'Active', '2021-01-27 04:15:25', 'anIvbnloQUxiQnNITHd4Ykc4TmJYUT09', '', '', 'admin', '', '', 1),
(6, 'Sunita', 'Roy', 'a0006', 'female', '2021-02-09', 'A00457', '25', '114', '1', '', '9900000000', 'admin_6@volt.net', 'bf3d806fea8f70442360d90c744bc6c9', 1, 'A', '9', 'Active', '2021-02-09 03:29:14', 'VGFrVE9NdzhkZ2ZxL25YYzlocnA3Zz09', '', '', 'teacher', '', '', 1),
(8, 'APS PUBLIC SCHOOL', 'Admin', 'a0003', 'male', '2021-02-11', 'A0001', '32', '3', '11', '', '9878800000', 'rahul.rajput@vivagroupindia.in', 'ade17f331ffa8f82522416640d118c23', 1, 'A', '1', 'Active', '2021-02-11 02:49:38', 'ZnJnYXRGZ2hpRUE2bTRHRCtMUXFpdz09', '', '', 'admin', '', '', 1),
(9, 'Rk Public school', 'Admin', 'a0004', 'male', '4', 'R0001', '25', '114', '12', '', '0124578485', 'rkpublicschool@vivavolt.in', 'b6d276d7a5c1341eddf9c39d06b1fff6', 1, 'A', '1', 'Active', '2021-02-11 03:46:45', 'anIvbnloQUxiQnNITHd4Ykc4TmJYUT09', '', '', 'admin', '', '', 1),
(10, 'Rk Public ', 'School', 'a0005', 'male', '1989-07-12', '', '25', '114', '12', '', '0124875847', 'rkpublicschool@vivavolt.in', 'b6d276d7a5c1341eddf9c39d06b1fff6', 1, 'A', '11', 'Active', '2021-02-11 03:49:08', 'anIvbnloQUxiQnNITHd4Ykc4TmJYUT09', '', '', 'teacher', '', '', 1),
(15, 'Abacus', 'Admin', 'a0006', 'male', '3', 'A0001', '25', '116', '13', '', '7896541236', 'abacus@gmail.com', 'd77670efb9d86c20547159d7f347b883', 1, 'A', '1', 'Active', '2021-02-18 02:57:20', 'V3drZEFMbFZTVFl2MlBrTkFaOWhFdz09', '', '', 'admin', '', '', 1),
(16, 'Alice', 'Wales', 'a0007', 'female', '12-12-1995', '', '25', '114', '13', '', '7896541236', 'alice@gmail.com', 'd77670efb9d86c20547159d7f347b883', 1, 'A', '1', 'Active', '2021-02-18 14:32:52', 'SzhCYzFUWnZnVmRHOVBjM0hiUkZGQT09', '', '', 'teacher', '', '', 1),
(17, 'Cecilia', 'Rhodes', 'a0008', 'female', '25-45-1995', '', '25', '114', '13', '', '7896541236', 'cc@gmail.com', 'd77670efb9d86c20547159d7f347b883', 1, 'A', '1', 'Active', '2021-02-18 14:34:08', 'SzhCYzFUWnZnVmRHOVBjM0hiUkZGQT09', '', '', 'student', '', '', 1),
(18, 'Nida', 'Hashmi', 'a0009', 'female', '12-12-1955', '', '25', '114', '13', '', '7896541236', 'nida@gmail.co,', 'd41d8cd98f00b204e9800998ecf8427e', 1, 'A', '1', 'Active', '2021-02-18 14:44:20', 'SzhCYzFUWnZnVmRHOVBjM0hiUkZGQT09', '', '', 'student', '', '', 1),
(19, 'DPS PUBLIC SCHOOL', 'Admin', 'a0010', 'male', '3', 'D0001', '32', '3', '14', '', '9900000001', 'volt@vivadigitalindia.net', 'e009d8e968a8f4ea71ec2b94182dfcd8', 1, 'A', '1', 'Active', '2021-02-18 03:18:10', 'MnBXYjIwK0xxUmZPUVkzM1l5K3E3dz09', '', '', 'admin', '', '', 1),
(25, 'jia', 'khan', 'a0011', 'female', '2021-02-20', '', '4', NULL, '13', '', '7896541236', 'jia@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 0, 'A', '', 'Active', '2021-02-22 10:43:49', 'SzhCYzFUWnZnVmRHOVBjM0hiUkZGQT09', '', '', 'teacher', '', '', 1),
(26, 'rohit', 'shakya', 'a0012', 'male', '2021-02-09', '', '25', NULL, '13', '', '1236547896', 'rohit.rkshakya@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 0, 'A', '', 'Active', '2021-02-23 10:08:04', 'SzhCYzFUWnZnVmRHOVBjM0hiUkZGQT09', '', '', 'admin', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vt_user_role`
--

CREATE TABLE `vt_user_role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `role_module` text NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `creation_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vt_user_role`
--

INSERT INTO `vt_user_role` (`id`, `role_name`, `role_module`, `status`, `creation_date`) VALUES
(1, 'Admin user', 'All Access', 'active', '2021-02-16 12:37:21'),
(2, 'Basic User', 'Master,Chapter,Questionset,Questionlist,Notification,Premiumfeatures', 'active', '2021-02-16 12:37:21');

-- --------------------------------------------------------

--
-- Table structure for table `vt_user_token`
--

CREATE TABLE `vt_user_token` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `token` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `timemodified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `vt_user_token`
--

INSERT INTO `vt_user_token` (`id`, `userid`, `token`, `timemodified`) VALUES
(49, 3, 'PZvlEcFMydPl2zmH9Yp3', '2021-02-09 09:35:41'),
(50, 3, 'gqVqe5Hb3u30hnCgZrrz', '2021-02-09 09:35:41'),
(141, 6, 'kznmcEm2YRtoGODnJYF1', '2021-02-17 10:06:32'),
(144, 6, '8l0hBZNF1PW2y0nGnTJS', '2021-02-17 10:22:53'),
(175, 9, 'J2l2SVxaAmofLqC3lgjP', '2021-02-18 12:36:26'),
(176, 9, 'SX7WrRpuZCrGjK4FjdQk', '2021-02-18 12:39:16'),
(196, 2, 'TmRBvlKE8sCnQrNL390I', '2021-02-20 04:34:08'),
(197, 2, 'Udk6yhwe4x1Xii0bWoG9', '2021-02-20 04:40:54'),
(201, 10, 't2q3A3rdKQhdfz0QXjiF', '2021-02-20 06:03:58'),
(202, 10, 'OvsKFT03WEQ88B9nZSax', '2021-02-20 10:28:18'),
(226, 16, 'IdzgVplckSxyDGALRY2X', '2021-02-23 08:34:55'),
(229, 16, 'wJ06805TImaZm80sjXDE', '2021-02-23 08:46:22'),
(231, 17, 'IJdJ9Hy3LaY7C2mmXBJJ', '2021-02-23 10:54:57'),
(232, 15, '5I9ReeHFN8KM5CKkrSot', '2021-02-23 11:57:37'),
(233, 17, 'IJBU3p5aq7Yl5Ay4mqLl', '2021-02-23 11:58:05'),
(234, 15, 'FRo0H2yVPkt9zK21P8Sx', '2021-02-23 12:17:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`assignment_id`);

--
-- Indexes for table `category_type`
--
ALTER TABLE `category_type`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `chaptername`
--
ALTER TABLE `chaptername`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `set_id` (`set_id`);

--
-- Indexes for table `mastar_chapter`
--
ALTER TABLE `mastar_chapter`
  ADD PRIMARY KEY (`chap_id`);

--
-- Indexes for table `mastar_class`
--
ALTER TABLE `mastar_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `mastar_series`
--
ALTER TABLE `mastar_series`
  ADD PRIMARY KEY (`series_id`);

--
-- Indexes for table `mastar_subject`
--
ALTER TABLE `mastar_subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `master_module`
--
ALTER TABLE `master_module`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `notify`
--
ALTER TABLE `notify`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notify_logs`
--
ALTER TABLE `notify_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notify_push`
--
ALTER TABLE `notify_push`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `period`
--
ALTER TABLE `period`
  ADD PRIMARY KEY (`period_id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_result`
--
ALTER TABLE `user_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vt_coupon_management`
--
ALTER TABLE `vt_coupon_management`
  ADD PRIMARY KEY (`vc_id`);

--
-- Indexes for table `vt_forgotpassword`
--
ALTER TABLE `vt_forgotpassword`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vt_live_cart`
--
ALTER TABLE `vt_live_cart`
  ADD PRIMARY KEY (`vc_id`);

--
-- Indexes for table `vt_newsreel`
--
ALTER TABLE `vt_newsreel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vt_package`
--
ALTER TABLE `vt_package`
  ADD PRIMARY KEY (`vc_id`);

--
-- Indexes for table `vt_package_info`
--
ALTER TABLE `vt_package_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vt_premiumfeatures`
--
ALTER TABLE `vt_premiumfeatures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vt_premium_package_order`
--
ALTER TABLE `vt_premium_package_order`
  ADD PRIMARY KEY (`vc_id`);

--
-- Indexes for table `vt_school`
--
ALTER TABLE `vt_school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vt_subscribe`
--
ALTER TABLE `vt_subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vt_term_year`
--
ALTER TABLE `vt_term_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vt_token_trial`
--
ALTER TABLE `vt_token_trial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vt_useraccount`
--
ALTER TABLE `vt_useraccount`
  ADD PRIMARY KEY (`vc_id`);

--
-- Indexes for table `vt_user_role`
--
ALTER TABLE `vt_user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vt_user_token`
--
ALTER TABLE `vt_user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `assignment_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category_type`
--
ALTER TABLE `category_type`
  MODIFY `cat_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `chaptername`
--
ALTER TABLE `chaptername`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=604;

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=319;

--
-- AUTO_INCREMENT for table `mastar_chapter`
--
ALTER TABLE `mastar_chapter`
  MODIFY `chap_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `mastar_class`
--
ALTER TABLE `mastar_class`
  MODIFY `class_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mastar_series`
--
ALTER TABLE `mastar_series`
  MODIFY `series_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `mastar_subject`
--
ALTER TABLE `mastar_subject`
  MODIFY `sub_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `master_module`
--
ALTER TABLE `master_module`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notify_logs`
--
ALTER TABLE `notify_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notify_push`
--
ALTER TABLE `notify_push`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `period`
--
ALTER TABLE `period`
  MODIFY `period_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_result`
--
ALTER TABLE `user_result`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vt_coupon_management`
--
ALTER TABLE `vt_coupon_management`
  MODIFY `vc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vt_forgotpassword`
--
ALTER TABLE `vt_forgotpassword`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vt_live_cart`
--
ALTER TABLE `vt_live_cart`
  MODIFY `vc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=424;

--
-- AUTO_INCREMENT for table `vt_newsreel`
--
ALTER TABLE `vt_newsreel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vt_package`
--
ALTER TABLE `vt_package`
  MODIFY `vc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `vt_package_info`
--
ALTER TABLE `vt_package_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `vt_premiumfeatures`
--
ALTER TABLE `vt_premiumfeatures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vt_premium_package_order`
--
ALTER TABLE `vt_premium_package_order`
  MODIFY `vc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vt_school`
--
ALTER TABLE `vt_school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `vt_subscribe`
--
ALTER TABLE `vt_subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vt_term_year`
--
ALTER TABLE `vt_term_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vt_token_trial`
--
ALTER TABLE `vt_token_trial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vt_useraccount`
--
ALTER TABLE `vt_useraccount`
  MODIFY `vc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `vt_user_role`
--
ALTER TABLE `vt_user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vt_user_token`
--
ALTER TABLE `vt_user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
