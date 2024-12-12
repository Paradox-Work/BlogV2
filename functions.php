<?php 
//Dump n Die
function dd($data){
    echo"<pre>";
    echo json_encode($data, JSON_PRETTY_PRINT);
    echo"</pre>";
    die();//kill  codoo
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $Username= htmlspecialchars($_POST["input1"]);
    $Password=htmlspecialchars($_POST["input2"]);
}
?>