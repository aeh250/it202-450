<?php
//safety checks to ensure "valid" data
if (!isset($total_pages)) {
    $total_pages = 1;
}
if (!isset($page)) {
    $page = 1;
}
function persistQueryString($page)
{
    //set the query param for easily building
    $_GET["page"] = $page;
    //https://www.php.net/manual/en/function.http-build-query.php
    return http_build_query($_GET);
}
?>
<nav aria-label="Generic Pagination">
    <ul class="pagination">
        <li class="page-item <?php echo ($page - 1) < 1 ? "disabled" : ""; ?>">
            <a class="page-link" href="?<?php se(persistQueryString($page - 1)); ?>" tabindex="-1">Previous</a>
        </li><!-- user cannot click on the Prev button when on page = 1-->
        <?php for ($i = 0; $i < $total_pages; $i++) : ?>
            <li class="page-item <?php echo ($page - 1) == $i ? "active" : ""; ?>"><a class="page-link" href="?<?php se(persistQueryString($i + 1)); ?>"><?php echo ($i + 1); ?></a></li>
        <?php endfor; ?>
        <li class="page-item <?php echo ($page) >= $total_pages ? "disabled" : ""; ?>">
            <a class="page-link" href="?<?php se(persistQueryString($page + 1)); ?>">Next</a>
        </li><!-- user cannot click on Next button when page = total_pages-->
    </ul>
</nav>