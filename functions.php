<?php 
//Dump n Die
function dd($data){
    echo"<pre>";
    echo json_encode($data, JSON_PRETTY_PRINT);
    echo"</pre>";
    die();//kill  codoo
};
function redirectIfNotFound($location = "/") {
http_response_code(404);
header("Location: $location", 302);
exit();
}
function redirectIfNotFound2($location = "categories/") {
    http_response_code(404);
    header("Location: $location", 302);
    exit();
    }
//-------------------------------------------------
function returnHome($postID = null, $resourceName = "/") {
    if (!$postID) {
        header("Location: " . $resourceName, true, 302); // Redirect to main page if no ID is provided
        exit();
    }

    $location = $resourceName . "show?ID=" . urlencode($postID);
    header("Location: $location", true, 302);
    exit();
}
?>