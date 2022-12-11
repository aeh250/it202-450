CREATE TABLE IF NOT EXISTS `Products`(
    `id` int AUTO_INCREMENT PRIMARY  KEY,
    name varchar(30) UNIQUE, -- alternatively you'd have a SKU that's unique
    description text,
    `category` TEXT,
    `stock` int DEFAULT  0,
    `visibility` BOOLEAN DEFAULT false,
    `created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `modified` TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    `unit_price` INT DEFAULT 999,
    check (stock >= 0), -- don't allow negative stock; I don't allow backorders
    check (unit_price >= 0) -- don't allow negative costs
)
