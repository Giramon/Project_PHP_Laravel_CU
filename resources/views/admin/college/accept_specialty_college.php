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


    $con = mysqli_connect("localhost","root","","college_university");
    
    $sql = "SELECT * FROM `college`";
    $all_categories = mysqli_query($con,$sql);
 
    if(isset($_GET['submit']))
    {

        $name = mysqli_real_escape_string($con,$_GET['Product_name']);
       
        $id = mysqli_real_escape_string($con,$_GET['Category']); 

        $links = mysqli_real_escape_string($con,$_GET['Links']); 
       
        $sql_insert = 
        "INSERT INTO `college_specialty`(`product_name`, `category_name`, `links`)
            VALUES ('$name','$id','$links')";
         
          if(mysqli_query($con,$sql_insert))
        {
            echo '<script>alert("Product added successfully")</script>';
        }
        header("location: add_specialty_college");
    }
?>