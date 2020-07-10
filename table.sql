CREATE TABLE IF NOT EXISTS `dyn_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `link_url` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#',
  `parent_id` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




INSERT INTO `dyn_menu` (`id`, `label`, `link_url`, `parent_id`) VALUES
(1, 'main', '#', 0),
(2, 'sub 1', '#', 1),
(3, 'sub 2', '#', 1),
(4, 'sub 3', '#', 1),
(5, 'main 2', '#', 0),
(6, 'sub 2-1', '#', 5),
(7, 'sub 2-2', '#', 5),
(8, 'sub 2-3', '#', 5),
(9, 'main 3', '#', 0);