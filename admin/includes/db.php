<?php
    // // error_reporting(0);

    // $db['hostName'] = "localhost";
    // $db['userName'] = "root";
    // $db['password'] = "";
    // $db['db_name'] = "cms";

    // foreach($db as $key => $value){
        
    //     define(strtoupper($key), $value);
    // }

    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $db_name = "resultalertsystem";
    
    $connect = mysqli_connect($hostName, $userName, $password, $db_name);
    
    if(!$connect) {
        die("Ooops!!! : " . mysqli_connect_error($connect));
    }

?>