SHOW DATABASES;

DROP DATABASE IF EXISTS yxia226assign2db;
CREATE DATABASE yxia226assign2db;

USE yxia226assign2db;

GRANT USAGE ON *.* TO 'ta'@'localhost';
DROP USER 'ta'@'localhost';
CREATE USER 'ta'@'localhost' IDENTIFIED BY 'cs3319';
GRANT ALL PRIVILEGES ON yxia226assign2db.* TO 'ta'@'localhost';
FLUSH PRIVILEGES;
SHOW TABLES;

CREATE TABLE Westcscourses(
course_number VARCHAR(10) NOT NULL,
course_name VARCHAR(100),
Weight FLOAT(8),
Suffix VARCHAR(5),
PRIMARY KEY(course_number)
);




CREATE TABLE Universities(
Unique_ID INT(2) NOT NULL,
Official_name VARCHAR(50),
City VARCHAR(20),
Province_code VARCHAR(10),
Nick_name VARCHAR(20),
PRIMARY KEY(Unique_ID)
);






CREATE TABLE Outsidecourses(
course_code VARCHAR(20),
course_name VARCHAR(100),
Offer_year INT,
Weight FLOAT(8), 
University_ID INT(2),
PRIMARY KEY(course_code,University_ID),
FOREIGN KEY(University_ID) REFERENCES Universities(Unique_ID)
);







CREATE TABLE Equivalent(
Westerncourse VARCHAR(10) NOT NULL,
Outsidecourse VARCHAR(20),
University_ID INT(2),
Date date,
PRIMARY KEY(Westerncourse,Outsidecourse,University_ID),
Foreign key(Westerncourse) references Westcscourses(course_number) ON DELETE CASCADE,
Foreign key(Outsidecourse) references Outsidecourses(course_code) ON DELETE CASCADE,
Foreign key(University_ID) references Outsidecourses(University_ID) ON DELETE CASCADE
	);

SHOW TABLES;





