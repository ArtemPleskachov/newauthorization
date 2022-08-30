<?php
    session_start();
    require_once 'connect.php';
    connect();


// 1) Register new user
    function addNewUser($full_name, $login, $email, $password, $password_confirm){
        if ($password === $password_confirm) {

            $password = md5($password);
            global $connect;
            mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`) VALUES (NULL, '$full_name', '$login', '$email', '$password')" );
        }

    }
          #####################
          #  I hid the sessions because they didn't let me switch to register.php
          ###################
//            $_SESSION['message'] = 'Реєстрація пройшла успішно';
//            header('Location: ../index.php');

//        } else {
//            $_SESSION['message'] = 'Паролі не співпали'; // Message - которий вирішили передати
//            //Якщо паролі не співпали точерез $_SESSION ми передаємо те повідомлення яке створили, $_SESSION - по своєї суті це масив
//            header('Location: ../register.php');
//            // Пишемо путь для переносу на сторінку котра нам потрібна, щоб повідомлення з'являлось на тій же сторінці Реєстрації

