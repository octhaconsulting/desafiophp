-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.11 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura para tabela superlogica.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `cliente_id` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `cliente_nome` varchar(50) DEFAULT NULL,
  `cliente_email` varchar(100) DEFAULT NULL,
  `cliente_senha` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cliente_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela superlogica.clientes: 1 rows
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`cliente_id`, `cliente_nome`, `cliente_email`, `cliente_senha`) VALUES
	(000001, 'Carlos Alexandre das Dores', 'agenciaolle@gmail.com', 'ad1eda26d266e5337d9f16c4f7c84330');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Copiando estrutura para tabela superlogica.pedidos
CREATE TABLE IF NOT EXISTS `pedidos` (
  `pedido_id` int(11) NOT NULL AUTO_INCREMENT,
  `pedido_data` datetime DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `pedido_total` decimal(10,2) DEFAULT NULL,
  `pedido_link_boleto` longtext,
  `pedido_status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`pedido_id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela superlogica.pedidos: 0 rows
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
INSERT INTO `pedidos` (`pedido_id`, `pedido_data`, `cliente_id`, `pedido_total`, `pedido_link_boleto`, `pedido_status`) VALUES
	(3, '2019-11-12 05:02:02', 1, 11.10, NULL, 'AGUARDANDO PAGAMENTO'),
	(4, '2019-11-12 05:15:58', 1, 11.10, NULL, 'AGUARDANDO PAGAMENTO'),
	(5, '2019-11-12 05:16:42', 1, 11.10, NULL, 'AGUARDANDO PAGAMENTO'),
	(6, '2019-11-12 05:28:49', 1, 11.10, NULL, 'AGUARDANDO PAGAMENTO'),
	(7, '2019-11-12 05:33:11', 1, 11.10, NULL, 'AGUARDANDO PAGAMENTO'),
	(8, '2019-11-12 05:34:19', 1, 11.10, NULL, 'AGUARDANDO PAGAMENTO'),
	(9, '2019-11-12 05:38:20', 1, 11.10, NULL, 'AGUARDANDO PAGAMENTO'),
	(10, '2019-11-12 05:38:42', 1, 11.10, NULL, 'AGUARDANDO PAGAMENTO'),
	(11, '2019-11-12 05:42:42', 1, 11.10, NULL, 'AGUARDANDO PAGAMENTO'),
	(12, '2019-11-12 06:26:29', 1, 11.10, NULL, 'AGUARDANDO PAGAMENTO'),
	(13, '2019-11-12 06:52:45', 1, 11.10, NULL, 'AGUARDANDO PAGAMENTO'),
	(14, '2019-11-12 06:57:38', 1, 11.10, NULL, 'AGUARDANDO PAGAMENTO'),
	(15, '2019-11-12 06:59:47', 1, 11.10, NULL, 'AGUARDANDO PAGAMENTO'),
	(16, '2019-11-12 07:00:37', 1, 11.10, NULL, 'AGUARDANDO PAGAMENTO'),
	(17, '2019-11-12 07:01:08', 1, 11.10, NULL, 'AGUARDANDO PAGAMENTO'),
	(18, '2019-11-12 07:02:14', 1, 11.10, NULL, 'AGUARDANDO PAGAMENTO'),
	(19, '2019-11-12 07:02:49', 1, 11.10, NULL, 'AGUARDANDO PAGAMENTO'),
	(20, '2019-11-12 07:03:54', 1, 11.10, NULL, 'AGUARDANDO PAGAMENTO'),
	(21, '2019-11-12 07:04:22', 1, 11.10, NULL, 'AGUARDANDO PAGAMENTO'),
	(22, '2019-11-12 07:05:43', 1, 11.10, NULL, 'AGUARDANDO PAGAMENTO'),
	(23, '2019-11-12 07:06:23', 1, 27.01, NULL, 'AGUARDANDO PAGAMENTO'),
	(24, '2019-11-12 07:07:15', 1, 27.01, NULL, 'AGUARDANDO PAGAMENTO'),
	(25, '2019-11-12 07:08:34', 1, 27.01, NULL, 'AGUARDANDO PAGAMENTO'),
	(26, '2019-11-12 07:09:38', 1, 27.01, NULL, 'AGUARDANDO PAGAMENTO'),
	(27, '2019-11-12 07:13:04', 1, 27.01, NULL, 'AGUARDANDO PAGAMENTO'),
	(28, '2019-11-12 07:13:32', 1, 27.01, NULL, 'AGUARDANDO PAGAMENTO'),
	(29, '2019-11-12 07:15:04', 1, 27.01, NULL, 'AGUARDANDO PAGAMENTO'),
	(30, '2019-11-12 07:15:29', 1, 27.01, NULL, 'AGUARDANDO PAGAMENTO'),
	(31, '2019-11-12 07:16:56', 1, 27.01, NULL, 'AGUARDANDO PAGAMENTO'),
	(32, '2019-11-12 07:17:12', 1, 27.01, NULL, 'AGUARDANDO PAGAMENTO'),
	(33, '2019-11-12 07:17:42', 1, 27.01, NULL, 'AGUARDANDO PAGAMENTO'),
	(34, '2019-11-12 07:18:23', 1, 27.01, NULL, 'AGUARDANDO PAGAMENTO'),
	(35, '2019-11-12 07:18:39', 1, 27.01, NULL, 'AGUARDANDO PAGAMENTO'),
	(36, '2019-11-12 07:19:08', 1, 27.01, NULL, 'AGUARDANDO PAGAMENTO'),
	(37, '2019-11-12 07:19:27', 1, 27.01, NULL, 'AGUARDANDO PAGAMENTO'),
	(38, '2019-11-12 07:20:54', 1, 27.01, NULL, 'AGUARDANDO PAGAMENTO'),
	(39, '2019-11-12 07:21:45', 1, 27.01, NULL, 'AGUARDANDO PAGAMENTO'),
	(40, '2019-11-12 07:22:06', 1, 27.01, NULL, 'AGUARDANDO PAGAMENTO'),
	(41, '2019-11-12 07:22:33', 1, 27.01, NULL, 'AGUARDANDO PAGAMENTO'),
	(42, '2019-11-12 07:23:19', 1, 27.01, NULL, 'AGUARDANDO PAGAMENTO'),
	(43, '2019-11-12 07:25:36', 1, 5.00, NULL, 'AGUARDANDO PAGAMENTO'),
	(44, '2019-11-12 07:27:30', 1, 25.05, NULL, 'AGUARDANDO PAGAMENTO');
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;

-- Copiando estrutura para tabela superlogica.pedidos_detalhes
CREATE TABLE IF NOT EXISTS `pedidos_detalhes` (
  `pedido_id` int(11) DEFAULT NULL,
  `detalhe_id` int(11) NOT NULL AUTO_INCREMENT,
  `produto_id` int(11) DEFAULT NULL,
  `produto_desc` varchar(50) DEFAULT NULL,
  `produto_valor` decimal(10,2) DEFAULT NULL,
  `produto_qtde` int(11) DEFAULT '1',
  `produto_subtotal` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`detalhe_id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela superlogica.pedidos_detalhes: 0 rows
/*!40000 ALTER TABLE `pedidos_detalhes` DISABLE KEYS */;
INSERT INTO `pedidos_detalhes` (`pedido_id`, `detalhe_id`, `produto_id`, `produto_desc`, `produto_valor`, `produto_qtde`, `produto_subtotal`) VALUES
	(3, 1, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(4, 2, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(5, 3, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(6, 4, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(7, 5, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(8, 6, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(9, 7, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(10, 8, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(11, 9, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(12, 10, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(13, 11, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(14, 12, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(15, 13, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(16, 14, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(17, 15, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(18, 16, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(19, 17, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(20, 18, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(21, 19, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(22, 20, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(23, 21, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(23, 22, 0, 'Bag - Regular Kraft 20 Lb', 15.91, 1, 15.91),
	(24, 23, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(24, 24, 0, 'Bag - Regular Kraft 20 Lb', 15.91, 1, 15.91),
	(25, 25, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(25, 26, 0, 'Bag - Regular Kraft 20 Lb', 15.91, 1, 15.91),
	(26, 27, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(26, 28, 0, 'Bag - Regular Kraft 20 Lb', 15.91, 1, 15.91),
	(27, 29, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(27, 30, 0, 'Bag - Regular Kraft 20 Lb', 15.91, 1, 15.91),
	(28, 31, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(28, 32, 0, 'Bag - Regular Kraft 20 Lb', 15.91, 1, 15.91),
	(29, 33, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(29, 34, 0, 'Bag - Regular Kraft 20 Lb', 15.91, 1, 15.91),
	(30, 35, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(30, 36, 0, 'Bag - Regular Kraft 20 Lb', 15.91, 1, 15.91),
	(31, 37, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(31, 38, 0, 'Bag - Regular Kraft 20 Lb', 15.91, 1, 15.91),
	(32, 39, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(32, 40, 0, 'Bag - Regular Kraft 20 Lb', 15.91, 1, 15.91),
	(33, 41, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(33, 42, 0, 'Bag - Regular Kraft 20 Lb', 15.91, 1, 15.91),
	(34, 43, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(34, 44, 0, 'Bag - Regular Kraft 20 Lb', 15.91, 1, 15.91),
	(35, 45, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(35, 46, 0, 'Bag - Regular Kraft 20 Lb', 15.91, 1, 15.91),
	(36, 47, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(36, 48, 0, 'Bag - Regular Kraft 20 Lb', 15.91, 1, 15.91),
	(37, 49, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(37, 50, 0, 'Bag - Regular Kraft 20 Lb', 15.91, 1, 15.91),
	(38, 51, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(38, 52, 0, 'Bag - Regular Kraft 20 Lb', 15.91, 1, 15.91),
	(39, 53, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(39, 54, 0, 'Bag - Regular Kraft 20 Lb', 15.91, 1, 15.91),
	(40, 55, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(40, 56, 0, 'Bag - Regular Kraft 20 Lb', 15.91, 1, 15.91),
	(41, 57, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(41, 58, 0, 'Bag - Regular Kraft 20 Lb', 15.91, 1, 15.91),
	(42, 59, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(42, 60, 0, 'Bag - Regular Kraft 20 Lb', 15.91, 1, 15.91),
	(44, 61, 66, 'Apricots Fresh', 6.10, 1, 6.10),
	(44, 62, 0, 'Bread - Frozen Basket Variety', 13.95, 1, 13.95);
/*!40000 ALTER TABLE `pedidos_detalhes` ENABLE KEYS */;

-- Copiando estrutura para tabela superlogica.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `codigoProduto` int(11) NOT NULL AUTO_INCREMENT,
  `descricaoProduto` text NOT NULL,
  `qtdeProduto` int(11) NOT NULL,
  `precoProduto` decimal(4,2) NOT NULL,
  `dataCadastroProduto` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`codigoProduto`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela superlogica.produtos: ~100 rows (aproximadamente)
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` (`codigoProduto`, `descricaoProduto`, `qtdeProduto`, `precoProduto`, `dataCadastroProduto`) VALUES
	(1, 'Lettuce - Sea / Sea Asparagus', 17, 3.05, '2019-11-06 21:34:43'),
	(2, 'Bread - Frozen Basket Variety', 4, 13.95, '2019-11-06 21:34:43'),
	(3, 'Wine - Trimbach Pinot Blanc', 7, 14.43, '2019-11-06 21:34:43'),
	(4, 'Cinnamon - Stick', 20, 13.90, '2019-11-06 21:34:43'),
	(5, 'Mix - Cappucino Cocktail', 9, 12.40, '2019-11-06 21:34:44'),
	(6, 'Rye Special Old', 14, 8.51, '2019-11-06 21:34:44'),
	(7, 'Crab Brie In Phyllo', 13, 12.54, '2019-11-06 21:34:44'),
	(8, 'Yeast Dry - Fleischman', 8, 9.96, '2019-11-06 21:34:44'),
	(9, 'Wine - Two Oceans Sauvignon', 4, 2.30, '2019-11-06 21:34:44'),
	(10, 'Breadfruit', 17, 4.47, '2019-11-06 21:34:44'),
	(11, 'Calypso - Lemonade', 13, 15.18, '2019-11-06 21:34:44'),
	(12, 'Peas Snow', 14, 11.52, '2019-11-06 21:34:44'),
	(13, 'Transfer Sheets', 2, 2.20, '2019-11-06 21:34:44'),
	(14, 'Parsley Italian - Fresh', 16, 14.09, '2019-11-06 21:34:44'),
	(15, 'Ice Cream Bar - Rolo Cone', 17, 9.64, '2019-11-06 21:34:44'),
	(16, 'Truffle Cups - White Paper', 19, 1.19, '2019-11-06 21:34:44'),
	(17, 'Wine - Taylors Reserve', 17, 2.89, '2019-11-06 21:34:44'),
	(18, 'Table Cloth 53x69 White', 20, 17.10, '2019-11-06 21:34:44'),
	(19, 'Chutney Sauce - Mango', 17, 13.27, '2019-11-06 21:34:44'),
	(20, 'Huck White Towels', 17, 5.88, '2019-11-06 21:34:44'),
	(21, 'Carbonated Water - Wildberry', 13, 2.11, '2019-11-06 21:34:44'),
	(22, 'Vinegar - Champagne', 19, 12.37, '2019-11-06 21:34:44'),
	(23, 'Pepper - Green Thai', 10, 11.45, '2019-11-06 21:34:44'),
	(24, 'Cheese - Comte', 20, 8.20, '2019-11-06 21:34:44'),
	(25, 'Turkey - Ground. Lean', 2, 14.98, '2019-11-06 21:34:44'),
	(26, 'Eggplant - Asian', 16, 12.95, '2019-11-06 21:34:44'),
	(27, 'Tray - 16in Rnd Blk', 9, 9.56, '2019-11-06 21:34:44'),
	(28, 'Chickensplit Half', 10, 9.79, '2019-11-06 21:34:44'),
	(29, 'Venison - Ground', 9, 5.00, '2019-11-06 21:34:44'),
	(30, 'Ostrich - Fan Fillet', 5, 4.79, '2019-11-06 21:34:44'),
	(31, 'Cinnamon Buns Sticky', 12, 14.71, '2019-11-06 21:34:44'),
	(32, 'Capers - Pickled', 16, 9.92, '2019-11-06 21:34:44'),
	(33, 'Sponge Cake Mix - Vanilla', 19, 3.90, '2019-11-06 21:34:44'),
	(34, 'Fudge - Cream Fudge', 20, 13.23, '2019-11-06 21:34:44'),
	(35, 'Hersey Shakes', 5, 6.33, '2019-11-06 21:34:44'),
	(36, 'Fish - Artic Char, Cold Smoked', 4, 14.08, '2019-11-06 21:34:44'),
	(37, 'Pur Source', 2, 11.71, '2019-11-06 21:34:44'),
	(38, 'Soup - Campbells Beef Stew', 15, 15.20, '2019-11-06 21:34:44'),
	(39, 'Snapple Lemon Tea', 4, 17.73, '2019-11-06 21:34:44'),
	(40, 'Celery', 18, 9.26, '2019-11-06 21:34:44'),
	(41, 'Chocolate - Feathers', 4, 16.27, '2019-11-06 21:34:44'),
	(42, 'Butter Balls Salted', 17, 4.19, '2019-11-06 21:34:44'),
	(43, 'Butter Balls Salted', 19, 19.45, '2019-11-06 21:34:44'),
	(44, 'Soup Campbells Turkey Veg.', 2, 13.13, '2019-11-06 21:34:44'),
	(45, 'Cherries - Fresh', 1, 2.73, '2019-11-06 21:34:44'),
	(46, 'Pork Ham Prager', 7, 18.55, '2019-11-06 21:34:44'),
	(47, 'Stock - Beef, Brown', 3, 18.48, '2019-11-06 21:34:44'),
	(48, 'English Muffin', 1, 19.37, '2019-11-06 21:34:44'),
	(49, 'Quail - Whole, Bone - In', 19, 15.61, '2019-11-06 21:34:44'),
	(50, 'Pasta - Fusili Tri - Coloured', 15, 3.57, '2019-11-06 21:34:44'),
	(51, 'Soup - Campbells, Beef Barley', 12, 3.06, '2019-11-06 21:34:44'),
	(52, 'Muffin - Mix - Bran And Maple 15l', 13, 9.29, '2019-11-06 21:34:44'),
	(53, 'Zucchini - Yellow', 18, 2.81, '2019-11-06 21:34:44'),
	(54, 'Beer - Sleemans Cream Ale', 5, 12.47, '2019-11-06 21:34:44'),
	(55, 'Beer - Blue', 12, 4.93, '2019-11-06 21:34:44'),
	(56, 'Beef - Salted', 13, 4.83, '2019-11-06 21:34:44'),
	(57, 'Onions - Cooking', 10, 16.70, '2019-11-06 21:34:44'),
	(58, 'Apricots Fresh', 18, 6.10, '2019-11-06 21:34:44'),
	(59, 'Wakami Seaweed', 18, 19.39, '2019-11-06 21:34:44'),
	(60, 'Carbonated Water - Blackcherry', 6, 5.12, '2019-11-06 21:34:44'),
	(61, 'Sprite, Diet - 355ml', 8, 17.72, '2019-11-06 21:34:44'),
	(62, 'Seaweed Green Sheets', 7, 5.17, '2019-11-06 21:34:44'),
	(63, 'Tequila - Sauza Silver', 5, 4.41, '2019-11-06 21:34:44'),
	(64, 'Bag - Regular Kraft 20 Lb', 4, 15.91, '2019-11-06 21:34:44'),
	(65, 'Bread - Italian Roll With Herbs', 7, 7.88, '2019-11-06 21:34:44'),
	(66, 'Corn - Cream, Canned', 19, 15.89, '2019-11-06 21:34:44'),
	(67, 'Squeeze Bottle', 4, 9.96, '2019-11-06 21:34:44'),
	(68, 'Turkey - Oven Roast Breast', 7, 7.18, '2019-11-06 21:34:44'),
	(69, 'Truffle Shells - Semi - Sweet', 14, 3.42, '2019-11-06 21:34:44'),
	(70, 'Pork - Ground', 13, 5.48, '2019-11-06 21:34:44'),
	(71, 'Pastry - Plain Baked Croissant', 6, 1.11, '2019-11-06 21:34:44'),
	(72, 'Rolled Oats', 10, 2.55, '2019-11-06 21:34:44'),
	(73, 'Sandwich Wrap', 17, 16.57, '2019-11-06 21:34:44'),
	(74, 'Trueblue - Blueberry', 12, 1.76, '2019-11-06 21:34:44'),
	(75, 'Water - Aquafina Vitamin', 16, 9.98, '2019-11-06 21:34:44'),
	(76, 'Fireball Whisky', 7, 4.84, '2019-11-06 21:34:44'),
	(77, 'Lettuce - Romaine', 10, 10.92, '2019-11-06 21:34:44'),
	(78, 'Juice - Apple, 341 Ml', 7, 6.15, '2019-11-06 21:34:44'),
	(79, 'Pectin', 2, 17.91, '2019-11-06 21:34:44'),
	(80, 'Cheese - Blue', 19, 18.03, '2019-11-06 21:34:44'),
	(81, 'Pasta - Canelloni, Single Serve', 5, 15.44, '2019-11-06 21:34:44'),
	(82, 'Cheese - Montery Jack', 16, 16.12, '2019-11-06 21:34:44'),
	(83, 'Taro Root', 16, 10.73, '2019-11-06 21:34:44'),
	(84, 'Tomatoes Tear Drop Yellow', 16, 9.76, '2019-11-06 21:34:44'),
	(85, 'Nut - Pine Nuts, Whole', 16, 14.30, '2019-11-06 21:34:44'),
	(86, 'Lid Coffee Cup 8oz Blk', 8, 5.00, '2019-11-06 21:34:44'),
	(87, 'Appetizer - Cheese Bites', 8, 8.72, '2019-11-06 21:34:44'),
	(88, 'Wine - White, Pelee Island', 16, 14.56, '2019-11-06 21:34:44'),
	(89, 'Sauce Bbq Smokey', 7, 3.64, '2019-11-06 21:34:44'),
	(90, 'Hot Choc Vending', 9, 13.93, '2019-11-06 21:34:44'),
	(91, 'Cardamon Seed / Pod', 9, 9.08, '2019-11-06 21:34:44'),
	(92, 'Bar Bran Honey Nut', 14, 13.07, '2019-11-06 21:34:44'),
	(93, 'Irish Cream - Butterscotch', 3, 14.98, '2019-11-06 21:34:44'),
	(94, 'Juice - Grapefruit, 341 Ml', 10, 12.94, '2019-11-06 21:34:44'),
	(95, 'Squash - Butternut', 15, 1.97, '2019-11-06 21:34:44'),
	(96, 'Vegetable - Base', 4, 16.02, '2019-11-06 21:34:44'),
	(97, 'Soup - Campbells Mushroom', 15, 8.05, '2019-11-06 21:34:44'),
	(98, 'Pastry - Banana Tea Loaf', 9, 7.24, '2019-11-06 21:34:44'),
	(99, 'Pork - Ground', 19, 5.18, '2019-11-06 21:34:44'),
	(100, 'Cheese - Manchego, Spanish', 14, 5.16, '2019-11-06 21:34:44');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
