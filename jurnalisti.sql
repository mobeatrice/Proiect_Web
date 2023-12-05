-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 30, 2023 at 12:37 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnalisti`
--

-- --------------------------------------------------------

--
-- Table structure for table `articol`
--

DROP TABLE IF EXISTS `articol`;
CREATE TABLE IF NOT EXISTS `articol` (
  `id_articol` int NOT NULL,
  `titlu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `data_creare` date NOT NULL,
  `data_modificare` date DEFAULT NULL,
  `continut_articol` varchar(500) NOT NULL,
  `autor` int NOT NULL,
  `editor` int NOT NULL,
  `status` varchar(30) NOT NULL,
  `id_categorie` int NOT NULL,
  PRIMARY KEY (`id_articol`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `articol`
--

INSERT INTO `articol` (`id_articol`, `titlu`, `data_creare`, `data_modificare`, `continut_articol`, `autor`, `editor`, `status`, `id_categorie`) VALUES
(2001, 'Efectele artistice ale lui Degas', '2023-11-12', '2023-11-20', 'Pictura lui Edgar Degas are o virtute incontestabila: aceea de a surprinde viata reala in scene populate de oameni in miscare, cum ar fi dansatorii pe o scena, cursele de cai sau scene ale societatii pariziene care se bucura de un moment placut in numeroasele cafenele care inunda capitala Frantei. Una dintre cele mai remarcabile lucrari ale lui Degas este Tatal lui Degas ascultandu-l pe Lorenzo Pagans, 1869, un tablou care recreeaza una dintre serile muzicale organizate de tatal artistului.', 12, 5, 'aprobat', 101),
(2002, 'Senzatiile tari, sub control perfect', '2023-10-23', NULL, 'Fritt Fall a fost una dintre atractiile majore ale parcului tematic Grona Lund din Stockholm de peste 20 de ani. Pentru a se asigura ca nu se intampla nimic in timpul unei caderi libere de la o inaltime de 80 de metri, intregul sistem de control a fost inlocuit recent, folosind cabluri LAPP.', 8, 5, 'refuzat', 102),
(2003, 'Glamour Women of the Year 2023', '2023-11-10', '2023-11-29', 'Premiile Glamour Women of The Year s-au desfasurat pe 7 noiembrie in Manhattan. O seara plina de emotii, moda si lacrimi de bucurie. Inainte de a-si primi trofeele, vedetele au pasit pe covorul rosu unde s-au bucurat de toata atentia fotografilor. Selma Blair, Millie Bobby Brown, America Ferrera si Kat Graham sunt doar o parte din femeile celebre care au impresionat cu tinutele lor la gala Glamour.', 3, 10, 'aprobat', 104),
(2004, 'Transmiterea datelor in sisteme de lanturi port cablu', '2023-11-22', NULL, 'Utilajele de mare productivitate, au devenit prezente comune in peisajul industrial. Prelucrarile in doua sau mai multe coordonate au impus utilizarea pe scara larga a sistemelor de lanturi port cablu care ghideaza si protejeaza cablurile super flexibile destinate alimentarii cu energie electrica si transmiterii datelor. Automatizarea tot mai ridicata a masinariilor industriale conduce la necesitatea transmiterii unor volume mai mari de date in conditii de zgomot electromagnetic crescut.', 8, 5, 'aprobat', 102),
(2005, 'Gustav Klimt, artistul care picta cu aur', '2023-10-14', NULL, 'Artistul austriac Gustav Klimt nu a fost doar unul dintre reprezentantii de frunte ai artei vieneze de la sfarsitul secolului al XIX-lea, ci si unul dintre fondatorii miscarii artistice cunoscute drept Secesiunea vieneza. Mereu surprinzatoare, picturile lui Klimt, maestru al aurului, vor deveni in cele din urma unele dintre cele mai cautate lucrari in casele de licitatii din intreaga lume.', 7, 4, 'draft', 101),
(2006, 'Tricotajele sunt cele mai inspirate alegeri vestimentare pentru perioada in care ne aflam', '2023-11-28', NULL, 'Cine a spus ca iarna nu este un sezon placut pentru iubitoarele de moda? Fie ca adori rochiile care iti urmeaza linia corpului, fie ca preferi un pulover cozy sau un cardigan feminin, poti opta oricand pentru tricotaje chic. Acestea te ajuta sa te simti seducatoare, fara sa renunti la caldura si la confort.', 3, 5, 'aprobat', 104),
(2007, 'Ce ramane dupa explozia unei stele masive', '2023-11-22', NULL, 'Urmarile mortii explozive a unei stele masive au fost surprinse intr-o imagine publicata de European Southern Observatory. Imaginea tulburatoare infatiseaza nori de gaz care, prin filtrele folosite de astronomi, arata asemenea unor tentacule roz si portocalii care se intind pe o suprafata de circa 600 de ori mai mare decat sistemul nostru solar.', 9, 10, 'aprobat', 103),
(2008, 'Cum suna o gaura neagra', '2023-10-18', '2023-11-22', 'Gaura neagra din centrul roiului de galaxii Perseus a fost asociata cu un sunet inca din 2003. Astronomii au descoperit ca valurile de presiune emise de gaura neagra provocau unde in gazul fierbinte al roiului care puteau fi traduse intr-o nota muzicala pe care oamenii nu o pot auzi intrucat este cu 57 de octave sub nota do. Sunetul este editat astfel incat sa poata fi receptat de simtul nostru auditiv.', 9, 4, 'aprobat', 103),
(2009, 'Automatizarea industriala cu roboti SCARA', '2023-10-20', NULL, 'Mitsubishi Electric este un brand bine cunoscut care ofera de multi ani solutii de automatizare pentru diverse industrii. Printre cele mai populare produse s-a mentinut in ultimii ani robotul SCARA. SCARA este acronimul de la Selective Compliance Assembly Robot Arm (brat robotic de asamblare cu complianta selectiva). Acest tip de robot permite miscari precise si repetabile in plan orizontal.', 11, 10, 'refuzat', 102),
(2010, 'Thomas Schweicker, caligraful fara maini care scria cu picioarele', '2023-10-29', NULL, 'Schweicker avea un talent deosebit pentru pictura si caligrafie si a devenit in scurt timp expert in redactarea de documente elaborate. La scoala latina avea propria lui masa cu sertar cu cheie, unde isi pastra uneltele de scris. Si-a dezvoltat abilitatile de caligraf intr-o asemenea masura, incat nu numai ca si-a putut castiga existenta de pe urma lor, dar a devenit si o celebritate. Vestea talentului si a tehnicii sale neobisnuite s-a raspandit rapid in intreaga tara.', 7, 4, 'aprobat', 101);

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int NOT NULL,
  `nume_categorie` varchar(30) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nume_categorie`) VALUES
(101, 'arta'),
(102, 'tehnica'),
(103, 'stiinta'),
(104, 'moda');

-- --------------------------------------------------------

--
-- Table structure for table `comentariu`
--

DROP TABLE IF EXISTS `comentariu`;
CREATE TABLE IF NOT EXISTS `comentariu` (
  `id_comentariu` varchar(5) NOT NULL,
  `titlu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `continut_comentariu` varchar(300) NOT NULL,
  `data_adaugarii` date NOT NULL,
  `id_articol` int NOT NULL,
  `id_user` int NOT NULL,
  PRIMARY KEY (`id_comentariu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comentariu`
--

INSERT INTO `comentariu` (`id_comentariu`, `titlu`, `continut_comentariu`, `data_adaugarii`, `id_articol`, `id_user`) VALUES
('CMT1', 'Felicitari', 'Informatiile oferite sunt de un interes deosebit.', '2023-11-22', 2008, 4),
('CMT2', 'Informatie limitata', 'Din pacate, articolul prezinta un numar mic de informatii. Reveniti asupra lui.', '2023-10-23', 2002, 5),
('CMT3', 'Unul dintre cele mai bune articole', 'Am ramas impresionat de modul in care a fost redactat anuntul cat si de continutul sau.', '2023-11-22', 2007, 10),
('CMT4', 'Modificare', 'Mi-a facut placere sa revizuiesc acest articol, modificarile facute fiind doar in scop estetic.', '2023-11-20', 2001, 5);

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `id_rol` varchar(5) NOT NULL,
  `denumire_rol` varchar(30) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`id_rol`, `denumire_rol`) VALUES
('A01', 'admin'),
('E01', 'editor'),
('J01', 'jurnalist'),
('C01', 'cititor');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nume` varchar(30) NOT NULL,
  `prenume` varchar(30) NOT NULL,
  `username` varchar(40) NOT NULL,
  `parola` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id_rol` varchar(5) NOT NULL,
  `id_categorie` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nume`, `prenume`, `username`, `parola`, `email`, `id_rol`, `id_categorie`) VALUES
(1, 'Popescu', 'Ana', 'PopescuA', 'Ana1234@!', 'ana@gmail.com', 'A01', NULL),
(2, 'Dumitrescu', 'Ion', 'Ionica', 'Parola33', 'ion@yahoo.com', 'C01', NULL),
(3, 'Avram', 'Amelia', 'AmyyA', 'LaptopA2', 'amy@gmail.com', 'J01', 104),
(4, 'Mateias', 'Radu', 'RaduMateias', 'MatRadu3', 'radu@gmail.com', 'E01', NULL),
(5, 'Bondor', 'Laura', 'BLaura', 'Cos745!', 'laura@yahoo.com', 'E01', NULL),
(6, 'Mihalescu', 'Maria', 'Maria1', 'MouseM8', 'maria@yahoo.com', 'C01', NULL),
(7, 'Ionescu', 'Mihai', 'Imihai', 'Mihai89@', 'mihai@gmail.com', 'J01', 101),
(8, 'Juravle', 'Alex', 'AAlex', 'Tel021?', 'alex@gmail.com', 'J01', 102),
(9, 'Popescu', 'Ilie', 'IlieP', 'Hnxe456$', 'ilie@yahoo.com', 'J01', 103),
(10, 'Badelita', 'Viorel', 'Viorel', 'ghTy009', 'viorel@gmail.com', 'E01', NULL),
(11, 'Avram', 'Ioana', 'IoanaA', 'Scara92?', 'ioana@gmail.com', 'J01', 102),
(12, 'Pop', 'Iulian', 'IuliPop', 'Gdmo1232', 'iulian@yahoo.com', 'J01', 101);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
