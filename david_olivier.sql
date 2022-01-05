-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 02:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `david_olivier`
--

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

DROP TABLE IF EXISTS `home`;
CREATE TABLE `home` (
  `id` int(10) NOT NULL,
  `text_coiffure` text CHARACTER SET utf8 NOT NULL,
  `picture_coiffure` text CHARACTER SET utf8 NOT NULL,
  `text_esth` text CHARACTER SET utf8 NOT NULL,
  `picture_esth` text CHARACTER SET utf8 NOT NULL,
  `text_barber` text CHARACTER SET utf8 NOT NULL,
  `picture_barber` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `text_coiffure`, `picture_coiffure`, `text_esth`, `picture_esth`, `text_barber`, `picture_barber`) VALUES
(1, '</br>\r\nL\'équipe du salon  David Olivier est heureuse de vous accueillir dans son salon de beauté situé a l\'éntrée d\'Objat. \r\n</br>\r\nAccordez-vous une pause beauté et venez découvrir ce que le salon David Olivier vous propose.\r\n</br>\r\nNous vous accueillons dans un véritable espace dédié à la beauté et au bien-être.\r\n</br></br>\r\nNos coiffeurs et coiffeuses, régulièrement formés, feront un véritable diagnotic et vous proposeront une coiffure qui saura mettre votre visage en valeur. \r\n</br>\r\nNos coloristes, garants d\'un savoir-faire, sauront allier couleurs et produits des dernières technologies pour sublimer vos cheveux.', 'DSC09776.jpg', 'Notre espace bien-être vous propose de nombreuse prestations. Toujours en recherche de développement et nouveautés pour satisfaire au mieux vos besoins et attentes.\r\n</br> </br>\r\nUn large choix de soins, microblading, soin corps et visage, épilations, manucurie et onglerie, maquillage, minceur ...\r\n</br> </br>\r\nPour respecter au mieux les besoins de votre peau, nous utilisons Phyt\'s, 48 ans de beauté naturelle. Choisir Phyt\'s, c\'est choisir une marque différente afin de participer à une prise de conscience permettant de faire écoluer certaines pratiques, qui conduisent à remettre l\'homme en équilibre avec son environnement, c\'est aussi, partager un engagement pour un monde meilleur et le respect de notre terre.\r\n</br>\r\n</br>\r\nSeamer nous à également rejoins. Offrez vous l\'expertise des soins marins dans votre instituts.', 'DSC09780.jpg', 'Cette profession trouve son origine à l’époque où les hommes se rendaient à leurs séances de rasage dominical et le barbier en profitait pour s’occuper de la barbe bien sûr, mais aussi de la chevelure. De nos jours, le barbier offre une gamme complète de services esthétiques. La spécialité du barbier reste le rasage et le modelage de la barbe en fonction du goût des clients. Le rasage est pratiqué selon la technique traditionnelle, c’est-à-dire avec un rasoir de sécurité ainsi qu’un blaireau. Le barbier maîtrise parfaitement la technique du rasage à l’ancienne. Il est capable de donner une forme particulière à des moustaches, de tailler un bouc ou encore d’affiner les lignes de la moustache. Au-delà de la technique de rasage, le coiffeur barbier est également un spécialiste des soins de la barbe. Contrairement au barbier d’antan qui s’occupait juste de la partie rasage, le coiffeur barbier propose également de nombreux soins destinés à préparer et à purifier la peau et la moustache. Il utilise diverses huiles essentielles afin d’éviter les irritations, applique une serviette chaude sur la peau, réalise des gommages… Le barbier a donc pour mission d’entretenir et d’embellir la barbe des hommes et de leur offrir des soins esthétiques.', 'DSC09751.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `marques`
--

DROP TABLE IF EXISTS `marques`;
CREATE TABLE `marques` (
  `id` int(11) NOT NULL,
  `name_marque` varchar(50) CHARACTER SET utf8 NOT NULL,
  `img_marque` text CHARACTER SET utf8 NOT NULL,
  `description_marque` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marques`
--

INSERT INTO `marques` (`id`, `name_marque`, `img_marque`, `description_marque`) VALUES
(0, 'Biokera', 'IMG_0473.JPG', 'Biokera Natura Color né dans la ligne la plus naturelle de la marque est donc une coloration sans parabènes, sans silicones, sans PPD, sans résorcine et avec des huiles végétales organiques certifiées.'),
(1, 'Subtil', 'IMG_0478.JPG', 'Pour réaliser la plus belle des colorations, votre coiffeur fait confiance à l\'excellence de produits techniques spécialement conçus pour lui.\r\nRetrouvez les différentes technologies et produits qu\'il utilise dans son Salon pour exaucer vos envies capillaires les plus créatives.'),
(2, 'Phyt\'s', 'IMG_0484.JPG', 'Découvrez une gamme complète de cosmétiques adaptés à votre peau.\r\nFruit de 49 ans d’expérience dans les soins bio pour la peau, PHYT’S connait très bien ses besoins.\r\nAfin d’y répondre au mieux, et grâce à sa parfaite connaissance de l’alchimie des plantes, PHYT’S a développé une large gamme de cosmétiques et de soins. Ainsi, PHYT’S a une solution pour vous.\r\nDu démaquillage, en passant par l’hydratation, l’anti-âge mais aussi le corps, PHYT’S sera l’allié de votre peau.'),
(3, 'Seamer', 'encart1.jpg', 'Seamer conçoit et fabrique depuis plus de 30 ans des produits de soins marins pour les centres de Thalassothérapie.\r\nCe savoir-faire unique, fait de Seamer, le leader français de ces soins professionnels issus de la mer.');

-- --------------------------------------------------------

--
-- Table structure for table `prestations_autres`
--

DROP TABLE IF EXISTS `prestations_autres`;
CREATE TABLE `prestations_autres` (
  `id` int(20) NOT NULL,
  `prestation` varchar(50) CHARACTER SET utf8 NOT NULL,
  `prix` int(11) NOT NULL,
  `style` varchar(50) CHARACTER SET utf8 NOT NULL,
  `titre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `category` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prestations_autres`
--

INSERT INTO `prestations_autres` (`id`, `prestation`, `prix`, `style`, `titre`, `category`) VALUES
(3, 'epilation_maillot', 10, 'Simple', 'femme', 'service'),
(4, 'epilation_maillot', 16, 'Brésilien', 'femme', 'service'),
(5, 'epilation_maillot', 22, 'Semi-intégral', 'femme', 'service'),
(6, 'epilation_maillot', 26, 'Brésilien', 'femme', 'service'),
(7, 'epilation_maillot', 16, 'Simple', 'homme', 'service'),
(8, 'epilation_maillot', 26, 'Semi-intégral', 'homme', 'service'),
(9, 'epilation_maillot', 29, 'Intégral', 'homme', 'service'),
(10, 'epilation_maillot', 6, 'Brésilien', 'femme', 'forfait'),
(11, 'epilation_maillot', 12, 'Semi-intégral', 'femme', 'forfait'),
(12, 'epilation_maillot', 15, 'Intégral', 'femme', 'forfait'),
(13, 'epilation_maillot', 10, 'Semi-intégral', 'homme', 'forfait'),
(14, 'epilation_maillot', 14, 'Intégral', 'homme', 'forfait'),
(15, 'retouche_microblading', 50, 'Jusqu\'à 6 mois', 'femme', 'service'),
(16, 'retouche_microblading', 70, 'Jusqu\'à 1 an', 'femme', 'service'),
(17, 'retouche_microblading', 100, 'Jusqu\'à 18 mois', 'femme', 'service'),
(18, 'mariage_barbe', 105, '', 'homme', 'forfait');
-- --------------------------------------------------------

--
-- Table structure for table `prestations_tarifs`
--

DROP TABLE IF EXISTS `prestations_tarifs`;
CREATE TABLE `prestations_tarifs` (
  `id` int(20) NOT NULL,
  `nom_prestation` varchar(50) CHARACTER SET utf8 NOT NULL,
  `prix` int(11) NOT NULL,
  `duree` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `details` text CHARACTER SET utf8 DEFAULT NULL,
  `titre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `offre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `category` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prestations_tarifs`
--

INSERT INTO `prestations_tarifs` (`id`, `nom_prestation`, `prix`, `duree`, `details`, `titre`, `offre`, `category`) VALUES
(2, 'Coiffage Dame', 19, '', 'Shampoing, coiffage', 'femme', 'forfait', 'coiffure'),
(3, 'Coupe Dame', 31, '', 'Shampoing, coupe, coiffage', 'femme', 'forfait', 'coiffure'),
(4, 'Couleur coupe', 49, '', 'Couleur, shampoing, coupe coiffage', 'femme', 'forfait', 'coiffure'),
(5, 'Couleur sans coupe', 37, '', 'Couleur, shampoing, coiffage', 'femme', 'forfait', 'coiffure'),
(6, 'Mèches coupe', 79, '', 'Mèches, champoing, coupe, coiffage, soin', 'femme', 'forfait', 'coiffure'),
(7, 'Mèches sans coupe', 67, '', 'Mèches, shampoing, coiffage, soin', 'femme', 'forfait', 'coiffure'),
(8, 'Painting coupe', 85, '', 'Painting, shampoing, coupe, coiffage, soin', 'femme', 'forfait', 'coiffure'),
(9, 'Painting sans coupe', 73, '', 'Painting, shampoing, coiffage', 'femme', 'forfait', 'coiffure'),
(10, 'Permanente coupe', 67, '', 'Shampoing, permanente, coupe, coiffage, soin', 'femme', 'forfait', 'coiffure'),
(11, 'Permanente sans coupe', 55, '', 'Shampoing, permanente, coiffage, soin', 'femme', 'forfait', 'coiffure'),
(12, 'Décoloration coupe', 80, '', 'Décoloration, shampoing, patine, coupe, coiffage', 'femme', 'forfait', 'coiffure'),
(13, 'Décoloration sans coupe', 66, '', 'Décoloration, shampoing, patine, coiffage', 'femme', 'forfait', 'coiffure'),
(14, 'Soin profond', 7, '', '', 'femme', 'service', 'coiffure'),
(15, 'Soin sans rinçage', 4, '', '', 'femme', 'service', 'coiffure'),
(16, 'Mousse coiffante', 5, '', '', 'femme', 'service', 'coiffure'),
(17, 'Flash air libre', 12, '', '', 'femme', 'service', 'coiffure'),
(18, 'Flash air libre demi-tête', 18, '', '', 'femme', 'service', 'coiffure'),
(19, 'Coup d\'éclat', 12, '', '', 'femme', 'service', 'coiffure'),
(20, 'Beblond cheveux courts', 12, '', '', 'femme', 'service', 'coiffure'),
(21, 'Beblond cheveux mi-longs', 15, '', '', 'femme', 'service', 'coiffure'),
(22, 'Beblond cheveux longs', 21, '', '', 'femme', 'service', 'coiffure'),
(23, 'Bain de couleur cheveux courts', 12, '', '', 'femme', 'service', 'coiffure'),
(24, 'Bain de couleur cheveux mi-longs', 15, '', '', 'femme', 'service', 'coiffure'),
(25, 'Bain de couleur cheveux longs', 21, '', '', 'femme', 'service', 'coiffure'),
(26, 'Lissage Steampod', 26, '', '', 'femme', 'service', 'coiffure'),
(27, 'Coupe homme', 19, '', 'Shampoing, coupe, séchage', 'homme', 'forfait', 'coiffure'),
(28, 'Coupe homme + Barbe intégrale', 53, '', 'Shampoing, coupe, séchage + Rasage barbe intégral (inclus soin gommant sous vapeur)', 'homme', 'forfait', 'coiffure'),
(29, 'Décoloration homme', 80, '', 'Décoloration, shampoing, beblond, coupe, séchage, soin', 'homme', 'forfait', 'coiffure'),
(30, 'Supplément Color Cult', 22, '', '', 'homme', 'forfait', 'coiffure'),
(31, 'Coupe junior garçon', 17, '', 'Shampoing, coupe, séchage', 'enfant', 'forfait', 'coiffure'),
(32, 'Coupe junior fille', 19, '', 'Shampoing, coupe, séchage', 'enfant', 'forfait', 'coiffure'),
(33, 'Equilibre', 59, '1h', 'Peau fraîche et lumineuse, régule l’excès de sébum, révèle l’éclat du teint', 'homme_femme', 'forfait', 'soin_visage'),
(34, 'Capyl', 59, '1h', 'Calmant et anti-rougeur', 'homme_femme', 'forfait', 'soin_visage'),
(35, 'Eclat immédiat homme', 59, '1h', '100% naturel, nettoie en profondeur, oxygène et unifie le teint', 'homme', 'forfait', 'soin_visage'),
(36, 'Aqua phyt\'s', 59, '1h15', 'Bain d’hydratation pour les peaux mixtes (acide hyaluronique et aloe vera', 'homme_femme', 'forfait', 'soin_visage'),
(37, 'D\'o', 59, '1h', 'Alliance soin équilibrant et anti-âge, raffermissant aux huiles précieuses', 'homme_femme', 'forfait', 'soin_visage'),
(38, 'Multi-vita', 79, '1h30', 'Cocktail de vitamines, ses actifs antirides lissent et tonifient la peau', 'homme_femme', 'forfait', 'soin_visage'),
(39, 'White Bio-Active', 69, '1h15', 'Éclaircissant, redonne l’éclat du teint, diminue les tâches pigmentaires', 'homme_femme', 'forfait', 'soin_visage'),
(40, 'Contour des yeux', 45, '40 min', 'Lisse et défatigue le regard', 'homme_femme', 'forfait', 'soin_visage'),
(41, 'Soin express', 40, '30 min', 'Gommage + Masque', 'homme_femme', 'forfait', 'soin_visage'),
(42, 'Soin panacée', 89, '1h30', 'Modelage visage resculptant réalisé à l’aide du Dermophyt’s Résultat visible instantanément', 'homme_femme', 'forfait', 'soin_visage'),
(43, 'Escapade énergisante', 79, '1h30', 'Gommage aux éclats d’agrumes suivi d’un enveloppement fondant énergisant puis d’un modelage au beurre douceur', 'homme_femme', 'forfait', 'soin_corps'),
(44, 'Escapade épicée', 79, '1h30', 'Gommage aux grains d’épices suivi d’un enveloppement corporel tonifiant à l’argile rouge puis d’un modelage à la bougie fondante', 'homme_femme', 'forfait', 'soin_corps'),
(45, 'Escapade gourmande', 79, '1h30', 'Gommage à la pulpe de coco suivi d’un enveloppement gourmand au cacao puis d’un modelage au beurre de karité', 'homme_femme', 'forfait', 'soin_corps'),
(46, 'Exfoliant corps satin', 70, '1h', 'Soin enveloppant et relaxant avec la douceur du beurre de karité et gommage au sable de sel marin', 'homme_femme', 'forfait', 'soin_corps'),
(47, 'Equilibre du dos', 50, '45 min', 'Pour une peau purifiée qui redevient douce et nette', 'homme_femme', 'forfait', 'soin_corps'),
(48, 'Complet bien-être', 150, '3h', 'Une escapade au choix + Un soin du visage personnalisé', 'homme_femme', 'forfait', 'soin_corps'),
(49, 'Relaxant', 120, '2h', 'Exfoliant corps satin + Un soin du visage adapté à 59 €', 'homme_femme', 'forfait', 'soin_corps'),
(50, 'Equilibre', 100, '1h30', 'Équilibre du dos + Un soin du visage adapté à 59 €', 'homme_femme', 'forfait', 'soin_corps'),
(51, 'Forfait homme', 120, '2h', 'Modelage tonique (1h) + Un soin du visage Phyt’s Men', 'homme_femme', 'forfait', 'soin_corps'),
(52, 'Sourcils', 10, '', '', 'femme', 'service', 'epilation'),
(53, 'Lèvres', 8, '', '', 'femme', 'service', 'epilation'),
(54, 'Mentons ou Tempes', 5, '', '', 'femme', 'service', 'epilation'),
(55, 'Aisselles', 12, '', '', 'femme', 'service', 'epilation'),
(56, 'Bras', 16, '', '', 'femme', 'service', 'epilation'),
(57, '1/2 Jambes ou Cuisses', 18, '', '', 'femme', 'service', 'epilation'),
(58, '3/4 Jambes', 20, '', '', 'femme', 'service', 'epilation'),
(59, 'Jambes entières', 26, '', '', 'femme', 'service', 'epilation'),
(60, 'Sourcils', 11, '', '', 'homme', 'service', 'epilation'),
(61, 'Nez', 5, '', '', 'homme', 'service', 'epilation'),
(62, 'Oreilles', 5, '', '', 'homme', 'service', 'epilation'),
(63, 'Aiselles', 14, '', '', 'homme', 'service', 'epilation'),
(64, 'Epaules', 10, '', '', 'homme', 'service', 'epilation'),
(65, 'Torse', 19, '', '', 'homme', 'service', 'epilation'),
(66, 'Dos', 20, '', '', 'homme', 'service', 'epilation'),
(67, 'Jambes entières', 29, '', '', 'homme', 'service', 'epilation'),
(68, 'Lèvres, sourcils', 16, '', '', 'femme', 'forfait', 'epilation'),
(69, 'Lèvres, sourcils, menton ou tempes', 19, '', '', 'femme', 'forfait', 'epilation'),
(70, 'Maillot simple, aisselles', 20, '', '', 'femme', 'forfait', 'epilation'),
(71, '1/2 Jambes, maillot simple, aisselles', 38, '', '', 'femme', 'forfait', 'epilation'),
(72, 'Jambes entières, maillot simple, aisselles', 46, '', '', 'femme', 'forfait', 'epilation'),
(73, 'Nez, oreilles', 8, '', '', 'homme', 'forfait', 'epilation'),
(74, 'Dos, torse', 35, '', '', 'homme', 'forfait', 'epilation'),
(75, 'Jambes entières, maillot simple, aisselles', 55, '', '', 'homme', 'forfait', 'epilation'),
(76, 'Tonique', 0, '', 'Dénoue les tensions', 'homme_femme', 'service', 'modelage'),
(77, 'A quatre mains', 0, '', 'Pour deux fois plus de relaxation et de détente', 'homme_femme', 'service', 'modelage'),
(78, 'Balinais', 0, '', 'Points de pression acupuncture', 'homme_femme', 'service', 'modelage'),
(79, 'Modelage en duo', 0, '', 'Dans la même cabine', 'homme_femme', 'service', 'modelage'),
(80, 'Californien', 0, '', 'Doux et enveloppant', 'homme_femme', 'service', 'modelage'),
(81, 'Réflexologie plantaire', 0, '', 'Modelage des pieds', 'homme_femme', 'service', 'modelage'),
(82, 'Femme enceinte', 0, '', 'Relaxant (huile neutre)', 'homme_femme', 'service', 'modelage'),
(83, 'Forfait', 240, '', '1 séance de microblading suivie d’une retouche indispensable valable pendant 1 mois', 'femme', 'forfait', 'microblading'),
(84, 'Manucure simple', 25, '', '', 'femme', 'service', 'manucure'),
(85, 'Manucure complète', 30, '', '', 'femme', 'service', 'manucure'),
(86, 'Beauté des pieds', 40, '', '', 'femme', 'service', 'manucure'),
(87, 'Pose de vernis simple', 8, '', '', 'femme', 'service', 'manucure'),
(88, 'Pose de vernis simple French', 12, '', '', 'femme', 'service', 'manucure'),
(89, 'Pose de vernis semi-permanent', 30, '', '', 'femme', 'service', 'manucure'),
(90, 'Pose de vernis semi-permanent French', 35, '', '', 'femme', 'service', 'manucure'),
(91, 'Dépose de vernis semi-permanent', 10, '', '', 'femme', 'service', 'manucure'),
(92, 'Supplément décors des ongles ', 5, '', '', 'femme', 'service', 'manucure'),
(93, 'Modelage manuel', 59, '1h', '', 'homme_femme', 'service', 'minceur_bio_active'),
(94, '10 séances de 30 min', 300, '', '', 'homme_femme', 'forfait', 'starvac'),
(95, '6 séances de 15 min dont 1 offerte', 300, '', '', 'homme_femme', 'forfait', 'wishpro'),
(96, 'Une séance de 15 min', 60, '', '', 'homme_femme', 'service', 'wishpro'),
(97, 'Mise en beauté', 20, '', '', 'femme', 'service', 'maquillage'),
(98, 'Jour', 25, '', '', 'femme', 'service', 'maquillage'),
(99, 'Cérémonie', 30, '', '', 'femme', 'service', 'maquillage'),
(100, 'Soir', 35, '', '', 'femme', 'service', 'maquillage'),
(101, 'Cour d\'auto-maquillage', 35, '', 'avec conseil en image + 20 €', 'femme', 'service', 'maquillage'),
(102, 'Teinture cils', 18, '', '', 'femme', 'service', 'maquillage'),
(103, 'Teinture sourcils', 18, '', '', 'femme', 'service', 'maquillage'),
(104, 'Décoloration lèvre', 9, '', '', 'femme', 'service', 'maquillage'),
(105, 'Décoloration visage', 18, '', 'Joues, mentons, tempes', 'femme', 'service', 'maquillage'),
(106, 'Femme silver', 63, '1h', 'Soin du visage express + Shampoing, coupe, coiffage ', 'homme_femme', 'forfait', 'esthetique_coiffure'),
(107, 'Femme gold', 100, '2h', 'Soin du corps escapade énergisante + Shampoing, coupe, coiffage ', 'homme_femme', 'forfait', 'esthetique_coiffure'),
(108, 'Femme diamond', 150, '2h40', 'Soin du visage contour des yeux + Soin du corps escapade épicée + Shampoing, coupe, coiffage ', 'homme_femme', 'forfait', 'esthetique_coiffure'),
(109, 'Homme silver', 70, '1h20', 'Soin du visage éclat immédiat + Shampoing, coupe, coiffage ', 'homme_femme', 'forfait', 'esthetique_coiffure'),
(110, 'Homme gold', 120, '2h', 'Soin du visage éclat immédiat + Soin du corps équilibre du dos + Shampoing, coupe, coiffage', 'homme_femme', 'forfait', 'esthetique_coiffure'),
(111, 'Pour Elle', 155, '', 'Un soin du visage adapté + vernis semi-permanent + coiffure le jour J', 'femme', 'forfait', 'mariage'),
(112, 'Pour Lui', 75, '', 'Un soin du visage adapté + coiffure le jour J', 'homme', 'forfait', 'mariage'),
(113, 'Essaie coiffure', 30, '', '', 'homme_femme', 'service', 'mariage'),
(114, 'Essaie maquillage', 30, '', '', 'femme', 'service', 'mariage'),
(115, 'Rasage intégral barbe', 39, '', '(inclus soin gommant sous vapeur)', 'homme', 'service', 'barber'),
(116, 'Tracé de barbe personnalisé', 29, '', '(inclus soin gommant sous vapeur)', 'homme', 'service', 'barber'),
(117, 'Entretien', 19, '', '(dessin de barbe intégral, moins de 10 jours)', 'homme', 'service', 'barber'),
(118, 'Moustache', 9, '', '', 'homme', 'service', 'barber'),
(119, 'Teinture barbe', 19, '', '', 'homme', 'service', 'barber');


-- --------------------------------------------------------
--
-- Table structure for table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE `utilisateurs` (
  `id_user` int(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `login_user` varchar(50) NOT NULL,
  `pwd_user` char(255) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_user`, `first_name`, `last_name`, `login_user`, `pwd_user`, `mail`) VALUES
(0, 'Frédéric', 'MARTY', 'SDO19Objat?', '$2y$10$CEA9rQDKxBYgA81a4AqwZOsERPJv7A60CDGzH/tLQCOtMUvtcBMZK', 'diablostar@live.fr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marques`
--
ALTER TABLE `marques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestations_tarifs`
--
ALTER TABLE `prestations_tarifs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestations_autres`
--
ALTER TABLE `prestations_autres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marques`
--
ALTER TABLE `marques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `prestations_tarifs`
--
ALTER TABLE `prestations_tarifs`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
--
-- AUTO_INCREMENT for table `prestations_autres`
--
ALTER TABLE `prestations_autres`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
