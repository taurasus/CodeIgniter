CREATE TABLE IF NOT EXISTS `livres` (
  `isbn` varchar(11) NOT NULL,
  `titre` varchar(30) NOT NULL,
  `auteur` varchar(30) NOT NULL,
`editeur` varchar(30) NOT NULL,
`image` varchar(70) NOT NULL,
  `prix` float NOT NULL,
  `quantite` int(11) NOT NULL,
  PRIMARY KEY  (`isbn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `livres`
--

INSERT INTO `livres` (`isbn`, `titre`, `auteur`, `editeur`,`image`,`prix`, `quantite`) VALUES
('2-876-54301', 'Sécurité PHP 5 et Mysql', 'Philippe Gamache','Eyrolles','http://infoweb-ens/~jacquin-c/images/securitePHP5EtMysql.jpg', 30.40, 23),
('2-875-54901', 'XML en concentré', 'Eliotte Rusty Harold','O\'Reilly','http://infoweb-ens/~jacquin-c/images/XML.jpg' ,45, 10),
('2-975-74381', 'PHP 5 avancé', 'Eric Daspet','Eyrolles', 'http://infoweb-ens/~jacquin-c/images/php5Avance.gif',35, 6),
('2-978-44881', 'Pratique de CSS et Javascript','Eric Sarrion','O\'Reilly','http://infoweb-ens/~jacquin-c/images/CSSEtJavascript.jpg',32,5),
('2-938-44981', 'Programmation Flex 4','Aurélien VannieuWenhuyze','Eyrolles','http://infoweb-ens/~jacquin-c/images/programmationFlex4.jpg',39.90,10),
('2-938-44781', 'Débuter en javascript','Shelley Powers','Eyrolles','http://infoweb-ens/~jacquin-c/images/debuterEnJavascript.jpg',29.90,10);

