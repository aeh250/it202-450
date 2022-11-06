CREATE TABLE IF NOT EXISTS Cart (
    id int AUTO_INCREMENT PRIMARY KEY,
    item_id int,
    quantity int,
    category TEXT,
    user_id int,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES Users(id),
    FOREIGN KEY (item_id) REFERENCES Products(id),
    unit_price INT DEFAULT 999,
    UNIQUE KEY (user_id, item_id),
    check(quantity > 0)
)
