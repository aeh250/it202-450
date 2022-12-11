<?php
require_once(__DIR__ . "/../../../lib/functions.php");
error_log("purchase_cart received data: " . var_export($_REQUEST, true));
if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}
$user_id = get_user_id();
$response = ["status" => 400, "message" => "There was a problem completing your purchase"];
http_response_code(400);
if ($user_id > 0) {
    $db = getDB();
    $stmt = $db->prepare("SELECT name, c.id as id ,product_id, desired_quantity, c.unit_price , (c.unit_price*desired_quantity) as subtotal FROM Cart c JOIN Products i on c.product_id = i.id WHERE c.user_id = :uid"); // changed item_id to product_id and changed cost to unit_price twice
    try {
        $stmt->execute([":uid" => $user_id]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //$balance = 0;
        $total_cost = 0;
        foreach ($results as $row) {
            $total_cost += (int)se($row, "subtotal", 0, false);
        }
        if ($total_cost) {
            //can purchase
            $db->beginTransaction();
            $query = "INSERT INTO Orders (user_id, total_price, payment_method, address, money_recived, first_name, last_name VALUES(:user_id, :total_price, :payment_method, :address, :money_recieved, :first_name, :last_name)";//hrere
            $stmt = $db->prepare($query);
            //get next order id
            try {
                //
                $stmt->execute([":uid" => $user_id]);
                $stmt->execute([":uid" => $user_id, ":total_price" => $total_price, ":payment_method" => $payment_method,":adress" => $address,":first_name" => $first_name, ":last_name" => $last_name]);
                $next_order_id= $db->lastInsertId();
            } catch (PDOException $e) {
                error_log("Error fetching order_id: " . var_export($e));
                $db->rollback();
            }
            //deduct product stock
            if ($next_order_id > 0) {
                $stmt = $db->prepare("UPDATE Products
                set stock = stock - (select IFNULL(desired_quantity, 0) FROM Cart WHERE product_id = Products.id and user_id = :uid) 
                WHERE id in (SELECT product_id from Cart where user_id = :uid)");
                try {
                    $stmt->execute([":uid" => $user_id]);
                    //$stmt->execute([":uid" => $user_id, ":total_price" => $total_price, ":payment_method" => $payment_method,":adress" => $address,":first_name" => $first_name, ":last_name" => $last_name]);
                } catch (PDOException $e) {
                    error_log("Update stock error: " . var_export($e, true));
                    $response["message"] = "At least one of your items is low on stock and is unable to be purchased";
                    $db->rollback();
                    $next_order_id = 0; 
                }
            }
            //get cart to order history
            if ($next_order_id > 0) {
                $stmt = $db->prepare("INSERT INTO OrderHistory (order_id, product_id, desired_quantity,user_id, unit_price) 
                SELECT :order_id, product_id, Cart.desired_quantity,user_id, Cart.unit_price FROM Cart JOIN Products on Cart.product_id = Products.id
                 WHERE user_id = :uid");
                try {
                    $stmt->execute([":uid" => $user_id, ":order_id" => $next_order_id]);
                } catch (PDOException $e) {
                    error_log("Error mapping cart data to order history: " . var_export($e, true));
                    $db->rollback();
                    $next_order_id = 0; 
                }
            }
            //update inventory
            if ($next_order_id > 0) {
                $stmt = $db->prepare("INSERT INTO OrderItems (product_id, desired_quantity, user_id)
                SELECT product_id, desired_quantity, user_id FROM Cart WHERE user_id = :uid
                ON DUPLICATE KEY UPDATE OrderItems.desired_quantity = OrderItems.desired_quantity + OrderItems.desired_quantity");
                try {
                    $stmt->execute([":uid" => $user_id]);
                } catch (PDOException $e) {
                    error_log("Error updating user's inventory: " . var_export($e, true));
                    $db->rollback();
                    $next_order_id = 0; 
                }
            }
            //clear the user's cart now that the process is done
            if ($next_order_id > 0) {
                $stmt =  $db->prepare("DELETE from Cart where user_id = :uid");
                try {
                    $stmt->execute([":uid" => $user_id]);
                } catch (PDOException $e) {
                    error_log("Error deleting cart: " . var_export($e, true));
                    $db->rollback();
                    $next_order_id = 0; 
                }
            }
            if ($next_order_id) {

                //deduct points
                //give_gems($total_cost, "purchase", get_user_account_id(), -1, "Spent $total_cost for items in the shop");
                $db->commit(); //confirm pending changes
                $response["status"] = 200;
                http_response_code(200);
                $response["message"] = "Purchase complete";
            } else {
                $response["status"] = 200;
                http_response_code(200);
            }
        } else {
            $response["status"] = 402;
            http_response_code(200);
            $response["message"] = "You can't afford to purchase your cart";
        }
    } catch (PDOException $e) {
        error_log("Error fetching cart" . var_export($e, true));
    }
} else {
    $response["status"] = 403;
    $response["message"] = "You must be logged in to fetch your cart";
    http_response_code(403);
}
echo json_encode($response);