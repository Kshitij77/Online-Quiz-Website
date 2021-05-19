-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 19, 2021 at 10:12 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(500) CHARACTER SET utf8 NOT NULL,
  `contact` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `contact`) VALUES
(2, 'Kshitij jaiswal', 'kshitijjaiswal87159@gmail.com', 'c8df4a42221813273670c0df65150e7f', '6394621806'),
(5, 'Harsh Jaiswal', '18bcs2158@cuchd.in', '8a750bc2113991b4f7537f32592cc847', '8400590126');

-- --------------------------------------------------------

--
-- Table structure for table `commonquizfeedback`
--

DROP TABLE IF EXISTS `commonquizfeedback`;
CREATE TABLE IF NOT EXISTS `commonquizfeedback` (
  `SNo` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `quiz_id` int(255) NOT NULL,
  `quiz_name` varchar(255) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  PRIMARY KEY (`SNo`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commonsubjectfeedback`
--

DROP TABLE IF EXISTS `commonsubjectfeedback`;
CREATE TABLE IF NOT EXISTS `commonsubjectfeedback` (
  `SNo` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `subject_id` int(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  PRIMARY KEY (`SNo`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(255) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(255) NOT NULL,
  `admin_id` int(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `admin_id`, `admin_name`) VALUES
(13, 'Programming Languages', 2, 'Kshitij jaiswal'),
(12, 'Web Development', 5, 'Harsh Jaiswal');

-- --------------------------------------------------------

--
-- Table structure for table `coursefeedback`
--

DROP TABLE IF EXISTS `coursefeedback`;
CREATE TABLE IF NOT EXISTS `coursefeedback` (
  `SNo` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `course_id` int(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `admin_id` int(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  PRIMARY KEY (`SNo`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursefeedback`
--

INSERT INTO `coursefeedback` (`SNo`, `user_id`, `user_name`, `course_id`, `course_name`, `feedback`, `admin_id`, `admin_name`) VALUES
(5, 4, 'Rohit jais', 13, 'Programming Languages', 'This quiz in this course are very good', 2, 'Kshitij jaiswal');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `SNo` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quiz_name` varchar(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `score` int(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`SNo`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`SNo`, `user_id`, `name`, `quiz_name`, `subject_name`, `course_name`, `score`, `date`) VALUES
(31, 3, 'Kshitij Jaiswal', 'Constructor', 'Java', 'Programming Languages', 90, '2021-04-27'),
(30, 3, 'Kshitij Jaiswal', 'Constructor', 'Java', 'Programming Languages', 80, '2021-04-27'),
(28, 4, 'Rohit jais', 'Constructor', 'Java', 'Programming Languages', 80, '2021-04-26'),
(29, 4, 'Rohit jais', 'Basic Java', 'Java', 'Programming Languages', 80, '2021-04-26'),
(26, 3, 'Kshitij Jaiswal', 'Constructor', 'Java', 'Programming Languages', 80, '2021-04-24'),
(25, 5, 'Shivaay Jaiswal', 'Constructor', 'Java', 'Programming Languages', 80, '2021-04-24'),
(24, 5, 'Shivaay Jaiswal', 'Constructor', 'Java', 'Programming Languages', 70, '2021-04-24'),
(23, 3, 'Kshitij Jaiswal', 'Try Quiz ', 'Try Subject', 'Try course', 70, '2021-04-24'),
(22, 3, 'Kshitij Jaiswal', 'Basic Java', 'Java', 'Programming Languages', 80, '2021-04-24'),
(32, 5, 'Shivaay Jaiswal', 'Basic Java', 'Java', 'Programming Languages', 100, '2021-05-04'),
(36, 4, 'Rohit jais', 'Constructor', 'Java', 'Programming Languages', 70, '2021-05-04'),
(37, 4, 'Rohit jais', 'Basic Java', 'Java', 'Programming Languages', 90, '2021-05-04'),
(38, 4, 'Rohit jais', 'Constructor', 'Java', 'Programming Languages', 80, '2021-05-04'),
(39, 3, 'Kshitij Jaiswal', 'Constructor', 'Java', 'Programming Languages', 60, '2021-05-04'),
(45, 4, 'Rohit jais', 'Basic Java', 'Java', 'Programming Languages', 70, '2021-05-11');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `question_id` int(255) NOT NULL,
  `question_name` varchar(1000) NOT NULL,
  `quiz_id` int(255) NOT NULL,
  `quiz_name` varchar(1000) NOT NULL,
  `option1` varchar(1000) NOT NULL,
  `option2` varchar(1000) NOT NULL,
  `option3` varchar(1000) DEFAULT NULL,
  `option4` varchar(1000) DEFAULT NULL,
  `answer_name` varchar(1000) NOT NULL,
  `userans` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_id`, `question_name`, `quiz_id`, `quiz_name`, `option1`, `option2`, `option3`, `option4`, `answer_name`, `userans`) VALUES
(73, 9, 'Which of the following property is used as the shorthand property for the padding properties?', 25, 'CSS', 'padding-left', 'padding-right', 'padding', 'All of the above', 'padding', 'False.'),
(54, 1, 'CSS stands for?', 25, 'CSS', 'Cascade style sheets', 'Color and style sheets', 'Cascading style sheets', 'None of the above', 'Cascading style sheets', 'False'),
(46, 3, 'What is false about constructor?', 23, 'Constructor', 'Constructors cannot be synchronized in Java', 'Java does not provide default copy constructor', 'Constructor can have a return type', 'â€œthisâ€ and â€œsuperâ€ can be used in a constructor', 'Constructor can have a return type', 'null'),
(31, 8, 'What invokes a thread\'s run() method?', 20, 'Basic Java', 'JVM invokes the thread\'s run() method when the thread is initially executed.', 'Main application running the thread.', 'start() method of the thread class.', 'None of the above.', 'JVM invokes the thread\'s run() method when the thread is initially executed.', 'None of the above.'),
(29, 6, 'Can a constructor be made private?', 20, 'Basic Java', 'True.', 'False.', '', '', 'True.', 'False.'),
(30, 7, 'Static binding uses which information for binding?', 20, 'Basic Java', 'type.', 'object.', 'Both of the above.', 'None of the above.', 'type.', 'type.'),
(28, 5, 'What is instance variable?', 20, 'Basic Java', 'Instance variables are static variables within a class but outside any method.', 'Instance variables are variables defined inside methods, constructors or blocks.', 'Instance variables are variables within a class but outside any method.', 'None of the above.', 'Instance variables are variables within a class but outside any method.', 'Instance variables are variables within a class but outside any method.'),
(27, 4, 'Which of the following is false about String?', 20, 'Basic Java', 'String is immutable.', 'String can be created using new operator.', 'String is a primary data type.', 'None of the above.', 'String is a primary data type.', 'String is a primary data type.'),
(25, 2, 'What is the default value of Boolean variable?', 20, 'Basic Java', 'true', 'false', 'null', 'not defined', 'false', 'false'),
(26, 3, 'What is the default value of String variable?', 20, 'Basic Java', '\"\" ', '\'\' ', 'null', 'not defined', 'null', 'null'),
(24, 1, 'Objects are stored on Stack?', 20, 'Basic Java', 'True', 'False', '', '', 'False', 'False'),
(32, 9, 'Can try statements be nested?', 20, 'Basic Java', 'True.', 'False.', '', '', 'True.', 'False.'),
(33, 10, 'What is currentThread()?', 20, 'Basic Java', 'It is a Thread public static method used to obtain a reference to the current thread.', 'It is a thread\'s instance method used to get thread count.', 'It is a object\'s public static method used obtain a reference to the current thread.', 'It is a object\'s instance method used to get thread count.', 'It is a Thread public static method used to obtain a reference to the current thread.', 'Compilation error'),
(45, 2, 'What is true about private constructor?', 23, 'Constructor', 'Private constructor ensures only one instance of a class exist at any point of time', 'Private constructor ensures multiple instances of a class exist at any point of time', 'Private constructor eases the instantiation of a class', 'Private constructor allows creating objects in other classes', 'Private constructor ensures only one instance of a class exist at any point of time', 'false'),
(44, 1, 'What would be the behaviour if this() and super() used in a method?', 23, 'Constructor', 'Runtime error', 'Throws exception', 'compile time error', 'Runs successfully', 'compile time error', 'False'),
(47, 4, 'What is true about Class.getInstance()?', 23, 'Constructor', 'Class.getInstance calls the constructor', 'Class.getInstance is same as new operator', 'Class.getInstance needs to have matching constructor', 'Class.getInstance creates object if class does not have any constructor', 'Class.getInstance creates object if class does not have any constructor', 'String is a primary data type.'),
(48, 5, 'What is true about constructor?', 23, 'Constructor', 'It can contain return type', 'It can take any number of parameters', 'It can have any non access modifiers', 'Constructor cannot throw an exception', 'It can take any number of parameters', 'Instance variables are variables within a class but outside any method.'),
(49, 6, 'Abstract class cannot have a constructor.', 23, 'Constructor', 'True', 'False', '', '', 'False', 'False.'),
(50, 7, 'What is true about protected constructor?', 23, 'Constructor', 'Protected constructor can be called directly', 'Protected constructor can only be called using super()', 'Protected constructor can be used outside package', 'protected constructor can be instantiated even if child is in a different package', 'Protected constructor can only be called using super()', 'type.'),
(51, 8, 'What is not the use of â€œthisâ€ keyword in Java?', 23, 'Constructor', 'Passing itself to another method', 'Calling another constructor in constructor chaining', 'Referring to the instance variable when local variable has the same name', 'Passing itself to method of the same class', 'Passing itself to method of the same class', 'None of the above.'),
(52, 9, 'What would be the behaviour if one parameterized constructor is explicitly defined?', 23, 'Constructor', 'Compilation error', 'Compilation succeeds', 'Runtime error', 'Compilation succeeds but at the time of creating object using default constructor, it throws compilation error', 'Compilation succeeds but at the time of creating object using default constructor, it throws compilation error', 'False.'),
(53, 10, 'What would be behaviour if the constructor has a return type?', 23, 'Constructor', 'Compilation error', 'Runtime error', 'Compilation and runs successfully', 'Only String return type is allowed', 'Compilation error', 'Compilation error'),
(55, 2, 'The HTML attribute used to define the inline styles is?', 25, 'CSS', 'style', 'styles', 'class', 'None of the above', 'style', 'false'),
(56, 3, 'The property in CSS used to change the background color of an element is ?', 25, 'CSS', 'bgcolor', 'color', 'background-color', 'All of the above', 'background-color', 'null'),
(57, 4, 'The property in CSS used to change the text color of an element is?', 25, 'CSS', 'bgcolor', 'color', 'background-color', 'All of the above', 'color', 'String is a primary data type.'),
(58, 5, 'The CSS property used to control the element\'s font-size is?', 25, 'CSS', 'text-style', 'text-size', 'font-size', 'None of the above', 'font-size', 'Instance variables are variables within a class but outside any method.'),
(59, 6, 'The HTML attribute used to define the internal stylesheet is?', 25, 'CSS', '<style>', 'style', '<link>', '<script>', '<style>', 'False.'),
(60, 7, 'Which of the following CSS property is used to set the background image of an element?', 25, 'CSS', 'background-attachment', 'background-image', 'background-color', 'None of the above', 'background-image', 'type.'),
(61, 1, 'The programming language that has the ability to create new data types is called___.', 24, 'Basic C++', 'Overloaded', 'Encapsulated', 'Reprehensible', 'Extensible', 'Extensible', 'False'),
(62, 2, 'The C++ language is ______ object-oriented language.', 24, 'Basic C++', 'Pure Object oriented', 'Not Object oriented', 'Semi Object-oriented or Partial Object-oriented', 'None of the above', 'Semi Object-oriented or Partial Object-oriented', 'false'),
(70, 8, 'Which of the following is the correct syntax to display the hyperlinks without any underline?', 25, 'CSS', 'a {text-decoration : underline;}', 'a {decoration : no-underline;}', 'a {text-decoration : none;}', 'None of the above', 'a {text-decoration : none;}', 'None of the above.'),
(63, 3, 'Which of the following is the address operator?', 24, 'Basic C++', '@', '#', '&', '%', '&', 'null'),
(64, 4, 'Which of the following is the original creator of the C++ language?', 24, 'Basic C++', 'Dennis Ritchie', 'Ken Thompson', 'Bjarne Stroustrup', 'Brian Kernighan', 'Bjarne Stroustrup', 'String is a primary data type.'),
(65, 1, 'The term PHP is an acronym for PHP:_______________.', 29, 'Basic PHP', 'Hypertext Preprocessor', 'Hypertext multiprocessor', 'Hypertext markup Preprocessor', 'Hypertune Preprocessor', 'Hypertext Preprocessor', 'False'),
(66, 2, 'PHP files have a default file extension of_______.', 29, 'Basic PHP', '.html', '.xml', '.php', '.hphp', '.php', 'false'),
(67, 3, 'In which year php was created?', 29, 'Basic PHP', '1993', '1994', '1995', '1996', '1994', 'null'),
(68, 4, 'Which of the following is the correct syntax of php?', 29, 'Basic PHP', '<?php >', '<php >', '?php ?', '<?php ?>', '<?php ?>', 'String is a primary data type.'),
(69, 5, 'Which of the below statements is equivalent to $sub -= $sub?', 29, 'Basic PHP', '$sub = $sub', '$sub = $sub -$sub', '$sub = $sub - 1', '$sub = $sub - $sub - 1', '$sub = $sub -$sub', 'Instance variables are variables within a class but outside any method.');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `quiz_id` int(255) NOT NULL AUTO_INCREMENT,
  `quiz_name` varchar(255) NOT NULL,
  `subject_id` int(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `course_id` int(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `NOQ` int(255) NOT NULL,
  `teacher_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`quiz_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quiz_id`, `quiz_name`, `subject_id`, `subject_name`, `course_id`, `course_name`, `NOQ`, `teacher_id`, `name`) VALUES
(25, 'CSS', 26, 'HTML/CSS', 12, 'Web Development', 9, 8, 'Priyanka Jaiswal'),
(24, 'Basic C++', 28, 'C++', 13, 'Programming Languages', 4, 8, 'Priyanka Jaiswal'),
(21, 'HTML', 26, 'HTML/CSS', 12, 'Web Development', 0, 7, 'Shourya Jaiswal'),
(22, 'Database Handling', 32, 'PHP', 12, 'Web Development', 0, 7, 'Shourya Jaiswal'),
(23, 'Constructor', 25, 'Java', 13, 'Programming Languages', 10, 8, 'Priyanka Jaiswal'),
(20, 'Basic Java', 25, 'Java', 13, 'Programming Languages', 10, 7, 'Shourya Jaiswal'),
(26, 'Basic Bootstrap', 29, 'Bootstrap', 12, 'Web Development', 0, 8, 'Priyanka Jaiswal'),
(27, 'Basic Python', 31, 'Python', 13, 'Programming Languages', 0, 9, 'Ajit Jaiswal'),
(28, 'Linked List', 28, 'C++', 13, 'Programming Languages', 0, 9, 'Ajit Jaiswal'),
(29, 'Basic PHP', 32, 'PHP', 12, 'Web Development', 5, 9, 'Ajit Jaiswal');

-- --------------------------------------------------------

--
-- Table structure for table `quizfeedback`
--

DROP TABLE IF EXISTS `quizfeedback`;
CREATE TABLE IF NOT EXISTS `quizfeedback` (
  `SNo` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `quiz_id` int(255) NOT NULL,
  `quiz_name` varchar(255) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `teacher_id` int(255) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  PRIMARY KEY (`SNo`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quizfeedback`
--

INSERT INTO `quizfeedback` (`SNo`, `user_id`, `user_name`, `quiz_id`, `quiz_name`, `feedback`, `teacher_id`, `teacher_name`) VALUES
(4, 3, 'Kshitij Jaiswal', 23, 'Constructor', 'The Java Quiz is amazing!!!\r\nWaiting for a advanced level of java quiz.', 8, 'Priyanka Jaiswal'),
(6, 3, 'Kshitij Jaiswal', 20, 'Basic Java', 'Java Quiz was amazing.', 7, 'Shourya Jaiswal'),
(7, 4, 'Rohit jais', 23, 'Constructor', 'The quiz was amazing.', 8, 'Priyanka Jaiswal');

-- --------------------------------------------------------

--
-- Table structure for table `quiztech`
--

DROP TABLE IF EXISTS `quiztech`;
CREATE TABLE IF NOT EXISTS `quiztech` (
  `id` int(255) NOT NULL,
  `que` text NOT NULL,
  `option 1` varchar(222) NOT NULL,
  `option 2` varchar(222) NOT NULL,
  `option 3` varchar(222) NOT NULL,
  `option 4` varchar(222) NOT NULL,
  `ans` varchar(222) NOT NULL,
  `userans` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiztech`
--

INSERT INTO `quiztech` (`id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `userans`) VALUES
(1, 'What does PHP stand for?', 'Preprocessed Hypertext Page', 'Hypertext Markup Language', 'Hypertext Preprocessor', 'Hypertext Transfer Protocol', 'Hypertext Preprocessor', 'Hypertext Preprocessor'),
(2, 'What will be the value of $var? ', '0', '1', '2', 'NULL', '0', '0'),
(3, ' ____________ function in PHP Returns a list of response headers sent (or ready to send)', 'header', 'headers_list', 'header_sent', 'header_send', 'headers_list', 'header_sent'),
(4, 'Which of the following is the Server Side Scripting Language?', 'HTML', 'CSS', 'JS', 'PHP', 'PHP', 'HTML'),
(5, 'From which website you download this source code?', 'Softglobe.net', 'w3school.com', 'technopoints.co.in', 'php.net', 'technopoints.co.in', 'technopoints.co.in');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(255) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(255) NOT NULL,
  `course_id` int(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `teacher_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`, `course_id`, `course_name`, `teacher_id`, `name`) VALUES
(28, 'C++', 13, 'Programming Languages', 8, 'Priyanka Jaiswal'),
(26, 'HTML/CSS', 12, 'Web Development', 7, 'Shourya Jaiswal'),
(25, 'Java', 13, 'Programming Languages', 7, 'Shourya Jaiswal'),
(29, 'Bootstrap', 12, 'Web Development', 8, 'Priyanka Jaiswal'),
(31, 'Python', 13, 'Programming Languages', 9, 'Ajit Jaiswal'),
(32, 'PHP', 12, 'Web Development', 9, 'Ajit Jaiswal');

-- --------------------------------------------------------

--
-- Table structure for table `subjectfeedback`
--

DROP TABLE IF EXISTS `subjectfeedback`;
CREATE TABLE IF NOT EXISTS `subjectfeedback` (
  `SNo` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `subject_id` int(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `teacher_id` int(255) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  PRIMARY KEY (`SNo`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjectfeedback`
--

INSERT INTO `subjectfeedback` (`SNo`, `user_id`, `user_name`, `subject_id`, `subject_name`, `feedback`, `teacher_id`, `teacher_name`) VALUES
(6, 4, 'Rohit jais', 25, 'Java', 'Waiting for more quizzes of this subject', 7, 'Shourya Jaiswal'),
(5, 3, 'Kshitij Jaiswal', 28, 'C++', 'Waiting eagerly for the quizzes of this subject.', 8, 'Priyanka Jaiswal');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `contact` varchar(255) NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `name`, `email`, `password`, `contact`) VALUES
(8, 'Priyanka Jaiswal', 'jaiswalpriyanka14@gmail.com', '4e82db9f46d289fd0f863cc104a3865a', '7985245689'),
(7, 'Shourya Jaiswal', 'cu.18bcs2158@gmail.com', '7aad599a7e30c1d7832a114cdd86bc69', '9898989898'),
(9, 'Ajit Jaiswal', 'ajitjais30@gmail.com', '232d9526f27b67ecac487604a430f7a0', '9919757123'),
(12, 'Debmani', 'de12345@gmail.com', 'e7a8e3346666dceb71714a99240bafb6', '9898989898'),
(13, 'Yuvraj Singh', 'vghn@ghgh.com', '274c40b31c3090f5fd735b8021effb36', '9898989898');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `password`, `contact`, `college`) VALUES
(4, 'Rohit jais', 'rj1234@gmail.com', 'a4463fd2509a9a1f68a9ff3f011c70f1', '8052101072', 'Chandigarh University'),
(3, 'Kshitij Jaiswal', 'kshitijkumar728@gmail.com', 'c8df4a42221813273670c0df65150e7f', '6394621806', 'Chandigarh University'),
(5, 'Shivaay Jaiswal', 'shivu123@gmail.com', '7aad599a7e30c1d7832a114cdd86bc69', '7963218579', 'Chandigarh University');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
