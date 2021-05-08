CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(256) NOT NULL, phone VARCHAR(32) NOT NULL, password VARCHAR(256) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
CREATE UNIQUE INDEX user_email_idx ON user (email);
CREATE UNIQUE INDEX user_phone_idx ON user (phone);
INSERT INTO user  VALUES
                        (null , '0@onboard.demo', '841234567890', 'Qwerty@123'),
                        (null , '1@onboard.demo', '841234567891','Qwerty@123'),
                        (null , '2@onboard.demo', '841234567892','Qwerty@123'),
                        (null , '3@onboard.demo', '841234567893','Qwerty@123'),
                        (null , '4@onboard.demo', '841234567894','Qwerty@123'),
                        (null , '5@onboard.demo', '841234567895','Qwerty@123'),
                        (null , '6@onboard.demo', '841234567896','Qwerty@123'),
                        (null , '7@onboard.demo', '841234567897','Qwerty@123'),
                        (null , '8@onboard.demo', '841234567898','Qwerty@123'),
                        (null , '9@onboard.demo', '841234567899','Qwerty@123');