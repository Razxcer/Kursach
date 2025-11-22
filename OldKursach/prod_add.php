<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная-тест добавления</title>
    <link rel="stylesheet" href="./css/style_add.css?<?echo time();?>">
    <link rel="stylesheet" href="./css/styleHead.css?<?echo time();?>">
    
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

    <div class="Add_place">


        <div class="About">
        
            <div id="img">Картинку сюда!</div>

            <div class="infoGame">
            <input type="text" name="NameNewGame" id="NameNewGame" class="input_text" placeholder="Название игры">
            <input type="text" name="PriceNewGame" id="PriceNewGame" class="input_text" placeholder="Цена игры">
            <input list="AgeLimitList" type="text" name="AgeLimitNewGame" id="AgeLimitNewGame" class="input_text" placeholder="Возрастной лимит">
            </div>
        </div>


        <div class="Genres">
            <p>Жанры:</p>

            <div class="checkGenre">
                <input type="checkbox" name="action" id="action">
                <label for="action">Экшн</label>
            </div>

            <div class="checkGenre">
                <input type="checkbox" name="RPG" id="RPG">
                <label for="RPG">RPG</label>
            </div>

            <div class="checkGenre">
                <input type="checkbox" name="strategy" id="strategy">
                <label for="strategy">Стратегии</label>
            </div>

            <div class="checkGenre">
                <input type="checkbox" name="simulator" id="simulator">
                <label for="simulator">Симуляторы</label>
            </div>

            <div class="checkGenre">
                <input type="checkbox" name="Adventures" id="Adventures">
                <label for="Adventures">Приключения</label>
            </div>

            <div class="checkGenre">
                <input type="checkbox" name="Puzzle" id="Puzzle">
                <label for="Puzzle">Головоломки</label>
            </div>

            <div class="checkGenre">
                <input type="checkbox" name="Race" id="Race">
                <label for="Race">Гонки</label>
            </div>

            <div class="checkGenre">
                <input type="checkbox" name="Horror" id="Horror">
                <label for="Horror">Хоррор</label>
            </div>

            <div class="checkGenre">
                <input type="checkbox" name="Sandboxes" id="Sandboxes">
                <label for="Sandboxes">Песочницы</label>
            </div>

            <div class="checkGenre">
                <input type="checkbox" name="MOBA" id="MOBA">
                <label for="MOBA">MOBA</label>
            </div>

            <div class="checkGenre">
                <input type="checkbox" name="BattleRoyale" id="BattleRoyale">
                <label for="BattleRoyale">Королевские битвы</label>
            </div>

        </div>

                   

                <!-- <input type="text" name="CreatorNewGame" id="CreatorNewGame" class="input_text" placeholder="Создатель игры">
                <input type="text" name="PublisherNewGame" id="PublisherNewGame" class="input_text" placeholder="Издатель игры">
                <input type="date" name="DateCreateNewGame" id="DateCreateNewGame" class="input_text" placeholder="Дата создания">
                <form action="main.php" method="POST" id="FormAdd">
                <input type="submit" value="Добавить новую игру" class="input_Sub">
                </form> -->
    </div>

    
    
    
    <div class="AdminPanel"></div>





    <datalist id="AgeLimitList">
        <option value="0+"></option>
        <option value="6+"></option>
        <option value="12+"></option>
        <option value="16+"></option>
        <option value="18+"></option>
    </datalist>

</div>

</body>
</html>