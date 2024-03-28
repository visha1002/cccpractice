-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2024 at 01:45 PM
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
-- Database: `tables`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `show_on` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `title`, `banner_image`, `status`, `show_on`) VALUES
(1, 'fashion', 'fashion.jpg', 0, 'page/index/index'),
(2, 'creme', 'cream.jpg', 1, 'page/index/index'),
(3, 'sales', 'sales.jpg', 0, 'page/index/index'),
(4, 'shopping', 'shop.jpg', 0, 'page/index/index'),
(5, 'new banner', 'banner1.png', 0, 'page/index/index'),
(6, 'stylish banner', '1200.jpg', 0, 'page/index/index'),
(7, 'boy banner', 'boy banner.jpg', 0, 'page/index/index');

-- --------------------------------------------------------

--
-- Table structure for table `catalog_category`
--

CREATE TABLE `catalog_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `catalog_category`
--

INSERT INTO `catalog_category` (`category_id`, `category_name`, `status`) VALUES
(1, 'Electronics', 1),
(2, 'Clothing', 0),
(3, 'Stationary', 1),
(4, 'Accessories', 1),
(5, 'Drinks', 1),
(6, 'Lighting', 0),
(7, 'Mattresses', 1),
(8, 'footwear', 0),
(9, 'Furniture', 0),
(11, 'wooden', 0);

-- --------------------------------------------------------

--
-- Table structure for table `catalog_product`
--

CREATE TABLE `catalog_product` (
  `product_id` int(11) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_link` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `mfr_cost` decimal(12,2) NOT NULL,
  `shipping_cost` decimal(12,2) NOT NULL,
  `total_cost` decimal(12,2) NOT NULL,
  `margin_percentage` int(11) NOT NULL,
  `min_price` decimal(12,2) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `inventory` int(11) NOT NULL DEFAULT 50
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `catalog_product`
--

INSERT INTO `catalog_product` (`product_id`, `sku`, `name`, `color`, `size`, `description`, `image_link`, `link`, `category_id`, `price`, `mfr_cost`, `shipping_cost`, `total_cost`, `margin_percentage`, `min_price`, `status`, `created_at`, `updated_at`, `inventory`) VALUES
(1, 'TG898u9', 'Laptop', '#000000', '15 inches', 'Black laptop with 15 inched and morden technology from dell', 'laptopdell.jpg', 'dell.com', 1, 300000.00, 50000.00, 2000.00, 70000.00, 15, 250000.00, 0, '2015-01-01 00:00:00', '2024-03-22 08:02:12', 49),
(2, 'TY897987', 'Jeans', '#000000', '28', 'Blue jeans for man with 28 size and comfortable', 'jeans.png', 'flipcart.com', 2, 1000.00, 200.00, 50.00, 250.00, 7, 600.00, 1, '2015-01-01 00:00:00', '2024-03-08 06:14:40', 5),
(3, 'GYG8789', 'Pen', '#000000', 'Small', 'Red pen with minimum price', 'inkpen.jpg', 'rollpen.com', 3, 10.00, 2.00, 1.00, 3.00, 3, 8.00, 0, '2015-01-01 00:00:00', '2024-03-08 06:20:40', 50),
(13, 'CF67693', 'Book', '#000000', 'Normal', 'Book with 150 pages', 'books.jpg', 'classmate.com', 3, 45.00, 10.00, 5.00, 15.00, 6, 8.00, 0, '2015-01-01 00:00:00', '2024-03-08 06:01:32', 50),
(16, 'dfefefca', 'airpods', '#ffffff', 'Normal', 'sdgsrbwrg', 'airpodsPro.jpg', 'dell.com', 1, 4500.00, 120.00, 50.00, 170.00, 10, 2000.00, 1, '2015-01-01 00:00:00', '2024-03-08 06:03:32', 50),
(17, 'VTy6534', 'Bag', '#9b8c8c', 'Small', 'djbkdvbdsvubsdkuvdukv', 'bagblue.jpg', 'amazon.com', 4, 400.00, 200.00, 50.00, 250.00, 10, 350.00, 0, '2015-01-01 00:00:00', '2024-03-08 06:23:19', 50),
(18, 'GT6465', 'Drink', '#f01414', '500ml', 'srgrhbdthrgnsfgs sejkfhuirfuseb', 'drinks.jpg', 'xyz.com.in', 5, 700.00, 350.00, 70.00, 420.00, 6, 600.00, 1, '2015-01-01 00:00:00', '2024-03-08 06:25:11', 50),
(19, 'GT654276', 'Night Lemp', '#f6eaea', 'Normal', 'fsgsgjsi sjfushfus jkdhfusehfusdj uhsduifh', 'lemp.jpg', 'flipcart.com', 6, 999.00, 500.00, 100.00, 600.00, 9, 950.00, 0, '2015-01-01 00:00:00', '2024-03-08 06:26:09', 50),
(20, 'IN7587t', 'Lightstick', '#0ed879', '10cm', 'sdd sjhshf sfuigefbdz uhdzugvshv sdkuhudshv', 'sticks.jpg', 'amazon.com', 6, 600.00, 200.00, 100.00, 300.00, 5, 400.00, 1, '2015-01-01 00:00:00', '2024-03-08 06:27:09', 50),
(21, 'CF67693', 'cusion', '#000000', 'Normal', 'sgsf sjfhskjf jkdfvsv', 'custionWhite.jpg', 'flipcart.com', 7, 255.00, 100.00, 20.00, 120.00, 4, 200.00, 1, '2015-01-01 00:00:00', '2024-03-08 06:28:39', 50),
(22, 'YKI9732', 'IPhone', '#5ac8ed', 'Normal', 'Iphone 15 with new color and cool technology', 'phone.jpg', 'tyghbsd.oco', 1, 1500000.00, 50000.00, 5000.00, 55000.00, 10, 100000.00, 1, '2015-01-01 00:00:00', '2024-03-08 05:39:37', 50),
(23, 'CSR72918', 'Heels', '#000000', '8', 'Black high heels for women size 8-9-10', 'heel.jpg', 'shuhf.com', 8, 1000.00, 500.00, 200.00, 700.00, 6, 900.00, 0, '2015-01-01 00:00:00', '2024-03-08 06:30:19', 50),
(24, 'BT6465', 'Sofa', '#eaf5cc', 'Large', 'Newly arrieved sofa set with comfort and great design', 'sofa.jpg', 'amazon.com', 9, 75000.00, 40000.00, 5000.00, 45000.00, 8, 60000.00, 1, '2015-01-01 00:00:00', '2024-03-15 06:18:36', 50),
(25, 'VT54656', 'Goggles', '#000000', 'Normal', 'Black google with comfort and UV protected', 'goggles.png', 'flipcart.com', 4, 1700.00, 500.00, 100.00, 600.00, 10, 1000.00, 0, '2015-01-01 00:00:00', '2024-03-15 06:27:56', 50),
(26, 'MO8668', 'Perfume', '#4760c2', '180 ml', 'Oscar perfume - fresh fregrence', 'perfume.jpg', 'Oscar.com', 4, 4000.00, 2000.00, 500.00, 2500.00, 9, 3500.00, 1, '2015-01-01 00:00:00', '2024-03-15 06:30:53', 50);

-- --------------------------------------------------------

--
-- Table structure for table `ccc_cource_enrollment`
--

CREATE TABLE `ccc_cource_enrollment` (
  `en_id` int(11) NOT NULL,
  `session_id` varchar(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `selected_cource` varchar(255) NOT NULL,
  `term` varchar(255) NOT NULL,
  `total_charge` int(11) NOT NULL,
  `created_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ccc_cource_enrollment`
--

INSERT INTO `ccc_cource_enrollment` (`en_id`, `session_id`, `student_name`, `selected_cource`, `term`, `total_charge`, `created_at`) VALUES
(1, 'b3iri83o7sf', 'rohit', '1,6', '18', 0, '2024-03-07'),
(2, 'b3iri83o7sf', 'visha', '2,5,6', '21', 0, '2024-03-07'),
(4, 'b3iri83o7sf', 'visha', '3,5,6', '15', 0, '2024-03-07'),
(5, 'b3iri83o7sf', 'sacaa', '3,5', '18', 0, '2024-03-07'),
(6, 'b3iri83o7sf', 'sacaa', '4', '21', 0, '2024-03-07'),
(7, '1ju0ve8vvcb', 'sacaaadfcda', '4,5', '24', 0, '2024-03-07'),
(9, 'b3iri83o7sf', 'sacaaadfcda', '3', '3', 0, '2024-03-07'),
(10, 'b3iri83o7sf', 'sacaaadfcda', '3', '3', 0, '2024-03-07'),
(11, 'b3iri83o7sf', 'calia', '3,6', '15', 0, '2024-03-07'),
(12, 'b3iri83o7sf', 'calia', '3,6', '15', 0, '2024-03-07'),
(13, 'b3iri83o7sf', 'ihhgch', '1,4,5', '15', 0, '2024-03-07'),
(14, 'b3iri83o7sf', 'ihhgch', '2,3', '3', 0, '2024-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `ccc_cource_rate`
--

CREATE TABLE `ccc_cource_rate` (
  `id` int(11) NOT NULL,
  `cource_name` varchar(255) NOT NULL,
  `charge` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ccc_cource_rate`
--

INSERT INTO `ccc_cource_rate` (`id`, `cource_name`, `charge`) VALUES
(1, 'PHP', '500'),
(2, 'Javascript', '750'),
(4, 'AJAX', '690');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `message_id` int(11) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`message_id`, `email_id`, `message`) VALUES
(1, 'roopal23@gmail.com', 'This website is so cool. good interface.'),
(2, 'abc@gmail.com', 'dcvadvadvadv');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `billing_address` varchar(255) NOT NULL,
  `billing_city` varchar(255) NOT NULL,
  `billing_region` varchar(50) NOT NULL,
  `billing_country` varchar(50) NOT NULL,
  `billing_phone` varchar(255) NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `shipping_city` varchar(255) NOT NULL,
  `shipping_region` varchar(50) NOT NULL,
  `shipping_country` varchar(50) NOT NULL,
  `shipping_phone` varchar(255) NOT NULL,
  `default` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_email`, `customer_password`, `first_name`, `last_name`, `billing_address`, `billing_city`, `billing_region`, `billing_country`, `billing_phone`, `shipping_address`, `shipping_city`, `shipping_region`, `shipping_country`, `shipping_phone`, `default`) VALUES
(1, 'abc@gmail.com', '123456', 'Ronit', 'sharma', 'hgvjfffgxrstjykbkjbj', 'Surat', 'gujarat', 'india', '7990328923', 'tftddsfyguigiguyvcgcv', 'Vadodara', 'Gujarat', 'india', '7990328923', 5),
(4, 'vis@gmail.com', 'aca', 'vishal', 'patel', 'avadv', 'advadv', 'goa', 'india', '5345334', 'advadvc', 'eedvadvade', 'goa', 'india', '453653745', 1),
(5, 'ccc@cybercom.in', 'ccc', 'nitya', 'bohra', '104, A Wing, 104 Kailash Tower, A Wing, Inside S.t.c Colony, Andheri (east)', 'Mumbai', 'maharastra', 'india', '9620014451', ' 1st Floor, B-11, Paragan Centre, P B Marg, Worli', 'Mumbai', 'maharastra', 'india', '8520012503', 0),
(7, 'rina18@gmail.com', 'rina', 'Rina', 'Pathak', 'Nr.kansara Pole, M.g.road, Nr.kansara Pole, M.g.road', 'Vadodara', 'Gujarat', 'India', '9087676789', 'Nr.kansara Pole, M.g.road, Nr.kansara Pole, M.g.road', 'Vadodara', 'Gujarat', 'India', '9087676789', 7);

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `address_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `region` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `postcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer_address`
--

INSERT INTO `customer_address` (`address_id`, `customer_id`, `address`, `city`, `region`, `country`, `phone_no`, `postcode`) VALUES
(1, 1, '23, vertical Street, olive Road', 'Vadodara', 'Gujarat', 'india', '9864543440', '362501'),
(2, 1, '45, stand colony, V.R road', 'Mumbai', 'maharastra', 'india', '8765533426', '632510'),
(5, 1, '56, Royal apartment, C.G road', 'Chennai', 'tamil nadu', 'india', '9853301450', '325601'),
(6, 4, 'B-901, satyam luxurius', 'surat', 'gujarat', 'india', '9087676799', '302660'),
(7, 5, '104, A Wing, 104 Kailash Tower, A Wing, Inside S.t.c Colony, Andheri (east)', 'Mumbai', 'maharastra', 'india', '9620014451', '345655');

-- --------------------------------------------------------

--
-- Table structure for table `mediator`
--

CREATE TABLE `mediator` (
  `row_id` int(11) NOT NULL,
  `json_data` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `mediator`
--

INSERT INTO `mediator` (`row_id`, `json_data`, `status`, `type`) VALUES
(1, '{\"sku\":\"12\",\"name\":\"Black Tshirt\",\"color\":\"black\",\"size\":\"34\",\"description\":\"black Tshirt\",\"image_link\":\"Tshirt1.webp\",\"link\":\"ewddf\",\"category_id\":\"2\",\"price\":\"400\",\"mfr_cost\":\"320\",\"shipping_cost\":\"40\",\"total_cost\":\"360\",\"margin_percentage\":\"5\",\"min_price\":\"300\",\"inventory\":\"50\"}', 0, 'product'),
(2, '{\"sku\":\"14\",\"name\":\"v-neck Tshirt\",\"color\":\"maroon\",\"size\":\"34\",\"description\":\"maroon Tshirt\",\"image_link\":\"Tshirt2.webp\",\"link\":\"ewdhuf\",\"category_id\":\"2\",\"price\":\"500\",\"mfr_cost\":\"420\",\"shipping_cost\":\"40\",\"total_cost\":\"360\",\"margin_percentage\":\"5\",\"min_price\":\"300\",\"inventory\":\"50\"}', 0, 'product');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `order_id` int(11) NOT NULL,
  `order_number` varchar(255) NOT NULL,
  `tax_percent` int(11) NOT NULL,
  `grand_total` decimal(12,2) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL DEFAULT 0,
  `status` varchar(50) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`order_id`, `order_number`, `tax_percent`, `grand_total`, `payment_id`, `shipping_id`, `customer_id`, `status`) VALUES
(1, '931577', 0, 10.00, 1, 1, 4, 'refunded'),
(2, '600061', 0, 1200.00, 2, 2, 1, 'refunded'),
(3, '641955', 0, 300000.00, 3, 3, 1, 'pending'),
(4, '467628', 0, 4510.00, 4, 4, 1, 'completed'),
(5, '960681', 0, 5600.00, 5, 5, 5, 'refunded'),
(6, 'ORD_1711042918_81902', 0, 1800.00, 6, 6, 5, 'pending'),
(7, 'ORD_1711090932_63440', 0, 300000.00, 7, 7, 5, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_customer`
--

CREATE TABLE `sales_order_customer` (
  `order_customer_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `billing_address` varchar(255) NOT NULL,
  `billing_city` varchar(255) NOT NULL,
  `billing_region` varchar(50) NOT NULL,
  `billing_country` varchar(50) NOT NULL,
  `billing_phone` varchar(255) NOT NULL,
  `billing_postcode` varchar(10) NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `shipping_city` varchar(255) NOT NULL,
  `shipping_region` varchar(50) NOT NULL,
  `shipping_country` varchar(50) NOT NULL,
  `shipping_phone` varchar(255) NOT NULL,
  `shipping_postcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sales_order_customer`
--

INSERT INTO `sales_order_customer` (`order_customer_id`, `order_id`, `customer_id`, `email`, `billing_address`, `billing_city`, `billing_region`, `billing_country`, `billing_phone`, `billing_postcode`, `shipping_address`, `shipping_city`, `shipping_region`, `shipping_country`, `shipping_phone`, `shipping_postcode`) VALUES
(1, 1, 4, 'vis@gmail.com', 'B-901, satyam luxurius', 'surat', 'gujarat', 'india', '9087676799', '302660', 'B-901, satyam luxurius', 'surat', 'gujarat', 'India', '9087676799', '302660'),
(2, 2, 1, 'abc@gmail.com', '23, vertical Street, olive Road', 'Vadodara', 'Gujarat', 'india', '9864543440', '362501', '23, vertical Street, olive Road', 'Vadodara', 'gujarat', 'india', '9864543440', '362501'),
(3, 3, 1, 'abc@gmail.com', '45, stand colony, V.R road', 'Mumbai', 'Maharastra', 'india', '8765533426', '632510', '45, stand colony, V.R road', 'Mumbai', 'maharastra', 'india', '8765533426', '632510'),
(4, 4, 1, 'abc@gmail.com', '23, vertical Street, olive Road', 'Vadodara', 'Gujarat', 'india', '9864543440', '362501', '23, vertical Street, olive Road', 'Vadodara', 'gujarat', 'india', '9864543440', '362501'),
(5, 5, 5, 'ccc@cybercom.in', '104, A Wing, 104 Kailash Tower, A Wing, Inside S.t.c Colony, Andheri (east)', 'Mumbai', 'Maharastra', 'india', '9620014451', '345655', '104, A Wing, 104 Kailash Tower, A Wing, Inside S.t.c Colony, Andheri (east)', 'Mumbai', 'maharastra', 'india', '9620014451', '345655'),
(6, 6, 5, 'ccc@cybercom.in', '104, A Wing, 104 Kailash Tower, A Wing, Inside S.t.c Colony, Andheri (east)', 'Mumbai', 'Maharastra', 'india', '9620014451', '345655', '104, A Wing, 104 Kailash Tower, A Wing, Inside S.t.c Colony, Andheri (east)', 'Mumbai', 'maharastra', 'india', '9620014451', '345655'),
(7, 7, 5, 'ccc@cybercom.in', '104, A Wing, 104 Kailash Tower, A Wing, Inside S.t.c Colony, Andheri (east)', 'Mumbai', 'Maharastra', 'india', '9620014451', '345655', '104, A Wing, 104 Kailash Tower, A Wing, Inside S.t.c Colony, Andheri (east)', 'Mumbai', 'maharastra', 'india', '9620014451', '345655');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_item`
--

CREATE TABLE `sales_order_item` (
  `item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `row_total` decimal(12,2) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sales_order_item`
--

INSERT INTO `sales_order_item` (`item_id`, `order_id`, `product_id`, `price`, `qty`, `row_total`, `product_name`, `product_color`) VALUES
(1, 1, 3, 10.00, 1, 10.00, 'Pen', '#000000'),
(2, 2, 17, 400.00, 3, 1200.00, 'Bag', '#9b8c8c'),
(3, 3, 1, 300000.00, 1, 300000.00, 'Laptop', '#000000'),
(4, 4, 16, 4500.00, 1, 4500.00, 'airpods', '#ffffff'),
(5, 4, 3, 10.00, 1, 10.00, 'Pen', '#000000'),
(6, 5, 18, 700.00, 8, 5600.00, 'Drink', '#f01414'),
(7, 6, 20, 600.00, 3, 1800.00, 'Lightstick', '#0ed879'),
(8, 7, 1, 300000.00, 1, 300000.00, 'Laptop', '#000000');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_payment_method`
--

CREATE TABLE `sales_order_payment_method` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `card_number` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sales_order_payment_method`
--

INSERT INTO `sales_order_payment_method` (`payment_id`, `order_id`, `payment_method`, `card_number`) VALUES
(1, 1, 'p', ''),
(2, 2, 'cod', ''),
(3, 3, 'cc', '63250148879'),
(4, 4, 'p', ''),
(5, 5, 'cod', ''),
(6, 6, 'p', ''),
(7, 7, 'cod', '');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_shipping_method`
--

CREATE TABLE `sales_order_shipping_method` (
  `shipping_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `shipping_method` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sales_order_shipping_method`
--

INSERT INTO `sales_order_shipping_method` (`shipping_id`, `order_id`, `shipping_method`) VALUES
(1, 1, 'f'),
(2, 2, 'e'),
(3, 3, 'e'),
(4, 4, 'e'),
(5, 5, 'e'),
(6, 6, 'e'),
(7, 7, 'e');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_status_history`
--

CREATE TABLE `sales_order_status_history` (
  `history_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `from_status` varchar(50) NOT NULL,
  `to_status` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `action_by` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sales_order_status_history`
--

INSERT INTO `sales_order_status_history` (`history_id`, `order_id`, `from_status`, `to_status`, `date`, `action_by`) VALUES
(1, 1, 'shipped', 'completed', '2024-03-20 11:02:19', 'admin'),
(2, 2, 'cancelled', 'refunded', '2024-03-20 11:03:39', 'admin'),
(3, 2, 'refunded', 'can-Request', '2024-03-20 16:36:22', 'admin'),
(4, 2, 'can-Reques', 'can-Request', '2024-03-20 16:36:28', 'admin'),
(5, 1, 'completed', 'can-Request', '2024-03-20 17:54:16', 'admin'),
(6, 2, 'can-Reques', 'in-process', '2024-03-20 18:41:48', 'admin'),
(7, 1, 'can-Reques', 'can-Request', '2024-03-20 18:42:42', 'admin'),
(8, 1, 'cancelled', 'can-Request', '2024-03-21 18:30:35', 'admin'),
(9, 4, 'pending', 'can-Request', '2024-03-21 21:53:06', 'admin'),
(10, 1, 'cancelled', 'refunded', '2024-03-21 21:55:29', 'admin'),
(11, 3, 'cancelled', 'pending', '2024-03-21 21:58:14', 'admin'),
(12, 4, 'cancelled', 'in-process', '2024-03-21 21:58:18', 'admin'),
(13, 2, 'in-transit', 'can-Request', '2024-03-21 22:05:36', 'admin'),
(14, 4, 'cancelled', 'shipped', '2024-03-21 22:37:33', 'admin'),
(15, 4, 'shipped', 'in-process', '2024-03-21 22:37:41', 'admin'),
(16, 4, 'in-process', 'can-Request', '2024-03-21 22:37:47', 'admin'),
(17, 4, 'can-Request', 'cancelled', '2024-03-21 22:37:53', 'admin'),
(18, 4, 'cancelled', 'in-transit', '2024-03-21 22:37:59', 'admin'),
(19, 4, 'in-transit', 'refunded', '2024-03-21 22:38:07', 'admin'),
(20, 4, 'refunded', 'completed', '2024-03-21 22:38:14', 'admin'),
(21, 5, 'pending', 'refunded', '2024-03-21 23:45:19', 'admin'),
(22, 2, 'cancelled', 'in-transit', '2024-03-26 16:53:04', 'admin'),
(23, 2, 'in-transit', 'refunded', '2024-03-26 16:53:18', 'admin'),
(24, 3, 'pending', 'in-process', '2024-03-26 16:53:37', 'admin'),
(25, 3, 'in-process', 'can-Request', '2024-03-26 16:53:47', 'admin'),
(26, 3, 'can-Request', 'in-process', '2024-03-26 16:53:54', 'admin'),
(27, 3, 'can-Request', 'pending', '2024-03-26 16:54:18', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `sales_quote`
--

CREATE TABLE `sales_quote` (
  `quote_id` int(11) NOT NULL,
  `tax_percent` int(11) NOT NULL,
  `grand_total` decimal(12,2) NOT NULL,
  `order_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sales_quote`
--

INSERT INTO `sales_quote` (`quote_id`, `tax_percent`, `grand_total`, `order_id`, `shipping_id`, `payment_id`, `customer_id`) VALUES
(1, 0, 10.00, 1, 1, 1, 4),
(2, 0, 1200.00, 2, 2, 2, 1),
(3, 0, 300000.00, 3, 3, 3, 1),
(4, 0, 4510.00, 4, 4, 4, 1),
(7, 0, 5600.00, 5, 5, 5, 5),
(8, 0, 1800.00, 6, 6, 6, 5),
(9, 0, 300000.00, 7, 7, 7, 5),
(41, 0, 0.00, 0, 0, 0, 1),
(42, 0, 0.00, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales_quote_customer`
--

CREATE TABLE `sales_quote_customer` (
  `quote_customer_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `billing_address` varchar(255) NOT NULL,
  `billing_city` varchar(255) NOT NULL,
  `billing_region` varchar(50) NOT NULL,
  `billing_country` varchar(50) NOT NULL,
  `billing_phone` varchar(255) NOT NULL,
  `billing_postcode` varchar(10) NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `shipping_city` varchar(255) NOT NULL,
  `shipping_region` varchar(50) NOT NULL,
  `shipping_country` varchar(50) NOT NULL,
  `shipping_phone` varchar(255) NOT NULL,
  `shipping_postcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sales_quote_customer`
--

INSERT INTO `sales_quote_customer` (`quote_customer_id`, `quote_id`, `customer_id`, `email`, `billing_address`, `billing_city`, `billing_region`, `billing_country`, `billing_phone`, `billing_postcode`, `shipping_address`, `shipping_city`, `shipping_region`, `shipping_country`, `shipping_phone`, `shipping_postcode`) VALUES
(1, 1, 4, 'vis@gmail.com', 'B-901, satyam luxurius', 'surat', 'gujarat', 'india', '9087676799', '302660', 'B-901, satyam luxurius', 'surat', 'gujarat', 'india', '9087676799', '302660'),
(2, 2, 1, 'abc@gmail.com', '23, vertical Street, olive Road', 'Vadodara', 'gujarat', 'india', '9864543440', '362501', '23, vertical Street, olive Road', 'Vadodara', 'gujarat', 'india', '9864543440', '362501'),
(3, 3, 1, 'abc@gmail.com', '45, stand colony, V.R road', 'Mumbai', 'maharastra', 'india', '8765533426', '632510', '45, stand colony, V.R road', 'Mumbai', 'maharastra', 'india', '8765533426', '632510'),
(4, 4, 1, 'abc@gmail.com', '23, vertical Street, olive Road', 'Vadodara', 'gujarat', 'india', '9864543440', '362501', '23, vertical Street, olive Road', 'Vadodara', 'gujarat', 'india', '9864543440', '362501'),
(5, 7, 5, 'ccc@cybercom.in', '104, A Wing, 104 Kailash Tower, A Wing, Inside S.t.c Colony, Andheri (east)', 'Mumbai', 'maharastra', 'india', '9620014451', '345655', '104, A Wing, 104 Kailash Tower, A Wing, Inside S.t.c Colony, Andheri (east)', 'Mumbai', 'maharastra', 'india', '9620014451', '345655'),
(6, 8, 5, 'ccc@cybercom.in', '104, A Wing, 104 Kailash Tower, A Wing, Inside S.t.c Colony, Andheri (east)', 'Mumbai', 'maharastra', 'india', '9620014451', '345655', '104, A Wing, 104 Kailash Tower, A Wing, Inside S.t.c Colony, Andheri (east)', 'Mumbai', 'maharastra', 'india', '9620014451', '345655'),
(7, 9, 5, 'ccc@cybercom.in', '104, A Wing, 104 Kailash Tower, A Wing, Inside S.t.c Colony, Andheri (east)', 'Mumbai', 'maharastra', 'india', '9620014451', '345655', '104, A Wing, 104 Kailash Tower, A Wing, Inside S.t.c Colony, Andheri (east)', 'Mumbai', 'maharastra', 'india', '9620014451', '345655');

-- --------------------------------------------------------

--
-- Table structure for table `sales_quote_item`
--

CREATE TABLE `sales_quote_item` (
  `item_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `row_total` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sales_quote_item`
--

INSERT INTO `sales_quote_item` (`item_id`, `quote_id`, `product_id`, `price`, `qty`, `row_total`) VALUES
(1, 1, 3, 10.00, 1, 10.00),
(2, 2, 17, 400.00, 3, 1200.00),
(3, 3, 1, 300000.00, 1, 300000.00),
(4, 4, 16, 4500.00, 1, 4500.00),
(5, 4, 3, 10.00, 1, 10.00),
(6, 7, 18, 700.00, 8, 5600.00),
(7, 5, 18, 700.00, 1, 700.00),
(8, 8, 20, 600.00, 3, 1800.00),
(12, 9, 1, 300000.00, 1, 300000.00),
(15, 11, 1, 300000.00, 1, 300000.00),
(16, 12, 3, 10.00, 1, 10.00),
(18, 5, 1, 300000.00, 1, 300000.00),
(24, 18, 13, 45.00, 2, 90.00),
(25, 20, 26, 4000.00, 1, 4000.00),
(26, 21, 2, 1000.00, 1, 1000.00),
(27, 23, 1, 300000.00, 5, 1500000.00),
(29, 31, 2, 1000.00, 1, 1000.00),
(34, 35, 22, 1500000.00, 1, 1500000.00),
(35, 36, 24, 75000.00, 1, 75000.00),
(36, 34, 24, 75000.00, 1, 75000.00),
(39, 38, 19, 999.00, 1, 999.00),
(40, 39, 17, 400.00, 1, 400.00);

-- --------------------------------------------------------

--
-- Table structure for table `sales_quote_payment_method`
--

CREATE TABLE `sales_quote_payment_method` (
  `payment_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `card_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sales_quote_payment_method`
--

INSERT INTO `sales_quote_payment_method` (`payment_id`, `quote_id`, `payment_method`, `card_number`) VALUES
(1, 1, 'p', ''),
(2, 2, 'cod', ''),
(3, 3, 'cc', '63250148879'),
(4, 4, 'p', ''),
(5, 7, 'cod', ''),
(6, 8, 'p', ''),
(7, 9, 'cod', '');

-- --------------------------------------------------------

--
-- Table structure for table `sales_quote_shipping_method`
--

CREATE TABLE `sales_quote_shipping_method` (
  `shipping_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `shipping_method` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sales_quote_shipping_method`
--

INSERT INTO `sales_quote_shipping_method` (`shipping_id`, `quote_id`, `shipping_method`) VALUES
(1, 1, 'f'),
(2, 2, 'e'),
(3, 3, 'e'),
(4, 4, 'e'),
(5, 7, 'e'),
(6, 8, 'e'),
(7, 9, 'e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `catalog_category`
--
ALTER TABLE `catalog_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `catalog_product`
--
ALTER TABLE `catalog_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `ccc_cource_enrollment`
--
ALTER TABLE `ccc_cource_enrollment`
  ADD PRIMARY KEY (`en_id`);

--
-- Indexes for table `ccc_cource_rate`
--
ALTER TABLE `ccc_cource_rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `mediator`
--
ALTER TABLE `mediator`
  ADD PRIMARY KEY (`row_id`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `sales_order_customer`
--
ALTER TABLE `sales_order_customer`
  ADD PRIMARY KEY (`order_customer_id`);

--
-- Indexes for table `sales_order_item`
--
ALTER TABLE `sales_order_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `sales_order_payment_method`
--
ALTER TABLE `sales_order_payment_method`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `sales_order_shipping_method`
--
ALTER TABLE `sales_order_shipping_method`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `sales_order_status_history`
--
ALTER TABLE `sales_order_status_history`
  ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `sales_quote`
--
ALTER TABLE `sales_quote`
  ADD PRIMARY KEY (`quote_id`);

--
-- Indexes for table `sales_quote_customer`
--
ALTER TABLE `sales_quote_customer`
  ADD PRIMARY KEY (`quote_customer_id`);

--
-- Indexes for table `sales_quote_item`
--
ALTER TABLE `sales_quote_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `sales_quote_payment_method`
--
ALTER TABLE `sales_quote_payment_method`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `sales_quote_shipping_method`
--
ALTER TABLE `sales_quote_shipping_method`
  ADD PRIMARY KEY (`shipping_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `catalog_category`
--
ALTER TABLE `catalog_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `catalog_product`
--
ALTER TABLE `catalog_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `ccc_cource_enrollment`
--
ALTER TABLE `ccc_cource_enrollment`
  MODIFY `en_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ccc_cource_rate`
--
ALTER TABLE `ccc_cource_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mediator`
--
ALTER TABLE `mediator`
  MODIFY `row_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sales_order_customer`
--
ALTER TABLE `sales_order_customer`
  MODIFY `order_customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sales_order_item`
--
ALTER TABLE `sales_order_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sales_order_payment_method`
--
ALTER TABLE `sales_order_payment_method`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sales_order_shipping_method`
--
ALTER TABLE `sales_order_shipping_method`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sales_order_status_history`
--
ALTER TABLE `sales_order_status_history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `sales_quote`
--
ALTER TABLE `sales_quote`
  MODIFY `quote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `sales_quote_customer`
--
ALTER TABLE `sales_quote_customer`
  MODIFY `quote_customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sales_quote_item`
--
ALTER TABLE `sales_quote_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `sales_quote_payment_method`
--
ALTER TABLE `sales_quote_payment_method`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sales_quote_shipping_method`
--
ALTER TABLE `sales_quote_shipping_method`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `catalog_product`
--
ALTER TABLE `catalog_product`
  ADD CONSTRAINT `catalog_product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `catalog_category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
