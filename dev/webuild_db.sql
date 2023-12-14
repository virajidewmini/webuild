CREATE DATABASE IF NOT EXISTS webuild;

USE webuild;

CREATE TABLE `webuild`.`maintain` 
(`id` INT(11) NOT NULL ,
 `material_name` VARCHAR(255) NOT NULL ,
 `material_code` VARCHAR(255) NOT NULL , 
 `current_quantity` INT(11) NOT NULL ,
 `required_quantity` INT(11) NOT NULL ) ENGINE = InnoDB;

ALTER TABLE `maintain` CHANGE `id` `id` INT(11) NULL AUTO_INCREMENT, add PRIMARY KEY (`id`);

INSERT INTO `maintain` (`id`, `material_name`, `material_code`, `current_quantity`, `required_quantity`) VALUES ('', 'cement', 'BI001', '300', '150');
INSERT INTO `maintain` (`id`, `material_name`, `material_code`, `current_quantity`, `required_quantity`) VALUES ('2', 'Sand', 'BI002', '500', '200');


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




