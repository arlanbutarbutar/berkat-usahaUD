<?php 
    $conn=mysqli_connect("localhost","root","","ud_berkat");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }