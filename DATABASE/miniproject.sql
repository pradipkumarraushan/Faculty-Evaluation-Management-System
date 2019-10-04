-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 04, 2019 at 11:43 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `last_login` datetime NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`, `last_login`) VALUES
(1, 'admin@admin.com', 'admin', '2019-10-02 23:52:41');

-- --------------------------------------------------------

--
-- Table structure for table `criteria`
--

DROP TABLE IF EXISTS `criteria`;
CREATE TABLE IF NOT EXISTS `criteria` (
  `criteria_id` int(11) NOT NULL,
  `criteria_name` varchar(200) NOT NULL,
  PRIMARY KEY (`criteria_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `criteria`
--

INSERT INTO `criteria` (`criteria_id`, `criteria_name`) VALUES
(1, '1. ACADEMIC ACTIVITIES  (Preserve all documents)'),
(2, '2. ACADEMIC SUPPORT (Preserve all documents)'),
(3, '3. RESEARCH ACTIVITIES (Preserve all documents)'),
(4, '4. EXTENSION AND CONSULTANCY (Preserve all documents)'),
(5, '5. ACADEMIC GROWTH/RECOGNITIONS/AWARDS( all documents needed)'),
(6, '6. GOVERNANCE AND LEADERSHIP');

-- --------------------------------------------------------

--
-- Table structure for table `facultyeval`
--

DROP TABLE IF EXISTS `facultyeval`;
CREATE TABLE IF NOT EXISTS `facultyeval` (
  `email_id` varchar(200) NOT NULL,
  `actual_score` float NOT NULL,
  `reduced_score` float NOT NULL,
  `weightage_value` float NOT NULL,
  `wx` float NOT NULL,
  `image` varchar(200) NOT NULL,
  `particular_id` int(11) NOT NULL,
  `criteria_id` int(11) NOT NULL,
  PRIMARY KEY (`email_id`,`particular_id`,`criteria_id`),
  KEY `fk_part` (`particular_id`),
  KEY `fk_crit` (`criteria_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

DROP TABLE IF EXISTS `notice`;
CREATE TABLE IF NOT EXISTS `notice` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Date` datetime NOT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `particular`
--

DROP TABLE IF EXISTS `particular`;
CREATE TABLE IF NOT EXISTS `particular` (
  `particular_id` int(11) NOT NULL,
  `criteria_id` int(11) NOT NULL,
  `particular_text` longtext NOT NULL,
  `particular_value` float NOT NULL,
  PRIMARY KEY (`particular_id`,`criteria_id`),
  KEY `fk_criteria` (`criteria_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `particular`
--

INSERT INTO `particular` (`particular_id`, `criteria_id`, `particular_text`, `particular_value`) VALUES
(1, 1, '<p><strong>STUDENT FEEDBACK (in 100)</strong></p><p><strong>(2017-2018)</strong></p>', 100),
(2, 1, '<p><strong>LIBRARY USAGE </strong></p>\r\n\r\n<p><strong>in college library </strong></p>\r\n\r\n<p><strong>80 hrs per year = 100 marks</strong></p>\r\n', 100),
(3, 1, '<p><strong>AVERAGE RESULT &nbsp;av.of previous odd and even SEMs</strong></p><p><strong>100 % = 100 marks&nbsp; </strong></p>', 100),
(4, 1, '<p><strong>CLASSES CONDUCTED</strong></p>\r\n\r\n<p><strong>100 % = 100 marks&nbsp; </strong></p>\r\n', 100),
(5, 2, '<p><strong>Teaching aids/techniques </strong></p>\r\n\r\n<p>No of PPT packages developed &nbsp;in the assessment yr and classes conducted -5 per each. &nbsp;</p>\r\n\r\n<p>(if total exceeds 40 it is treated as 10)</p>\r\n', 40),
(6, 2, '<p>No of value education programmes-1 per pgm</p><p>No of current affairs programmes&nbsp; -1 per pgm</p><p>(if total exceeds 50 it is treated&nbsp; as 10)</p>', 50),
(7, 2, '<p><strong>f. Student seminars and other co curricular activities.</strong></p><p>Student seminar-2 marks per each seminar (minimum duration 30 minutes) max 10 seminars</p><p><strong>g.</strong>Quiz /debate/group discussion/etc 10 mark per each (minimum duration 45 minutes)&nbsp; max 2 pgms</p><p>max&nbsp; 40 marks</p><p>if total exceeds 40 it is treated as 10</p>', 40),
(8, 2, '<p>h. No of TED lectures arranged &nbsp;, - 5 per each</p><p>i.No of EdX / Coursera lectures arranged - 5per each</p><p>j.No of virtual classes / Video classes arranged &nbsp;&nbsp;- 5 per each</p><p>(if total exceeds 20 it is treated as 10)</p>', 20),
(9, 2, '<p><strong>k.&nbsp;</strong> No of Self-Recorded&nbsp; lectures in the assessment year &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-10/each</p><p>(if total exceeds 20 it is treated as 10)</p>', 20),
(10, 2, '<p><strong>Steps taken for slow learners/advanced learners</strong></p><p>&nbsp;No of diagnostic Survey and remedial drill-2 marks per each</p><p>(if total exceeds 20 it is treated as 10)</p>', 20),
(11, 3, '<p>1<strong>.Research activities</strong></p><p>For Non PhDs</p><p>1.1Date of registration for PhD Degree</p><p>1.2 registration=10 marks upto 4 yrs,</p><p>1.3&nbsp; no of progress reports submitted per yr (upto 5 yrs.) &nbsp;-10 marks/report</p><p>1.4 For only PhD holders ,10 marks</p><p>1.6 PhD holders with guide-ship 30 marks</p><p>1.7&nbsp; No of PhD Students ( no marks)</p><p>(if &nbsp;total exceeds 30 ,it is treated as 10)</p>', 30),
(12, 3, '<p>2<strong>. Research Publications: (in the name of own institution)</strong></p><p>Papers published in National / International Journals: peer reviewed// refereed</p><p>2.a. In SCI (Science Citation Index Expanded) Journals-&nbsp; 100 each publication</p><p>2.b. In Scopus Indexed /web of science Journals - Other than those listed in (2.a above) 75each publication</p><p>2.c.&nbsp;&nbsp; 1.International journal(UGC Recognised)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp; 50 each publication</p><p>2.c National (UGC Recognised)&nbsp; 25 each publication</p><p>2.dTotal no of publications in last 5 yrs(no marks)</p><p>(For 1st co-author 50% of main author</p><p>For 2nd&nbsp; co-author 25% of main author)</p><p>&nbsp;</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ( if total exceeds 150 ,it is treated as 10)</p>', 150),
(13, 3, '<p><strong>3.Papers Presented national/international conferences</strong></p><p>3.a. International</p><p>if only presented 20 marks</p><p>(If full paper published in Springer, IEEE, Elsevier, ACM or Scopus index (other than the publications mentioned in criteria 2) -&nbsp; 50 marks</p>', 50),
(14, 3, '<p>4.<strong>Students publications in UGC Recognized journals</strong> -50 per each</p><p>presentation in seminars&nbsp; -25 per each</p><p>(if total exceeds 100 take it as 10)</p>', 100),
(15, 3, '<p>5<strong>.Research projects </strong></p><p><strong>if applied any -20 marks/each</strong></p><p>5.a. Minor research projects ongoing -25/each project for two years</p><p>5.b.Major research project on going -&nbsp;50 marks /each for three&nbsp; &nbsp;years</p><p>5. c. Other research projects ongoing</p><p>Grants</p><p>up to 2.5 lakh -25marks,</p><p>above 2.5to 5 lakhs -50 marks,</p><p>above 5 to 7.5 &nbsp;lakhs -75 marks</p><p>above 7.5 to 10lakhs - 90 marks</p><p>above 10lakhs - 100 marks</p><p>for co investigator 50% of marks allotted to principal investigator</p><p>No of SRPs (no marks)</p><p>if total exceeds 100 ,it is treated as 10</p>', 100),
(16, 4, '<p>1<strong>.Extension&nbsp; activity(Academic activities outside the campus academic talks/demonstrations)</strong></p><p>(one event max 3 staff) -10 per prog</p><p>if total exceeds 20 ,it is treated as 10</p>', 20),
(17, 4, '<p>2.<strong>Consultancy/outreach pgms&nbsp; (sharing subject knowledge with other academic institutions/ public) -</strong> 10 mark per each activity</p><p>if total exceeds 20 ,it is treated as 10</p>', 20),
(18, 4, '<p>3.No of expand lectures conducted in the yr 10 marks /pgm</p><p>4. No of faculty exchange programmes - 10 marks/pgm</p><p>if total exceeds 20 ,it is treated as 10</p>', 20),
(19, 4, '<p>5. <strong>Organization of seminars/conferences/workshops in the college.&nbsp; </strong></p><p>secretary/coordinator/convener-20&nbsp; per each</p><p>co coordinator/co-convener-15</p><p>Member of organizing committee- 10 per each</p><p>if total exceeds 20 ,it is treated as 10</p>', 20),
(20, 5, '<p>1. (a) No of seminars/workshop/conferences attended outside the campus</p><p>International/national &nbsp;&ndash;10 per event</p><p>State&ndash;5 per event</p><p>(b) No of seminars/workshop/conferences attended inside the campus &ndash; 2 per event</p><p>if total exceeds 10 ,it is treated as 10</p>', 10),
(21, 5, '<p>2.No of refresher/orientation/training &nbsp;course</p><p>less than 3 days -5 marks</p><p>more than 3 days &ndash; 10marks</p><p>if total exceeds 10 ,it is treated as 10</p>', 10),
(22, 5, '<p>3.&nbsp; <strong>General Publications (subject/domain related)</strong></p><p>a.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No of Books authored-100 /book,</p><p>b.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No of books co-authered-75 marks/book</p><p>c.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No of General Article published in magazines / newspapers ( min 2 pages in A4 size)&ndash; 5/article&nbsp;&nbsp;</p><p>if total exceeds 100 ,it is treated as 10</p>', 100),
(23, 5, '<p>4.No. of lectures &nbsp;given in non academic conferences/programmes as invitee:</p><p>International 25/National 15 / State level 10 / University 5</p><p>if total exceeds 20 ,it is treated as 10</p>', 20),
(24, 5, '<p>5. Awards(other than phd) / recognition received</p><p>In.National-50,National -30,State-20,others /-10</p><p>if total exceeds 10 ,it is treated as 10</p>', 10),
(25, 5, '<p>1.Member in committees of various universities/other Institutions (BOE/BOS /etc) &ndash; 10 Marks</p><p>2.Contribution to our alumni our pride-5 per contribution</p><p>if total exceeds 10 it is treated as 10</p>', 10),
(26, 6, '<p><strong>(Note -If the total marks exceed 50, it is to be treated as 10)</strong></p><p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (a) Vice Principal/Deans/Registrars- 40 marks</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;(b) HOD/IQAC/NIRF Coordinator &ndash; 20 marks</p><p>2. College level Committees/NCC/NSS/Red Cross / RR/Hobby club/Placement cell etc.</p><p>3.Chairperson/Coordinator &ndash; If attended 100% meetings then 15 Marks otherwise %</p><p>4.Members &ndash; If attended 100% meetings then 10 Marks otherwise %</p><p>4. Mentorship- (documents needed)</p><p># students Counseled&nbsp; - (2/student)</p><p># of any sp. Pgms conducted to mentees-5 per pgm</p><p># Interaction meetings conducted- &nbsp;if 8 meetings held&nbsp; &nbsp;then 30 marks otherwise %</p><p>5.CL and RH remaining /calendar yr</p><p>2 marks per leave &nbsp;available&nbsp;</p>', 50);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `empid` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `branch` varchar(40) NOT NULL,
  `image` varchar(50) NOT NULL,
  `dob` datetime NOT NULL,
  `status` varchar(200) NOT NULL,
  `forgot_password` varchar(400) NOT NULL,
  `last_login` datetime NOT NULL,
  `email_verified` tinyint(1) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `weightage`
--

DROP TABLE IF EXISTS `weightage`;
CREATE TABLE IF NOT EXISTS `weightage` (
  `particular_id` int(11) NOT NULL,
  `criteria_id` int(11) NOT NULL,
  `weightage_value` float NOT NULL,
  PRIMARY KEY (`particular_id`,`criteria_id`),
  KEY `fk_particular` (`particular_id`),
  KEY `fk_criteria_id` (`criteria_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weightage`
--

INSERT INTO `weightage` (`particular_id`, `criteria_id`, `weightage_value`) VALUES
(1, 1, 15),
(2, 1, 10),
(3, 1, 10),
(4, 1, 5),
(5, 2, 2),
(6, 2, 1),
(7, 2, 2),
(8, 2, 2),
(9, 2, 2),
(10, 2, 1),
(11, 3, 5),
(12, 3, 9),
(13, 3, 6),
(14, 3, 1),
(15, 3, 9),
(16, 4, 3),
(17, 4, 2),
(18, 4, 1),
(19, 4, 4),
(20, 5, 1),
(21, 5, 1),
(22, 5, 1),
(23, 5, 0.5),
(24, 5, 1),
(25, 5, 0.5),
(26, 6, 5);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `facultyeval`
--
ALTER TABLE `facultyeval`
  ADD CONSTRAINT `fk_crit` FOREIGN KEY (`criteria_id`) REFERENCES `criteria` (`criteria_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_email` FOREIGN KEY (`email_id`) REFERENCES `user` (`email`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_part` FOREIGN KEY (`particular_id`) REFERENCES `particular` (`particular_id`) ON UPDATE CASCADE;

--
-- Constraints for table `particular`
--
ALTER TABLE `particular`
  ADD CONSTRAINT `fk_criteria` FOREIGN KEY (`criteria_id`) REFERENCES `criteria` (`criteria_id`) ON UPDATE CASCADE;

--
-- Constraints for table `weightage`
--
ALTER TABLE `weightage`
  ADD CONSTRAINT `fk_criteria_id` FOREIGN KEY (`criteria_id`) REFERENCES `criteria` (`criteria_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_particular` FOREIGN KEY (`particular_id`) REFERENCES `particular` (`particular_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
