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


-- here
ALTER TABLE `complaint` CHANGE `remark` `remark` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL;

INSERT INTO `complaint` (`id`, `project_id`, `type`, `description`, `remark`, `status`) VALUES (NULL, `1`, 
`Quality of photograph`, `I had high expectations for the photographs quality, and unfortunately, it does not meet those expectations. `,
 NULL, `Pending`);
 INSERT INTO `complaint` (`id`, `project_id`, `type`, `description`, `remark`, `status`) VALUES (NULL, `1`, 
`Construction project delay`, `I\'m worried about the delays in our construction project. We\'re not getting enough updates on what\'s going on,
and unexpected problems are making things slow. `, NULL, `Pending`);



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
-- Generation Time: Dec 11, 2023 at 11:03 AM
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
('11', '100', '3', 'vvf', 'vdsv', 2);

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE `project_details` (
  `project_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `m_user_id` int(5) NOT NULL,
  `s_user_id` int(5) NOT NULL,
  `location` varchar(100) NOT NULL,
  `action` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_details`
--

INSERT INTO `project_details` (`project_id`, `model_id`, `customer_name`, `m_user_id`, `s_user_id`, `location`, `action`) VALUES
(1, 1, 'Thushanka Pramuditha', 1, 5, 'Unawatuna', 'ongoing'),
(2, 1, 'Dinushanka Shyamal', 1, 6, 'Karandeniya', 'ongoing'),
(3, 1, 'Ramidu Dulmin', 9, 5, 'Udugama', 'complete'),
(4, 2, 'Kasun Udara', 10, 3, 'Galle', 'ongoing'),
(5, 1, 'Naduni Jayasinghe', 1, 3, 'Bambalapitiya', 'complete');

-- --------------------------------------------------------

--
-- Table structure for table `project_dprs`
--

CREATE TABLE `project_dprs` (
  `dpr_id` int(5) NOT NULL,
  `project_id` int(5) NOT NULL,
  `s_user_id` int(5) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `dpr_action` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_dprs`
--

INSERT INTO `project_dprs` (`dpr_id`, `project_id`, `s_user_id`, `date`, `dpr_action`) VALUES
(1, 1, 5, '2023-12-08 11:09:51', 'approved'),
(2, 2, 6, '2023-12-08 11:09:51', 'done'),
(3, 1, 5, '2023-12-08 11:09:51', 'done'),
(4, 1, 5, '2023-12-08 11:09:51', 'done'),
(5, 2, 6, '2023-12-08 11:09:51', 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `project_tasks`
--

CREATE TABLE `project_tasks` (
  `project_id` int(5) NOT NULL,
  `task_id` int(5) NOT NULL,
  `sub_task_id` int(5) NOT NULL,
  `sub_task_name` varchar(100) NOT NULL,
  `sub_task_details` varchar(1000) NOT NULL,
  `start_date` date NOT NULL,
  `action` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_tasks`
--

INSERT INTO `project_tasks` (`project_id`, `task_id`, `sub_task_id`, `sub_task_name`, `sub_task_details`, `start_date`, `action`) VALUES
(0, 0, 0, '', '', '0000-00-00', ''),
(0, 0, 0, '', '', '0000-00-00', ''),
(0, 1, 1, '1', '1', '0000-00-00', ''),
(0, 1, 1, '1', '1', '0000-00-00', ''),
(0, 1, 1, '1', '1', '0000-00-00', ''),
(0, 1, 1, '1', '1', '0000-00-00', ''),
(0, 1, 1, '1', '1', '0000-00-00', ''),
(0, 1, 1, 'Excavation', 'Dig the foundation trenches according to the approved building plans and structural requirements', '0000-00-00', ''),
(0, 1, 1, 'Excavation', 'Dig the foundation trenches according to the approved building plans and structural requirements', '0000-00-00', ''),
(0, 2, 9, 'Wall Framing', 'Erect the exterior walls first, typically using lumber or steel studs, ensuring proper alignment and squareness. Install headers, sills, and cripple studs where necessary, following structural and design specifications.', '0000-00-00', ''),
(0, 2, 9, 'Wall Framing', 'Erect the exterior walls first, typically using lumber or steel studs, ensuring proper alignment and squareness. Install headers, sills, and cripple studs where necessary, following structural and design specifications.', '0000-00-00', ''),
(0, 1, 3, 'Pouring Concrete', 'Prepare the concrete mix according to the recommended proportions and quality standards. Pour the concrete into the excavated trenches and footings, ensuring even distribution and proper consolidation.', '0000-00-00', ''),
(0, 1, 1, 'Excavation', 'Dig the foundation trenches according to the approved building plans and structural requirements', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffid` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `nic` text DEFAULT NULL,
  `contactnumber` int(10) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `role` text DEFAULT NULL,
  `joineddate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffid`, `name`, `email`, `password`, `nic`, `contactnumber`, `address`, `city`, `role`, `joineddate`) VALUES
(1, 'T.A.P.Prathibapoorna', 'pramukhapoo@gmail.com', 'pramukha123', '200027801803', 769117180, '14,Thotupala Rd,Wadduwa', 'Wadduwa', 'ProjectVoordinator', '2023-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `sub_tasks`
--

CREATE TABLE `sub_tasks` (
  `task_id` int(5) NOT NULL,
  `sub_task_id` int(5) NOT NULL,
  `sub_task_name` varchar(30) NOT NULL,
  `sub_task_details` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_tasks`
--

INSERT INTO `sub_tasks` (`task_id`, `sub_task_id`, `sub_task_name`, `sub_task_details`) VALUES
(1, 1, 'Excavation', 'Dig the foundation trenches according to the approved building plans and structural requirements'),
(1, 2, 'Footings Preparation', 'Constructing footings involves following the precise instructions provided by a structural engineer to ensure they\'re appropriately sized and positioned to support the load-bearing walls. Using formwork, shape the footings and reinforce them with steel bars (rebar) for added strength as per engineering requirements. This process creates a solid and stable foundation capable of supporting the weight of the structure.'),
(1, 3, 'Pouring Concrete', 'Prepare the concrete mix according to the recommended proportions and quality standards. Pour the concrete into the excavated trenches and footings, ensuring even distribution and proper consolidation.'),
(1, 4, 'Curing and Setting', 'Allow sufficient time for the concrete to cure and gain strength. Implement appropriate curing methods like moist curing or applying curing compounds.\r\nMonitor the curing process and protect the concrete from extreme weather conditions or premature drying.\r\n'),
(1, 5, 'Backfilling and Compaction', 'Backfill the excavated area around the foundation with suitable soil, ensuring proper compaction to prevent settling.\r\nCompact the soil in layers to achieve the required density and stability.'),
(1, 6, 'Foundation Drainage', 'Install drainage systems like weeping tiles or French drains around the foundation to manage groundwater and prevent water accumulation. Ensure proper slope and connections to direct water away from the foundation.'),
(2, 8, 'Layout and Marking', 'Begin by marking the positions for walls, doorways, windows, and openings on the foundation, following the architectural plans. Ensure accurate measurements and alignment according to the floor plan.'),
(2, 9, 'Wall Framing', 'Erect the exterior walls first, typically using lumber or steel studs, ensuring proper alignment and squareness. Install headers, sills, and cripple studs where necessary, following structural and design specifications.'),
(2, 10, 'Floor Framing', 'Construct the floor structure by installing joists or trusses, creating a sturdy base for the flooring material. Attach rim joists, subflooring, and bracing as needed for stability and support.'),
(2, 11, 'Roof Framing', 'Build the roof structure by installing rafters or trusses, ensuring proper pitch and alignment according to the architectural design. Add ridge beams, collar ties, and braces to provide support and stability to the roof.'),
(2, 12, 'Window and Door Framing', 'Frame openings for windows and doors, ensuring proper headers, king studs, and cripple studs to support these openings.\r\nInstall window and door frames securely within the framed openings'),
(2, 13, 'Bracing and Sheathing', 'Install diagonal bracing to reinforce the structure against lateral forces like wind or earthquakes.\r\nApply sheathing materials (such as plywood or oriented strand board) to the exterior walls and roof for added strength and stability.'),
(2, 14, 'Inspections', 'Schedule inspections to ensure the framing work complies with building codes and safety regulations.\r\nAddress any identified issues or required corrections before proceeding to the next construction phase.'),
(3, 15, 'Siding Installation', 'Choose and install the selected siding material (vinyl, wood, fiber cement, brick, etc.) onto the exterior walls according to the architectural design. Cut and fit siding pieces accurately, ensuring proper overlap and alignment.'),
(3, 16, 'Stucco or Exterior Render', 'Apply stucco or exterior render to the walls for a durable and decorative finish.\r\nPrepare the surface, apply the base coats, and finish with the desired texture or color.'),
(3, 17, 'Brickwork or Masonry', 'Lay bricks or other masonry materials as per the design plan, using mortar to create a solid and visually appealing exterior.\r\nEnsure proper alignment, spacing, and structural integrity of the masonry work.'),
(3, 18, 'Trim and Molding Installation', 'Install exterior trim pieces, such as fascia boards, soffits, corner boards, and decorative moldings around windows and doors. Ensure proper cutting, fitting, and sealing to enhance the aesthetics and protect vulnerable areas from moisture.'),
(3, 19, 'Painting or Exterior Finishes', 'Apply paint or protective coatings to the exterior surfaces for color, weather resistance, and durability. Ensure proper priming, painting, or staining as per manufacturer\'s guidelines and design preferences'),
(3, 20, 'Weatherproofing and Sealing', 'Apply caulking or sealants around windows, doors, and other penetrations to prevent water infiltration and air leaks.\r\nCheck for gaps or openings and seal them appropriately to maintain the building envelope.'),
(3, 21, 'Gutter and Downspout Installat', 'Install gutters and downspouts to efficiently direct rainwater away from the house, preventing water damage to the foundation and exterior walls.\r\nEnsure proper slope, alignment, and secure attachment of the gutter system.'),
(3, 22, 'Exterior Lighting and Fixtures', 'Install exterior lighting fixtures, such as wall-mounted lights, floodlights, or decorative fixtures, to illuminate and enhance the house\'s exterior.'),
(3, 23, 'Final Inspections and Touch-up', 'Conduct a thorough inspection of the exterior finishing work to ensure it meets building codes, regulations, and design specifications. Perform any necessary touch-ups or corrections identified during inspections.');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `module_id` int(5) NOT NULL,
  `task_id` int(5) NOT NULL,
  `task_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`module_id`, `task_id`, `task_name`) VALUES
(1, 1, 'Foundation'),
(1, 2, 'Framing'),
(1, 3, 'Exterior Finishing'),
(1, 4, 'Windows and Doors Installation'),
(1, 5, 'Interior Work'),
(1, 6, 'Flooring Installation'),
(1, 7, 'Interior Finishing'),
(1, 8, 'Final Inspections and Touch-up'),
(1, 9, 'Cleanup and Landscaping');

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
  `role` varchar(30) NOT NULL,
  `contactnumber` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirm_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `nic`, `gender`, `role`, `contactnumber`, `address`, `username`, `email`, `password`, `confirm_password`) VALUES
(1, 'Pramukha', 'Thenuwara', '200027801803', 'male', 'manager', '0769117180', 'Seenigoda', 'thenuwara', 'pramukhapoo@gmail.com', '$2y$10$TGyHNK5bSx3UmLgFqT2YZuwj0gbnD3sPCK7c2m9CPWgeQXG3VvUKy', NULL),
(2, 'Rajith', 'Rantharaka', '200056901904', 'male', 'manager', '0777353594', 'Wathugedara', 'rajith', 'rajith@gmail.com', 'kjbdvkldjbfv6545', NULL),
(3, 'Kasun', 'Udara', '200056808042', 'male', 'supervisor', '0778959834', 'Ambalangoda', 'kasun', 'kasun@gmail.com', 'sfjbskjbksd64654', NULL),
(4, 'Prathibha', 'Poorna', '200161904908', 'male', 'supervisor', '0775484861', 'Galle', 'poorna', 'poorna@gmail.com', 'srfbjksfsdkjdoa654132', NULL),
(5, 'Thimesh', 'Madushanka', '20006570104', 'male', 'supervisor', '0717648232', 'Hikkaduwa', 'thimesh', 'thimesh@gmail.com', 'wefkjbskfljkndchdjfjkaf8465461', NULL),
(6, 'Charith', 'Deshan', '200054601602', 'male', 'supervisor', '0777656591', 'Alpitiya', 'charith', 'charith@gmail.com', 'sfsdhvbjzdbvoiajlsjfoasf68465651', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_details`
--
ALTER TABLE `project_details`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `project_tasks`
--
ALTER TABLE `project_tasks`
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
  ADD PRIMARY KEY (`staffid`);

--
-- Indexes for table `sub_tasks`
--
ALTER TABLE `sub_tasks`
  ADD PRIMARY KEY (`sub_task_id`),
  ADD KEY `task_id` (`task_id`),
  ADD KEY `sub_task_id` (`sub_task_id`),
  ADD KEY `sub_task_name` (`sub_task_name`),
  ADD KEY `sub_task_details` (`sub_task_details`(768));

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `module_id` (`module_id`),
  ADD KEY `task_id` (`task_id`),
  ADD KEY `task_name` (`task_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project_details`
--
ALTER TABLE `project_details`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_tasks`
--
ALTER TABLE `sub_tasks`
  MODIFY `sub_task_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
