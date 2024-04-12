CREATE DATABASE IF NOT EXISTS webuild;

USE webuild;




CREATE TABLE `webuild`.`complaint` 
( `id` INT NOT NULL AUTO_INCREMENT , 
`project_id` INT(11) NOT NULL , 
`type` VARCHAR(255) NOT NULL , 
`description` LONGTEXT NOT NULL , 
`remark` LONGTEXT NOT NULL , 
`status` VARCHAR(10) NOT NULL , 
PRIMARY KEY (`id`)) ENGINE = InnoDB;
-- here
CREATE TABLE `webuild`.`user_lands` ( `id` INT NOT NULL AUTO_INCREMENT , `street` VARCHAR(20) NOT NULL ,
 `town` VARCHAR(20) NOT NULL , `district` VARCHAR(20) NOT NULL , `block_plan` VARCHAR(255) NOT NULL , 
 `area` VARCHAR(10) NOT NULL , `user_id` INT NOT NULL , `image` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) 
 ENGINE = InnoDB;

 CREATE TABLE `webuild`.`user_data` ( `id` INT NOT NULL AUTO_INCREMENT , `user_id` INT NOT NULL , `occupation` VARCHAR(255) NOT NULL , `salary` INT(10) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

 ALTER TABLE `user_data` CHANGE `salary` `salary` VARCHAR(10) NOT NULL;

 ALTER TABLE `user_data` CHANGE `salary` `salary` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;

 CREATE TABLE `webuild`.`paint` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(20) NOT NULL , `price` DOUBLE NOT NULL , `color` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

 INSERT INTO `paint` (`id`, `name`, `price`, `color`) VALUES (NULL, 'Bird Bath', '2500', '#D4E0E3'), (NULL, 'Cold Coffee', '2100', '#E3D7C1')
 INSERT INTO `paint` (`id`, `name`, `price`, `color`) VALUES (NULL, 'Show Blush', '1450', '#F2E9DC'), (NULL, 'Air Breeze', '2340', '#F2EDE9');
 INSERT INTO `paint` (`id`, `name`, `price`, `color`) VALUES (NULL, 'Pink Mist', '5600', '#F3E3E1');

 CREATE TABLE `webuild`.`attachment` ( `id` INT NOT NULL AUTO_INCREMENT , `complaint_id` INT NOT NULL , `file_name` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
ALTER TABLE `attachment` ADD `attachment_type` VARCHAR(20) NOT NULL AFTER `file_name`;

ALTER TABLE `complaint` CHANGE `id` `id` VARCHAR(50) NOT NULL;

ALTER TABLE `attachment` CHANGE `complaint_id` `complaint_id` VARCHAR(50) NOT NULL;

ALTER TABLE `attachment` CHANGE `complaint_id` `reference_id` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;

ALTER TABLE `paint` ADD `type` VARCHAR(20) NOT NULL AFTER `color`;

UPDATE `paint` SET `type` = 'INTERIOR' WHERE `paint`.`id` = 1
UPDATE `paint` SET `type` = 'INTERIOR' WHERE `paint`.`id` = 2
UPDATE `paint` SET `type` = 'INTERIOR' WHERE `paint`.`id` = 3
UPDATE `paint` SET `type` = 'INTERIOR' WHERE `paint`.`id` = 4
UPDATE `paint` SET `type` = 'INTERIOR' WHERE `paint`.`id` = 5

INSERT INTO `paint` (`id`, `name`, `price`, `color`, `type`) VALUES (NULL, 'Purple Dawn', '3450', '#A291FF', 'INTERIOR'), (NULL, 'Pastal Green', '1235', '#B6C48F', 'INTERIOR');
INSERT INTO `paint` (`id`, `name`, `price`, `color`, `type`) VALUES (NULL, 'Jasmine Yellow', '2376', '#EFEA5B', 'INTERIOR');
INSERT INTO `paint` (`id`, `name`, `price`, `color`, `type`) VALUES (NULL, 'Butterfly', '7890', '#EEE698', 'KIT&BATH'), (NULL, 'Crayon Green', '6783', '#EEF3DA', 'KIT&BATH'), (NULL, 'Sea Vista', '3457', '#9AC7CD', 'KIT&BATH'), (NULL, 'Soft Peach', '3120', '#E8D2BC', 'KIT&BATH');
INSERT INTO `paint` (`id`, `name`, `price`, `color`, `type`) VALUES (NULL, 'Dove White', '1300', '#DEDBD3', 'EXTERIOR'), (NULL, 'Golden Mist', '3500', '#D4B56C', 'EXTERIOR'), (NULL, 'Sandstone', '1800', '#C5B99B', 'EXTERIOR'), (NULL, 'Blissful', '3200', '#CE806F', 'EXTERIOR'), (NULL, 'French Rose', '8990', '#BC91BA', 'EXTERIOR');

UPDATE `paint` SET `name` = 'Tickled Pink', `color` = '#DBC2DC' WHERE `paint`.`id` = 6;
UPDATE `paint` SET `name` = 'Glod Gleam', `color` = '#F7EFCC' WHERE `paint`.`id` = 8;

CREATE TABLE `webuild`.`modification` ( `id` INT NOT NULL AUTO_INCREMENT , `type` VARCHAR(50) NOT NULL , `selection` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `webuild`.`tile` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(20) NOT NULL , `price` DOUBLE NOT NULL , `file_name` VARCHAR(255) NOT NULL , `type` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `tile` CHANGE `file_name` `file_name` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;

INSERT INTO `tile` (`id`, `name`, `price`, `file_name`, `type`) VALUES (NULL, 'Royal Marble', '1200', 'Bathroom_tile_1.jpeg', 'BATHROOM'), (NULL, 'Urban Slate', '2000', 'Bathroom_tile_2.jpeg', 'BATHROOM'), (NULL, 'Metro Fusion', '2400', 'Bathroom_tile_3.jpeg', 'BATHROOM'), (NULL, 'Concrete', '1490', 'Bathroom_tile_4.jpeg', 'BATHROOM')

INSERT INTO `tile` (`id`, `name`, `price`, `file_name`, `type`) VALUES (NULL, 'Regal Ivory', '3400', 'Exterior_tile_1.jpeg', 'EXTERIOR'), (NULL, 'Opulent Onyx', '1100', 'Exterior_tile_2.jpeg', 'EXTERIOR'), (NULL, 'Classic Carrara', '990', 'Exterior_tile_3.jpeg', 'EXTERIOR'), (NULL, 'Woodland Oak', '1700', 'Exterior_tile_4.jpeg', 'EXTERIOR')

INSERT INTO `tile` (`id`, `name`, `price`, `file_name`, `type`) VALUES (NULL, 'Vintage Charm', '2300', 'Interior_tile_1.jpeg', 'INTERIOR'), (NULL, 'Terracotta', '1300', 'Interior_tile_2.jpeg', 'INTERIOR'), (NULL, 'Stone Bliss', '4100', 'Interior_tile_3.jpeg', 'INTERIOR'), (NULL, 'Bamboo Breeze', '2100', 'Interior_tile_4.jpeg', 'INTERIOR')

INSERT INTO `tile` (`id`, `name`, `price`, `file_name`, `type`) VALUES (NULL, 'Heritage Hues', '2340', 'Kitchen_tile_1.jpeg', 'KITCHEN'), (NULL, 'Antique', '1290', 'Kitchen_tile_2.jpeg', 'KITCHEN'), (NULL, 'Rustic Revival', '3000', 'Kitchen_tile_3.jpeg', 'KITCHEN'), (NULL, 'Crystal Cascade', '2700', 'Kitchen_tile_4.jpeg', 'KITCHEN')

CREATE TABLE `webuild`.`quotation` ( `id` INT NOT NULL AUTO_INCREMENT , `user_id` INT NOT NULL , `quotation` VARCHAR(255) NOT NULL , `total_amount` DOUBLE NOT NULL , `created_date` DATETIME NOT NULL , `status` VARCHAR(10) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

INSERT INTO `quotation` (`id`, `user_id`, `quotation`, `total_amount`, `created_date`, `status`) VALUES (NULL, '1', '658bf9d448f6c_1703672276.pdf', '4000000', '2024-01-02 17:58:35.000000', 'Pending');

INSERT INTO `quotation` (`id`, `user_id`, `quotation`, `total_amount`, `created_date`, `status`) VALUES (NULL, '1', '65944f5766379_1704218455.pdf', '380000', '2024-01-02 18:01:21.000000', 'Pending');

CREATE TABLE `webuild`.`reject_quotation` ( `id` INT NOT NULL AUTO_INCREMENT , `reason` VARCHAR(100) NOT NULL , `description` VARCHAR(255) NOT NULL , `comment` VARCHAR(100) NOT NULL , `new_quotation` VARCHAR(6) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `reject_quotation` ADD `rating` VARCHAR(30) NOT NULL AFTER `description`;

CREATE TABLE `webuild`.`kitchen_modification` ( `id` INT NOT NULL AUTO_INCREMENT , `modification_id` VARCHAR(100) NOT NULL , `tile_id` VARCHAR(30) NOT NULL , `paint_id` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `webuild`.`living_modification` ( `id` INT NOT NULL AUTO_INCREMENT , `modification_id` VARCHAR(100) NOT NULL , `tile_id` VARCHAR(30) NOT NULL , `paint_id` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `webuild`.`dining_modification` ( `id` INT NOT NULL AUTO_INCREMENT , `modification_id` VARCHAR(100) NOT NULL , `tile_id` VARCHAR(30) NOT NULL , `paint_id` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `webuild`.`bathroom_modification` ( `id` INT NOT NULL AUTO_INCREMENT , `modification_id` VARCHAR(100) NOT NULL , `tile_id` VARCHAR(30) NOT NULL , `paint_id` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `webuild`.`bedroom_modification` ( `id` INT NOT NULL AUTO_INCREMENT , `modification_id` VARCHAR(100) NOT NULL , `tile_id` VARCHAR(30) NOT NULL , `paint_id` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `webuild`.`exterior_modification` ( `id` INT NOT NULL AUTO_INCREMENT , `modification_id` VARCHAR(100) NOT NULL , `tile_id` VARCHAR(30) NOT NULL , `paint_id` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `webuild`.`allocated_task` ( `id` INT NOT NULL AUTO_INCREMENT , `task_id` INT NOT NULL , `status` VARCHAR(10) NOT NULL , `progress` INT(3) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `allocated_task` CHANGE `progress` `progress` INT(3) NOT NULL DEFAULT '0';

ALTER TABLE `allocated_task` ADD `project_id` INT NOT NULL AFTER `id`;

INSERT INTO `task_coworker` (`id`, `task_id`, `role`, `count`) VALUES ('', '1', 'Concrete Worker', '4'), ('', '1', 'General Laborer', '6'), ('', '1', 'Equipment Operator', '1')

INSERT INTO `task_coworker` (`id`, `task_id`, `role`, `count`) VALUES (NULL, '2', 'Carpenter', '4'), (NULL, '2', 'Steel Workers', '3'), (NULL, '2', 'General Laborer', '2'), (NULL, '2', 'Equipment Operator', '1')

INSERT INTO `coworker` (`id`, `name`, `phone_no`, `district`, `address`, `role`) VALUES (NULL, 'Thusitha deshan', '94775489485', 'Galle', '1st Lane, Upper Dickson Rd, Galle', 'General Laborer'), (NULL, 'Nuvini Wasana', '94761257631', 'Galle', '2nd Lane, Lower Dickson Rd, Galle', 'General Laborer');

ALTER TABLE `allocated_task` ADD `est_start_date` DATE NULL AFTER `progress`, ADD `est_end_date` DATE NULL AFTER `est_start_date`;
ALTER TABLE `allocated_task` DROP `est_end_date`;

ALTER TABLE `tasks` ADD `duration` INT(5) NOT NULL AFTER `sub_task_count`;

ALTER TABLE tasks ADD PRIMARY KEY (id);

UPDATE `allocated_task` SET `est_start_date` = '2024-01-02' WHERE `allocated_task`.`id` = 7; UPDATE `allocated_task` SET `est_start_date` = '2024-01-14' WHERE `allocated_task`.`id` = 8; UPDATE `allocated_task` SET `est_start_date` = '2024-01-12' WHERE `allocated_task`.`id` = 9; UPDATE `allocated_task` SET `est_start_date` = '2024-01-13' WHERE `allocated_task`.`id` = 10; UPDATE `allocated_task` SET `status` = 'Pending', `est_start_date` = '2024-01-20' WHERE `allocated_task`.`id` = 11;

CREATE TABLE `webuild`.`allocate_coworker` ( `id` INT NULL , `emp_id` INT NOT NULL , `project_id` INT NOT NULL , `task_id` INT NOT NULL , `start_date` DATE NOT NULL , `end_date` DATE NOT NULL ) ENGINE = InnoDB;

ALTER TABLE `allocate_coworker` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (`id`);

-- here
ALTER TABLE `complaint` CHANGE `remark` `remark` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL;

INSERT INTO `complaint` (`id`, `project_id`, `type`, `description`, `remark`, `status`) VALUES (NULL, `1`, 
`Quality of photograph`, `I had high expectations for the photographs quality, and unfortunately, it does not meet those expectations. `,
 NULL, `Pending`);
 INSERT INTO `complaint` (`id`, `project_id`, `type`, `description`, `remark`, `status`) VALUES (NULL, `1`, 
`Construction project delay`, `I\'m worried about the delays in our construction project. We\'re not getting enough updates on what\'s going on,
and unexpected problems are making things slow. `, NULL, `Pending`);

CREATE TABLE `webuild`.`weather_report` ( `id` INT NOT NULL AUTO_INCREMENT , `hour_8` VARCHAR(10) NOT NULL , `hour_9` VARCHAR(10) NOT NULL , `hour_10` VARCHAR(10) NOT NULL , `hour_11` VARCHAR(10) NOT NULL , `hour_1` VARCHAR(10) NOT NULL , `hour_2` VARCHAR(10) NOT NULL , `hour_3` VARCHAR(10) NOT NULL , `hour_4` VARCHAR(10) NOT NULL , `temperature` VARCHAR(4) NOT NULL , `overall` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE weather_report ADD date date;
ALTER TABLE `weather_report` CHANGE `overall` `overall` VARCHAR(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;

CREATE TABLE `webuild`.`challenge` ( `id` INT NOT NULL AUTO_INCREMENT , `date` DATE NOT NULL , `challenge` INT(100) NOT NULL , `description` INT(150) NOT NULL , `impact` ENUM('Yes','No') NOT NULL , `root_case` VARCHAR(100) NOT NULL , `face-it` VARCHAR(250) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `challenge` CHANGE `challenge` `challenge` VARCHAR(100) NOT NULL, CHANGE `description` `description` VARCHAR(150) NOT NULL;

CREATE TABLE `webuild`.`user` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `firstname` VARCHAR(255),
  `lastname` VARCHAR(255), 
  `nic` VARCHAR(255), 
  `contactnumber` VARCHAR(255), 
  `address` VARCHAR(255),
  `username` VARCHAR(255),
  `emailaddress` VARCHAR(255),
  `password` VARCHAR(255),
  
);

INSERT INTO `user` (`id`, `firstname`, `lastname`, `nic`, `contactnumber`, `address`, `username`, `email`, `password`) VALUES (NULL, 'gaveesha', 'kasun', '200290098767', '1', '1', NULL, 'k@gmail.com', 'kasunkasun')



//staff Table

INSERT INTO `staff`(`staffid`, `name`, `email`, `password`, `NIC`, `Address`, `City`, `role`) VALUES ('PM1','G.N.S Wickrama','gaveesha@gmail.com','gnswickrama','200139905649','14,Thotupala Rd,Wadduwa','Wadduwa','ProjectManager')



//Quotation Table
CREATE TABLE quotation (
 
  projectid int PRIMARY KEY ,
  modelnumber int,
  clientname VARCHAR(255),
  estimation int,
  companyprofit int,
  totalcost int
);


//Profile Table
CREATE TABLE profile (
 
  ID int,
  ClientName VARCHAR(255),
  ModelNumber int,
  Modifiacations VARCHAR(255)
);

//Staff Table
CREATE TABLE staff(
 
  staffid int PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(500),
  email VARCHAR(250),
  password text,
  nic text,
  contactnumber int(10),
  address text,
  city text, 
  role text, 
  joineddate date
  
);

-- pramukhas database

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jan 09, 2024 at 02:39 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webuild`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `remark` longtext CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `project_id`, `type`, `description`, `remark`, `status`) VALUES
(1, 1, 'Quality of photograph', 'I had high expectations for the photographs quality, and unfortunately, it does not meet those expectations. ', NULL, 'Pending'),
(2, 1, 'Construction project delay ', 'I\'m worried about the delays in our construction project. We\'re not getting enough updates on what\'s going on,\r\nand unexpected problems are making things slow. ', NULL, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `co_workers`
--

CREATE TABLE `co_workers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `experience` varchar(500) NOT NULL,
  `field` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `district` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `def`
--

CREATE TABLE `def` (
  `id` int(10) NOT NULL,
  `d_kitchen_tile_id` int(10) NOT NULL,
  `d_kitchen_color_id` int(10) NOT NULL,
  `d_bathroom_tile_id` int(10) NOT NULL,
  `d_bathroom_color_id` int(10) NOT NULL,
  `d_dinien_title_id` int(10) NOT NULL,
  `d_dinien_color_id` int(10) NOT NULL,
  `d_living_room_tile_id` int(10) NOT NULL,
  `d_living_room_color_id` int(10) NOT NULL,
  `d_living_area_title_id` int(10) NOT NULL,
  `d_living_area_color_id` int(10) NOT NULL,
  `d_exterior_tile_id` int(10) NOT NULL,
  `d_exterior_color_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `def`
--

INSERT INTO `def` (`id`, `d_kitchen_tile_id`, `d_kitchen_color_id`, `d_bathroom_tile_id`, `d_bathroom_color_id`, `d_dinien_title_id`, `d_dinien_color_id`, `d_living_room_tile_id`, `d_living_room_color_id`, `d_living_area_title_id`, `d_living_area_color_id`, `d_exterior_tile_id`, `d_exterior_color_id`) VALUES
(1, 1, 13, 3, 13, 5, 13, 7, 13, 9, 13, 11, 13);

-- --------------------------------------------------------

--
-- Table structure for table `land`
--

CREATE TABLE `land` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `lane` varchar(30) NOT NULL,
  `town` varchar(30) NOT NULL,
  `district` varchar(20) NOT NULL,
  `area_in_perch` int(10) NOT NULL,
  `image` varchar(30) NOT NULL,
  `block_plan` varchar(30) NOT NULL,
  `road_map` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `material_requests`
--

CREATE TABLE `material_requests` (
  `p_id` varchar(10) NOT NULL,
  `r_id` varchar(10) NOT NULL,
  `material_or_item_id` varchar(10) NOT NULL,
  `material_or_item_name` varchar(10) NOT NULL,
  `mesure_unit` varchar(6) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material_requests`
--

INSERT INTO `material_requests` (`p_id`, `r_id`, `material_or_item_id`, `material_or_item_name`, `mesure_unit`, `quantity`) VALUES
('11', '100', '3', 'vvf', 'vdsv', 2),
('11', '100', '3', 'vvf', 'vdsv', 2),
('12', '101', 'hb', 'nmnbmn', 'kjbkh', 0),
('12', '101', 'kjbhkh', 'kjbkn', 'hkbkhb', 0),
('12', '101', 'jhvjh', 'vjhjk', 'bkjj', 0);

ALTER TABLE `material_requests` 
ADD `availablity` VARCHAR(255) NOT NULL AFTER `Remain_quantity`, ADD `action` VARCHAR(255) NOT NULL AFTER `availablity`;

-- --------------------------------------------------------

--
-- Table structure for table `members_projects`
--

CREATE TABLE `members_projects` (
  `id` int(10) NOT NULL,
  `staff_id` int(10) NOT NULL,
  `count` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members_projects`
--

INSERT INTO `members_projects` (`id`, `staff_id`, `count`) VALUES
(1, 2, 3),
(2, 4, 2),
(3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `no_room` int(3) NOT NULL,
  `no_kitchen` int(3) NOT NULL,
  `flow_plan` varchar(30) NOT NULL,
  `no_floar` int(3) NOT NULL,
  `kitchen_tile` varchar(20) NOT NULL,
  `dinien_tile` varchar(20) NOT NULL,
  `bathroom_tile` varchar(20) NOT NULL,
  `tile` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL,
  `time_duraion_in_months` int(11) NOT NULL,
  `minimum_area` int(11) NOT NULL,
  `parking_space` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `model_image`
--

CREATE TABLE `model_image` (
  `id` int(5) NOT NULL,
  `model_id` int(5) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `modification`
--

CREATE TABLE `modification` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `def_id` int(1) NOT NULL,
  `kitchen_tile_id` int(10) NOT NULL,
  `kitchen_color_id` int(10) NOT NULL,
  `bathroom_tile_id` int(10) NOT NULL,
  `bathroom_color_id` int(10) NOT NULL,
  `dinien_title_id` int(10) NOT NULL,
  `dinien_color_id` int(10) NOT NULL,
  `living_room_tile_id` int(10) NOT NULL,
  `living_room_color_id` int(10) NOT NULL,
  `living_area_title_id` int(10) NOT NULL,
  `living_area_color_id` int(10) NOT NULL,
  `exterior_tile_id` int(10) NOT NULL,
  `exterior_color_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modification`
--

INSERT INTO `modification` (`id`, `user_id`, `def_id`, `kitchen_tile_id`, `kitchen_color_id`, `bathroom_tile_id`, `bathroom_color_id`, `dinien_title_id`, `dinien_color_id`, `living_room_tile_id`, `living_room_color_id`, `living_area_title_id`, `living_area_color_id`, `exterior_tile_id`, `exterior_color_id`) VALUES
(1, 2, 1, 2, 2, 4, 4, 6, 6, 8, 8, 10, 10, 12, 12);

-- --------------------------------------------------------

--
-- Table structure for table `paint`
--

CREATE TABLE `paint` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price_per_square_feet` double NOT NULL,
  `color` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paint`
--

INSERT INTO `paint` (`id`, `name`, `price_per_square_feet`, `color`, `type`) VALUES
(1, 'Purple Dawn', 3450, '#A291FF', 'INTERIOR'),
(2, 'Pastal Green', 1235, '#B6C48F', 'INTERIOR'),
(3, 'Jasmine Yellow', 2376, '#EFEA5B', 'INTERIOR'),
(4, 'Butterfly', 7890, '#EEE698', 'KIT&BATH'),
(5, 'Crayon Green', 6783, '#EEF3DA', 'KIT&BATH'),
(6, 'Tickled Pink', 3457, '#DBC2DC', 'KIT&BATH'),
(7, 'Soft Peach', 3120, '#E8D2BC', 'KIT&BATH'),
(8, 'Glod Gleam', 1300, '#F7EFCC', 'EXTERIOR'),
(9, 'Golden Mist', 3500, '#D4B56C', 'EXTERIOR'),
(10, 'Sandstone', 1800, '#C5B99B', 'EXTERIOR'),
(11, 'Blissful', 3200, '#CE806F', 'EXTERIOR'),
(12, 'French Rose', 8990, '#BC91BA', 'EXTERIOR'),
(13, 'White', 500, '#000000', 'ALL');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `action` varchar(20) NOT NULL,
  `total_price` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment_packages`
--

CREATE TABLE `payment_packages` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `stallment` int(5) NOT NULL,
  `count` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) NOT NULL,
  `manager_id` int(10) NOT NULL,
  `supervisor_id` int(10) NOT NULL,
  `project_request_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `final_date` date NOT NULL,
  `action` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `manager_id`, `supervisor_id`, `project_request_id`, `date`, `final_date`, `action`) VALUES
(1, 2, 4, 5, '2023-12-28', '2023-12-27', 'ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `project_dprs`
--

CREATE TABLE `project_dprs` (
  `id` int(5) NOT NULL,
  `project_id` int(5) NOT NULL,
  `manager_id` int(5) NOT NULL,
  `supervisor_id` int(5) NOT NULL,
  `date` date NOT NULL,
  `action` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_dprs`
--

INSERT INTO `project_dprs` (`id`, `project_id`, `manager_id`, `supervisor_id`, `date`, `action`) VALUES
(1, 1, 2, 3, '2023-12-12', 'accept'),
(2, 2, 2, 4, '2023-11-12', 'done');

-- --------------------------------------------------------

--
-- Table structure for table `project_requests`
--

CREATE TABLE `project_requests` (
  `id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `land_type` varchar(20) NOT NULL,
  `model_id` int(5) NOT NULL,
  `land_id` int(5) NOT NULL,
  `modification_id` int(5) NOT NULL,
  `payment_id` int(5) NOT NULL,
  `manager_id` int(5) NOT NULL,
  `total_price` int(10) NOT NULL,
  `date` date NOT NULL,
  `action` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_requests`
--

INSERT INTO `project_requests` (`id`, `user_id`, `land_type`, `model_id`, `land_id`, `modification_id`, `payment_id`, `manager_id`, `total_price`, `date`, `action`) VALUES
(1, 1, 'user', 1, 1, 1, 1, 2, 2000000, '2024-01-15', 'modified');

-- --------------------------------------------------------

--
-- Table structure for table `project_tasks`
--

CREATE TABLE `project_tasks` (
  `id` int(11) NOT NULL,
  `project_id` int(5) NOT NULL,
  `task_id` int(5) NOT NULL,
  `sub_task_id` int(5) NOT NULL,
  `sub_task_name` varchar(100) NOT NULL,
  `sub_task_details` varchar(1000) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `weight` int(3) NOT NULL,
  `action` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_tasks`
--

INSERT INTO `project_tasks` (`id`, `project_id`, `task_id`, `sub_task_id`, `sub_task_name`, `sub_task_details`, `start_date`, `end_date`, `weight`, `action`) VALUES
(1, 1, 1, 6, 'Foundation Drainage', 'Install drainage systems like weeping tiles or French drains around the foundation to manage groundwater and prevent water accumulation. Ensure proper slope and connections to direct water away from the foundation.', '2023-12-11', '0000-00-00', 0, 'ongoing'),
(2, 1, 1, 1, 'Excavation', 'Dig the foundation trenches according to the approved building plans and structural requirements', '2023-12-12', '0000-00-00', 0, 'ongoing'),
(3, 1, 1, 4, 'Curing and Setting', 'Allow sufficient time for the concrete to cure and gain strength. Implement appropriate curing methods like moist curing or applying curing compounds.\r\nMonitor the curing process and protect the concrete from extreme weather conditions or premature drying.\r\n', '2023-12-18', '0000-00-00', 0, 'ongoing'),
(4, 1, 1, 1, 'Excavation', 'Dig the foundation trenches according to the approved building plans and structural requirements', '2023-12-21', '0000-00-00', 0, 'ongoing'),
(5, 1, 1, 2, 'Footings Preparation', 'Constructing footings involves following the precise instructions provided by a structural engineer to ensure they\'re appropriately sized and positioned to support the load-bearing walls. Using formwork, shape the footings and reinforce them with steel bars (rebar) for added strength as per engineering requirements. This process creates a solid and stable foundation capable of supporting the weight of the structure.', '2023-12-22', '0000-00-00', 0, 'ongoing'),
(6, 0, 1, 1, 'Excavation', 'Dig the foundation trenches according to the approved building plans and structural requirements', '2024-01-04', '0000-00-00', 0, 'ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `nic` text DEFAULT NULL,
  `contactnumber` int(10) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `district` varchar(20) DEFAULT NULL,
  `role` text DEFAULT NULL,
  `joineddate` date DEFAULT NULL,
  `experience` text NOT NULL,
  `qualification` text NOT NULL,
  `image` blob NOT NULL,
  `birth_date` date NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `firstname`, `lastname`, `email`, `password`, `nic`, `contactnumber`, `address`, `district`, `role`, `joineddate`, `experience`, `qualification`, `image`, `birth_date`, `gender`) VALUES
(1, 'T.A.P', 'Prathibapoorna', 'pramukhapoo@gmail.com', '$2y$10$TGyHNK5bSx3UmLgFqT2YZuwj0gbnD3sPCK7c2m9CPWgeQXG3VvUKy', '200027801803', 769117180, '14,Thotupala Rd,Wadduwa', 'Wadduwa', 'Project Coordinator', '2023-12-06', '', '', '', '0000-00-00', '');
INSERT INTO `staff` (`id`, `firstname`, `lastname`, `email`, `password`, `nic`, `contactnumber`, `address`, `district`, `role`, `joineddate`, `experience`, `qualification`, `image`, `birth_date`, `gender`) VALUES
(2, 'Pramuka', 'Thenuwara', 'pramukha@gmail.com', '$2y$10$TGyHNK5bSx3UmLgFqT2YZuwj0gbnD3sPCK7c2m9CPWgeQXG3VvUKy', '200027801803', 769117180, 'no:44, seenigoda, wathugedara.', 'galle', 'Project Manager', '2023-12-06', 'bkbfkbxvoonnljv,nvl\r\nsvkjbskvjbkvjbkbxv\r\nsvjbskfvbksbv;skjfvksjv,n,xvnnkxncv svksjbkvjsd', 'sdvhbskdvhbskhbdvksbvd\r\nsdkjsbdkbksdjnksdf\r\nsdkfkjbskdjnksdnv\r\nwd;fksjvksjdfs\r\n;ksjdvnksnd', 'nm mn', '2000-10-04', 'male');
INSERT INTO `staff` (`id`, `firstname`, `lastname`, `email`, `password`, `nic`, `contactnumber`, `address`, `district`, `role`, `joineddate`, `experience`, `qualification`, `image`, `birth_date`, `gender`) VALUES
(3, 'Viraji', 'Jayasinghe', 'viraji@gmail.com', '$2y$10$TGyHNK5bSx3UmLgFqT2YZuwj0gbnD3sPCK7c2m9CPWgeQXG3VvUKy', '200130610625', 765884623, 'No:44,Wathugedara,Ambalangoda.', 'galle', 'Supervisor', '2023-12-22', 'sfjhvsjfhgs sfkcfailgailygcs.svugslivuglizdvc dvliuzdgvizd', 'sdvshgdjvzbhvbzv dz.zivgzjvzjhvbzmc', '', '2000-10-22', 'female'),
(4, 'Himasa', 'Senawirathne', 'Himasha@gmail.com', '$2y$10$TGyHNK5bSx3UmLgFqT2YZuwj0gbnD3sPCK7c2m9CPWgeQXG3VvUKy', '200145598924', 789553216, 'no,sdgjzhc,zndkgzdid', 'ampara', 'Supervisor', '2023-12-22', 'sfjhsjdc jjchzjhcvzcac.achzgcjzjchzjxncbzxncb', 'sdvmbzdvzjcz.zkhbvzjhbvjzbczcz,chzjc', '', '2003-12-16', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `sub_tasks`
--

CREATE TABLE `sub_tasks` (
  `task_id` int(5) NOT NULL,
  `id` int(5) NOT NULL,
  `sub_task_name` varchar(30) NOT NULL,
  `sub_task_details` varchar(1000) NOT NULL,
  `weight` int(3) NOT NULL,
  `co_workers_count` int(5) NOT NULL,
  `duration_in_days` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_tasks`
--

INSERT INTO `sub_tasks` (`task_id`, `id`, `sub_task_name`, `sub_task_details`, `weight`, `co_workers_count`, `duration_in_days`) VALUES
(1, 1, 'Excavation', 'Dig the foundation trenches according to the approved building plans and structural requirements', 0, 0, 0),
(1, 2, 'Footings Preparation', 'Constructing footings involves following the precise instructions provided by a structural engineer to ensure they\'re appropriately sized and positioned to support the load-bearing walls. Using formwork, shape the footings and reinforce them with steel bars (rebar) for added strength as per engineering requirements. This process creates a solid and stable foundation capable of supporting the weight of the structure.', 0, 0, 0),
(1, 3, 'Pouring Concrete', 'Prepare the concrete mix according to the recommended proportions and quality standards. Pour the concrete into the excavated trenches and footings, ensuring even distribution and proper consolidation.', 0, 0, 0),
(1, 4, 'Curing and Setting', 'Allow sufficient time for the concrete to cure and gain strength. Implement appropriate curing methods like moist curing or applying curing compounds.\r\nMonitor the curing process and protect the concrete from extreme weather conditions or premature drying.\r\n', 0, 0, 0),
(1, 5, 'Backfilling and Compaction', 'Backfill the excavated area around the foundation with suitable soil, ensuring proper compaction to prevent settling.\r\nCompact the soil in layers to achieve the required density and stability.', 0, 0, 0),
(1, 6, 'Foundation Drainage', 'Install drainage systems like weeping tiles or French drains around the foundation to manage groundwater and prevent water accumulation. Ensure proper slope and connections to direct water away from the foundation.', 0, 0, 0),
(2, 8, 'Layout and Marking', 'Begin by marking the positions for walls, doorways, windows, and openings on the foundation, following the architectural plans. Ensure accurate measurements and alignment according to the floor plan.', 0, 0, 0),
(2, 9, 'Wall Framing', 'Erect the exterior walls first, typically using lumber or steel studs, ensuring proper alignment and squareness. Install headers, sills, and cripple studs where necessary, following structural and design specifications.', 0, 0, 0),
(2, 10, 'Floor Framing', 'Construct the floor structure by installing joists or trusses, creating a sturdy base for the flooring material. Attach rim joists, subflooring, and bracing as needed for stability and support.', 0, 0, 0),
(2, 11, 'Roof Framing', 'Build the roof structure by installing rafters or trusses, ensuring proper pitch and alignment according to the architectural design. Add ridge beams, collar ties, and braces to provide support and stability to the roof.', 0, 0, 0),
(2, 12, 'Window and Door Framing', 'Frame openings for windows and doors, ensuring proper headers, king studs, and cripple studs to support these openings.\r\nInstall window and door frames securely within the framed openings', 0, 0, 0),
(2, 13, 'Bracing and Sheathing', 'Install diagonal bracing to reinforce the structure against lateral forces like wind or earthquakes.\r\nApply sheathing materials (such as plywood or oriented strand board) to the exterior walls and roof for added strength and stability.', 0, 0, 0),
(2, 14, 'Inspections', 'Schedule inspections to ensure the framing work complies with building codes and safety regulations.\r\nAddress any identified issues or required corrections before proceeding to the next construction phase.', 0, 0, 0),
(3, 15, 'Siding Installation', 'Choose and install the selected siding material (vinyl, wood, fiber cement, brick, etc.) onto the exterior walls according to the architectural design. Cut and fit siding pieces accurately, ensuring proper overlap and alignment.', 0, 0, 0),
(3, 16, 'Stucco or Exterior Render', 'Apply stucco or exterior render to the walls for a durable and decorative finish.\r\nPrepare the surface, apply the base coats, and finish with the desired texture or color.', 0, 0, 0),
(3, 17, 'Brickwork or Masonry', 'Lay bricks or other masonry materials as per the design plan, using mortar to create a solid and visually appealing exterior.\r\nEnsure proper alignment, spacing, and structural integrity of the masonry work.', 0, 0, 0),
(3, 18, 'Trim and Molding Installation', 'Install exterior trim pieces, such as fascia boards, soffits, corner boards, and decorative moldings around windows and doors. Ensure proper cutting, fitting, and sealing to enhance the aesthetics and protect vulnerable areas from moisture.', 0, 0, 0),
(3, 19, 'Painting or Exterior Finishes', 'Apply paint or protective coatings to the exterior surfaces for color, weather resistance, and durability. Ensure proper priming, painting, or staining as per manufacturer\'s guidelines and design preferences', 0, 0, 0),
(3, 20, 'Weatherproofing and Sealing', 'Apply caulking or sealants around windows, doors, and other penetrations to prevent water infiltration and air leaks.\r\nCheck for gaps or openings and seal them appropriately to maintain the building envelope.', 0, 0, 0),
(3, 21, 'Gutter and Downspout Installat', 'Install gutters and downspouts to efficiently direct rainwater away from the house, preventing water damage to the foundation and exterior walls.\r\nEnsure proper slope, alignment, and secure attachment of the gutter system.', 0, 0, 0),
(3, 22, 'Exterior Lighting and Fixtures', 'Install exterior lighting fixtures, such as wall-mounted lights, floodlights, or decorative fixtures, to illuminate and enhance the house\'s exterior.', 0, 0, 0),
(3, 23, 'Final Inspections and Touch-up', 'Conduct a thorough inspection of the exterior finishing work to ensure it meets building codes, regulations, and design specifications. Perform any necessary touch-ups or corrections identified during inspections.', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `module_id` int(5) NOT NULL,
  `id` int(5) NOT NULL,
  `level` int(2) NOT NULL,
  `task_name` varchar(30) NOT NULL,
  `sub_task_count` int(5) NOT NULL,
  `duration_in_days` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`module_id`, `id`, `level`, `task_name`, `sub_task_count`, `duration_in_days`) VALUES
(1, 1, 1, 'Foundation', 0, 0),
(1, 2, 1, 'Framing', 0, 0),
(1, 3, 2, 'Exterior Finishing', 0, 0),
(1, 4, 2, 'Windows and Doors Installation', 0, 0),
(1, 5, 3, 'Interior Work', 0, 0),
(1, 6, 3, 'Flooring Installation', 0, 0),
(1, 7, 3, 'Interior Finishing', 0, 0),
(1, 8, 4, 'Final Inspections and Touch-up', 0, 0),
(1, 9, 4, 'Cleanup and Landscaping', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `task_coworker`
--

CREATE TABLE `task_coworker` (
  `id` int(5) NOT NULL,
  `task_id` int(5) NOT NULL,
  `role` varchar(20) NOT NULL,
  `count` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task_coworker`
--

INSERT INTO `task_coworker` (`id`, `task_id`, `role`, `count`) VALUES
(1, 1, 'laborer', 6),
(2, 2, 'carpenter', 2),
(3, 2, 'laborer', 4);

-- --------------------------------------------------------

--
-- Table structure for table `task_equipment`
--

CREATE TABLE `task_equipment` (
  `id` int(5) NOT NULL,
  `task_id` int(5) NOT NULL,
  `equipment_id` int(5) NOT NULL,
  `quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task_equipment`
--

INSERT INTO `task_equipment` (`id`, `task_id`, `equipment_id`, `quantity`) VALUES
(1, 1, 1, 2),
(2, 1, 2, 2),
(3, 1, 1, 2),
(4, 1, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `task_materials`
--

CREATE TABLE `task_materials` (
  `id` int(5) NOT NULL,
  `task_id` int(5) NOT NULL,
  `material_id` int(5) NOT NULL,
  `measure_unit` varchar(20) NOT NULL,
  `quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task_materials`
--

INSERT INTO `task_materials` (`id`, `task_id`, `material_id`, `measure_unit`, `quantity`) VALUES
(1, 1, 1, 'cube', 20),
(2, 1, 2, 'cube', 15),
(3, 1, 3, 'cube', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tile`
--

CREATE TABLE `tile` (
  `id` int(11) NOT NULL,
  `tile_name` varchar(30) NOT NULL,
  `price_per_square_foot` int(6) NOT NULL,
  `image` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tile`
--

INSERT INTO `tile` (`id`, `tile_name`, `price_per_square_foot`, `image`, `type`) VALUES
(1, 'Pattern Look', 700, '', 'kitchen'),
(2, 'Cement Look', 850, '', 'kitchen'),
(3, 'Ceramic tiles', 750, '', 'bathroom'),
(4, 'Mosaic tiles', 1000, '', 'bathroom'),
(5, 'Glass Tile', 1100, '', 'dinien'),
(6, 'Granite Tile', 900, '', 'dinien'),
(7, 'Virtrified Tile', 800, '', 'living_room'),
(8, 'Mosaic Tile', 750, '', 'livind_room'),
(9, 'Porcelain Tile', 800, '', 'living_area'),
(10, 'Limesrone Tile', 950, '', 'livind_area'),
(11, 'Ceramic Tile', 1000, '', 'exterior'),
(12, 'Cement Tile', 1050, '', 'exterior');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `nic` varchar(255) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `contactnumber` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `salary` int(15) NOT NULL,
  `proof_image` blob NOT NULL,
  `birth_date` date NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `nic`, `gender`, `contactnumber`, `address`, `email`, `salary`, `proof_image`, `birth_date`, `password`) VALUES
(1, 'Pramukha', 'Thenuwara', '200027801803', 'male', '0769117180', 'Seenigoda', 'pramukhapoo@gmail.com', 0, 0x30, '0000-00-00', '$2y$10$TGyHNK5bSx3UmLgFqT2YZuwj0gbnD3sPCK7c2m9CPWgeQXG3VvUKy'),
(2, 'Rajith', 'Rantharaka', '200056901904', 'male', '0777353594', 'Wathugedara', 'rajith@gmail.com', 0, 0x30, '0000-00-00', 'kjbdvkldjbfv6545'),
(3, 'Kasun', 'Udara', '200056808042', 'male', '0778959834', 'Ambalangoda', 'kasun@gmail.com', 0, 0x30, '0000-00-00', 'sfjbskjbksd64654'),
(4, 'Prathibha', 'Poorna', '200161904908', 'male', '0775484861', 'Galle', 'poorna@gmail.com', 0, 0x30, '0000-00-00', 'srfbjksfsdkjdoa654132'),
(5, 'Thimesh', 'Madushanka', '20006570104', 'male', '0717648232', 'Hikkaduwa', 'thimesh@gmail.com', 0, 0x30, '0000-00-00', 'wefkjbskfljkndchdjfjkaf8465461'),
(6, 'Charith', 'Deshan', '200054601602', 'male', '0777656591', 'Alpitiya', 'charith@gmail.com', 0, 0x30, '0000-00-00', 'sfsdhvbjzdbvoiajlsjfoasf68465651'),
(7, NULL, NULL, NULL, '', NULL, NULL, NULL, 0, '', '0000-00-00', '$2y$10$VMxOUGAnG5OPwAHB/di4g.j4Zy13OuJUtoULJiX6JD4W9xXk1inEy'),
(8, NULL, NULL, NULL, '', NULL, NULL, NULL, 0, '', '0000-00-00', '$2y$10$fWh8ayldsA7PbrUv1uE3JejvrftCTXwYqS71Q2qzO29RoP7HXAGZW'),
(9, 'Pramukha', 'Thenuwara', '200027801803', 'male', '0714120111', 'No:44,seenigoda', 'poo@gmail.com', 0, '', '0000-00-00', '$2y$10$2BHIp.dPHeeidkgcXbTkmOZOnyE0T6XpNXU6IUZtKJ8Z.Z7dNfAze'),
(10, 'Pramukha', 'Thenuwara', '200027801803', 'male', '0714120111', 'No:44,seenigoda', 'p@gmail.com', 0, '', '0000-00-00', NULL),
(11, 'Pramukha', 'Thenuwara', '200027801803', 'male', '0714120111', 'No:44,seenigoda', 'o@gmail.com', 0, '', '0000-00-00', 'Pramukha123#'),
(12, 'Pramukha', 'Thenuwara', '200027801803', 'male', '0714120111', 'No:44,seenigoda', 'oo@gmail.com', 0, '', '0000-00-00', '$2y$10$ajhHXL/sAmQYfby3xhmPUeKZ.u./5okNkhE79A.pp3schZpyefc.2'),
(13, NULL, NULL, NULL, '', NULL, NULL, NULL, 0, '', '0000-00-00', '$2y$10$IK1BVN/yf7TTwVlbjLl5m.b68UG.Ob6hP.xaPc6Z2IqxB08r76.ya'),
(14, 'Pramukha', 'Thenuwara', '200027801803', 'male', '0714120111', 'No:44,seenigoda', 'o1@gmail.com', 0, '', '0000-00-00', '$2y$10$xUNiNtTSIp.804T7i9Qkpuw4BXZHA8ZVPh7wZutNofcu72tFHqNXC');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `salary` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_lands`
--

CREATE TABLE `user_lands` (
  `id` int(11) NOT NULL,
  `street` varchar(20) NOT NULL,
  `town` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `block_plan` varchar(255) NOT NULL,
  `area` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `co_workers`
--
ALTER TABLE `co_workers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `def`
--
ALTER TABLE `def`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `land`
--
ALTER TABLE `land`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members_projects`
--
ALTER TABLE `members_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_image`
--
ALTER TABLE `model_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modification`
--
ALTER TABLE `modification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paint`
--
ALTER TABLE `paint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_dprs`
--
ALTER TABLE `project_dprs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_requests`
--
ALTER TABLE `project_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_tasks`
--
ALTER TABLE `project_tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `task_id` (`task_id`),
  ADD KEY `sub_task_id` (`sub_task_id`),
  ADD KEY `start_date` (`start_date`),
  ADD KEY `sub_task_details` (`sub_task_details`(768)),
  ADD KEY `action` (`action`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `sub_tasks`
--
ALTER TABLE `sub_tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `task_id` (`task_id`),
  ADD KEY `sub_task_id` (`id`),
  ADD KEY `sub_task_name` (`sub_task_name`),
  ADD KEY `sub_task_details` (`sub_task_details`(768));

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `module_id` (`module_id`),
  ADD KEY `task_id` (`id`),
  ADD KEY `task_name` (`task_name`);

--
-- Indexes for table `task_coworker`
--
ALTER TABLE `task_coworker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_equipment`
--
ALTER TABLE `task_equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_materials`
--
ALTER TABLE `task_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tile`
--
ALTER TABLE `tile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_lands`
--
ALTER TABLE `user_lands`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `co_workers`
--
ALTER TABLE `co_workers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `def`
--
ALTER TABLE `def`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `land`
--
ALTER TABLE `land`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members_projects`
--
ALTER TABLE `members_projects`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `model_image`
--
ALTER TABLE `model_image`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `modification`
--
ALTER TABLE `modification`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paint`
--
ALTER TABLE `paint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_dprs`
--
ALTER TABLE `project_dprs`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_requests`
--
ALTER TABLE `project_requests`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_tasks`
--
ALTER TABLE `project_tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sub_tasks`
--
ALTER TABLE `sub_tasks`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `task_coworker`
--
ALTER TABLE `task_coworker`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `task_equipment`
--
ALTER TABLE `task_equipment`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `task_materials`
--
ALTER TABLE `task_materials`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tile`
--
ALTER TABLE `tile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_lands`
--
ALTER TABLE `user_lands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- user table 
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `nic` varchar(255) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `contactnumber` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `salary` int(15) NOT NULL,
  `proof_image` blob NOT NULL,
  `birth_date` date NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `nic`, `gender`, `contactnumber`, `address`, `email`, `salary`, `proof_image`, `birth_date`, `password`) VALUES
(1, 'Pramukha', 'Thenuwara', '200027801803', 'male', '0769117180', 'Seenigoda', 'pramukhapoo@gmail.com', 0, 0x30, '0000-00-00', '$2y$10$TGyHNK5bSx3UmLgFqT2YZuwj0gbnD3sPCK7c2m9CPWgeQXG3VvUKy'),
(2, 'Rajith', 'Rantharaka', '200056901904', 'male', '0777353594', 'Wathugedara', 'rajith@gmail.com', 0, 0x30, '0000-00-00', 'kjbdvkldjbfv6545'),
(3, 'Kasun', 'Udara', '200056808042', 'male', '0778959834', 'Ambalangoda', 'kasun@gmail.com', 0, 0x30, '0000-00-00', 'sfjbskjbksd64654'),
(4, 'Prathibha', 'Poorna', '200161904908', 'male', '0775484861', 'Galle', 'poorna@gmail.com', 0, 0x30, '0000-00-00', 'srfbjksfsdkjdoa654132'),
(5, 'Thimesh', 'Madushanka', '20006570104', 'male', '0717648232', 'Hikkaduwa', 'thimesh@gmail.com', 0, 0x30, '0000-00-00', 'wefkjbskfljkndchdjfjkaf8465461'),
(6, 'Charith', 'Deshan', '200054601602', 'male', '0777656591', 'Alpitiya', 'charith@gmail.com', 0, 0x30, '0000-00-00', 'sfsdhvbjzdbvoiajlsjfoasf68465651'),
(7, NULL, NULL, NULL, '', NULL, NULL, NULL, 0, '', '0000-00-00', '$2y$10$VMxOUGAnG5OPwAHB/di4g.j4Zy13OuJUtoULJiX6JD4W9xXk1inEy'),
(8, NULL, NULL, NULL, '', NULL, NULL, NULL, 0, '', '0000-00-00', '$2y$10$fWh8ayldsA7PbrUv1uE3JejvrftCTXwYqS71Q2qzO29RoP7HXAGZW'),
(9, 'Pramukha', 'Thenuwara', '200027801803', 'male', '0714120111', 'No:44,seenigoda', 'poo@gmail.com', 0, '', '0000-00-00', '$2y$10$2BHIp.dPHeeidkgcXbTkmOZOnyE0T6XpNXU6IUZtKJ8Z.Z7dNfAze'),
(10, 'Pramukha', 'Thenuwara', '200027801803', 'male', '0714120111', 'No:44,seenigoda', 'p@gmail.com', 0, '', '0000-00-00', NULL),
(11, 'Pramukha', 'Thenuwara', '200027801803', 'male', '0714120111', 'No:44,seenigoda', 'o@gmail.com', 0, '', '0000-00-00', 'Pramukha123#'),
(12, 'Pramukha', 'Thenuwara', '200027801803', 'male', '0714120111', 'No:44,seenigoda', 'oo@gmail.com', 0, '', '0000-00-00', '$2y$10$ajhHXL/sAmQYfby3xhmPUeKZ.u./5okNkhE79A.pp3schZpyefc.2'),
(13, NULL, NULL, NULL, '', NULL, NULL, NULL, 0, '', '0000-00-00', '$2y$10$IK1BVN/yf7TTwVlbjLl5m.b68UG.Ob6hP.xaPc6Z2IqxB08r76.ya'),
(14, 'Pramukha', 'Thenuwara', '200027801803', 'male', '0714120111', 'No:44,seenigoda', 'o1@gmail.com', 0, '', '0000-00-00', '$2y$10$xUNiNtTSIp.804T7i9Qkpuw4BXZHA8ZVPh7wZutNofcu72tFHqNXC');


INSERT INTO `material_requests` (`p_id`, `r_id`, `material_or_item_id`, `material_or_item_name`, `mesure_unit`, `quantity`) VALUES ('12', '12', '4', 'blicks', 'fzfze', '12')


INSERT INTO `store_materials` (`id`, `material_name`, `material_code`, `total_quantity`) VALUES ('1', 'uiiuh', 'dcdc', '123');

INSERT INTO `material_requests` (`p_id`, `r_id`, `material_or_item_id`, `material_or_item_name`, `mesure_unit`, `quantity`) VALUES ('5', '6', 'VE1200', 'blicks', 'kg', '123');


-- store material low normal conditions

ALTER TABLE `store_materials` ADD `low_normal_limit_quantity` INT(11) NOT NULL AFTER `total_quantity`;

--  store material id name change 
ALTER TABLE `store_materials` CHANGE `id` `material_id` INT(11) NOT NULL AUTO_INCREMENT;



-- drop maintain and store_materials table 

DROP TABLE maintain;

DROP TABLE store_materials;

-- create table store_materials 

CREATE TABLE `webuild`.`store_materials` 
(`material_id` INT(11) NOT NULL AUTO_INCREMENT , 
`material_name` VARCHAR(255) NOT NULL , 
`material_code` VARCHAR(255) NOT NULL , 
`measure_unit` VARCHAR(255) NOT NULL , 
`total_quantity` INT(11) NOT NULL , 
`low_normal_limit_quantity` INT(11) NOT NULL , 
`requested_quantity` INT(11) NOT NULL , 
`remain_quantity` INT(11) NOT NULL , 
`status` VARCHAR(255) NOT NULL , PRIMARY KEY (`material_id`)) ENGINE = InnoDB;

ALTER TABLE `store_materials` ADD `refill_quantity` INT(11) NOT NULL AFTER `status`;



-- create material batchwise table 

CREATE TABLE `webuild`.`material_batches` 
(`batch_id` INT(11) NOT NULL AUTO_INCREMENT , 
`material_ID` INT(11) NOT NULL , 
`batch_number` VARCHAR(255) NOT NULL , 
`stock_quantity` INT(11) NOT NULL , PRIMARY KEY (`batch_id`)) ENGINE = InnoDB;

ALTER TABLE `material_batches` 
ADD `unit_price` INT(11) NOT NULL AFTER 
`stock_quantity`, ADD `total_price` INT(11) NOT NULL AFTER `unit_price`;


ALTER TABLE `material_batches` 
ADD CONSTRAINT `fk_materialID` 
FOREIGN KEY (`material_ID`) REFERENCES `store_materials`(`material_id`) 
ON DELETE RESTRICT ON UPDATE RESTRICT;

INSERT INTO `material_batches` 
(`batch_id`, `material_ID`, 
`batch_number`, `stock_quantity`, 
`unit_price`, `total_price`) VALUES ('1', '1', 'CE/B1', '1000', '400', '400000')

-- create construction_stages table  

CREATE TABLE `webuild`.`construction_stages` 
(`stage_id` INT(11) NOT NULL AUTO_INCREMENT , 
`stage_name` VARCHAR(255) NOT NULL , PRIMARY KEY (`stage_id`)) ENGINE = InnoDB;

INSERT INTO `construction_stages` (`stage_id`, `stage_name`) VALUES ('1', 'foundation')

INSERT INTO `construction_stages` (`stage_id`, `stage_name`) VALUES ('2', 'framing'), ('3', 'enclousure')

INSERT INTO `construction_stages` (`stage_id`, `stage_name`) VALUES ('4', 'mechanical system');

INSERT INTO `construction_stages` (`stage_id`, `stage_name`) VALUES ('5', 'finishing'), ('6', 'exterior finish')
-- create material_stage_jointable 

CREATE TABLE material_stage_jointable (
    Material_id INT,
    Stage_id INT,
    -- other columns if needed,
    PRIMARY KEY (Material_id, Stage_id),
    FOREIGN KEY (Material_id) REFERENCES store_materials(material_id),
    FOREIGN KEY (Stage_id) REFERENCES construction_stages(stage_id)
);

-- data insert store_materials 

INSERT INTO `store_materials` 
(`material_id`, `material_name`, 
`material_code`, `measure_unit`, 
`total_quantity`, 
`low_normal_limit_quantity`, 
`requested_quantity`, 
`remain_quantity`, 
`status`, 
`refill_quantity`) VALUES ('1', 'Cement', 'CE/F/1', 'Packet', '1000', '400', '', '', '', '')



INSERT INTO `store_materials` 
(`material_id`, `material_name`,
`material_code`, `measure_unit`, 
`total_quantity`, `low_normal_limit_quantity`, 
`requested_quantity`, `remain_quantity`, `status`, 
`refill_quantity`) VALUES ('2', 'Crashed Stones', 'CRS/F/2', 'cubic meters', '500', '200', '', '', '', '')

-- re-create maintain table 
-- CREATE TABLE `webuild`.
-- `maintain` (`id` INT(11) NOT NULL AUTO_INCREMENT , 
-- `material_name` VARCHAR(255) NOT NULL , 
-- `material_code` VARCHAR(255) NOT NULL , 
-- `current_quantity` INT(11) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `maintain` CHANGE `id` `maintain_id` INT(11) NULL AUTO_INCREMENT;

ALTER TABLE `maintain` CHANGE `maintain_id` `maintain_id` INT(11) NULL AUTO_INCREMENT;




CREATE TABLE `webuild`.`sendquotation` 
(`quotation_id` INT(11) NOT NULL , 
`material_ID` INT(11) NOT NULL , 
`material_name` VARCHAR(255) NOT NULL , 
`material_code` VARCHAR(255) NOT NULL , 
`batch_NO` VARCHAR(255) NOT NULL ,
`measure_Unit` VARCHAR(255) NOT NULL , 
`send_quantity` INT(11) NOT NULL , 
`unit_Price` INT(11) NOT NULL , 
`total_price` INT(11) NOT NULL , 
`quotation_issue_date` DATE NOT NULL ) ENGINE = InnoDB;

ALTER TABLE `sendquotation` CHANGE `quotation_id` `quotation_id` INT(11) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (`quotation_id`);
ALTER TABLE `sendquotation` ADD `decision` VARCHAR(255) NOT NULL AFTER `quotation_issue_date`;