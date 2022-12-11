<?php
require(__DIR__ . "/../../partials/nav.php");

$results = [];
$db = getDB();
$stmt = $db->prepare("SELECT id, name, description, category, unit_price, stock FROM Products WHERE visibility = 1 LIMIT 20");
try {
    $stmt->execute();
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    error_log(var_export($e, true));
    flash("Error fetching items", "danger");
}
?>
<script>
      function purchase(item, unit_price) {
        console.log("TODO purchase item", item);
        let example = 1;
        if (example === 1) {
            let http = new XMLHttpRequest();
            http.onreadystatechange = () => {
                if (http.readyState == 4) {
                    if (http.status === 200) {
                        let data = JSON.parse(http.responseText);
                        console.log("received data", data);
                        flash(data.message, "success");
                        refreshBalance();
                    }
                    console.log(http);
                }
            }
            http.open("POST", "api/add_to_cart.php", true);
            let data = {
                product_id: item,
                quantity: 1,
                unit_price: unit_price
            }
            let q = Object.keys(data).map(key => key + '=' + data[key]).join('&');
            console.log(q)
            http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            http.send(q);
        } else if (example === 2) {
            let data = new FormData();
            data.append("product_id", item);
            data.append("quantity", 1);
            data.append("unit_price", unit_price);
            fetch("api/add_to_cart.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded",
                        "X-Requested-With": "XMLHttpRequest",
                    },
                    body: data
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Success:', data);
                    flash(data.message, "success");
                    
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
        } else if (example === 3) {
            $.post("api/add_to_cart.php", {
                    product_id: item,
                    quantity: 1,
                    unit_price: unit_price
                }, (resp, status, xhr) => {
                    console.log(resp, status, xhr);
                    let data = JSON.parse(resp);
                    flash(data.message, "success");
                    
                },
                (xhr, status, error) => {
                    console.log(xhr, status, error);
                });
        }
        //TODO create JS helper to update all show-balance elements
    }
</script>
<?php

//note we need to go up 1 more directory

require_once(__DIR__ . "/../../partials/nav.php");



$results = [];
$db = getDB();
//Sort and Filters
$col = se($_GET, "col", "unit_price", false);
//allowed list
if (!in_array($col, ["unit_price", "stock", "name", "created"])) {
    $col = "unit_price"; //default value, prevent sql injection
}
$order = se($_GET, "order", "asc", false);
$results = [];
$db = getDB();
$stmt = $db->prepare("SELECT id, name, description, unit_price, stock, category FROM Products WHERE stock > 0 LIMIT 10");
try {
    $stmt->execute();
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    error_log(var_export($e, true));
    flash("Error fetching items", "danger");
}

//allowed list
if (!in_array($order, ["asc", "desc"])) {
    $order = "asc"; //default value, prevent sql injection
}
$name = se($_GET, "name", "", false);

$Category = se($_GET, "category", "laptop","ipad", false);
if (!in_array($Category, ["laptop", "ipad"])) {
    $Category = "laptop"; //default value, prevent sql injection
}



//split query into data and total
$base_query = "SELECT id, name, description, unit_price,category, stock FROM Products";
$total_query = "SELECT count(1) as total FROM Products";
//dynamic query
$query = " WHERE 1=1"; //1=1 shortcut to conditionally build AND clauses
$params = []; //define default params, add keys as needed and pass to execute
//apply name filter
if (!empty($name)) {
    $query .= " AND name like :name";
    $params[":name"] = "%$name%";
}
//apply column and order sort
if (!empty($col) && !empty($order)) {
    $query .= " ORDER BY $col $order"; //be sure you trust these values, I validate via the in_array checks above
}
if(!empty($aRatingRange))
{
        $rateArr = explode(" ", $aRatingRange);
        if(count($rateArr) >= 3)
        {
            $rate_1 = $rateArr[0];
            $rate_2 = $rateArr[2];
            array_push($whereQuery,"average_rating BETWEEN :rate_1 AND :rate_2");
            $params[":rate_1"] = $rate_1;
            $params[":rate_2"] = $rate_2;
        }
}//get the total

$stmt = $db->prepare($total_query . $query);
$total = 0;
try {
    $stmt->execute($params);
    $r = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($r) {
        $total = (int)se($r, "total", 0, false);
    }
} catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}
?>
<form class="row row-cols-auto g-3 align-items-center">
        <div class="col">
            <div class="input-group">
                <div class="input-group-text">Name</div>
                <input class="form-control" name="name" value="<?php se($name); ?>" />
            </div>
        </div>
        <div class="col">
            <div class="input-group">
                <div class="input-group-text">Sort</div>
                <!-- make sure these match the in_array filter above-->
                <select class="form-control" name="col" value="<?php se($col); ?>">
                    <option value="cost">cost</option>
                    <option value="stock">Stock</option>
                    <option value="name">Name</option>
                    <option value="created">Created</option>
                    <option value="avg_rateing">Rate</option>
                </select>
                <script>
                    //quick fix to ensure proper value is selected since
                    //value setting only works after the options are defined and php has the value set prior
                    document.forms[0].col.value = "<?php se($col); ?>";
                </script>
                <select class="form-control" name="order" value="<?php se($order); ?>">
                    <option value="asc">Low</option>
                    <option value="desc">High</option>
                </select>
                <div class="input-group-text">Category</div>
                <select  class="form-control" value="<?php se($Category); ?>">
                <option value="laptop">laptop</option>
                <option value="ipad">ipad</option>

                <script>
                    document.forms[0].category.value = "<?php se($Category); ?>";

                </script>

                </select>
                <script>
                    //quick fix to ensure proper value is selected since
                    //value setting only works after the options are defined and php has the value set prior
                    document.forms[0].order.value = "<?php se($order); ?>";
                </script>
            </div>
        </div>
        <div class="col"><br>
            <div class="input-group">
                <input type="submit" class="btn btn-primary" value="Apply" />
            </div>
        </div>
    </form>
<?php
//paginate function
$per_page = 5; //setup how many items on a page
paginate($total_query . $query, $params, $per_page);
//get the total
/* this comment block has been replaced by paginate()
//get the total
$stmt = $db->prepare($total_query . $query);
$total = 0;
try {
    $stmt->execute($params);
    $r = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($r) {
        $total = (int)se($r, "total", 0, false);
    }
} catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}
//apply the pagination (the pagination stuff will be moved to reusable pieces later)
$page = se($_GET, "page", 1, false); //default to page 1 (human readable number)
$per_page = 3; //how many items to show per page (hint, this could also be something the user can change via a dropdown or similar)
$offset = ($page - 1) * $per_page;
end commented out coded moved to paginate()*/
$query .= " LIMIT :offset, :count";
$params[":offset"] = $offset;
$params[":count"] = $per_page;
//get the records
$stmt = $db->prepare($base_query . $query); //dynamically generated query
//we'll want to convert this to use bindValue so ensure they're integers so lets map our array
foreach ($params as $key => $value) {
    $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
    $stmt->bindValue($key, $value, $type);
}
$params = null; //set it to null to avoid issues


//$stmt = $db->prepare("SELECT id, name, description, cost, stock, image FROM Items WHERE stock > 0 LIMIT 50");
try {
    $stmt->execute($params); //dynamically populated params to bind
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    error_log(var_export($e, true));
    flash("Error fetching items", "danger");
}
?>

<div class="container-fluid">
    <h1>Shop</h1>
    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php foreach ($results as $item) : ?>
            <div class="col">
                <div class="card bg-light">
                    <div class="card-header">
                        Products
                    </div>
                    
                    <div class="card-body">
                        <h5 class="card-title">Name: <?php se($item, "name"); ?></h5>
                        <p class="card-text">Description: <?php se($item, "description"); ?></p>
                        <p class="card-text">Stock:  <?php se($item, "stock"); ?></p>
                    </div>
                    <div class="card-footer">
                    unit_price: <?php se($item, "unit_price"); ?>
                        <form method="POST" action="cart.php">
                            <input type="hidden" name="product_id" value="<?php se($item, "id");?>"/>
                            <input type="hidden" name="action" value="add"/>
                            <input type="number" name="desired_quantity" value="1" min="1"/>
                            <input type="submit" class="btn btn-primary" value="Add to Cart"/>
                            <button><a href="preview_details.php?id=<?php se($item, "id"); ?>">View</a></button>
                            <button><a href="rate.php?id=<?php se($item, "id"); ?>">Rate This Product</a></button>
                        
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="mt-3">
                <?php /* added pagination */ ?>
                <?php require(__DIR__ . "/../../partials/pagination.php"); ?>
            </div>
        </div>
<div class="col-4" style="min-width:90em">
            <?php require(__DIR__ . "/../Project/cart.php"); ?>
        </div>
    </div>
</div>
<?php
require(__DIR__ . "/../../partials/footer.php");
?>