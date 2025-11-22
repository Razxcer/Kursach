<?php session_start(); ?>
<?php session_destroy(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="./css/style_main.css?<?echo time();?>">
    <link rel="stylesheet" href="./css/styleHead.css?<?echo time();?>">
    <script src="./js/burgerActive.js?<?echo time();?>"></script>
</head>
<body>
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

    <div class="wrapper">

        <div id="menu">

        </div>



        <div class="main">

            <nav>



                <ul class="spisok">

                <?php
                    try {
                        $products = new PDO('mysql:host=MySQL-8.4;port=3306;dbname=kursach', "root");
                    }
                    catch (PDOException $e){
                        echo "Не робит ни чё", $e;
                    }

                    // С этого места пользуемся соединением...
                    $allProds = "SELECT * FROM products";
                    if($result = $products->query($allProds)){
                        foreach($result as $row){
                            echo '
                                <li class="spisok_element">
                                    <a class="aboutProdLink"><img src="';
                            echo $row['imageURL'];
                            echo '" alt="Картинка"></a>
                                    <p class="nameofGame">';
                            echo $row['name'];
                            echo '</p>
                                    <div class="priceAndBuy">
                                        <p class="price">';
                            echo $row['price'];
                            echo ' руб</p>
                                        <button class="buy">
                                            <p>Купить</p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                                            </svg>
                                        </button>
                                    </div>                       
                                </li>';
                        }
                    }

                    // ...а здесь соединение больше не требуется; закрываем канал 
                    $products = null;
                    $allProds = null;

                ?>

                    
                   



                


                    <!-- Пример -->

                    <!-- <li class="spisok_element">                 
                        <img src="./product/in-construct.png" alt="">
                        <p class="nameofGame">Dota Plus</p>
                        <div class="priceAndBuy">
                            <p class="price">3000 руб</p>
                            <button class="buy">
                                <p>Купить</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                                </svg>
                            </button>
                        </div>                       
                    </li> -->
                
            </nav>




        </div>

<!-- 
    <form action="prod_add.php" method="POST">
    <input type="submit" value="Переход на добавление игры">
    </form>  
    <a href="index.php">Глянуть на Вход и Регистрацию</a>

    </div> -->





    
</body>
</html>