CREATE TABLE IF NOT EXISTS `Orders`(
    `id`  int auto_increment not null,
    `user_id`    int,
    `total_price` int,
    `created`   timestamp default current_timestamp,
    `payment_method` VARCHAR(100),
    `address` VARCHAR(100) NOT NULL,
    
    PRIMARY KEY (`id`),
    FOREIGN KEY (`user_id`) REFERENCES Users(`id`) -- a user can have more than one order so I want to allow it and not make user_id unique
)

 /*(id, user_id, created, total_price, address, payment_method, money_received, first_name, last_name)