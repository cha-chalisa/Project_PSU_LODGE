SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `Room` (
  `RoomID` int(10) NOT NULL,
  `RoomStatus` char(20),
  `RoomFloor` int(3) NOT NULL,
  `Price` int(20) NOT NULL,
  `CusID` int(10),
  `StaffID` int(10),
  PRIMARY KEY (`RoomID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `Room` (`RoomID`, `RoomStatus`, `RoomFloor`, `Price`, `CusID`, `StaffID`) VALUES
(101, NULL , 1, 3000,NULL,NULL),
(102, NULL , 1, 3000,NULL,NULL),
(103, 'unavailable', 1, 3000,11114,'101'),
(104, 'unavailable', 1, 3000,11111,'101'),

(201, NULL , 2, 3000,NULL,NULL),
(202, 'unavailable',2, 3000,11113,'102' ),
(203, NULL , 2, 3000,NULL,NULL),
(204, 'unavailable',2, 3000,11112,'102' ),

(301, 'unavailable', 3, 3000,11115,'103'),
(302, NULL , 3 , 3000,NULL,NULL),
(303, NULL , 3, 3000,NULL,NULL),
(304, 'unavailable', 3, 3000,11116,'103');




CREATE TABLE IF NOT EXISTS `Customer` (
  `CusID` int(10) NOT NULL AUTO_INCREMENT,
  `CFirstname` varchar(20) NOT NULL,
  `CLastname` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Tel` varchar(30) NOT NULL,
  `CAmount` int(10) NOT NULL,
  `DateCI` date NOT NULL,
  `DateCO` date NOT NULL,
  `RoomID` int(10) NOT NULL,
  PRIMARY KEY (`CusID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11117;

INSERT INTO `Customer` (`CusID`, `CFirstname`, `CLastname`, `Email`, `Tel`, `CAmount`,`DateCI`,`DateCO`,`RoomID`) VALUES
(11111, 'Chalisa ', 'Phetsithong', 'AAA@hotmail.com', '0745899747', 2, 20200320, 20200322,101),
(11112, 'Jaruwan', 'Lamai', 'Jaruwan@gmail.com', '0899788521', 1,20200321, 20200323,101),
(11113, 'Pawanrut', 'Sangmuang', 'Pawanrat@gmail.com', '0963257469', 3,20200321, 20200324,102),
(11114, 'Pongpan', 'Kijawat', 'Pong@hotmail.ac.th', 0748963587,2,20200321,20200324,102),
(11115, 'Kasem', 'KongKaew', 'Semsem@gmail.com', '0987563658', 1,20200322, 20200325,103),
(11116, 'Harry', 'Potter', 'Harry@gmail.com', '0899544786', 3,20200323, 20200326,103);




CREATE TABLE IF NOT EXISTS `Staff` (
  `StaffID` int(10) NOT NULL AUTO_INCREMENT,
  `Password` varchar(20) NOT NULL,
  `SFirstname` varchar(20) NOT NULL,
  `SLastname` varchar(20) NOT NULL,
 PRIMARY KEY (`StaffID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=103;


INSERT INTO `Staff` (`StaffID`,`Password`,`SFirstname`, `SLastname`) VALUES
(103, 'Tagolwan103', 'Tagolwan', 'Kaewmanee'),
(101, 'Sathani101', 'Sathani', 'Doemchai'),
(102, 'Atimay103', 'Atimay', 'Pengchai');





CREATE TABLE IF NOT EXISTS `CheckIN` (
  `CheckINID` int(10) NOT NULL AUTO_INCREMENT,
  `DateCI` date NOT NULL,
  `TimeCI` varchar(10) NOT NULL,
  `Amount` int(10) NOT NULL,
  `RoomID` int(10) NOT NULL,
  `CusID` int(10) NOT NULL ,
  `StaffID` int(10) NOT NULL,
   PRIMARY KEY (`CheckINID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=7;


INSERT INTO `CheckIN` (`CheckINID`,`DateCI`,`TimeCI`, `Amount`,`RoomID`,`CusID`,`StaffID`) VALUES
(1, 20200320, '13.30', 2, 101,11114,101),
(2, 20200321, '08.59', 2, 202,11111,101),
(3, 20200321, '09.50', 1, 303,11113,102),
(4, 20200321, '11.21', 3, 102,11112,102),
(5, 20200322, '15.59', 1, 201,11115,103),
(6, 20200323, '10.39', 3, 201,11116,103);




CREATE TABLE IF NOT EXISTS `CheckOUT` (
  `CheckOUTID` int(10) NOT NULL AUTO_INCREMENT,
  `DateCO` date NOT NULL,
  `TimeCO` varchar(10) NOT NULL,
  `RoomID` int(10) NOT NULL,
  `CusID` int(10) NOT NULL ,
  `StaffID` int(10) NOT NULL,
   PRIMARY KEY (`CheckOUTID`)
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=7;


INSERT INTO `CheckOUT` (`CheckOUTID`,`DateCO`,`TimeCO`, `RoomID`, `CusID`,`StaffID`) VALUES
(1, 20200322, '13.30', 101,11114,101),
(2, 20200323, '08.59', 202,11111,101),
(3, 20200324, '09.50', 303,11113,102),
(4, 20200324, '11.21', 102,11112,102),
(5, 20200325, '15.59', 201,11115,103),
(6, 20200326, '10.39', 201,11116,103);


CREATE TABLE IF NOT EXISTS `Contact` (
  `ConID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Message` text NOT NULL ,
   PRIMARY KEY (`ConID`)
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=4;

INSERT INTO `Contact` (`ConID`,`Name`,`Email`, `Subject`, `Message`) VALUES
(1, 'varee', 'ree11@email.com', 'well','Thank you for everything that So good.'),
(2, 'Dolphin', 'phinphin@gmail.com', 'sport','I want you to open Zone sport.'),
(3, 'dada', 'adads@gmail.com', 'price of room','So Expensive.');





