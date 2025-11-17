<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style_LogIn.css?<?echo time();?>">
    <link rel="stylesheet" href="./css/styleHead.css?<?echo time();?>">
    <title>Авторизация</title>
</head>
<body>
    

    <div class="wrapper">

        <div id="shapka">

            <div id="burger">
                <span id="span1"></span>
                <span id="span2"></span>
                <span id="span3"></span>
            </div>

            <a href="./main.php" id="logoLink">
                <div id="logo"><p>XZ</p></div>
            </a>

            <div class="poisk">
                <input type="text" name="Search" id="Search" placeholder="Поиск">
                <button>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                </svg>
                </button>
            </div>

            <div class="head_icon dropdown_icon" id="like">
                <button class="head_button dropdown_button" id="like_button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                    </svg>
                    <p>Избранное</p>
                </button>
            
                <div class="dropdown_content">
                    <div>
                        <a href="#">Чтото</a>  
                        <a href="#">Чтото</a>  
                        <a href="#">Чтото</a>  
                        <a href="#">Чтото</a>  
                        <a href="#">Чтото</a>
                    </div>
                </div>
            </div>

            <div class="head_icon dropdown_icon basket">
                <button class="head_button dropdown_button" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket2-fill" viewBox="0 0 16 16">
                    <path d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0zm4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1"/>
                    </svg>
                    <p>Корзина</p>
                </button>
            
                <div class="dropdown_content">
                    <div>
                        <a href="#">Чтото</a>  
                        <a href="#">Чтото</a>  
                        <a href="#">Чтото</a>  
                        <a href="#">Чтото</a>  
                        <a href="#">Чтото</a>
                    </div>
                </div>
            </div>

             <div class="head_icon dropdown_icon profile">
                <a href="./index.php">                                               <!--Пока что так-->
                <button class="head_button dropdown_button" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
                    <p>Войти</p>
                </button>
                </a>
            
                <div class="dropdown_content">
                    <div>
                        <a href="#">Аккаунт</a>  
                        <a href="#">Покупки</a>  
                        <a href="#">Настройки</a>  
                        <a href="#">Выйти</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="withoutShapka">

            <div class="LogIn">
                
                <form action="checkRegistration.php" method="post">
                    <div class="title"><p>Регистрация</p></div>
                    <input type="email" name="email" id="email" class="input email" placeholder="Email" maxlength="100" value = <?php echo isset($_SESSION['email'])?$_SESSION['email']:""; ?>>
                    <input type="text" name="login" id="login" class="input login" placeholder="Логин" minlength="2" maxlength="40" value = <?php echo isset($_SESSION['login'])?$_SESSION['login']:""; ?>>
                    <input type="password" name="password" id="password" class="input password" placeholder="Пароль" minlength="6" maxlength="100" value = <?php echo isset($_SESSION['password'])?$_SESSION['password']:""; ?>>  
                    <input type="password" name="password2" id="password2" class="input password2" placeholder="Повторите пароль" minlength="6" maxlength="100" value = <?php echo isset($_SESSION['password2'])?$_SESSION['password2']:""; ?>>
                    <input type="submit" value="Зарегистрироваться" class="submit" id="reg">
                </form>
            </div>
        </div>

    </div>
    <div class="footer">

    </div>

    <?php 
    if (isset($_SESSION['warning']))
    {
    echo '<script>alert("';
    echo $_SESSION['warning'];
    echo '")</script>';
    }
    ?>

</body>
</html>