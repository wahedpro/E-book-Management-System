-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2023 at 02:55 PM
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
-- Database: `ebook_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_to_cart`
--

CREATE TABLE `add_to_cart` (
  `cart_id` int(11) NOT NULL,
  `cart_book_name` varchar(100) NOT NULL,
  `cart_price` int(11) NOT NULL,
  `cart_images` varchar(100) NOT NULL,
  `cart_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_to_cart`
--

INSERT INTO `add_to_cart` (`cart_id`, `cart_book_name`, `cart_price`, `cart_images`, `cart_quantity`) VALUES
(16, 'Cracking the Coding Interview', 850, 'book4.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `author_data`
--

CREATE TABLE `author_data` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(30) NOT NULL,
  `author_bio` varchar(150) NOT NULL,
  `author_images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `author_data`
--

INSERT INTO `author_data` (`author_id`, `author_name`, `author_bio`, `author_images`) VALUES
(6, 'Mahbubul Hasan', 'Md. Mahbubul Hasan (Shant) was born in 1986. He graduated from Agrani School in Rajshahi and New Govt. Completed higher secondary from degree college.', 'mahabub.jpg'),
(7, 'Tamim Shahriar Subin', 'Born on November 7, 1982 in Mymensingh, Tamim Shahriar Subin is a software engineer by profession. His education started at Homna Government Primary S', 'Tamim.jpg'),
(8, 'Jhangar Mahbub', 'Jhangar Mahbub, a web developer by profession. in Industrial and Production Engineering from Bangladesh University of Engineering (BUET), he is curren', 'Jhangar.jpg'),
(9, 'Gayle Laakmann', 'Gayle Laakmann McDowell has a strong background in software development with extensive experience on both sides of the hiring table.She has worked for', 'GayleLaakmann.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book_list`
--

CREATE TABLE `book_list` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `book_description` varchar(150) NOT NULL,
  `book_price` int(11) NOT NULL,
  `book_images` varchar(50) NOT NULL,
  `book_author_name` int(11) NOT NULL,
  `book_category` int(11) NOT NULL,
  `book_entry_date` varchar(10) NOT NULL,
  `Book_publisher_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_list`
--

INSERT INTO `book_list` (`book_id`, `book_name`, `book_description`, `book_price`, `book_images`, `book_author_name`, `book_category`, `book_entry_date`, `Book_publisher_name`) VALUES
(1, 'Programming Text Book', 'After reading this book students will increase their basic knowledge of programming as well as their skills in C programming language. ', 250, 'book1.jpg', 8, 3, '2023-01-10', 'Adarsha'),
(2, 'Computer Programming', 'After reading this book students will increase their basic knowledge of programming as well as their skills in C programming language. ', 300, 'book1.jpg', 7, 1, '2023-06-22', 'Binary Publications'),
(3, 'Data Structures and Algorithms', 'A data structure is a named location that can be used to store and organize data. And, an algorithm is a collection of steps to solve a particular pro', 350, 'book3.jpg', 6, 1, '2023-09-04', 'Binary Publications'),
(4, 'Cracking the Coding Interview', 'Cracking the Tech Career: Insider Advice on Landing a Job at Google, Microsoft, Apple, or Any Top Tech Company provides a broader look at the intervie', 850, 'book4.jpg', 9, 1, '2023-09-05', 'McDowell');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Programming'),
(2, 'Story'),
(3, 'School Book');

-- --------------------------------------------------------

--
-- Table structure for table `publisher_info`
--

CREATE TABLE `publisher_info` (
  `publisher_id` int(11) NOT NULL,
  `publisher_name` varchar(50) NOT NULL,
  `publisher_email` varchar(50) NOT NULL,
  `publisher_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `publisher_info`
--

INSERT INTO `publisher_info` (`publisher_id`, `publisher_name`, `publisher_email`, `publisher_password`) VALUES
(1, 'Binary Publications', 'binary@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `university_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`first_name`, `last_name`, `gender`, `university_name`, `password`, `email`) VALUES
('Wahidul', 'Islam', 'Male', 'Premier Univeristy', '12345', '143wd.1w@gmail.com'),
('Mohammad', 'Anis', 'Male', 'MatarBari Primary School', '336699', 'Anic@gmail.com'),
('Hachina ', 'Begum', 'Female', 'MatarBari High school', '121212', 'hachina@gmail.com'),
('Jaber', 'Ahmad', 'Male', 'Coxs Bazar School ', '123456789', 'jaber@gmail.com'),
('Mohammad', 'Rakib', 'Male', 'Premier Univeristy', '141414', 'rakib@gamil.com'),
('Tayeb', 'Akash', 'Male', 'Premier University', '121314', 'tayeb@gmail.com'),
('hobibul', 'Islam', 'Male', 'Premier Univeristy', '98765', 'wahedulislam.pro@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `author_data`
--
ALTER TABLE `author_data`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `book_list`
--
ALTER TABLE `book_list`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `publisher_info`
--
ALTER TABLE `publisher_info`
  ADD PRIMARY KEY (`publisher_id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `author_data`
--
ALTER TABLE `author_data`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `book_list`
--
ALTER TABLE `book_list`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `publisher_info`
--
ALTER TABLE `publisher_info`
  MODIFY `publisher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
