<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GroomRoom</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="data:;base64,=">
    <script defer src="js/main.js" ></script>
</head>
<body>
    <?php
    include 'nav.php';
    nav(2)
    ?>
    <div class="register">
        <form action="registretion.php" class="form" method="POST" id="regform">
            <input type="text" placeholder="ФИО" name="fio" required id="fio" class="validate">
            <input type="text" placeholder="Логин" name="login" required class="validate" id="login">
            <input type="email" placeholder="email" name="mail" required class="validate">
            <input type="password" placeholder="Пароль" name="password" required class="validate" id="password">
            <input type="password" placeholder="Повтор пароля" name="confirm" required class="validate" id="confirm">
            <label><input type="checkbox" id="pd">Согласие на обработку ПД</label>
            <button>Зарегистрироваться</button>
            <p id="error" class="error"></p>
        </form>

    </div>
</body>
</html>