<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="flex">
            <h1>Регистрация</h1>
            <form action="functions.php" method="POST">
                <div>
                    <span>Логин</span>
                    <input name="login" id="reg-login">
                </div>
                <div>
                    <span>Пароль</span>
                    <input name="password" id="reg-password">
                </div>
                <button name="reg">Зарегистрироваться</button>
            </form>
        </div>
        <div class="flex">
            <h1>Авторизация</h1>
            <form action="functions.php" method="POST">
                <div>
                    <span>Логин</span>
                    <input name="login" id="auth-login">
                </div>
                <div>
                    <span>Пароль</span>
                    <input name="password" id="auth-password">
                </div>
                <button name="auth">Авторизоваться</button>
            </form> 
        </div>
        <div class="flex">
            <h1>Смена пароля</h1>
            <form action="functions.php" method="POST">
                <div>
                    <span>Старый пароль</span>
                    <input name="password" id="rec-password">
                </div>
                <div>
                    <span>Новый пароль</span>
                    <input name="new-password" id="rec-new-password">
                </div>
                <button name="rec">Сменить пароль</button>
            </form> 
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>