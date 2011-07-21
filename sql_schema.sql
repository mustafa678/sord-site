/*
CREATE TABLE `tbl_posts` (
        `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `title` VARCHAR(128) NOT NULL,
        `content` TEXT NOT NULL,
        `author_id` int(11) NOT NULL REFERENCES tbl_users(id) , 
        `createtime` DATETIME NOT NULL, 
        `update_time` DATETIME NOT NULL, 
        `lang` CHAR (2) NOT NULL,
        KEY `author_id` (`author_id`)
) CHARSET=utf8;
*/

CREATE TABLE `tbl_posts`(
	`id` INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`title` VARCHAR(128) NOT NULL,
	`content` TEXT NOT NULL,
	`tags` TEXT,
	`status` INTEGER NOT NULL,
	`create_time` DATETIME NOT NULL,
	`update_time` DATETIME NOT NULL,
	`lang` INTEGER NOT NULL,
	`author_id` INTEGER NOT NULL,
	CONSTRAINT FK_post_author FOREIGN KEY (author_id)
		REFERENCES tbl_users (id) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
