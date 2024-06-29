-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 09:43 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ucomfortbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blogId` int(11) NOT NULL,
  `blogTitle` varchar(255) NOT NULL CHECK (octet_length(`blogTitle`) <= 255),
  `blogContent` varchar(255) NOT NULL CHECK (octet_length(`blogContent`) <= 5000),
  `blogAuthor` varchar(255) NOT NULL CHECK (octet_length(`blogAuthor`) <= 255),
  `blogImage` varchar(255) NOT NULL CHECK (octet_length(`blogImage`) <= 255),
  `blogUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `blogIdentify` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blogId`, `blogTitle`, `blogContent`, `blogAuthor`, `blogImage`, `blogUpdated`, `blogIdentify`) VALUES
(4, 'Is Laravel the Most Beneficial PHP Framework for Your Company’s Expansion?', 'b content', 'kaiiden', '66325aefb420f.jpg', '2024-05-01 15:08:31', 'RSbMoPQ4j1rgPOCP'),
(5, 'Is Laravel the Most Beneficial PHP Framework for Your Company’s Expansion?', 'Is Laravel the Most Beneficial PHP Framework for Your Company’s Expansion?', 'uComfortbd', '66325ad36ed51.jpg', '2024-05-01 15:08:03', 'KBk9ZNqmyascDDnx'),
(6, 'Is Laravel the Most Beneficial PHP Framework for Your Company’s Expansion?', 'Is Laravel the Most Beneficial PHP Framework for Your Company’s Expansion?', 'uComfortbd', '66325adb37a1e.png', '2024-05-01 15:08:11', '1L8Qbi5YDw6bkauj'),
(7, 'Is Laravel the Most Beneficial PHP Framework for Your Company’s Expansion?', 'Is Laravel the Most Beneficial PHP Framework for Your Company’s Expansion?', 'uComfortbd', '66325af78ff77.jpg', '2024-05-01 15:08:39', '7fJnKymTubsnwteu');

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `campaignId` int(11) NOT NULL,
  `campainTitle` varchar(255) NOT NULL CHECK (octet_length(`campainTitle`) <= 255),
  `campaignSubtitle` varchar(255) NOT NULL CHECK (octet_length(`campaignSubtitle`) <= 255),
  `campaignMedia` varchar(255) NOT NULL CHECK (octet_length(`campaignMedia`) <= 255),
  `campaignUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `campaignIdentify` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`campaignId`, `campainTitle`, `campaignSubtitle`, `campaignMedia`, `campaignUpdated`, `campaignIdentify`) VALUES
(12, 'Campaign one', 'Campain Subtitle', '66325ddf8cbc2.jpg', '2024-05-01 15:26:22', 'sGU0pfp5kQb9FjWn'),
(13, 'Campaign Two', 'subtitle', '66325f34307dc.jpg', '2024-05-01 09:26:44', 'I15vUET7G0XEQCTM'),
(14, 'Campaign Three', 'subtitle', '66325f419c0aa.jpg', '2024-05-01 09:26:57', 'djDVqyCvuo7CC6t6');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `clientId` int(11) NOT NULL,
  `clientName` varchar(255) NOT NULL CHECK (octet_length(`clientName`) <= 255),
  `clientEmail` varchar(255) NOT NULL CHECK (octet_length(`clientEmail`) <= 255),
  `whatsapp` varchar(255) NOT NULL CHECK (octet_length(`whatsapp`) <= 255),
  `clientMessage` varchar(255) NOT NULL CHECK (octet_length(`clientMessage`) <= 50000),
  `clientUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `clientIdentify` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`clientId`, `clientName`, `clientEmail`, `whatsapp`, `clientMessage`, `clientUpdated`, `clientIdentify`) VALUES
(1, ' Sarah Johnson', 'sarah.johnson@example.com', '+8801234567890', 'Hi there! I&#39;m interested in redesigning my living room. Could you please provide me with more information about your interior design services and how we can get started?', '2024-04-24 07:29:59', '32ZdcC6vGWpLPft4'),
(2, 'Ahmed Khan', 'ahmed.khan@example.com', '+8801987654321', 'Hello! I&#39;m looking to furnish my new apartment and I came across your online store. Can you share details about your furniture collection and delivery options?', '2024-04-24 07:30:31', '3zVRtfyBrvaVxYJX'),
(3, ' Emily Lee', 'emily.lee@example.com', '+8801765432109', ' &#34;Hi, I&#39;m planning a complete home renovation and I need some professional advice. Can we schedule a consultation to discuss ideas and estimates?&#34;', '2024-04-24 07:30:59', 'lUkxNBuw2O6HZaWO'),
(4, 'Rajesh Patel', ' rajesh.patel@example.com', '+8801122334455', 'Greetings! I&#39;m interested in purchasing some decorative items for my office space. Could you recommend some suitable options from your online store?', '2024-04-24 07:31:26', 'uA4IpldKAFocZaQK');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `faqId` int(11) NOT NULL,
  `faqTitle` varchar(255) NOT NULL CHECK (octet_length(`faqTitle`) <= 500),
  `faqDesc` varchar(255) NOT NULL CHECK (octet_length(`faqDesc`) <= 5000),
  `faqUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `faqIdentify` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`faqId`, `faqTitle`, `faqDesc`, `faqUpdated`, `faqIdentify`) VALUES
(11, 'FAQ: What is ucomfortbd&#39;s design style?', 'Answer: ucomfortbd specializes in modern and contemporary interior design styles. Our designs blend functionality with aesthetic appeal to create spaces that reflect our clients&#39; unique tastes and preferences.', '2024-04-24 13:27:03', 's7AhdmA8Y77suBBO'),
(12, 'FAQ: How does ucomfortbd handle online product sales and delivery in Bangladesh?', 'Answer: At ucomfortbd, we offer seamless online product sales and delivery services across Bangladesh. We partner with reliable logistics providers to ensure prompt and secure delivery of our products to our customers&#39; doorsteps.', '2024-04-24 07:27:20', '5Rusr9I5htUl0XaH'),
(13, 'FAQ: Can ucomfortbd customize interior design solutions to fit specific client needs?', 'Answer: Absolutely! At ucomfortbd, we understand that each client has unique requirements and preferences. Our experienced designers work closely with clients to create customized interior design solutions that cater to their individual needs, style prefe', '2024-04-24 07:27:36', '6UN0knVcBB2XUzS2'),
(14, 'FAQ: What types of products does ucomfortbd offer for sale online?', 'Answer: ucomfortbd offers a wide range of high-quality interior design products online, including furniture, home decor accessories, lighting fixtures, rugs, and more. Our curated collection features products that are both stylish and functional, sourced ', '2024-04-24 07:27:52', 'HFDYqBqYY4QrBiZV'),
(15, 'FAQ: How can clients collaborate with ucomfortbd for their interior design projects?', 'Answer: Collaborating with ucomfortbd for your interior design project is easy! Simply reach out to us through our website or contact us via phone or email to schedule a consultation. Our team will work closely with you to understand your vision, preferen', '2024-04-24 07:28:06', 'o4oDzJu9IifLOXKU'),
(16, 'FAQ: How can clients collaborate with ucomfortbd for their interior design projects?', 'Answer: Collaborating with ucomfortbd for your interior design project is easy! Simply reach out to us through our website or contact us via phone or email to schedule a consultation. Our team will work closely with you to understand your vision, preferen', '2024-04-27 10:37:37', 'wnM0DP9y50ePj9V6'),
(17, 'FAQ: How can clients collaborate with ucomfortbd for their interior design projects?', 'Answer: Collaborating with ucomfortbd for your interior design project is easy! Simply reach out to us through our website or contact us via phone or email to schedule a consultation. Our team will work closely with you to understand your vision, preferen', '2024-04-27 11:45:30', 'tyoXWjjwX8t89qEt'),
(18, 'FAQ: How can clients collaborate with ucomfortbd for their interior design projects?', 'Answer: Collaborating with ucomfortbd for your interior design project is easy! Simply reach out to us through our website or contact us via phone or email to schedule a consultation. Our team will work closely with you to understand your vision, preferen', '2024-04-27 11:45:34', 'BBNOdBh4ZA7CXl98'),
(19, 'FAQ: How can clients collaborate with ucomfortbd for their interior design projects?', 'Answer: Collaborating with ucomfortbd for your interior design project is easy! Simply reach out to us through our website or contact us via phone or email to schedule a consultation. Our team will work closely with you to understand your vision, preferen', '2024-04-27 11:45:38', 'COGl7OOQ80N3w7Nr'),
(20, 'FAQ: How does ucomfortbd handle online product sales and delivery in Bangladesh?', 'Answer: Collaborating with ucomfortbd for your interior design project is easy! Simply reach out to us through our website or contact us via phone or email to schedule a consultation. Our team will work closely with you to understand your vision, preferen', '2024-04-27 11:45:45', 'gVhSrr0TVqOemFdE'),
(21, 'FAQ: Can ucomfortbd customize interior design solutions to fit specific client needs?', 'Answer: Collaborating with ucomfortbd for your interior design project is easy! Simply reach out to us through our website or contact us via phone or email to schedule a consultation. Our team will work closely with you to understand your vision, preferen', '2024-04-27 11:45:52', 'bAVk0uhDasp7uKmd');

-- --------------------------------------------------------

--
-- Table structure for table `network`
--

CREATE TABLE `network` (
  `networkId` int(11) NOT NULL,
  `networkTitle` varchar(255) NOT NULL CHECK (octet_length(`networkTitle`) <= 255),
  `networkCountry` varchar(255) NOT NULL,
  `networkCity` varchar(255) NOT NULL CHECK (octet_length(`networkCity`) <= 255),
  `networkStore` varchar(255) NOT NULL CHECK (octet_length(`networkStore`) <= 255),
  `networkPhone` varchar(255) NOT NULL CHECK (octet_length(`networkPhone`) <= 255),
  `networkAddress` varchar(255) NOT NULL CHECK (octet_length(`networkAddress`) <= 500),
  `networkImage` varchar(255) NOT NULL CHECK (octet_length(`networkImage`) <= 255),
  `networkUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `networkIdentify` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `network`
--

INSERT INTO `network` (`networkId`, `networkTitle`, `networkCountry`, `networkCity`, `networkStore`, `networkPhone`, `networkAddress`, `networkImage`, `networkUpdated`, `networkIdentify`) VALUES
(1, 'EMPOLOBATH BD', 'Bangladesh', 'Dhaka', 'Store', '01521257123', 'Kallanpur Hitpara, Puran Varenga, Aminpur, Bera, Pabna.', '663217cf8cc34.jpg', '2024-05-01 10:22:07', 'WBTfAEdQ3wdSR4WO');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL CHECK (octet_length(`productName`) <= 255),
  `productDesc` varchar(255) NOT NULL CHECK (octet_length(`productDesc`) <= 5000),
  `productPrice` varchar(255) NOT NULL CHECK (octet_length(`productPrice`) <= 255),
  `productImage` varchar(255) NOT NULL CHECK (octet_length(`productImage`) <= 255),
  `productTags` varchar(255) NOT NULL CHECK (octet_length(`productTags`) <= 255),
  `productUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `productIdentify` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `productName`, `productDesc`, `productPrice`, `productImage`, `productTags`, `productUpdated`, `productIdentify`) VALUES
(4, '20 1101 SINGLE-LEVER BATHROOM BASIN MIXER', 'The 20 Series Single-lever Bathroom Basin Mixer tap doesn’t disappoint. Including a Neoperl aerator to direct water spray, and Sedal ceramic disc technology to prevent leaks and dripping, this tap truly does have it all. Practicality aside, the aesthetic ', '200', '663222c938172.jpg', 'Hot Product', '2024-05-01 05:08:57', '4DsT226sFtUwU5F3'),
(5, 'SINGLE-LEVER HIGH BASIN MIXER', 'Single-lever high basin mixer – 23 tapware series is made with the finest quality and the modern industry-leading technologies. The 23 collection offers a wide selection of tapware to match the latest bathroom design as well as the customer’s styling pref', '200', '66322618d949a.jpg', 'Hot Product', '2024-05-01 05:23:04', 'UWCJ6FVH7Hm90l1b'),
(6, 'WALL-MOUNTED SHOWER MIXER', 'Wall-mounted shower mixer – 23 tapware series is made with the finest quality and the modern industry-leading technologies. The 23 collection offers a wide selection of tapware to match the latest bathroom design as well as the customer’s styling preferen', '200', '66322655abb97.jpg', 'Hot Product', '2024-05-01 05:24:05', 'BuGlERYIOZe5El18'),
(7, 'WALL-MOUNTED SHOWER MIXER', 'yes', '200', '66325b3d95a67.jpg', 'Hot Product', '2024-05-01 09:09:49', 'BbyVPIsnfp3AZzL7'),
(8, '20 1101 SINGLE-LEVER BATHROOM BASIN MIXER', 'kk', '200', '66325b4ba8064.jpg', 'Hot Product', '2024-05-01 09:10:03', 'a5BF7D2YtpGJf4Z8');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `projectId` int(11) NOT NULL,
  `projectFlagCode` varchar(255) NOT NULL CHECK (octet_length(`projectFlagCode`) <= 255),
  `projectImage` varchar(255) NOT NULL CHECK (octet_length(`projectImage`) <= 255),
  `projectCountryName` varchar(255) NOT NULL CHECK (octet_length(`projectCountryName`) <= 255),
  `projectUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `projectIdentify` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`projectId`, `projectFlagCode`, `projectImage`, `projectCountryName`, `projectUpdated`, `projectIdentify`) VALUES
(5, '50', '6631dfb08b294.png', 'Bangladesh', '2024-05-01 10:41:25', 'BJ3WosvikkNfXnWm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userAltName` varchar(255) DEFAULT NULL,
  `userName` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userFirstName` varchar(255) DEFAULT NULL,
  `userLastName` varchar(255) DEFAULT NULL,
  `userPassword` varchar(255) NOT NULL,
  `userJoined` date DEFAULT NULL,
  `userLastLogged` datetime DEFAULT NULL,
  `userActivation` varchar(64) DEFAULT NULL,
  `userPassToken` varchar(64) DEFAULT NULL,
  `userType` enum('admin','user','moderator') DEFAULT NULL,
  `userAvatar` varchar(255) DEFAULT NULL,
  `userCurrency` varchar(255) DEFAULT NULL,
  `userOrigin` varchar(255) DEFAULT NULL,
  `userLanguage` varchar(255) DEFAULT NULL,
  `userMobile` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userAltName`, `userName`, `userEmail`, `userFirstName`, `userLastName`, `userPassword`, `userJoined`, `userLastLogged`, `userActivation`, `userPassToken`, `userType`, `userAvatar`, `userCurrency`, `userOrigin`, `userLanguage`, `userMobile`) VALUES
(39, 'vi9zynxQxas2qkOz', '', 'admin@ucomfortbd.com', 'Jashim', 'Uddin', '@dmin1234567', NULL, NULL, '8fbc73a218a39bec6ec6a3da407cc447', NULL, 'admin', NULL, NULL, NULL, NULL, NULL),
(40, 'iuLPkCJHsUoLYhPM', '', 'mdahadaminul@gmail.com', NULL, NULL, 'mdahadaminul@gmail.com', NULL, NULL, '47081eaf5e51b75b8270b257c7f0d9c4', NULL, 'user', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blogId`);

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`campaignId`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`clientId`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`faqId`);

--
-- Indexes for table `network`
--
ALTER TABLE `network`
  ADD PRIMARY KEY (`networkId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`projectId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `idx_userAltName` (`userAltName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blogId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `campaignId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `clientId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `faqId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `network`
--
ALTER TABLE `network`
  MODIFY `networkId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `projectId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
