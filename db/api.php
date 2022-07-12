<?php 

//i will use require here
require "db_dischi.php";
    

header("Content-Type: application/json");
echo json_encode($response);
?>