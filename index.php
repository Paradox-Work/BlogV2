<?php 
require "functions.php";
require "Database.php";
$config = require ("config.php");
echo "<link rel='stylesheet' href='style.css'>";
echo"woaw<br>";

$db= new Database($config["database"]);

$comments = $db->query('SELECT * FROM comments')->fetchAll();
//$posts = $db->query('SELECT * FROM post');
//$user = $db->query('SELECT * FROM users WHERE user_id = $id');
//dabut bloga ierakstus
//Searchbar:
//SELECT * FROM comments WHERE Content LIKE 
//Next shit is important casue i needed a search bar in the same file though it didnt work to make it here
if (isset($_GET["search_query"]) && $_GET["search_query"] != ""){
     
};
echo "<ul>";
foreach ($comments as $post) {
    echo " <li> ID: " . $post['ID'] . "<br> Content: " . $post['Content'] . "</li>";
}
dd($comments);
echo "</ul>";
//meklesanas forma
//ec
echo    "<form>";
echo    "<input name='search_query'/>";
echo    "<button>Search</button>";
echo    "</form>";