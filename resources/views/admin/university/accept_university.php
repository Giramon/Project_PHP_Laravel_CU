<?php

    session_start();
    if ($_SESSION['sesion']){
        echo 'Сессия запущена успешно';
    }else
    if(session_destroy()) {
        header("location: /admin_panel");
    };
    error_reporting(0);

    $msg = "";
    
 
    if(isset($_GET['submit']))
    {

        $Name = $_GET["Name"];
        $maps = $_GET["maps"];
        $name_college = $_GET["name_college"];

        $con = mysqli_connect("localhost","root","","college_university");

        $sql = "INSERT INTO university (Name,maps,name_college) VALUES ('$Name','$maps','$name_college')";
    
        // Execute query
        mysqli_query($con, $sql);

        header("location: add_university");
    }
?>