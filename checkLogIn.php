<?php
session_start();

    $_SESSION['login'] = $_POST['login'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['warning'] = null;


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


    $users = null;
    $result = null;
    $thisUser = null;

    if($num_rows>0){
        header("Location: ./main.php");
        exit;
    }
    else{
        header("Location: ./index.php");
        exit;
    }

?>