--
-- Base de données :  `online_classes`
--
CREATE DATABASE IF NOT EXISTS `online_classes` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `online_classes`;

-- --------------------------------------------------------

--
-- Structure de la table `log`
--

DROP TABLE IF EXISTS `t_log`;
CREATE TABLE IF NOT EXISTS `t_log` (
                                     `pk` int(11) NOT NULL AUTO_INCREMENT,
                                     `description` varchar(256) DEFAULT NULL,
                                     `ts` timestamp NULL DEFAULT NULL,
                                     PRIMARY KEY (`pk`)
);

--
-- Déchargement des données de la table `t_log`
--

-- INSERT INTO `t_log` (`pk`, `description`, `ts`) VALUES

COMMIT;

-- --------------------------------------------------------

--
-- Structure de la table `t_students`
--

DROP TABLE IF EXISTS `t_students`;
CREATE TABLE IF NOT EXISTS `t_students` (
                                          `pk` int(11) NOT NULL AUTO_INCREMENT,
                                          `forename` varchar(256) NOT NULL,
                                          `name` varchar(256) NOT NULL,
                                          `mailAddress` varchar(256) NOT NULL UNIQUE ,
                                          PRIMARY KEY (`pk`)
);

--
-- Déchargement des données de la table `t_students`
--

INSERT INTO `t_students` (`forename`, `name`, `mailAddress`) VALUES
('Arnaud', 'Clarat', '1407.clarat.student@ifosup.be');

COMMIT;

-- --------------------------------------------------------

--
-- Structure de la table `t_teachers`
--

DROP TABLE IF EXISTS `t_teachers`;
CREATE TABLE IF NOT EXISTS `t_teachers` (
                                        `pk` int(11) NOT NULL AUTO_INCREMENT,
                                        `forename` varchar(256) NOT NULL,
                                        `name` varchar(256) NOT NULL,
                                        `mailAddress` varchar(256) NOT NULL UNIQUE,
                                        PRIMARY KEY (`pk`)
);

--
-- Déchargment des données de la table `t_teachers`
--

INSERT INTO `t_teachers` (`forename`,  `name`, `mailAddress`) VALUES
('Benjamin', 'Delbar', 'b.delbar@xsi.io');

COMMIT;

--
-- Strucure de la table `t_classes`
--

DROP TABLE IF EXISTS `t_classes`;
CREATE TABLE IF NOT EXISTS `t_classes` (
                                        `pk` int(11) NOT NULL AUTO_INCREMENT,
                                        `name` varchar(256) NOT NULL,
                                        `teacher` int(11) NOT NULL,
                                        PRIMARY KEY (`pk`),
                                        FOREIGN KEY (`teacher`) REFERENCES `t_teachers`(`pk`)
);

--
-- Déchargement des données de la table `t_classes`
--

INSERT INTO `t_classes` (`name`, `teacher`) VALUES
('Projet SGBD', 1);

COMMIT;

--
-- Structure de la table `t_registrations`
--

DROP TABLE IF EXISTS `t_registrations`;
CREATE TABLE IF NOT EXISTS `t_registrations` (
                                        `pk` int(11) NOT NULL AUTO_INCREMENT,
                                        `student` int(11) NOT NULL,
                                        `classe` int(11) NOT NULL,
                                        PRIMARY KEY (`pk`),
                                        FOREIGN KEY (`student`) REFERENCES t_students(`pk`),
                                        FOREIGN KEY (`classe`) REFERENCES t_classes(`pk`)
);

--
-- Déchargement des données de la table `t_registrations`
--

INSERT INTO `t_registrations` (student, classe) VALUES
('1', '1');

COMMIT;