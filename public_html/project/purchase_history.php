<?php
require_once(__DIR__ . "/../../partials/nav.php");

if (!is_logged_in()) {
    flash  ("You must have to login to see your cart");
    die(header("Location: login.php"));
}
?>


<?php

$results = [];
$db = getDB();
$stmt = $db->prepare("SELECT user_id, total_price,address,payment_method FROM Orders WHERE user_id = :uid");
$user_id = get_user_id();
$stmt->execute([":uid"=>$user_id]);
try {
    $stmt->execute();
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}
?>
<table>
    <thead>
        <th>User ID &emsp;</th>
        <th>Total Cost&emsp;</th>
        <th> Shipping Address&emsp;</th>
        <th>Payment Method &emsp;</th>
       
        
</thead>
<tbody>
<?php if (empty($results)) : ?>
            <tr>
                <td colspan="100%"><br>&emsp;&emsp;&emsp;&emsp;Sorry No item found</td>
            </tr>
        <?php else : ?>
            <?php foreach ($results as $role) : ?>
                <tr>
                <td><?php se($role, "user_id"); ?></td>
                    <td><?php se($role, "total_cost"); ?></td>
                    <td><?php se($role, "address"); ?></td>
                    <td><?php se($role, "payment_method"); ?></td>
                    
            <td>
            <form method="POST">
           
           
       
           
                        </form>
            </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>



        <?php
$results = [];
$db = getDB();
$stmt = $db->prepare("SELECT id FROM OrderItems");
try {
    $stmt->execute();
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}


?>
        <?php foreach ($results as $item) :?>
            
           
                    <div class="card-body">
                        <p class="card-title">  <?php se($item, "id","" , false); ?></p>
                    </div>
                    </div>
                    <?php endforeach; ?>
                    </div>
    <?php
    
    $n = se ($item, "id","",false)-1;

    
    ?>


<?php
$rrr = [];
$db = getDB();
$stmt = $db->prepare("SELECT order_id , item_id , quantity FROM OrderItems WHERE order_id = $n  ");
try {
    $stmt->execute();
    $rr = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $rrr = $rr;
    }
} catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}
?>

<table>
    <thead>
        <th>Order ID &emsp;</th>
        <th>Product ID&emsp;</th>
        <th> Quantity &emsp;</th>
     
       
        
</thead>
<tbody>
<?php if (empty($rrr)) : ?>
            <tr>
                <td colspan="100%"><br>&emsp;&emsp;&emsp;&emsp;Sorry No item found</td>
            </tr>
        <?php else : ?>
            <?php foreach ($rrr as $rol) : ?>
                <tr>
                <td><?php se($rol, "order_id"); ?></td>
                    <td><?php se($rol, "item_id"); ?></td>
                    <td><?php se($rol, "quantity"); ?></td>
                   
                    
            <td>
                   
            </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>

        
        <b><a href="<?php echo get_url('rate.php'); ?>" > Click here to give Feedback </a> </b>