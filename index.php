<?php 
require "functions.php";
require "Database.php";
$config = require ("config.php");
echo "<link rel='stylesheet' href='style.css'>";
echo"woaw<br>";

$db= new Database($config["database"]);


//$posts = $db->query('SELECT * FROM post');
//$user = $db->query('SELECT * FROM users WHERE user_id = $id');
//dabut bloga ierakstus
//Searchbar:
//
//Next shit is important casue i needed a search bar in the same file though it didnt work to make it here
// Search form
echo "<form method='GET' action=''>";
echo "<input type='text' name='search_query'/>"; 
echo "<button type='submit'>Search</button>";
echo "</form>";
$sql="SELECT * FROM comments";
$params = [];
if (isset($_GET["search_query"]) && $_GET["search_query"] != ""){
     //TODO 
     $search_query = "%" . $_GET["search_query"] . "%";
      $sql .= " WHERE content LIKE :search_query;";
     $params = ["search_query" => $search_query];
    }
     $comments = $db->query($sql, $params)->fetchAll();



echo "<ul>";
foreach ($comments as $post) {
    echo " <li> ID: " . $post['ID'] . "<br> Content: " . $post['Content'] . "</li>";
}

echo "</ul>";
//meklesanas forma
//ec
