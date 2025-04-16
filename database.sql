CREATE DATABASE karate_academy;

USE karate_academy;

CREATE TABLE registrations (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  age INT,
  phone VARCHAR(15),
  time VARCHAR(50)
);
