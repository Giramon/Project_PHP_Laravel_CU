<?php

    session_start();
    if ($_SESSION['sesion']){
        echo 'Сессия запущена успешно';
    }else
    if(session_destroy()) {
        header("location: ../autoreg_add_specialty_university.html");
    };
    error_reporting(0);

    $msg = "";


    $con = mysqli_connect("localhost","root","","college_university");
    
    $sql = "SELECT * FROM `university`";
    $all_categories = mysqli_query($con,$sql);
 
    if(isset($_POST['submit']))
    {

        $name = mysqli_real_escape_string($con,$_POST['Product_name']);
       
        $id = mysqli_real_escape_string($con,$_POST['Category']); 

        $links = mysqli_real_escape_string($con,$_POST['Links']); 
       
        $sql_insert = 
        "INSERT INTO `university_specialty`(`product_name`, `category_name`,`links`)VALUES ('$name','$id','$links')";
         
        if(mysqli_query($con,$sql_insert))
        {
            echo '<script>alert("Product added successfully")</script>';
        }
        header("location: add_specialty_university.php");
    }
?>