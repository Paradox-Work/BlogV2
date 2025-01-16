<?php
require "Validator.php";
// Initialize an empty array to store potential error messages


// Check if the form was submitted using the POST method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    // Get the length of the "content" input field

    // Validate the "content" field:
    // 1. Check if it's not set (missing in the POST data) OR
    // 2. Check if it's empty (length is 0) OR
    // 3. Check if its length exceeds 50 characters
    if (!Validator::string($_POST["content"], max: 50)) {
        // Add an error message to the $errors array if any of the conditions are true
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
        // Translation: "The content must be entered and cannot be longer than 50 characters"
    }

    // If there are no errors, proceed to insert the content into the database
    if (empty($errors)) {
        // SQL query to insert the "content" into the "comments" table
        $sql = "INSERT INTO comments (Content) VALUES (:content)";
        
        // Prepare the parameters for the SQL query
        $params = ["content" => $_POST["content"]];
        
        // Execute the query with the provided parameters
        $db->query($sql, $params);
        
        // Redirect the user back to the homepage (assumes returnHome() is a defined function)
        returnHome();
    }
}
// Include the view file for the "create post" form
require "views/posts/create.view.php";
?>