<?php

    if($_POST['password'] != $_POST['password2'])
    {
        header("Location: ./registration.php");
        exit;
    }

    try {
        $users = new PDO('mysql:host=MySQL-8.4;port=3306;dbname=kursach', "root");
    }
    catch (PDOException $e){
        echo "Не робит ни чё", $e;
    }

    $inputLogin = $_POST['login'];
    $inputPassword = $_POST['password'];
    $inputEmail = $_POST['email'];


    $thisUser = "SELECT * FROM users WHERE login = '$inputLogin' AND password = '$inputPassword'";

    $result = $users->query($thisUser);
    $num_rows = $result->rowCount();

    if($num_rows==0){

        $newStr = $users->query("INSERT INTO users (login, password, email) VALUES ('$inputLogin', $inputPassword, '$inputEmail');");
        header("Location: ./main.php");
        exit;
    }
    else{
        header("Location: ./index.php");
        exit;
    }   





?>