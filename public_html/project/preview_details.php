<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../partials/nav.php");
$TABLE_NAME = "Products";

/*update the item
if (isset($_POST["submit"])) {
    if (update_data($TABLE_NAME, $_GET["id"], $_POST)) {
        flash("Updated item", "success");
    }
}
*/
//get the table definition
$result = [];
$columns = get_columns($TABLE_NAME);
//echo "<pre>" . var_export($columns, true) . "</pre>";
$ignore = [ "item_id", "category", "quantity" ];
$db = getDB();
//get the item
$id = se($_GET, "id", 1, false);
$stmt = $db->prepare("SELECT * FROM $TABLE_NAME where id =:id");
try {
    $stmt->execute([":id" => $id]);
    $r = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($r) {
        $result = $r;
    }
} catch (PDOException $e) {
    error_log(var_export($e, true));
    flash("Error looking up record", "danger");
}
//uses the fetched columns to map via input_map()
function map_column($col)
{
    global $columns;
    foreach ($columns as $c) {
        if ($c["Field"] === $col) {
            return input_map($c["Type"]);
        }
    }
    return "text";
}
?>

<div class="container-fluid">
    <h1>Product Details</h1>
    <div>
        

        <?php if (se($result, "image", "", false)) : ?>
            <img src="<?php se($result, "image"); ?>" class="card-img-top" alt="...">
        <?php endif; ?>
        <?php se($result, "name"); ?>
        <?php se($result, "description"); ?>
        <?php se($result, "category"); ?>
        Cost of the product $<?php se($result, "cost"); ?>


    </div>
    
</div>

<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../partials/footer.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rate This Product</title>
    <meta name="viewport" content="width=device-width">
    <style>
        .star{
          color: gold;
          font-size: 2.0rem;
          padding: 0 1rem; /* space out the stars */
        }
        .star::before{
          content: '\2606';    /* star outline */
          cursor: pointer;
        }
        .star.rated::before{
          /* the style for a selected star */
          content: '\2605';  /* filled star */
        }
        
        .stars{
            counter-reset: rateme 0;   
            font-size: 2.0rem;
            font-weight: 900;
        }
        .star.rated{
            counter-increment: rateme 1;
        }
        .stars::after{
            content: counter(rateme) '/5';
        }
    </style>
</head>
<body>
    
    <h1>Rate This Product</h1>
    <div class="stars" data-rating="3">
        <span class="star">&nbsp;</span>
        <span class="star">&nbsp;</span>
        <span class="star">&nbsp;</span>
        <span class="star">&nbsp;</span>
        <span class="star">&nbsp;</span>
    </div>
    <p>Thank you for Rating.</p>
    
    
    <script>
        
        //initial setup
        document.addEventListener('DOMContentLoaded', function(){
            let stars = document.querySelectorAll('.star');
            stars.forEach(function(star){
                star.addEventListener('click', setRating); 
            });
            
            let rating = parseInt(document.querySelector('.stars').getAttribute('data-rating'));
            let target = stars[rating - 1];
            target.dispatchEvent(new MouseEvent('click'));
        });

        function setRating(ev){
            let span = ev.currentTarget;
            let stars = document.querySelectorAll('.star');
            let match = false;
            let num = 0;
            stars.forEach(function(star, index){
                if(match){
                    star.classList.remove('rated');
                }else{
                    star.classList.add('rated');
                }
                //are we currently looking at the span that was clicked
                if(star === span){
                    match = true;
                    num = index + 1;
                }
            });
            document.querySelector('.stars').setAttribute('data-rating', num);
        }
        
//initial setup
document.addEventListener('DOMContentLoaded', function(){
  addListeners();
  setRating(); //based on value inside the div
});

function addListeners(){
  var stars = document.querySelectorAll('.star');
  [].forEach.call(stars, function(star, index){
    star.addEventListener('click', (function(idx){
      console.log('adding rating on', index);
      document.querySelector('.stars').setAttribute('data-rating',  idx + 1);  
      console.log('Rating is now', idx+1);
      setRating();
    }).bind(window,index) );
  });
  
}

function setRating(){
  var stars = document.querySelectorAll('.star');
  var rating = parseInt( document.querySelector('.stars').getAttribute('data-rating') );
  [].forEach.call(stars, function(star, index){
    if(rating > index){
      star.classList.add('rated');
      console.log('added rated on', index );
    }else{
      star.classList.remove('rated');
      console.log('removed rated on', index );
    }
  });
}
    </script>
</body>
</html>
