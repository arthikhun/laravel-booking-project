-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2024 at 08:10 PM
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
-- Database: `booking_table`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `cus_name` varchar(50) DEFAULT NULL,
  `cus_phone` varchar(20) DEFAULT NULL,
  `cus_amt` int(11) DEFAULT NULL,
  `checkin_date` datetime DEFAULT NULL,
  `booking_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `cus_name`, `cus_phone`, `cus_amt`, `checkin_date`, `booking_date`) VALUES
(1, 'นพพร', '0911915555', 3, '2024-02-20 05:30:00', '2024-02-15 18:02:52'),
(2, 'art', '0882345555', 20, '2024-02-16 12:03:00', '2024-02-15 18:30:08');

-- --------------------------------------------------------

--
-- Table structure for table `booking_map_table`
--

CREATE TABLE `booking_map_table` (
  `booking_id` int(11) NOT NULL,
  `table_type_id` int(11) NOT NULL,
  `table_amt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `booking_map_table`
--

INSERT INTO `booking_map_table` (`booking_id`, `table_type_id`, `table_amt`) VALUES
(1, 2, 2),
(2, 1, 1),
(2, 2, 3),
(2, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `detail` varchar(500) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `path_img` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `type`, `detail`, `price`, `path_img`) VALUES
(1, 'เนื้อวัว', 1, 'เนื้อวัวออสเตรเลียสไลด์', 50, 'images/buffet/beef.jpg'),
(2, 'ชุดเนื้อ', 1, 'ชุดรวมชิ้นส่วนเนื้อ เนื้อสันนอก เนื้อติดมัน สไบนาง', 120, 'images/buffet/beef-set.jpg'),
(3, 'ขนมจีบ', 1, 'ขนมจีบหมูผสมไก่นึ่งสดใหม่ 8 ลูก/จาน', 60, 'images/buffet/chinese-steamed-dumpling.jpg'),
(4, 'ไข่ไก่สด', 1, 'ไข่ไก่สดจากแม่ไก่อารมณ์ดี', 10, 'images/buffet/eggs.jpg'),
(5, 'ลูกชิ้นปลา', 1, 'ลูกชิ้นปลาแท้จากเยาวราช 100% เสิร์ฟที่ละ 5 ลูก', 30, 'images/buffet/fish-ball.jpg'),
(6, 'ผัดกระเพราหมูสับ', 4, 'ข้าวผัดกระเพราะหมูสับเสิร์ฟพร้อมไข่ดาว', 65, 'images/food/basil-pork-with-rice.jpg'),
(7, 'หมูสไลด์', 1, 'หมูสไลด์ สดใหม่ พร้อมทาน 1 จาน', 50, 'images/buffet/fresh-pork.jpg'),
(8, 'หมูนุ่ม', 1, 'หมูนุ่มหมัก', 30, 'images/buffet/ground-pork.jpg'),
(9, 'บะหมี่หยก', 1, 'บะหมี่หยก เส้นนุ่มอร่อย\r\n', 30, 'images/buffet/jade-noodle.jpg'),
(10, 'หมูสไลด์ราดซอส ', 1, 'หมูสไลด์ราดซอส สูตรทางร้าน ', 50, 'images/buffet/marinated-pork.jpg'),
(11, 'หมูคุโรบูตะ', 1, 'หมูคุโรบุตะ นุ่มอร่อย', 60, 'images/buffet/pork-loin.jpg'),
(12, 'กุ้งสด', 1, 'กุ้งสด 1 ถาด จำนวน 5 ตัว', 60, 'images/buffet/shrimp.jpg'),
(13, 'ปลาหมึก', 1, 'เซ็ทปลาหมึกกล้วย 4 ตัว ', 80, 'images/buffet/squid.jpg'),
(14, 'เซ็ทผัก', 1, 'เซ็ทผักพร้อมทาน', 30, 'images/buffet/vegetable-set.jpg'),
(15, 'เตาหมูกระทะ ', 1, 'เตาหมูกระทะ + เซ็ทหมู + ผัก แถมน้ำซุปฟรี จำนวน 1 ชุด', 159, 'images/buffet/hot-pan.jpg'),
(16, 'หม้อชาบู', 1, 'สามารถเลือกน้ำซุป เช่น น้ำดำ + น้ำใส + ซุปหม่าล่าได้', 159, 'images/buffet/mala-soup.jpg'),
(17, 'ไอศกรีม เบอร์รี่', 2, 'ไอศกรีมเบอร์รี่ หวานอร่อย', 30, 'images/dessert/berry-ice-cream.jpg'),
(18, 'เค้กช็อคโกแล็ต', 2, 'เค้กช็อคโกแล็ต อบใหม่ หวานหอม', 35, 'images/dessert/chocolate-cake.jpg'),
(19, 'ไอศกรีมมะพร้าว', 2, 'รสชาติอร่อย พร้อมทาน', 35, 'images/dessert/coconut-ice-cream.jpg'),
(20, 'ไอศกรีมโอริโอ้-กาแฟ', 2, 'รสชาติ อร่อยลงตัว', 35, 'images/dessert/cookies-ice-cream.jpg'),
(21, 'ไอศกรีมวนิลาราดถั่วแดง', 2, 'หวานอร่อย กลมกล่อม', 35, 'images/dessert/green-tea-ice-snowflake.jpg'),
(22, 'บิงซูสตอเบอร์รี่', 2, 'บิงซูที่แสนอร่อย พร้อมสตอเบอร์รี่น่าทาน', 80, 'images/dessert/strawberry-bingsu.jpg'),
(23, 'ไอศกรีมวนิลา', 2, 'รสชาติหวานหอม กลิ่นวนิลา', 35, 'images/dessert/vanila-ice-cream.jpg'),
(24, 'บิงซูแตงโม', 2, 'เสิร์ฟพร้อมกับน้ำเชื่อมแสนอร่อย', 90, 'images/dessert/watermelon-bingsu.jpg'),
(25, 'โค้ก', 3, '1 แก้ว', 35, 'images/drink/ice-cola.jpg'),
(26, 'ชามะนาว', 3, '1 แก้ว', 35, 'images/drink/ice-cola.jpg'),
(27, 'นมสดชาเขียว', 3, '1 แก้ว', 35, 'images/drink/milk-green-tea.jpg'),
(28, 'น้ำเปล่า', 3, '1 แก้ว', 20, '/images/drink/water.jpg'),
(29, 'น้ำแตงโมปั่น', 3, '1 แก้ว', 40, '/images/drink/watermelon-smoothie.jpg'),
(30, 'เฟรนช์ฟรายส์', 4, '1 จาน', 50, 'images/food/french-fries.jpg'),
(31, 'ไก่หมักซอสเกาหลี', 4, 'จำนวน 4 ชิ้น', 65, 'images/food/korean-chicken-fried.jpg'),
(32, 'กุ่งแช่น้ำปลา', 4, 'จำนวน 8 ตัว', 100, 'images/food/shrimp-fish-sauce.jpg'),
(33, 'ข้าวผัดกุ้ง', 4, '1 จานทานได้ 2-3 ท่าน', 100, 'images/food/shrimp-fried-rice.jpg'),
(34, 'หมึกนึ่งมะนาว', 4, 'หมึกนึ่งมะนาวไซส์ใหญ่ 1 ตัว', 80, 'images/food/spicy-lemon-squid.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `name`) VALUES
(1, 'buffet'),
(2, 'dessert'),
(3, 'drink'),
(4, 'food');

-- --------------------------------------------------------

--
-- Table structure for table `table_type`
--

CREATE TABLE `table_type` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `max_person` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `table_type`
--

INSERT INTO `table_type` (`id`, `name`, `max_person`) VALUES
(1, 'โต๊ะ bar', 1),
(2, 'โต๊ะหนึ่งเตา', 4),
(3, 'โต๊ะสองเตา', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_map_table`
--
ALTER TABLE `booking_map_table`
  ADD PRIMARY KEY (`booking_id`,`table_type_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_type`
--
ALTER TABLE `table_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table_type`
--
ALTER TABLE `table_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
