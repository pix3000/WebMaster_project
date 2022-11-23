SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;

CREATE TABLE `member` (
 id varchar(32) not null PRIMARY KEY,
 password varchar(32) not null,
 name varchar(32) not null,
 email varchar(32) not null
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `member` (id, password, name, email) VALUES
("HJ", 1234, "곽희진", "pix3000@naver.com");
COMMIT;
