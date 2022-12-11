CREATE TABLE IF NOT EXISTS `Orders`(
    `id`  int auto_increment not null,
    `user_id`    int,
    `total_price` int,
    `created`   timestamp default current_timestamp,
    `payment_method` VARCHAR(100),
    `address` VARCHAR(100) NOT NULL,
    `money_recieved` VARCHAR(100),
    `first_name` VARCHAR(100),
    `last_name` VARCHAR(100),
    PRIMARY KEY (`id`),
    FOREIGN KEY (`user_id`) REFERENCES Users(`id`) -- a user can have more than one order so I want to allow it and not make user_id unique
)

