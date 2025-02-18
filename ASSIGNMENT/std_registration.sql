-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 11, 2025 at 04:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `std_mgt_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `std_registration`
--

CREATE TABLE `std_registration` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  `stream` varchar(30) NOT NULL,
  `semester` tinyint(4) NOT NULL,
  `address` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `pin` varchar(30) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `std_registration`
--

INSERT INTO `std_registration` (`id`, `first_name`, `last_name`, `date_of_birth`, `stream`, `semester`, `address`, `city`, `pin`, `contact_number`, `email`) VALUES
(1, ' Nidhiben', 'Agath', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8734053930', 'shitalagath35@gmail.com'),
(2, ' Viraj', 'Agath', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8141014108', 'virajagath123@gmail.com'),
(3, ' Diya', 'Ahuja', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9924963080', 'nriset@gmail.com.com'),
(4, ' Dev', 'Antroliya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8200539434', 'devantroliya@gmail.com'),
(5, ' Mahima', 'Bagda', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9327858173', 'bagdagovind775@gmail.com'),
(6, ' Mahek', 'Bambhaniya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9725593317', 'mahekbambhaniya2007@gmail.com'),
(7, ' Mital', 'Bapodara', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9978700658', 'bapodravajshi255@gmail.com'),
(8, ' Pratap', 'Bapodra', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9104440948', 'pratapbapodra007@gmail.com'),
(9, ' Isha', 'Bathvar', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '7227066412', 'bathwarparth734@gmail.com'),
(10, ' Vaishaliben', 'Bharadava', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '7046931355', 'VAISHALIBHARADVA4@GMAIL.COM'),
(11, ' Darshit', 'Bhatt', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '7990617283', 'atbhatt.1@gmail.com'),
(12, ' Anam', 'Bhatti', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9714914926', 'bmohyudin@gmail.com'),
(13, ' Radhika', 'Bhatti', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '6353367372', 'bhattidinesa@gmail.com'),
(14, ' Hetan', 'Bhayani', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9773491791', 'bhayanihetan@gmail.com'),
(15, ' Riddhi', 'Bhogayta', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9067456571', 'diptibhogayta@gmail.com'),
(16, ' Abhishek', 'Bhutiya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9586024606', 'abhishekbhutiya@gmail.com'),
(17, ' Meet', 'Bhuva', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9909062680', 'bhuvam723@gmail.com'),
(18, ' Divyesh', 'Bokhiriya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9664825807', 'divyeshbokhiriya0@gmail.com'),
(19, ' Karan', 'Bokhiriya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '7862845134', 'bokhiriyakaran6@gmail.com'),
(20, ' Karan', 'Bokhiriya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9586789968', 'karanbokhiriya00@gmail.com'),
(21, ' Hetvi', 'Chandarana', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '7016810646', 'chandaranahetvi640@gmail.com'),
(22, ' Devyani', 'Chauhan', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '7016719167', 'devyanichauhan262@gmail.com'),
(23, ' Vishw', 'Chhatrala', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '6356369575', 'vishwchhatrala2306@gmail.com'),
(24, ' Riya', 'Chitroda', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9265308760', 'prajapatiriya642@gmail.com'),
(25, ' Payal', 'Dasa', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9726435959', 'ramdedasa0987@gmail.com'),
(26, ' Dipesh', 'Dave', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '7096220892', 'dipeshdave83@gmail.com'),
(27, ' Yash', 'Dhokiya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9023663783', 'dhokiyayash78@gmail.com'),
(28, ' Mohammad', 'Gadhkai', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', 'Ronakbhai', '8733079650 application3366@gmail.com'),
(29, ' Vimal', 'Gami', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9875217659', 'gamivimalbhaya@gmail.com'),
(30, ' Parthbhai', 'Gareja', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8347467228', 'parthgareja18@gmail.com'),
(31, ' Ram', 'Gareja', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '6354845043', 'garejaram641@gmail.com'),
(32, ' Bhargavi', 'Ghaghada', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '6351145188', 'sanjayghaghada990@gmail.com'),
(33, ' Jignasa', 'Ghumaliya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9979677118', 'ghumaliyajigna16@gmail.com'),
(34, ' Leelavanti', 'Ghumaliya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9313656020', 'mohanjghumaliya@gmail.com'),
(35, ' Sujal', 'Gohel', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '7016209998', 'sujalgohel996@gmail.com'),
(36, ' Kavya', 'Golvelkar', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9664558499', 'hgolvelkar@gmail.com'),
(37, ' Aartiben', 'Goraniya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '7863075477', 'keshugoraniya534@gmail.com'),
(38, ' Jignasa', 'Goswami', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '7567166908', 'goswamijignasha33@gmail.com'),
(39, ' Priyalben', 'Jadav', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9624817564', 'anushajadav84@gmail.com'),
(40, ' Riddhiben', 'Jadeja', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '6354529098', 'riddhijadeja07@gmail.com'),
(41, ' Dhwani', 'Joshi', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8347555673', 'hirenjoshi5673@gmail.com'),
(42, ' Daiveek', 'Jungi', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9328395230', 'daiveekjungi07@gmail.com'),
(43, ' Darshan', 'Jungi', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8758703001', 'darshanjungi0@gmail.com'),
(44, ' Manasvi', 'Jungi', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8530592877', 'dipikajungi13@gmail.com'),
(45, ' Megha', 'Jungi', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9714652124', 'amangohel343@gmail.com'),
(46, ' Tejal', 'Kadachha', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9909689681', 'ranmaljadeja124@gmail.com'),
(47, ' Yogitaben', 'Kadavala', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '6352093815', 'prajalkadavala@gmail.com'),
(48, ' Kailash', 'Kadchha', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9023119758', 'kailashjadeja50@gmail.com'),
(49, ' Avisa', 'Kanakiya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9662429913', 'drvrgit2@gmail.com'),
(50, ' Dhaval', 'Karavadara', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '6354849552', 'dhavalmer531@gmail.com'),
(51, ' Dhaval', 'Karavadra', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9265330022', 'dhavalkaravadra9265@gmail.com'),
(52, ' Priyanshu', 'Kariya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '7778077783', 'priyanshukariya86@gmail.com'),
(53, ' Sahil', 'Keshvala', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8780980493', 'sahilkeshvala44@gmail.com'),
(54, ' Ajay', 'Keshwala', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9313883096', 'keshwalaajay27@gmail.com'),
(55, ' Rajesh', 'Keshwala', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9265575069', 'keshwalarajesh03@gmail.com'),
(56, ' Bhumika', 'Khodiyar', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9824943149', 'nimishvaghela1111@gmail.com'),
(57, ' Ishita', 'Khunti', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8849887985', 'kisankhunti095@gmail.com'),
(58, ' Jayshri', 'Khunti', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8780643484', 'lakhmankhunti99@gmail.com'),
(59, ' Nagajan', 'Khunti', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9875053405', 'drvrgit@gmail.com'),
(60, ' Niralee', 'Khunti', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '7859827930', 'khuntikrupa@gmail.com'),
(61, ' Prakash', 'Khunti', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '6355931510', 'prakashkhunti18@gmail.com'),
(62, ' Rajesh', 'Khunti', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9316186454', 'rajeshkhunti450@gmail.com'),
(63, ' Ranjit', 'Khunti', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '6352454574', 'rk63524545@gmail.com'),
(64, ' Sameer', 'Khunti', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '6359451351', 'sameerkhunti4@gmail.com'),
(65, ' Sejalben', 'Khunti', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9316959782', 'khuntisejal131@gmail.com'),
(66, ' Shetal', 'Khunti', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9313113557', 'setalkhunti@gmail.com'),
(67, ' Aala', 'Kodiyatar', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8780356892', 'kodiyateraala@gmail.com'),
(68, ' Hamir', 'Kodiyatar', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '7600188452', 'hmvanda9@gmail.com'),
(69, ' Jugal', 'Kodiyatar', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9157291583', 'kodiyatarjugal09@gmail.com'),
(70, ' Kishan', 'Kodiyatar', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '6355098395', 'kishankodiyatar26@gmail.com'),
(71, ' Bhakti', 'Kothari', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9824216023', 'nagendrakothari6@gmail.com'),
(72, ' Zeel', 'Kotia', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '7874880843', 'zeelkotia593@gmail.com'),
(73, ' Zarna', 'Kotiya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8128851557', 'zarnakotiya30@gmail.com'),
(74, ' Madhav', 'Kuchhadiya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9265440648', 'madhavkuchadiya4@gmail.com'),
(75, ' Manish', 'Kuchhadiya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8320918492', 'mkuchhdiyq@gmail.com'),
(76, ' Raju', 'Kuchhadiya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8160351605', 'kuchhadiyar24@gmail.com'),
(77, ' Jayraj', 'Lalani', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8200783400', 'jayrajlalani123@gmail.com'),
(78, ' Mahek', 'Lukka', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9428522785', 'mahekmaheshlukka@gmail.com'),
(79, ' Jay', 'Madhvi', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9510443811', 'piyushmadhavi108@gmail.com'),
(80, ' Meet', 'Makawana', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8849029292', 'makvanameet006@gmail.com'),
(81, ' Abhay', 'Makvana', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9510452814', 'abhaymakvana71@gmail.com'),
(82, ' Neel', 'Malam', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9724889597', 'www.malamyash21@gmail.com'),
(83, ' Dhairya', 'Modha', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8758377611', 'modhadhairya7@gmail.com'),
(84, ' Hetvi', 'Modha', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8160565599', 'shantihmodha@gmail.com'),
(85, ' Harshali', 'Modhavadiya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '7041642433', 'harsalimodhavadiya@gmail.com'),
(86, ' Mayuri', 'Modhavadiya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8200550073', 'modhvadiyamayur8@gmail.com'),
(87, ' Rahul', 'Modhavadiya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9510663172', 'bhimamodhavadiya447@gmail.com'),
(88, ' Raju', 'Modhavadiya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8160514696', 'rajumodhvadiya555@gmail.com'),
(89, ' Vanraj', 'Modhavadiya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9313555714', 'modhavadiyavanraj64@gmail.com'),
(90, ' Ronak', 'Modhvadiya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '7862058965', 'modhavadiyaronak222@gmail.com'),
(91, ' Isha', 'Modhwadia', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8849426894', 'ishamodhwadia@gmail.com'),
(92, ' Dharmesh', 'Modhwadiya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8866336150', 'dmodhavadiya0@gmail.com'),
(93, ' Zankhana', 'Mokariya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9638779096', 'utsavmokariya06@gmail.com'),
(94, ' Aehamad', 'Muniya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9974249620', 'milandigitalstudio786@gmail.com'),
(95, ' Hirenbhai', 'Nanera', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8200395436', 'nriset@yahoo.com'),
(96, ' Jiya', 'Nimavat', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9265188072', 'nimavatchandreshbhai@gmail.com'),
(97, ' Akash', 'Odedara', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9265737333', 'akashodi761@gmail.com'),
(98, ' Dileep', 'Odedara', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8849445121', 'dilip.maher3012@gmail.com'),
(99, ' Hiral', 'Odedara', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8511957137', 'hodedra4444@gmail.com'),
(100, ' Jaymal', 'Odedara', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9327870312', 'odedrajaymal9831@gmail.com'),
(101, ' Khushi', 'Odedara', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '6351745921', 'sandipodedara123@gmail.com'),
(102, ' Khushiben', 'Odedara', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9870017647', 'kamleshodedara5343@gmail.com'),
(103, ' Mital', 'Odedara', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8780238970', 'mitalodedara20@gmail.com'),
(104, ' Parth', 'Odedara', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9925933038', 'odedaraparth758@gmail.com'),
(105, ' Raj', 'Odedara', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8320542433', 'rajodedra416@gmail.com'),
(106, ' Rajbhai', 'Odedara', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '7016724746', 'rajodedra00009@gmail.com'),
(107, ' Ram', 'Odedara', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '7861021243', 'ramodedara669@gmail.com'),
(108, ' Rohit', 'Odedara', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9662429916', 'drvrgit3@gmail.com'),
(109, ' Sejal', 'Odedara', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9313657612', 'osejal10@gmail.com'),
(110, ' Vijay', 'Odedara', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9773481537', 'odedravijay14@gmail.com'),
(111, ' Vijuben', 'Odedara', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8200024529', 'vijuodedara57@gmail.com'),
(112, ' Vishal', 'Odedara', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9909689509', 'rajodedra9079@gmail.com'),
(113, ' Dhara', 'Odedra', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8141343109', 'dharaodiiodedra@gmail.com'),
(114, ' Jaymal', 'Odedra', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '6352712236', 'nobbsatish@gmail.com'),
(115, ' Keval', 'Odedra', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '7016305930', 'kevalodedra2006@gmail.com'),
(116, ' Mital', 'Odedra', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '7069956571', 'ajaybhikhu8550@gmail.com'),
(117, ' Nehal', 'Odedra', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9512958210', 'nehalviram8898@gmail.com'),
(118, ' Priyanshi', 'Odedra', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9228877491', 'pratapodedara894@gmail.com'),
(119, ' Yash', 'Odedra', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9898430932', 'yashodedra01@gmail.com'),
(120, ' Akash', 'Pandavadra', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '7862892907', 'akashpndavadara@gmail.com'),
(121, ' Romil', 'Panjari', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9033445140', 'romilpanjari@gmail.com'),
(122, ' Divyesh', 'Parmar', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '6355189343', 'pd335222@gmail.com'),
(123, ' Durga', 'Parmar', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9662624416', 'sanjuparmar1901@gmail.com'),
(124, ' Gautam', 'Parmar', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '7575032632', 'gp5399475@gmail.com'),
(125, ' Himansu', 'Parmar', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8980714911', 'himanshup1440@gmail.com'),
(126, ' Mayuri', 'Parmar', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8401575307', 'ssahilparmar37@gmail.com'),
(127, ' Megha', 'Parmar', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9624845145', 'parmarmegha360@gmail.com'),
(128, ' Riddhi', 'Pathak', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9104211393', 'dishantpathak093@gmail.com'),
(129, ' Hit', 'Purohit', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8200508974', 'heetpurohit16@gmail.com'),
(130, ' Sejan', 'Quadari', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9723772977', 'nasir.kadari1973@gmail.com'),
(131, ' Gargiben', 'Ratadiya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9879708150', 'gargiratadiya@gmail.com'),
(132, ' Bansari', 'Rathod', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9265387025', 'banshirathod4821@gmail.com'),
(133, ' Chirag', 'Rathod', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9979461499', 'hareshrathod302@gmail.com'),
(134, ' Lakshmiben', 'Rathod', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9913924873', 'rameshrathod7297@gmail.com'),
(135, ' Pankajbhai', 'Rathod', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '7096973043', 'jr3974538@gmail.com'),
(136, ' Uday', 'Ratiya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9106879702', 'rr9429218722@gmail.com'),
(137, ' Sahil', 'Ravkarda', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9510980050', 'sahilishak436@gmail.com'),
(138, ' Kashyap', 'Roshiya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8849848398', 'varjangroshiya7@gmail.com'),
(139, ' Daivik', 'Salet', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '7698057194', 'daiviksalet31@gmail.com'),
(140, ' Nizam', 'Sama', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9409082094', 'samasatarsama@gmail.com'),
(141, ' Sameer', 'Sama', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8160128693', 'sameersama555@gmail.com'),
(142, ' Meet', 'Samani', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9879624995', 'samanimeet69@gmail.com'),
(143, ' Abhay', 'Sanathara', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9879438717', 'p9559690@gmail.com'),
(144, ' Rutvi', 'Sheth', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '7861829131', 'shethrutvi1@gmail.com'),
(145, ' Akash', 'Shingrakhiya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9512252051', 'aakashshingrakhiya42100@gmail.com'),
(146, ' Karan', 'Shingrakhiya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9725904109', 'shingrakhiyakaran81@gmail.com'),
(147, ' Divya', 'Shiyani', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9913761742', 'diya.shiyani22@gmail.com'),
(148, ' Poojaben', 'Sisodiya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '7990320761', 'kkhistariyaneha@gmail.com'),
(149, ' Mayuri', 'Solanki', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9427775527', 'ishitasolanki335@gmail.com'),
(150, ' Nikhil', 'Solanki', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9723541703', 'nkvaghela@gmail.com'),
(151, ' Ravi', 'Solanki', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8849908683', 'solankiravi9504@gmail.com'),
(152, ' Shahilbhai', 'Solanki', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '6353392073', 'solankirahul83928@gmail.com'),
(153, ' Shahinbanu', 'Solanki', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9978666514', 'nawazqadri57@gmail.com'),
(154, ' Nirjana', 'Soneri', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9106045388', 'kalpeshsoneri88@gmail.com'),
(155, ' Meet', 'Sundavadra', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9714799072', 'sundavdrameet@gmail.com'),
(156, ' Param', 'Thakrar', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9328179436', 'thakrarparam96@gmail.com'),
(157, ' Nidhi', 'Thanki', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9624516773', 'mrs.binduthanki@gmail.com'),
(158, ' Bhaktiben', 'Tukadiya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9512371708', 'tukadiyabhakti233@gmail.com'),
(159, ' Bharat', 'Vadar', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9925405501', 'bharatvadar72@gmail.com'),
(160, ' Rishi', 'Vadher', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '7016633047', 'rishivadher226@gmail.com'),
(161, ' Umesh', 'Vadher', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9913257677', 'vadherumesh42@gmail.com'),
(162, ' Yash', 'Vadher', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '6355276392', 'vadhery74@gmail.com'),
(163, ' Ashaben', 'Vadhiya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9909844381', 'vadhiyaaarushi@gmail.com'),
(164, ' Meet', 'Vagh', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9737939740', 'meetvagh1111@gmail.com'),
(165, ' Priya', 'Vaghela', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '6352929275', 'uurvashijitu347@gmail.com'),
(166, ' Priyanka', 'Vaghela', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9979245384', 'ramesh.vaghela6161@gmail.com'),
(167, ' Nandani', 'Vaja', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9724395377', 'jitendrabhaivaja4@gmail.com'),
(168, ' Urvash', 'Vaja', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8238183674', 'urvanshv2207@gmail.com'),
(169, ' Devanshiba', 'Vala', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9429515756', 'valadevanshiba2712@gmail.com'),
(170, ' Keval', 'Vara', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '7984215334', 'prajapatikeval65@gmail.com'),
(171, ' Krisha', 'Varvadiya', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9924396411', 'dharmeshvarvadiya29@gmail.com'),
(172, ' Devang', 'Visana', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '8849153900', 'devangvisana25@gmail.com'),
(173, ' Disha', 'Visana', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9426521588', 'devshreevisana@gmail.com'),
(174, ' Surajkumar', 'Vishnuswami', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9638717729', 'vishnuswamisuraj1496@gmail.com'),
(175, ' Dev', 'Vyas', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '7779068466', 'devvyas4107@gmail.com'),
(176, ' Umang', 'Zala', '2000-03-02', 'BCA', 2, 'Porbandar', 'Porbandar', '360550', '9662429918', 'drvrgit4@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `std_registration`
--
ALTER TABLE `std_registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `contact_number` (`contact_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `std_registration`
--
ALTER TABLE `std_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
