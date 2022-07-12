<?php 

include "db/db_dischi.php";
    
  var_dump($response);

header("Content-Type: application/json");
echo json_encode($response);
?>