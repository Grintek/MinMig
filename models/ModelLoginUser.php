<?php

class ModelLoginUser extends Model{



    public function get_data()
    {
        $link = $this->link;
        if (isset($_POST['login'])) {
            $login = $_POST['login'];
            if ($login == '') {
                exit ("Введите логин!");
            }
        }
        if (isset($_POST['password'])){
            $password = $_POST['password'];
            if ($password == '') {
                unset($password);
                exit ("Ввудите пароль");
            }
        }
        $login = stripslashes($login);
        $login = htmlspecialchars($login);
        $password = stripslashes($password);
        $password = htmlspecialchars($password);

        $login = trim($login);
        $password = trim($password);
        $password = md5($password);//шифруем пароль
        $user = mysqli_query($link, "SELECT id FROM users WHERE login='$login' AND password='$password'");
        $id_user = mysqli_fetch_array($user);
        if (empty($id_user['id'])){
            exit ("Извините, ввуденный вами логин или пароль неверный.");
        }
        else {
            $_SESSION['password'] = $password;
            $_SESSION['login'] = $login;
            $_SESSION['id'] = $id_user;
        }

    }

}
