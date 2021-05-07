CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(256) NOT NULL, password VARCHAR(256) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
CREATE UNIQUE INDEX username ON user (username);
INSERT INTO user VALUES(null , 'demo1', 'Qwerty@123');
INSERT INTO user VALUES(null , 'demo2', 'Qwerty@123');