<?php 
require "functions.php";
require "Database.php";

// Load configuration and initialize database
$config = require "config.php";
$db = new Database($config["database"]);
require "router.php";
    ?>