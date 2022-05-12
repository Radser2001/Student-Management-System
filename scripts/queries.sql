--
-- Table structure for table `admin`
--
CREATE TABLE `admin` (
  `AID` int(11) NOT NULL AUTO_INCREMENT,
  `adminUsername` varchar(10) NOT NULL,
  `adminEmail` char(100) NOT NULL,
  `adminPassword` char(100) NOT NULL,
  PRIMARY KEY (`AID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4


--
-- Table structure for table `student`
--
CREATE TABLE `student` (
  `studentID` int(11) NOT NULL AUTO_INCREMENT,
  `studentName` varchar(255) NOT NULL,
  `studentAge` int(11) NOT NULL,
  `studentAddress` char(255) NOT NULL,
  `studentImgPath` char(255) NOT NULL,
  `studentDOB` date NOT NULL,
  `studentEmail` char(255) NOT NULL,
  `studentPassword` char(20) NOT NULL,
  PRIMARY KEY (`studentID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4


--
-- Dumping data for table `student`
--
INSERT INTO `Student` (`studentID`, `studentName`, `studentAge`, `studentAddress`, `studentImgPath`, `studentDOB`, `studentEmail`, `studentPassword`) VALUES
(1, 'Isabella Swan', 20, 'Forks', 'images/student/img1.png', '2001-09-19', 'bella@gmail.com', 'bella@2001' )

--
-- Dumping data for table `admin`
--
INSERT INTO `Admin` (`AID`, `adminUsername`, `adminEmail`, `adminPassword`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin')