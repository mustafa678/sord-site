CREATE TABLE tbl_user (
        id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(128) NOT NULL,
        password VARCHAR(128) NOT NULL,
        email VARCHAR(128) NOT NULL
);

CREATE TABLE tbl_section (
        id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(128) NOT NULL,
        description VARCHAR(250) NOT NULL,
);

CREATE TABLE tbl_post (
        id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
        title VARCHAR(128) NOT NULL,
        content TEXT NOT NULL,
        author INTEGER NOT NULL, /* maybe add foreign key here to tbl_user */
        create_time DATETIME NOT NULL, /* make sure to get the syntax right */
        update_time DATETIME NOT NULL, /* make sure to get the syntax right */
        section INTEGER NOT NULL,
        lang CHAR (2) NOT NULL,
);
        
