<?php

session_start();

require "classes/utils.php";
require "classes/components.php";

Components::pageHeader("Books", ["main"], []);

?>

<form method="GET" action="<?php echo $_SERVER["PHP_SELF"] ?>" class="form form-row">
    <input type="search" name="search" placeholder="Search" class="centred-input" value="<?php

    if (isset($_GET["search"]) && $_GET["search"] != "") {
        echo Utils::escape($_GET["search"]);
    }

    ?>">

    <div class="row-all">
        <label>Category</label>
        <select name="category">
            <option value="All">All</option>
            <option value="Paperback"
            <?php

            if (isset($_GET["category"]) && $_GET["category"] == "Paperback") {
                echo "selected";
            }

            ?>
            >Paperback</option>

            <option value="Hardback"
            <?php

            if (isset($_GET["category"]) && $_GET["category"] == "Hardback") {
                echo "selected";
            }

            ?>
            >Hardback</option>
        </select>

        <label>Sort</label>
        <select name="sortField">
            <option value="title">Title</option>
            <option value="price"
            <?php

            if (isset($_GET["sortField"]) && $_GET["sortField"] == "price") {
                echo "selected";
            }

            ?>
            >Price</option>
        </select>

        <select name="sortBy">
            <option value="ASC">Ascending</option>
            <option value="DESC"
            <?php

            if (isset($_GET["sortBy"]) && $_GET["sortBy"] == "DESC") {
                echo "selected";
            }

            ?>
            >Descending</option>
        </select>
    </div>

    <input type="submit" name="filterSubmit" value="Apply" class="button">
</form>

<?php

require "classes/books.php";

$heading = "All";
$queryParams = $paramsArray = [];
$queryParams["sortField"] = $_GET["sortField"] ?? "title";
$queryParams["sortBy"] = $_GET["sortBy"] ?? "ASC";

if (
    isset($_GET["category"]) &&
    in_array($_GET["category"], ["Paperback", "Hardback"])
) {
    $queryParams["category"] = $_GET["category"];
    array_push($paramsArray, $_GET["category"]);
    $heading .= " " . Utils::escape($_GET["category"]);
}

$heading .= " Books";

if (isset($_GET["search"]) && $_GET["search"] != "") {
    $queryParams["searchTerm"] = $_GET["search"];
    // Add wildcards to search term to make it more flexible
    array_push($paramsArray, "%" . $_GET["search"] . "%");
    $heading .= " Containing \"" . Utils::escape($_GET["search"]) . "\"";
}

$books = Books::getBooks(SQL::getBooksWithParams($queryParams), $paramsArray);

?>

<h2><?php echo $heading; ?></h2>

<div class="grid">
    <?php Components::displayBooks($books); ?>
</div>

<?php

Components::pageFooter();

?>