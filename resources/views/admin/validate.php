<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD']=='GET') {
        $login = $_GET['login'];
        $password = $_GET['password'];
        $con=mysqli_connect('localhost','root','','fmv');
        $con->set_charset('utf8');
        if($con) {
            $sql="SELECT * FROM `autoriz` WHERE login = '$login' AND password = '$password'";
            $con->set_charset('utf8');
            $result = mysqli_query($con,$sql);
            if (mysqli_num_rows($result)==1) {
                echo "hello";
                $_SESSION['sesion']  = true;
                if ($_SESSION['sesion']){
                    header('location: selection');
                }else echo 'Отсутсвует сессия';
            }
            else {
                echo "Отсутствует пользователь";
            }
        } else {
            die(mysqli_error($con));
        }
    }
?>