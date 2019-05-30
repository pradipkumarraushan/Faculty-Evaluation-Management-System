-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2018 at 10:32 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

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

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`, `last_login`) VALUES
(1, 'admin@admin.com', 'admin', '2018-04-15 18:24:18');

-- --------------------------------------------------------

--
-- Table structure for table `criteria`
--

CREATE TABLE `criteria` (
  `criteria_id` int(11) NOT NULL,
  `criteria_name` varchar(200) NOT NULL
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

CREATE TABLE `facultyeval` (
  `id` int(11) NOT NULL,
  `fk_userid` bigint(20) NOT NULL,
  `actual_score` float NOT NULL,
  `reduced_score` float NOT NULL,
  `weightage_value` float NOT NULL,
  `wx` float NOT NULL,
  `image` varchar(200) NOT NULL,
  `particular_id` int(11) NOT NULL,
  `criteria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultyeval`
--

INSERT INTO `facultyeval` (`id`, `fk_userid`, `actual_score`, `reduced_score`, `weightage_value`, `wx`, `image`, `particular_id`, `criteria_id`) VALUES
(1, 1, 100, 10, 15, 150, '01.jpg', 1, 1),
(2, 1, 50, 5, 10, 50, '02.jpg', 2, 1),
(3, 1, 60, 6, 10, 60, '03.jpg', 3, 1),
(4, 1, 100, 10, 5, 50, '04.jpg', 4, 1),
(5, 1, 0, 0, 2, 0, '05.jpg', 5, 2),
(6, 16, 100, 10, 15, 150, '01.jpg', 1, 1),
(7, 16, 50, 5, 10, 50, '02.jpg', 2, 1),
(8, 1, 0, 0, 2, 0, '', 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `user`, `subject`, `Description`, `Date`) VALUES
(1, 'shubhamsisodia907@gmail.com', 'reg', 'reg suc', '2018-02-18 12:26:58');

-- --------------------------------------------------------

--
-- Table structure for table `particular`
--

CREATE TABLE `particular` (
  `particular_id` int(11) NOT NULL,
  `criteria_id` int(11) NOT NULL,
  `particular_text` longtext NOT NULL,
  `particular_value` float NOT NULL
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

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
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
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `empid`, `pass`, `mobile`, `gender`, `branch`, `image`, `dob`, `status`, `forgot_password`, `last_login`) VALUES
(1, 'Pradip Kumar Raushan', 'pradeepraushan@gmail.com', '2SD14CS076', '21232f297a57a5a743894a0e4a801fc3', 9035867192, 'Male', 'CSE', '09.Photo.jpg', '1995-11-23 00:00:00', 'allowed', 'ff2e1001f1343b80a038c276efee022b', '2018-04-14 14:09:48'),
(6, 'Rohit Kumar', 'rohit@k.com', '2SD14CS092', '21232f297a57a5a743894a0e4a801fc3', 9738851325, 'Male', 'CSE', 'Rohit.jpg', '1996-06-15 00:00:00', 'blocked', 'f59ee39aa7b3273de9c91000b22b8cd4', '2018-03-10 01:51:37'),
(15, 'Shubham', 'shubhamsisodia907@gmail.com', '2sd14me100', '81dc9bdb52d04dc20036dbd8313ed055', 9686012457, 'Male', 'CSE', 'IMG_20170910_165437.jpg', '1996-12-21 00:00:00', 'allowed', 'f59ee39aa7b3273de9c91000b22b8cd4', '0000-00-00 00:00:00'),
(16, 'Admin', 'admin@sdmcet.ml', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1234567891, 'Male', 'CSE', 'images.jpg', '1916-09-13 00:00:00', 'allowed', '209284cb7e86973669e1ef9b0053492af7', '2018-03-17 17:24:08');

-- --------------------------------------------------------

--
-- Table structure for table `weightage`
--

CREATE TABLE `weightage` (
  `weightage_id` int(11) NOT NULL,
  `particular_id` int(11) NOT NULL,
  `criteria_id` int(11) NOT NULL,
  `weightage_value` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weightage`
--

INSERT INTO `weightage` (`weightage_id`, `particular_id`, `criteria_id`, `weightage_value`) VALUES
(1, 1, 1, 15),
(2, 2, 1, 10),
(3, 3, 1, 10),
(4, 4, 1, 5),
(5, 5, 2, 2),
(6, 6, 2, 1),
(7, 7, 2, 2),
(8, 8, 2, 2),
(9, 9, 2, 2),
(10, 10, 2, 1),
(11, 11, 3, 5),
(12, 12, 3, 9),
(13, 13, 3, 6),
(14, 14, 3, 1),
(15, 15, 3, 9),
(16, 16, 4, 3),
(17, 17, 4, 2),
(18, 18, 4, 1),
(19, 19, 4, 4),
(20, 20, 5, 1),
(21, 21, 5, 1),
(22, 22, 5, 1),
(23, 23, 5, 0.5),
(24, 24, 5, 1),
(25, 25, 5, 0.5),
(26, 26, 6, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `criteria`
--
ALTER TABLE `criteria`
  ADD PRIMARY KEY (`criteria_id`);

--
-- Indexes for table `facultyeval`
--
ALTER TABLE `facultyeval`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_part` (`particular_id`),
  ADD KEY `fk_crit` (`criteria_id`),
  ADD KEY `fk_userid` (`fk_userid`) USING BTREE;

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `particular`
--
ALTER TABLE `particular`
  ADD PRIMARY KEY (`particular_id`),
  ADD KEY `fk_criteria` (`criteria_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);
ALTER TABLE `user` ADD FULLTEXT KEY `name` (`name`);

--
-- Indexes for table `weightage`
--
ALTER TABLE `weightage`
  ADD PRIMARY KEY (`weightage_id`),
  ADD KEY `fk_particular` (`particular_id`),
  ADD KEY `fk_criteria_id` (`criteria_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facultyeval`
--
ALTER TABLE `facultyeval`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `facultyeval`
--
ALTER TABLE `facultyeval`
  ADD CONSTRAINT `fk_crit` FOREIGN KEY (`criteria_id`) REFERENCES `criteria` (`criteria_id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_part` FOREIGN KEY (`particular_id`) REFERENCES `particular` (`particular_id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_userid` FOREIGN KEY (`fk_userid`) REFERENCES `user` (`id`) ON UPDATE NO ACTION;

--
-- Constraints for table `particular`
--
ALTER TABLE `particular`
  ADD CONSTRAINT `fk_criteria` FOREIGN KEY (`criteria_id`) REFERENCES `criteria` (`criteria_id`) ON UPDATE NO ACTION;

--
-- Constraints for table `weightage`
--
ALTER TABLE `weightage`
  ADD CONSTRAINT `fk_criteria_id` FOREIGN KEY (`criteria_id`) REFERENCES `criteria` (`criteria_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_particular` FOREIGN KEY (`particular_id`) REFERENCES `particular` (`particular_id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;