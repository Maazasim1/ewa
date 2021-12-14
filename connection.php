<?php 
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password,"tichkulee");
    
    if(!$con){
        die("Connection failed!". mysqi_connect_error());
    }
?>