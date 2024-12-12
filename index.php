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


echo "<ul>";
foreach ($comments as $post) {
    echo " <li> ID: " . $post['ID'] . "<br> Content: " . $post['Content'] . "</li>";
}
dd($comments);
echo "</ul>";
