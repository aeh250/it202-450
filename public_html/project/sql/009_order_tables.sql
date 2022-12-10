CREATE TABLE IF NOT EXISTS OrdersTable(
    id int AUTO_INCREMENT PRIMARY KEY,
    item_id int,
    quantity int,
    user_id int,
    total_price int,
    address TEXT,
    Payment_method TEXT,
    money_received TEXT,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES Users(id),
    FOREIGN KEY (item_id) REFERENCES Products(id),
    UNIQUE KEY (item_id, user_id),
    check (quantity >= 0),
    check(quantity <= 1) -- temporary constraint to only allow 1 instance of an item, may remove it to let stacking happen
)