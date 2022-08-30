<?php
    session_start();
    require_once 'connect.php' ;
    require_once 'function.php';
    // Add session and function connect, I hope it is work
    //addNewUser('$full_name', '$login', '$email', '$password', '$password_confirm');

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    addNewUser('$full_name', '$login', '$email', '$password', '$password_confirm');






/*
     function addNewUser(... $users){
        $full_name = $_POST['full_name'];
        $login = $_POST['login'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_confirm = $_POST['password_confirm'];

        if ($password === $password_confirm) {
            //continue
            $password = md5($password);

            mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`) VALUES (NULL, '$full_name', '$login', '$email', '$password')");

            $_SESSION['message'] = 'Реєстрація пройшла успішно';
            header('Location: ../index.php');

        } else {
            $_SESSION['message'] = 'Паролі не співпали'; // Message - которий вирішили передати
            //Якщо паролі не співпали точерез $_SESSION ми передаємо те повідомлення яке створили, $_SESSION - по своєї суті це масив
            header('Location: ../register.php');
            // Пишемо путь для переносу на сторінку котра нам потрібна, щоб повідомлення з'являлось на тій же сторінці Реєстрації
        }

        //addNewUser('$full_name', '$login', '$email', '$password', '$password_confirm');
    }

Dos`t work */
