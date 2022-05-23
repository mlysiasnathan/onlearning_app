-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2021 at 07:36 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_onlearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `intro` longtext NOT NULL,
  `pdf` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `q1` varchar(200) NOT NULL,
  `q2` varchar(200) NOT NULL,
  `q3` varchar(200) NOT NULL,
  `q4` varchar(200) NOT NULL,
  `q5` varchar(200) NOT NULL,
  `ans1` varchar(200) NOT NULL,
  `ans2` varchar(200) NOT NULL,
  `ans3` varchar(200) NOT NULL,
  `ans4` varchar(200) NOT NULL,
  `ans5` varchar(200) NOT NULL,
  `q1opinion1` varchar(200) NOT NULL,
  `q1opinion2` varchar(200) NOT NULL,
  `q1opinion3` varchar(200) NOT NULL,
  `q2opinion1` varchar(200) NOT NULL,
  `q2opinion2` varchar(200) NOT NULL,
  `q2opinion3` varchar(200) NOT NULL,
  `q3opinion1` varchar(200) NOT NULL,
  `q3opinion2` varchar(200) NOT NULL,
  `q3opinion3` varchar(200) NOT NULL,
  `q4opinion1` varchar(200) NOT NULL,
  `q4opinion2` varchar(200) NOT NULL,
  `q4opinion3` varchar(200) NOT NULL,
  `q5opinion1` varchar(200) NOT NULL,
  `q5opinion2` varchar(200) NOT NULL,
  `q5opinion3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `intro`, `pdf`, `image`, `q1`, `q2`, `q3`, `q4`, `q5`, `ans1`, `ans2`, `ans3`, `ans4`, `ans5`, `q1opinion1`, `q1opinion2`, `q1opinion3`, `q2opinion1`, `q2opinion2`, `q2opinion3`, `q3opinion1`, `q3opinion2`, `q3opinion3`, `q4opinion1`, `q4opinion2`, `q4opinion3`, `q5opinion1`, `q5opinion2`, `q5opinion3`) VALUES
(1, '1.Fondamentals of the Immune System', '1.Introduction:\r\n\r\n                                                The defense system consists of a wide variety of cells and molecules\r\n                                                that have evolved to protect animals from invading pathogenic\r\n                                                microorganisms and cancer. Recognition and response are two\r\n                                                major activities of immune system. Immune recognition is quite specific.\r\n                                                Moreover, it is able to discriminate between foreign molecules\r\n                                                and the bodyâ€™s own cells and proteins. After the recognition of a\r\n                                                foreign organism, it mounts an effector response through recruiting\r\n                                                a variety of cells and molecules to eliminate the invader organism.\r\n\r\n                                                ', '1.immune system.pdf', '5.jpg', 'What is the first vaccine Louis Pasteur used to vaccinate a group of sheep with heat-attenuated in 1881?.', 'The cells of the acquired immune system are T and B lymphocytes, it  is of two types which are:', 'Three biochemical pathways that activate the complement System:', 'What is MHC?', 'What is meant by immunodeficiency?', 'Bacillus anthracis', 'humoral (antibody-mediated system) and  cell mediated', 'the classical complement pathway, the alternate complement pathway, and the mannose-binding lectin pathway.', 'The MHC is a large genetic complex with multiple loci and encodes for three major classes of membrane-bound glycoproteins: class I, class II, and class III MHC molecules.', 'Immunodeficiency is a state in which the immune system compromises or is unable to fight infectious disease.', 'BCG', 'Bacillus anthracis', 'VAP and Bacillus anthracis', 'cells and molecules of the innate system', 'Lymphocytes and antibodies', 'humoral (antibody-mediated system) and  cell mediated', 'the classical complement pathway, the alternate complement pathway, and the mannose-binding lectin pathway.', 'Somatic hypermutation, inflammation system and the mannose-binding lectin pathway.', 'Complement system, immune clearance and inflammation system.', 'MHC are molecules that have common structural features and roles in antigen processing.', 'The MHC is a large genetic complex with multiple loci and encodes for three major classes of membrane-bound glycoproteins: class I, class II, and class III MHC molecules.', 'MHC are genes that  encode various secreted immune system-related proteins, including components of the complement system and molecules involved in inflammation.', 'Immunodeficiency is a state in which the immune system compromises or is unable to fight infectious disease.', 'Is Cytotoxic drugs or radiation treatments given to cancer patients damage the immune cells and thereby induce a state of immunodeficiency.', 'Are drugs that are used to combat autoimmune diseases such as rheumatoid arthritis or lupus erythematosus induce the abovementioned kind of immunodeficiency'),
(2, '2.Nutrition & Health', '2.Introduction:\r\n\r\n                                                Generally, nutrients are classified as either macro- or micronutrients, based on the\r\n                                                amounts we require from the diet (Gibney et al.,2009).\r\n                                                Some nutrients can be stored (e.g., glucose as glycogen in the liver, fat-soluble vitamins in fat reserves)\r\n                                                while others areequired more or less continuously. There are, however,\r\n                                                also differences between individuals, meaning some may require specific\r\n                                                nutrients more frequently.\r\n\r\n\r\n\r\n                                                ', '2.Nutrition_and_Health.pdf', '3D DNA WALLPAPER image galleries   imageKBcom.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `birth_day` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `birth_day`, `email`, `password`, `role`, `image`) VALUES
(1, 'Lys', 'Nath', '2021-09-08', 'admin@g.c', '123', 'admin', 'me.jpg'),
(2, 'Den', 'M', '2021-09-08', 'user@g.c', '123', 'user', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `first_name` (`first_name`),
  ADD UNIQUE KEY `last_name` (`last_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
