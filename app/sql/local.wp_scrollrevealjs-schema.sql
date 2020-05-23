/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_scrollrevealjs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `selector` varchar(500) DEFAULT NULL,
  `enter` varchar(500) DEFAULT NULL,
  `move` varchar(500) DEFAULT NULL,
  `over` varchar(500) DEFAULT NULL,
  `wait` varchar(500) DEFAULT NULL,
  `flip` varchar(500) DEFAULT NULL,
  `spin` varchar(500) DEFAULT NULL,
  `roll` varchar(500) DEFAULT NULL,
  `scale` varchar(500) DEFAULT NULL,
  `reset` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
