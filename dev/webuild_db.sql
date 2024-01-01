CREATE DATABASE IF NOT EXISTS webuild;

USE webuild;

-- maintain database 
CREATE TABLE `webuild`.`maintain`
 (`id` INT(11) NOT NULL ,
 `material_name` VARCHAR(255) NOT NULL ,
 `material_code` VARCHAR(255) NOT NULL , 
 `remain_quantity` INT(11) NOT NULL , 
 `requested_quantity` INT(11) NOT NULL , 
 PRIMARY KEY (`id`)) ENGINE = InnoDB;

INSERT INTO `maintain` 
(`id`, `material_name`, 
`material_code`, 
`remain_quantity`, 
`requested_quantity`) 
VALUES ('1', 'Cement', 'M001CE', '1250', '750');

INSERT INTO `maintain` 
(`id`, `material_name`, 
`material_code`, `remain_quantity`, 
`requested_quantity`) 
VALUES ('2', 'Brick', 'M002BR', '11500', '13500')


-- house models database 
CREATE TABLE `webuild`.`house_models`
 (`id` INT(11) NOT NULL , 
 `name` VARCHAR(255) NOT NULL ,
 `no_room` INT(11) NOT NULL , 
 `no_kitchen` INT(11) NOT NULL ,
 `no_floor` INT(11) NOT NULL , 
 `kitchen_tile` VARCHAR(255) NOT NULL ,
 `bathroom_tile` VARCHAR(255) NOT NULL ,
 `dinien_tile` VARCHAR(255) NOT NULL , 
 `wall_color` VARCHAR(255) NOT NULL , 
 `minimum_area` INT(11) NOT NULL , 
 `parking_space` INT(11) NOT NULL , 
 `tile_color` VARCHAR(255) NOT NULL ,
 `description` VARCHAR(255) NOT NULL ,
 `front_img` BLOB NOT NULL ,
 `bath_img` BLOB NOT NULL ,
 `inside_img` BLOB NOT NULL ,
 PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `webuild`.`land`
 (`id` INT(11) NOT NULL , 
 `name` VARCHAR(255) NOT NULL , 
 `lane` VARCHAR(255) NOT NULL , 
 `town` VARCHAR(255) NOT NULL ,
 `district` VARCHAR(255) NOT NULL , 
 `floor_plan` BLOB NOT NULL , 
 `road_map` BLOB NOT NULL , 
 `block_plan` BLOB NOT NULL , 
 PRIMARY KEY (`id`)) ENGINE = InnoDB;

 INSERT INTO `land` (`id`, `name`, `lane`, `town`, `district`) VALUES ('1', 'Araliya Lands', 'Mithuru Road', 'Galle', 'Galle')


CREATE TABLE `webuild`.`complaint` 
( `id` INT NOT NULL AUTO_INCREMENT , 
`project_id` INT(11) NOT NULL , 
`type` VARCHAR(255) NOT NULL , 
`description` LONGTEXT NOT NULL , 
`remark` LONGTEXT NOT NULL , 
`status` VARCHAR(10) NOT NULL , 
PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `complaint` CHANGE `remark` `remark` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL;

INSERT INTO `complaint` (`id`, `project_id`, `type`, `description`, `remark`, `status`) VALUES (NULL, '1', 
'Quality of photograph', 'I had high expectations for the photographs quality, and unfortunately, it does not meet those expectations. ',
 NULL, 'Pending');
 INSERT INTO `complaint` (`id`, `project_id`, `type`, `description`, `remark`, `status`) VALUES (NULL, '1', 
'Construction project delay ', 'I\'m worried about the delays in our construction project. We\'re not getting enough updates on what\'s going on,
and unexpected problems are making things slow. ', NULL, 'Pending');




