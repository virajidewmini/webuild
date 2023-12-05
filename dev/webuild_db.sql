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

ALTER TABLE `complaint` CHANGE `remark` `remark` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL;

INSERT INTO `complaint` (`id`, `project_id`, `type`, `description`, `remark`, `status`) VALUES (NULL, '1', 
'Quality of photograph', 'I had high expectations for the photographs quality, and unfortunately, it does not meet those expectations. ',
 NULL, 'Pending');
 INSERT INTO `complaint` (`id`, `project_id`, `type`, `description`, `remark`, `status`) VALUES (NULL, '1', 
'Construction project delay ', 'I\'m worried about the delays in our construction project. We\'re not getting enough updates on what\'s going on,
and unexpected problems are making things slow. ', NULL, 'Pending');




//USERS TABLE 

CREATE TABLE user (
  id int PRIMARY KEY AUTO_INCREMENT,
  firstname VARCHAR(255),
  lastname VARCHAR(255), 
  nic VARCHAR(255), 
  contactnumber VARCHAR(255), 
  address VARCHAR(255),
  username VARCHAR(255),
  emailaddress VARCHAR(255),
  password VARCHAR(255),
  confirm_password VARCHAR(255) 
);

INSERT INTO `user` (`id`, `firstname`, `lastname`, `nic`, `contactnumber`, `address`, `username`, `email`, `password`) VALUES (NULL, 'kasun', 'kasun', '200290098767', '1', '1', NULL, 'k@gmail.com', 'kasunkasun')
//staff Table

INSERT INTO `staff`(`staffid`, `name`, `email`, `password`, `NIC`, `Address`, `City`, `role`) VALUES ('PM1','G.N.S Wickrama','gaveesha@gmail.com','gnswickrama','200139905649','14,Thotupala Rd,Wadduwa','Wadduwa','ProjectManager')