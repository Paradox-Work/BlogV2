<?php
// Ensure $db is initialized in router.php before including this controller

// Define the SQL query for fetching categories
$sql = "SELECT * FROM categories";
$params = [];

// Check if there's a search query in the URL
if (isset($_GET["search_query"]) && $_GET["search_query"] != "") {
    $search_query = "%" . $_GET["search_query"] . "%";
    $sql .= " WHERE category_name LIKE :search_query";
    $params = ["search_query" => $search_query];
}

// Execute the query and fetch categories
$categories = $db->query($sql, $params)->fetchAll();

// Pass the data to the view
require "views/categories.view.php";
