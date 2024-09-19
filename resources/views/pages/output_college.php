<?php

    $con = mysqli_connect("localhost","root","","college_university");

    if (isset($_GET['midis'])) {
        $sql = " SELECT * FROM `college_specialty` WHERE category_name='МИДиС'";
        $result = $con->query($sql);
    }
    if (isset($_GET['chuk'])) {
        $sql = " SELECT * FROM `college_specialty` WHERE category_name='ЧЮК'";
        $result = $con->query($sql);
    }
    if (isset($_GET['progress'])) {
        $sql = " SELECT * FROM `college_specialty` WHERE category_name='Прогресс'";
        $result = $con->query($sql);
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/output_cu.css">
    <title>Специальности</title>
</head>
<body>
    <div class="all">
        <div class="logo">
            <a href="list_all_college"><img src="/images/return.png" alt="return"></a>
        </div>
        <div class="start_text">
            <h2>На данной странице показаны все специальности Колледжа, с которого вы перешли</h2>
        </div>
    </div>
    <div class="php_text">
        <?php while($users=$result->fetch_assoc()){	?>
            <div class="container">
                <div class="elems">
                    <div class="element">
                        <h3><a target="_blanck" href="<?php echo $users['links'];?>"><?php echo $users['product_name'];?></a></h3>
                    </div>
                </div>
            </div>
	    <?php }	?>
    </div>
</body>
</html>