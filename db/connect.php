<?php
    $connect = mysqli_connect("localhost","root","", "db_perfums");

    if(!$connect){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>