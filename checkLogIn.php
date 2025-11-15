<?php
    try {
        $users = new PDO('mysql:host=MySQL-8.4;port=3306;dbname=kursach', "root");
    }
    catch (PDOException $e){
        echo "Не робит ни чё", $e;
    }

    $inputLogin = $_POST['login'];
    $inputPassword = $_POST['password'];


    $thisUser = "SELECT * FROM users WHERE login = '$inputLogin' AND password = '$inputPassword'";

    $result = $users->query($thisUser);
    $num_rows = $result->rowCount();
    if($num_rows>0){
        header("Location: ./main.php");
    }
    else{
        header("Location: ./index.php");
        echo '<script>alert("Введённые данные не верные");</script>';
    }









?>