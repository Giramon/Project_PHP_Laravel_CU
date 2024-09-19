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

    $con = mysqli_connect("localhost","root","","college_university");
    
    $sql = "SELECT * FROM `college`";
    $all_categories = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/add_specialty.css">
    <title>Admins Колледж специальности</title> 
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
    <form method="GET" action="accept_specialty_college" class="form">
        <div class="input">
            <h3>Название специальности:</h3>
            <input type="text" class="inp" name="Product_name" required>
        </div>
        <div class="input">
        <h3>Ссылка на специальность</h3>
        <input type="text" class="inp" name="Links" required>
        </div>
        <div class="input">
            <h3>Выбери колледж</h3>
            <select name="Category">
                <?php while ($category = mysqli_fetch_array($all_categories,MYSQLI_ASSOC)):;?>
                    <option value="<?php echo $category["Name"];?>">
                        <?php echo $category["Name"];?>
                    </option>
                <?php endwhile;?>
            </select>
        </div>
        <input type="submit" value="Добавить спец" name="submit" class="sub">
    </form>
</body>
</html>