<?php

    require(__DIR__ . "/../../partials/nav.php");
?>

<?php
$query="DELETE FROM Cart WHERE user_id = :uid";
$db = getDB();
$stmt = $db->prepare($query);
    try{
        $stmt->bindValue(":uid", get_user_id(), PDO::PARAM_INT);
        $stmt->execute();
        flash("Your Cart is cleared");
    }catch (PDOException $e){
        error_log(var_export($e, true));
        flash("Whole Cart is Cleared", "danger");
    }
    die(header("Location: shop.php"));

?>
  