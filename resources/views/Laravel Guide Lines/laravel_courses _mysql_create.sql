CREATE TABLE `User` (
	`id` BINARY NOT NULL AUTO_INCREMENT,
	`email` VARCHAR(255) NOT NULL,
	`name` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Course` (
	`id` BINARY NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(255) NOT NULL,
	`totalBook` INT NOT NULL,
	`timeAndDate` INT NOT NULL,
	`price` FLOAT NOT NULL DEFAULT '0.00',
	`image` VARCHAR(255) NOT NULL,
	`content` TEXT NOT NULL,
	`link` TEXT NOT NULL,
	`duration` INT NOT NULL,
	`level` INT NOT NULL,
	`platform_id` INT NOT NULL,
	`submited_by` INT NOT NULL,
	`author_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Topic` (
	`id` BINARY NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Platform` (
	`id` BINARY NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Series` (
	`id` BINARY NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `course_series` (
	`id` BINARY NOT NULL AUTO_INCREMENT,
	`course_id` VARCHAR(255) NOT NULL,
	`series_id` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `course_topic` (
	`id` BINARY NOT NULL AUTO_INCREMENT,
	`course_id` INT NOT NULL,
	`topic_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Author` (
	`id` BINARY NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `Course` ADD CONSTRAINT `Course_fk0` FOREIGN KEY (`platform_id`) REFERENCES `Platform`(`id`);

ALTER TABLE `Course` ADD CONSTRAINT `Course_fk1` FOREIGN KEY (`submited_by`) REFERENCES `User`(`id`);

ALTER TABLE `Course` ADD CONSTRAINT `Course_fk2` FOREIGN KEY (`author_id`) REFERENCES `Author`(`id`);

ALTER TABLE `course_series` ADD CONSTRAINT `course_series_fk0` FOREIGN KEY (`course_id`) REFERENCES `Course`(`id`);

ALTER TABLE `course_series` ADD CONSTRAINT `course_series_fk1` FOREIGN KEY (`series_id`) REFERENCES `Series`(`id`);

ALTER TABLE `course_topic` ADD CONSTRAINT `course_topic_fk0` FOREIGN KEY (`course_id`) REFERENCES `Course`(`id`);

ALTER TABLE `course_topic` ADD CONSTRAINT `course_topic_fk1` FOREIGN KEY (`topic_id`) REFERENCES `Topic`(`id`);









