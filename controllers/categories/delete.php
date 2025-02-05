<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Assuming the ID is passed via POST data
    $id = $_POST['ID']; // Ensure 'ID' is in the POST data
    
    // Prepare the SQL query
    $sql = "DELETE FROM comments WHERE ID = :ID";
    
    // Prepare the parameters
    $params = [":ID" => $id];
    
    // Execute the query
    $db->query($sql, $params);  
}
returnHome2(null);
?>