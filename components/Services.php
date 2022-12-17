<?php

function getData(){
    require 'config.php';
    $result = mysqli_query($conn, "SELECT * FROM Prouducttb");

    if(mysqli_num_rows($result)>0){
        return $result;
    }
  }

?>