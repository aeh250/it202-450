<?php
require_once(__DIR__ . "/../../../lib/functions.php");
error_log("get_inventory received data: " . var_export($_REQUEST, true));
if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}
$response = ["status" => 400, "message" => "Unhandled error"];
http_response_code(400);
if (is_logged_in()) {
    $db = getDB();
    /**item_id int,
    quantity int, */
    $stmt = $db->prepare("SELECT item_id, quantity, name, description FROM OrderItems inv JOIN Products items on inv.item_id = items.id where inv.user_id = :uid and inv.quantity > 0");
        $stmt->execute([":uid" => get_user_id()]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $response["message"] = "Retrieved inventory";
        if ($results) {
            $response["status"] = 200;
            $response["items"] = $results;
            

        } else {
            $response["status"] = 200;
            $response["items"] = [];
            
        }
 
} else {
    $response["status"] = 403;
    http_response_code(403);
    $response["message"] = "Must be logged in to fetch inventory";
}
error_log("Response: " . var_export($response, true));
echo json_encode($response);
?>
<div class="card-text">
            <table class="table">
                <?php if(count($results) == 0): ?>
                    <p>No results to show</p>
                <?php else : ?>
                    <?php foreach ($results as $index => $record) : ?>
                        <?php if ($index == 0) : ?>
                            <thead>
                                <?php foreach ($record as $column => $value) : ?>
                                    <th><?php se($column); ?></th>
                                <?php endforeach; ?>
                            </thead>
                        <?php endif; ?>
                        <tr>
                            <?php foreach ($record as $column => $value) : ?>
                                <td><?php se($value, null, "N/A"); ?></td>
                            <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
            </table>
        <?php endif; ?>
        </table>
        </div>
