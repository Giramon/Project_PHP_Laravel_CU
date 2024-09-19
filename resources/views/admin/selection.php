<?php
    session_start();
    if ($_SESSION['sesion']){
        echo 'Сессия запущена успешно';
    } else {
        header("location: /admin_panel");
    }
    if (isset($_GET['reset'])) {
        if(session_destroy()) {
            header("location: /admin_panel");
        };
    }
    if (isset($_GET['add_college'])) {
        header("location: add_college");
    }
    if (isset($_GET['add_university'])) {
        header("location: add_university");
    }
    if (isset($_GET['add_specialty_college'])) {
        header("location: add_specialty_college");
    }
    if (isset($_GET['add_specialty_university'])) {
        header("location: add_specialty_university");
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/add_cu.css">
    <title>Выбор</title>
</head>
<body>
    <form action="" method="GET" class="rest">
        <div class="select">
            <div class="res">
                <input class="reset" type="submit" name="reset" value="Сбросить сессию">
            </div>
            <div class="add_c">
                <input class="reset" type="submit" name="add_college" value="Добавить колледж">
            </div>
            <div class="add_u">
                <input class="reset" type="submit" name="add_university" value="Добавить вуз">
            </div>
            <div class="add_s_c">
                <input class="reset" type="submit" name="add_specialty_college" value="Добавить спец кол">
            </div>
            <div class="add_s_u">
                <input class="reset" type="submit" name="add_specialty_university" value="Добавить спец вуз">
            </div>
        </div>
    </form>
</body>
</html>