DROP DATABASE IF EXISTS gallery;
CREATE DATABASE gallery;

USE gallery;

DROP TABLE IF EXISTS images;
CREATE TABLE images (
	id SERIAL,
	link VARCHAR(255) NOT NULL UNIQUE,
	description VARCHAR(255) NOT NULL
);

INSERT INTO images (link, description) VALUES
('1.jpeg', 'smallworld'), 
('2.jpeg', 'lostworld'),
('3.jpeg', 'butterfly'),
('4.jpeg', 'bottleworld'),
('5.jpeg', 'bookworld'),
('6.jpg', 'universe'),
('7.jpg', 'missing part');