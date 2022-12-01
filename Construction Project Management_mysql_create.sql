CREATE TABLE `project` (
	`id` bigint NOT NULL AUTO_INCREMENT,
	`name` varchar(100),
	`started_date` DATE,
	`end_date` DATE,
	`id_location` bigint,
	`budget` bigint,
	`profit` bigint,
	`size` double,
	`status` int,
	`description` longtext,
	`img` varchar(255),
	PRIMARY KEY (`id`)
);

CREATE TABLE `unit` (
	`id` bigint NOT NULL AUTO_INCREMENT,
	`name` varchar(100),
	`created_date` DATE,
	PRIMARY KEY (`id`)
);

CREATE TABLE `user` (
	`id` bigint NOT NULL AUTO_INCREMENT,
	`fullname` varchar(255),
	`join_date` DATE,
	`phone_number` varchar(10),
	`avatar` varchar(255),
	`id_role` bigint,
	`id_unit` bigint,
	`account` varchar(20),
	`password` varchar(255),
	PRIMARY KEY (`id`)
);

CREATE TABLE `role` (
	`id` bigint NOT NULL AUTO_INCREMENT,
	`name` bigint,
	PRIMARY KEY (`id`)
);

CREATE TABLE `stage` (
	`id` bigint NOT NULL AUTO_INCREMENT,
	`name` varchar(255),
	`is_enabled` BOOLEAN,
	PRIMARY KEY (`id`)
);

CREATE TABLE `project_stage` (
	`id` bigint NOT NULL AUTO_INCREMENT,
	`id_stage` bigint,
	`id_project` bigint,
	`status` INT,
	PRIMARY KEY (`id`)
);

CREATE TABLE `project_unit` (
	`id` bigint NOT NULL AUTO_INCREMENT,
	`id_project` bigint,
	`id_unit` bigint,
	PRIMARY KEY (`id`)
);

CREATE TABLE `location` (
	`id` bigint NOT NULL AUTO_INCREMENT,
	`name` varchar(255),
	`detail` longtext,
	PRIMARY KEY (`id`)
);

ALTER TABLE `project` ADD CONSTRAINT `project_fk0` FOREIGN KEY (`id_location`) REFERENCES `location`(`id`);

ALTER TABLE `user` ADD CONSTRAINT `user_fk0` FOREIGN KEY (`id_role`) REFERENCES `role`(`id`);

ALTER TABLE `user` ADD CONSTRAINT `user_fk1` FOREIGN KEY (`id_unit`) REFERENCES `unit`(`id`);

ALTER TABLE `project_stage` ADD CONSTRAINT `project_stage_fk0` FOREIGN KEY (`id_stage`) REFERENCES `stage`(`id`);

ALTER TABLE `project_stage` ADD CONSTRAINT `project_stage_fk1` FOREIGN KEY (`id_project`) REFERENCES `project`(`id`);

ALTER TABLE `project_unit` ADD CONSTRAINT `project_unit_fk0` FOREIGN KEY (`id_project`) REFERENCES `project`(`id`);

ALTER TABLE `project_unit` ADD CONSTRAINT `project_unit_fk1` FOREIGN KEY (`id_unit`) REFERENCES `unit`(`id`);









