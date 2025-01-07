<?php
require "functions.php";
require "Database.php";
$config = require ("config.php");
echo "<link rel='stylesheet' href='style.css'>";
$db= new Database($config["database"]);
echo "<form method='GET' action=''>";
echo "<input type='text' name='search_query'/>"; 
echo "<button type='submit'>Search</button>";
echo "</form>";
$sql="SELECT * FROM categories";
$params = [];
if (isset($_GET["search_query"]) && $_GET["search_query"] != ""){
     //TODO 
     $search_query = "%" . $_GET["search_query"] . "%";
      $sql .= " WHERE category_name LIKE :search_query;";
     $params = ["search_query" => $search_query];
    }
     $categories = $db->query($sql, $params)->fetchAll();



echo "<ul>";
foreach ($categories as $post) {
    echo " <li> ID: " . $post['ID'] . "<br> Content: " . $post['category_name'] . "</li>";
}

echo "</ul>";