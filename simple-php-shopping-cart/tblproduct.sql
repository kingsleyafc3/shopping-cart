CREATE TABLE IF NOT EXISTS `tblproduct` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`code`)
)

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'BASKETBALL', 'b1', 'product-images/basketball1.jpg', 29.99),
(2, 'SHOES', 'b2', 'product-images/basketball2.jpg', 109.99),
(3, 'JERSEY', 'b3', 'product-images/basketball3.jpeg', 49.99),
(4, 'SHORTS', 'b4', 'product-images/basketball4.jpeg', 39.99),
(5, 'SHOCKS', 'b5', 'product-images/basketball5.jpeg', 18.99),
(6, 'HOOP', 'b6', 'product-images/basketball6.png', 299.99),
(7, 'NET', 'b7', 'product-images/basketball7.jpg', 99.99);

