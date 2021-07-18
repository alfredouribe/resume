<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "cv";

    $conn = new mysqli($servername, $username, $password, $database);

    if($conn->connect_error){
        $results["status"] = "error";
        $results["message"] = "Error connecting to database.";
        echo json_encode($result);
        die();
    }else{
        $results["status"] = "OK";
        $results["message"] = "Database connected";

    }
?>