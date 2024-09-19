<?php
    session_start();
    if ($_SESSION['sesion']){
        echo 'Сессия запущена успешно';
    }else
    if(session_destroy()) {
        header("location: /admin_panel");
    };

    if (isset($_GET['reset'])) {
        if(session_destroy()) {
            header("location: /admin_panel");
        };
    }    

    if (isset($_GET['back'])) {
        header("location: selection");
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/add_cu.css">
    <title>Admins добавление ВУЗов</title> 
</head>
<body>
    <form action="" method="GET" class="rest">
        <div>
            <input class="reset" type="submit" name="reset" value="Сбросить сессию">
        </div>
        <div>
            <input type="submit" class="reset" name="back" value="Вернуться">
        </div>
    </form>
    <form method="GET" action="accept_university" class="form">
        <div class="input">
            <h3>Название ВУЗа:</h3>
            <input class="inp" type="text" name="Name" required>
        </div>
        <div class="input">
            <h3>Ссылка на карту ВУЗа:</h3>
            <input class="inp" type="text" name="maps" required>
        </div>
        <div class="input">
            <h3>Введите поле name=""</h3>
            <input class="inp" type="text" name="name_college" required>    
        </div>
        <input type="submit" value="Добавить" name="submit" class="sub">
    </form>
</body>
</html>