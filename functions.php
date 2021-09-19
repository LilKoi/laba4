<?php
include "connect.php";
if(isset($_POST['rec'])) {
    $userId = $_SESSION["user"]['id'];
    $user = R::findOne("users", "id = ?", array($userId));
    $password = $_POST["password"];
    if (!password_verify($password, $user["password"])) {
        die('старый пароль не верный');
    }
    $newPassword = $_POST["new-password"];
    $newPasswordArray = str_split($newPassword);
    foreach($newPasswordArray as $index => $sbl) {
        foreach($newPasswordArray as $index2 => $sbl2) {
            if(($sbl == $sbl2) and ($index != $index2)) {
                die("символы в новом пароле повторяются");
            }
        }
    }
    $user->password = password_hash($newPassword, PASSWORD_DEFAULT);
    R::store($user);
    die("старый пароль был изменён на новый");
}

if (isset($_POST['reg'])) {
    $login = $_POST["login"];
    $password = $_POST["password"];
    $user = R::dispense('users');
    $user->login = $login;
    $user->password = password_hash($password, PASSWORD_DEFAULT);
    $user = R::store($user);
    $_SESSION["user"] = $user;
    die("Вы зарегистрировались");
}
if(isset($_POST["auth"])) {
    $login = $_POST["login"];
    $password = $_POST["password"];
    $user = R::findOne("users", "login = ?", array($login));
    if($user) {
        if(password_verify($password,$user['password'])) {
            $_SESSION["user"] = [
                'id' => $user["id"],
                "login" => $user["login"],
            ];
            die("вы авторизовались");
        }
    }else{
        die("Не верный логин и пароль");
    }
}
