<?php
// Ensure this file only deals with the logic for the homepage
$sql = "SELECT comments.*, categories.category_name FROM comments
        LEFT JOIN categories ON comments.category_id = categories.id
        WHERE 1";  // This is a placeholder for the WHERE condition

$params = [];

if (isset($_GET["search_query"]) && $_GET["search_query"] != "") {
    $search_query = "%" . $_GET["search_query"] . "%";
    $sql .= " AND comments.Content LIKE :search_query";  // Add search filter to the WHERE
    $params["search_query"] = $search_query;  // Add the search query to params
}


$comments = $db->query($sql, $params)->fetchAll(); // Fetch all the comments matching the query
$pageTitle = "Daily Bugle"; // Set the title for the homepage
require "views/categories/index.view.php";