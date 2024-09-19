<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/autoreg.css">
    <title>Авторизация добавить Колледж</title>
</head>
<body>
    <main>
        <div class="form_container">
            <form method="GET" action="validate" enctype="multipart/form-data">
                <div class="inputs">
                    <input class="inp" type="text" name="login" required placeholder="log">
                </div>
                <div class="inputs">
                    <input class="inp" type="text" name="password" required placeholder="pas">
                </div>
                <div class="inputs">
                    <input class="sub" type="submit" name="submit">
                </div>
            </form>
        </div>
    </main>
</body>
</html>