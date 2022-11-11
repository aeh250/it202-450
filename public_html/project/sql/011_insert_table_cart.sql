INSERT INTO Cart (product_id, user_id, unit_cost) VALUES
(1, 25, 7.71)
ON DUPLICATE KEY UPDATE desired_quantity = desired_quantity + 1;