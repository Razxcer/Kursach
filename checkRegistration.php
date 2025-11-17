<?php
    session_start();




    $_SESSION['login'] = $_POST['login'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['password2'] = $_POST['password2'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['warning'] = null;




    
    if($_POST['password'] == "" || $_POST['password2'] == "" || $_POST['login']=="" ||  $_POST['email'] == "")
    {
        $_SESSION['warning'] = "Введите ВСЕ данные!";
        header("Location: ./registration.php");
        exit;
    }
    else if($_POST['password'] != $_POST['password2'])
    {
        $_SESSION['warning'] = "Введёные пароли не совпадают!";
        header("Location: ./registration.php");
        exit;
    }
    else{

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

    }



?>