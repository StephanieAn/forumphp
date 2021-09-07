# forumphp

Dans PHPMyAdmin:
===================

Création de la DB:
-------------------
CREATE DATABASE `Forum`

Création des tables :
----------------------
CREATE TABLE Users(
        `Id` INT PRIMARY KEY,
        `Username` VARCHAR(50) NOT NULL,
        `Avatar` varchar(1000) NOT NULL,
        `Email` VARCHAR(50) NOT NULL,
        `Password` VARCHAR(50) NOT NULL,
        `Signature` VARCHAR(1000),
        UNIQUE(Email, Username))

CREATE TABLE Boards(
        `Id`INT PRIMARY KEY,
        `Name` varchar(100) NOT NULL,
        `Description` varchar(500),
        `Development` varchar (50),
        `Smalltalk` varchar(100),
        `Events` varchar(100) )

CREATE TABLE Topics(
        `Id` INT PRIMARY KEY,
        `Creation_Date` DATE,
        `Author` INT NOT NULL,
        `IDBoard` INT NOT NULL,
        `State` BIT NULL DEFAULT 0)

CREATE TABLE Messages(
         `Id` INT PRIMARY KEY,
         `Content` varchar(5000),
         `Author` INT NOT NULL,
         `Creation_Date` DATE,
         `Edition_Date` TIMESTAMP)

Liaison des Tables entre elles:
-------------------------------

ALTER TABLE `Messages`
  ADD KEY `Author` (`Author`);

ALTER TABLE `Topics`
  ADD KEY `Author` (`Author`),
  ADD KEY `IDBoard` (`IDBoard`);


### Contraintes pour la table `Messages`

ALTER TABLE `Messages`
  ADD CONSTRAINT `Messages_ibfk_1` FOREIGN KEY (`Author`) REFERENCES `Users` (`Id`);

### Contraintes pour la table `Topics`

ALTER TABLE `Topics`
  ADD CONSTRAINT `Topics_ibfk_1` FOREIGN KEY (`Author`) REFERENCES `Users` (`Id`),
  ADD CONSTRAINT `Topics_ibfk_2` FOREIGN KEY (`IDBoard`) REFERENCES `Boards` (`Id`);