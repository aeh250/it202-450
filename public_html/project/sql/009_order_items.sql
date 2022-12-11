CREATE TABLE IF NOT EXISTS `OrderItems`(
    `id` int AUTO_INCREMENT PRIMARY KEY,
    `order_id` int,
    `product_id` int,
    `desired_quantity` int, 
    `unit_price` INT DEFAULT 999,
    `created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `modified` TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    FOREIGN KEY (product_id) REFERENCES Products(id),
    FOREIGN KEY (order_id) REFERENCES Orders(id)
)
