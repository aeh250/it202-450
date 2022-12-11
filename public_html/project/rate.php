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
$stmt = $db->prepare("SELECT product_id FROM OrderItems");
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
                        <p class="card-title">  <?php se($item, "product_id","" , false); ?></p>
                    </div>
                    </div>
                    <?php endforeach; ?>
                    </div>
  
<div class="container-fluid">
    <h1>Give Feedback </h1>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label" for="rating">How many Stars? </label><br>
            <br><input class="form-control" type="text" id="rating" name="rating" required /><br>
        </div>
        <div class="mb-3"><br>
            <label class="form-label" for="comment">Comment </label><br>
            <br> <input class="form-control" type="text" name="comment" required  /><br>
        
        <br><input type="submit" class="mt-3 btn btn-primary" value="submit" />
    </form>
</div>

<?php
$results = [];
$db = getDB();
$stmt = $db->prepare("SELECT user_id FROM Orders");
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
                        <p class="card-title">  <?php se($item, "user_id","" , false); ?></p>
                    </div>
                    </div>
                    <?php endforeach; ?>
                    </div>
    <?php
    
    $nn = se ($item, "user_id","", false);

    
    ?>


<?php
if (isset($_POST["rating"]) && $_POST["comment"]){
    $rating = se($_POST, "rating" , "" , false);
    $comment = se($_POST, "comment" , "" , false);
    
$hasError = true;
 if ($hasError)
 {
    $db = getDB();
    $stmt = $db -> prepare("INSERT INTO Ratings(product_id,user_id,rating,comment) VALUE (:product_id, :user_id,:rating,:comment)");
    try 
    {
        $stmt->execute([":product_id"=> $n,":user_id"=>$nn,":rating"=>$rating,":comment"=>$comment]);
        
    }
    catch (PDOException $e) {
        if ($e->errorInfo[1] === 1062) {
            flash("Something is wrong, please try later", "warning");
        } else {
            flash(var_export($e->errorInfo, true), "danger");
        }
    }

    


 }
 

}



