DROP SCHEMA IF EXISTS Nespresso;
CREATE SCHEMA IF NOT EXISTS Nespresso;
USE Nespresso;
-- 'technology', 'range', 'title', 'text', 'intensity', 'country'
CREATE TABLE Kapsel(
	Navn VARCHAR(30),
    Rekke VARCHAR(50),
    Teknologi VARCHAR(20),
    Smak VARCHAR(40),
    Intensitet INT,
    Størrelse INT,
    Opphav VARCHAR(40),
    CONSTRAINT KapselPK PRIMARY KEY(Navn, Teknologi));
    
DROP USER IF EXISTS 'py'@'localhost';
-- Create the 'Dekksjef' user with the specified password
CREATE USER 'py'@'localhost' IDENTIFIED BY 'pswd';


-- Grant necessary privileges to the 'Dekksjef' user for the 'Dekkhotell' database
GRANT ALL PRIVILEGES ON Nespresso.* TO 'py'@'localhost';

DROP USER IF EXISTS 'site'@'192.168.10.100';
CREATE USER 'site'@'192.168.10.100' IDENTIFIED WITH mysql_native_password BY 'pswd';
GRANT ALL PRIVILEGES ON Nespresso.* TO 'site'@'192.168.10.100';

