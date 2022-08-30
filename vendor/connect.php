<?php

// I make function for connect to my DB
function connect(){
    $connect = mysqli_connect('localhost', 'root', 'root', 'test1' );

    if (!$connect) {
        error_log('Ошибка при подключении: ' . mysqli_connect_error());
    }

    return $connect;
    }

   // connect(); //I called the function to check, it is work correct