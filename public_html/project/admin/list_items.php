<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../../partials/nav.php");
$TABLE_NAME = "Products";
if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: $BASE_PATH/home.php"));
}

$results = [];

if (isset($_POST["itemName"])) {//from itemName to name
    $db = getDB();
    $stmt = $db->prepare("SELECT id, name, description, stock, category, unit_price, visibility from Products WHERE name like :name LIMIT 10");
    try { 
        $stmt->execute([":name" => "%" . $_POST["itemName"] . "%"]);// from itemName to name and i changed line 31 also under name=''
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            $results = $r;
        }
    } catch (PDOException $e) {
        error_log(var_export($e, true));
        flash("Error fetching records", "danger");
    }
}
?>
<div class="container-fluid">
    <h1>List Products</h1>
    <form method="POST" class="row row-cols-lg-auto g-3 align-items-center">
        <div class="input-group mb-3">
            <input class="form-control" type="search" name="itemName" placeholder="Item Filter" />  
            <input class="btn btn-primary" type="submit" value="Search"/>
        </div>
    </form>
    <form method="POST" class="row row-cols-lg-auto g-3 align-items-center">
        <div class="input-group">
            <input class="form-control" type="number" id="stockToCheck" name="stockToCheck">
            <input type="submit" class="btn btn-primary" value="Check Stock">
        </div>
    </form>
    <?php if (count($results) == 0) : ?>
        <p>No results to show</p>
    <?php else : ?>
        <table class="table table-bordered border-primary">
            <?php foreach ($results as $index => $record) : ?>
                <?php if ($index == 0) : ?>
                    <thead>
                        <?php foreach ($record as $column => $value) : ?>
                            <th><?php se($column); ?></th>
                        <?php endforeach; ?>
                        <th>Actions</th>
                    </thead>
                <?php endif; ?>
                <tr>
                    <?php foreach ($record as $column => $value) : ?>
                        <td><?php se($value, null, "N/A"); ?></td>
                    <?php endforeach; ?>
                    <td>
                        <a class="btn btn-primary" href="edit_item.php?id=<?php se($record, "id"); ?>">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <?php require(__DIR__ . "/../../../partials/pagination.php"); ?>
    <?php endif; ?>
</div>
<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../../partials/flash.php");
?>