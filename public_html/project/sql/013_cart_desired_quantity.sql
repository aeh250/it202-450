INSERT INTO Cart (product_id, user_id, unit_cost) VALUES
ON DUPLICATE KEY UPDATE desired_quantity = desired_quantity + 1;