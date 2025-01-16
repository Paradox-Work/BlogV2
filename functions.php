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
function returnHome($location = "/") {
    header("Location: $location", 302);
    exit();
    }
?>