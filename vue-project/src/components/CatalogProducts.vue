<script setup>

</script>

<template>

<div class="wrap">

<ul class="catalog">

    <li class="catalog-element" v-for="value in 20">
        <a class="link-prod">
            <img src="../products/Battlefield6.jpg" alt="Картинка">
        </a>
        <p class="name-game">Battlefield6</p>
        <div class="priceAndBuy">
            <p class="price">5600 руб</p>
            <button class="buy">
                <p>Купить</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                </svg>
            </button>
        </div>                       
    </li>

</ul>


</div>

</template>


<style scoped>

.wrap{
    display: flex;
}

.catalog{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    width: 100%;
}

.catalog-element{
    width: 400px;
    height: 280px;
    background-color:var(--color-background-soft);
    list-style: none;
    border-radius: 0 0 1.1em 1.1em;
    margin-bottom: 30px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items:start;
    box-shadow: 0px 0px 3px 0.5px var(--color-text);
}

.catalog-element>a{
    width: 100%;
    height: 70%;
}

.catalog-element img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.catalog-element>.name-game{
    width: 100%;
    align-content: center;
    text-align: center;
    color: var(--color-text);
    font-size: 1.5em;
    font-weight: bold;
    text-shadow: 0.7px 0.7px 0.5px var(--color-text);
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

.catalog-element>.priceAndBuy{
    width: 100%;
    display: flex;
    justify-content: space-around;
    margin-bottom: 10px;
}

.priceAndBuy>.price{
    width: 45%;
    align-content: center;
    text-align: center;
    color: var(--third-color);
    font-size: 1.4em;
    font-weight: bold;
}

.priceAndBuy>.buy{
    width: 40%;
    border: none;
    border-radius: 1.5em;
    font-size: 20px;
    background-color: var(--fourth-color);
    color: var(--first-color);
    font-family:Arial, Helvetica, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 0.3s;
     /* box-shadow: 0px 0px 3px 2px solid var(--fourth-color); */
}

.buy:hover{
    cursor: pointer;
    transition: 0.3s;
    transform: scale(1.1);
}

.buy>svg{
    display: none;
}

.buy>p{
    display: block;
    font-weight: bold;
}




</style>