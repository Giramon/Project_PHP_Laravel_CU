<?php

    $con = mysqli_connect("localhost","root","","college_university");
    
    $sql = "SELECT * FROM `university`";
    $all_categories = mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/list_all.css">
    <title>ВУЗы</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <a href="/"><img src="/images/return.png" alt="return"></a>
            </div>
            <div class="nav">
                <ul>
                    <li><a href="#" class="active">ВУЗы</a></li>
                    <li><a href="list_all_college" target="_self">Колледжи</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <?php 
                while ($category = mysqli_fetch_array(
                $all_categories,MYSQLI_ASSOC)):; 
            ?>
                <div class="element">
                    <form action="output_university" method="GET">
                        <h2><?php echo $category["Name"];?></h2>
                        <iframe src="https://yandex.ru/map-widget/v1/?um=<?php echo $category["maps"];?>;source=constructor" width="500" height="500" frameborder="0"></iframe>
                        <h3>Нажмите чтобы посмотреть специальности:</h3>
                        <input type="submit" value="Перейти" name="<?php echo $category["name_college"];?>">
                    </form>
                </div>
            <?php endwhile;?>
        </div>
    </main>
    <footer>
        <div class="container">

        </div>
    </footer>
</body>
</html>